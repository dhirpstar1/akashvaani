<?php if($type == 'login'): ?>
<p>It's look like your have account with us. Please login.</p><div class="md-form col-md-6">
	<input name="password" value="" required="required" class="form-control" placeholder="Password" type="password">
    	</div>
        <div class="md-form col-md-6" style="padding:0px;"> 
        	<button class="btn btn-primary pull-left" id="loginbutton" type="submit">Login</button>
        	
            <a href="javascript:void(0);" id="send_otp" class="btn primary-btn btn-continue green-button" style="background-color:#2cd2b1;">Send OTP (*<?php echo substr($phone, -4);?>)</a>
            <a href="/customercheck" class="forgot_password pull-right">Forgot Password</a>
        </div>
        <div class="col-md-12" id="message"><?=$message;?></div>
        <script>
		 $(function(){
        $('.forgot_password').click(function(event){ 
				spinner('checkFormWrapper', true);
				
				$.post('<?=base_url('customercheck');?>', { email: $('#emailaddress').val(), forgot: "forgot" }, function(data){
						//  var result = $.parseJSON(data);
						 //console.log(data);
						 //spinner('checkFormWrapper', false);
						 $('#checkFormWrapper').html(data);
									 
							
						});
				 event.preventDefault();
				});		  
		});
        			  
			  $('#send_otp').on('click', function(){
			  	if($('#emailaddress').val() == ''){
				alert('Please enter valid number and email.');
				return false;
				}else{
			  			spinner('checkFormWrapper', true);
							$.post('<?=base_url('send_otp');?>', { email: $('#emailaddress').val() }, function(data){
						 //console.log(data);
						 spinner('checkFormWrapper', false);
						 $('#checkFormWrapper').html(data);
							
						});
			  }
			  
			  });
        </script>
<?php elseif($type == 'otp'): ?>       
     <div class="md-form col-md-6">
        <?php echo form_input(['name'=>'otp', 'id' => 'otp', 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'Enter OTP', 'value'=> '']);?>
        </div>   
        <div class="col-md-6" align="right" style="padding: 0px;">
             <button class="btn btn-primary" id="validateotp" type="button">Submit</button>
             <a href="javascript:void(0);" id="send_otp" class="btn primary-btn btn-continue green-button" style="background-color:#2cd2b1;">Re-send OTP (*<?php echo substr($phone, -4);?>)</a>
        </div>
        <div class="col-md-12" id="messageotp"><?php echo $message; ?></div>  
        
        
       <script>
	    $('#send_otp').on('click', function(){
			  	if($('#phone').val() == '' || $('#emailaddress').val() == ''){
				alert('Please enter valid number and email.');
				return false;
				}else{
			  			spinner('checkFormWrapper', true);
							$.post('<?=base_url('send_otp');?>', { email: $('#emailaddress').val()}, function(data){
						 //console.log(data);
						 spinner('checkFormWrapper', false);
						 $('#checkFormWrapper').html(data);
							
						});
			  }
			  
			  });
	   
	   
		 $(function(){  
        
		$('#validateotp').click(function(event){

			if($('#otp').val() == ''){
				$('#messageotp').html('<span class="alert alert-danger" role="alert">Enter OTP</span>');
			}else{
		spinner('checkFormWrapper', true);
		$.post('<?=base_url('send_otp');?>', { email: $('#emailaddress').val(), otp:$('#otp').val()}, function(data){
						 //console.log(data);
						 spinner('checkFormWrapper', false);
						 $('#checkFormWrapper').html(data);
									 
							
						});

	}
				 	event.preventDefault();
				});		  
        		});
</script>				
<?php else: ?>
		<div class="md-form col-md-6">
        <?php echo form_input(['name'=>'first_name', 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'First Name', 'value'=> $first_name]);?>
        </div>
        <div class="md-form col-md-6">
        <?php echo form_input(['name'=>'last_name', 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'Last Name', 'value'=> $last_name]);?>
        </div>
          <div class="md-form col-md-6">
        <?php echo form_input(['name'=>'phone', 'type' => 'number',  'required' => 'required', 'id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Enter phone number', 'value'=> '']);?>
        </div>
          <div class="md-form col-md-6">
          	
        </div>
        <div style="clear: both;"></div>
        <div class="md-form col-md-6">
        <?php echo form_input(['name'=>'password', 'required' => 'required', 'autocomplete' => 'off', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'value'=> '']);?>
        </div>
        <div class="md-form col-md-6">
        <?php echo form_input(['name'=>'confirm_password', 'required' => 'required', 'autocomplete' => 'off', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Confirm Password', 'value'=> '']);?>
        </div>
         <div class="col-md-10 pull-left"><?php echo $message; ?></div>
        <div class="col-md-2 pull-right">
             <button class="btn btn-primary" id="registernbutton" type="submit">Register</button>
        </div>
        
        
        <?php endif; ?>
        