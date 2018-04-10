<?php
$routes[] = ['GET|POST', '/admin/blogs/blog_autocomplete', 'GoCart\Controller\AdminBlogs#blog_autocomplete'];
$routes[] = ['GET|POST', '/admin/blogs/bulk_save', 'GoCart\Controller\AdminBlogs#bulk_save'];
$routes[] = ['GET|POST', '/admin/blogs/blog_image_form', 'GoCart\Controller\AdminBlogs#blog_image_form'];
$routes[] = ['GET|POST', '/admin/blogs/blog_image_upload', 'GoCart\Controller\AdminBlogs#blog_image_upload'];
$routes[] = ['GET|POST', '/admin/blogs/form/[i:id]?/[i:copy]?', 'GoCart\Controller\AdminBlogs#form'];
$routes[] = ['GET|POST', '/admin/blogs/delete/[i:id]', 'GoCart\Controller\AdminBlogs#delete'];
$routes[] = ['GET|POST', '/admin/blogs/[i:rows]?/[:order_by]?/[:sort_order]?/[:code]?/[i:page]?', 'GoCart\Controller\AdminBlogs#index'];
$routes[] = ['GET|POST', '/blog/insertcomment', 'GoCart\Controller\Blog#insertcomment'];
$routes[] = ['GET|POST', '/blog/[:slug]', 'GoCart\Controller\Blog#views'];