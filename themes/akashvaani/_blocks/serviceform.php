<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Online Consultation </h4>
            </div>
            <!--Body-->
            <div class="modal-body">
              
<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-3 indigo" role="tablist" style="display:none">
    <li class="nav-item">
        <a id="step1" class="nav-link active" data-toggle="tab" href="#pane21" role="tab"><i class="fa fa-user"></i> Profile</a>
    </li>
    <li class="nav-item">
        <a id="step2" class="nav-link" data-toggle="tab" href="#pane22" role="tab"><i class="fa fa-heart"></i> Follow</a>
    </li>
    <li class="nav-item">
        <a id="step3" class="nav-link" data-toggle="tab" href="#pane23" role="tab"><i class="fa fa-envelope"></i> Mail</a>
    </li>
     <li class="nav-item">
        <a id="step4" class="nav-link" data-toggle="tab" href="#pane24" role="tab"><i class="fa fa-envelope"></i> Mail</a>
    </li>
     <li class="nav-item">
        <a id="step5" class="nav-link" data-toggle="tab" href="#pane25" role="tab"><i class="fa fa-envelope"></i> Mail</a>
    </li>
     <li class="nav-item">
        <a id="step6" class="nav-link" data-toggle="tab" href="#pane26" role="tab"><i class="fa fa-envelope"></i> Mail</a>
    </li>
</ul>

<!-- Tab panels -->
	<?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1000')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrology Page Tabs')); ?> 
<div class="tab-content" style="padding:1rem">
 	
        
    <!--Panel 1-->
    <div class="tab-pane fade in active" id="pane21" role="tabpanel">
  <p><strong>Regarding What you want to consult?</strong></p>

        <div class="row">
          <div class="col-md-6">
        <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Marriage">
    <label for="checkbox1">
    Marriage</label>
</fieldset>
 <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Career">
    <label for="checkbox1">
    Career</label>
</fieldset>
 <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Regarding Life">
    <label for="checkbox1">
    Regarding Life</label>
</fieldset>
</div>
    <div class="col-md-6">
 <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Health">
    <label for="checkbox1">
    Health</label>
</fieldset>
 <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Business">
    <label for="checkbox1">
    Business</label>
</fieldset>
 <fieldset class="form-group" style="margin-bottom:0px">
    <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Astrology">
    <label for="checkbox1">
    Astrology</label>
</fieldset>
</div>
        </div>

        
<div class="modal-footer">
                <button id="next1" type="button" class="btn btn-primary">Next</button>
            </div>
    </div>
    <!--/.Panel 1-->

    <!--/.Panel 2-->

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
      
      <div class="form-group"> <!-- Submit button -->
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
</fieldset><fieldset class="form-group">
    <input  type="radio" id="radio1" name="timeslote" value="10AM - 12AM">
    <label for="radio1">10AM - 12AM</label>
</fieldset><fieldset class="form-group">
    <input  type="radio" id="radio1" name="timeslote" value="12PM - 2PM">
    <label for="radio1">12PM - 2PM</label>
</fieldset>
      </div>
      <div class="col-md-6">
        <fieldset class="form-group">
    <input  type="radio" id="radio1" name="timeslote" value="2PM - 4PM">
    <label for="radio1">2PM - 4PM</label>
</fieldset><fieldset class="form-group">
    <input  type="radio" id="radio1" name="timeslote" value="4PM - 6PM">
    <label for="radio1">4PM - 6PM</label>
</fieldset><fieldset class="form-group">
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

        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-user prefix"></i>
          <input type="text" id="form1" class="form-control" name="first_name" required>
          <label for="form1">Your Name</label>
        </div>

      </div>
      <div class="col-md-12">

        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-phone prefix"></i>
          <input type="text" id="form2" class="form-control" name="phone" required>
          <label for="form2">Phone No.</label>
        </div>

      </div>
       <div class="col-md-12">

        <div class="md-form">
    <i class="fa fa-envelope prefix"></i>
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
    $('form#sendenquiry1000').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#enquiry_result2').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('services/booking'); ?>",
        data: form.serialize(),
        success: function(data){ 
		//alert(data); //
		$('#next5').trigger('click');
			window.location.replace(data);	
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