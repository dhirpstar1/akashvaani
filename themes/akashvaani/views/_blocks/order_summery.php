<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="modal-header">
        <p class="payment_head">Payment Summary</p>

 <?php if($cccode == 'IN'){ ?>
<a href="javascript:void();" type="button" class="btn btn-primary float-xs-right paynowbutton">Pay Now</a><br />
     <?php }else{ ?>

 <a href="<?=base_url('/service/pay_now/'.$optionsdata['booking_id']);?>" type="button" class="btn btn-primary float-xs-right" >Pay Now</a>

     <?php } ?>

       
            </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
              Name - <?php echo $data['first_name'];?><br>
              E-Mail - <?php echo $data['email'];?><br>
              Contact no. - (+91)<?php echo $data['phone'];?><br>
            </address>
          </div>
           <div class="col-xs-6">
            <address class="float-xs-right">
              <p class="price_text">Total - <?=get_currency();?><?php echo $totalprice; ?></p>
              <?php if($free_question):?>
               <div>(One question is free.)</div>
              <?php endif; ?> 
            </address>
          </div>
        </div>
     
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Your Order</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Name</strong></td>
                      <td class="text-right" colspan="2"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                               
                  <tr>
                    <td>
                      <b><?php echo $question ?></b>                      
                    </td>
                    <td class="text-right" colspan="2"><?=get_currency();?><?php echo $per_question; ?> 
                                 

                    </td>
                  </tr>
         
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right"><?=get_currency();?><?php echo $subprice; ?></td>
                  </tr>
                 
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right"><?=get_currency();?><?=$totalprice; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-12">
          <div class="modal-footer">
      <!--<button id="prev3" type="button" class="btn prv">Prev</button>-->
  <?php if($cccode == 'IN'){ ?>
<a href="javascript:void();" type="button" class="btn btn-primary float-xs-right paynowbutton">Pay Now</a><br />
     <?php }else{ ?>

 <a href="<?=base_url('/service/pay_now/'.$optionsdata['booking_id']);?>" type="button" class="btn btn-primary float-xs-right" >Pay Now</a>

     <?php } ?>      
      </div>
         </div>
        </div>
      </div>
    </div>
</div>
 <?php if($button): ?>
<script type="text/javascript"> 
 
 $( document ).ready(function() {
   $('#paynowbutton').text('Done');
   $('#paynowbutton').attr('href', '<?=base_url('/thankyou');?>');
     
   });
 
 
 </script>
        <?php else: ?>
<script type="text/javascript">
$('.paynowbutton').click(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();

//$('#paynow').submit();
});
</script>
 <?php  endif; ?>  
</div>