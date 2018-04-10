<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class Booking_model extends CI_Model{
	
	var $table = "module_bookings";
	function __construct(){
		parent::__construct();
	}
	
	

		function update($userdata){
			$data = (array)$userdata;
			$where = "id = ".$data['id']; 
			unset($data['id']);
			$str = $this->db->update_string($this->table, $data, $where);
			$query = $this->db->query($str);
			return $query;
		}
	function addfollowup($data){
                        $this->db->insert('module_followups', $data);
                        return json_encode($data);
		}
	function getBookingFollowups($id){
                 $wheredata = array('module_followups.booking_id' => $id); 
		 $query = $this->db->select('module_followups.*')
                  ->from('module_followups')
                  ->where($wheredata);
                $result = $this->db->get();			
		return $result->result();
                }
	public function getBooking($id)
		{
		$wheredata = array('module_bookings.id' => $id); 
		 $query = $this->db->select('module_bookings.*, fuel_profiles.first_name, fuel_profiles.last_name, fuel_profiles.image, fuel_profiles.id as bookersprofileid')
                  ->from('module_bookings')
				  ->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
                  ->where($wheredata);
				  $result = $this->db->get();
		return $result->row();
		
		}
        public function getBookingManager($id)
        {
        $wheredata = array('module_bookings.id' => $id); 
         $query = $this->db->select('module_bookings.*')
          ->from('module_bookings')
          ->where($wheredata);
                          $result = $this->db->get();
        return $result->row();

        }
	
	
	public function getBookingById($id)
		{
		$wheredata = array('module_bookings.id' => $id); 
		 $query = $this->db->select('module_bookings.*')
                  ->from('module_bookings')
		  ->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
                  ->where($wheredata);
		$result = $this->db->get();
		return $result->row();
		
		}
	
		
public function selectRequest($start_row, $limit, $count = false, $pid) {
if($pid){ $wheredata = array('module_bookings.profiles_id' => $pid); } else { $wheredata = 'module_bookings.id != 0';}
if($count){
 $query = $this->db->select('module_bookings.id')
                  ->from('module_bookings')
				  ->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
				  ->join('fuel_profiles AS profiles', 'profiles.id = module_bookings.profiles_id', 'right')
                  ->where($wheredata)
				  ->order_by("module_bookings.id desc");
				  $result = $this->db->get();
			return $result->num_rows();
}
else{
//print_r($start_row); exit;
	$this->db->limit($limit, $start_row);
	$this->db->order_by('module_bookings.id', 'DESC')
				->select('module_bookings.*, fuel_profiles.first_name, fuel_profiles.last_name, fuel_profiles.image, fuel_profiles.id as bookersprofileid, profiles.first_name as profile_first_name, profiles.last_name as profile_last_name')->from('module_bookings')
				->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
				->join('fuel_profiles AS profiles', 'profiles.id = module_bookings.profiles_id', 'right')
                ->where($wheredata)
				->order_by("module_bookings.id desc");
			$result = $this->db->get();
				
    return $result->result();
	}
}
	
	
	
	
	public function selectRequestManager($start_row, $limit, $count = false) {
$wheredata = array('module_bookings.phone !=' => '');
if($count){
 $query = $this->db->select('module_bookings.id')
                  ->from('module_bookings')
				  ->join('fuel_services', 'fuel_services.id = module_bookings.service_id', 'left')
                  ->where($wheredata)
				  ->order_by("module_bookings.id desc");
				  $result = $this->db->get();
			return $result->num_rows();
}
else{
//print_r($start_row); exit;
	$this->db->limit($limit, $start_row);
	$this->db->order_by('module_bookings.id', 'DESC')
				->select('module_bookings.*, fuel_services.name as service_name')
				->join('fuel_services', 'fuel_services.id = module_bookings.service_id', 'left')
				->from('module_bookings')
                ->where($wheredata)
				->order_by("module_bookings.id desc");
			$result = $this->db->get();
				
    return $result->result();
	}
}
	
	
	
	
	
	public function selectRequestforCustomer($start_row, $limit, $count = false, $pid) {
	
$wheredata = array('module_bookings.booker_id' => $pid); 
if($count){
 $query = $this->db->select('module_bookings.id')
                  ->from('module_bookings')
				  ->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
                  ->where($wheredata)
				  ->order_by("module_bookings.id desc");
				  $result = $this->db->get();
			return $result->num_rows();
}
else{
//print_r($start_row); exit;
	$this->db->limit($limit, $start_row);
	$this->db->order_by('module_bookings.id', 'DESC')
				->select('module_bookings.*, fuel_profiles.first_name, fuel_profiles.last_name, fuel_profiles.image, fuel_profiles.id as bookersprofileid')->from('module_bookings')
				->join('fuel_profiles', 'fuel_profiles.id = module_bookings.booker_id', 'left')
                ->where($wheredata)
				->order_by("module_bookings.id desc");
			$result = $this->db->get();
			
				  //print_r($result->result());
				  //exit;		
    return $result->result();
	}
}
	
	
	
public function delete_row()
{
    $this->db->where('id', $this->uri->segment(3));
    $this->db->delete('module_bookings');
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
          
          public function sendmessage($bookingdata, $emaildata){
              $config = array(
                                'protocol' => 'smtp',
                                'smtp_host' => 'ssl://smtp.googlemail.com',
                                'smtp_port' => 465,
                                'smtp_user' => GMAILID, // change it to yours
                                'smtp_pass' => GMAILPASSWORD, // change it to yours
                                'wordwrap' => TRUE,
                                'smtp_timeout' => '4',
                                'mailtype'  => 'html', 
                                'charset'   => 'iso-8859-1',
                                'newline' => "\r\n"
                                 );
 
  				$this->load->library('email');
				$this->email->initialize($config);
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html"); 			
				$this->email->from('info@akashvaani.com', 'Akashvaani - Support');
				$this->email->to($bookingdata->email);				
				//$this->email->to('dhirpstar@gmail.com');
				$this->email->subject($emaildata->title);
				//$body = $this->load->view('emails/booking_status_notification.php',$emaildata,TRUE);			
				$this->email->message($emaildata->body);
				return $this->email->send();
          }
          
}
?>