<link rel="stylesheet" href="<?= base_url('/api/css/style.css');?>" media="all"  type="text/css"/>
        <link href="<?php echo base_url('/assets/sliders/css/slider.css'); ?>" rel="stylesheet">
      <link href="<?php echo base_url('/assets/sliders/css/swiper.min.css'); ?>" rel="stylesheet">

<!--/.Navbar-->
                <section class="section" style="margin-bottom: 3px;">
                <!--Section heading-->
                <h1 class="section-heading" style="margin-bottom: 3px;">&nbsp;</h1>
                </section>
<!--/.Navbar-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
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
      <img src="<?php echo base_url('/assets/astrology/img/ask-one-question-slider1.png'); ?>" class="img-fluid" alt="Manglik Dosha">
            <?php } ?>
        
          <div class="full-bg-img">
        </div>
              </div>
     </a>
      </div>
      <!--/First slide-->
<div class="carousel-item">
    <a href="<?=base_url('/full-extended-reports'); ?>">
      <!--Mask color-->
      <div class="view">
       <?php if($device == 'mobile'){ ?>
      <img src="<?php echo base_url('/assets/astrology/img/ask-one-question-slider-mobile.png'); ?>" class="img-fluid" alt="Manglik Dosha">
	  <?php }else{ ?>
          <img src="<?php echo base_url('/assets/astrology/img/story-of-my-life-slider2.png'); ?>" class="img-fluid" alt="Manglik Dosha Solution">
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
      <img src="<?php echo base_url('/assets/astrology/img/kundali-matching--guide-slider3.png'); ?>" class="img-fluid" alt="Check Manglik Dosh">
      <?php } ?>
          
           
            <div class="full-bg-img">
          </div>
        </div>
        </a>
      </div>

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
            <li class="breadcrumb-item active">Manglik</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?=base_url('/assets/astrology/img/manglik.jpg');?>" class="z-depth-0">
            	<a>
               	<div class="mask"></div>
              	</a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500; font-size: 25px;">Manglik Dosh</h3>
            <p class="myfont">According to astrology, a person is termed manglik, if he / she has the presence of Mars /mangal in Girl or Boy  1st, 2nd, 4th, 7th, 8th or 12th house.
 </p>
 <p class="myfont">
   This occurrence of this condition is believed to be a cause of marital problems. If a manglik marries a non manglik, then they are likely to have a lot of arguments and disharmony between each other, which ultimately become a cause of bigger problems.
 </p>

          </div>
          <!--/Second column-->
        </div>
        <!--/Third row-->
      </section>
      <!--/Section: Blog v.1-->
      <!--Form with header-->
    </div>
    <div class="col-md-3 rightsidebar desktopsidebar">
      <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text"> Ask From Our Expert </div>
      </div>
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Manglik Dosh form 1')); ?>
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
          <button type="submit" id="ask_enquiry" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>
          <?php echo form_close(); ?>
          <div id="enquiry_result"></div>
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
  <div>
    <!--Footer-->
  </div>
  <hr>
  <div class="container">
    <div style="clear:both;"></div>
  </div>
</div>
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
              <div class="card datebox"> <?php echo selectoption('dateselect', 1, 31); ?> </div>
            </div>
            <!--/Blue select-->
            <!--Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" onClick="showDiv1()" required>
                <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop">
              <div class="card monthbox"> 
                  <?php echo selectoption('monthselect'); ?> 
                 </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" async defer></script>
      
      
      
      
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
        url: "<?php echo site_url('service/manglik'); ?>",
        data: form.serialize(),
        success: function(data){
            $('#collapseResult').html(data); 
            $('#collapseResult').css({ opacity: 0.02 });      
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

<?=$get_report_section;?>
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
        <input name="reference_page" value="child-pregnancy" type="hidden">
 
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
  $('#getrep_location').val($('#autocomplete').val());
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
  <hr class="">
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
                <h4>Rohit chawda - Jamshedpur, Jharkhand</h4>
                <p><i class="fa fa-quote-left"></i> I was very confused about my brother is Mangalik or not. Than I contact with u guys and I get all of my answer.thanks a lot . U provide some remedies for the dosh,  it was very helpful.</p>
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
                <h4>Aseem tandon - chandigarh Punjab</h4>
                <p><i class="fa fa-quote-left"></i> I asked about marriage, career health for myself, my sister and my mother All my questions have been answered promptly. I always recommend akashvaani for my family. Thanks for all the help. All the answers are 100% satisfied.</p>
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
                <h4>Sheeba David - Pune Maharashtra </h4>
                <p><i class="fa fa-quote-left"></i> I got to know akashvaani online and I got good predictions but I am yet to experience the predictions given by them and I m sure I will get good results based on their predictions astrologers are good and supportive everyone should try akashvaani.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
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
                <h4>Ankit Sharma - Shimla Himachal Pradesh</h4>
                <p><i class="fa fa-quote-left"></i>I asked about marriage, I have start to do the remedies for the same, that was Great experience with akashvaani. I recommend akashvaani in future too. </p>
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
<div class="snippet-markup text-center" itemscope="" itemtype="http://schema.org/Review">
   <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
<div class="snippet-data"><span itemprop="name">
                <h4>Mansi Dixit/Vivek - Lucknow UP</h4>
</span></div>   </span>
<div class="snippet-data"><span itemprop="itemReviewed">
                <p><i class="fa fa-quote-left"></i> Hi I asked about my friend's marriage problem and guruji explained it with dedications and  with solution. I am looking forward to ask about my other relatives.</p></span>
                <!--Review-->
<div class="snippet-data"><span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">  <span class="rating-value" itemprop="ratingValue">5</span></span>
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
              </div>
            </div></div>
</div></div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Pranav Kulkarni, Aurangabad, Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i> The service\akashvani was good.predictions explained was satisfactory and precise.</p>
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
  <div class="container">
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
</div>
<hr>
  <div class="swiper-container swiper-example4">
    <h1>Related Pages</h1>
    <div class="swiper-wrapper">

<div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/marriage-kundali-matching');?>">
         <img src="<?=base_url('/assets/astrology/img/Page 7.png');?>" alt="Match Your Kundali"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/marriage-kundali-matching');?>"><b>Match Your Kundali</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

    

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/online-marriage-prediction');?>">
         <img src="<?=base_url('/assets/astrology/img/Page2.png');?>" alt="Your marriage prediction"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/online-marriage-prediction');?>"><b>Your marriage prediction</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/online-career-and-job');?>">
         <img src="<?=base_url('/assets/astrology/img/Page3.jpg');?>" alt="Your Career Guidance"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/online-career-and-job');?>"><b>Your Career Guidance</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/p/gemstones/ruby-gems');?>">
         <img src="<?=base_url('/assets/astrology/img/Page4.jpg');?>" alt="Gemstone suggestions"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/p/gemstones/ruby-gems');?>"><b>Gemstone suggestions</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/child-pregnancy');?>">
         <img src="<?=base_url('/assets/astrology/img/Page5.jpg');?>" alt="Child & Pregnancy issues"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/child-pregnancy');?>"><b>Child & Pregnancy issues</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/medical-and-health');?>">
         <img src="<?=base_url('/assets/astrology/img/Page6.jpg');?>" alt="Check your Health Issues"></a>
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
  </div><hr>
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


  <section class="section extra-margins" style="margin-top:65px;">


<div class="container">
  <section class="section feature-box" style="margin-top:3rem">
    <!--Section heading-->
    <h1 class="section-heading howorks" style="font-size:23px;margin-bottom:2rem">Checking Manglik dosh</h1>
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont"><b>Presence of Mars in the first house</b> leads to problems between spouses, often becoming a cause of physical assaults and even separation. </p>

      <p class="myfont"><b>Manglik dosh in the second house</b> causes serious disturbances and hurdles in both the personal as well as the professional life of the person. </p>
      <p class="myfont"><b>If the presence of Mars is found in the fourth house,</b> then the person is prone to face a lot of financial problems. There may be career related problems like frequent shifts in jobs, etc. The results and outcomes of all this will be such that it causes trouble to a person overall.
</p>
      <p class="myfont"><b>Manglik dosh in the seventh house</b> is known to cause problems to the nature of the person. The person might become low tempered and irritable. This nature of aggression will lead to a lot of fights with family as well as friends.
</p>
      <p class="myfont"><b>In eighth house, if manglik dosh</b> is present, this will mean that the person will acquire a very lazy and callous attitude. He will be reckless and is prone to lose all of the ancestral / parental property given to him.
</p>
<p class="myfont">The person has chances of having many enemies if there is <b>manglik dosh</b> in the twelfth house of the kundli. This can become a reason for mental illness and financial losses in the life of the person.
</p>
    </div>
    <div class="row features-small">
      <!--First column-->
      <div class="col-md-1"></div>
      <div class="col-md-4 center-on-small-only"> <img src="<?=base_url('/assets/astrology/img/manglikissue.png');?>" alt="Manglik Dosha" class="z-depth-0"> </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-7 center-on-small" style="margin-top:30px;">
        <!--First row-->
        <div class="row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-10">
            <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Manglik dosh for Marriage</h2>

              <br>

            <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont"><b>Manglik dosh</b> affects various aspects of a person’s life, but it mainly affects the married status of the person. Therefore, it is important to check manglik dosh.
 </p>

      <p class="myfont"><b>Manglik dosh in a person’s kundli can cause delay in marriages.</b> Even if a person gets married, he / she is prone to face a lot of problems in married life. Mangal dosh can be completely cured if you two manglik persons get married to each other.
 </p>
      <p class="myfont"><b>If a manglik and non manglik marry,</b> then they might face to face issues such as non compatibility, physical assaults, aggression, and even separation.
</p>
      <p class="myfont">Other rituals and poojas can also be performed in order to lessen the effects of Mars.

</p>
    
    </div>


          </div>

        </div>
        <!--/First row-->
        <div style="height:50px"></div>
        <!--Second row-->
      </div>
      <!--/Second column-->
    </div>

    


            <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400; text-align: center;">Characteristics of manglik dosh include:</h2><br>
            <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> It can occur in any of Girl/boy chart.<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>The person who is manglik will have temper problems. This will lead them in a difficult position adjusting with their spouse.<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> The energy of manglik dosh is as high as the energy of fire. It can be used constructively, but if at all mismanaged, it can lead to dangerous problems.<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Apart from marriage problems, manglik dosh also leads to financial problems and mental illness.<br />
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Marriage between two mangliks can cancel out the negative effects of mars.<br />
              </p>


                 <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400; text-align: center;">Manglik dosh solutions</h2><br>
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont">The solution for manglik dosh will vary with the different cases. However, there are some solutions which is to be applied after advise by astrologers. Some of these are </p>
      <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> On every first Tuesday of a new month, keep a fast. During this fast, you can only consume toor daal, also called split pigeon daal.<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>On Tuesdays, make it a point to donate something red or wheat breads and sharp objects like knives and scissors.
<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kumbh vivah can also be performed.

<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Donate red colored objects to people you find working with sharp iron objects as a manglik dosh remedy.
<br />
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Make it a point to chant Hanuman Chalisa as much as you can. This should be done at least once throughout the day.
<br />

 <i class="fa fa-angle-double-right" aria-hidden="true"></i>Offering vermillion and sweets at a Hanuman temple on Tuesday can also work as a manglik dosh solution for you.

<br />

 <i class="fa fa-angle-double-right" aria-hidden="true"></i> Om Shreem Hanumante Namah should be chanted 108 times while sitting in a Hanuman temple or in front of a Hanuman statue is also favorable to eliminate manglik dosh.

<br />
              </p>
    </div>
      
        <div style="height:50px"></div>
            <div style="height:50px"></div>
  </section>
</div>
<hr style="display: block;">


  <div class="container">


    <h1 class="section-heading howorks">Most Asked Questions</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 Preparations to lessen the effects of Mangal dosha? </p>
            <p>Ans. Kuja dosha generally Cannot be solemnized by following some common remedies . To suggest a remedy for the manglik dosha it is necessary that a thorough analysis of <a href="#" class="read_more">...continue read</a><span class="more_text"> the birth chart is done. The Kundali needs to be studied well .<br />
              However Manglik person need not to worry, still  there are few remedies and certain therapies which might help  to reduce the effect. This includes chanting mantras, performing certain rites and rituals by the individual. <a href="#" class="read_less">...read less</a></span></p>
            <div class="item"> </div>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-warning q2">
            <p class="bq-title">Q.2 How to Know the Percentage of Mangal Dosh ? </p>
            <p>Ans. To know the mangal dosh or whether you are mangalik , can only be predicted  through the birth chart.  Based on <a href="#" class="read_more1">...continue read</a><span class="more_text1"> the Moon&#39;s degree one can confirm about Kuja Dosh.<br>
              Whether Its high or Low  , for this correct time of birth , date and location is a must as the Mangal dosh is based on the ascendant and it varies with every hour.<a href="#" class="read_less1">...read less</a></span></p>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-success q3">
            <p class="bq-title">Q.3 Mangal Dosha or being a Mangalik and why is it significant while match-making ?</p>
            <p>Ans. In the horoscope matching process, if all other attributes matches but there is a mismatch in the manglik <a href="#" class="read_more2">...continue read</a><span class="more_text2"> status of the prospective bride and groom, the marriage between them will be considered inappropriate. <a href="#" class="read_less2">...read less</a></span></p>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-danger q4">
            <p class="bq-title">Q.4 Can a Manglik Get Married? </p>
            <p>Ans. Well Of course. If both the spouses are Mangliks then this dosha gets invalidated. All its ill effects can be avoid <a href="#" class="read_more3">...continue read</a><span class="more_text3"> and the two can have a happy married life.<br />
              Secondly if one of them has Mars in the &#39;Lagna&#39;, Second, Fourth, Seventh, Eighth or the Twelfth House and the other has Saturn or &#39;Rahu / Ketu&#39; in the &#39;Lagna&#39;, Second, Fourth, Seventh, Eighth or the Twelfth House, then too, the defects get cancelled or invalid.<a href="#" class="read_less3">...read less</a></span></p>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-primary q5">
            <p class="bq-title">Q.5 Will there be any effect of Managl dosh after marriage ? </p>
            <p>Ans. The effect of Kuja dosh exists both before and  after marriage.  As we read earlier that the severity of Managl dosh <a href="#" class="read_more4">...continue read</a><span class="more_text4">is seen when it is placed in the 7th House ( house for marriage). In case the effect has not been reduced before marriage than most likely troubles can been seen between couples after marriage . Disharmony between spouses, frequent fights ,scarcity of closeness and intimacy , lack of money or disturbed domestic life.<br />
              For these one needs to follow certain remedies to reduce the effect and smooth the daily routin. <a href="#" class="read_less4">...read less</a></span></p>
            <div class="item"> </div>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-warning q6">
            <p class="bq-title">Q.6 Positive Effects of Mars or Mangal? </p>
            <p>Ans. As by now we know that Mars the Red planet is very hot and plays a very important role in our horoscopes or kundali. <a href="#" class="read_more5">...continue read</a><span class="more_text5"> It is the planet of action and our capacity to project emotion - its nature is that of a brave warrior, one who is also ruthless and rash .<br />
              A correct balance of Mars energy is most desirable in all lives - but unfortunately, only a lucky few possess this dynamic balance. 
              Mars is the planet of emotional excitability, which can become violent at the slightest instigation. <a href="#" class="read_less5">...read less</a></span></p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div style="clear:both;"></div>




<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> Daily Horoscope<span class="text-white font18">,</span> Daily Lovescope</span><span class="text-white font18"> and</span><span class="pink-text font24"> Daily Tarot </span> <span class="text-white font18">Directly In Your Inbox</span> </div>
      <div class="col-md-6 col-xs-12 footer_section_align">
        <form method="post" action="#" id="subscribe">
          <div class="form-group">
            <div class="input-group label_align"> <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control input-lg input_email sub_input', 'required' => 'required')); ?> <span class="input-group-addon subscribe_align">
              <button type="submit" class="subscribe btn btn-sm "> <span> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/mail-sent.png" alt="mailicon"> </span> </button>
              </span> </div>
          </div>
          <div id="subscribereturn"></div>
        </form>
      </div>
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
         error: function(resp) { }
   });

});
               
               </script>
  </div>
</section>


<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" defer></script>
