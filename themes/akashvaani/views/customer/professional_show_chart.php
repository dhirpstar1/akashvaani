<style type="text/css">
.pac-container {
    z-index: 10000 !important;
    
}

</style>
<?php if($type == 'couple'): ?>
<!--Panel 2-->
<div class="tab-pane fade show active in" id="panel32" role="tabpanel" aria-expanded="true"> <br>
  <div class="container kundaliform">
    <div class="card formcard">
      <div class="card-block">
       <?php echo form_open('service/generate_matchmaking_new', array('id' => 'matchmaking')); ?> 
       <?php echo form_input(array('type' => 'hidden','name' => 'prfessional_id', 'value' => $logged_customer->id)); ?>
        <?php echo form_input(array('type' => 'hidden','name' => 'type', 'value' => 2)); ?>
          <!--Header-->
          <div class="form-header blue-gradient">
            <h3 style="font-weight: 500;letter-spacing: 1px; margin-bottom:10px">Kundli Analysis</h3>
            <h5 style="font-size: 18px;font-weight: 400;">Predict Your Marriage</h5>
            <h5 style="font-size: 14px;font-weight: 400;">Fill in the details</h5>
          </div>
          <!--Body-->
          <div class="row">
            <div class="col-md-6 col-xs-12 boyform">
              <div class="male" style="text-align:center;font-size:30px"> <i class="fa fa-male" aria-hidden="true">Male</i> </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
                  <div class="md-form">
                    <input type="text" id="boynamekundali" name="mname" class="form-control" required="">
                    <label for="boynamekundali">Your name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
                  <!--Blue select-->
                  <div class="row">
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydivkundali" type="text" class="form-control" name="mday" style="cursor:pointer" onClick="showDivkundali()" onFocus="blur()" required="required">
                  <label id="datelabelkundali" for="mydivkundali" style="cursor:pointer" class="">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="dateDivkundali" class="col-md-4 col-xs-4 datedrop" style="display: none;">
                      <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="dateselectkundali(this.id)">31</a> </div>
                    </div>
                    <!--/Blue select-->
                    <!--Blue select-->
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydiv1kundali" type="text" class="form-control" name="mmonth" style="cursor:pointer" onClick="showDiv1kundali()" onFocus="blur()" required="required">
                        <label id="monthlabelkundali" for="mydiv1kundali" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="monthDivkundali" class="col-md-4 col-xs-4 monthdrop" style="display: none;">
                      <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="monthselectkundali(this.id)">Dec</a> </div>
                    </div>
                    <!--/Blue select-->
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydiv2kundali" type="text" class="form-control" name="myear" style="cursor:pointer" onClick="showDiv2kundali()" onFocus="blur()" required="required">
                        <label id="yearlabelkundali" for="mydiv2kundali" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="yearDivkundali" class="col-md-4 col-xs-4 yeardrop" style="display: none;">
                      <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2017</a> <a id="2016" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2016</a> <a id="2015" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2015</a> <a id="2014" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2014</a> <a id="2013" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2013</a> <a id="2012" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2012</a> <a id="2011" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2011</a> <a id="2010" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2010</a> <a id="2009" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2009</a> <a id="2008" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2008</a> <a id="2007" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2007</a> <a id="2006" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2006</a> <a id="2005" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2005</a> <a id="2004" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2004</a> <a id="2003" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2003</a> <a id="2002" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2002</a> <a id="2001" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2001</a> <a id="2000" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">2000</a> <a id="1999" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1999</a> <a id="1998" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1998</a> <a id="1997" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1997</a> <a id="1996" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1996</a> <a id="1995" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1995</a> <a id="1994" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1994</a> <a id="1993" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1993</a> <a id="1992" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1992</a> <a id="1991" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1991</a> <a id="1990" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1990</a> <a id="1989" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1989</a> <a id="1988" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1988</a> <a id="1987" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1987</a> <a id="1986" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1986</a> <a id="1985" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1985</a> <a id="1984" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1984</a> <a id="1983" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1983</a> <a id="1982" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1982</a> <a id="1981" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1981</a> <a id="1980" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1980</a> <a id="1979" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1979</a> <a id="1978" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1978</a> <a id="1977" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1977</a> <a id="1976" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1976</a> <a id="1975" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1975</a> <a id="1974" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1974</a> <a id="1973" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1973</a> <a id="1972" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1972</a> <a id="1971" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1971</a> <a id="1970" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1970</a> <a id="1969" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1969</a> <a id="1968" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1968</a> <a id="1967" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1967</a> <a id="1966" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1966</a> <a id="1965" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1965</a> <a id="1964" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1964</a> <a id="1963" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1963</a> <a id="1962" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1962</a> <a id="1961" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1961</a> <a id="1960" class="dropdown-item waves-effect waves-light" onClick="yearselectkundali(this.id)">1960</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px">Time of Birth</p>
                  <div class="row">
                    <div class="col-md-6 col-xs-6">
                      <div class="md-form">
                        <input id="mydiv3kundali" type="text" class="form-control" name="mhour" style="cursor:pointer" onClick="showDiv3kundali()" onFocus="blur()" required="required">
                        <label id="hourlabelkundali" for="mydiv3kundali" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                      </div>
                      <div id="hourDivkundali" class="col-md-12 col-xs-6 hourdrop" style="display: none;">
                        <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="hourselectkundali(this.id)">24</a> </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                      <div class="md-form">
                        <input id="mydiv4kundali" type="text" class="form-control" name="mminute" style="cursor:pointer" onClick="showDiv4kundali()" onFocus="blur()" required="required">
                        <label id="minutelabelkundali" for="mydiv4kundali" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                      </div>
                      <div id="minuteDivkundali" class="col-md-12 minutedrop" style="display: none;">
                        <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onClick="minuteselectkundali(this.id)">60</a> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
                  <div class="md-form"> 
                      <?php echo form_input(array('id' => 'mautocomplete', 'class' => 'form-control', 'placeholder' => 'Birth Place', 'type' => 'text', 'name' => 'mplace', 'value' => '', 'required' => 'required')); ?>
   <input type="hidden" id="mlatitude" name="mlatitude" placeholder="latitude" readonly>
    <input type="hidden" id="mlongitude" name="mlongitude" placeholder="longitude" readonly>
    <input type="hidden" id="mtimezone" name="mtimezone" placeholder="timezone" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 girlform">
              <div class="male" style="text-align:center;font-size:30px"> <i class="fa fa-male" aria-hidden="true">Female</i> </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
                  <div class="md-form">
                    <input type="text" id="girlname" name="fname" class="form-control" required="">
                    <label for="girlname">Your name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Birthdate</p>
                  <!--Blue select-->
                  <div class="row">
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydiv5" type="text" class="form-control" name="fday" style="cursor:pointer" onClick="showgirlDiv()" onFocus="blur()" required="">
                        <label id="girldatelabel" for="mydiv5" style="cursor:pointer" class="">Day <i class="fa fa-caret-down dayspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="girldateDiv" class="col-md-4 col-xs-4 datedrop" style="display: none;">
                      <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="girldateselect(this.id)">31</a> </div>
                    </div>
                    <!--/Blue select-->
                    <!--Blue select-->
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydiv6" type="text" class="form-control" name="fmonth" style="cursor:pointer" onClick="showgirlDiv1()" onFocus="blur()" required="">
                        <label id="girlmonthlabel" for="mydiv6" style="cursor:pointer">Month <i class="fa fa-caret-down monthspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="girlmonthDiv" class="col-md-4 col-xs-4 monthdrop" style="display: none;">
                      <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girlmonthselect(this.id)">Dec</a> </div>
                    </div>
                    <!--/Blue select-->
                    <div class="col-md-4 col-xs-4">
                      <div class="md-form">
                        <input id="mydiv7" type="text" class="form-control" name="fyear" style="cursor:pointer" onClick="showgirlDiv2()" onFocus="blur()" required="">
                        <label id="girlyearlabel" for="mydiv7" style="cursor:pointer">Year <i class="fa fa-caret-down yearspankundali" aria-hidden="true"></i> </label>
                      </div>
                    </div>
                    <div id="girlyearDiv" class="col-md-4 col-xs-4 yeardrop" style="display: none;">
                      <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2017</a> <a id="2016" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2016</a> <a id="2015" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2015</a> <a id="2014" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2014</a> <a id="2013" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2013</a> <a id="2012" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2012</a> <a id="2011" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2011</a> <a id="2010" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2010</a> <a id="2009" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2009</a> <a id="2008" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2008</a> <a id="2007" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2007</a> <a id="2006" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2006</a> <a id="2005" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2005</a> <a id="2004" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2004</a> <a id="2003" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2003</a> <a id="2002" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2002</a> <a id="2001" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2001</a> <a id="2000" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">2000</a> <a id="1999" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1999</a> <a id="1998" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1998</a> <a id="1997" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1997</a> <a id="1996" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1996</a> <a id="1995" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1995</a> <a id="1994" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1994</a> <a id="1993" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1993</a> <a id="1992" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1992</a> <a id="1991" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1991</a> <a id="1990" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1990</a> <a id="1989" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1989</a> <a id="1988" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1988</a> <a id="1987" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1987</a> <a id="1986" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1986</a> <a id="1985" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1985</a> <a id="1984" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1984</a> <a id="1983" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1983</a> <a id="1982" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1982</a> <a id="1981" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1981</a> <a id="1980" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1980</a> <a id="1979" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1979</a> <a id="1978" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1978</a> <a id="1977" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1977</a> <a id="1976" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1976</a> <a id="1975" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1975</a> <a id="1974" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1974</a> <a id="1973" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1973</a> <a id="1972" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1972</a> <a id="1971" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1971</a> <a id="1970" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1970</a> <a id="1969" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1969</a> <a id="1968" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1968</a> <a id="1967" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1967</a> <a id="1966" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1966</a> <a id="1965" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1965</a> <a id="1964" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1964</a> <a id="1963" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1963</a> <a id="1962" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1962</a> <a id="1961" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1961</a> <a id="1960" class="dropdown-item waves-effect waves-light" onClick="girlyearselect(this.id)">1960</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px">Time of Birth</p>
                  <div class="row">
                    <div class="col-md-6 col-xs-6">
                      <div class="md-form">
                        <input id="mydiv8" type="text" name="fhour" class="form-control" style="cursor:pointer" onClick="showgirlDiv3()" onFocus="blur()" required="">
                        <label id="girlhourlabel" for="mydiv8" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspankundali" aria-hidden="true"></i> </label>
                      </div>
                      <div id="girlhourDiv" class="col-md-12 col-xs-6 hourdrop" style="display: none;">
                        <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="girlhourselect(this.id)">24</a> </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                      <div class="md-form">
                        <input id="mydiv9" type="text" class="form-control" name="fminute" style="cursor:pointer" onClick="showgirlDiv4()" onFocus="blur()" required="">
                        <label id="girlminutelabel" for="mydiv9" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespankundali" aria-hidden="true"></i> </label>
                      </div>
                      <div id="girlminuteDiv" class="col-md-12 col-xs-6 minutedrop" style="display: none;">
                        <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onClick="girlminuteselect(this.id)">60</a> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <p style="font-weight:400;color:#0275d8;font-size:14px">Place of Birth</p>
                  <div class="md-form">  
				  <?php echo form_input(array('id' => 'fautocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'fplace', 'value' => '', 'required' => 'required')); ?>
 <input type="hidden" id="flatitude" name="flatitude" placeholder="latitude" readonly>
    <input type="hidden" id="flongitude" name="flongitude" placeholder="longitude" readonly>
    <input type="hidden" id="ftimezone" name="ftimezone" placeholder="timezone" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <script>
      var placeSearch, autocomplete;
      var componentForm = {locality: 'long_name'};
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('mautocomplete')),
            {types: ['geocode']});
        autocomplete.addListener('place_changed', fillInAddress);
		
		autocomplete2 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('fautocomplete')),
            {types: ['geocode']});
        autocomplete2.addListener('place_changed', fillInAddress2);
		
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
      	document.getElementById('mlatitude').value = place.geometry.location.lat();
		document.getElementById('mlongitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'mtimezone');
	}
	
	function fillInAddress2() {
        var place = autocomplete.getPlace();
      	document.getElementById('flatitude').value = place.geometry.location.lat();
		document.getElementById('flongitude').value = place.geometry.location.lng();
		eventListenerForMaps(place.geometry.location.lat(), place.geometry.location.lng(), 'ftimezone');
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
              var tmsp = Math.floor(Date.now() / 1000);
               $.getJSON("https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+tmsp+"&key=AIzaSyBdemvulM25UibIKlZlljfdhcb4i9U5JsA",function(data) {
					document.getElementById(timezone).value = (data.rawOffset)/3600;
                });
	}
</script>
          <div class="text-xs-center">
<button class="btn btn-deep-orange waves-effect waves-light collapsed hide" type="submit" style="border-radius: 35px !important;  background: #ff3366 !important;" id="save_kundali"> Save Kundali </button>          
          
            <button class="btn btn-deep-orange waves-effect waves-light collapsed" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Get Prediction </button>
            
            <div class="col-md-12"><?=RETRIED?></div>
          </div>
          <input type="hidden" name="opr" value="" id="opr" />

<?php echo form_close(); ?>
<script>
	  $("#save_kundali").click(function(e){ $("#opr").val('save'); });
    $('form#matchmaking').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
	
	if($('#opr').val() == 'save'){
	var url = '<?php echo site_url('service/save_kundli'); ?>';
	}else{
	var url = '<?php echo site_url('service/kundalimilan'); ?>';
	}	
	$("#opr").val('');	
	
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function(data){ //
           if(data == 'saved'){
				$('#collapseResult').html('<div class="card"><div class="panel-group" id="accordion"><div class="panel panel-default"><div class="card-header white-text">Kundali details has been saved.</div></div></div></div>');
				$('#close_button').trigger('click');
				load_bookings();
			}else{		
            $('#collapseResult').html(data); 
			}
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
    </script>           
      </div>
    </div>
    <div class="collapse" id="collapseResult" area-expanded="false"></div>
</div>
<!--/.Panel 2-->

<?php else: ?>
<!--Panel 1-->

<div class="tab-pane fade show active in" id="panel31" role="tabpanel" aria-expanded="true"> <br>
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
        <?php echo form_input(array('type' => 'hidden','name' => 'prfessional_id', 'value' => $logged_customer->id)); ?>
        <?php echo form_input(array('type' => 'hidden','name' => 'type', 'value' => 1)); ?>
  
          <!--Body-->
          <div class="row">
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Name</p>
              <div class="md-form">
                  <?php echo form_input(array('id' => 'usr', 'class' => 'form-control', 'type' => 'text','name' => 'name', 'required' => 'required')); ?>
                <label for="usr">Your name</label>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv" type="text" class="form-control" name="day" style="cursor:pointer" onClick="showDiv()" onFocus="blur()" required="">
                    <label id="datelabel" for="mydiv" style="cursor:pointer">Day <i class="fa fa-caret-down dayspan" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="serviceDiv" class="col-md-4 col-xs-4 datedrop" style="display: none;">
                  <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">31</a> </div>
                </div>
                <!--/Blue select-->
                <!--Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" onClick="showDiv1()" onFocus="blur()" required="">
                    <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month <i class="fa fa-caret-down monthspan" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop" style="display: none;">
                  <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Dec</a> </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv2" type="text" class="form-control" name="year" style="cursor:pointer" onClick="showDiv2()" onFocus="blur()" required="">
                    <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year <i class="fa fa-caret-down yearspan" aria-hidden="true"></i> </label>
                  </div>
                </div>
                <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop" style="display: none;">
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
                    <input id="mydiv3" type="text" class="form-control" name="hour" style="cursor:pointer" onClick="showDiv3()" onFocus="blur()" required="">
                    <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour <i class="fa fa-caret-down hourspan" aria-hidden="true"></i> </label>
                  </div>
                  <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop" style="display: none;">
                    <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">24</a> </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv4" type="text" class="form-control" name="minute" style="cursor:pointer" onClick="showDiv4()" onFocus="blur()" required="">
                    <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute <i class="fa fa-caret-down minutespan" aria-hidden="true"></i> </label>
                  </div>
                  <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop" style="display: none;">
                    <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">60</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>
              <div class="md-form"> 
               <?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required')); ?>
            </div>
             <input type="hidden" id="latitude" name="latitude" placeholder="latitude" readonly>
    <input type="hidden" id="longitude" name="longitude" placeholder="longitude" readonly>
    <input type="hidden" id="timezone" name="timezone" placeholder="timezone" readonly>
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
              var tmsp = Math.floor(Date.now() / 1000);
               $.getJSON("https://maps.googleapis.com/maps/api/timezone/json?location="+latitude+','+longitude+"&timestamp="+tmsp+"&key=AIzaSyBdemvulM25UibIKlZlljfdhcb4i9U5JsA",function(data) {
					document.getElementById(timezone).value = (data.rawOffset)/3600;
                });
	}
</script>
           
          <div class="text-xs-center">
            <button class="btn btn-deep-orange waves-effect waves-light collapsed hide" id="save_kundali" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Save kundali</button>
            
            <button class="btn btn-deep-orange waves-effect waves-light collapsed" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;"> Get Prediction </button>
            <div class="col-md-12"><?=RETRIED?></div>
          </div>
                    <input type="hidden" name="opr" value="" id="opr" />
   <?php echo form_close(); ?>
      </div>
      <script>
	  $("#save_kundali").click(function(e){ $("#opr").val('save'); });
	  
	
	
    $('form#generate_horoscope').submit(function(e) { 
    var form = $(this);
    e.preventDefault();
	$('#collapseResult').removeClass('collapse');
	$('#collapseResult').addClass('collapse in');
	$('#collapseResult').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
	
	if($('#opr').val() == 'save'){
	var url = '<?php echo site_url('service/save_kundli'); ?>';
	}else{
	var url = '<?php echo site_url('service/kundli_analysis'); ?>';
	}	
	$("#opr").val('');
	
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function(data){
			if(data == 'saved'){
				$('#collapseResult').html('<div class="card"><div class="panel-group" id="accordion"><div class="panel panel-default"><div class="card-header white-text">Kundali details has been saved.</div></div></div></div>');
				$('#close_button').trigger('click');
				load_bookings();
			}else{		
            $('#collapseResult').html(data); 
			}
        },
         error: function(resp) { alert(JSON.stringify(resp)); }
   });
});
               
               </script>
    
      
    </div>
    <div class="collapse" id="collapseResult" area-expanded="false">
     
  </div>
</div>
<!--/.Panel 1-->
<?php endif; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdemvulM25UibIKlZlljfdhcb4i9U5JsA&libraries=places&callback=initAutocomplete" async defer></script>
