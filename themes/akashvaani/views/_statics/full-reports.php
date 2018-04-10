
<link href="<?php echo base_url('/assets/reports/'); ?>/css/report.css" rel="stylesheet">
<div class="space"></div>
<div class="report-modal" data-spy="affix" data-offset-top="10">
  <div class="row">
            <!--Image column-->
                                   
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class="col-sm-9 col-xs-7">
                   <!--   <div class="col-sm-2 col-xs-2">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg">
                    </div> -->
                        <p class="top-text">The story of my Life- Your Beautiful Report. </p>
                    </div>
                     <div class="col-sm-2 col-xs-4">
                       <a id="button4" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light" style="white-space: nowrap!important;">Buy Now</a>
                    </div>
                    <!--/.Content column-->
                    <div class="col-md-1 col-xs-1" style="text-align:right">
      <span id="cross" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
                </div>
</div>

<div class="container reportcontent" style="margin-top: 60px">

<section class="mb-4">

            <!--Author box-->
            <div class="author-box">
                <!--Name-->
               <h2 class="h2-responsive center-on-small-only product-name text-center"><strong>The Story of my life</strong></h2>
                <hr>
                <div class="row">
                    <!--Avatar-->
                    <div class="col-md-4">
    
<div class="view overlay hm-white-slight">

                           <?php if($device == 'mobile'){ ?>
     <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/report_basic.png'), 300, 230); ?>" class="img-fluid" alt="">
    <?php }else{ ?>
      <img src="<?php echo base_url('/assets/astrology/img/report_basic.png'); ?>" alt="First sample image" class="img-fluid">
      <?php } ?>

                           
  

                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                         <div style="text-align: center;">
        <a id="button3" class="btn waves-effect waves-light" data-toggle="modal" data-target="#sample">What's Inside</a>
    </div>
  </div>
   <div class="col-md-1">
  </div>
                    <!--Author Data-->
                    <div class=" col-xs-12 col-md-7">
                     
                        <p>Your horoscope or Kundali gives you an insight into your Personality & life path. The method of Kundali is developed by ancient sages, which has been an important tool since ages and still very relevant in today's times for making human life better.
</p>
                        <p class="hidden-md-down">This birth Report is specially designed to give you analysis based on your Charts.This is a beautiful piece of booklet about you. You can keep as lifetime guide.

                        </p>
                   
                   
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike><?=get_currency();?><?=get_key_data('YOUR_LIFETIME_GUIDE', $cccode, true);?>/-</strike></span> 
                    <span class="currnt-price">Rs.<?=get_currency();?><?=get_key_data('YOUR_LIFETIME_GUIDE', $cccode, false);?>/-</span> 
                    <span class="pdf">(PDF)</span>  
                    </div>
                   
                        <a id="button1" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--/.Author box-->

        </section>
<hr>
<div class="knowmore_row">
<div class="row">
  <div class="col-md-4">
    
<div class="view overlay hm-white-slight">
   <?php if($device == 'mobile'){ ?>
     <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/planetary-postions.png'), 300, 230); ?>" class="img-fluid" alt="">
    <?php }else{ ?>
     <img src="<?php echo base_url('/assets/astrology/img/planetary-postions.png'); ?>" alt="First sample image" class="img-fluid">
                           
      <?php } ?>

 <a>
                            
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
  </div>
  <div class="col-md-1">
  </div>
  <div class="col-md-7 margin-top">
                    <!--Excerpt-->
                    <h2 class="h2-responsive center-on-small-only product-name"><strong>Horoscope Charts</strong></h2>
                    <p>The details of your horoscope charts, Your Lagna chart, Moon Chart & Navmansha Chart and D1 to D12 charts that would tell about every aspect of your life.
</p>
                    <a id="button1" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>

                </div>

</div>
</div>
<hr>
<div class="knowmore_row">

<div class="row">
<div class="view overlay hm-white-slight pull-right" align="center">
  <?php if($device == 'mobile'){ ?>
     <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/numerology.png'), 300, 230); ?>" class="img-fluid" alt="">
    <?php }else{ ?>
     <img src="<?php echo base_url('/assets/astrology/img/numerology.png'); ?>" alt="First sample image" class="img-fluid">
                           
      <?php } ?>

                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                            <br>
                        </div>
              <div class="col-md-1">
  </div>          
  <div class="col-md-7">
                    <!--Excerpt-->
                    <h2 class="h2-responsive center-on-small-only product-name"><strong>Numerology Analysis</strong></h2>
                    <p>Your Destiny number, Radical Number & Name number, you will get based on the numerology, which numbers are favourable to you.</p>
                    <a id="button1" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>

                </div>

  
                 <div class="col-md-4 margin-top">
    

  </div>

</div>
</div>
<hr>
<div class="knowmore_row">
<div class="row">
  <div class="col-md-4">
    
<div class="view overlay hm-white-slight">
  <?php if($device == 'mobile'){ ?>
     <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/gemstones.png'), 300, 230); ?>" class="img-fluid" alt="">
    <?php }else{ ?>
     <img src="<?php echo base_url('/assets/astrology/img/gemstones.png'); ?>" alt="First sample image" class="img-fluid">
                           
      <?php } ?>
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
  </div>
  <div class="col-md-1">
  </div>
  <div class="col-md-7 margin-top">
                    <!--Excerpt-->
                    <h2 class="h2-responsive center-on-small-only product-name"><strong>Gemstone Suggestions</strong></h2>
                    <p>Your lifestone, Benefic stone & Lucky stone. Everything about your gemstone when you should wear it, what is the right time to wear it and much more.</p>
                    <a id="button1" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>

                </div>

</div>
</div>
<hr>
<div class="knowmore_row">
<div class="row">
                 <div class="col-md-4 margin-top pull-right" style="float: right;">
    
<div class="view overlay hm-white-slight ">

 <?php if($device == 'mobile'){ ?>
     <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/manglik-dosha.png'), 300, 230); ?>" class="img-fluid" alt="">
    <?php }else{ ?>
     <img src="<?php echo base_url('/assets/astrology/img/manglik-dosha.png'); ?>" alt="First sample image" class="img-fluid">
                           
      <?php } ?>

                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
  </div> 
  <div class="col-md-1">
  </div>
  <div class="col-md-7">
                    <!--Excerpt-->
                    <h2 class="h2-responsive center-on-small-only product-name"><strong>Manglik Analysis</strong></h2>
                    <p>Manglik Analysis is very important aspect in your marriage. Here you will get complete details about the manglik status. Remedies to overcome manglik dosh and much more.</p>
                    <a id="button1" href="<?=base_url('/report?lg=en&type=story_of_life_basic_report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a>

                </div>
                 
 


</div>
</div>

</div>
<!-- Modal -->


<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if(scroll >= 580) {
        $(".report-modal").addClass("change");
    } else {
        $(".report-modal").removeClass("change");
    }
});
$("#cross").click(function(){
  $(".report-modal").hide();
});
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
function showDiv() {
 document.getElementById('serviceDiv').style.display = "block";
}


</script>