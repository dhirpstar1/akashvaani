<div style="height:100px;"></div>
<div class="container">
<div id="productAlerts" style="clear:both; float:right;"></div>
  <section id="productDetails">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Product</a></li>
    <li class="breadcrumb-item active"><?=substr(strip_tags($product->name), 0, 15);?>...</li>
</ol>

 <div class="row">
    <div class="col-md-6 col-xs-12">
    <div>
      <div id="gal1">
 <?php foreach($product->images as $key => $image): ?>
  <a href="javascript:void(0)" data-image="<?=resizedUrl(base_url(($image['filename']) ? 'uploads/images/full/'.$image['filename'] : '/assets/astrology/img/gemcat.jpg'), 411, 274); ?>" data-zoom-image="<?=resizedUrl(base_url(($image['filename']) ? 'uploads/images/full/'.$image['filename'] : '/assets/astrology/img/gemcat.jpg'), 555, 555); ?>">
  <img id="img_0<?=($key+2);?>" src="<?=resizedUrl(base_url(($image['filename']) ? 'uploads/images/small/'.$image['filename'] : '/assets/astrology/img/gemcat.jpg'), 50, 50); ?>">
  </a>
 <?php endforeach; ?>

</div>
<img id="zoom_09" src="<?=resizedUrl(base_url(($product->primary_image) ? 'uploads/images/full/'.$product->primary_image : '/assets/astrology/img/gemcat.jpg'), 400, 400); ?>" data-zoom-image="<?=resizedUrl(base_url(($product->primary_image) ? 'uploads/images/full/'.$product->primary_image : '/assets/astrology/img/gemcat.jpg'), 555, 555); ?>"/>

    </div>
<span class="supplier-product-code">Product code: <?=$product->sku;?></span>   
    </div>
    <?php echo form_open('cart/add-to-cart', 'id="add-to-cart"');?>
    <div class="col-md-6 col-xs-12">
      <h2 class="product-name"><?=$product->name;?></h2>
 <p class="pdp-discount-container">
 <s class=""> <?=format_currency($product->price_1); ?></s></span> <strong class="pdp-price"><?=format_currency($product->saleprice_1); ?></strong>
 </p>

<div class="action-button">
            <input type="hidden" name="cartkey" value="<?php echo CI::session()->flashdata('cartkey');?>tttt" />
            <input type="hidden" name="id" value="<?php echo $product->id?>"/>
             <input type="hidden" name="button_id" id="button_id" value="0"/>
            <?php if(count($options) > 0): ?>
                <?php foreach($options as $option):
                    $required = '';
                    if($option->required)
                    {
                        $required = ' class="required"';
                    }
                    ?>
                        <div class="col-nest col-md-6">
                            <div class="col" data-cols="1/3">
                                <label<?php echo $required;?>><b> Select <?php echo ($product->is_giftcard) ? lang('gift_card_'.$option->name) : $option->name;?></b></label>
                            </div>
                            <div class="col" data-cols="2/3">
                        <?php
                        if($option->type == 'checklist')
                        {
                            $value  = [];
                            if($posted_options && isset($posted_options[$option->id]))
                            {
                                $value  = $posted_options[$option->id];
                            }
                        }
                        else
                        {
                            if(isset($option->values[0]))
                            {
                                $value  = $option->values[0]->value;
                                if($posted_options && isset($posted_options[$option->id]))
                                {
                                    $value  = $posted_options[$option->id];
                                }
                            }
                            else
                            {
                                $value = false;
                            }
                        }

                        if($option->type == 'textfield'):?>
                            <input type="text" name="option[<?php echo $option->id;?>]" value="<?php echo $value;?>"/>
                        <?php elseif($option->type == 'textarea'):?>
                            <textarea name="option[<?php echo $option->id;?>]"><?php echo $value;?></textarea>
                        <?php elseif($option->type == 'droplist'):?>
                      
                            <select name="option[<?php echo $option->id;?>]" class="form-control">
                                <option value=""><?php echo lang('choose_option');?></option>

                            <?php foreach ($option->values as $values):
                                $selected   = '';
                                if($value == $values->id)
                                {
                                    $selected   = ' selected="selected"';
                                }?>
                                <option<?php echo $selected;?> value="<?php echo $values->id;?>">
                                    <?php if($product->is_giftcard):?>
                                        <?php echo($values->price != 0)?' (+'.format_currency($values->price).') ':''; echo lang($values->name);?>
                                    <?php else:?>
                                        <?php echo($values->price != 0)?' (+'.format_currency($values->price).') ':''; echo $values->name;?>
                                    <?php endif;?>
                                </option>
                            <?php endforeach;?>
                            </select>
           
                        <?php elseif($option->type == 'radiolist'):?>
                            <label class="radiolist">
                            <?php foreach ($option->values as $values):

                                $checked = '';
                                if($value == $values->id)
                                {
                                    $checked = ' checked="checked"';
                                }?>
                                <div>
                                    <input<?php echo $checked;?> type="radio" name="option[<?php echo $option->id;?>]" value="<?php echo $values->id;?>"/>
                                    <?php echo($values->price != 0)?'(+'.format_currency($values->price).') ':''; echo $values->name;?>
                                </div>
                            <?php endforeach;?>
                            </label>
                        <?php elseif($option->type == 'checklist'):?>
                            <label class="checklist"<?php echo $required;?>>
                            <?php foreach ($option->values as $values):

                                $checked = '';
                                if(in_array($values->id, $value))
                                {
                                    $checked = ' checked="checked"';
                                }?>
                                <div><input<?php echo $checked;?> type="checkbox" name="option[<?php echo $option->id;?>][]" value="<?php echo $values->id;?>"/>
                                <?php echo($values->price != 0 && $option->name != 'Buy a Sample')?'('.format_currency($values->price).') ':''; echo $values->name;?></div>
                            <?php endforeach; ?>
                            </label>
                        <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
<div style="clear: both;"></div>
            <div class="col-md-6 col-sm-6 col-xs-6">
            <?php if(!config_item('inventory_enabled') || config_item('allow_os_purchase') || !(bool)$product->track_stock || $product->quantity > 0) : ?>

                <?php if(!$product->fixed_quantity) : ?>
                       <button class="btn cart-btn" type="button" value="submit" onclick="addToCart($(this));"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo lang('form_add_to_cart');?></button>
                <?php else: ?>
                        <button class="btn cart-btn" type="button" value="submit" onclick="addToCart($(this));"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo lang('form_add_to_cart');?></button>
                <?php endif;?>

            <?php endif;?>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
         <button class="btn buy-btn" id="buy_now" type="button" value="submit" onclick="addToCart($(this), true);"><i class="fa fa-shopping-cart" aria-hidden="true"></i> BUY NOW</button>
			</div>
  
		</div>



<div class="col-md-12" id="productDetails_load" style="clear: both;">&nbsp;</div>

<div class="deliver-option" style="display: none;">                
<!--Accordion wrapper-->
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    <!-- Accordion card -->
    <div class="">
        <!-- Card header -->
        <div role="tab" id="headingOne" style="display:none;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3>
                    CHECK DELIVERY OPTIONS <i class="fa fa-angle-down rotate-icon"></i>
                </h3>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
               <p class="pincode-enterPincode">Please enter your PIN code to check delivery time and Cash/Card on Delivery Availability</p>
               <form autocomplete="off"><input type="text" placeholder="Enter pincode" class="pincode-code" value="" name="pincode"><input type="submit" class="pincode-check pincode-button" value="Check Pin Code"></form>
               <p class="pin-error">Not deliverable/enter correct pin code</p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->
</div>
<!--/.Accordion wrapper-->
</div>
            </form>
<div class="meta-container">


<p class="meta-taxInfo meta-info">Tax: Applicable tax on the basis of exact location &amp; discount will be charged at the time of checkout</p><p class="meta-info">100% Original Products</p><p class="meta-info"><!-- react-text: 175 -->Free Delivery on order above Rs. <!-- /react-text --><!-- react-text: 176 -->1199<!-- /react-text --></p><p class="meta-info"><span class="meta-desc">Cash on delivery might be available</span></p><p class="meta-info"><span class="meta-desc">Easy 30 days returns &amp; exchange</span></p><p class="meta-info"><span class="meta-desc">Try &amp; Buy might be available</span></p></div>
    </div>
  </div>
 </section>
    <hr>
			<div class="row">
     			<div class="description col-md-12">
                  <h4>Description</h4>
                  <?=$product->description;?>
                 </div>
			</div>


  <hr>
  <div class="more_info">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-pills pills-ins review-tab" role="tablist" id="product_tab_ul">
      <?php foreach($add_info as $key => $infoitem): ?>
      <li class="nav-item"> <a class="nav-link <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab" href="#panel<?=$infoitem->id;?>" role="tab">
        <?=$infoitem->title;?>
        </a> </li>
      <?php endforeach; ?>
      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Reviews" role="tab">Reviews</a> </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content" style="padding:25px">
      <?php foreach($add_info as $key => $infoitem): ?>
      <!--Panel 1-->
      <div class="tab-pane fade <?php if($key == 0): ?>in show active <?php endif; ?>" id="panel<?=$infoitem->id;?>" role="tabpanel"> <br>
        <!--Section: Blog v.1-->
        <section>
          <!--First row-->
          <div class="row">
            <?php if($infoitem->image): ?>
            <!--First column-->
            <div class="col-md-5 mb-r">
              <!--Featured image-->
              <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('uploads/images/full/'.$infoitem->image); ?>" class="img-fluid" alt=""> <a>
                <div class="mask waves-effect waves-light"></div>
                </a> </div>
            </div>
            <!--/First column-->
            <?php endif; ?>
            <!--Second column-->
            <div class="col-md-<?php if($infoitem->image): ?>7 <?php  else:?> 12 <?php endif; ?> mb-r">
              <!--Excerpt-->
              <p>
                <?=$infoitem->text;?>
              </p>
              <a class="btn btn-cyan">Read more</a> </div>
            <!--/Second column-->
          </div>
          <!--/First row-->
        </section>
        <!--/Section: Blog v.1-->
      </div>
      <!--/.Panel 1-->
      <?php endforeach; ?>
      <!--Panel 4-->
      <div class="tab-pane fade" id="Reviews" role="tabpanel"> <br>
         <div class="row page-section p-130-cont bg-gray">
        
        <?php foreach($reviews as $review): ?>
			<!--item-->
              <div class="col-md-6 col-sm-12">
                <div class="mb-30">
                  <div class="ts4-text-cont">
                   <?=$review->review;?>
                  </div>
                  <div class="ts4-author-cont clearfix">
                    <div class="ts4-author-img">
                    <img src="<?php echo base_url('uploads/images/full/'.$review->customer_image); ?>" class="img-circle" alt="">
                    </div>
                    <div class="ts4-author-info">
                      <div class="ts-name"><?=$review->customer_name;?></div>
                      <div class="ts-type"><?=$review->customer_company;?></div>
                    </div>
                  </div>
                </div>
              </div>
              <!--itme-->
              <?php endforeach; ?>
       		 </div>
         </div>
      <!--/.Panel 4-->
    </div>
  </div>
</div>
  <script src='<?php echo base_url('/assets/products/js/jquery.elevatezoom.js'); ?>'></script>
  <script src='<?php echo base_url('/assets/products/js/spin.min.js'); ?>'></script>
 <script>
     function addToCart(btn, type)
    {
		spinner('productDetails_load', true);
        btn.attr('disabled', true);
        var cart = $('#add-to-cart');
			
		
			
        $.post(cart.attr('action'), cart.serialize(), function(data){
		
		console.log(data);
		
            if(data.message != undefined)
            {
                $('#productAlerts').html('<div class="alert buy-btn">'+data.message+' <a href="<?php echo site_url('/cart/summary');?>"> <?php echo lang('view_cart');?></a> <i class="close"></i></div>');
                updateItemCount(data.itemCount);
                cart[0].reset();
            }
            else if(data.error != undefined)
            {
                $('#productAlerts').html('<div class="alert buy-btn">'+data.error+' <i class="close"></i></div>');
            }

           // $('.productDetails').spin(false);
		   spinner('productDetails_load', false);
            btn.attr('disabled', false);
			if(type){ window.location.href = "<?php echo site_url('/cart/summary');?>";}	
        }, 'json');
    }
	
	
	
$("#zoom_09").elevateZoom({
            gallery : "gallery_09",
            galleryActiveClass: "active"
            }); 
            
  
 $("#gal1 a").click(function( event ) {
        var smallimage = this.dataset.image;
  var largeimage = this.dataset.zoomImage;
  $("#zoom_09").attr("src",smallimage);
  $("#zoom_09").attr("data-zoom-image",largeimage);
   var ez = $('#zoom_09').data('elevateZoom'); 
  ez.swaptheimage(smallimage, largeimage); 
});
    function openFilter() {
      document.getElementById("myFilter").style.height = "100%";
    }

    function closeFilter() {
      document.getElementById("myFilter").style.height = "0%";
    }
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

  // Get the element with id="defaultOpen" and click on it
  $("body").click(function(e){
    if(e.target.className == "fa fa-bars")
    {
     openNav();
   }
  });
  $("body").click(function(e){
    if(e.offsetX > 240)
    {
     closeNav();
   }
  });
  $(".carousel-caption").click(function(e){
    closeNav();
  });



  </script>
  <script type="text/javascript">

    function openNav() {
      document.getElementById("mySidenav").style.width = "240px";
      $("#mySidenav").addClass("active");
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      $("#mySidenav").removeClass("active");
    }
    $("body").click(function(e){
      if(e.target.className == "fa fa-bars")
      {
       openNav();
     }
   });
    $("body").click(function(e){
      if(e.offsetX > 240)
      {
       closeNav();
     }
   });
   function updateItemCount(items)
{
    $('#itemCount').text(items);
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