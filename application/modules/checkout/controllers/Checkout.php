<?php namespace GoCart\Controller;
/**
 * Checkout Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Checkout
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Checkout extends Front {

    public $customer;

    public function __construct()
    {
        parent::__construct();
		    $this->currency = 'USD'; // currency for the transaction
			$this->ec_action = 'Sale'; // for PAYMENTREQUEST_0_PAYMENTACTION, it's either Sale, Order or Authorization
			 \CI::load()->model(array('Products'));
			
        if (config_item('require_login'))
        {
            \CI::Login()->isLoggedIn('checkout');
        }

        $this->customer = \CI::Login()->customer();
    }

    public function index()
    {
	   if(\GC::totalItems() > 0)
        {
            $data['addresses'] = \CI::Customers()->get_address_list($this->customer->id);
			$this->partial('productheader', $data);
			$this->partial('_statics/checkout', $data);
			$this->partial('productfooter', $data);
        }
        else
        {
            $this->view('emptyCart');
        }

    }

    public function submitOrder()
    {
        $errors = \GC::checkOrder();

        if(\GC::getGrandTotal() == 0)
        {
            $errors['payment'] = lang('error_choose_payment');
        }
        if(count($errors) > 0)
        {
            echo json_encode(['errors'=>$errors]);
           exit;
        }
        else
        {
            $payment = ['order_id' => \GC::getAttribute('id'),
                'amount' => \GC::getGrandTotal(),
                'status' => 'processed',
                'payment_module' => 'CCAVENUE',
                'description' => 'Online Payment'];

			$cartdata = \GC::getCart();
			$billingaddress = \CI::Customers()->get_address($cartdata->billing_address_id);



           //\CI::Orders()->savePaymentInfo($payment);
            //$orderId = \GC::submitOrder();
			
			
			//$order = \CI::Orders()->getOrder($orderid);
			$merchant_data='';
			$merchant_id 							= MERCHANT_ID;
			
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= \GC::getCart()->id;
			$merchant_dataArray['amount'] 			= \GC::getGrandTotal();
			$merchant_dataArray['redirect_url'] 	= base_url('checkout/success');
			$merchant_dataArray['cancel_url']		= base_url('checkout/payment/'.$orderid);
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= $billingaddress['firstname'].' '.$billingaddress['lastname'];
			$merchant_dataArray['billing_tel'] 		= $billingaddress['phone'];
			$merchant_dataArray['billing_city'] 	= $billingaddress['city'];
			$merchant_dataArray['billing_address'] 	= $billingaddress['address1'];
			$merchant_dataArray['billing_state'] 	= $billingaddress['zone'];
			$merchant_dataArray['billing_zip'] 		= $billingaddress['zip'];
			$merchant_dataArray['billing_country'] 	= $billingaddress['country'];
			
			$merchant_dataArray['billing_email'] 	= $billingaddress['email'];
			$merchant_dataArray['currency'] 		= 'INR';
		
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}
			$data['order'] 					= $order;
			$data['orderId'] 				= $orderId;
			$data['link_data'] 				= $linkdata;
			$data['access_code']			= ACCESS_CODE; //Shared by CCAVENUES
			
			//echo json_encode($merchant_dataArray); exit;
			
			$data['encrypted_data']			= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.
			
			$result['view'] = $this->partial('_statics/checkout_options', $data, true);
            echo json_encode($result);
            exit;
        }
    }

  public function payment_process($orderid)
    {
	$order = \CI::Orders()->getOrder($orderid);
	
	//print_r($order);
	//exit;
			$merchant_data='';
			$merchant_id 							= MERCHANT_ID;
			
			$merchant_dataArray['tid'] 				= rand(1111111, 9999999);
			$merchant_dataArray['merchant_id'] 		= MERCHANT_ID;
			$merchant_dataArray['order_id'] 		= $order->order_number;
			$merchant_dataArray['amount'] 			= $order->total;
			$merchant_dataArray['redirect_url'] 	= base_url('checkout/success');
			$merchant_dataArray['cancel_url']		= base_url('checkout/payment/'.$orderid);
			$merchant_dataArray['language'] 		= 'EN';
			$merchant_dataArray['billing_name'] 	= $order->billing_firstname.' '.$order->billing_lastname;
			$merchant_dataArray['billing_tel'] 		= $order->billing_phone;
			$merchant_dataArray['billing_city'] 	= $order->billing_city;
			$merchant_dataArray['billing_address'] 	= $order->billing_address1;
			$merchant_dataArray['billing_state'] 	= $order->billing_zone;
			$merchant_dataArray['billing_zip'] 		= $order->billing_zip;
			$merchant_dataArray['billing_country'] 	= $order->billing_country;
			
			$merchant_dataArray['billing_email'] 	= $order->billing_email;
			$merchant_dataArray['currency'] 		= 'INR';
		
			foreach ($merchant_dataArray as $key => $value){
				$merchant_data.=htmlspecialchars($key).'='.$value.'&';
			}
			$data['order'] 					= $order;
			$data['link_data'] 				= $linkdata;
			$data['access_code']			= ACCESS_CODE; //Shared by CCAVENUES
			$data['encrypted_data']			= \CI::Service()->encrypt($merchant_data,WORKING_KEY); // Method for encrypting the data.
			$this->partial('productheader', $data);
			$this->partial('_statics/checkout', $data);
			$this->partial('productfooter', $data);
	}

	public function paypal($orderid=NULL){
	 		
			$order = \CI::Orders()->getOrder($orderid);
		$paypal_details = array(
			'API_username'  => API_USERNAME,
			'API_signature' => API_SIGNATURE,
			'API_password'  => API_PASSWORD,
			);
			\CI::load()->library('paypal_ec', $paypal_details);					
		   foreach($order->items as $item){
		   
		   $temp_product = array(
				'name' => $item->name,
				'desc' => substr($item->description, 0, 50),
				'number' => $item->sku,
				'quantity' => $item->quantity, // simple example -- fixed to 1
				'amount' => $item->total_price
				);
			$products[] = $temp_product;   
		   }
	
			$to_buy = array(
			'desc' => 'Payment',
			'currency' => $this->currency, 
			'type' => $this->ec_action, 
			'return_URL' => base_url('/checkout/success'),
            'custom' => $orderid,
			// see below have a function for this -- function back()
			// whatever you use, make sure the URL is live and can process
			// the next steps
			'cancel_URL' => ($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : base_url(), // this goes to this controllers index()
			'get_shipping' => true);
			// I am just iterating through $this->product from defined
			// above. In a live case, you could be iterating through
			// the content of your shopping cart.
			$to_buy['products'] = $products;
		// enquire Paypal API for token
		
		//print_r($to_buy);
	//exit;	
			$set_ec_return = \CI::paypal_ec()->set_ec($to_buy);
					
		//print_r($set_ec_return); exit;
			if (isset($set_ec_return['ec_status']) && ($set_ec_return['ec_status'] === true)) {
				\CI::paypal_ec()->redirect_to_paypal($set_ec_return['TOKEN']);
			} else {
				\CI::_error($set_ec_return);
			}
	
	}



    public function orderComplete($orderNumber)
    {
        $order = \CI::Orders()->getOrder($orderNumber);
        $orderCustomer = \CI::Customers()->get_customer($order->customer_id);
        if($orderCustomer->is_guest || $orderCustomer->id == $this->customer->id)
        {
            $this->view('orderComplete', ['order'=>$order]);
        }
        else
        {
            if(!\CI::Login()->isLoggedIn(false,false))
            {
                redirect('login');
            }
            else
            {
                throw_404();
            }
        }
    }

	public function success($cartid){
				//$informations['tracking_id'] = 10000;
				//$informations['amount'] = 100;
						
	
				 $payment = ['order_id' => \GC::getAttribute('id'),
                'amount' => \GC::getGrandTotal(),
                'status' => 'processed',
                'payment_module' => 'CCAVENUE',
                'description' => 'Online Payment'];
				
	           \CI::Orders()->savePaymentInfo($payment);
	   	        $orderId = \GC::submitOrder();
	
					//\CI::Products()->update_product($orderId, $informations);

					//\CI::Products()->sendProductPaymentNotification($orderId, $informations);	
	
		
				if($_REQUEST['encResp']):
					$rcvdString = \CI::Service()->decrypt($_REQUEST['encResp'],WORKING_KEY);
					$decryptValues=explode('&', $rcvdString);
					$dataSize=sizeof($decryptValues);
				   for($i = 0; $i < $dataSize; $i++) 
						{
							list($key, $value) = explode('=',$decryptValues[$i]);
							$informations[$key]=$value; 		   
						}
					//$orderid = $informations['order_id'];	
						
					\CI::Service()->logit($orderId, $informations);
							
					if($informations['order_status'] == 'Success'){
					
					\CI::Products()->update_product($orderId, $informations);									
					
					\CI::Products()->sendProductPaymentNotification($orderId, $informations);	
					//print("<pre>");
						//	print_r($informations); exit;
					
					$data['message'] = $informations['status_message'];
					}else{
					$data['message'] = '<p>Error. Your payment is not successful.</p><p>It might be because of wrong information of Name, email, phone number. <br>Please check your information and try again.</p> <span style="font-size:12px; color:red;">'.$informations['status_message'].'</span>';
					}		
					
					$data['payment'] = $informations;
					else:
					redirect('/');
					endif;
					
					$this->partial('productheader', $data);
					$this->partial('_statics/checkout_success', $data);
					$this->partial('productfooter', $data);
	} 



    public function orderCompleteEmail($orderNumber)
    {
        $order = \CI::Orders()->getOrder($orderNumber);
        $this->partial('order_summary_email', ['order'=>$order]);
    }

    public function addressList()
    {
        $data['addresses'] = \CI::Customers()->get_address_list($this->customer->id);
        $this->partial('checkout/address_list', $data);
    }

    public function address()
    {
        $type = \CI::input()->post('type');
        $id = \CI::input()->post('id');

        $address = \CI::Customers()->get_address($id);

        if($address['customer_id'] != $this->customer->id)
        {
            echo json_encode(['error'=>lang('error_address_not_found')]);
        }
        else
        {
            if($type == 'shipping')
            {
                \GC::setAttribute('shipping_address_id',$id);
            }
            elseif($type == 'billing')
            {
                \GC::setAttribute('billing_address_id',$id);
            }

            \GC::saveCart();


            echo json_encode(['success'=>true]);
        }
    }

    public function shippingMethods()
    {
        if(\GC::orderRequiresShipping())
        {
            $this->partial('shippingMethods', [
                'rates'=>\GC::getShippingMethodOptions(),
                'requiresShipping'=>true
            ]);
        }
        else
        {
            $this->partial('shippingMethods', ['rates'=>[], 'requiresShipping'=>false]);
        }
    }

    public function setShippingMethod()
    {
        $rates = \GC::getShippingMethodOptions();
        $hash = \CI::input()->post('method');

        foreach($rates as $key=>$rate)
        {
            $test = md5(json_encode(['key'=>$key, 'rate'=>$rate]));
            if($hash == $test)
            {
                \GC::setShippingMethod($key, $rate, $hash);

                //save the cart
                \GC::saveCart();

                echo json_encode(['success'=>true]);
                return false;
            }
        }


        echo json_encode(['error'=>lang('shipping_method_is_no_longer_valid')]);
    }

    public function paymentMethods()
    {
        global $paymentModules;

        $modules = [];

        $enabled_modules = \CI::Settings()->get_settings('payment_modules');

        foreach($paymentModules as $paymentModule)
        {
            if(array_key_exists($paymentModule['key'], $enabled_modules))
            {
                $className = '\GoCart\Controller\\'.$paymentModule['class'];
                $modules[$paymentModule['key']] = $paymentModule;
                $modules[$paymentModule['key']]['class'] = new $className;    
            }
        }

        ksort($modules);
        $this->partial('paymentMethods', ['modules'=>$modules]);
    }
}
