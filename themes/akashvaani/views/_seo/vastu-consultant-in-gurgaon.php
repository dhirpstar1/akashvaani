<div class="view astrologer" style="background-image:url('<?php echo base_url('/assets/img/vastu header 1.jpg'); ?>')">
        <div class="full-bg-img">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="description" style="margin-bottom:25px">
                            <h3 class="white-text"><span class="name ch">Best Vastu Shastra Consultants in Gurgaon</span><br></h3>
                            <h5 style="color:#484848"><span class="cp">Best Platform for Vedic Services</span></h5><br>
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
                <img src="<?php echo base_url('/assets/img/vastu 1.jpg'); ?>">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h4>Vastu For Home</h4>
            
            
            <p>Vastu is about arranging your home in a scientific way taking advantage of the benefits bestowed by nature, its elements and energy fields for enhanced wealth, health, prosperity and happiness.</p>
            <p>Vastu is the only solution if you are suffering from below problems in life.</p>
            <ul style="list-style-type:disc; margin-left:16px;">
              <li style="list-style-type:disc">Working hard but not getting result in studies, business and job</li>
              <li style="list-style-type:disc">You have capabilities but not attaining success in life</li>
              <li style="list-style-type:disc">Frequent fight, troubles and misunderstandings in family life</li>
              <li style="list-style-type:disc">Money outflow is more than inflo</li>
              <li style="list-style-type:disc">Unexpected illness, bad health irrespective of care</li>
            </ul>
<p style="margin-top:10px">Anything against the vastu create problems which make necessary to know the importance & benefits of vastu for living place.</p>
 <ul style="list-style-type:disc; margin-left:16px;">
              <li style="list-style-type:disc">Vastu brings money and wealth, your karma brings various sources of Income and vastu opens the door for "Maa Laxmi" using simple methods.</li> <li style="list-style-type:disc">Make you experience stable peace of mind, increased creativity and success</li>
              <li style="list-style-type:disc">Strengthen your relationship, with all positive energy making your relationship bond stronger </li>
              <li style="list-style-type:disc">Vastu home emits energy which take care of our health</li>
              <li style="list-style-type:disc">Home based on vastu attracts happiness, harmonious relationship & well being</li>
            </ul>
         <p style="margin-top:10px">Vastu improve your life and convert negative energy into positive polishing our overall life with love, luck, positive space</p>
   <p style="margin-top:10px">Vastu allocates space for bed room, Puja room, children room, guest room, kitchen room, study room, drawing room. Correct direction of rooms and objects brings "Shanti" to the home.</p>
   <p style="margin-top:10px">Our expert vastu consultant has deep knowledge in home vastu shastra, who will answer your vastu problems in details. Our consultant will provide best vastu tips for your home making your life simpler and healthier.</p>
   <p style="margin-top:10px">Akashvaani.com is the best vastu consultant service provider in India/Gurgaon. Our Vastu consultant provides services in Gurgaon for Home, factory, business, kitchen vastu. Book India's best vastu Shastra services online in Gurgaon on Akashvaani.com. Our center is awarded with highest customer satisfaction ratings.</p>
            
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
            <h4>Vastu for Commercial</h4>
            <p>Vaastu is an ancient Indian science of architecture and buildings which helps in making a congenial setting or a place to live and work in a most scientific way taking advantage of the benefits bestowed by nature, its elements and energy fields for enhanced wealth, health, prosperity and happiness.
</p>
<p>Vastu for commercial is useful for buildings, offices, shops, factory, industry, clinic, hospital, restaurant and school.</p>
<p>Wrong vastu constructed building, offices has various ill effects and causes problems like:</p>
<ul style="list-style-type:disc;margin-left:20px">
  <li style="list-style-type:disc">Business loss, Expenditure is more than the profit</li>
  <li style="list-style-type:disc">Employees exit rate is high</li>
  <li style="list-style-type:disc">Customers conversion is less irrespective of your best quality</li>
  <li style="list-style-type:disc">Stressful life dominating your life</li>
  <li style="list-style-type:disc">Have wonderful diet but not keeping up well </li>
  <li style="list-style-type:disc">Facing new loss everyday</li>
</ul>
<p style="margin-top:20px;">Vastu reveals the secret behind above problems and give techniques to eliminate problems from our life permanently.</p>
<p style="margin-top:20px;">Our experts uses the concepts of plot selection, planning space orientation for office, direction & placement of objects.</p>

<p style="margin-top:20px;">Our expert provides best way to attain vastu perfection adding value to the quality of your life. Vastu tips given by our consultant are result oriented bringing positive outcome in life.</p>

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
               <img src="<?php echo base_url('/assets/img/vastu 2 office.jpg'); ?>">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--/Second column-->

    </div>
    <!--/Second row-->

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
