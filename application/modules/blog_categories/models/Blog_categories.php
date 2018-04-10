<?php
/**
 * Blog_categories Class
 *
 * @package GoCart
 * @subpackage Models
 * @category Blog_categories
 * @author Clear Sky Designs
 * @link http://gocartdv.com
 */

Class Blog_categories
{

    var $tiered;

    public function __construct()
    {
        $this->tiered = [];
        $this->customer = \CI::Login()->customer();
        $this->get_categories_tiered();
    }

    public function tier($parent_id)
    {
        if(isset($this->tiered[$parent_id]))
        {
            return $this->tiered[$parent_id];
        }
        else
        {
            return false;
        }
    }

    public function getBySlug($slug)
    {
        foreach($this->tiered['all'] as $c)
        {
            if($c->slug == $slug)
            {
                return $c;
                break;
            }
        }
        return false;
    }

    public function get($slug, $sort, $direction, $page, $blogs_per_page)
    {
        //get the category by slug
        $category = $this->getBySlug($slug);

        //if the category does not exist return false
        if(!$category || !$category->{'enabled_'.$this->customer->group_id})
        {
            return false;
        }

        //create view variable
        $data['page_title'] = $category->name;
        $data['meta'] = $category->meta;
        $data['seo_title'] = (!empty($category->seo_title))?$category->seo_title:$category->name;
        $data['category'] = $category;

        $data['total_blogs'] = CI::Products()->count_blogs($category->id);
        $data['blogs'] = CI::Products()->getProducts($category->id, $blogs_per_page, $page, $sort, $direction);

        return $data;
    }

    public function get_categories($parent = false)
    {
        if ($parent !== false)
        {
            CI::db()->where('parent_id', $parent);
        }
        CI::db()->select('id');
        CI::db()->order_by('blog_categories.sequence', 'ASC');
        
        //this will alphabetize them if there is no sequence
        CI::db()->order_by('name', 'ASC');
        $result = CI::db()->get('blog_categories');
        
        $categories = [];
        foreach($result->result() as $cat)
        {
            $categories[] = $this->find($cat->id);
        }
        
        return $categories;
    }
    
    public function get_categories_tiered($admin = false)
    {
        if(!$admin && !empty($this->tiered))
        {
            return $this->tiered;
        }

        if(!$admin)
        {
            CI::db()->where('enabled_'.$this->customer->group_id, 1);
        }
        
        CI::db()->order_by('sequence');
        CI::db()->order_by('name', 'ASC');
        $categories = CI::db()->get('blog_categories')->result();
        
        $results = [];
        $results['all'] = [];
        foreach($categories as $category) {

            // Set a class to active, so we can highlight our current category
            if(CI::uri()->segment(2) == $category->slug && CI::uri()->segment(1) == 'category') {
                $category->active = true;
            } else {
                $category->active = false;
            }
            $results['all'][$category->id] = $category;
            $results[$category->parent_id][$category->id] = $category;
        }
        
        if(!$admin)
        {
            $this->tiered = $results;
        }

        return $results;
    }
    
    public function getBlog_categoryOptionsMenu($hideId = false)
    {
        $cats = $this->get_categories_tiered(true);

        $options = [-1 => lang('hidden'), 0 => lang('top_level_category')];
        $listBlog_categories = function($parent_id, $sub='') use (&$options, $cats, &$listBlog_categories, $hideId) {
            
            if(isset($cats[$parent_id]))
            {
                foreach ($cats[$parent_id] as $cat)
                {
                    //if this matches the hide id, skip it and all it's children
                    if(!$hideId || $cat->id != $hideId)
                    {
                        $options[$cat->id] = $sub.$cat->name;

                        if (isset($cats[$cat->id]) && sizeof($cats[$cat->id]) > 0)
                        {
                            $sub2 = str_replace('&rarr;&nbsp;', '&nbsp;', $sub);
                            $sub2 .=  '&nbsp;&nbsp;&nbsp;&rarr;&nbsp;';
                            $listBlog_categories($cat->id, $sub2);
                        }
                    }
                }
            }
            
        };
        
        $listBlog_categories(-1);
        $listBlog_categories(0);
        
        return $options;
    }
    
    public function slug($slug)
    {
        return CI::db()->get_where('blog_categories', array('slug'=>$slug))->row();
    }

    public function find($id)
    {
        return CI::db()->get_where('blog_categories', array('id'=>$id))->row();
    }
    
    public function get_category_blogs_admin($id)
    {
        CI::db()->order_by('sequence', 'ASC');
        $result = CI::db()->get_where('blog_category_blogs', array('blog_category_id'=>$id));
        $result = $result->result();
        
        $contents = [];
        foreach ($result as $blog)
        {
            $result2 = CI::db()->get_where('blogs', array('id'=>$blog->blog_id));
            $result2 = $result2->row();            
            $contents[] = $result2; 
        }
        
        return $contents;
    }
    
    public function get_blog_category_blogs($id, $limit, $offset)
    {
        CI::db()->order_by('sequence', 'ASC');
        $result = CI::db()->get_where('blog_category_blogs', array('blog_category_id'=>$id), $limit, $offset);
        $result = $result->result();
        
        $contents = [];
        $count = 1;
        foreach ($result as $blog)
        {
            $result2 = CI::db()->get_where('blogs', array('id'=>$blog->blog_id));
            $result2 = $result2->row();
            
            $contents[$count] = $result2;
            $count++;
        }
        
        return $contents;
    }

    public function save($blog_category)
    {
	    if ($blog_category['id'])
        {
            CI::db()->where('id', $blog_category['id']);
            CI::db()->update('blog_categories', $blog_category);
            return $category['id'];
        }
        else
        {
            CI::db()->insert('blog_categories', $blog_category);
			return CI::db()->insert_id();
        }
    }
    
    public function delete($id)
    {
        CI::db()->where('id', $id);
        CI::db()->delete('blog_categories');

        //update child records to hidden
        CI::db()->where('parent_id', $id)->set('parent_id', -1)->update('blog_categories');
        
        //delete references to this category in the blog to category table
        CI::db()->where('blog_category_id', $id);
        CI::db()->delete('blog_category_blogs');
    }

    /*
    * check if slug already exists
    */

    public function validate_slug($slug, $id=false, $counter=false)
    {
        CI::db()->select('slug');
        CI::db()->from('blog_categories');
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

}