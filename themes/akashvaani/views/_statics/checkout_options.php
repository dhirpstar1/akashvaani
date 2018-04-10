 <div class="col-md-12">
          	<div class="col-md-6">
            <a href="javascript:void();" type="button" class="btn btn-primary paynowbutton ">Checkout</a>
            </div>
            <div class="col-md-6 ">
            For people Outside India &nbsp;&nbsp;<a href="<?=base_url('/checkout/paypal/'.$orderId);?>" type="button" id="paynowpaypal">Proceed to payment<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            </div>
 </div>
<script type="text/javascript">
$('.paynowbutton').click(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();
//$('#paynow').submit();
});
</script>