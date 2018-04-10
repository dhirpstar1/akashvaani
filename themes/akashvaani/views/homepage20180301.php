<style type="text/css"> 
.frame {
  display: block;
  width: 100vw;
  height: 110vh;
  max-width: 100%;
  margin: 0;
  padding: 0;
  border: 0 none;
  box-sizing: border-box;
}
</style>
<div class="container cntnr1">
  <hr>

  <section id="about" class="text-xs-center wow bounceIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">

    <div class="card">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md-10 astrohead">
            <span class="name">What are you looking for</span>
            <!-- <span class="tagline">Find And Experience<br> The Best Astrology Services.</span> -->
          </div>
        </div>
        <div class="row">
         <div class="col-md-2"></div>
          <div class="col-md-3">
       
<div class="form-group">
  <select class="form-control sel" id="sel1">
    <option value="0">Select Category</option>
    <option value="puja">Puja</option>
    <option value="astrology">Astrology</option>
  </select>
</div>
           
            
          </div>
            <div class="col-md-4">
       
<div class="form-group" id="sel2">
  <select class="form-control sel">
    <option style="text-align:center">Select Service</option>
  </select>
</div>
           
            
          </div>
          <div class="col-md-1">
            
<a class="btn-floating btn-large red go" id="sendpage"><i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </section>
  
  <script type="text/javascript">
 $( "#sel1" ).change(function() {

 if($("#sel1 option:selected" ).text() == 'Puja'){
  $("#sel2").html('<select class="form-control sel"><option value="puja">Good Beginning</option><option value="puja">Occasions</option><option value="puja">Festival</option><option value="puja">Shanti Puja</option><option value="puja">Path & Mantras</option><option value="puja">Pujan</option></select>'); 
 }else if($( "#sel1 option:selected" ).text() == 'Astrology'){
 
   $("#sel2").html('<select class="form-control sel"><option value="marriage-kundali-matching">Kundali Milan</option><option value="online-marriage-prediction">Marriage Prediction</option><option value="manglik-dosha-solution">Manglik Dosh</option><option value="child-pregnancy">Child & Pregnancy</option><option value="love-marriage-relationships">Love Marriage</option><option value="online-career-and-job">Jobs & Carrier</option><option value="medical-and-health">Health Prediction</option></select>');
   }else{
   $("#sel2").html('<select class="form-control sel"><option>Please Select Category</option></select>');
   }
  });
  
  $('#sendpage').click(function(){
  
  if($("#sel2 option:selected" ).val() == 'puja'){
  var url = "<?php echo base_url('/puja'); ?>";
  }else{
  var url = "<?php echo base_url('/astrology/'); ?>/" + $("#sel2 option:selected" ).val();
  }
  window.location.href=url;
  });
  
  
  </script>
  <main>
   <div class="container">
<hr class="firstheadhr">
<h2 class="h2-responsive firsthead">Our Services</h2>
  <div class="row">
          <!--First columnn-->

          <div class="col-md-4">
            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/astrology.png'), 500, 260); ?>" class="img-fluid" alt="" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Astrological Consultation</h4><a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>

                <a href="<?php echo base_url('astrology'); ?>">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->

            </div>
            <!--/.Card-->
          </div>

          <!--First columnn-->


          <div class="col-md-4">
            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/vastu.png'), 500, 260); ?>" class="img-fluid" alt="Akashvaai Home Conslt Fees" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Vastu Consultation</h4>
<a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

                <a href="<?php echo base_url('astrologer'); ?>">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->

            </div>
            <!--/.Card-->
          </div>
          <!--Second columnn-->

          <!--Third columnn-->


          <div class="col-md-4">
            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/puja.png'), 500, 260); ?>" class="img-fluid" alt="Book with Akashvaani" style="position:relative">
                <div class="col-md-12 col-xs-12 servicetitle1"> <h4 class="card-title serviceh1">Book Any Puja</h4>
<a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>

                <a href="<?php echo base_url('puja'); ?>">
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->


           </div>
           <!--/.Card-->
         </div>

         <!--Third columnn-->
       </div>
</div>
<!--Second row-->
<div class="container">

   <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">Why Akashvaani</h2>
<section class="section feature-box">

  <!--First row-->
  <div class="row features-big">
    <!--First column-->
    <div class="col-md-4 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <span class="text-center"><img src="<?php echo base_url(); ?>/assets/astrology/img/akashvaani.png" alt="Akashvaani Gurgaon  " style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">About Akashvaani</h4>
      <p class="grey-text">Akashvaani is the best platform to discover and book for any kind of Puja, astrological consultation, Vastu services and other vedic services.</p>
    </div>
    <!--/First column-->

    <!--Second column-->
    <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
       <span class="text-center"><img src="<?php echo base_url(); ?>/assets/astrology/img/professionals.png" alt="Akashvaani Professionals" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">Qualified Professionals</h4>
      <p class="grey-text">Best network of astrologers, Pandit & vedic professionals. Highly experienced. Qualified & certified. </p>
    </div>
    <!--/Second column-->

    <!--Third column-->
    <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
       <span class="text-center"><img src="<?php echo base_url(); ?>/assets/astrology/img/easy-booking.png" alt="Akashvaani Easy Booking" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">Quick &amp; Easy Booking</h4>
      <p class="grey-text">Quick &amp; easy booking. Everything at one platform. Security of money. Detailed reports on your mobile.</p>
    </div>
    <!--/Third column-->
  </div>
  <!--/First row-->

</section>




</div>
<!--/.Second row-->
<!--Second row-->
<!--/.Main layout-->

</main>



</div>
<hr class="firstheadhr">
<div class="home-callback-area">
            <div class="container">
                <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="call-back-content">
                            <h2>Request For Call Back</h2>
                            <p>All Kind of Vedic solutions like Astrological consultancy, Puja & Rituals, Vastu Services & More</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="call-back-form">                           
                          <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Home Page')); ?>
                             <fieldset>
                                <div class="col-sm-12">
                                <div class="form-group">
                                      <select class="form-control" id="sel1" name="regarding_details">
                                        <option>Regarding Marriage</option>
                                        <option>Regarding career</option>
                                        <option>Regarding health</option>
                                        <option>Pandit booking</option>
                                      </select>
                                  </div>
                                  </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name*" required>
                                    
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name*" required>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email*" required>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone*" required>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <button type="submit" class="btn-send btn-primary">Submit</button>
                                  </div>
                                </div>
                              </fieldset>
                            <div id="responceform" align="center"></div>
 <?php echo form_close(); ?>
 <script>
    $('form#sendenquiry').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#responceform').html('<span class="fa fa-spin fa-circle-o-notch"></span>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
			window.location.replace(data);	
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
</script> 
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
         <hr class="firstheadhr">

         
 <section class="section magazine-section" style="text-align:center" id="iframestart">
     

  <div class="container">

      <?=$get_report_section;?>
  </div>
        </section>
        <section class="section magazine-section" style="text-align:center">

    <!--Section heading-->
    <h2 class="h2-responsive firsthead">Consult Online. Ask Question</h2>

    <!--Section description-->
    <p class="section-description">Un complicate your life - Answers by Expert Astrologers</p>
    <a href="<?php echo base_url('/consult-online'); ?>">
<button type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366; font-size:1.5rem">Ask Now<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button></a>
</section>


<div class="home-counter-down-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="home-counter-down-title">
                            <h2>We have <span>Years</span> </h2>
                            <p>Of Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ab-count">
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list">
                                    <h1 class="about-counter">100+</h1>
                                    <p>Professionals</p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->                 
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list">
                                    <h1 class="about-counter">1000+</h1>
                                    <p>Services Delivered</p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->                 
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list last-child">
                                    <h1 class="about-counter">98%+</h1>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
  
                   <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">What Our customers Say</h2>
<section class="section">
    
    <!--Section heading-->
   
    <div class="row">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top" style="margin-bottom:5%">
                <a class="btn-floating btn-small mdb-color waves-effect waves-light" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating btn-small mdb-color waves-effect waves-light" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators testimonial-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="mdb-color active"></li>
                <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner testimonial-iner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">
                    <!--First column-->
                    <div class="col-md-4">

                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                             <h4>Naresh Choudhary - Pune Maharashtra</h4>
                           <p><i class="fa fa-quote-left"></i> I've tried akashvaani for several questions and other services such as match matching and kundali services. All answers are satisfactory and I would suggest to try akashvaani for any kind of astrological questions/remedies or any other remedies for their problems. Akashvaani was beneficial for me since I got 100% accurate answers for my questions and I'm totally satisfied for akashvaani services. I got all answers and services on time. Thank you akashvaani. </p>

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
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                             <h4>Pranav Kulkarni, Aurangabad, Maharashtra</h4>
                             <p><i class="fa fa-quote-left"></i> The service\akashvani was good.predictions explained was satisfactory and precise .</p>
                            
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
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                         
                            <!--Content-->
                            <h4>Aseem Tandon - Chandigarh Punjab</h4>
                           <p><i class="fa fa-quote-left"></i>I asked about marriage, career health for myself, my sister and my mother All my questions have been answered promptly. I always recommend akashvaani for my family. Thanks for all the help. All the answers are 100% satisfied. </p>

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
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <!--First column-->
                    <div class="col-md-4">

                        <div class="testimonial">
                            <!--Avatar-->
                          
                            <!--Content-->
                            <h4>Sheeba David - Pune Maharashtra</h4>
                             <p><i class="fa fa-quote-left"></i> I got to know akashwani online and I got good predictions but I am yet to experience the predictions given by them and I m sure I will get good results based on their predictions astrologers are good and supportive everyone should try akashwani. </p>
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
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                            <h4>Suchismita Seth - Amtala, West Bengal</h4>
                            <p><i class="fa fa-quote-left"></i> I was much tensed about my education and career. Found out about akashvaani.com on internet. I got my consultation from this website . astrologer was helped me. I am really greatfull to his guidance. </p>

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
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                            
                            <!--Content-->
                            <h4>ABHAY TIWARI - Chandrapur, Maharashtra</h4>
                            <p><i class="fa fa-quote-left"></i> Thanks for the service. The service is really good actually  my doubt is cleared now & I know what to do & what not?? With the help of this service it provides me guidance for career to choose right path in my life.Thanks for your guidance & giving accurate & concisely information. Thankyou very much for your service.</p>

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
                <!--/.Second slide-->

               

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>
</div>

 

<script type="text/javascript">
 $('.cc_btn_accept_all').click(function(){ 
  window.frames.iframewindow.test();
  $('#bottom').hide();

  <?php /* if($device == 'mobile'): ?>
  $("#iframewindow").contents().scrollTop(1400);
  <?php else: ?>
$("#iframewindow").contents().scrollTop(300);
  <?php endif; */ ?>

 //$('html, body').animate({
    //    scrollTop: $("#iframestart").offset().top
   // }, 1000);
  
   

  
 });

  function call_from_child(count){
    var amounttext = '';
     for (i = 0; i < count; i++) {
         if(i < 3){
              if(i == 0){
                    amounttext += 'INR 299/- ';
              }else{
                 amounttext += ' + INR 150/- ';
              }
        }
    } 

      $("#bottom").fadeIn();
      $('#quecount').html('<b>' + count +'</b>');
      $('#amountcalc').html('<b>' + amounttext +'</b>');
      
  }


  // Find all iframes
var $iframes = $( "iframe" );
 
// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
    // Remove the hardcoded width &#x26; height attributes
    .removeAttr( "width" )
    .removeAttr( "height" );
});
 
// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
    // Get the parent container&#x27;s width
    var width = $( this ).parent().width();
    $( this ).width( width )
      .height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();
</script>