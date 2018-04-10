<?php namespace GoCart\Controller;
/** 
 * Search Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Search
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Service extends Front {

	public function subscribe(){ $email = \CI::input()->post('email');
		echo  \CI::Service()->recordEmail($email);
	}
	
	public function __construct()
		{
			error_reporting(1);
			parent::__construct();
			$this->product = array('soap' => array('name' => 'Brand X Soap', 'desc' => 'a bar of soap for showering', 'price' => '2.95', 'code' => 'sp001'), 
			'lotion' => array('name' => 'Skin Lotion', 'desc' => '100ml - Dry skins no more', 'price' => '4.50', 'code' => 'lt004'));	
			$this->currency = 'USD'; // currency for the transaction
			$this->ec_action = 'Sale'; // for PAYMENTREQUEST_0_PAYMENTACTION, it's either Sale, Order or Authorization
	
		}
	
	
	public function booking(){
	
            $data = array('booking_id' => "#AV".rand(1000, 10000),
				'service_id' => \CI::input()->post('service_id'), 
                'category_id' => \CI::input()->post('category_id'),
                'reference_page' => \CI::input()->post('reference_page'),
				'reference_heading' => \CI::input()->post('reference_heading'),	
                'first_name' => \CI::input()->post('first_name'),
                'last_name' => \CI::input()->post('last_name'),
                'email' => \CI::input()->post('email'),
                'phone' => \CI::input()->post('phone'),
                'description' => \CI::input()->post('description'),
                'booker_id' => 0,
                'booking_date' => date('Y-m-d', strtotime((\CI::input()->post('date')) ? \CI::input()->post('date') : date('Y-m-d'))),
                'booking_time' => \CI::input()->post('time'),
                'type' => \CI::input()->post('type'),
                'bookingprice' => (\CI::input()->post('bookingprice')) ? \CI::input()->post('bookingprice') :0.00,
                'regarding_details' => (\CI::input()->post('regarding_details')) ? implode(',', \CI::input()->post('regarding_details')) : '',
                'specific_things' => (\CI::input()->post('specific_things')) ? implode(',', \CI::input()->post('specific_things')) : '',
                'timeslote' => (\CI::input()->post('timeslote'))? \CI::input()->post('timeslote') : '',
                'date' => date('Y-m-d H:i:s'),
                'status' => 0
            );
            \CI::Service()->booking($data);
			
			if(\CI::input()->post('phone')){
			  //$name = (\CI::input()->post('first_name')) ? \CI::input()->post('first_name') : 'Someone';	
			  $message = 'Thanks for your request we will come back to you shortly. You can ask one free question by clicking up here http://bit.ly/2oHS5t6. Get answers by expert astrologers.';
             \CI::Pages()->send_sms( \CI::input()->post('phone'), $message);
			}			
    	echo base_url('/thankyou');
		exit;
	}
	
	public function product_enquiry(){
	
	
	 $data = array('carat' => \CI::input()->post('carat'), 
                'shape' => \CI::input()->post('shape'),
                'origin' => \CI::input()->post('origin'),
				'product_id' => \CI::input()->post('product_id'),	
                'product_name' => \CI::input()->post('product_name'),
				'ip_address' => \CI::input()->ip_address(),
                'name' => \CI::input()->post('name'),
                'email' => \CI::input()->post('email'),
                'phone' => \CI::input()->post('phone'),
                'message' => \CI::input()->post('message'),
				'refrence_page' => \CI::input()->post('refrence_page'),
                'date' => date('Y-m-d h:i'),
                'status' => 0
            );
    echo \CI::Service()->product_enquiry($data);
	
	
	
	exit;
	
	
	
	}
	public function createlink(){
	$data = array('name' 			=> \CI::input()->post('name'),
                'email' 			=> \CI::input()->post('email'),
                'phone' 			=> \CI::input()->post('phone'),
                'service' 			=> \CI::input()->post('service'),
                'amount' 			=> \CI::input()->post('amount')
				);
		$data['link_code'] = 	sha1(\CI::input()->post('email').rand(9, 9999));	
					
		\CI::Service()->save_payment_link($data);

	echo base_url('payment/'.$data['link_code']);			
	exit;
	}
	
	
	public function success_payment(){ 
				if($_REQUEST['encResp']):
					$rcvdString = \CI::Service()->decrypt($_REQUEST['encResp'],WORKING_KEY);
					$decryptValues=explode('&', $rcvdString);
					$dataSize=sizeof($decryptValues);
				   for($i = 0; $i < $dataSize; $i++) 
						{
							list($key, $value) = explode('=',$decryptValues[$i]);
							$informations[$key]=$value; 		   
						}
						
				
					$orderid 								= $informations['order_id'];				
					$updatedata['status'] 					= 1;
					$updatedata['transaction_id'] 			= $informations['tracking_id'];
					$updatedata['transaction_date'] 		= date('Y-m-d h:i');
					$updatedata['details'] 					= serialize($informations);
					
				
					\CI::Service()->update_payment($orderid, $updatedata);
					
					\CI::Service()->sendPaymentSuccessNotification($orderid);			
					$data['payment'] = $informations;
					endif;
	
				$this->partial('/defaultheader', $data);
				$this->partial('_blocks/payment_success', $data);
				$this->partial('/customer/footer', $data);
	
	}
	public function payment($hash=NULL){
	$linkdata = \CI::db()->select('*')->get_where('custom_service_payment', array('link_code'=>$hash))->row();

	if($linkdata->status == 0){
			$merchant_data='';
			$merchant_id 							= MERCHANT_ID;
			
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= $linkdata->id;
			$merchant_dataArray['amount'] 			= $linkdata->amount;
			$merchant_dataArray['redirect_url'] 	= base_url('payments/success');
			$merchant_dataArray['cancel_url']		= base_url('payment/'.$hash);
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= $linkdata->name;
			$merchant_dataArray['billing_tel'] 		= $linkdata->phone;
			$merchant_dataArray['billing_email'] 	= $linkdata->email;
			$merchant_dataArray['currency'] 		= 'INR';
		
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}

			$data['link_data'] 				= $linkdata;
			$data['access_code']			= ACCESS_CODE;//Shared by CCAVENUES
			$data['encrypted_data']			= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.
	}else{
	$data['error'] = 'Link has been expired.';
	}

				$this->partial('/defaultheader', $data);
				$this->partial('_blocks/payment', $data);
				$this->partial('/customer/footer', $data);
	
	}
	public function save_kundli(){

		 $data = array('mname' 		=> (\CI::input()->post('mname')) ? \CI::input()->post('mname') : \CI::input()->post('name'),
				'prfessional_id' 	=> \CI::input()->post('prfessional_id'), 
                'mminute' 			=> (\CI::input()->post('mminute')) ? \CI::input()->post('mminute') : \CI::input()->post('minute'),
                'mhour' 			=> (\CI::input()->post('mhour')) ? \CI::input()->post('mhour') : \CI::input()->post('hour'),
                'mday' 				=> (\CI::input()->post('mday')) ? \CI::input()->post('mday') : \CI::input()->post('day'),
                'mmonth' 			=> (\CI::input()->post('mmonth')) ? \CI::input()->post('mmonth') : \CI::input()->post('month'),
                'myear' 			=> (\CI::input()->post('myear')) ? \CI::input()->post('myear') : \CI::input()->post('year'),
                'mbirth_place' 		=> (\CI::input()->post('mplace')) ? \CI::input()->post('mplace') : \CI::input()->post('place'),
                'mlatitude' 		=> (\CI::input()->post('mlatitude')) ? \CI::input()->post('mlatitude') : \CI::input()->post('latitude'),
                'mlongitude' 		=> (\CI::input()->post('mlongitude')) ? \CI::input()->post('mlongitude') : \CI::input()->post('longitude'),
                'mtimezone' 		=> (\CI::input()->post('mtimezone')) ? \CI::input()->post('mtimezone') : \CI::input()->post('timezone'),		
				'fname' 			=> \CI::input()->post('fname'),
                'fminute' 			=> \CI::input()->post('fminute'),
                'fhour' 			=> \CI::input()->post('fhour'),
                'fday' 				=> \CI::input()->post('fday'),
                'fmonth' 			=> \CI::input()->post('fmonth'),
                'fyear' 			=> \CI::input()->post('fyear'),
                'fbirth_place' 		=> \CI::input()->post('fplace'),
				'flatitude' 		=> \CI::input()->post('flatitude'),
                'flongitude' 		=> \CI::input()->post('flongitude'),
                'ftimezone' 		=> \CI::input()->post('ftimezone'),
                'date' 				=> date('Y-m-d H:i:s'),
                'status' 			=> 0,
				'type' 				=> \CI::input()->post('type')
            );
			
			//print_r($data); exit;
          \CI::Service()->save_kundali($data);
		  echo 'saved';
    	exit;
	}
	
	
	 public function service($slug) {
	  		error_reporting(0);
	 			if($slug == 'book-pandit'){
				$data['services'] = \CI::Service()->get_All_service();
				$data['customer'] 	= (array)\CI::Customers()->get_customer($this->customer->id); 
				$data['seo_title'] = 'Book Online pandit ji for wedding, marriage puja in Delhi-NCR, Gurgaon, Noida';
				$data['meta'] = '<meta name="keywords" content="pandit ji, pandit in delhi, pandit in gurgaon, pooja pandit, pandit matrimonial, pandit for puja, pandit ji online, best pandit for puja, pandit for puja in delhi, book pandit online, pandit for marriage, vivah pandit,wedding puja, pandit for wedding, marriage puja,
 pandit services, priest services, pandit for marriage, book pooja pandit." />
<meta name="description" content="Book experienced pandit jee for shaadi, marriage, wedding puja in Delhi-NCR, Gurgaon and Noida. 
Akashvanni.com provides online pandits services for shaadi, vivah puja at affordable price." />';
				$this->partial('astrologerheader', $data);
				$this->partial('/_pages/book-pandit', $data);
     			$this->partial('/customer/footer', $data);
	 			}else{ 	  
				$data['service'] 	= 	\CI::Service()->get_service_by_slug($slug);
				$data['customer'] 	= (array)\CI::Customers()->get_customer($this->customer->id);
				$data['seo_title'] = $data['service']->name;
				$this->partial('/customer/header', $data);
				$this->partial('view', $data);
				$this->partial('/customer/footer', $data);
			}
    }
	
	
	 public function marriageprediction() {
        error_reporting(0);
        if (\CI::input()->post('day')) {
            $day 	= \CI::input()->post('day');
            $month 	= \CI::input()->post('month');
            $year 	= \CI::input()->post('year');
            $hour 	= \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
		list($day, $month, $year) = explode("/", \CI::input()->post('date'));
        list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }
// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );		

        echo \CI::load()->view('content/marriageprediction', \CI::Service()->marriageprediction_api($data), TRUE);
		exit;
    }
	
	public function love() {
        list($fday, $fmonth, $fyear) = explode("/", \CI::input()->post('fdate'));
        list($fhour, $fminute) = explode(":", \CI::input()->post('ftime'));
        list($mday, $mmonth, $myear) = explode("/", \CI::input()->post('mdate'));
        list($mhour, $mminute) = explode(":", \CI::input()->post('mtime'));

// make some dummy data in order to call vedic rishi api
        $mdata = array(
            'date' 		=> \CI::input()->post('mday'),
            'month' 	=> \CI::input()->post('mmonth'),
            'year' 		=> \CI::input()->post('myear'),
            'hour' 		=> \CI::input()->post('mhour'),
            'minute' 	=> \CI::input()->post('mminute'),
            'latitude' 	=> \CI::input()->post('mlatitude'),
            'longitude' => \CI::input()->post('mlongitude'),
            'timezone' 	=> \CI::input()->post('mtimezone')
        );

        $fdata = array(
            'date' 		=> \CI::input()->post('fday'),
            'month' 	=> \CI::input()->post('fmonth'),
            'year' 		=> \CI::input()->post('fyear'),
            'hour' 		=> \CI::input()->post('fhour'),
            'minute' 	=> \CI::input()->post('fminute'),
            'latitude' 	=> \CI::input()->post('flatitude'),
            'longitude' => \CI::input()->post('flongitude'),
            'timezone' 	=> \CI::input()->post('ftimezone')
        );
         echo \CI::load()->view('content/love', \CI::Service()->love_api($mdata, $fdata), TRUE);
		 exit;
    }

   public function kundalimilan() {
   error_reporting(0);
      
		list($fday, $fmonth, $fyear) = explode("/", \CI::input()->post('fdate'));
        list($fhour, $fminute) = explode(":", \CI::input()->post('ftime'));
        list($mday, $mmonth, $myear) = explode("/", \CI::input()->post('mdate'));
        list($mhour, $mminute) = explode(":", \CI::input()->post('mtime'));
        $mdata = array(
            'date' 		=> \CI::input()->post('mday'),
            'month' 	=> \CI::input()->post('mmonth'),
            'year' 		=> \CI::input()->post('myear'),
            'hour' 		=> \CI::input()->post('mhour'),
            'minute' 	=> \CI::input()->post('mminute'),
            'latitude' 	=> \CI::input()->post('mlatitude'),
            'longitude' => \CI::input()->post('mlongitude'),
            'timezone' 	=> \CI::input()->post('mtimezone')
        );

        $fdata = array(
            'date' 		=> \CI::input()->post('fday'),
            'month' 	=> \CI::input()->post('fmonth'),
            'year' 		=> \CI::input()->post('fyear'),
            'hour' 		=> \CI::input()->post('fhour'),
            'minute' 	=> \CI::input()->post('fminute'),
            'latitude' 	=> \CI::input()->post('flatitude'),
            'longitude' => \CI::input()->post('flongitude'),
            'timezone' 	=> \CI::input()->post('ftimezone')
        );
		 echo \CI::load()->view('content/kundalimilan', \CI::Service()->kundalimilan_api($mdata, $fdata), TRUE);
		exit;
	
    }
	
	public function manglik() {
        error_reporting(0);
       \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);


        if (\CI::input()->post('day')) {
            $day = \CI::input()->post('day');
            $month = \CI::input()->post('month');
            $year = \CI::input()->post('year');
            $hour = \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
            list($day, $month, $year) = explode("/", \CI::input()->post('date'));
            list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }
      

// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );
        $horoscopes['page_title'] = 'Manglik';
        $manglik['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
		$manglik['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $manglik['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
		
        $manglik['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

        $manglik['manglik'] = json_decode($vedicRishi->astroCall("/manglik/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

        echo   \CI::load()->view('content/manglik', $manglik, TRUE);
        exit;
    }
	
	
	
	public function child_pregnancy() {
        error_reporting(0);

        \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);

        if (\CI::input()->post('day')) {
            $day = \CI::input()->post('day');
            $month = \CI::input()->post('month');
            $year = \CI::input()->post('year');
            $hour = \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
            list($day, $month, $year) = explode("/", \CI::input()->post('date'));
            list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }
  

// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );

        $child_pregnancy['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));


        $child_pregnancy['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $child_pregnancy['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

         echo \CI::load()->view('content/child_pregnancy', $child_pregnancy, TRUE);
        exit;
    }

    public function career() {
        error_reporting(0);

         \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        if (\CI::input()->post('day')) {
            $day = \CI::input()->post('day');
            $month = \CI::input()->post('month');
            $year = \CI::input()->post('year');
            $hour = \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
            list($day, $month, $year) = explode("/", \CI::input()->post('date'));
            list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }
// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );

        $career['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));


        $career['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $career['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $career['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $career['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
		
		
		
		
		
		
        echo \CI::load()->view('content/career', $career, TRUE);
        exit;
    }

    public function health() {
        error_reporting(1);
      
        if (\CI::input()->post('day')) {
            $day = \CI::input()->post('day');
            $month = \CI::input()->post('month');
            $year = \CI::input()->post('year');
            $hour = \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
            list($day, $month, $year) = explode("/", \CI::input()->post('date'));
            list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }

// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );
		
        echo \CI::load()->view('content/health', \CI::Service()->get_health_api($data), TRUE);
		exit;
    }
		
	public function kundli_analysis() {
        error_reporting(0);
        \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        if (\CI::input()->post('day')) {
            $day = \CI::input()->post('day');
            $month = \CI::input()->post('month');
            $year = \CI::input()->post('year');
            $hour = \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
            list($day, $month, $year) = explode("/", \CI::input()->post('date'));
            list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }

// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );


        $health['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));


        $health['navamanshachart'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $health['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $health['sunchart'] = json_decode($vedicRishi->astroCall("/horo_chart/SUN", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $health['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

        echo \CI::load()->view('content/kundli_analysis', $health, TRUE);
        exit;
    }
	
	
	
	
	public function professional_save_chart_data() {
        error_reporting(0);
	
	
	
	}
	public function professional_generate_chart() {
        error_reporting(0);

        \CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
		$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
        if (\CI::input()->post('day')) {
            $day 	= \CI::input()->post('day');
            $month 	= \CI::input()->post('month');
            $year 	= \CI::input()->post('year');
            $hour 	= \CI::input()->post('hour');
            $minute = \CI::input()->post('minute');
        }
        if (\CI::input()->post('date')) {
		list($day, $month, $year) = explode("/", \CI::input()->post('date'));
        list($hour, $minute) = explode(":", \CI::input()->post('time'));
        }


// make some dummy data in order to call vedic rishi api
        $data = array(
            'date' => $day,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'minute' => $minute,
            'latitude' => \CI::input()->post('latitude'),
            'longitude' => \CI::input()->post('longitude'),
            'timezone' => \CI::input()->post('timezone')
        );		
        
		
    $marriageprediction['planets'] = json_decode($vedicRishi->astroCall("/planets/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	
	//print_r($marriageprediction); exit;
	
    $marriageprediction['navmansh'] = json_decode($vedicRishi->astroCall("/horo_chart/D9", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));

	$marriageprediction['lagnchart'] = json_decode($vedicRishi->astroCall("/horo_chart/D1", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
	$marriageprediction['moonchart'] = json_decode($vedicRishi->astroCall("/horo_chart/MOON", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $marriageprediction['current_vdasha'] = json_decode($vedicRishi->astroCall("/current_vdasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $marriageprediction['major_vdasha'] = json_decode($vedicRishi->astroCall("/major_vdasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $marriageprediction['major_yogini_dasha'] = json_decode($vedicRishi->astroCall("/major_yogini_dasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        $marriageprediction['current_yogini_dasha'] = json_decode($vedicRishi->astroCall("/current_yogini_dasha/", $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']));
        echo \CI::load()->view('content/marriageprediction', $marriageprediction, TRUE);
       exit;
    }
	
	public function booking_question(){
		   error_reporting(0);
		   $logged_customer	= \CI::Login()->customer();
		   $customer = \CI::Customers()->get_customer($logged_customer->id);
		   if (!empty($_POST)) {
            $data = array('profiles_id' => 0,
                'service_id' 	=> \CI::input()->post('service_id'),
                'category_id' 	=> 0,
                'first_name' 	=> \CI::input()->post('first_name'),
                'last_name' 	=> '',
                'email' 		=> \CI::input()->post('email'),
                'phone' 		=> \CI::input()->post('phone'),
                'description' 	=> \CI::input()->post('questions'),
                'booker_id' 	=> $customer->id,
                'booking_date' 	=> (\CI::input()->post('booking_date')) ? date('Y-m-d', strtotime(str_replace('/', '-', \CI::input()->post('booking_date')))) : '',
                'booking_time' 	=> \CI::input()->post('booking_time'),
                'type' 			=> \CI::input()->post('type'),
                'bookingprice' 	=> (\CI::input()->post('bookingprice')) ? \CI::input()->post('bookingprice') : 0.00,
                'date' 			=> date('Y-m-d H:i:s'),
                'status' 		=> 0,
                'reference_page'=> \CI::input()->post('reference_page')
            );
			
 			$emaildata['data'] = $data;
			
			
			if(\CI::input()->post('day')){
			$customerdata['id']						= $customer->id;
			$customerdata['day'] 					= \CI::input()->post('day');
			$customerdata['month'] 					= \CI::input()->post('month');
			$customerdata['year'] 					= \CI::input()->post('year');
			$customerdata['minute'] 				= \CI::input()->post('minute');
			$customerdata['hour'] 					= \CI::input()->post('hour');
			
			}			
			if(\CI::input()->post('place')){
			$customerdata['birth_place']= \CI::input()->post('place');
			$customerdata['birth_place_latitude']	= \CI::input()->post('latitude');
			$customerdata['birth_place_longitude']	= \CI::input()->post('longitude');
			$customerdata['birth_timezone']			= \CI::input()->post('timezone');
			}
			
			$customerdata['id'] 			= $customer->id;
			//$customerdata['free_question'] 	= 1;
			\CI::Customers()->save($customerdata);
			$customer 						= \CI::Customers()->get_customer($logged_customer->id);
			 
			$optionsdata['booking_id'] = \CI::Service()->booking_from_question($data, $customer);
			
			$optionsdata['mname'] 			= (\CI::input()->post('mname')) ? \CI::input()->post('mname') : \CI::input()->post('name');
			$optionsdata['mminute']			= (\CI::input()->post('mminute')) ? \CI::input()->post('mminute') : \CI::input()->post('minute');
			$optionsdata['mhour'] 			= (\CI::input()->post('mhour')) ? \CI::input()->post('mhour') : \CI::input()->post('hour');
			$optionsdata['mday'] 			= (\CI::input()->post('mday')) ? \CI::input()->post('mday') : \CI::input()->post('day');
			$optionsdata['mmonth'] 			= (\CI::input()->post('mmonth')) ? \CI::input()->post('mmonth') : \CI::input()->post('month');
			$optionsdata['myear'] 			= (\CI::input()->post('myear')) ? \CI::input()->post('myear') : \CI::input()->post('year');
			$optionsdata['mbirth_place'] 	= (\CI::input()->post('mplace')) ? \CI::input()->post('mplace') : \CI::input()->post('place');
			
			$optionsdata['fname'] 			= \CI::input()->post('fname');
			$optionsdata['fminute'] 		= \CI::input()->post('fminute');
			$optionsdata['fhour'] 			= \CI::input()->post('fhour');
			$optionsdata['fday'] 			= \CI::input()->post('fday');
			$optionsdata['fmonth'] 			= \CI::input()->post('fmonth');
			$optionsdata['fyear'] 			= \CI::input()->post('fyear');
			$optionsdata['fbirth_place'] 	= \CI::input()->post('fplace');
			$optionsdata['date'] 			= date('Y-m-d');

			
			\CI::Service()->insert_options($optionsdata);
			
			$emaildata['optionsdata'] 		= $optionsdata;
			           
			\CI::load()->library('Simple_html_dom');
					
			
			$html = \CI::Simple_html_dom();
			$html->load($data['description']);
			$amount = 0.00;
								
			$emaildata['free_question'] = false;			
			foreach($html->find('question') as $key =>  $element) 
				 { 			 
				 $category = \CI::Service()->get_questions_price(strip_tags($element));
				    $addquestion['question'] = strip_tags($element);
					$addquestion['price'] 	= $category->price;
					$emaildata['questions'][] = $addquestion;
					$amount += $category->price;
				 }
				 
			
				 
				if(count($emaildata['questions']) == 0)
				{
				$amount = 1100;
				$emaildata['questions'][] = 'Get full consulations.';
				$emaildata['free_question'] = false;
				}
				
			
				
				//insert into questions table
				if($emaildata['questions'])							
					{
						foreach($emaildata['questions'] as $questions){
							$questionsdata['customer_id'] = $customer->id;
							$questionsdata['booking_id']  = $optionsdata['booking_id'];
							$questionsdata['question']    = $questions['question'];
							$questionsdata['amount']      = $questions['price'];
							$questionsdataall[] 		  = $questionsdata; 
						}
						
					 \CI::Service()->insert_questions($questionsdataall,$data, $customer);
					}							
			\CI::Service()->sendtryquestionstoadmin($emaildata);
			//$amount = 1.50;
			
			$merchant_data='';
			$merchant_id 							= MERCHANT_ID;
			$working_key							= WORKING_KEY;//Shared by CCAVENUES
			$emaildata['access_code']				= ACCESS_CODE;//Shared by CCAVENUES
						
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= $optionsdata['booking_id'];
			$merchant_dataArray['amount'] 			= $amount;

			$merchant_dataArray['redirect_url'] 	= base_url().'success';
			$merchant_dataArray['cancel_url']		= base_url().'questions';
			
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= \CI::input()->post('first_name');
			$merchant_dataArray['billing_tel'] 		= \CI::input()->post('phone');
			$merchant_dataArray['billing_email'] 	= \CI::input()->post('email');
			$merchant_dataArray['currency'] 		= 'INR';
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}
			$emaildata['order_id'] 					= $optionsdata['booking_id'];
			$emaildata['subprice'] 					= number_format($amount, 2,'.',',');
			$emaildata['taxrate']					= number_format(0.00, 2,'.',',');
			$emaildata['totalprice']				= number_format(((int)$amount + (int)$emaildata['taxrate']), 2,'.',',');
			$emaildata['per_question']  			= number_format($amount, 2,'.',',');
			$emaildata['encrypted_data']			= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.

			$customerdata['id'] 			= $customer->id;
			$customerdata['free_question'] 	= 1;
			\CI::Customers()->save($customerdata);
			
							
			echo \CI::load()->view('_blocks/payment_summery', $emaildata, TRUE);
        exit;
	
	}
	
	}
		public function loadview($view){
		echo \CI::load()->view('_blocks/'.$view, '', TRUE);
		exit;
		}	
	
	public function questions_payment($booking_id){
	
			$questiondata 							= \CI::Service()->get_question_by_booking_id($booking_id);
			$merchant_data='';
			$merchant_id 							= MERCHANT_ID;
			$working_key							= WORKING_KEY;//Shared by CCAVENUES
			$emaildata['access_code']				= ACCESS_CODE;//Shared by CCAVENUES
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= $questiondata['booking_id'];
			$merchant_dataArray['amount'] 			= floatval($questiondata['total_amount']);
			$merchant_dataArray['redirect_url'] 	= base_url().'success';
			$merchant_dataArray['cancel_url']		= base_url().'questions';	
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= $questiondata['first_name'].' '.$questiondata['last_name'];
			$merchant_dataArray['billing_tel'] 		= $questiondata['phone'];
			$merchant_dataArray['billing_email'] 	= $questiondata['email'];
			$merchant_dataArray['currency'] 		= 'INR';
	
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}
			$data['access_code']					= ACCESS_CODE;//Shared by CCAVENUES
     		$data['encrypted_data']					= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.
			//print_r($merchant_dataArray); exit;
	echo \CI::load()->view('_blocks/questions_payment', $data, TRUE);
	exit;
	}
	
		
	public function booking_full_consultation(){
		   error_reporting(0);
		   $logged_customer	= \CI::Login()->customer();
		   $customer = \CI::Customers()->get_customer($logged_customer->id);
		 
		   switch(\CI::input()->post('consultation_type')){
		   			case 'matchmake':
					$amount = 600.00;
					$emaildata['question'] = 'Match-Making Consultations.';		   
		   			break;
					
					case 'full_consult':
					$amount = 1100.00;
					$emaildata['question'] = 'Get full Consultations.';		   
		   			break;
					
					case 'story_of_life_basic_report':
					$amount = 299.00;
					$emaildata['question'] = 'Get Story of My Life basic report (25 pages).';
		   			break;	
					case 'matchmaking_report':
					$amount = 399.00;
					$emaildata['question'] = 'Get Kundali Matching Report.';
		   			break;	
					case 'knowyourself_report':
					$amount = 999.00;
					$emaildata['question'] = 'Get Know yourself Better Report.';
		   			break;	
					case 'story_of_life_extended_report':
					$amount = 599.00;
					$emaildata['question'] = 'Get Story of My Life extended report (70 pages).';
		   			break;		   
		   }
		   
		   
		   if (!empty($_POST)) {
            $data = array('booking_id' => "#AV".rand(1000, 100000),
				'profiles_id' 	=> 0,
                'service_id' 	=> \CI::input()->post('service_id'),
                'category_id' 	=> 0,
                'first_name' 	=> \CI::input()->post('first_name'),
                'last_name' 	=> '',
                'email' 		=> \CI::input()->post('email'),
                'phone' 		=> \CI::input()->post('phone'),
				'language' 		=> \CI::input()->post('language'),
				'reporttype' 	=> \CI::input()->post('reporttype'),
				'gender' 		=> \CI::input()->post('gender'),
                'description' 	=> '',
                'booker_id' 	=> $customer->id,
                'booking_date' 	=> '',
                'booking_time' 	=> '',
                'type' 			=> \CI::input()->post('type'),
                'bookingprice' 	=> $amount,
                'date' 			=> date('Y-m-d H:i:s'),
                'status' 		=> 0,
                'reference_page'=> \CI::input()->post('reference_page')
            );

			//consultation_type
 			$emaildata['data'] = $data;
			
			
			\CI::Service()->sendtrygetreporttoadmin($emaildata);
			
			if(\CI::input()->post('day')){
			$customerdata['id']						= $customer->id;
			$customerdata['day'] 					= \CI::input()->post('day');
			$customerdata['month'] 					= \CI::input()->post('month');
			$customerdata['year'] 					= \CI::input()->post('year');
			$customerdata['minute'] 				= \CI::input()->post('minute');
			$customerdata['hour'] 					= \CI::input()->post('hour');
			}			
			if(\CI::input()->post('place')){
			$customerdata['birth_place']= \CI::input()->post('place');
			$customerdata['birth_place_latitude']	= \CI::input()->post('latitude');
			$customerdata['birth_place_longitude']	= \CI::input()->post('longitude');
			$customerdata['birth_timezone']			= \CI::input()->post('timezone');
			}
			
			$customerdata['id'] 			= $customer->id;
			\CI::Customers()->save($customerdata);
			$customer 						= \CI::Customers()->get_customer($logged_customer->id);
			 
			$optionsdata['booking_id'] 		= \CI::Service()->booking_from_question($data, $customer);
			
			$optionsdata['mname'] 			= (\CI::input()->post('mname')) ? \CI::input()->post('mname') : \CI::input()->post('name');
			$optionsdata['mminute']			= (\CI::input()->post('mminute')) ? \CI::input()->post('mminute') : \CI::input()->post('minute');
			$optionsdata['mhour'] 			= (\CI::input()->post('mhour')) ? \CI::input()->post('mhour') : \CI::input()->post('hour');
			$optionsdata['mday'] 			= (\CI::input()->post('mday')) ? \CI::input()->post('mday') : \CI::input()->post('day');
			$optionsdata['mmonth'] 			= (\CI::input()->post('mmonth')) ? \CI::input()->post('mmonth') : \CI::input()->post('month');
			$optionsdata['myear'] 			= (\CI::input()->post('myear')) ? \CI::input()->post('myear') : \CI::input()->post('year');
			$optionsdata['mbirth_place'] 	= (\CI::input()->post('mplace')) ? \CI::input()->post('mplace') : \CI::input()->post('place');
			
			$optionsdata['mlatitude'] 		= (\CI::input()->post('mlatitude')) ? \CI::input()->post('mlatitude') : \CI::input()->post('latitude');
			$optionsdata['mlongitude'] 		= (\CI::input()->post('mlongitude')) ? \CI::input()->post('mlongitude') : \CI::input()->post('longitude');
			$optionsdata['mtimezone'] 		= (\CI::input()->post('mtimezone')) ? \CI::input()->post('mtimezone') : \CI::input()->post('timezone');
			
			
			$optionsdata['fname'] 			= \CI::input()->post('fname');
			$optionsdata['fminute'] 		= \CI::input()->post('fminute');
			$optionsdata['fhour'] 			= \CI::input()->post('fhour');
			$optionsdata['fday'] 			= \CI::input()->post('fday');
			$optionsdata['fmonth'] 			= \CI::input()->post('fmonth');
			$optionsdata['fyear'] 			= \CI::input()->post('fyear');
			$optionsdata['fbirth_place'] 	= \CI::input()->post('fplace');
			
			$optionsdata['flatitude'] 	= (\CI::input()->post('flatitude')) ? \CI::input()->post('flatitude') : \CI::input()->post('latitude');
			$optionsdata['flongitude'] 	= (\CI::input()->post('flongitude')) ? \CI::input()->post('flongitude') : \CI::input()->post('longitude');
			$optionsdata['ftimezone'] 	= (\CI::input()->post('ftimezone')) ? \CI::input()->post('ftimezone') : \CI::input()->post('timezone');
								
			$optionsdata['date'] 			= date('Y-m-d');
			
			
			
			\CI::Service()->insert_options($optionsdata);
			$emaildata['optionsdata'] 		= $optionsdata;
			
									
				//insert into questions table
				if($emaildata['question'])							
					{
							$questionsdata['customer_id'] = $customer->id;
							$questionsdata['booking_id']  = $optionsdata['booking_id'];
							$questionsdata['question']    = $emaildata['question'];
							$questionsdata['amount']      = $amount;
							$questionsdataall[] 		  = $questionsdata; 
					 \CI::Service()->insert_questions($questionsdataall);
					}									
													
							
			$emaildata['free_question'] = false;			

			$merchant_data							= '';
			$merchant_id 							= MERCHANT_ID;
			$working_key							= WORKING_KEY;//Shared by CCAVENUES
			$emaildata['access_code']				= ACCESS_CODE;//Shared by CCAVENUES
						
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= $optionsdata['booking_id'];
			$merchant_dataArray['amount'] 			= $amount;

			$merchant_dataArray['redirect_url'] 	= base_url().'success';
			$merchant_dataArray['cancel_url']		= base_url().'questions';
			
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= \CI::input()->post('first_name');
			$merchant_dataArray['billing_tel'] 		= \CI::input()->post('phone');
			$merchant_dataArray['billing_email'] 	= \CI::input()->post('email');
			$merchant_dataArray['currency'] 		= 'INR';
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}

			$emaildata['subprice'] 					= number_format($amount, 2,'.',',');
			$emaildata['taxrate']					= number_format(0.00, 2,'.',',');
			$emaildata['totalprice']				= number_format(((int)$amount + (int)$emaildata['taxrate']), 2,'.',',');
			$emaildata['per_question']  			= number_format($amount, 2,'.',',');
			$emaildata['encrypted_data']			= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.
			$customerdata['id'] 			= $customer->id;
			$customerdata['free_question'] 	= 1;
			\CI::Customers()->save($customerdata);
			echo \CI::load()->view('_blocks/order_summery', $emaildata, TRUE);
        
  
        exit;
	
	}
	
	}
	
	
public function get_report($id) {
        error_reporting(0); 
		
       	$data = \CI::Service()->report_data($id);
       // \CI::Service()->report_api($data);
		
			\CI::load()->file(FCPATH . 'api/php/vedicRishiClient.php');
			$vedicRishi = \CI::VedicRishiClient(USER_ID, API_KEY);
			$mdata['name'] 		= ucwords(strtolower($question->mname));
			$mdata['gender'] 	= 'male';
			$mdata['day'] 		= $data->mday;
			$mdata['month'] 	= $data->mmonth;
			$mdata['year'] 		= $data->myear;
			$mdata['hour'] 		= $data->mhour;
			$mdata['min'] 		= $data->mminute;
			$mdata['lat'] 		= '44.75000';
			$mdata['lon'] 		= '25.51667';
			$mdata['language'] 	= 'en';
			$mdata['tzone'] 	= '5.5';
			$mdata['place'] = $data->mbirth_place;
			$mdata['chart_style'] = 'NORTH_INDIAN';
			$mdata['footer_link'] = 'Akashvaani.com';
			$mdata['logo_url'] = 'https://www.akashvaani.com/assets/astrology/img/logo1.png';
			$mdata['company_name'] = 'Akashvaani';
			$mdata['domain_url'] = 'https://www.akashvaani.com';
			$mdata['company_email'] = 'connect@akashvaani.com';
			$mdata['company_landline'] = '9122123222';
			$mdata['company_mobile'] = '919028381460';

			
			$apidata = json_decode($vedicRishi->pdfCall("/basic_horoscope_pdf", $mdata));
		
		print_r($apidata);
		exit;
		
		
		exit;
    }
		
	
	public function questions_delete($booking_id){ 
		echo \CI::Service()->delete_question($booking_id); 
		exit;
	}
	
	
	public function pay_now($booking_id=NULL){
		$questiondata 							= \CI::Service()->get_question_by_booking_id($booking_id);
//print_r(round($questiondata['total_amount']/$questiondata['amount']));
		$paypal_details = array(
			'API_username'  => API_USERNAME,
			'API_signature' => API_SIGNATURE,
			'API_password'  => API_PASSWORD,
			);
				
				
		    \CI::load()->library('paypal_ec', $paypal_details);

			switch(trim($questiondata['question'])){
				case 'Get Kundali Matching Report.':
				$payamount = 45.00;
				break;
				
				case 'Get Story of My Life basic report (25 pages).':
				$payamount = 40.00;
				break;
				
				case 'Get Story of My Life extended report (70 pages).':
				$payamount = 50.00;
				break;
				
				default:
				$payamount = 30.00;
			
				break;
			}
				$temp_product = array(
				'name' => 'Payment for your Question',
				'desc' => $questiondata['question'],
				'number' => $booking_id,
				'quantity' => round($questiondata['total_amount']/$questiondata['amount']), // simple example -- fixed to 1
				'amount' => $payamount
				);
			// add product to main $to_buy array
			$products[] = $temp_product;
	
			$to_buy = array(
			'desc' => 'Payment',
			'currency' => $this->currency, 
			'type' => $this->ec_action, 
			'return_URL' => base_url('/paypal/success'),
            'custom' => implode('-', $customeids),
			// see below have a function for this -- function back()
			// whatever you use, make sure the URL is live and can process
			// the next steps
			'cancel_URL' => ($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : base_url(), // this goes to this controllers index()
			'get_shipping' => false);
			// I am just iterating through $this->product from defined
			// above. In a live case, you could be iterating through
			// the content of your shopping cart.
			$to_buy['products'] = $products;
		// enquire Paypal API for token
			$set_ec_return = \CI::paypal_ec()->set_ec($to_buy);
					
		//print_r($set_ec_return); exit;
			if (isset($set_ec_return['ec_status']) && ($set_ec_return['ec_status'] === true)) {
				\CI::paypal_ec()->redirect_to_paypal($set_ec_return['TOKEN']);
			} else {
				\CI::_error($set_ec_return);
			}
	
	}
	
	
	function success() {
		// we are back from Paypal. We need to do GetExpressCheckoutDetails
		// and DoExpressCheckoutPayment to complete.
		$token = $_GET['token'];
		$payer_id = $_GET['PayerID'];

		$paypal_details = array(
			'API_username'  => API_USERNAME,
			'API_signature' => API_SIGNATURE,
			'API_password'  => API_PASSWORD,
			);
					
		    \CI::load()->library('paypal_ec', $paypal_details);
			
		// GetExpressCheckoutDetails
		$get_ec_return = \CI::paypal_ec()->get_ec($token);
					
		if (isset($get_ec_return['ec_status']) && ($get_ec_return['ec_status'] === true)) {
			// at this point, you have all of the data for the transaction.
			// you may want to save the data for future action. what's left to
			// do is to collect the money -- you do that by call DoExpressCheckoutPayment
			// via $this->paypal_ec->do_ec();
			//
			// I suggest to save all of the details of the transaction. You get all that
			// in $get_ec_return array
			$ec_details = array(
				'token' => $token, 
				'payer_id' => $payer_id, 
				'currency' => $this->currency, 
				'amount' => $get_ec_return['PAYMENTREQUEST_0_AMT'], 
				'IPN_URL' => base_url('service/ipn'), 
				// in case you want to log the IPN, and you
				// may have to in case of Pending transaction
				'type' => $this->ec_action);
				//print_r($get_ec_return);
			// DoExpressCheckoutPayment
			$do_ec_return = \CI::paypal_ec()->do_ec($ec_details);
			if(isset($do_ec_return['ec_status']) && ($do_ec_return['ec_status'] === true)) {
				\CI::Service()->paypal_update_question($get_ec_return, $do_ec_return);
 			}
			$data['message'] = 'Thank you for your payment. Transaction ID:- #'.$do_ec_return['PAYMENTINFO_0_TRANSACTIONID'];
		} else{
			$data['message'] = $set_ec_return;
		}
				$this->partial('/defaultheader', $data);
				$this->partial('_pages/paypal_success', $data);
				$this->partial('/customer/footer', $data);			
	}
		
	public function ipn() {
		$logfile = FCPATH.'ipnlog/' . uniqid() . '.txt';
		$logdata = "<pre>\r\n" . print_r($_POST, true) . '</pre>';
		file_put_contents($logfile, $logdata);
	}
	
	
	public function horoscopedetail($slug=NULL, $extraslug=NULL){
	$extraslugdata = explode('-', $extraslug);
	
	if($extraslugdata[2] !== 'horoscope'){ redirect('/404'); }
	$data['horoscopedetail'] = \CI::Service()->horoscopedetail($slug, $extraslugdata[1]);
	$data['sign'] = $slug;
	$data['extraslug'] = $extraslugdata[1];

			switch($slug){
			case 'aries':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Aries Daily Horoscope | Today Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="aries horoscope, aries today horoscope, aries daily horoscope, aries my horoscope, aries horoscope matching, daily horoscope signs, areis horoscope reading" />
<meta name="description" content="Know About Your Daily Aries Horoscope, Akashvaani.com provides Online Today Aries  Horoscope Prediction, Sign Up Today for Personal Daily 
Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Aries Weekly Horoscope | Weekly Aries Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="aries horoscope, aries weekly horoscope, aries weekly horoscope, aries my horoscope, aries horoscope matching, aries horoscope signs, aries horoscope reading" />
<meta name="description" content="Know About Your Weekly Aries Horoscope, Akashvaani.com provides Online Weekly Aries Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Aries Monthly Horoscope | Monthly Aries Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="aries horoscope, aries monthly horoscope, aries monthly horoscope, aries my horoscope, aries horoscope matching, aries horoscope signs, aries horoscope reading" />
<meta name="description" content="Know About Your Monthly Aries Horoscope, Akashvaani.com provides Online Monthly Aries Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Aries Yearly Horoscope | Yearly Aries Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="aries horoscope, aries yearly horoscope, aries yearly horoscope, aries my horoscope, aries horoscope matching, aries horoscope signs, aries horoscope reading" />
<meta name="description" content="Know About Your Yearly Aries Horoscope, Akashvaani.com provides Online Yearly Aries Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;
	
			case 'taurus':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Taurus Daily Horoscope | Today Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="taurus horoscope, taurus today horoscope, taurus daily horoscope, taurus my horoscope, taurus horoscope matching, taurus horoscope signs,taurus horoscope reading" />
<meta name="description" content="Know About Your Daily Taurus Horoscope, Akashvaani.com provides Online Today Taurus Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Taurus Weekly Horoscope | Weekly Taurus Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="taurus horoscope, taurus weekly horoscope, taurus weekly horoscope, taurus my horoscope, taurus horoscope matching, taurus horoscope signs, taurus horoscope reading" />
<meta name="description" content="Know About Your Weekly Taurus Horoscope, Akashvaani.com provides Online Weekly Taurus Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Taurus Monthly Horoscope | Monthly Taurus Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="taurus horoscope, taurus monthly horoscope, taurus monthly horoscope, taurus my horoscope, taurus horoscope matching, taurus horoscope signs, taurus horoscope reading" />
<meta name="description" content="Know About Your Monthly Taurus Horoscope, Akashvaani.com provides Online Monthly Taurus Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Taurus Yearly Horoscope | Yearly Taurus Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="taurus horoscope, taurus yearly horoscope, taurus yearly horoscope, taurus my horoscope, taurus horoscope matching, taurus horoscope signs, taurus horoscope reading" />
<meta name="description" content="Know About Your Yearly Taurus Horoscope, Akashvaani.com provides Online Yearly Taurus Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;
			case 'gemini':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Gemini Daily Horoscope | Today Gemini Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="gemini horoscope, gemini today horoscope, gemini daily horoscope, gemini my horoscope, gemini horoscope matching, gemini horoscope signs,gemini horoscope reading" />
<meta name="description" content="Know About Your Daily Gemini Horoscope, Akashvaani.com provides Online Today Gemini Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Gemini Weekly Horoscope | Weekly Gemini Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="gemini horoscope, gemini weekly horoscope, gemini weekly horoscope, gemini my horoscope, gemini horoscope matching, gemini horoscope signs, gemini horoscope reading" />
<meta name="description" content="Know About Your Weekly Gemini Horoscope, Akashvaani.com provides Online Weekly Gemini Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Gemini Monthly Horoscope | Monthly Gemini Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="gemini horoscope, gemini monthly horoscope, gemini my horoscope, gemini horoscope matching, gemini horoscope signs, gemini horoscope reading" />
<meta name="description" content="Know About Your Monthly Gemini Horoscope, Akashvaani.com provides Online Monthly Gemini Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Gemini Yearly Horoscope | Yearly Gemini Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="gemini horoscope, gemini yearly horoscope, gemini my horoscope, gemini horoscope matching, gemini horoscope signs, gemini horoscope reading" />
<meta name="description" content="Know About Your Yearly Gemini Horoscope, Akashvaani.com provides Online Yearly Gemini Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;
			case 'cancer':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Cancer Daily Horoscope | Today Cancer Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="cancer horoscope, cancer today horoscope, cancer daily horoscope, cancer my horoscope, cancer horoscope matching, cancer horoscope signs,cancer horoscope reading" />
<meta name="description" content="Know About Your Daily Cancer Horoscope, Akashvaani.com provides Online Today Cancer Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Cancer Weekly Horoscope | Weekly Cancer Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="cancer horoscope, cancer weekly horoscope, cancer weekly horoscope, cancer my horoscope, cancer horoscope matching, cancer horoscope signs, cancer horoscope reading" />
<meta name="description" content="Know About Your Weekly Cancer Horoscope, Akashvaani.com provides Online Weekly Cancer Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Cancer Monthly Horoscope | Monthly Cancer Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="cancer horoscope, cancer monthly horoscope, cancer monthly horoscope, cancer my horoscope, cancer horoscope matching, cancer horoscope signs, cancer horoscope reading" />
<meta name="description" content="Know About Your Monthly Cancer Horoscope, Akashvaani.com provides Online Monthly Cancer Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Cancer Yearly Horoscope | Yearly Cancer Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="cancer horoscope, cancer yearly horoscope, cancer yearly horoscope, cancer my horoscope, cancer horoscope matching, cancer horoscope signs, cancer horoscope reading" />
<meta name="description" content="Know About Your Yearly Cancer Horoscope, Akashvaani.com provides Online Yearly Cancer Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'leo':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Leo Daily Horoscope | Today Leo Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="leo horoscope, leo today horoscope, leo daily horoscope, leo my horoscope, leo horoscope matching, leo horoscope signs,leo horoscope reading" />
<meta name="description" content="Know About Your Daily Leo Horoscope, Akashvaani.com provides Online Today Leo Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Leo Weekly Horoscope | Weekly Leo Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="leo horoscope, leo weekly horoscope, leo weekly horoscope, leo my horoscope, leo horoscope matching, leo horoscope signs, leo horoscope reading" />
<meta name="description" content="Know About Your Weekly Leo Horoscope, Akashvaani.com provides Online Weekly Leo Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Leo Monthly Horoscope | Monthly Leo Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="leo horoscope, leo monthly horoscope, leo monthly horoscope, leo my horoscope, leo horoscope matching, leo horoscope signs, leo horoscope reading" />
								<meta name="description" content="Know About Your Monthly Leo Horoscope, Akashvaani.com provides Online Monthly Leo Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Leo Yearly Horoscope | Yearly Leo Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="leo horoscope, leo yearly horoscope, leo yearly horoscope, leo my horoscope, leo horoscope matching, leo horoscope signs, leo horoscope reading" />
<meta name="description" content="Know About Your Yearly Leo Horoscope, Akashvaani.com provides Online Yearly Leo Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'virgo':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Virgo Daily Horoscope | Today Virgo Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="virgo horoscope, virgo today horoscope, virgo daily horoscope, virgo my horoscope, virgo horoscope matching, virgo horoscope signs,virgo horoscope reading" />
<meta name="description" content="Know About Your Daily Virgo Horoscope, Akashvaani.com provides Online Today Virgo Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Virgo Weekly Horoscope | Weekly Virgo Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="virgo horoscope, virgo weekly horoscope, virgo weekly horoscope, virgo my horoscope, virgo horoscope matching, virgo horoscope signs, virgo horoscope reading" />
<meta name="description" content="Know About Your Weekly Virgo Horoscope, Akashvaani.com provides Online Weekly Virgo Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Virgo Monthly Horoscope | Monthly Virgo Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="virgo horoscope, virgo monthly horoscope, virgo monthly horoscope, virgo my horoscope, virgo horoscope matching, virgo horoscope signs, virgo horoscope reading" />
<meta name="description" content="Know About Your Monthly Virgo Horoscope, Akashvaani.com provides Online Monthly Virgo Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Virgo Yearly Horoscope | Yearly Virgo Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="virgo horoscope, virgo yearly horoscope, virgo yearly horoscope, virgo my horoscope, virgo horoscope matching, virgo horoscope signs, virgo horoscope reading" />
<meta name="description" content="Know About Your Yearly Virgo Horoscope, Akashvaani.com provides Online Yearly Virgo Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;
			case 'libra':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Libra Daily Horoscope | Today Libra Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="libra horoscope, libra today horoscope, libra daily horoscope, libra my horoscope, libra horoscope matching, libra horoscope signs,libra horoscope reading" />
<meta name="description" content="Know About Your Daily Libra Horoscope, Akashvaani.com provides Online Today Libra Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Libra Weekly Horoscope | Weekly Libra Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="libra horoscope, libra weekly horoscope, libra weekly horoscope, libra my horoscope, libra horoscope matching, libra horoscope signs, libra horoscope reading" />
<meta name="description" content="Know About Your Weekly Libra Horoscope, Akashvaani.com provides Online Weekly Libra Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Libra Monthly Horoscope | Monthly Libra Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="libra horoscope, libra monthly horoscope, libra monthly horoscope, libra my horoscope, libra horoscope matching, libra horoscope signs, libra horoscope reading" />
<meta name="description" content="Know About Your Monthly Libra Horoscope, Akashvaani.com provides Online Monthly Libra Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Libra Yearly Horoscope | Yearly Libra Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="libra horoscope, libra yearly horoscope, libra yearly horoscope, libra my horoscope, libra horoscope matching, libra horoscope signs, libra horoscope reading" />
<meta name="description" content="Know About Your Yearly Libra Horoscope, Akashvaani.com provides Online Yearly Libra Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'scorpio':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Scorpio Daily Horoscope | Today Scorpio Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="scorpio horoscope, scorpio today horoscope, scorpio daily horoscope, scorpio my horoscope, scorpio horoscope matching, scorpio horoscope signs,libra horoscope reading" />
<meta name="description" content="Know About Your Daily Scorpio Horoscope, Akashvaani.com provides Online Today Scorpio Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Scorpio Weekly Horoscope | Weekly Scorpio Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="scorpio horoscope, scorpio weekly horoscope, scorpio weekly horoscope, scorpio my horoscope, scorpio horoscope matching, scorpio horoscope signs, scorpio horoscope reading" />
<meta name="description" content="Know About Your Weekly Scorpio Horoscope, Akashvaani.com provides Online Weekly Scorpio Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Scorpio Monthly Horoscope | Monthly Scorpio Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="scorpio horoscope, scorpio monthly horoscope, scorpio monthly horoscope, scorpio my horoscope, scorpio horoscope matching, scorpio horoscope signs, scorpio horoscope reading" />
<meta name="description" content="Know About Your Monthly Scorpio Horoscope, Akashvaani.com provides Online Monthly Scorpio Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Scorpio Yearly Horoscope | Yearly Scorpio Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="scorpio horoscope, scorpio yearly horoscope, scorpio yearly horoscope, scorpio my horoscope, scorpio horoscope matching, scorpio horoscope signs, scorpio horoscope reading" />
<meta name="description" content="Know About Your Yearly Scorpio Horoscope, Akashvaani.com provides Online Yearly Scorpio Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'sagittarius':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Sagittarius Daily Horoscope | Today Sagittarius Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="sagittarius horoscope, sagittarius today horoscope, sagittarius daily horoscope, sagittarius my horoscope, sagittarius horoscope matching, sagittarius horoscope signs,sagittarius horoscope reading" />
<meta name="description" content="Know About Your Daily Sagittarius Horoscope, Akashvaani.com provides Online Today Sagittarius Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Sagittarius Weekly Horoscope | Weekly Sagittarius Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="sagittarius horoscope, sagittarius weekly horoscope, sagittarius weekly horoscope, sagittarius my horoscope, sagittarius horoscope matching, sagittarius horoscope signs, sagittarius horoscope reading" />
<meta name="description" content="Know About Your Weekly Sagittarius Horoscope, Akashvaani.com provides Online Weekly Sagittarius Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';	
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Sagittarius Monthly Horoscope | Monthly Sagittarius Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="sagittarius horoscope, sagittarius monthly horoscope, sagittarius monthly horoscope, sagittarius my horoscope, sagittarius horoscope matching, sagittarius horoscope signs, sagittarius horoscope reading" />
<meta name="description" content="Know About Your Monthly Sagittarius Horoscope, Akashvaani.com provides Online Monthly Sagittarius Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Sagittarius Yearly Horoscope | Yearly Sagittarius Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="sagittarius horoscope, sagittarius yearly horoscope, sagittarius yearly horoscope, sagittarius my horoscope, sagittarius horoscope matching, sagittarius horoscope signs, sagittarius horoscope reading" />
<meta name="description" content="Know About Your Yearly Sagittarius Horoscope, Akashvaani.com provides Online Yearly Sagittarius Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'capricorn':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Capricorn Daily Horoscope | Today Capricorn Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="capricorn horoscope, capricorn today horoscope, capricorn daily horoscope, capricorn my horoscope, capricorn horoscope matching, capricorn horoscope signs, capricorn horoscope reading" />
<meta name="description" content="Know About Your Daily Capricorn Horoscope, Akashvaani.com provides Online Today Capricorn Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Capricorn Weekly Horoscope | Weekly Capricorn Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="capricorn horoscope, capricorn weekly horoscope, capricorn weekly horoscope, capricorn my horoscope, capricorn horoscope matching, capricorn horoscope signs, capricorn horoscope reading" />
<meta name="description" content="Know About Your Weekly Capricorn Horoscope, Akashvaani.com provides Online Weekly Capricorn Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Capricorn Monthly Horoscope | Monthly Capricorn Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="capricorn horoscope, capricorn monthly horoscope, capricorn monthly horoscope, capricorn my horoscope, capricorn horoscope matching, capricorn horoscope signs, capricorn horoscope reading" />
<meta name="description" content="Know About Your Monthly Capricorn Horoscope, Akashvaani.com provides Online Monthly Capricorn Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Capricorn Yearly Horoscope | Yearly Capricorn Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="capricorn horoscope, capricorn yearly horoscope, capricorn yearly horoscope, capricorn my horoscope, capricorn horoscope matching, capricorn horoscope signs, capricorn horoscope reading" />
<meta name="description" content="Know About Your Yearly Capricorn Horoscope, Akashvaani.com provides Online Yearly Capricorn Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'aquarius':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Aquarius Daily Horoscope | Today Aquarius Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="aquarius horoscope, aquarius today horoscope, aquarius daily horoscope, aquarius my horoscope, aquarius horoscope matching, aquarius horoscope signs, aquarius horoscope reading" />
<meta name="description" content="Know About Your Daily Aquarius Horoscope, Akashvaani.com provides Online Today Aquarius Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Aquarius Weekly Horoscope | Weekly Aquarius Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="aquarius horoscope, aquarius weekly horoscope, aquarius weekly horoscope, aquarius my horoscope, aquarius horoscope matching, aquarius horoscope signs, aquarius horoscope reading" />
<meta name="description" content="Know About Your Weekly Aquarius Horoscope, Akashvaani.com provides Online Weekly Aquarius Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Aquarius Monthly Horoscope | Monthly Aquarius Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="aquarius horoscope, aquarius monthly horoscope, aquarius monthly horoscope, aquarius my horoscope, aquarius horoscope matching, aquarius horoscope signs, aquarius horoscope reading" />
<meta name="description" content="Know About Your Monthly Aquarius Horoscope, Akashvaani.com provides Online Monthly Aquarius Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Aquarius Yearly Horoscope | Yearly Aquarius Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="aquarius horoscope, aquarius yearly horoscope, aquarius yearly horoscope, aquarius my horoscope, aquarius horoscope matching, aquarius horoscope signs, aquarius horoscope reading" />
<meta name="description" content="Know About Your Yearly Aquarius Horoscope, Akashvaani.com provides Online Yearly Aquarius Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;case 'pisces':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = 'Free Pisces Daily Horoscope | Today Pisces Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="pisces horoscope, pisces today horoscope, pisces daily horoscope, pisces my horoscope, pisces horoscope matching, pisces horoscope signs, pisces horoscope reading" />
<meta name="description" content="Know About Your Daily Pisces Horoscope, Akashvaani.com provides Online Today Pisces Horoscope Prediction, Sign Up Today for Personal Daily Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'weekly';
							$data['seo_title'] = 'Free Pisces Weekly Horoscope | Weekly Pisces Horoscope with Akashvaani.com';	
							$data['meta'] = '<meta name="keywords" content="pisces horoscope, pisces weekly horoscope, pisces weekly horoscope, pisces my horoscope, pisces horoscope matching, pisces horoscope signs, pisces horoscope reading" />
<meta name="description" content="Know About Your Weekly Pisces Horoscope, Akashvaani.com provides Online Weekly Pisces Horoscope Prediction, Sign Up Today for Personal Weekly Horoscope Matching by Experience Astrologers in India." />';
								
						break;
						case 'monthly';
								$data['seo_title'] = 'Free Pisces Monthly Horoscope | Monthly Pisces Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="pisces horoscope, pisces monthly horoscope, pisces monthly horoscope, pisces my horoscope, pisces horoscope matching, pisces horoscope signs, pisces horoscope reading" />
<meta name="description" content="Know About Your Monthly Pisces Horoscope, Akashvaani.com provides Online Monthly Pisces Horoscope Prediction, Sign Up Today for Personal Monthly Horoscope Matching by Experience Astrologers in India." />';
						break;
						case 'yearly';
								$data['seo_title'] = 'Free Pisces Yearly Horoscope | Yearly Pisces Horoscope with Akashvaani.com';
								$data['meta'] = '<meta name="keywords" content="pisces horoscope, pisces yearly horoscope, pisces yearly horoscope, pisces my horoscope, pisces horoscope matching, pisces horoscope signs, pisces horoscope reading" />
<meta name="description" content="Know About Your Yearly Pisces Horoscope, Akashvaani.com provides Online Yearly Pisces Horoscope Prediction, Sign Up Today for Personal Yearly Horoscope Matching by Experience Astrologers in India." />';
						break;
					}
			break;
			
			case 'demo':
					switch($data['extraslug']){
						case 'daily';
							$data['seo_title'] = '';	
							$data['meta'] = '';
						break;
						case 'weekly';
							$data['seo_title'] = '';	
							$data['meta'] = '';
								
						break;
						case 'monthly';
								$data['seo_title'] = '';
								$data['meta'] = '';
						break;
						case 'yearly';
								$data['seo_title'] = '';
								$data['meta'] = '';
						break;
					}
			break;
	
	
	
	}
	
	
	
	 // load other page content
        	\CI::load()->helper('date');
			$this->partial('horoscopeheader', $data);
			$this->partial('_statics/horoscopes', $data);
            $this->partial('productfooter', $data);
	}
	public function copatibilityresult($slug=NULL){
	
	 // load other page content
        	\CI::load()->helper('date');
			$this->partial('horoscopeheader', $data);
			$this->partial('_statics/copatibilityresult', $data);
            $this->partial('productfooter', $data);
	}
	
	
}
