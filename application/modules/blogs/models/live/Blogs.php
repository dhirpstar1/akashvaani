<?php
/**
 * Blogs Class
 *
 * @package     GoCart
 * @subpackage  Models
 * @category    Blogs
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

Class Blogs extends CI_Model
{
    public function __construct()
    {
        $this->customer = \CI::Login()->customer();
    }

    public function getBlog($id)
    {
        //do this again right here since it can be used for combining the cart. We want to make sure it's fresh.
        $this->customer = \GC::getCustomer();

        //find the Blog
        $blog = CI::db()->select('*')->where('id', $id)->where('status', '1')->get('blogs')->row();
        $blog = $this->processImageDecoding($blog);
        return $blog;
    }

    public function blog_autocomplete($name, $limit)
    {
        return  CI::db()->like('name', $name)->get('blogs', $limit)->result();
    }

    public function touchInventory($id, $quantity)
    {
        $blog = $this->getBlog($id);
        if(!$blog)
        {
            return false;
        }

        CI::db()->where('id', $id)->update('blogs', ['quantity' => ($blog->quantity - $quantity)]);
    }

function get_articles_by_slug($slug){
        $page_id= CI::db()->where('slug', $slug)->get('pages')->row()->id;




         CI::db()->select('blogs.id, blogs.name, blogs.slug, blogs.images, blogs.date, blogs.excerpt, blogs.description, pages_articles.order_id, pages_articles.blog_id');
        CI::db()->join('pages_articles', 'pages_articles.blog_id=blogs.id AND pages_articles.page_id = '.$page_id, 'left');

      
            CI::db()->where('blogs.status =', 1);
            CI::db()->where('pages_articles.page_id', $page_id);
            CI::db()->order_by('pages_articles.order_id', 'desc');
            //if nothing is provided return the whole shabang
            CI::db()->order_by('id', 'desc');
            $result = CI::db()->get('blogs');
            
            foreach($result->result() as $article){
                $blog = $this->processImageDecoding($article);
                if($blog->images){
                foreach($blog->images as $image){
                    if(isset($image['primary'])){
                    $blog->primaryimage = $image;
                    }               
                }
                }   
                $articleswithimages[] = $blog;
            }

            return $articleswithimages;

    }

    
 public function articles_blogs($id){

        CI::db()->select('blogs.id, blogs.name, pages_articles.order_id, pages_articles.blog_id');
        CI::db()->from('blogs');
       CI::db()->join('pages_articles', 'pages_articles.blog_id=blogs.id AND pages_articles.page_id = '.$id, 'left');
       CI::db()->order_by('pages_articles.order_id', 'desc');
      // print_r(CI::db()->get()->result()); exit;
       return CI::db()->get()->result();
   }
    public function blogs($data=[], $return_count=false)
    {
       CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	  
	   CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
	   // CI::db()->where('blogs.status =', 1);
	    if(empty($data))
        {
            //if nothing is provided return the whole shabang
            CI::db()->order_by('id', 'desc');
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
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
                   // CI::db()->or_like('sku', $search->term);
                }

                if(!empty($search->category_id))
                {
                    //lets do some joins to get the proper category blogs
                    CI::db()->join('category_blogs', 'category_blogs.blog_id=blogs.id', 'right');
                    CI::db()->where('category_blogs.category_id', $search->category_id);
                   // CI::db()->order_by('sequence', 'ASC');
                }
            }

            if($return_count)
            {
                return CI::db()->count_all_results('blogs');
            }
            else
            {
				CI::db()->order_by('id', 'DESC');

                foreach(CI::db()->get('blogs')->result() as $article){
				$blog = $this->processImageDecoding($article);

				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
            return $articleswithimages;
             
            }

        }
    }

    public function getBlogs($category_id = false, $limit = false, $offset = false, $by=false, $sort=false)
    {
        //if we are provided a category_id, then get blogs according to category
        if ($category_id)
        {
            CI::db()->select('category_blogs.*, blogs.*, customers.firstname,customers.lastname')->from('blogs');
			CI::db()->join('category_blogs', 'category_blogs.blog_id=blogs.id');
			CI::db()->join('customers', 'customers.id=blogs.customer_id');
			CI::db()->where(array('category_blogs.category_id'=>$category_id, 'blogs.status'=>1));

            CI::db()->order_by($by, $sort);

            $result = CI::db()->limit($limit)->offset($offset)->get()->result();

            $blogs = [];

            foreach($result as $blog)
            {
                $blogs[] = $this->processImageDecoding($blog);
            }
            $blogs;
        }
        else
        {
            //sort by alphabetically by default
            $blogs = CI::db()->order_by('id', 'DESC')->get('blogs')->result();
        }

		foreach($blogs as $article){				
				if($article->images){
				foreach($article->images as $image){
					if(isset($image['primary'])){
					$article->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
            return $articleswithimages;
    }

    public function count_all_blogs()
    {
        return CI::db()->count_all_results('blogs');
    }

    public function count_blogs($id)
    {
        return CI::db()->select('blog_id')->from('category_blogs')->join('blogs', 'category_blogs.blog_id=blogs.id')->where(array('category_id'=>$id, 'enabled_'.$this->customer->group_id=>1))->count_all_results();
    }

    public function slug($slug, $related=true)
    {
      //$result = CI::db()->select('*')->get_where('blogs', array('blogs.slug'=>$slug, 'blogs.status'=>1))->row();
	  
	  $result = CI::db()->select('blogs.*, blog_categories.name as catgeory_name')->from('blogs')->join('blog_categories', 'blog_categories.id=blogs.primary_category', 'left')->where(array('blogs.slug'=>$slug, 'blogs.status'=>1))->get()->row();

      if(!$result)
        {
            return false;
        }

      
        $result->categories = $this->getBlogCategories($result->id);

        return $result;
    }

    public function find($id, $related=true)
    {
        $result = CI::db()->get_where('blogs', array('id'=>$id))->row();
        if(!$result)
        {
            return false;
        }

        

        $result->categories = $this->getBlogCategories($result->id);

        return $result;
    }

    public function getBlogCategories($id)
    {
        return CI::db()->where('blog_id', $id)->join('category_blogs', 'category_blogs.category_id = blog_categories.id')->get('blog_categories')->result();
    }

	public function getBlogCategoryByslug($slug)
    {
        return CI::db()->where('slug', $slug)->get('blog_categories')->row();
    }

	public function getAllCategories()
    {
        return CI::db()->where('status', 0)->get('blog_categories')->result();
    }
	
	public function getPostTags($post_id)
    {
        return CI::db()->select('name')->where('post_id', $post_id)->join('tags', 'post_tags.tag_id = tags.id', 'left')->get('post_tags')->result();
    }
	
	public function getAllTags(){
		        return CI::db()->select('name')->limit(10, 5)->get('tags')->result();
	}
	
	
	public function getBlogBytag($name, $limit = false, $offset = false){
	
			CI::db()->select('category_blogs.*, blogs.*, customers.firstname,customers.lastname, tags.name')->from('blogs');
			CI::db()->join('category_blogs', 'category_blogs.blog_id=blogs.id');
			CI::db()->join('customers', 'customers.id=blogs.customer_id');
			CI::db()->join('post_tags', 'blogs.id=post_tags.post_id');
			CI::db()->join('tags', 'post_tags.tag_id=tags.id');
			
			CI::db()->where(array('tags.name'=> $name, 'blogs.status'=>1));
			CI::db()->group_by('blogs.id');
            CI::db()->order_by('blogs.id', 'desc');

            $result = CI::db()->limit($limit)->offset($offset)->get()->result();

            $blogs = [];

            foreach($result as $blog)
            {
                $blogs[] = $this->processImageDecoding($blog);
            }
          
	
	
			foreach($blogs as $article){				
				if($article->images){
				foreach($article->images as $image){
					if(isset($image['primary'])){
					$article->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
            return $articleswithimages;
	
	}
	
	
    public function save($blog, $options=false, $categories=false, $tags=false)
    {
        if ($blog['id'])
        {
            CI::db()->where('id', $blog['id']);
            CI::db()->update('blogs', $blog);
            $id = $blog['id'];
        }
        else
        {
            CI::db()->insert('blogs', $blog);
            $id = CI::db()->insert_id();
        }
		if($tags)
		{		
		
		
		foreach($tags as $tag):
		  $result = CI::db()->select('*')->get_where('tags', array('tags.name'=> trim($tag)))->row();
		if($result){
		$tag_id = $result->id;
		}else{
			$tagdata['name'] = $tag;
			CI::db()->insert('tags', $tagdata);
            $tag_id = CI::db()->insert_id();
		}
			
			$posttagdata['tag_id'] = $tag_id;
			$posttagdata['post_id'] = $id;
			$posttagarray[] = $posttagdata;
		endforeach;
			CI::db()->delete('post_tags', array('post_id'=>$id));
			CI::db()->insert_batch('post_tags', $posttagarray);	
		}



        if($categories !== false)
        {
            if($blog['id'])
            {
                //get all the categories that the blog is in
                $cats   = $this->getBlogCategories($id);
			
                //generate cat_id array
                $ids    = [];
                foreach($cats as $c)
                {
                    $ids[]  = $c->id;
                }

                //eliminate categories that blogs are no longer in
                foreach($ids as $c)
                {
                    if(!in_array($c, $categories))
                    {
                        CI::db()->delete('category_blogs', array('blog_id'=>$id,'category_id'=>$c));
                    }
                }

                //add blogs to new categories
                foreach($categories as $c)
                {
                    if(!in_array($c, $ids))
                    {
                        CI::db()->insert('category_blogs', array('blog_id'=>$id,'category_id'=>$c));
                    }
                }
            }
            else
            {
                //new blog add them all
                foreach($categories as $c)
                {
                    CI::db()->insert('category_blogs', array('blog_id'=>$id,'category_id'=>$c));
                }
            }
        }

        //return the blog id
        return $id;
    }

    public function delete_blog($id)
    {
        // delete blog
        CI::db()->where('id', $id);
        CI::db()->delete('blogs');

        //delete references in the blog to category table
        CI::db()->where('blog_id', $id);
        CI::db()->delete('category_blogs');

    }

    public function search_blogs($term, $limit=false, $offset=false, $by=false, $sort=false)
    {
        $results = [];

       CI::db()->select('*, LEAST(IFNULL(NULLIF(saleprice_'.$this->customer->group_id.', 0), price_'.$this->customer->group_id.'), price_'.$this->customer->group_id.') as sort_price', false);
        //this one counts the total number for our pagination
        CI::db()->where('enabled_'.$this->customer->group_id, 1);

        $term = CI::db()->escape_like_str(preg_replace("/[^A-Za-z0-9 ]/", "", $term));

        CI::db()->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');
        $results['count'] = CI::db()->count_all_results('blogs');


        CI::db()->select('*, saleprice_'.$this->customer->group_id.' as saleprice, price_'.$this->customer->group_id.' as price, LEAST(IFNULL(NULLIF(saleprice_'.$this->customer->group_id.', 0), price_'.$this->customer->group_id.'), price_'.$this->customer->group_id.') as sort_price', false);
        //this one gets just the ones we need.
        CI::db()->where('enabled_'.$this->customer->group_id, 1);
        CI::db()->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');

        if($by && $sort)
        {
            CI::db()->order_by($by, $sort);
        }
        $blogs = CI::db()->get('blogs', $limit, $offset)->result();
        $results['blogs'] = [];
        foreach($blogs as $blog)
        {
            $results['blogs'][] = $this->processImageDecoding($blog);
        }

        return $results;
    }

    public function processImageDecoding($blog)
    {
        if($blog)
        {
            $blog->images = json_decode($blog->images, true);
            if($blog->images)
            {
                $blog->images = array_values($blog->images);
            }
            else
            {
                $blog->images = [];
            }
            return $blog;
        }
        else
        {
            return $blog;
        }
        
    }

    public function validate_slug($slug, $id=false, $counter=false)
    {
        CI::db()->select('slug');
        CI::db()->from('blogs');
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
	
	public function get_comments($id){ 
		        return CI::db()->select('comments.*, customers.firstname, customers.lastname, customers.image')->where('blog_id', $id)->join('customers', 'customers.id = comments.customer_id', 'left')->order_by('comment_date asc')->get('comments')->result();
	
	}
	public function get_comments_count($id){ 
		        return CI::db()->select('comments.*, customers.firstname, customers.lastname, customers.image')->where('blog_id', $id)->join('customers', 'customers.id = comments.customer_id', 'left')->order_by('comment_date asc')->get('comments')->num_rows();
	
	}
	public function save_comment($comment){
	
	if ($comment['id'])
        {
            CI::db()->where('id', $comment['id']);
            CI::db()->update('comments', $comment);
            $id = $comment['id'];
        }
        else
        {
            CI::db()->insert('comments', $comment);
            $id = CI::db()->insert_id();
        }
	
	}


public function getTop3()
    {
       		CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	   		CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
			CI::db()->where_in('blogs.id',array(4,16,9));
            CI::db()->order_by('id', 'DESC');
			CI::db()->limit(3);
			CI::db()->offset(0);
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
    }

public function main_blog_page()
    {
       		CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	   		CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
			CI::db()->where_in('blogs.id',array(11,10,15));
            CI::db()->order_by('id', 'DESC');
			CI::db()->limit(3);
			CI::db()->offset(0);
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
    }


public function get_related()
    {
       		CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	   		CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
            CI::db()->order_by('rand()');
			CI::db()->limit(3);
			CI::db()->offset(0);
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
    }
public function get_popular()
    {
       		CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	   		CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
            CI::db()->order_by('rand()');
			CI::db()->limit(6);
			CI::db()->offset(0);
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
    }
	public function get_selected_blog($ids)
    {
       		CI::db()->select('blogs.*, customers.firstname, customers.lastname');
	   		CI::db()->join('customers', 'customers.id=blogs.customer_id', 'left');
			CI::db()->where_in('blogs.id', $ids);
            CI::db()->order_by('rand()');
			CI::db()->limit(6);
			CI::db()->offset(0);
            $result = CI::db()->get('blogs');
			
			foreach($result->result() as $article){
				$blog = $this->processImageDecoding($article);
				if($blog->images){
				foreach($blog->images as $image){
					if(isset($image['primary'])){
					$blog->primaryimage = $image;
					}				
				}
				}	
				$articleswithimages[] = $blog;
			}
			
            return $articleswithimages;
    }
}
