<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class Subscribe_model extends CI_Model{
	
	var $table = "module_subscribe";
	

	function __construct(){
		parent::__construct();
	}
	

	
	function insert($data){
			$this->db->where('email', trim($data['email']));
	
            if($this->db->get('module_subscribe')->num_rows > 0)
            {
               echo 'Already subscribed.'; //Do nothing
            }
            else
            {
            $this->db->insert('module_subscribe', $data);
			echo 'Thank you for your subscription.';
            }
	
	
	
// Inserting in Table(students) of Database(college)
 //$this->db->insert('module_subscribe', $data);
}	
	
	function delete(){
		
	}
	
	
	
		
}
?>