<?php namespace GoCart\Controller;
/**
 * Blog Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Blog
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */
 
class Blog extends Front {

    public function index($slug=6) { 
		error_reporting(0);
	
        	//$articles = \CI::Blogs()->blogs($page=0);

			//echo $page; exit;

         \CI::load()->library('pagination');
			$data['rows'] 		= 8;
			


        $config['base_url'] 	= site_url('/articles');
        $config['total_rows'] 	= \CI::Blogs()->blogs($data, true);
		$config['per_page'] 	= $data['rows'];
		$config['uri_segment'] = 2;
		$config['full_tag_open'] = '<ul class="pagination pg-darkgrey flex-center mb-3" style="color:#37474F">';
		$config['full_tag_close'] ='</ul>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link waves-effect waves-effect" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tagl_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tagl_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item disabled">';
		$config['first_tagl_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tagl_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link waves-effect waves-effect');
        $config["num_links"] = 5;
       /* $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';*/

        //$config['next_link'] = 'Show More Articles';
       // $config['next_tag_open'] = '<div class="col-md-6 paginationlink" style="text-align:right;">';
        //$config['next_tag_close'] = '</div>';
		\CI::pagination()->initialize($config);
		$data['page'] 		= $slug;
			$data['articles'] = \CI::Blogs()->blogs($data);
			$data['pagination'] = \CI::pagination()->create_links();

			 $data['populararticles'] 	= \CI::Blogs()->get_popular();
			 $data['categories'] 		= \CI::Blogs()->getAllCategories();
			 $data['taglist'] 			= \CI::Blogs()->getAllTags();
			 $data['top3'] 				= \CI::Blogs()->getTop3();
			 $data['main_articles'] 	= \CI::Blogs()->main_blog_page();
			 
            //create view variable
           	 $data['page_title'] 		= 'Articles';
             $data['meta'] 				= 'Articles';
             $data['seo_title'] 		= 'Articles';
			 
			 $this->customer = \CI::Login()->customer();
			 $data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
			 $data['sidebar'] = $this->partial('blog_sidebar', $data, true);
			
			 $this->partial('/customer/header', $data);
			 $this->partial('blogs', $data);
             $this->partial('/customer/footer', $data);

    }


 public function views($slug) { 
		error_reporting(0);
        $blog = \CI::Blogs()->slug($slug);
		\CI::load()->helper('text');
	//print_r($blog); exit;
        if(!$blog)
        {
            throw_404();
        }
        else
        {
            $blog->images = json_decode($blog->images, true);
            if($blog->images)
            {
                $blog->images = array_values($blog->images);
				
				foreach($blog->images as $img){
					if(isset($img['primary'])){
						$blog->primaryimage = $img; 		
					}
				}
            }
            else
            {
                $blog->images = [];
            }
     				
            //create view variable
            $data['page_title'] = $blog->name;
            $data['meta'] = $blog->meta;
            $data['seo_title'] = (!empty($blog->seo_title))?$blog->seo_title:$blog->name;
            $data['blog'] = $blog;
			$this->customer = \CI::Login()->customer();
			$data['customer'] = (array)\CI::Customers()->get_customer($this->customer->id);
			$data['blog_customer'] = (array)\CI::Customers()->get_customer($blog->customer_id);
			$data['populararticles'] =  \CI::Blogs()->get_popular();
			//$data['recommended'] = \CI::Blogs()->get_related();
			//$data['recents'] =  \CI::Blogs()->get_related();
			//$data['top_reviews'] = \CI::Blogs()->get_related();
			$data['related'] =  \CI::Blogs()->get_related();	
			$data['taglist'] 			= \CI::Blogs()->getAllTags();
			$data['sidebar'] = $this->partial('blog_sidebar', $data, true);
			
			
			$this->partial('/customer/header', $data);
			$this->partial('views', $data);
            $this->partial('/customer/footer', $data);
	
        }
    }
	public function category($slug) { 
		$data['category'] = \CI::Blogs()->getBlogCategoryByslug($slug);
		error_reporting(0);
        if(!$data['category'])
        {
            throw_404();
        }
        else
        {
			 $data['categoryarticles'] =  \CI::Blogs()->getBlogs($data['category']->id);
			 $data['populararticles'] =  \CI::Blogs()->get_related();
			 $data['recommended'] =  \CI::Blogs()->get_related();
			// $data['recents'] =  \CI::Blogs()->get_related();
			// $data['top_reviews'] =  \CI::Blogs()->get_related();
			// $data['related'] =  \CI::Blogs()->get_related();
			 $data['taglist'] 			= \CI::Blogs()->getAllTags();
            //create view variable
            $data['page_title'] 		= $data['category']->name;
            $data['meta'] 				= $data['category']->meta;
            $data['seo_title'] 			= (!empty($data['category']->seo_title))?$data['category']->seo_title:$data['category']->name;
			$this->customer 			= \CI::Login()->customer();
			$data['customer'] 			= (array)\CI::Customers()->get_customer($this->customer->id);
			$data['sidebar'] 			= $this->partial('blog_sidebar', $data, true);
			
			$this->partial('/customer/header', $data);
			$this->partial('category', $data);
            $this->partial('/customer/footer', $data);
		}
    }
	
	
	public function tagsearch($slug) { 
	error_reporting(0);
			 $data['blogs'] 			= \CI::Blogs()->getBlogBytag($slug, 10, 0);
			 $data['populararticles'] 	= \CI::Blogs()->get_related();
			// $data['recommended'] 		=  \CI::Blogs()->get_related();
			// $data['recents'] 			= \CI::Blogs()->get_related();
			// $data['top_reviews'] 		= \CI::Blogs()->get_related();
			// $data['related'] 			=  \CI::Blogs()->get_related();
			 $data['taglist'] 			= \CI::Blogs()->getAllTags();
            $data['page_title'] 		= $slug;
            $data['meta'] 				= $slug;
            $data['seo_title'] 			= $slug;
			$this->customer 			= \CI::Login()->customer();
			$data['customer'] 			= (array)\CI::Customers()->get_customer($this->customer->id);
			$data['sidebar'] 			= $this->partial('blog_sidebar', $data, true);
			
	
			
			$this->partial('/customer/header', $data);
			$this->partial('tagsearch', $data);
            $this->partial('/customer/footer', $data);

    }
	
	
	public function insertcomment() { 
			error_reporting(0);
			$data['blog_id'] 		= \CI::input()->post('blog_id');
			$data['customer_id'] 	= \CI::input()->post('customer_id');
			$data['comment'] 		= \CI::input()->post('comment');
			$data['comment_date'] 	= date('Y-m-d h:i');
		
			\CI::Blogs()->save_comment($data);	
			exit('success');	
	}
	public function getcomments($blog_id = NULL) {  
			$data['comments'] = \CI::Blogs()->get_comments($blog_id);
			$data['comments_count'] = \CI::Blogs()->get_comments_count($blog_id);
			$this->partial('comments', $data);
	}
	

}

