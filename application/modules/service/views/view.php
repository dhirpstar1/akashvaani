      <!-- Content -->
<div class="container">  
<!--Section: Magazine v.1-->
<section class="section magazine-section">
    <!--Section heading-->
    <h1 class="section-heading">Section title</h1>
   
    <!--First row-->
    <div class="row text-xs-left"> 
        <!--First column-->
        <div class="col-lg-6 col-md-6">
            <!--Featured news-->
            <div class="single-news">
                <!--Image-->
                <div class="view overlay hm-white-slight">
                    <img src="<?php echo base_url('/assets/astrology/'); ?>/img/bookpuja.jpg">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Excerpt-->
                <div class="news-data">
                </div>
            </div>
            <!--/Featured news-->
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-6 col-md-6">

<div class="card">
    <div class="card-header white-text pujaname">
       <?php echo $service->name; ?>
    </div>
    <div class="card-block q1">
    <div class="row">
    <div class="col-md-10">
       <h2 class="section-heading" style="margin-bottom:0px;margin-top:0px">Price - <i class="fa fa-rupee"></i> <span id="mainprice" price="<?php echo $service->price; ?>">
	   <?php echo ($service->price == '0.00' || $service->price == '') ? 'NA' : $service->price; ?></span></h2>
    </div>
    <div class="col-md-2" style="display:none;">
    <a href="#" class="read_more"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
    </div>
    </div>   
       <div class="container more_text pujaprice">
    <br>

<fieldset class="form-group">
    <input name="group1" type="radio" id="radio1" class="selectprice">
    <label for="radio1">
    Twe pandit Price - <i class="fa fa-rupee"></i> <span class="radio1" id="subprice" price="3100.00">3100</span></label>
</fieldset>

<fieldset class="form-group">
    <input name="group1" type="radio" id="radio2" class="selectprice">
    <label for="radio2">With Samagri Price - <i class="fa fa-rupee"></i> <span class="radio2" id="subprice" price="4100.00">4100</span> </label>
</fieldset>

<fieldset class="form-group">
    <input name="group1" type="radio" id="radio3" class="selectprice">
    <label for="radio3">With Music  Price - <i class="fa fa-rupee"></i> <span class="radio3" id="subprice" price="5100.00">5100</span></label>
</fieldset>
 <div class="col-md-12" style="text-align:center">
 <hr style="margin-top:1px;margin-bottom:1px;display:block">
<a href="#" class="read_less"><i class="fa fa-minus-square-o" aria-hidden="true"></i></a>
    </div>
</div>
    </div>
    </div>
<script type="application/javascript">
$('.selectprice').click(function(){
var mainprice = $('.' + $(this).attr('id')).attr('price');
//alert($('.' + $(this).attr('id')).attr('price'));
$('#mainprice').text(mainprice);
});
</script>    
    
<div class="card">
    <div class="card-block">
     <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'servicebooking')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> 
		<?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => $service->category_id)); ?>
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Puja - '.$service->name)); ?> 
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Puja')); ?> 
 		<?php echo form_input(array('type' => 'hidden', 'name' => 'service_id', 'value' => $service->id)); ?>
       <div class="row">
         <div class="col-md-6">
           <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                     <input type="text" id="name" name="first_name" class="form-control" required>
                    <label for="name">Name</label>
                </div>
         </div>
         <div class="col-md-6">
           <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <label for="email">Email</label>
                </div>
         </div>
       </div>
          <div class="row">
         <div class="col-md-6">
           <div class="md-form">
                    <i class="fa fa-phone prefix"></i>
                   <input type="text" id="phone" name="phone" class="form-control" required>
                    <label for="phone">Phone</label>
                </div>
         </div>
         <div class="col-md-6">
           <div class="md-form">
                    <i class="fa fa-calendar prefix"></i>
                    <input type="text" id="datepicker" name="date" class="form-control">
                    <label for="datepicker">Date</label>
                </div>
         </div>
       </div>
       
    <div class="row">
      <div class="col-md-12">
        <div class="md-form">
    <i class="fa fa-pencil prefix"></i>
    <textarea type="text" id="form8" class="md-textarea" name="description"></textarea>
    <label for="form8">Description</label>
</div>
      </div>
    </div>
    <div class="row" style="text-align:center">
      <button type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>

    </div>
<div id="enquiry_result" align="center"></div>
</div>
<!--/.
        </div>
        <!--/Second column-->
    </div>
     <script>
    $('form#servicebooking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //
			window.location.replace(data);	
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
</script> 
    <!--/First row-->
</section>
<!--/Section: Magazine v.1-->

</div>
