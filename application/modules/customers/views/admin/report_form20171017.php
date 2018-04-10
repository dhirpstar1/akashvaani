<div class="page-header">
    <h1>Get Report form</h1>
</div>

<?php echo form_open('admin/customers/report_form/'.$question->id); ?>

       <div class="col-md-12">
    <div class="col-md-6">
    <h3>Detail Information</h3>
    <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <?php echo form_input(['name'=>'first_name', 'value'=>assign_value('first_name', $question->mname), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Email</label>
                <?php echo form_input(['name'=>'email', 'value'=>assign_value('email', $question->email), 'class'=>'form-control']); ?>
            </div>
        </div>
        
    </div>
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Phone</label>
                <?php echo form_input(['name'=>'phone', 'value'=>assign_value('phone', $question->phone), 'class'=>'form-control']); ?>
            </div>
        </div> 
    </div>
</div>
    
    <div class="col-md-6">
    <h3>Report Information</h3>

    <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label>Name on Report</label>
                <?php echo form_input(['name'=>'mname', 'value'=>assign_value('mname', $question->mname), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>
    
    
     <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label>Report language</label>              
                <?php echo form_dropdown('language', unserialize(LANGUAGES), $question->language, array('name'=>'language', 'class'=>'form-control')); ?>
            </div>
        </div>
    </div>
    <?php if($question->question !== GET_KUNDALI_REPORT): ?>
     <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label>Gender</label>
                <?php echo form_dropdown('gender', array('Male' => 'Male', 'Female' => 'Female'), $question->gender, array('name'=>'gender', 'class'=>'form-control')); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
     <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label>  <?php if($question->question == GET_KUNDALI_REPORT): echo $question->mname; endif; ?> Birth Place</label>
           
            <?php echo form_input(array('id' => 'mautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'mbirth_place', 'value' =>  $question->mbirth_place, 'required' => 'required')); ?> 
          <input type="hidden" id="mlatitude" name="mlatitude" placeholder="latitude" value="<?=$question->mlatitude;?>">
          <input type="hidden" id="mlongitude" name="mlongitude" placeholder="longitude" value="<?=$question->mlongitude;?>">
          <input type="hidden" id="mtimezone" name="mtimezone" placeholder="timezone" value="<?=$question->mtimezone;?>">
                        
            </div>
        </div>
    </div>
    
    
    
    
    
    
     <div class="row">
           <div class="col-md-12"> Date Of Birth:-  <label><?php if($question->question == GET_KUNDALI_REPORT): echo $question->mname; endif; ?> </label>
            <div class="form-group">
               
                
                <div class="col-md-4">Day:
                <?php echo form_input(['name'=>'mday', 'value'=>assign_value('mday', $question->mday), 'class'=>'form-control']); ?>
                </div> <div class="col-md-4"> Month:
                <?php echo form_input(['name'=>'mmonth', 'value'=>assign_value('mmonth', $question->mmonth), 'class'=>'form-control']); ?>
                 </div> <div class="col-md-4"> Year:
                <?php echo form_input(['name'=>'myear', 'value'=>assign_value('myear', $question->myear), 'class'=>'form-control']); ?>
                </div>
            </div>
        </div>
    </div>
     <div class="row"><br />
           <div class="col-md-12"> <label>Time of Birth:- <?php if($question->question == GET_KUNDALI_REPORT): echo $question->mname; endif; ?> </label>
            <div class="form-group">
                <div class="col-md-4">Hours:
                <?php echo form_input(['name'=>'mhour', 'value'=>assign_value('mhour', $question->mhour), 'class'=>'form-control']); ?>
                </div><div class="col-md-4">Minute:
                <?php echo form_input(['name'=>'mminute', 'value'=>assign_value('mminute', $question->mminute), 'class'=>'form-control']); ?>
                	</div>
            	</div>
        	</div>
    	</div>

    
    <?php if($question->question == GET_KUNDALI_REPORT):?>   
	
	<br /><br />
     <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
                <label>Female Name</label>
                <?php echo form_input(['name'=>'fname', 'value'=>assign_value('fname', $question->fname), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>
	 <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label>  Birth Place :-  <?php if($question->question == GET_KUNDALI_REPORT): echo $question->fname; endif; ?></label>
           
            <?php echo form_input(array('id' => 'fautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'fbirth_place', 'value' =>  $question->fbirth_place, 'required' => 'required')); ?> 
          <input type="hidden" id="flatitude" name="flatitude" placeholder="latitude" value="<?=$question->flatitude;?>">
          <input type="hidden" id="flongitude" name="flongitude" placeholder="longitude" value="<?=$question->flongitude;?>">
          <input type="hidden" id="ftimezone" name="ftimezone" placeholder="timezone" value="<?=$question->ftimezone;?>">
                        
            </div>
        </div>
    </div>
    
    
    
    
    
    
     <div class="row">
           <div class="col-md-12">  <label>Time Of Birth:- <?php if($question->question == GET_KUNDALI_REPORT): echo $question->fname; endif; ?> </label>
            <div class="form-group">
               
                
                <div class="col-md-4">Day:
                <?php echo form_input(['name'=>'fday', 'value'=>assign_value('fday', $question->fday), 'class'=>'form-control']); ?>
                </div> <div class="col-md-4"> Month:
                <?php echo form_input(['name'=>'fmonth', 'value'=>assign_value('fmonth', $question->fmonth), 'class'=>'form-control']); ?>
                 </div> <div class="col-md-4"> Year:
                <?php echo form_input(['name'=>'fyear', 'value'=>assign_value('fyear', $question->fyear), 'class'=>'form-control']); ?>
                </div>
            </div>
        </div>
    </div>
     <div class="row"><br />
           <div class="col-md-12"> <label> <?php if($question->question == GET_KUNDALI_REPORT): echo $question->fname; endif; ?> Time of Birth</label>
            <div class="form-group">
                <div class="col-md-4">Hours:
                <?php echo form_input(['name'=>'fhour', 'value'=>assign_value('fhour', $question->fhour), 'class'=>'form-control']); ?>
                </div><div class="col-md-4">Minute:
                <?php echo form_input(['name'=>'fminute', 'value'=>assign_value('fminute', $question->fminute), 'class'=>'form-control']); ?>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
	
	
	<?php endif;?>
    
   	</div> 
</div>
<div class="col-md-12">
    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
    <a class="btn btn-primary" href="<?php echo site_url('admin/customers/questionsgetreports/'); ?>" title="Back to List">Back to List</a> 
    <?php if($question->question == 'Get Story of My Life extended report (70 pages).'){ ?>
        <a class="btn btn-primary"  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/pro_horoscope'); ?>" title="Download Basic Report">        
        Download Report</a>
  <?php }else if($question->question == 'Get Kundali Matching Report.'){ ?>
        <a class="btn btn-primary"  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/match_making'); ?>" title="Download Match Making Report">
        Download Report</a>
  <?php }else{ ?>      
        <a class="btn btn-primary"  href="<?php echo site_url('admin/customers/download_report/'.$question->id); ?>" title="Download Basic Report">        
        Download Report</a>
  <?php } ?>  
   
   <?php if($question->question == 'Get Story of My Life extended report (70 pages).'){ ?>
        <a class="btn btn-primary" href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/pro_horoscope'); ?>" title="Send Report">Send Report</a>
  <?php }else if($question->question == 'Get Kundali Matching Report.'){ ?>
        <a class="btn btn-primary"  href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/match_making'); ?>" title="Send Match Making Report">
        Send Report</a>
  <?php }else{ ?>   <a class="btn btn-primary" href="<?php echo site_url('admin/customers/send_report/'.$question->id); ?>" title="Send Report">Send Report</a>   
        
  <?php } ?>     
</div>
</form>
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
