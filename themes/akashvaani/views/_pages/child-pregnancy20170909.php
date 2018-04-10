<div class="container qa1">
  <div class="row cntn">
    <div class="col-md-9">
      <!--Section: Blog v.1-->
      <section class="section extra-margins manglikform">
        <!--Section heading-->
        <h1 class="section-heading">Child & pregnancy</h1>
        <!--First row-->
        <div class="row">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
            <li class="breadcrumb-item active">Child & pregnancy</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?=resizedUrl(base_url('/assets/astrology/img/childpreg.jpg'), 345, 230); ?>"> <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500">Child & pregnancy</h3>
            <p class="myfont">Karmic & Soul Mate  !  Never underestimate the power of searching your soul mate in connection to Astrology. </p>
            <p class="myfont">The only wish and desire of every married couple should be blessed with good children. Healthy and equipped children are the gift of God to humanity, there are occasions when doctors and medical science cannot perform in the offspring of related issues. Then comes to the aid of astrology where there are many remedies and  childless couples have reported  remarkable experiences. </p>
          </div>
          <!--/Second column-->
        </div>
        <!--/First row-->
        <!--/Third row-->
      </section>
      <!--/Section: Blog v.1-->
      <!--Form with header-->
    </div>
    <div class="col-md-3 rightsidebar desktopsidebar">
      <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text"> Ask From Our Expert </div>
      </div>
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Chiled Pregnency form 1')); ?>
      <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
        <div class="card-block">
          <div class="row">
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i>
                <input type="text" id="name" name="first_name" class="form-control" required>
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                <input type="text" id="name" name="phone" class="form-control" required>
                <label for="name">Phone No.</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="form8" class="md-textarea" name="description"></textarea>
                <label for="form8">Ask Your Question</label>
              </div>
            </div>
          </div>
          <button id="ask_enquiry" type="submit" class="btn btn-primary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button><div id="enquiry_result"></div>
          <?php echo form_close(); ?>
          
        </div>
        <script>
    $('form#sendenquiry1').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
	$('#ask_enquiry').css('visibility', 'hidden'); 
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ // 
    			window.location.replace(data);	
        },
         error: function(resp) { }
   });
});
</script>
      </div>
    </div>
  </div>
  <!--Footer-->
</div>
<hr style="margin-top:3rem">
<div class="container mrgform">
  <section class="section feature-box" style="margin-top:3rem">
    <!--Section heading-->
    <h1 class="section-heading howorks" style="font-size:23px;margin-bottom:2rem">You may take our Kundali Analysis and find out about your child & Pregnancy.</h1>
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <p class="myfont">The complex and unexplained offspring can be solved with the help of Vedic methodology  and expert  Vedic astrologers. They make a detailed study of the horoscope of  and discover the barriers that prevent women from conceiving or it is difficult to maintain pregnancy. Other chances of the offspring can also be studied from the birth charts of the women. </p>
    </div>
    <div class="row features-small">
      <!--First column-->
      <div class="col-md-5 center-on-small-only"> <img src="<?=resizedUrl(base_url('/assets/astrology/img/childpregicon.png'), 320, 250); ?>" alt="Child & Pregnancy Astrology" class="z-depth-0"> </div>
      <!--/First column-->
      <!--Second column-->
      <div class="col-md-7 center-on-small" style="margin-top:30px;">
        <!--First row-->
        <div class="row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-10">
            <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Questions that can be Answered</h2>
            <p class="myfont"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Number of biological children the couple would be able to produce, <br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Probable the year of the expectation ,<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Any kind of risk i.e miscarriages or difficult pregnancies,<br>
              <i class="fa fa-angle-double-right" aria-hidden="true"></i> Chance of risk involved for the other kind of delivery procedure like normal or caesarean.</p>
          </div>
        </div>
        <!--/First row-->
        <div style="height:50px"></div>
        <!--Second row-->
        <!--/Second row-->
        <div style="height:50px"></div>
        <!--/Third row-->
      </div>
      <!--/Second column-->
    </div>
    <!--/First row-->
  </section>
  <div class="container mrgform">
    <div class="card formcard">
      <div class="card-block">
        <!--Header-->
        <div class="form-header blue-gradient">
          <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
          <h5 style="font-size: 18px;font-weight: 400;">Child Pregnancy</h5>
          <h5 style="font-size: 14px;font-weight: 400;">Fill in the details</h5>
        </div>
        <?php echo form_open('service/generate_horoscope', array('id' => 'generate_horoscope')); ?>
        <!--Body-->
        <div class="row">
          <div class="col-md-6">
            <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
            <div class="md-form"> <?php echo form_input(array('id' => 'usr', 'class' => 'form-control', 'type' => 'text','name' => 'name', 'required' => 'required')); ?>
              <label for="form3">Your name</label>
            </div>
          </div>
          <div class="col-md-6">
            <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
            <!--Blue select-->
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="md-form">
                  <input id="mydiv" type="text" class="form-control" name="day" style="cursor:pointer" onClick="showDiv()" required>
                  <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspan" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="dateDiv" class="col-md-4 datedrop">
                <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">31</a> </div>
              </div>
              <!--/Blue select-->
              <!--Blue select-->
              <div class="col-md-4 col-sm-4">
                <div class="md-form">
                  <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" onClick="showDiv1()" required>
                  <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspan" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="monthDiv" class="col-md-4 monthdrop">
                <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Dec</a> </div>
              </div>
              <!--/Blue select-->
              <div class="col-md-4 col-sm-4">
                <div class="md-form">
                  <input id="mydiv2" type="text" class="form-control" name="year" style="cursor:pointer" onClick="showDiv2()" required>
                  <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspan" aria-hidden="true"></i> </label>
                </div>
              </div>
              <div id="yearDiv" class="col-md-4 yeardrop">
                <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2017</a> <a id="2016" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2016</a> <a id="2015" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2015</a> <a id="2014" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2014</a> <a id="2013" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2013</a> <a id="2012" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2012</a> <a id="2011" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2011</a> <a id="2010" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2010</a> <a id="2009" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2009</a> <a id="2008" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2008</a> <a id="2007" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2007</a> <a id="2006" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2006</a> <a id="2005" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2005</a> <a id="2004" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2004</a> <a id="2003" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2003</a> <a id="2002" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2002</a> <a id="2001" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2001</a> <a id="2000" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2000</a> <a id="1999" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1999</a> <a id="1998" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1998</a> <a id="1997" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1997</a> <a id="1996" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1996</a> <a id="1995" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1995</a> <a id="1994" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1994</a> <a id="1993" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1993</a> <a id="1992" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1992</a> <a id="1991" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1991</a> <a id="1990" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1990</a> <a id="1989" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1989</a> <a id="1988" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1988</a> <a id="1987" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1987</a> <a id="1986" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1986</a> <a id="1985" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1985</a> <a id="1984" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1984</a> <a id="1983" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1983</a> <a id="1982" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1982</a> <a id="1981" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1981</a> <a id="1980" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1980</a> <a id="1979" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1979</a> <a id="1978" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1978</a> <a id="1977" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1977</a> <a id="1976" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1976</a> <a id="1975" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1975</a> <a id="1974" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1974</a> <a id="1973" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1973</a> <a id="1972" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1972</a> <a id="1971" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1971</a> <a id="1970" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1970</a> <a id="1969" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1969</a> <a id="1968" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1968</a> <a id="1967" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1967</a> <a id="1966" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1966</a> <a id="1965" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1965</a> <a id="1964" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1964</a> <a id="1963" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1963</a> <a id="1962" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1962</a> <a id="1961" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1961</a> <a id="1960" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1960</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
            <div class="row">
              <div class="col-md-6">
                <div class="md-form">
                  <input id="mydiv3" type="text" class="form-control" name="hour" style="cursor:pointer" onClick="showDiv3()" required>
                  <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspan" aria-hidden="true"></i> </label>
                </div>
                <div id="hourDiv" class="col-md-12 hourdrop">
                  <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">24</a> </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <input id="mydiv4" type="text" class="form-control" name="minute" style="cursor:pointer" onClick="showDiv4()" required>
                  <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
                </div>
                <div id="minuteDiv" class="col-md-12 minutedrop">
                  <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">60</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>
            <div class="md-form"> <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required')); ?> </div>
            <input type="hidden" id="latitude" name="latitude" placeholder="latitude">
            <input type="hidden" id="longitude" name="longitude" placeholder="longitude">
            <input type="hidden" id="timezone" name="timezone" placeholder="timezone">
          </div>
        </div>
         <script>
      var placeSearch, autocomplete;
      var componentForm = {locality: 'long_name'};
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      	document.getElementById('latitude').value = place.geometry.location.lat();
		document.getElementById('longitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'timezone');
    }
     function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    function eventListenerForMaps(latitude, longitude, timezone)
    { 
       $.ajax({url:"https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+(Math.round((new Date().getTime())/1000)).toString()+"&sensor=false",
}).done(function(response){
   if(response.timeZoneId != null){
	document.getElementById(timezone).value = (response.rawOffset)/3600;
   }
});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" async defer></script>
      
        <div class="text-xs-center">
          <button class="btn btn-deep-orange" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Get Prediction </button>
          <div class="col-md-12">
            <?=RETRIED?>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
      <script>
	
    $('form#generate_horoscope').submit(function(e) { 
    var form = $(this);
    e.preventDefault();
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/child_pregnancy'); ?>",
        data: form.serialize(),
        success: function(data){
            $('#collapseResult').html(data); 
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
      <!--/Form with header-->
      <!--Section: Magazine v.2-->
    </div>
  </div>
  <div class="horoscope_result" id="collapseResult"></div>
  <div style="clear:both;"></div>
  <hr style="margin-top:4rem">
</div>

<?=$get_report_section;?>

<div class="apointment">
  <div class="container">
    <!--First row-->
    <div class="row mb-3 fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
      <!--First column-->
      <div class="col-lg-8 offset-lg-2 text-xs-center smooth-scroll">
        <!--Icon-->
        <i class="fa fa-check fa-4x light-blue-text pt-1 pb-2"></i>
        <!--Title-->
        <h2 class="mb-2">Consult An Astrologer </h2>
        <!--Description-->
        <p class="text-muted">At Akashvaani our decade experienced astrologers will guide you to find solutions for every problem and will suggest the remedies to reduce the effect for a better life </p>
        <!--Button-->
        <a class="btn btn-lg btn-outline-white" data-toggle="modal" data-target="#myModal" style="margin-top: 25px;margin-bottom: 25px; border-radius:35px"><i style="margin-right:6px" class="fa fa-phone" aria-hidden="true"></i>Book Consultation</a> </div>
      <!--/First column-->
    </div>
    <!--/First row-->
  </div>
</div>
<?php echo $serviceForm;?>
<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> daily astrological feed<span class="text-white font18">,</span> Daily Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span> </div>
      <div class="col-md-6 col-xs-12 footer_section_align">
        <form method="post" action="#" id="subscribe">
          <div class="form-group">
            <div class="input-group label_align"> <?php echo form_input(array('type' => 'email', 'name' => 'email', 'placeholder' => 'Email Address', 'class' => 'form-control input-lg input_email sub_input', 'required' => 'required')); ?> <span class="input-group-addon subscribe_align">
              <button type="submit" class="subscribe btn btn-sm  waves-effect waves-light"> <span> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/mail-sent.png" alt="mailicon"> </span> </button>
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
        url: "<?php echo site_url('service/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            //$('#feed-container').prepend(data);
			$('#subscribereturn').html('<span class="text-white font18">'+ data +'</span>');
		$('#subscribe')[0].reset();
			
        },
         error: function(resp) { }
   });

});
               
               </script>
    </div>
  </div>
</section>
<div class="container">
  <!--Section: Testimonials v.4-->
  <hr class="firstheadhr">
  <h2 class="h2-responsive firsthead">What Our customers Says</h2>
  <section class="section">
    <!--Section heading-->
    <div class="row">
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">
        <!--Controls-->
        <div class="controls-top" style="margin-bottom:5%"> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a> </div>
        <!--/.Controls-->
        <!--Indicators-->
        <ol class="carousel-indicators testimonial-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active mdb-color"></li>
          <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
          <li data-target="#multi-item-example" data-slide-to="2" class="mdb-color"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner testimonial-iner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <!--First column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Pardeep,Delhi</h4>
                <p><i class="fa fa-quote-left"></i> I Wanted An Advice Regarding Marriage Issue. Found Out About Akashvaani.Com On Internet. I Called Them And In Less Than 5 Minutes I Was Talking To Expert Marriage Astrologer . I Got An Advice Based On My Birth Details On Call. It Was More Than Satisfying Experience. It Could Not Have Been Easier And Better Than This</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Sonali, Gurgaon</h4>
                <p><i class="fa fa-quote-left"></i> I Wanted An Advice Regarding Marriage Issue. Found Out About Akashvaani.Com On Internet. I Called Them And In Less Than 5 Minutes I Was Talking To Expert Marriage Astrologer . I Got An Advice Based On My Birth Details On Call. It Was More Than Satisfying Experience. It Could Not Have Been Easier And Better Than This.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
              </div>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Rahul, Delhi</h4>
                <p><i class="fa fa-quote-left"></i> Thank You Akashvaani For Giving Me Instant Service When I Was In Dilemma Of Switching My Job. They Helped In Choosing The Right Decision.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
              </div>
            </div>
            <!--/Third column-->
          </div>
          <!--/.First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <!--First column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Shikha, Gurgaon</h4>
                <p><i class="fa fa-quote-left"></i>I Was Much Tensed About My Job Success. I Got My Consultation From This Website, Believe Me Within 3 Months Of Remedies Suggested By Astrologer I Got Promoted In My Company. They Have Best Customer Service Team. </p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Sukriti, Noida</h4>
                <p><i class="fa fa-quote-left"></i> Akashvaani Is Worth Taking Service. I Was Doubtful About The Payment Security, But They Are Trustworthy. I Am Satisfied That I Have Invested At Right Place.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
              </div>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Lekha Sharma, Gurgaon</h4>
                <p><i class="fa fa-quote-left"></i> I Was Jobless For Last One Year, Irrespective Of My Qualification My Luck Was Not With Me. Then I Contacted Akashvaani.Com. They Told Me About My Dasha And A Simple Remedy. After Two Months I Got Job. I Am Amazed To See This Positive Result.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
              </div>
            </div>
            <!--/Third column-->
          </div>
          <!--/.Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <!--First column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Atul, Delhi</h4>
                <p><i class="fa fa-quote-left"></i>I Was Very Worried About My Husband�s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me.</p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </div>
              </div>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Rajbala, Gurgaon</h4>
                <p><i class="fa fa-quote-left"></i> Excellent Service Offered By Akasvaani.Com. Astrologer Heard All Problems Patiently, Guided Me About My Stars And Solutions. It Was Truly A Good Experience. </p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-full"> </i> </div>
              </div>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-4 hidden-sm-down">
              <div class="testimonial">
                <!--Avatar-->
                <!--Content-->
                <h4>Khushboo, Delhi</h4>
                <p><i class="fa fa-quote-left"></i> I Was Very Worried About My Husband�s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me. </p>
                <!--Review-->
                <div class="orange-text"> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-o"> </i> </div>
              </div>
            </div>
            <!--/Third column-->
          </div>
          <!--/.Third slide-->
        </div>
        <!--/.Slides-->
      </div>
      <!--/.Carousel Wrapper-->
    </div>
  </section>
  <!--/Section: Testimonials v.4-->
</div>
