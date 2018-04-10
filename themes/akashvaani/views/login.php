<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : 'Login :: '; echo config_item('company_name'); ?> </title>
<?php if(isset($meta)):?>
<?php echo (strpos($meta, '<meta') !== false) ? $meta : '<meta name="description" content="'.$meta.'" />';?>
<?php else:?>
<meta name="keywords" content="<?php echo config_item('default_meta_keywords');?>" />
<meta name="description" content="<?php echo config_item('default_meta_description');?>" />
<?php endif;?>
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
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link href="<?php echo base_url('/assets/astrology/login/'); ?>/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="<?php echo base_url('/assets/astrology/login/'); ?>/css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="<?php echo base_url('/assets/'); ?>/landing/css/profile.css" rel="stylesheet">
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
<body style="background:url('<?php echo base_url('/assets/img/background.jpg'); ?>')no-repeat center center fixed;  -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;
  background-size: cover;">
<!-- /Start your project here-->
<div class="dark"></div>
<div class="container">
  <div class="row">
    <section class="signup">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4 mt-1 hidden-sm-down">
            <h1>Join Us And Ask Question.</h1>
            <ul class="advantages-list">
              <li><span class="green-text"><i class="fa fa-check"></i></span> For your Marriage & Relationship Issues, Career Advice or Any Health Concerns.
</li>
              <li><span class="green-text"><i class="fa fa-check"></i></span> We are Here to help you by Vedic Techniques, astrology, Vastu, Mantra’s etc.
</li>
              <li><span class="green-text"><i class="fa fa-check"></i></span> Ask Any Question. Answers by qualified astrologers.</li>
              <li><span class="green-text"><i class="fa fa-check"></i></span> Quality content related to Veda, astrology, Vastu, Food etc. 
</li>
              <li><span class="green-text"><i class="fa fa-check"></i></span> Stress Less. Live More. Live According to Nature.</li>
            </ul>
             </div>
          <div class="col-md-5 offset-md-3">
            <!--Form with header-->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-2 indigo login_tab" role="tablist">
              <li class="nav-item"> <a class="nav-link signin <?php if($tab == 'login'){ echo 'active';} ?>" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-lock"></i> Log In</a> </li>
              <li class="nav-item"> <a class="nav-link signup <?php if($tab == 'register'){ echo 'active';} ?>" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-user"></i> Sign Up</a> </li>
            </ul>
            <!-- Tab panels -->
            <div class="card">
              <div class="tab-content login_tab_content">
                <!--Panel 1-->
                <div class="tab-pane fade in show <?php if($tab == 'login'){ echo 'active';} ?> signin_content" id="panel5" role="tabpanel">
                  <div class="social-login">
                    <p>- - - - - - - - - - - - - LogIn With - - - - - - - - - - - - - </p>
                    <ul>
                      <li><a href="<?=$facebook_login_url;?>"><i class="fa fa-facebook"></i> Facebook</a></li>
                      <li><a href="<?=$google_login_url;?>"><i class="fa fa-google-plus"></i> Google+</a></li>
                    </ul>
                  </div>
                  <br>
                  <!--Form with header-->
                  <div class="card-block"> <?php echo form_open('login/'.$redirect, 'id="loginForm"'); ?>
                    <!--Body-->
                    <div class="md-form"> <i class="fa fa-envelope prefix"></i>
                      <input type="text" id="login_email" class="form-control" name="email" required>
                      <label for="login_email">Your email</label>
                    </div>
                    <div class="md-form"> <i class="fa fa-lock prefix"></i>
                      <input type="password" id="login_pass" class="form-control" name="password" required>
                      <label for="login_pass">Your password</label>
                    </div>
                    <div class="text-center">
                      <input type="submit" id="login" value="Login" class="btn btn-deep-purple" style="background:#311b92;">
                    </div>
                    <?php echo form_close()?> </div>
                  <!--Footer-->
                   <?php if(validation_errors()):?>
        <div class="alert red">
            <?php echo validation_errors();?>
        </div>
    <?php endif;?>
                  <div class="modal-footer">
                    <div class="options">
                      <p>Not a member? <a href="#" id="signup_link" class="signup_link">Sign Up</a></p>
                      <p>Forget <a href="#" class="forgot_link">Password?</a></p>
                    </div>
                  </div>
                  <!--/Form with header-->
                </div>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <div class="tab-pane fade in show <?php if($tab == 'register'){ echo 'active';} ?> signup_content" id="panel6" role="tabpanel">
                  <div class="social-login">
                    <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
                    <ul>
                      <li><a href="<?=$facebook_login_url;?>"><i class="fa fa-facebook"></i> Facebook</a></li>
                      <li><a href="<?=$google_login_url;?>"><i class="fa fa-google-plus"></i> Google+</a></li>
                    </ul>
                  </div>
                  <br>
                  <!--Form with header-->
                  <div class="card-block">
                    <!--Body-->
                    <div class="row"> <?php echo form_open('register', 'id="registration_form" class="col-md-12"'); ?>
                      <input type="hidden" name="submitted" value="submitted" />
                      <p><strong>Register As:-</strong></p>
                      <div class="col-md-12">
                      
                      <div class="col-md-6 pull-left">
                      <fieldset class="form-group radio">
                      <input name="group_id" type="radio" id="radio1" value="3" checked required>
                      <label for="radio1">User</label>
                      </fieldset>
                      </div>
                      
                       <div class="col-md-6 pull-right">
                      <fieldset class="form-group radio">
                      <input name="group_id" type="radio" id="radio2" value="2"  required>
                      <label for="radio2">Professional</label>
                      </fieldset>
                      </div>
                      
                    </div>
                    
                    </div>
                    <div class="md-form"> <i class="fa fa-user prefix"></i> <?php echo form_input(['name'=>'firstname', 'value'=> assign_value('firstname'), 'id' => 'signup_name', 'class' => 'form-control', 'required' => 'required']);?>
                      <label for="signup_name">Your name</label>
                    </div>
                    <div class="md-form"> <i class="fa fa-envelope prefix"></i> <?php echo form_input(['name'=>'email', 'value'=> '', 'type' => 'email', 'id' => 'signup_email', 'class' => 'form-control', 'required' => 'required']);?>
                      <label for="signup_email">Your email</label>
                    </div>
                     <div class="md-form"> <i class="fa fa-phone prefix"></i> <?php echo form_input(['name'=>'phone', 'value'=>assign_value('phone'), 'type' => 'text', 'id' => 'signup_phone', 'class' => 'form-control']);?>
                      <label for="signup_phone">Your phone</label>
                    </div>
                    <div class="md-form"> <i class="fa fa-lock prefix"></i>
                      <input type="password" id="signup_pass" class="form-control" name="password" autocomplete="off" required>
                      <label for="signup_pass">Your password</label>
                    </div>
                    <div class="md-form"> <i class="fa fa-lock prefix"></i>
                      <input type="password" id="signup_confirmpass" class="form-control" name="confirm" autocomplete="off" required>
                      <label for="signup_confirmpass">Confirm password</label>
                    </div>
                     <?php if(validation_errors()):?>
        <div class="alert red">
            <?php echo validation_errors();?>
        </div>
    <?php endif;?>
                    <div class="text-center">
                      <button type="submit" class="btn btn-indigo">Sign up</button>
                    </div>
                    <div class="modal-footer">
                      <div class="options">
                        <p>Already a member? <a href="#" id="signin_link" class="signin_link">Log In</a></p>
                      </div>
                    </div>
                      <?php echo form_close()?>
                  </div>
                  <!--/Form with header-->
                </div>
                <!--/.Panel 2-->
                
                
                
                <!--Panel 2-->
                <div class="tab-pane fade in show <?php if($tab == 'forgot'){ echo 'active';} ?> forgot_content" id="panel7" role="tabpanel">
       
                  <!--Form with header-->
                  <div class="card-block">
                    <!--Body-->
                    <div class="row"> <?php echo form_open('forgot-password', 'id="forget_form"'); ?>
                      <input type="hidden" name="submitted" value="submitted" />
                              <div class="md-form"> <i class="fa fa-user prefix"></i> <?php echo form_input(['name'=>'email', 'value'=> assign_value('email'), 'id' => 'forgot_email', 'class' => 'form-control', 'required' => 'required']);?>
                      <label for="forgot_email">Your Email</label>
                    </div>
                   
                     <?php if(validation_errors()):?>
        <div class="alert red">
            <?php echo validation_errors();?>
        </div>
    <?php endif;?>
   
                    <div class="text-center">
                      <button type="submit" class="btn btn-indigo">Forgat Password</button>
                    </div>
                  
                    
                      <div class="options">
                        <p>Already a member? <a href="#" id="signin_link" class="signin_link">Log In</a></p>
                      </div>
                    </div>
                      <?php echo form_close()?>
                  </div>
                  <!--/Form with header-->
                </div>
                <!--/.Panel 2-->
                
                
              </div>
            </div>
            <!--/Form with header-->
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/login/'); ?>/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/login/'); ?>/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/login/'); ?>/js/mdb.min.js"></script>
<script type="text/javascript">
  $(".nav-link").click(function(){
  	$('.alert').remove();
});

  $(".signup_link").click(function(){
  	$('.alert').remove();
    $(".signin").removeClass("active");
	$(".signin_content").removeClass("active show in");
    $(".signin_content").attr("aria-expanded","false");
    $(".signup").addClass("active");
    $(".signup_content").addClass("active in show");
    $(".signup_content").attr("aria-expanded","true");
});
    $(".signin_link").click(function(){
	$('.alert').remove();
    $(".signup").removeClass("active");
    $(".signup_content").removeClass("active in show");
	$(".forgot_content").removeClass("active in show");
    $(".signup_content").attr("aria-expanded","false");
    $(".signin").addClass("active");
    $(".signin_content").addClass("active in show");
    $(".signin_content").attr("aria-expanded","true");
});
 $(".forgot_link").click(function(){
	 $('.alert').remove();
	$(".signin").removeClass("active");
    $(".signup_content").removeClass("active in show");
	$(".signin_content").removeClass("active in show");
	
    $(".signup_content").attr("aria-expanded","false");
	$(".signin_content").attr("aria-expanded","false");

    $(".forgot_content").addClass("active in show");
    $(".forgot_content").attr("aria-expanded","true");
});
</script>
</body>
</html>
