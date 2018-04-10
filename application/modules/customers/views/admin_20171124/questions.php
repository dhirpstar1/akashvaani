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
            <th>Read</th>
            <th>Question</th>
            <th>Date/Time</th>
            <th>Customer</th>
            <th>Email</th>
            <th>Phone</th>
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
<?php foreach ($questions as $key => $question):?>
        <tr>
           <td><?php echo ($key+1); ?></td>
           <td width="100">
          <a id="<?=$question->id;?>" class="btn btn-<?php if($question->payment_status == 1){ if($question->read_mark == 1){ ?>success <?php }else{ ?>danger <?php } }else{ echo 'default';}?> questions_read_mark" title="Edit" href="<?php echo site_url('admin/customers/questions_read_mark/'.$question->id); ?>"><i class="glyphicon glyphicon-share-alt"></i></a>
          </td>
            <td><?php echo $question->question; ?></td>
            <td><?php echo date('d M Y h:i a', strtotime($question->date)); ?></td>
            <td><?php echo  $question->first_name." ".$question->last_name; ?></td>
             <td><?php echo $question->email; ?></td>
              <td><?php echo $question->phone; ?></td>
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
            <td class="text-right" width="150">
                <div class="btn-group">
                    <a class="btn btn-default" title="Edit" href="<?php echo site_url('admin/customers/questions_form/'.$question->id); ?>"><i class="icon-pencil"></i></a>
                    <a class="btn btn-default" title="Send Payment reminder" href="<?php echo site_url('admin/customers/send_payment_reminder/'.$question->id); ?>"><i class="glyphicon glyphicon-share-alt"></i></a>

                    <a class="btn btn-danger" title="Delete" href="<?php echo site_url('admin/customers/questions_delete/'.$question->id); ?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                </div>
            </td>
        </tr>
<?php endforeach;
        if($page_links != ''):?>
        <tr><td colspan="10" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>
<script type="application/javascript">
$('.questions_read_mark').click(function(e){
$(this).toggleClass( 'btn-success btn-danger' );
$.get( $(this).attr('href'), function( data ) {
  //$( "#" + data ).toggleClass( data );
  //alert( "Load was performed." );
});
e.preventDefault();
});
</script>

