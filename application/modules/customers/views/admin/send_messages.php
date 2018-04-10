<style type="text/css"> 
.glyphicon.spinning {
    animation: spin 1s infinite linear;
    -webkit-animation: spin2 1s infinite linear;
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg); }
    to { transform: scale(1) rotate(360deg); }
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}

</style>
<?php if($messages): ?>
<?php echo form_open('admin/customers/send_message', array('id' => 'send_messages')); ?>
<?php echo form_hidden(array('customer_ids' => implode(',',$customers_id)));?>
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
             <label>Email Message</label>
                <?php echo form_dropdown('email_id', $messages, '', array('class' => 'form-control')); ?>
            </div>
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
                <label>SMS Message</label>
               <?php echo form_dropdown('sms_id', $messages, '', array('class' => 'form-control')); ?>
            </div>
             <div id="result" class="pull-right col-md-10" style="color:#009900;">...</div>
        </div>
    </div>
<?php echo form_button('submit', 'Send', "class='btn btn-primary' id='send_message_button'");  ?>    
<?=form_close();?>
<script type="text/javascript">
$(function() {
$("#send_message_button").click(function(e) {
    var url = "<?=base_url('/admin/customers/send_message');?>"; // the script where you handle the form input.
		    $.ajax({
				   type: "POST",
				   url: url,
				   data: $("#send_messages").serializeArray(),
				   beforeSend: function() { 
					$('#result').html('<span class="glyphicon glyphicon-refresh spinning"></span>');
					 },
				   success: function(data)
				   { 
				     $('#result').html(data);
				   },
					error: function(jqXHR, textStatus, errorThrown) 
					{
						//if fails   
						alert(textStatus);   
					}
         		});

		});
});

</script>
<?php else: ?>
 <div class="row">
        <div class="col-md-12"> Please select one of the customer from list.
        </div>
 </div>       

<?php endif; ?>