<?php
/**
 * Helper class with shortcut functions to lookup URL
 * @param $debug_array
 * @param string $name
 */
function cidb($debug_array, $name = "") {
    $nameText = "Debug: ";
    if ($name) {
        $nameText = "Debug display of '$name':";
    }
    echo "<p><b>$nameText</b><pre>";
    print_r($debug_array);
    echo "</pre></p>";
}

/**
 * @return array
 */
function cc_months() {
    $x = 1;
    while ($x <= 12) {
        $MonthNumbers[$x] = $x;
        $x++;
    }
    return $months = array('mm' => "MM") + $MonthNumbers;
}

/**
 * @return array
 */
function cc_years() {
    return array('yyyy' => "YYYY") + array_combine(range(date('Y'), date('Y') + 10), range(date('Y'), date('Y') + 10));
}

/**
 * @return mixed
 */
function currrentcustomerdata() {
    $ci = & get_instance();
    $ci->load->model('Service_model');
    $ci->load->library(array('ion_auth'));
    $currrentcustomerid = $ci->Service_model->find_by_user_id($ci->ion_auth->get_user_id());
    return $currrentcustomerid;
}

/**
 * @param $array
 * @return string
 */
function serialize_data($array) {
    return base64_encode(serialize($array));
}

/**
 * @param $string
 * @return mixed
 */
function unserialize_data($string) {
    return unserialize(base64_decode($string));
}

/**
 * @param $callback_data
 * @param $payment_gateway_id
 * @param $customerdata
 * @return mixed
 */
function handlePaymentSuccess($callback_data, $payment_gateway_id, $order_customer_id = NULL) {
    logit("\n\n callback_data:" . print_r($callback_data, true), 'handlePaymentSuccess.txt');
    error_reporting(0);
    $ci = & get_instance();
    $ci->load->library('cart', 'form');
    $ci->load->model('Order_model');
    $ci->load->model('Customer_model');
    $ci->load->model('Discount_model');
    $ci->load->model('Service_model');
//cidb($callback_data); exit;
    $ci->Order_model->verifyOrder($callback_data['custom']);

    $customer = currrentcustomerdata();
    $order['order_status_id'] = ORDER_PLACED;
    $order['customer_id'] = ($order_customer_id) ? $order_customer_id :$customer['customer_id'];
    $order['order_date'] = date("Y-m-d H:i:s");
    $order['order_sub_total'] = $callback_data['order_total'];
    $order['order_discount'] = 0.00;
    $order['order_charity'] = 0.00;
    $order['order_total'] = $callback_data['order_total'];
    $order['order_ip_address'] = $ci->input->ip_address();
    $order['order_total_usd'] = $callback_data['order_total'];
    $order['transaction_id'] = ($callback_data['transaction_id']) ? $callback_data['transaction_id'] : 0;
    $order['order_payment_gateway_id'] = ($payment_gateway_id) ? $payment_gateway_id : 0;
    $order['check_social_media_images'] = ($callback_data['check_social_media_images']) ? $callback_data['check_social_media_images'] : 0;
    $order_id = $ci->Order_model->insert($order);
    //update incomplete order table
    $incomplete_data['completed_order_id'] = $order_id;
	
	$cartdata = array();
	$cartdata['items']     = $ci->cart->contents();
	$cartdata['discounts'] = $ci->cart->getdiscounts();
	$cartdata['carttotal'] = (float)$ci->cart->total();
	$incomplete_data['serialized_cart_data'] = serialize($cartdata);
	
	
    $ci->Order_model->update_incomplete_order($incomplete_data, $callback_data['custom']);
    $orderdata['complete_order_id'] = $ci->Order_model->generate_orderid($order['order_date'], $order_id);
    $ci->Order_model->update($orderdata, $order_id);

    $items = $ci->cart->contents();
    $discounts = $ci->cart->getdiscounts();
    $suborder_id_counter = 1;
    $charity = $ci->cart->get_charity();

    foreach ($items as $itemKey => $item) {
        $data = array();
        $data['order_id'] = $order_id;
        $data['service_modified_unique_id'] = $itemKey;
        $data['sub_order_id'] = sprintf('%02d', $suborder_id_counter);
        $item['complete_sub_order_id'] = $orderdata['complete_order_id'] . $suborder_id_counter;
        $items[$itemKey]['complete_sub_order_id'] = $item['complete_sub_order_id'];
        $sub_order_detail['order_status_id'] = ORDER_PLACED;
        if ($item['service_id'] == RETOUCHING_SERVICE_ID) {
            $sub_order_detail['order_status_id'] = ORDER_QUOTE_REQUESTED;
        }

        if (!empty($customer['customer_email'])) {
            $ci->load->library('Drip');
            $data['email'] = $customer['customer_email'];
            $data['action'] = 'PE Order Submitted';
            $data['properties'] = array("Order ID" => $items[$itemKey]['complete_sub_order_id']);
            $ci->drip->drip_oprations('record_event', $data);
        }




        $sub_order_detail['order_id'] = $data['order_id'];
        $sub_order_detail['service_attributes_values'] = implode(' <br> ', array_map(function ($v, $k) {
                    return sprintf("%s - %s", $k, $v);
                }, $item['service_attributes'], array_keys($item['service_attributes'])));

        if ($item['service_id'] == FREEDOM_PLAN) {
            $sub_order_detail['service_id'] = COLOR_CORRECTION;
        } else {
            $sub_order_detail['service_id'] = $item['service_id'];
        }

        $sub_order_detail['service_attributes_values_array'] = serialize_data($item['service_attributes']);
        $sub_order_detail['service_attributes_by_id'] = serialize_data($item['service_attributes_by_id']);
        $sub_order_detail['order_name'] = $item['service_attributes']['Order Name'];
        $sub_order_detail['shoot_type'] = $ci->Order_model->get_shoot_type($item['service_attributes']['Type of Shoot']);
        $sub_order_detail['sub_order_id'] = $data['sub_order_id'];
        $sub_order_detail['sub_order_sub_total'] = (float) $item['subtotal'];
        $sub_order_detail['sub_order_discount'] = (float) $item['service_discount'];
        $sub_order_detail['sub_order_tax'] = (float) $item['service_tax'];
        $sub_order_detail['sub_order_charity'] = (float) ($charity > 0) ? ($charity / count($items)) : 0;
        $sub_order_detail['sub_order_trasection_fee'] = (float) $item['service_transaction_fee'];
        $sub_order_detail['service_quantity'] = $item['quantity'];
        $service_data = $ci->Service_model->getServiceDetail($item['service_id']);
        $sub_order_detail['service_name'] = $service_data['service_name'];

        // if($customer['migrated_from'] == 'ZEN'){
        //$sub_order_detail['zen_discount']                   = (float) (10 / 100) * $item['subtotal'];
        //$sub_order_detail['sub_order_total']                = (float) ($item['subtotal'] - $sub_order_detail['zen_discount']) + $sub_order_detail['sub_order_tax'] + $sub_order_detail['sub_order_trasection_fee'] + $sub_order_detail['sub_order_charity'];
        // }else{
        $sub_order_detail['sub_order_total'] = (float) ($item['subtotal'] + $sub_order_detail['sub_order_tax'] + $sub_order_detail['sub_order_trasection_fee'] + $sub_order_detail['sub_order_charity']);
        // }
        ////////////////Freedom Flag/////////////
        $sub_order_detail['freedom_flag'] = 0;
        ///////////////Freedom Flag//////////////
        $sub_order_detail['complete_sub_order_id'] = $item['complete_sub_order_id'];
        $sub_order_detail['customer_id'] = ($order_customer_id) ? $order_customer_id :$customer['customer_id'];
        $sub_order_detail['order_date'] = date("Y-m-d H:i:s");
        $sub_order_detail['transaction_id'] = ($callback_data['transaction_id']) ? $callback_data['transaction_id'] : 0;
        $sub_order_detail['check_social_media_images'] = ($callback_data['check_social_media_images']) ? $callback_data['check_social_media_images'] : 0;


        if ($item['eventid']) {
            $eventDetails = $ci->Service_model->getEventsDetail($item['eventid']);
            $sub_order_detail['order_date'] = $eventDetails->start;
            $sub_order_detail['order_name'] = $eventDetails->order_name;
			$sub_order_detail['is_schedule_order'] = 1;
        }

        $update_sub_order_ids[] = $ci->Order_model->insert_sub_order($sub_order_detail);

        $ci->Order_model->insert_order_attribute($item, $sub_order_detail);

        $totladiscount = 0;
        $moveNext = "No";

        $emailnotificationsField = array();
        $emailnotificationsField['enot_id'] = $sub_order_detail['order_status_id'];
        $emailnotificationsField['order_id'] = $sub_order_detail['order_id'];
        $emailnotificationsField['sub_order_id'] = $sub_order_detail['sub_order_id'];
        $emailnotificationsField['order_status_id'] = $sub_order_detail['order_status_id'];
        $emailnotificationsField['user_id'] = $customer['user_id'];
        //$emailnotificationsField['archived_user_ids'] = 0;
        $emailnotificationsField['comments'] = 'PE - Order Confirmation ' . $sub_order_detail['complete_sub_order_id'];
        emailnotifications($emailnotificationsField);

        if ($ci->cart->getdiscounts()) {
            foreach ($ci->cart->getdiscounts() as $keyDisc => $discount) {
                if ($item['service_id'] == RETOUCHING) {
                    $discount_amount = 0;
                } else {

                    if ($discount->discount_tp == 2) {
                        $discount_amount = ($item['subtotal'] / 100 ) * (int) $discount->discount;
                    } else {
                        $discount_amount = $discount->discount - $discount->discountRemainValue;
                    }

                    if (($totladiscount + $discount_amount) >= $item['subtotal']) {
                        if ($moveNext == "Yes") {
                            $discount_amount = 0;
                        } else {
                            $discount_amount = $item['subtotal'] - $totladiscount;
                            $moveNext = "Yes";
                        }
                    }
                    $totladiscount += $discount_amount;
                    $ci->Discount_model->update_discount_remain_value($keyDisc, $discount_amount);
                }
				if($discount_amount > 0){
                $discountdata = array();
                $discountdata['order_id'] = $sub_order_detail['order_id'];
                $discountdata['sub_order_id'] = $sub_order_detail['sub_order_id'];
                $discountdata['complete_sub_order_id'] = $sub_order_detail['complete_sub_order_id'];
                $discountdata['discount_id'] = $discount->discount_id;
                $discountdata['discount_name'] = $discount->discount_name;
                $discountdata['discount_code'] = $discount->discount_code;
                $discountdata['discount_amount'] = number_format($discount_amount, 2);
                $discountdata['discount_rate'] = ($discount->discount) ? $discount->discount : 0;
                $discountdata['discount_type'] = $discount->discount_option_type;
                $discountdata['date'] = date("Y-m-d H:i:s");
                $ci->Discount_model->insert_order_discount($discountdata);
                $discountupdatedata['discount_num_times_used'] = $discount->discount_num_times_used + 1;
                $ci->Discount_model->update($discountupdatedata, $discount->discount_id);

                if ($discount->discount_option_type == 2) {
                    $calculatedDiscountAmount = 0.00;
                    $calculatedDiscountAmount = $discount->discount - number_format($discount_amount, 2);
                    $tbl_discounts_topup_amounts_insert_fields['discount_id'] = $discount->discount_id;
                    $tbl_discounts_topup_amounts_insert_fields['old_discount_amount'] = $discount->discount;
                    $tbl_discounts_topup_amounts_insert_fields['discount_amount'] = $calculatedDiscountAmount;
                    $tbl_discounts_topup_amounts_insert_fields['topup_amount'] = number_format($discount_amount, 2);
                    $tbl_discounts_topup_amounts_insert_fields['transection_type'] = 'sub';
                    $tbl_discounts_topup_amounts_insert_fields['user_id'] = $customer['user_id'];
                    //cidb($tbl_discounts_topup_amounts_insert_fields); exit;
                    $ci->Discount_model->discounts_topup_amounts_insert($tbl_discounts_topup_amounts_insert_fields);
                    $tbl_discounts_udate_fields['discount'] = $calculatedDiscountAmount;
                    $ci->Discount_model->update($tbl_discounts_udate_fields, $discount->discount_id);
                }

                if ($discount->discount_option_type == 3) {

                    //$refeValue                                      = $ci->Discount_model->get_referral_settings();
                    $points['points_earned'] = getCustomerSettingDetails('REFERRAL_SETTING_LIFE_POINTS'); //$refeValue['referral_setting_life_points'];
                    $points['customer_used'] = 1;
                    $points['customer_used_date'] = date("Y-m-d H:i:s");

                    if ($ci->Discount_model->get_ref_history($discount->discount_id, $customer['customer_email'])) {
                        $update = $ci->Discount_model->update_ref_history($points, $discount->discount_id, $customer['customer_email']);
                    } else {
                        $points['owner_customer_id'] = $discount->customer_id;
                        $points['referral_id'] = $discount->discount_id;
                        $points['customer_sent_to'] = $customer['customer_email'];

                        $ci->Discount_model->insert_ref_history($points);
                    }

                    $ref_point_details['point_type'] = "credit";
                    $ref_point_details['customer_id'] = $discount->customer_id;
                    $ref_point_details['reseller_id'] = '1';
                    $ref_point_details['order_id'] = $sub_order_detail['order_id'];
                    $ref_point_details['sub_order_id'] = $sub_order_detail['sub_order_id'];
                    $ref_point_details['section'] = "referral";
                    $ref_point_details['order_status_id'] = 10;
                    $ref_point_details['sub_order_total'] = getCustomerSettingDetails('REFERRAL_SETTING_LIFE_POINTS'); //$refeValue['referral_setting_life_points'];
                    $ref_point_details['complete_sub_order_id'] = $sub_order_detail['complete_sub_order_id'];
                    //$ref_point_details['entry_date']            = 'NOW()';
                    $ref_point_details['entry_date'] = date("Y-m-d H:i:s");
                    logit(print_r($ref_point_details, true), 'discount_3');
                    $ci->Discount_model->insert_customers_points($ref_point_details);
                    ////////////////// Send email to referral/////////////
                    $referral_history_detail = $ci->Discount_model->get_ref_history($discount->discount_id, $customer['customer_email']);
                    $referral_customer = $ci->Customer_model->find($referral_history_detail['owner_customer_id']);
                    $message_vars['customer_email'] = $referral_customer->row()->customer_email;
                    $message_vars['customer_email']             = "dpardhi@tiuconsulting.com";
                    $message_vars['customer_name'] = $referral_customer->row()->customer_name;
                    $ci->load->model('Emails_model');
                    $message_vars['support_email'] = SITE_FROM_EMAIL;
                    $message_vars['site_name'] = SITE_NAME;
                    $message_vars['customer_email'] = $referral_customer->row()->customer_email;
                    $message_vars['customer_name'] = ucfirst($referral_customer->row()->customer_name);
                    $message_vars['customer_firstname'] = ucfirst($referral_customer->row()->customer_firstname);
                    $ci->Emails_model->send_email_from_db(31, $message_vars);
                    ////////////////// Send email to referral/////////////
                    /*$referral_history_update = $ci->Customer_model->update_referral_points($discount->discount_id, $customer['customer_email']);
                    $emailnotificationsField = array();
                    $emailnotificationsField['enot_id'] = $sub_order_detail['order_status_id'];
                    $emailnotificationsField['order_id'] = $sub_order_detail['order_id'];
                    $emailnotificationsField['sub_order_id'] = $sub_order_detail['sub_order_id'];
                    $emailnotificationsField['order_status_id'] = $sub_order_detail['order_status_id'];
                    $emailnotificationsField['user_id'] = $customer['user_id'];
                    //$emailnotificationsField['archived_user_ids'] = 0;
                    $emailnotificationsField['comments'] = 'PE - Order Confirmation ' . $sub_order_detail['complete_sub_order_id'];
                    emailnotifications($emailnotificationsField);*/
                }
			   }
            }
            $update_suborder_discount_data['sub_order_total'] = $sub_order_detail['sub_order_total'] = ((float) ($item['subtotal'] - $totladiscount)) + (float) (($charity > 0) ? ($charity / count($items)) : 0);
            $update_suborder_discount_data['sub_order_discount'] = $totladiscount;

            $ci->Order_model->update_sub_order_by_sub_order_id($update_suborder_discount_data, $sub_order_detail['order_id'], $sub_order_detail['sub_order_id']);
        }

        $point_details['customer_id'] = $customer['customer_id'];
        $point_details['reseller_id'] = '1';
        $point_details['order_id'] = $sub_order_detail['order_id'];
        $point_details['sub_order_id'] = $sub_order_detail['sub_order_id'];
        $point_details['order_status_id'] = $sub_order_detail['order_status_id'];
        $point_details['sub_order_total'] = $sub_order_detail['sub_order_total'];
        $point_details['complete_sub_order_id'] = $sub_order_detail['complete_sub_order_id'];
        //$point_details['entry_date']                = 'NOW()';
        $point_details['entry_date'] = date("Y-m-d H:i:s");
        $point_details['section'] = 'frontend';
        $point_details['point_type'] = TEXT_CREDIT;

        $ci->Discount_model->insert_customers_points($point_details);

        $suborder_id_counter++;

        $order_service_data = $ci->Service_model->getServiceDetail($item['service_id']);

        $service_quantity = $item['quantity'];
        $target_images = $order_service_data['target_images'];
        $target_turnaround_days = $order_service_data['target_turnaround_days'];

        ////////////////////////////// Update estimated Text //////////////////////

        if ($item['eventid']) {

            if ($customer['preferred_customer'] == 1) {
                 if ($service_quantity < $target_images) {
                  $estimatedDay = $target_turnaround_days;
                  } else {
					/*$estimatedDay = round($target_turnaround_days * $ci->Service_model->get_constant_key('High_Vol_Low_Target'));*/
					$estimatedDay = round($target_turnaround_days * $ci->Service_model->get_constant_key('ESTIMATED_DAY_PREMIUM_MULTIPLIER'));
                  }
                //$estimatedDay = $target_turnaround_days;
                $estimatedText = '<b> Premium Member</b><br>' . $estimatedDay . " business days";
            }

            //////////////////////////////// Update Event //////////////////////////
            $data = array();
            $data['status'] = 'Inactive';
            $data['order_id'] = $sub_order_detail['order_id'];
            $data['sub_order_id'] = $sub_order_detail['sub_order_id'];
            $eventDetails = $ci->Service_model->getEventsDetail($item['eventid']);
            $data['order_name'] = $eventDetails->order_name;
            //$data['placed_order_date'] = 'NOW()';
            $data['placed_order_date'] = date("Y-m-d H:i:s");


            $ci->Service_model->update_customer_event_images($data, $eventDetails->customer_event_images_id);
            //////////////////////////////// Update Event /////////////////////////
        } else {
            if ($item['turnaroundText']) {
                $estimatedDay = filter_var($item['turnaroundText'], FILTER_SANITIZE_NUMBER_INT);
                if ($item['turnaroundText'] == 'Extended Delay') {
                    $item['turnaroundText'] = $item['turnaroundText'] . ' of more then ' . round($target_turnaround_days * $ci->Service_model->get_constant_key('High_Vol_High_Target')) . ' days';
                    $estimatedDay = 15;
                }
                if ($item['turnaroundText']) {
                    if ($customer['preferred_customer'] == 1) {
                        $estimatedText = 'As a Premium Member you will receive your order as fast as possible. However, there may be an ' . $item['turnaroundText'] . ' turnaround.';
                    } else if ($customer['preferred_customer'] == 2) {
                        $estimatedText = 'As a Freedom Member Individual you will receive your order as fast as possible. However, there may be an ' . $item['turnaroundText'] . ' turnaround.';
                    } else if ($customer['preferred_customer'] == 3) {
                        $estimatedText = 'As a Freedom Member Partnership you will receive your order as fast as possible. However, there may be an ' . $item['turnaroundText'] . ' turnaround.';
                    }
                }
            }
        }
        ////////////////////////////// Update estimated Text //////////////////////
        //////////////////////////////// Update order etc data /////////////////////////
        $order_etc_data = array();
        $order_etc_data['order_id'] = $sub_order_detail['order_id'];
        $order_etc_data['sub_order_id'] = (int) $sub_order_detail['sub_order_id'];
        $order_etc_data['customer_id'] = $order['customer_id'];
        $order_etc_data['estimatedDay'] = ($estimatedDay) ? $estimatedDay : 0;
        $ci->Service_model->insert_order_etc($order_etc_data);
        //////////////////////////////// Update order etc data /////////////////////////
        $items[$itemKey]['estimatedText'] = $estimatedText;

        $message_vars['complete_sub_order_id'] = $sub_order_detail['complete_sub_order_id'];
        $message_vars['complete_sub_order_name'] = $sub_order_detail['order_name'];
    }




    if ($charity > 0) {
        $charityFields = array();
        $charityFields['customer_id'] = $customer['customer_id'];
        $charityFields['order_id'] = $order_id;
        $charityFields['complete_order_id'] = $orderdata['complete_order_id'];
        $charityFields['charity_amount'] = $ci->cart->get_charity_type();
        $charityFields['charity_roundup_amount'] = $charity;
        $ci->Discount_model->inserCharity($charityFields);
    }

    ///// Send orderSuccess email /////
    if ($customer['notified_customer'] == 0) {
        $ci->load->model('Emails_model');
        $message_vars['support_email'] = SITE_FROM_EMAIL;
        $message_vars['site_name'] = SITE_NAME;
        $message_vars['complete_order_id'] = $orderdata['complete_order_id'];
        $message_vars['customer_email'] = $customer['customer_email'];
        //$message_vars['customer_email']                 = 'dpardhi@tiuconsulting.com';
        $message_vars['customer_name'] = $customer['customer_name'];
        $template_data['items'] = $items;
        $template_data['discounts'] = $discounts;
        $template_data['all_attributes_by_id'] = $ci->Service_model->getAllAttributes();
        $template_data['order_sub_total'] = number_format($ci->cart->get_sub_total(), 2);
        $template_data['order_total'] = number_format($ci->cart->total(), 2);
        $template_data['order_charity'] = $charity;
        $message_vars['order_table'] = $ci->load->view('email/order_table', $template_data, true);
        $ci->load->model('Emails_model');
        $email_id = 4;
        $ci->Emails_model->send_email_from_db($email_id, $message_vars);
    }
    set_Overflow(COLOR_CORRECTION);
    set_Overflow(RETOUCHING);    
	return $order_id;
}

/**
 * @param $service_id
 */
function set_Overflow($service_id) {

    $ci = & get_instance();
    $ci->load->database();
    $ci->load->model('Service_model');
    $sql = "SELECT per_day_capacities_new.*, events.*,
    sum(no_of_images) AS totalcount,
    SUM(IF(customer_event_images.status != 'Active', customer_event_images.no_of_images,0)) AS Booked_Prem_Images_Placed,
    (osm.service_quantity_images- SUM(IF(customer_event_images.status != 'Active', customer_event_images.no_of_images,0))) as Online_Images_Placed,
    GROUP_CONCAT(concat(customer_name) SEPARATOR '<br>') customers,
    GROUP_CONCAT(concat(IF(customer_event_images.status != 'Active', '&#10004; ',''),customer_name,'(',CAST(no_of_images AS CHAR),')') SEPARATOR '<br>') numimages,
    SUM(IF(customer_event_images.status = 'Active', customer_event_images.no_of_images,0)) AS remianingImages, customer_event_images.*
    FROM per_day_capacities_new
    LEFT JOIN (select sum(ords.service_quantity) as service_quantity_images, ords.service_id, os.order_date
    FROM orders_suborder os
    INNER JOIN orders_suborder ords ON ords.order_id = os.order_id AND ords.sub_order_id = os.sub_order_id
    group by ords.service_id,DATE(os.order_date)
    )as osm ON osm.service_id = per_day_capacities_new.servicetype AND DATE(osm.order_date)= DATE(per_day_capacities_new.pdcdate)
    LEFT JOIN events ON DATE(per_day_capacities_new.pdcdate) = DATE(events.start) AND per_day_capacities_new.servicetype = events.event_type
    LEFT OUTER JOIN customer_event_images ON customer_event_images.event_id = events.id
    LEFT OUTER JOIN customers ON customer_event_images.customer_id = customers.customer_id  AND customer_event_images.no_of_images > 0
    WHERE DATE(per_day_capacities_new.pdcdate)= DATE(NOW()) AND per_day_capacities_new.servicetype = {$service_id}
    GROUP BY  per_day_capacities_new.pdcdate
    ORDER BY per_day_capacities_new.pdcdate ASC";

    $query = $ci->db->query($sql);
    $listdata = $query->row_array();

    $overflow = get_Overflow($service_id);
    $totalcountsql = "SELECT capacityperday FROM `per_day_capacities_new` WHERE `pdcdate` = DATE(NOW()) AND servicetype = " . $service_id;
    $query = $ci->db->query($totalcountsql);
    $todaycapacity = $query->row()->capacityperday;




    $log = '';
    $log = " \n date : " . date('Y-m-d') . " \n ";
    $log .= " Service_id : {$service_id} \n ";
    $log .= " Booked_Prem_Images_Placed : " . $listdata['Booked_Prem_Images_Placed'] . " \n ";
    $log .= " Online_Images_Placed : " . $listdata['Online_Images_Placed'] . " \n ";
    $log .= " Remianing_Images_From_Bookings : " . $listdata['remianingImages'] . " \n ";
    $log .= " Overflow : " . $overflow . " \n ";
    $log .= " Today_Capacity : {$todaycapacity} \n \n ";

    //update overflow
    $tabledata = array();
    $tabledata['overflow'] = ($listdata['Booked_Prem_Images_Placed'] + $listdata['Online_Images_Placed'] + $overflow['overflow']) - $todaycapacity;
    if ($tabledata['overflow'] <= 0) {
        $tabledata['overflow'] = 0;
    }
    $query = $ci->db->query("SELECT events.* FROM `events` WHERE `start` = DATE(NOW()) AND event_type = " . $service_id);

    if ($query->num_rows() > 0) {
        $log .= "update row \n ";
        $ci->Service_model->update_event($tabledata, $service_id);
    } else {
        $log .= "insert row \n ";
        $tabledata['start'] = date('Y-m-d');
        $tabledata['end'] = date('Y-m-d');
        $tabledata['event_type'] = $service_id;
        $tabledata['allDay'] = 'true';
        $tabledata['where_event'] = ($service_id == COLOR_CORRECTION) ? 'Color Correction' : 'Retouching';
        $ci->Service_model->insert_event($tabledata);
    }

    $log .= " tabledata overflow : " . $tabledata['overflow'] . " \n    *******************************END***************************           \n \n ";
    logit($log, 'setOverflow');
}

/**
 * @param $service_id
 * @return int
 */
function get_Overflow($service_id) {
    $ci = & get_instance();
    $sql = "select overflow from events where start >= NOW() - INTERVAL 1 DAY AND event_type = {$service_id}";
    $query = $ci->db->query($sql);
    $listdata = $query->row()->overflow;
    $log = " getOverflow : " . print_r($listdata, true) . " \n \n ";
    logit($log, 'setOverflow');
    return ($listdata) ? $listdata : 0;
}

/**
 * @param $from
 * @param $to
 * @return array
 */
function get_workdays($from, $to) {
    date_default_timezone_set("Asia/Kolkata");
    $days_array = array();
    $skipdays = array("Saturday", "Sunday");
    $skipdates = array();
    $i = 0;
    $current = $from;
    if ($current == $to) {
        $timestamp = strtotime($from);
        if (!in_array(date("l", $timestamp), $skipdays) && !in_array(date("Y-m-d", $timestamp), $skipdates)) {
            $days_array[] = date("Y-m-d", $timestamp);
        }
    } elseif ($current < $to) {
        while ($current < $to) {
            $timestamp = strtotime($from . " +" . $i . " day");
            if (!in_array(date("l", $timestamp), $skipdays) && !in_array(date("Y-m-d", $timestamp), $skipdates)) {
                $days_array[] = date("Y-m-d", $timestamp);
            }
            $current = date("Y-m-d", $timestamp);
            $i++;
        }
    }
    return $days_array;
}

/**
 * @param $data
 * @param $field
 */
function orderBy(&$data, $field) {
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    //echo $code; exit;
    usort($data, create_function('$a,$b', $code));
}

/**
 * @param $from
 * @param $to
 * @return int
 */
function diffMonth($from, $to) {

    $datetime1 = new DateTime($from);
    $datetime2 = new DateTime($to);
    $interval = $datetime2->diff($datetime1);
    return (int) $interval->format('%m') + 1;
}

/** @noinspection PhpInconsistentReturnPointsInspection */

/**
 * @param $key
 * @return mixed
 */
function getCustomerSettingDetails($key) {
    $ci = & get_instance();
    $ci->load->model('Settings_model');

    $ci->db->select('setting_value');
    $ci->db->from('settings');
    $ci->db->where('setting_name', $key);
    $query = $ci->db->get();

    if ($query->num_rows() > 0) {
        $setting = $query->result_array();
        logit($setting[0]['setting_value'], 'setting_value');
        return $setting[0]['setting_value'];
    }
}

/** @noinspection PhpInconsistentReturnPointsInspection */

/**
 * @return mixed
 */
function getCountries() {
    $ci = & get_instance();
    $ci->load->model('Countries_model');

    $ci->db->select('country_name,country_code');
    $ci->db->from('countries');
    $ci->db->where('country_code != ""');
    $ci->db->order_by('countries.country_name ASC');
    $query = $ci->db->get();

    if ($query->num_rows() > 0) {
        $setting = $query->result_array();

        return $setting;
    }
}

/**
 * @param int $discount_id
 * @param string $discount_code
 * @return mixed
 */
function trackDiscountHistory($discount_id = 0, $discount_code = '') {
    $ci = & get_instance();

    if ($discount_id < 1) {
        $discountSql = "SELECT * ,DATE_FORMAT(discount_start_date,'%d %M %Y') as display_date FROM discounts WHERE discount_code = '$discount_code' AND discount_option_type = 2";
        $discountQry = $ci->db->query($discountSql);
    } else {
        $discountSql = "SELECT * ,DATE_FORMAT(discount_start_date,'%d %M %Y') as display_date FROM discounts WHERE discount_id = '$discount_id' AND discount_option_type = 2";
        $discountQry = $ci->db->query($discountSql);
    }

    if ($discountQry->num_rows() > 0) {
        $discountRes = $discountQry->row();
        $discount_id = $discountRes->discount_id;
    } else {
        return false;
    }



    $discountHistory['discount'] = $discountRes;

    $topupSql = "SELECT DTP.*,
            (SELECT first_name FROM users WHERE id = DTP.user_id) AS user_name,
            os.order_id,
            DATE_FORMAT(DTP.entry_date,'%d %M %Y') as display_date,
            os.complete_sub_order_id
            FROM discounts_topup_amounts DTP
            LEFT JOIN orders_suborder os ON os.complete_sub_order_id = DTP.complete_sub_order_id  AND os.complete_sub_order_id != ''
            WHERE DTP.discount_id = '$discount_id' ORDER BY DTP.entry_date";

    $topupQry = $ci->db->query($topupSql);
    $topupRes = $topupQry->result_array();
    $discountHistory['topUpList'] = $topupRes;

    $topUpAddAmount = 0.00;
    $topUpSubAmount = 0.00;
    $deposited = 0.00;

    if (count($discountHistory['topUpList']) > 0) {
        $deposited = $discountHistory['topUpList'][0]['old_discount_amount'];
        foreach ($discountHistory['topUpList'] as $topUpListKey => $topUpListVal) {

            if ($topUpListVal['order_id'] > 0) {
                //$discountHistory['topUpList'][$topUpListKey]['complete_sub_order_id'] = $ordersObj->getCreateCompleteOrderId($topUpListVal['order_id']);
            } else {
                $discountHistory['topUpList'][$topUpListKey]['complete_sub_order_id'];
            }

            if ($topUpListVal['transection_type'] == 'sub') {
                $topUpSubAmount += $topUpListVal['topup_amount'];
            } else {
                $topUpAddAmount += $topUpListVal['topup_amount'];
            }
        }
    } else {
        $deposited = $discountHistory['discount']->discount;
    }


    $orderUsedDiscountSql = "SELECT d.discount_id,
			d.discount,
			d.discount_option_type,
			d.discount_code,
			ord.order_currency,
			SUM(ord.order_discount)AS order_discount,ord.order_id,
			c.customer_id,
			c.user_id AS customer_user_id,
			c.customer_firstname,
			c.customer_lastname,
			DATE_FORMAT(ord.order_date,'%d %M %Y') AS display_date,
			ord.order_date as entry_date,
			ord.complete_order_id
            FROM discounts d
            INNER JOIN orders ord ON d.discount_id = ord.discount_id
            LEFT JOIN customers c ON ord.customer_id = c.customer_id
            WHERE d.discount_id ='$discount_id'
            AND d.discount_option_type = 2
            AND ord.order_status_id != 38
            GROUP BY (ord.order_id)";

    $orderUsedDiscountQry = $ci->db->query($orderUsedDiscountSql);

    $orderUsedAmount = 0.00;
    // Need data in orders table for further testing
    if ($orderUsedDiscountQry->num_rows() > 0) {
        $orderUsedDiscountRes = $orderUsedDiscountQry->result_array();
        $discountHistory['orderUsedDiscount'] = $orderUsedDiscountRes;
        foreach ($discountHistory['orderUsedDiscount'] as $orderUsedDiscountKey => $orderUsedDiscountVal) {
            $orderUsedAmount += $orderUsedDiscountVal['order_discount'];
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['complete_sub_order_id'] = $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['complete_order_id'];
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['transection_type'] = 'sub';
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['topup_amount'] = $orderUsedDiscountVal['order_discount'];
            $last_key = key(array_slice($discountHistory['topUpList'], -1, 1, TRUE));
            $discountHistory['topUpList'][$last_key + 1] = $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey];
        }
    }


    if (count($discountHistory['topUpList'] > 0)) {
        orderBy($discountHistory['topUpList'], 'entry_date');
    }

    //calculations
    $totalDiscountAmount = sprintf("%.2f", round($deposited + $topUpAddAmount, 2));
    $totalUsedAmount = sprintf("%.2f", round($topUpSubAmount + $orderUsedAmount, 2));
    $totalBalanceAmount = sprintf("%.2f", round($totalDiscountAmount - $totalUsedAmount, 2));
    $discountHistory['grandDetails'] = array();
    $discountHistory['grandDetails']['deposited'] = $deposited;
    $discountHistory['grandDetails']['totalDiscountAmount'] = $totalDiscountAmount;
    $discountHistory['grandDetails']['totalUsedAmount'] = $totalUsedAmount;
    $discountHistory['grandDetails']['totalBalanceAmount'] = $totalBalanceAmount;
    $discountHistory['grandDetails']['currency_code'] = '$';
    return $discountHistory;
}

/**
 * @param int $discount_id
 * @param string $discount_code
 * @return array
 */
function trackDiscountHistory_Backup($discount_id = 0, $discount_code = '') {
    $ci = & get_instance();
    $ci->load->model('Discounts_model');
    if ($discount_id < 1) {

        $ci->db->select("* ,DATE_FORMAT(discount_start_date,'%d %M %Y') as display_date");
        $ci->db->from('discounts');
        $ci->db->where('discount_code', $discount_code);
        $ci->db->where('discount_option_type', TOPUP_DISCOUNT_CODE_TYPE);
        $query = $ci->db->get();
        if ($query->num_rows() > 0) {
            $discount = $query->result_array();
            $discount_id = $discount['discount_id'];
        }
    } else {

        $ci->db->select("* ,DATE_FORMAT(discount_start_date,'%d %M %Y') as display_date");
        $ci->db->from('discounts');
        $ci->db->where('discount_id', $discount_id);
        $ci->db->where('discount_option_type', TOPUP_DISCOUNT_CODE_TYPE);
        $query = $ci->db->get();
        if ($query->num_rows() > 0) {
            $discount = $query->result_array();
            $discount_id = $discount['discount_id'];
        }
    }

    if ($discount_id < 1)//validate
        return "You have not entered a valid prepaid code.";




    $discountHistory = array();
    $discountHistory['discount'] = array();
    $discountHistory['discount'] = $discount;
    //getDisc
    //get Top Up list
    $ci->load->model('Discounts_topup_amounts_model');
    $ci->db->select("DTP.*,(SELECT name from users where user_id = DTP.user_id) as user_name,os.order_id,DATE_FORMAT(DTP.entry_date,'%d %M %Y') as display_date ");
    $ci->db->from('discounts_topup_amounts AS DTP');
    $this->db->join('orders_suborder as os', "os.complete_sub_order_id = DTP.complete_sub_order_id  and os.complete_sub_order_id != ''", 'left');
    $ci->db->where('DTP.discount_id', $discount_id);
    $ci->db->order_by('DTP.entry_date ASC');
    $query = $ci->db->get();
    $discountHistory['topUpList'] = array();
    $discountHistory['topUpList'] = $query->result_array();


    $topUpAddAmount = 0.00;
    $topUpSubAmount = 0.00;
    $deposited      = 0.00;

    if (count($discountHistory['topUpList']) > 0) {

        $deposited = $discountHistory['topUpList'][0]['old_discount_amount'];
        foreach ($discountHistory['topUpList'] as $topUpListKey => $topUpListVal) {

            if ($topUpListVal['order_id'] > 0) {
                $discountHistory['topUpList'][$topUpListKey]['complete_sub_order_id'] = getCreateCompleteOrderId($topUpListVal['order_id']);
            } else {
                $discountHistory['topUpList'][$topUpListKey]['complete_sub_order_id'];
            }

            if ($topUpListVal['transection_type'] == 'sub')
                $topUpSubAmount += $topUpListVal['topup_amount'];
            else
                $topUpAddAmount += $topUpListVal['topup_amount'];
        }
    }else {
        $deposited = $discountHistory['discount']['discount_amount'];
    }


    $ci->load->model('discounts');
    $ci->db->select("d.discount_id,d.discount_amount,d.discount_option_type,d.discount_code,ord.order_currency, sum(ord.order_discount)as order_discount,ord.order_id, c.customer_id,c.user_id as customer_user_id, c.customer_firstname, c.customer_lastname ,DATE_FORMAT(ord.order_date,'%d %M %Y') as display_date,ord.order_date as entry_date ");
    $ci->db->from('discounts AS d');
    $this->db->join('orders as ord', "d.discount_id = ord.discount_id ");
    $this->db->join('customers as c', "ord.customer_id = c.customer_id", 'left');
    $ci->db->where('d.discount_id', $discount_id);
    $ci->db->where('d.discount_option_type', TOPUP_DISCOUNT_CODE_TYPE);
    $ci->db->where('ord.order_status_id !=' . ORDER_FULLREFUND_ID);
    $ci->db->group_by('ord.order_id');
    $query = $ci->db->get();
    $discountHistory['orderUsedDiscount'] = array();
    $discountHistory['orderUsedDiscount'] = $query->result_array();


    $orderUsedAmount = 0.00;

    if (count($discountHistory['orderUsedDiscount']) > 0) {
        foreach ($discountHistory['orderUsedDiscount'] as $orderUsedDiscountKey => $orderUsedDiscountVal) {
            $orderUsedAmount += $orderUsedDiscountVal['order_discount'];
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['complete_sub_order_id'] = getCreateCompleteOrderId($orderUsedDiscountVal['order_id']);
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['transection_type'] = 'sub';
            $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey]['topup_amount'] = $orderUsedDiscountVal['order_discount'];

            /*             * order array mearge to topuplist* */
            $last_key = key(array_slice($discountHistory['topUpList'], -1, 1, TRUE));
            $discountHistory['topUpList'][$last_key + 1] = $discountHistory['orderUsedDiscount'][$orderUsedDiscountKey];
        }
    }

    if (count($discountHistory['topUpList'] > 0)) {
        /*         * *sort Top Up list by entry date** */
        orderBy($discountHistory['topUpList'], 'entry_date');
    }
    //calculations
    $totalDiscountAmount = sprintf("%.2f", round($deposited + $topUpAddAmount, 2));
    $totalUsedAmount = sprintf("%.2f", round($topUpSubAmount + $orderUsedAmount, 2));
    $totalBalanceAmount = sprintf("%.2f", round($totalDiscountAmount - $totalUsedAmount, 2));
    $discountHistory['grandDetails'] = array();
    $discountHistory['grandDetails']['deposited'] = $deposited;
    $discountHistory['grandDetails']['totalDiscountAmount'] = $totalDiscountAmount;
    $discountHistory['grandDetails']['totalUsedAmount'] = $totalUsedAmount;
    $discountHistory['grandDetails']['totalBalanceAmount'] = $totalBalanceAmount;
    $discountHistory['grandDetails']['currency_code'] = '$';

    return $discountHistory;
}

/**
 * @param $order_id
 * @param $sub_order_id
 * @return string
 */
function getCreateCompleteOrderId($order_id, $sub_order_id) {

    $ci = & get_instance();
    $ci->load->model('Orders_model');

    $ci->db->select('o.order_code, o.order_date, r.reseller_code');
    $ci->db->from('orders as o');
    $this->db->join('resellers as r', "o.reseller_id = r.reseller_id");
    $ci->db->where('order_id', $order_id);
    $query = $ci->db->get();

    if ($query->num_rows() > 0) {
        $GetRequiredDataToCreateCompleteOrderId = $query->result_array();
    }

    $complete_order_id = CreateCompleteOrderId($order_id, $sub_order_id, $GetRequiredDataToCreateCompleteOrderId['order_date']);

    return $complete_order_id;
}

/**
 * CreateCompleteOrderId
 * @param $parm1
 * @param string $param2
 * @param $orderPlacedDate
 * @param int $day_order_counter
 * @return string formated complete order id.
 * @internal param order_id $number
 * @internal param sub_order_id $number
 * @internal param Order $date placed date.
 */
function CreateCompleteOrderId($parm1, $param2 = '', $orderPlacedDate, $day_order_counter = 0) {
    $orderPlacedDate = preg_replace('/[()]/', ' ', $orderPlacedDate);
    $sub_order_id = (!empty($param2)) ? (int) $param2 : '';

    $list = array();
    $order_date = $orderPlacedDate;
    $alpha = $alpha1 = 65;

    $alpha_array = array();
    for ($i = 1; $i <= 12; $i++)
        $alpha_array[$i] = chr($alpha1++);
    for ($year = 2008; $year <= date('Y', strtotime($order_date)); $year++) {

        $char = chr($alpha);
        $alpha++;
        if ($char == 'Z') {
            $alpha = 65;
        }

        $list[$year] = $char;
    }

    $year = (int) date('Y', strtotime($order_date));
    $month = (int) date('m', strtotime($order_date));
    $day = (int) date('d', strtotime($order_date));

    $orderKey = $list[date('Y', strtotime($order_date))] . $alpha_array[$month] . sprintf("%02d", $day) . sprintf("%04d", $day_order_counter) . $sub_order_id;

    return $orderKey;
}

/**
 * @param $containts
 * @param string $fileName
 */
function logit($containts, $fileName = '') {
    error_reporting(0);
    if (empty($fileName))
        $fileName = "error_log_" . date('Y-m-d') . '.txt';
    else
        $fileName = $fileName . '.txt';
    if (!is_dir(FCPATH . "uploads/logs/" . date('Y/m/d'))) {
        mkdir(FCPATH . "uploads/logs/" . date('Y/m/d'), 0777, TRUE);
    }
    $filePath = FCPATH . "uploads/logs/" . date('Y/m/d/') . $fileName;
    file_put_contents($filePath, date('Y-m-d H:i:s') . ":=" . $containts, FILE_APPEND | LOCK_EX);
}

/**
 * @param $array
 * @param $key
 */
function aasort(&$array, $key) {
    $sorter = array();
    $ret = array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii] = $va[$key];
    }
    arsort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii] = $array[$ii];
    }
    $array = $ret;
}

//function emailnotifications end
function getTimeDiffrence($t1, $t2) {
    $time1 = strtotime($t1);
    $time2 = strtotime($t2);
    $diff = $time2 - $time1;
//echo 'Time 1: '.date('H:i:s', $time1).'<br>';
//echo 'Time 2: '.date('H:i:s', $time2).'<br>';
//return date('H:i:s', $diff);
    return $diff;
}

/**
 * @param $detail
 */
function emailnotifications($detail) {
    $ci = & get_instance();
    $ci->load->library('cart', 'form');
    $ci->load->model('Order_model');
    $ci->load->model('Customer_model');
    $ci->load->model('Service_model');

    $ci->db->insert('emailnotifications', $detail);
    
    /*$ci->db->select('*');
    $ci->db->from('emailnotifications');
    $ci->db->where("order_id = " . $detail['order_id'] . " and sub_order_id = " . $detail['sub_order_id']);
    //$ci->db->order_by('en_date DESC');
    $ci->db->limit(2);
    $list = $ci->db->get()->result_array();*/
    $sql = "select * from emailnotifications where order_id = {$detail['order_id']} and sub_order_id = {$detail['sub_order_id']} order by en_date desc limit 2";
    $list =  $ci->db->query($sql)->result_array();
    //$sql2 = "select service_id from `orders_services` where order_id = {$detail['order_id']} and sub_order_id = {$detail['sub_order_id']}";
      //  $service_detail = $ci->db->query($sql2)->row_array();

    logit((" \n " . $list[1]['order_status_id'] . "==" . ORDER_HOLD . "||" . $list[1]['order_status_id'] . "==" . ORDER_STATUS_SAMPLE_IMAGES_UPLOADED), "fun_emailnotifications");

    if (($list[0]['order_status_id'] != $list[1]['order_status_id']) && $detail['service_id'] != RETOUCHING) {

        if (($list[1]['order_status_id'] == ORDER_HOLD || $list[1]['order_status_id'] == ORDER_STATUS_SAMPLE_IMAGES_UPLOADED)) {
            $log .=" \n ";
            $log .=" **************************************** \n ";
            $log .=" \n  Server date start date  :" . $list[1]['en_date'] . " \n ";
            $log .=" Server date end date  :" . $list[0]['en_date'] . " \n ";

            $ISTtime = strtotime($list[1]['en_date']) + (3600 * 13.5); // Add 9.5 hour
            $list[1]['en_date'] = date('Y-m-d H:i:s', $ISTtime); // Back to string
            $ISTtime = strtotime($list[0]['en_date']) + (3600 * 13.5); // Add 9.5 hour
            $list[0]['en_date'] = date('Y-m-d H:i:s', $ISTtime); // Back to string
            list($startdate, $startdatetime) = explode(" ", $list[1]['en_date']);
            list($enddate, $enddatetime) = explode(" ", $list[0]['en_date']);

            $log .="from date = {$list[1]['en_date']} \n ";
            $log .="to date = {$list[0]['en_date']} \n ";
            $workDaysDate = get_workdays($list[1]['en_date'], $list[0]['en_date']);
            if (in_array($enddate, $workDaysDate) && $enddate != $workDaysDate[end(array_keys($workDaysDate))]) {
                unset($workDaysDate[end(array_keys($workDaysDate))]);
            }
            $log .="workDaysDate = " . print_r($workDaysDate, true) . " \n ";
            $start_time = str_replace(":", "", $startdatetime);
            $end_time = str_replace(":", "", $enddatetime);
            $new_time = 0;
            $new_time2 = 0;
            $firstandlastdayhours = 0;
            if ($startdate != $enddate) {
                $start_time = (int) $start_time;
                $end_time = (int) $end_time;
                if (in_array($startdate, $workDaysDate)) {
                    $start_date_time = ($start_time < 90000) ? '09:00:00' : $startdatetime;
                    $start_date_time = ($start_time >= 170000) ? '17:00:00' : $start_date_time;
                    $cut_off_time = '17:00:00';
                    $start_day_hours_diff = getTimeDiffrence($start_date_time, $cut_off_time);
                    $new_time1 = (($start_day_hours_diff / 60) / 60);
                    $new_time1 = ($new_time1 > 8) ? 8 : $new_time1;
                    $log .="new_time1 = $new_time1 \n ";
                }
                if (in_array($enddate, $workDaysDate)) {
                    $start_date_time2 = '09:00:00';
                    $cut_off_time2 = ($end_time > 170000) ? '17:00:00' : $enddatetime;
                    $cut_off_time2 = ($end_time <= 90000) ? '09:00:00' : $cut_off_time2;
                    $start_day_hours_diff = getTimeDiffrence($start_date_time2, $cut_off_time2);
                    $new_time2 = (($start_day_hours_diff / 60) / 60);
                    $new_time2 = ($new_time2 > 8) ? 8 : $new_time2;
                    $log .="new_time2 = $new_time2 \n ";
                }
                $firstandlastdayhours = ($new_time1 + $new_time2);
                $log .="start_time = $start_time \n ";
                $log .="end_time = $end_time \n ";
                $log .="start_date_time = $start_date_time \n ";
                $log .="cut_off_time = $cut_off_time \n ";
                $log .="start_date_time2 = $start_date_time2 \n ";
                $log .="cut_off_time2 = $cut_off_time2 \n ";
                $log .="firstandlastdayhours = $firstandlastdayhours \n ";
            } else {
                if (in_array($startdate, $workDaysDate)) {
                    $startdatetime = ($start_time < 90000) ? '09:00:00' : $startdatetime;
                    $startdatetime = ($start_time > 170000) ? '17:00:00' : $startdatetime;
                    $enddatetime = ($end_time > 170000) ? '17:00:00' : $enddatetime;
                    $enddatetime = ($end_time < 90000) ? '09:00:00' : $enddatetime;
                    $start_date_time2 = $startdatetime;
                    $cut_off_time2 = $enddatetime;
                    $start_day_hours_diff = getTimeDiffrence($start_date_time2, $cut_off_time2);
                    $new_time2 = (($start_day_hours_diff / 60) / 60);
                    $firstandlastdayhours = ($new_time2 > 8) ? 8 : $new_time2;
                    $log .="startdatetime = $startdatetime \n ";
                    $log .="enddatetime = $enddatetime \n ";
                    $log .="firstandlastdayhours = $firstandlastdayhours \n ";
                }
            }
            $wdayshours = 0;
            $minus_days = 2;
            if (!in_array($startdate, $workDaysDate)) {
                $minus_days -= 1;
            }
            if (!in_array($enddate, $workDaysDate)) {
                $minus_days -= 1;
            }
            $wdayshours = (count($workDaysDate) - $minus_days) * 8;
            $hours = ($wdayshours + $firstandlastdayhours);
            $hours = ($hours <=0)?"0.00":$hours;
            $log .="hours = $hours \n ";
            $avgtime = $hours / 8;
            $log .="avgtime = $avgtime \n ";
            
            list($numdays, $rmpoints) = explode(".", $avgtime);
            $log .="numdays = $numdays \n ";
            $rmpoints = "0." . $rmpoints;
            $numdays += ($rmpoints > 0.375) ?1 : 0;
            $days = $numdays;
            $log .="rmpoints = $rmpoints \n ";
            $log .="days=numdays = $numdays \n ";
            $log .="order_id = {$detail['order_id']} \n ";
            $log .="sub_order_id = {$detail['sub_order_id']} \n ";
            $log .="order_status_id = {$detail['order_status_id']} \n ";
            $log .="total days to add  = $days \n ";

            if ($days >= 1) {
                $ci->db->select('*');
                $ci->db->from('orders_suborder');
                $ci->db->where('order_id', $detail['order_id']);
                $ci->db->where('sub_order_id', $detail['sub_order_id']);
                $suborder = $ci->db->get()->row_array();
                $log .=" \n old order_etc =" . $suborder['order_etc'];
                $suborder['order_etc'] = (empty($suborder['order_etc'])) ? date('Y-m-d H:i:s') : $suborder['order_etc'];
                $update_suborder_field_new['order_etc'] = date("Y-m-d", strtotime($days . ' weekdays', strtotime($suborder['order_etc'])));
                $log .=" \n new order_etc =" . $update_suborder_field_new['order_etc'];

                $ci->db->where('order_id', $detail['order_id']);
                $ci->db->where('sub_order_id', $detail['sub_order_id']);
                $ci->db->update('orders_suborder', $update_suborder_field_new);
                // $tableOrdersSuborder->updateRow($update_suborder_field_new);
            }
            logit(" \n " . $log, "fun_emailnotifications");
        }
    }
}

/**
 * Redirect with POST data.
 *
 * @param string $url URL.
 * @param array $data
 * @param array $headers Optional. Extra headers to send.
 * @internal param array $post_data POST data. Example: array('foo' => 'var', 'id' => 123)
 */
function redirect_post($url, array $data, array $headers = null) {

    echo "<form action='" . $url . "' method='post' name='frm'>";

    foreach ($data as $a => $b) {
        echo "<input type='hidden' name='" . htmlentities($a) . "' value='" . htmlentities($b) . "'>";
    }

    echo "</form>";
    echo "<script language='JavaScript'>";
    echo "document.frm.submit();";
    echo "</script>";
}

function getAvailablePremiumMemberSeats($year) {

    $ci = & get_instance();
    $ci->load->model('Signup_premium_members_model');

    $ci->db->select('count(*) as fillSeats');
    $ci->db->from('signup_premium_members');
    $ci->db->where('year(date)', $year);
    $query = $ci->db->get();
    $fillseatsCnt = $query->result_array();

    $MAX_LIMIT_SIGNUP_FOR_PREMIUM_MEMBERSHIP = getCustomerSettingDetails('MAX_LIMIT_SIGNUP_FOR_PREMIUM_MEMBERSHIP');

    $availablePremiumMemberSeats = $MAX_LIMIT_SIGNUP_FOR_PREMIUM_MEMBERSHIP - $fillseatsCnt['fillSeats'];
    return $availablePremiumMemberSeats;
}

function getDateForMysql($string = 'today', $dateformat = 'Y-m-d 00:00:00') {
    $date = '';
    switch ($string) {
        case 'today':
            $date['start'] = date($dateformat, strtotime("now 00:00:00"));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'yesterday':
            //echo "ghgh";exit;
            $date['start'] = date($dateformat, strtotime("-1 days"));
            $date['end'] = $date['start'];
            // $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'this week':
            $date['start'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00'));
            // $date['end'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00 +6 days'));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));

            break;

        case 'week':
            $date['start'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00'));
            //$date['end'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00 +6 days'));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));

            break;
        case 'this month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('this month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'prev month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('first day of last month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("last day of last month"));
            break;

        case 'month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('this month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;


        case 'this year':
        case 'yr':
            $date['start'] = date($dateformat, strtotime(date('Y-1-1')));
            // $date['end'] =  date($dateformat, strtotime(date('Y-12-31')));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;


        case 'prev year':
            $prevYear = strtotime(date('Y-1-1'));
            $last_year = strtotime("-1 year", $prevYear);

            $date['start'] = date($dateformat, strtotime(date('Y-1-1', $last_year)));
            $date['end'] = date($dateformat, strtotime(date('Y-12-31', $last_year)));
            break;

        case 'year':

            $date['start'] = date('Y-m-d 00:00:00', strtotime(date($dateformat . '-1-1')));
            $date['end'] = date('Y-m-d 00:00:00', strtotime(date($dateformat . '-12-31')));
            break;
        default:
            $date = date($dateformat, strtotime($string));
            break;
    }
    return $date;
}

function get_reportOptions() {
    return array(
        'today' => 'Today',
        'yesterday' => 'Yesterday',
        'this week' => 'This Week',
        'this month' => 'This Month',
        'prev month' => 'Last Month',
        'this year' => 'This Year',
        'prev year' => 'Last Year',
        'custom' => 'Custom',
    );
}

function todaysFullfield($service_id) {
    $ci = & get_instance();
    $overflowSql = "SELECT overflow FROM events WHERE start = DATE(NOW() - INTERVAL 1 DAY)";
    $query = $ci->db->query($overflowSql);
    $overflowcount = $query->row_array();
    $overflowcount = ($overflowcount['overflow']) ? $overflowcount['overflow'] : 0;
    $sqlTotal = "SELECT SUM(orders_suborder.service_quantity) as currentcount FROM orders_suborder
    INNER JOIN customers ON customers.customer_id = orders_suborder.customer_id
    WHERE orders_suborder.order_date >= CURRENT_DATE AND orders_suborder.service_id = " . $service_id;
    $query = $ci->db->query($sqlTotal);
    $Totalcustorders = $query->row_array();
    $bookedSql = "SELECT SUM(events.content_event) as usedcount, sum(customer_event_images.no_of_images) as usedanactivecount FROM events LEFT JOIN customer_event_images ON customer_event_images.event_id = events.id AND customer_event_images.status = 'Active' WHERE events.start = DATE(NOW()) AND events.event_type =" . $service_id;
    $query = $ci->db->query($bookedSql);
    $bookedcount = $query->row_array();
    $bookedcount = $bookedcount['usedanactivecount'];
    return (int) $Totalcustorders['currentcount'] + (int) $overflowcount + (int) $bookedcount;
}

function getServiceAttributes($services, $ord_name) {
    foreach ($services as $key => $service) {
        if ($ord_name == 'JTW Orders') {
            $services[$key]['service_attributes_by_id'] = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $services[$key]['service_attributes']);
            $services[$key]['service_attributes_by_id'] = unserialize($services[$key]['service_attributes']);
        } else {
            $services[$key]['service_attributes'] = unserialize(base64_decode($service['service_attributes']));
            $services[$key]['service_attributes_by_id'] = unserialize(base64_decode($service['service_attributes_by_id']));
        }
    }
    return $services;
}

/**
 * @param $dt
 * @return false|string
 */
function setEtcWithTime($dt) {

    $curTime = explode(":", date('h:i:sa', strtotime($dt)));
    // DB($curTime);
    $amPm = substr($curTime[2], -2);
    $dayOfWeek = date("w", strtotime($dt));
    //DB($dayOfWeek);  exit;
    if ($curTime[0] <= 12 and $amPm == 'am') {
        if ($dayOfWeek != 0 AND $dayOfWeek != 6) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = date("Y-m-d", strtotime('-1 days', strtotime($d1)));
        } elseif ($dayOfWeek == 0) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = date("Y-m-d", strtotime('-2 days', strtotime($d1)));
        } elseif ($dayOfWeek == 6) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = date("Y-m-d", strtotime('1 days', strtotime($d1)));
        }
    } else {
        if ($dayOfWeek != 0 AND $dayOfWeek != 6) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = $dt;
        } elseif ($dayOfWeek == 0) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = date("Y-m-d", strtotime('1 days', strtotime($d1)));
        } elseif ($dayOfWeek == 6) {
            $d1 = date('Y-m-d', strtotime($dt));
            //DB($d1); exit;
            $finalDate = date("Y-m-d", strtotime('2 days', strtotime($d1)));
        }
        //$finalDate = $dt;
    }

    //echo $finalDate; exit;
    return $finalDate;
}

/**
 * @param $str
 * @return string
 */
function getFirstNumberFromString($str) {
    preg_match_all('!\d+!', $str, $matches);
    return trim($matches[0][0]);
}

/**
 * @param $old_order_status_id
 * @param $new_order_status_id
 * @param $order
 * @param int $notified_customer
 * @return mixed
 */
function on_order_status_change($old_order_status_id, $new_order_status_id, $order, $notified_customer = 1) {
    $ci = &get_instance();
    $ci->load->model('Common_model');

    $newcontent = '';
    $reason_id = $ci->input->post('orders_suborder[reason_id]');
    $status_id = $ci->input->post('orders_suborder[order_status_id]');

    if ($ci->input->post('orders_suborder[order_status_id]') == 44 || $ci->input->post('orders_suborder[order_status_id]') == 34) {

        $holdreasondata = get_email_hold_content($status_id, $reason_id);
        //cidb($holdreasondata);
        $replacestring = array("[order_number]", "[number_of_images_expected]", "[number_of_images_received]");
        $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'), $ci->input->post('orders_suborder[para2]'));

        $para1 = $holdreasondata['parameter1'];
        $para2 = $holdreasondata['parameter2'];
        $para3 = $holdreasondata['parameter3'];
        $para4 = $holdreasondata['parameter4'];
        $para5 = $holdreasondata['parameter5'];

        if (!empty($ci->input->post('orders_suborder[para1]'))) {
            $replacestring = array("[order_number]", "[$para1]");
            $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'));
        }

        if (!empty($ci->input->post('orders_suborder[para2]'))) {
            $replacestring = array("[order_number]", "[$para1]", "[$para2]");
            $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'), $ci->input->post('orders_suborder[para2]'));
        }

        if (!empty($ci->input->post('orders_suborder[para3]'))) {
            $replacestring = array("[order_number]", "[$para1]", "[$para2]", "[$para3]");
            $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'), $ci->input->post('orders_suborder[para2]'), $ci->input->post('orders_suborder[para3]'));
        }

        if (!empty($ci->input->post('orders_suborder[para4]'))) {
            $replacestring = array("[order_number]", "[$para1]", "[$para2]", "[$para3]", "[$para4]");
            $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'), $ci->input->post('orders_suborder[para2]'), $ci->input->post('orders_suborder[para3]'), $ci->input->post('orders_suborder[para4]'));
        }

        if (!empty($ci->input->post('orders_suborder[para5]'))) {
            $replacestring = array("[order_number]", "[$para1]", "[$para2]", "[$para3]", "[$para4]", "[$para5]");
            $replacedby = array($order['complete_sub_order_id'], $ci->input->post('orders_suborder[para1]'), $ci->input->post('orders_suborder[para2]'), $ci->input->post('orders_suborder[para3]'), $ci->input->post('orders_suborder[para4]'), $ci->input->post('orders_suborder[para5]'));
        }

        $newcontent = str_replace($replacestring, $replacedby, $holdreasondata['email_template']);
    }

    $user_id = ($ci->session->userdata['user_id']) ? $ci->session->userdata['user_id'] : 0;
    $sql = "select * from order_statuses where order_status_id IN(?,?) ORDER BY FIELD(order_status_id, ?,?)";
    $ordStatus = $ci->db->query($sql, array($old_order_status_id, $new_order_status_id, $old_order_status_id, $new_order_status_id));
    $status = $ordStatus->result_array();

    if (!isset($status[1]['order_status_value'])) {
        $status[1]['order_status_value'] = $status[0]['order_status_value'];
    }

    $text = $status[1]['order_status_value'] . '<b> from </b>' . $status[0]['order_status_value'] . '<br><br>';

    if ($ci->input->post('orders_suborder[order_status_id]') == 44 || $ci->input->post('orders_suborder[order_status_id]') == 34) {

        $text .= $holdreasondata['hold_reason'] . '<br><br>';

        if (!empty($ci->input->post('orders_suborder[para1]'))) {
            $text .= ucwords(str_replace("_", " ", $holdreasondata['parameter1'])) . " : " . $ci->input->post('orders_suborder[para1]') . "<br>";
        }
        if (!empty($ci->input->post('orders_suborder[para2]'))) {
            $text .= ucwords(str_replace("_", " ", $holdreasondata['parameter2'])) . " : " . $ci->input->post('orders_suborder[para2]') . "<br>";
        }
        if (!empty($ci->input->post('orders_suborder[para3]'))) {
            $text .= ucwords(str_replace("_", " ", $holdreasondata['parameter3'])) . " : " . $ci->input->post('orders_suborder[para3]') . "<br>";
        }
        if (!empty($ci->input->post('orders_suborder[para4]'))) {
            $text .= ucwords(str_replace("_", " ", $holdreasondata['parameter4'])) . " : " . $ci->input->post('orders_suborder[para4]') . "<br>";
        }
        if (!empty($ci->input->post('orders_suborder[para5]'))) {
            $text .= ucwords(str_replace("_", " ", $holdreasondata['parameter5'])) . " : " . $ci->input->post('orders_suborder[para5]') . "<br>";
        }
    }

    $customer_notified = ($notified_customer) ? 'Customer notified: Yes' : 'Customer notified: No';

    if (!empty($text)) {
        $comments = array();

        $comments['order_id']                   = $order['order_id'];
        $comments['user_id']                    = $user_id;
        $comments['sub_order_id']               = $order['sub_order_id'];
        $comments['order_comment_created_on']   = date('Y-m-d H:i:s');
        $comments['order_comment_text']         = $text;
        $comments['order_email_template']       = $newcontent;

        if (!empty($newcontent)) {
            $comments['order_view_email']       = 'view email';
        }
        $comments['reason_id']                  = (int) $reason_id;
        $comments['order_status_id']            = (int) $status_id;
        $comments['customer_notified']          = $customer_notified;

        $comments['details'] = serialize($comments);
        $insertcomments = true;
        if ($new_order_status_id == 44 && $reason_id == 0) {
            $insertcomments = false;
        }
        if ($insertcomments) {
            $ci->Common_model->create('order_comments', $comments);
        }
    }
    $orders_suborder_data = $ci->input->post('orders_suborder');
    $status_cahange_data['customer_id'] = $order['customer_id'];
    $status_cahange_data['order_id'] = $order['order_id'];
    $status_cahange_data['sub_order_id'] = $order['sub_order_id'];
    $status_cahange_data['complete_sub_order_id'] = $order['complete_sub_order_id'];
    $status_cahange_data['status_id'] = $new_order_status_id;
    $status_cahange_data['old_status_id'] = $old_order_status_id;
    $status_cahange_data['reason_id'] = (int) $orders_suborder_data['reason_id'];
    $status_cahange_data['custom_link'] = ($orders_suborder_data['download_zip_filename']) ? implode(',', $orders_suborder_data['download_zip_filename']) : '';
    $status_cahange_data['date'] = date('Y-m-d');


    $ci->db->insert('orders_suborder_change_status', $status_cahange_data);

    error_reporting(0);
    //mail goes here
    $ci->load->model('Emails_model');
    $ci->load->model('Customer_model');
    $customer = $ci->Customer_model->find_by_customer($order['customer_id']);

    //$message_vars = $order_data;
    $message_vars = $order;
    $message_vars['order_status_value_new'] = $status[1]['order_status_value'];
    $message_vars['order_status_value_old'] = $status[0]['order_status_value'];
    $message_vars['complete_sub_order_id'] = $order['complete_sub_order_id'];
    $message_vars['order_name'] = $order['order_name'];
    $message_vars['support_email'] = SITE_FROM_EMAIL;
    $message_vars['site_name'] = SITE_NAME;
    $message_vars['customer_firstname'] = $customer['customer_firstname'];
    $message_vars['customer_name'] = $customer['customer_firstname'];
    $message_vars['customer_email'] = $customer['customer_email'];
    //$message_vars['customer_email']         = 'dpardhi@tiuconsulting.com';
    $email_template_id = 9;

//cidb($reason_id); exit;
    if ($new_order_status_id == 31) {
        $email_template_id = 14;

        if ($orders_suborder_data['download_zip_filename']) {
            // $downloadlink = '<ul>';
            foreach ($orders_suborder_data['download_zip_filename'] as $link) {
                // $downloadlink .= '<li>';
                $downloadlink = '<a href="' . $link . '" target="_blank"><b>Click here to download the sample images.</b></a>';
                // $downloadlink .= '</li>';
            }
            // $downloadlink .= '</ul>';
            $message_vars['sample_download_link'] = $downloadlink;
        }
        $message_vars['approved_link'] = '<a href="' . base_url('sampleapproved/' . $order['customer_id'] . '/' . $order['sub_order_id'] . '/' . $order['order_id']) . '">Approved! Please continue with my order.</a>';
        $message_vars['not_approved_link'] = '<a href="' . base_url('/feedbacks/samplefeedback/' . $order['order_id'] . '/' . $order['sub_order_id']) . '">Not approved. I\'d like to make some changes.</a>';
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(52, 53, 55, 56, 33, 14, 31))) {
        $email_template_id = 17;
        $message_vars['email_content'] = $newcontent;
        $attach = download_hold_samples($order['order_id'], $order['sub_order_id'], $customer['user_id']);
        if (!empty($attach)) {
            $message_vars['attach'] = FCPATH . $attach;
        }
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(35))) {
        $email_template_id = 44;
        $message_vars['support_image_description'] = $ci->input->post('orders_suborder[para1]');
        $attach = download_hold_samples($order['order_id'], $order['sub_order_id'], $customer['user_id']);
        if (!empty($attach)) {
            $message_vars['attach'] = FCPATH . $attach;
        }
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(15))) {
        $email_template_id = 34;
        if($order['service_id'] == COLOR_CORRECTION){
        $uploadurl       = COLOR_UPLOAD_URL."index.php?fuseaction=customer.uploadtool&order_id=".$order['order_id']."&sub_order_id=".$order['sub_order_id']."&rc=PE";
        }else{
        $uploadurl       = RETOUCHING_UPLOAD_URL."index.php?fuseaction=retouching.home&order_id=".$order['order_id']."&sub_order_id=".$order['sub_order_id']."&rc=PE";
        }

        $message_vars['upload_link'] = '<a href="'.$uploadurl.'">Please click here to upload your order.</a>';
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(17))) {
        $email_template_id = 35;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(45))) {
        $email_template_id = 45;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(46))) {
        $email_template_id = 46;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(50))) {
        $email_template_id = 47;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(51))) {
        $email_template_id = 48;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(18))) {
        $message_vars['number_images'] = $ci->input->post('orders_suborder[para1]');
        $email_template_id = 36;
    }

    if ($new_order_status_id == 44 && in_array($reason_id, array(54))) {
        if ($ci->input->post('orders_suborder[download_zip_filename]')) {
            foreach ($ci->input->post('orders_suborder[download_zip_filename]') as $link) {
                $downloadlink = '<a href="' . $link . '" target="_blank"><b>Click here to download the sample images.</b></a>';
            }
            $message_vars['sample_download_link'] = $downloadlink;
        }


        //$message_vars['sample_download_link'] = $downloadlink;
        $message_vars['approved_link'] = '<a href="' . base_url('sampleapproved/' . $order['customer_id'] . '/' . $order['sub_order_id'] . '/' . $order['order_id']) . '">Approved! Please continue with my order.</a>';
        $message_vars['not_approved_link'] = '<a href="' . base_url('samplefeedback/' . $order['customer_id'] . '/' . $order['sub_order_id'] . '/' . $order['order_id']) . '">Not approved. I\'d like to make some changes.</a>';
        $email_template_id = 49;
    }

    if ($new_order_status_id == 44 && in_array($reason_id, array(19))) {
        $message_vars['number_images'] = $ci->input->post('orders_suborder[para1]');
        $email_template_id = 37;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(20))) {
        $message_vars['expected_images']        = $ci->input->post('orders_suborder[para1]');
        $message_vars['expected_file_type']     = $ci->input->post('orders_suborder[para2]');
        $message_vars['received_images']        = $ci->input->post('orders_suborder[para3]');
        $message_vars['recevied_file_type']     = $ci->input->post('orders_suborder[para4]');
        $email_template_id = 38;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(23))) {
        $message_vars['number_images'] = $ci->input->post('orders_suborder[para1]');
        $email_template_id = 39;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(24))) {
        $message_vars['number_images'] = $ci->input->post('orders_suborder[para1]');
        $email_template_id = 40;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(34))) {
        $email_template_id = 43;
    }
    if ($new_order_status_id == 44 && in_array($reason_id, array(25))) {
        $message_vars['gallery'] = $ci->input->post('orders_suborder[para1]');
        $email_template_id = 41;
    }
    if ($new_order_status_id == 12) {
        $email_template_id = 18;
    }
    if ($new_order_status_id == ORDER_QUOTE_PROVIDED) {		
		$template_data['order'] = $order;
        if ($order['sub_order_discount'] > 0) {
            $ci->load->model('Discount_model');
            $discounts = $ci->Discount_model->get_discounts_by_order_id($order['order_id'], $order['sub_order_id']);
            $template_data['discount_code'] = $discounts[0]['discount_code'];
            $template_data['discount_amount'] = $discounts[0]['discount_amount'];
            $template_data['discounts'] = $discounts;
        }
        $message_vars['order_details'] = $ci->load->view('email/order_attributes_quote_ready', $template_data, true);
		//echo $message_vars['order_details']; exit;
        $email_template_id = 6;
    }


    if ($new_order_status_id == ORDER_STATUS_COMPLETED || $new_order_status_id == ORDER_REDONE) {

        // Drip Event fire
        $ci->load->library('Drip');
        //$data['email'] = $customer['customer_email'];
        $data['action'] = 'Pe Order Completed';
        $data['properties'] = array("Order Id" => $order['complete_sub_order_id']);
        $ci->drip->drip_oprations('record_event', $data);
            if($new_order_status_id == ORDER_REDONE){
                $email_template_id = 50;
            }else{
                $email_template_id = 19;
            }
        
        if ($orders_suborder_data['download_zip_filename']) {
            $downloadlink = '<ul>';
            foreach ($orders_suborder_data['download_zip_filename'] as $link) {
                $downloadlink .= '<li>';
                $downloadlink .= '<a href="' . $link . '" target="_blank"><b>Click here to download the final files</b></a>&nbsp;(Link expires in 2 weeks).*';
                $downloadlink .= '</li>';
            }
            $downloadlink .= '</ul>';
            $message_vars['download_link'] = $downloadlink;
        }
        $message_vars['terrible'] = '<a href="' . base_url('feedback/' . $order['order_id'] . '/' . $order['sub_order_id'] . '/1') . '" style="text-decoration:none; color: #000;"><img src="' . base_url('/assets/dist/pe/images/1.jpg') . '"><br>Terrible</a> ';
        $message_vars['not_great'] = '<a href="' . base_url('feedback/' . $order['order_id'] . '/' . $order['sub_order_id'] . '/2') . '" style="text-decoration:none; color: #000;"><img src="' . base_url('/assets/dist/pe/images/2.jpg') . '"><br>Not great</a>';
        $message_vars['pretty_good'] = '<a href="' . base_url('feedback/' . $order['order_id'] . '/' . $order['sub_order_id'] . '/3') . '" style="text-decoration:none; color: #000;"><img src="' . base_url('/assets/dist/pe/images/3.jpg') . '"><br>Pretty Good</a>';
        $message_vars['incredible'] = '<a href="' . base_url('feedback/' . $order['order_id'] . '/' . $order['sub_order_id'] . '/4') . '" style="text-decoration:none; color: #000;"><img src="' . base_url('/assets/dist/pe/images/4.jpg') . '"><br>Incredible</a>';
    }
    if ($new_order_status_id == ORDER_QUOTE_PAID) {
		$condition = array(
		"osub.order_id" => $order['order_id'],
		"osub.sub_order_id" => $order['sub_order_id'],
		);
		//echo "ghghghghgh";
		$result = $ci->Order_model->find_by_where($condition);	
		//cidb($result[0]);	exit;
		$order_with_disc_amt = $result[0];
        $template_data['order'] = $order;
		//cidb($template_data['order']); exit;
        if ($order_with_disc_amt['sub_order_discount'] > 0) {
            $ci->load->model('Discount_model');
            $discounts = $ci->Discount_model->get_discounts_by_order_id($order['order_id'], $order['sub_order_id']);
            $template_data['discount_code'] = $discounts[0]['discount_code'];
            $template_data['discount_amount'] = $discounts[0]['discount_amount'];
            $template_data['discounts'] = $discounts;
        }
        $message_vars['order_details'] = $ci->load->view('email/order_attributes', $template_data, true);
        
        $email_template_id = 7;
    }
    
    if($new_order_status_id == ORDER_STARTED){
        $condition = array();
        $condition['order_id'] = $order['order_id'];
        $condition['sub_order_id'] = $order['sub_order_id'];
        $condition['order_status_id '] = FILE_CHECK;
        $row = $ci->Order_model->get_order_notification($condition);
        if(isset($row['order_status_id'])){

        }else{

            if(empty($order['order_etc'])){
                $ci->load->model('Peapi_model');
                $ci->Peapi_model->set_etc($order);
            }
            //logit(print_r($order,true),'order_started_etc');
        }
    }
    
    $sendemail = true;
    if ($new_order_status_id == 44 && $reason_id == 0) {
        $sendemail = false;
    }
    if ($sendemail == true) {
        //notification
        if ($notified_customer) {
            $ci->Emails_model->send_email_from_db($email_template_id, $message_vars);
        }

       
    }
    
     //Notification Start
        $emailnotificationsField = array();
        $emailnotificationsField['enot_id'] = $new_order_status_id;
        $emailnotificationsField['order_id'] = $order['order_id'];
        $emailnotificationsField['sub_order_id'] = $order['sub_order_id'];
        $emailnotificationsField['order_status_id'] = $new_order_status_id;
        $emailnotificationsField['user_id'] = $ci->session->userdata['user_id'];
        emailnotifications($emailnotificationsField);
        //Notification Start
    return $status;
}

function get_email_hold_content($status_id = NULL, $hold_reason_id = NULL) {
    $ci = &get_instance();
    $ci->db->select('hold_reasons.*');
    $ci->db->from('hold_reasons');
    $ci->db->where("hold_reasons.hold_reason_id = '" . $hold_reason_id . "' AND hold_reasons.status_id = '" . $status_id . "'");
    $reasondetail = (array) $ci->db->get()->row();
    return $reasondetail;
}

/**
 * @param $data
 * @return bool
 */
function objToArray($data) {
    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    }

    return $data;
}

function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while ($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname . "/" . $file))
                unlink($dirname . "/" . $file);
            else
                delete_directory($dirname . '/' . $file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}

function setEtcOnStatusOrderStarted($detail) {
    $ci = &get_instance();
    $etcDate = array();
    $curTime = explode(":", date('h:i:sa'));
    $amPm = substr($curTime[2], -2);
    $ci->db->select('*');
    $ci->db->from('turnaround_time');
    $ci->db->where("turnaround_time_name = 'Portrait'");
    $detail = $ci->db->get()->row_array();
    $turnAroundDay = $detail['turnaround_time_value'];

    if ($curTime[0] <= 12 and $amPm == 'am') {
        if (date("w") != 0 and date("w") != 6) {
            $detail['services']['turnaround'] = $detail['services']['turnaround'] - 1;
            $turnAroundDay = $turnAroundDay - 1;
        }
        $etcDate['order_etc'] = date('Y-m-d', strtotime($detail['services']['turnaround'] . ' weekdays'));
        $log = "CURDATE=" . date('Y-m-d h:i:sa') . "\nOrder id=" . $detail['services']['order_id'] . "\nsub order id=" . $detail['sub_order_id'] . "\nETC=" . $etcDate['order_etc'] . "\ntime=am\nshoot=non portrait\nfuseaction=suborderdetail";
    } else {
        $etcDate['order_etc'] = date('Y-m-d', strtotime($detail['services'][0]['turnaround'] . ' weekdays'));
        $turnAroundDay = $turnAroundDay;
    }
    if (isset($detail['services']['service_attributes']['Type of Shoot'])) {
        if ($detail['services']['service_attributes']['Type of Shoot'] == 'Portrait') {
            $etcDate['order_etc'] = date('Y-m-d', strtotime($turnAroundDay . ' weekdays'));
            $dofWeek = date("w", strtotime($etcDate['order_etc']));
        }
    }
    $dofWeek = date("w", strtotime($etcDate['order_etc']));
    if ($dofWeek == 6 or $dofWeek == 0) {
        $etcDate['order_etc'] = date("Y-m-d", strtotime('-2 days', strtotime($etcDate['order_etc'])));
    }
    $log = "CURDATE=" . date('Y-m-d h:i:sa') . "\nOrder id=" . $detail['services']['order_id'] . "\nsub order id=" . $detail['sub_order_id'] . "\nETC=" . $etcDate['order_etc'] . "\ntime=pm\nshoot= portrait\nfuseaction=suborderdetail";
    $ci->db->where("order_id=" . $detail['services']['order_id'] . " AND sub_order_id=" . $detail['sub_order_id']);
    $ci->db->update('orders_suborder', $etcDate);
    $log .= "Saved succesffully";
    logit(" \n " . $log, "setting_etc");
}

function getRemender($total, $modby) {
    $modval = $ans = (float) $total % (float) $modby;
    $rountvalue = explode('.', $total);
    $fractionvalue = (float) $total - (float) $rountvalue[0];
    if ($modby == 1) {
        return ($modby - abs($fractionvalue));
    } else {
        return ($modby - abs($modval + $fractionvalue));
    }
}

function year_dropdown_menu($start_year, $end_year = null, $id = 'year_select', $selected = null, $class) {

    // curret year as end year
    $end_year = is_null($end_year) ? date('Y') : $end_year;

    // the current year
    $selected = is_null($selected) ? date('Y') : $selected;

    // range of years
    $r = range($start_year, $end_year);

    //create the HTML select
    $select = '<select name="' . $id . '" id="' . $id . '" class="' . $class . '">';
    foreach ($r as $year) {
        $select .= "<option value=\"$year\"";
        $select .= ($year == $selected) ? ' selected="selected"' : '';
        $select .= ">$year</option>\n";
    }
    $select .= '</select>';
    return $select;
}

function pe_number_format($number) {
    return number_format($number, 2, '.', '');
}

function download_hold_samples($order_id, $sub_order_id, $userid) {
    $ci = &get_instance();
    $ci->db->select('*');
    $ci->db->from('feedback');
    $ci->db->where(array('order_id' => $order_id, 'sub_order_id' => $sub_order_id, 'feedback_type' => 'feedback_image_admin'));
    $files = $ci->db->get()->result();
    if ($files) {
        $ci->db->select('customer_name');
        $ci->db->from('customers');
        $ci->db->where('user_id = ' . $userid);
        $customer_name = $ci->db->get()->row();
        //$zipname = '/tmp/'.str_replace(' ', '_', $customer_name->customer_name).'_'.$userid.'.zip';
        $zipname = '/tmp/feedbackmail.zip';
        unlink(APPPATH . '..' . $zipname);
        $zip = new ZipArchive;
        $zip->open(APPPATH . '..' . $zipname, ZipArchive::CREATE);
        $filepath = APPPATH . '../files/customer_samples/' . $userid . '/feedback/';
        foreach ($files as $file) {
            $path = $filepath . $file->feedback_val;
            if ($file->feedback_detail) {
                list($name, $ext) = explode('.', $file->feedback_val);
                $filename = $name . '_' . str_replace(' ', '_', $file->feedback_detail) . '.' . $ext;
            } else {
                $filename = $file->feedback_val;
            }
            $zip->addFromString($filename, file_get_contents($path));
        }
        $zip->close();
    }
    return $zipname;
}

function getOS() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}

function getIp() {
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        //check for ip from share internet
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        // Check for the Proxy User
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    return $ip;
}

function getBrowser() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }
    return $browser;
}

function getRandomReferral($length) {
    $random = "";
    srand((double) microtime() * 1000000);
    $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
    $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
    $data .= "0FGH45OP89";
    for ($i = 0; $i < $length; $i++) {
        $random .= substr($data, (rand() % (strlen($data))), 1);
    }
    return $random;
}

function search_discount($discount_tp, $discounts) {
    foreach ($discounts as $key => $val) {
        if ($val->discount_tp === $discount_tp) {
            return $key;
        }
    }
    return null;
}

function pe_date_format($date) {
    return date('M j, Y', strtotime($date));
}

function pe_date_format2($date) {
    return date('F j, Y', strtotime($date));
}

function pe_date_format3($date) {
    return date('m/d h:i A', strtotime($date));
}

function pe_admin_date_format($date) {
    return date('m/d/Y h:ia', strtotime($date));
}

function report_admin_date_format($date) {
    if ($date == '' || $date == '0000-00-00 00:00:00') {
        return null;
    } else {
        return date('d M Y', strtotime($date));
    }
}

function pe_order_admin_date_format($date) {
    if ($date == '' || $date == '0000-00-00 00:00:00') {
        return null;
    } else {
        return date('d M Y', strtotime($date));
    }
}

function get_date_for_mysql($string = 'today', $dateformat = 'Y-m-d 00:00:00') {
    $date = '';
    switch ($string) {
        case 'now':
            $date = date('Y-m-d H:i:s');

            break;
        case 'today':
            $date['start'] = date($dateformat, strtotime("now 00:00:00"));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'yesterday':
            //echo "ghgh";exit;
            $date['start'] = date($dateformat, strtotime("-1 days"));
            $date['end'] = $date['start'];
            // $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'this week':
            $date['start'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00'));
            // $date['end'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00 +6 days'));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));

            break;

        case 'week':
            $date['start'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00'));
            //$date['end'] = $isoWeekStartDate = date($dateformat, strtotime('this week 00:00:00 +6 days'));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));

            break;
        case 'this month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('this month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;

        case 'prev month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('first day of last month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("last day of last month"));
            break;

        case 'month':
            $date['start'] = date('Y-m-1 00:00:00', strtotime('this month'));
            //$date['end'] =  date('Y-m-t 00:00:00',strtotime('this month')) ;
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;


        case 'this year':
        case 'yr':
            $date['start'] = date($dateformat, strtotime(date('Y-1-1')));
            // $date['end'] =  date($dateformat, strtotime(date('Y-12-31')));
            $date['end'] = date($dateformat, strtotime("now 00:00:00"));
            break;


        case 'prev year':
            $prevYear = strtotime(date('Y-1-1'));
            $last_year = strtotime("-1 year", $prevYear);

            $date['start'] = date($dateformat, strtotime(date('Y-1-1', $last_year)));
            $date['end'] = date($dateformat, strtotime(date('Y-12-31', $last_year)));
            break;

        case 'year':

            $date['start'] = date('Y-m-d 00:00:00', strtotime(date($dateformat . '-1-1')));
            $date['end'] = date('Y-m-d 00:00:00', strtotime(date($dateformat . '-12-31')));
            break;
        default:
            $date = date($dateformat, strtotime($string));
            break;
    }
    return $date;
}

function check_preset_uploaded($customer_id) {
    $ci = &get_instance();
    $ci->db->select('preference_id');
    $ci->db->from('preferences');
    $ci->db->where(array('preference_type' => 'lr_file', 'preference_key' => 'lr_file0', 'customer_id' => $customer_id));
    if ($ci->db->get()->num_rows() > 0) {
        return false;
    } else {
        return true;
    }
}

function check_color_preset_uploaded($customer_id) {
    $ci = &get_instance();
    $ci->db->select('preference_id');
    $ci->db->from('preferences');
    $ci->db->where(array('preference_type' => 'lr_file', 'preference_key' => 'lr_file0', 'customer_id' => $customer_id));
    if ($ci->db->get()->num_rows() > 0) {
        return false;
    } else {
        return true;
    }
}
function check_bw_preset_uploaded($customer_id) {
    $ci = &get_instance();
    $ci->db->select('preference_id');
    $ci->db->from('preferences');
    $ci->db->where(array('preference_type' => 'lr_file', 'preference_key' => 'lr_file1', 'customer_id' => $customer_id));
    if ($ci->db->get()->num_rows() > 0) {
        return false;
    } else {
        return true;
    }
}


function check_preferences_uploaded($customer_id) {
    $ci = &get_instance();
    $ci->db->select('preference_id');
    $ci->db->from('preferences');
    $ci->db->where('customer_id', $customer_id);
    $ci->db->where_in('preference_type', array('org_image', 'uai_image'));
    if ($ci->db->get()->num_rows() >= 16) {
        return false;
    } else {
        return true;
    }
}


function getShootCount($startDate, $endDate, $condition) {
    $ci = &get_instance();
    $portraitCount = 0;
    $weddingCount = 0;
    $RetouchingCount = 0;
    $totalCount = 0;
    $shootSql = "SELECT os.order_date,os.order_name,c.customer_id,os.service_attributes_values_array,os.service_id  FROM orders_suborder os
	INNER JOIN customers c ON os.customer_id=c.customer_id
	WHERE os.order_status_id != ".ORDER_CANCELED." AND DATE(os.order_date) >= DATE('{$startDate}') AND DATE(os.order_date) <= DATE('{$endDate}')" . $condition;

    //cidb($shootSql);

    $getShoot = $ci->db->query($shootSql)->result_array();
    foreach ($getShoot as $key => $val) {

        $getShoot[$key]['service_attributes_values_array'] = unserialize_data($val['service_attributes_values_array']);

        if (isset($getShoot[$key]['service_attributes_values_array']['Type of Shoot'])) {
            if ($getShoot[$key]['service_attributes_values_array']['Type of Shoot'] == 'Portrait'){
                $portraitCount ++;
            }else{
                $weddingCount ++;
            }
            $totalCount ++;
        }
        else {
            if ($val['service_id'] == RETOUCHING) {
                $RetouchingCount ++;
                $totalCount ++;
            }
        }
    }

    $portPer = round(($portraitCount * 100) / $totalCount, 2);
    $wedPer = round(($weddingCount * 100) / $totalCount, 2);
    $RetPer = round(($RetouchingCount * 100) / $totalCount, 2);
    $portrait = $portraitCount . " (" . $portPer . "%)";
    $wedding = $weddingCount . " (" . $wedPer . "%)";
    $retouching = $RetouchingCount . " (" . $RetPer . "%)";
    $shoot['portraitCount'] = $portrait;
    $shoot['weddingCount'] = $wedding;
    $shoot['retouchingCount'] = $retouching;
    $shoot['pCount'] = $portraitCount;
    $shoot['pPer'] = $portPer;
    $shoot['wCount'] = $weddingCount;
    $shoot['wPer'] = $wedPer;
    $shoot['rCount'] = $RetouchingCount;
    $shoot['rPer'] = $RetPer;
    return $shoot;
}

function sqlMonthlyStatement($start_date, $end_date, $where) {
    if ($end_date) {
        $where = "DATE(os.order_date) >= DATE('{$start_date}') AND DATE(os.order_date) <= DATE('{$end_date}') " . $where;
    } else {
        $where = "DATE(os.order_date) <= DATE('{$start_date}') " . $where;
    }
    return "SELECT monthname(os.order_date) as monthname,
year(os.order_date) as year,
IFNULL(count(os.complete_sub_order_id),0) as number_of_all_Order,
COUNT( CASE WHEN os.sub_order_sub_total <= 0 AND os.service_id != " . RETOUCHING . "   AND os.service_id !=" . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_sample_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0  || os.service_id = " . RETOUCHING . "  || os.service_id = " . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0 THEN os.complete_sub_order_id END) paid_number_of_Order,
IFNULL(sum(os.sub_order_discount),0) as total_discounts ,
IFNULL(sum(os.zen_discount),0) as total_zen_discount ,
IFNULL(sum(os.sub_order_total),0) as sub_order_total,
COUNT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 THEN c.customer_id END) number_of_paid_ordring_clients,
GROUP_CONCAT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 || os.service_id = 14  || os.service_id = 16 THEN c.customer_id END) number_of_ordring_client_ids,
IFNULL(sum((select sum(refund.gross_refundamount) from refund where  refund.order_id = os.order_id AND refund.sub_order_id = os.sub_order_id group by refund.order_id ,refund.sub_order_id )),0) as total_refund,
c.migrated_from,
os.service_name,
os.service_id
FROM orders_suborder os
INNER JOIN customers c ON c.customer_id = os.customer_id
WHERE os.order_status_id != " . ORDER_CANCELED . " AND " . $where;
}

function sqlRecurringClients($newStartDate, $where) {
    return "SELECT monthname(os.order_date) as monthname,
year(os.order_date) as year,
IFNULL(count(os.complete_sub_order_id),0) as number_of_all_Order,
COUNT( CASE WHEN os.sub_order_sub_total <= 0 AND os.service_id != " . RETOUCHING . "   AND os.service_id !=" . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_sample_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0  || os.service_id = " . RETOUCHING . "  || os.service_id = " . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0 THEN os.complete_sub_order_id END) paid_number_of_Order,
IFNULL(sum(os.sub_order_discount),0) as total_discounts ,
IFNULL(sum(os.zen_discount),0) as total_zen_discount ,
IFNULL(sum(os.sub_order_total),0) as sub_order_total,
COUNT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 THEN c.customer_id END) number_of_paid_ordring_clients,
GROUP_CONCAT(DISTINCT CASE WHEN os.sub_order_sub_total > 0   || os.service_id = 14  || os.service_id = 16 THEN c.customer_id END) number_of_ordring_client_ids,
IFNULL(sum((select sum(refund.gross_refundamount) from refund where  refund.order_id = os.order_id AND refund.sub_order_id = os.sub_order_id group by refund.order_id ,refund.sub_order_id )),0) as total_refund,
c.migrated_from,
os.service_name,
os.service_id
FROM orders_suborder os
INNER JOIN customers c ON c.customer_id = os.customer_id
WHERE os.order_status_id != " . ORDER_CANCELED . " AND
DATE(os.order_date) <= DATE('{$newStartDate}') " . $where;
}

function date_is_year($d1, $d2) {
    $days = round(abs(strtotime($d1) - strtotime($d2)) / 86400);
    if ($days == 364 || $days == 365) {
        return true;
    } else {
        return false;
    }
}

function getPercentage($totalAmount = 0.00, $calculatePercentageOnAmount = 0.00) {
    return (int) ($calculatePercentageOnAmount / $totalAmount) * 100;
}

function pe_order_date_format($date) {
    if ($date == '' || $date == '0000-00-00 00:00:00') {
        return null;
    } else {
        return date('d M Y h:i a', strtotime($date)) . ' Eastern';
    }
}

function setEtcOnStatusPrefCustOrderStarted($detail) {
    $etcDate = array();
    $ci = &get_instance();
    $mysql_datetime_sql = "SELECT NOW() AS mysql_datetime";
    $mysql_datetime_data = $ci->db->query($mysql_datetime_sql)->row_array();
    $mysql_datetime = $mysql_datetime_data['mysql_datetime'];
    $mysql_datetime = date('Y-m-d h:i:sa', strtotime($mysql_datetime));
    $mysql_datetime_expl = explode(" ", $mysql_datetime);
    $curTime = explode(":", $mysql_datetime_expl[1]);

    $amPm = substr($curTime[2], -2);
    $turnAroundDay = getTurnAroundTime_preferred($detail);

    if (!empty($turnAroundDay)) {
        if ($curTime[0] <= 12 and $amPm == 'am') {
            if (date("w") != 0 and date("w") != 6) {
                $detail['services']['turnaround'] = $detail['services']['turnaround'] - 1;
                $turnAroundDay = $turnAroundDay - 1;
            }
            if (date('Y-m-d', strtotime($detail['order_date'])) > date('Y-m-d', strtotime($mysql_datetime))) {
                $days = (strtotime($detail['order_date']) - strtotime($mysql_datetime)) / (60 * 60 * 24);
                $turnAroundDay = $turnAroundDay + $days;
                $etcDate['order_etc'] = date('Y-m-d', strtotime($turnAroundDay . ' weekdays'));
            } else {
                $etcDate['order_etc'] = date('Y-m-d', strtotime($turnAroundDay . ' weekdays'));
            }
            $log = "CURDATE=" . $mysql_datetime . "\nOrder id=" . $detail['services'][0]['order_id'] . "\nsub order id=" . $detail['sub_order_id'] . "\nturnAroundDay=" . $turnAroundDay . "\nETC=" . $etcDate['order_etc'] . "\ntime=am\nshoot=non portrait\nfuseaction=suborderdetail";
        } else {

            if (date('Y-m-d', strtotime($detail['order_date'])) > date('Y-m-d', strtotime($mysql_datetime))) {
                $days = (strtotime($detail['order_date']) - strtotime($mysql_datetime)) / (60 * 60 * 24);
                $turnAroundDay = $turnAroundDay + $days;
                $etcDate['order_etc'] = date('Y-m-d', strtotime($turnAroundDay . ' weekdays'));
            } else {
                $etcDate['order_etc'] = date('Y-m-d', strtotime($turnAroundDay . ' weekdays'));
            }
            $turnAroundDay = $turnAroundDay;
        }
        $dofWeek = date("w", strtotime($etcDate['order_etc']));
        if ($dofWeek == 6 or $dofWeek == 0) {
            $etcDate['order_etc'] = date("Y-m-d", strtotime('-2 days', strtotime($etcDate['order_etc'])));
        }
        $log = "CURDATE=" . $mysql_datetime . "\nOrder id=" . $detail['order_id'] . "\nsub order id=" . $detail['sub_order_id'] . "\nturnAroundDay=" . $turnAroundDay . "\nETC=" . $etcDate['order_etc'] . "\ntime=pm\nshoot= portrait\nfuseaction=suborderdetail";
        $ci->db->where('order_id', $detail['order_id']);
        $ci->db->where('sub_order_id', $detail['sub_order_id']);
        $ci->db->update('orders_suborder', $etcDate);
        $log .= "\nSaved succesffully" . "\r\n";
        logit(" \n " . $log, "setting_preffered_etc");
    } else {
        $log = "CURDATE=" . $mysql_datetime . "\nOrder id=" . $detail['order_id'] . "\nsub order id=" . $detail['sub_order_id'] . "\nturnAroundDay=" . $turnAroundDay . "\nETC=" . $etcDate['order_etc'] . "\ntime=am\nshoot=non portrait\nfuseaction=suborderdetail";
        logit(" \n " . $log, "setting_preffered_etc");
    }
}

function getTurnAroundTime_preferred($detail) {
    $ci = &get_instance();
    $ci->db->from('preferred_customer_etc');
    $ci->db->where("order_id", $detail['order_id']);
    $ci->db->where("sub_order_id", $detail['sub_order_id']);
    $data = $ci->db->get()->row;
    return ($data) ? $data->estimatedDay : 3;
}

function calculate_turnariund($quantity, $service_id){
    $ci = &get_instance();
    $ci->load->model('Service_model');
    $service_detail         = $ci->Service_model->getServiceDetail($service_id);
    $capacitycount          = $ci->Service_model->perdayCapacityCount($service_id);
    $capacity               = ($capacitycount['capacityperday'] > 0) ? $capacitycount['capacityperday'] : 1;
    $filled                 = (int)$ci->Service_model->todaysFullfield($service_id);
    $High_Vol_Low_Target    = $ci->Service_model->get_constant_key('High_Vol_Low_Target');
    $High_Vol_High_Target   = $ci->Service_model->get_constant_key('High_Vol_High_Target');

    $capacitylavel1         = $capacity * 1;
    $capacitylavel2         = round($capacity * $High_Vol_Low_Target);
    $capacitylavel3         = round($capacity * $High_Vol_High_Target);
    $turnaround             = $service_detail['target_turnaround_days'];
    $target_images          = $service_detail['target_images'];
    $numberImage            =  $quantity + $filled;

    if($target_images > $quantity)
    {
        if($numberImage < $capacitylavel1){
            $etcturnaround = "Up to ".$turnaround." biz days";
        }
        if($numberImage > $capacitylavel1 && $numberImage < $capacitylavel2){
            $pic = ($capacitylavel3 - $capacitylavel2) / $High_Vol_High_Target;
            $piclavelall = $capacitylavel1 + $pic;
            $id = $etcturnaround;
            while ((int)$piclavelall <= (int)$capacitylavel2)
            {
                $pilavel[]      = array('id' => $id, 'value' => $piclavelall);
                $piclavelall    = $piclavelall + $pic;
                $id++;
            }
            $etcturnaround = $turnaround * $High_Vol_Low_Target;
            $firstlavel = $capacitylavel1;
            foreach($pilavel as $key => $value){
                if (($numberImage > $firstlavel) && ($numberImage <= (int)$value['value']))
                {
                    $etcturnaround = (int)$value['id'] + 1;
                }
                $firstlavel = (int)$value['value'];
            }
            $etcturnaround = "Up to ".((int)$value['id'] + 1)." biz days";
        }
        if($numberImage > $capacitylavel2){
            $etcturnaround = "Extended Delay";
        }
    }else{
        if($numberImage < $capacitylavel1){
            $etcturnaround = "Up to ".($turnaround * $High_Vol_Low_Target)." biz days";
        }
        if($numberImage > $capacitylavel1 && $quantity < $capacitylavel2){
            $etcturnaround = $turnaround * $High_Vol_Low_Target;

            $pic = ($capacitylavel3 - $capacitylavel2) / $High_Vol_High_Target;
            $piclavelall = $capacitylavel1 + $pic;
            $id = $etcturnaround;
            while ((int)$piclavelall <= (int)$capacitylavel2)
            {
                $pilavel[]      = array('id' => $id, 'value' => $piclavelall);
                $piclavelall    = $piclavelall + $pic;
                $id++;
            }
            $firstlavel = $capacitylavel1;
            foreach($pilavel as $key => $value){
                if (($numberImage > $firstlavel) && ($numberImage <= (int)$value['value']))
                {
                    $etcturnaround = (int)$value['id'] + 1;
                }
                $firstlavel = (int)$value['value'];
            }
            $etcturnaround = "Up to ".$etcturnaround." biz days";
        }
        if($numberImage > $capacitylavel2){
            $etcturnaround = "Extended Delay";
        }
    }
    return $etcturnaround;
}

function cdn_fallback($cdn_file_path)
{


    /* $cdn_file_path = reconstruct_url( $cdn_file_path);

   switch($cdn_file_path ){
        //frontend
        case 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootstrap/3.3.7/css/bootstrap.min.css';
        break;
        case 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootstrap/3.3.7/js/bootstrap.min.js';
        break;
        case 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/jquery/jquery.min.js';
        break;

        //admin
        case 'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootbox/bootbox.min.js';

        break;
        case 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootstrap-datepicker/bootstrap-datepicker.min.js';
        break;
        case 'https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootstrap-daterangepicker/daterangepicker.css';
        break;
        case 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js';
            $cdn_file_path = BASE_URL.'assets/cdn_fallback/bootstrap-daterangepicker/moment.min.js';
        break;

    }*/

    /*$ctx = stream_context_create(array(
            'http' => array(
                'method' => 'HEAD'
            )
        ));
        $valid_file = $cdn_file_path;

        if (@file_get_contents($cdn_file_path, false, $ctx) !== false) {

            $log =  "Cdn Path:".$cdn_file_path.PHP_EOL;
            logit($log,'cdn_fallback');
           return $cdn_file_path;
        } else if (file_exists($local_file_path)) {

            $log =  'local file loaded '.PHP_EOL;
            $log .=  "Cdn Path:".$cdn_file_path.PHP_EOL;
            $log .=  "local Path:".$local_file_path.PHP_EOL;
            logit($log,'cdn_fallback');
            return $local_file_path;
        } else {
            $log =  'Error loading CSS File \n '.PHP_EOL;
            $log .=  "Path:".$cdn_file_path.PHP_EOL;
            logit($log,'cdn_fallback');
        }*/
    return $cdn_file_path;
}

/**
 * Remove key/value pair from url query string
 *
 * @param $qry string Query String
 * @param $key string Query key to remove
 * @return string Modified query string
 * @static
 */

function reconstruct_url($url){
    $url_parts = parse_url($url);
    $constructed_url = $url_parts['scheme'] . '://' . $url_parts['host'] . $url_parts['path'];

    return $constructed_url;
}

function xss_clean_get_post_data(){
    $ci = &get_instance();
    $ci->load->helper('security');
    $_POST = $ci->security->xss_clean($ci->input->post());
    $_GET = $ci->security->xss_clean($ci->input->get());
}

function pe_date_format_na($date) {

    if ($date == '' || $date == '0000-00-00 00:00:00') {
        return 'N/A';
    } else {
        return date('M j, Y', strtotime($date));
    }

}

function getTurnaround($order_id,$sub_order_id,$service_id,$completed_date) {
    $ci = &get_instance();
    if($service_id == RETOUCHING){
        $quotePaidDateSql = "SELECT CAST(en_date AS DATE) as start_date, en_date as source_date FROM emailnotifications WHERE order_id=" . $order_id . " AND sub_order_id=" . $sub_order_id . " AND order_status_id=" . ORDER_QUOTE_PAID . " ORDER BY en_date desc LIMIT 0,1";

        //$quotePaidDate = $fwDb->queryOne($quotePaidDateSql);
        $quotePaidDate = $ci->db->query($quotePaidDateSql)->row_array();
        $startDate = $quotePaidDate['start_date'];
        $sourceDate = $quotePaidDate['source_date'];

    }else{
        $orderStartedDateSql = "SELECT CAST(en_date AS DATE) as start_date, en_date as source_date FROM emailnotifications WHERE order_id=" . $order_id . " AND sub_order_id=" . $sub_order_id . " AND order_status_id=" . ORDER_STARTED . " ORDER BY en_date desc LIMIT 0,1";
        //echo $getDateSql."<br>";

        //$orderStartedDate = $fwDb->queryOne($orderStartedDateSql);

        $orderStartedDate = $ci->db->query($orderStartedDateSql)->row_array();
        //echo $ci->db->last_query();
        //echo "orderStartedDate<br />";
        //cidb($orderStartedDate);
        $startDate = $orderStartedDate['start_date'];
        $sourceDate = $orderStartedDate['source_date'];

        if(empty($startDate)){

            $FilecheckStartDateSql = "SELECT CAST(en_date AS DATE) as start_date, en_date as source_date FROM emailnotifications WHERE order_id=" . $order_id . " AND sub_order_id=" . $sub_order_id . " AND order_status_id=" . FILE_CHECK . " ORDER BY en_date desc  LIMIT 0,1";

            //$FilecheckStartDate = $fwDb->queryOne($FilecheckStartDateSql);

            $FilecheckStartDate = $ci->db->query($FilecheckStartDateSql)->row_array();
            //echo $ci->db->last_query();
            //echo "FilecheckStartDate<br />";
            //cidb($FilecheckStartDate);
            $startDate = $FilecheckStartDate['start_date'];
            $sourceDate = $FilecheckStartDate['source_date'];
        }
    }
    $curTime = explode(":",date('h:i:sa',strtotime($sourceDate)));
    $amPm = substr($curTime[2],-2);
    if($curTime[0] <= 12 and $amPm == 'am'){
        $timeFactor = 1;
    }else{
        $timeFactor = 0;
    }
    $completedDate = "'".$completed_date."'";

    if(!empty($startDate)){

        $businessDaysSql = "SELECT 5 * ( DATEDIFF({$completedDate}, '{$startDate}' )
	DIV 7 ) + MID( '0123444401233334012222340111123400012345001234550', 7 * WEEKDAY( '{$startDate}' 	) + WEEKDAY( {$completedDate} ) +1, 1 ) as turnaround ";
        //exit();
        //$turnarounds = $fwDb->queryOne($businessDaysSql);
        $turnarounds = $ci->db->query($businessDaysSql)->row_array();
        // echo $ci->db->last_query();
        //echo "turnarounds<br />";
        //cidb($turnarounds);
        $turnaround=$turnarounds['turnaround'] + $timeFactor;
    }

    return $turnaround;
}


function return_image_info($file_image)
{ 
    
    
    $data = array();       
    $imagick = new Imagick(FCPATH.$file_image);
    $data = $imagick->identifyimage();//$imagick->getImageResolution();//$imagick->identifyimage();
    //var_dump($data);
    return $data;
}

function resize_imagic($image_path,$width,$height,$DPI){
            $image = new Imagick();
            //$image->setResourceLimit(imagick::RESOURCETYPE_MEMORY, 4000);
            //$image->setResourceLimit(imagick::RESOURCETYPE_MAP, 4000);
           
            $image->setResolution($DPI,$DPI);            
            $image->readImage(FCPATH.$image_path);
            $image->setImageUnits(imagick::RESOLUTION_PIXELSPERINCH);
            $image->setImageResolution($DPI , $DPI);
            $image->resampleImage($DPI,$DPI,imagick::FILTER_UNDEFINED,0);
            //unlink(FCPATH.$image_path);
            $image->stripimage();
            $image->writeImage(FCPATH.$image_path); 
            $image->destroy();
            /*if($width > $height){
                $height=0;
            }
            if($height > $width){
                $width=0;
            }*/
            $image2 = new Imagick(FCPATH.$image_path);
            //$image2->setResourceLimit(imagick::RESOURCETYPE_MEMORY, 4000);
            //$image2->setResourceLimit(imagick::RESOURCETYPE_MAP, 4000);
                    
            $image2->resizeImage($width,$height, imagick::FILTER_LANCZOS, 1, TRUE);
            unlink(FCPATH.$image_path);
            $image2->writeImage(FCPATH.$image_path);
            //cidb($result);
            
           // $image_info = $this->return_image_info($image_path);
           // cidb($image_info);
           // $this->render_json($image_info);
           return true;
}

function make_thumb($src,$dest,$desired_width) {
    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height*($desired_width/$width));
    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
    /* copy source image at a resized size */
    imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg','png','gif')) {
    $files = array();
    if($handle = opendir($images_dir)) {
		$file_ctr = 100;
		$org_index = 0;
		$proc_index = 1;
		$old_logic_time = strtotime("2017-11-05");
		$images_dir_time = strtotime(date ("F d Y H:i:s.", filemtime($images_dir)));
        while(false !== ($file = readdir($handle))) {
            $extension = strtolower(get_file_extension($file));
            if($extension && in_array($extension,$exts)) {
                if($old_logic_time > $images_dir_time){
					if (stripos(basename($file), "original") !== false) {
						$files[$org_index] = $file;
						$org_index = $org_index+2;
					}else{
						$files[$proc_index] = $file;
						$proc_index = $proc_index+2;
					} 
				}else{
					$files[strtotime(date('F d Y, H:i:s ',filemtime($images_dir.$file)))] = $file;
				}
            }
        }
        closedir($handle);
        ksort($files);
    }
	//cidb($files);
    return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);

}                   
                    function get_sample_feedback($customerNameDir){
                           /** settings **/
                           $dir_path = 'files' .DIRECTORY_SEPARATOR . 'sample_feedback' . DIRECTORY_SEPARATOR . $customerNameDir . DIRECTORY_SEPARATOR;
                           $images_dir = FCPATH.$dir_path;
                           $thumbs_dir = $images_dir . 'thumb' . DIRECTORY_SEPARATOR;
                           $thumbs_width = 500;

                                    /** generate photo gallery **/
                           $image_files = get_files($images_dir);
						   //cidb($image_files); exit;
                           if(count($image_files)) {
                           $index = 0;
                           foreach($image_files as $index=>$file) {
                           $index++;
                           $thumbnail_image = $thumbs_dir.$file;
                           if(!file_exists($thumbnail_image)) {
                           $extension = get_file_extension($thumbnail_image);
                           if($extension) {
                               if (!file_exists($thumbs_dir)) {
                                   mkdir($thumbs_dir, 0777, true);
                               }
                           make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
                           }
                           }
                                $list[]= $dir_path.$file;
                           }
                           }
                           return $list;
                    }

function resize_image($source_image, $target_image, $target_width, $target_height = 0) {
    if ($target_width <= 0 && $target_height <= 0) {
        trigger_error("resizeImage(): Invalid target width or height", E_USER_ERROR);
        return false;
    }

    $source_file_name = basename($source_image);
    $pos = strrpos($source_file_name, '.');
    $source_image_type = substr($source_file_name, $pos + 1);
    list($source_width, $source_height) = getimagesize($source_image);

    if ($source_width > $source_height) {
        $width_t = $target_width;
        $height_t = round($source_height / $source_width * $target_width);
        $off_y = ceil(($width_t - $height_t) / 2);
        $off_x = 0;
    } elseif ($source_height > $source_width) {
        $height_t = $target_height;
        $width_t = round($source_width / $source_height * $target_width);
        $off_x = ceil(($height_t - $width_t) / 2);
        $off_y = 0;
    } else {
        $width_t = $height_t = $target_width;
        $off_x = $off_y = 0;
    }

    switch (strtolower($source_image_type)) {

        case 'jpg':
        case 'jpeg':
            $original_image = imagecreatefromjpeg($source_image);
            break;
        case 'gif':
            $original_image = imagecreatefromgif($source_image);
            break;
        case 'png':
            $original_image = imagecreatefrompng($source_image);
            break;
        default:
            trigger_error("resizeImage(): Invalid image type", E_USER_ERROR);
            return false;
    }

    $resized_image = imagecreatetruecolor($target_width, $target_height);
    $bg = imagecolorallocate($resized_image, 0xFF, 0xFF, 0xFF); //white background
    imagefill($resized_image, 0, 0, $bg);
    imagecopyresampled($resized_image, $original_image, $off_x, $off_y, 0, 0, $width_t, $height_t, $source_width, $source_height);


    switch (strtolower($source_image_type)) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($resized_image, $target_image, 100);
            break;
        case 'gif':
            imagegif($resized_image, $target_image, 100);
            break;
        case 'png':
            imagepng($resized_image, $target_image, 9);
            break;

        default:
            trigger_error("resizeImage(): Invalid target image type", E_USER_ERROR);
            imagedestroy($resized_image);
            imagedestroy($original_image);
            return false;
    }

    imagedestroy($resized_image);
    imagedestroy($original_image);
    return true;
}

function get_order($orderid, $ordersubid){
    $ci = & get_instance();
    $ci->load->model('Order_model');
    return $ci->Order_model->get_order_number($orderid, $ordersubid);
    // return $data->complete_sub_order_id;
}
/** 20171121 **/
function sqlMonthlyStatement_detailOverview($start_date, $end_date, $where) {
    if ($end_date) {
        $where = "DATE(os.order_date) >= DATE('{$start_date}') AND DATE(os.order_date) <= DATE('{$end_date}') " . $where;
    } else {
        $where = "DATE(os.order_date) <= DATE('{$start_date}') " . $where;
    }
    return "SELECT monthname(os.order_date) as monthname,
year(os.order_date) as year,
IFNULL(count(os.complete_sub_order_id),0) as number_of_all_Order,
COUNT( CASE WHEN os.sub_order_sub_total <= 0 AND os.service_id != " . RETOUCHING . "   AND os.service_id !=" . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_sample_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0  || os.service_id = " . RETOUCHING . "  || os.service_id = " . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0 THEN os.complete_sub_order_id END) paid_number_of_Order, 
COUNT(CASE WHEN os.is_schedule_order > 0 THEN os.complete_sub_order_id END) scheduled_orders,
COUNT(CASE WHEN os.is_schedule_order <= 0 AND c.preferred_customer = 1 THEN os.complete_sub_order_id END) premium_orders, 
COUNT(CASE WHEN os.is_schedule_order <= 0 AND c.preferred_customer = 0 THEN os.complete_sub_order_id END) regular_orders, 
IFNULL(sum(os.sub_order_discount),0) as total_discounts ,
IFNULL(sum(os.zen_discount),0) as total_zen_discount ,
IFNULL(sum(os.sub_order_total),0) as sub_order_total,
COUNT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 THEN c.customer_id END) number_of_paid_ordring_clients,
GROUP_CONCAT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 || os.service_id = 14  || os.service_id = 16 THEN c.customer_id END) number_of_ordring_client_ids,
IFNULL(sum((select sum(refund.gross_refundamount) from refund where  refund.order_id = os.order_id AND refund.sub_order_id = os.sub_order_id group by refund.order_id ,refund.sub_order_id )),0) as total_refund,
c.migrated_from,
os.service_name,
os.service_id
FROM orders_suborder os
INNER JOIN customers c ON c.customer_id = os.customer_id
WHERE os.order_status_id != " . ORDER_CANCELED . " AND " . $where;
}

function sqlRecurringClients_detailOverview($newStartDate, $where) {
    return "SELECT monthname(os.order_date) as monthname,
year(os.order_date) as year,
IFNULL(count(os.complete_sub_order_id),0) as number_of_all_Order,
COUNT( CASE WHEN os.sub_order_sub_total <= 0 AND os.service_id != " . RETOUCHING . "   AND os.service_id !=" . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_sample_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0  || os.service_id = " . RETOUCHING . "  || os.service_id = " . FLAT_RATE_RETOUCHING . " THEN os.complete_sub_order_id END) number_of_Order,
COUNT(CASE WHEN os.sub_order_sub_total > 0 THEN os.complete_sub_order_id END) paid_number_of_Order, 
COUNT(CASE WHEN os.is_schedule_order > 0 THEN os.complete_sub_order_id END) scheduled_orders,
COUNT(CASE WHEN os.is_schedule_order <= 0 AND c.preferred_customer = 1 THEN os.complete_sub_order_id END) premium_orders, 
COUNT(CASE WHEN os.is_schedule_order <= 0 AND c.preferred_customer = 0 THEN os.complete_sub_order_id END) regular_orders, 
IFNULL(sum(os.sub_order_discount),0) as total_discounts ,
IFNULL(sum(os.zen_discount),0) as total_zen_discount ,
IFNULL(sum(os.sub_order_total),0) as sub_order_total,
COUNT(DISTINCT CASE WHEN os.sub_order_sub_total > 0 THEN c.customer_id END) number_of_paid_ordring_clients,
GROUP_CONCAT(DISTINCT CASE WHEN os.sub_order_sub_total > 0   || os.service_id = 14  || os.service_id = 16 THEN c.customer_id END) number_of_ordring_client_ids,
IFNULL(sum((select sum(refund.gross_refundamount) from refund where  refund.order_id = os.order_id AND refund.sub_order_id = os.sub_order_id group by refund.order_id ,refund.sub_order_id )),0) as total_refund,
c.migrated_from,
os.service_name,
os.service_id
FROM orders_suborder os
INNER JOIN customers c ON c.customer_id = os.customer_id
WHERE os.order_status_id != " . ORDER_CANCELED . " AND
DATE(os.order_date) <= DATE('{$newStartDate}') " . $where;
}
/** 20171121 **/