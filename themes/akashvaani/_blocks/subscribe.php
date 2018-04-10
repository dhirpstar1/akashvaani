               <div class="osLight footer-header">Subscribe to Our Newsletter</div>
                         <?php echo form_open('profile/subscribe	', array('class' => 'form-horizontal', 'role' => 'form', 'id' => 'subscribeForm')); ?>
                            <div class="form-group">
                              <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control', 'required' => 'required')); ?>
                            </div>
                            <div class="form-group">
                             <?php echo form_submit(array('class' => 'btn btn-green btn-block', 'name' => 'Consultation', 'value' => 'Subscribe'));?>
                             <div id="consstatus"></div>
                            </div>
                         <?php echo form_close(); ?>
                   	    </div>
                    
                 <script>
				 
				 $('.btn-block').click(function(){
				// $('#subscribeForm')[0].reset()
				 });
				 
				 
               $('form#subscribeForm').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('profile/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            //$('#feed-container').prepend(data);
			$('#consstatus').html('<div class="alert alert-success alert-dismissible fade in" role="alert"><div class="icon"><span class="fa fa-check-circle"></span></div><button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span><span class="sr-only">Close</span></button><strong>Saved!</strong> '+data+'</div>');
		//$('#consultationForm')[0].reset();
			
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });

});
               
               </script>
                
                
                

                            