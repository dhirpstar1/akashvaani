<?php namespace GoCart;
use Swift_Attachment; 
/** 
 * Emails Class
 *
 * @package     Emails
 * @subpackage  Library
 * @category    GoCart
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */
class Emails {

    static function sendEmail($email)
    {
        $mailType = config_item('email_method');
				



        if($mailType == 'smtp')
        {
				$transport = \Swift_SmtpTransport::newInstance(config_item('smtp_server'), config_item('smtp_port'), 'ssl')->setUsername(config_item('smtp_username'))->setPassword(config_item('smtp_password'));
        }
        elseif($mailType == 'sendmail')
        {
            $transport = \Swift_SendmailTransport::newInstance(config_item('sendmail_path'));
        }
        else //Mail
        {
            $transport = \Swift_MailTransport::newInstance();
        }
			 //get the mailer
        $mailer = \Swift_Mailer::newInstance($transport);
		// print_r($mailer); exit;
        //send the message
        $mailer->send($email);
    }

    static function registration($customer)
    {
	    $email = \Swift_Message::newInstance();
		//$email =  \CI::load()->library('email');
		
        $cannedMessage = \CI::db()->where('id', '6')->get('canned_messages')->row_array();
		
        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        //fields for the template
        $fields = [ 'site_name'=>config_item('company_name'),
                    'customer_name' => $customer['firstname'].' '.$customer['lastname'],
                    'url'=>base_url()
                  ];


                    $senddata['template_id'] = 'bf33af9b-62ec-4f99-ab4c-656f26ea5848';
                    $senddata['customer_name'] = $customer['firstname'];
                    //$senddata['email'] = $customer['email'];
                    $senddata['email'] = 'dhirpstar@gmail.com';
                    $senddata['subject'] = 'Payment reminder';
                    send_message_form($senddata);         


/*
        //render the subject and content to a variable
        $subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $fields);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($customer['email']);
		 //$email->setTo('dhirpstar@gmail.com');
        $email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
		//$email->send();	
        self::sendEmail($email);
        */
    }

    static function giftCardNotification($giftCard)
    {
        $email = \Swift_Message::newInstance();
        $cannedMessage = \CI::db()->where('id', '1')->get('canned_messages')->row_array();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        //fields for the template
        $fields = [ 'site_name'=>config_item('company_name'),
                    'code' => $giftCard['code'],
                    'amount'=>$giftCard['beginning_amount'],
                    'from'=>$giftCard['from'],
                    'personal_message'=>$giftCard['personal_message'],
                    'url'=>base_url()
                  ];
        //render the subject and content to a variable
        $subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $fields);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($giftCard['to_email']);
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email

        $email->setSubject($subject);
        $email->setBody($content, 'text/html');

        self::sendEmail($email);

    }

    /*
    This function send an email notification when the admins resets password
    */
    static function resetPassword($password, $adminEmail)
    {
        $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);


        $fields = ['site_name'=>config_item('company_name'), 'password'=>$password];

        $subject = $twig->render(lang('reset_password_subject'), $fields);
        $content = $twig->render(lang('reset_password_content'), $fields);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($adminEmail);
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');

        self::sendEmail($email);
    }

    /*
    This function send an email notification when the customer resets password
    */
    static function resetPasswordCustomer($password, $customeEmail)
    {
        $email = \Swift_Message::newInstance();

        $cannedMessage = \CI::db()->where('id', '2')->get('canned_messages')->row_array();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        //fields for the template
        $fields = ['site_name'=>config_item('company_name'), 'email'=>$customeEmail, 'password'=>$password];

        //render the subject and content to a variable
        $subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $fields);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($customeEmail);
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');

        self::sendEmail($email);

    }

    /*
    Order email notification
    */
    static function sendOrderNotification($order)
    {
        $email = \Swift_Message::newInstance();
        $cannedMessage['content'] = html_entity_decode($order['content']);
        $cannedMessage['subject'] = $order['subject'];

        $email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($order['recipient']);
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($cannedMessage['subject']);
        $email->setBody($cannedMessage['content'], 'text/html');

        self::sendEmail($email);
    }

    /*
    Place Order
    */
    static function Order($order)
    {
	
        if($order->is_guest)
        {
                    //if the customer is a guest, get their name from the Billing address
            $customerName = $order->billing_firstname.' '.$order->billing_lastname;
            $customerEmail = $order->billing_email;
        }
        else
        {
            $customerName = $order->firstname.' '.$order->lastname;
            $customerEmail = $order->email;
        }

        $cannedMessage = \CI::db()->where('id', '7')->get('canned_messages')->row_array();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        //load in the view class so we can get our order view
        $view = \GoCart\Libraries\View::getInstance();
        
        $fields = ['customer_name'=>$customerName, 'site_name'=>config_item('company_name'), 'order_summary'=>$view->get('order_summary_email', ['order'=>$order])];
        $subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $fields);

        $email = \Swift_Message::newInstance();

        $email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($customerEmail);
        $email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');

        self::sendEmail($email);
    }
	
	static function Order_payment($order)
    {

        if($order->is_guest)
        {
                    //if the customer is a guest, get their name from the Billing address
            $customerName = $order->billing_firstname.' '.$order->billing_lastname;
            $customerEmail = $order->billing_email;
        }
        else
        {
            $customerName = $order->firstname.' '.$order->lastname;
            $customerEmail = $order->email;
        }

        $cannedMessage = \CI::db()->where('id', '26')->get('canned_messages')->row_array();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        //load in the view class so we can get our order view
        $view = \GoCart\Libraries\View::getInstance();
        
        $fields = ['customer_name'=>$customerName, 'site_name'=>config_item('company_name'), 'order_summary'=>$view->get('payment_summary_email', ['order'=>$order])];
        $subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $fields);

        $email = \Swift_Message::newInstance();

        $email->setFrom(config_item('email_from')); //email address the website sends from
        $email->setTo($customerEmail);
        $email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');

        self::sendEmail($email);
    }
	
	
	
	static function sendBookingnotification($emaildata)
    {
        $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['first_name'], 'reference_page'=>$emaildata['reference_page'], 'reference_heading'=>$emaildata['reference_heading']];
        $subject = $twig->render('Booking Notification', $fields);
		$cannedMessage = \CI::db()->where('id', '9')->get('canned_messages')->row_array();
		
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
		 $email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
        //$email->setFrom(config_item('email_from')); //email address the website sends from
		
		
		if($emaildata['email']){		
		$email->setTo($emaildata['email']);
		}else{
		$email->setTo(config_item('email_to'));
		}
		
        //$email->setBcc('connect@akashvaani.com');
		//$email->setTo('dhirpstar@gmail.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
		
		
		 $cannedMessage = \CI::db()->where('id', '8')->get('canned_messages')->row_array();
		
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo('connect@akashvaani.com');
		//$email->setBcc(config_item('email_to'))
		//$email->setBcc('dhirpstar@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
    }
	static function sendQuestionnotification($emaildata, $customer, $questionsdata, $consultation_type)
    {
	    $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

		$dob = $customer->day.'/'.$customer->day.'/'.$customer->year;
        $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['first_name'], 'dob' => $dob];
		
        $subject = $twig->render('Order Notification', $fields);
		if($consultation_type == 'get_report'){
		$cannedMessage = \CI::db()->where('id', '20')->get('canned_messages')->row_array();
		$subject = 'Thank you for your order.';
		}else{
		 $cannedMessage = \CI::db()->where('id', '11')->get('canned_messages')->row_array();
		 $subject = 'Thank you for your quetion.';
		}
		//$subject = $twig->render($cannedMessage['subject'], $fields);
		
        $content = $twig->render($cannedMessage['content'], $emaildata);
		 $email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
        $email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
		if((int)$questionsdata['amount'] == 0):
	    self::sendEmail($email);
		endif;
		
		 $cannedMessage = \CI::db()->where('id', '10')->get('canned_messages')->row_array();
		 
        $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['first_name']];
				
		$emaildata['dob'] = $customer->day.'/'.$customer->month.'/'.$customer->year;
		$emaildata['tob'] = $customer->hour.':'.$customer->minute;
		$emaildata['pob'] = $customer->birth_place;
		$emaildata['description'] = strip_tags($emaildata['description']);	
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo('connect@akashvaani.com');
		//$email->setBcc('dhirpstar@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
    }
	
	static function sendAnsweremail($emaildata)
    {
	    $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);
		
		 $cannedMessage = \CI::db()->where('id', '11')->get('canned_messages')->row_array();
         $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['firstname']];

		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
			
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
		//$email->setTo('dhirpstar@gmail.com');
		//$email->setBcc(config_item('email_to'))
		//$email->setBcc('dhirpstar@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
    }
	
	static function sendEmailMessage($emaildata, $template_id)
    {
	    $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);
		
		 $cannedMessage = \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
         $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['firstname']];

		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
				
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
		//$email->setTo('dhirpstar@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
    }
	static function sendPaymentNotification($emaildata, $template_id, $invoice, $html)
    {
	    $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);
		
		 $cannedMessage = \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
         $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['first_name']];

		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
		
                    $senddata['template_id']    = 'f38fd5c2-de55-4b58-a3bf-2c4da032ea38';
                    $senddata['customer_name']  = $emaildata['first_name'];
                     $senddata['email_body']    = $html;
                    $senddata['email']          = $emaildata['email'];
                  //  $senddata['email']          = 'dhirpstar@gmail.com';
                    $senddata['subject']        = $subject;
                    send_message_form($senddata);         




		/*$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
		//$email->setTo('dhirpstar@gmail.com');
		$email->setBcc('freebeings2015@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
		if($invoice){
			$email->attach(Swift_Attachment::fromPath($invoice));
		}
	    self::sendEmail($email);
        */
    }
	static function sendcustomPaymentLink($emaildata, $template_id)
    {
	    $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);
		
		 $cannedMessage = \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
         $fields = ['site_name'=>config_item('company_name'), 'name'=>$emaildata['name']];
		$emaildata['link_code'] = base_url('payment/'.$emaildata['link_code']);
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
			
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
		//$email->setTo('dhirpstar@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
	    self::sendEmail($email);
    }
	static function sendreporttocustomer($emaildata, $template_id = 18)
    {
	    $email = \Swift_Message::newInstance();
        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);
		$cannedMessage = \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
        $fields = ['site_name' => config_item('company_name'), 'name' => $emaildata['name']];
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata);
		
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com')); //email address the website sends from
		$email->setTo($emaildata['email']);
		$email->setBcc('freebeings2015@gmail.com');
		$email->setReturnPath('connect@akashvaani.com'); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
		//file_put_contents(FCPATH.'uploads/report.pdf', file_get_contents($emaildata['download_link']));
		//ini_set('display_errors', 'On');
		if($emaildata['report_path']){
		$email->attach(Swift_Attachment::fromPath($emaildata['report_path']));
		}	
	    self::sendEmail($email);
    }
	
	 static function sendtrygetreporttoadmin($emaildata, $template_id)
    {
	$emaildata['data']['question'] = $emaildata['question'];
        $email = \Swift_Message::newInstance();

        $loader = new \Twig_Loader_String();
        $twig = new \Twig_Environment($loader);

        $cannedMessage = \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
        $fields = ['site_name' => config_item('company_name'), 'name' => $emaildata['data']['first_name'], 'question' => $emaildata['question']];
		$subject = $twig->render($cannedMessage['subject'], $fields);
        $content = $twig->render($cannedMessage['content'], $emaildata['data']);
		
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
       // $email->setBcc('dhirpstar@gmail.com');
		$email->setTo('pec.anshul05@gmail.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
    }
	
	
	 static function sendtryquestionstoadmin($emaildata, $template_id)
    {
	foreach($emaildata['questions'] as $question){$questions[]= $question['question'];}
	
        $email 			= \Swift_Message::newInstance();
		$emaildata['data']['questions'] = implode(", ", $questions);
        $loader 		= new \Twig_Loader_String();
        $twig 			= new \Twig_Environment($loader);
        $cannedMessage 	= \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
        $fields 		= ['site_name' => config_item('company_name'), 'name' => $emaildata['data']['first_name']];
		$subject 		= $twig->render($cannedMessage['subject'], $fields);
        $content 		= $twig->render($cannedMessage['content'], $emaildata['data']);
		

	
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setFrom(config_item('email_from')); //email address the website sends from
        //$email->setBcc('dhirpstar@gmail.com');
		//$email->setTo('connect@akashvaani.com');
		$email->setTo('pec.anshul05@gmail.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
    }
	
	
	 static function send_payment_reminder($link, $emaildata, $template_id)
    {
	
		$edata['first_name'] = $emaildata->first_name;
		$edata['question'] = $emaildata->question;
		$edata['link'] = $link;
        $email 			= \Swift_Message::newInstance();
        $loader 		= new \Twig_Loader_String();
        $twig 			= new \Twig_Environment($loader);
        $cannedMessage 	= \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
		
        $fields 		= ['site_name' => config_item('company_name'), 'name' => $edata['first_name']];
		$subject 		= $twig->render($cannedMessage['subject'], $fields);
        $content 		= $twig->render($cannedMessage['content'], $edata);
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setBcc('dhirpstar@gmail.com');
		//$email->setTo('connect@akashvaani.com');
		$email->setTo($emaildata->email);
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
    }
	
	static function send_email()
    {
		$edata['name'] = \CI::input()->post('name');
		$edata['email'] = \CI::input()->post('email');
		$edata['phone'] = \CI::input()->post('phone');

        $email 			= \Swift_Message::newInstance();
        $loader 		= new \Twig_Loader_String();
        $twig 			= new \Twig_Environment($loader);
		$subject		= $edata['name'].' has sent contact enquiry from horoscope page.';
        $content 		= '<div> Name: '.$edata['name']. '</div>';
		$content 		.= '<div> Email: '.$edata['email']. '</div>';
		$content 		.= '<div> Phone: '.$edata['phone']. '</div>';
		
		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        //$email->setBcc('dhirpstar@gmail.com');
		$email->setTo('connect@akashvaani.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
    }
	 static function sendproduct_enquiry($emaildata, $template_id)
    {

       $email 			= \Swift_Message::newInstance();
        $loader 		= new \Twig_Loader_String();
        $twig 			= new \Twig_Environment($loader);
        $cannedMessage 	= \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
		
        $fields 		= ['site_name' => config_item('company_name'), 'name' => $emaildata['name']];
		$subject 		= $twig->render($cannedMessage['subject'], $fields);
        $content 		= $twig->render($cannedMessage['content'], $emaildata);

		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
        $email->setBcc('dhirpstar@gmail.com');
		$email->setTo('connect@akashvaani.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
		
    }
	 static function sendmarketingemail($emaildata, $template_id)
    {
		list($edata['firstname'], $edata['lastname'], $edata['email']) = explode('_', $emaildata);
        $email 			= \Swift_Message::newInstance();
        $loader 		= new \Twig_Loader_String();
        $twig 			= new \Twig_Environment($loader);
        $cannedMessage 	= \CI::db()->where('id', $template_id)->get('canned_messages')->row_array();
		
        $fields 		= ['site_name' => config_item('company_name'), 'name' => $edata['firstname']];
		$subject 		= $twig->render($cannedMessage['subject'], $fields);
        $content 		= $twig->render($cannedMessage['content'], $edata);

		$email->setFrom(array(config_item('email_from') => 'Akashvaani.com'));
       // $email->setTo($edata['email']);
		$email->setTo('dhirpstar@gmail.com');
        //$email->setBcc(config_item('email_to')); //admin email the website sends to
        $email->setReturnPath(config_item('email_to')); //this is the bounce if they submit a bad email
        $email->setSubject($subject);
        $email->setBody($content, 'text/html');
        self::sendEmail($email);
		
    }
}
