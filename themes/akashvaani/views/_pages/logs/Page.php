<?php namespace GoCart\Controller;
/**
 * Page Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Page
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Page extends Front{

 public function __construct()
    {
        parent::__construct();

       		 \CI::load()->model(array('Customers'));
			 $this->customer = \CI::Login()->customer();
			 \CI::load()->library('user_agent');
    }
	
    public function homepage()
    {
        //do we have a homepage view?
        if(file_exists(FCPATH.'themes/'.config_item('theme').'/views/homepage.php'))
        {
			
            //echo $data;
                        $data['customer'] 			= (array)\CI::Customers()->get_customer($this->customer->id);
			$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
			$data['device'] = (\CI::agent()->is_mobile()) ? 'mobile' : 'window';
			$this->partial('homeheader', $data);
			$this->partial('homepage', $data);
			$this->partial('astrologyfooter', $data);
            return;
        }
        else
        {
            //if we don't have a homepage view, check for a registered homepage
            if(config_item('homepage'))
            {
                if(isset($this->pages['all'][config_item('homepage')]))
                {
                    //we have a registered homepage and it's active
                    $this->index($this->pages['all'][config_item('homepage')]->slug, false);
                    return;
                }
            }
        }

        // wow, we do not have a registered homepage and we do not have a homepage.php
        // let's give them something default to look at.
        $this->view('homepage_fallback');
    }

    public function show404()
    {
        //$this->view('404');
			$this->partial('defaultheader', $data);
			$this->partial('_statics/404', $data);
			$this->partial('astrologyfooter', $data);
    }

    public function index($slug=false, $show_title=true)
    {
        \CI::load()->helper('my_date_helper');
		$page = false;
		//$slug = trim($slug, '.htm');
error_reporting(0);

        //this means there's a slug, lets see what's going on.
        foreach($this->pages['all'] as $p)
        {
            if($p->slug == $slug)
            {
                $page = $p;
                continue;
            }
        }

        if(!$page)
        {
            throw_404();
        }
        else
        {
            //create view variable
            $data['page_title'] = false;
            if($show_title)
            {
                $data['page_title'] = $page->title;
            }
            $data['meta'] 		= $page->meta;
            $data['seo_title'] 	= (!empty($page->seo_title))?$page->seo_title:$page->title;
            $data['page'] 		= $page;
			$data['current_customer'] = \CI::Customers()->get_customer($this->customer->id);
		
			switch($slug){
					case 'puja':
					$header = 'pujaheader';
					$filename = '_catgeory/'.$slug;
					$footer = 'astrologyfooter';
					break;
					
					case 'astrology':
					$header = 'astrologyheader';
					$filename = '_catgeory/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					
					case 'astrologer':
					$header = 'astrologerheader';
					$filename = '_pages/'.$slug;
					$data['services'] = \CI::Service()->get_services(8); 
					$footer = 'astrologyfooter';
					
					break;
					
					case 'book-pandit':
					$header = 'astrologerheader';
					$filename = '_pages/'.$slug;
					$data['services'] = \CI::Service()->get_All_service(); 
					$footer = 'astrologyfooter';
					break;
					
					case 'marriage-kundali-matching':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					
					case 'online-marriage-prediction':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['posts'] 		 = \CI::Blogs()->get_selected_blog(array(14, 8));
					
		
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					
					case 'manglik-dosha-solution':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					
					break;
					
					case 'child-pregnancy':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					
					case 'love-marriage-relationships':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					case 'medical-and-health':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
					case 'online-career-and-job':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', '', true);
					break;
									
					case 'vastu-shastra':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					break;
					case 'online-numerology':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					break;
					case 'online-palmistry-reading':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					break;
					case 'online-tarot-reading':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					break;
					
					case 'questions':
					 //\CI::Login()->isLoggedIn(true, '/register');
					
					$header = 'defaultheader';
					$data['questions'] = \CI::Service()->get_questions(); 
					$filename = '_pages/'.$slug;
					$footer = 'customer/footer';
					$data['invidual_form'] = $this->partial('_blocks/individual', $data, true);
					$data['couple'] = $this->partial('_blocks/couple', '', true);
					break;
					case 'full-consultation':
					 //\CI::Login()->isLoggedIn(true, '/register');
					
					$header = 'defaultheader';
					$data['questions'] = \CI::Service()->get_questions(); 
					$filename = '_statics/'.$slug;
					$footer = 'astrologyfooter';
					$data['invidual_form'] = $this->partial('_blocks/individual', $data, true);
					$data['couple'] = $this->partial('_blocks/couple', '', true);
					break;
					case 'success':			
					//$orderid = 7442;
					 //$informations['tracking_id'] = 10000;
					 //$informations['amount'] = 100;
					//\CI::Service()->update_question($orderid, $informations);
					//exit;
					
					if($_REQUEST['encResp']):
					$rcvdString = \CI::Service()->decrypt($_REQUEST['encResp'],WORKING_KEY);
					$decryptValues=explode('&', $rcvdString);
					$dataSize=sizeof($decryptValues);
				   for($i = 0; $i < $dataSize; $i++) 
						{
							list($key, $value) = explode('=',$decryptValues[$i]);
							$informations[$key]=$value; 		   
						}
					$orderid = $informations['order_id'];				
					\CI::Service()->logit($orderid, $informations);
					$data['message'] = '<p>Error. Your payment is not successful.</p><p>It might be because of wrong information of Name, email, phone number. <br>Please check your information and try again.</p> <span style="font-size:12px; color:red;">'.$informations['status_message'].'</span>';
					
		
					if($informations['order_status'] == 'Success'){
					\CI::Service()->update_question($orderid, $informations);
					\CI::Service()->sendPaymentNotification($orderid);	
					$data['message'] = $informations['status_message'];
					}		
					
					$data['payment'] = $informations;
					else:
					redirect('/');
					endif;
					
					
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'customer/footer';
					break;
					
					case 'consult-online':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'customer/footer';
					break;
					case 'login':
					$header = 'none';
					$filename = $slug;
					$footer = 'none';
					break;
					
					case 'vastu-consultant-in-gurgaon':
					$data['services'] 		= \CI::Service()->get_All_service();
					$header = 'pagesheader';
					$filename = '_seo/'.$slug;
					$footer = 'customer/footer';
					break;
							
					case 'numerology-consultants-in-gurgaon':
					$data['services'] 		= \CI::Service()->get_All_service();
					$header = 'pagesheader';
					$filename = '_seo/'.$slug;
					$footer = 'customer/footer';
					break;
						
					case 'tarot-card-reader-in-gurgaon':
					$data['services'] 		= \CI::Service()->get_All_service();
					$header = 'pagesheader';
					$filename = '_seo/'.$slug;
					$footer = 'customer/footer';
					break;
					
					case 'palmistry-reader-in-gurgaon':
					$data['services'] 		= \CI::Service()->get_All_service();
					$header = 'pagesheader';
					$filename = '_seo/'.$slug;
					$footer = 'customer/footer';
					break;	
					case 'astrologer-in-gurgaon':
					
					$data['services'] 		= \CI::Service()->get_services(8);
					$header = 'pagesheader';
					$filename = '_seo/'.$slug;
					$footer = 'customer/footer';
					break;	
					
					case 'create_payment_link':
					$data['services'] 		= \CI::Service()->get_custom_services();
					$header = 'defaultheader';
					$filename = '_statics/'.$slug;
					$footer = 'customer/footer';
					break;
					
					
					case 'report':
					$data['language'] = ($_REQUEST['lg'])?$_REQUEST['lg']:'en';
					$data['type'] = ($_REQUEST['type'])?$_REQUEST['type']:'story_of_life_basic_report';
					$data['invidual_form'] = $this->partial('_blocks/individual', $data, true);
					$header = 'reportheader';
					$filename = '_statics/'.$slug;
					$footer = 'reportfooter';
					break;
					
					case 'gems':
					$header = 'productheader';
					$filename = '_pages/'.$slug;
					$footer = 'productfooter';
					break;
					
					case 'full-reports':
					$header = 'reportheader';
					$filename = '_statics/'.$slug;
					$footer = 'reportfooter';
					break;
					case 'horoscope':
					$header = 'horoscopeheader';
					$filename = '_statics/'.$slug;
					$footer = 'productfooter';
					break;
					
					case 'horoscopes':
					$header = 'horoscopeheader';
					$filename = '_statics/'.$slug;
					$footer = 'productfooter';
					break;
					case 'lovecopatibility':
					$header = 'horoscopeheader';
					$filename = '_statics/'.$slug;
					$footer = 'productfooter';
					break;
					case 'lovecopatibility-result':
					$header = 'horoscopeheader';
					$filename = '_statics/'.$slug;
					$footer = 'productfooter';
					break;
					
					case 'products':
					$header = 'productheader';
					$filename = '_statics/'.$slug;
					$footer = 'productfooter';
					break;
					
					default:
					$header = 'defaultheader';
					$filename = '_statics/'.$slug;
					$footer = 'astrologyfooter';
			}
			
			//echo $filename;
			if(!file_exists(FCPATH."/themes/akashvaani/views/".$filename.".php")){
					$data['services'] 		= \CI::Service()->get_services(8);
					$data['page']           = \CI::Pages()->slug($slug);
	     			$header 				= 'pagesheader';
					$filename 				= '_statics/marketingpage';
					$footer 				= 'customer/footer';
			}
			
			
							//exit($header);
			
			$data['device'] = (\CI::agent()->is_mobile()) ? 'mobile' : 'window';
			$this->partial($header, $data);
			$this->partial($filename, $data);
			$this->partial($footer, $data);
            //$this->view($slug, $data);
        }
    }

    public function api($slug)
    {
        \CI::load()->language('page');

        $page = $this->Page_model->slug($slug);

        if(!$page)
        {
            $json = json_encode(['error'=>lang('error_page_not_found')]);
        }
        else
        {
            $json = json_encode($page);
        }

        $this->view('json', ['json'=>json_encode($json)]);
    }
	
	
	
	
	
}

/* End of file Page.php */
/* Location: ./GoCart/controllers/Page.php */