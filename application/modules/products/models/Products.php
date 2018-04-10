<?php
/**
 * Products Class
 *
 * @package     GoCart
 * @subpackage  Models
 * @category    Products
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

Class Products extends CI_Model
{
    public function __construct()
    {
        $this->customer = \CI::Login()->customer();
    }


	public function update_product($order_number, $data){						
	$updatedata = array('transaction_id' => $data['tracking_id'],'transaction_amount' => $data['amount'],'response' =>  serialize($data),'transaction_date' => date('Y-m-d h:i'));
	CI::db()->where('order_number', $order_number);
	CI::db()->update('transactions', $updatedata);
	
	}

    public function getProduct($id)
    {
        //do this again right here since it can be used for combining the cart. We want to make sure it's fresh.
        $this->customer = \GC::getCustomer();

        //find the product
        $product = CI::db()->select('*, saleprice_'.$this->customer->group_id.' as saleprice, price_'.$this->customer->group_id.' as price')->where('id', $id)->where('enabled_'.$this->customer->group_id, '1')->get('products')->row();
        $product = $this->processImageDecoding($product);
        return $product;
    }

	public function sendProductPaymentNotification($orderNumber, $informations){
	$order = \CI::Orders()->getOrder($orderNumber);
	$order->tracking_id = $informations['tracking_id'];

	GoCart\Emails::Order_payment($order);
		
	}
	


    public function product_autocomplete($name, $limit)
    {
        return  CI::db()->like('name', $name)->get('products', $limit)->result();
    }

    public function touchInventory($id, $quantity)
    {
        $product = $this->getProduct($id);
        if(!$product)
        {
            return false;
        }

        CI::db()->where('id', $id)->update('products', ['quantity' => ($product->quantity - $quantity)]);
    }

    public function products($data=[], $return_count=false)
    {
        
			//	echo CI::input->post('filter_category');
			//print_r(CI::input()->post('filter_category'));
//
			//exit;
		
		if(empty($data))
        {
            //if nothing is provided return the whole shabang
            CI::db()->order_by('name', 'ASC');
            $result = CI::db()->get('products');
            return $result->result();
        }
        else
        {
            //grab the limit
            if(!empty($data['rows']))
            {
                CI::db()->limit($data['rows']);
            }

            //grab the page
            if(!empty($data['page']))
            {
                CI::db()->offset($data['page']);
            }

            //do we order by something other than category_id?
            if(!empty($data['order_by']))
            {
                //if we have an order_by then we must have a direction otherwise KABOOM
                CI::db()->order_by($data['order_by'], $data['sort_order']);
            }

            //do we have a search submitted?
            if(!empty($data['term']))
            {
                $search = json_decode($data['term']);
                //if we are searching dig through some basic fields
                if(!empty($search->term))
                {
                    CI::db()->like('name', $search->term);
                    CI::db()->or_like('description', $search->term);
                    CI::db()->or_like('excerpt', $search->term);
                    CI::db()->or_like('sku', $search->term);
                }
				if(!empty(CI::input()->post('filter_category')))
                {
                    //lets do some joins to get the proper category products
                    CI::db()->join('category_products', 'category_products.product_id=products.id', 'right');
                    CI::db()->where_in('category_products.category_id', CI::input()->post('filter_category'));
                    //CI::db()->order_by('sequence', 'ASC');
                }
				if(!empty(CI::input()->post('filter')))
                {
                    //lets do some joins to get the proper category products
                    CI::db()->join('product_filters', 'product_filters.product_id=products.id', 'right');
                    CI::db()->where_in('product_filters.filter_id', CI::input()->post('filter'));
                    //CI::db()->order_by('sequence', 'ASC');
                }
                /*if(!empty($search->category_id))
                {
                    //lets do some joins to get the proper category products
                    CI::db()->join('category_products', 'category_products.product_id=products.id', 'right');
                    CI::db()->where('category_products.category_id', $search->category_id);
                    CI::db()->order_by('sequence', 'ASC');
                }*/
            }

            if($return_count)
            {
                return CI::db()->count_all_results('products');
            }
            else
            {
				$products = CI::db()->get('products')->result();
				
						//print_r($products);
						//print_r(CI::db()->last_query());
		//exit;
				
				
				foreach($products as $product){
				$images = (array)json_decode($product->images);
						foreach($images as $image):	
							
							if(isset($image->primary))
								{
								$product->image = $image->filename;
								}
						endforeach;
				$productswithimages[] = $product;
				}
			
                return $productswithimages;
            }

        }
    }

    public function getProducts($category_id = false, $limit = false, $offset = false, $by=false, $sort=false)
    {
        //if we are provided a category_id, then get products according to category
        if ($category_id)
        {
            CI::db()->select('category_products.*, products.*, saleprice_'.$this->customer->group_id.' as saleprice, price_'.$this->customer->group_id.' as price, LEAST(IFNULL(NULLIF(saleprice_'.$this->customer->group_id.', 0), price_'.$this->customer->group_id.'), price_'.$this->customer->group_id.') as sort_price', false)->from('category_products')->join('products', 'category_products.product_id=products.id')->where(array('category_id'=>$category_id, 'enabled_'.$this->customer->group_id=>1));

            CI::db()->order_by($by, $sort);

            $result = CI::db()->limit($limit)->offset($offset)->get()->result();

            $products = [];

            foreach($result as $product)
            {
                $products[] = $this->processImageDecoding($product);
            }
            return $products;
        }
        else
        {
            //sort by alphabetically by default
            return CI::db()->order_by('name', 'ASC')->get('products')->result();
        }
    }

    public function count_all_products()
    {
        return CI::db()->count_all_results('products');
    }

    public function count_products($id)
    {
        return CI::db()->select('product_id')->from('category_products')->join('products', 'category_products.product_id=products.id')->where(array('category_id'=>$id, 'enabled_'.$this->customer->group_id=>1))->count_all_results();
    }

    public function slug($slug, $related=true)
    {
	
      $result = CI::db()->select('*')->get_where('products', array('slug'=>$slug))->row();
	  if($result){
				$images = (array)json_decode($result->images);
					foreach($images as $image){
							if(isset($image->primary)){
								$result->primary_image = $image->filename;
							}
					}	  
	  }
      if(!$result)
        {
            return false;
        }

        $related = json_decode($result->related_products);

        if(!empty($related))
        {
            //build the where
            $where = [];
            foreach($related as $r)
            {
                $where[] = '`id` = '.$r;
            }
            CI::db()->select('*');
            CI::db()->where('('.implode(' OR ', $where).')', null);
           // CI::db()->where('enabled_'.$this->customer->group_id, 1);

            $result->related_products   = CI::db()->get('products')->result();
        }
        else
        {
            $result->related_products   = [];
        }
        $result->categories = $this->getProductCategories($result->id);

        return $result;
    }

    public function find($id, $related=true)
    {
        $result = CI::db()->get_where('products', array('id'=>$id))->row();
        if(!$result)
        {
            return false;
        }

        if($related)
        {
            $relatedItems = json_decode($result->related_products);
            if(!empty($relatedItems))
            {
                //build the where
                $where = [];
                foreach($relatedItems as $r)
                {
                    $where[] = '`id` = '.$r;
                }

                CI::db()->where('('.implode(' OR ', $where).')', null);
                CI::db()->where('enabled_'.$this->customer->group_id, 1);

                $result->related_products   = CI::db()->get('products')->result();
            }
            else
            {
                $result->related_products   = [];
            }
        }

        $result->categories = $this->getProductCategories($result->id);

        return $result;
    }

    public function getProductCategories($id)
    {
        return CI::db()->select('categories.name, categories.id, categories.slug, ')->where('product_id', $id)->join('categories', 'category_id = categories.id')->get('category_products')->result();
    }

    public function save($product, $options=false, $categories=false)
    {
	$product_filters = $product['product_filters'];
	unset($product['product_filters']);
        if ($product['id'])
        {
            CI::db()->where('id', $product['id']);
            CI::db()->update('products', $product);

            $id = $product['id'];
        }
        else
        {
            CI::db()->insert('products', $product);
            $id = CI::db()->insert_id();
        }

        //loop through the product options and add them to the db
        if($options !== false)
        {

            // wipe the slate
            CI::ProductOptions()->clearOptions($id);

            // save edited values
            $count = 1;
            foreach ($options as $option)
            {
                $values = $option['values'];
                unset($option['values']);
                $option['product_id'] = $id;
                $option['sequence'] = $count;

                CI::ProductOptions()->saveOption($option, $values);
                $count++;
            }
        }

        if($categories !== false)
        {
            if($product['id'])
            {
                //get all the categories that the product is in
                $cats   = $this->getProductCategories($id);

                //generate cat_id array
                $ids    = [];
                foreach($cats as $c)
                {
                    $ids[]  = $c->id;
                }

                //eliminate categories that products are no longer in
                foreach($ids as $c)
                {
                    if(!in_array($c, $categories))
                    {
                        CI::db()->delete('category_products', array('product_id'=>$id,'category_id'=>$c));
                    }
                }

                //add products to new categories
                foreach($categories as $c)
                {
                    if(!in_array($c, $ids))
                    {
                        CI::db()->insert('category_products', array('product_id'=>$id,'category_id'=>$c));
                    }
                }
            }
            else
            {
                //new product add them all
                foreach($categories as $c)
                {
                    CI::db()->insert('category_products', array('product_id'=>$id,'category_id'=>$c));
                }
            }
        }
	
		if($product_filters){
			CI::db()->where('product_id', $id)->delete('product_filters');
			foreach($product_filters as $filter_id){
					$insertfilter['product_id'] = $id;
					$insertfilter['filter_id'] = $filter_id; 
					$insertfilters[] = $insertfilter;
			}
			CI::db()->insert_batch('product_filters',$insertfilters);
		}
        //return the product id
        return $id;
    }

    public function delete_product($id)
    {
        // delete product
        CI::db()->where('id', $id);
        CI::db()->delete('products');

        //delete references in the product to category table
        CI::db()->where('product_id', $id);
        CI::db()->delete('category_products');

        // delete coupon reference
        CI::db()->where('product_id', $id);
        CI::db()->delete('coupons_products');
    }

    public function search_products($term, $limit=false, $offset=false, $by=false, $sort=false)
    {
        $results = [];
	
       CI::db()->select('*, LEAST(IFNULL(NULLIF(saleprice_'.$this->customer->group_id.', 0), price_'.$this->customer->group_id.'), price_'.$this->customer->group_id.') as sort_price', false);
        //this one counts the total number for our pagination
        CI::db()->where('enabled_'.$this->customer->group_id, 1);

        $term = CI::db()->escape_like_str(preg_replace("/[^A-Za-z0-9 ]/", "", $term));

        CI::db()->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');
        $results['count'] = CI::db()->count_all_results('products');


        CI::db()->select('*, saleprice_'.$this->customer->group_id.' as saleprice, price_'.$this->customer->group_id.' as price, LEAST(IFNULL(NULLIF(saleprice_'.$this->customer->group_id.', 0), price_'.$this->customer->group_id.'), price_'.$this->customer->group_id.') as sort_price', false);
        //this one gets just the ones we need.
        CI::db()->where('enabled_'.$this->customer->group_id, 1);
        CI::db()->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');

        if($by && $sort)
        {
            CI::db()->order_by($by, $sort);
        }
        $products = CI::db()->get('products', $limit, $offset)->result();
        $results['products'] = [];
        foreach($products as $product)
        {
            $results['products'][] = $this->processImageDecoding($product);
        }

        return $results;
    }

    public function processImageDecoding($product)
    {
        if($product)
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
            return $product;
        }
        else
        {
            return $product;
        }
        
    }

    public function validate_slug($slug, $id=false, $counter=false)
    {
        CI::db()->select('slug');
        CI::db()->from('products');
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
                $counter = 1;
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

	public function get_filters($parent=NULL){ if($parent){ $where =' WHERE filters.parent_id = 0 ';}
		$query = CI::db()->query('SELECT filters.id,filters.parent_id, filters.title, parentfilters.title as parent FROM filters 
LEFT JOIN filters AS parentfilters
ON parentfilters.id = filters.parent_id '.$where.'
ORDER BY IF(parentfilters.id, parentfilters.id, filters.id),
         parentfilters.id, filters.id;');
		return $query->result();
	}
	
	public function get_filter($id){
		CI::db()->select('*');
        CI::db()->from('filters');
		CI::db()->where('id', $id);
		return CI::db()->get()->row();
	}
	
	
	public function delete_filter($id){
	CI::db()->where('id', $id);
	return CI::db()->delete('filters');
	}
	

	
	public function update_filters($data){
		if($data['id']>0)
			{
			CI::db()->where('id', $data['id']);
			unset($data['id']);
				return CI::db()->update('filters', $data);
			}else{
				return CI::db()->insert('filters', $data);
			}
	}
	
	public function update_addinfo($data){
	
		if($data['id']>0)
			{
			CI::db()->where('id', $data['id']);
			unset($data['id']);
				return CI::db()->update('products_information', $data);
			}else{
				return CI::db()->insert('products_information', $data);
			}
	}
	
	public function product_info($id){
		\CI::db()->select('*');
		\CI::db()->from('products_information');
		\CI::db()->where('id', $id);
		return \CI::db()->get()->row();
	
	}
	
	public function get_product_add_info($product_id){
		\CI::db()->select('*');
		\CI::db()->from('products_information');
		\CI::db()->where('product_id', $product_id);
		return \CI::db()->get()->result();
	}
	
	public function product_addinfo_delete($id){ 	
	\CI::db()->where('id', $id);
	return \CI::db()->delete('products_information');
	}
	
	
	
	public function update_review($data){
	
		if($data['id']>0)
			{
			CI::db()->where('id', $data['id']);
			unset($data['id']);
				return CI::db()->update('product_reviews', $data);
			}else{
				return CI::db()->insert('product_reviews', $data);
			}
	}
	
	public function product_review($id){
		\CI::db()->select('*');
		\CI::db()->from('product_reviews');
		\CI::db()->where('id', $id);
		return \CI::db()->get()->row();
	
	}
	
	public function get_product_review($product_id){
		\CI::db()->select('*');
		\CI::db()->from('product_reviews');
		\CI::db()->where('product_id', $product_id);
		return \CI::db()->get()->result();
	}
	
	public function get_reviews_cat($cat){
	
		\CI::db()->select('*');
		\CI::db()->from('product_reviews');
		//\CI::db()->where('product_id', $product_id);
		return \CI::db()->get()->result();
	
	
	}
	public function get_reviews($product_id){
	
		\CI::db()->select('*');
		\CI::db()->from('product_reviews');
		\CI::db()->where('product_id', $product_id);
		return \CI::db()->get()->result();
	
	
	}
	
	public function product_review_delete($id){ 	
	\CI::db()->where('id', $id);
	return \CI::db()->delete('product_reviews');
	}
	
	public function get_product_filters($id){
	\CI::db()->select('filter_id');
	\CI::db()->from('product_filters');
		\CI::db()->where('product_id', $id);
	return \CI::db()->get()->result();
	
	}
	
	public function get_category($parent_id = NULL){
	
	\CI::db()->select('*');
	\CI::db()->from('categories');
		\CI::db()->where('parent_id', $parent_id);
		\CI::db()->where('id !=', 6);
	return \CI::db()->get()->result();
		
	}
	
	 public function catslug($slug)
    {
      $result = CI::db()->select('*')->get_where('categories', array('slug'=>$slug))->row();

      if(!$result)
        {
            return false;
        }
		return $result;
	}
	
	public function get_products_category($catid, $limit=10, $start=0)
		{ 
		$result = CI::db()->select('products.*')
		->from('products')
		->where('category_products.category_id', $catid)
		->join('category_products', 'category_products.product_id = products.id', 'left')
		->limit($limit, $start)->get()->result();
		if($result){
				foreach($result as $row){
						if(isset($row->images)){
							$images = (array)json_decode($row->images);
								foreach($images as $image){
										if(isset($image->primary)){
											$row->primary_image = $image->filename;
										}
								}
						
						$newresult[] = 	$row;	
					}
				
				}
		}

        if(!$newresult)
        {
            return false;
        }
            return $newresult;
		
		}
	
	
}
