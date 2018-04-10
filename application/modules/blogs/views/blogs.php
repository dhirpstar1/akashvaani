<link href="<?php echo base_url('/assets'); ?>/landing/css/blog.css" rel="stylesheet">

<div style="height:150px;"></div>

<div class="container">
  <div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <!-- First column -->
    <div class="col-md-8">

      <!-- Carousel Wrapper -->
      <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-2" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-2" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-2" data-slide-to="2" class="active"></li>
        </ol>
        <!--/ Indicators -->

        <!-- Slides -->
        <div class="carousel-inner" role="listbox">
        <?php  foreach($main_articles as $key => $article):  $filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
} //print_r($filename);?>
        
          <!-- First slide -->
          <div class="carousel-item <?php if($key == 0):?>active<?php endif;?>">
            <!-- Mask color -->
            <div class="view hm-black-light">
              <img src="<?=resizedUrl(base_url(($filename)? '/uploads/images/medium/'.$filename : '/uploads/images/default.jpg'), 770, 340);?>" class="img-fluid " alt="">  
              <div class="full-bg-img">
              </div>
            </div>
            <!-- Caption -->
            <div class="carousel-caption">
              <div class="fadeInDown">
               <h3 class="h3-responsive"> <a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h3>
             </div>
           </div>
           <!--/ Caption -->
         </div>
         <!--/ First slide -->
<?php endforeach; ?>

      </div>
      <!--/ Slides -->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/ Carousel Wrapper -->

  </div>
  <!--/ First column -->

  <!-- Second column -->
  <div class="col-md-4 hidden-lg-down">
      <!-- Second row -->
      <div class="row">
       <?php foreach($top3 as $key => $article):  $filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}
if($key == 0){ $width = 380; $height = 160;}else{ $width = 185; $height = 155; }

?>
       
        <!-- First column -->
        <div class="col-md-<?php if($key == 0) { echo '12 wide';}else{ echo '6 smallS';}?>" style="padding:10px;">
          <!-- Image -->
          <div class="view hm-zoom hm-black-light z-depth-2" >
            <a href="<?=base_url('/blog/'.$article->slug);?>">
            <img src="<?=resizedUrl(base_url(($filename)? '/uploads/images/medium/'.$filename : '/uploads/images/default.jpg'), $width, $height);?>" class="img-fluid " alt="">              
              <div class="mask waves-light waves-effect waves-light">
                <p class="tile-title small-title"> <?=$article->name;?></p>
              </div>
            </a>
          </div>
          <!--/ Image -->     
        </div>
        <!--/ First column -->
<?php endforeach; ?>
        
      </div>
      <!--/ Second row--> 
    </div> 
    <!--/ Tile widget news -->

  </div>
  <!--/ Second column -->

<div class="divider-new wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
  <h3>Our Top Articles</h3>
</div>
<div class="row">
  <div class="col-lg-8">

    <!--Section: Blog v.2-->
    <section class="section extra-margins text-center mix-listing">



      <!--Second row-->
      <div class="row">
<?php foreach($articles as $article): $filename = $article->primaryimage['filename']; ?>
        <!--First column-->
        <div class="col-lg-6 col-md-12 mb-r">
          <!--Featured image-->
          <div class="view overlay hm-white-slight mb-2 blogimg">
            <img src="<?=resizedUrl(base_url(($filename)? '/uploads/images/medium/'.$filename : '/uploads/images/default.jpg'), 370, 245);?>">
            <a href="<?=base_url('/blog/'.$article->slug);?>">
              <div class="mask"></div>
            </a>
          </div>
          <!--Excerpt-->
          <h4> <a style="color:#424242" href="<?=base_url('/blog/'.$article->slug);?>"><?=substr($article->name, 0, 50);?>...</a></h4>
          <p>by <a><strong><?=$article->firstname.' '.$article->lastname; ?></strong></a>, <?=date('d/m/Y', strtotime($article->date)); ?></p>
          <p><?=$article->excerpt;?></p>
          <a class="btn btn-rounded waves-effect waves-light" href="<?=base_url('/blog/'.$article->slug);?>">Read more</a>
        </div>
        <!--/First column-->
<?php endforeach; ?>
       
      </div>
      <!--/Second row-->

     
    </section>
    <!--/Section: Blog v.2-->


 
  </div>


  <!-- sidebar -->
  <div class="col-xl-4 col-md-12 widget-column">

<?=$sidebar;?>

  </div>
  <!--  -->
</div>
</div>





   <!--Pagination dark grey-->
    <nav class="wow fadeIn" data-wow-delay="0.3s" style="animation-delay: 0.3s; animation-name: none; display:block;">
    <?=$pagination;?>
    </nav>
    <!--/.Pagination dark grey--> 


</div>
<?php /*?> <div id="bottom">
      <div class="col-md-12" style="text-align:right">
      <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
      <div class="cc_banner cc_container cc_container--open">
      <a href="<?php echo base_url('/register'); ?>" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all">Ask Now</a>
      <p class="cc_message">Register Now! And Ask One Free Question To Our Top Astrologers</p>
      </div>
            </div>
<?php */?>
