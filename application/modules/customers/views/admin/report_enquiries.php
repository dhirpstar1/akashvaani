<div class="page-header">
    <h1>All Report Enquiries</h1>
</div>
<div class="pull-right">
        <?php echo form_dropdown('reference', $references, $selected_reference, array('class' => 'form-control', 'id' => 'reference_list')); ?>
</div>
<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_customer');?>');
}


$('#reference_list').change(function(){
var ref = $(this).val();
var url = '<?=base_url('/admin/customers/report_enquiries/');?>/' + ref;
window.location.replace(url);
});



</script>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th style="">Email</th>
            <th>Date of Birth</th>
             <th>Date of Time</th>
            <th>Reference </th>
            <th class="text-right">Date</th>
        </tr>
    </thead>

    <tbody>
        <?php $page_links = CI::pagination()->create_links();
        if($page_links != ''):?>
        <tr><td colspan="7" style="text-align:center"><?php echo $page_links;?></td></tr>
              <?php endif;?>
        <?php echo (count($enquiries) < 1)?'<tr><td style="text-align:center;" colspan="7">No records found.</td></tr>':''?>
<?php foreach ($enquiries as $key => $enquiry):?>
        <tr>
           <td><?php echo ($key+1); ?></td>
            <td><?php echo $enquiry->name; ?></td>
            <td><?php echo $enquiry->email;?></td>
            <td><?php echo $enquiry->dob;?></td>
              <td><?php echo $enquiry->dot;?></td>
            <td><?php echo $enquiry->reference_page;?></td>
            <td class="text-right" width="100">
               <?php echo date('d/m/Y', strtotime($enquiry->date));?>
            </td>
        </tr>
<?php endforeach;
        if($page_links != ''):?>
        <tr><td colspan="7" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>
