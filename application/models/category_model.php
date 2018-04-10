<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class Category_model extends CI_Model{
	
	var $table = "fuel_categories";
	

	function __construct(){
		parent::__construct();
	}
	
	
	function getcategories(){
		$query = $this->db->select('id,name')
		 		  ->from('fuel_categories')
                  ->where('fuel_categories.published', 'yes');
		$result = $this->db->get();
		
		foreach ($result->result() as $row){  $data[$row->id] = $row->name; }
		return $data;
	}
	
	
	function getcategory(){
		$query = $this->db->select('*')
		 		  ->from('fuel_categories')
                  ->where('fuel_categories.published', 'yes');
		$result = $this->db->get();
		
		foreach ($result->result() as $row){  $data[$row->id] = $row->name; }
		return $data;
	}
	
	
	function getcategoryById($id){
		$query = $this->db->select('*')
		 		  ->from('fuel_categories')
                  ->where('fuel_categories.id', $id);
		$result = $this->db->get();
		return $result->row();
	}
	
	
	
	function delete(){
		
	}
	
	
	
		
}
?>