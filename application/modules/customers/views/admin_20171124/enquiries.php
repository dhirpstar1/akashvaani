<div class="page-header">
    <h1>All Enquiries</h1>
</div>

<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_customer');?>');
}
</script>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th style="">Email</th>
            <th>Phone</th>
            <th>Reference </th>
            <th class="text-right">Date</th>
        </tr>
    </thead>

    <tbody>
        <?php $page_links = CI::pagination()->create_links();
        if($page_links != ''):?>
        <tr><td colspan="7" style="text-align:center"><?php echo $page_links;?></td></tr>
              <?php endif;?>
        <?php echo (count($enquiries) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_customers').'</td></tr>':''?>
<?php foreach ($enquiries as $key => $enquiry):?>
        <tr>
           <td><?php echo ($key+1); ?></td>
            <td><?php echo $enquiry->first_name; ?></td>
            <td><?php echo $enquiry->email;?></td>
            <td><?php echo $enquiry->phone;?></td>
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
