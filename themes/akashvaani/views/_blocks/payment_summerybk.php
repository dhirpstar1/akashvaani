<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="modal-header">
        <p class="payment_head">Payment Summary</p>
                <a href="javascript:void();" type="button" class="btn btn-primary float-xs-right paynowbutton">Pay Now</a>
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
              <p class="price_text">Total - <?php echo $totalprice; ?>/-</p>
            </address>
          </div>
        </div>
     
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Your Questions</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Question Asked</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
             <?php foreach ($questions as $question): ?>                                     
                  <tr>
                    <td>
                      <b><?php echo $question ?></b>                      
                    </td>
                    <td class="text-right">INR <?php echo $per_question; ?></td>
                  </tr>
              <?php endforeach; ?>               
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">INR <?php echo $subprice; ?></td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Tax</strong></td>
                    <td class="no-line text-right">INR <?php echo $taxrate; ?></td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">INR <?php echo $totalprice; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
$('.paynowbutton').click(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();

//$('#paynow').submit();
});
</script>
</div>