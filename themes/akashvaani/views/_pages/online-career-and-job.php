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
      <img src="<?php echo base_url('/assets/astrology/img/ask-one-question-slider-mobile.png'); ?>" class="img-fluid" alt="Manglik Dosha">
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
          <img src="<?php echo base_url('/assets/img/mobi/story-of-my-life-slider-mobile.jpg'); ?>" class="img-fluid" alt="Manglik Dosha Solution">
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
    <style>
        html, body {
    max-width: 100%;
    overflow-x: hidden!important;
}
        
    </style>
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
            <li class="breadcrumb-item active">Career</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/careerimage.jpg"> <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500; font-size: 25px;">Career</h3>
            <p class="myfont">Our work or profession takes up a better part of our lives. It determines the quality of our life. Most of the people fall into the category of routine jobs or remain average.<br>
              This reading is an essential tool to make a difference in your thinking, attitude and eventually changing your life.  While you are surrounded by options; some out of choice and some out of force picking what is best for you holds the key.<br>
              Astrology is a subject that consists of number of belief systems that holds a relationship between your planets and events or descriptions of personality in the human world. Based on your date of birth, place, time one can very well picture your career, business or professional path that will benefit you. </p>
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
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Career Page form 1')); ?>
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
          <button type="submit" id="ask_enquiry" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button><div id="enquiry_result"></div>
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
        success: function(data){ window.location.replace(data);	
        },
         error: function(resp) {  }
   });
});
</script>
      </div>
    </div>
  </div>
  <!--Footer-->
</div>
<hr>
<div class="container">
  <section class="section feature-box" style="margin-top:3rem">
    <!--Section heading-->
    <h1 class="section-heading howorks">Career Prediction  through astrology</h1>
    <!--Section sescription-->
    <!--  <p class="section-description lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p> -->
    <!--Second column-->
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <h4>What is exactly Career Prediction? </h4>
      <p class="myfont">Our Career prediction includes 3 important indicators to predict your career or professional life.<br>
        The first is the planet  Saturn  the second is your birth date , time and location and the third is the 10th house , the house of lord . Based on these our excerpts will determine where and how will be your professional life .</p>
    </div>
    <!--First row-->
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
    </div>
    <div class="row">
      <div class="col-md-4">
        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half healthissue"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/careericone.png" alt="Online Career and Job" class="z-depth-0">
          <div class="mask waves-effect waves-light"> </div>
        </div>
        <br>
      </div>
      <!--Main information-->
      <div class="col-md-7" style="text-align:left;">
        <h4>Issues & problems astrology solves</h4>
        <hr>
        <p class="myfont">Career forecast tends to read and define various kinds of profession depending upon the lord of 10th house.<br>
          What does it takes to get along with your Boss? How should one choose the right profession?<br>
          Where can you find the right working environment? Where can peer pressure take me?<br>
          Are you willing to move abroad or which foreign country will be best for your profession?<br>
          Wants to start up your own business? Wants to make your existing job stable and indispensible?<br>
          Should I join my family business? </p>
      </div>
    </div>
    <!--/First row-->
  </section>
  <hr>
  <section class="section feature-box">
    <!--Section heading-->
    <h1 class="section-heading howorks">Career prediction through date of birth</h1>
    <p class="section-description" style="margin-left:5%;margin-right:5%;margin-bottom:2rem">Take our Career Compatibility Test and all these questions which one confronts can be very much answered or solved. Our test will determine how successful will you be in your chosen career. Our Astro remedies will help you to find the solutions exactly required for a strong financial life </p>
  </section>
</div>
<hr>
<div class="container">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
        <h5 style="font-size: 18px;font-weight: 400;">Career and Job</h5>
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
              <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2017</a> <?php echo selectoption('yearselect', 1960, 0); ?></div>
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
                <div class="card hourbox">  <?php echo selectoption('hourselect', 0, 23); ?></div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv4" type="text" class="form-control" name="minute" style="cursor:pointer" onClick="showDiv4()" onfocus="blur()" required>
                <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
              </div>
              <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop">
                <div class="card minutebox"> <?php echo selectoption('minuteselect', 0, 59); ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>
          <div class="md-form"> 
		  <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required', 'onFocus' => 'geolocate()')); ?> </div>
          <input type="hidden" id="latitude" name="latitude" class="location">
          <input type="hidden" id="longitude" name="longitude" class="location">
          <input type="hidden" id="timezone" name="timezone" class="location">
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
      </div>
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
	
	$('.location').each(function( index ) { 
  				if($(this).val() == ''){ 
				$('#gethoroscope').trigger('click');
				return false;
				}
	});
	
	
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
         $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/career'); ?>",
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
<?=$get_report_section;?>

<?php echo $serviceForm;?>
</div>
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
        <input name="reference_page" value="Career" type="hidden">
 
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
<hr>
  <h2 class="h2-responsive firsthead">What Our customers Says</h2>
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
                <h4>Suchismita Seth - Amtala, West Bengal</h4>
                <p><i class="fa fa-quote-left"></i> I was much tensed about my education and career. Found out about akashvaani.com on internet. I got my consultation from this website . astrologer was helped me. I am really greatfull to his guidance.</p>
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
                <h4>ABHAY TIWARI - Chandrapur, Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i> Thanks for the service. The service is really good actually  my doubt is cleared now & I know what to do & what not?? With the help of this service it provides me guidance for career to choose right path in my life.Thanks for your guidance & giving accurate & concisely information. Thankyou very much for your service.</p>
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
                <h4>Nisha Sharma - Gurgaon Haryana</h4>
                <p><i class="fa fa-quote-left"></i> I was quite satisfied with the answer though felt if I could have asked more specific question.  The answer I received was satisfactory yet I'm waiting for the outcomes as predicted by guru ji.  Thanks for being so responsive.</p>
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
                <h4>Sheeba David - Pune Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i>I got to know akashwani online and I got good predictions but I am yet to experience the predictions given by them and I m sure I will get good results based on their predictions astrologers are good and supportive everyone should try akashwani. </p>
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
                <h4>Aseem Tandon - Chandigarh Punjab</h4>
</span></div>   </span>
<div class="snippet-data"><span itemprop="itemReviewed">
                <p><i class="fa fa-quote-left"></i> I asked about marriage, career health for myself, my sister and my mother All my questions have been answered promptly. I always recommend akashvaani for my family. Thanks for all the help. All the answers are 100% satisfied.</p></span>
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
                <h4>Naresh Choudhary - Pune Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i> I've tried akashvaani for several questions and other services such as match matching and kundali services. All answers are satisfactory and I would suggest to try akashvaani for any kind of astrological questions/remedies or any other remedies for their problems. Akashvaani was beneficial for me since I got 100% accurate answers for my questions and I'm totally satisfied for akashvaani services. I got all answers and services on time. Thank you akashvaani.</p>
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
        <div class="slide-img"> <a href="<?=base_url('/astrology/manglik-dosha-solution');?>">
         <img src="<?=base_url('/assets/astrology/img/Page1.png');?>" alt="Check Manglik dosha"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/manglik-dosha-solution');?>"><b>Check Manglik dosha</b></a></span>
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
        <div class="slide-img"> <a href="<?=base_url('/p/gemstones/ruby-gems');?>">
         <img src="<?=base_url('/assets/astrology/img/Page4.jpg');?>" alt="Gemstone suggestions"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/p/gemstones/ruby-gems');?>"><b>Gemstone suggestions</b></a></span>
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
  <div class="swiper-slide">
        <div class="slide-img"> <a href="<?=base_url('/astrology/child-pregnancy');?>">
         <img src="<?=base_url('/assets/astrology/img/Page5.jpg');?>" alt="Child & Pregnancy issues"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/child-pregnancy');?>"><b>Child & Pregnancy issues</b></a></span>
          <div><?//=substr(strip_tags($article->description), 0, 100);?></div>
        </div>
      </div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swipper-button"></div>
    <div class="swiper-button-prev swipper-button"></div>
    <!-- Add Pagination -->
  </div>

</div>
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

<section class="section extra-margins" style="margin-top:65px;">
  <div class="container">
    <h1 class="section-heading howorks">Most Asked Questions</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 What is a Right Job? </p>
            <p>Ans. Well we believe that a right job gives you happiness ,that earns a good salary that can support your needs as well help you to have a quality life.<a href="#" class="read_more">...continue read</a><span class="more_text">Many people keep trying , changing multiple jobs still can&#39;t find all these benefit in one single job or in their business.  Job prediction makes  all the possibilities for getting a strong and consistent career. <a href="#" class="read_less">...read less</a></span></p>
            <div class="item"> </div>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-warning q2">
            <p class="bq-title">Q.2 What is Changing Career? </p>
            <p>Ans. Well if you start following your dream but with time you have a change of mind, heart and wants to pursue a different role or path is a change <a href="#" class="read_more1">...continue read</a><span class="more_text1">of career . That&#39;s perfectly all right .   Based on your birth chart we help you to find that change which will get you money ,satisfaction and fame.<a href="#" class="read_less1">...read less</a></span></p>
          </blockquote>
        </div>
        <div class="card">
          <blockquote class="blockquote bq-success q3">
            <p class="bq-title">Q.3 Not Working! Wants to start working again ?</p>
            <p>Ans. Well, No worries! There are many people who have left their working life, taken a sabbatical due to any reason but now <a href="#" class="read_more2">...continue read</a><span class="more_text2">would like to restart with their dream job . Our excerpt astrologers will guide you to find that dream job no matter how long is the break. <a href="#" class="read_less2">...read less</a></span></p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> daily astrological feed<span class="text-white font18">,</span> Daily Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span> </div>
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





  
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" defer></script>
