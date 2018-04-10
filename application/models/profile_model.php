<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
Author: Dharam Pardhi
Date: 9/18/12
Version: 1.0
*/
class Profile_model extends CI_Model{
	
	var $table = "fuel_profiles";
	public $foreign_keys = array('users_id' => array(FUEL_FOLDER => 'fuel_users_model'), 'profiles_type' => array(GROUP_ACCESS_FOLDER=> 'groups_model')); 

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
	
	
		function getprofile($id){
		$query = $this->db->select('fuel_profiles.*, fuel_users.id as userid, module_groups.id as groupid, module_groups.name')
                  ->from('fuel_profiles')
                  ->join('fuel_users', 'fuel_users.id = fuel_profiles.users_id')
				  ->join('module_groups', 'module_groups.id = fuel_profiles.profiles_type')
                  ->where('fuel_profiles.id', $id);
		$result = $this->db->get();
		return $result->row();
	}
	
	
	function getprofileByuserId($id){
		$query = $this->db->select('fuel_profiles.*, fuel_users.id as userid, module_groups.id as groupid, module_groups.name')
                  ->from('fuel_profiles')
                  ->join('fuel_users', 'fuel_users.id = fuel_profiles.users_id')
				  ->join('module_groups', 'module_groups.id = fuel_profiles.profiles_type')
                  ->where('fuel_profiles.users_id', $id);
		$result = $this->db->get();
		return $result->row();
	}
	
	function getprofileIdByuserId($id){
		$query = $this->db->select('fuel_profiles.id')
                  ->from('fuel_profiles')
                  ->where('fuel_profiles.users_id', $id);
		$result = $this->db->get();
		return $result->row()->id;
	}
	
	
	function booking($data)
		{
		$str = $this->db->insert_string('module_bookings', $data);
		$query = $this->db->query($str);
		return $this->db->insert_id();
		}
	
    function getprofiles($ids){
		$query = $this->db->select('fuel_profiles.*, fuel_users.id as userid, module_groups.id as groupid, module_groups.name')
                  ->from('fuel_profiles')
                  ->join('fuel_users', 'fuel_users.id = fuel_profiles.users_id')
				  ->join('module_groups', 'module_groups.id = fuel_profiles.profiles_type')
                  ->where_in('fuel_profiles.id',$ids);
		$result = $this->db->get();
		return $result->result_array();
	}
    
    

    
	
	
	public function profilesRequest($start_row, $limit, $count = false) {
	
if($count){
	$this->db->select('fuel_profiles.*, fuel_users.id as userid, module_groups.id as groupid, module_groups.name')
                  ->from('fuel_profiles')
                  ->join('fuel_users', 'fuel_users.id = fuel_profiles.users_id')
				  ->join('module_groups', 'module_groups.id = fuel_profiles.profiles_type')
				  ->limit($limit, $start)
                  ->where('fuel_profiles.active','yes');
				  $result = $this->db->get();
				  
	return $result->num_rows();
}
else{
   // $query = $this->db->order_by('id', 'DESC')->get_where('module_questions', array('profiles_id' => $profiles_id), $limit, $start_row);
	$this->db->limit($limit, $start_row);
	$this->db->select('fuel_profiles.*, fuel_users.id as userid, module_groups.id as groupid, module_groups.name')
                  ->from('fuel_profiles')
                  ->join('fuel_users', 'fuel_users.id = fuel_profiles.users_id')
				  ->join('module_groups', 'module_groups.id = fuel_profiles.profiles_type')
				  ->limit($limit, $start)
                  ->where('fuel_profiles.active','yes');
				  
			$result = $this->db->get();

    return $result->result();
	}
}
	
	
	
	
	function delete(){
		
	}
	
	
	
		
}
?>