<link rel="stylesheet" href="<?= base_url() ?>/api/css/style.css" media="all"  type="text/css"/>
  <link href="<?php echo base_url('/assets/reports/'); ?>/css/report.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/horoscope/css/horoscope.css'); ?>" rel="stylesheet">

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
            <li class="breadcrumb-item active">Kundali Matching</li>
          </ol>
          <section class="section feature-box">
            <!--Section heading-->
            <h2 class="h2-responsive firsthead">Kundali Matching</h2>
            <!--Section sescription-->
            <p class="section-description lead" style="margin-left:1%;margin-right:1%;font-size: 13px;word-spacing:1px">Kundali matching is important for various reasons. It measures the level of compatibility of the two persons who are going to be bonded by marriage for life. It is also done to assess of their compatibility to bear a child together.
 </p>
          </section>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
<img src="<?php echo resizedUrl(base_url('/assets/astrology/img/kundali-milan.jpg'), 347, 230); ?>" alt="Match-Make with your loved One" class="img-fluid">

             <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <p style="font-size: 13px;word-spacing:4px">Kundali matching also looks into factors like financial stability and other career related prospects. A guna, named Bhakoot indicates this effect.
</p>
<p style="font-size: 13px;word-spacing:4px">After reaching a certain age in your life, you get to a point where you need to tie a knot of marriage with a person of your desire. Often, people have predetermined qualities of how this person should be. These qualities are often in physical terms.
</p>
<p style="font-size: 13px;word-spacing:4px">But what’s important is what lies in the nature of the person rather than physical appearance. <b>Kundli</b> is, therefore, checked of both the boy and girl to see if they are compatible for each other.
</p>
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
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Kundali Matching form 1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?>
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
          <button type="submit" id="ask_enquiry" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>
          <div id="enquiry_result"></div>
          <?php echo form_close(); ?> </div>
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
  <!--Footer-->
  <hr>
</div>
<div class="container kundaliform">
<div class="card formcard">
  <div class="card-block"> <?php echo form_open('service/generate_matchmaking_new', array('class' => 'form-horizontal', 'id' => 'matchmaking')); ?>
    <!--Header-->
    <div class="form-header blue-gradient">
      <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
      <h5 style="font-size: 18px;font-weight: 400;">Kundali</h5>
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
                  <input id="mydiv" type="text" class="form-control mday" name="mday" style="cursor:pointer" onClick="showDiv()" onfocus="blur()" required>
                  <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
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
                  <input id="mydiv1" type="text" class="form-control" name="mmonth" style="cursor:pointer" onClick="showDiv1()" onfocus="blur()" required>
                  <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
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
                  <input id="mydiv2" type="text" class="form-control" name="myear" style="cursor:pointer" onClick="showDiv2()" onfocus="blur()" required>
                  <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop">
                <div class="card yearbox"> 
<?php echo selectoption('yearselect', 1960, 0); ?>
                   </div>
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
                  <input id="mydiv3" type="text" class="form-control"  name="mhour" style="cursor:pointer" onClick="showDiv3()" onfocus="blur()" required>
                  <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                </div>
                <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                  <div class="card hourbox">

 <?php echo selectoption('hourselect', 0, 23); ?>

                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-6">
                <div class="md-form">
                  <input id="mydiv4" type="text" class="form-control"  name="mminute"  style="cursor:pointer" onClick="showDiv4()" onfocus="blur()" required>
                  <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                </div>
                <div id="minuteDiv" class="col-md-12 minutedrop">
                  <div class="card minutebox"> 
<?php echo selectoption('minuteselect', 0, 59); ?>
                    </div>
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
                  <input id="mydiv5" type="text" class="form-control" name="fday"  style="cursor:pointer" onClick="showgirlDiv()" onfocus="blur()" required>
                  <label id="girldatelabel" for="mydiv5" style="cursor:pointer">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="girldateDiv" class="col-md-4 col-xs-4 datedrop">
                <div class="card datebox"> 
                    <?php echo selectoption('girldateselect', 1, 31); ?>
                   </div>
              </div>
              <!--/Blue select-->
              <!--Blue select-->
              <div class="col-md-4 col-xs-4">
                <div class="md-form">
                  <input id="mydiv6" type="text" class="form-control" name="fmonth" style="cursor:pointer" onClick="showgirlDiv1()" onfocus="blur()" required>
                  <label id="girlmonthlabel" for="mydiv6" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="girlmonthDiv" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> 
                    <?php echo selectoption('girlmonthselect'); ?>
                 </div>
              </div>
              <!--/Blue select-->
              <div class="col-md-4 col-xs-4">
                <div class="md-form">
                  <input id="mydiv7" type="text" class="form-control" name="fyear" style="cursor:pointer" onClick="showgirlDiv2()" onfocus="blur()" required>
                  <label id="girlyearlabel" for="mydiv7" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="girlyearDiv" class="col-md-4 col-xs-4 yeardrop">
                <div class="card yearbox">

<?php echo selectoption('girlyearselect', 1960, 0); ?>
                  </div>
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
                  <input id="mydiv8" type="text" name="fhour"  class="form-control" style="cursor:pointer" onClick="showgirlDiv3()" onfocus="blur()" required>
                  <label id="girlhourlabel" for="mydiv8" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                </div>
                <div id="girlhourDiv" class="col-md-12 col-xs-6 hourdrop">
                  <div class="card hourbox"> 
<?php echo selectoption('girlhourselect', 0, 23); ?>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-6">
                <div class="md-form">
                  <input id="mydiv9" type="text" class="form-control" name="fminute" style="cursor:pointer" onClick="showgirlDiv4()" onfocus="blur()" required>
                  <label id="girlminutelabel" for="mydiv9" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                </div>
                <div id="girlminuteDiv" class="col-md-12 col-xs-6 minutedrop">
                  <div class="card minutebox"> 
                    <?php echo selectoption('girlminuteselect', 0, 59); ?>
                    </div>
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
        var place2 = autocomplete.getPlace();
      	document.getElementById('flatitude').value = place2.geometry.location.lat();
		document.getElementById('flongitude').value = place2.geometry.location.lng();
		eventListenerForMaps(place2.geometry.location.lat(), place2.geometry.location.lng(), 'ftimezone');
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
        </div>
      </div>
    </div>
    <div class="text-xs-center">
      <button class="btn btn-deep-orange" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Get Prediction </button>
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
        url: "<?php echo site_url('service/kundalimilan'); ?>",
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
  <!--/Form with header-->
  <!--Section: Magazine v.2-->
  <!--/Section: Features v.3-->
  <!--/Section: Magazine v.2-->
</div>
   <div class="bigform-content">
  <div class="horoscope_result" id="collapseResult"></div>
  </div>
<!--Report-->
 <div style="clear:both;"></div><br><br>


  <hr>
<div class="col-md-12">

  <div class="container reportcontent">
        <h2 class="h2-responsive firsthead">Kundali Matching</h2>
                 
<div class="row">
  
<div class="col-lg-12 col-md-12 col-xs-12 mb-r ">

              <!--Card-->
              <div class="card-cascade wider">

                <!--Card image-->
                <div class="view hm-white-slight" align="text-center">
                  

   <?php if($device == 'mobile'){ ?>
          <img src="<?php echo base_url('/assets/astrology/img/Kundali-matching--mobile-2--700px400px.png'); ?>" class="img-fluid" alt="" width="100%">
    <?php }else{ ?>
          <img src="<?php echo base_url('/assets/astrology/img/kundali-matching-screen-1200px400px.png'); ?>" class="img-fluid" alt="" width="100%">
      <?php } ?>


                 <a href="<?-base_url('/match-making-report'); ?>">
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-left">
                  <!--Category & Title-->
                  <div class="col-md-12" style="padding-top: 10px;font-size:14px;">

              <div class="col-md-12" style="padding:  0 0 0; text-align: left; ">
                  <b style="color:#ff3366;">The Matchmaking Beautiful report</b>
                   <p class="card-text">The kundali making for matching is a method which can give info about your Mental and Physical compatibility, Longevity of the marriage , Nature, Health according to Astrology, Childbirth, Separative tendencies and financial standings.</p>
                   <p>The beautiful report he report will cover important Horoscope charts, Manglik status, Ashtakoot Guna milan, Relationship parameters match analysis and personality Analysis.</p>
                 </div>
                <div class="col-md-12" style="text-align: center;">  

                   <div class="col-md-3 col-xs-12" style="padding: 20px;"> 


                    Price <span class="cancel-price"><strong><strike><?=get_currency();?> <?=get_key_data('KUNDALI_MATCHING', $cccode, true);?></strike></strong></span> 
                    <span class="currnt-price" style="color:#0000FF;"><strong><?=get_currency();?> <?=get_key_data('KUNDALI_MATCHING', $cccode, false);?></strong></span> 
                   
                   </div>
                  
                   <div class="col-md-2 col-xs-12" style="padding:0px;"><a id="button1" href="<?=base_url('/questions');?>" class="btn waves-effect waves-light  button-2018 match_mnaking_report">Buy Now</a>
                   </div>          
                    <div class="col-md-2 col-xs-12" style="padding: 20px;">
                    <a id="" href="<?=base_url('/match-making-report');?>" class="waves-effect waves-light" style="color:#000000; text-decoration: underline;">Know More</a>
                  </div>
                  <div class="col-md-2 col-xs-12"><?php echo form_dropdown('select_langiage', unserialize(LANGUAGES) ,'', array('class' => 'form-control  selectpicker', 'id' => 'langauge_select_match')); ?></div>
                  <div class="col-md-6 col-sm-12"></div>
                </div>
                  <div style="clear:both;"></div>

<div class="col-md-12" style="text-align: left;">
                  <p style="color:#00CC99; font-weight: bold;">Beautiful &amp; Consolidated Life Report.</p>
</div>



<div class="col-md-12" style="padding: 10px 0 0 0;  text-align: left;border: 1px solid #ccc;margin-bottom: 15px; margin-top: 20px;">

              <div class="col-md-12" style="padding-top: 10px;  text-align: left;">
                  <b style="color:#ff3366;">Report & Special commentary- Expert astrologer opinion on the Match</b>
                   <p class="card-text">Commentary by expert astrologer in detailed if two people should go for marriage and will suggest remedy if there is any issue.
</p>
                   
                 </div>
                <div class="col-md-12" style="text-align: center; padding-top: 10px;">  

                   <div class="col-md-3 col-xs-12" style="padding: 20px;"> 


                    <span>Price<strong> <strike> <?=get_currency();?><?=get_key_data('KUNDALI_MATCHING_SPECIAL_COMMENTARY', $cccode, true);?>/-</strike></strong></span> 
                    <span class="currnt-price" style="color:#0000FF;"><strong><?=get_currency();?><?=get_key_data('KUNDALI_MATCHING_SPECIAL_COMMENTARY', $cccode, false);?>/-</strong></span> 
                   
                   </div>
                  
                   <div class="col-md-2 col-xs-12" style="padding:0px;"><a id="button1" href="<?=base_url('/questions?report=3&ctype='.$ctype);?>" class="btn waves-effect waves-light  button-2018">Buy Now</a>
                   </div>          
                    <div class="col-md-2 col-xs-12" style="padding: 20px;" >
                    <a id="" href="<?=base_url('/match-making-report');?>" class="waves-effect waves-light" style="color:#000000; text-decoration: underline;" >Know More</a>
                  </div>
                <div class="col-md-2 col-xs-12"> <?php echo form_dropdown('select_langiage', unserialize(LANGUAGES) ,'', array('class' => 'form-control  selectpicker', 'id' => 'langauge_select_ext')); ?></div>    

                   <div class="col-md-3 col-sm-12"></div>
                </div>


                  <div style="clear:both;"></div>
</div>
         
                 
                  <!--Excerpt-->
                      
</div> <div style="clear:both;"></div>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->
          </div>

</div>

   
 <div style="clear:both;"></div>
    </div>
      </div>



<script type="text/javascript">
$('.match_mnaking_report').click(function(e){
window.location.href = '<?php echo base_url('/report?lg=');?>' + $('#langauge_select_match :selected').val()+ '&type=matchmaking_report';
 e.preventDefault();
});

</script>
    
  <!--Report-->
  <div style="clear:both;"></div>
<?=$get_report_section;?>
  
<?php echo $serviceForm;?>

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
        <input name="reference_page" value="manglik-kundali-matching" type="hidden">
 
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
</script>     </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div>



<script type="text/javascript">
$('.buy_now_matchmaking_report').click(function(e){
window.location.href = '<?php echo base_url('/report?lg=');?>' + $('#langauge_select :selected').val()+ '&type=matchmaking_report';
 e.preventDefault();
});

</script>
  <div class="container">
<div class="container">
  <hr>
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
                <div class="snippet-markup text-center" itemscope="" itemtype="http://schema.org/Review"> <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                  <div class="snippet-data"><span itemprop="name">
                    <h4>Pardeep,Delhi</h4>
                    </span></div>
                  </span>
                  <div class="snippet-data"><span itemprop="itemReviewed">
                    <p><i class="fa fa-quote-left"></i> I Wanted An Advice Regarding Marriage Issue. Found Out About Akashvaani.Com On Internet. I Called Them And In Less Than 5 Minutes I Was Talking To Expert Marriage Astrologer . I Got An Advice Based On My Birth Details On Call. It Was More Than Satisfying Experience. It Could Not Have Been Easier And Better Than This</p>
                    </span></div>
                  <!--Review-->
                  <div class="snippet-data"><span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating"> <span class="rating-value" itemprop="ratingValue">4.5</span></span>
                    <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
                  </div>
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
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
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
                <h4>Shikha, Gurgaon</h4>
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
                <h4>Sukriti, Noida</h4>
                <p><i class="fa fa-quote-left"></i> Akashvaani Is Worth Taking Service. I Was Doubtful About The Payment Security, But They Are Trustworthy. I Am Satisfied That I Have Invested At Right Place.</p>
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
                <h4>Lekha Sharma, Gurgaon</h4>
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
                <h4>Atul, Delhi</h4>
                <p><i class="fa fa-quote-left"></i>I Was Very Worried About My Husband's Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me.</p>
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
                <h4>Rajbala, Gurgaon</h4>
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
                <h4>Khushboo, Delhi</h4>
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


<hr>
<section class="section feature-box" style="margin-top:3rem">
    <!--Section heading-->
    <h1 class="section-heading howorks" style="font-size:22px;margin-bottom:2rem">Kundali matching for marriage</h1>
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont">The time when a child is born, the positioning of stars and planets at that time detects the fortune of that child. Sometimes, this positioning creates doshas or problems in the child’s kundli. Though, the effects of these doshas can be eliminated or reduced with the help of poojas and other rituals.
</p>


<p class="myfont">There are sites which provide the service of online kundali matching. Although, it does not guarantee a high level of accuracy. You should use authentic services for  kundli prediction.
</p>
    </div>
   <div class="row features-small">
      <!--First column-->
      <div class="col-md-1"></div>
      <div class="col-md-4 center-on-small-only">  <img src="<?=resizedUrl(base_url('/assets/astrology/img/kundalimilanicon.png'), 400, 350);?>" alt="Kundali Matching" class="z-depth-0"></div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-7 center-on-small" style="margin-top:30px;">
        <!--First row-->
        <div class="row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-10">
            <h2 class="h2-responsive" style="font-size: 22px;font-weight:400">Guna Milan</h2>
            <p class="myfont">
              36 gunas are kept as an assessing magnitude. Out of these, a minimum of 18 are required to match for the couple to lead a happy life. 8 very important out these are varna, vashya, tara, yoni, graham maîtri, gan, bhakoot and nadi.
              </p>
              <h2 class="h2-responsive" style="font-size: 22px;font-weight:400">Analysis of Kundli</h2>
              <p class="myfont">
                If the <b>kundli</b> of two people do not match, then marriage is definitely not advisable. However, if the two people are deeply in love with each other and want to be together in a relationship, then they can take advice of an astrologer and look for some remedies.
              </p>
              <p class="myfont">
              Although these remedies will vary with the different cases, but there are some general remedies which apply to all cases of non kundali matching. These remedies will vary with the kind of dosha that is coming in between.

              </p>
          </div>
        </div>
        <!--/First row-->
        <div style="height:50px"></div>
        <!--Second row-->
      </div>
      <!--/Second column-->
    </div>
    <!--/First row-->
        <!--Section heading-->


              <p class="myfont">
                <b>The elimination of doshas</b>, according to astrology, is extremely important. And if the case is worse and doshas are unable of being removed completely, then marriage is not advisable for the two people.

              </p>
              <p class="myfont">
                <b>In case of a love marriage</b>, kundli reading should be like this- the 7th house should have the 5th house significator as the sublord.  For this, you have look into the fact who is the sublord of the 7th cusp and who are the significators of the 5th house. There can be 4 kinds of significators of each of the houses.

              </p>

    <h1 class="section-heading howorks" style="font-size:22px;margin-bottom:2rem">Janam Kundli Reading(Birth Chart Reading)</h1>
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont"><b>Janam kundali</b> is a basic tool which assists the astrologers in making future predictions about a child. Also known as janam-patri, this is prepared by knowing the exact time, date and place of birth of a child.
</p>
<p class="myfont">It helps to find out what the child might face in life, including both auspicious and inauspicious times.
</p>
<p class="myfont">There are <b>12 houses in janam kundli</b> which have different functions and indicate different meanings. 
</p>
<p class="myfont"><b>The First House</b> is known as the house of self and reflects your inner characteristics such as wisdom, peace, health etc. The second and third house represent wealth and relationships respectively. 
</p>
<p class="myfont"><b>The Fourth house</b> in the janam kundli is an indicator of your happiness and relationship with your mother. The fifth house is known as Putra Bhava and reflects your luck with children.
</p>
<p class="myfont"><b>The Sixth House</b> is the house of enemies and represents your paternal relationships, health status etc. The seventh house is known as the house of your spouse and includes all aspects regarding your personal relationships with your life partner.
</p>
<p class="myfont"><b>The Eighth House</b> in the kundli is the house of death and represents obstacles, diseases, defeats, and the like things. The ninth house is known as the house of fortune and tells all stuff about the person’s fortune throughout his life.
</p>
<p class="myfont"><b>The Tenth and Eleventh house</b> respectively represent the person’s career and income. The twelfth house indicates a wide range of aspects including your law suits, debts, sexual pleasures, enemies, etc. your sleep orders, troubles in eyes, mental imbalances, and even death can be predicted by the help of the twelfth house.
</p>
<p class="myfont">Nowadays, due to advancements in technology, you also get the facility of online janam kundli reading, But consultation with astrologer is advisable.
</p>
<p class="myfont">Kundli reading is considered extremely important to eliminate any problems and make the person life better.
</p>
    </div>

  </section>

</div>

 <div style="clear:both;"></div>





<br>
<hr>
<h1 class="section-heading howorks">Most Asked Questions</h1> <br>
<div class="container qa">
  <div class="row">  <br>
    <div class="col-md-12">
      <div class="card">
        <blockquote class="blockquote bq-primary q1">
          <p class="bq-title">Q.1 What is Guna in Kundali matching? What is meant by Guna Milan?</p><br>
          <p>Ans. Guna is virtue of a person. It involves the inner traits of the person that includes Nature, Behaviour, thought process and psychology of person. Usually, it helps in kundali reading for marriage in which an astrologer compares <a href="#" class="read_more">...continue read</a><span class="more_text"> two different personalities(Man-Woman) at the specific plane is called Guna Milan(Ashtakoot Milan). It is very necessary step for the marriage life for achieving happiness, good health, and wealth in marital life. Good Guna Milan is a bliss for marriage life. <a href="#" class="read_less">...read less</a></span></p>
          <div class="item"> </div>
        </blockquote>
      </div>
      <div class="card">
        <blockquote class="blockquote bq-warning q2">
          <p class="bq-title">Q.2 Is Good AshtakootGuna Milan Score promises a successful marriage?</p><br>
          <p>Ans. No, it does not Guarantee successful Marriage life, Even after achieving good score of Ashtakoot Milan in kundali matching. This is because <a href="#" class="read_more1">...continue read</a><span class="more_text1">marriage life also depends on the planetary position of lord of seventh house and signification of marriage life. Venus in case of male and Jupiter in case of Female.<br>
            <a href="#" class="read_less1">...read less</a></span></p>
        </blockquote>
      </div>
      <div class="card">
        <blockquote class="blockquote bq-success q3">
          <p class="bq-title">Q.3 What is Ghat Vivah(Marriage). What are the ways to perform it?</p>
          <p>Ans. It becomes compulsory when Manglik Dosha is present in one chart that is found after kundali matching for marriage. In second situation, when the seventh house (House of Marriage) is affected <a href="#" class="read_more2">...continue read</a><span class="more_text2">from the Malefic planets and promise of Happy marriage life indicates negativity. In the case of female, GhatVivah can performed with the gold idols of the lord Vishnu or it may be a with Pitcher(Kumbh Vivah) or it may be 7 Pheras around Aak plant. <br>
            In case of Male It will be Kumbh Vivah. <br>
            You should always consult with the experts before taking any decision. <a href="#" class="read_less2">...read less</a></span></p>
        </blockquote>
      </div>
      <div class="card">
        <blockquote class="blockquote bq-warning q4">
          <p class="bq-title">Q.4 Willa couple have kids after marriage (Nadi Dosh)?</p>
          <p>Ans. Naadi Dosh is when the Naadi of the Proposed Husband is similar to proposed wife .This decision of the presence of Naadi  Dosh can be observed or predicted after a detail study of the horoscope based on the birth date , time and location <a href="#" class="read_more3">...continue read</a><span class="more_text3"> or Janam Kundali Milan of the two partners . This detail study of horoscope of couple is called as kundali matching and it indicates the flow of breath or energy in a person . In case this energy level in husband is same as wife the marriage between two partners are ruled out. <a href="#" class="read_less3">...read less</a></span></p>
        </blockquote>
      </div>
      <div class="card">
        <blockquote class="blockquote bq-success q5">
          <p class="bq-title">Q.5 Do you capable of being together peacefully(Bhakut Dosh)?</p>
          <p>Ans. When there is lack in mental compatibility of two persons, they continue to fight with each other. This dosh in astrology is called Bhakut Dosh and it can be found after Junam kundali reading  for marriage.</p>
        </blockquote>
      </div>
    </div>
  </div>
</div>
</div></div></div></div></div>
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
         error: function(resp) {  }
   });

});
               
               </script>
    </div>
  </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" defer></script>
