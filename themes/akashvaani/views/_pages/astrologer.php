<div class="view astrologer">
        <div class="full-bg-img">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="description" style="margin-bottom:25px">
                            <h3 class="white-text"><span class="name ch">Experienced Astrologers</span><br></h3>
                            <h5 style="color:#484848"><span class="cp">for marriage, career & Health consultations</span></h5><br>
                            <span style="font-size:20px;">Best platform for astrological services.<span> </span></span><br>
                      <a href="tel:+919599564835">
                      <button type="submit" class="btn-send waves-effect waves-light booknow1">Call Now @<?=CONTACT_NUMBER;?></button>
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
         <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
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
        <div class="row">
        <div class="col-md-12">
                    <select class="pujaselect form-control form-control input-lg mydivalert" name="service_id">
            <?php foreach($services as $key => $service){ ?>
            <option value="<?php echo $key; ?>"><?php echo $service; ?></option>
            <?php } ?>
          </select>
           </div>
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
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriageprediction.jpg">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h4>Marriage Prediction</h4>
            <p>Marriage is one of the most sacred institutions and significant occasion in a person's life. After a certain point in life a person starts aspiring for marital bliss and a smooth love life. Questions regarding marriage start making a person anxious.</p>
            <ul style="list-style-type:disc; margin-left:16px;">
  <li style="list-style-type:disc">When will I get married? Why is my <span><b>marriage getting delayed</b></span></li>
  <li style="list-style-type:disc">Why is there <span><b>denial in marriage?</b></span></li>
  <li style="list-style-type:disc">Will I have a <span><b>love marriage</b></span> or an <span><b>arranged marriage?</b></span></li>
  <li style="list-style-type:disc">How will be my love life <span><b>after marriage?</b></span></li>
</ul>
<p style="margin-top:10px">Vedic astrology has for many ages answered such questions.</p>
<p>Decision about date of marriage can also be made based on maha dasa-dasa planetary
timing as defined in Vedic astrology.
</p>
<p>By vedic astrological techniques and right professional guidance, you can be more informed. Take better decisions. Remedies suggested by professional make situation better for you. Guiding to a better future.</p>
        </div>
        <!--/Second column-->

    </div>
    <!--/First row-->

    <hr style="display:block">

    <!--Second row-->
    <div class="row">

        <!--First column-->
        <dir class="col-md-1"></dir>

        <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h4>Kundali Milan</h4>
            <p>Every person desires an exciting love-life and a compatible and harmonious relationship with their partners. In Indian astrology, matching the kundli of prospective bride and groom is considered very important. Kundli Match is based on Ashtakuta method. The final result depends on the summation of points assigned to all personality aspects. Matchmaking gives insights into following questions: 
</p>
<ul style="list-style-type:disc;margin-left:20px">
  <li style="list-style-type:disc">Psycho-Physical <span><b>compatibility of a couple</b></span></li>
  <li style="list-style-type:disc">What will be the possible <span><b>marital Harmony</b></span> or discord between the couple?.</li>
  <li style="list-style-type:disc"><span><b>Longevity</b></span> of marriage.</li>
  <li style="list-style-type:disc"><span><b>Nature of spouse</b></span> and other details</li>
  <li style="list-style-type:disc"><span><b>Manglik Dosh</b></span> analysis for girl and boy</li>
  <li style="list-style-type:disc"><span><b>Nadi Dosh analysis</b></span> - which comes from the eighth house</li>
  <li style="list-style-type:disc">Our professionals provide the remedies for all such problems</li>
</ul>
<p style="margin-top:20px;">Best professionals using Vedic astrological techniques would guide you for better future.</p>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/kundalimilan.jpg">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/Second column-->

    </div>
    <!--/Second row-->

    <hr style="display:block">

    <!--Third row-->
    <div class="row">

        <!--First column-->
        <dir class="col-md-1"></dir>
        <div class="col-md-4 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriageproblem.jpg">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h4>Marriage Problems</h4>
            <p>Different relationships have different problems and compatibility issues. Astrology helps us giving the solutions to problems like </p>
            <ul style="list-style-type:disc;margin-left:20px">
  <li style="list-style-type:disc"><span><b>Compatibility problems</b></span></li>
  <li style="list-style-type:disc"><span><b>mis-trust</b></span></li>
  <li style="list-style-type:disc"><span><b>Extra-marital affairs</b></span></li>
  <li style="list-style-type:disc"><span><b>Abusive behaviour</b></span></li>
  <li style="list-style-type:disc"><span><b>Child and pregnancy problems</b></span></li>
</ul>
<p style="margin-top:15px;">Vedic Astrology studies planetary combinations, dasha/mahadasha timing systems to provide practical remedies for betterment of marital relationship</p>
<p style="margin-top:15px;">Our professionals use Vedic astrological techniques to guide you for better future.</p>
        </div>
        <!--/Second column-->

    </div>
    <!--/Third row-->

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
    <h2 class="h2-responsive firsthead">Our Top Astrologers</h2>

<section class="section team-section "> 

  <!--Section heading-->
  <!--Section sescription-->
 

  <div class="row text-xs-center">

    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-3 mb-r">
      <div class="avatar">
        <img src="<?php echo base_url('/assets/astrology/'); ?>/img/sunil.png" style="width:200px;box-shadow:none">
      </div>
      <h4>Sunil Vashist</h4>

    

    </div>
    <!--/First column-->

    <!--Second column-->
    <div class="col-md-3 mb-r">
      <div class="avatar">
         <img src="<?php echo base_url('/assets/astrology/'); ?>/img/maina.png" style="width:200px;box-shadow:none">
      </div>
      <h4>Maina Bhatnagar</h4>

    
    </div>
    <!--/Second column-->

    <!--Third column-->
    <div class="col-md-3 mb-r">
      <div class="avatar">
         <img src="<?php echo base_url('/assets/astrology/'); ?>/img/manoj.png" style="width:200px;box-shadow:none">
      </div>
      <h4>Manoj Bhandari</h4>

   
    </div>
    <!--/Third column-->
  </div>

</section>
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


<div class="container">
    <!--Section: Products v.1-->
    <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">Top Astrology Services</h2>
<section class="section">

    <div class="row">

        <!--First column-->
        <div class="col-lg-3 col-md-6 mb-r">

          <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/kundalimilan.jpg" class="img-fluid" alt="" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Kundali Milan</h4>
<a href="https://www.akashvaani.com/astrology/marriage-kundali-matching" class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

                <a href="https://www.akashvaani.com/astrology/marriage-kundali-matching">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->

            </div>
            <!--/.Card-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <!--Card-->
        
        <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/manglikdosh.jpg" class="img-fluid" alt="" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Manglik Dosh</h4>
<a href="https://www.akashvaani.com/astrology/manglik-dosha-solution" class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

                <a href="https://www.akashvaani.com/astrology/manglik-dosha-solution">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->


           </div>
            <!--/.Card-->

        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <!--Card-->
          <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/careerimage.jpg" class="img-fluid" alt="" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Job & Career</h4><a href="https://www.akashvaani.com/astrology/online-career-and-job" class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>

                <a href="https://www.akashvaani.com/astrology/online-career-and-job">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->

            </div>
            <!--/.Card-->

        </div>
        <!--/Third column-->

        <!--Fourth column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <!--Card-->
         <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/love.jpg" class="img-fluid" alt="" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Love Marriage</h4>
<a href="https://www.akashvaani.com/astrology/love-marriage-relationships" class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

                <a href="https://www.akashvaani.com/astrology/love-marriage-relationships">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->

            </div>
            <!--/.Card-->

        </div>
        <!--/Fourth column column-->

    </div>
    <!--/First row-->

</section>
<!--/Section: Products v.1-->
</div>
<?php /*?> <div id="bottom">
      <div class="col-md-12" style="text-align:right">
      <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
      <div class="cc_banner cc_container cc_container--open">
      <a href="<?php echo base_url('/register'); ?>" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all">Ask Now</a>
      <p class="cc_message">Register Now! And Ask One Free Question To Our Top Astrologers</p>
      </div>
            </div><?php */?>