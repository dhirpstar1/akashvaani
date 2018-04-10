<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class Consultation_model extends CI_Model{
	
	var $table = "module_consultation";
	

	function __construct(){
		parent::__construct();
	}
	
	

	function insert($consdata){
		$this->db->insert('module_consultation', $consdata);
	}
	
	

	
	
	function delete(){
		
	}
	
	
	
		
}
?>