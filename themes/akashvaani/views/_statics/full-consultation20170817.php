<link rel="stylesheet" href="<?php echo base_url('/assets/astrology/'); ?>/css/form.css" media="all"  type="text/css"/>
<div class="container qa1">
  <div class="row cntn">
    <div class="col-md-9">
      <!--Section: Blog v.1-->
      <section class="section extra-margins manglikform">
        <!--Section heading-->
        <h1 class="section-heading">questions</h1>
      </section>
    </div>
  </div>
</div>
<!-- main -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul id="qsnstepper" class="stepper stepper-horizontal">
        <li id="stepper1" class="completed"> <a> <span class="circle">1</span> <span class="label">Select option</span> </a> </li>
        <li id="stepper2" class="active"> <a> <span class="circle">2</span> <span class="label">Communications Details</span> </a> </li>
        <li id="stepper3" class="active"> <a> <span class="circle">3</span> <span class="label">Give your Birth Details</span> </a> </li>
        <li id="stepper4" class="active"> <a> <span class="circle">4</span> <span class="label">Payment</span> </a> </li>
      </ul>
      <hr>
    </div>
  </div>
 
</div>
<?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'askquestion')); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?>
<?php echo form_input(array('type' => 'hidden', 'name' => 'consultation_type', 'value' => 'full_consult', 'id' => 'consultation_type')); ?>
<?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'full-consultation')); ?>
<!-- Tab panels -->
<div class="tab-content">
  <!--Panel 1-->
  <div class="tab-pane fade" id="pane21" role="tabpanel" style="padding:1rem">
   <div class="container">
     <div class="row">

     <div class="col-md-2 mb-r"></div>

        <!--First column-->
        <div class="col-md-4 col-xs-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

            

                <!--Card content-->
                <div class="card-block text-center row">
                <div class="col-md-5 col-xs-5">
                    <img src="<?php echo base_url('/assets/astrology/'); ?>/img/consultation-icon.png" class="img-fluid" alt="">
                </div>
                    <!--Category & Title-->
                    <div class="col-md-7 col-xs-7">
                    <h4 class="card-title" style="font-size:1.2rem;margin-bottom:5px;"><strong>Get Full Consultation</strong></h4>

                    <!--Description-->
                      <p style="margin:0px;font-size:13px">Talk to our Top Astrologer. Detailed Analysis of Chart @ Rs 1100.</p>
                   
                    </div>

              <!-- Modal -->
<div class="modal fade" id="fullconsultation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background:#fff">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity:1">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                 <p>Talk to our Top Astrologer. Detailed Analysis of Chart @ Rs 1100.</p>
            </div>
          
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->
<div style="text-align:center">
<a data-toggle="modal" data-target="#fullconsultation" style="font-size:30px;color:#ff3366; display:none;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
</div>
            </div>
            <!--/.Card-->
                  <!--Card footer-->
                    <div class="card-footer">
                   <button id="full_consult" type="button" class="btn nxt type_consult">Go<i class="fa fa-angle-right" aria-hidden="true" style="margin-left:10px"></i></button>
                    </div>
                </div>
                <!--/.Card content-->
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 col-xs-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card content-->
                <div class="card-block text-center row">
                <div class="col-md-5 col-xs-5">
                     <img src="<?php echo base_url('/assets/astrology/'); ?>/img/match making icon.png" class="img-fluid" alt="">
                </div>
                    <!--Category & Title-->
                    <div class="col-md-7 col-xs-7">

                    <h4 class="card-title" style="font-size:1.2rem;margin-bottom:5px"><strong>Match Making</strong></h4>

                    <!--Description-->
                    <p style="margin:0px;font-size:13px">Talk to our Top Astrologer. Detailed Analysis of Charts @ Rs 600</p>
                    </div>
                    <!--Card footer-->
                  <div style="text-align:center">
<a data-toggle="modal" data-target="#fullconsultation" style="font-size:30px;color:#ff3366; display:none;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
</div>
                </div>
                <!--/.Card content-->
  <div class="card-footer">
                     
      <button id="matchmake" type="button" class="btn nxt type_consult">Go<i class="fa fa-angle-right " aria-hidden="true" style="margin-left:10px"></i></button>
                    </div>
            </div>
            <!--/.Card-->

<!-- Modal -->
<div class="modal fade" id="matchmaking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background:#fff">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity:1">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>Talk to our Top Astrologer. Detailed Analysis of Charts @ Rs 600</p>
            </div>
          
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->

        </div>
        <!--/Second column-->
    </div>
   </div>
  </div>

 
  <!--/.Panel 1-->
  <!--Panel 2-->
 <div class="tab-pane fade in active" id="pane22" role="tabpanel">
    <div class="card-block">
      <!--Header-->
      <div style="height:50px"></div>
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <!--Form with header-->
        <div class="card">
          <div class="card-block">
            <!--Header-->
            <div class="form-header blue-gradient">
              <h3>Enter Your Details</h3>
            </div>
            <!--Body-->
            <div class="md-form"> <i class="fa fa-user prefix"></i>
              <input type="text" id="name" class="form-control required" name="first_name" value="<?=($current_customer->firstname) ? $current_customer->firstname.' '.$current_customer->lastname : '';?>" required="">
              <label for="name" class="">Your name</label>
            </div>
            <div class="md-form"> <i class="fa fa-envelope prefix"></i>
              <input type="email" id="email" class="form-control required" name="email" value="<?=$current_customer->email;?>" required="">
              <label for="email" class="">Your email</label>
            </div>
            <div class="md-form"> <i class="fa fa-phone prefix"></i>
              <input type="text" id="form2" class="form-control required" name="phone" value="<?=$current_customer->phone;?>" required="">
              <label for="form2">Phone No.</label>
            </div>
                   
            
            
            <div class="md-form"> <i class="fa fa-intersex prefix pull-left"></i>
            <label for="form2">Gender</label>
            <div style="clear:both;"></div>
             <div class="col-md-12" style="padding-top:10px;">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-3">
                 <input type="radio" id="male" name="gender" value="male" checked="checked" <?php if($current_customer->gender == 'male'){ echo 'checked';}?>> Male
                </div>
              <div class="col-md-3">
              <input type="radio" id="female" name="gender" value="female" <?php if($current_customer->gender == 'male'){ echo 'checked';}?>> Female
              </div>
              <div class="col-md-3">&nbsp;</div>
              </div>
            
            </div>
 <div style="clear:both;"></div>
<hr style="margin-left:45px;" />
 <div class="md-form" style="padding-top:10px;"> <i class="fa fa-language prefix pull-left"></i>
           <label for="form2">Language</label>
            <div style="clear:both;"></div>
             <div class="col-md-12" style="padding-top:10px;">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-3">
                 <input type="radio" id="male" name="language" value="en" checked="checked"> English
                </div>
              <div class="col-md-3">
              <input type="radio" id="female" name="language" value="hi"> Hindi
              </div>
             <div class="col-md-6">&nbsp;</div>
              </div>
            
            </div>



          </div>
        </div>
        <!--/Form with header-->
      </div>
    </div>
    <div class="modal-footer">
      <!--<button id="prev11" type="button" class="btn prv waves-effect waves-light">Prev</button>-->
      <button id="next20" type="button" class="btn nxt waves-effect waves-light">Next</button>
    </div>
  </div>
  <!--/.Panel 2-->
  <!--Panel 3-->
   <div class="tab-pane fade" id="pane23" role="tabpanel">
    <!--Naked Form-->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-pills pills-default tab_form" role="tablist">
      <li class="nav-item"> <a class="nav-link " id="individual" data-toggle="tab" href="#panel31" role="tab"><i class="fa fa-user fa-2x"></i><br>
        Individual</a> </li>
      <li class="nav-item"> <a class="nav-link" id="couple" data-toggle="tab" href="#panel32" role="tab"><i class="fa fa-heart fa-2x"></i><br>
        Couple</a> </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content">
      <!--Panel 1-->
      <div class="tab-pane fade" id="panel31" role="tabpanel"><?=$invidual_form?></div>
      <!--/.Panel 1-->
      <!--Panel 2-->
      <div class="tab-pane fade" id="panel32" role="tabpanel"><div class="col-md-12" align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div><?php //$couple;?> </div>
      <!--/.Panel 2-->
    </div>

    <!--Naked Form-->
    <div class="modal-footer">
      <div id="loadingdiv"></div>
      <button id="prev12" type="button" class="btn prv">Prev</button>
      <button id="next33" type="submit" class="btn nxt">Next</button>
    </div>
    <script type="text/javascript">
	$('.type_consult').click(function(){
	$('#consultation_type').val($(this).attr('id'));
	$('#pane22').addClass('active in');
    $('#pane21').removeClass('active in');
	$('#stepper2').addClass('completed');
	});
$('#prev11').on('click', function(){
	location.reload();
});
	
$('#prev12').on('click', function(){
  window.scrollTo(0, 0);
   $('#pane21').removeClass('active in');
    $('#pane22').addClass('active in');
   
	$('#pane23').removeClass('active in');
       $('#stepper3').removeClass('completed');
    $('#stepper3').addClass('active');
});
	$('#next20').on('click', function(){
	
	window.scrollTo(0, 0);
	var validate = true;


if($('#name').val() == ''){
  bootbox.alert('Please enter your name.'); 
  }
else if($('#email').val() == '' || $('#email').val() == ' ' || !isValidEmailAddress( $('#email').val())){
  bootbox.alert('Please enter valid email.');                                      
  }else if($('#form2').val() == ''){
  bootbox.alert('Please enter your phone number.');
  }
else  
{            
 	$('#pane23').addClass('active in');
 	$('#pane22').removeClass('active in');
	
  if($('#consultation_type').val() == 'matchmake'){
  $('#panel31').removeClass('in show active');
  $('#panel32').addClass('in show active');
  $('#individual').removeClass('active');
  $('#couple').addClass('active');
   $('#couple').click(); 
  }else{
  
 	
  
  
  $('#panel32').removeClass('in show active');
  $('#panel31').addClass('in show active');
   $('#couple').removeClass('active');
  $('#individual').addClass('active');
  // $('#individual').click(); 
  } 
}  
	});
	
$("#skip").click(function(){
$('form#askquestion').submit();
});

   $('form#askquestion').submit(function(e) {
    var form = $(this);
    e.preventDefault(); 
  	$('#loadingdiv').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking_full_consultation'); ?>",
        data: form.serialize(),
        success: function(data){ //  
    //alert(data);
      $('#payment_summery').html(data);
      $('#loadingdiv').html('');
      window.scrollTo(0, 0);
      $('#pane24').addClass('active in');
      $('#pane23').removeClass('active in');
      $('#step3').removeClass('active');
      $('#step4').addClass('active');
      $('#stepper4').removeClass('active');
      $('#stepper4').addClass('completed');
       },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
         
     
$('.nav-link').click(function(){
if($(this).attr('id') == 'individual'){
$('#panel31').load('<?php echo base_url('service/loadview/'); ?>/' + $(this).attr('id'));
$('#panel32').html('<div class="col-md-12" align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');
}else{
$('#panel32').load('<?php echo base_url('service/loadview/'); ?>/' + $(this).attr('id'));
$('#panel31').html('<div class="col-md-12" align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');
}
});      
     
      
</script>
  </div>
  <!--/.Panel 3-->
  <!--Panel 4-->
  <div class="tab-pane fade" id="pane24" role="tabpanel">
    <div id="payment_summery"> </div>
    <div class="modal-footer">
      <!--<button id="prev3" type="button" class="btn prv">Prev</button>-->
      <a href="javascript:void();" type="button" class="btn btn-primary paynowbutton" id="paynowbutton">Pay Now</a> 
      </div>
  </div>
</div>
<?php echo form_close(); ?>
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/bootbox.min.js"></script>
