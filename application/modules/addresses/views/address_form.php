<?php echo form_open('addresses/form/'.$id, ['id'=>'addressForm']);?>
 
 <div class="md-form col-md-6">
    <?php echo form_input(['name'=>'firstname', 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'First Name', 'value'=> assign_value('firstname',$firstname)]);?>
</div>
<div class="md-form col-md-6	">
    <?php echo form_input(['name'=>'lastname', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last Name', 'value'=> assign_value('lastname',$lastname)]);?>
</div>
  <div class="md-form col-md-6">
    <?php echo form_input(['name'=>'city', 'class' =>'form-control', 'required' => 'required', 'placeholder' => 'City/District', 'value'=>assign_value('city',$city)]);?>
</div>
 <div class="md-form col-md-6">
    <?php echo form_input(['maxlength'=>'10', 'name'=>'zip', 'required' => 'required', 'placeholder' => 'pincode', 'id' => 'pin', 'class' => 'form-control', 'value'=> assign_value('zip',$zip)]);?>
    
</div>
 <div class="md-form col-md-6">
 <?php echo form_dropdown('zone_id', $zones_menu, assign_value('zone_id', $zone_id), 'id="zone_id" placeholder="State" class="form-control"');?>
    <?php //echo form_input(['name'=>'zone_id', 'placeholder' => 'State', 'required' => 'required', 'id' => 'zone_id', 'class' => 'form-control', 'value'=> assign_value('zone_id',$zone_id)]);?>

</div>
  
 <div class="md-form col-md-6">
    <?php echo form_dropdown('country_id', $countries_menu, assign_value('country_id', $country_id), 'id="country_id" class="form-control"');?>
    <?php //echo form_input(['name'=>'country_id', 'placeholder' => 'Country', 'required' => 'required', 'id' => 'country_id', 'class' => 'form-control', 'value'=> assign_value('country_id',$country_id)]);?>
</div>
 <div class="md-form col-md-6">
    <?php echo form_input(['name'=>'phone', 'placeholder' => 'Mobile', 'required' => 'required', 'id' => 'mobie', 'class' => 'form-control', 'value'=> assign_value('phone',$phone)]);?>
</div>
 <div class="md-form col-md-6">
    <?php echo form_input(['name'=>'email', 'type' => 'email', 'required' => 'required', 'placeholder' => 'Email', 'id' => 'email', 'class' => 'form-control', 'value'=> assign_value('email',$email)]);?>
</div>
<div class="md-form col-md-12">
 		<?php  echo form_textarea(['name'=>'address1',  'class' => 'form-control md-textarea', 'placeholder' => 'Address',  'required' => 'required'], assign_value('address1',$address1)); ?>
</div>
	
<div class="modal-footer" style="border-top:0px;">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Save</button>
               
            </div>
            
            <div id="addressFormWrapper"></div>
  
    </form>

    <script>
    $(function(){
        $('#country_id').change(function(){
            $('#zone_id').load('<?php echo site_url('addresses/get-zone-options');?>/'+$('#country_id').val());
        });

        $('#addressForm').on('submit', function(event){
           spinner('addressFormWrapper', true);
            event.preventDefault();
            $.post($(this).attr('action'), $(this).serialize(), function(data){
                if(data == 1)
                {
					 spinner('addressFormWrapper', false);
					$('#add-address').modal('hide');
					loadAddresses();
                }
                else
                {
                    $('#addressFormWrapper').html(data);
                }
            });
        })
    });

    
    </script>
</div>