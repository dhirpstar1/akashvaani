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
      <div class="view">  <?php if($device == 'mobile'){ ?>
       <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/banner 3.jpg'), 600, 250); ?>" class="img-fluid" alt="">
	  <?php }else{ ?>
      <img src="<?php echo base_url('/assets/astrology/img/banner 3.jpg'); ?>" class="img-fluid" alt="">
      <?php } ?>
        <div class="full-bg-img"> </div>
      </div>
      <!--Caption-->
      <div class="carousel-caption sider-caption">
        <div class="animated fadeInDown">
          <div class="col-md-12">
            <h3 class="" style="color:#000000;"><span class="name ch">Consult Online.<br>
             Ask Question</span><br>
            </h3>
            <h5><span class="cp" style="color:#000000;">Pay Per Question</span></h5>
            <div class="col-md-12"> <a class="btn btn-rounded waves-effect waves-light explore" href="<?php echo base_url('/consult-online'); ?>">Start Now</a> </div>
          </div>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view"> <?php if($device == 'mobile'){ ?>
	   <img src="<?php echo resizedUrl(base_url('/assets/astrology/img/banner_2.jpg'), 600, 250); ?>" class="img-fluid" alt="">
	  <?php }else{ ?>
      <img src="<?php echo base_url('/assets/astrology/img/banner_2.jpg'); ?>" class="img-fluid" alt="">
      <?php } ?>
        <div class="full-bg-img"> </div>
      </div>
      <!--Caption-->
      <div class="carousel-caption sider-caption">
        <div class="animated fadeInDown">
          <div class="col-md-12">
            <h3 style="color:#000000;"><span class="name ch">The Story of<br> My Life</span><br>
            </h3>
            <h5><span class="cp" style="color:#000000;">Your lifetime guide</span></h5>
            <div class="col-md-12"> <a class="btn btn-rounded waves-effect waves-light explore" href="<?php echo base_url('/full-reports'); ?>">Explore</a> </div>
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
  <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev"> <span class="icon-prev" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next"> <span class="icon-next" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  <!--/.Controls-->
</div>
<section class="home_bg">
  <div class="container">
    <div class="row home_alignment">
      <div class="col-md-12 text-center">
        <div class="bg-white button_margin pic_margin">
          <h1 class="text-primary font35 home_padding">Free
            Daily Horoscopes</h1>
          <div class="home_head center-block"></div>
          <p class="elements_desc">What kind of day will it be for you today? Use your free horoscope to plan your day, every day -
            instantly!</p>
          <div class="row home_align">
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
            <a href="<?=base_url('horoscopes/aries/aries-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-aries"> <img src="<?=base_url('/assets/horoscope/img/aries-sign.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-aries signs_clr font16">Aries</span><br>
                <span class="signtext_clr font12">Mar 21 - Apr 19</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/taurus/taurus-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-taurus"> <img src="<?=base_url('/assets/horoscope/img/taurus.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-taurus signs_clr font16">Taurus</span><br>
                <span class="signtext_clr font12">Apr 20 - May 20</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/gemini/gemini-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-gemini"> <img src="<?=base_url('/assets/horoscope/img/gemini.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-gemini signs_clr font16">Gemini</span><br>
                <span class="signtext_clr font12">May 21 - Jun 20</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
             <a href="<?=base_url('horoscopes/cancer/cancer-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-cancer"> <img src="<?=base_url('/assets/horoscope/img/cancer.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-cancer signs_clr font16">Cancer</span><br>
                <span class="signtext_clr font12">Jun 21 - Jul 22</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/leo/leo-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-leo"> <img src="<?=base_url('/assets/horoscope/img/leo.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-leo signs_clr font16">Leo</span><br>
                <span class="signtext_clr font12">Jul 23 - Aug 22</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/virgo/virgo-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-virgo"> <img src="<?=base_url('/assets/horoscope/img/virgo.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-virgo signs_clr font16">Virgo</span><br>
                <span class="signtext_clr font12">Aug 23 - Sep 22</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/libra/libra-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-libra"> <img src="<?=base_url('/assets/horoscope/img/libra.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-libra signs_clr font16">Libra</span><br>
                <span class="signtext_clr font12">Sep 23 - Oct 22</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/scorpio/scorpio-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-scorpio"> <img src="<?=base_url('/assets/horoscope/img/scorpio.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-scorpio signs_clr font16">Scorpio</span><br>
                <span class="signtext_clr font12">Oct 23 - Nov 21</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/sagittarius/sagittarius-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-sagittarius"> <img src="<?=base_url('/assets/horoscope/img/sagittarius.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-sagittarius signs_clr font16">Sagittarius</span><br>
                <span class="signtext_clr font12">Nov 22 - Dec 21</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/capricorn/capricorn-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-capricorn"> <img src="<?=base_url('/assets/horoscope/img/capricorn.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-capricorn signs_clr font16">Capricorn</span><br>
                <span class="signtext_clr font12">Dec 22 - Jan 19</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/aquarius/aquarius-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-aquarius"> <img src="<?=base_url('/assets/horoscope/img/aquarius.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-aquarius signs_clr font16">Aquarius</span><br>
                <span class="signtext_clr font12">Jan 20 - Feb 18</span> </div>
              </a> </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown pic_margin" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
              <a href="<?=base_url('horoscopes/pisces/pisces-daily-horoscope');?>" class="main">
                <div class="sign_circle bg-pisces"> <img src="<?=base_url('/assets/horoscope/img/pisces.png');?>" alt="image-missing" class="rotate"> </div>
              
              <div class="sign_card card text-center signs_bg"> <span class="text-pisces signs_clr font16">Pisces</span><br>
                <span class="signtext_clr font12">Feb 19 - Mar 20</span> </div>
              </a> </div>
         <?php /*?>   <!--First row-->
            <div class="col-md-12 text-center">
              <div class="bg-white button_margin pic_margin">
                <h1 class="text-primary font35">Horoscopes By Category</h1>
                <div class="home_head center-block margine-bottom"></div>
                <!--/Section: Products v.4-->
              </div>
            </div>
            <!--First column-->
            <div class="col-lg-3 col-md-6 mb-r">
              <!--Collection card-->
              <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view  hm-zoom"> <img src="<?=base_url('/assets/horoscope/img/love.jpg');?>" class="img-fluid" alt="">
                  <div class="stripe dark"> <a>
                    <p>Love <i class="fa fa-chevron-right"></i></p>
                    </a> </div>
                </div>
                <!--/.Card image-->
              </div>
              <!--/.Collection card-->
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-lg-3 col-md-6 mb-r">
              <!--Collection card-->
              <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view  hm-zoom"> <img src="<?=base_url('/assets/horoscope/img/health.jpg');?>" class="img-fluid" alt="">
                  <div class="stripe light"> <a>
                    <p>Health <i class="fa fa-chevron-right"></i></p>
                    </a> </div>
                </div>
                <!--/.Card image-->
              </div>
              <!--/.Collection card-->
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-lg-3 col-md-6 mb-r">
              <!--Collection card-->
              <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view  hm-zoom"> <img src="<?=base_url('/assets/horoscope/img/career.jpg');?>" class="img-fluid" alt="">
                  <div class="stripe dark"> <a>
                    <p>Career <i class="fa fa-chevron-right"></i></p>
                    </a> </div>
                </div>
                <!--/.Card image-->
              </div>
              <!--/.Collection card-->
            </div>
            <!--/Third column-->
            <!--Fourth column-->
            <div class="col-lg-3 col-md-6 mb-r">
              <!--Collection card-->
              <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view  hm-zoom"> <img src="<?=base_url('/assets/horoscope/img/marriage.jpg');?>" class="img-fluid" alt="">
                  <div class="stripe light"> <a>
                    <p>Marriage <i class="fa fa-chevron-right"></i></p>
                    </a> </div>
                </div>
                <!--/.Card image-->
              </div>
              <!--/.Collection card-->
            </div>
            <!--/Fourth column-->
            <!--/First row--><?php */?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sign_single">
  <div class="container">
    <div class="row btn_footer">
      <div class="home_margin">
        <div class="col-xs-9">
          <h1 class="font35 text-black games_content_align m-b-25">Ask Question. Consult Online</h1>
         
          <a href="<?php echo base_url('/consult-online'); ?>" class="btn btn-primary">Get Started</a> </div>
        <div class="col-xs-3 home_circle">

        </div>
      </div>
    </div>
  </div>
</section>
<?php /*?><section class="home_bg">
  <div class="container">
    <div class="row home_alignment">
      <div class="col-md-12 text-center">
        <div class="bg-white button_margin pic_margin">
          <h1 class="text-primary font35 home_padding">Love Compatibility</h1>
          <div class="home_head center-block"></div>
          <p class="elements_desc">Find out if your partnership will go all the way. Some sun signs naturally work well together, but others need to compromise to make it work!</p>
          <div class="row home_align">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="jodiac-list1">
                  <div class="sign taurus">
                    <div class="circle bg-taurus "> <img src="<?=base_url('/assets/horoscope/img/taurus.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-taurus">Taurus</span><br>
                      <span class="font14">Apr 20 - May 20</span> </div>
                  </div>
                  <div class="sign gemini sign_display">
                    <div class="circle bg-gemini"> <img src="<?=base_url('/assets/horoscope/img/gemini.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-gemini">Gemini</span><br>
                      <span class="font14">May 21 - Jun 20</span> </div>
                  </div>
                  <div class="sign cancer sign_display">
                    <div class="circle bg-cancer"> <img src="<?=base_url('/assets/horoscope/img/cancer.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-cancer">Cancer</span><br>
                      <span class="font14">Jun 21 - Jul 22</span> </div>
                  </div>
                  <div class="sign leo sign_display">
                    <div class="circle bg-leo"> <img src="<?=base_url('/assets/horoscope/img/leo.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-leo">Leo</span><br>
                      <span class="font14">Jul 23 - Aug 22</span> </div>
                  </div>
                  <div class="sign aries sign_display">
                    <div class="circle bg-aries"> <img src="<?=base_url('/assets/horoscope/img/aries.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-aries">Aries</span><br>
                      <span class="font14">Mar 21 - Apr 19</span> </div>
                  </div>
                  <div class="sign virgo sign_display">
                    <div class="circle bg-virgo"> <img src="<?=base_url('/assets/horoscope/img/virgo.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-virgo">Virgo</span><br>
                      <span class="font14">Aug 23 - Sep 22</span> </div>
                  </div>
                  <div class="sign libra sign_display">
                    <div class="circle bg-libra"> <img src="<?=base_url('/assets/horoscope/img/libra.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-libra">Libra</span><br>
                      <span class="font14">Sep 23 - Oct 22</span> </div>
                  </div>
                  <div class="sign scorpio sign_display">
                    <div class="circle bg-scorpio"> <img src="<?=base_url('/assets/horoscope/img/scorpio.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-scorpio">Scorpio</span><br>
                      <span class="font14">Oct 23 - Nov 21</span> </div>
                  </div>
                  <div class="sign sagittarius sign_display">
                    <div class="circle bg-sagittarius"> <img src="<?=base_url('/assets/horoscope/img/sagittarius.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-sagittarius">Sagittarius</span><br>
                      <span class="font14">Nov 22 - Dec 21</span> </div>
                  </div>
                  <div class="sign capricon sign_display">
                    <div class="circle bg-capricorn"> <img src="<?=base_url('/assets/horoscope/img/capricorn.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-capricorn">Capricorn</span><br>
                      <span class="font14">Dec 22 - Jan 19</span> </div>
                  </div>
                  <div class="sign aquarius sign_display">
                    <div class="circle bg-aquarius"> <img src="<?=base_url('/assets/horoscope/img/aquarius.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-aquarius">Aquarius</span><br>
                      <span class="font14">Jan 20 - Feb 18</span> </div>
                  </div>
                  <div class="sign pisces sign_display">
                    <div class="circle bg-pisces"> <img src="<?=base_url('/assets/horoscope/img/pisces.png');?>" alt="image-missing" class="rotate"> </div>
                    <div class="love-card card text-center main"> <span class="font24 text-pisces">Pisces</span><br>
                      <span class="font14">Feb 19 - Mar 20</span> </div>
                  </div>
                </div>
                <div class="footer_select_section">
                  <input id="jodiac-sign1" list="jodiac-list1" name="jodiac-list1" placeholder="Select Jodiac Sign" onmouseover="focus()">
                  <datalist id="jodiac-list1">
                    <option value="taurus">Taurus</option>
                    <option value="aries">Aries</option>
                    <option value="gemini">Gemini</option>
                    <option value="cancer">Cancer</option>
                    <option value="leo">Leo</option>
                    <option value="virgo">Virgo</option>
                    <option value="libra">Libra</option>
                    <option value="scorpio">Scorpio</option>
                    <option value="sagittarius">Sagittarius</option>
                    <option value="capricon">Capricorn</option>
                    <option value="aquarius">Aquarius</option>
                    <option value="pisces">Pisces</option>
                  </datalist>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 heart_div"> <img src="<?=base_url('/assets/horoscope/img/valentines-heart.png');?>" class="img-responsive heart_image" alt="image-missing"> </div>
              <div class="col-xs-12 col-sm-4 jodiac-list2">
                <div class="sign1 gemini1">
                  <div class="circle bg-gemini"> <img src="<?=base_url('/assets/horoscope/img/gemini.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-gemini">Gemini</span><br>
                    <span class="font14">May 21 - Jun 20</span> </div>
                </div>
                <div class="sign1 taurus1 sign_display">
                  <div class="circle bg-taurus"> <img src="<?=base_url('/assets/horoscope/img/taurus.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-taurus">Taurus</span><br>
                    <span class="font14">Apr 20 - May 20</span> </div>
                </div>
                <div class="sign1 cancer1 sign_display">
                  <div class="circle bg-cancer"> <img src="<?=base_url('/assets/horoscope/img/cancer.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-cancer">Cancer</span><br>
                    <span class="font14">Jun 21 - Jul 22</span> </div>
                </div>
                <div class="sign1 leo1 sign_display">
                  <div class="circle bg-leo"> <img src="<?=base_url('/assets/horoscope/img/leo.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-leo">Leo</span><br>
                    <span class="font14">Jul 23 - Aug 22</span> </div>
                </div>
                <div class="sign1 aries1 sign_display">
                  <div class="circle bg-aries"> <img src="<?=base_url('/assets/horoscope/img/aries.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-aries">Aries</span><br>
                    <span class="font14">Mar 21 - Apr 19</span> </div>
                </div>
                <div class="sign1 virgo1 sign_display">
                  <div class="circle bg-virgo"> <img src="<?=base_url('/assets/horoscope/img/virgo.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-virgo">Virgo</span><br>
                    <span class="font14">Aug 23 - Sep 22</span> </div>
                </div>
                <div class="sign1 libra1 sign_display">
                  <div class="circle bg-libra"> <img src="<?=base_url('/assets/horoscope/img/libral.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-libra">Libra</span><br>
                    <span class="font14">Sep 23 - Oct 22</span> </div>
                </div>
                <div class="sign1 scorpio1 sign_display">
                  <div class="circle bg-scorpio"> <img src="<?=base_url('/assets/horoscope/img/scorpio.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-scorpio">Scorpio</span><br>
                    <span class="font14">Oct 23 - Nov 21</span> </div>
                </div>
                <div class="sign1 sagittarius1 sign_display">
                  <div class="circle bg-sagittarius"> <img src="<?=base_url('/assets/horoscope/img/sagittarius.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-sagittarius">Sagittarius</span><br>
                    <small class="font14">Nov 22 - Dec 21</small> </div>
                </div>
                <div class="sign1 capricon1 sign_display">
                  <div class="circle bg-capricorn"> <img src="<?=base_url('/assets/horoscope/img/capricorn.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-capricorn">Capricorn</span><br>
                    <span class="font14">Dec 22 - Jan 19</span> </div>
                </div>
                <div class="sign1 aquarius1 sign_display">
                  <div class="circle bg-aquarius"> <img src="<?=base_url('/assets/horoscope/img/aquarius.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-aquarius">Aquarius</span><br>
                    <span class="font14">Jan 20 - Feb 18</span> </div>
                </div>
                <div class="sign1 pisces1 sign_display">
                  <div class="circle bg-pisces"> <img src="<?=base_url('/assets/horoscope/img/pisces.png');?>" alt="image-missing" class="rotate"> </div>
                  <div class="love-card card text-center main"> <span class="font24 text-pisces">Pisces</span><br>
                    <span class="font14">Feb 19 - Mar 20</span> </div>
                </div>
                <div class="footer_select_section">
                  <input id="jodiac-sign2" list="jodiac-list2" name="jodiac-list2" placeholder="Select Jodiac Sign" onmouseover="focus()">
                  <datalist id="jodiac-list2">
                    <option value="taurus">Taurus</option>
                    <option value="aries">Aries</option>
                    <option value="gemini">Gemini</option>
                    <option value="cancer">Cancer</option>
                    <option value="leo">Leo</option>
                    <option value="virgo">Virgo</option>
                    <option value="libra">Libra</option>
                    <option value="scorpio">Scorpio</option>
                    <option value="sagittarius">Sagittarius</option>
                    <option value="capricon">Capricorn</option>
                    <option value="aquarius">Aquarius</option>
                    <option value="pisces">Pisces</option>
                  </datalist>
                </div>
              </div>
            </div>
            <div class="row m-t-26">
              <div class="col-xs-12 text-center wow pulse" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: pulse;"> <a href="love_compatibility_result.html" class="btn btn-md btn-primary ">Get Your Compatibility</a> </div>
            </div>
          </div>
          <!--/First row-->
        </div>
      </div>
    </div>
  </div>
  </div>
</section><?php */?>
<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> Daily Astrological feed<span class="text-white font18">,</span> Daily Spiritual feed </span><span class="text-white font18"></span><span class="text-white font18">Directly In Your Inbox</span> </div>
      <div class="col-md-6 col-xs-12 footer_section_align">
        <form method="post" action="#" id="subscribe">
          <div class="form-group">
            <div class="input-group label_align">
              <input type="email" name="email" value="" placeholder="Email Address" class="form-control input-lg input_email sub_input" required="required">
              <span class="input-group-addon subscribe_align">
              <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light"> <span> <img src="<?=base_url('/assets/horoscope/img/mail-sent.png');?>" alt="mailicon"> </span> </button>
              </span> </div>
          </div>
          <div id="subscribereturn"></div>
        </form>
      </div>
      <script>
         
         
               $('form#subscribe').submit(function(e) {
    var form = $(this);
    e.preventDefault();
  $('#subscribereturn').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
    $.ajax({
        type: "POST",
        url: "https://www.akashvaani.com/service/subscribe",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            //$('#feed-container').prepend(data);
      $('#subscribereturn').html('<span class="text-white font18">'+ data +'</span>');
    $('#subscribe')[0].reset();
      
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });

});
               
               </script>
    </div>
  </div>
</section>
<?php /*?><section class="footer_bg">
  <div class="container footer_align">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
        <h5>WESTERN ASTROLOGY</h5>
        <hr>
        <ul>
          <li><a href="#">My Daily Horoscope </a></li>
          <li><a href="#">My Weekly Horoscope</a></li>
          <li><a href="#">My Monthly Horoscope</a></li>
          <li><a href="#">My Love Horoscope</a></li>
          <li><a href="#">My Career Horoscope</a></li>
          <li><a href="#">My Health Horoscope</a></li>
          <li><a href="love_compatibility_result.html">My Love Compatibility</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
        <h5>Vedic Horoscope</h5>
        <hr>
        <ul>
          <li><a href="games.html">Daily Career Tarot</a></li>
          <li><a href="games.html">Instant Answer Tarot</a></li>
          <li><a href="games.html">Power Tarot</a></li>
          <li><a href="games.html">Angel Tarot Reading</a></li>
          <li><a href="games.html">Zen Tarot Reading</a></li>
          <li><a href="games.html">White Magic Tarot</a></li>
          <li><a href="games.html">Egyptian Tarot</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
        <h5>ZODIAC SIGN FINDER</h5>
        <hr>
        <p class="p-t-5">The Zodiac is made up of 12 Sun Signs. Your Date of Birth determines which one you are:</p>
        <div class="col-md-12 footer_select_section">
          <input list="month-list" name="month-list" placeholder="Select Month" onmouseover="focus()">
          <datalist id="month-list">
            <option value="Jan">Jan</option>
            <option value="Feb">Feb</option>
            <option value="Mar">Mar</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="July">July</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec<">Dec</option>
          </datalist>
          <div class="footer_select_section">
            <input list="date-list" name="date-list" placeholder="Select Day" onmouseover="focus()">
            <datalist id="date-list">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </datalist>
            <button class="btn btn-sm btn-primary clear_btn zodiacname">Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
        <h5>ADVERTISEMENT</h5>
        <hr>
        <div class="row">
          <div class="col-sm-12 m-t-10"> <img src="<?=base_url('/assets/horoscope/img/270.png');?>" alt="ad" class="img-responsive center-block"> </div>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
