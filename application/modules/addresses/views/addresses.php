
<?php if(count($addresses) > 0):?>
     <?php foreach($addresses as $k => $a):?>
    
    <div class="col-md-6">
    <ul><li class="select_shipping" id="<?php echo $a['id'];?>">
  	<div class="pull-right"><input type="radio" name="shipping_address" <?php if($k == 0): ?> checked="checked" <?php endif; ?> class="shipping_address shipping_address_<?php echo $a['id'];?>" value="<?php echo $a['id'];?>" /></div>
      <div class="address" id="address_<?php echo $a['id'];?>"> 
      <?php echo format_address($a, true);?>
      </div>
      
      <div class="side-menu">     
     <button class="tappable delete pull-left" onclick="deleteAddress(<?php echo $a['id'];?>)"><i class="fa fa-times" aria-hidden="true"></i>Remove</button>
         <button type="button" class="pull-right addressForm tappable edit" data-address-id="<?php echo $a['id'];?>">Edit</button>
                </div>
</li></ul>
</div>         
 <?php endforeach;?> 
 <?php endif;?>  
 <script>
     $('.addressForm').click(function(){
	spinner('addaddressWrapper', true);
        $.post('<?php echo site_url('addresses/form');?>/'+$(this).attr('data-address-id'), function(data){
		
			$('#form_new').html(data);	
			spinner('addaddressWrapper', false);
			$('#add-address').modal('show');
        });
    });
    function deleteAddress(id)
    {
        if( confirm('<?php echo lang('delete_address_confirmation');?>') )
        {
		spinner('addaddressWrapper', true);
            $.post('<?php echo site_url('addresses/delete');?>/'+id, function(){
                loadAddresses();
				//location.reload();
            });
        }
    }
	
	$('.select_shipping').click(function(){
	spinner('addaddressWrapper', true);
	$( ".shipping_address_" + $(this).attr('id')).prop( "checked", true );
	$.post( "<?php echo site_url('checkout/address');?>", { type: "shipping", id: $(this).attr('id')})
	  .done(function( data ) {
	//spinner('addaddressWrapper', false);
  });
	$.post( "<?php echo site_url('checkout/address');?>", { type: "billing", id: $(this).attr('id')})
	  .done(function( data ) {
	spinner('addaddressWrapper', false);
  });
  
  
	});
	
	$('#address_' + $('input[type=radio]:checked').closest('li').attr('id')).trigger('click');
	
 </script>
     
