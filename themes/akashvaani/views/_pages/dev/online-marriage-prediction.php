<link rel="stylesheet" href="<?= base_url() ?>/api/css/style.css" media="all"  type="text/css"/>
      <link href="<?php echo base_url('/assets/sliders/css/slider.css'); ?>" rel="stylesheet">
      <link href="<?php echo base_url('/assets/sliders/css/swiper.min.css'); ?>" rel="stylesheet">
<!--/.Navbar-->
 <section class="section" style="margin-bottom: 3px;">
               
                <!--Section heading-->
                <h1 class="section-heading" style="margin-bottom: 3px;">Manglik Dosh</h1>
                </section>
<!--/.Navbar-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>

  </ol>
  <!--/.Indicators-->

     <!--Slides-->
  <div class="carousel-inner" role="listbox">
  
    <!--First slide-->
    <div class="carousel-item active">
        <a href="<?=base_url('/consult-online'); ?>">
      <!--Mask color-->
      <div class="view">
          
          <?php if($device == 'mobile'){ ?>
          <img src="<?php echo base_url('/assets/img/mobi/ask-one-question-slider-mobile.jpg'); ?>" class="img-fluid" alt="Manglik Dosha">
	  <?php }else{ ?>
      <img src="<?php echo base_url('/assets/img/ask-one-question-slider.png'); ?>" class="img-fluid" alt="Manglik Dosha">
      <?php } ?>
          <div class="full-bg-img">
        </div>
              </div>
     </a>
      </div>
      <!--/First slide-->
      <?php /* ?>
<div class="carousel-item">
    <a href="<?=base_url('/full-extended-reports'); ?>">
      <!--Mask color-->
      <div class="view">
       <?php if($device == 'mobile'){ ?>
          <img src="<?php echo base_url('/assets/img/mobi/story-of-my-life-slider-mobile.jpg'); ?>" class="img-fluid" alt="Manglik Dosha Solution">
	  <?php }else{ ?>
          <img src="<?php echo base_url('/assets/img/story-of-my-life-slider.png'); ?>" class="img-fluid" alt="Manglik Dosha Solution">
      <?php } ?>
         
          <div class="full-bg-img">
        </div>
      </div>
   </a>
      </div>
      <!--Second slide-->
      <div class="carousel-item">
          <a href="<?=base_url('/report?lg=en&type=matchmaking_report'); ?>">
        <!--Mask color-->
        <div class="view">
             <?php if($device == 'mobile'){ ?>
          <img src="<?php echo base_url('/assets/img/mobi/kundali-matching-slider-mobile.jpg'); ?>" class="img-fluid" alt="Check Manglik Dosh">
	  <?php }else{ ?>
      <img src="<?php echo base_url('/assets/img/kundali-matching--guide-slider.png'); ?>" class="img-fluid" alt="Check Manglik Dosh">
      <?php } ?>
          
           
            <div class="full-bg-img">
          </div>
        </div>
        </a>
      </div>
<?php */ ?>
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
<div class="container qa1">
  <div class="row cntn">
    <div class="col-md-9">
      <!--Section: Blog v.1-->
      <section class="section extra-margins manglikform">
        <!--Section heading-->
        <!--First row-->
        <div class="row">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
            <li class="breadcrumb-item active">Marriage prediction</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriage prediction.jpg"> <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500; font-size: 25px; ">Marriage prediction</h3>
            <p class="myfont">Marriage is a sacred bond which creates the relationship as wife and husband between two different sexes. Marriages are made in heaven. Is it true? Of course, to some extent. It is the destiny that acts, however the individual horoscopes or birth chart will reveal about their Married life too. An Astrologer can very well predict the future married life of an individual. In our horoscope or birth chart the house in front of the ascendant has been allotted for the marriage “the seventh house”. </p>
          </div>
          <!--/Second column-->
        </div>
        <!--/First row-->
        <!--/Third row-->
      </section>
      <!--/Section: Blog v.1-->
      <!--Form with header-->
    </div>
    <div class="col-md-3 rightsidebar desktopsidebar">
      <!--Panel-->
      <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text"> Ask From Our Expert </div>
      </div>
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Marriage prediction form 1')); ?>
      <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
        <div class="card-block">
          <div class="row">
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i>
                <input type="text" id="name" name="first_name" class="form-control" required>
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                <input type="text" id="phone" name="phone" class="form-control" required>
                <label for="phone">Phone No.</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="qsn" class="md-textarea" name="description"></textarea>
                <label for="qsn">Ask Your Question</label>
              </div>
            </div>
          </div>
          <button id="ask_enquiry" type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button><div id="enquiry_result"></div>
          <?php echo form_close(); ?>
        </div>
        <script>
    $('form#sendenquiry1').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
	$('#ask_enquiry').css('visibility', 'hidden');
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
	window.location.replace(data);	
        },
         error: function(resp) { }
   });
});
</script>
      </div>
    </div>
  </div>
  <!--/.Panel-->
</div>
</div>
<!--Footer-->
</div>
<hr style="margin-top:3rem">
<div class="container">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
        <h5 style="font-size: 18px;font-weight: 400;">Predict Your Marriage</h5>
        <h5 style="font-size: 14px;font-weight: 400;">Fill in the details</h5>
      </div>
      <?php echo form_open('service/generate_horoscope', array('id' => 'generate_horoscope')); ?>
      <!--Body-->
      <div class="row">
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
          <div class="md-form"> <?php echo form_input(array('id' => 'usr', 'class' => 'form-control', 'type' => 'text','name' => 'name', 'required' => 'required')); ?>
            <label for="usr">Your name</label>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
          <!--Blue select-->
          <div class="row">
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv" type="text" class="form-control" name="day" style="cursor:pointer" onClick="showDiv()" onfocus="blur()" required>
                <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="dateDiv" class="col-md-4 col-xs-4 datedrop">
              <div class="card datebox"> 
                <?php echo selectoption('dateselect', 1, 31); ?> 
              </div>
            </div>
            <!--/Blue select-->
            <!--Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" onClick="showDiv1()" onfocus="blur()" required>
                <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop">
              <div class="card monthbox"> <?php echo selectoption('monthselect'); ?> </div>
            </div>
            <!--/Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv2" type="text" class="form-control" name="year" style="cursor:pointer" onClick="showDiv2()" onfocus="blur()" required>
                <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop">
              <div class="card yearbox"> <?php echo selectoption('yearselect', 1960, 0); ?> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
          <div class="row">
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv3" type="text" class="form-control" name="hour" style="cursor:pointer" onClick="showDiv3()" onfocus="blur()" required>
                <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspan" aria-hidden="true"></i> </label>
              </div>
              <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                <div class="card hourbox"> <?php echo selectoption('hourselect', 0, 23); ?> </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv4" type="text" class="form-control" name="minute" style="cursor:pointer" onClick="showDiv4()" onfocus="blur()" required>
                <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
              </div>
              <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop">
                <div class="card minutebox"> <?php echo selectoption('minuteselect', 0, 59); ?> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>
          <div class="md-form"> <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required')); ?> </div>
          <input type="hidden" id="latitude" name="latitude" placeholder="latitude">
          <input type="hidden" id="longitude" name="longitude" placeholder="longitude">
          <input type="hidden" id="timezone" name="timezone" placeholder="timezone">
        </div>
      </div>
      
       <script>
      var placeSearch, autocomplete;
      var componentForm = {locality: 'long_name'};
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      	document.getElementById('latitude').value = place.geometry.location.lat();
		document.getElementById('longitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'timezone');
    }
     function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    function eventListenerForMaps(latitude, longitude, timezone)
    { 
               $.ajax({url:"https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+(Math.round((new Date().getTime())/1000)).toString()+"&sensor=false",
}).done(function(response){
   if(response.timeZoneId != null){
	document.getElementById(timezone).value = (response.rawOffset)/3600;
   }
});
	}
</script>
      <div class="text-xs-center">
        <button class="btn btn-deep-orange" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Get Analysis </button>
        <div class="col-md-12">
          <?=RETRIED?>
        </div>
      </div>
    </div>
    <?php echo form_close(); ?>
    <script>
	
    $('form#generate_horoscope').submit(function(e) { 
    var form = $(this);
    e.preventDefault();
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    
 $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/marriageprediction'); ?>",
        data: form.serialize(),
        success: function(data){
          $('#collapseResult').css({ opacity: 0.08 });   
            $('#collapseResult').html(data); 
               
          $('#get_analysis').appendTo('.bigform-content'); 
          $('#get_analysis').show();
 
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
    <!--/Form with header-->
    <!--Section: Magazine v.2-->
  </div>
     <div class="bigform-content">
          <div class="horoscope_result" id="collapseResult"></div>
  </div>
  <div style="clear:both;"></div>

  
   <?=$get_report_section;?>
    <!--Second column-->
    <div class="col-md-12 mb-r" align="center">

 
<div class="" id="get_analysis">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color: #ff3366;">
               
                <h4 class="modal-title" id="myModalLabel">Enter your email to see Details </h4>
            </div>
            <!--Body-->
            <div class="modal-body">
<!-- Nav tabs -->
<!-- Tab panels -->
  <form action="#" class="form-horizontal" id="get_report_form" method="post" accept-charset="utf-8">
 
        <input name="name" value="" id="getrep_name" type="hidden">
        <input name="dob" value="" id="getrep_dob" type="hidden">
        <input name="tob" value="" id="getrep_tob" type="hidden">
        <input name="location" id="getrep_location" value="" type="hidden">
        <input name="reference_page" value="online-marrige-prediction" type="hidden">
 
            <div class="tab-content" style="padding:1rem">
       

            <div class="md-form"> <input name="email" value="" id="email" class="form-control" required="required" type="email">
              <label for="form3" class="active">Your Email</label>
            </div>
      

        
            <div class="modal-footer_new">
                <button type="submit" class="btn pull-right btn-primary waves-effect waves-light">Go</button>
            </div>
  <div id="get_report_result2"></div>
    <!--/.Panel 1-->
    
</div>
</form> <script>

    $('form#get_report_form').submit(function(e) {
    var form = $(this);
    e.preventDefault();
  

  $('#get_report_result2').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 

  $('#getrep_name').val($('#usr').val());
  $('#getrep_dob').val($('#mydiv2').val()+'-'+ $('#mydiv1').val()+'-'+ $('#mydiv').val());
  $('#getrep_tob').val($('#mydiv3').val()+':'+ $('#mydiv4').val()+':00');
  $('#getrep_location').val($('#mautocomplete').val());
    $.ajax({
        type: "POST",
        url: "<?=base_url('/service/get_report_form');?>",
        data: form.serialize(),
        success: function(data){ 
          $('#get_report_result2').html('');
          $('#get_analysis').hide();
          $('#collapseResult').css({ opacity: 1 });
        },
         error: function(resp) { 
     //alert(JSON.stringify(resp)); 
     }
   });
});
</script> 


            </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div>

<div class="container">
  <!--Section: Testimonials v.4-->
  <hr class="firstheadhr">
  <h2 class="h2-responsive firsthead">What Our customers Say</h2>
  <section class="section">
    <!--Section heading-->
    <div class="row">
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">
        <!--Controls-->
        <div class="controls-top" style="margin-bottom:5%"> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a> </div>
        <!--/.Controls-->
        <!--Indicators-->
        <ol class="carousel-indicators testimonial-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active mdb-color"></li>
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
                <h4>Sheeba David - Pune Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i> I got to know akashvaani online and I got good predictions but I am yet to experience the predictions given by them and I m sure I will get good results based on their predictions astrologers are good and supportive everyone should try akashvaani.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/First column-->
<!--Second column-->

<div class="col-md-4 hidden-sm-down">
<div class="testimonial">
<!--Avatar-->
<!--Content-->
<div class="snippet-markup text-center" itemscope="" itemtype="http://schema.org/Review"> <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
  <div class="snippet-data"><span itemprop="name">
    <h4>Aseem tandon - chandigarh Punjab</h4>
    </span></div>
  </span>
  <div class="snippet-data">
  <span itemprop="itemReviewed">
    <p><i class="fa fa-quote-left"></i> I asked about marriage, career health for myself, my sister and my mother All my questions have been answered promptly. I always recommend akashvaani for my family. Thanks for all the help. All the answers are 100% satisfied. </p></span>
    <!--Review-->
    <div class="snippet-data"><span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating"> <span class="rating-value" itemprop="ratingValue">5</span></span>
      <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
    </div>
  </div>
</div>
</div>
</div>
<!--/Second column-->

            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Mansi Dixit/Vivek - Lucknow UP</h4>
                <p><i class="fa fa-quote-left"></i> Hi I asked about my friend's marriage problem and guruji explained it with dedications and  with solution. I am looking forward to ask about my other relatives.  </p></span></div>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
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
                <h4>Rohit chawda - Jamshedpur, Jharkhand</h4>
                <p><i class="fa fa-quote-left"></i>I was very confused about my brother is Mangalik or not. Than I contact with u guys and I get all of my answer.thanks a lot . U provide some remedies for the dosh,  it was very helpful.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Ankit Sharma - Shimla Himachal Pradesh</h4>
                <p><i class="fa fa-quote-left"></i> I asked about marriage, I have start to do the remdies for the same, that was Great experience with akashvaani. I recommend akashvaani in future too. </p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
              </div>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Mansi Dixit/Vivek - Lucknow UP</h4>
                <p><i class="fa fa-quote-left"></i> Hi I asked about my friend's marriage problem and guruji explained it with dedications and  with solution. I am looking forward to ask about my other relatives.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
              </div>
            </div>
            <!--/Third column-->
          </div>
          <!--/.Second slide-->
          <!--Third slide-->
          
          <!--/.Third slide-->
        </div>
        <!--/.Slides-->
      </div>
      <!--/.Carousel Wrapper-->
    </div>
  </section>
  <!--/Section: Testimonials v.4-->
  
<div class="container" style="text-align: left;">
  <hr>
 
<?php  if($articles): ?>

  <!-- Swiper example -->

  <div class="swiper-container swiper-example3">
    <h1>Related Post</h1>
    <div class="swiper-wrapper">

      <?php foreach($articles as $article): 
 $filename = $article->primaryimage['filename'];
if($article->images){
  foreach($article->images as $image){
    if(!isset($image['primary'])){
      $filename = $image['filename'];
    }
  }
}   ?>
      <div class="swiper-slide">
        <div class="slide-img"><a href="<?=base_url('/blog/'.$article->slug);?>">
         <img src="<?=resizedUrl(base_url(($filename) ? '/uploads/images/medium/'.$filename : '/uploads/images/default.jpg'), 260, 260)?>" alt="<?=$article->name;?>"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/blog/'.$article->slug);?>"><b><?=substr(strip_tags($article->name), 0, 90);?></b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>
      


<?php endforeach; ?>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swipper-button"></div>
    <div class="swiper-button-prev swipper-button"></div>
    <!-- Add Pagination -->
  </div>


<div class="col-md-12">&nbsp;<br></div>

<?php endif; ?>

 <div class="swiper-container swiper-example4">
    <h1>Related Pages</h1>
    <div class="swiper-wrapper">

<div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/marriage-kundali-matching');?>">
         <img src="<?=base_url('/assets/astrology/img/1_pages.png');?>" alt="Match Your Kundali"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/marriage-kundali-matching');?>"><b>Match Your Kundali</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/manglik-dosha-solution');?>">
         <img src="<?=base_url('/assets/astrology/img/2_pages.png');?>" alt="Check Manglik dosha"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/manglik-dosha-solution');?>"><b>Check Manglik dosha</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>


      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/online-career-and-job');?>">
         <img src="<?=base_url('/assets/astrology/img/4_pages.jpg');?>" alt="Your Career Guidance"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/online-career-and-job');?>"><b>Your Career Guidance</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/p/gemstones/ruby-gems');?>">
         <img src="<?=base_url('/assets/astrology/img/5_pages.jpg');?>" alt="Gemstone suggestions"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/p/gemstones/ruby-gems');?>"><b>Gemstone suggestions</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/child-pregnancy');?>">
         <img src="<?=base_url('/assets/astrology/img/6_pages.jpg');?>" alt="Child & Pregnancy issues"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/child-pregnancy');?>"><b>Child & Pregnancy issues</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/medical-and-health');?>">
         <img src="<?=base_url('/assets/astrology/img/7_pages.jpg');?>" alt="Check your Health Issues"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/medical-and-health');?>"><b>Check your Health Issues</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swipper-button"></div>
    <div class="swiper-button-prev swipper-button"></div>
    <!-- Add Pagination -->
  </div>


      <hr>
<script type="text/javascript" src="<?php echo base_url('/assets/sliders/js/swiper.min.js'); ?>"></script>

<script>
  $(document).ready(function () {
      var width = $(window).width(); 
      var height = $(window).height();
      if(width>480){
             var swiper = new Swiper('.swiper-container', {
          slidesPerView: 4,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
           navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          }
        });
      }
      else{
          var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1.5,
          spaceBetween: 10,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
           navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          }
        });
      }
  });
  </script>
</div>
</div>
<section><br>
<div class="container">
      <!--Excerpt-->
      <h1 class="section-heading">Marriage & Astrology</h1>


    <!--/Second column-->
<div class="row">
    <div class="col-md-5">
      <!--Featured image -->
      <div class="view overlay hm-white-light z-depth-1-half healthissue"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriageissue.png" alt="Marriage Prediction" class="z-depth-0 issue">
        <div class="mask waves-effect waves-light"> </div>
      </div>
      <br>
    </div>
    <!--Main information-->
    <div class="col-md-7">
      <h3 style="font-weight:500; font-size: 22px;">Marriage Issues</h3>
      <hr>
      <p class="myfont">Venus and Jupiter are general planets of marriage for males and females, respectively. Whether a person will have marriage problem or mental compatibility with his/her spouse can be predicted by consideration of relationship between the houses ruling the marital status and the sixth house.</p>
      <p class="myfont">Besides this, the placement of other planets and the aspects of the planets to the  houses are to be studied to know about early marriage ,late or Denial. </p>
    </div>


<div class="fadeIn" data-wow-delay="0.4s" style="visibility: visible; margin-top:4%; animation-delay: 0.4s; animation-name: fadeIn;">
   
     
 <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="mc-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-item md-pills pills-default" role="tablist">
          <li class="nav-item waves-effect waves-light"> <a id="pane131" class="nav-linka nav-link active" data-toggle="tab" href="#panel31" role="tab" aria-expanded="true"> Early Marriage</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane132" class="nav-link" data-toggle="tab" href="#panel32" role="tab" aria-expanded="false">Late Marriages</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane133" class="nav-link" data-toggle="tab" href="#panel33" role="tab" aria-expanded="false">Denial of Marriage</a> </li>
        </ul>
      </div>
      <hr>
      <!--Tab panels-->
      <div class="tab-content">
        <!--Panel 1-->
        <div class="tab-pane fade active in" id="panel31" role="tabpanel" aria-expanded="true"> <br>
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none;"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/marriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:22px;font-weight:400">Early Marriage</h2>
                  <hr>
                  <p class="myfont">There are number of factors that help to predict, an Early marriage is possible under following planetary positions;</p>
                  <p class="myfont"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Venus should be well placed in Kendra and trikona in the star of benefic planet.<br />
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Venus should not be in the company of malefic planets.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lagna lord should be strong or aspected to the 7th house.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> The placement of benefic planets in the 7th house.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> The 2nd house should be free from affliction and with benefic rays.<br>
                  </p>
                </div>
              </div>
              <!--/First row-->
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 1-->
        <!--Panel 2-->
        <div class="tab-pane fade" id="panel32" role="tabpanel" aria-expanded="false"> <br>
          <!--First row-->
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/latemarriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:22px;font-weight:400"> late marriages</h2>
                  <hr>
                  <p class="myfont">Further, late marriages may take place where there is slight malefic influence to the 7th house, 7th lord and Venus besides having benefic influences to the above</p>
                  <p class="myfont">Whenever the severe affliction involves the seventh house in the case of male natives they lack confidence in their physical power and delay the decision of marriage.</p>
                </div>
              </div>
              <!--/First row-->
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 2-->
        <!--Panel 3-->
        <div class="tab-pane fade" id="panel33" role="tabpanel" aria-expanded="false"> <br>
          <!--First row-->
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:22px;font-weight:400">Denial of marriage</h2>
                  <hr>
                  <p class="myfont">Denial of marriage is possible where there is strong malefic influence to the 7th house, 7th lord, Venus, 2nd house, and 2nd lord.</p>
                </div>
              </div>
              <!--/First row-->
              <hr>
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 3-->
        <ol class="carousel-indicators tab-indicator">
          <li id="earlytab" data-target="#multi-item-example" data-slide-to="0" class="mdb-color active"></li>
          <li id="latetab" data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
          <li id="denialtab" data-target="#multi-item-example" data-slide-to="2" class="mdb-color"></li>
        </ol>
      </div>
     <!--/Tab panels-->
    </div>
    <div class="col-md-1"></div>
    <!--/First column-->
  </div>
  </div>

</div></section>


  </div>
<!--Asked questions-->
<hr style="margin-bottom: 3rem;margin-top:3rem">
<h1 class="section-heading howorks">Most Asked Questions</h1>

<div class="container qa">
    <div class="row">
       <div class="col-md-12">
           <div class="card">
        <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 What is the reason of delay in marriage?</p>
            <p>Ans. In vedic astrology, seventh house of natal chart represents marriage and all aspects of marriage. When malefic planets impact on seventh house(house of marriage) like saturn,rahu,mars,sun,it may cause delay in marriage.  <a href="#" class="read_more">...continue read</a><span class="more_text"> Some other combinations in kundli like saturn and sun placed in seventh house. Rahu and moon,rahu and jupiter placed in seventh house may cause delay in marriage. More combination and aspect placements of planets may cause  delay in marriage. For proper guidance you should contact Akashvaani vedic astrologer research team.

                <a href="#" class="read_less">...read less</a></span></p>
                <div class="item">
                </div>
            </blockquote>
            </div>
            
           <div class="card">

            <blockquote class="blockquote bq-warning q2">
                <p class="bq-title">Q.2 What is the combination of love marriage?</p>
                <p>Ans. There are so many combinations possible for love marriage but when lord of fifth house and lord of seventh house combine in centre of trine, aspect, <a href="#" class="read_more1">...continue read</a><span class="more_text1">
 exchange in fifth and seventh house is the yoga for the love marriage. Exalted venus and good strength of venus may lead to love marriage. 
<br>
<a href="#" class="read_less1">...read less</a></span></p>
                </blockquote>
                </div>
           <div class="card">

                <blockquote class="blockquote bq-success q3">
                    <p class="bq-title">Q.3 When divorce may occur ?</p>
                    <p>Ans. When seventh house (house of marriage ) affiliated from malefic planets, it may be cause of divorce.<a href="#" class="read_more2">...continue read</a><span class="more_text2"> If significance of marriage venus and jupiter affected from malefic planets may cause divorce. Negative dasha, antardasha, may also lead to divorce. For detailed analysis,you should contact to Akashvaani research team.
                       <a href="#" class="read_less2">...read less</a></span></p>
                   </blockquote>
                   </div>
        
        
        <div class="card">

                <blockquote class="blockquote bq-warning q4">
                    <p class="bq-title">Q.4 What is the yoga of happy marriage life?</p>
                    <p>Ans. When significance of marriage venus planet in case of male and jupiter in case of female chart get good strength placement and aspect of benefic planets on the significator planet is the main reason of happy marriage life.<a href="#" class="read_more3">...continue read</a><span class="more_text3"> The placement of lord of seventh house become good and having aspect of benefic planet lead to happy marriage life. There are so many combinations of happy marriage life.
                       <a href="#" class="read_less3">...read less</a></span></p>
                   </blockquote>
                   </div>
  
                   
                   <div class="card">

                <blockquote class="blockquote bq-success q5">
                    <p class="bq-title">Q.5 When will I get married. Can Astrologer predict?</p>
                    <p>Ans. With the help of an astrologer, you can get various aspects that can predict your life and marriage. It is analyzed with the help of 12 zodiac signs, twelve houses, and planetary positions. Your astrologer might look into the 7th house condition, as it is the ruler of
marriage and relationships <a href="#" class="read_more4">...continue read</a><span class="more_text4"> Also, in both boy and girl Kundli have different ruling planets like as Venus and Jupiter. <a href="#" class="read_less4">...read less</a></span></p>
                   </blockquote>
                   </div>

                   <div class="card">

                <blockquote class="blockquote bq-primary q6">
                    <p class="bq-title">Q.6 Can astrology help you prevent delay in Marriage?</p>
                    <p>Ans. There are lot of combinations in your chart which shows delay in marriage. And an experienced astrologer can tell about that in detail. But there are simple remedies that can benefit you in this matter.<a href="#" class="read_more5">...continue read</a><span class="more_text5"> There are lot of combinations in your chart which shows delay in marriage. And an experienced astrologer can tell about that in detail. But there are simple remedies that can benefit you in this matter. <a href="#" class="read_less5">...read less</a></span></p>
                   </blockquote>
                   </div>
                                   
                   
                        </div>
                    </div>
                   
                    
                </div>




<!--Most ask questions-->










<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h4 class="modal-title" id="myModalLabel">Online Consultation</h4>
      </div>
      <!--Body-->
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-3 indigo" role="tablist" style="display:none">
          <li class="nav-item"> <a id="step1" class="nav-link active" data-toggle="tab" href="#pane21" role="tab"><i class="fa fa-user"></i> Profile</a> </li>
          <li class="nav-item"> <a id="step2" class="nav-link" data-toggle="tab" href="#pane22" role="tab"><i class="fa fa-heart"></i> Follow</a> </li>
          <li class="nav-item"> <a id="step3" class="nav-link" data-toggle="tab" href="#pane23" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step4" class="nav-link" data-toggle="tab" href="#pane24" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step5" class="nav-link" data-toggle="tab" href="#pane25" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step6" class="nav-link" data-toggle="tab" href="#pane26" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
        </ul>
        <!-- Tab panels -->
        <?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry2')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrology Form 3')); ?>
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
        <div class="tab-content" style="padding:1rem">
          <!--Panel 1-->
          <div class="tab-pane fade in active" id="pane21" role="tabpanel">
            <p><strong>Regarding What you want to consult?</strong></p>
            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Marriage">
                <label for="checkbox1"> Marriage</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Career">
                <label for="checkbox1"> Career</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Regarding Life">
                <label for="checkbox1"> Regarding Life</label>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Health">
                <label for="checkbox1"> Health</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Business">
                <label for="checkbox1"> Business</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Astrology">
                <label for="checkbox1"> Astrology</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="next1" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 1-->
          <!--Panel 3-->
          <div class="tab-pane fade" id="pane23" role="tabpanel">
            <p><strong>Tell when you want to take service?</strong></p>
            <div class="row">
              <div class="col-md-12">
                <div class="bootstrap-iso">
                  <div class="container-fluid" style="padding-left:0px">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Form code begins -->
                        <div class="md-form">
                          <input type="text" id="form1" name="date" class="form-control" style="cursor:pointer">
                          <label for="form1" class="">Enter Date</label>
                        </div>
                        <div class="form-group">
                          <!-- Submit button -->
                        </div>
                        <!-- Form code ends -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:1rem">
                <p><strong>Specify your Time-slot</strong></p>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="8AM - 10AM">
                <label for="radio1">8AM - 10AM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="10AM - 12AM">
                <label for="radio1">10AM - 12AM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="12PM - 2PM">
                <label for="radio1">12PM - 2PM</label>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="2PM - 4PM">
                <label for="radio1">2PM - 4PM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="4PM - 6PM">
                <label for="radio1">4PM - 6PM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="6PM - 9PM">
                <label for="radio1">6PM - 9PM</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev2" type="button" class="btn btn-secondary">Prev</button>
              <button id="next3" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 3-->
          <!--Panel 4-->
          <div class="tab-pane fade" id="pane24" role="tabpanel">
            <p><strong>How do you want to take service?</strong></p>
            <div class="row">
              <div class="col-md-12">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1" name="type" value="Phone">
                <label for="radio1">Phone</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1"  name="type" value="Text">
                <label for="radio1">Text</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input  type="radio" id="radio1" name="type" value="Video">
                <label for="radio1">Video</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1"  name="type" value="In Person">
                <label for="radio1">In Person</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev3" type="button" class="btn btn-secondary">Prev</button>
              <button id="next4" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 4-->
          <!--Panel 5-->
          <div class="tab-pane fade" id="pane25" role="tabpanel">
            <p><strong>Provide your contact details</strong></p>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i>
                  <input type="text" id="form1" class="form-control" name="first_name" required>
                  <label for="form1">Your Name</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                  <input type="text" id="form2" class="form-control" name="phone" required>
                  <label for="form2">Phone No.</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form"> <i class="fa fa-envelope prefix"></i>
                  <input type="email" id="form9" class="form-control validate" name="email" required>
                  <label for="form9" data-error="wrong" data-success="right">Type your email</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev4" type="button" class="btn btn-secondary">Prev</button>
              <button type="submit" class="btn btn-primary">Next</button>
              <div id="enquiry_result2"></div>
              <button id="next5" type="button" class="btn btn-primary" style="visibility:hidden;">Next</button>
            </div>
          </div>
          <!--/.Panel 5-->
          <!--Panel 6-->
          <div class="tab-pane fade" id="pane26" role="tabpanel">
            <h2>Thank You !</h2>
            <div class="modal-footer">
              <button type="button" id="finishdone" class="btn btn-secondary" data-dismiss="modal">Done</button>
            </div>
          </div>
          <!--/.Panel 6-->
        </div>
        <?php echo form_close(); ?>
        <script>
    $('form#sendenquiry2').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $('#enquiry_result2').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //alert(data); //
        $('#next5').trigger('click');
            //window.location.replace(data);    
        },
         error: function(resp) { }
   });
});
</script>
      </div>
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>



<?php /*?><section class="section extra-margins" style="margin-top:65px;">
  <div class="container">
    <div class="row">
      <!--First column-->
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <!--Featured image-->
        <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="https://www.akashvaani.com/assets/astrology/img/report.jpg"> <a>
          <div class="mask waves-effect waves-light"></div>
          </a> </div>
      </div>
      <div class="col-md-6 mb-r mb-h">
        <!--Excerpt-->
        <h3 style="font-weight:600">Ask Direct Questions</h3>
        <p class="myfont">All these can be very much be predicted by Akashvaani expert Astrologers and will suggest Astro remedies to reduce the negative influences on the planets. </p>
        
       <a href="<?=base_url('/questions');?>" class="btn btn-danger waves-effect waves-light">Ask Direct Questions</a>
       
       
      </div>
    </div>
  </div>
</section><?php */?>


<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> daily astrological feed<span class="text-white font18">,</span> Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span> </div>
      <div class="col-md-6 col-xs-12 footer_section_align">
        <form method="post" action="#" id="subscribe">
          <div class="form-group">
            <div class="input-group label_align"> <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control input-lg input_email sub_input', 'required' => 'required')); ?> <span class="input-group-addon subscribe_align">
              <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light"> <span> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/mail-sent.png" alt="mailicon"> </span> </button>
              </span> </div>
          </div>
          <div id="subscribereturn"></div>
        </form>
      </div>
      <script>
				 
				 
               $('form#subscribe').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#subscribereturn').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('service/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
			$('#subscribereturn').html('<span class="text-white font18">'+ data +'</span>');
		$('#subscribe')[0].reset();
			
        },
         error: function(resp) {  }
   });

});
               
               </script>
    </div>
  </div>
</section>


<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" defer></script>
