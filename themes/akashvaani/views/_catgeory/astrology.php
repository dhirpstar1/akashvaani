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
            <div class="col-md-8">
              <div id="serviceDiv" class="col-md-11 srchdrop">

                <div class="card srvcbox">
                  <a href="https://www.akashvaani.com/astrologer" id="Astrological Consultation" class="dropdown-item waves-effect waves-light" onClick="linkselect(this.id)">Astrological Consultation</a>
                  <a href="<?php echo base_url('/astrology/marriage-kundali-matching'); ?>" id="Kundali Milan" class="dropdown-item waves-effect waves-light" onClick="linkselect(this.id)">Kundali Milan</a>
                   <a href="<?php echo base_url('/astrology/online-marriage-prediction'); ?>" id="2017 Marriage Report" class="dropdown-item waves-effect waves-light" onClick="linkselect(this.id)">2017 Marriage Report</a>
                </div>

              </div>
              <div id="custom-search-input">
                <div class="input-group col-md-12">
                  <input id="mydiv" type="text" class="form-control input-lg" placeholder="Astrological Services" onClick="showserviceDiv()" onfocus="blur()" />
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-lg srch" type="button">
                      <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                    </button>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>

    </section>
     <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">Astrological Services</h2>
    <main>
      <div class="row">
        <div class="col-md-9">
             <div class="row">
            <!--First columnn-->

            <div class="col-md-4">
              <!--Card-->
              <div class="card">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                  <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriagecard.jpg" class="img-fluid" alt="" style="position:relative">
                  <div class="col-md-12 col-xs-12 servicetitle"> <h4 class="card-title serviceh">Marriage</h4></div>

                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block astrcard">
                  <!--Title-->
                  <hr>
                  <!--Text-->
                  <p class="card-text">
                    <div class="row marglink">
                      <div class="col-md-6 col-xs-6">
                        <h5 class="blue-text"><a href="<?php echo base_url('/astrology/marriage-kundali-matching'); ?>"> Kundali Milan<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                       </h5>
                        <h5 class="blue-text"><a href="<?php echo base_url('/astrology/manglik-dosha-solution'); ?>">Manglik Dosh<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></h5>
                        <h5 class="blue-text"><a href="<?php echo base_url('/astrology/child-pregnancy'); ?>">Child & Pregnancy<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></h5>
                      </div>
                      <div class="col-md-6 col-xs-6 astrcardh5" style="padding-right: 0">
                        <h5 class="blue-text"><a href="<?php echo base_url('/astrology/online-marriage-prediction'); ?>">Marriage Prediction<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></h5>
                        <!-- <h5 class="blue-text"><a href="<?php echo base_url('#'); ?>">Marriage Problem<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></h5> -->
                        <h5 class="blue-text"><a href="<?php echo base_url('/astrology/love-marriage-relationships'); ?>">Love Marriage<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></h5>
                      </div>
                    </div>
                  </p>
                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->
            </div>

            <!--First columnn-->


            <div class="col-md-4">
              <!--Card-->
              <div class="card">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                  <img src="<?php echo base_url('/assets/astrology/'); ?>/img/careercard.jpg" class="img-fluid" alt="" style="position:relative">
                  <div class="col-md-12 col-xs-12 servicetitle"> <h4 class="card-title serviceh">Career</h4></div>

                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-xs-center">
                  <!--Title-->
                  <hr>
                  <!--Text-->
                  <p class="card-text">
                    <h5 class="blue-text"><a href="<?php echo base_url('/astrology/online-career-and-job'); ?>">Jobs & Career</a> </h5>
                    <h5 class="blue-text"> <a href="#">Prediction & Analysis</a> </h5>
                  </p>
                </div>
                <!--/.Card content-->

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
                  <img src="<?php echo base_url('/assets/astrology/'); ?>/img/healthcard.jpg" class="img-fluid" alt="" style="position:relative">
                  <div class="col-md-12 col-xs-12 servicetitle"> <h4 class="card-title serviceh">Health</h4></div>

                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-xs-center">
                  <!--Title-->
                  <hr>
                  <!--Text-->
                  <p class="card-text">
                     <h5 class="blue-text"><a href="<?php echo base_url('/astrology/medical-and-health'); ?>">Health</a> </h5>
                    <h5 class="blue-text"> <a href="#">Prediction & Analysis</a> </h5>
                  </p>
                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->
            </div>

            <!--Third columnn-->
          </div>
         
        </div>
           <div class="col-md-3 asknow">
 
</div>
      </div>
    </main>
</div>
  <div class="container cntnr1">
<hr class="firstheadhr">
<?=$get_report_section;?>
<br />
</div>
<?php echo $serviceForm; ?>
<div class="container">


  <section class="section feature-box" style="margin-top:3rem;">
    <!--Section heading-->
    <h1 class="section-heading howorks" style="font-size:1.5rem;margin-bottom:2rem; font-weight: 400;">About Vedic Astrology/ Indian Astrology</h1>
    <div class="col-md-12 mb-r" style=" text-align: left;">
      <!--Excerpt-->
      <p class="myfont">Astrology in India is commonly known as 'Jyotish 'the word has been derived from Sanskrit. It means 'light', the science of light. It is also known as Hindu astrology, Indian Astrology and more recently as 'Vedic Astrology'.
</p>
<p class="myfont">It is known as Vedic due to the "science of light". Vedic rituals deal with astral pattern of science reflecting the destiny and future of human. 
</p>
<p class="myfont">It is the study of stars, planets, time and their effects on our daily lives. The movement of stars and planets talks about one's fate and the nature. It tells about various positive and negative events of our lives. 
</p>
<p class="myfont">Vedic astrologers with the help of birth date, time and location can make a birth chart/ horoscope/ kundali.
</p>

    </div>
    <div class="row features-small">
       <div class="col-md-1"></div>
      <!--First column-->
      <div class="col-md-4 center-on-small-only"> <img src="<?=resizedUrl(base_url('/assets/images/astrology_opt.png'), 400, 350); ?>" alt="Life events and Vedic Astrology" class="z-depth-0"> </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-7 center-on-small" style="margin-top:30px;">
        <!--First row-->
        <div class="row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-10" style="text-align: left;">
            <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Life events and Vedic Astrology</h2>
            <p class="myfont">
              The placements of the planets in your kundali will tell you about your basic fulfilment, behaviour, nature, personality, lifestyle one has or need, the potential. 
              </p>
                <p class="myfont">
             you already possess to achieve heights in your career, marriage, what kind of investment one must do for better returns, your strengths, weakness, people around you, siblings, parental issues and family bonding and many more. 
              </p>
          </div>
        </div>
        <!--/First row-->
        <div style="height:50px"></div>
        <!--Second row-->
      </div>
      <!--/Second column-->
    </div>
    <!--/First row-->
        <!--Section heading-->
    <h1 class="section-heading howorks" style="font-size:1.5rem;margin-bottom:2rem; font-weight: 400;">Indian astrology - Guide to Many Life aspects.</h1>
    <div class="col-md-12 mb-r" style="text-align:left;">
      <!--Excerpt-->
      <p class="myfont">It is the study of stars, planets, time and their effects on our daily lives. The movement of stars and planets talks about one's fate and the nature. 
</p>
<p class="myfont">It tells about various positive and negative events of our lives. </p>
<p  class="myfont">Vedic astrologers with the help of birth date, time and location can make a birth chart/ horoscope/ kundali. This chart includes the planetary positions that reveal various aspects of our lives 
</p>
<p  class="myfont">Career, health, job, finance, personality mental health, physical features, creativity, romance, marriage, relationships, education, wealth, property, travelling, change of locations, business and much more.
</p>
<p  class="myfont">It is known as Vedic remedial method. This method includes all kinds of Vedic support or remedies one can get based on their planetary positions to improve their lives as per their dreams. 
</p>
<p  class="myfont">It can be chanting of Vedic mantras, offering Vedic prayers and many other things in relation to your Sun and Moon sign to reduce our past Karmas for better life. </p>
    </div>

        <div style="height:50px"></div>
            <div style="height:50px"></div>
  </section>




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
      <p class="grey-text">Best network of astrologers, Pandit & vedic professionals. Highly experienced. Qualified & certified.</p>
    </div>
    <!--/Second column-->

    <!--Third column-->
    <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
       <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/easy-booking.png" alt="fully responsive" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
      <h4 class="feature-title">Quick & Easy Booking</h4>
      <p class="grey-text">Quick & easy booking. Everything at one platform. Security of money. Detailed reports on your mobile.</p>
    </div>
    <!--/Third column-->
  </div>
  <!--/First row-->

</section>
</div>
  
   <section class="footer_texture m-t-65">
              <div class="container sbcrptn">
                <div class="row">
                  <div class="col-md-6 col-xs-12 footer_section_align">
                    <span class="text-white font18">Get Your </span><span class="pink-text font24"> Daily Astrological feed<span class="text-white font18">,</span> Daily Spiritual feed </span><span class="text-white font18"></span><span class="text-white font18">Directly In Your Inbox</span>
                  </div>
                  <div class="col-md-6 col-xs-12 footer_section_align">

                    <form method="post" action="#" id="subscribe">
                      <div class="form-group">

                        <div class="input-group label_align">

                         
 <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control input-lg input_email sub_input', 'required' => 'required')); ?>

                          <span class="input-group-addon subscribe_align">
                            <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light">
                              <span>
                                <img src="<?php echo base_url('/assets/astrology/'); ?>/img/mail-sent.png" alt="mailicon">
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
            //$('#feed-container').prepend(data);
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

  <hr class="firstheadhr">
    <h2 class="h2-responsive firsthead">What Our customers Says</h2>
<section class="section">
    
    <!--Section heading-->
  

    
    <div class="row">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top" style="margin-bottom:5%">
                <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators testimonial-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active mdb-color"></li>
                <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
                <li data-target="#multi-item-example" data-slide-to="2" class="mdb-color"></li>
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
                <div class="carousel-item">
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

 <div id="bottom">
      <div class="col-md-12" style="text-align:right">
          <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
      </div>
      <div class="cc_banner cc_container cc_container--open">
          <a href="javascript:void(0);" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all" style="max-width: 75px;">Proceed</a>
          <p class="cc_message" style="text-align: left;
padding-left: 20px;"> <span id="quecount">...</span><span style="font-size: 10px; "> question(s) selected.</span> <br>  
         <span id="amountcalc"> ...</span>....  </p>
      </div>
  </div>
<script type="text/javascript">
 $('.cc_btn_accept_all').click(function(){ 
  window.frames.iframewindow.test();
  $('#bottom').hide();
 
 });

  function call_from_child(count){
    var amounttext = '';
     for (i = 0; i < count; i++) {
         if(i < 3){
              if(i == 0){
                    amounttext += 'INR 299/- ';
              }else{
                 amounttext += ' + INR 199/- ';
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