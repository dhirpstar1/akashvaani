<style type="text/css">
.table{border:1px thin #CCCCCC;}
.table th{border:1px thin #CCCCCC;}
.table td{border:1px thin #CCCCCC;}
</style>
<div align="center"><h1>Invoice #<?php echo $data['booking_id']; ?></h1></div>
<table width="600" cellpadding="5">
	<tr>
    	<td><img src="https://www.akashvaani.com/assets/images/logo.png" class="" alt="Logo" width="100" style="padding:20px;"></td>
        <td></td>
    </tr>
  
    <tr>
      <td width="350"><address>
         <?php echo $data['first_name'];?><br>
         <?php echo $data['email'];?><br>
         (+91)<?php echo $data['phone'];?><br>
        </address></td>
      <td width="250"><address class="float-xs-right"><p>
       Invoice #<?php echo $data['booking_id']; ?><br>
      	Invoice Date <?php echo date('d M Y'); ?></p>
        <p class="price_text">Amount - Rs <?=$data['total_amount']; ?>/-</p>
        </address></td>
    </tr>
      <tr>
    	<td colspan="2">&nbsp;</td>
    </tr>
</table>

<table class="table" width="600" cellpadding="5">
  <thead>
    
    <tr>
      <td width="350"><strong>Service</strong></td>
	  <td width="100"></td>	
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
	  //foreach ($questions as $question): ?>
    <tr>
      <?php /*?><td width="350"><b><?php echo $question['question'] ?></b> </td><?php */?>
      <td width="350"><b><?php echo $questiontext; ?> </b> </td>

      <td width="100"></td>
     <?php /*?> <td width="100" class="text-right">INR <?php echo number_format($question['amount'], 2); ?> </td><?php */?>
       <td width="100" class="text-right">Rs <?php echo $data['total_amount'] / $qcount; ?> * <?=$qcount;?> </td>
    </tr>
    <?php //endforeach; ?>
    <tr>
      <td width="350" class="thick-line"></td>
      <td width="100" class="thick-line text-center"><strong>Subtotal</strong></td>
      <td width="100" class="thick-line text-right">Rs <?=$data['total_amount']; ?></td>
    </tr>
   <!-- <tr>
      <td width="350" class="no-line"></td>
      <td width="100" class="no-line text-center"><strong>Tax</strong></td>
      <td width="100" class="no-line text-right">INR 0.00</td>
    </tr>-->
    <tr>
      <td width="350" class="no-line"></td>
      <td width="100" class="no-line text-center"><strong>Total(incl Tax)</strong></td>
      <td width="100" class="no-line text-right">Rs <?=$data['total_amount']; ?></td>
    </tr>
  </tbody>
</table><br />
<div style="padding:20px;">
<address>Thanks<br />
Akashvaani
</address>
</div>