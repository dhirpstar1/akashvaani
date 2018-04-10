
<div class="card">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
   <div class="card-header white-text">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
       Manglik Report</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="card">
        <section id="photos" class="match-ashtakoot-overlay">
<p style="top:15%"> Manglik Details</p>
            <p style="top:5%"><?php echo $manglik->percentage_manglik_present; ?> % manglik</p></section>
          <div class="card-block">
            <div class="grid" style="padding: 10px;">
              <div class="grid-col-12">
                <div class="grid-col-12">
                  <div class="blocks">
                    <h2 style="font-weight:400">Based on house</h2>
                    <hr>
                    <div class="manglik-points">
                      <?php foreach ($manglik->manglik_present_rule->based_on_house as $key => $match_manglik_value){?>
                      <p class="text-left ng-scope ng-binding"><?php echo $match_manglik_value; ?></p>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="spacer-40 clearfix"></div>
                </div>
                <div class="grid-col-12">
                  <div class="blocks">
                    <h2 style="font-weight:400">Based on Aspects</h2>
                    <hr>
                    <div class="manglik-points">
                      <?php foreach ($manglik->manglik_present_rule->based_on_aspect as $key => $match_manglik_value){?>
                      <p class="text-left ng-scope ng-binding"><?php echo $match_manglik_value; ?></p>
                      <?php } ?>
                    </div>
                    <div class="spacer-40 clearfix"></div>
                  </div>
                </div>
                <div class="grid-col-12">
                  <div class="blocks">
                    <h2 style="font-weight:400">Manglik Effect</h2>
                    <hr>
                    <div class="manglik-points">
                      <p class="text-left ng-binding">Manglik dosha is <?php echo $manglik->manglik_status; ?></p>
                    </div>
                    <div class="spacer-40 clearfix"></div>
                  </div>
                </div>
                <div class="grid-col-12">
                  <div class="blocks">
                    <h2 style="font-weight:400">Manglik Analysis</h2>
                    <hr>
                    <div class="manglik-points">
                      <p class="text-left ng-binding"><?php echo $manglik->manglik_report; ?></p>
                    </div>
                    <div class="spacer-40 clearfix"></div>
                  </div>
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
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        kundali chart</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
                   <div class="col-md-4">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
               Lagn kundali
            </div>
            <div class="card-block"> 
                  <div class="UI-II" style="overflow: hidden;">
              <div id="lagnchart" style="width: 95%; margin: 0 auto;"></div>
            </div>
              </div>
             </div>
       </div>         
        <!--/.Panel-->
           <div class="col-md-4">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
               Moon kundali
            </div>
            <div class="card-block"> 
                  <div class="UI-II" style="overflow: hidden;">
              <div id="moonchart" style="width: 95%; margin: 0 auto;"></div>
            </div>
              </div>
             </div>
       </div>         
        <!--/.Panel-->
                                   <div class="col-md-4">
                    <div class="card">
    <div class="card-header danger-color-dark white-text">
      Navmansh Kundali
    </div>
        <div class="card-block">
                    <div class="UI-II" style="overflow: hidden;">
              <div id="navamanshachart" style="width: 95%; margin: 0 auto;"></div>
            </div>
                </div>
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

	drawNorthChart(getPlanetArray(<?php echo json_encode($lagnchart);?>), getSignArray(<?php echo json_encode($lagnchart);?>), options,'#lagnchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($moonchart);?>), getSignArray(<?php echo json_encode($moonchart);?>), options,'#moonchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($navamanshachart);?>), getSignArray(<?php echo json_encode($navamanshachart);?>), options,'#navamanshachart');
  
  
</script>
  </div>
   <div class="panel panel-default">
    <div class="card-header white-text">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
          Planet Details</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
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