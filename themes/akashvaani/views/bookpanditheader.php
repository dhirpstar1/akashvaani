<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php  if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
	   endif;
		?></title>
		<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width">
<meta name="Robots" content="follow, index, all">
<meta name="googlebot" content="index, follow">
<meta name="document-type" content="public">
<meta charset="utf-8">

<link rel="canonical" href="<?php echo base_url(uri_string()); ?>" />
<meta name="geo.region" content="India"/>
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<meta name="language" content="en-US">
<meta name="country" content="India"/>
<meta name="robots" content="ALL"/>
<meta name="msvalidate.01" content="44581133950047FAEB6B6201B2EF18FF" />
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('/assets/astrology/'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('/assets/astrology/'); ?>/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
<link href="<?php echo base_url('/assets/astrology/'); ?>/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
(function(a,e,c,f,g,h,b,d){var k={ak:"871730050",cl:"m8niCP_ho2sQgpfWnwM",autoreplace:"9599564835"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TDFNQ');</script>
<!-- End Google Tag Manager -->                                                                                                                      
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TDFNQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
</head>
<body>

  <!-- Start your project here-->
  <div id="mySidenav" class="sidenav">
   <ul id="slide-out" class="side-nav fixed custom-scrollbar ps-container ps-theme-default ps-active-y">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper waves-light waves-effect waves-light">
        <a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/logo1.png" class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->

    <!--Social-->
    <li>
      <ul class="social">
        <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
        <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
        <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
        <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
      </ul>
    </li>
    <!--/Social-->

    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url('/'); ?>"><span class="home"></span> Home</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><span class="astrology"></span> Astrology<i class="fa fa-angle-down rotate-icon"></i></a>
          <div class="collapse" id="collapseExample1">
            <div class="collapseitem">
              <ul>
                <li><a class="collapsible-header waves-effect arrow-r" data-toggle="collapse" href="#marriage" aria-expanded="false" aria-controls="collapseExample"><span class="marriageicon"></span> Marriage<i class="fa fa-angle-down rotate-icon"></i></a>
                  <div class="collapse" id="marriage">
                    <div class="collapseitem">
                      <ul>
                         <li><a href="<?php echo base_url('/astrology/marriage-kundali-matching'); ?>" class="waves-effect">Kundali Milan</a>
                        </li>
                        <li><a href="<?php echo base_url('/astrology/online-marriage-prediction'); ?>" class="waves-effect">Marriage Prediction</a>
                        </li>
                        <li><a href="<?php echo base_url('/astrology/manglik-dosha-solution'); ?>" class="waves-effect">Manglik Dosh</a>
                        </li>
                        <li><a href="<?php echo base_url('/astrology/child-pregnancy'); ?>" class="waves-effect">Child & Pregnancy</a>
                        </li>
                        <li><a href="#" class="waves-effect">Marriage Problems</a>
                        </li>
                        <li><a href="<?php echo base_url('/astrology/love-marriage-relationships'); ?>" class="waves-effect">Love Marriage</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r" data-toggle="collapse" href="#career" aria-expanded="false" aria-controls="collapseExample"><span class="careericon"></span> Career<i class="fa fa-angle-down rotate-icon"></i></a>
                  <div class="collapse" id="career">
                    <div class="collapseitem">
                      <ul>
                        <li><a href="<?php echo base_url('/astrology/online-career-and-job'); ?>" class="waves-effect">Job & Career</a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r" data-toggle="collapse" href="#health" aria-expanded="false" aria-controls="collapseExample"><span class="healthicon"></span> Health<i class="fa fa-angle-down rotate-icon"></i></a>
                  <div class="collapse" id="health">
                    <div class="collapseitem">
                      <ul>
                        <li><a href="<?php echo base_url('/astrology/medical-and-health'); ?>" class="waves-effect">Health</a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url('/puja'); ?>"><span class="pujaicon"></span> Puja</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url('/product/articles'); ?>"><span class="articleicon"></span> Articles</a>
        </li>
         <li><a class="collapsible-header waves-effect arrow-r" href="tel:+91<?=CONTACT_NUMBER;?>"><span class="fa fa-phone"></span> <?=CONTACT_NUMBER;?></a>
        </li>
       <!--  <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url('/product'); ?>"><i class="fa fa-magic"></i>Products</a>
        </li -->
      </ul>

    <!--/. Side navigation links -->

<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 281px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 158px;"></div></div></ul>
  </div>

  <!--Navbar-->
  <nav class="navbar navbar-fixed-top scrolling-navbar collapsenav">

    <div class="float-xs-left menu1 bars">
      <a id="barmenu" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>
    <div class="breadcrumb-dn logo1">
      <a href="#"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/logo1.png" class="img-fluid flex-center"></a>
    </div>
    <ul class="nav navbar-nav float-xs-left menu1">
     <li class="nav-item ">
      <a class="nav-link waves-effect waves-light" href="<?php echo base_url('/'); ?>"><span class="hidden-sm-down">Home</span></a>
    </li>
    <li class="nav-item dropdown">
      <a id="contact" href="https://www.akashvaani.com/astrology" class="nav-link waves-effect waves-light contact" href="<?php echo base_url('/astrology'); ?>"> <span class="hidden-sm-down">Astrology</span></a>

    <div class="dropdown-content card">
        <div class="row">
          <div class="col-md-4" style="border-right: 1px solid #0003;">
                <ul class="navlink">
              <li style="font-weight: 500;color:#ec3333;">Marriage<i class="fa fa-caret-right" aria-hidden="true"></i></li><hr>
              <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/marriage-kundali-matching'); ?>">Kundali Milan</a></li>
              <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/online-marriage-prediction'); ?>">Marriage Prediction</a></li>
              <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/manglik-dosha-solution'); ?>">Manglik Dosh</a></li>
              <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/child-pregnancy'); ?>">Child & Pregnancy</a></li>
              <li><a class="dropdown-item waves-effect waves-light">Marriage Problems</a></li>
              <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/love-marriage-relationships'); ?>">Love marriage</a></li>
            </ul>
          </div>
         <div class="col-md-4">
           <ul class="navlink">
            <li style="font-weight: 500;color:#ec3333;">Health<i class="fa fa-caret-right" aria-hidden="true"></i></li><hr>
            <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/medical-and-health'); ?>">Health</a></li>
            <li><a class="dropdown-item waves-effect waves-light">Prediction & Analysis</a></li>
  
          </ul>
        </div>
        <div class="col-md-4">
         <ul class="navlink">
          <li style="font-weight: 500;color:#ec3333;">Career<i class="fa fa-caret-right" aria-hidden="true"></i></li><hr>
          <li><a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrology/online-career-and-job'); ?>">Job & career</a></li>
          <li><a class="dropdown-item waves-effect waves-light">Prediction & Analysis</a></li>
        </ul>
      </div>
    </div>
  </div>
</li>
<li class="nav-item ">
  <a class="nav-link waves-effect waves-light" href="<?php echo base_url('/puja'); ?>"><span class="hidden-sm-down">Puja</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link waves-effect waves-light" href="<?php echo base_url('/product/articles'); ?>"> <span class="hidden-sm-down">Articles</span></a>
</li>
<li class="nav-item "> <a class="nav-link waves-effect waves-light" href="<?php echo base_url('/consult-online'); ?>"> <span class="hidden-sm-down">Ask Question</span><span class="hidden-sm-down badge red">New</span></a> </li>
<!-- <li class="nav-item ">
  <a class="nav-link waves-effect waves-light" href="<?php echo base_url('/product'); ?>"> <span class="hidden-sm-down">Products</span></a>
</li -->

</ul>
<ul class="nav navbar-nav float-xs-right menu1">
 <li class="nav-item dropdown">
  <a class="signup nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Book Now</a>
  <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
     <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/astrologer'); ?>">Book Astrologer</a>
    <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url('/puja/book_pandit'); ?>">Book Pandit</a>
     <?php if(CI::Login()->isLoggedIn(false, false)):?>
    <a class="dropdown-item waves-effect waves-light" href="<?php echo  site_url('my-account');?>"><?php echo lang('my_account')?></a>
    <a class="dropdown-item waves-effect waves-light" href="<?php echo site_url('logout');?>"><?php echo lang('logout');?></a>
    <?php else: ?>
    <a class="dropdown-item waves-effect waves-light" href="<?php echo site_url('login');?>">SignIn/SignUp</a>
     <?php endif; ?>
    
  </div>
</li>
</ul>
</nav>
