<div class="page-header">
    <h1><?php echo $title; ?></h1>
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
        <?php $page_links = CI::pagination()->create_links();
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
       <a class="btn btn-default" href="<?php echo site_url('admin/customers/report_form/'.$question->id); ?>"><i class="icon-pencil"></i></a>
  <?php if($type == 'basic_horoscope_pdf'){ ?>
       <a class="btn btn-default"  href="<?php echo site_url('admin/customers/download_report/'.$question->id); ?>" title="Download Basic Report">        
        <i class="glyphicon glyphicon-download-alt"> </i></a>
  <?php }elseif($type == 'pro_horoscope_pdf'){ ?>      
       <a class="btn btn-default"  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/pro_horoscope'); ?>" title="Download Basic Report">        
        <i class="glyphicon glyphicon-download-alt"> </i></a>
  <?php }elseif($type == 'match_making_pdf'){ ?>      
       <a class="btn btn-default"  href="<?php echo site_url('admin/customers/download_report/'.$question->id.'/match_making'); ?>" title="Download Basic Report">        
        <i class="glyphicon glyphicon-download-alt"> </i></a>
  <?php } ?>  
  <?php if($type == 'basic_horoscope_pdf'){ ?>
       <a class="btn btn-default" href="<?php echo site_url('admin/customers/send_report/'.$question->id); ?>" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i></a>
  <?php }elseif($type == 'pro_horoscope_pdf'){ ?>      
       <a class="btn btn-default" href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/pro_horoscope'); ?>" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i></a>
  <?php } elseif($type == 'match_making_pdf'){ ?>      
       <a class="btn btn-default" href="<?php echo site_url('admin/customers/send_report/'.$question->id.'/match_making'); ?>" title="Send Report"><i class="glyphicon glyphicon-share-alt"></i></a>
  <?php } ?>      
       <a class="btn btn-danger" href="<?php echo site_url('admin/customers/questions_delete/'.$question->id); ?>" onclick="return areyousure();"><i class="icon-times "></i></a>
        </div>
            </td>
        </tr>
<?php endforeach;
        if($page_links != ''):?>
        <tr><td colspan="10" style="text-align:center"><?php echo $page_links;?></td></tr>
        <?php endif;?>
    </tbody>
</table>
