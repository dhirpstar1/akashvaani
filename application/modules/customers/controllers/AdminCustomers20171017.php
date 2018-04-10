<?php namespace GoCart\Controller;
/**
 * AdminCustomers Class
 *
 * @package GoCart
 * @subpackage Controllers
 * @category AdminCustomers
 * @author Clear Sky Designs
 * @link http://gocartdv.com
 */

class AdminCustomers extends Admin {
    //this is used when editing or adding a customer
    var $customer_id = false; 

    public function __construct()
    { 
        parent::__construct();

        \CI::load()->model(array('Customers', 'Locations'));
        \CI::load()->helper('formatting_helper');
        \CI::lang()->load('customers');
    }
    
    public function index($field='id', $by='DESC', $page=0)
    {
		$where = "WHERE customers.is_guest = 0 ";
        //we're going to use flash data and redirect() after form submissions to stop people from refreshing and duplicating submissions
        //\CI::session()->set_flashdata('message', 'this is our message');
        if(\CI::input()->post('customer_id')){$where .= " AND customers.customer_id = '".\CI::input()->post('customer_id')."'";}
		if(\CI::input()->post('customer_email')){ $where .= " AND customers.email = '".\CI::input()->post('customer_email')."'";	}
		if(\CI::input()->post('customer_name')){ $where .= " AND customers.firstname LIKE '%".\CI::input()->post('customer_name')."%'";	}
		$numrows = 50;
		//$sql = 'SELECT customers.* FROM customers '.$where.' ORDER BY '.$field.' '.$by;

				switch(\CI::input()->post('option')){
						case 1:
						$where .= " AND customer_questions.payment_status = 0";
						$sql = 'SELECT customers.id,customers.customer_id,customers.firstname,customers.lastname ,customers.email,customers.phone, customers.active, customers.free_question, customer_questions.payment_status FROM customers LEFT JOIN customer_questions ON customer_questions.customer_id = customers.id '.$where.' ORDER BY customers.'.$field.' '.$by;
						$numrows = 500;
						break;
						case 2:
						$where .= "";
						$sql = 'SELECT customers.id,customers.customer_id,customers.firstname,customers.lastname ,customers.email,customers.phone, customers.active, customers.free_question, COUNT(customer_questions.id) as qtotal FROM customers LEFT JOIN customer_questions ON customer_questions.customer_id = customers.id '.$where.' GROUP BY  customer_questions.customer_id HAVING qtotal = 1 ORDER BY customers.'.$field.' '.$by;
						$numrows = 500;
						break;
						case 3:
						$where .= " AND customers.free_question = 1";
						$sql = 'SELECT customers.id,customers.customer_id,customers.firstname,customers.lastname ,customers.email,customers.phone, customers.active, customers.free_question FROM customers '.$where.' ORDER BY '.$field.' '.$by;
						$numrows = 500;
						break;
						case 4:
						$where .= " AND customers.free_question = 0";
						$sql = 'SELECT customers.id,customers.customer_id,customers.firstname,customers.lastname ,customers.email,customers.phone, customers.active, customers.free_question FROM customers '.$where.' ORDER BY '.$field.' '.$by;
						$numrows = 500;
						break;
						
						default:
						$sql = 'SELECT customers.id,customers.customer_id,customers.firstname,customers.lastname ,customers.email,customers.phone, customers.active, customers.free_question FROM customers '.$where.' ORDER BY customers.'.$field.' '.$by;
						
				}
	//echo $sql; exit;

			
			//$customer_id = \CI::Customers()->get_customer_byemailid(\CI::input()->post('customer_id'), \CI::input()->post('customer_email'));
			//redirect('admin/customers/form/'.$customer_id);
		//$sql = 'SELECT customers.* FROM customers LEFT JOIN customer_questions ON customer_questions.customer_id = customers.id GROUP BY customers.id ORDER BY customers.id DESC';
        
	    //echo '<pre>';
	//	print_r($sql);
		//exit;	
		$data['option']		= \CI::input()->post('option');
		$data['page_title'] = lang('customers');
        $data['customers'] = \CI::Customers()->get_customers_sql($sql, $numrows, $page);
     
		
        \CI::load()->library('pagination');

        $config['base_url'] = site_url('/admin/customers/'.$field.'/'.$by.'/');
        $config['total_rows'] = \CI::Customers()->count_customers_sql($sql);
        $config['per_page'] = $numrows;
        $config['uri_segment'] = 5;
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
        
        $data['page'] = $page;
        $data['field'] = $field;
        $data['by'] = $by;
        
        $this->view('customers', $data);
    }
    
    public function export()
    {
        $customers = \CI::Customers()->get_customer_export();
        
        \CI::load()->helper('download_helper');
        force_download('customers.json', json_encode($customers));
    }
	public function send_message(){ 
	error_reporting(0);
	if(\CI::input()->post('customer_ids')){
		$customers = \CI::Customers()->get_customers_form_message(explode(',', \CI::input()->post('customer_ids')));
		$count['messagecount'] = 0;
		$count['smscount'] = 0;
		if($customers){
		    foreach($customers as $customer){
				 if(\CI::Customers()->send_message($customer, \CI::input()->post('email_id'))){
				 $count['messagecount']++;
				 }
				if( $customer['phone']){
				  \CI::Customers()->send_sms_message($customer, \CI::input()->post('sms_id'));
				   $count['smscount']++;
				  }
			}
		}		
		echo "(".$count['messagecount'].") email(s) and (".$count['smscount'].') sms has been sent successfully.';
		exit;
	}
	if(\CI::input()->post('select_customera')):
		foreach(\CI::Messages()->get_list() as $message){
			$messages[$message['id']] = $message['name'];
		}
	$data['messages'] = array_reverse($messages);
	endif;
	$data['customers_id'] = \CI::input()->post('select_customera');
	$this->partial('send_messages', $data);
	
	
	}
	
	

    public function form($id = false)
    {
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');
        
        $data['page_title'] = lang('customer_form');
        
        //default values are empty if the customer is new
        $data['id'] = '';
        $data['group_id'] = '';
        $data['firstname'] = '';
        $data['lastname'] = '';
        $data['email'] = '';
        $data['phone'] = '';
        $data['company'] = '';
        $data['email_subscribe'] = '';
        $data['active'] = false;
                
        // get group list
        $groups = \CI::Customers()->get_groups();
        foreach($groups as $group)
        {
            $group_list[$group->id] = $group->name;
        }
        $data['group_list'] = $group_list;
        
        if ($id)
        { 
            $this->customer_id = $id;
            $customer = \CI::Customers()->get_customer($id);
			
			$data['customer_questions'] = \CI::Customers()->get_customer_questions($id);
			
		
            //if the customer does not exist, redirect them to the customer list with an error
            if (!$customer)
            {
                \CI::session()->set_flashdata('error', lang('error_not_found'));
                redirect('admin/customers');
            }
            
            //set values to db values
            $data['id'] = $customer->id;
            $data['group_id'] = $customer->group_id;
            $data['firstname'] = $customer->firstname;
            $data['lastname'] = $customer->lastname;
            $data['email'] = $customer->email;
            $data['phone'] = $customer->phone;
            $data['about_me'] = $customer->about_me;
			
			$data['day'] 					= $customer->day;
			$data['month'] 					= $customer->month;
			$data['year'] 					= $customer->year;
			if($customer->day):
			$data['dob'] 					= $customer->day.'/'.$customer->month.'/'.$customer->year;
			endif;
			
			$data['hour'] 					= $customer->hour;
			$data['minute'] 				= $customer->minute;
			if($customer->hour):
			$data['dot'] 					= $customer->hour.":".$customer->minute;
			endif;
			
			$data['gender'] 				= $customer->gender;
			$data['address'] 				= $customer->address;
			$data['gender'] 				= $customer->gender;
			$data['birth_place'] 			= $customer->birth_place;		
			$data['birth_place_latitude'] 	= $customer->birth_place_latitude;
			$data['birth_place_longitude'] 	= $customer->birth_place_longitude;
			$data['birth_timezone'] 		= $customer->birth_timezone;
			$data['answer'] 				= $customer->answer;
			$data['answerlink'] 			= $customer->answerlink;
			
			
			
            $data['active'] = $customer->active;
            $data['email_subscribe'] = $customer->email_subscribe;
        }
        
        \CI::form_validation()->set_rules('firstname', 'lang:firstname', 'trim|required|max_length[32]');
        //\CI::form_validation()->set_rules('lastname', 'lang:lastname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email', 'lang:email', ['trim', 'required', 'valid_email', 'max_length[128]', ['email_callable', function($str) {
            $email = \CI::Customers()->check_email($str, $this->customer_id);
            if ($email)
            {
                \CI::form_validation()->set_message('email_callable', lang('error_email_in_use'));
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }]]);
        \CI::form_validation()->set_rules('phone', 'lang:phone', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('active', 'lang:active');
        \CI::form_validation()->set_rules('group_id', 'group_id', 'numeric');
        \CI::form_validation()->set_rules('email_subscribe', 'email_subscribe', 'numeric|max_length[1]');
        
        //if this is a new account require a password, or if they have entered either a password or a password confirmation
        if (\CI::input()->post('password') != '' || \CI::input()->post('confirm') != '' || !$id)
        {
            \CI::form_validation()->set_rules('password', 'lang:password', 'required|min_length[6]|sha1');
            \CI::form_validation()->set_rules('confirm', 'lang:confirm_password', 'required|sha1|matches[password]');
        }
        
                
        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('customer_form', $data);
        }
        else
        {
            $save['id'] = $id;
            $save['group_id'] 				= \CI::input()->post('group_id');
            $save['firstname'] 				= \CI::input()->post('firstname');
            $save['lastname'] 				= \CI::input()->post('lastname');
            $save['email'] 					= \CI::input()->post('email');
            $save['phone'] 					= \CI::input()->post('phone');
            $save['active'] 				= (bool)\CI::input()->post('active');
            $save['email_subscribe'] 		= (bool)\CI::input()->post('email_subscribe');

			 $save['about_me'] 				= \CI::input()->post('about_me');
			 list($save['day'], $save['month'], $save['year']) = explode("/", \CI::input()->post('dob'));
			 list($save['hour'], $save['minute']) = explode("/", \CI::input()->post('dot'));
			 
			 $save['address'] 				= \CI::input()->post('address');
			  
			 $save['birth_place'] = \CI::input()->post('birth_place');
			 $save['birth_place_latitude'] = \CI::input()->post('birth_place_latitude');
			 $save['birth_place_longitude'] = \CI::input()->post('birth_place_longitude');
			 $save['birth_timezone'] = \CI::input()->post('birth_timezone');
            
            if (\CI::input()->post('password') != '' || !$id)
            {
                $save['password'] = \CI::input()->post('password');
            }
            if(\CI::input()->post('answer')){
			$save['answer'] 						= \CI::input()->post('answer');
			$save['answerlink'] 					= \CI::input()->post('answerlink');
			
			 \CI::Customers()->sendanswernotification($save);
			 if($save['phone']){
			 \CI::Pages()->send_sms($save['phone'], 'You have receive answer to your question.  Login to your account http://bit.ly/2oHS5t6, You have received answers in the form of voice recording. For any queries email us at connect@akashvaani.com or call us at 9599564835.');
			 }
			}
			
			
            \CI::Customers()->save($save);
            
            \CI::session()->set_flashdata('message', lang('message_saved_customer'));
            
            //go back to the customer list
            redirect('admin/customers');
        }
    }
    
    public function addresses($id = false)
    {
        $data['customer'] = \CI::Customers()->get_customer($id);

        //if the customer does not exist, redirect them to the customer list with an error
        if (!$data['customer'])
        {
            \CI::session()->set_flashdata('error', lang('error_not_found'));
            redirect('admin/customers');
        }
        
        $data['addresses'] = \CI::Customers()->get_address_list($id);
        
        $data['page_title'] = sprintf(lang('addresses_for'), $data['customer']->firstname.' '.$data['customer']->lastname);
        
        $this->view('customer_addresses', $data);
    }
    
    public function delete($id = false)
    {
        if ($id)
        { 
            $customer = \CI::Customers()->get_customer($id);
            //if the customer does not exist, redirect them to the customer list with an error
            if (!$customer)
            {
                \CI::session()->set_flashdata('error', lang('error_not_found'));
                redirect('admin/customers');
            }
            else
            {
                //if the customer is legit, delete them
                \CI::Customers()->delete($id);
                
                \CI::session()->set_flashdata('message', lang('message_customer_deleted'));
                redirect('admin/customers');
            }
        }
        else
        {
            //if they do not provide an id send them to the customer list page with an error
            \CI::session()->set_flashdata('error', lang('error_not_found'));
            redirect('admin/customers');
        }
    }
    
    // customer groups
    public function groups()
    {
        $data['groups'] = \CI::Customers()->get_groups();
        $data['page_title'] = lang('customer_groups');
        
        $this->view('customer_groups', $data);
    }
    
    public function groupForm($id=0)
    {
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');
        
        $data['page_title'] = lang('customer_group_form');
        
        //default values are empty if the customer is new
        $data['id'] = '';
        $data['name'] = '';
        
        if($id)
        {
            $group = \CI::Customers()->get_group($id);

            $data['id'] = $group->id;
            $data['name'] = $group->name;
        }
        
        \CI::form_validation()->set_rules('name', 'lang:group_name', 'trim|required|max_length[50]');

        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('customer_group_form', $data);
        }
        else
        {
            if($id)
            {
                $save['id'] = $id;
            }
            
            $save['name'] = \CI::input()->post('name');
            
            \CI::Customers()->save_group($save);
            \CI::session()->set_flashdata('message', lang('message_saved_group'));
            
            //go back to the customer group list
            redirect('admin/customers/groups');
        }
    }
    
    public function deleteGroup($id)
    {
        
        if(empty($id))
        {
            return;
        }
        
        \CI::Customers()->delete_group($id);
        
        //go back to the customer list
        redirect('admin/customers/groups');
    }
    
    public function addressList($customer_id)
    {
        $data['address_list'] = \CI::Customers()->get_address_list($customer_id);
        
        $this->view('address_list', $data);
    }
    
    public function addressForm($customer_id, $id = false)
    {
        $data['id'] = $id;
        $data['company'] = '';
        $data['firstname'] = '';
        $data['lastname'] = '';
        $data['email'] = '';
        $data['phone'] = '';
        $data['address1'] = '';
        $data['address2'] = '';
        $data['city'] = '';
        $data['country_id'] = '';
        $data['zone_id'] = '';
        $data['zip'] = '';
        
        $data['customer_id'] = $customer_id;
        
        $data['page_title'] = lang('address_form');
        //get the countries list for the dropdown
        $data['countries_menu'] = \CI::Locations()->get_countries_menu();
        
        if($id)
        {
            $address = \CI::Customers()->get_address($id);
            
            //fully escape the address
            form_decode($address);
            
            //merge the array
            $data = array_merge($data, $address);
            
            $data['zones_menu'] = \CI::Locations()->get_zones_menu($data['country_id']);
        }
        else
        {
            //if there is no set ID, the get the zones of the first country in the countries menu
            $country_keys = array_keys($data['countries_menu']);
            $data['zones_menu'] = \CI::Locations()->get_zones_menu(array_shift($country_keys));
        }
        \CI::load()->library('form_validation');
        \CI::form_validation()->set_rules('company', 'lang:company', 'trim|max_length[128]');
        \CI::form_validation()->set_rules('firstname', 'lang:firstname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('lastname', 'lang:lastname', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('email', 'lang:email', 'trim|required|valid_email|max_length[128]');
        \CI::form_validation()->set_rules('phone', 'lang:phone', 'trim|required|max_length[32]');
        \CI::form_validation()->set_rules('address1', 'lang:address', 'trim|required|max_length[128]');
        \CI::form_validation()->set_rules('address2', 'lang:address', 'trim|max_length[128]');
        \CI::form_validation()->set_rules('city', 'lang:city', 'trim|required');
        \CI::form_validation()->set_rules('country_id', 'lang:country', 'trim|required');
        \CI::form_validation()->set_rules('zone_id', 'lang:state', 'trim|required');
        \CI::form_validation()->set_rules('zip', 'lang:zip', 'trim|required|max_length[32]');
        
        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('customer_address_form', $data);
        }
        else
        {
            
            $a['customer_id'] = $customer_id; // this is needed for new records
            $a['id'] 						= (empty($id))?'':$id;
            $a['field_data']['company'] 	= \CI::input()->post('company');
            $a['field_data']['firstname'] 	= \CI::input()->post('firstname');
            $a['field_data']['lastname'] 	= \CI::input()->post('lastname');
            $a['field_data']['email'] 		= \CI::input()->post('email');
            $a['field_data']['phone'] 		= \CI::input()->post('phone');
            $a['field_data']['address1'] 	= \CI::input()->post('address1');
            $a['field_data']['address2'] 	= \CI::input()->post('address2');
            $a['field_data']['city'] 		= \CI::input()->post('city');
            $a['field_data']['zip'] 		= \CI::input()->post('zip');
            
            
            $a['field_data']['zone_id'] 	= \CI::input()->post('zone_id');
            $a['field_data']['country_id'] 	= \CI::input()->post('country_id');
            
            $country = \CI::Locations()->get_country(\CI::input()->post('country_id'));
            $zone = \CI::Locations()->get_zone(\CI::input()->post('zone_id'));
            
            $a['field_data']['zone'] = $zone->code; // save the state for output formatted addresses
            $a['field_data']['country'] = $country->name; // some shipping libraries require country name
            $a['field_data']['country_code'] = $country->iso_code_2; // some shipping libraries require the code 
            
            \CI::Customers()->save_address($a);
            \CI::session()->set_flashdata('message', lang('message_saved_address'));
            
            redirect('admin/customers/addresses/'.$customer_id);
        }
    }
    
    
    public function deleteAddress($customer_id = false, $id = false)
    {
        if ($id)
        { 
            $address = \CI::Customers()->get_address($id);
            //if the customer does not exist, redirect them to the customer list with an error
            if (!$address)
            {
                \CI::session()->set_flashdata('error', lang('error_address_not_found'));
                
                if($customer_id)
                {
                    redirect('admin/customers/addresses/'.$customer_id);
                }
                else
                {
                    redirect('admin/customers');
                }
                
            }
            else
            {
                //if the customer is legit, delete them
                \CI::Customers()->delete_address($id, $customer_id); 
                \CI::session()->set_flashdata('message', lang('message_address_deleted'));
                
                if($customer_id)
                {
                    redirect('admin/customers/addresses/'.$customer_id);
                }
                else
                {
                    redirect('admin/customers');
                }
            }
        }
        else
        {
            //if they do not provide an id send them to the customer list page with an error
            \CI::session()->set_flashdata('error', lang('error_address_not_found'));
            
            if($customer_id)
            {
                redirect('admin/customers/addresses/'.$customer_id);
            }
            else
            {
                redirect('admin/customers');
            }
        }
    }
	
	
	
	public function enquiries($field='id', $by='DESC', $page=0)
    {
	
        //we're going to use flash data and redirect() after form submissions to stop people from refreshing and duplicating submissions
        //\CI::session()->set_flashdata('message', 'this is our message');
        
        $data['page_title'] = 'Customer Questions';
        $data['enquiries'] = \CI::Customers()->get_enquiries(50,$page, $field, $by);

        \CI::load()->library('pagination');

        $config['base_url'] = site_url('/admin/customers/enquiries/'.$field.'/'.$by.'/');
        $config['total_rows'] = \CI::Customers()->count_enquiries();
		
        $config['per_page'] = 50;
        $config['uri_segment'] = 6;
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
        
        $data['page'] = $page;
        $data['field'] = $field;
        $data['by'] = $by;
        
        $this->view('enquiries', $data);
    }
	
	public function questions($field='id', $by='DESC', $page=0)
    {
	
        //we're going to use flash data and redirect() after form submissions to stop people from refreshing and duplicating submissions
        //\CI::session()->set_flashdata('message', 'this is our message');
        
        $data['page_title'] = 'Customer Questions';
        $data['questions'] = \CI::Customers()->get_questions(50,$page, $field, $by);

        \CI::load()->library('pagination');

        $config['base_url'] = site_url('/admin/customers/questions/'.$field.'/'.$by.'/');
        $config['total_rows'] = \CI::Customers()->count_questions();
		
        $config['per_page'] = 50;
        $config['uri_segment'] = 6;
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
        
        $data['page'] = $page;
        $data['field'] = $field;
        $data['by'] = $by;
        
        $this->view('questions', $data);
    }
	
	 public function questions_form($id = false)
    {
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');
        
        $data['page_title'] = lang('customer_form');
        
        //default values are empty if the customer is new
        $data['id'] = '';
        $data['question'] = '';
        $data['answer'] = '';
        $data['answer_link'] = '';

        if ($id)
        { 
            $question = \CI::Customers()->get_report_form($id);

            //if the customer does not exist, redirect them to the customer list with an error
            if (!$question)
            {
                \CI::session()->set_flashdata('error', 'No question found');
                redirect('admin/customers/questions');
            }
            
            //set values to db values
            $data['id'] 			= $question->id;
            $data['customer_id'] 	= $question->customer_id;
            $data['booking_id'] 	= $question->booking_id;
            $data['question'] 		= $question->question;
            $data['answer'] 		= $question->answer;
            $data['answer_link'] 	= $question->answer_link;
			$data['questiondata']		= $question;
        }
        
        \CI::form_validation()->set_rules('question', 'Please enter question', 'trim|required|max_length[500]');
        \CI::form_validation()->set_rules('answer', 'Please enter answer.', 'trim|required|max_length[500]');
      
                
        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('question_form', $data);
        }
        else
        {
            $save['id'] 						= $id;
            $save['question'] 					= \CI::input()->post('question');
            $save['answer'] 					= \CI::input()->post('answer');
			$save['answer_link'] 				= \CI::input()->post('answer_link');
			$save['answer_date'] 				= date('Y-m-d h:i');
            
            \CI::Customers()->savequestion($save);
            \CI::session()->set_flashdata('message', 'Question has been saved.');
            //go back to the customer list
			
			$customer = \CI::Customers()->get_report_question($id);
			
			$save['firstname'] = $customer->first_name;
			$save['email']	   = $customer->email;	
		
			 \CI::Customers()->sendanswernotification($save);
			 
			 if($customer->phone){
			 \CI::Pages()->send_sms($customer->phone, 'You have receive answer to your question.  Login to your account http://bit.ly/2oHS5t6, You have received answers in the form of voice recording. For any queries email us at connect@akashvaani.com or call us at 9599564835.');
			 }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
	
	
	 public function questions_delete($id = false)
    {
	
        if ($id)
        { 
            $question = \CI::Customers()->get_question($id);
            //if the customer does not exist, redirect them to the customer list with an error
            if (!$question)
            {
                \CI::session()->set_flashdata('error', 'Not forund');
               redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                //if the customer is legit, delete them
                \CI::Customers()->delete_question($id);
                \CI::session()->set_flashdata('message', 'Question has been deleted');
              redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            //if they do not provide an id send them to the customer list page with an error
            \CI::session()->set_flashdata('error', 'Not forund');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
	
	
	public function questions_get_reports($type = 'basic_horoscope_pdf', $field='id', $by='DESC', $page=0)
    {
	     
        $data['page_title'] = 'Customer Get Reports';
        $data['questions'] = \CI::Customers()->get_reports_questions($type, 50, $page, $field, $by);

        \CI::load()->library('pagination');

        $config['base_url'] = site_url('/admin/customers/questionsgetreports/'.$type.'/'.$field.'/'.$by.'/');
        $config['total_rows'] = \CI::Customers()->count_get_reports_questions($type);
		
        $config['per_page'] 		= 50;
        $config['uri_segment'] 		= 7;
        $config['first_link'] 		= 'First';
        $config['first_tag_open'] 	= '<li>';
        $config['first_tag_close'] 	= '</li>';
        $config['last_link'] 		= 'Last';
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
        
        $data['page'] = $page;
		$data['type'] = $type;
		if($type == 'basic_horoscope_pdf'){
		 $data['title'] = 'Basic reports (25 Pages)'; 
		 }elseif($type == 'pro_horoscope_pdf'){
		 $data['title'] = 'Extended reports (70 Pages)'; 
		 }elseif($type == 'match_making_pdf'){
		 $data['title'] = 'Match Making Reports'; 
		 }
		 
		 
		 
        $data['field'] = $field;
        $data['by'] = $by;
        
        $this->view('questions_get_reports', $data);
    }
    
	
	
	public function download_report($id = false, $type = 'basic_horoscope')
    {   if ($id)
        { 
            $question = \CI::Customers()->get_report_question($id);		
			\CI::load()->file(FCPATH . 'api/php/vedicRishiClientpdf.php');
			$vedicRishi = \CI::VedicRishiClient(600204, 'c0f09edcfa187c6ddd0677b1a8074eb1');

			if($type == 'match_making'){
			$mdata['name'] 		= ucwords(strtolower($question->mname)).' & '.ucwords(strtolower($question->fname));
			$mdata['m_first_name'] 	= ucwords(strtolower($question->mname));
			$mdata['m_last_name'] 	= '';
			$mdata['m_day'] 		= $question->mday;
			$mdata['m_month'] 		= $question->mmonth;
			$mdata['m_year'] 		= $question->myear;
			$mdata['m_hour'] 		= $question->mhour;
			$mdata['m_minute'] 		= $question->mminute;
			$mdata['m_latitude'] 	= $question->mlatitude;
			$mdata['m_longitude'] 	= $question->mlongitude;
			$mdata['m_timezone'] 	= $question->mtimezone;
			$mdata['m_place'] 		= $question->mbirth_place;
		
			$mdata['f_first_name'] 	= ucwords(strtolower($question->fname));
			$mdata['f_last_name'] 	= '';
			$mdata['f_day'] 		= $question->fday;
			$mdata['f_month'] 		= $question->fmonth;
			$mdata['f_year'] 		= $question->fyear;
			$mdata['f_hour'] 		= $question->fhour;
			$mdata['f_minute'] 		= $question->fminute;
			$mdata['f_latitude'] 	= $question->flatitude;
			$mdata['f_longitude'] 	= $question->flongitude;
			$mdata['f_timezone'] 	= $question->ftimezone;
			$mdata['f_place'] 		= $question->fbirth_place;
			
			}else{
			$mdata['name'] 		= ucwords(strtolower($question->mname));
			$mdata['gender'] 	= 'male';
			$mdata['day'] 		= $question->mday;
			$mdata['month'] 	= $question->mmonth;
			$mdata['year'] 		= $question->myear;
			$mdata['hour'] 		= $question->mhour;
			$mdata['min'] 		= $question->mminute;
			$mdata['lat'] 		= $question->mlatitude;
			$mdata['lon'] 		= $question->mlongitude;
			$mdata['language'] 	= ($question->language) ? $question->language :'en';
			$mdata['tzone'] 	= $question->mtimezone;
			$mdata['place'] 	= $question->mbirth_place;
			}
			
			$mdata['language'] = ($question->language) ? $question->language :'en';
			$mdata['chart_style'] = 'NORTH_INDIAN';
			$mdata['footer_link'] = 'Akashvaani.com';
			$mdata['logo_url'] = 'https://www.akashvaani.com/assets/astrology/img/logo1.png';
			$mdata['company_name'] = 'Akashvaani';
			$mdata['domain_url'] = 'www.akashvaani.com';
			$mdata['company_email'] = 'connect@akashvaani.com';
			$mdata['company_landline'] = '9122123222';
			$mdata['company_mobile'] = CONTACT_NUMBER;
		
			$apidata = json_decode($vedicRishi->pdfCall("/".$type."_pdf", $mdata));
			if($apidata->msg == 'Data Validation Failed !! Kindly check your request data.'){		
			\CI::session()->set_flashdata('error', $apidata->msg);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
			$report_path = FCPATH.'uploads/reports/report_'.$type.'_'.$id.'.pdf';	
			file_put_contents($report_path, file_get_contents($apidata->pdf_url));	

			$file = \CI::Customers()->create_pdf($report_path, $mdata, true, $type);	
			}
			exit;
			
	}
		
	}		
	public function send_report($id = false, $type = 'basic_horoscope')
    {
	
        if ($id)
        { 
            $question = \CI::Customers()->get_report_question($id);		
			
			\CI::load()->file(FCPATH . 'api/php/vedicRishiClientpdf.php');
			$vedicRishi = \CI::VedicRishiClient(600204, 'c0f09edcfa187c6ddd0677b1a8074eb1');
			
			if($type == 'match_making'){
			$mdata['name'] 		= ucwords(strtolower($question->mname));
			$mdata['m_first_name'] 	= ucwords(strtolower($question->mname));
			$mdata['m_last_name'] 	= '';
			$mdata['m_day'] 		= $question->mday;
			$mdata['m_month'] 		= $question->mmonth;
			$mdata['m_year'] 		= $question->myear;
			$mdata['m_hour'] 		= $question->mhour;
			$mdata['m_minute'] 		= $question->mminute;
			$mdata['m_latitude'] 	= $question->mlatitude;
			$mdata['m_longitude'] 	= $question->mlongitude;
			$mdata['m_timezone'] 	= $question->mtimezone;
			$mdata['m_place'] 		= $question->mbirth_place;
		
			$mdata['f_first_name'] 	= ucwords(strtolower($question->fname));
			$mdata['f_last_name'] 	= '';
			$mdata['f_day'] 		= $question->fday;
			$mdata['f_month'] 		= $question->fmonth;
			$mdata['f_year'] 		= $question->fyear;
			$mdata['f_hour'] 		= $question->fhour;
			$mdata['f_minute'] 		= $question->fminute;
			$mdata['f_latitude'] 	= $question->flatitude;
			$mdata['f_longitude'] 	= $question->flongitude;
			$mdata['f_timezone'] 	= $question->ftimezone;
			$mdata['f_place'] 		= $question->fbirth_place;
			
			}else{
			$mdata['name'] 		= ucwords(strtolower($question->mname));
			$mdata['gender'] 	= 'male';
			$mdata['day'] 		= $question->mday;
			$mdata['month'] 	= $question->mmonth;
			$mdata['year'] 		= $question->myear;
			$mdata['hour'] 		= $question->mhour;
			$mdata['min'] 		= $question->mminute;
			$mdata['lat'] 		= $question->mlatitude;
			$mdata['lon'] 		= $question->mlongitude;
			$mdata['language'] 	= ($question->language) ? $question->language :'en';
			$mdata['tzone'] 	= $question->mtimezone;
			$mdata['place'] 	= $question->mbirth_place;
			}
			
			$mdata['chart_style'] = 'NORTH_INDIAN';
			$mdata['footer_link'] = 'Akashvaani.com';
			$mdata['logo_url'] = 'https://www.akashvaani.com/assets/astrology/img/logo1.png';
			$mdata['company_name'] = 'Akashvaani';
			$mdata['domain_url'] = 'www.akashvaani.com';
			$mdata['company_email'] = 'connect@akashvaani.com';
			$mdata['company_landline'] = '9122123222';
			$mdata['company_mobile'] = CONTACT_NUMBER;
			
			$apidata = json_decode($vedicRishi->pdfCall("/".$type."_pdf", $mdata));
			if($apidata->msg == 'Data Validation Failed !! Kindly check your request data.'){		
			\CI::session()->set_flashdata('error', $apidata->msg);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
			$report_path = FCPATH.'uploads/reports/report_'.$type.'_'.$id.'.pdf';	
			file_put_contents($report_path, file_get_contents($apidata->pdf_url));		
			$file = \CI::Customers()->create_pdf($report_path, $mdata, false, $type);
			}
						
			$emaildata['name'] 				= trim($question->first_name.' '.$question->last_name);
			$emaildata['email'] 			= trim($question->email);
			$emaildata['phone'] 			= trim($question->phone);
			$emaildata['download_link'] 	= $apidata->pdf_url;
			$emaildata['report_path'] 		= $file;

			\CI::Customers()->sendreporttocustomer($emaildata);
			\CI::Customers()->send_sms_message($emaildata, 19);
			//unlink($emaildata['report_path']);
			$updatequestion['id']			= $id;
			$updatequestion['answer_date'] 	= date('Y-m-d h:i');	
			$updatequestion['answer'] 		= 'Report has been sent.';
			$updatequestion['answer_link'] 	= base_url('uploads/reports/report_'.$type.'_'.$id.'.pdf');	
			\CI::Customers()->savequestion($updatequestion);
					
			redirect('/admin/customers/questionsgetreports/'.$type."_pdf");
			exit;
		}
	}		
	
	 public function report_form($id = false)
    {
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');
             
   
        if ($id)
        { 
            $data['question'] = \CI::Customers()->get_report_form($id);
		  //if the customer does not exist, redirect them to the customer list with an error
            if (!$data['question'])
            {
                \CI::session()->set_flashdata('error', 'No question found');
                redirect('admin/customers/questionsgetreports');
            }
        }
        
        \CI::form_validation()->set_rules('mname', 'name', 'trim|required|max_length[500]');
        \CI::form_validation()->set_rules('email', 'email', 'trim|required|max_length[500]');
		\CI::form_validation()->set_rules('phone', 'phone', 'trim|required|max_length[500]');
                      
        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('report_form', $data);
        }
        else
        {
    			
            $booking['first_name'] 					= \CI::input()->post('first_name');
            $booking['email'] 						= \CI::input()->post('email');
			$booking['phone'] 						= \CI::input()->post('phone');
			$booking['language'] 					= \CI::input()->post('language');
			$booking['gender'] 						= \CI::input()->post('gender');
            
			$booking_options['mbirth_place']		= \CI::input()->post('mbirth_place');
			$booking_options['mlatitude']			= \CI::input()->post('mlatitude');
			$booking_options['mlongitude']			= \CI::input()->post('mlongitude');
			$booking_options['mtimezone']			= \CI::input()->post('mtimezone');
			
			$booking_options['mname']				= \CI::input()->post('mname');
			$booking_options['mminute']				= \CI::input()->post('mminute');
			$booking_options['mhour']				= \CI::input()->post('mhour');
			$booking_options['mday']				= \CI::input()->post('mday');
			$booking_options['mmonth']				= \CI::input()->post('mmonth');
			$booking_options['myear']				= \CI::input()->post('myear');
			
			
			
			$booking_options['fbirth_place']		= \CI::input()->post('fbirth_place');
			$booking_options['flatitude']			= \CI::input()->post('flatitude');
			$booking_options['flongitude']			= \CI::input()->post('flongitude');
			$booking_options['ftimezone']			= \CI::input()->post('ftimezone');
			
			$booking_options['fname']				= \CI::input()->post('fname');
			$booking_options['fminute']				= \CI::input()->post('fminute');
			$booking_options['fhour']				= \CI::input()->post('fhour');
			$booking_options['fday']				= \CI::input()->post('fday');
			$booking_options['fmonth']				= \CI::input()->post('fmonth');
			$booking_options['fyear']				= \CI::input()->post('fyear');


            \CI::Customers()->update_booking_and_options($booking, $booking_options, $data['question']->booking_id);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
	
	public function send_payment_reminder($queid){
		$data = \CI::Customers()->get_report_form($queid);
		$link = base_url('questions_payment/'.$data->booking_id);
				
		\CI::Customers()->send_payment_reminder($link, $data);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function questions_read_mark($queid){
		exit(\CI::Customers()->questions_read_mark($queid));
		
	}
	
}