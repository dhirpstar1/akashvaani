<div class="container">
  <hr class="firstheadhr">
  <h2 class="h2-responsive firsthead">Create Payment Link</h2>
  <section class="section feature-box">
    <div class="col-md-6"> 
	<?php echo form_open('service/createlink', array('class' => 'form-horizontal', 'id' => 'createlink')); ?>
      <div class="md-form"> <i class="fa fa-user prefix"></i> <?php echo form_input(array('id' => 'name', 'class' => 'form-control', 'type' => 'text', 'name' => 'name', 'value' => '', 'required' => 'required')); ?>
        <label for="name">Customer Name</label>
      </div>
      <div class="md-form"> <i class="fa fa-envelope prefix"></i> <?php echo form_input(array('id' => 'email', 'class' => 'form-control', 'type' => 'email', 'name' => 'email', 'value' => '', 'required' => 'required')); ?>
        <label for="email">Email</label>
      </div>
      <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i> <?php echo form_input(array('id' => 'phone', 'class' => 'form-control', 'type' => 'text','name' => 'phone', 'value' => '', 'required' => 'required')); ?>
        <label for="phone">Phone No.</label>
      </div>
      <div class="md-form">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <select class="form-control"  name="service" data-size="5" id="service">
          <option value="0" price="0.00">--Select Service--</option>
          <?php foreach($services as $service): ?>
          <option value="<?=$service->name;?>" price="<?=$service->price;?>"><?=$service->name;?></option>
          <?php  endforeach; ?>
        </select>
        </div>
      </div>
      <div class="clearfix"></div>
        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i> <?php echo form_input(array('id' => 'amount', 'class' => 'form-control', 'type' => 'text','name' => 'amount', 'value' => '', 'required' => 'required')); ?>
        <label for="phone">Amount</label>
      </div>
      <div class="md-form">
        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <button type="submit" class="btn btn-success waves-effect waves-light">Send Payment Link</button>
        </div>
      </div>
      <div class="clearfix"></div>
     
      <?php echo form_close(); ?> </div>
      <div class="col-md-6">
      
 <div id="bookingstatus" class="loader well" align="center">Payment Link</div>
 
  <div class="md-form wow fadeInRight" id="paynowdiv" style="visibility: hidden; animation-name: fadeInRight; text-align:center">
  <a href="#" id="payment_link" class="btn btn-success waves-effect waves-light">Pay Now</a>
        </div>
</div>
  </section>
</div>

<script>
	$('#service').change(function(){
	$('#amount').val($('option:selected', this).attr('price'));
	$('#amount').focus();
	});				 
    $('form#createlink').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('.loader').html('<span class="fa fa-spin fa-circle-o-notch"></span>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/createlink'); ?>",
        data: form.serialize(),
        success: function(data){ //
           	$('#bookingstatus').html(data);
			$('#payment_link').attr('href', data);
			$('#paynowdiv').css('visibility', 'visible');
		$('#createlink')[0].reset();	
			
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
