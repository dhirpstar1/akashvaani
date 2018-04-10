  <div class="modal fade" id="contactAgent" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <div class="modal-dialog">
              <?php echo form_open('',array('class' => 'contactForm', 'role' => 'form', 'id' => 'consultationForm', 'method' => 'post')); ?>
                  <?php echo form_input(array('type'  => 'hidden',  'name'  => 'profiles_id',  'id' => 'profiles_id', 'value' => $pdata->id));?>
                  <?php echo form_input(array('type'  => 'hidden',  'name'  => 'consult_id',  'id' => 'questioners_id', 'value' => $this->fuel->auth->user_data('id')));?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close"></span></button>
                        <h4 class="modal-title" id="contactLabel">Get Consultation</h4>
                    </div>
                    <div class="modal-body">
                
                            
                            <div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
<?php echo form_input(array('name' => 'name', 'type'  => 'phone',  'class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required'));?>
   
 </div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
     <?php echo form_input(array('name' => 'date_of_birth', 'type'  => 'date',  'class' => 'form-control', 'placeholder' => 'Date of Birth', 'required' => 'required'));?>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
     <?php echo form_input(array('name' => 'phone', 'type'  => 'number',  'class' => 'form-control', 'placeholder' => 'Phone Number', 'required' => 'required'));?>
</div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
     <?php echo form_input(array('name' => 'email', 'type'  => 'email',  'class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required'));?>
</div>

 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
   <?php echo form_dropdown('categories_id', $qacategory, '', 'class="form-control"'); ?>

</div>

                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                                   <?php echo form_textarea(array('name' => 'description', 'class' => 'form-control', 'placeholder' => 'Type your question...', 'required' => 'required'));?>
                                </div>
                            </div>
                  
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-round btn-o btn-gray pull-left">Close</a> 
                        <span id="consstatus" class="pull-left col-md-8" style="text-align:center;">...</span>
                        <?php echo form_submit(array('class' => 'btn btn-round btn-green pull-right', 'name' => 'Consultation', 'value' => 'Consultation'));?>
                    </div>
                </div>
                <?php echo form_close(); ?>
                 <script>
				 
				 $('.contactBtn').click(function(){
				 $('#consultationForm')[0].reset()
				 });
				 
				 
               $('form#consultationForm').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('profile/consultation'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){ alert(data);
            //$('#feed-container').prepend(data);
			$('#consstatus').html('<div class="alert alert-success alert-dismissible fade in" role="alert"><div class="icon"><span class="fa fa-check-circle"></span></div><button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span><span class="sr-only">Close</span></button><strong>Saved!</strong> Thank you for your question.</div>');
		//$('#consultationForm')[0].reset();
			
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });

});
               
               </script>
                
                
                
            </div>
        </div>
                            