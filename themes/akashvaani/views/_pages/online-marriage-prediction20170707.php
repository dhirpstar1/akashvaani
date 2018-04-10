<div class="container qa1">
  <div class="row cntn">
    <div class="col-md-9">
      <!--Section: Blog v.1-->
      <section class="section extra-margins manglikform">
        <!--Section heading-->
        <h1 class="section-heading">Marriage prediction</h1>
        <!--First row-->
        <div class="row">
          <ol class="breadcrumb" style="background-color:#fff">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/astrology'); ?>">Astrology</a></li>
            <li class="breadcrumb-item active">Marriage prediction</li>
          </ol>
          <!--First column-->
          <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriageprediction.jpg"> <a>
              <div class="mask"></div>
              </a> </div>
          </div>
          <!--/First column-->
          <!--Second column-->
          <div class="col-md-1"></div>
          <div class="col-md-6 mb-r">
            <!--Excerpt-->
            <h3 style="font-weight:500">Marriage prediction</h3>
            <p class="myfont">Marriage is a sacred bond which creates the relationship as wife and husband between two different sexes. Marriages are made in heaven. Is it true? Of course, to some extent. It is the destiny that acts, however the individual horoscopes or birth chart will reveal about their Married life too. An Astrologer can very well predict the future married life of an individual. In our horoscope or birth chart the house in front of the ascendant has been allotted for the marriage “the seventh house”. </p>
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
      <!--Panel-->
      <div class="card text-xs-center z-depth-2" style="box-shadow:none">
        <div class="card-header sidecard white-text"> Ask From Our Expert </div>
      </div>
      <div class="card wow fadeInUp shadowless" style="visibility: visible; animation-name: fadeInUp;"> <?php echo form_open('service/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry1')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'type', 'value' => 'phone')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Marriage prediction form 1')); ?>
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
                <input type="text" id="phone" name="phone" class="form-control" required>
                <label for="phone">Phone No.</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="qsn" class="md-textarea" name="description"></textarea>
                <label for="qsn">Ask Your Question</label>
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
        url: "<?php echo site_url('service/booking'); ?>",
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
  <!--/.Panel-->
</div>
</div>
<!--Footer-->
</div>
<hr style="margin-top:3rem">
<div class="container mrgform">
  <div class="card formcard">
    <div class="card-block">
      <!--Header-->
      <div class="form-header blue-gradient">
        <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
        <h5 style="font-size: 18px;font-weight: 400;">Predict Your Marriage</h5>
        <h5 style="font-size: 14px;font-weight: 400;">Fill in the details</h5>
      </div>
      <?php echo form_open('service/generate_horoscope', array('id' => 'generate_horoscope')); ?>
      <!--Body-->
      <div class="row">
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
          <div class="md-form"> <?php echo form_input(array('id' => 'usr', 'class' => 'form-control', 'type' => 'text','name' => 'name', 'required' => 'required')); ?>
            <label for="usr">Your name</label>
          </div>
        </div>
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
          <!--Blue select-->
          <div class="row">
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv" type="text" class="form-control" name="day" style="cursor:pointer" onClick="showDiv()" onfocus="blur()" required>
                <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="dateDiv" class="col-md-4 col-xs-4 datedrop">
              <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">31</a> </div>
            </div>
            <!--/Blue select-->
            <!--Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" onClick="showDiv1()" onfocus="blur()" required>
                <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop">
              <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Dec</a> </div>
            </div>
            <!--/Blue select-->
            <div class="col-md-4 col-xs-4">
              <div class="md-form">
                <input id="mydiv2" type="text" class="form-control" name="year" style="cursor:pointer" onClick="showDiv2()" onfocus="blur()" required>
                <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspan" aria-hidden="true"></i> </label>
              </div>
            </div>
            <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop">
              <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2017</a> <a id="2016" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2016</a> <a id="2015" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2015</a> <a id="2014" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2014</a> <a id="2013" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2013</a> <a id="2012" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2012</a> <a id="2011" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2011</a> <a id="2010" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2010</a> <a id="2009" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2009</a> <a id="2008" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2008</a> <a id="2007" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2007</a> <a id="2006" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2006</a> <a id="2005" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2005</a> <a id="2004" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2004</a> <a id="2003" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2003</a> <a id="2002" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2002</a> <a id="2001" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2001</a> <a id="2000" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2000</a> <a id="1999" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1999</a> <a id="1998" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1998</a> <a id="1997" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1997</a> <a id="1996" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1996</a> <a id="1995" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1995</a> <a id="1994" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1994</a> <a id="1993" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1993</a> <a id="1992" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1992</a> <a id="1991" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1991</a> <a id="1990" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1990</a> <a id="1989" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1989</a> <a id="1988" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1988</a> <a id="1987" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1987</a> <a id="1986" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1986</a> <a id="1985" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1985</a> <a id="1984" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1984</a> <a id="1983" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1983</a> <a id="1982" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1982</a> <a id="1981" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1981</a> <a id="1980" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1980</a> <a id="1979" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1979</a> <a id="1978" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1978</a> <a id="1977" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1977</a> <a id="1976" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1976</a> <a id="1975" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1975</a> <a id="1974" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1974</a> <a id="1973" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1973</a> <a id="1972" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1972</a> <a id="1971" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1971</a> <a id="1970" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1970</a> <a id="1969" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1969</a> <a id="1968" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1968</a> <a id="1967" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1967</a> <a id="1966" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1966</a> <a id="1965" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1965</a> <a id="1964" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1964</a> <a id="1963" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1963</a> <a id="1962" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1962</a> <a id="1961" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1961</a> <a id="1960" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1960</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
          <div class="row">
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv3" type="text" class="form-control" name="hour" style="cursor:pointer" onClick="showDiv3()" onfocus="blur()" required>
                <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspan" aria-hidden="true"></i> </label>
              </div>
              <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">24</a> </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="md-form">
                <input id="mydiv4" type="text" class="form-control" name="minute" style="cursor:pointer" onClick="showDiv4()" onfocus="blur()" required>
                <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
              </div>
              <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop">
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
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/marriageprediction'); ?>",
        data: form.serialize(),
        success: function(data){
            $('#collapseResult').html(data); 
        },
         error: function(resp) { $.ajax(this); return; }
   });
});
               
               </script>
    <!--/Form with header-->
    <!--Section: Magazine v.2-->
  </div>
  <div class="horoscope_result" id="collapseResult"> </div>
  <div style="clear:both;"></div>
  <hr style="margin-top:4rem">
  <div class="row candp">
    <!--Second column-->
    <div class="col-md-12 mb-r">
      <!--Excerpt-->
      <h1 class="section-heading howorks">Marriage & Astrology</h1>
    </div>
    <!--/Second column-->
  </div>
  <div class="row">
    <div class="col-md-4">
      <!--Featured image -->
      <div class="view overlay hm-white-light z-depth-1-half healthissue"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriageissue.jpg" alt="Marriage Prediction" class="z-depth-0 issue">
        <div class="mask waves-effect waves-light"> </div>
      </div>
      <br>
    </div>
    <!--Main information-->
    <div class="col-md-7">
      <h3 style="font-weight:500">Marriage Issues</h3>
      <hr>
      <p class="myfont">Venus and Jupiter are general planets of marriage for males and females, respectively. Whether a person will have marriage problem or mental compatibility with his/her spouse can be predicted by consideration of relationship between the houses ruling the marital status and the sixth house.</p>
      <p class="myfont">Besides this, the placement of other planets and the aspects of the planets to the  houses are to be studied to know about early marriage ,late or Denial. </p>
    </div>
  </div>
  <hr>
  <div class="row fadeIn" data-wow-delay="0.4s" style="visibility: visible; margin-top:4%; animation-delay: 0.4s; animation-name: fadeIn;">
    <!--First column-->
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="mc-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-item md-pills pills-default" role="tablist">
          <li class="nav-item waves-effect waves-light"> <a id="pane131" class="nav-linka nav-link active" data-toggle="tab" href="#panel31" role="tab" aria-expanded="true"> Early Marriage</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane132" class="nav-link" data-toggle="tab" href="#panel32" role="tab" aria-expanded="false">Late Marriages</a> </li>
          <li class="nav-linka nav-item waves-effect waves-light"> <a id="pane133" class="nav-link" data-toggle="tab" href="#panel33" role="tab" aria-expanded="false">Denial of Marriage</a> </li>
        </ul>
      </div>
      <hr>
      <!--Tab panels-->
      <div class="tab-content">
        <!--Panel 1-->
        <div class="tab-pane fade active in" id="panel31" role="tabpanel" aria-expanded="true"> <br>
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none;"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/marriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Early Marriage</h2>
                  <hr>
                  <p class="myfont">There are number of factors that help to predict, an Early marriage is possible under following planetary positions;</p>
                  <p class="myfont"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Venus should be well placed in Kendra and trikona in the star of benefic planet.<br />
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Venus should not be in the company of malefic planets.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> Lagna lord should be strong or aspected to the 7th house.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> The placement of benefic planets in the 7th house.<br>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> The 2nd house should be free from affliction and with benefic rays.<br>
                  </p>
                </div>
              </div>
              <!--/First row-->
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 1-->
        <!--Panel 2-->
        <div class="tab-pane fade" id="panel32" role="tabpanel" aria-expanded="false"> <br>
          <!--First row-->
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img class="issue" src="<?php echo base_url('/assets/astrology/'); ?>/img/latemarriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400"> late marriages</h2>
                  <hr>
                  <p class="myfont">Further, late marriages may take place where there is slight malefic influence to the 7th house, 7th lord and Venus besides having benefic influences to the above</p>
                  <p class="myfont">Whenever the severe affliction involves the seventh house in the case of male natives they lack confidence in their physical power and delay the decision of marriage.</p>
                </div>
              </div>
              <!--/First row-->
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 2-->
        <!--Panel 3-->
        <div class="tab-pane fade" id="panel33" role="tabpanel" aria-expanded="false"> <br>
          <!--First row-->
          <div class="issuecontainer">
            <section class="section extra-margins">
              <!--Section heading-->
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-4 mb-r">
                  <!--Featured image-->
                  <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="<?php echo base_url('/assets/astrology/'); ?>/img/marriage.png"> <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a> </div>
                </div>
                <!--/First column-->
                <!--Main information-->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <h2 class="h2-responsive" style="font-size:1.5rem;font-weight:400">Denial of marriage</h2>
                  <hr>
                  <p class="myfont">Denial of marriage is possible where there is strong malefic influence to the 7th house, 7th lord, Venus, 2nd house, and 2nd lord.</p>
                </div>
              </div>
              <!--/First row-->
              <hr>
              <!--/Third row-->
            </section>
          </div>
          <!--/First row-->
        </div>
        <!--/.Panel 3-->
        <ol class="carousel-indicators tab-indicator">
          <li id="earlytab" data-target="#multi-item-example" data-slide-to="0" class="mdb-color active"></li>
          <li id="latetab" data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
          <li id="denialtab" data-target="#multi-item-example" data-slide-to="2" class="mdb-color"></li>
        </ol>
      </div>
      <!--/Tab panels-->
    </div>
    <div class="col-md-1"></div>
    <!--/First column-->
  </div>
</div>
         <hr class="firstheadhr">

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
        <p class="text-muted">At Akashvaani our decade experienced astrologers will guide you to find solutions for every problem and will suggest the remedies to reduce the effect for a better life. </p>
        <!--Button-->
        <a class="btn btn-lg btn-outline-white" data-toggle="modal" data-target="#myModal" style="margin-top: 25px;margin-bottom: 25px; border-radius:35px"><i style="margin-right:6px" class="fa fa-phone" aria-hidden="true"></i>Book Consultation</a> </div>
      <!--/First column-->
    </div>
    <!--/First row-->
  </div>
</div>




<!--Asked questions-->
<hr style="margin-bottom: 3rem;margin-top:3rem">
<h1 class="section-heading howorks">Most Asked Questions</h1>

<div class="container qa">
    <div class="row">
       <div class="col-md-12">
           <div class="card">
        <blockquote class="blockquote bq-primary q1">
            <p class="bq-title">Q.1 What is the reason of delay in marriage?</p>
            <p>Ans. In vedic astrology, seventh house of natal chart represents marriage and all aspects of marriage. When malefic planets impact on seventh house(house of marriage) like saturn,rahu,mars,sun,it may cause delay in marriage.  <a href="#" class="read_more">...continue read</a><span class="more_text"> Some other combinations in kundli like saturn and sun placed in seventh house. Rahu and moon,rahu and jupiter placed in seventh house may cause delay in marriage. More combination and aspect placements of planets may cause  delay in marriage. For proper guidance you should contact Akashvaani vedic astrologer research team.

                <a href="#" class="read_less">...read less</a></span></p>
                <div class="item">
                </div>
            </blockquote>
            </div>
            
           <div class="card">

            <blockquote class="blockquote bq-warning q2">
                <p class="bq-title">Q.2 What is the combination of love marriage?</p>
                <p>Ans. There are so many combinations possible for love marriage but when lord of fifth house and lord of seventh house combine in centre of trine, aspect, <a href="#" class="read_more1">...continue read</a><span class="more_text1">
 exchange in fifth and seventh house is the yoga for the love marriage. Exalted venus and good strength of venus may lead to love marriage. 
<br>
<a href="#" class="read_less1">...read less</a></span></p>
                </blockquote>
                </div>
           <div class="card">

                <blockquote class="blockquote bq-success q3">
                    <p class="bq-title">Q.3 When divorce may occur ?</p>
                    <p>Ans. When seventh house (house of marriage ) affiliated from malefic planets, it may be cause of divorce.<a href="#" class="read_more2">...continue read</a><span class="more_text2"> If significance of marriage venus and jupiter affected from malefic planets may cause divorce. Negative dasha, antardasha, may also lead to divorce. For detailed analysis,you should contact to Akashvaani research team.
                       <a href="#" class="read_less2">...read less</a></span></p>
                   </blockquote>
                   </div>
        
        
        <div class="card">

                <blockquote class="blockquote bq-warning q4">
                    <p class="bq-title">Q.4 What is the yoga of happy marriage life?</p>
                    <p>Ans. When significance of marriage venus planet in case of male and jupiter in case of female chart get good strength placement and aspect of benefic planets on the significator planet is the main reason of happy marriage life.<a href="#" class="read_more3">...continue read</a><span class="more_text3"> The placement of lord of seventh house become good and having aspect of benefic planet lead to happy marriage life. There are so many combinations of happy marriage life.
                       <a href="#" class="read_less3">...read less</a></span></p>
                   </blockquote>
                   </div>
  
                   
                   
                 
                   
                   
                        </div>
                    </div>
                   
                    
                </div>




<!--Most ask questions-->










<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h4 class="modal-title" id="myModalLabel">Online Consultation</h4>
      </div>
      <!--Body-->
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-3 indigo" role="tablist" style="display:none">
          <li class="nav-item"> <a id="step1" class="nav-link active" data-toggle="tab" href="#pane21" role="tab"><i class="fa fa-user"></i> Profile</a> </li>
          <li class="nav-item"> <a id="step2" class="nav-link" data-toggle="tab" href="#pane22" role="tab"><i class="fa fa-heart"></i> Follow</a> </li>
          <li class="nav-item"> <a id="step3" class="nav-link" data-toggle="tab" href="#pane23" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step4" class="nav-link" data-toggle="tab" href="#pane24" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step5" class="nav-link" data-toggle="tab" href="#pane25" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
          <li class="nav-item"> <a id="step6" class="nav-link" data-toggle="tab" href="#pane26" role="tab"><i class="fa fa-envelope"></i> Mail</a> </li>
        </ul>
        <!-- Tab panels -->
        <?php echo form_open('services/booking', array('class' => 'form-horizontal', 'id' => 'sendenquiry2')); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'category_id', 'value' => 1)); ?> <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_page', 'value' => 'Astrology Form 3')); ?>
        <?php echo form_input(array('type' => 'hidden', 'name' => 'reference_heading', 'value' => 'Astrology')); ?> 
        <div class="tab-content" style="padding:1rem">
          <!--Panel 1-->
          <div class="tab-pane fade in active" id="pane21" role="tabpanel">
            <p><strong>Regarding What you want to consult?</strong></p>
            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Marriage">
                <label for="checkbox1"> Marriage</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Career">
                <label for="checkbox1"> Career</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Regarding Life">
                <label for="checkbox1"> Regarding Life</label>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Health">
                <label for="checkbox1"> Health</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Business">
                <label for="checkbox1"> Business</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="checkbox" id="checkbox1" name="regarding_details[]" value="Astrology">
                <label for="checkbox1"> Astrology</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="next1" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 1-->
          <!--Panel 3-->
          <div class="tab-pane fade" id="pane23" role="tabpanel">
            <p><strong>Tell when you want to take service?</strong></p>
            <div class="row">
              <div class="col-md-12">
                <div class="bootstrap-iso">
                  <div class="container-fluid" style="padding-left:0px">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Form code begins -->
                        <div class="md-form">
                          <input type="text" id="form1" name="date" class="form-control" style="cursor:pointer">
                          <label for="form1" class="">Enter Date</label>
                        </div>
                        <div class="form-group">
                          <!-- Submit button -->
                        </div>
                        <!-- Form code ends -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:1rem">
                <p><strong>Specify your Time-slot</strong></p>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="8AM - 10AM">
                <label for="radio1">8AM - 10AM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="10AM - 12AM">
                <label for="radio1">10AM - 12AM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="12PM - 2PM">
                <label for="radio1">12PM - 2PM</label>
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="2PM - 4PM">
                <label for="radio1">2PM - 4PM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="4PM - 6PM">
                <label for="radio1">4PM - 6PM</label>
                </fieldset>
                <fieldset class="form-group">
                <input  type="radio" id="radio1" name="timeslote" value="6PM - 9PM">
                <label for="radio1">6PM - 9PM</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev2" type="button" class="btn btn-secondary">Prev</button>
              <button id="next3" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 3-->
          <!--Panel 4-->
          <div class="tab-pane fade" id="pane24" role="tabpanel">
            <p><strong>How do you want to take service?</strong></p>
            <div class="row">
              <div class="col-md-12">
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1" name="type" value="Phone">
                <label for="radio1">Phone</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1"  name="type" value="Text">
                <label for="radio1">Text</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input  type="radio" id="radio1" name="type" value="Video">
                <label for="radio1">Video</label>
                </fieldset>
                <fieldset class="form-group" style="margin-bottom:0px">
                <input type="radio" id="radio1"  name="type" value="In Person">
                <label for="radio1">In Person</label>
                </fieldset>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev3" type="button" class="btn btn-secondary">Prev</button>
              <button id="next4" type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!--/.Panel 4-->
          <!--Panel 5-->
          <div class="tab-pane fade" id="pane25" role="tabpanel">
            <p><strong>Provide your contact details</strong></p>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i>
                  <input type="text" id="form1" class="form-control" name="first_name" required>
                  <label for="form1">Your Name</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                  <input type="text" id="form2" class="form-control" name="phone" required>
                  <label for="form2">Phone No.</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form"> <i class="fa fa-envelope prefix"></i>
                  <input type="email" id="form9" class="form-control validate" name="email" required>
                  <label for="form9" data-error="wrong" data-success="right">Type your email</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button id="prev4" type="button" class="btn btn-secondary">Prev</button>
              <button type="submit" class="btn btn-primary">Next</button>
              <div id="enquiry_result2"></div>
              <button id="next5" type="button" class="btn btn-primary" style="visibility:hidden;">Next</button>
            </div>
          </div>
          <!--/.Panel 5-->
          <!--Panel 6-->
          <div class="tab-pane fade" id="pane26" role="tabpanel">
            <h2>Thank You !</h2>
            <div class="modal-footer">
              <button type="button" id="finishdone" class="btn btn-secondary" data-dismiss="modal">Done</button>
            </div>
          </div>
          <!--/.Panel 6-->
        </div>
        <?php echo form_close(); ?>
        <script>
    $('form#sendenquiry2').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $('#enquiry_result2').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('service/booking'); ?>",
        data: form.serialize(),
        success: function(data){ //alert(data); //
        $('#next5').trigger('click');
            //window.location.replace(data);    
        },
         error: function(resp) { }
   });
});
</script>
      </div>
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<hr>



<?php /*?><section class="section extra-margins" style="margin-top:65px;">
  <div class="container">
    <div class="row">
      <!--First column-->
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <!--Featured image-->
        <div class="view overlay hm-white-slight" style="box-shadow:none"> <img src="https://www.akashvaani.com/assets/astrology/img/report.jpg"> <a>
          <div class="mask waves-effect waves-light"></div>
          </a> </div>
      </div>
      <div class="col-md-6 mb-r mb-h">
        <!--Excerpt-->
        <h3 style="font-weight:600">Ask Direct Questions</h3>
        <p class="myfont">All these can be very much be predicted by Akashvaani expert Astrologers and will suggest Astro remedies to reduce the negative influences on the planets. </p>
        
       <a href="<?=base_url('/questions');?>" class="btn btn-danger waves-effect waves-light">Ask Direct Questions</a>
       
       
      </div>
    </div>
  </div>
</section><?php */?>
<hr>


<section class="footer_texture m-t-65">
  <div class="container sbcrptn">
    <div class="row">
      <div class="col-md-6 col-xs-12 footer_section_align"> <span class="text-white font18">Get Your </span><span class="pink-text font24"> daily astrological feed<span class="text-white font18">,</span> Spiritual feed</span><span class="text-white font18"></span> <span class="text-white font18">Directly In Your Inbox</span> </div>
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
        url: "<?php echo base_url('service/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
			$('#subscribereturn').html('<span class="text-white font18">'+ data +'</span>');
		$('#subscribe')[0].reset();
			
        },
         error: function(resp) {  }
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
                <p><i class="fa fa-quote-left"></i>I Was Very Worried About My Husband’s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me.</p>
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
                <p><i class="fa fa-quote-left"></i> I Was Very Worried About My Husband’s Health. He Was Not Getting Rid Of Disease. Astrologer From Akashvaani Helped Me In Finding The Problems. I Am Really Grateful To His Guidance And His Knowledge Overwhelmed Me. </p>
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
  <hr>
<section class="section" style="text-align:center">

            <!--Section heading-->
            <h2 class="h2-responsive firsthead">Related Posts</h2>
         
            <!--First row-->
            <div class="row text-center">
                <div class="col-lg-1 col-md-12 mb-r" style="margin:20px"></div>

                <!--First column-->
                <div class="col-lg-3 col-md-12 mb-r">

                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-2">

                        <img src="https://www.akashvaani.com/uploads/images/small/aaa65f8a0e3e1ac8084e2044634281a7.jpg" alt="Sample project image">

                        <a>
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="card-block">
                        <h4>Astrological Prediction for Love Marriage and Relationship</h4>
                        <p>Soul Mate! Well, we all believe in this word and we all want to meet our soul mate.</p>
                        <a href="https://www.akashvaani.com/blog/astrological-prediction-for-love-marriage-and-relationship" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a>
                    </div>

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-lg-3 col-md-6 mb-r">

                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-2">

                        <img src="https://www.akashvaani.com/uploads/images/small/de8c09615217d449a8f5ae436177182d.jpg" alt="Sample project image">

                        <a>
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="card-block">
                        <h4>Marriage Prediction According to Astrology</h4>
                        <p>Marriage is a lifetime commitment between two people and their families.</p>
                        <a href="https://www.akashvaani.com/blog/marriage-prediction-according-to-astrology" type="submit" class="btn wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Read<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></a>
                    </div>

                </div>
                <!--/Second column-->

             
            </div>
            <!--/First row-->
        </section>
</div>
<?php /*?> <div id="bottom">
      <div class="col-md-12" style="text-align:right">
      <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
      <div class="cc_banner cc_container cc_container--open">
      <a href="<?php echo base_url('/register'); ?>" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all">Ask Now</a>
      <p class="cc_message">Register Now! And Ask One Free Question To Our Top Astrologers</p>
      </div>
            </div><?php */?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGOLE_PLACE_API?>&libraries=places&callback=initAutocomplete" async defer></script>
