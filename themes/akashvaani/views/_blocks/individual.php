<br>
<div class="container mrgform">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Fill your birth details</h3>
      </div>
      <!--Body-->
      <div class="row">
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
          <div class="md-form">
            <input type="text" name="name" value="<?=($current_customer->firstname)? $current_customer->firstname.' '.$current_customer->lastname : '';?>" id="usr" class="form-control" required="required">
            <label for="usr">Your name</label>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
          <!--Blue select-->
          <div class="row">
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv" type="text" class="form-control" value="<?=($current_customer->day != 0) ? $current_customer->day :'';?>" name="day" style="cursor:pointer" onClick="showDiv100()" onFocus="blur()" required>
                <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="dateDiv" class="col-md-4 col-xs-4 datedrop">
              <div class="card datebox"><?php echo selectoption('dateselect', 1, 31); ?> </div>
            </div>
            <!--/Blue select-->
            <!--Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv1" type="text" class="form-control" value="<?=($current_customer->month) ? $current_customer->month : '';?>" name="month" style="cursor:pointer" onClick="showDiv1()" onFocus="blur()" required>
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
                <input id="mydiv2" type="text" class="form-control" value="<?=($current_customer->year) ? $current_customer->year :'';?>" name="year" style="cursor:pointer" onClick="showDiv2()" onFocus="blur()" required="">
                <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspan" aria-hidden="true"></i> </label>
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
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
          <div class="row">
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv3" type="text" class="form-control" value="<?=($current_customer->hour) ? $current_customer->hour :'';?>" name="hour" style="cursor:pointer" onClick="showDiv3()" onFocus="blur()" required="">
                <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspan" aria-hidden="true"></i> </label>
              </div>
              <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                <div class="card hourbox"> 
                  <?php echo selectoption('hourselect', 0, 23); ?>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv4" type="text" class="form-control" value="<?=($current_customer->minute) ? $current_customer->minute :'';?>" name="minute" style="cursor:pointer" onClick="showDiv4()" onFocus="blur()" required="">
                <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
              </div>
              <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop">
                <div class="card minutebox"> 
                    <?php echo selectoption('minuteselect', 0, 59); ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>
          <div class="md-form"> <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => $current_customer->birth_place, 'required' => 'required')); ?> </div>
          <input type="hidden" id="latitude" name="latitude" placeholder="latitude" value="<?=$current_customer->birth_place_latitude;?>">
          <input type="hidden" id="longitude" name="longitude" placeholder="longitude" value="<?=$current_customer->birth_place_longitude;?>">
          <input type="hidden" id="timezone" name="timezone" placeholder="timezone" value="<?=$current_customer->birth_timezone;?>">
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
    {  $.ajax({url:"https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+(Math.round((new Date().getTime())/1000)).toString()+"&sensor=false",
}).done(function(response){
   if(response.timeZoneId != null){
	document.getElementById(timezone).value = (response.rawOffset)/3600;
   }
});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" async defer></script>
           
      
        
        
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('/api/js/typeahead.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/geonames.js'); ?>"></script>