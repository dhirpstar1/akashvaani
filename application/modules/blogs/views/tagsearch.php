<link href="<?php echo base_url('/assets'); ?>/landing/css/blog.css" rel="stylesheet">
<div style="height:100px;"></div>
<div class="container">
<div class="row mb-2">
                
                <!--Carousel header-->
                <div class="col-md-12"> 
                   
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators" style="display:none;">
                            <li data-target="#carousel-example-1" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-1" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-example-1" data-slide-to="2" class=""></li>
                        </ol>
                        <!--/Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <a href="#!"><img src="<?=base_url('uploads/images/default_blog_view.jpg');?>" alt="First slide"></a>
                            </div>
                            <!--/First slide-->
                        </div>
                        <!--/Slides-->

                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/Carousel Wrapper-->

                </div>
                <!--/Carousel header-->
                
            </div>
<div class="row">
<div class="col-xl-8 col-md-12">
                   
                    <h2 class="main-heading">Browsing: <strong><?=$page_title;?></strong></h2>
                    
                    <!--Section: Blog v.3-->
                    <section class="section extra-margins">
					<?php foreach($blogs as $article): $filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}?>
                        <!--First row-->
                        <div class="row">

                            <!--First column-->
                            <div class="col-md-5 mb-r category">
                                <!--Featured image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="<?=base_url(($filename)? '/uploads/images/medium/'.$filename : '/uploads/images/default.jpg');?>">
                                    <a>
                                        <div class="mask"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/First column-->

                            <!--Second column-->
                            <div class="col-md-7 mb-r">
                                <!--Excerpt-->
                               
                                <h4><a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h4>
                                <p><?=$article->excerpt;?></p>
                                <p>by <a><strong><?=$article->firstname.' '.$article->lastname;?></strong></a>, <?=date('d/m/Y', strtotime($article->date)); ?></p>
                                <a href="<?=base_url('/blog/'.$article->slug);?>" class="btn btn-primary btn-rounded waves-effect waves-light">Read more</a>
                            </div>
                            <!--/Second column-->

                        </div>
                        <!--/First row-->
<?php endforeach; ?>
                       

                    </section>
                    <!--/Section: Blog v.3-->
                   
                    <!--Pagination dark grey-->
               
                    <!--/.Pagination dark grey--> 
                    
                </div>
  <div class="col-xl-4 col-md-12 widget-column">
<?=$sidebar;?>
  </div>
  <!--  -->
  
</div>
 
<nav class="wow fadeIn" data-wow-delay="0.3s" style="animation-delay: 0.3s; animation-name: none; display:none;">
      <ul class="pagination pg-darkgrey flex-center mb-3" style="color:#37474F">
        <!--Arrow left-->
        <li class="page-item">
          <a class="page-link waves-effect waves-effect" aria-label="Previous">
            <span aria-hidden="true">�</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>

        <!--Numbers-->
        <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

        <!--Arrow right-->
        <li class="page-item">
          <a class="page-link waves-effect waves-effect" aria-label="Next">
            <span aria-hidden="true">�</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>

</div>
