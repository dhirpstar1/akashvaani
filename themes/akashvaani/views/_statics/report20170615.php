<div style="height:140px;"></div>
<?php /*?><?php */?>
<link rel="stylesheet" href="<?php echo base_url('/assets/astrology/'); ?>/css/form.css" media="all"  type="text/css"/>
<!-- main -->
<?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'askquestion')); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'consultation_type', 'value' => 'get_report', 'id' => 'consultation_type')); ?> 
<?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'online-marriage-prediction-get-report')); ?>
<?php echo form_input(array('type' => 'hidden', 'name' => 'language', 'value' => $language)); ?>
<!-- Tab panels -->
<div class="tab-content">
  <!--Panel 1-->
  <div class="tab-pane fade" id="pane21" role="tabpanel" style="padding:1rem">
    <div class="container">
      <div class="row">
        <div class="container reportcontent">
          <div class="row">
            <div class="col-md-4">
              <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <p>Nam libero tempore, cum soluta nobis est eligendi,Nam libero tempore</p>
                    <div class="view hm-black-light"> <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" alt="First slide"> </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <p>Nam libero tempore, cum soluta nobis est sanmhfba.sflibero tempore</p>
                    <div class="view hm-black-strong"> <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" alt="Second slide"> </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <p>Nam libero tempore, cum soluta nobis est eligendi,Nam libero tempore</p>
                    <div class="view hm-black-slight"> <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(24).jpg" alt="Third slide"> </div>
                  </div>
                </div>
                <div style="text-align: center;"> <a id="button3" class="btn waves-effect waves-light">View Sample Report</a> </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-md-1"> </div>
            <div class="col-md-7" style="padding-top: 60px;">
              <!--Excerpt-->
              <h2 class="h2-responsive center-on-small-only product-name"><strong>Get Report</strong></h2>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
              <p>by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
              <a id="button1"  class="btn waves-effect waves-light type_consult">Buy Now</a> <a id="button2" class="btn waves-effect waves-light">Know More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.Panel 1-->
  <!--Panel 2-->
  <div class="tab-pane fade in active" id="pane22" role="tabpanel">
    <div class="card-block">
    <?php $name = ($current_customer->firstname)? $current_customer->firstname.' '.$current_customer->lastname : '';?>
    
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
              <input type="text" id="name" class="form-control required" name="first_name" value="<?=$name;?>" required="">
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
          </div>
        </div>
        <!--/Form with header-->
      </div>
    </div>
    <div class="modal-footer">
      <button id="prev11" type="button" class="btn prv waves-effect waves-light">Prev</button>
      <button id="next2" type="button" class="btn nxt waves-effect waves-light">Next</button>
    </div>
  </div>
  <!--/.Panel 2-->
  <!--Panel 3-->
  <div class="tab-pane fade" id="pane23" role="tabpanel">
    <!--Naked Form-->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-pills pills-default tab_form" role="tablist">
      <li class="nav-item"> <a class="nav-link active" id="individual" data-toggle="tab" href="#panel31" role="tab"><i class="fa fa-user fa-2x"></i><br>
        Individual</a> </li>
      <li class="nav-item"> <a class="nav-link" id="couple" data-toggle="tab" href="#panel32" role="tab"><i class="fa fa-heart fa-2x"></i><br>
        Couple</a> </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content">
      <!--Panel 1-->
      <div class="tab-pane fade active in" id="panel31" role="tabpanel">
        <?=$invidual_form?>
      </div>
      <!--/.Panel 1-->
      <!--Panel 2-->
      <div class="tab-pane fade" id="panel32" role="tabpanel">
        <div class="col-md-12" align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>
        <?php //$couple;?>
      </div>
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
	$('#pane22').addClass('active in');
    $('#pane21').removeClass('active in');
	$('#stepper2').addClass('completed');
	});
$('#prev11').on('click', function(){
	window.location.href='<?=base_url('/astrology/online-marriage-prediction');?>';
});
	
$('#prev12').on('click', function(){
  window.scrollTo(0, 0);
   $('#pane21').removeClass('active in');
    $('#pane22').addClass('active in');
   
	$('#pane23').removeClass('active in');
       $('#stepper3').removeClass('completed');
    $('#stepper3').addClass('active');
});
	$('#next2').on('click', function(e){
  	window.scrollTo(0, 0);
 
e.preventDefault()
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
             
$('#couple').click(function(){
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
      <a href="javascript:void();" type="button" class="btn btn-primary paynowbutton" id="paynowbutton">Pay Now</a> </div>
  </div>
</div>
<?php echo form_close(); ?>
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/bootbox.min.js"></script>
