<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php  if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
	   endif;
		?></title>
<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<meta name="geo.region" content="India"/>
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<meta name="language" content="en-US">
<meta name="country" content="India"/>
<meta name="robots" content="ALL"/>
<link rel="canonical" href="https://www.akashvaani.com" />
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>
<?=jquery()?>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/fullscreen-slider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
<meta name="google-site-verification" content="SBJad0qFCxtpsFUfsMwGdtlflYMVpl8jbQU5-q0IO2M" />
<meta name="msvalidate.01" content="44581133950047FAEB6B6201B2EF18FF" />
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '805177916291950');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=805177916291950&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TDFNQ');</script>
<!-- End Google Tag Manager -->
</head>
<body class="notransition hidden">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TDFNQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
  
  
  <div class="home-header col-md-12">
    <nav class="navbar navbar-default new_menu navbar-fixed-top">
     <div class="home-logo osLight col-md-4">
     <a href="<?php echo base_url(); ?>" ><img src="<?php echo image_resize('assets/images/logo.png', 100, 100); ?>" alt="Logo" width="100">  </a>
     </div>
    
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
      <li><a href="<?php echo base_url('/product/articles'); ?>" >Articles</a></li>
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
             		<li><a href="#" data-toggle="modal" data-target="#signin">Sign In</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
      

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
  <div class="home-caption">
    <div class="home-title">Experienced Pandits, astrologers, Puja's & More</div>
    <div class="home-subtitle"> </div>
    <a href="#" class="btn btn-lg btn-black hide">Book Now</a> </div>
  <div class="search-panel">
    <form class="form-inline" role="form" action="" method="POST">
    <div class="col-md-2"></div>
      <div class="form-group col-md-5">
        <input type="text" class="form-control" style="width:100%" id="Location" placeholder="Location" autocomplete="off">
      </div>
      <div class="form-group hidden-xs adv col-md-3 hide"> <a href="#" data-toggle="dropdown" style="width:100%;" class="btn btn-white dropdown-toggle"> 
      <span class="dropdown-label pull-left">Services</span> 
      <span class="caret pull-right"></span> </a>
        <ul class="dropdown-menu dropdown-select col-md-12 col-xs-12">
          <li class="active">
            <input type="radio" name="bedno" checked="checked">
            <a href="javascript:void(0);">Services</a></li>
          
        <?php foreach($services as $id => $service){ ?>
        <li>
          <input type="radio" name="bedno" value="<?php echo $id; ?>">
            <a href="javascript:void(0);"><?php echo $service; ?></a></li>
        <?php } ?>
        
          
          
        </ul>
      </div>
       <div class="form-group hidden-xs adv col-md-2"> <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle" style="width:100%;"> 
       <span class="dropdown-label pull-left">Astrology</span> 
       <span class="caret pull-right"></span> </a>
        <ul class="dropdown-menu dropdown-select col-md-12 col-xs-12" >
           <?php foreach($categories as $id => $category){ ?>
        <li>
          <input type="radio" name="catname" value="<?php echo $id; ?>">
            <a href="javascript:void(0);"><?php echo $category; ?></a></li>
        <?php } ?>
        </ul>
      </div>
      <div class="form-group col-md-1">
      <input type="button" name="go" class="btn btn-green" value="Go" id="search">
			<a href="#" class="btn btn-o btn-white pull-right visible-xs" id="advanced">Advanced Search <span class="fa fa-angle-up"></span></a> </div>
            <div class="col-md-1"></div>
    </form>
  </div>
  
  
  <script>
                 $('#search').click(function(e) {
  				var catid = $('input[name="catname"]:checked').val();
				if($('input[name="catname"]:checked').val() == 4){
				window.location.replace("<?php echo base_url('/astrology/'); ?>");
				}else if($('input[name="catname"]:checked').val() == 5){
				window.location.replace("<?php echo base_url('/pooja/'); ?>");	
				}else{
				return false;
				}
				
});
               
               </script> 
  
  
</div>
<div class="highlight hide">
  <div class="h-title osLight">Find your new place with Reales</div>
  <div class="h-text osLight">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
</div>
