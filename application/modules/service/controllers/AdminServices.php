<?php namespace GoCart\Controller;
/**
 * AdminCategories Class
 *
 * @package GoCart
 * @subpackage Controllers
 * @category AdminCategories
 * @author Clear Sky Designs
 * @link http://gocartdv.com
 */

class AdminServices extends Admin { 
    
    function __construct()
    { 
        parent::__construct();
        
        \CI::auth()->check_access('Admin', true);
        \CI::load()->model('Service');
    }
    
    function index()
    {

        $data['page_title'] = 'Services';
        $data['services'] 	= \CI::Service()->get_services_tiered(true);
        $this->view('services', $data);
    }

    function service_form($id = false)
    {
        $this->service_id = $id;
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');
        \CI::form_validation()->set_error_delimiters('<div class="error">', '</div>');
       
        $data['page_title'] = 'Custom Services';
        
        //default values are empty if the customer is new
        $data['id'] = '';
        $data['name'] = '';
        $data['price'] = '';
        if ($id)
        { 
            $service = \CI::Service()->find($id);
            //if the category does not exist, redirect them to the category list with an error
            if (!$service)
            {
                \CI::session()->set_flashdata('error', lang('error_not_found'));
                redirect('admin/services');
            }
            //set values to db values
            $data['id'] = $service->service_id;
            $data['name'] = $service->name;
            $data['price'] = $service->price;
        }
        
        \CI::form_validation()->set_rules('name', 'lang:name', 'trim|required|max_length[64]');
               
        
        
        // validate the form
        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('service_form', $data);
        }
        else
        {
            
            $save['service_id'] = $id;
            $save['name'] = \CI::input()->post('name');
            $save['price'] = \CI::input()->post('price');
            $service_id = \CI::Service()->custom_save($save);
            
            \CI::session()->set_flashdata('message', 'Custom Service has ben saved.');
            
            //go back to the category list
            redirect('admin/services');
        }
    }

    function delete($id)
    {       
        $service = \CI::Service()->find($id);
        //if the category does not exist, redirect them to the customer list with an error
        if ($service)
        {
            \CI::Service()->delete($id);
            \CI::session()->set_flashdata('message', 'Service has been deleted.');
        }
        else
        {
            \CI::session()->set_flashdata('error', 'Service not available.');
        }
		redirect('admin/services');
    }
}