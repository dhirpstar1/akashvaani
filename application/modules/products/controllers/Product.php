<?php namespace GoCart\Controller;
/**
 * Product Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    Product
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Product extends Front {


public function search($rows=9, $order_by="name", $sort_order="ASC", $code=0, $page=0)
    {
        			
        $data['page_title'] = 'Products';

        $data['code'] = $code;
        $term = false;

        //get the category list for the drop menu
       

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
		$data['filters']  = \CI::Products()->get_filters();	
		
        //store the search term
        $data['term'] 		= $term;
        $data['order_by'] 	= $order_by;
        $data['sort_order'] = $sort_order;
        $data['rows'] 		= $rows;
        $data['page'] 		= $page;

        

        //total number of products
        $data['total'] = \CI::Products()->products(array('term'=>$term, 'order_by'=>$order_by, 'sort_order'=>$sort_order), true);


        \CI::load()->library('pagination');

        $config['base_url'] = site_url('products/search/'.$rows.'/'.$order_by.'/'.$sort_order.'/'.$code.'/');
        $config['total_rows'] = $data['total'];
        $config['per_page'] = $rows;
        //$config['uri_segment'] = 7;
       /* $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
		$config['num_links'] = 5;
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';*/

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$config['display_pages'] = FALSE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
        $config['prev_link'] = FALSE;
       /* $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';*/

        $config['next_link'] = 'Show More Products';
        $config['next_tag_open'] = '<div class="col-md-12 paginationlink">';
        $config['next_tag_close'] = '</div>';
		\CI::pagination()->initialize($config);
		$data['products'] = \CI::Products()->products(array('term'=>$term, 'order_by'=>$order_by, 'sort_order'=>$sort_order, 'rows'=>$rows, 'page'=>$page));
		$data['pagination'] = \CI::pagination()->create_links();

       
		$this->partial('_statics/productslist', $data);
    }
	 
    public function view($slug) { 
	    $product = \CI::Products()->slug($slug);

        if(!$product)
        {
            throw_404();
        }
        else
        {
            $product->images = json_decode($product->images, true);
            if($product->images)
            {
                $product->images = array_values($product->images);
            }
            else
            {
                $product->images = [];
            }

            //set product options
            $data['options'] = \CI::ProductOptions()->getProductOptions($product->id);

            $data['posted_options'] = \CI::session()->flashdata('option_values');

            //get related items
            $data['related'] = $product->related_products;
			$data['reviews'] 	= \CI::Products()->get_reviews($product->id);
            //create view variable
            $data['page_title'] = $product->name;
            $data['meta'] = $product->meta;
            $data['seo_title'] = (!empty($product->seo_title))?$product->seo_title:$product->name;
            $data['product'] = $product;

            //load the view
         			$data['add_info']   =  \CI::Products()->get_product_add_info($product->id);
					$this->partial('productheader', $data);
					$this->partial('_statics/product_view', $data);
					$this->partial('productfooter', $data);
        }
    }


    public function category($slug) {
        $data['catdata'] = \CI::Products()->catslug($slug);
		$data['categories']  	= \CI::Products()->get_category($data['catdata']->id);
        if(!$data['catdata'])
        {
            throw_404();
        }
        else
        {
			$this->partial('productheader', $data);
			$this->partial('_statics/category', $data);
			$this->partial('productfooter', $data);			
		}
	}
		public function subcategory($slug) { 
	
		
				$data['catdata'] = \CI::Products()->catslug($slug);
				//$data['products']  	= \CI::Products()->get_products_category($data['catdata']->id, 10);
				$data['products']  	= \CI::Products()->get_products_category(2, 10);
				//$data['posts'] 	= \CI::Blogs()->get_popular();
				$data['reviews'] 	= \CI::Products()->get_reviews_cat($data['catdata']->id);
				
				if(!$data['catdata'])
				{
					throw_404();
				}
				else
				{
					$data['add_info']  	= \CI::Categories()->get_products_add_info($data['catdata']->id);
					$data['categories']  	= \CI::Products()->get_category($data['catdata']->id);
					$data['meta'] 		= $data['catdata']->meta;
            		$data['seo_title'] 	= $data['catdata']->seo_title;
					$data['slider'] 	= $this->partial('_statics/product_slider', $data, true);
		    		$this->partial('productheader', $data);
					$this->partial('_statics/subcategory', $data);
					$this->partial('productfooter', $data);
					
				}
			}

		public function productsbycat($cat=NULL, $subcat = NULL){
		
					$data['catdata'] = \CI::Products()->catslug($cat);
					//$data['products']  	= \CI::Products()->get_products_category(2, 10);
		 			$data['categories'] = \CI::Categories()->get_categories($data['catdata']->id);
					$data['filters'] = \CI::Products()->get_filters();
					$this->partial('productheader', $data);
					$this->partial('_statics/productsbycat', $data);
					$this->partial('productfooter', $data);
		}



 public function buy_now($slug) { 
	    $product = \CI::Products()->slug($slug);

        if(!$product)
        {
            throw_404();
        }
        else
        {
            $product->images = json_decode($product->images, true);
            if($product->images)
            {
                $product->images = array_values($product->images);
            }
            else
            {
                $product->images = [];
            }

            //set product options
            $data['options'] = \CI::ProductOptions()->getProductOptions($product->id);

            $data['posted_options'] = \CI::session()->flashdata('option_values');

            //get related items
            $data['related'] = $product->related_products;
			$data['reviews'] 	= \CI::Products()->get_reviews($product->id);
            //create view variable
            $data['page_title'] = $product->name;
            $data['meta'] = $product->meta;
            $data['seo_title'] = (!empty($product->seo_title))?$product->seo_title:$product->name;
            $data['product'] = $product;

            //load the view
					$this->partial('productheader', $data);
					$this->partial('_statics/buy_now', $data);
					$this->partial('productfooter', $data);
        }
    }
	

}

