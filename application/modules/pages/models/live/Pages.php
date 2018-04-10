<?php
Class Pages extends CI_Model
{

    var $tiered;

    function __construct()
    {
        parent::__construct();
        $this->tiered = [];
        $this->get_pages_tiered();
		$this->smsuserid 	= 'anil21';
		$this->smspassword 	= '16609';
		$this->smssenderid 	= 'AKSVNI';
    }
	
	
	function send_sms($number, $message)
	{
		//$arraydata['username'] 	=  $this->smsuserid;
		$arraydata['password'] 	=  $this->smspassword;
		$arraydata['sender'] 	=  $this->smssenderid;
		$arraydata['to'] 		=  $number;
		$arraydata['message'] 	=  str_replace(' ', '+', $message);
		$arraydata['priority'] 	=  1;
		$arraydata['dnd'] 		=  1;
		$arraydata['unicode'] 	=  0;
		$parameter = 'username='.$this->smsuserid;
		foreach($arraydata as $key => $val){
		$parameter .= '&'.$key.'='.$val; }	
	$url = 'http://www.kit19.com/ComposeSMS.aspx?'.$parameter;
	$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $response = curl_exec($ch);
	return $response;
	
	}
	
	
	   function update_save_articles($data, $id){
        CI::db()->where('page_id', $id);
        CI::db()->delete('pages_articles');
        CI::db()->insert_batch('pages_articles', $data);
        return true;
    }
    /********************************************************************
    Page functions
     ********************************************************************/
    function get_pages($parent = 0)
    {
        CI::db()->order_by('sequence', 'ASC');
        CI::db()->where('parent_id', $parent);
        $result = CI::db()->get('pages')->result();

        $return = [];
        foreach($result as $page)
        {

            // Set a class to active, so we can highlight our current page
            if($this->uri->segment(1) == $page->slug) {
                $page->active = true;
            } else {
                $page->active = false;
            }

            $return[$page->id]              = $page;
            $return[$page->id]->children    = $this->get_pages($page->id);
        }

        return $return;
    }

    function get_pages_tiered()
    {
        if(!empty($this->tiered))
        {
            return $this->tiered;
        }

        CI::db()->order_by('sequence');
        CI::db()->order_by('title', 'ASC');
        $pages = CI::db()->get('pages')->result();

        $results    = [];
        $results['all'] = [];
        foreach($pages as $page) {

            // Set a class to active, so we can highlight our current page
            if($this->uri->segment(2) == $page->slug && $this->uri->segment(1) == 'page') {
                $page->active = true;
            } else {
                $page->active = false;
            }
            $results['all'][$page->id] = $page;
            $results[$page->parent_id][$page->id] = $page;
        }
        
        $this->tiered = $results;

        return $results;
    }

    function find($id)
    {
      return CI::db()->where('id', $id)->get('pages')->row();    
    }
    
    function slug($slug)
    {
      return  CI::db()->where('slug', $slug)->get('pages')->row();
    }

    function get_slug($id)
    {
        $page = $this->get_page($id);
        if($page)
        {
            return $page->slug;
        }
    }

    function save($data)
    {
        if($data['id'])
        {
            CI::db()->where('id', $data['id']);
            CI::db()->update('pages', $data);
            return $data['id'];
        }
        else
        {
            CI::db()->insert('pages', $data);
            return CI::db()->insert_id();
        }
    }

    function delete_page($id)
    {
        //delete the page
        CI::db()->where('id', $id);
        CI::db()->delete('pages');

    }    

    function validate_slug($slug, $id=false, $counter=false)
    {
        CI::db()->select('slug');
        CI::db()->from('pages');
        CI::db()->where('slug', $slug.$counter);
        if ($id)
        {
            CI::db()->where('id !=', $id);
        }
        $count = CI::db()->count_all_results();

        if ($count > 0)
        {
            if(!$counter)
            {
                $counter    = 1;
            }
            else
            {
                $counter++;
            }
            return $this->validate_slug($slug, $id, $counter);
        }
        else
        {
             return $slug.$counter;
        }
    }
}