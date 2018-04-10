
<div class="container qa1">
  <div class="row cntn">
    <div class="col-md-9">
      <!--Section: Blog v.1-->
      <section class="section extra-margins">
        <!--Section heading-->
        <h1 class="section-heading" style="margin-top:0px;margin-bottom:0px">Horoscope</h1>
      </section>
    </div>
  </div>
</div>
<section class="index_center card_text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="m-t-20 bg-white breadcrumb text-center">
          <li> <a href="<?=base_url('/');?>" class="font13">Home</a> </li>
          <li> <img src="<?=base_url('/assets/horoscope/img/');?>/right-arrow1.png" alt="arrow" class="blog_right_arrow"> </li>
          <li><a href="<?=base_url('/horoscope');?>" class="font13">Horoscope</a> </li>
          <li> <img src="<?=base_url('/assets/horoscope/img/');?>/right-arrow1.png" alt="arrow" class="blog_right_arrow"> </li>
          <li><span class="active text-primary font13">Today Horoscope</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-xs-12 m-t-40"> <span class="text-primary font35"><img src="<?=base_url('/assets/horoscope/img/');?>/leo-sign.png" alt="logo missing"> <?=ucfirst($sign);?> Horoscope </span>
      <div class="clearfix visible-xs-block"></div>
      <span class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">(July 23 - August 22)</span>
      <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
        <div class="col-xs-12">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-6 elements_desc" role="tablist">
           <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#panel5" role="tab">Yesterday</a> </li>-->
            <li class="nav-item"> <a class="nav-link <?php if($extraslug == 'daily'){ echo 'active';} ?>" href="<?=base_url('/horoscopes/'.$sign.'/'.$sign.'-daily-horoscope'); ?>" role="tab"> Today</a> </li>
           <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"> Tomorrow</a> </li>-->
            <li class="nav-item"> <a class="nav-link <?php if($extraslug == 'weekly'){ echo 'active';} ?>" href="<?=base_url('/horoscopes/'.$sign.'/'.$sign.'-weekly-horoscope'); ?>" role="tab">This Week</a> </li>
            <li class="nav-item"> <a class="nav-link <?php if($extraslug == 'monthly'){ echo 'active';} ?>" href="<?=base_url('/horoscopes/'.$sign.'/'.$sign.'-monthly-horoscope'); ?>" role="tab"> This Month</a> </li>
            <li class="nav-item"> <a class="nav-link <?php if($extraslug == 'yearly'){ echo 'active';} ?>" href="<?=base_url('/horoscopes/'.$sign.'/'.$sign.'-yearly-horoscope'); ?>" role="tab"> This Year</a> </li>
          </ul>
          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 1-->
            <div class="tab-pane fade" id="panel5" role="tabpanel">
              <div class="text-primary elements_desc"><?=date('l, F dS, Y', strtotime($horoscopedetail['yesterday']->date));?></div>
              <p class="elements_desc"> <?=str_ireplace(array("\r","\n",'\r','\n',"[\'","\']",'[\'','\']'),'', $horoscopedetail['yesterday']->horoscope);?>
              <?php //print_r($horoscopedetail['yesterday']); ?>
              
               </p>
            </div>
            <!--/.Panel 1-->
            <!--Panel 2-->
            <div class="tab-pane fade <?php if($extraslug == 'daily'){ echo 'in show active';} ?> " id="panel6" role="tabpanel">
              <div class="text-primary elements_desc"><?=date('l, F dS, Y', strtotime($horoscopedetail['today']->date));?></div>
              <p class="elements_desc"> <?=str_ireplace(array("\r","\n",'\r','\n',"[\'","\']",'[\'','\']'),'', $horoscopedetail['today']->horoscope);?> </p>
            </div>
            <!--/.Panel 2-->
            <!--Panel 3-->
            <div class="tab-pane fade <?php if($extraslug == 'tomorrow'){ echo 'in show active';} ?>" id="panel7" role="tabpanel">
              <div class="text-primary elements_desc"><?=date('l, F dS, Y', strtotime($horoscopedetail['tomorrow']->date));?></div>
              <p class="elements_desc">  <?=$horoscopedetail['tomorrow']->horoscope;?> </p>
            </div>
            <div class="tab-pane fade <?php if($extraslug == 'weekly'){ echo 'in show active';} ?>" id="panel8" role="tabpanel">
              <div class="text-primary elements_desc">
			  <?php list($start, $end) = explode(' - ', $horoscopedetail['week']->week);?>
			  <?=date('l, F dS, Y', strtotime(trim($start)));?> to <?=date('l, F dS, Y', strtotime($end));?> </div>
              <p class="elements_desc">  <?=$horoscopedetail['week']->horoscope;?></p>
            </div>
            <div class="tab-pane fade <?php if($extraslug == 'monthly'){ echo 'in show active';} ?> " id="panel9" role="tabpanel">
              <div class="text-primary elements_desc"><?=$horoscopedetail['month']->month;?></div>
              <p class="elements_desc"> <?=$horoscopedetail['month']->horoscope;?> </p>
            </div>
            <div class="tab-pane fade <?php if($extraslug == 'yearly'){ echo 'in show active';} ?>" id="pane20" role="tabpanel">
              <div class="text-primary elements_desc"><?=$horoscopedetail['year']->year;?></div>
              <p class="elements_desc">  <?=$horoscopedetail['year']->horoscope;?> </p>
            </div>
            <!--/.Panel 3-->
          </div>
        </div>
      </div>
      <?php /*?><div class="horoscope-category">
        <div class="home-feature-products">
          <div class="container">
            <div class="row content-zindex  wow fadeInUp">
              <h1>Get Horoscope by Category</h1>
              <div class="mobile-swipe">
                <div class="resCarousel" data-items="1,3,5,5" data-slide="5" id="ResSlid2">
                  <div class="resCarousel-inner" style="width: 2360px;">
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/health.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>Health Horoscope</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/career.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>Career Horoscope</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/love.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>Love Horoscope</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/marriage.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>Marriage Horoscope</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/time.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>By Time</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                    <div class="item" style="width: 236px;">
                      <div class="feature-products-box" tabindex="0"> <a href="#" tabindex="-1">
                        <div class="feature-products-img text-center"> <img src="<?=base_url('/assets/horoscope/img/');?>/vedic.png"> </div>
                        <div class="feature-products-box-txt">
                          <div class="feature-products-box-title text-center">
                            <h2>Vedic Horoscope</h2>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                  </div>
                  <div class="slider-left-arrow-container"></div>
                  <div class="slider-right-arrow-container"></div>
                  <button class="leftLst" tabindex="0"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                  <button class="rightLst" tabindex="0"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><?php */?>
     <?php /*?> <div class="row m-t-26">
        <div class="col-xs-12 text-center wow pulse" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: pulse;"> <a href="love_compatibility_result.html" class="btn btn-md btn-primary ">Get Your Compatibility</a> </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-xs-12 button_margin"> <img src="<?=base_url('/assets/horoscope/img/');?>/signsingle_pic1.png" alt="image-missing" class="img-responsive center-block"> </div>
        <div class="col-sm-6 col-xs-12 button_margin"> <img src="<?=base_url('/assets/horoscope/img/');?>/signsingle_pic1.png" alt="image-missing" class="img-responsive center-block"> </div>
      </div><?php */?>
    </div>
    <div class="col-md-4 col-xs-12 m-t-40">
     <?php /*?> <div class="row">
        <div class="col-sm-12 m-t-10"> <img src="<?=base_url('/assets/horoscope/img/');?>/270.png" alt="ad" class="img-responsive center-block side-add"> </div>
      </div><?php */?>
      <div class="row">
        <div class="contactus_plugin">
       <form method="post" action="#" id="connect">
          <div class="form_stepper">
            <div class="col-sm-12 m-t-10">
              <div class="card">
                <h2>Connect to Us</h2>
                <div class="input_fields input1 col-m-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input_fields">
                  <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your Email" required>
                </div>
                <div class="input_fields">
                  <input type="text" class="form-control" id="phone" name="phone"  placeholder="Phone number" required>
                </div>
                <div class=" input_fields" id="connectreturn"></div>
                
                <div class="input_fields"> <input type="submit" class="btn btn-success" value="Go"/> 
                <!--<a id="back1" class="btn waves-effect waves-light back">Back</a>--> </div>
              </div>
              
            </div>
          </div>
          </form>
        </div>
      </div>
      <script>
	  $('form#connect').submit(function(e) {
    var form = $(this);
    e.preventDefault();
  $('#connectreturn').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
    $.ajax({
        type: "POST",
        url: "https://www.akashvaani.com/service/send_email",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            //$('#feed-container').prepend(data);
      $('#connectreturn').html('<span>Thank you for your enquiry.</span>');
    $('#connect')[0].reset();
      
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });

});
               
               </script>
     <?php /*?> <div class="row m-t-20">
        <div class="col-xs-6"> <img src="<?=base_url('/assets/horoscope/img/');?>/126.png" alt="ad" class="img-responsive center-block side-add"> </div>
        <div class="col-xs-6"> <img src="<?=base_url('/assets/horoscope/img/');?>/126.png" alt="ad" class="img-responsive center-block side-add"> </div>
      </div>
      <div class="row m-t-20">
        <div class="col-xs-6"> <img src="<?=base_url('/assets/horoscope/img/');?>/126.png" alt="ad" class="img-responsive center-block side-add"> </div>
        <div class="col-xs-6"> <img src="<?=base_url('/assets/horoscope/img/');?>/126.png" alt="ad" class="img-responsive center-block side-add"> </div>
      </div>
      <div><?php */?> </div>
    </div>
  </div>
</div>
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
              <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light"> <span> <img src="<?=base_url('/assets/horoscope/img/');?>/mail-sent.png" alt="mailicon"> </span> </button>
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
<div class="container">
  <div class="row text-center">
    <div class="col-xs-12 m-t-26 hr_bottom_align">
      <h1 class="top-post">You Might Also Like</h1>
      <hr>
    </div>
    <!--First column-->
    <div class="col-lg-3 col-md-12 mb-r">
      <!--Featured image-->
      <div class="view overlay hm-white-slight z-depth-2"> <img src="https://www.akashvaani.com/uploads/images/caches/5c3b679a3e8cdbaa215451a53e75b160_270x177.jpg" alt="Reasons to Match Kundali Before Getting Married"> <a>
        <div class="mask waves-effect waves-light"></div>
        </a> </div>
      <!--Excerpt-->
      <div class="card-block">
        <h4>Reasons to Match Kundali Before Getting Married</h4>
        <a href="https://www.akashvaani.com/blog/reasons-to-match-kundali-before-getting-married" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a> </div>
    </div>
    <!--/First column-->
    <!--Second column-->
    <div class="col-lg-3 col-md-6 mb-r">
      <!--Featured image-->
      <div class="view overlay hm-white-slight z-depth-2"> <img src="https://www.akashvaani.com/uploads/images/caches/1b37635da5a2982f71b2834d07762007_270x177.jpg" alt="Sample project image"> <a>
        <div class="mask waves-effect waves-light"></div>
        </a> </div>
      <!--Excerpt-->
      <div class="card-block">
        <h4>How Kundali Matching Works For Marriage</h4>
        <a href="https://www.akashvaani.com/blog/how-kundali-matching-works-for-marriage" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a> </div>
    </div>
    <!--/Second column-->
    <!--Third column-->
    <div class="col-lg-3 col-md-6 mb-r">
      <!--Featured image-->
      <div class="view overlay hm-white-slight z-depth-2"> <img src="https://www.akashvaani.com/uploads/images/caches/a0d2d1d88e72030a134057adedc863a8_270x177.jpg" alt="Sample project image"> <a>
        <div class="mask waves-effect waves-light"></div>
        </a> </div>
      <!--Excerpt-->
      <div class="card-block">
        <h4>Kundali Milan Tips For A Happy Married Life</h4>
        <a href="https://www.akashvaani.com/blog/kundali-milan-tips-for-a-happy-married-life" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a> </div>
    </div>
    <!--/Third column-->
    <div class="col-lg-3 col-md-12 mb-r">
      <!--Featured image-->
      <div class="view overlay hm-white-slight z-depth-2"> <img src="https://www.akashvaani.com/uploads/images/caches/5c3b679a3e8cdbaa215451a53e75b160_270x177.jpg" alt="Reasons to Match Kundali Before Getting Married"> <a>
        <div class="mask waves-effect waves-light"></div>
        </a> </div>
      <!--Excerpt-->
      <div class="card-block">
        <h4>Reasons to Match Kundali Before Getting Married</h4>
        <a href="https://www.akashvaani.com/blog/reasons-to-match-kundali-before-getting-married" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a> </div>
    </div>
  </div>
</div>
<hr>
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
            <button class="btn btn-sm btn-primary clear_btn zodiacname waves-effect waves-light">Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
        <h5>ADVERTISEMENT</h5>
        <hr>
        <div class="row">
          <div class="col-sm-12 m-t-10"> <img src="<?=base_url('/assets/horoscope/img/');?>/270.png" alt="ad" class="img-responsive center-block"> </div>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
