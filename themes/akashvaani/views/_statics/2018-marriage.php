
<link href="<?php echo base_url('/assets/reports/'); ?>/css/report.css" rel="stylesheet">

<div class="space"></div>
<div class="report-modal" data-spy="affix" data-offset-top="10">

  
</div>

<div class="container reportcontent" style="margin-top: 60px">

<section class="mb-4">

            <!--Author box-->
            <div class="author-box">
                <!--Name-->
               <h2 class="h2-responsive center-on-small-only product-name text-center"><strong><?=$seo_title;?>
</strong></h2>
                <hr>
                <div class="row">
                    <!--Avatar-->
                    <div class="col-md-6">
    
<div class="view overlay hm-white-slight">
                            <img src="<?php echo base_url('/assets/astrology/img/story-of-my-life-career,-marriage,-health-2018.png'); ?>" alt="First sample image">
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        
  </div>

                    <!--Author Data-->
                    <div class=" col-xs-12 col-md-6"><p><?=$page->content;?>
                     </p>
                       
                   
                   
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike><?=get_currency();?><?=get_key_data('2018_MARRIAGE_HEALTH_CAREER_LIFE_REPORT', $cccode, true);?>/-</strike></span> 
                    <span class="currnt-price" style="color:#0000FF;"><?=get_currency();?><?=get_key_data('2018_MARRIAGE_HEALTH_CAREER_LIFE_REPORT', $cccode, false);?>/-</span> 
                    <span class="pdf">(PDF)</span>  
                    </div>
                   
                        <a id="button1" href="<?=base_url('/questions?report=6&ctype=6');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--/.Author box-->

        </section>
</div>