<div style="height:100px;"></div>
<div id="cartSummary">
<div class="container">
<div class="row">
  <div class="col-md-12" style="padding: 10px 0;">
      
      <ul id="qsnstepper" class="stepper stepper-horizontal">
          <li id="stepper1" class="completed">
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
          <li id="stepper3" class="active">
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
 <?php //echo '<pre>'; print_r(GC::getCart()->billing_address_id); exit;
    $cartItems = GC::getCartItems();
    $options = CI::Orders()->getItemOptions(GC::getCart()->id);

    $charges = [];

    $charges['giftCards'] = [];
    $charges['coupons'] = [];
    $charges['tax'] = [];
    $charges['shipping'] = [];
    $charges['products'] = [];

    foreach ($cartItems as $item)
    {
        if($item->type == 'gift card')
        {
            $charges['giftCards'][] = $item;
            continue;
        }
        elseif($item->type == 'coupon')
        {
            $charges['coupons'][] = $item;
            continue;
        }
        elseif($item->type == 'tax')
        {
            $charges['tax'][] = $item;
            continue;
        }
        elseif($item->type == 'shipping')
        {
            $charges['shipping'][] = $item;
            continue;
        }
        elseif($item->type == 'product')
        {
            $charges['products'][] = $item;
        }
    }
       ?>
   <?php if(GC::totalItems() == 0): ?>
  <div class="tab-pane fade in active" id="pane21" role="tabpanel" style="padding:1rem"> 
  <div class="row">
            <span class="cart-head-text">
                     <div class="col-md-12"  style=" padding:100px;">
                     Your shopping cart is empty. <a href="<?php echo base_url('/c/gemstones/ruby-gems'); ?>">Click here</a> to add products.
                     </div>
             </span>
        </div>
   </div>     
  <?php else: ?>      
<div class="tab-pane fade in active" id="pane21" role="tabpanel" style="padding:1rem">   
<div class="row">
	<div class="col-md-8">
  <div class="cart-item">
    	<div class="cart-haed">
	  
     
    <span class="cart-head-text"> My Shopping Bag (<?php echo GC::totalItems();?> Items) </span>
  
    <span class="total-price">
      Total: <?php echo format_currency(GC::getGrandTotal());?>
    </span>

  </div>
  
  
   <div class="cart-list">  <p id="summaryErrors"></p>
      <ul>
      <?php  
      $totalsaleprice = 0;
      foreach($charges['products'] as $product): //print_r($product);

        $photo = theme_img('no_picture.png', lang('no_image_available'));
        $product->images = array_values(json_decode($product->images, true));

        if(!empty($product->images[0]))
        {
            foreach($product->images as $photo)
            {
                if(isset($photo['primary']))
                {
                    $primary = $photo;
                }
            }
            if(!isset($primary))
            {
                $tmp = $product->images; //duplicate the array so we don't lose it.
                $primary = array_shift($tmp);
            }

            $photo = '<img src="'.base_url('uploads/images/small/'.$primary['filename']).'"/>';
        }
		 ?>
        <li id="<?php echo $product->id;?>">
          <div class="item-img"><?php echo $photo;?>
          </div>
          <div class="item-description clearfix">
            <div class="item-des">
             <div class="item-link">
               <a href=""><?php echo $product->name; ?></a>
             </div>
             <div class="item-detail">
             <div class="col" data-cols="4/5">
                    <?php echo (!empty($product->sku))?'<div class="cartItemSku">'.lang('sku').': '.$product->sku.'</div>':''?>
                    <?php
                    if(isset($options[$product->id]))
                    {
                        foreach($options[$product->id] as $option):?>
                            <div class="cartItemOption"><?php echo ($product->is_giftcard) ? lang('gift_card_'.$option->option_name) : $option->option_name;?> : <?php echo($option->price > 0)?'['.format_currency($option->price).']':'';?> <?php echo $option->value;?></div>
                        <?php endforeach;
                    }
                    ?>
                </div>              
               <span>
                 Qty:<strong><small><?php echo $product->quantity.' &times; '.format_currency($product->saleprice)?></small></strong>
               </span>
             </div>
            </div>
            <div class="item-des-price">
              <div class="amount">
              <div class="c-dblue total-rupees">
                <span class="strike gray original-amount"><?php echo format_currency($product->price); ?></span>
                
              </div>
              <span class="discount-new"><strong><b><?php echo format_currency($product->saleprice); ?></b></strong>
                  <span class="highlight-black discount-percentage"> (<?php echo number_format(100 - ($product->saleprice/$product->price*100), 0) ; ?> % OFF)</span>
              
              </span></div>
            </div>
          </div>
          <div class="edit-move-delete">
          <div class="actions">

              
              <div class="col-md-12">
          <div class="col-md-2 col-sm-6 col-xs-6">
          <?php  if(CI::uri()->segment(1) == 'cart' && !$product->fixed_quantity):  ?> 
                        <input class="input-sm quantityInput" style="margin:0; height:20px;" <?php echo($product->fixed_quantity)?'disabled':''?> data-product-id="<?php echo $product->id;?>" data-orig-val="<?php echo $product->quantity ?>" id="qtyInput<?php echo $product->id;?>" value="<?php echo $product->quantity ?>" type="text">
                    <?php else: ?>
                        &times; <?php echo $product->quantity; ?>
                    <?php endif;?>
          </div>
             <div class="col-md-10 col-sm-6 col-xs-6">
            <a class="text m-gray confirm-delete-item tappable pull-right" onclick="updateItem(<?php echo $product->id;?>, 0);" style="cursor:pointer">REMOVE</a>
           </div>
              </div>
    
          </div>
              <div style="clear:both;"></div>
          </div>
        </li>
        <?php $totalsaleprice = $totalsaleprice + $product->price; endforeach;?>
      </ul>
    </div>
  </div>
  </div>
    
    <div class="col-md-4">    <div class="cartSummaryTotals" >
  	<?php if(GC::totalItems() > 0): ?>
    <div class="price-detail">
    <p>PRICE DETAIL</p>
      <div class="order-summary-span br-b-grey">
      <span id="cartSummaryTotals1">
          
           <?php  //foreach($charges['products'] as $product): ?>
          
           <div class="bag-total">
      <label>Price (<?=GC::totalItems();?> Items)</label>
      <span class="value pull-right"><?php echo format_currency(GC::getGrandTotal());?> </span>
      </div>
          
          <?php //endforeach; ?>
      <?php /* ?><div class="bag-total">
      <label>Bag Total</label>
      <span class="value pull-right"><?php echo format_currency(GC::getGrandTotal());?> </span>
      </div>
          
      <div class="sub-total">
      <label>Sub Total</label>
      <span class="item-total pull-right"><?php echo format_currency(GC::getSubtotal());?></span>
      </div>
      <?php */ ?>
         <div class="Total">
          <label>Delivery Charges
          </label>
          <span class="total-fee"><span class="total-charge">FREE</span></span>
        </div> 
        <div class="Total">
          <label>Amount Payable
          </label>
          <span class="total-fee"><span class="total-charge"><?php echo format_currency(GC::getGrandTotal());?></span></span>
        </div>
   
    <div class="Total">
          <label>Your Total Savings
          </label>
          <span class="total-fee"><span class="total-charge"><?php echo format_currency($totalsaleprice - GC::getGrandTotal());?></span></span>
    </div>
           </span>
    </div>
    <div class="button-sticky-buttom">
    <button id="next_step" class="btn primary-btn btn-continue green-button clickable">BUY NOW</button>
    <a href="<?=base_url('/c/gemstones/ruby-gems');?>" class="btn primary-btn btn-continue green-button" style="background-color:#2cd2b1;">Continue Shopping</a>
    </div> 
    
    
    
</div>
  </div>
  <?php endif; ?>
    </div>
 </div>
</div>
  <div class="tab-pane fade" id="pane22" role="tabpanel">

<div class="row"><a id="prev1" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>Prev</a>

  <div class="col-md-8">
  <div class="cart-item">
 <?php if(CI::Login()->isLoggedIn(false, false)):?>  
     <div class="cart-haed">
    <span class="cart-head-text">
      Select Delivery Address
    </span>
  </div>
  <div class="address-list">

    <span id="addaddressWrapper" class="addaddressWrapper"></span>
<div id="list_address">...</div>
  
                 <div class="col-md-6"> 
                      <ul><li class=" add-address" style="height:189px;">
                  <a href="javascript:void(0);" class="addressForm" data-address-id="0">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add new address
            </a>
            </li></ul>
            </div>
   <script>
   
   
   
   
loadAddresses();
	
	function loadAddresses(){
	
	$.post('<?php echo site_url('addresses');?>', function(data){
			$('#list_address').html(data);	
			spinner('addaddressWrapper', false);
			
        });
	
	}
	
</script>

  </div>
  
  
<?php else: ?>
<div class="address-list">

		 <?php echo form_open('/customercheck', ['id'=>'customer_check']);?>
    <div class="md-form col-md-12">     
   <div class="md-form col-md-6">
    <?php echo form_input(['name'=>'email', 'type' => 'email', 'id' => 'emailaddress', 'required' => 'required', 'class' => 'form-control', 'placeholder' => 'Enter email address', 'value'=> '']);?>
    </div>
    
	<div class="md-form col-md-6">
    <button class="btn btn-primary" id="next" type="button">Next</button>
    <?php //echo form_input(['name'=>'phone', 'id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Enter phone number', 'value'=> '']);?>
    
    </div>
    
    
    </div>
    <div class="md-form col-md-12">
    <div id="checkFormWrapper"></div>
    </div>
    
             </form>    
              <script type="application/javascript">

              $(function(){
			  	  $('#emailaddress').on('change', function(event){
              if($('#emailaddress').val()){  
					 spinner('checkFormWrapper', true);
						$.post('<?=base_url('customercheck');?>', { email: $('#emailaddress').val(), time: "2pm" }, function(data){
						// console.log(data);
						 spinner('checkFormWrapper', false);
						 $('#checkFormWrapper').html(data);
									 
							
						});
          }
				});
			  
				$('#customer_check').on('submit', function(event){
					spinner('checkFormWrapper', true);
					event.preventDefault();
					$.post($(this).attr('action'), $(this).serialize(), function(data){
					 //console.log(data);
					 spinner('checkFormWrapper', false);
					 $('#checkFormWrapper').html(data);					
					});
				});
    });
</script>
</div>
<?php endif; ?>
<script>
$('#next_step').on('click', function(){
   $('#cartSummaryTotals2').html($('#cartSummaryTotals1').clone());
  window.scrollTo(0, 0);
    $('#step1').removeClass('active');
    $('#pane21').removeClass('active in');
    $('#step2').addClass('active');
    $('#pane22').addClass('active in');
    $('#stepper2').removeClass('active');
    $('#stepper2').addClass('completed');
});
   
</script>
  </div>
  </div>

 <div class="col-md-4">
  <div class="cartSummaryTotals">

	   <div class="price-detail">
    <p>PRICE DETAIL</p>
      <div class="order-summary-span br-b-grey">
      <span id="cartSummaryTotals2">...</span>
    </div>
    <div class="button-sticky-buttom">
    <button id="place_order" class="btn primary-btn btn-continue green-button clickable">BUY NOW</button>
    <a href="<?=base_url('/c/gemstones/ruby-gems');?>" class="btn primary-btn btn-continue green-button" style="background-color:#2cd2b1;">Continue Shopping</a>
      </div> 
   </div>
   
    	
  </div>
   </div>
 </div>
  </div>

    <div class="tab-pane fade" id="pane23" role="tabpanel">
     
    
                       <div class="row">
                    
                                          <div class="col-md-8"><h4 class="modal-title">Shipping Address</h4>
                                           <div id="shippingdetails_options" class="col-md-4">
                                       ...	
                                        </div>
                                        <div id="payment_options" class="col-md-8">
                                        
                                        </div>
     
                                           </div>
                                          <div class="col-md-4">
                                         
                                         
                                                     <div class="cartSummaryTotals">
                                                        <div class="price-detail">
    <p>PRICE DETAIL</p>
      <div class="order-summary-span br-b-grey">
      <span id="cartSummaryTotals3">...</span>
    </div>
    <div class="button-sticky-buttom">
<!--    <button id="place_order" class="btn primary-btn btn-continue green-button clickable">Pay Now</button>-->
      </div> 
   </div>
   
                                                        </div>                   
                                         
                                          </div>
                        </div>
    
    </div>



<!-- Modal -->
<div class="modal fade" id="add-address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
        
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Shipping Address</h4>
            </div>
            <!--Body-->
             
            	<div class="modal-body">
         			<div id="form_new"></div>
   			 </div>
         </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->
    <?php endif; ?>

  <script src='<?php echo base_url('/assets/products/js/jquery.elevatezoom.js'); ?>'></script>
  <script src='<?php echo base_url('/assets/products/js/spin.min.js'); ?>'></script>

<script>
$('#place_order').click(function(){
 if($('input[type=radio]:checked').length == 0){
       alert("Please select shipping address.");
	   return false; 
    }else{
	$('#shippingdetails_options').html($('#address_' + $('input[type=radio]:checked').closest('li').attr('id')).clone());
	//$('#address_' + $('input[type=radio]:checked').closest('li').attr('id')).trigger('click');
	}
spinner('addaddressWrapper', true);
$.get( "<?php echo site_url('checkout/submit-order');?>", function( data ) {
var result = $.parseJSON(data);
	console.log(data);
	$('#payment_options').html(result.view); 
 	
	$('#cartSummaryTotals3').html($('#cartSummaryTotals2').clone());
	$('#pane22').toggleClass('active in');
	$('#pane23').toggleClass('active in');
	$('#stepper3').toggleClass('completed');
	//spinner('addaddressWrapper', false);
});
});


var inventoryCheck = <?php echo json_encode($inventoryCheck);?>

function setInventoryErrors(checks)
{
    //remove pre-existing errors
    $('.errorAlert').removeClass('errorAlert');
    $('.summaryStockAlert').remove();
    //reprocess
    $.each(checks, function(key, val) {
        $('#cartItem-'+key).addClass('errorAlert').prepend('<div class="summaryStockAlert">'+val+'</div>');
    });
}

setInventoryErrors(inventoryCheck);

updateItemCount(<?php echo GC::totalItems();?>);

var newGrandTotalTest = <?php echo (GC::getGrandTotal() > 0)?1:0;?>;
var grandTotalTest = 0;
if(newGrandTotalTest != grandTotalTest)
{
    //getPaymentMethods();
    grandTotalTest = newGrandTotalTest; //reset grand total test.
}

$('.quantityInput').bind('blur keyup', function(e){
    if(e.type == 'blur' || e.which == 13)
    { 
        updateItem($(this).attr('data-product-id'), $(this).val(), $(this).attr('data-orig-val'));
    }
}).bind('focus', function(e){
    lastInput = $(this);
    lastValue = lastInput.val();
});
function updateItem(id, newQuantity, oldQuantity)
{
    $('#summaryErrors').html('').hide();
    if(newQuantity != oldQuantity)
    {
        var active = $(document.activeElement).attr('id');

        if(newQuantity == 0)
        {
            if(!confirm('<?php echo lang('remove_item');?>')){
                return false;
            }
            else
            {
                if(oldQuantity != undefined) //if the "remove" button is used we don't need to bother with this.
                {
                    $('#qtyInput'+id).val(oldQuantity);
                }
            }
        }
        //$('#cartSummary').spin();
		spinner('cartSummary', true);
		
		
        $.post('<?php echo site_url('cart/update-cart');?>', {'product_id':id, 'quantity':newQuantity}, function(data){

            if(data.error != undefined)
            {
                $('#summaryErrors').text(data.error).show();
				//alert('ok');
				
                //there was an error. reset it.
                lastInput.val(lastValue).focus();
            }
            else
            {
                var elem = $(document.activeElement).attr('id');
				location.reload();
               // getCartSummary(function(){
               //     $('#'+elem).focus();
               // });
            }
            
        }, 'json');
    }
}

$('#coupon').keyup(function(event){
    var code = event.keyCode || event.which;
    if(code == 13) {
        submitCoupon();
    }
});

$('#giftCard').keyup(function(event){
    var code = event.keyCode || event.which;
    if(code == 13) {
        submitGiftCard();
    }
});
   function updateItemCount(items)
{
    $('#itemCount').text(items);
}
function submitGiftCard()
{
    //$('#cartSummary').spin();
    $.post('<?php echo site_url('cart/submit-gift-card');?>', {'gift_card':$('#giftCard').val()}, function(data){
        if(data.error != undefined)
        {
            $('.giftCardMessage').html($('<div class="alert red"></div>').text(data.error).prepend('<i class="close"></i>'));
           // $('#cartSummary').spin(false);
            $('#giftCard')[0].setSelectionRange(0, $('#giftCard').val().length);
        }
        else
        {
            getCartSummary(function(){
                $('.giftCardMessage').html($('<div class="alert green"></div>').text(data.message).prepend('<i class="close"></i>'))
            })
        }

    }, 'json');
}

function submitCoupon()
{
    //$('#cartSummary').spin();
    $.post('<?php echo site_url('cart/submit-coupon');?>', {'coupon':$('#coupon').val()}, function(data){
        if(data.error != undefined)
        {
            $('.couponMessage').html($('<div class="alert red"></div>').text(data.error).prepend('<i class="close"></i>'));
           // $('#cartSummary').spin(false);
            $('#coupon')[0].setSelectionRange(0, $('#coupon').val().length);
        }
        else
        {
            getCartSummary(function(){
                $('.couponMessage').html($('<div class="alert green"></div>').text(data.message).prepend('<i class="close"></i>'))
            })
        }
    }, 'json');
}


function spinner(classname, opt){
var opts = {
  lines: 11 // The number of lines to draw
, length: 5 // The length of each line
, width: 6 // The line thickness
, radius: 10 // The radius of the inner circle
, scale: 1 // Scales overall size of the spinner
, corners: 1 // Corner roundness (0..1)
, color: '#000' // #rgb or #rrggbb or array of colors
, opacity: 0.25 // Opacity of the lines
, rotate: 37 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 1 // Rounds per second
, trail: 51 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, top: '49%' // Top position relative to parent
, left: '50%' // Left position relative to parent
, shadow: true // Whether to render a shadow
, hwaccel: true // Whether to use hardware acceleration
, position: 'absolute' // Element positioning
}
var target = document.getElementById(classname);
if(opt){
var spinner = new Spinner(opts).spin(target);
}else{ $('#'+classname).html('<br>');
}
}

</script>
