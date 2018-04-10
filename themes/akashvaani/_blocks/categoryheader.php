<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 	<title>Akashvaani - <?=$page_title?></title>
<?php echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico'); ?>
	<?=js('jquery/jquery', FUEL_FOLDER)?>

<meta name="keywords" content="<?php echo $meta_keyword; ?>">
<meta name="description" content="<?php echo $meta_description; ?>">
<meta name="geo.region" content="India"/>
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<meta name="language" content="en-US">
<meta name="country" content="India"/>
<meta name="robots" content="ALL"/>
<link rel="canonical" href="https://www.akashvaani.com" />
	    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/fullscreen-slider.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
        <meta name="google-site-verification" content="SBJad0qFCxtpsFUfsMwGdtlflYMVpl8jbQU5-q0IO2M" />
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

        <div id="hero-container-blog" style="height:350px;">
         <div id="carouselBlog" class="carousel slide category" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/slider/slider1.png)">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="carousel-title hide">Featured on Blog</div>
                                <div class="caption-title"><?php echo $categoryData->description; ?></div>
                                <div class="caption-subtitle hide" style="">---<br><br></div>
                                <a style="margin-top:30px;" data-toggle="modal" href="#bookingAppointment" class="btn btn-lg btn-o btn-white">Book an appointment</a>
                                
                            </div>
                            <div class="avatar-caption hide">
                                <img src="<?php echo base_url(); ?>assets/images/category/pandit.jpg" alt="avatar">
                                <div class="ac-user">
                                    <div class="ac-name">Anil Sharma</div>
                                    <div class="ac-title">Pandit</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>  
 <div class="modal fade" id="bookingAppointment" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-remove"></span></button>
                        <h4 class="modal-title" id="contactLabel">Book Your appointment</h4>
                    </div>
                    <div class="modal-body">
<?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'addbooking')); ?>	
  <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?>
    <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => $categoryData->id)); ?>
                            <div class="row nonregrow">
                            
                            
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                  <select class="selectpicker col-xs-12 col-sm-12 col-md-12 col-lg-12" name="service_id" style=" padding: 5px;" required>
             <option value="">--Select Service--</option>
			   <?php foreach($services as $key => $service){ ?>
                              <option value="<?php echo $key; ?>"><?php echo $service; ?></option>
                            <?php } ?>
            </select>

        
        </div>
  		 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
   <?php echo form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'first_name', 'required' => 'required', 'placeholder' => 'First Name', 'value' => '')); ?>	
                                 </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
  <?php echo form_input(array( 'type' => 'text', 'class' => 'form-control', 'name' => 'last_name', 'required' => 'required', 'placeholder' => 'Last Name', 'value' => '')); ?>	
                                </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
  <?php echo form_input(array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'required' => 'required', 'placeholder' => 'Email', 'value' => '')); ?>	
                             </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
   <?php echo form_input(array('type' => 'phone',  'class' => 'form-control','name' => 'phone', 'required' => 'required', 'placeholder' => 'Phone', 'value' => '')); ?>	
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
   <?php echo form_textarea(array('type' => 'phone',  'class' => 'form-control','name' => 'description')); ?>	
                            </div>
                            
                            
                            </div>
					
                    </div><div class="loader" align="center"></div>
                    <div class="modal-footer"> 
                        <?php echo form_submit(array('class' => 'btn btn-green', 'name' => 'submit', 'value' => 'Book Now'));?>
                    </div>
                </div>
                <?php echo form_close(); ?>   
            </div>
        </div>
                                      
                     
                     
                      <script>
						 
   $('form#addbooking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('.loader').html('<span class="fa fa-spin fa-circle-o-notch"></span>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('services/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
		//alert(data);
            //$('#feed-container').prepend(data); 
			$('#bookingstatus').html('<div class="alert alert-success alert-dismissible fade in" role="alert"><div class="icon"><span class="fa fa-check-circle"></span></div><button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span><span class="sr-only">Close</span></button>Thank you for your booking.</div>');
		$('#addbooking')[0].reset();
		$('.loader').html(''); 
		$('#bookingAppointment').modal('hide');	
		window.location.replace(data);
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>            
               
                     
                     
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
