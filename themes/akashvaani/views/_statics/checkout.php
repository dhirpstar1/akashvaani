<div style="height:100px;"></div>
<div id="cartSummary">
<div class="container">
<div class="row">
  <div class="col-md-12">
      
      <ul id="qsnstepper" class="stepper stepper-horizontal">
          <li id="stepper1" class="active">
              <a>
                  <span class="label circle">BAG</span>
              </a>
          </li>
          <li style="margin-top: 8px">-----</li>
          <li id="stepper2" class="active">
              <a>
                  <span class="label circle">DELIVERY</span>
              </a>
          </li>
          <li style="margin-top: 8px">-----</li>
          <li id="stepper3" class="completed">
              <a>
                  <span class="label circle">PAYMENT</span>
              </a>
          </li>
         
      </ul>
<hr>
  </div>
</div>


</div>

<!-- Tab panels -->
<div class="tab-content cart-tab">

  <!--Panel 1-->
  <div class="tab-pane fade in active" id="pane21" role="tabpanel" style="padding:1rem">

<div class="row">
  <div class="col-md-12">
      <div class="cart-haed"><div class="col-md-12" align="center">
    	<h2> Complete Payment Process</h2>
 	  </div>
  </div>
   <br />
   <div class="cart-list"> 
      <ul>
     
        <li id="">
          <div class="item-img"></div>
          <div class="item-description clearfix">
            <div class="item-des">
             <div class="item-link">               
               
             </div>
               </div>
            <div class="item-des-price">
              <div class="amount">
             Total Amount : <?php echo format_currency($order->total);?>
            </div>
            </div>
          </div>
          <div class="edit-move-delete">
          <div class="actions">
         
 				<div class="col-md-12" align="center"><h3>Shipping details</h3>
				<?php echo $order->shipping_firstname.' '.$order->shipping_lastname;?><br />
               <address> <?php echo $order->shipping_address1;?>,<br />
               <?php echo $order->shipping_city;?> <?php echo $order->shipping_zone;?> <?php echo $order->shipping_zip;?><br />
               <?php echo $order->shipping_country; ?>
               </address></div>
               <?php /*?><div class="col-md-6" align="center"><h3>Billings details</h3>
				<?php echo $order->shipping_firstname.' '.$order->shipping_lastname;?><br />
               <address> <?php echo $order->shipping_address1;?>,<br />
               <?php echo $order->shipping_city;?> <?php echo $order->shipping_zone;?> <?php echo $order->shipping_zip;?><br />
               <?php echo $order->shipping_country; ?>
               </address></div><?php */?>
 <div class="clearfix"></div>
 
 
          </div>
          </div>
        </li>
        

        
        
        
      </ul>
    </div>
  </div>
 <div class="col-md-12">
          	<div class="col-md-6">
            <a href="javascript:void();" type="button" class="btn btn-primary paynowbutton ">Pay Now</a>
            </div>
            <div class="col-md-6 ">
            For people Outside India &nbsp;&nbsp;<a href="<?=base_url('/checkout/paypal/'.$order->order_number);?>" type="button" id="paynowpaypal">Proceed to payment<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            </div>
 </div>
   
  </div>

      

  </div>
  <!--/.Panel 2-->



 
</div>

</div>
<script type="text/javascript">
$('.paynowbutton').click(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();
//$('#paynow').submit();
});
</script>


</script>
