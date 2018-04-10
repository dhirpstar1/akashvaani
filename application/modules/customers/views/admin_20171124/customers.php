<div class="page-header">
    <h1><?php echo lang('customers');?></h1>
</div>

<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_customer');?>');
}
</script>

<div class="btn-group pull-left col-md-12">
<?php echo form_open('admin/customers', array('id' => 'customer_form')); ?>
 <div class="col-md-3"><?php echo form_input(['name'=>'customer_name', 'value' => \CI::input()->post('customer_name'), 'class'=>'form-control', 'placeholder' => 'Customer Name']); ?></div>
    <div class="col-md-2"><?php echo form_input(['name'=>'customer_id', 'value' => \CI::input()->post('customer_id'), 'class'=>'form-control', 'placeholder' => 'Customer ID']); ?></div>
<div class="col-md-2"><?php echo form_input(['name'=>'customer_email', 'value' => \CI::input()->post('customer_email'), 'class'=>'form-control', 'placeholder' => 'Customer Email']); ?></div>
<div class="col-md-2"><?php $options = array('All', 'Payment Pending', 'First Questions Only', 'Questions asked', 'Questions never asked');
echo form_dropdown('option', $options, $option, array('class'=>'form-control')); ?></div>
<div class="col-md-3"><input class="btn btn-primary" type="submit" value="Search"/>&nbsp;&nbsp;<a class="btn btn-primary" id="send_message" href="#"><i class="icon-plus"></i> Send</a>&nbsp;&nbsp;<a class="btn btn-primary" href="<?php echo site_url('admin/customers/form'); ?>"><i class="icon-plus"></i> Add</a>
</div>
</form> 
</div>
<script type="text/javascript">
$('#send_message').click(function(){
$.post("<?php echo base_url('admin/customers/send_message'); ?>", $("#send_message_form").serialize(), function(data) {
$('#send_message_body').html(data);
$('#send_messages_model').modal('show');
});
});
</script>
<?php echo form_open('admin/customers', array('id' => 'send_message_form')); ?>
<table class="table table-striped">
    <thead>
        <tr>
        	<th><input type="checkbox" name="select_all" id="select_all" /></th>
            <?php
            foreach(['customer_id', 'firstname', 'email', 'phone', 'active', 'free_question'] as $thead)
            {
                $url = 'admin/customers/'.$thead.'/';
                $icon = '';
                if($field == $thead)
                {
                    $icon = ' <i class="icon-chevron-down"></i>';

                    if($by == 'ASC')
                    {
                        $url .= 'DESC/';
                        $icon = ' <i class="icon-chevron-up"></i>';
                    }
                    else
                    {
                        $url .= 'ASC/';
                    }
                }
                else
                {
                    $url .= 'ASC/';
                }
                $url .= $page;

                echo '<th><a href="'.site_url($url).'">'.ucfirst($thead).$icon.'</a></th>';
            }
            ?>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
        $page_links = CI::pagination()->create_links();
        if($page_links != ''):?>
        <tr><td colspan="12" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
        <?php echo (count($customers) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_customers').'</td></tr>':''?>
<?php foreach ($customers as $customer): if($customer->id != 3):?>
        <tr>
        	<td><input type="checkbox" name="select_customera[]" class="checkbox"  value="<?=$customer->id;?>"/></td>
            <td style="width:16px;"><?php echo  $customer->customer_id; ?></td>
            <td class="gc_cell_left"><?php echo  $customer->firstname." ".$customer->lastname; ?></td>
            <td><a href="mailto:<?php echo  $customer->email;?>"><?php echo  $customer->email; ?></td>
             <td><?php echo  $customer->phone; ?></a></td>
            <td>
                <?php if($customer->active == 1)
                {
                    echo 'Yes';
                }
                else
                {
                    echo 'No';
                }
                ?>
            </td>
            <td>
                <?php if($customer->free_question == 1)
                {
                    echo 'Asked';
                }
                else
                {
                    echo '';
                }
                ?>
            </td>
            
            <td class="text-right">
                <div class="btn-group">
                    <a class="btn btn-default" href="<?php echo site_url('admin/customers/form/'.$customer->id); ?>"><i class="icon-pencil"></i></a>
                    <?php /*?><a class="btn btn-default" href="<?php echo site_url('admin/customers/addresses/'.$customer->id); ?>"><i class="icon-envelope"></i></a><?php */?>
   <a class="btn btn-default" target="_blank" title="Login as Customer" href="<?php echo site_url('/autologin/'.base64_encode($customer->email)); ?>"><i class="icon-user"></i></a>
                    <a class="btn btn-danger" href="<?php echo site_url('admin/customers/delete/'.$customer->id); ?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                </div>
            </td>
        </tr>
<?php endif; endforeach;
        if($page_links != ''):?>
        <tr><td colspan="12" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>
</form> 
<script type="text/javascript">
//select all checkboxes
$("#select_all").change(function(){  //"select all" change
    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
});

//".checkbox" change
$('.checkbox').change(function(){
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(false == $(this).prop("checked")){ //if this item is unchecked
        $("#select_all").prop('checked', false); //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){
        $("#select_all").prop('checked', true);
    }
});

</script>
<!-- Modal -->
<div id="send_messages_model" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Mesages</h4>
      </div>
      <div class="modal-body" id="send_message_body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>