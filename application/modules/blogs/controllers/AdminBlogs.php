<?php namespace GoCart\Controller; 
/**
 * AdminBlogs Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    AdminBlogs
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class AdminBlogs extends Admin {

    public function __construct()
    {
        parent::__construct();
        \CI::auth()->check_access('Admin', true);
 		\CI::load()->model(['Blogs', 'Blog_categories']);     
        \CI::load()->helper('form');
        \CI::lang()->load('blogs');
    }

    public function index($rows=100, $order_by="name", $sort_order="ASC", $code=0, $page=0)
    {
        $data['groups'] = \CI::Customers()->get_groups();
		$data['page_title'] = lang('blogs');
        $data['code'] = $code;
        $term = false;

        //get the category list for the drop menu
        $data['blog_categories'] = \CI::Blog_categories()->getBlog_categoryOptionsMenu();

        $post = \CI::input()->post(null, false);
        \CI::load()->model('Search');
        if($post)
        {
            $term = json_encode($post);
            $code = \CI::Search()->recordTerm($term);
            $data['code'] = $code;
        }
        elseif ($code)
        {
            $term = \CI::Search()->getTerm($code);
        }

        //store the search term
        $data['term'] = $term;
        $data['order_by'] = $order_by;
        $data['sort_order'] = $sort_order;
        $data['rows'] = $rows;
        $data['page'] = $page;

        $data['blogs'] = \CI::Blogs()->blogs(array('term'=>$term, 'order_by'=>$order_by, 'sort_order'=>$sort_order, 'rows'=>$rows, 'page'=>$page));

        //total number of blogs
        $data['total'] = \CI::Blogs()->blogs(array('term'=>$term, 'order_by'=>$order_by, 'sort_order'=>$sort_order), true);


        \CI::load()->library('pagination');

        $config['base_url'] = site_url('admin/blogs/'.$rows.'/'.$order_by.'/'.$sort_order.'/'.$code.'/');
        $config['total_rows'] = $data['total'];
        $config['per_page'] = $rows;
        $config['uri_segment'] = 7;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        \CI::pagination()->initialize($config);

        $this->view('blogs', $data);
    }

    //basic category search
    public function blog_autocomplete()
    {
        $name = trim(\CI::input()->post('name'));
        $limit = \CI::input()->post('limit');

        if(empty($name))
        {
            echo json_encode([]);
        }
        else
        {
            $results = \CI::Blogs()->blog_autocomplete($name, $limit);

            $return = [];

            foreach($results as $r)
            {
                $return[$r->id] = $r->name;
            }
            echo json_encode($return);
        }

    }

    public function bulk_save()
    {
        $blogs = \CI::input()->post('blog');

        if(!$blogs)
        {
            \CI::session()->set_flashdata('error', lang('error_bulk_no_blogs'));
            redirect('admin/blogs');
        }

        foreach($blogs as $id=>$blog)
        {
            $blog['id'] = $id;
            \CI::Blogs()->save($blog);
        }

        \CI::session()->set_flashdata('message', lang('message_bulk_update'));
        redirect('admin/blogs');
    }

    public function form($id = false, $duplicate = false)
    {
        $this->blog_id = $id;
        \CI::load()->library('form_validation');
        \CI::load()->model(array('Blog_categories', 'Customers'));
        \CI::form_validation()->set_error_delimiters('<div class="error">', '</div>');

        $data['groups'] = \CI::Customers()->get_groups();
        $data['categories'] = \CI::Blog_categories()->get_categories_tiered();
		$data['customers'] = \CI::Customers()->get_customers_list();
        $data['page_title'] = lang('blog_form');
        //default values are empty if the blog is new
        $data['id'] = '';
        $data['customer_id'] = '';
        $data['primary_category'] = '';
        $data['name'] = '';
        $data['slug'] = '';
        $data['description'] = '';
        $data['excerpt'] = '';
        $data['seo_title'] = '';
        $data['meta'] = '';
        $data['status'] = '';
        $data['blog_categories'] = [];
        $data['images'] = [];
		$data['tags'] = '';
        //create the photos array for later use
        $data['photos'] = [];

        if ($id)
        {
            // get the existing file associations and create a format we can read from the form to set the checkboxes
           
            $blog = \CI::Blogs()->find($id, true);
					
					
					
            //if the blog does not exist, redirect them to the blog list with an error
            if (!$blog)
            {
                \CI::session()->set_flashdata('error', lang('error_not_found'));
                redirect('admin/blogs');
            }

            //helps us with the slug generation
            $this->blog_name = \CI::input()->post('slug', $blog->slug);

            //set values to db values
            $data['id'] = $id;
            
            $data['primary_category'] = $blog->primary_category;
            $data['name'] = $blog->name;
            $data['seo_title'] = $blog->seo_title;
            $data['meta'] = $blog->meta;
            $data['slug'] = $blog->slug;
            $data['description'] = $blog->description;
            $data['excerpt'] = $blog->excerpt;
			$data['status'] = $blog->status;
			$data['customer_id'] = $blog->customer_id;
			
			$tags = \CI::Blogs()->getPostTags($id);
			if($tags){foreach($tags as $tag){	$posttags[] = $tag->name;}
			$data['tags'] = implode(',', $posttags);
			}

           // $data['tags'] = $blog->tags;

            //make sure we haven't submitted the form yet before we pull in the images/related blogs from the database
            if(!\CI::input()->post('submit'))
            {

                $data['blog_categories'] = [];
                foreach($blog->categories as $blog_category)
                {
                    $data['blog_categories'][] = $blog_category->id;
                }

                $data['images'] = (array)json_decode($blog->images);
            }
        }

        
        if(!is_array($data['blog_categories']))
        {
            $data['blog_categories'] = [];
        }

        //no error checking on these
        \CI::form_validation()->set_rules('caption', 'Caption');
        \CI::form_validation()->set_rules('primary_photo', 'Primary');
        \CI::form_validation()->set_rules('seo_title', 'lang:seo_title', 'trim');
        \CI::form_validation()->set_rules('meta', 'lang:meta_data', 'trim');
        \CI::form_validation()->set_rules('name', 'lang:name', 'trim|required|max_length[512]');
        \CI::form_validation()->set_rules('slug', 'lang:slug', 'trim');
        \CI::form_validation()->set_rules('description', 'lang:description', 'trim');
        \CI::form_validation()->set_rules('excerpt', 'lang:excerpt', 'trim');
      

      
        if(\CI::input()->post('submit'))
        {
            //$data['related_blogs'] = \CI::input()->post('related_blogs');
            $data['blog_categories'] = \CI::input()->post('blog_categories');
            $data['images'] = \CI::input()->post('images');
        }

        if (\CI::form_validation()->run() == FALSE)
        {
            $this->view('blog_form', $data);
        }
        else
        {
            \CI::load()->helper('text');

            //first check the slug field
            $slug = \CI::input()->post('slug');

            //if it's empty assign the name field
            if(empty($slug) || $slug=='')
            {
                $slug = \CI::input()->post('name');
            }

            $slug = url_title(convert_accented_characters($slug), '-', TRUE);

            //validate the slug
            $slug = ($id) ? \CI::Blogs()->validate_slug($slug, $blog->id) : \CI::Blogs()->validate_slug($slug);


            $save['id'] = $id;
           // $save['sku'] = \CI::input()->post('sku');
            $save['name'] = \CI::input()->post('name');
			$save['customer_id'] = \CI::input()->post('customer_id');
            $save['seo_title'] = \CI::input()->post('seo_title');
            $save['meta'] = \CI::input()->post('meta');
            $save['description'] = \CI::input()->post('description');
            $save['excerpt'] = \CI::input()->post('excerpt');
            $save['status'] = \CI::input()->post('status');  
			$tags = \CI::input()->post('tags');  
			
			if($tags){
				$tags = explode(',', $tags);	
			}
            $post_images = \CI::input()->post('images');

            $save['slug'] = $slug;


            if($primary = \CI::input()->post('primary_image'))
            {
                if($post_images)
                {
                    foreach($post_images as $key => &$pi)
                    {
                        if($primary == $key)
                        {
                            $pi['primary']  = true;
                            continue;
                        }
                    }
                }

            }

            $save['images'] = json_encode($post_images);

            //save categories
            $categories = \CI::input()->post('blog_categories');
            if(!$categories)
            {
                $categories = [];
            }

             //(\CI::input()->post('primary_category')) ? \CI::input()->post('primary_category') : 0;
            if(!\CI::input()->post('primary_category') && $categories)
            {
                $save['primary_category'] = $categories[0];
            }
            elseif(!\CI::input()->post('primary_category') && !$categories)
            {
                $save['primary_category'] = 0;
            }
            else
            {
                $save['primary_category'] = \CI::input()->post('primary_category');
            }


            // save blog
            $blog_id = \CI::Blogs()->save($save, $options= array(), $categories, $tags);

          

            \CI::session()->set_flashdata('message', lang('message_saved_blog'));

            //go back to the blog list
            redirect('admin/blogs');
        }
		
		
		
    }

   


    public function blog_image_form()
    {
        $data['file_name'] = false;
        $data['error']  = false;
        $this->partial('iframe/blog_image_uploader', $data);
    }

    public function blog_image_upload()
    {
        $data['file_name'] = false;
        $data['error']  = false;

        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']   = config_item('size_limit');
        $config['upload_path'] = 'uploads/images/full';
        $config['encrypt_name'] = true;
        $config['remove_spaces'] = true;

        \CI::load()->library('upload', $config);

        if ( \CI::upload()->do_upload())
        {
            $upload_data    = \CI::upload()->data();

            \CI::load()->library('image_lib');

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/full/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 600;
            $config['height'] = 500;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            //small image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/medium/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 235;
            $config['height'] = 235;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'uploads/images/small/'.$upload_data['file_name'];
            $config['new_image'] = 'uploads/images/thumbnails/'.$upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            \CI::image_lib()->initialize($config);
            \CI::image_lib()->resize();
            \CI::image_lib()->clear();

            $data['file_name'] = $upload_data['file_name'];
        }

        if(\CI::upload()->display_errors() != '')
        {
            $data['error'] = \CI::upload()->display_errors();
        }
        $this->partial('iframe/blog_image_uploader', $data);
    }

    public function delete($id = false) 
    {
        if ($id)
        {
            $blog = \CI::Blogs()->find($id);
            //if the blog does not exist, redirect them to the customer list with an error
            if (!$blog)
            {
                \CI::session()->set_flashdata('error', lang('error_not_found'));
                redirect('admin/blogs');
            }
            else
            {

                //if the blog is legit, delete them
                \CI::Blogs()->delete_blog($id);

                \CI::session()->set_flashdata('message', lang('message_deleted_blog'));
                redirect('admin/blogs');
            }
        }
        else
        {
            //if they do not provide an id send them to the blog list page with an error
            \CI::session()->set_flashdata('error', lang('error_not_found'));
            redirect('admin/blogs');
        }
    }
}
