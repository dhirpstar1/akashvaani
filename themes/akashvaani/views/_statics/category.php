<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1" class=""></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <!--Mask color-->
        <div class="view">
          <img src="<?php echo base_url('/assets/astrology/img/homebanner.jpg'); ?>" class="img-fluid" alt="">
          <div class="full-bg-img">
          </div>
        </div>
        <!--Caption-->
        <div class="carousel-caption sider-caption">
          <div class="animated fadeInDown">
            <div class="col-md-12">
              <h3 class="white-text"><span class="name ch">Book Astrologer In<br>Delhi &amp; NCR</span><br></h3>
              <h5 style="color:#484848"><span class="cp">For Marriage,Health &amp; Career</span></h5>
              <div class="col-md-12">
                <a class="btn btn-outline-white btn-rounded waves-effect waves-light explore" href="https://www.akashvaani.com/astrologer">Explore</a>
              </div>
            </div>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img src="<?php echo base_url('/assets/astrology/img/homebanner1.jpg'); ?>" class="img-fluid" alt="">
          <div class="full-bg-img">
          </div>
        </div>
        <!--Caption-->
        <div class="carousel-caption sider-caption">
         <div class="animated fadeInDown">
          <div class="col-md-12">
            <h3 class="white-text"><span class="name ch">For Marriager Astrology</span><br></h3>
            <h5 style="color:#484848"><span class="cp">Marriage Prediction - Kundali Milan</span></h5>
            <div class="col-md-12">
              <a class="btn btn-outline-white btn-rounded waves-effect waves-light explore" href="https://www.akashvaani.com/marriage-astrologer/">Explore</a>
            </div>
          </div>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!--/Second slide-->

  <!--/Third slide-->
  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  </div>

  <div class="container">
  <div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-9">
      <h2 class="main-heading">Category:<strong><?=$catdata->name;?></strong></h2>
    <section class="section author-page" style="padding-top:10px;padding-bottom:10px;">
                  <!--First row-->
                  <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                      <!--First column-->
                      <div class="col-lg-8 pb-1">
                          <!--Section sescription-->
                          <?=$catdata->description;?>
                      </div>
                      <!--/First column-->

                      <!--Second column-->
                      <div class="col-lg-4 mb-5 flex-center">

                          <!--Image-->
                          <img src="https://mdbootstrap.com/img/Photos/Others/avatar1.jpg" class="rounded-circle">

                      </div>
                      <!--/Second column-->


                  </div>
                  <!--/First row-->
                  <div class="gems_products">
  <a class="btn btn-rounded waves-effect waves-light" href="<?=base_url('category/'.$catdata->slug);?>">See All <?=$catdata->name;?> Products</a>
  </div>
              </section>
              </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
        <section class="section feature-box" id="features" style="padding-top:10px;padding-bottom:10px">

                  <!--Secion heading-->
                  <h1 class="text-center font-up font-bold mt-1 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Importance In Life</h1>
                  
                  <!--Section description-->
                  <p class="text-center font-up font-bold mb-2 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">We serve the best coffee</p>
                 
                  <!--First row-->
                  <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                      <!--First column-->
                      <div class="col-md-4">
                         
                          <!--First row-->
                          <div class="row text-center pb-2">
                              <div class="col-md-12 pb-2">
                                  <i class="fa fa-home fa-3x brown-text"></i>
                              </div>
                              <div class="col-md-12">
                                  <h4 class="feature-title">100% Natural</h4>
                                  <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                              </div>
                          </div>
                          <!--/First row-->

                          <!--Second row-->
                          <div class="row text-center pb-2">
                              <div class="col-md-12 pb-2">
                                  <i class="fa fa-umbrella fa-3x brown-text"></i>
                              </div>
                              <div class="col-md-12">
                                  <h4 class="feature-title">Always fresh</h4>
                                  <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                              </div>
                          </div>
                          <!--/Second row-->

                      </div>
                      <!--/First column-->

                      <!--Second column-->
                      <div class="col-md-4 pb-2 flex-center">
                          <img src="https://mdbootstrap.com/img/Photos/Others/coffee.jpg" alt="" class="z-depth-0">
                      </div>
                      <!--/Second column-->

                      <!--Third column-->
                      <div class="col-md-4">
                          
                          <!--First row-->
                          <div class="row text-center pb-2">
                              <div class="col-md-12 pb-2">
                                  <i class="fa fa-users fa-3x brown-text"></i>
                              </div>
                              <div class="col-md-12">
                                  <h4 class="feature-title">Organic products</h4>
                                  <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                              </div>
                          </div>
                          <!--/First row-->

                          <!--Second row-->
                          <div class="row text-center pb-2">
                              <div class="col-md-12 pb-2">
                                  <i class="fa fa-dashboard fa-3x brown-text"></i>
                              </div>
                              <div class="col-md-12">
                                  <h4 class="feature-title">Best Quality</h4>
                                  <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                              </div>
                          </div>
                          <!--/Second row-->

                      </div>
                      <!--/Third column-->
                      
                  </div>
                  <!--/First row-->

              </section>
                </div>
              </div>
            <div class="text-center">
                <a class="btn signup waves-effect waves-light" href="#">Buy Now</a>              
            </div>
            <hr>


  <div class="row">
  <h1 class="text-center font-up font-bold mt-1 wow fadeIn" style="margin-bottom:100px;"><?=$catdata->name;?> Category</h1>
  
  <?php foreach($categories as $key => $category): ?>
  <?php if($key == 4): ?> <div class="more-products col-md-12"> <?php endif; ?>
  <div class="col-md-6">
       <!--First column-->
                              <div class="col-md-5 mb-r">
                                  <!--Featured image-->
                                  <div class="view overlay hm-white-slight">
                  <img src="<?php echo base_url(($category->image) ? 'uploads/images/full/'.$category->image : '/assets/astrology/img/gemcat.jpg'); ?>" alt="<?=$category->name;?>" width="235"><a><div class="mask"></div>
                                      </a>
                                  </div>
                              </div>
                              <!--/First column-->

                              <!--Second column-->
                              <div class="col-md-7 mb-r">
                                  <!--Excerpt-->
                                  <h4><?=$category->name;?></h4>
                                  <p><?=substr($category->excerpt, 0, 100);?></p>
                                  <a class="btn btn-primary btn-rounded waves-effect waves-light" href="<?=base_url('/p/gemstones/'.$category->slug); ?>">See more</a>
                              </div>
                              <!--/Second column-->
  </div>
            
  
       
       <?php  endforeach; ?>
<?php if(count($categories) > 2): ?> </div> <?php endif; ?>
                           <div style="clear:both;"></div>                       
                          
                          <div style="text-align:center;">
  <a id="show-products" class="btn btn-primary btn-rounded waves-effect waves-light">Show more</a>
  <a id="hide-products" class="btn btn-primary btn-rounded waves-effect waves-light">Show less</a>

  </div>

  <hr>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <section id="about" class="section features-5" style="padding-top:20px;padding-bottom:10px">
  <h1 class="text-center font-up font-bold mt-1 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;margin-bottom:100px;">Top Products</h1>
                  <!--First row-->
                  <div class="row">

                      <!--First column-->
                      <div class="col-lg-5 col-md-12 mb-r center-on-small-only wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                          <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/ipad2.jpg" alt="" class="z-depth-0">
                      </div>
                      <!--/First column-->

                      <!--Second column-->
                      <div class="col-lg-7 col-md-12 center-on-small wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                          <h3 class="cyan-text">Get free support</h3>
                          <h1 class="font-big font-bold font-up mb-1-half">Powerful Material Design UI KIT</h1>
                          <p class="grey-text" align="justify">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                          <a href="#!" class="btn btn-lg btn-secondary waves-effect waves-light">Buy Now</a>
                          
                      </div>
                      <!--/Second column-->
                  </div>
                  <!--/First row-->
              </section>
              <hr>
              <section class="section features-5" style="padding-top:20px;padding-bottom:10px">

                  <!--First row-->
                  <div class="row">

                      <!--First column-->
                      <div class="col-lg-7 col-md-12 center-on-small mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                          <h3 class="cyan-text">Many free templates</h3>
                          <h1 class="font-big font-up font-bold mb-1-half">Get The Most Amazing Builder</h1>
                          <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                          <a href="#demo" data-offset="100" class="btn btn-lg btn-secondary waves-effect waves-light">Buy Now</a>
                          
                      </div>
                      <!--/First column-->
                      
                      <!--Second column-->
                      <div class="col-lg-4 col-md-12 offset-lg-1 center-on-small-only wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                          <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/ipad8.png" alt="" class="img-fluid z-depth-0">
                      </div>
                      <!--/Second column-->
                      
                  </div>
                  <!--/First row-->

              </section>
              </div>
            </div>
            <hr>

  </div>
  <div class="container" style="display:none;">
  <section class="top-posts">
  <h1 class="text-center font-up font-bold mt-1 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;margin-bottom:100px;">Top Posts</h1>
      <div class="row">
			<?php foreach($posts as $post): //print_r($post);?>

                              <!--First column-->
                              <div class="col-lg-3 col-md-12 mb-r">
                                  <!--Featured image-->
                                  <div class="view overlay hm-white-slight mb-2">
                                      <img src="<?=base_url('uploads/images/medium/'.$post->primaryimage['filename']); ?>">
                                      <a>
                                          <div class="mask waves-effect waves-light"></div>
                                      </a>
                                  </div>

                                  <!--Excerpt-->
                                  <a href="" class="indigo-text"><h5><i class="fa fa-star-half-o"></i>Lifestyle</h5></a>
                                  <a href="<?=base_url('/blog/'.$post->slug);?>"><h4><?=$post->name;?></h4></a>
                                  <p>by <a><strong>Aksahvaani</strong></a>, <?=date('d/m/Y', strtotime($post->date));?></p>
                                  <p><?=$post->excerpt;?></p>
                                  <a class="btn btn-primary btn-rounded waves-effect waves-light">Read more</a>
             </div>
          <!--/First column-->
       <?php endforeach; ?>         
     </div>
  </section>
</div>	
  </div>
  <script type="text/javascript">
  $('#show-products').click(function(){
  $('.more-products').show();
  $('#show-products').hide();
  $('#hide-products').show();
  });
  
  $('#hide-products').click(function(){
  $('.more-products').hide();
  $('#show-products').show();
  $('#hide-products').hide();
  });
  
  </script>