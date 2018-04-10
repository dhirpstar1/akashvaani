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
        <li id="stepper1" class="completed"> <a> <span class="circle">1</span> <span class="label">Select questions</span> </a> </li>
        <li id="stepper2" class="active"> <a> <span class="circle">2</span> <span class="label">Communications Details</span> </a> </li>
        <li id="stepper3" class="active"> <a> <span class="circle">3</span> <span class="label">Give your Birth Details</span> </a> </li>
        <li id="stepper4" class="active"> <a> <span class="circle">4</span> <span class="label">Payment</span> </a> </li>
      </ul>
      <hr>
    </div>
  </div>
    <div class="row">
    <div class="col-md-12" style="text-align:center;margin-bottom:3%">
        <!--             <p>Get Full Kundali Analysis from our Top Astrolgers</p>

 <button id="full_consult" type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light get_started" style="background:transparent!important;color:black!important;border:1px solid">Get Full Consultation<i class="fa fa-angle-right" aria-hidden="true" style="margin-left:10px"></i><span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>-->
</div>
  </div>
</div>
<?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'askquestion')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Question Page')); ?>
<!-- Tab panels -->
<div class="tab-content">
  <!--Panel 1-->
                    <p style="font-size:20px;text-align:center">Ask Questions</p>

  <div class="tab-pane fade in active" id="pane21" role="tabpanel" style="padding:1rem">
    <div class="row">
      <div class="col-md-6">
        <div class="card-header white-text" style="background-color:#ff3366">
          <h3>Select Questions</h3>
        </div>
           <div class="panel-group">
        <!-- category 1 -->
    <div class="panel panel-default">
      <div class="panel-heading cat-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <h4 class="panel-title col-md-11 col-xs-11">
         Marriage & Relationship
        </h4>
        <i class="fa fa-angle-down down" aria-hidden="true"></i>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
 <ul class="list-group qsnlist">
          <?php foreach($questions as $key => $question): if($question->question_category_id == 1): ?>
          <li class="list-group-item justify-content-between q<?php echo ($key+1); ?>"> <span id="q<?php echo ($key+1); ?>" class="float-xs-left col-md-10">Q<?php echo ($key+1); ?>.
            <question><?php echo $question->question; ?></question>
            </span> <span class="tag red float-xs-right q<?php echo ($key+1); ?>"><a class="q<?php echo ($key+1); ?>" onClick="addQsn(this)" style="color:#fff;background-color:#ff3366">ADD(+) </a></span>                </li>
          <?php endif; endforeach; ?>
        </ul>
        </div>
      </div>
    </div>
     <!-- category 1 -->
    <div class="panel panel-default">
      <div class="panel-heading cat-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <h4 class="panel-title col-md-11 col-xs-11">
         Career
        </h4>
        <i class="fa fa-angle-down down" aria-hidden="true"></i>

      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
 <ul class="list-group qsnlist">
          <?php foreach($questions as $key => $question): if($question->question_category_id == 2):?>
          <li class="list-group-item justify-content-between q<?php echo ($key+1); ?>"> <span id="q<?php echo ($key+1); ?>" class="float-xs-left col-md-10">Q<?php echo ($key+1); ?>.
            <question><?php echo $question->question; ?></question>
            </span> <span class="tag red float-xs-right q<?php echo ($key+1); ?>"><a class="q<?php echo ($key+1); ?>" onClick="addQsn(this)" style="color:#fff;background-color:#ff3366">ADD(+) </a></span>                 </li>
          <?php endif; endforeach; ?>
        </ul>
        </div>
      </div>
    </div>
    <!-- category 2 -->
      <div class="panel panel-default">
      <div class="panel-heading cat-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <h4 class="panel-title col-md-11 col-xs-11">
         Health
        </h4>
        <i class="fa fa-angle-down down" aria-hidden="true"></i>

      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
 <ul class="list-group qsnlist">
          <?php foreach($questions as $key => $question): if($question->question_category_id == 3):?>
          <li class="list-group-item justify-content-between q<?php echo ($key+1); ?>"> 
          <span id="q<?php echo ($key+1); ?>" class="float-xs-left col-md-10">Q<?php echo ($key+1); ?>.
            <question><?php echo $question->question; ?></question>
            </span> 
            <span class="tag float-xs-right q<?php echo ($key+1); ?>" style="background:#ff3366">
            <a class="q<?php echo ($key+1); ?>" onClick="addQsn(this)" style="color:#fff;background-color:#ff3366">ADD(+) </a>
            </span>                
            </li>
          <?php endif; endforeach; ?>
        </ul>
        </div>
      </div>
    </div>
  </div> 
       
        <input type="hidden" name="questions" id="questions" value='' />
        <div style="height:40px"></div>
        <div class="col-md-12" style="text-align:center">
        <div class="md-form"> <i class="fa fa-pencil prefix"></i>
            <textarea type="text" id="own" class="md-textarea"></textarea>
            <label for="own">Enter Your Question</label>
          </div>

          <button type="button" class="btn btn-default btn-rounded" onClick="addOwn()">Add Your Own</button>
          </div>

<script type="text/javascript">
var alert = true;

$( "#own" ).one("focusin", function() {
   $('#own').attr('data-toggle','modal');
   $('#own').attr('data-target','#alertModal');
    $(document).off('focusin');
});
</script>
<!-- Modal --> 
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
              <p style="font-size: 22px;"><b>Right way to ask One Question.</b></p>
              <p>Q1.When will I get married?  <span style="font-size:30px;color:green;float:right">&#10004;</span></p>
              <p style="font-size: 22px;"><b>Not a right way.</b></p>
              <p><b>Q1.Tell Me about my marriage delay?</b>Should i go for bussiness or job? <span style="font-size:30px;color:red;float:right">&#x2716;</span></p>
              <p>Only the first part will be answered. You can add another question for asking different question.</p>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal" style="border-radius:30px;background:#ff3366">Got it!</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- /.Live preview-->

      </div>
      <div class="col-md-6 qsncart">
        <div class="card-header white-text" style="background-color:#ff3366">
          <h3>Selected Question(<span id="total">0</span>)</h3>
        </div>
        <ul class="list-group selected_list"></ul>
        <div class="col-md-12" style="text-align:center">
          <hr>
          <div class="empty"></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button id="next1" type="button" class="btn nxt">Next</button>
    </div>
  </div>

 
  <!--/.Panel 1-->
  <!--Panel 2-->
  <div class="tab-pane fade" id="pane22" role="tabpanel">
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
              <input type="text" id="name" class="form-control required" name="first_name" value="<?=($current_customer->firstname) ? $current_customer->firstname.' '.$current_customer->lastname : '';?>" required>
              <label for="name">Your name</label>
            </div>
            <div class="md-form"> <i class="fa fa-envelope prefix"></i>
              <input type="email" id="email" class="form-control required" name="email" value="<?=$current_customer->email;?>"  required>
              <label for="email">Your email</label>
            </div>
            <div class="md-form"> <i class="fa fa-phone prefix"></i>
              <input type="text" id="form2" class="form-control required" name="phone" value="<?=$current_customer->phone;?>"  required>
              <label for="form2">Phone No.</label>
            </div>
          </div>
        </div>
        <!--/Form with header-->
      </div>
    </div>
    <div class="modal-footer">
      <button id="prev1" type="button" class="btn prv">Prev</button>
      <button id="next2" type="button" class="btn nxt">Next</button>
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
      <div class="tab-pane fade in show active" id="panel31" role="tabpanel"><?=$invidual_form;?> </div>
      <!--/.Panel 1-->
      <!--Panel 2-->
      <div class="tab-pane fade" id="panel32" role="tabpanel"></div>
      <!--/.Panel 2-->
    </div>
    <script>
    $('form#askquestion').submit(function(e) {
    var form = $(this);
    e.preventDefault(); 
  $('#loadingdiv').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking_question'); ?>",
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
    <!--Naked Form-->
    <div class="modal-footer">
      <div id="loadingdiv"></div>
      <button id="prev2" type="button" class="btn prv">Prev</button>
<?php /*?>      <button id="skip" type="button" class="btn skp">Skip</button>
<?php */?>      <button id="next3" type="submit" class="btn nxt">Next</button>
    </div>
    <script type="text/javascript">
$("#skip").click(function(){
$('form#askquestion').submit();
});
</script>
  </div>
  <!--/.Panel 3-->
  <!--Panel 4-->
  <div class="tab-pane fade" id="pane24" role="tabpanel">
    <div id="payment_summery"> </div>
    <div class="modal-footer">
      <!--<button id="prev3" type="button" class="btn prv">Prev</button>-->
     <?php /*?> <a href="javascript:void();" type="button" class="btn btn-primary paynowbutton" id="paynowbutton">Pay Now</a> <?php */?>
      </div>
  </div>
</div>
<?php echo form_close(); ?>
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/common.js"></script>
