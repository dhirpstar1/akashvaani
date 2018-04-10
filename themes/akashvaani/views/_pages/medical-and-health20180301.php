<link rel="stylesheet" href="<?= base_url() ?>/api/css/style.css" media="all"  type="text/css"/>
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
        <h1 class="section-heading">Health Astrology</h1>
        <!--First row-->
        <div class="row">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
            <li class="breadcrumb-item active">Health</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/health.jpg" alt="Online Health Astrology" class="z-depth-0"> <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-7 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500">Health</h3>
            <p class="myfont">Health.  An  universal desire of human beings.<br>
              No matter how wealthy or powerful one's, health, after all, is the most precious thing. Health is not simply a matter of absence of illness. Health means constant challenge.<br>
              We have seen that illness both mental as well physical has become one of the most basic sufferings that human beings experience in today&#39;s time. <br>
              In seeking to free people from this suffering - Jyotish Vidya or Astrology has always played an important role in health. Using Hindu Vedic Methodology we are able to predict the relation between the mind and body. To let you know that planetary positions can also influence health conditions to a great extent. </p>
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
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Health form 1')); ?><?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
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
        success: function(data){ //
			window.location.replace(data);	
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
<hr style="margin-top:3rem">
<div class="container">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
        <h5 style="font-size: 18px;font-weight: 400;">Health</h5>
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
                <div class="card hourbox">  <?php echo selectoption('hourselect', 0, 23); ?> </div>
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
          <div class="md-form"> <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required', 'onFocus' => 'geolocate()')); ?> </div>
          <input type="hidden" id="latitude" name="latitude" placeholder="latitude" class="location">
          <input type="hidden" id="longitude" name="longitude" placeholder="longitude" class="location">
          <input type="hidden" id="timezone" name="timezone" placeholder="timezone" class="location">
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
    { $.ajax({url:"https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+(Math.round((new Date().getTime())/1000)).toString()+"&sensor=false",
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
	
	$('.location').each(function( index ) {
  				if($(this).val() == ''){ 
				$('#gethoroscope').trigger('click');
				return false;
				}
	});
     $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/health'); ?>",
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
  <hr style="margin-top:4rem">
  <section class="section feature-box" style="margin-top:3rem">
    <!--Section heading-->
    <h1 class="section-heading howorks">How does Prediction Works</h1>
    <!--Section sescription-->
    <!--  <p class="section-description lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p> -->
    <!--First row-->
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont">Based on your date of birth, time , location or horoscope and using the vedic methodology  we try to explain and give you the prediction of your health which is commonly  known as medical astrology or vedic medical astrology . </p>
    </div>
    <div class="row features-small">
      <!--First column-->
      <div class="col-md-5 center-on-small-only"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/healthicone.png" alt="Medical and Health Astrology" class="z-depth-0"> </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-7 center-on-small" style="margin-top:30px;">
        <!--First row-->
        <div class="row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-10">
            <h4 class="feature-title">Health Prediction</h4>
            <p class="myfont">In Vedic health forecast we explain you how the planets in various position determines the nature of your health. There is a link between your planets and house with your body parts. </p>
            <p class="myfont">Each house and each planets corresponds to particular part of the body. Below is for your reference. </p>
          </div>
        </div>
        <!--/First row-->
        <!--/Third row-->
      </div>
      <!--/Second column-->
    </div>
    <div class="row features-small chips">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <div class="chip"> FIRST HOUSE - Head </div>
        <div class="chip"> SECOND HOUSE - Throat and neck </div>
        <div class="chip"> THIRD HOUSE - Arms, hands, lungs, nerves </div>
        <div class="chip"> FOURTH HOUSE - Stomach, breasts, thorax </div>
        <div class="chip"> FIFTH HOUSE - Heart, spine and back </div>
        <div class="chip"> SIXTH HOUSE - Intestines, digestion </div>
        <div class="chip"> SEVENTH HOUSE - Kidneys </div>
        <div class="chip"> EIGHTH HOUSE - Colon, sex organs, lower back </div>
        <div class="chip"> NINTH HOUSE - Hips, thighs </div>
        <div class="chip"> TENTH HOUSE - Skin, knees, bones </div>
        <div class="chip"> ELEVENTH HOUSE - Circulation, blood, legs </div>
        <div class="chip"> TWELFTH HOUSE � Feet, left eye, sleep </div>
      </div>
    </div>
    <!--/First row-->
    <br><br>
    <?=$get_report_section;?>

<?php echo $serviceForm;?>
  </section>

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
        <input name="reference_page" value="Health" type="hidden">
 
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

<!--Asked questions-->
<h1 class="section-heading howorks">Most Asked Questions</h1>

<div class="container qa">
    <div class="row">
       <div class="col-md-12">
           <div class="card">
        <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 An Astrology predict my health problems even before they occur?</p>
            <p>Ans. Yes! According to the planetary positions at the time of your birth determines the present and the future of your health. There are 12 houses in the birth chart and each house is <a href="#" class="read_more">...continue read</a><span class="more_text"> associated with their lords and Planets. The combination of planets determines at what age you will fall sick.
                <a href="#" class="read_less">...read less</a></span></p>
                <div class="item">
                </div>
            </blockquote>
            </div>
            
           <div class="card">

            <blockquote class="blockquote bq-warning q2">
                <p class="bq-title">Q.2 Is it possible to know through astrology if my current health condition get better?</p>
                <p>Ans. Yes! The position of planets in the wrong house determines which health issue is going to happen but as you know planets rotates all the time, your health can also improve with time.</p>
                </blockquote>
                </div>
           <div class="card">

                <blockquote class="blockquote bq-success q3">
                    <p class="bq-title">Q.3 Is it a good time for Surgery/operations ?</p>
                    <p>Ans. The moon has the control over tides and every water body on the earth. In fact moon also controls the closing and opening of the oysters, also monthly cycle of the female (Takes 28 days to revolve around the earth). Means the human body is composed of 70% of fluid, hence moon also affect human body. <a href="#" class="read_more2">...continue read</a><span class="more_text2"> Operation or surgery is a disturbance with the natural process of the Moon because each and every organ is ruled by the Moon. Being moon in malefic house or with malefic planet can bring harmful result. 
                       <a href="#" class="read_less2">...read less</a></span></p>
                   </blockquote>
                   </div>
        
        
        <div class="card">

                <blockquote class="blockquote bq-warning q4">
                    <p class="bq-title">Q.4 Why I am falling sick repeatedly?</p>
                    <p>Ans. As per medical astrology, all the planets are associated with some part of the human body. During the dasha of the planet or during the unfavorable transit, an individual have to suffer health issue either small or big. </p>
                   </blockquote>
                   </div>
  
                   
                   
                 
                   
                   
                        </div>
                    </div>
                   
                    
                </div>




<!--Most ask questions-->



<?php /*?><section class="section extra-margins" style="margin-top:65px;">
  <div class="container">
    <div class="row">
      <!--First column-->
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <!--Featured image-->
        <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/report.jpg"> <a>
          <div class="mask"></div>
          </a> </div>
      </div>
      <div class="col-md-6 mb-r mb-h">
        <!--Excerpt-->
        <h3 style="font-weight:600">Reports</h3>
        <p class="myfont">All these can be very much be predicted by Akashvaani expert Astrologers and will suggest Astro remedies to reduce the negative influences on the planets. </p>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-login" style="border-radius: 35px!important;
    background: #ff3366!important;"> Get Your Report </button>
        <!-- Modal Login -->
        <div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content" style="padding:35px;">
              <!--Body-->
              <div class="modal-body"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry100')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Health form 2')); ?><?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
                <div class="md-form"> <i class="fa fa-user prefix"></i>
                  <input type="text" id="reportname" name="first_name" class="form-control" required>
                  <label for="reportname">Your Name</label>
                </div>
                <div class="md-form"> <i class="fa fa-envelope prefix"></i>
                  <input type="text" id="reportemail" name="email" class="form-control" required>
                  <label for="reportemail">Your email</label>
                </div>
                <div class="md-form"> <i class="fa fa-phone prefix"></i>
                  <input type="text" id="repornumber" name="phone" class="form-control" required>
                  <label for="reportnumber">Your Number</label>
                </div>
                <div class="text-xs-center">
                  <button id="ask_enquiry2" class="btn btn-primary btn-lg" style="border-radius: 35px!important;background: #ff3366!important;">Submit</button>
                   <div id="enquiry_resultform"></div>
                </div>
              </div>
              <?php echo form_close(); ?>
             
              <script>
    $('form#sendenquiry100').submit(function(e) {
    var form = $(this);
    e.preventDefault();
		$('#enquiry_resultform').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
		$('#ask_enquiry2').css('visibility', 'hidden');
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
			window.location.replace(data);	
        },
         error: function(resp) { //alert(JSON.stringify(resp)); 
		 }
   });
});
</script>
            </div>
            <!--/.Content-->
          </div>
        </div>
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
  </div>
</section>
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
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
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
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
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
                <h4>Shikha</h4>
                <p><i class="fa fa-quote-left"></i>I Was Much Tensed About My Job Success. I Got My Consultation From This Website, Believe Me Within 3 Months Of Remedies Suggested By Astrologer I Got Promoted In My Company. They Have Best Customer Service Team. </p>
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
                <h4>Sukriti</h4>
</span></div>   </span>
<div class="snippet-data"><span itemprop="itemReviewed">
                <p><i class="fa fa-quote-left"></i> Akashvaani Is Worth Taking Service. I Was Doubtful About The Payment Security, But They Are Trustworthy. I Am Satisfied That I Have Invested At Right Place.</p></span>
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
                <h4>Lekha Sharma</h4>
                <p><i class="fa fa-quote-left"></i> I Was Jobless For Last One Year, Irrespective Of My Qualification My Luck Was Not With Me. Then I Contacted Akashvaani.Com. They Told Me About My Dasha And A Simple Remedy. After Two Months I Got Job. I Am Amazed To See This Positive Result.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
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
                <p><i class="fa fa-quote-left"></i>I Was Very Worried About My Husband�s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
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
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Khushboo</h4>
                <p><i class="fa fa-quote-left"></i> I Was Very Worried About My Husband�s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me. </p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
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
  <!--/Section: Testimonials v.4-->
</div>
