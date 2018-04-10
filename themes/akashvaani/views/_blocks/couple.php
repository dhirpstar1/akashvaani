 <br>
<div class="container kundaliform">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Fill your birth details</h3>
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
                <input type="text" id="boynamekundali" name="mname" class="form-control" required="">
                <label for="boynamekundali">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydivkundali" type="text" class="form-control" name="mday" style="cursor:pointer" onClick="showDivkundali()" onFocus="blur()" required="">
                    <label id="datelabelkundali" for="mydivkundali" style="cursor:pointer">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="dateDivkundali" class="col-md-4 col-xs-4 datedrop">
                  <div class="card datebox"> 
                      <?php echo selectoption('dateselectkundali', 1, 31); ?>
                   </div>
                </div>
                <!--/Blue select-->
                <!--Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv1kundali" type="text" class="form-control" name="mmonth" style="cursor:pointer" onClick="showDiv1kundali()" onFocus="blur()" required="">
                    <label id="monthlabelkundali" for="mydiv1kundali" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="monthDivkundali" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> 
                  <?php echo selectoption('monthselectkundali'); ?>
                    </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv2kundali" type="text" class="form-control" name="myear" style="cursor:pointer" onClick="showDiv2kundali()" onFocus="blur()" required="">
                    <label id="yearlabelkundali" for="mydiv2kundali" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="yearDivkundali" class="col-md-4 col-xs-4 yeardrop">
                  <div class="card yearbox"> 
                        <?php echo selectoption('yearselectkundali', 1960, 0); ?>
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
                    <input id="mydiv3kundali" type="text" class="form-control" name="mhour" style="cursor:pointer" onClick="showDiv3kundali()" onFocus="blur()" required="">
                    <label id="hourlabelkundali" for="mydiv3kundali" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="hourDivkundali" class="col-md-12 col-xs-6 hourdrop">
                    <div class="card hourbox"> 
                        <?php echo selectoption('hourselectkundali', 0, 23); ?>
                       </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv4kundali" type="text" class="form-control" name="mminute" style="cursor:pointer" onClick="showDiv4kundali()" onFocus="blur()" required="">
                    <label id="minutelabelkundali" for="mydiv4kundali" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="minuteDivkundali" class="col-md-12 minutedrop">
                    <div class="card minutebox"> 
                        <?php echo selectoption('minuteselectkundali', 0, 59); ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
              <div class="md-form"> <?php echo form_input(array('id' => 'mautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'mplace', 'value' => '', 'required' => 'required')); ?>
                <input type="hidden" id="mlatitude" name="mlatitude" placeholder="latitude" readonly="">
                <input type="hidden" id="mlongitude" name="mlongitude" placeholder="longitude" readonly="">
                <input type="hidden" id="mtimezone" name="mtimezone" placeholder="timezone" readonly="">
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
                <input type="text" id="girlname" name="fname" class="form-control" required="">
                <label for="girlname">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv5" type="text" class="form-control" name="fday" style="cursor:pointer" onClick="showgirlDiv()" onFocus="blur()" required="">
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
                    <input id="mydiv6" type="text" class="form-control" name="fmonth" style="cursor:pointer" onClick="showgirlDiv1()" onFocus="blur()" required="">
                    <label id="girlmonthlabel" for="mydiv6" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="girlmonthDiv" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> <?php echo selectoption('girlmonthselect'); ?> 
                </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv7" type="text" class="form-control" name="fyear" style="cursor:pointer" onClick="showgirlDiv2()" onFocus="blur()" required="">
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
                    <input id="mydiv8" type="text" name="fhour" class="form-control resretelement" style="cursor:pointer" onClick="showgirlDiv3()" onFocus="blur()" required="">
                    <label id="girlhourlabel" for="mydiv8" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="girlhourDiv" class="col-md-12 col-xs-6 hourdrop">
                    <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">24</a> </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv9" type="text" class="form-control resretelement" name="fminute" style="cursor:pointer" onClick="showgirlDiv4()" onFocus="blur()" required="">
                    <label id="girlminutelabel" for="mydiv9" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                  </div>
                  <div id="girlminuteDiv" class="col-md-12 col-xs-6 minutedrop">
                    <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">60</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
              <div class="md-form"> <?php echo form_input(array('id' => 'fautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'fplace', 'value' => '', 'required' => 'required')); ?>
                <input type="hidden" id="flatitude" name="flatitude" placeholder="latitude" readonly="">
                <input type="hidden" id="flongitude" name="flongitude" placeholder="longitude" readonly="">
                <input type="hidden" id="ftimezone" name="ftimezone" placeholder="timezone" readonly="">
              </div>
            </div>
          </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" async defer></script>