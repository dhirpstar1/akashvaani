<div class="page-header">
    <h1>All Questions</h1>
    <div class="result">...</div>
</div>

<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_customer');?>');
}
function areyousuresent(obj)
{
    if(confirm('Are you sure want to send.')){
      $.get( $(obj).attr('href'), function( data ) {
          $('.result').html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent.</div>');
    });

    }
    return false;
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

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
 <i class="icon-pencil"> </i></button>
  <ul class="dropdown-menu">


<li>

                    <a class="" title="Edit" href="<?php echo site_url('admin/customers/questions_form/'.$question->id); ?>"><i class="icon-pencil"></i> Edit</a>
                </li><li>
                    <a class="" title="Send Payment reminder" href="<?php echo site_url('admin/customers/send_payment_reminder/'.$question->id); ?>" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Send Reminder</a> 
</li> <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/delay/'.$question->id); ?>" title="Semd delay email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Send Delay </a></li>
   <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/deleverd/'.$question->id); ?>" title="Semd deleverd email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Report Deleverd </a></li>

 <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/feedback/'.$question->id); ?>" title="Semd feedback email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Feedback Email </a></li>

<li> <a title="Delete" href="<?php echo site_url('admin/customers/questions_delete/'.$question->id); ?>" onclick="return areyousure();"><i class="icon-times "></i> Delete </a></li>
                </ul>
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

