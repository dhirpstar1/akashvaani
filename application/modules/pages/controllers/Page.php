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
	
		public function set_regon($slug = 'IN')
	    {
	    	\CI::session()->set_userdata(array(
	                    'country_code'  => $slug
	                ));       
	            redirect('/');
	    }
    public function homepage()
    {
        //do we have a homepage view?
        if(file_exists(FCPATH.'themes/'.config_item('theme').'/views/homepage.php'))
        {
			$data['customer'] 			= (array)\CI::Customers()->get_customer($this->customer->id);
										$data['like_questions'][] = 'How will be our life after marriage?';
                                        $data['like_questions'][] = 'What are my future health problems?';
                                        $data['like_questions'][] = 'Which is best suitable career choice for me?';
                                        $data['like_questions'][] = 'Should I go for Business or Job?';
                                        $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code') : 'IN';
										$data['device'] 			= (\CI::agent()->is_mobile()) ? 'mobile' : 'window';
										$data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
											$data['hide_stroy_section'] = true;
											$data['hide_askquestion_section'] = true;
										$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
			
//print_r($data['cccode']); exit;

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
			$data['device'] 			= (\CI::agent()->is_mobile()) ? 'mobile' : 'window';
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
					$data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', $data, true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
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
                                        $data['page_name']        = 'kundali';   
                                        $data['like_questions'][] = 'How will be our marital Harmony after marriage?';
                                        $data['like_questions'][] = 'How will be our Longevity of marriage?';
                                        $data['like_questions'][] = 'How will be our life after marriage?';
                                        $data['like_questions'][] = 'How will be our marriage compatibility?';
                                        $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';
					$data['serviceForm'] 			= $this->partial('_blocks/serviceform', '', true);
					$data['hide_kundali_section'] 	= true;
					$data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
					$data['get_report_section'] 	= $this->partial('_blocks/get_report', $data, true);
					$data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);	
					break;
					
					case 'online-marriage-prediction':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					//$data['posts'] 		 = \CI::Blogs()->get_selected_blog(array(14, 8));
					$data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);	
                                        $data['page_name']        = 'marriage';   
                                        $data['like_questions'][] = 'When will I get married?';
                                        $data['like_questions'][] = 'Why is my marriage getting delayed?';
                                        $data['like_questions'][] = 'Will I have a love marriage or an arranged marriage?';
                                        $data['like_questions'][] = 'Long time in Love, Shall I go for Marriage?';
                                        $data['like_questions'][] = ' Is He/She having an extra-marital affair?';
                                                                               
                    $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';                    
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					$data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					break;
					
					case 'manglik-dosha-solution':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['page_name']        = 'Manglik Dosha';  
					$data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';
					$data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);	
					$data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
					$data['serviceForm'] = $this->partial('_blocks/serviceform', $data, true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					
					break;
					
					case 'child-pregnancy':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
				    $data['page_name']        = 'Child and Pregnancy';   

                    $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';                    
                    $data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);
                    $data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;	
                    $data['hide_kundali_section'] 	= true;
					$data['serviceForm'] = $this->partial('_blocks/serviceform', $data, true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					break;
					
					case 'love-marriage-relationships':
					$header = 'defaultheader';
					 $data['page_name']        = 'Love Marriage Relationships';   
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['page_name']       		 			  = 'love';
					$data['articles']							  = \CI::Blogs()->get_articles_by_slug($slug);	   
					$data['cccode'] 		  					  = (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code') : 'IN';
					$data['question_parent']      				  = explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
					                    $data['slider_1_alt'] 	  = 'Love Marriage Astrology';
										$data['slider_2_alt'] 	  = 'Love & Arranged Marriage Astrology';
										$data['slider_3_alt'] 	  = 'Love and Relationship Astrology';
										$data['slider_4_alt'] 	  = 'Love and Relationship Astrology';
										$data['slider_5_alt'] 	  = 'Love and Relationship Astrology"';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', $data, true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					break;
					case 'medical-and-health':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
                                       $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code') : 'IN'; 
                                        $data['page_name']        = 'health';   
                                        $data['like_questions'][] = 'What are my future health problems?';
                                        $data['like_questions'][] = 'Why am I facing sudden health issues?';
                                        $data['like_questions'][] = 'Upcoming health risks? Is there any accident in future?';
                                        $data['like_questions'][] = 'Remedies for my health problems ?';
  
                     $data['ctype'] 		  	=  3; 
                     $data['hide_kundali_section'] 	= true;
                     $data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(3)->description) ;
                     $data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);                   	
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					
					break;

					case 'online-career-and-job':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['articles']				= \CI::Blogs()->get_articles_by_slug($slug);
                                        
                     $data['page_name']        = 'career';   
                     $data['like_questions'][] = 'Which is best suitable career choice for me?';
                     $data['like_questions'][] = 'Should I go for Business or Job?';
                     $data['like_questions'][] = 'I am working hard but getting no result? Why my efforts going in vain?';
                     $data['like_questions'][] = 'I am struggling with the Job. Is it the right time to Change the Job?';
                     $data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code') : 'IN'; 
                     $data['ctype'] 		  	=  2;
                     $data['question_parent']      = explode('<br>', \CI::Service()->get_question_parent(2)->description) ;
                     $data['hide_kundali_section'] 	= true;
					$data['serviceForm'] 		= $this->partial('_blocks/serviceform', '', true);
					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
					break;
									
					case 'vastu-shastra':
					$header = 'defaultheader';
					$filename = '_pages/'.$slug;
					$footer = 'astrologyfooter';
					$data['serviceForm'] = $this->partial('_blocks/serviceform', '', true);
					break;
					
					case 'match-making-report':

					$data['cccode'] 		  = (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';
					$header 				  = 'defaultheader';
					$filename 				  = '_statics/'.$slug;
					$footer 				  = 'astrologyfooter';
					
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
					$data['type']           	= $_REQUEST['type']; 
                    $data['report_type']    	= $_REQUEST['report']; 
                    $data['ctype']       		= $_REQUEST['ctype'];
                    $data['selected_heading']   = $_REQUEST['selected_heading'];
                    $data['questions_selected'] = $_REQUEST['questions'];
					$header = 'defaultheader';
					$data['questions']      = \CI::Service()->get_questions();
					
					if($data['report_type'] == 3){
						$data['questions_category']      = \CI::Service()->get_questions_category(1);
					}else{
						
						$data['questions_category']      = \CI::Service()->get_questions_category($data['ctype']);
					}


					//$data['questions']      = \CI::Service()->get_questions(); 
                    
					$filename               = '_pages/'.$slug;
					$footer                 = 'customer/footer';
                                        
					$data['invidual_form']  = $this->partial('_blocks/individual', $data, true);
					$data['couple']         = $this->partial('_blocks/couple', '', true);
					break;




							case 'askquestions':
					$data['type']           = $_REQUEST['type']; 
                                        $data['report_type']    = $_REQUEST['report']; 
                                        $data['ctype']       = $_REQUEST['ctype']; 
					$header = 'iframeheader';
					$data['questions']      = \CI::Service()->get_questions();
					
					if($data['report_type'] == 3){
						$data['questions_category']      = \CI::Service()->get_questions_category(1);
					}else{
						
						$data['questions_category']      = \CI::Service()->get_questions_category($data['ctype']);
					}

					//$data['questions']      = \CI::Service()->get_questions(); 
                    
					$filename               = '_pages/'.$slug;
					$footer                 = 'iframefooter';
                                        
					$data['invidual_form']  = $this->partial('_blocks/individual', $data, true);
					$data['couple']         = $this->partial('_blocks/couple', '', true);
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
					

					case 'astrology-prediction-2018':
					$header = 'defaultheader';
					$filename = '_statics/'.$slug;
					$footer = 'astrologyfooter';
                    $data['cccode'] 		  		= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code') : 'IN';         
					$data['serviceForm'] 			= $this->partial('_blocks/serviceform', '', true);
					$data['hide_stroy_section'] 	= true;


					$data['question_parent']    	= explode('<br>', \CI::Service()->get_question_parent(1)->description) ;
					$data['question_parent2']    	= explode('<br>', \CI::Service()->get_question_parent(2)->description) ;
					$data['question_parent3']    	= explode('<br>', \CI::Service()->get_question_parent(3)->description) ;

					 array_push($data['question_parent'],$data['question_parent2'][0],$data['question_parent3'][0]);


					$keys = array('merrage', 'maried', 'career', 'health'); 	


					$data['question_parent'] = array_combine($keys , $data['question_parent']);			

					$data['get_report_section'] = $this->partial('_blocks/get_report', $data, true);
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
			$data['cccode'] 		  	= (\CI::session()->userdata('country_code')) ? \CI::session()->userdata('country_code'):'IN';
			
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
	
	 public function send_reminder($type)
	    {
	  	    \CI::load()->model(array('Settings'));
	        \CI::Settings()->send_reminder($type);
	        exit;
	    }
	
}

/* End of file Page.php */
/* Location: ./GoCart/controllers/Page.php */