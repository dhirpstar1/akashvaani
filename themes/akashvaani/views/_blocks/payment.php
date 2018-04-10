<div class="container">
<hr class="firstheadhr">
<h2 class="h2-responsive firsthead">Proceed to Payment</h2>
<section class="section feature-box">
<?php if(isset($error)):?>
<!--First row-->
<div class="row features-big">
  <div class="col-md-4"></div>
  <!--First column-->
  <div class="col-md-8 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <?=$error?>
  </div>
  <!--/First row-->
  <?php else: ?>
  <!--First row-->
  <div class="row features-big">
  <div class="col-md-4"></div>
     <div class="col-md-2">
     Name:    
     </div>
    <!--First column-->
    <div class="col-md-6 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
       <?=$link_data->name;?>
    </div>
    <div class="col-md-4"></div>
  <div class="col-md-2">
  Email:    
     </div>
    <!--First column-->
    <div class="col-md-6 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
       <?=$link_data->email;?>
    </div>
  
    <div class="col-md-4"></div>
  <div class="col-md-2">
    Phone:    
     </div>
    <!--First column-->
    <div class="col-md-6 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
       <?=$link_data->phone;?>
    </div>
      <div class="col-md-4"></div>
   <div class="col-md-2">
    Service:    
     </div>
    <!--First column-->
    <div class="col-md-6 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
       <?=$link_data->service;?>
    </div>
      <div class="col-md-4"></div>
     <div class="col-md-2">
    Amount:    
     </div>
    <!--First column-->
    <div class="col-md-6 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
       Rs. <?=$link_data->amount;?>
    </div>
  
  
  
    <div class="col-md-4"></div>
    <!--First column-->
    <div class="col-md-8 mb-r wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <button type="button" class="btn btn-success waves-effect waves-light paynowbutton">Pay Now</button>
    </div>
    <!--/First column-->
  </div>
  <!--/First row-->
  <?php endif; ?>
  </section>
</div>
<script type="text/javascript">
$('.paynowbutton').click(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();
//$('#paynow').submit();
});
</script>
