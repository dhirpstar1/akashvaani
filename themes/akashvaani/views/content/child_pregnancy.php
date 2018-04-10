 <style type="text/css">
.see_details{ color: #666 !important;
    border: 1px solid #666;
    border-radius: 50px;
   padding: 15px;width: 140px;}
.buy_now{ color: #fff !important;
border: 1px solid #ff3366;
border-radius: 50px;
background-color: #ff3366 !important;
padding: 15px;
width: 140px;}	


.planet_house{

    color: #666 !important;

    border: 1px solid #666;

    border-radius: 50px;

    padding: 5px;

    width: 80px;

}

.planet_house:hover{ background-color:#ff3366!important; color:#ffffff!important; border: 1px solid #ff3366;}

.planet_house_active{ background-color:#ff3366!important; color:#ffffff!important; border: 1px solid #ff3366;}

</style>
<div class="card">
  <div class="panel-group" id="accordion">
      <!--///////////////////////////////////-->
    <div class="panel panel-default">
      <div class="card-header white-text"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="general_analysis"> About Yourself Based on your charts</a> <a class="float-xs-right general_analysis" data-toggle="collapse" data-parent="#accordion"  href="#collapse7"><i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a> </div>
      <div id="collapse7" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
            <div class="grid-col-12">
              <div class="blocks">
                <h4 style="font-weight:300">Your ascendant sign is
                  <?=$ascendant;?>
                  (Personality and Thinking pattern) </h4>
                <hr>
                <p>
                  <?=$general_ascendant_report;?>
                </p>
              </div>
            </div>
          </div>
          <div class="grid-col-12">
            <div class="col-md-12">
              <div class="blocks">
                <h4 style="font-weight:300">Your Planets Speaks(House Wise)</h4>
                <hr>
                <a href="javascript:void(0);" class="btn btn-xs planet_house planet_house_active" id="Sun">Sun</a> <a href="javascript:void(0);" class="btn btn-xs planet_house" id="Moon">Moon</a> <a href="javascript:void(0);" class="btn btn-xs planet_house" id="Venus">Venus</a> <a href="javascript:void(0);" class="btn btn-xs planet_house" id="Jupiter">Jupiter</a> <a href="javascript:void(0);" class="btn btn-xs planet_house" id="Saturn">Saturn</a> <a href="javascript:void(0);" class="btn btn-xs planet_house" id="Mars">Mars</a> </div>
              <div class="col-md-12">
                <p id="collapseResulthousetype">
                  <?php //echo $general_house_report_jupiter->house_report; ?>
                </p>
              </div>
            </div>
            <div class="clear"  style="clear:both;"></div>
  <br>
            <div class="col-md-12">
              <h4 style="font-weight:300">For specific question. Ask our astrologer.</h4>
              <hr>
              <h5 style="font-weight:200">Any Marriage related, Career or Health.</h5>
              <p>You can ask any question regarding your Marriage, Career & Health. Questions like 'When will you get marriage' Why delay in marriage' etc.</p>
              <p>You will receive answers in form of voice recording.</p>
              <p> 
              <a>
              <h5>100% Privacy. Incredibly Simple. Satisfaction Guaranteed.</h5>
              </a>
              </p>
              <div class="col-md-12" style="padding: 0"><h4 style="color:#ff3366;"><strong>Special Offer for Limited Period</strong></h4>
                <br>   </div>

                  <div class="col-md-12" style="padding: 0">
                    <span>Price for Q1-</span>  
                    <span class="currnt-price" style="color:#0000FF;">INR 299/- , Q2- INR 150/-, Q3-INR 150/- ....</span>     
                  </div>

<div class="col-md-12"> <br>
                    <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button1" href="<?=base_url('/questions');?>" class="btn waves-effect waves-light buy_now pull-left">Ask Now</a></div>    
                   
                    <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button2" href="<?=base_url('/consult-online');?>" class="btn see_details">See Details</a></div>  

                  </div>


              
              <div class="col-md-12" style="padding:10px 0;">
               <br>

                     <?php /* ?>
                <div class="clear"  style="clear:both;"></div> <br>
           
                <h4 style="font-weight:300">Your lifetime guide (25 pages)</h4>
                <hr>
                <p>This birth Report is specially designed to give you analysis based on your Charts.This is a beautiful piece of booklet about you. You can keep as lifetime guide. </p>
                <p> <span>Introductory Price</span> <span class="cancel-price"><strike> Rs.500/-</strike></span> <span class="currnt-price" style="color:#0000FF;">Rs.299/-</span> </p>
   
                <div class="col-md-12" style="padding:10px 0;">
                  <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="buynow" href="javascript:void(0);" class="btn buy_now pull-left">Buy Now</a></div>
                  <div class="col-md-4 col-sm-12"><a id="button2" href="<?=base_url('/full-reports');?>" class="btn see_details"  target="_blank">See Details</a></div>
                  <div class="col-md-4 col-sm-12">
                    <select name="select_langiage" class="form-control pull-left selectpicker" id="langauge_select">
                      <option value="en">ENGLISH</option>
                      <option value="hi">HINDI</option>
                    </select>
                  </div>
                </div>
 <?php */ ?>

                <div class="clear"  style="clear:both;"></div>
                     <h4 style="font-weight:300">The story of your life (Extended)-70 pages</h4>
                <hr>
                <b>Your life answers and Guide- Planets and effects on your life</b>
                <p>In addition to the above report. It is a detailed report about your personality, covers answers regarding various aspects of your life like Your Intelligence, education, Mind, Will power & emotions, Wealth, Knowledge, marriage, comfort.</p>
                <p>Your life answers and Guide- Planets and effects on your life.</p>
                <h5>Beautiful & Consolidated Life Report.</h5>
                <p> <span>Introductory Price</span> <span class="cancel-price"><strike> Rs.1299/-</strike></span> <span class="currnt-price" style="color:#0000FF;">Rs.599/-</span> </p>
                <hr>
                <div class="col-md-12" style="padding:10px 0;">
                  <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="buynow_ex" href="javascript:void(0);" class="btn buy_now pull-left">Buy Now</a></div>
                  <div class="col-md-4 col-sm-12"><a id="button2" href="<?=base_url('/full-extended-reports');?>" class="btn see_details" target="_blank">See Details</a></div>
                  <div class="col-md-4 col-sm-12">
                    <select name="select_langiage" class="form-control pull-left selectpicker" id="select_langiage_ex">
                      <option value="en">ENGLISH</option>
                      <option value="hi">HINDI</option>
                    </select>
                  </div>
                </div>
                <div class="clear"  style="clear:both;"></div>
                  <div>
                    <div class="col-md-12">
                    <h4 style="color:#ff3366;">Special Commentary</h4> 
                    <p style="font-weight:bold;color:#be7426;">The story of my Life report &amp; Commentary on your career (2 years Next) + Special career  issue you want to ask. by Expert Astrologer.</p>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                    <span>Special Price</span>  
                    <span class="cancel-price">599 + 599 =<strike> Rs. 1198/-</strike></span> 
                    <span class="currnt-price" style="color:#0000FF;">Rs.799/-</span> 
                    <span class="pdf"> (PDF) <a class="waves-effect waves-light" data-toggle="modal" data-target="#sample2" style="text-decoration:underline;">Quick Detail</a></span>  
                    </div>
                    <div class="col-md-12" style="padding:10px 0;">  
                   <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button1" href="<?=base_url('/questions?report=1');?>" class="btn buy_now pull-left">Buy Now</a>
                   </div>          
                   <div class="col-md-5 col-sm-12"><a id="button2" href="<?=base_url('/full-extended-reports');?>" class="btn waves-effect waves-light">Know More</a>
                   </div>
                    

                    </div>
</div>




              </div>
            </div>
            <script>

$('#buynow').click(function(e){
var url = '<?=base_url('/report');?>?lg=' + $('#langauge_select :selected').val()+ '&type=story_of_life_basic_report';
 window.open(url, '_blank');
 e.preventDefault();
});
$('#buynow_ex').click(function(e){
var url = '<?=base_url('/report');?>?lg=' + $('#langauge_select_ex :selected').val()+ '&type=story_of_life_extended_report';
 window.open(url, '_blank');
 e.preventDefault();
});

$('.general_analysis').click(function(){
$('.planet_house_active').trigger('click');
});
$(document).ready(function() {
      $('.planet_house_active').trigger('click');
});

</script>
            <script>

	

	$('.planet_house').click(function(){

	

	$(".planet_house").each(function() {

   	$(this).removeClass('planet_house_active');

	});

	

	$(this).addClass('planet_house_active');

		

	

	$('#collapseResulthousetype').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  

	$.ajax({

        type: "POST",

        url: "<?php echo site_url('service/manglik'); ?>",

        data: $("#generate_horoscope").serialize()+ "&house_type=" + $(this).attr('id'),

        success: function(data){

		console.log(data);

		//var value = $.parseJSON(data);

           $('#collapseResulthousetype').html(data); 

        },

         error: function(resp) { }

   });

	

	

	});

	

        $('#planetsignId').change(function(){

	$('#collapseResultsigntype').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  

	$.ajax({

        type: "POST",

        url: "<?php echo site_url('service/manglik'); ?>",

        data: $("#generate_horoscope").serialize()+ "&sign_type=" + $(this).val(),

        success: function(data){

		//var value = $.parseJSON(data);

            $('#collapseResultsigntype').html(data); 

        },

         error: function(resp) { }

   });

	

	

	});
    </script>
            <div class="clear"  style="clear:both;"></div>
          </div>
        </div>
      </div>
    </div>
    <!--////////////////////////////////////-->
    <div class="panel panel-default">
      <div class="card-header white-text"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> kundali chart</a> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <i class="fa fa-chevron-circle-down resultdown pull-right" aria-hidden="true"></i></a> </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <!--Panel-->
              <div class="card">
                <div class="card-header danger-color-dark white-text"> Navmansh Kundali </div>
                <div class="card-block">
                  <div class="UI-II" style="overflow: hidden;">
                    <div id="navamanshachart" style="width: 95%; margin: 0 auto;"></div>
                  </div>
                </div>
              </div>
              <!--/.Panel-->
            </div>
            <div class="col-md-6">
              <!--Panel-->
              <div class="card">
                <div class="card-header danger-color-dark white-text"> Moon kundali </div>
                <div class="card-block">
                  <div class="UI-II" style="overflow: hidden;">
                    <div id="moonchart" style="width: 95%; margin: 0 auto;"></div>
                  </div>
                </div>
              </div>
              <!--/.Panel-->
            </div>
          </div>
          <script src="<?php echo base_url('/api/js/custom.js'); ?>"></script>
          <script src="<?php echo base_url('/api/js/d3.min.js'); ?>"></script>
          <script src="<?php echo base_url('/api/js/Chart.js'); ?>"></script>
          <script src="<?php echo base_url('/api/js/SouthChart.js'); ?>"></script>
          <script type="text/javascript">

    var options = {

        lineColor : '#e40046',
        planetColor : '#000',
        signColor : '#000',
        width : 250

    };

    drawNorthChart(getPlanetArray(<?php echo json_encode($moonchart);?>), getSignArray(<?php echo json_encode($moonchart);?>), options,'#moonchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($navamanshachart);?>), getSignArray(<?php echo json_encode($navamanshachart);?>), options,'#navamanshachart');

  
</script>
        </div>
      </div>
    </div>
      <div class="panel panel-default" style="display:none;">
      <div class="card-header white-text"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"> Planet Details</a> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"> <i class="fa fa-chevron-circle-down resultdown pull-right" aria-hidden="true"></i></a> </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="table-responsive table-bordered">
            <table class="table">
              <thead>
                <tr>
                  <th>Planet</th>
                  <th>R</th>
                  <th>Sign</th>
                  <th>Sign Lord</th>
                  <th>Degree</th>
                  <th>Nakshatra</th>
                  <th>Nakshatra Lord</th>
                  <th>House</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($planets as $planet){ ?>
                <tr>
                  <td><?php echo $planet->name; ?></td>
                  <td><?php if($planet->isRetro == 'true'){ echo 'R';} else{ echo '-'; } ?></td>
                  <td><?php echo $planet->sign; ?></td>
                  <td><?php echo $planet->signLord; ?></td>
                  <td><?php echo $planet->normDegree; ?></td>
                  <td><?php echo $planet->nakshatra; ?></td>
                  <td><?php echo $planet->nakshatraLord; ?></td>
                  <td><?php echo $planet->house; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
