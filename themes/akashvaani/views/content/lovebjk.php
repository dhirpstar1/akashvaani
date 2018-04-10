<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-3 red" role="tablist">
    <li class="nav-item">
        <a class="nav-link result active" data-toggle="tab" href="#panel1" role="tab">Kundali Charts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link result" data-toggle="tab" href="#panel2" role="tab">Planet Details</a>
    </li>
     <li class="nav-item">
        <a class="nav-link result" data-toggle="tab" href="#panel3" role="tab">Ashtakoot Details</a>
    </li>
  
</ul>

<!-- Tab panels -->
<div class="tab-content card" style="padding: 2rem 1rem 1rem;">

    <!--Panel 1-->
    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
        <br>

      <div class="row">
          <div class="col-md-6">
              <!--Panel-->
<div class="card">
    <div class="card-header danger-color-dark white-text">
      Navmansh Kundali
    </div>
        <div class="card-block">
                <div class="UI-II" style="overflow: hidden;"><h2>Male</h2>
                     <div id="navamanshachartmale" style="width: 95%; margin: 0 auto;"></div>
                </div>
                
                 <div class="UI-II" style="overflow: hidden;"><h2>Female</h2>
                     <div id="navamanshachartfemale" style="width: 95%; margin: 0 auto;"></div>
                </div>
                
        </div>
</div>
<!--/.Panel-->
          </div>
          <div class="col-md-6">
              <!--Panel-->
	 <div class="card">
            <div class="card-header danger-color-dark white-text">
               Moon kundali
            </div>
            <div class="card-block"> 
            	 <div class="UI-II" style="overflow: hidden;"><h2>Male</h2>
             			<div id="moonchartmale" style="width: 95%; margin: 0 auto;"></div>
             	</div>
        
            	 <div class="UI-II" style="overflow: hidden;"><h2>Female</h2>
             			<div id="moonchartfemale" style="width: 95%; margin: 0 auto;"></div>
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
        width : 400

    };

    drawNorthChart(getPlanetArray(<?php echo json_encode($moonchartmale);?>), getSignArray(<?php echo json_encode($moonchartmale);?>), options,'#moonchartmale');
	drawNorthChart(getPlanetArray(<?php echo json_encode($navmanshmale);?>), getSignArray(<?php echo json_encode($navmanshmale);?>), options,'#navamanshachartmale');
	
	 drawNorthChart(getPlanetArray(<?php echo json_encode($moonchartfemale);?>), getSignArray(<?php echo json_encode($moonchartfemale);?>), options,'#moonchartfemale');
	drawNorthChart(getPlanetArray(<?php echo json_encode($navmanshfemale);?>), getSignArray(<?php echo json_encode($navmanshfemale);?>), options,'#navamanshachartfemale');
	
	
</script>
  
    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>

      
        <?php foreach($match_planet_details as $key => $type){ ?>
       <div> <h2><?php echo ucwords(str_replace('_', ' ', $key)); ?></h2></div>
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
        <?php foreach($type as $planet){ ?>
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
       <?php } ?>


    </div>
    <div class="tab-pane fade" id="panel3" role="tabpanel">
    <div class="row">
          <div class="col-md-8">
       <div class="UI-II zero-padding">
<!--Panel 1-->
    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
        <br>

<!--Panel-->
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="card">
    <div class="card-block">
    <div class="row">
  <div class="col-md-6">
    <div class="card card-primary text-xs-center z-depth-2">
        <div class="card-block">
           <h3 class="text-center white-text">Ashtakoot</h3>
           <span class="white-text"><?php echo $match_ashtakoot_points->total->received_points; ?>/<?php echo $match_ashtakoot_points->total->total_points; ?></span>
        </div>
    </div>
  </div>
  <div class="col-md-6">
     <div class="card card-danger text-xs-center z-depth-2">
        <div class="card-block">
           <h3 class="text-center white-text">Manglik Match</h3>
           <span class="white-text"><?php if( $match_manglik_report->conclusion->match == 1){ echo "No";}else{ echo 'Yes';} ?></span>
        </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
      <div class="card card-success text-xs-center z-depth-2">
        <div class="card-block">
           <h3 class="text-center white-text">Rajjoo Dosha</h3>
           <span class="white-text">YES</span>
        </div>
    </div>
  </div>
  <div class="col-md-6"><div class="card card-warning text-xs-center z-depth-2">
        <div class="card-block">
           <h3 class="text-center white-text">Vedha Dosha</h3>
           <span class="white-text">No</span>
        </div>
    </div></div>
  </div>
  <div class="clearfix spacer-40"></div>
        <div class="matching-conculsion-status">
<h2>Conclusion</h2>
<hr>
<div class="ashtakoot-conculsion-report">
<p class="ng-binding">All factors are conducive for the match. The couple can go ahead with this alliance only after performing the remedies for Rajju Dosha as suggested by the astrologer.</p>
</div>
</div>
    </div>
</div>
</div>
</div>
<!--/.Panel-->
  
    </div>
    <!--/.Panel 1-->

</div>
    </div>
 
    </div>

    </div>
    <!--/.Panel 2-->
<hr>
    <button type="button" class="btn btn-danger closeresult">close</button>
  
<script>
$(".closeresult").click(function() {
    $('#collapseResult').removeClass('collapse in');
    $('#collapseResult').addClass('collapse');
});
</script>
