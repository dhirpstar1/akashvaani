<?php namespace GoCart\Controller;
/**
 * MyAccount Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    MyAccount
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class MyAccount extends Front {

    var $customer;

    public function __construct()
    {
        parent::__construct();

        \CI::load()->model(array('Locations'));
        $this->customer = \CI::Login()->customer();
    }

    public function profile($offset=0)
    {
        //make sure they're logged in
        \CI::Login()->isLoggedIn('my-account');


		//\CI::Pages()->send_sms(9028381460, 'Testing message');


        $data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
  
        // load other page content
        \CI::load()->helper('date');
			$this->partial('/customer/header', $data);
			$this->partial('/customer/profile', $data);
            $this->partial('/customer/footer', $data);
			
    }

	public function profile_image_upload()
    {
        $data['file_name'] = false;
        $data['error']  = false;

        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']   = config_item('size_limit');
        $config['upload_path'] = 'uploads/images/full';
        $config['encrypt_name'] = true;
        $config['remove_spaces'] = true;

        \CI::load()->library('upload', $config);

        if ( \CI::upload()->do_upload())
        {
            $upload_data    = \CI::upload()->data();

            \CI::load()->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 235;
            $config['height'] = 235;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            $data['file_name'] = $upload_data['file_name'];
        }

        if(\CI::upload()->display_errors() != '')
        {
            $data['error'] = \CI::upload()->display_errors();
        }
		
        
    }
	
  public function dashboard()
    {
	error_reporting(0);
        //make sure they're logged in
        \CI::Login()->isLoggedIn('my-account');
	

		if(\CI::input()->post('timezone'))
        {
				
            $customer = [];
            $customer['id'] = $this->customer->id;
			$customer['day'] = \CI::input()->post('day');
			$customer['month'] = \CI::input()->post('month');
			$customer['year'] = \CI::input()->post('year');
			$customer['hour'] = \CI::input()->post('hour');
			$customer['minute'] = \CI::input()->post('minute');
			$customer['birth_place'] = \CI::input()->post('birth_place');
			
			
			if(\CI::input()->post('latitude')){
			$customer['birth_place_latitude'] = \CI::input()->post('latitude');
			}
			if( \CI::input()->post('longitude')){
			$customer['birth_place_longitude'] = \CI::input()->post('longitude');
			}
			if(\CI::input()->post('timezone')){
			$customer['birth_timezone'] = \CI::input()->post('timezone');
			}			
            \CI::Customers()->save($customer);
            \CI::session()->set_flashdata('message', lang('message_account_updated'));
            
        }	
			$data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);

			$data['logged_customer']	= \CI::Login()->customer();
	           // load other page content
        	\CI::load()->helper('date');
			$this->partial('/customer/header', $data);
			if($data['logged_customer']->group->id == 2){
			$data['populararticles'] =  \CI::Blogs()->get_popular();
			
			$data['kundalies'] =  \CI::Service()->kundalies($data['logged_customer']->id);		
			
			
			$this->partial('/customer/professional_dashboard', $data);
			}else{
			 $data['questions'] = \CI::Customers()->get_customer_questions($this->customer->id);
			 $data['populararticles'] = \CI::Blogs()->get_related();
			$this->partial('/customer/user_dashboard', $data);
			}
            $this->partial('/customer/footer', $data);
					
    }
	
		public function my_kundalies($page=0, $rows=10){
		 
		 
		  \CI::load()->helper('form');
        \CI::load()->helper('date');
        $data['message'] = \CI::session()->flashdata('message');

		$data['logged_customer']	= \CI::Login()->customer();
        $post = \CI::input()->post(null, false);
        if($post)
        {
            //if the term is in post, save it to the db and give me a reference
            $term = json_encode($post);
            $code = \CI::Search()->recordTerm($term);
            $data['code'] = $code;
            //reset the term to an object for use
            $term   = (object)$post;
        }
        

        $data['kundalies'] 	=  \CI::Service()->kundalies($data['logged_customer']->id, false, $rows, $page);	
        $data['total'] 		=	\CI::Service()->kundalies($data['logged_customer']->id, $count= true);

        \CI::load()->library('pagination');

        $config['base_url'] = site_url('my-account/my_kundalies/');
        $config['total_rows'] = $data['total'];
        $config['per_page'] = $rows;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        	\CI::pagination()->initialize($config);
		echo \CI::load()->view('customer/bookings', $data, TRUE);
		exit;
		}
	
		
		 public function professional_show_chart($type='individual')
			{
			$data['logged_customer']	= \CI::Login()->customer();
			$data['type'] = $type;
			$this->partial('/customer/professional_show_chart', $data);
			
			}
		
		public function professional_show_kundali_chart($id=NULL)
			{			
			error_reporting(0);
			$kundalidata = \CI::Service()->get_kundali_data($id);
			\CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
			$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
			
			if($kundalidata->type == 1){
						
			$data = array(
            'date' => $kundalidata->mday,
            'month' => $kundalidata->mmonth,
            'year' => $kundalidata->myear,
            'hour' => $kundalidata->mhour,
            'minute' => $kundalidata->mminute,
            'latitude' => $kundalidata->mlatitude,
            'longitude' => $kundalidata->mlongitude,
            'timezone' => $kundalidata->mtimezone,
		    );		
				
				
					
$kundalidata_professional['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

$kundalidata_professional['current_vdasha'] = json_decode($vedicRishi->astroCall("/current_vdasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

$kundalidata_professional['major_vdasha'] = json_decode($vedicRishi->astroCall("/major_vdasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

//$kundalidata_professional['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

$kundalidata_professional['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
$kundalidata_professional['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
$kundalidata_professional['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	
        echo \CI::load()->view('content/kundli_analysis', $kundalidata_professional, TRUE);

	exit;	
		
			}else{
		$mdata = array(
            'date' => $kundalidata->mday,
            'month' => $kundalidata->mmonth,
            'year' => $kundalidata->myear,
            'hour' => $kundalidata->mhour,
            'minute' => $kundalidata->mminute,
            'latitude' => $kundalidata->mlatitude,
            'longitude' => $kundalidata->mlongitude,
            'timezone' => $kundalidata->mtimezone,
		    );		
				

       $fdata = array(
            'date' => $kundalidata->fday,
            'month' => $kundalidata->fmonth,
            'year' => $kundalidata->fyear,
            'hour' => $kundalidata->fhour,
            'minute' => $kundalidata->fminute,
            'latitude' => $kundalidata->flatitude,
            'longitude' => $kundalidata->flongitude,
            'timezone' => $kundalidata->ftimezone,
		    );	

       
        $kundalidata_professional['match_ashtakoot_points'] = json_decode($vedicRishi->matchMakingCall("/match_ashtakoot_points/", $mdata, $fdata));
        $kundalidata_professional['match_planet_details'] 	= json_decode($vedicRishi->matchMakingCall("/match_planet_details/", $mdata, $fdata));
        $kundalidata_professional['navmanshmale'] 			= json_decode($vedicRishi->astroCall("/horo_chart/D9", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $kundalidata_professional['moonchartmale'] 			= json_decode($vedicRishi->astroCall("/horo_chart/MOON", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));

        $kundalidata_professional['navmanshfemale'] 		= json_decode($vedicRishi->astroCall("/horo_chart/D9", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
        $kundalidata_professional['moonchartfemale'] 		= json_decode($vedicRishi->astroCall("/horo_chart/MOON", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
		
	
		
       echo \CI::load()->view('content/kundalimilan', $kundalidata_professional, TRUE);
	exit;	
			}

			$this->partial('/customer/professional_show_kundali_chart', $data);
			}
		
	  public function edit_role()
		{
		error_reporting(0);
					 \CI::Login()->isLoggedIn('my-account');
					 $customer['id'] = $this->customer->id;
					 $customer['role'] = implode("|", \CI::input()->post('role'));		
    	        	\CI::Customers()->save($customer);
					redirect('my-account/');
		}
			
    public function edit()
    {
	error_reporting(0);
        //make sure they're logged in
        \CI::Login()->isLoggedIn('my-account');
		\CI::load()->library('form_validation');
        \CI::form_validation()->set_rules('firstname', 'lang:address_firstname', 'trim|required|max_length[32]');
       // \CI::form_validation()->set_rules('lastname', 'lang:address_lastname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email', 'lang:address_email', ['trim','required','valid_email','max_length[128]', ['check_email_callable', function($str){
            return $this->check_email($str);
        }]]);
       // \CI::form_validation()->set_rules('phone', 'lang:address_phone', 'trim|required|max_length[32]');
  

        if (\CI::form_validation()->run() == true)
        {
            $customer = [];
            $customer['id'] = $this->customer->id;
            $customer['firstname'] = \CI::input()->post('firstname');
            $customer['lastname'] = \CI::input()->post('lastname');
            $customer['email'] = \CI::input()->post('email');
			$customer['day'] = \CI::input()->post('day');
			$customer['month'] = \CI::input()->post('month');
			$customer['year'] = \CI::input()->post('year');
			$customer['hour'] = \CI::input()->post('hour');
			$customer['minute'] = \CI::input()->post('minute');
			$customer['gender'] = \CI::input()->post('gender');
			$customer['role'] = implode("|", \CI::input()->post('role'));
			$customer['birth_place'] = \CI::input()->post('birth_place');
			if(\CI::input()->post('latitude')){
			$customer['birth_place_latitude'] = \CI::input()->post('latitude');
			}
			if( \CI::input()->post('longitude')){
			$customer['birth_place_longitude'] = \CI::input()->post('longitude');
			}
			if(\CI::input()->post('timezone')){
			$customer['birth_timezone'] = \CI::input()->post('timezone');
			}
			$customer['address'] = \CI::input()->post('address');
			
			$customer['address_city'] = \CI::input()->post('address_city');
			$customer['address_state'] = \CI::input()->post('address_state');
			$customer['address_country'] = \CI::input()->post('address_country');
			
			$customer['about_me'] = \CI::input()->post('about_me');
			$customer['id'] = $this->customer->id;
            //$customer['phone'] = \CI::input()->post('phone');
            \GC::save_customer($this->customer);
            \CI::Customers()->save($customer);

            \CI::session()->set_flashdata('message', lang('message_account_updated'));
            
        }

			
        $data['customer'] 			= (array)\CI::Customers()->get_customer($this->customer->id);
		$data['logged_customer']	= \CI::Login()->customer();

		
        // load other page content
        	\CI::load()->helper('date');
			$this->partial('/customer/header', $data);
			$this->partial('/customer/edit', $data);
            $this->partial('/customer/footer', $data);
			
    }

 public function index($offset=0)
    {
        //make sure they're logged in
        \CI::Login()->isLoggedIn('my-account');

        $data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
        $data['addresses'] = \CI::Customers()->get_address_list($this->customer->id);
        $data['customer_addresses'] = \CI::Customers()->get_address_list($this->customer->id);

        // load other page content
        //\CI::load()->model('banner_model');
        \CI::load()->helper('directory');
        \CI::load()->helper('date');

        // paginate the orders
        \CI::load()->library('pagination');

        $config['base_url'] = site_url('my_account');
        $config['total_rows'] = \CI::Orders()->countCustomerOrders($this->customer->id);
        $config['per_page'] = '15';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        \CI::pagination()->initialize($config);

        $data['orders_pagination'] = \CI::pagination()->create_links();

        $data['orders'] = \CI::Orders()->getCustomerOrders($this->customer->id, $offset);
        //print_r($offset);

        \CI::load()->library('form_validation');
        \CI::form_validation()->set_rules('company', 'lang:address_company', 'trim|max_length[128]');
        \CI::form_validation()->set_rules('firstname', 'lang:address_firstname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('lastname', 'lang:address_lastname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email', 'lang:address_email', ['trim','required','valid_email','max_length[128]', ['check_email_callable', function($str){
            return $this->check_email($str);
        }]]);
        \CI::form_validation()->set_rules('phone', 'lang:address_phone', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email_subscribe', 'lang:account_newsletter_subscribe', 'trim|numeric|max_length[1]');

        if(\CI::input()->post('password') != '' || \CI::input()->post('confirm') != '')
        {
            \CI::form_validation()->set_rules('password', 'Password', 'required|min_length[6]|sha1');
            \CI::form_validation()->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
        }
        else
        {
            \CI::form_validation()->set_rules('password', 'Password');
            \CI::form_validation()->set_rules('confirm', 'Confirm Password');
        }


        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('my_account', $data);
        }
        else
        {
            $customer = [];
            $customer['id'] = $this->customer->id;
            $customer['company'] = \CI::input()->post('company');
            $customer['firstname'] = \CI::input()->post('firstname');
            $customer['lastname'] = \CI::input()->post('lastname');
            $customer['email'] = \CI::input()->post('email');
            $customer['phone'] = \CI::input()->post('phone');
            $customer['email_subscribe'] = intval((bool)\CI::input()->post('email_subscribe'));
            if(\CI::input()->post('password') != '')
            {
                $customer['password'] = \CI::input()->post('password');
            }

            \GC::save_customer($this->customer);
            \CI::Customers()->save($customer);

            \CI::session()->set_flashdata('message', lang('message_account_updated'));

            redirect('my-account');
        }

    }
    public function check_email($str)
    {
        if(!empty($this->customer->id))
        {
            $email = \CI::Customers()->check_email($str, $this->customer->id);
        }
        else
        {
            $email = \CI::Customers()->check_email($str);
        }

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

    public function download($link)
    {
        $filedata = \CI::DigitalProducts()->get_file_info_by_link($link);

        // missing file (bad link)
        if(!$filedata)
        {
            show_404();
        }

        // validate download counter
        if($filedata->max_downloads > 0)
        {
            if(intval($filedata->downloads) >= intval($filedata->max_downloads))
            {
                show_404();
            }
        }

        // increment downloads counter
        \CI::DigitalProducts()->touch_download($link);

        // Deliver file
        \CI::load()->helper('download');
        force_download('uploads/digital_uploads/', $filedata->filename);
    }
	
	public function do_upload(){
		\CI::load()->library("UploadHandler");
	}
	public function update_customer(){
			$customer['id'] = $this->customer->id;
            $customer['image'] = \CI::input()->post('image');
            return \CI::Customers()->save($customer);
			 
	}	
	public function delete_profile(){
			$customer['id'] = $this->customer->id;
            $customer['image'] = '';
            return \CI::Customers()->save($customer);
	}	
	
	public function user_chart(){
		$data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
error_reporting(0);
	if($data['customer']['birth_timezone']){
		
		
		\CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
		
		 $vdata = array(
            'date' => $data['customer']['day'],
            'month' => $data['customer']['month'],
            'year' => $data['customer']['year'],
            'hour' => $data['customer']['hour'],
            'minute' => $data['customer']['minute'],
            'latitude' => $data['customer']['birth_place_latitude'],
            'longitude' => $data['customer']['birth_place_longitude'],
            'timezone' => $data['customer']['birth_timezone']
        );		
		$data['planets'] = json_decode($vedicRishi->astroCall("/planets/", $vdata['date'], $vdata['month'], $vdata['year'], $vdata['hour'], $vdata['minute'], $vdata['latitude'], $vdata['longitude'], $vdata['timezone']));

  
	$data['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $vdata['date'], $vdata['month'], $vdata['year'], $vdata['hour'], $vdata['minute'], $vdata['latitude'], $vdata['longitude'], $vdata['timezone']));
	
	$data['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $vdata['date'], $vdata['month'], $vdata['year'], $vdata['hour'], $vdata['minute'], $vdata['latitude'], $vdata['longitude'], $vdata['timezone']));
	
		$data['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $vdata['date'], $vdata['month'], $vdata['year'], $vdata['hour'], $vdata['minute'], $vdata['latitude'], $vdata['longitude'], $vdata['timezone']));
	 
	 $data['navmansh'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $vdata['date'], $vdata['month'], $vdata['year'], $vdata['hour'], $vdata['minute'], $vdata['latitude'], $vdata['longitude'], $vdata['timezone']));
		}
		
	echo \CI::load()->view('customer/user_chart', $data, TRUE);
	exit;
	
	}
	
	public function change_password(){
			 \CI::Login()->isLoggedIn('my-account');
    	      $data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
			  
  				 \CI::load()->library('form_validation');
				 \CI::form_validation()->set_rules('old_password', 'Please enter old password', 'required');
       			 \CI::form_validation()->set_rules('password', 'Please enter password', 'required');
       			 \CI::form_validation()->set_rules('confirm_password', 'Please enter confirm Password', 'required|matches[password]');
           
		   $data['message'] = '';
		    if (\CI::form_validation()->run() !== FALSE)
				{
						$password = \CI::input()->post('password');
						
						if(\CI::Customers()->chack_old_password($data['customer']['email'], \CI::input()->post('old_password')))
						{
						\CI::Customers()->change_password($data['customer']['email'], \CI::input()->post('password'));
						$data['message'] = 'Your password has been changed.';
						}else{
						 $data['error'] = 'Your enter wrong old password.';
						}
						
				}
					
	
			$this->partial('/customer/header', $data);
			$this->partial('/customer/change_password', $data);
            $this->partial('/customer/footer', $data);
	}
	
	public function questions_delete($id)
    {
	
        if ($id)
        { 
            $question = \CI::Customers()->get_question($id);
            //if the customer does not exist, redirect them to the customer list with an error
            if (!$question)
            {
                \CI::session()->set_flashdata('error', 'Not forund');
              
            }
            else
            {
                //if the customer is legit, delete them
                \CI::Customers()->delete_question($id);
                \CI::session()->set_flashdata('message', 'Question has been deleted');
             
            }
        }
        else
        {
            //if they do not provide an id send them to the customer list page with an error
            \CI::session()->set_flashdata('error', 'Not forund');
            
        }
		exit($id);	
    }
	
}
