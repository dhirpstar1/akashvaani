<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>
<?php  if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
	   endif;
		?>
</title>
<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>
<?=jquery()?>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/fullscreen-slider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="notransition no-hidden">
<!-- Hero -->
<div id="hero-container">
  <ul class="cb-slideshow">
    <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider1.png'); ?>);"></span></li>
    <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider2.png'); ?>);"></span></li>
     <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider1.png'); ?>);"></span></li>
       <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider2.png'); ?>);"></span></li>
       <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider1.png'); ?>);"></span></li>
       <li><span style="background-image: url(<?php echo base_url('assets/images/slider/slider2.png'); ?>);"></span></li>
  </ul>
  
  
  <div class="home-header">
    <div class="home-logo osLight"><a href="<?php echo base_url(); ?>" ><img src="<?php echo image_resize('assets/images/logo.png', 100, 100); ?>" alt="Logo" width="100">  </a></div>
    <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
    <div class="home-nav">

    </div>
  </div>
  <div class="home-caption">
    <div class="home-title">High quality pandits, Astrologers, <br>Various Pooja’s & More</div>
    <div class="home-subtitle"> </div>
    <a href="#" class="btn btn-lg btn-black hide">Book Now</a> </div>
  <div class="search-panel">
   
  </div>
</div>
<div class="highlight hide">
  <div class="h-title osLight">Find your new place with Reales</div>
  <div class="h-text osLight">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
</div>
