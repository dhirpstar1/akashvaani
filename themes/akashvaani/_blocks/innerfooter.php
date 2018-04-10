  <!-- Footer -->

        <div class="row home-footer">
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
                                <a href="https://plus.google.com/+Akashvaani" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-google-plus"></span></a>  </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    
                  <?php $this->load->view('_blocks/subscribe')?>
                   	    </div>
                    
                    
                    
                </div>
                <div class="copyright"><?php echo SITE_NAME; ?><br> &copy; 2014</div>
            </div>
        </div>


		<script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-touch-punch.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.touchSwipe.min.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/js/jquery.visible.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js" type="text/javascript"></script>
     	<script src="<?php echo base_url(); ?>assets/js/infobox.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.tagsinput.min.js" type="text/javascript"></script>
     	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
     	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>   
        <?php //echo js('main').js($js); ?>
        
        
        
    </body>
</html>