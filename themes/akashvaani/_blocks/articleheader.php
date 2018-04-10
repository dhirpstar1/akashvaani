<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 	<title>Akashvaani - <?=$page_title?></title>
	
	<?=js('jquery/jquery', FUEL_FOLDER)?>
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>

	    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/fullscreen-slider.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <meta property="og:title" content="<?php echo $articledata->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url('/articles/'.$articledata->slug); ?>" />
    <meta property="og:image" content="<?php echo resize(($articledata->main_image) ? 'assets/images/blog/'.$articledata->main_image : 'assets/images/post-2.jpg', 500, 300); ?>" />
    <meta property="og:description" content="<?php echo word_limiter(strip_tags($articledata->content), 50); ?>" />
    <meta name="google-site-verification" content="SBJad0qFCxtpsFUfsMwGdtlflYMVpl8jbQU5-q0IO2M" />
</head>

<body class="notransition hidden">     
        <!-- Hero -->
            <div id="hero-container-blog" style="height:350px;">
         <div id="carouselBlog" class="carousel slide category" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/slider/slider1.png)">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="carousel-title hide"></div>
                                <div class="caption-title hide"></div>
                                <div class="caption-subtitle hide"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>  

           <!-- Header -->

 <div class="home-header">
<div class="home-header col-md-12">
   
    
    
    <nav class="navbar navbar-default new_menu navbar-fixed-top">
     <div class="home-logo osLight col-md-4"><a href="<?php echo base_url(); ?>" ><img src="<?php echo image_resize('assets/images/logo.png', 100, 100); ?>" alt="Logo" width="100">  </a></div>
    
  <div class="container-fluid col-md-8">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav slidermenu">
        <li class="active"><a href="<?php echo base_url('/'); ?>">Home <span class="sr-only">(current)</span></a></li>
       
      <li><a href="<?php echo base_url('/astrology'); ?>" >Astrology</a></li>
      <li><a href="<?php echo base_url('/puja'); ?>" >Puja</a></li>
      <li><a href="<?php echo base_url('/product/articles/'); ?>" >Articles</a></li>
       <li><a href="<?php echo base_url('/product'); ?>" >Products</a></li>
       <li><a href="<?php echo base_url('/pages/contactus.htm'); ?>" >Contact Us</a></li>
      <li><a href="#" ><span class="fa fa-phone"></span> 9599564835</a></li>
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
              <?php if($this->fuel->auth->is_logged_in()){ ?>
     	 	<li><a href="<?php echo base_url(); ?>dashboard" >Dashboard</a></li>
        	<li><a href="<?php echo base_url(); ?>logout">Sign Out</a></li>
			  <?php }else{ ?> 
             		 <li><a href="<?php echo base_url('/signup'); ?>">Sign Up</a></li>
        <li><a href="<?php echo base_url('/signin'); ?>">Sign In</a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
      

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>

          </div>

        </div>