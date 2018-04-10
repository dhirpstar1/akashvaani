<?php $this->load->view('_astrology/defaultheader')?>

<div class="container qa1">
    <div class="row cntn">
        <div class="col-md-9">

            <!--Section: Blog v.1-->
            <section class="section extra-margins manglikform">

                <!--Section heading-->
                <h1 class="section-heading">Palmistry Reading</h1>
                
                <!--First row-->
                <div class="row">

                  <ol class="breadcrumb" style="background-color:#fff">
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
                      <li class="breadcrumb-item active">online-palmistry-reading</li>
                  </ol>    			
                  <section class="section feature-box">

                    <!--Section heading-->
                    <h2 class="h2-responsive firsthead">Palmistry</h2>
                    <!--Section sescription-->
                    <p class="section-description lead" style="margin-left:1%;margin-right:1%;font-size:16px;word-spacing:1px">Palmistry is the study of characterization and foretelling the future through reading of the palm, also known as palm reading.It is usually done an expert who can study all the lines and give interpretations of those lines in relation to your past,present and future. These experts are known as Palmists, palm readers, hand readers or hand analyst.</p>
                </section>


                <!--First column-->
                <div class="col-md-5 mb-r">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?php echo base_url('/assets/astrology'); ?>/img/palmistery1.jpg">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6 mb-r">
                   <!--Excerpt-->
                   <p style="font-size:15px;word-spacing:4px">A Palmist,will follow a simple process to read your hand.if you write with your right hand then your active hand is &#39;right&#39;, in case you write with left hand then your active hand is left .
                   </p>
                  
               </div>
               <!--/Second column-->

           </div>
           <!--/First row-->

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

</div>
<div class="container">

<!--Projects section v.4-->
<section class="section extra-margins">

    <!--Section heading-->
    <!--Section description-->
    <p class="section-description">In this prediction there are few main lines which a palmist would like to begin reading and slowly get deeper to know your problems and give you predictions based on those lines .</p>

    <!--First row-->
    <div class="row">
      <div class="col-md-4 mb-r">
            <!--Image-->
            <img src="<?php echo base_url('/assets/astrology'); ?>/img/palmistery2.png" alt="Palmistry Reading" class="img-fluid z-depth-2" style="box-shadow:none">
        </div>
          <div class="col-md-7 offset-md-1">
            <!--First row-->
            <div class="row">
                <div class="col-md-10">
                    <h4 class="feature-title">Heart Line</h4>
                    <p class="grey-text">The first horizontal line under the fingers. It helps to reveal the emotional state of a person and can also be the predictor of the health of heart.<br>
(You have to consult the picture to find the heart line, every one might have a different one)
                    </p>
                </div>
            </div>
            <!--/First row-->

            <div style="height:20px"></div>

            <!--Second row-->
            <div class="row">
               
                <div class="col-md-10">
                    <h4 class="feature-title">Head Line</h4>
                    <p class="grey-text">The horizontal line which lies below the heart line.It is also known as the wisdom line.It is considered to know the psychological and intelligent make up of an individual.</p>
                </div>
            </div>
            <!--/Second row-->

            <div style="height:20px"></div>

            <!--Third row-->
            <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Life Line</h4>
                    <p class="grey-text">It is the curved Lines starts below the index finger and runs down. Usually people consult this line to know how long will they live or any health issues that might affect their long life.</p>
                </div>
            </div>
            <!--/Third row-->

        </div>
    </div>
    <div style="height:70px">
        <hr class="hidden-md-up">
    </div>
<div class="row">
<div class="col-md-7 mb-r">

            <!--First row-->
            <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Staring your fate Line</h4>
                    <p class="grey-text">Starts from the bottom and goes up in the middle of the palm</p>
                </div>
            </div>
             <div style="height:20px"></div>
             <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Ending your fate line</h4>
                    <p class="grey-text">It generally ends at the root of one of the fingers.</p>
                </div>
            </div>
            <div style="height:20px"></div>
             <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Minor Lines</h4>
                    <p class="grey-text">These minor lines reveals about the &#39;s talents, traits,qualities,nature,strength or weakness.They also predicts about the person&#39;s ups and down in life.<br>
Based on the above main lines, our palmist predicts many things about a person.Marriage,health,wealth,relationships,education,career,travel,jobs,children,mental thinking,change of location,sexual problems,good or bad times ahead and many more major or,minor events in your life.
                    </p>
                </div>
            </div>
              <div style="height:20px"></div>
             <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Markings</h4>
                    <p class="grey-text">Markings in palmistry are positive and negative interpretations of the normal flow of palm lines.They can indicate warnings of difficulties, separations, traumatic events or health problems.They give a picture of energy level one individual may carry.<br>
Further to these lines the shape of the hand,fingers,mounts,rings or bracelets also studied for future predictions.
                    </p>
                </div>
            </div>
            </div>

            <div class="col-md-4  offset-md-1">
            <img src="<?php echo base_url('/assets/astrology'); ?>/img/palmistery3.png" alt="Palmistry Line" class="img-fluid z-depth-2" style="box-shadow:none">
        </div>
</div>
    </section>
<!--/Projects section v.4-->

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
                <h2 class="mb-2">Consult our Numerology Expert
                </h2>
                <!--Description-->
                <p class="text-muted">You may avail Akashvaani’s services from our benevolent numerologist to know more about yourself as well get satisfying results into your life more quickly. 
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
  <!--Section heading-->
 
<div class="row">

    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <!--Featured image-->
        <div class="view overlay hm-white-slight" style="box-shadow:none">
            <img src="<?php echo base_url('/assets/astrology'); ?>/img/report.jpg">
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
                                <img src="<?php echo base_url('/assets/astrology'); ?>/img/mail-sent.png" alt="mailicon">
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
<!--footer-->
<?php $this->load->view('_astrology/astrologyfooter')?>
