<div class="card">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
   <div class="card-header white-text">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        AshtaKoot Details</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
            <div class="row">
          <div class="col-md-8">
       <div class="UI-II zero-padding">
<section id="photos" class="match-ashtakoot-overlay">
<p style="top:5%">Match Ashtakoot Points (<?php echo $match_ashtakoot_points->total->received_points; ?> / <?php echo $match_ashtakoot_points->total->total_points; ?>)</p>
</section>
<div class="table-bordered table-responsive">
<table class="table cust-table zero-margin">
                  <thead>
                    <tr>
                      <th>Atribute</th>
                      <th>Desc</th>
                      <th>Male</th>
                      <th>Female</th>
                      <th>Outof</th>
                      <th>Received</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($match_ashtakoot_points as $key => $match_ashtakoot_value){ if($key !== 'conclusion'){ if($key == 'total'){ ?>
                    <tr style="background-color: #FF585A;color: #fff;">
                      <?php  }else{ ?>
                    <tr>
                      <?php } ?>
                      <td><?php echo ucfirst($key); ?></td>
                      <td class="ng-binding"><?php echo ucfirst($match_ashtakoot_value->description); ?></td>
                      <td class="ng-binding"><?php echo $match_ashtakoot_value->male_koot_attribute; ?></td>
                      <td class="ng-binding"><?php echo $match_ashtakoot_value->female_koot_attribute; ?></td>
                      <td class="ng-binding"><?php echo $match_ashtakoot_value->total_points; ?></td>
                      <td class="ng-binding"><?php echo $match_ashtakoot_value->received_points; ?></td>
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
</div>
</div>
    </div>
     <div class="col-md-4">
       <div class="UI-II zero-padding">
<section id="photos" class="match-ashtakoot-overlay">
<p style="position: relative;top:10%"> Conclusion</p>
<i class="fa fa-thumbs-o-up ashtakoot-conclusion-thumb"></i>
</section>
<div class="ashtakoot-conclusion" style="padding: 10px;;">
<div class="ashtakoot-conculsion-report">
<p class="ng-binding"><?php echo $match_ashtakoot_points->conclusion->report; ?></p>
</div>
</div>
</div>
     </div>
    </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default ">
  <div class="card-header white-text">
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Male kundali</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse2" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
           <div class="col-md-6">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
               Lagna chart
            </div>
            <div class="card-block"> 
                
                  <div id="lagnamale" style="width: 95%; margin: 0 auto;"></div>

              </div>
             </div>
       </div>         
        <!--/.Panel-->
                                   <div class="col-md-6">
                    <div class="card">
    <div class="card-header danger-color-dark white-text">
     Navmansha Chart
    </div>
        <div class="card-block">
                     <div class="UI-II" style="overflow: hidden;">
                     <div id="navamanshachartmale" style="width: 95%; margin: 0 auto;"></div>
                </div>
                </div>
        </div>
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

   drawNorthChart(getPlanetArray(<?php echo json_encode($lagnamale);?>), getSignArray(<?php echo json_encode($lagnamale);?>), options,'#lagnamale');
   drawNorthChart(getPlanetArray(<?php echo json_encode($navmanshmale);?>), getSignArray(<?php echo json_encode($navmanshmale);?>), options,'#navamanshachartmale');

   drawNorthChart(getPlanetArray(<?php echo json_encode($lagnafemale);?>), getSignArray(<?php echo json_encode($lagnafemale);?>), options,'#lagnafemale');
  drawNorthChart(getPlanetArray(<?php echo json_encode($navmanshfemale);?>), getSignArray(<?php echo json_encode($navmanshfemale);?>), options,'#navamanshachartfemale');


  
</script>

                  </div>
        </div>




  </div>
  <div class="panel panel-default">
   <div class="card-header white-text">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Female kundali</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse3" class="panel-collapse collapse in">
      <div class="panel-body">
              <div class="row">
           <div class="col-md-6">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
               Lagna chart
            </div>
            <div class="card-block"> 
                 <div class="UI-II" style="overflow: hidden;">
                  <div id="lagnafemale" style="width: 95%; margin: 0 auto;"></div>
              </div>
              </div>
             </div>
       </div>         
        <!--/.Panel-->
                                   <div class="col-md-6">
                    <div class="card">
    <div class="card-header danger-color-dark white-text">
      Navmansha Chart
    </div>
        <div class="card-block">
                      <div class="UI-II" style="overflow: hidden;">
                     <div id="navamanshachartfemale" style="width: 95%; margin: 0 auto;"></div>
                </div>
                </div>
        </div>
</div>
</div>
      </div>
    </div>
    
   
  </div>

   <div class="panel panel-default">
    <div class="card-header white-text">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          Planet Details</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse4" class="panel-collapse collapse in">
      <div class="panel-body">
         <?php foreach($match_planet_details as $key => $type){ ?>
       <div class="planet"> <h2><?php echo ucwords(str_replace('_', ' ', $key)); ?></h2></div>
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
    </div>
  </div>
</div>
</div>