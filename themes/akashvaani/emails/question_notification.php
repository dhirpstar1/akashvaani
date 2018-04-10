<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Question Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body style="font-family: Georgia,serif;">
<div>
   <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="<?php echo base_url('assets/images/logo.png');?>" alt="" width="152" height="108"></div>
<p style="Margin-top: 0;color: #565656;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hi Support,</p>
<p><?php echo $data['first_name'];?> has sent details as follows.</p>

<div style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> 
<h3>Pesonal Details:</h3>
<p>Name:- <?php echo $data['first_name'];?></p>
<p>Email:- <?php echo $data['email'];?></p>
<p>Phone:- <?php echo $data['phone'];?></p>

<table width="100%">
<?php if($optionsdata['mname']): ?>
<tr><td colspan="2"><h3><?php if($optionsdata['fname']): ?> Male <?php endif; ?> Details</h3></td></tr>
<tr><td>Name</td><td><?php echo $optionsdata['mname'];?> </td></tr>
<tr><td>Date</td><td><?php echo $optionsdata['mday'].'/'.$optionsdata['mmonth'].'/'.$optionsdata['myear'];?> </td></tr>
<tr><td>Time</td><td><?php echo $optionsdata['mhour'].':'.$optionsdata['mminute'];?> </td></tr>
<tr><td>Place</td><td><?php echo $optionsdata['mbirth_place'];?> </td></tr>
<?php endif; ?>
<?php if($optionsdata['fname']): ?>
<tr><td colspan="2"><h3>Female Details</h3></td></tr>

<tr><td>Name</td><td><?php echo $optionsdata['fname'];?> </td></tr>
<tr><td>Date</td><td><?php echo $optionsdata['fday'].'/'.$optionsdata['fmonth'].'/'.$optionsdata['fyear'];?> </td></tr>
<tr><td>Time</td><td><?php echo $optionsdata['fhour'].':'.$optionsdata['fminute'];?> </td></tr>
<tr><td>Place</td><td><?php echo $optionsdata['fbirth_place'];?> </td></tr>
<?php endif; ?>

<?php if($data['description']): ?>
<tr><td colspan="2"><h3>Questions</h3></td></tr>
<tr><td colspan="2"><ul><?php echo $data['description'];?> </ul></td></tr>
<?php endif; ?>
</table>

</div>
 <p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">
 <address>Regards,<br> Akashvaani</address> 
</p>
</div>
</body>
</html>