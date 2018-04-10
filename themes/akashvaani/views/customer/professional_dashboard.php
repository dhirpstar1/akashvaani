<?php if(empty($customer['role'])): ?>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#rolemodal').modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="rolemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
             <?php echo form_open('/my-account/edit_role', 'id="my-account_edit"'); ?>
             
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title w-100" id="myModalLabel">Select Your Role</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
            
            
              <div class="col-md-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="role[]" value="Pandit"> Pandit</label>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="checkbox">
                  <label><input type="checkbox" name="role[]" value="Astrologer"> Astrologer</label>
                </div>
              </div>
              
    
              
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="submit" class="btn btn-rounded">Save</button>
            </div>
              <?php echo form_close()?>
              
        </div>
        <!--/.Content-->
    </div>
</div>
<?php endif; ?>
<!-- main -->
<div style="height:150px;"></div>
<body class="fixed-sn white-skin">
<div class="container">
  <section class="section">
    <div class="row">
         <div class="col-lg-4 col-md-12 mb-r">
        <!--Card-->
        <div class="card testimonial-card profile-card">
          <!--Background color-->
          <div class="progilr-card-up indigo"> </div>
          <!--Avatar-->
          <div class="avatar profile-avatar"><img src="<?php echo base_url('/assets/profies/thumbnail/'.(($customer['image']) ? $customer['image']:'avatar.png')); ?>" class="rounded-circle img-responsive"> </div>
          <h3 class="h3-responsive text-center"><?php echo str_replace('{name}', $customer['firstname'].' '.$customer['lastname'], lang('my_account_page_title'));?></h3>
          
             <p class="text-center grey-text"><?=$customer['about_me'];?></p>
        </div>
        <!--/.Card-->
        <div class="row">
    <div class="text-xs-center">
      
            <a href="<?php echo base_url('/my-account/edit'); ?>" class="btn btn-deep-orange waves-effect waves-light" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                Edit Profile
            </a>
        </div>
  </div>
</div>
      <div class="col-md-8 col-xs-12 mb-r">
        <!-- Button modal fullscreen -->
        <div class="row">
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg show_chart set_form" data-toggle="modal" data-target="#modal-fullscreen"> Show Charts </button>
          </div>
          <div class="col-md-6">
            <div class="md-form input-group mt-1">
              <form class="form-inline waves-effect waves-light">
                <input class="form-control ml-4 my-0 py-0" type="text" placeholder="Search">
                <button class="serach btn btn-sm ml-2 waves-effect waves-light"><i class="fa fa-search"></i> </button>
              </form>
            </div>
          </div>
        </div>
        <div class="divider-new" style="margin-top:0px">
          <h2 class="h2-responsive">All Kundali</h2>
        </div>
        <div class="col-md-12 col-xs-12" style="overflow-x:auto">
        
     <div id="booking_div">   
       <div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>  
     </div>  
</div>
 <script type="text/javascript">
		$( document ).ready(function() {
		load_bookings();
		});

function load_bookings(){
$.get("<?=base_url('my-account/my_kundalies');?>", function(data, status){
		$('#booking_div').html(data);
    	});
		
}


</script>

        <div class="modal modal-fullscreen fade" id="modal-fullscreen-chart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-backdrop fade in modal-backdrop-fullscreen" style="height: 100%;"></div>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Show Kundali</h4>
              </div>
              <div class="modal-body" id="show_kundali_chart_div"> </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
       
        <!-- Modal fullscreen -->
        <div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-backdrop fade in modal-backdrop-fullscreen" style="height: 100%;"></div>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close dismiss_model" id="disniss_model"><span aria-hidden="true" style="color:#fff">x</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Show Kundali</h4>
              </div>
              <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-pills pills-default text-center pills-modal" role="tablist">
                  <li class="nav-item"> <a class="nav-link active set_form" data-toggle="tab" id="individual" href="#div_individual" role="tab"><i class="fa fa-user fa-2x"></i><br>
                    Individual</a> </li>
                  <li class="nav-item"> <a class="nav-link set_form" data-toggle="tab" href="#div_couple" id="couple" role="tab"><i class="fa fa-heart fa-2x"></i><br>
                    Couple</a> </li>
           
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                  <!--Panel 1-->
                  <div class="tab-pane fade show active in" id="div_individual" role="tabpanel" aria-expanded="true"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default dismiss_model" id="dismiss_model">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="confirmbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
          
            <!--Body-->
            <div class="modal-body">
                Are you want to save details?
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="save_details" >OK</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
  <!--Section: Testimonials v.1-->
  <script type="text/javascript">
$('.dismiss_model').click(function(){ 
$('#confirmbox').modal('show');
});

$('#save_details').click(function(){
$('#save_kundali').trigger('click');

});

$('#close_button').click(function(){
$('#modal-fullscreen').modal('hide');
});


$('.set_form').click(function(){ 
$('#div_individual').html('<div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>');  
$.get('<?=base_url('professional_show_chart');?>/' + $(this).attr('id'), function( data ) {
  $( "#div_individual").html( data );
  //alert( "Load was performed." );
});

});

</script>
  <div class="row">
    <!-- Heading -->
    <nav class="navbar navbar-dark sidebar-heading">
      <div class="flex-center">
        <p class="white-text">Popular posts</p>
      </div>
    </nav>
    <!--/ Heading -->
    <?php foreach($populararticles as $key => $article): $filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
} ?>
 <div class="col-md-4 col-xs-4">
      <div class="single-post">
        <div class="row">
          <div class="col-md-4 col-xs-12">

            <!-- Image -->
            <div class="view overlay hm-white-slight">
              <img class="img-fluid" src="<?=base_url(($filename )? '/uploads/images/small/'.$filename  : '/uploads/images/default.jpg');?>" alt="<?=$article->primaryimage['alt']?>">
              <a>
                <div class="mask waves-light waves-effect waves-light"></div>
              </a>
            </div>
          </div>

          <!-- Excerpt -->
          <div class="col-md-8 col-xs-12 post_link">
            <h6><a class="card-text" href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
            <div class="post-data">
              <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p>
            </div>
          </div>
          <!--/ Excerpt -->
        </div>
        <!--/ First row -->
      </div>
   </div> 
    <?php endforeach; ?>
  </div>
  <div class="row">
  	<div class="text-xs-center">
      
            <a href="https://shop.akashvaani.com/articles" class="btn btn-deep-orange waves-effect waves-light" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                View More
            </a>
        </div>
  </div>
</div>
<!--  -->
<script type="text/javascript" src="<?php echo base_url('/assets'); ?>/landing/js/common.js"></script>
<script>

 $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv').hide();
}
});

 function linkselect(linkid){
    document.getElementById("mydiv").value=linkid;
     //$('#datelabel').addClass( 'active' );
 }
 function openNav() {
    document.getElementById("mySidenav").style.width = "240px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
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
$(".carousel-caption").click(function(e){
    closeNav();
});
/*function showDiv() {
 document.getElementById('serviceDiv').style.display = "block";
}*/


</script>
