<?php
Class Settings
{

    public function getlist($count = false, $type, $limit, $page){
        switch ($type) {
				case 'enquiry':
				//CI::db()->distinct('module_bookings.email');
                CI::db()->select('first_name as firstname, last_name as lastname, email');
                CI::db()->from('module_bookings');
                CI::db()->where('booking_id', NULL);
                CI::db()->where('email !=', '');
                CI::db()->group_by('module_bookings.email');
                break;
				
				case 'report':
               // CI::db()->distinct('module_bookings.email');
                CI::db()->select('module_bookings.first_name as firstname, module_bookings.last_name as lastname, module_bookings.email');
                CI::db()->from('customer_questions');
                CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id', 'left');
                CI::db()->where('customer_questions.payment_status', 0);
                CI::db()->group_by('module_bookings.email');
                break;
				
                case 'payreport':
                //CI::db()->distinct('module_bookings.email');
                CI::db()->select('module_bookings.first_name as firstname, module_bookings.last_name as lastname, module_bookings.email');
                CI::db()->from('customer_questions');
                CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id', 'left');
                CI::db()->where('customer_questions.payment_status', 1);
                CI::db()->group_by('module_bookings.email');
                break;
				
                case 'subscribes':
                CI::db()->select('email');
                CI::db()->from('subscribes');                
                break;

                 case 'getreport':
                  //CI::db()->distinct('get_analysis_data.email');
                CI::db()->select('email, name as firstname, date');
                CI::db()->from('get_analysis_data');
                CI::db()->where('get_analysis_data.email !=', '');
                CI::db()->group_by('LOWER(TRIM(get_analysis_data.email))');
                 CI::db()->order_by('get_analysis_data.date', 'desc');               
                break;
				
                case 'payreport':
                CI::db()->select('firstname, lastname, email');
                CI::db()->from('customers');
                CI::db()->where('is_guest', 0);
                
                break;
                default:
                CI::db()->select('firstname, lastname, email');
                CI::db()->from('customers');
                CI::db()->where('is_guest', 0);
                break;
        }

                if($count){
                   return CI::db()->get()->num_rows();
                   // return CI::db()->count_all_results();
                }else{
                     CI::db()->limit($limit, $page);

                       // CI::db()->get()->result();
                        //echo CI::db()->last_query();
//exit;
                    return CI::db()->get()->result(); 
                }
        
    }


    public function get_settings($code)
    {
        CI::db()->where('code', $code);
        $result = CI::db()->get('settings');

        $return = [];
        foreach($result->result() as $results)
        {
            $return[$results->setting_key]  = $results->setting;
        }
        return $return; 
    }
    
    /*
    settings should be an array
    array('setting_key'=>'setting')
    $code is the item that is calling it
    ex. any shipping settings have the code "shipping"
    */
    public function save_settings($code, $values)
    {
        //get the settings first, this way, we can know if we need to update or insert settings
        //we're going to create an array of keys for the requested code
        $settings   = $this->get_settings($code);

        //loop through the settings and add each one as a new row
        foreach($values as $key=>$value)
        {
            //if the key currently exists, update the setting
            if(array_key_exists($key, $settings))
            {
                $update = array('setting'=>$value);
                CI::db()->where('code', $code);
                CI::db()->where('setting_key',$key);
                CI::db()->update('settings', $update);
            }
            //if the key does not exist, add it
            else
            {
                $insert = array('code'=>$code, 'setting_key'=>$key, 'setting'=>$value);
                CI::db()->insert('settings', $insert);
            }
        }
    }

    //delete any settings having to do with this particular code
    public function delete_settings($code)
    {
        CI::db()->where('code', $code);
        CI::db()->delete('settings');
    }

    //this deletes a specific setting
    public function delete_setting($code, $setting_key)
    {
        CI::db()->where('code', $code);
        CI::db()->where('setting_key', $setting_key);
        CI::db()->delete('settings');
    }

    public function send_reminder($type = 1){

            switch($type){

                    case 1:
                        CI::db()->distinct('module_bookings.email');
                        CI::db()->select('module_bookings.id, module_bookings.first_name as firstname, module_bookings.last_name as lastname, module_bookings.email');
                        CI::db()->from('customer_questions');
                        CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id', 'left');
                        CI::db()->where('customer_questions.payment_status', 0);
                        CI::db()->where('DATE(module_bookings.date)', date('Y-m-d'));
                        CI::db()->where('module_bookings.email !=', '');
                    break;
                    case 2:
                        CI::db()->distinct('module_bookings.email');
                        CI::db()->select('module_bookings.id, module_bookings.first_name as firstname, module_bookings.last_name as lastname, module_bookings.email');
                        CI::db()->from('customer_questions');
                        CI::db()->join('module_bookings', 'customer_questions.booking_id = module_bookings.id', 'left');
                        CI::db()->where('customer_questions.payment_status', 0);
                        //CI::db()->where('DATE(module_bookings.date)', date('Y-m-d'));
                        CI::db()->where('module_bookings.email !=', '');
                    break;

            }

            $receivers = CI::db()->get()->result(); 
print_r($receivers); exit;

//$data[]
//send_message_form();


                 require_once APPPATH.'third_party/sendgrid-php/sendgrid-php.php';
       
                $sendgrid_apikey        = SENDGRID_APIKEY;
                $sendgrid               = \CI::SendGrid($sendgrid_apikey);
                $url                    = 'https://api.sendgrid.com/';
                $pass                   = $sendgrid_apikey;
                $template_id            = '7b74f2d9-393b-4203-863b-d9fad9af31e5';
                $count = 0;

                if(count($receivers) > 0){
                    foreach ($receivers as $key => $value) {
                    $js = array(
                      'sub' => array(':name' => array($value->firstname), ':id' => array($value->id)),
                      'filters' => array('templates' => array('settings' => array('enable' => 1, 'template_id' => $template_id)))
                    );

                    $params = array(
                        'to'        => 'dhirpstar@gmail.com',
                         //'to'        => $value['email'],
                        'toname'    => $value->firstname,
                        'from'      => "connect@akashvaani.com",
                        'fromname'  => "Akashvaani",
                        'subject'   => $value->firstname.' Reminder email',
                        'text'      => "I'm text!",
                        'html'      => "<strong>I'm HTML!</strong>",
                        'x-smtpapi' => json_encode($js),
                      );

$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $sendgrid_apikey));
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);
$count++;

    }
}
// print everything out
//print_r($response);

  echo $count.' emails has been sent.'; exit;
exit;

    }

}