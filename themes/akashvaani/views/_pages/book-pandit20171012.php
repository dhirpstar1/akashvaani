
<div class="view bookpandit">
  <div class="full-bg-img">
    <div class="container">
      <div class="row" id="home">
        <!--First column-->
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <div class="description" style="margin-bottom:25px">
            <h1 class="white-text name ch">Book Vedic Pandit In<br>Delhi &amp; NCR</h1>
            <h2 style="color:#484848" class="cp"> Book Pandit Ji- For All Type of Puja</h2>
            <a href="tel:+919599564835">
            <button type="submit" class="btn-send waves-effect waves-light booknow1">Call Now @<?=CONTACT_NUMBER;?></button>
            </a> </div>
        </div>
        <!--/.First column-->
        <!--Second column-->
        <div class="col-md-4">
          <!--Form-->
          <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'addbooking')); ?> 
          <?php echo form_input(array('id' => 'optiontype', 'type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?>
          <?php echo form_input(array('id' => 'category_id', 'type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> 
		  <?php echo form_input(array('id' => 'date', 'type' => 'hidden', 'name' => 'date', 'value' => date('Y-m-d'))); ?> 
		  <?php echo form_input(array('id' => 'time', 'type' => 'hidden', 'name' => 'time', 'value' => date('h:i'))); ?> 
		  <?php echo form_input(array('id' => 'bookingprice', 'type' => 'hidden', 'name' => 'bookingprice', 'value' => '0.00')); ?>
          <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Book Pandit Page')); ?>
      	  <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Puja')); ?>
          <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
            <div class="card-block">
              <div class="text-xs-center">
                <h3>Book Pandit Now</h3>
                <hr>
              </div>
              <!--Body-->
              <div class="md-form"> <i class="fa fa-user prefix"></i>
                <?php echo form_input(array('id' => 'name', 'class' => 'form-control', 'type' => 'text', 'name' => 'first_name', 'value' => '', 'required' => 'required')); ?>
                <label for="name">Your Name</label>
              </div>
              <div class="md-form"> <i class="fa fa-envelope prefix"></i>
               <?php echo form_input(array('id' => 'email', 'class' => 'form-control', 'type' => 'email', 'name' => 'email', 'value' => '', 'required' => 'required')); ?>
                <label for="email">Email</label>
              </div>
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                <?php echo form_input(array('id' => 'phone', 'class' => 'form-control', 'type' => 'text','name' => 'phone', 'value' => '', 'required' => 'required')); ?> 
                <label for="phone">Phone No.</label>
              </div>
              <div class="row">
                <div class="col-md-12">
                <select class="pujaselect form-control form-control input-lg mydivalert" data-dropup-auto="false"  name="service_id" data-size="5">
                    <option value="0">--Select Service--</option>
                    <?php foreach($services as $key => $service){ ?>
                    <option value="<?php echo $key; ?>"><?php echo $service; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-12"><div class="form-group">
                                    <button type="submit" class="btn-send waves-effect waves-light booknow">Book Now</button>
                                  </div>
                
              <div class="clearfix"></div>
              <div id="bookingstatus" class="loader" align="center"></div>
                </div>
              </div>
            </div>
          </div>
          <!--/.Form-->
           <?php echo form_close(); ?>
        <script>
					 
    $('form#addbooking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('.loader').html('<span class="fa fa-spin fa-circle-o-notch"></span>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
           	$('#bookingstatus').html('Thank you for your booking.');
		$('#addbooking')[0].reset();	
			window.location.replace(data);
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
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
      <div class="col-md-4 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/akashvaani.png" alt="Akashvaani" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
        <h4 class="feature-title">About Akashvaani</h4>
        <p class="grey-text">Akashvaani is the best platform to discover and book for any kind of Puja, astrological consultation, Vastu services and other vedic services</p>
      </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/professionals.png" alt="Akashvaani" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
        <h4 class="feature-title">Qualified Professionals</h4>
        <p class="grey-text">Best network of astrologers, Pandit &amp; vedic professionals. Highly experienced. Qualified &amp; certified.</p>
      </div>
      <!--/Second column-->
      <!--Third column-->
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span class="text-center"><img src="<?php echo base_url('/assets/astrology/'); ?>/img/easy-booking.png" alt="Akashvaani" style="display:inline;margin-bottom: 25px;box-shadow:none"></span>
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
    <section class="section extra-margins">
      <!--Section heading-->
      <!--First row-->
      <div class="row">
        <!--First column-->
        <div class="col-md-1"></div>
        <div class="col-md-4 mb-r">
          <!--Featured image-->
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/panditlanding.jpg"> <a>
            <div class="mask"></div>
            </a> </div>
        </div>
        <!--/First column-->
        <!--Second column-->
        <div class="col-md-1"></div>
        <div class="col-md-5 mb-r">
          <!--Excerpt-->
          <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Book Pandit- For Any Puja </h2>
          <p class="myfont">Akashvaani is a platform to discover and book pandits for various puja for yourself, home, office etc.<br>
            All the Pandits on Akashvaani have a strong background in Vedic studies and are capable of doing all kinds of Puja by authentic Vedic Rituals.</p>
          <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Be it a festival like Diwali or Navaratri, or a celebration like Naamkaran, Marriage and Griha pravesh puja, book a pandit ji or get products and samagri for all your office and home puja needs.</p>
          <p class="myfont"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Our Specialities include, Anushthaans like - Navagraha Shanti, Dus Mahavidya, and pujas like - Mahamrityunjaya, Rudra Abhishek. Our pandit has vast knowledge on your required vedic rituals.</p>
          <p class="myfont"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> All kinds of pujas, paaths, japas, yagyas and hawans in Delhi NCR.</p>
        </div>
        <!--/Second column-->
      </div>
    </section>
    <!--/Section: Blog v.1-->
  </div>
</div>

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
        <div class="avatar"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/Mritunjai1.png" style="width:200px;box-shadow:none"> </div>
        <h4>Mrityunjai Mishra</h4>
      </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-3 mb-r">
        <div class="avatar"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/Avinash.png" style="width:200px;box-shadow:none"> </div>
        <h4>Avinash Shukla</h4>
      </div>
      <!--/Second column-->
      <!--Third column-->
      <div class="col-md-3 mb-r">
        <div class="avatar"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/Kedarnath.png" style="width:200px;box-shadow:none"> </div>
        <h4>Kedar Nath Chaturvedi</h4>
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
            <h4>Ambrish Chaubey</h4>
            <p><i class="fa fa-quote-left"></i>Our son's naamkaran was a very special occasion for us, but my son would not stop crying. Luckily, the Panditji from Akashvaani was very patient and professional.</p>
            <!--Review-->
            <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
          </div>
        </div>
        <!--/First column-->
       <!--Second column-->
        <div class="col-md-4 mb-r">
          <div class="testimonial">
            <!--Content-->
<div class="snippet-markup text-center" itemscope="" itemtype="http://schema.org/Review">
   <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
<div class="snippet-data"><span itemprop="name">
            <h4>Geetika</h4>
</span></div>   </span>
             <div class="snippet-data"><span itemprop="itemReviewed">
<p><i class="fa fa-quote-left"></i>I was anxious about when I was getting married, Akashvaani's astrologer helped me clear a lot of my worry. She knew the answers to my questions and explained the vedic way to me.</p></span></div>
            <!--Review-->
 <div class="snippet-data"><span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">  <span class="rating-value" itemprop="ratingValue">5</span></span>
            <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
          </div>
        </div>
</div></div>
        <!--/Second column-->
        <!--Third column-->
        <div class="col-md-4 mb-r">
          <div class="testimonial">
            <!--Content-->
            <h4>RajBala</h4>
            <p><i class="fa fa-quote-left"></i> I bought my first house, and needed a reliable pandit. My temple panditji cancelled at the last minute. Then, I saw Akashvaani's website, I used the form and they called me back in an hour to confirm. I am very happy with how fast the whole thing was.</p>
            <!--Review-->
            <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
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
  <h2 class="h2-responsive firsthead">Trending Pujas</h2>
  <section class="section">
    <div class="row">
      <!--First column-->
      <div class="col-lg-3 col-md-6 mb-r">
        <div class="card">
          <!--Card image-->
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/grihaprvs.jpg" class="img-fluid" alt="Grihaprvesh Puja" style="position:relative">
            <div class="col-md-12 col-xs-12 servicetitle1">
              <h4 class="card-title serviceh1">Griha Parvesh</h4>
              <a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a> </div>
            <a href="<?php echo base_url('puja/griha-pravesh'); ?>">
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
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
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/wedding.jpg" class="img-fluid" alt="" style="position:relative">
            <div class="col-md-12 col-xs-12 servicetitle1">
              <h4 class="card-title serviceh1">Wedding Puja</h4>
              <a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a> </div>
            <a href="<?php echo base_url('puja/wedding-puja'); ?>">
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
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
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/rudra.jpg" class="img-fluid" alt="Rudra Abhishek Puja" style="position:relative">
            <div class="col-md-12 col-xs-12 servicetitle1">
              <h4 class="card-title serviceh1">Rudra Abhishek</h4>
              <a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            <a href="<?php echo base_url('puja/rudra-abhishek'); ?>">
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
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
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/navgriha.jpg" class="img-fluid" alt="Griha Pravesh Puja" style="position:relative">
            <div class="col-md-12 col-xs-12 servicetitle1">
              <h4 class="card-title serviceh1">Nav Griha Shanti</h4>
              <a class="btn-floating btn-large red waves-effect waves-light float-xs-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a> </div>
            <a href="<?php echo base_url('puja/NavgrahaShanti-Puja'); ?>">
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
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