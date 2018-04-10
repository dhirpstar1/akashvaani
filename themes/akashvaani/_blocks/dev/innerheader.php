<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Akashvaani - 
<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
</title>
<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/fullscreen-slider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet">
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        
        <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1840641496150056');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1840641496150056&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<body class="notransition">
<!-- Header -->
<div id="header">
  <div class="logo"> <a href="<?php echo base_url('/'); ?>"> 
  
<img src="<?php echo resize('assets/images/logo.png', 70, 70, true); ?>" alt="Logo"> 
  
  
   <span class="logoText"></span> </a> </div>
   <div class="col-md-10 innerheaderoption">
 <div class=" pull-right">
<!-- <a href=""><span class="fa  fa-facebook-square"></span> </a>
 <a href=""><span class=" fa  fa-google-plus-square"></span> </a>-->
 
 <span class="fa fa-envelope-o"></span> connect@akashvaani.com
 <span class="fa fa-phone"></span> 959 956 4835
 </div>
 </div>
  <div class="headerUserWraper"> 
  <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span></a> 
  <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
  
  <img src="<?php echo base_url(($pdata->image) ? $pdata->image: 'assets/images/avatar-1.png' );?>" class="avatar headerAvatar pull-left" />
    <div class="userTop pull-left"> <span class="headerUserName"><?=$pdata->first_name; ?> <?=$pdata->last_name; ?></span> <span class="fa fa-angle-down"></span> </div>
    <div class="clearfix"></div>
    </a>
    <div class="dropdown-menu pull-right userMenu" role="menu"> 
    
		
    
      <div class="mobAvatar"> <img class="avatar mobAvatarImg" src="<?php echo base_url(($pdata->image) ? $pdata->image: 'assets/images/avatar-1.png');?>" alt="avatar">
        <div class="mobAvatarName"><?=$pdata->first_name; ?> <?=$pdata->last_name; ?></div>
      </div>
      <ul>
       <?php if($this->fuel->auth->is_logged_in()){ ?>
       <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
       <li><a href="<?php echo base_url('/profile' );?>"><span class="icon-user"></span>Profile</a></li>
       <li><a href="<?php echo base_url('/profile/edit' );?>"><span class="icon-user"></span>Edit Profile</a></li>
       <li><a href="<?php echo base_url('/articles/add' );?>"><span class="icon-user"></span>Add Article</a></li>
              <li><a href="<?php echo base_url('/articles/myarticles' );?>"><span class="icon-user"></span>My Article</a></li>

       <li><a href="<?php echo base_url('/bookings' );?>"><span class="icon-bell"></span>Bookings</a></li>
      <?php /*?> <li><a href="<?php echo base_url('/questionandanswers' );?>"><span class="icon-bell"></span>All Questions</a></li>   
       <li><a href="<?php echo base_url('/questionandanswers/myquestion' );?>"><span class="icon-bell"></span> My Questions <span class="badge pull-right bg-red">5</span></a></li>
       <li><a href="<?php echo base_url('/questionandanswers/newsfeed' );?>"><span class="icon-bell"></span> News Feed</a></li><?php */?>
       <li class="divider"></li>
       <li><a href="<?php echo base_url('/logout' );?>"><span class="icon-power"></span>Logout</a></li>
        <?php }else{ ?> 
       
        <li class="hide"><a href="<?php echo base_url('/questionandanswers/newsfeed' );?>"><span class="icon-bell"></span> News Feed</a></li>
        <li class="divider"></li>  
        <li><a href="<?php echo base_url('/login' );?>"><span class="icon-power"></span>Login</a></li>
       <?php } ?>
      </ul>
    </div>
  </div>
  <div class="headerNotifyWraper hide"> <a href="#" class="headerNotify dropdown-toggle" data-toggle="dropdown"> <span class="notifyIcon icon-bell"></span> <span class="counter">5</span> </a>
    <div class="dropdown-menu pull-right notifyMenu" role="menu">
      <div class="notifyHeader"> <span>Notifications</span> <a href="#" class="notifySettings icon-settings"></a>
        <div class="clearfix"></div>
      </div>
      <ul class="notifyList">
        <li> <a href="#"> <img class="avatar pull-left" src="<?php echo base_url('assets/images/avatar-1.png' );?>" alt="avatar">
          <div class="pulse border-grey"></div>
          <div class="notify pull-left">
            <div class="notifyName">Sed ut perspiciatis unde</div>
            <div class="notifyTime">5 minutes ago</div>
          </div>
          <div class="clearfix"></div>
          </a> </li>
        <li> <a href="#">
          <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
          <div class="pulse border-red"></div>
          <div class="notify pull-left">
            <div class="notifyName">Lorem Ipsum is simply dummy text</div>
            <div class="notifyTime">20 minutes ago</div>
          </div>
          <div class="clearfix"></div>
          </a> </li>
        <li> <a href="#">
          <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
          <div class="pulse border-yellow"></div>
          <div class="notify pull-left">
            <div class="notifyName">It is a long established fact</div>
            <div class="notifyTime">2 hours ago</div>
          </div>
          <div class="clearfix"></div>
          </a> </li>
        <li> <a href="#">
          <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
          <div class="pulse border-magenta"></div>
          <div class="notify pull-left">
            <div class="notifyName">There are many variations</div>
            <div class="notifyTime">1 day ago</div>
          </div>
          <div class="clearfix"></div>
          </a> </li>
      </ul>
      <a href="#" class="notifyAll">See All</a> </div>
  </div>
  <a href="#" class="mapHandler"><span class="icon-map"></span></a>
  <div class="clearfix"></div>
</div>
<!-- Left Side Navigation -->
<div id="leftSide">
  <nav class="leftNav scrollable">
    <div class="search"> <span class="searchIcon icon-magnifier"></span>
      <input type="text" placeholder="Search for houses, apartments...">
      <div class="clearfix"></div>
    </div>
    <ul>
      <li><a href="<?php echo base_url('/'); ?>"><span class="navIcon icon-home"></span><span class="navLabel">Home</span></a></li>   
      <li><a href="<?php echo base_url('/astrology'); ?>" ><span class="navIcon icon-compass"></span><span class="navLabel">Astrology</span></a></li>
      <li><a href="<?php echo base_url('/puja'); ?>" ><span class="navIcon icon-compass"></span><span class="navLabel">Puja</span></a></li>
      <li><a href="<?php echo base_url('articles'); ?>" ><span class="navIcon icon-plus"></span><span class="navLabel">Articles</span></a></li>
    </ul>
  </nav>
  <div class="leftUserWraper dropup hide"> <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown"> <img class="avatar" src="<?php echo base_url('assets/images/avatar-2.png' );?>" alt="avatar"><span class="counter">5</span>
    <div class="userBottom pull-left"> <span class="bottomUserName">John Smith</span> <span class="fa fa-angle-up pull-right arrowUp"></span> </div>
    <div class="clearfix"></div>
    </a>
    <ul class="dropdown-menu " role="menu">
      <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
      <li><a href="<?php echo base_url('/profile' );?>"><span class="icon-user"></span>Profile</a></li>
       <li><a href="<?php echo base_url('/profile/edit' );?>"><span class="icon-user"></span>Edit Profile</a></li>
       
      <li class="divider"></li>
      <li><a href="<?php echo base_url('/logout' );?>"><span class="icon-power"></span>Logout</a></li>
    </ul>
  </div>
</div>
<div class="closeLeftSide"></div>
