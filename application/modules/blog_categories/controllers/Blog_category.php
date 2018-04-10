<?php namespace GoCart\Controller;
/**
 * Blog_category Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @blog_category    Blog_category
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class Blog_category extends Front {  

    public function index($slug, $sort='id', $dir="ASC", $page=0) {

        \CI::lang()->load('blog_categories');
        //define the URL for pagination
        $pagination_base_url = site_url('blog_category/'.$slug.'/'.$sort.'/'.$dir);

        //how many products do we want to display per page?
        //this is configurable from the admin settings page.
        $per_page = config_item('blogs_per_page');

        //grab the blog_categories
        $blog_categories = \CI::Blog_categories()->get($slug, $sort, $dir, $page, $per_page);

        //no blog_category? show 404
        if(!$blog_categories)
        {
            throw_404();
            return;
        }

        $blog_categories['sort'] = $sort;
        $blog_categories['dir'] = $dir;
        $blog_categories['slug'] = $slug;
        $blog_categories['page'] = $page;
        
        //load up the pagination library
        \CI::load()->library('pagination');
        $config['base_url'] = $pagination_base_url;
        $config['uri_segment'] = 5;
        $config['per_page'] = $per_page;
        $config['num_links'] = 3;
        $config['total_rows'] = $blog_categories['total_blogs'];

        \CI::pagination()->initialize($config);

        //load the view
        $this->view('blog_categories/blog_category', $blog_categories);
    }

    public function shortcode($slug = false, $perPage = false)
    {
        if(!$perPage)
        {
            $perPage = config_item('blogs_per_page');
        }

        $products = \CI::Blog_categories()->get($slug, 'id', 'ASC', 0, $perPage);

        return $this->partial('blog_categories/blogs', $products);
    }

}
