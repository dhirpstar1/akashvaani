<div class="page-header">
    <h1>All Questions</h1>
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
            <th>Question</th>
            <th style="">Customer</th>
            <th>Status</th>
            <th>Payment </th>
            <th class="text-right">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $page_links = CI::pagination()->create_links();
        if($page_links != ''):?>
              <?php endif;?>
        <?php echo (count($questions) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_customers').'</td></tr>':''?>
<?php foreach ($questions as $key => $question): ?>
        <tr>
           <td><?php echo ($key+1); ?></td>
            <td><?php echo $question->question; ?></td>
            <td><?php echo  $question->firstname." ".$question->lastname; ?></td>
            <td>
                <?php if($question->answer !== NULL)
                {
                    echo 'Answered';
                }
                else
                {
                    echo 'Unanswered';
                }
                ?>
            </td>
            <td>
                <?php if($question->payment_status == 0)
                {
                    echo 'Pending';
                }
                else
                {
                    echo 'Success';
                }
                ?>
            </td>
            <td class="text-right" width="100">
                <div class="btn-group">
                    <a class="btn btn-default" href="<?php echo site_url('admin/customers/questions_form/'.$question->id); ?>"><i class="icon-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo site_url('admin/customers/questions_delete/'.$question->id); ?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                </div>
            </td>
        </tr>
<?php endforeach;
        if($page_links != ''):?>
        <tr><td colspan="5" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>
