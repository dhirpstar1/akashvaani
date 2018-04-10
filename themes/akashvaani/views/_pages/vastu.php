<?php $this->load->view('_astrology/defaultheader')?>
<div class="container qa1">
    <div class="row cntn">
        <div class="col-md-9">

            <!--Section: Blog v.1-->
            <section class="section extra-margins manglikform">

                <!--Section heading-->
                <h1 class="section-heading">Manglik Dosh</h1>
                
                <!--First row-->
                <div class="row">

                  <ol class="breadcrumb" style="background-color:#fff">
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
                      <li class="breadcrumb-item active">vastu-shastra-tips</li>
                  </ol>    			
                  <section class="section feature-box">

                    <!--Section heading-->
                    <h2 class="h2-responsive firsthead">Vastu Shashtra</h2>
                    <!--Section sescription-->
                    <p class="section-description lead" style="margin-left:1%;margin-right:1%;font-size:16px;word-spacing:1px">Vastu Shashtra is a traditional concept in Hindu system of architecture, which literally translates to &quot;science of architecture.&quot; It is an ancient Indian science developed thousands of years ago by Indian sages. They laid down rules for the construction of buildings and temples and same has been practiced for centuries,to create old architectural wonders like temples, palaces, monuments etc.</p>
                </section>


                <!--First column-->
                <div class="col-md-5 mb-r">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?php echo base_url('/assets/astrology/'); ?>/img/vastu1.png">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6 mb-r">
                   <!--Excerpt-->
                   <p style="font-size:15px;word-spacing:4px">Buildings,homes,or any space built according to Vastu shastra principles are said to vibrate with &#39;universal positive&#39; that result in all round happiness,health,wealth and prosperity for the occupants.
                   </p>
                   <p style="font-size:15px;word-spacing:4px">Vastu is also derived from the Sanskrit word &#39;vasathi&#39; which means &#39;comfort&#39;.Comfort is related to the right proportion and positioning of eight directions (E, W, N, S, NE, SE, SW, NW) can profoundly influence the lives of the people living or working in the premises either positively or negatively.Shastra is the sanskrit word for &#39;science&#39; and stands for the principles and guidelines laid down for the construction of a building.
                   </p>
               </div>
               <!--/Second column-->

           </div>
           <!--/First row-->

           <!--/Third row-->
 <p class="section-description lead" style="margin-left:1%;margin-right:1%;font-size:16px;word-spacing:1px">Therefore, in short Vaastu shastra is the science of arranging the above-mentioned elements in their respective places so that they are in harmony which in turn will make the lives of people happy and peaceful.</p>
       </section>
       <!--/Section: Blog v.1-->

       <!--Form with header-->
       
   </div>
   <div class="col-md-3 rightsidebar desktopsidebar">

    <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text">
            Ask From Our Expert
        </div>
    </div>
    <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;">
     <?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> 
     <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
     <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
     <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrology Page')); ?> 
     <div class="card-block">
       <div class="row">
         <div class="col-md-12">

            <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
              <i class="fa fa-user prefix"></i>
              <input type="text" id="name" name="first_name" class="form-control" required>
              <label for="name">Your Name</label>
          </div>

      </div>
      <div class="col-md-12">

        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-phone prefix"></i>
          <input type="text" id="phone" name="phone" class="form-control" required>
          <label for="phone">Phone No.</label>
      </div>

  </div>
  <div class="col-md-12">
     <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
        <i class="fa fa-pencil prefix"></i>
        <textarea type="text" id="form8" class="md-textarea" name="description"></textarea>
        <label for="form8">Ask Your Question</label>
    </div>
</div>

</div>

<button type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>

<?php echo form_close(); ?>
<div id="enquiry_result"></div>
</div>
<script>
    $('form#sendenquiry1').submit(function(e) {
        var form = $(this);
        e.preventDefault();
        $('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('services/booking'); ?>",
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
<!--Footer-->
<hr>
<section class="section feature-box" style="margin-top:3rem">
  <!--Section heading-->
  <h1 class="section-heading howorks">Why it is important to follow Vastu Shastra ?</h1>
  <div class="col-md-12 mb-r">
    <!--Excerpt-->
    <hr>
    <p style="font-size:15px;word-spacing:4px;text-align:center">The Central importance of Vastu Shastra is to add &#39;Value to the Life of the man&#39; staying in a building or home by bringing about harmony between the members, nature and the environment.</p>
    <p style="font-size:15px;word-spacing:4px;text-align:center">Vastu Shastra has evolved over centuries, when the harmonics between elements gets disturbed, our energies get channelized in different directions leading to stress, tension, ill-health, relationship problems and lack of prosperity and good fortune . However, the right implementation of Vastu Shastra can create a balance between the home , building structure, the five elements and the universe.This relation between the internal and external energies, ensures a healthy body and happy mind which leads to wealth, happiness and success. So,it is wise and probably necessary to follow Vastu Shastra guidelines in the design of any construction.</p>
  </div>
  <h1 class="section-heading howorks">What are the Benefits of Vastu Shastra ?</h1>
     <div class="col-md-12 mb-r">
    <!--Excerpt-->
    <hr>
    <p style="font-size:15px;word-spacing:4px;text-align:center">Our lives are govern by many factors . Fate, karma and vastu of the place where we live and work. Apart from karma of a person, our fate and vastu has a lot of affect in the quality of our life. If the vastu is poor but the fate of a person is good then results obtained can be average ; where as if the vastu is good and fate is unfavourable then the ill effects are minimum.</p>
    <p style="font-size:20px;word-spacing:1px;text-align:center"><b>So followings are the wide range of hindrance,risks,problems and obstacles can very much removed or solved with the help of a vastu experts :</b></p>
  </div>
   <div class="row features-small">
    <!--First column-->
    <div class="col-md-1 col-xs-1"></div>
    <div class="col-md-4 center-on-small-only"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/vastu2.png" alt="" class="z-depth-0"/> </div>
    <!--/First column-->
  <div class="col-md-6">
        <p class="myfont">
        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lack of interest in education for children<br> 
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lack of good options with regard to career / business/ job<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Moving into a new city and knowing the right direction to live<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> Slow or loss of business<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Stagnation in family member&#39;s life<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lack of good health , prosperity and success in every parameter of life <br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> All problems related to love affair between two partners<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Official relation between colleagues,boss,suitability of the company,locations and many more professional aspects .<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> All kinds of health,disease and fluctuation in mental happiness.<br>
 <i class="fa fa-angle-double-right" aria-hidden="true"></i> Make your rooms for positive,lovable and fill your daily routin with good fortune .<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> Planning for the right kind of location to start-up your business<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> Plan your interior settings of your office and home for best results and success.<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> Specially for working professional its important to have their space as per vastu for better and faster results.
            </p>
            </div>
  </div>
</section>
<div style="clear:both;"></div>

</div>



<div class="apointment">
    <div class="container">

        <!--First row-->
        <div class="row mb-3 fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

            <!--First column-->
            <div class="col-lg-8 offset-lg-2 text-xs-center smooth-scroll">

                <!--Icon-->
                <i class="fa fa-check fa-4x light-blue-text pt-1 pb-2"></i>
                <!--Title-->
                <h2 class="mb-2">Consult our Vastu Expert
                </h2>
                <!--Description-->
                <p class="text-muted">To know the right kind of vastu and more you need to get in touch with our Vastu specialists at Akashvaani who have studied this ancient scientific subject in depth to give solutions to your problems . 
                </p>
                <!--Button-->
                <a class="btn btn-lg btn-outline-white" data-toggle="modal" data-target="#myModal" style="margin-top: 25px;margin-bottom: 25px; border-radius:35px"><i style="margin-right:6px" class="fa fa-phone" aria-hidden="true"></i>Book Consultation</a>

            </div>
            <!--/First column-->

        </div>
        <!--/First row-->

    </div>
</div>
<?php $this->load->view('_blocks/serviceformnew')?>
<hr style="margin-bottom: 3rem;margin-top:3rem">

<div class="container">
<section class="section feature-box" style="margin-top:3rem">
   <div class="col-md-12 mb-r">
    <!--Excerpt-->
    <hr>
    <p style="font-size:20px;word-spacing:1px;text-align:center"><b>At Akashvaani our Vastu consultants will give you a permanent solution with the following services in depth :</b></p>
  </div>
  <div class="row features-small">
    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-4 center-on-small-only"> <img src="<?php echo base_url('/assets/astrology/'); ?>//img/vastu3.png" alt="" class="z-depth-0"> </div>
    <!--/First column-->
    <!--Second column-->
  <div class="col-md-7">
        <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for Home,including rooms with specification of keeping furniture,mirror,photo frames and etc.<br> 
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for increase in your wealth<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for Shopping malls,shops or commercial complex<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for school,colleges,universities,office building.<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for Hospital,temples,factories<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Vastu for airports,railway stations and etc.<br>
            </p>
            </div>
    <!--/Second column-->
  </div>
  <p class="section-description lead" style="margin-top:30px">Further to consultation our experts help you with Vastu pyramids,vastu plates,Vastu yantra and vastu gemstones as remedies to your problems.<br>
An effective and impeccable solution based on Vastu has brought success and happiness in many hearts leading to a better life.</p>
  <!--/First row-->
</section>
<div style="clear:both;"></div>
</div>


    <section class="footer_texture m-t-65">
        <div class="container sbcrptn">
            <div class="row">
                <div class="col-md-6 col-xs-12 footer_section_align">
                    <span class="text-white font18">Get Your </span><span class="pink-text font24"> daily astrological feed<span class="text-white font18">,</span> Daily Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span>
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
            url: "<?php echo site_url('profile/subscribe'); ?>",
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
 <div class="row">

    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <!--Featured image-->
        <div class="view overlay hm-white-slight" style="box-shadow:none">
            <img src="<?php echo base_url('/assets/astrology/'); ?>/img/report.jpg">
            <a>
                <div class="mask"></div>
            </a>
        </div>
    </div>
    <div class="col-md-6 mb-r mb-h">
        <!--Excerpt-->
        <h3 style="font-weight:600">Reports</h3>
        <p class="myfont">All these can be very much be predicted by Akashvaani expert Astrologers and will suggest Astro remedies to reduce the negative influences on the planets.
        </p>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-login" style="border-radius: 35px!important;
        background: #ff3366!important;">
        Get Your Report
    </button>

    <!-- Modal Login -->
    <div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content" style="padding:35px;">


                <!--Body-->
                <div class="modal-body">
                 <?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> 
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrology Page')); ?> 
                 <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="form2" name="first_name" class="form-control" required>
                    <label for="reportname">Your Name</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" name="email" class="form-control" required>
                    <label for="reportemail">Your email</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-phone prefix"></i>
                    <input type="text" id="form2" name="phone" class="form-control" required>
                    <label for="reportnumber">Your Number</label>
                </div>

                <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg" style="border-radius: 35px!important;background: #ff3366!important;">Submit</button>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div id="enquiry_resultform"></div>
            <script>
                $('form#sendenquiry1').submit(function(e) {
                    var form = $(this);
                    e.preventDefault();
                    $('#enquiry_resultform').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('services/booking'); ?>",
                        data: form.serialize(),
        success: function(data){ //
         window.location.replace(data); 
     },
     error: function(resp) { alert(JSON.stringify(resp)); }
 });
                });
            </script> 
        </div>
        <!--/.Content-->
    </div>
</div>
</div>
</div>

<hr>
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

<script type="text/javascript" src="<?php echo base_url('/api/js/typeahead.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/geonames.js'); ?>"></script>
<?php $this->load->view('_astrology/astrologyfooter')?>
