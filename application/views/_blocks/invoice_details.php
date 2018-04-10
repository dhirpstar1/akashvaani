<table class="table" width="600" ellspacing="2" cellpadding="5" border="0" align="center" bgcolor="#000000">
  <thead>
    <tr bgcolor="#ffffff">
      <td width="350"><strong>Service</strong></td>
      <td width="100" class="text-right"><strong>Amount</strong></td>
    </tr>
  </thead>
  <tbody>
    <?php 
	if($questions[0]['question'] == 'Get Report.'){
		$questiontext = 'Get Report';
	}else{
	$qcount = count($questions);
	$questiontext =  $qcount.' questions asked.';
	}
             foreach ($questions as $key => $question):?>                                     
                  <tr bgcolor="#ffffff">
                    <td class="thick-line">
                      <?php echo $question['question'] ?>                     

                    <td class="no-line text-right"><?php if(!$special): ?><?=get_currency();?> <?php echo number_format($question['amount'], 2); ?>                                
                    <?php else: if($key == 0){ echo get_currency().number_format($question['amount'], 2);} endif;?></td>
            
                  </tr>
              <?php endforeach; ?>  
   
  </tbody>
</table><br>
<p>Please confirm your order detail by reply on this mail.</p>
<br>
<table class="table" width="600" cellpadding="5">
  <thead>
    <tr>
<td>NAME:- </td><td><?=$booking_options['mname'];?></td>
  </tr><tr>
<td>DOB:- </td><td><?=$booking_options['mday'];?>/<?=$booking_options['mmonth'];?>/<?=$booking_options['myear'];?></td>
 </tr><tr>
<td>PLACE:- </td><td><?=$booking_options['mbirth_place'];?></td>
 </tr><tr>
<td>TIME:- </td><td><?=$booking_options['mhour'];?>:<?=$booking_options['mminute'];?> <?php if((int)$booking_options['mhour'] > 12): echo 'PM'; else: echo 'AM'; endif; ?></td>

    </tr>
    <tr>
<td>PHONE:- </td><td><?=$data['phone'];?> <b>Is it your whatsup number?</b></td>
  </tr>
      <tr>
<td>GENDER:- </td><td><?=ucfirst($data['gender']);?> </td>
  </tr>
  </tbody>
</table>