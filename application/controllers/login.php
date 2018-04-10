<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			error_reporting(0);
		// for flash data
		$this->load->library('session');
		$this->load->helper(array('form', 'url', 'image'));
		$this->load->library('facebook');
		$this->load->library('googleplus');
		if (!$this->fuel->config('admin_enabled')) show_404();

		$this->load->vars(array(
			'js' => '', 
			'css' => css($this->fuel->config('xtra_css')), // use CSS function here because of the asset library path changes below
			'js_controller_params' => array(), 
			'keyboard_shortcuts' => $this->fuel->config('keyboard_shortcuts')));

		// change assets path to admin
		$this->asset->assets_path = $this->fuel->config('fuel_assets_path');

		// set asset output settings
		$this->asset->assets_output = $this->fuel->config('fuel_assets_output');
		
		$this->lang->load('fuel');
		$this->load->helper('ajax');
		$this->load->library('form_builder');

		$this->load->module_model(FUEL_FOLDER, 'fuel_users_model');

		// set configuration paths for assets in case they are differernt from front end
		$this->asset->assets_module ='fuel';
		$this->asset->assets_folders = array(
				'images' => 'images/',
				'css' => 'css/',
				'js' => 'js/',
			);
	}

	public function flogin()
	{
	//error_reporting(1);
	    $user = "";
	    $userId = $this->facebook->getUser();
        if ($userId) {
		

            try {
                $user = $this->facebook->api('/me',array('fields' => 'id,email,first_name,last_name,birthday,picture.type(large),gender'));
            } catch (FacebookApiException $e) {
                $user = "";
            }
        }
        else {
            echo 'Please try again.'; exit;
        }
        if($user!="") :
			if($this->fuel_users_model->user_exists($user['email']))
			{	
				$this->db->select("id")->from("fuel_users")->where("email",$user['email']);
				$data= $this->db->get()->row();
				if($data->id){
				$sedata['id'] = $data->id;
				$sedata['super_admin'] = 'no';
				$sedata['user_name'] = $user['email'];
				$sedata['language'] = 'english';
				$sedata['email'] = $user['email'];
				$this->fuel->auth->set_valid_user($sedata);
				redirect('/');
				}			
			
			}else{
				$salt = $this->fuel_users_model->salt();
				$password = $this->fuel_users_model->salted_password_hash('123', $salt);
				$fuel_usersData = array(
					'user_name' => $user['email'],
					'password' => $password,
					'email' => $user['email'],
					'first_name' => $user['first_name'],
					'last_name' => $user['last_name'],
					'language' => 'english',
					'salt' => $salt,
					'super_admin' => 'no', 'active' => 'yes',
					);
				
				$this->db->insert('fuel_users', $fuel_usersData);
				$userid =  $this->db->insert_id();	
					
				$fuel_usersgroupData = array('group_id' => 3, 'user_id' => $userid);
					
				$this->db->insert('module_group_to_users', $fuel_usersgroupData);
			
				$fuel_profileData['users_id'] = $userid;
				$fuel_profileData['profiles_type'] = 3;
				$fuel_profileData['first_name'] = $user['first_name'];
				$fuel_profileData['last_name'] = $user['last_name'];
				$fuel_profileData['email'] = $user['email'];
				$fuel_profileData['gender'] = $user['gender'];
				
				$this->db->insert('fuel_profiles', $fuel_profileData);
				
				
				if($userid){
				$sedata['id'] = $userid;
				$sedata['super_admin'] = 'no';
				$sedata['user_name'] = $user['email'];
				$sedata['language'] = 'english';
				$sedata['email'] = $user['email'];
				$this->fuel->auth->set_valid_user($sedata);
				redirect('/');
				}			
				
			
			}

		//	$daat = $this->fuel->users->user_exists($email);
		

		
         
           //Write here login script	
        else :
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('login/flogin'), 
                'scope' => array("email") // permissions here
            ));
        endif;
        
    }


	public function index()
	{  
		// check if it's a password request and redirect'
		if ($this->uri->segment(3) == 'pwd_reset')
		{
			$this->pwd_reset();
			return;
		}
		else if ($this->uri->segment(3) == 'dev')
		{
			$this->dev();
			return;
		}
		else if ($this->uri->segment(3) == 'reset')
		{
			$this->reset_password();
			return;
		}

		$this->js_controller_params['method'] = 'add_edit';

		$this->load->helper('convert');
		$this->load->helper('cookie');
		$this->load->library('facebook');
		$this->load->library('googleplus');
		$session_key = $this->fuel->auth->get_session_namespace();

		$user_data = $this->session->userdata($session_key);

		if ( ! empty($_POST))
		{
			// check if they are locked out out or not
			if (isset($user_data['failed_login_timer']) AND (time() - $user_data['failed_login_timer']) < (int)$this->fuel->config('seconds_to_unlock'))
			{
 				$this->fuel_users_model->add_error(lang('error_max_attempts', $this->fuel->config('seconds_to_unlock')));
				$user_data['failed_login_timer'] = time();
			}
			else
			{
				if ($this->input->post('user_name') AND $this->input->post('password'))
				{
					if ($this->fuel->auth->login($this->input->post('user_name', TRUE), $this->input->post('password', TRUE)))
					{	
						// reset failed login attempts
						$user_data['failed_login_timer'] = 0;
						// set the cookie for viewing the live site with added FUEL capabilities
						$config = array(
							'name' => $this->fuel->auth->get_fuel_trigger_cookie_name(), 
							'value' => serialize(array('id' => $this->fuel->auth->user_data('id'), 'language' => $this->fuel->auth->user_data('language'))),
							'expire' => 0,
							//'path' => WEB_PATH
							'path' => $this->fuel->config('fuel_cookie_path')
						);

						set_cookie($config);

						$forward = $this->input->post('forward');
						$forward_uri = uri_safe_decode($forward);

						if ($forward AND $forward_uri != $this->fuel->config('login_redirect'))
						{
							redirect($forward_uri);
						}
						else
						{
							redirect('/dashboard');
						}
						
						
					}
					else
					{
						// check if they are no longer in the locked out state and reset variables
						if (isset($user_data['failed_login_timer']) AND (time() - $user_data['failed_login_timer']) > (int)$this->fuel->config('seconds_to_unlock'))
						{
							$user_data['failed_login_attempts'] = 0;
							$this->session->unset_userdata('failed_login_timer');
							unset($user_data['failed_login_timer']);
						}
						else
						{
							// add to the number of attempts if it's an invalid login'
							$num_attempts = (!isset($user_data['failed_login_attempts'])) ? 0 : $user_data['failed_login_attempts'] + 1;
							$user_data['failed_login_attempts'] = $num_attempts;
						}

						// check if they should be locked out
						if (isset($user_data['failed_login_attempts']) AND $user_data['failed_login_attempts'] >= (int)$this->fuel->config('num_logins_before_lock') -1)
						{
							$this->fuel_users_model->add_error(lang('error_max_attempts', $this->fuel->config('seconds_to_unlock')));
							$user_data['failed_login_timer'] = time();
							$this->fuel->logs->write(lang('auth_log_account_lockout', $this->input->post('user_name', TRUE), $this->input->ip_address()), 'debug');
						}
						else
						{
							$this->fuel_users_model->add_error(lang('error_invalid_login'));
							$this->fuel->logs->write(lang('auth_log_failed_login', $this->input->post('user_name', TRUE), $this->input->ip_address(), ($user_data['failed_login_attempts'] + 1)), 'debug');
						}
					}
				}
				else
				{
					$this->fuel_users_model->add_error(lang('error_empty_user_pwd'));
				}
			}

			$this->session->set_userdata($session_key, $user_data);
		}
		

		if($_GET['code']){
		error_reporting(0);
			$this->googleplus->getAuthenticate();
			$gudata = $this->googleplus->getUserInfo();
			
			
			$this->load->library('upload');
			$config['upload_path'] = FCPATH.'assets/profiles/';
			$config['allowed_types'] = 'gif|jpg|png|doc|txt';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = FALSE;
			$this->load->library('upload', $config);  
			$this->upload->initialize($config);
			
			
			
		if($this->fuel_users_model->user_exists($gudata['email']))
			{
				$this->db->select("id")->from("fuel_users")->where("email",$gudata['email']);
				$data= $this->db->get()->row();
				if($data->id){
				$sedata['id'] = $data->id;
				$sedata['super_admin'] = 'no';
				$sedata['user_name'] = $gudata['email'];
				$sedata['language'] = 'english';
				$sedata['email'] = $gudata['email'];
				$this->fuel->auth->set_valid_user($sedata);
				redirect('/');
				}			
			
			}else{
				$salt = $this->fuel_users_model->salt();
				$password = $this->fuel_users_model->salted_password_hash('123', $salt);
				$fuel_usersData = array(
					'user_name' => $gudata['email'],
					'password' => $password,
					'email' => $gudata['email'],
					'first_name' => $gudata['given_name'],
					'last_name' => $gudata['family_name'],
					'language' => 'english',
					'salt' => $salt,
					'super_admin' => 'no', 'active' => 'yes',
					);
				
				$this->db->insert('fuel_users', $fuel_usersData);
				$userid =  $this->db->insert_id();	
					
				$fuel_usersgroupData = array('group_id' => 3, 'user_id' => $userid);
					
				$this->db->insert('module_group_to_users', $fuel_usersgroupData);
			
				$fuel_profileData['users_id'] = $userid;
				$fuel_profileData['profiles_type'] = 3;
				$fuel_profileData['first_name'] = $gudata['given_name'];
				$fuel_profileData['last_name'] = $gudata['family_name'];
				$fuel_profileData['email'] = $gudata['email'];
				$fuel_profileData['gender'] = ($gudata['gender']) ? $gudata['gender'] : 'male';
				
				$this->db->insert('fuel_profiles', $fuel_profileData);
				
				
				if($userid){
				$sedata['id'] = $userid;
				$sedata['super_admin'] = 'no';
				$sedata['user_name'] = $gudata['email'];
				$sedata['language'] = 'english';
				$sedata['email'] = $gudata['email'];
				$this->fuel->auth->set_valid_user($sedata);
				redirect('/');
				}			
				
			
			}
		
		
		
		
		
		//print_r($gudata);
		//exit;
		
		}
		
		
		
		
		
		
		// build form
		$this->form_builder->set_validator($this->fuel_users_model->get_validation());
		$fields['user_name'] = array('size' => 25, 'placeholder' => 'username', 'display_label' => FALSE);
		$fields['password'] = array('type' => 'password', 'size' => 25, 'placeholder' => 'password', 'display_label' => FALSE);
		$fields['forward'] = array('type' => 'hidden', 'value' => fuel_uri_segment(2));
		
		$this->form_builder->show_required = FALSE;
		$this->form_builder->submit_value = lang('login_btn');
		$this->form_builder->set_fields($fields);
		$this->form_builder->remove_js();
		if (!empty($_POST)) $this->form_builder->set_field_values($this->input->post(NULL, TRUE));
		$vars['form'] = $this->form_builder->render();
	
		// set any errors that 
		if ($this->session->flashdata('error'))
		{
			$errors = array($this->session->flashdata('error'));
		}
		else
		{
			$errors =  $this->fuel_users_model->get_errors();
		}
		
		$vars['error'] = $errors;

		// notifications template
		$notifications = $this->load->view('_blocks/notifications', $vars, TRUE);
		$vars['notifications'] = $notifications;
		$vars['display_forgotten_pwd'] = $this->fuel->config('allow_forgotten_password');
		$vars['page_title'] = 'Login';
		$vars['facebook_login_url'] = $this->facebook->getLoginUrl(array('redirect_uri' => site_url('login/flogin'), 'scope' => array("email")));
		$vars['google_login_url'] = $this->googleplus->loginURL();
		$this->load->module_view('', 'login', $vars);
	}

	// THIS IS A PASSWORD RESET TOKEN CREATION EMAIL SENDING 
	public function pwd_reset()
	{
		if ( ! $this->fuel->config('allow_forgotten_password')) show_404();

		$this->js_controller_params['method'] = 'add_edit';

		if ( ! empty($_POST))
		{
			if ($this->input->post('email'))
			{
				$user = $this->fuel_users_model->find_one_array(array('email' => $this->input->post('email')));

				if ( ! empty($user['email']))
				{
					// This generates and saves a token to the user model, returns the token string.
					$token = $this->fuel_users_model->get_reset_password_token($user['email']);

					if ($token !== FALSE)
					{
						$url = 'login/reset/' . $token;
						$msg = lang('pwd_reset_email', fuel_url($url));
						$params['to'] = $this->input->post('email');
						$params['subject'] = lang('pwd_reset_subject');
						$params['message'] = $msg;
						$params['use_dev_mode'] = FALSE;
						if ($this->fuel->notification->send($params))
						{
							$this->session->set_flashdata('success', lang('pwd_reset_email_success'));
							$this->fuel->logs->write(lang('auth_log_pass_reset_request', $user['email'], $this->input->ip_address()), 'debug');
						}
						else
						{
							$this->session->set_flashdata('error', lang('error_pwd_reset'));
							$this->fuel->logs->write($this->fuel->notification->last_error(), 'debug');
						}

						redirect(site_url('login'));
					}
					else
					{
						$this->fuel_users_model->add_error(lang('error_invalid_email'));
					}
				}
				else
				{
					$this->fuel_users_model->add_error(lang('error_invalid_email'));
				}
			}
			else
			{
				$this->fuel_users_model->add_error(lang('error_empty_email'));
			}
		}

		$this->form_builder->set_validator($this->fuel_users_model->get_validation());
		
		// build form
		$fields['Reset Password'] = array('type' => 'section', 'label' => lang('login_reset_pwd'));
		$fields['email'] = array('required' => TRUE, 'size' => 30, 'placeholder' => 'email', 'display_label' => FALSE);

		$this->form_builder->show_required = FALSE;
		$this->form_builder->set_fields($fields);

		$vars['form'] = $this->form_builder->render();
		
		// notifications template
		$vars['error'] = $this->fuel_users_model->get_errors();
		$vars['notifications'] = $this->load->module_view(FUEL_FOLDER, '_blocks/notifications', $vars, TRUE);
		$vars['page_title'] = 'Password Reset';

		$this->load->module_view('', 'pwd_reset', $vars);
	}

	// THIS HANDLES A POST REQUEST FOR USER SETTING A NEW PASSWORD
	public function reset_password() 
	{
		$token = $this->uri->segment(4);

		if (empty($token))
		{
			$this->session->set_flashdata('error', lang('pwd_reset_missing_token'));
			redirect(site_url('fuel/login'));
		}
		else
		{
			if( ! $this->fuel_users_model->validate_reset_token($token))
			{
				$this->session->set_flashdata('error', lang('pwd_reset_missing_token'));
				redirect(site_url('fuel/login'));
			}
		}
		
		if ( ! empty($_POST))
		{
			if ($this->input->post('email') && $this->input->post('password') && $this->input->post('password_confirm') && $this->input->post('_token'))
			{
				$this->load->library('user_agent');
			
				if ($this->input->post('password') == $this->input->post('password_confirm'))
				{
				   	$reset = $this->fuel_users_model->reset_password_from_token($this->input->post('email'), $this->input->post('_token'), $this->input->post('password'));

					if ($reset)
					{
						$this->session->set_flashdata('success', lang('pwd_reset_success'));
						redirect(site_url('/login'));
					}
					else
					{
						if ($this->fuel_users_model->has_error())
						{
							$errors = $this->fuel_users_model->get_errors();
							$this->session->set_flashdata('error',$errors[0]);
							redirect($this->agent->referrer());
						}

						$this->session->set_flashdata('error', lang('pwd_reset_error'));
						redirect(site_url('login/pwd_reset'));
					}
				}
				else
				{
					$this->session->set_flashdata('error', lang('pwd_reset_error_not_match'));
					redirect($this->agent->referrer());
				}
			}
		}
		
		$fields['Reset Password'] = array('type' => 'section', 'label' => lang('login_reset_pwd'));
		$fields['email'] = array('required' => TRUE, 'size' => 30, 'placeholder' => 'email', 'display_label' => FALSE);
		$fields['password'] = array('type' => 'password', 'required' => TRUE, 'size' => 30, 'placeholder' => 'password', 'display_label' => FALSE);
		$fields['password_confirm'] = array('type' => 'password', 'required' => TRUE, 'size' => 30, 'placeholder' => 'confirm password', 'display_label' => FALSE);
		$fields['_token'] = array('type' => 'hidden', 'value' => $token);

		$this->form_builder->show_required = FALSE;
		$this->form_builder->set_fields($fields);

		$vars['form'] = $this->form_builder->render();
		
		// notifications template
		$vars['error'] = $this->fuel_users_model->get_errors();
		$vars['notifications'] = $this->load->module_view(FUEL_FOLDER, '_blocks/notifications', $vars, TRUE);
		$vars['page_title'] = lang('fuel_page_title');

		$this->load->module_view(FUEL_FOLDER, 'reset', $vars);
	}


// THIS HANDLES A POST REQUEST FOR USER SETTING A NEW PASSWORD
	public function register() 
	{
		if ( ! empty($_POST))
		{
		
			if ($this->input->post('email') && $this->input->post('password') && $this->input->post('password_confirm'))
			{
				$this->load->library('user_agent');
				//error_reporting(1);
							
				if(!$this->fuel_users_model->user_exists($this->input->post('email'))){			
				
				if ($this->input->post('password') == $this->input->post('password_confirm'))
				{
				$salt = $this->fuel_users_model->salt();
				$fuel_usersData = array(
					'user_name' => $this->input->post('email'),
					'password' => $this->fuel_users_model->salted_password_hash($this->input->post('password'), $salt),
					'email' => $this->input->post('email'),
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'language' => 'english',
					'salt' => $salt,
					'super_admin' => 'no', 'active' => 'no',
					);
				
				$this->db->insert('fuel_users', $fuel_usersData);
				$userid =  $this->db->insert_id();	
					
				$fuel_usersgroupData = array('group_id' => $this->input->post('profiles_type'), 'user_id' => $userid);
					
				$this->db->insert('module_group_to_users', $fuel_usersgroupData);
			
				$fuel_profileData['users_id'] = $userid;
				$fuel_profileData['profiles_type'] = $this->input->post('profiles_type');
				$fuel_profileData['first_name'] = $this->input->post('first_name');
				$fuel_profileData['last_name'] = $this->input->post('last_name');
				$fuel_profileData['email'] = $this->input->post('email');
				$fuel_profileData['gender'] = $this->input->post('gender');
				
				$this->db->insert('fuel_profiles', $fuel_profileData);
			
						redirect(site_url('/login'));
				}
				else{
					$vars['error'] = 'Password not matched.';
			}
				
			}else{
					$vars['error'] = 'Email address already exist.';
			}
		}
		}
		$this->load->library('facebook');
		$this->load->library('googleplus');

		
		// notifications template
		$vars['error'] = ($vars['error']) ? $vars['error'] : $this->fuel_users_model->get_errors();
		
		
		//$vars['notifications'] = $this->load->module_view(FUEL_FOLDER, '_blocks/notifications', $vars, TRUE);
		$vars['page_title'] = 'Register';

		$this->load->module_view('', 'register', $vars);
	}










	public function dev()
	{
		$this->config->set_item('allow_forgotten_password', FALSE);

		if ( ! empty($_POST))
		{
			if ( ! $this->fuel->config('dev_password'))
			{
				redirect('');
			}
			else if ($this->fuel->config('dev_password') == $this->input->post('password', TRUE))
			{
				$this->load->helper('convert');
				$this->session->set_userdata('dev_password', TRUE);
				$forward = uri_safe_decode($this->input->post('forward'));
				redirect($forward);
			}
			else
			{
				add_error(lang('error_invalid_login'));
			}
		}

		$fields['password'] = array('type' => 'password', 'placeholder' => 'password', 'display_label' => FALSE, 'size' => 25);
		$fields['forward'] = array('type' => 'hidden', 'value' => fuel_uri_segment(2));

		$this->form_builder->show_required = FALSE;
		$this->form_builder->submit_value = 'Login';
		$this->form_builder->set_fields($fields);

		if ( ! empty($_POST)) $this->form_builder->set_field_values($this->input->post(NULL, TRUE));

		$vars['form'] = $this->form_builder->render();
		$vars['notifications'] = $this->load->module_view(FUEL_FOLDER, '_blocks/notifications', $vars, TRUE);
		$vars['display_forgotten_pwd'] = FALSE;
		$vars['instructions'] = lang('dev_pwd_instructions');
		$vars['page_title'] = lang('fuel_page_title');
		$this->load->module_view(FUEL_FOLDER, 'login', $vars);
	}
}
