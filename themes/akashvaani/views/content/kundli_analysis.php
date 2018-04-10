<div class="card">
<div class="panel-group" id="accordion">
 <div class="panel panel-default">
  <div class="card-header white-text">
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        kundali chart</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
       <div class="row">
          <div class="col-md-6">
              <!--Panel-->
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
<!--/.Panel-->
          </div>
          <div class="col-md-6">
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

<div class="panel panel-default">
            <div class="card-header white-text"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> Vimshottari Dasha</a> 
            <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse3"> <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a> </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <!--Panel-->
                    <div class="card">
                      <div class="card-header danger-color-dark white-text"> Current Vimshottari Dasha </div>
                      <div class="card-block">
                        <div class="UI-II">
                          <div class="Crnt-Dasha">
               
                            <div class="table-bordered table-responsive">                 
                     
<div class="UI-II">
<div class="Crnt-Dasha" style="padding:10px;">
<?php foreach($current_vdasha as $vdasha ){ ?>
           <div class="dashaFirstlevelData dashaData">
                <div class="dashaFirstLevel dashaPlanet pull-left ng-binding"><b><?php echo $vdasha->planet; ?></b></div><br />
                <b></b>
                <p class="ng-binding"><?php echo $vdasha->start; ?> -- <?php echo $vdasha->end; ?></p>
                </div>           
            <div style="clear:both;"></div>
            <div></div>
 	<?php } ?>
</div>
</div>

          </div>           
                     
                 
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.Panel-->
                  </div>
                  <div class="col-md-6">
                    <!--Panel-->
                    <div class="card">
                      <div class="card-header danger-color-dark white-text"> Major Vimshottari Dasha </div>
                      <div class="card-block">
                        <div class="UI-II ng-scope">
                          <div class="table-bordered table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Planet</th>
                                  <th>Start Date</th>
                                  <th>End Date</th>
                                </tr>
                              </thead>
                              <tbody>
                               <?php foreach($major_vdasha as $vdasha ){ ?>
                              <tr>
                                <td><?php echo $vdasha->planet; ?></td>
                                <td><?php echo $vdasha->start; ?></td>
                                <td><?php echo $vdasha->end; ?></td>
                              </tr>
          					<?php } ?>
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.Panel-->
                  </div>
                </div>
              </div>
            </div>
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