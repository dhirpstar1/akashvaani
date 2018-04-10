<?php
/**
 * Search Class
 *
 * @package     GoCart
 * @subpackage  Models
 * @category    Search
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

Class Service extends CI_Model
{

    function recordEmail($email)
    {  
        CI::db()->where('email', $email);
        $exists = CI::db()->count_all_results('subscribes');
        if ($exists < 1)
        {
            CI::db()->insert('subscribes', array('email'=>$email, 'date' => date('Y-m-d')));
		return 'Thank you for subscription.';	
        }else{
		return 'Already subscribed.';
		}
        
    }
	function product_enquiry($data)
		{  
			CI::db()->insert('products_inquiries', $data);
			GoCart\Emails::sendproduct_enquiry($data, 25);
			return 'Thank you for your enquiry.';	
		}
	function kundalies($customer_id, $count =false, $limit =0, $offset=0)
	{
		CI::db()->select('*');
		CI::db()->order_by('id', 'DESC');
		
		if($count){	return CI::db()->get_where('module_bookings_options', array('prfessional_id'=>$customer_id))->num_rows();
		}else{		
					CI::db()->where('prfessional_id =', $customer_id);
					CI::db()->limit($limit, $offset);					
			return	CI::db()->get('module_bookings_options')->result();
		}
	}
	
	function get_kundali_data($id)
	{
		 return CI::db()->get_where('module_bookings_options', array('id'=>$id))->row();
	}
	function save_kundali($data)
	{
        return CI::db()->insert('module_bookings_options', $data);
    }
	function save_payment_link($data)
	{
		GoCart\Emails::sendcustomPaymentLink($data, 16);
		
		if($data['phone']){	$message = 'Payment Link. '.base_url('payment/'.$data['link_code']);
		CI::Pages()->send_sms($data['phone'], $message);}
        return CI::db()->insert('custom_service_payment', $data);
    }
	
	function update_question($booking_id, $informations)
	{			
		CI::db()->select('customer_questions.id');
        $result = CI::db()->get_where('customer_questions', array('booking_id' => $booking_id));
	    $number_questions = $result->num_rows();
		
		
		foreach($result->result() as $question){

		     		$updatedata['payment_status'] 			= 1;
					$updatedata['transaction_id'] 			= $informations['tracking_id'];
					$updatedata['transaction_amount'] 		= $informations['amount']/$number_questions;
					$updatedata['transaction_date'] 		= date('Y-m-d h:i');
					$updatedata['transaction_response'] 	= serialize($informations);
					
		CI::db()->where('id', $question->id);
		CI::db()->update('customer_questions', $updatedata);
		}
        
		return $number_questions;
    }
	function update_payment($id, $data)
	{			
		CI::db()->where('id', $id);
        return CI::db()->update('custom_service_payment', $data);
    }
	function custom_service_payment($id, $data){
	CI::db()->where('id', $id);
        return CI::db()->update('custom_service_payment', $data);
	}
	
	function sendPaymentSuccessNotification($id){
		CI::db()->select('*');
        $result = CI::db()->get_where('customer_questions', array('id' => $id));
		GoCart\Emails::sendPaymentNotification($result->row_array(), 17);
	}
	


	function sendPaymentNotification($booking_id, $data){		
		CI::db()->select('customer_questions.*, SUM(customer_questions.amount) as total_amount, module_bookings.first_name, module_bookings.last_name, module_bookings.email, module_bookings.phone');
		CI::db()->join('module_bookings', 'module_bookings.id = customer_questions.booking_id');
        $result = CI::db()->get_where('customer_questions', array('customer_questions.booking_id' => $booking_id))->row_array();
	
		CI::db()->select('customer_questions.*');
		//CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id');
        $emaildata['questions'] = CI::db()->get_where('customer_questions', array('customer_questions.booking_id' => $booking_id))->result_array();	
			CI::db()->select('module_bookings_options.*');
        $emaildata['booking_options'] = CI::db()->get_where('module_bookings_options', array('module_bookings_options.booking_id' => $booking_id))->row_array();	
				$emaildata['data'] = $result;
                $emaildata['special'] = $data['special'];
		$invoice =  \CI::Service()->create_invoice($emaildata);	
		$html =\CI::load()->view('_blocks/invoice_details', $emaildata, TRUE);
		if($result['question'] == 'Get Report.'){
		GoCart\Emails::sendPaymentNotification($result, 20, $invoice, $html);
			if($result['phone']){
			$loader = new \Twig_Loader_String();
       		$twig = new \Twig_Environment($loader);
		 	$cannedMessage = \CI::db()->where('id', '21')->get('canned_messages')->row_array();
	        $content = $twig->render($cannedMessage['content'], $result);
			CI::Pages()->send_sms($result['phone'], $content);
		}
		 $message = 'Thanks for ordering your Story of Life Booklet. You will receive it soon in your email.';
		}else{
		GoCart\Emails::sendPaymentNotification($result, 15, $invoice, $html);
		
		if($result['phone']){
			$loader = new \Twig_Loader_String();
       		$twig = new \Twig_Environment($loader);
		 	$cannedMessage = \CI::db()->where('id', '17')->get('canned_messages')->row_array();
	        $content = $twig->render($cannedMessage['content'], $result);
			CI::Pages()->send_sms($result['phone'], strip_tags($content));
		}	
		 $message ='Thanks for your question(s). We will get in touch with you shortly.';
		}
		return $message;
	}
	
    function booking($data){ 
        CI::db()->insert('module_bookings', $data);
            CI::load()->library('encrypt');
            CI::load()->helper('string');
            CI::load()->library('email');
            GoCart\Emails::sendBookingnotification($data);
        return 'Thank you for booking.';	
    }
    function booking_from_question($data, $customer){ 
        	CI::db()->insert('module_bookings', $data);
            CI::load()->library('encrypt');
            CI::load()->helper('string');
            CI::load()->library('email');
			$data['description'] = strip_tags($data['description']);
       return CI::db()->insert_id();	
    }
	 function insert_questions($questionsdataall){ 	
		/*	if($consultation_type == 'get_report'){					
			$loader = new \Twig_Loader_String();
       		$twig = new \Twig_Environment($loader);
		 	$cannedMessage = \CI::db()->where('id', '21')->get('canned_messages')->row_array();
	        $content = $twig->render($cannedMessage['content'], $data);
			//CI::Pages()->send_sms($data['phone'], $content);
			}else{
			GoCart\Emails::sendQuestionnotification($data, $customer, $questionsdataall, $consultation_type);			
			}
			*/
			
        return CI::db()->insert_batch('customer_questions', $questionsdataall);        
    }
	
	
	function get_All_service(){
		CI::db()->select('services.id, services.name');
        $result = CI::db()->get_where('services', array('published' => 'yes'));
		foreach($result->result() as $service):
				$services[$service->id] = $service->name;
		endforeach;
        return $services;
	}
	
	function get_services($catid){
		CI::db()->select('services.id, services.name');
        $result = CI::db()->get_where('services', array('category_id' => $catid, 'published' => 'yes'));
		foreach($result->result() as $service):
				$services[$service->id] = $service->name;
		endforeach;
        return $services;
	}
	
	function get_question_by_booking_id($booking_id){
		CI::db()->select('customer_questions.*, SUM(customer_questions.amount) as total_amount, module_bookings.first_name, module_bookings.last_name, module_bookings.email, module_bookings.phone');
		CI::db()->join('module_bookings', 'module_bookings.id = customer_questions.booking_id');
		CI::db()->group_by('customer_questions.booking_id');
        $result = CI::db()->get_where('customer_questions', array('customer_questions.booking_id' => $booking_id));
		return $result->row_array();
	}

function get_questions_by_booking_id($booking_id){
		CI::db()->select('customer_questions.*');
        $result = CI::db()->get_where('customer_questions', array('customer_questions.booking_id' => $booking_id));
		return $result->result_array();
	}





	
	function get_services_tiered(){
		CI::db()->select('*');
        $result = CI::db()->get_where('custom_services');
        return $result->result();
	}
	function custom_save($data){
	if($data['service_id']){
	 		CI::db()->where('service_id', $data['service_id']);
            CI::db()->update('custom_services', $data);
	}else{	
			CI::db()->insert('custom_services', $data);
    return CI::db()->insert_id();
	}
	}
	 public function find($id)
    {
        $result = CI::db()->get_where('custom_services', array('service_id'=>$id));
        return $result->row();
    }
	
	 public function delete($id)
    {
        CI::db()->where('service_id', $id);
        return CI::db()->delete('custom_services');
    }
	
    function get_service_by_slug($slug){
	
		CI::db()->select('*');
        $result = CI::db()->get_where('services', array('slug'=>$slug, 'published' => 'yes'));
        return $result->row();
	}
    
    function getTerm($code)
    {
        CI::db()->select('term');
        $result = CI::db()->get_where('search', array('code'=>$code));
        $result = $result->row();
        return $result->term;
    }
	
	function get_questions($id=0){
		CI::db()->select('questions.*, question_category.name');
		CI::db()->join('question_category', 'question_category.id = questions.question_category_id');
		if($id > 0){
 		$result = CI::db()->get_where('questions', array('questions.status'=>1, 'question_category.id'=>$id));
		}else{
		$result = CI::db()->get_where('questions', array('questions.status'=>1));
		}
        
        return $result->result();	
	}
        
        function get_questions_category($ordid = 0){
		CI::db()->select('question_category.*');	

		if($ordid > 4){
			$result = CI::db()->get_where('question_category', array('question_category.status'=>1, 'question_category.id' => $ordid))->result();
		}else{
			 $result = CI::db()->get_where('question_category', array('question_category.status'=>1, 'question_category.id < ' => 5))->result();
		}
               // 
       
        foreach ( $result as $key =>  $item ){
            if ( $item->id == $ordid ){ 
                $newarrayitem = $item; 
                unset($result[$key]);
            }            
        }
        if ( $newarrayitem ){
        array_unshift($result, $newarrayitem);
        }

        return $result;	
	}
        

function get_questions_price($name){
		CI::db()->select('question_category.price');
		CI::db()->join('question_category', 'question_category.id = questions.question_category_id');
        $result = CI::db()->get_where('questions', array('questions.question  LIKE %{$name}%'));
        return $result->row();	
	}

		
	function insert_options($data){
		return $this->db->insert('module_bookings_options', $data);
		}	
		function save_report_form($data){
			CI::db()->select('email');
			CI::db()->from('get_analysis_data');
			CI::db()->where('get_analysis_data.email', $data['email']);
			if(CI::db()->get()->num_rows() > 0){
				return true;
			}else{
				return $this->db->insert('get_analysis_data', $data);
			}
		}
	public	function encrypt($plainText,$key)
	{
		$secretKey = $this->hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
	  	$blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
		$plainPad = $this->pkcs5_pad($plainText, $blockSize);
	  	if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1) 
		{
		      $encryptedText = mcrypt_generic($openMode, $plainPad);
	      	      mcrypt_generic_deinit($openMode);
		      			
		} 
		return bin2hex($encryptedText);
	}

public	function decrypt($encryptedText,$key)
	{
		$secretKey = $this->hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$encryptedText=$this->hextobin($encryptedText);
	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
		mcrypt_generic_init($openMode, $secretKey, $initVector);
		$decryptedText = mdecrypt_generic($openMode, $encryptedText);
		$decryptedText = rtrim($decryptedText, "\0");
	 	mcrypt_generic_deinit($openMode);
		return $decryptedText;
		
	}
	//*********** Padding Function *********************

public	 function pkcs5_pad ($plainText, $blockSize)
	{
	    $pad = $blockSize - (strlen($plainText) % $blockSize);
	    return $plainText . str_repeat(chr($pad), $pad);
	}

	//********** Hexadecimal to Binary function for php 4.0 version ********

public	function hextobin($hexString) 
   	 { 
        	$length = strlen($hexString); 
        	$binString="";   
        	$count=0; 
        	while($count<$length) 
        	{       
        	    $subString =substr($hexString,$count,2);           
        	    $packedString = pack("H*",$subString); 
        	    if ($count==0)
		    {
				$binString=$packedString;
		    } 
        	    
		    else 
		    {
				$binString.=$packedString;
		    } 
        	    
		    $count+=2; 
        	} 
  	        return $binString; 
    	  }
           
		  
		  
	function  get_health_api($data){
		if($data['timezone']){	
		   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        //$health['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $health['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $health['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
       // $health['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        //$health['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

        
        

$general_ascendant_report_data = json_decode($vedicRishi->astroCall("/general_ascendant_report/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));


$health['ascendant'] = $general_ascendant_report_data->asc_report->ascendant;
		
			
		
		$general_ascendant_reportArray = explode('.', $general_ascendant_report_data->asc_report->report);
		
		
			$general_ascendant_report = '<div>';
			//$house_report_html .= '<p>';
			foreach($general_ascendant_reportArray as $key => $val)
			{
				if($key == 4){
				$general_ascendant_report .= '<a href="javascript:void(0);" class="read_more21" style="">...continue read</a></div><div id="more_text21" style="display: none;">';
				}
				if($val){
				//$house_report_html .= '<p>'.$val.'.</p>';
				
						if($key % 2 == 0){
								$general_ascendant_report .= $val.'.';
						}else{
								$general_ascendant_report .= $val.'.<p></p>';
						}
			
				}
				
				if($val == end($data->house_reportArray)){
				$general_ascendant_report .='<p><a href="javascript:void(0);" class="read_less21">...read less</a></p>';
				
				}
		//$house_report_html .= '</p>';		
				
			}

				 
			$general_ascendant_report .= '</div><script>$(\'.read_more21\').click(function(){

	$(\'.read_more21\').hide();

	$(\'.read_less21\').show();

	$(\'#more_text21\').show();

	});	                 

       	$(\'.read_less21\').click(function(){

		$(\'.read_less21\').hide();

		$(\'.read_more21\').show();

		$(\'#more_text21\').hide();

		});

		</script>';
				
		$health['general_ascendant_report'] = $general_ascendant_report;
 
    
        
        
		if($health['planets']->error){ 
			 CI::Service()->get_health_api($data);
		}
	}			
	return $health;
	
	}
	
	function  kundalimilan_api($mdata, $fdata){ 
		if($mdata['timezone']){	
		   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        $matchmakingreport['match_ashtakoot_points'] = json_decode($vedicRishi->matchMakingCall("/match_ashtakoot_points/", $mdata, $fdata));
        $matchmakingreport['match_planet_details'] = json_decode($vedicRishi->matchMakingCall("/match_planet_details/", $mdata, $fdata));
        $matchmakingreport['lagnamale'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $matchmakingreport['navmanshmale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));

        $matchmakingreport['lagnafemale'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
        $matchmakingreport['navmanshfemale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
		
		if($matchmakingreport['match_ashtakoot_points']->msg){ 
		//print_r($matchmakingreport['match_ashtakoot_points']); exit;
			\CI::Service()->kundalimilan_api($mdata, $fdata);
		}
	}			
	return $matchmakingreport;
	
	}
	
	
	function  marriageprediction_api($data){
		if($data['timezone']){	
		   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        // call horoscope apis
   // $marriageprediction['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	
       $marriageprediction['navmansh'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	$marriageprediction['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	$marriageprediction['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	$marriageprediction['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	

	$general_ascendant_report_data = json_decode($vedicRishi->astroCall("/general_ascendant_report/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

	$marriageprediction['ascendant'] = $general_ascendant_report_data->asc_report->ascendant;
		
			
		
		$general_ascendant_reportArray = explode('.', $general_ascendant_report_data->asc_report->report);
		
		
			$general_ascendant_report = '<div>';
			//$house_report_html .= '<p>';
			foreach($general_ascendant_reportArray as $key => $val)
			{
				if($key == 4){
				$general_ascendant_report .= '<a href="javascript:void(0);" class="read_more21" style="">...continue read</a></div><div id="more_text21" style="display: none;">';
				}
				if($val){
				//$house_report_html .= '<p>'.$val.'.</p>';
				
						if($key % 2 == 0){
								$general_ascendant_report .= $val.'.';
						}else{
								$general_ascendant_report .= $val.'.<p></p>';
						}
			
				}
				
				if($val == end($data->house_reportArray)){
				$general_ascendant_report .='<p><a href="javascript:void(0);" class="read_less21">...read less</a></p>';
				
				}
		//$house_report_html .= '</p>';		
				
			}

				 
			$general_ascendant_report .= '</div><script>$(\'.read_more21\').click(function(){

	$(\'.read_more21\').hide();

	$(\'.read_less21\').show();

	$(\'#more_text21\').show();

	});	                 

       	$(\'.read_less21\').click(function(){

		$(\'.read_less21\').hide();

		$(\'.read_more21\').show();

		$(\'#more_text21\').hide();

		});

		</script>';
				
		$marriageprediction['general_ascendant_report'] = $general_ascendant_report;
 
    

		if($marriageprediction['planets']->error ){
			 \CI::Service()->marriageprediction_api($data);
		}
	}		
	
	return $marriageprediction;
	
	}
	
	function  love_api($mdata, $fdata){ 
		if($mdata['timezone']){	
		   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
			$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        // call horoscope apis
    	$love['match_ashtakoot_points'] = json_decode($vedicRishi->matchMakingCall("/match_ashtakoot_points/", $mdata, $fdata));
       // $love['match_manglik_report'] = json_decode($vedicRishi->matchMakingCall("/match_manglik_report/", $mdata, $fdata));
        $love['match_planet_details'] = json_decode($vedicRishi->matchMakingCall("/match_planet_details/", $mdata, $fdata));
        $love['navmanshmale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $love['moonchartmale'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $love['navmanshfemale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
        $love['moonchartfemale'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
		
		if($love['match_ashtakoot_points']->msg){
			 \CI::Service()->love_api($mdata, $fdata);
		}
	}		
	
	return $love;
	
	}
	
	function  report_api($data){ 
		if($mdata['timezone']){	
		   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
			$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        // call horoscope apis
    	
        $love['navmanshmale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $love['moonchartmale'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $mdata['date'], $mdata['month'], $mdata['year'], $mdata['hour'], $mdata['minute'], $mdata['latitude'], $mdata['longitude'], $mdata['timezone']));
        $love['navmanshfemale'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
        $love['moonchartfemale'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $fdata['date'], $fdata['month'], $fdata['year'], $fdata['hour'], $fdata['minute'], $fdata['latitude'], $fdata['longitude'], $fdata['timezone']));
		
		if($love['match_ashtakoot_points']->msg){
			 \CI::Service()->love_api($mdata, $fdata);
		}
	}		
	
	return $love;
	
	}
	
	function report_data($id){ 
	CI::db()->select('module_bookings.*, module_bookings_options.*');
	CI::db()->from('module_bookings');
	//join LEFT by default
	CI::db()->join('module_bookings_options', 'module_bookings.id = module_bookings_options.booking_id', 'inner');
	CI::db()->where('module_bookings.id', $id);
	return CI::db()->get()->row();
	}
	
	function get_custom_services(){
		$result = CI::db()->get_where('custom_services', array('status'=>0));
		return $result->result();
		}
	function sendtrygetreporttoadmin($emaildata){
		
		GoCart\Emails::sendtrygetreporttoadmin($emaildata, 22);
	}
	function sendtryquestionstoadmin($emaildata){
		
		GoCart\Emails::sendtryquestionstoadmin($emaildata, 23);
	}
	
	function delete_question($booking_id){
		CI::db()->where('booking_id', $booking_id);
        CI::db()->update('customer_questions', array('status' => 'Inactive'));
		return $booking_id;
	}


	function logit($orderid, $data){ 

		CI::load()->helper('file');
	
		if ( !write_file(APPPATH.'logs/payments/'.$orderid.'.txt', print_r($data, true))){
			 echo 'Unable to write the file';
		}
	}

	function daily_reminder($type){
			switch ($type) {
					case 'notpaid':
				CI::db()->distinct('module_bookings.email');
                CI::db()->select('module_bookings.*, customer_questions.*');
                CI::db()->from('customer_questions');
                CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id', 'left');
                CI::db()->where('customer_questions.payment_status', 0);
                CI::db()->where('DATE(customer_questions.date)', date('Y-m-d'));
					break;
				
				default:
					# code...
					break;
			}
				 return CI::db()->get()->result(); 
	}


	function paypal_update_question($get_ec_return, $do_ec_return){
							$booking_id = $get_ec_return['L_NUMBER0'];				
							\CI::Service()->logit($booking_id, $get_ec_return);
		
					if($do_ec_return['ACK'] == 'Success'){
					
					CI::db()->select('customer_questions.id');
					$result = CI::db()->get_where('customer_questions', array('booking_id' => $booking_id));
					$number_questions = $result->num_rows();
					
					
					foreach($result->result() as $question){
								$updatedata['payment_status'] 			= 1;
								$updatedata['transaction_id'] 			= $do_ec_return['PAYMENTINFO_0_TRANSACTIONID'];
								$updatedata['transaction_amount'] 		= $do_ec_return['PAYMENTINFO_0_AMT']/$number_questions;
								$updatedata['transaction_date'] 		= date('Y-m-d h:i');
								$updatedata['transaction_response'] 	= serialize($do_ec_return);
				
								CI::db()->where('id', $question->id);
								CI::db()->update('customer_questions', $updatedata);
					}
					
						\CI::Service()->sendPaymentNotification($booking_id);	
						$data['message'] = $informations['status_message'];
					}		
					
					return $booking_id;
	
	}
		function horoscopedetail($slug, $type){ 
				if(slug){	
				//echo FCPATH . 'api/php/vedicRishiClient.php'; exit;	
				   \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
					$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
				// call horoscope apis
				if($type == 'daily'){
				$horoscopedetail['today'] = json_decode($vedicRishi->gethoroscopedetail('today', $slug));
				}elseif($type == 'weekly'){
				$horoscopedetail['week'] = json_decode($vedicRishi->gethoroscopedetail('week', $slug));
				}elseif($type == 'monthly'){
				$horoscopedetail['month'] = json_decode($vedicRishi->gethoroscopedetail('month', $slug));
				}elseif($type == 'yearly'){
				$horoscopedetail['year'] = json_decode($vedicRishi->gethoroscopedetail('year', $slug));
				}
				
				
				//$horoscopedetail['yesterday'] = json_decode($vedicRishi->gethoroscope('yesterday', $slug));
			
				//$horoscopedetail['tomorrow'] = json_decode($vedicRishi->gethoroscope('tomorrow', $slug));
			  }	
			return $horoscopedetail;
			}
	
function create_invoice($emaildata){
\CI::load()->library('tcpdf/TCPDF');
$fontname = TCPDF_FONTS::addTTFfont(FCPATH.'uploads/ufonts.com_geometric-415-medium-bt.ttf', 'TrueTypeUnicode', '', 96);
\CI::TCPDF()->SetFont($fontname, 'B', 9, '', false);
//\CI::TCPDF()->SetFont('helvetica', 'B', 36);
\CI::TCPDF()->SetPrintHeader(false);

// add a page
\CI::TCPDF()->AddPage('P',array(215, 298));
// get the current page break margin
$bMargin = \CI::TCPDF()->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = \CI::TCPDF()->getAutoPageBreak();
// disable auto-page-break
\CI::TCPDF()->SetAutoPageBreak(false, 0);
// create some HTML content
$html =\CI::load()->view('_blocks/payment_invoice', $emaildata, TRUE);

// output the HTML content
\CI::TCPDF()->writeHTML($html, true, false, true, false, '');
\CI::TCPDF()->setPageMark();
\CI::TCPDF()->lastPage();

		$custom_file_path = FCPATH.'uploads/invoices/invoice_'.$emaildata['data']['booking_id'].'.pdf';	
	
	 \CI::TCPDF()->Output($custom_file_path, "F");
 
return $custom_file_path;

}



}