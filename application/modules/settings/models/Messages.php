<?php
Class Messages extends CI_Model
{
    public function get_list($type='')
    {
        if($type!='')
        {
            CI::db()->where('type', $type);
        }
		CI::db()->where('message_type', 0);
        $res = CI::db()->get('canned_messages');
        return $res->result_array();
    }
    
	public function get_list_send($type='')
    {
        if($type!='')
        {
            CI::db()->where('message_type', $type);
        }
        $res = CI::db()->get('canned_messages');
        return $res->result_array();
    }
	public function get_customers($type='')
    {
        if($type!='')
        {
            //CI::db()->where('message_type', $type);
        }
		CI::db()->where('email !=', '');
		CI::db()->where('id !=', 3);
        $res = CI::db()->select('firstname, lastname, email')->get('customers');
        return $res->result_array();
    }
	
	
	public function send_message($customer, $id){
	
	
	GoCart\Emails::sendmarketingemail($customer, $id);
	
	
	
	}
	
	
    public function get_message($id)
    {
        $res = CI::db()->where('id', $id)->get('canned_messages');
        return $res->row_array();
    }
    
    public function save_message($data)
    {
        if($data['id'])
        {
            CI::db()->where('id', $data['id'])->update('canned_messages', $data);
            return $data['id'];
        }
        else 
        {
            CI::db()->insert('canned_messages', $data);
            return CI::db()->insert_id();
        }
    }
    
    public function delete_message($id)
    {
        CI::db()->where('id', $id)->delete('canned_messages');
        return $id;
    }
}