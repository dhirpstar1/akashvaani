
<div style="height:150px;"></div>

  <div class="container">
<section class="section">
    <div class="row">

        <!--First column -->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card testimonial-card profile-card">

                <!--Background color-->
                <div class="progilr-card-up indigo">
                </div>

                <!--Avatar-->
                <div class="avatar profile-avatar"> <img src="<?php echo base_url('/assets/profies/thumbnail/'.(($customer['image']) ? $customer['image']:'avatar.png')); ?>" class="rounded-circle img-responsive">
                </div>
<h3 class="h3-responsive text-center">Welcome <?=$customer['firstname'].' '.$customer['lastname'];?></h3>
<ul class="striped">
                                </ul>
            </div>
            <!--/.Card-->

<div class="row">
    <div class="text-xs-center">
      
            <a href="<?php echo base_url('/my-account/edit'); ?>" class="btn btn-deep-orange waves-effect waves-light" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                Edit Profile
            </a>
        </div>
  </div>
        </div>
        <!--/First column -->
        <div class="col-md-8 mb-1">

                        <!--Card-->
                        <div class="card card-cascade narrower">
                            <div class="admin-panel info-admin-panel">
                                <!--Card image-->
                                <div class="view">
                                    <h5>Your Asked Questions</h5>
                                </div>
                                <!--/Card image-->

                                <!--Card content-->
                                <div class="card-block">

                              <div>
                               
                                <table class="table asked_qsn">
                                   
                                    <thead>
                                        <tr>
                                            <th>Questions</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php $question_number =0; foreach($questions as $key => $question): $question_number++; ?>
                                        <tr class="qsn_row" data-toggle="collapse" href="#collapse<?=$key?>">
                                            <td>Q<?=$question_number;?>.<?=$question->question;?>?</td>
                                            <td><?php if($question->answer): ?><span class="badge green">Answered<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span> 
												<?php elseif($question->payment_status == 0 && $question->amount != '0.00'): ?><span class="badge red">Payment Pending<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
                                                <?php else: ?><span class="badge yellow">Answer Pending<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
												<?php endif; ?>
                                            </td>
                                          <tr id="collapse<?=$key?>" class="collapse">
                                          <td><p><strong>Text Answer.</strong></p>
                                           <p><?=$question->answer;?></p>
                                           <p><strong>Audio Link</strong></p>
                                           <a href="<?=$question->answer_link;?>"><?=$question->answer_link;?></a>
                                           
                                           <?php if($question->payment_status == 0  && !$question->answer && $question->amount != '0.00'): ?>
                                           <div class="pull-right"><a href="<?=base_url('/questions_payment/'.$question->booking_id);?>" target="_blank" class="btn btn-success">Proceed to Payment</a></div>
                                           <?php endif; ?>
                                          </td>
                                          <td></td>
                                          </tr>
									<?php endforeach; if($customer['answer']): ?>
                                       <tr class="qsn_row" data-toggle="collapse" href="#collapselast">
                                            <td>Q<?=($question_number+1)?>.Your first question?</td>
                                            <td><span class="badge green">Answered<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span></td>
                                                <tr id="collapselast" class="collapse">
                                          <td><p><strong>Text Answer.</strong></p>
                                           <p><?=$customer['answer'];?></p>
                                           <p><strong>Audio Link</strong></p>
                                           <a href="<?=$customer['answerlink'];?>"><?=$customer['answerlink'];?></a>
                                          </td>
                                        </tr>
                                        </tr> 
                                      <?php endif; ?>
                                    </tbody>
                                </table>
                            
                            </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
<div>
  <div class="col-lg-12 col-md-12 mb-r">
<div class="collapse in" id="collapseResult" aria-expanded="true">

<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-2" role="tablist" style="background-color:#ff3366">
    <li class="nav-item waves-effect waves-light">
        <a class="nav-link result active" data-toggle="tab" href="#panel1" role="tab">Services</a>
    </li>
    <li class="nav-item waves-effect waves-light">
        <a class="nav-link result" data-toggle="tab" href="#panel2" role="tab" id="load_kundali">Your Charts</a>
    </li>
  
</ul>

<!-- Tab panels -->
<div class="tab-content card" style="padding: 2rem 1rem 1rem;">

    <!--Panel 1-->
    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
        <br>


       <div class="table-responsive table-bordered">
       <div class="row">
         <div class="col-md-6">
             <!--Card Primary-->
    <div class="card card-primary text-center z-depth-2">
        <div class="card-block">
            <p class="white-text"><span class="tagline">Ask Questions</span><br> Get brief answers from our expert Astrologers. Ask Question.</p>
            <div class="text-xs-center">
            <a href="<?php echo base_url('/questions'); ?>" class="btn btn-deep-orange waves-effect waves-light" type="button" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                Ask Now
            </a>
           <div class="white-text col-md-12">Answers in form of Voice Recording.</div>
        </div>
        </div>
    </div>
    <!--/.Card Primary-->

         </div>
         <div class="col-md-6">
             <!--Card Danger-->
    <div class="card card-danger text-center z-depth-2">
        <div class="card-block">
            <p class="white-text"><span class="tagline">Get Full Consultation</span><br>Get Detailed consultation with our Expert Astrologers </p>
            <div class="text-xs-center">
            <a href="<?php echo base_url('/full-consultation'); ?>" class="btn btn-deep-orange waves-effect waves-light" type="button" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                Book Now
            </a>
            <div class="white-text col-md-12">Consultation By phone or Video.</div>
        </div>
        </div>
    </div>
    <!--/.Card Danger-->
       
         </div>
       </div>
        <div class="row">
         <div class="col-md-6">
             <!--Card Danger-->
    <div class="card card-success text-center z-depth-2">
        <div class="card-block">
            <p class="white-text"><span class="tagline">Enquire for Vastu consultation</span><br>Make your home full of positive energy. </p>
            <div class="text-xs-center">
            <a href="<?php echo base_url('/services/vastu-shastra'); ?>" class="btn btn-deep-orange waves-effect waves-light" type="button" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                Enquire
            </a>
        </div>
        </div>
    </div>
    <!--/.Card Danger-->
         </div>
         <div class="col-md-6">
             <!--Card Warning-->
  <div class="card card-warning text-center z-depth-2">
        <div class="card-block">
            <p class="white-text"><span class="tagline">Enquire for Puja</span><br>Mantras has power to transform.</p>
               <div class="text-xs-center">
       <a href="<?php echo base_url('/puja/book-pandit'); ?>" class="btn btn-deep-orange waves-effect waves-light" type="button" style="border-radius: 35px !important;
            background: #ff3366 !important;">Enquire</a>
           
                
           </div>
        </div>
    </div>
    <!--/.Card Warning-->
         </div>
       </div>


</div>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
<div class="kundali">
<?php if($customer['birth_timezone']): ?>
<div id="kundalidiv"><div class="row">
          <div class="col-md-6">
                          <!--Panel-->
            <div class="card">
                <div class="card-header danger-color-dark white-text">
                  Lagna Chart
                </div>
                 <div class="card-block">
                           <div id="lagnchart">
                           <div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>
                           </div>
                        </div>
            </div>
            <!--/.Panel-->
          </div>
          
      
          
          <div class="col-md-6">
              <!--Panel-->
            <div class="card">
                        <div class="card-header danger-color-dark white-text">
                           Moon Chart (South Style)
                        </div>
                        <div class="card-block">
                           <div id="moonchart" style="width: 95%; margin: 0 auto;">
                           <div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>
                           </div>
                        </div>
            </div>
<!--/.Panel-->
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
                      <!--Panel-->
                <div class="card">
                            <div class="card-header danger-color-dark white-text">
                                Sun Chart
                            </div>
                            <div class="card-block">
                              <div id="navamanshachart" style="width: 95%; margin: 0 auto;">
                              <div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>
                              </div>
                            </div>
                </div>
        <!--/.Panel-->
          </div>
          <div class="col-md-6">
              <!--Panel-->
            <div class="card">
                        <div class="card-header danger-color-dark white-text">
                           Navmasha Chart
                        </div>
                        <div class="card-block">
                          <div id="navamanshachart1" style="width: 95%; margin: 0 auto;">
                          <div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>
                          </div>
                        </div>
            </div>
      <!--/.Panel-->
          </div>
      </div>
      </div>
      
      </div>
<script type="text/javascript">
$('#load_kundali').click(function(){
$.get( "<?=base_url('my-account/user_chart'); ?>", function( data ) {
  $( "#kundalidiv" ).html( data );
});
});
</script>
 <?php else: ?>     
      
      
      <div class="complete_profile">
        <div class="text-xs-center">
            <button class="btn btn-deep-orange waves-effect waves-light" type="button" style="border-radius: 35px !important;
            background: #ff3366 !important;" data-toggle="modal" data-target="#myModal">
                Enter Birth Details
            </button>
        </div>
      </div>
 <?php endif; ?>
    </div>
    <!--/.Panel 2-->

</div>
</div>
</div>

</div>

    </div>

</section>
<!--Section: Testimonials v.1-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title w-100" id="myModalLabel">Enter Birth Details</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
              <div class="col-md-12">
                        <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
<?php echo form_open('/my-account/dashboard', 'id="my-account_edit"'); ?>
                        <!--Blue select-->
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                            <div class="md-form">
                            <input id="mydiv" type="text" class="form-control" name="day" style="cursor:pointer" value="<?php echo ($customer['day'] > 0) ? $customer['day'] : ''; ?>" onClick="showDiv0()" onFocus="blur()" required="required">
                            <label id="datelabel" for="mydiv" style="cursor:pointer" class="">Day
                            <i class="fa fa-caret-down dayspan" aria-hidden="true"></i>
                            </label>
                        </div>
                             
                            </div>

                             <div id="dateDiv" class="col-md-4 col-xs-4 datedrop" style="display: none;">
                             
<div class="card datebox">
    <a id="1" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">1</a>
    <a id="2" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">2</a>
    <a id="3" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">3</a>
    <a id="4" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">4</a>
    <a id="5" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">5</a>
    <a id="6" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">6</a>
    <a id="7" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">7</a>
    <a id="8" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">8</a>
    <a id="9" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">9</a>
    <a id="10" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">10</a>
    <a id="11" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">11</a>
    <a id="12" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">12</a>
    <a id="13" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">13</a>
    <a id="14" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">14</a>
    <a id="15" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">15</a>
    <a id="16" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">16</a>
    <a id="17" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">17</a>
    <a id="18" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">18</a>
    <a id="19" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">19</a>
    <a id="20" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">20</a>
    <a id="21" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">21</a>
    <a id="22" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">22</a>
    <a id="23" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">23</a>
    <a id="24" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">24</a>
    <a id="25" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">25</a>
    <a id="26" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">26</a>
    <a id="27" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">27</a>
    <a id="28" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">28</a>
    <a id="29" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">29</a>
    <a id="30" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">30</a>
    <a id="31" class="dropdown-item waves-effect waves-light" onClick="dateselect(this.id)">31</a>

</div>

                          </div>
                            <!--/Blue select-->
                            <!--Blue select-->
                            <div class="col-md-4 col-xs-4">
                            <div class="md-form">
                            <input id="mydiv1" type="text" class="form-control" name="month" style="cursor:pointer" value="<?php echo ($customer['month'] > 0) ? $customer['month'] : ''; ?>" onClick="showDiv1()" onFocus="blur()" required="required">
                            <label id="monthlabel" for="mydiv1" style="cursor:pointer" class="">Month
                            <i class="fa fa-caret-down monthspan" aria-hidden="true"></i>
                            </label>
                        </div>
                                
                            </div>


                             <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop" style="display: none;">
                             
<div class="card monthbox">
    <a id="01" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jan</a>
    <a id="02" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Feb</a>
    <a id="03" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Mar</a>
    <a id="04" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Apr</a>
    <a id="05" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">May</a>
    <a id="06" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jun</a>
    <a id="07" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Jul</a>
    <a id="08" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Aug</a>
    <a id="09" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Sep</a>
    <a id="10" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Oct</a>
    <a id="11" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Nov</a>
    <a id="12" class="dropdown-item waves-effect waves-light" onClick="monthselect(this.id)">Dec</a>
</div>

                          </div>
                            <!--/Blue select-->
                            <div class="col-md-4 col-xs-4">
                              <div class="md-form">
                            <input id="mydiv2" type="text" class="form-control" name="year" style="cursor:pointer" value="<?php echo ($customer['year'] > 0) ? $customer['year'] : ''; ?>" onClick="showDiv2()" onFocus="blur()" required="required">
                            <label id="yearlabel" for="mydiv2" style="cursor:pointer" class="">Year
                            <i class="fa fa-caret-down yearspan" aria-hidden="true"></i>
                            </label>
                        </div>
                            </div>
 <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop" style="display: none;">
                             
<div class="card yearbox">
    <a id="2017" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2017</a>
    <a id="2016" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2016</a>
    <a id="2015" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2015</a>
    <a id="2014" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2014</a>
    <a id="2013" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2013</a>
    <a id="2012" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2012</a>
    <a id="2011" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2011</a>
    <a id="2010" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2010</a>
    <a id="2009" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2009</a>
    <a id="2008" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2008</a>
    <a id="2007" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2007</a>
    <a id="2006" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2006</a>
    <a id="2005" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2005</a>
    <a id="2004" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2004</a>
    <a id="2003" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2003</a>
    <a id="2002" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2002</a>
    <a id="2001" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2001</a>
    <a id="2000" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">2000</a>
    <a id="1999" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1999</a>
    <a id="1998" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1998</a>
    <a id="1997" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1997</a>
    <a id="1996" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1996</a>
    <a id="1995" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1995</a>
    <a id="1994" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1994</a>
    <a id="1993" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1993</a>
    <a id="1992" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1992</a>
    <a id="1991" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1991</a>
    <a id="1990" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1990</a>
    <a id="1989" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1989</a>
    <a id="1988" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1988</a>
    <a id="1987" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1987</a>
    <a id="1986" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1986</a>
    <a id="1985" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1985</a>
    <a id="1984" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1984</a>
    <a id="1983" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1983</a>
    <a id="1982" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1982</a>
    <a id="1981" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1981</a>
    <a id="1980" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1980</a>
    <a id="1979" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1979</a>
    <a id="1978" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1978</a>
    <a id="1977" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1977</a>
    <a id="1976" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1976</a>
    <a id="1975" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1975</a>
    <a id="1974" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1974</a>
    <a id="1973" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1973</a>
    <a id="1972" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1972</a>
    <a id="1971" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1971</a>
    <a id="1970" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1970</a>
    <a id="1969" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1969</a>
    <a id="1968" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1968</a>
    <a id="1967" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1967</a>
    <a id="1966" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1966</a>
    <a id="1965" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1965</a>
    <a id="1964" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1964</a>
    <a id="1963" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1963</a>
    <a id="1962" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1962</a>
    <a id="1961" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1961</a>
    <a id="1960" class="dropdown-item waves-effect waves-light" onClick="yearselect(this.id)">1960</a>
</div>

                          </div>

                        </div>
                    </div>


                    <div class="col-md-12">
                        <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
                      <div class="row">
                          <div class="col-md-6 col-xs-6">
                           <div class="md-form">
                           <input id="mydiv3" type="text" class="form-control" name="hour" style="cursor:pointer" value="<?php echo ($customer['hour']>0) ? $customer['hour']: ''; ?>" onClick="showDiv3()" onFocus="blur()" required="required">
                            <label id="hourlabel" for="mydiv3" style="cursor:pointer" class="">Hour
                            <i class="fa fa-caret-down hourspan" aria-hidden="true"></i>
                            </label>
                        </div>
                        <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop" style="display: none;">
                             
<div class="card hourbox">
    <a id="01" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">01</a>
    <a id="02" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">02</a>
    <a id="03" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">03</a>
    <a id="04" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">04</a>
    <a id="05" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">05</a>
    <a id="06" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">06</a>
    <a id="07" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">07</a>
    <a id="08" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">08</a>
    <a id="09" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">09</a>
    <a id="10" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">10</a>
    <a id="11" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">11</a>
    <a id="12" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">12</a>
    <a id="13" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">13</a>
    <a id="14" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">14</a>
    <a id="15" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">15</a>
    <a id="16" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">16</a>
    <a id="17" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">17</a>
    <a id="18" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">18</a>
    <a id="19" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">19</a>
    <a id="20" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">20</a>
    <a id="21" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">21</a>
    <a id="22" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">22</a>
    <a id="23" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">23</a>
    <a id="24" class="dropdown-item waves-effect waves-light" onClick="hourselect(this.id)">24</a>
</div>
</div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                         <div class="md-form">
                             <input id="mydiv4" type="text" class="form-control" name="minute" value="<?php echo ($customer['minute']>0)?$customer['minute']:''; ?>" style="cursor:pointer" onClick="showDiv4()" onFocus="blur()" required="required">
                            <label id="minutelabel" for="mydiv4" style="cursor:pointer" class="">Minute
                            <i class="fa fa-caret-down minutespan" aria-hidden="true"></i>
                            </label>
                        </div>
                        <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop" style="display: none;">
                             
<div class="card minutebox">
    <a id="01" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">01</a>
    <a id="02" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">02</a>
    <a id="03" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">03</a>
    <a id="04" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">04</a>
    <a id="05" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">05</a>
    <a id="06" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">06</a>
    <a id="07" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">07</a>
    <a id="08" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">08</a>
    <a id="09" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">09</a>
    <a id="10" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">10</a>
    <a id="11" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">11</a>
    <a id="12" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">12</a>
    <a id="13" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">13</a>
    <a id="14" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">14</a>
    <a id="15" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">15</a>
    <a id="16" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">16</a>
    <a id="17" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">17</a>
    <a id="18" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">18</a>
    <a id="19" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">19</a>
    <a id="20" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">20</a>
    <a id="21" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">21</a>
    <a id="22" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">22</a>
    <a id="23" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">23</a>
    <a id="24" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">24</a>
    <a id="25" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">25</a>
    <a id="26" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">26</a>
    <a id="27" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">27</a>
    <a id="28" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">28</a>
    <a id="29" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">29</a>
    <a id="30" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">30</a>
    <a id="31" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">31</a>
    <a id="32" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">32</a>
    <a id="33" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">33</a>
    <a id="34" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">34</a>
    <a id="35" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">35</a>
    <a id="36" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">36</a>
    <a id="37" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">37</a>
    <a id="38" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">38</a>
    <a id="39" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">39</a>
    <a id="40" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">40</a>
    <a id="41" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">41</a>
    <a id="42" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">42</a>
    <a id="43" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">43</a>
    <a id="44" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">44</a>
    <a id="45" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">45</a>
    <a id="46" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">46</a>
    <a id="47" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">47</a>
    <a id="48" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">48</a>
    <a id="49" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">49</a>
    <a id="50" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">50</a>
    <a id="51" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">51</a>
    <a id="52" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">52</a>
    <a id="53" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">53</a>
    <a id="54" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">54</a>
    <a id="55" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">55</a>
    <a id="56" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">56</a>
    <a id="57" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">57</a>
    <a id="58" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">58</a>
    <a id="59" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">59</a>
    <a id="60" class="dropdown-item waves-effect waves-light" onClick="minuteselect(this.id)">60</a>

</div>
                        </div>
                    </div> 
                </div>
               
        </div>


        <div class="col-md-12">
                        <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Place of Birth</p>

<?php echo form_input(array('id' => 'place', 'class' => 'form-control typeahead', 'placeholder' => 'Birth Place', 'type' => 'text', 'name' => 'birth_place', 'value' => '', 'required' => 'required')); ?>
   <input type="hidden" id="latitude" name="latitude" placeholder="latitude" readonly>
    <input type="hidden" id="longitude" name="longitude" placeholder="longitude" readonly>
    <input type="hidden" id="timezone" name="timezone" placeholder="timezone" readonly>

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="submit" id="saveDate" class="btn btn-primary waves-effect waves-light">Save</button>
            </div>
        </div>
 
        <!--/.Content-->
    </div>
           <?php echo form_close()?> 
           </div>
</div>
<div class="row">
  <!-- Heading -->
      <nav class="navbar navbar-dark sidebar-heading">
        <div class="flex-center">
          <p class="white-text">Popular posts</p>
        </div>
      </nav>
      <!--/ Heading --> 
  <div class="col-md-12">
    <section class="section widget-content wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

    <?php foreach($populararticles as $article): $filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}?>
<div class="col-md-4 col-xs-4">
      <div class="single-post">
        <div class="row">
          <div class="col-md-4 col-xs-12">

            <!-- Image -->
            <div class="view overlay hm-white-slight">
              <img class="img-fluid" src="<?=base_url(($filename )? '/uploads/images/small/'.$filename  : '/uploads/images/default.jpg');?>" alt="<?=$article->primaryimage['alt']?>">
              <a>
                <div class="mask waves-light waves-effect waves-light"></div>
              </a>
            </div>
          </div>

          <!-- Excerpt -->
          <div class="col-md-8 col-xs-12 post_link">
            <h6><a class="card-text" href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
            <div class="post-data">
              <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p>
            </div>
          </div>
          <!--/ Excerpt -->
        </div>
        <!--/ First row -->
      </div>
   </div>
        <?php endforeach; ?>

    </section>
  </div>
  
</div>
 <div class="row">
    <div class="text-xs-center">
      
            <a href="https://shop.akashvaani.com/articles" class="btn btn-deep-orange waves-effect waves-light" id="gethoroscope" type="submit" style="border-radius: 35px !important;
            background: #ff3366 !important;">
                View More
            </a>
        </div>
  </div>
  </div>

<script type="text/javascript" src="<?php echo base_url('/assets/landing/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/typeahead.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/geonames.js'); ?>"></script>