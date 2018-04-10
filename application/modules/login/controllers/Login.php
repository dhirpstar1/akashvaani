<?php namespace GoCart\Controller;
/** 
 * Login Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Login
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Login extends Front {

    var $customer;

    public function __construct()
    {
        parent::__construct();
        $this->customer = \CI::Login()->customer();
    }

	public function socilalogin(){
	 \CI::load()->library('Facebook');
	  \CI::load()->library('Googleplus');

	if(\CI::uri()->segment(2) == 'facebooklogin'){

  			 $userId = \CI::facebook()->getUser();
		   if($userId){
		  			 $user = \CI::facebook()->api('/me',array('fields' => 'id,email,first_name,last_name,birthday,picture.type(large),gender'));
			}
			$save['firstname'] 		= $user['first_name'];
			$save['lastname']  		= $user['last_name'];
            $save['email']		 	= $user['email'];	
			$save['gender']		 	= $user['gender'];		
	}
	
	
	if(\CI::uri()->segment(2) == 'googlelogin'){
				
			\CI::googleplus()->getAuthenticate();
			$user = \CI::googleplus()->getUserInfo();	
			$save['firstname'] 		= $user['given_name'];
			$save['lastname']  		= $user['family_name'];
            $save['email']		 	= $user['email'];		
		}
				
				
	if(!$this->check_email($user['email']))	
		{
		\CI::Login()->AutologinCustomer($user['email']);
		}else{
		 	
			$save['id'] = false;
			$save['group_id'] = 3;
            $save['company'] = '';
            $save['active'] = (bool)config_item('new_customer_status');         
            $save['password']  = sha1('123456');
			 \CI::Customers()->save($save);
            // save the customer info and get their new id
		 
            //send the registration email          
			\GoCart\Emails::registration($save);
				//lets automatically log them in
			\CI::Login()->AutologinCustomer($save['email']);
		}
		redirect('/my-account');
}

	

    public function login($redirect= '/my-account/dashboard')
    {
		//error_reporting(4);
		 \CI::load()->library('facebook');
		  \CI::load()->library('Googleplus');
	
		
		//find out if they're already logged in
        if (\CI::Login()->isLoggedIn(false, false))
        {

            redirect($redirect);
        }
	
        \CI::load()->library('form_validation');
        \CI::form_validation()->set_rules('email', 'lang:address_email', ['trim','required','valid_email']);
        \CI::form_validation()->set_rules('password', 'Password', ['required', ['check_login_callable', function($str){
            $email = \CI::input()->post('email');
            $password = \CI::input()->post('password');
            $remember = \CI::input()->post('remember');
            $login = \CI::Login()->loginCustomer($email, sha1($password), $remember);

            if(!$login)
            {
            				\CI::form_validation()->set_message('check_login_callable', lang('login_failed'));
                return false;
            }
        }]]);


        if (\CI::form_validation()->run() == FALSE)
        {
		
		$vars['facebook_login_url'] = \CI::facebook()->getLoginUrl(array('redirect_uri' => site_url('socilalogin/facebooklogin'), 'scope' => array("email")));
		$vars['google_login_url'] = \CI::googleplus()->loginURL();
		$vars['loginErrors'] = \CI::form_validation()->get_error_array();
		$vars['redirect'] = '';
		$vars['tab'] = 'login';
	
            $this->partial('login', $vars); 
        }
        else
        {
		if($redirect == 'cart'){ $redirect = '/cart/summary';}
            redirect($redirect);
        }
    }

    public function logout()
    {
        \CI::Login()->logoutCustomer();
        redirect('/');
    }

    public function forgotPassword()
    {
        $data['page_title'] = lang('forgot_password');

        \CI::form_validation()->set_rules('email', 'lang:address_email', ['trim', 'required', 'valid_email',
            ['email_callable', function($str)
                {
                    $reset = \CI::Customers()->reset_password($str);

                    if(!$reset)
                    {
                        \CI::form_validation()->set_message('email_callable', lang('error_no_account_record'));
						
						
                        return FALSE;
                    }
                    else
                    {
                        //user does exist. and the password is reset.
                        return TRUE;
                    }
                }
            ]
        ]);
		
        if (\CI::form_validation()->run() == FALSE)
        {
            //$this->view('forgot_password', $data);
			 $this->partial('login', ['loginErrors'=>\CI::form_validation()->get_error_array(), 'tab' => 'forgot']);
        }
        else
        {
            \CI::session()->set_flashdata('message', lang('message_new_password'));
            redirect('login');
        }
    }

    public function register()
    {
	 \CI::load()->library('facebook');
		  \CI::load()->library('Googleplus');
        $redirect  = \CI::Login()->isLoggedIn(false, false);
        //if they are logged in, we send them back to the my_account by default
        if ($redirect)
        {
            redirect('my-account');
        }
        
        \CI::load()->library('form_validation');
        
        //default values are empty if the customer is new
        $data = [
            'company' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'phone' => '',
            'address1' => '',
            'address2' => '',
            'city' => '',
            'state' => '',
            'zip' => '',

            'redirect' => \CI::session()->flashdata('redirect')
        ];

       // \CI::form_validation()->set_rules('company', 'lang:account_company', 'trim|max_length[128]');
        \CI::form_validation()->set_rules('firstname', 'lang:account_firstname', 'trim|required|max_length[32]');
       // \CI::form_validation()->set_rules('lastname', 'lang:account_lastname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email', 'lang:account_email', ['trim','required','valid_email','max_length[128]', ['check_email_callable', function($str){
            return $this->check_email($str);
        }]]);
       // \CI::form_validation()->set_rules('phone', 'lang:account_phone', 'trim|required|max_length[32]');
       // \CI::form_validation()->set_rules('email_subscribe', 'lang:email_subscribe', 'trim|numeric|max_length[1]');
        \CI::form_validation()->set_rules('password', 'lang:account_password', 'required|min_length[6]');
        \CI::form_validation()->set_rules('confirm', 'lang:account_confirm', 'required|matches[password]');

        
        if (\CI::form_validation()->run() == FALSE)
        {
            //if they have submitted the form already and it has returned with errors, reset the redirect
            if (\CI::input()->post('submitted'))
            {
                $data['redirect'] = \CI::input()->post('redirect');
            }
            
            // load other page content 
            //\CI::load()->model('banner_model');
            \CI::load()->helper('directory');
			$data['facebook_login_url'] = \CI::facebook()->getLoginUrl(array('redirect_uri' => site_url('socilalogin/facebooklogin'), 'scope' => array("email")));
			$data['google_login_url'] = \CI::googleplus()->loginURL();	
            $data['registrationErrors'] = \CI::form_validation()->get_error_array();
			$data['tab'] = 'register';
            $this->partial('login', $data);
        }
        else
        {
            $save['id'] = false;
            $save['firstname'] 		= \CI::input()->post('firstname');
           // $save['lastname']  = \CI::input()->post('lastname');
			$save['lastname']  		= '';
            $save['email'] = \CI::input()->post('email');
			$save['group_id'] = \CI::input()->post('group_id');
            $save['phone'] = \CI::input()->post('phone');
            $save['company'] = '';
            $save['active'] = (bool)config_item('new_customer_status');
            $save['email_subscribe'] = intval((bool)\CI::input()->post('email_subscribe'));
            
            $save['password']  = sha1(\CI::input()->post('password'));
            
            $redirect  = \CI::input()->post('redirect');
            
            //if we don't have a value for redirect
            if ($redirect == '')
            {
                $redirect = 'my-account/dashboard';
            }
            
            // save the customer info and get their new id
         	 \CI::Customers()->save($save);
			 if($save['phone']){
			 $message = 'Thank you for signing up. You can ask question. Our expert astrologers will answer your question.';
             \CI::Pages()->send_sms($save['phone'], $message);
			 }
            //send the registration email
            
			\GoCart\Emails::registration($save);


			

            //load twig for this language string
           // $loader = new \Twig_Loader_String();
           // $twig = new \Twig_Environment($loader);
            
            //if they're automatically activated log them in and send them where they need to go
            if($save['active'])
            {
              //  \CI::session()->set_flashdata('message', $twig->render( lang('registration_thanks'), $save) );
            
                //lets automatically log them in
                \CI::Login()->loginCustomer($save['email'], $save['password']);

                //to redirect them, if there is no redirect, the it should redirect to the homepage.
                redirect($redirect);
            }
            else
            {
                //redirect to the login page if they need to wait for activation
                \CI::session()->set_flashdata('message', $twig->render( lang('registration_awaiting_activation'), $save) );
                redirect('login');
            }
        }
    }

    public function check_email($str)
    {
        $email = \CI::Customers()->check_email($str);
        
        if ($email)
        {
            \CI::form_validation()->set_message('check_email_callable', lang('error_email'));
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	public function autologin($email){ 
		$email = base64_decode($email);	
	  if(!$this->check_email($email))	
		{
			\CI::Login()->AutologinCustomer($email);
			redirect('my-account/dashboard');
		}else{		
		}
	}
	
	
	public function customercheck(){
	  		$email 				= \CI::input()->post('email');
            $password 			= \CI::input()->post('password');
 			$confirm_password 	= \CI::input()->post('confirm_password');
  		    $first_name 		= \CI::input()->post('first_name');
   			$last_name 			= \CI::input()->post('last_name');
			$forgot				= \CI::input()->post('forgot');
			
			\CI::form_validation()->set_rules('email', 'lang:account_email', ['trim','required','valid_email','max_length[128]']);
			
			 if (\CI::form_validation()->run() == FALSE)
        {
		$data['message'] ='<span class="alert alert-danger" role="alert">Enter valid email address.</span>';
		
		}else{	
		
		$data['message'] ='<span class="alert alert-danger" role="alert">Valid address.</span>';
				
			if($forgot){
				if($email){
				$reset = \CI::Customers()->reset_password($email);
				if($reset){
				$data['message'] = $this->partial('customer_details', array('type' => 'login', 'message' => '<span class="alert alert-success" role="alert">Your password has been sent. Please check your email.</span>'));
				}else{
				$data['message'] = $this->partial('customer_details', array('type' => 'login', 'message' => '<span class="alert alert-danger" role="alert">Something went wrong!</span>'));
				}
							
				}
			}elseif($password && $confirm_password){
		
			if(trim($password) == trim($confirm_password))
				{
				
			$save['id'] = false;
            $save['firstname'] 		= $first_name;
			$save['lastname']  		= $last_name;
            $save['email'] 			= $email;
			$save['group_id'] 		= 3;
            $save['phone'] 			= \CI::input()->post('phone');
            $save['company'] 		= '';
            $save['active'] 		= (bool)config_item('new_customer_status');
            $save['email_subscribe']= 1;
            $save['password']  		= sha1($password);
            
            // save the customer info and get their new id
         	 \CI::Customers()->save($save);
            //send the registration email
			\GoCart\Emails::registration($save);

			 \CI::Login()->loginCustomer($save['email'], $save['password']);	
    			$data['message'] = '<script>location.reload();</script>';
				
				}else{
				$data['message'] = $this->partial('customer_details', array('first_name' => $first_name, 'last_name' => $last_name, 'message' => 'Password not match.'));
				}
		
		
		}else if($email && $password && !$confirm_password){
		    $login = \CI::Login()->loginCustomer($email, sha1($password));
			if($login){
			
			$data['message'] = '<script>location.reload();</script>';
			}else{
               $customer = \CI::Customers()->get_customer_by_email($email); 
                
			$data['message'] = $this->partial('customer_details', array('type' => 'login', 'phone' => $customer['phone'], 'message' => '<span class="alert alert-danger" role="alert">Invalid password</span>'));
			}			
	
		}else{

		$emailset = \CI::Customers()->check_email($email);    

        if ($emailset)
        {

            $customer = \CI::Customers()->get_customer_by_email($email);  //print_r($customer ); exit;
			$data['message'] = $this->partial('customer_details', array('type' => 'login', 'phone' => $customer['phone']));
        }
        else
        {
			   $data['message'] = $this->partial('customer_details');
        }
		}
}
	echo $data['message'];
		exit;
	}
	
	
	public function send_otp(){
			$email 				= \CI::input()->post('email');
            $customer = \CI::Customers()->get_customer_by_email($email);
			if(\CI::input()->post('otp')){
			$message = \CI::Customers()->validate_otp();
			
			$data['message'] = $this->partial('customer_details', array('type' => 'otp', 'phone' => $customer['phone'], 'message' => $message));
			
			}else{
			//\CI::form_validation()->set_rules('phone', 'Phone', ['trim','required','min_length[10]','numeric']);
			\CI::form_validation()->set_rules('email', 'lang:account_email', ['trim','required','valid_email','max_length[128]']);
				 if (\CI::form_validation()->run() == FALSE)
					{
					//$data['message'] = '<div class="alert alert-danger">'.form_error('phone').form_error('email').'</div>';
					$data['message'] = $this->partial('customer_details', array('type' => 'otp', 'message' => '<div class="alert alert-danger">'.form_error('email').'</div>'));
					}else{
					//$customer_id = \CI::Customers()->check_phone($phone, $email);
					


							if($customer){
							$opt =  \CI::Customers()->send_otp($customer['phone'], $email, $customer['customer_id']);
							$data['message'] = $this->partial('customer_details', array('type' => 'otp', 'phone' => $customer['phone'], 'message' => '<span class="alert alert-success" role="alert">OTP has been sent.</span>'));
							}else{
							$data['message'] = $data['message'] = $this->partial('customer_details', array('type' => 'login', 'message' => '<span class="alert alert-danger" role="alert">Your email is not register with us.</span>'));
							
							}

					}
					
			}		
			echo $data['message'];		
			 exit;
			
			
			}
	
	
	
}
