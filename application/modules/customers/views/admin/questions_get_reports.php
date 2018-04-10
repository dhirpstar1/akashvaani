<div class="page-header">
    <h1><?php echo $title; ?></h1>

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
    <thead> <?php $page_links = CI::pagination()->create_links();
       if($page_links != ''):?>
        <tr><td colspan="10" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
        <tr>
            <th>Sr. No.</th>
            <th>Status</th>
            <th style="">Customer</th>
            <th style="">Name on Report</th>
            <th style="">LG</th>
            <th style="">Email</th>
            <th style="">Phone</th>
            <th style="">Type</th>
            
            <th>Payment </th>
            <th style="">Payment Date/Time</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        if($page_links != ''):?>
              <?php endif;?>
        <?php echo (count($questions) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_customers').'</td></tr>':''?>
<?php foreach ($questions as $key => $question):?>
        <tr>
           <td><?php echo ($key+1); ?></td>  
           <td>
                <?php if($question->payment_status == 1){ 
						if($question->answer !== NULL)
							{
								echo '<a class="btn btn-default btn-success" title="Report has been sent"><i class="glyphicon glyphicon-share-alt"></i></a>';
							}
						else
							{
							   echo '<a class="btn btn-default btn-danger" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i></a>';
							}
					}
                ?>
            </td>       
            <td><?php echo  ucwords(strtolower($question->first_name." ".$question->last_name)); ?></td>
             <td><?php echo ucwords(strtolower($question->mname)); ?></td>
             <td><?php echo ($question->language == 'hi') ? 'Hindi' : 'English'; ?></td>
             <td><?php echo $question->email; ?></td>
              <td><?php echo $question->phone; ?></td>
               <td><?php echo $question->question; ?></td>
            
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
            <td><?php echo ($question->transaction_date) ? date('j M Y, H:i:s T', strtotime($question->transaction_date)) : 'NA'; ?></td>
            <td class="text-right">
        <div class="btn-group">
     

 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
 <i class="icon-pencil"> </i></button>
  <ul class="dropdown-menu">


<li>
<a class="" title="Edit" href="<?php echo site_url('admin/customers/report_form/'.$question->id); ?>"><i class="icon-pencil"> </i> Edit </a></li>
  <?php if($type == 'basic_horoscope_pdf'){ ?>
      <li> <a class=""  href="<?php echo site_url('admin/customers/download_report/'.$question->id); ?>" title="Download Report">        
        <i class="glyphicon glyphicon-download-alt"></i> Download</a></li>
  <?php }elseif($type == 'pro_horoscope_pdf'){ ?>      
      <li> <a class=""  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/pro_horoscope'); ?>" title="Download Report">        
        <i class="glyphicon glyphicon-download-alt"></i> Download</a></li>
  <?php }elseif($type == 'match_making_pdf'){ ?>      
      <li> <a class=""  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/match_making'); ?>" title="Download Report">        
        <i class="glyphicon glyphicon-download-alt"></i> Download </a></li>
  <?php } ?>  
  <?php if($type == 'basic_horoscope_pdf'){ ?>
       <li><a class=" send_button" href="<?php echo site_url('admin/customers/send_report/'.$question->id); ?>" id="<?=$question->id;?>"
        title="Send Report"><i class="glyphicon glyphicon-share-alt"></i> Send Report</a></li>
  <?php }elseif($type == 'pro_horoscope_pdf'){ ?>      
       <li><a class=" send_button" href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/pro_horoscope'); ?>" 
        id="<?=$question->id;?>" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i> Send Report</a></li>
  <?php } elseif($type == 'match_making_pdf'){ ?>      
       <li><a class="send_button" href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/match_making'); ?>" 
        id="<?=$question->id;?>" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i> Send Report</a></li>
  <?php } ?>      
      <li>
                    <a class="" title="Send Payment reminder" href="<?php echo site_url('admin/customers/send_payment_reminder/'.$question->id); ?>" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Send Reminder</a> 
</li>
   <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/delay/'.$question->id); ?>" title="Semd delay email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Send Delay </a></li>
   <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/deleverd/'.$question->id); ?>" title="Semd delay email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Report Deleverd </a></li>

 <li> <a class="" href="<?php echo site_url('admin/customers/questions_send_email/feedback/'.$question->id); ?>" title="Semd delay email" onclick="return areyousuresent(this);"><i class="glyphicon glyphicon-share-alt"></i> Feedback Email </a></li>

<li> <a title="Delete" href="<?php echo site_url('admin/customers/questions_delete/'.$question->id); ?>" onclick="return areyousure();"><i class="icon-times "></i> Delete </a></li>
  </ul>
</div> 

        </div>
            </td>
        </tr>
<?php endforeach;
        if($page_links != ''):?>
        <tr><td colspan="12" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>

<script type="text/javascript">
  
$('.send_button').click(function(event){
$(this).attr( "disabled", true );

$('.send_' + $(this).attr('id')).remove();

 $( this ).prepend( '<sapn id="loading_'+ $(this).attr('id') +'" style="color:green;">Sending....</span>' );

$.get( $(this).attr('href'), function( data ) {
  $('#loading_' + data).remove();
  $( "#" + data ).prepend( '<sapn class="send_'+data+'" style="color:green;">Sent</span>' );
  $("#" + data).attr( "disabled", false );
});

event.preventDefault();

});

</script>
