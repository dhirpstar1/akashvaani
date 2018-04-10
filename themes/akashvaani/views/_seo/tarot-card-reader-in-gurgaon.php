<div class="view astrologer" style="background-image:url('<?php echo base_url('/assets/img/taorot header.jpg'); ?>')">
        <div class="full-bg-img">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="description" style="margin-bottom:25px">
                            <h3 class="white-text"><span class="name ch">Best Tarot Card Readers in gurgaon</span><br></h3>
                            <h5 style="color:#484848"><span class="cp">Best Platform for Vedic Services</span></h5><br>
                          
                      <a href="tel:+919599564835">
                      <button type="submit" class="btn-send waves-effect waves-light booknow1">Call Now @959 956 4835</button>
            </a> </div>
                       
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-md-4">
                        <!--Form-->
                        <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="card-block">
                            <div class="text-xs-center">
                                    <h3>Get Quick Response</h3>
                                    <hr>
                                </div>
                                <!--Body-->
                                 <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'addbooking')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
         <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrologer Page')); ?> 
                               <div class="md-form">
    <i class="fa fa-user prefix"></i>
 <?php echo form_input(array('type' => 'text', 'id' => 'name', 'class' => 'form-control', 'name' => 'first_name', 'required' => 'required')); ?>
    <label for="name">Your Name</label>
</div>
                                
                                <div class="md-form">
    <i class="fa fa-envelope prefix"></i>
    <?php echo form_input(array('type' => 'email', 'class' => 'form-control', 'id' => 'email', 'name' => 'email', 'required' => 'required')); ?>
    <label for="email">Email</label>
</div>
<div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-phone prefix"></i>
          <?php echo form_input(array('type' => 'text', 'id' => 'phone', 'class' => 'form-control','name' => 'phone', 'required' => 'required')); ?>   
          <label for="phone">Phone No.</label>
        </div>
      
                          <div class="col-sm-12">
                                  <div class="form-group">
                                    <button type="submit" class="btn-send waves-effect waves-light booknow">Book Now</button>
                                  </div>
                                  <div id="bookingstatus" align="center"></div>
                                </div>
                       </div>
                        </div>
                        <?php echo form_close(); ?>
        
        <script>
						 
   $('form#addbooking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#bookingstatus').html('<span class="fa fa-spin fa-circle-o-notch"></span>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
		$('#bookingstatus').html('');
		$('#addbooking')[0].reset();
		$('.bookingstatus').html(''); 
		window.location.replace(data);
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
<div class="container">
 <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">Why Akashvaani</h2>
<section class="section feature-box">

  <!--First row-->
  <div class="row features-big">
    <!--First column-->
    <div class="col-md-4 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/akashvaani.png" alt="fully responsive" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">About Akashvaani</h4>
      <p class="grey-text">Akashvaani is the best platform to discover and book for any kind of Puja, astrological consultation, Vastu services and other vedic services</p>
    </div>
    <!--/First column-->

    <!--Second column-->
    <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
       <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/professionals.png" alt="fully responsive" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">Qualified Professionals</h4>
      <p class="grey-text">Best network of astrologers, Pandit &amp; vedic professionals. Highly experienced. Qualified &amp; certified.</p>
    </div>
    <!--/Second column-->

    <!--Third column-->
    <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
       <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/easy-booking.png" alt="fully responsive" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">Quick &amp; Easy Booking</h4>
      <p class="grey-text">Quick &amp; easy booking. Everything at one platform. Security of money. Detailed reports on your mobile.</p>
    </div>
    <!--/Third column-->
  </div>
  <!--/First row-->

</section>
<div class="container">
    <hr class="firstheadhr">
<!--Section: Blog v.1-->

<!--Section: Blog v.1-->
<section class="section extra-margins">

    <!--Section heading-->
    <!--First row-->
    <div class="row">

        <!--First column-->
        <dir class="col-md-1"></dir>
        <div class="col-md-4 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/img/Tarot 1.jpg'); ?>">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h4>Tarot</h4>
            <p>The Tarot is a pack of 78 playing cards that have been around since the mid-15th century in Europe. From the late 18th century on, Tarot cards have been used both for divination predicting the future.The Tarot is a collection of symbols or archetypes that represent all of human experience. Tarot is the map of spirit, heart and soul. You lay it out so you can get a bird's-eye view."</p>
            <p>Tarot card reveals following points which is very much required to solve the mystery of life: -</p>
            
            
            <ul style="list-style-type:disc; margin-left:16px;">
  <li style="list-style-type:disc">Tarot predicts your love life  about your partner's compatibility, nature and future with the person</li>
  <li style="list-style-type:disc">It gives a clear picture of your career, job and business</li>
  <li style="list-style-type:disc">Know how successful would be your marriage</li>
  <li style="list-style-type:disc">Tarot is very powerful to predict the health of a person</li>
  <li style="list-style-type:disc">How good your luck would be in terms of money and success</li>
</ul>
<p style="margin-top:10px">Or reader spread your card and answer your questions which would be helpful for you in making your pathway.</p>
<p>Tarot help you in clearing your doubts for future because it gives a snapshot of future happening so that you prepare yourself in a better way.</p>
<p>Tarot card is very powerful tool to reflect your life upcoming events, which has its own significance and gives strength to our will power.</p>
<p>Akashvaani is a platform where we have best famous tarot card reader in Gurgaon who provide fortune reading service online.</p>
<p>We have fortune tellers who are best with highest reviews and customer satisfaction ratings in Gurgaon.</p>
        </div>
        <!--/Second column-->

    </div>
    <!--/First row-->

</section>
<!--/Section: Blog v.1-->
<!--/Section: Blog v.1-->
</div>
</div>


<section class="footer_texture m-t-65">
              <div class="container sbcrptn">
                <div class="row">
                  <div class="col-md-6 col-xs-12 footer_section_align">
                    <span class="text-white font18">Get Your </span><span class="pink-text font24"> Daily Astrological feed<span class="text-white font18">,</span> Daily Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span>
                  </div>
                  <div class="col-md-6 col-xs-12 footer_section_align">

                                 <form method="post" action="#" id="subscribe">
                      <div class="form-group">

                        <div class="input-group label_align">

                          <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control input-lg input_email sub_input', 'required' => 'required')); ?>
                           <span class="input-group-addon subscribe_align">
                            <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light">
                              <span>
                                <img src="https://www.akashvaani.com/assets/astrology/img/mail-sent.png" alt="mailicon">
                              </span>
                            </button>
                          </span>
                        </div>
                      </div> <div id="subscribereturn"></div>
                    </form>
                  </div>
                  <script>
                 
               $('form#subscribe').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $('#subscribereturn').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            $('#subscribereturn').html('<span class="text-white font18">'+ data +'</span>');
        $('#subscribe')[0].reset();
            
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               </script>
                </div>
              </div>
            </section>
            <div class="container">
            
  <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">What Our customers Says</h2>

<div class="container">
    <!--Section: Testimonials v.3-->
<section class="section team-section" style="text-align:center">

    <!--First row-->
    <div class="row text-center">

        <!--First column-->
        <div class="col-md-4 mb-r">
            
            <div class="testimonial">
               
                <!--Content-->
                <h4>Rahul,Delhi</h4>
                <p><i class="fa fa-quote-left"></i>Thank You Akashvaani For Giving Me Instant Service When I Was In Dilemma Of Switching My Job. They Helped In Choosing The Right Decision.</p>

                <!--Review-->
                <div class="orange-text">
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star-half-full"> </i>
                </div>
            </div>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 mb-r">
            <div class="testimonial">
              

                <!--Content-->
                <h4>Sukriti,Noida</h4>
                <p><i class="fa fa-quote-left"></i> Akashvaani Is Worth Taking Service. I Was Doubtful About The Payment Security, But They Are Trustworthy. I Am Satisfied That I Have Invested At Right Place.</p>

                <!--Review-->
                <div class="orange-text">
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                </div>
            </div>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-4 mb-r">
            <div class="testimonial">
              
                <!--Content-->
                <h4>Shikha,Gurgaon</h4>
                <p><i class="fa fa-quote-left"></i>
I Was Much Tensed About My Job Success. I Got My Consultation From This Website, Believe Me Within 3 Months Of Remedies Suggested By Astrologer I Got Promoted In My Company. They Have Best Customer Service Team.</p>

                <!--Review-->
                <div class="orange-text">
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star-o"> </i>
                </div>

            </div>
        </div>
        <!--/Third column-->
        
    </div>
    <!--/First row-->

</section>
<!--/Section: Testimonials v.3-->
</div>


</div>
