<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Payment Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div>
   <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="<?php echo base_url('assets/images/logo.png');?>" alt="" width="152" height="108"></div>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hi There,</p>
<div style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> 
Payment for following booking has been received.
<h5>Details:</h5>
<p>Order ID:- #<?php echo $data->id;?></p>

<p>Name:- <?php echo $data->first_name;?></p>
<p>Phone:- <?php echo $data->phone;?></p>
<p>Email:- <?php echo $data->email;?></p>

<p>Service Name:- <?php echo $data->servicename;?></p>
<p>Date:- <?php echo $data->booking_date;?></p>
<p>Time:- <?php echo $data->booking_time;?> </p>


 </div>
 <p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">
	<address>Regards,<br> Akashvaani</address> 
</p>
</div>
</body>
</html>