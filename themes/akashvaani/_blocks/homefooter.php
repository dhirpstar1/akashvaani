<!-- Footer -->
        <div class="home-footer">
            <div class="home-wrapper">
                <div class="row">
                   <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="osLight footer-header">Company</div>
                        <ul class="footer-nav pb20">
                                   <li><a href="<?php echo base_url('/aboutus.htm'); ?>">About</a></li>
                            <li><a href="<?php echo base_url('/terms-condition.htm'); ?>">Terms & Condiation</a></li>
                            <li><a href="<?php echo base_url('/privacy-policy.htm'); ?>">Privacy Privacy</a></li>
                            <li><a href="<?php echo base_url('/bookings/payment'); ?>">Booking Request</a></li>
                        
                        </ul>
                    </div>
                   
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="osLight footer-header">Get in Touch</div>
                        <ul class="footer-nav pb20">
                            <li class="footer-phone"><span class="fa fa-phone"></span> 959 956 4835</li>
    						  <li class="footer-address osLight">
                                <p>246, First Floor,</p>
                                <p>Sector-45, Gurgaon 122003</p>
                                <p>India</p>
                            </li>
                            <li><a href="https://www.facebook.com/iamakashvaani/" target="_blank" class="btn btn-sm btn-icon btn-round btn-o btn-white">
                            	<span class="fa fa-facebook"></span></a> 
                                <a href="https://twitter.com/iamakashvaani" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-twitter"></span></a>
                                <a href="https://plus.google.com/+Akashvaani" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-google-plus"></span></a> 
                                <!--<a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-linkedin"></span></a> -->
                                
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    
                  <?php $this->load->view('_blocks/subscribe')?>
                   	    </div>
                    
                </div>
                <div class="copyright"><?php echo SITE_NAME; ?><br> &copy; 2016</div>
            </div>
        </div>
<?php  if(!$this->fuel->auth->is_logged_in()){ ?>


        <div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signinLabel">Sign In</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form"  method="post" action="<?=site_url('login')?>">
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <a href="<?php echo $facebook_login_url; ?>" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign In with Facebook</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <a href="<?php echo $google_login_url; ?>" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign In with Google</a>
                                </div>
                            </div>
                            <div class="signOr">OR</div>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address" class="form-control" name="user_name" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Remember me</label></div>
                                    </div>
                             
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group-justified"><input type="submit" name="Sign In" value="Login" class="btn btn-lg btn-green" style="width:100%;" id="Login">
                                </div>
                            </div>
                            <p class="help-block">Don't have an account? <a href="<?=site_url('login/register')?>" id="forgotten_pwd" class="text-green">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signupLabel">Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="<?=site_url('login/register')?>" method="post">
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <a href="<?php echo $facebook_login_url; ?>" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign Up with Facebook</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <a href="<?php echo $google_login_url; ?>" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign Up with Google</a>
                                </div>
                            </div>
                            <div class="signOr">OR</div>
                            <div class="form-group">
                                <input type="text" placeholder="First Name" class="form-control" required="required" name="first_name">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" class="form-control" required="required" name="last_name">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email Address" class="form-control" required="required" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" required="required" name="password">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control" required="required" name="password_confirm">
                            </div>
                             <div class="form-group">
                             	<div class="col-md-6">
                            
                            <div class="radio custom-radio"><label><input name="gender" type="radio"  value="male" checked="checked"><span class="fa fa-circle"></span> Male</label></div>
                            </div>
                            <div class="col-md-6">
                            
                            <div class="radio custom-radio"><label><input name="gender" type="radio"  value="female"><span class="fa fa-circle"></span> Female</label></div>
                            </div>
                            
                            </div>
                            <div style="clear:both;"></div>
                            	<div class="col-md-6">
                            
                            <div class="radio custom-radio"><label><input name="profiles_type" value="2" type="radio" checked="checked"><span class="fa fa-circle"></span> Customer</label></div>
                            </div>
                            <div class="col-md-6">
                            
                            <div class="radio custom-radio"><label><input name="profiles_type" value="3" type="radio"><span class="fa fa-circle"></span> Offerer</label></div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <input type="submit" name="Forgot Email" value="Send Email" class="btn btn-lg btn-green" style="width:100%;" id="Login">
                                </div>
                            </div>
                            <p class="help-block">Already a Reales member? <a href="<?=site_url('login')?>" id="forgotten_pwd" class="text-green">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>        
        
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-touch-punch.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.touchSwipe.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/infobox.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.visible.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/home.js" type="text/javascript"></script>
        
        <script>
        $('body').removeClass('hidden').addClass('no-hidden');
        </script>
</body>
</html>