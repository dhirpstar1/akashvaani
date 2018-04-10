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
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/astrologyhome.jpg" class="img-fluid" alt="" style="position:relative">
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
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/consulthome.jpg" class="img-fluid" alt="Akashvaai Home Conslt Fees" style="position:relative">
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
                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/bookpujahome.jpg" class="img-fluid" alt="Book with Akashvaani" style="position:relative">
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

      <?=$get_report_section;?>

        
         <hr class="firstheadhr">
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
                <li data-target="#multi-item-example" data-slide-to="0" class="mdb-color"></li>
                <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
                <li data-target="#multi-item-example" data-slide-to="2" class="mdb-color active"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner testimonial-iner" role="listbox">

                <!--First slide-->
                <div class="carousel-item">
                    <!--First column-->
                    <div class="col-md-4">

                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                            <h4>Pardeep,Delhi</h4>
                            <p><i class="fa fa-quote-left"></i> I Wanted An Advice Regarding Marriage Issue. Found Out About Akashvaani.Com On Internet. I Called Them And In Less Than 5 Minutes I Was Talking To Expert Marriage Astrologer . I Got An Advice Based On My Birth Details On Call. It Was More Than Satisfying Experience. It Could Not Have Been Easier And Better Than This</p>

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
                            <h4>Sonali, Gurgaon</h4>
                            <p><i class="fa fa-quote-left"></i> I Wanted An Advice Regarding Marriage Issue. Found Out About Akashvaani.Com On Internet. I Called Them And In Less Than 5 Minutes I Was Talking To Expert Marriage Astrologer . I Got An Advice Based On My Birth Details On Call. It Was More Than Satisfying Experience. It Could Not Have Been Easier And Better Than This.</p>

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
                            <h4>Rahul, Delhi</h4>
                            <p><i class="fa fa-quote-left"></i> Thank You Akashvaani For Giving Me Instant Service When I Was In Dilemma Of Switching My Job. They Helped In Choosing The Right Decision.</p>
                            
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
                            <h4>Shikha, Gurgaon</h4>
                            <p><i class="fa fa-quote-left"></i>I Was Much Tensed About My Job Success. I Got My Consultation From This Website, Believe Me Within 3 Months Of Remedies Suggested By Astrologer I Got Promoted In My Company. They Have Best Customer Service Team. </p>

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
                            <h4>Sukriti, Noida</h4>
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
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                            
                            <!--Content-->
                            <h4>Lekha Sharma, Gurgaon</h4>
                            <p><i class="fa fa-quote-left"></i> I Was Jobless For Last One Year, Irrespective Of My Qualification My Luck Was Not With Me. Then I Contacted Akashvaani.Com. They Told Me About My Dasha And A Simple Remedy. After Two Months I Got Job. I Am Amazed To See This Positive Result.</p>

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

                <!--Third slide-->
                <div class="carousel-item active">
                    <!--First column-->
                    <div class="col-md-4">

                        <div class="testimonial">
                            <!--Avatar-->
                          
                            <!--Content-->
                            <h4>Atul, Delhi</h4>
                            <p><i class="fa fa-quote-left"></i>I Was Very Worried About My Husband’s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me.</p>

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
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                            <h4>Rajbala, Gurgaon</h4>
                            <p><i class="fa fa-quote-left"></i> Excellent Service Offered By Akasvaani.Com. Astrologer Heard All Problems Patiently, Guided Me About My Stars And Solutions. It Was Truly A Good Experience. </p>

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
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 hidden-sm-down">
                        <div class="testimonial">
                            <!--Avatar-->
                           
                            <!--Content-->
                            <h4>Khushboo, Delhi</h4>
                            <p><i class="fa fa-quote-left"></i> I Was Very Worried About My Husband’s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me. </p>

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
                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>
</div>

 <?php /*?><div id="bottom">
      <div class="col-md-12" style="text-align:right">
      <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
      <div class="cc_banner cc_container cc_container--open">
      <a href="<?php echo base_url('/register'); ?>" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all">Ask Now</a>
      <p class="cc_message">Register Now! And Ask One Free Question To Our Top Astrologers</p>
      </div>
            </div>
<?php */?>