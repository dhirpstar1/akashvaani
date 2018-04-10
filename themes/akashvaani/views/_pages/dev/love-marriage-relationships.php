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
        <!--First row-->
        <div class="row">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
            <li class="breadcrumb-item active">Love</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/love.jpg" alt="love and relationships astrology" class="z-depth-0" > <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500; font-size: 25px;">Love Marriage</h3>
            <p class="myfont">Karmic & Soul Mate  !  Never underestimate the power of searching your soul mate in connection to Astrology. </p>
            <p class="myfont">We all are looking for a honest and trusted partner for a life time.  In today&#39;s generation finding a honest and trusted partner is a challenge. This trust & faith in each other is the foundation of the true love and marriage. You would have observed that the deep faith & trust in the partner gives the love a longer life. </p>
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
      <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text"> Ask From Our Expert </div>
      </div>
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Love Marriage form 1')); ?>
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
                <textarea type="text" id="form8" class="md-textarea" name="description"></textarea>
                <label for="form8">Ask Your Question</label>
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
         error: function(resp) { //alert(JSON.stringify(resp)); 
		 }
   });
});
</script>
      </div>
    </div>
  </div>
  <!--Footer-->
</div>
<hr style="margin-top:3rem">
<div class="container kundaliform">
  <div class="card formcard">
    <div class="card-block"> <?php echo form_open('service/generate_matchmaking_new', array('class' => 'form-horizontal', 'id' => 'matchmaking')); ?>
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
        <h5 style="font-size: 18px;font-weight: 400;">Love Marriage</h5>
        <h5 style="font-size: 14px;font-weight: 400;">Fill in the details</h5>
      </div>
      <!--Body-->
      <div class="row">
        <div class="col-md-6 col-xs-12 boyform">
          <div class="male" style="text-align:center;font-size:30px"> <i class="fa fa-male" aria-hidden="true">Male</i> </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
              <div class="md-form">
                <input type="text" id="boyname"class="form-control" required>
                <label for="boyname">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv" type="text" class="form-control mday" name="mday"  style="cursor:pointer" onClick="showDiv()" required>
                    <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="dateDiv" class="col-md-4 col-xs-4 datedrop">
                  <div class="card datebox"> <?php echo selectoption('dateselect', 1, 31); ?> </div>
                </div>
                <!--/Blue select-->
                <!--Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv1" type="text" class="form-control" name="mmonth" style="cursor:pointer" onClick="showDiv1()" required>
                    <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> <?php echo selectoption('monthselect'); ?> </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv2" type="text" class="form-control" name="myear" style="cursor:pointer" onClick="showDiv2()" required>
                    <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
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
              <p style="font-weight:400;color:#0275d8;font-size:14px">Time of Birth</p>
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv3" type="text" class="form-control"  name="mhour" style="cursor:pointer" onClick="showDiv3()" required>
                    <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                    <div class="card hourbox"> <?php echo selectoption('hourselect', 0, 23); ?> </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv4" type="text" class="form-control"  name="mminute"  style="cursor:pointer" onClick="showDiv4()" required>
                    <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="minuteDiv" class="col-md-12 minutedrop">
                    <div class="card minutebox"> <?php echo selectoption('minuteselect', 0, 59); ?> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
              <div class="md-form"> <?php echo form_input(array('id' => 'mautocomplete', 'class' => 'form-control', 'placeholder' => 'Birth Place', 'type' => 'text', 'name' => 'mplace', 'value' => '', 'required' => 'required')); ?>
                <input type="hidden" id="mlatitude" name="mlatitude" placeholder="latitude">
                <input type="hidden" id="mlongitude" name="mlongitude" placeholder="longitude">
                <input type="hidden" id="mtimezone" name="mtimezone" placeholder="timezone">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 girlform">
          <div class="male" style="text-align:center;font-size:30px"> <i class="fa fa-male" aria-hidden="true">Female</i> </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
              <div class="md-form">
                <input type="text" id="girlname" class="form-control" required>
                <label for="girlname">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv5" type="text" class="form-control" name="fday"  style="cursor:pointer" onClick="showgirlDiv()" required>
                    <label id="girldatelabel" for="mydiv5" style="cursor:pointer">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="girldateDiv" class="col-md-4 col-xs-4 datedrop">
                  <div class="card datebox"> <?php echo selectoption('girldateselect', 1, 31); ?> </div>
                </div>
                <!--/Blue select-->
                <!--Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv6" type="text" class="form-control" name="fmonth" style="cursor:pointer" onClick="showgirlDiv1()" required>
                    <label id="girlmonthlabel" for="mydiv6" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="girlmonthDiv" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> <?php echo selectoption('girlmonthselect'); ?> </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv7" type="text" class="form-control" name="fyear" style="cursor:pointer" onClick="showgirlDiv2()" required>
                    <label id="girlyearlabel" for="mydiv7" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="girlyearDiv" class="col-md-4 col-xs-4 yeardrop">
                  <div class="card yearbox"> <?php echo selectoption('girlyearselect', 1960, 0); ?> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Time of Birth</p>
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv8" type="text" name="fhour"  class="form-control" style="cursor:pointer" onClick="showgirlDiv3()" required>
                    <label id="girlhourlabel" for="mydiv8" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="girlhourDiv" class="col-md-12 col-xs-6 hourdrop">
                    <div class="card hourbox"> <?php echo selectoption('girlhourselect', 0, 23); ?> </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv9" type="text" class="form-control" name="fminute" style="cursor:pointer" onClick="showgirlDiv4()" required>
                    <label id="girlminutelabel" for="mydiv9" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="girlminuteDiv" class="col-md-12 col-xs-6 minutedrop">
                    <div class="card minutebox"> <?php echo selectoption('girlminuteselect', 0, 59); ?> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
              <div class="md-form"> <?php echo form_input(array('id' => 'fautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'fplace', 'value' => '', 'required' => 'required')); ?>
                <input type="hidden" id="flatitude" name="flatitude" placeholder="latitude">
                <input type="hidden" id="flongitude" name="flongitude" placeholder="longitude">
                <input type="hidden" id="ftimezone" name="ftimezone" placeholder="timezone">
              </div>
            </div>
          </div>
        </div>
      </div>
       <script>
      var placeSearch, autocomplete;
      var componentForm = {locality: 'long_name'};
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('mautocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);
		
		autocomplete2 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('fautocomplete')),
            {types: ['geocode']});
        autocomplete2.addListener('place_changed', fillInAddress2);
		
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      	document.getElementById('mlatitude').value = place.geometry.location.lat();
		document.getElementById('mlongitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'mtimezone');
	}
	
	function fillInAddress2() {
        var place = autocomplete.getPlace();
      	document.getElementById('flatitude').value = place.geometry.location.lat();
		document.getElementById('flongitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'ftimezone');
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
      <?php echo form_close(); ?>
      <script>
    $('form#matchmaking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
	
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/love'); ?>",
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
    </div>
  </div>
  
   <div class="bigform-content">
          <div class="horoscope_result" id="collapseResult"></div>
  </div>
  
    <div style="clear:both;"></div>
  
  



<script type="text/javascript">
$('.buy_now_matchmaking_report').click(function(e){
window.location.href = '<?php echo base_url('/report?lg=');?>' + $('#langauge_select :selected').val()+ '&type=matchmaking_report';
 e.preventDefault();
});

</script>
  
  <div style="clear:both;"></div>
  <hr style="margin-top:4rem">
  <div class="row fadeIn" data-wow-delay="0.4s" style="visibility: visible; margin-top:4%; animation-delay: 0.4s; animation-name: fadeIn;">
    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="mb-2 mc-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-item md-pills pills-default" role="tablist">
          <li class="nav-item waves-effect waves-light"> <a id="pane131" class="nav-linka nav-link active" data-toggle="tab" href="#panel31" role="tab" aria-expanded="true">Love Marriage</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane132" class="nav-link" data-toggle="tab" href="#panel32" role="tab" aria-expanded="false">Inter-Cast Marriage</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane133" class="nav-link" data-toggle="tab" href="#panel33" role="tab" aria-expanded="false">Arrange Marriage</a> </li>
        </ul>
      </div>

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
                  <div class="view overlay hm-white-slight" style="box-shadow:none;"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/loveicon.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7 q1">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Love Marriage</h2>
                  <hr>
                  <p class="myfont">As Vedic astrology says that based on your birth chart it is very much visible the nature of your marriage , time of your marriage and  location of your marriage . Love marriage, inter-cast marriage, inter religion marriage can be very much made hassle-free and smooth with the help of constructive and accurate astrological solution.<a href="#" class="read_more">...read more</a></p>
                  <p class="myfont"><span class="more_text"> As Vedic astrology says that based on your birth chart it is very much visible the nature of your marriage , time of your marriage and  location of your marriage . Love marriage, inter-cast marriage, inter religion marriage can be very much made hassle-free and smooth with the help of constructive and accurate astrological solution.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Family Objection to love or inter-cast or inter religion marriage<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Social disturbance in your decision to get into a inter religion relationship <br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Low financial or low social status of your partner causing obstacle in your marriage <br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Misunderstanding or misconception between two lovers <br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lack of commitment toward each other for marriage <br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Personal choice or frequent change in priorities between lovers <a href="#" class="read_less">...read less</a></span> </p>
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
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/loveicon.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7 q2">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Inter-Cast or Inter-Religion Marriage</h2>
                  <hr>
                  <p class="myfont">In matter of Inter-Cast or Inter-Religion Marriage , though we belong to a  developed  nation still today parents or families are still not very open with inter-cast or inter-religion marriage . The difference arises mainly due to :<a href="#" class="read_more1">...read more</a></p>
                  <p class="myfont"><span class="more_text1"><i class="fa fa-angle-double-right" aria-hidden="true"></i> social stigma,<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> different cultural background,<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Practising different faith,<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> food habits,<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> lifestyle , tradition , standard of living,<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Low financial status or no social status .<br>
                    <br>
                    Our decade old experienced Astrologers at &#34;Akashvaani&#34; will get you the exact reason and remedies to overcome these fundamentals and make your choice of marriage a success. <a href="#" class="read_less1">...read less</a></p>
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
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/loveicon.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7 q3">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Arrange Marriage</h2>
                  <hr>
                  <p class="myfont">The Marriage Prediction on arranged  marriage, promised marriage,  can be very much calculated by studying the birth chart or kundali of an individual . It also pays attention to the planetary positions that decide the time of marriage , kind of partner suitable for you. Based on analyzing the planetary positions one can predict the other factors that lead to smooth married life or unhappy married life.:<a href="#" class="read_more2">...read more</a></p>
                  <p class="myfont"><span class="more_text2">A deep observation and study of your birth chart will determine all aspects of marriage.  This is because each and every planet has a great influence on your marital life and if these planet are studied well they can help you to get the right partner, Location, time and also tell you the kind of family one will get married . For Instance for a harmonious and lasting marriage planet like Jupiter, Venus, moon, mars in birth chart should be extremely supportive and auspicious. <a href="#" class="read_less2">...read less</a></p>
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
        <input name="reference_page" value="love-marrage-prediction" type="hidden">
 
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

  $('#getrep_name').val($('#boyname').val());
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
                <h4>Mansi Dixit/Vivek - Lucknow UP</h4>
                <p><i class="fa fa-quote-left"></i> Hi I asked about my friend's marriage problem and guruji explained it with dedications and  with solution. I am looking forward to ask about my other relatives.</p>
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
                <p><i class="fa fa-quote-left"></i>  asked about marriage, career health for myself, my sister and my mother All my questions have been answered promptly. I always recommend akashvaani for my family. Thanks for all the help. All the answers are 100% satisfied.</p>
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
                <h4>Sheeba David - Pune Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i> I got to know akashwani online and I got good predictions but I am yet to experience the predictions given by them and I m sure I will get good results based on their predictions astrologers are good and supportive everyone should try akashwani.</p>
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
                <h4>ABHAY TIWARI - Chandrapur, Maharashtra</h4>
                <p><i class="fa fa-quote-left"></i>Thanks for the service. The service is really good actually  my doubt is cleared now & I know what to do & what not?? With the help of this service it provides me guidance for career to choose right path in my life.Thanks for your guidance & giving accurate & concisely information. Thankyou very much for your service. </p>
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
                <h4>Ankit Sharma - Shimla Himachal Pradesh</h4>
</span></div>   </span>
<div class="snippet-data"><span itemprop="itemReviewed">
                <p><i class="fa fa-quote-left"></i> I asked about marriage, I have start to do the remdies for the same, that was Great experience with akashvaani. I recommend akashvaani in future too.</p></span>
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
                <p><i class="fa fa-quote-left"></i> The service\akashvani was good.predictions explained was satisfactory and precise .</p>
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
        <div class="slide-img"> <a href="<?=base_url('/blog/'.$article->slug);?>">
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
<hr><div class="swiper-container swiper-example4">
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
        <div class="slide-img"> <a href="<?=base_url('/astrology/online-marriage-prediction');?>">
         <img src="<?=base_url('/assets/astrology/img/3_pages.png');?>" alt="Your marriage prediction"></a>
        </div>
        <div class="slide-detail">
          <span><a href="<?=base_url('/astrology/online-marriage-prediction');?>"><b>Your marriage prediction</b></a></span>
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
<hr style="margin-bottom: 3rem;margin-top:3rem">
<h1 class="section-heading howorks">Most Asked Questions</h1>
<div class="container qa">
    <div class="row">
       <div class="col-md-12">
           <div class="card">
        <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 Is it possible to know from your chart if you are going through love affair?</p>
            <p>Ans. Yes! With astrology one can find out when the love is going come in life through the reading of the birth char. The position of 
  <a href="#" class="read_more">...continue read</a><span class="more_text"> Venus denotes the person is very popular in opposite sex and this is the high time when a person can fall in love. Poor Venus means it is malefic by the effect of other planets and effect in creating new relationships. <a href="#" class="read_less">...read less</a></span></p>
                <div class="item">
                </div>
            </blockquote>
            </div>
            
           <div class="card">

            <blockquote class="blockquote bq-warning q2">
                <p class="bq-title">Q.2 Is it possible to know if we will go for marriage is going to succeed.</p>
                <p>Ans. Having love affair and thinking about marriage are two different things and both of these things are denoted by the different houses of the birth chart. Venus  <a href="#" class="read_more1">...continue read</a><span class="more_text1"> and mars is a reason for love in anyone�s life but marriage is only possible due to the blessing of Jupiter in the horoscope and beneficial planet present in the 7th house.<br>
<a href="#" class="read_less1">...read less</a></span></p>
                </blockquote>
                </div>
           <div class="card">

                <blockquote class="blockquote bq-success q3">
                    <p class="bq-title">Q.3 Can astrology help if we both want to take our love affair to marriage but our parents don't agree.</p>
                    <p>Ans.  The question is itself an answer. As per the astrology, there is a concept of matching kundali for marriage that denotes the status, financial, mental compatibility for marriage. <a href="#" class="read_more2">...continue read</a><span class="more_text2">  Moreover, it also tells whether the marriage is going to be successful or will face some problems in future. If you 7th house will be in your favor then marriage will definitely happen. 
                       <a href="#" class="read_less2">...read less</a></span></p>
                   </blockquote>
                   </div>
        
        
        <div class="card">

                <blockquote class="blockquote bq-warning q4">
                    <p class="bq-title">Q.4 We are in love and we want to go for marriage but there is one is manglik and other is non-manglik, Please advice.</p>
                    <p>Ans. There are various cases where one person is manglik, another person is non-manglik, and they are happily married. However, it can only determined by after looking at the kundali,<a href="#" class="read_more3">...continue read</a><span class="more_text3"> whether person have serious manglik dosha or partial. Both dosh can be cured but after seeking only astrological consultancy. An astrologer can also suggest some remedies for this dosha. 
                       <a href="#" class="read_less3">...read less</a></span></p>
                   </blockquote>
                   </div>


                   
                        </div>
                    </div>
                   
                    
                </div>


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
  </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" defer></script>
