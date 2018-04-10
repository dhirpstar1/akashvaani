
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
                    <div class="col-md-4">
    
<div class="view overlay hm-white-slight">
                            <img src="<?php echo base_url('/assets/astrology/img/health-2018.png'); ?>" alt="business">
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        
  </div>

                    <!--Author Data-->
                    <div class=" col-xs-12 col-md-8"><p><?=$page->content;?>
                     </p>
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike><?=get_currency();?><?=get_key_data('ALL_ABOUT_YOUR_CAREER_IN_2018', $cccode, true);?>/-</strike></span> 
                    <span class="currnt-price">Rs.<?=get_currency();?><?=get_key_data('ALL_ABOUT_YOUR_CAREER_IN_2018', $cccode, false);?>/-</span> 
                    <span class="pdf">(PDF)</span>  
                    </div>             
                        <a id="button1" href="<?=base_url('/questions?report=10&ctype=10');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--/.Author box-->
        </section>
</div>