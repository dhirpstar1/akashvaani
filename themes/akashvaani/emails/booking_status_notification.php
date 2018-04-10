<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Booking Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div>
   <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="<?php echo base_url('assets/images/logo.png');?>" alt="" width="152" height="108"></div>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hey <?php echo $bookingdata->first_name; ?>,</p>
<div style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> 
Your booking status has been changed. -> <?php echo $bookingstatus[$bookingdata->status]; ?>
<p>Date:- <?php echo $bookingdata->booking_date;?></p>
<p>Time:- <?php echo $bookingdata->booking_time;?> </p>
 </div>
 
<address>Regards,<br> Akashvaani</address> 
</div>
</body>
</html>