<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class service_model extends CI_Model{
	
	var $table = "fuel_services";
	

	function __construct(){
		parent::__construct();
	}
	
	

	function add($data){
		$data = (array)$userdata;
		$where = "id = ".$data['id']; 
		unset($data['id']);
		$str = $this->db->update_string($this->table, $data, $where);
		$query = $this->db->query($str);
		return $query;
	}
	
	
	function getservices(){
		$query = $this->db->select('*')
		 		  ->from('fuel_services')
                  ->where('fuel_services.published', 'yes');
		$result = $this->db->get();
		
		foreach ($result->result() as $row){  $data[$row->id] = $row->name; }

		
		return $data;
	}
	
	function getservicesBycategory($id, $limit, $start = 0){
		$query = $this->db->select('fuel_services.name,fuel_services.slug,fuel_services.image,fuel_services.price,fuel_services.id,fuel_services.category_id')
		 		  ->from('fuel_services')
				  ->where('fuel_services.category_id', $id)
                  ->where('fuel_services.published', 'yes')
				  ->order_by("precedence", "asc")
				  ->limit($limit, $start);
		$result = $this->db->get();
		return $result->result();
	}
	function getservicesByids($id, $limit=10, $start = 0){
		$query = $this->db->select('fuel_services.name,fuel_services.slug,fuel_services.image,fuel_services.price,fuel_services.id,fuel_services.category_id')
		 		  ->from('fuel_services')
				  ->where_in('fuel_services.id', $id)
                  ->where('fuel_services.published', 'yes')
				  ->order_by("precedence", "asc")
				  ->limit($limit, $start);
		$result = $this->db->get();
		return $result->result();
	}
	
	function getservice($id){
		$query = $this->db->select('*')
		 		  ->from('fuel_services')
                  ->where('fuel_services.id', $id);
		$result = $this->db->get();
		return $result->row();
	}
	
		function getserviceByslug($slug){ 
		$query = $this->db->select('*')
		 		  ->from('fuel_services')
                  ->where('fuel_services.slug', $slug);
		$result = $this->db->get();
		return $result->row();
	}
	
	
	function row_delete($id = NULL)
	  {
		  $this->db->where('id', $id);
		  $this->db->delete('fuel_services'); 
	  }
	
	
		
}
?>