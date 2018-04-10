<div class="container qa1">
    <div class="row cntn">
        <div class="col-md-9">

            <!--Section: Blog v.1-->
            <section class="section extra-margins manglikform">

                <!--Section heading-->
                <h1 class="section-heading">Tarot Card Reading</h1>
                
                <!--First row-->
                <div class="row">

                  <ol class="breadcrumb" style="background-color:#fff">
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
                      <li class="breadcrumb-item active">Tarot Card</li>
                  </ol>    			
                  <section class="section feature-box">

                    <!--Section heading-->
                    <h2 class="h2-responsive firsthead">Tarot Card</h2>
                    <!--Section sescription-->
                    <p class="section-description lead" style="margin-left:1%;margin-right:1%;font-size:16px;word-spacing:1px">Tarot reading is all about cards. It is a set of playing cards traditionally a set of 78 cards with pictures.This is a concept used mainly by the fortunetellers of English speaking countries.This concept travelled to India from Europe and now it is been used by the Astrologers to predict one&#39;s past, present and future.</p>
                </section>


                <!--First column-->
                <div class="col-md-5 mb-r">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?php echo base_url('assets/astrology/'); ?>/img/tarrot1.jpg">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6 mb-r">
                   <!--Excerpt-->
                   <p style="font-size:15px;word-spacing:4px">Tarot readers are mainly from the occult science background who are specialised in reading the pictures connecting your moods, present situation based on your past. In India, this concept became very popular since 2000 and there are experts in this subject.
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
     <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> 
     <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
     <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
     <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Tarot Card form 1')); ?> 
      <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Services')); ?> 
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

<button id="ask_enquiry2" type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>
<div id="enquiry_result"></div>
<?php echo form_close(); ?>

</div>
<script>
    $('form#sendenquiry1').submit(function(e) {
        var form = $(this);
        e.preventDefault();
        $('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
		$('#ask_enquiry2').css('visibility', 'hidden');
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('service/booking'); ?>",
            data: form.serialize(),
        success: function(data){ //
         window.location.replace(data);	
     },
    // error: function(resp) { alert(JSON.stringify(resp)); }
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
<section class="section feature-box" style="margin-top:3rem">
<h1 class="section-heading howorks">How Tarot works:</h1>
   <div class="col-md-12 mb-r">
    <!--Excerpt-->
    <hr>
    <p style="font-size:20px;word-spacing:1px;text-align:center">It&#39;s a set of cards randomly drawn with pictures depicting about the present or past in one&#39;s life.To make it much simpler Tarort cards don&#39;t tell you what you should be doing or what is going to happen.It simply gives you the possibilities depending upon the path you take.Based on the cards positions or pictures it represents the following aspects;</p>
  </div>
  <div class="row features-small">
    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-4 center-on-small-only"> <img src="<?php echo base_url('assets/astrology/'); ?>/img/tarrot2.jpg" alt="Online Tarot Reading" class="z-depth-0"> </div>
    <!--/First column-->
    <!--Second column-->
  <div class="col-md-7">
  
        <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> How you feel about yourself now,<br> 
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> What you most want at this moment!<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Your fears !<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> What is going for you?<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> What is going against you?<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> The outcome according to your current situation or the question you asked.<br>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Your current relationship, quality as well the meaning it hold for you.<br>
             <i class="fa fa-angle-double-right" aria-hidden="true"></i> Your financial status,past as well present and what might holds for you and etc.<br>
            </p>
            </div>
    <!--/Second column-->
  </div>

</section>

<div style="clear:both;"></div>

<!--Projects section v.4-->
<section class="section extra-margins">
<h1 class="section-heading howorks">What Tarot services you can take online.</h1>

    <!--Section heading-->
    <!--Section description-->
    <p class="section-description">In tarot reading there are mainly 5 kinds of Tarot reading used to answer questions one has.</p>

    <!--First row-->
    <div class="row">
      <div class="col-md-4 mb-r">
            <!--Image-->
            <img src="<?php echo base_url('/assets/astrology'); ?>/img/tarrot3.jpg" alt="Tarot Card Reading" class="img-fluid z-depth-2" style="box-shadow:none">
        </div>
          <div class="col-md-7 offset-md-1">
            <!--First row-->
            <div class="row">
                <div class="col-md-10">
                    <h4 class="feature-title">1.Zodiac Love Tarot: Insight in matters of your heart.</h4>
                    <p class="grey-text">TLove Tarot reveals the truth about your love life. This reading clarifies important relationship issues, allowing you to search for answers through the symbolism Tarot cards. The imagery of this unique system allows you to achieve your heart&#39;s desire.
                    </p>
                </div>
            </div>
            <!--/First row-->

            <div style="height:20px"></div>

            <!--Second row-->
            <div class="row">
               
                <div class="col-md-10">
                    <h4 class="feature-title">2.Yes/ No Tarot: The quick answers.</h4>
                    <p class="grey-text">Need an answer on something urgent? Well then, use the most popular reading. It gives you a simple yes or no and straightforward reply. You just need to focus on your question and select your card.</p>
                </div>
            </div>
            <!--/Second row-->

            <div style="height:20px"></div>

            <!--Third row-->
            <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">3.Karma Oracle: Karma has everyone&#39;s address .</h4>
                    <p class="grey-text">By understanding the secrets hidden within your past lives, you can get closure to your present desires and dreams. Well surprised! Yes , based on the karma reading you can plan your future , in other words it will help you to know the path you can choose. Also , who you were , what has lead you to be what your are ? And your karmic inheritance.</p>
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
                    <h4 class="feature-title">4.Gold Tarot : Money is everything</h4>
                    <p class="grey-text">In case you want to find ways to earn money,than this reading will give the picture of your financial status . Your Gold Tarort reading will help you to see the financial strengths and challenges better , in case you have or want to have any assets. In case your want more cash flow or will there be any cash flow ? <br>
                    Gold Tarot helps you to get closure to your finance .</p>
                </div>
            </div>
             <div style="height:20px"></div>
             <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">5.Lotus Tarot: This moment!</h4>
                    <p class="grey-text">It is a good and simple reading to know or see a snap shot of your current life .It tells you of how things are with you generally, at this moment in time. It can be used to answer specific questions, and has been consulted.</p>
                </div>
            </div>
            <div style="height:20px"></div>
             <div class="row">
                
                <div class="col-md-10">
                    <h4 class="feature-title">Do Tarot reading are accurate?</h4>
                    <p class="grey-text">Well, yes tarot reading can be incredibly accurate. They give you best picture of your present scenario the obstacles and the mistakes probably committed in past. It is a science of cause and effect. That is why there is a reason behind; one should follow the instructions given by the experts at the time of performing tarot.
                    </p>
                </div>
            </div>
           
            </div>

            <div class="col-md-4  offset-md-1">
            <img src="<?php echo base_url('/assets/astrology'); ?>/img/tarrot4.jpg" alt="Online Tarot Card Reading" class="img-fluid z-depth-2" style="box-shadow:none">
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
                <h2 class="mb-2">Consult our Tarrot Reader
                </h2>
                <!--Description-->
                <p class="text-muted">At Akashvaani we have specialists with Tarot reading who helps you with your queries. Choose your cards now to make your days simpler and meaningful.
                </p>
                <!--Button-->
                <a class="btn btn-lg btn-outline-white" data-toggle="modal" data-target="#myModal" style="margin-top: 25px;margin-bottom: 25px; border-radius:35px"><i style="margin-right:6px" class="fa fa-phone" aria-hidden="true"></i>Book Consultation</a>

            </div>
            <!--/First column-->

        </div>
        <!--/First row-->

    </div>
</div>
 <?php echo $serviceForm;?>
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
            <img src="<?php echo base_url('assets/astrology/'); ?>/img/report.jpg">
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
                 <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> 
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
                 <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Tarot Card form 2')); ?> 
                  <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Services')); ?> 
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
                    <button id="ask_enquiry" class="btn btn-primary btn-lg" style="border-radius: 35px!important;background: #ff3366!important;">Submit</button>
                    <div id="enquiry_resultform"></div>
                </div>
            </div>
            <?php echo form_close(); ?>
            
            <script>
                $('form#sendenquiry1').submit(function(e) {
                    var form = $(this);
                    e.preventDefault();
                    $('#enquiry_resultform').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
					$('#ask_enquiry').css('visibility', 'hidden');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('service/booking'); ?>",
                        data: form.serialize(),
        success: function(data){ //
         window.location.replace(data); 
     },
    // error: function(resp) { alert(JSON.stringify(resp)); }
 });
                });
            </script> 
        </div>
        <!--/.Content-->
    </div>
</div>
</div>
</div>

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
                                <img src="<?php echo base_url('assets/astrology/'); ?>/img/mail-sent.png" alt="mailicon">
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
        //error: function(resp) { alert(JSON.stringify(resp)); }
    });

    });

</script>
</div>
</div>

</section>



<div class="container">
 <hr class="firstheadhr">
   <section class="section extra-margins" style="margin-top:65px;">
  <div class="container">
    <hr>
    <h1 class="section-heading howorks">Most Asked Questions</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 What if you get a negative card in a positive position? </p>
            <p>Ans. Negative card in a positive way tell good days are coming in your life. Its time to convert your weakness in to your strength.</p>
            <div class="item"> </div>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-warning q2">
            <p class="bq-title">Q.2 How To Increase The Accuracy Of Your Tarot Card Reading?</p>
            <p>Ans. Ask your question in a positive way rather than negative way. Ask particular question, it will keep your options open <a href="#" class="read_more1">...continue read</a><span class="more_text1"> which will help you in correct decision making. Your question should be focused, but not overly detailed. Rather than looking at one particular aspect of a problem, find a way to look more broadly at it.<a href="#" class="read_less1">...read less</a></span></p>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-success q3">
            <p class="bq-title">Q.3 Reading Tarot Cards For Your Friends and Relatives?</p>
            <p>Ans. Tarot reading for friends and relatives is a way more than fun. You can know what is going on in their life, career, <a href="#" class="read_more2">...continue read</a><span class="more_text2"> can predict present and future situation of the person. <a href="#" class="read_less2">...read less</a></span></p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
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
                            <h4>Pardeep</h4>
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
                            <h4>Sonali</h4>
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
                            <h4>Rahul</h4>
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
                            <h4>Shikha</h4>
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
                            <h4>Sukriti</h4>
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
                            <h4>Lekha Sharma</h4>
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
                            <h4>Atul</h4>
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
                            <h4>Rajbala</h4>
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
                            <h4>Khushboo</h4>
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
<div class="inter_link">
  <h3><a href="https://www.akashvaani.com/tarot-card-reader-in-gurgaon">Tarot card readers in Gurgaon</a></h3>
</div>
<script type="text/javascript" src="<?php echo base_url('/api/js/typeahead.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/geonames.js'); ?>"></script>