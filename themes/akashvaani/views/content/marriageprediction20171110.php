<div class="card">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
  <div class="card-header white-text">
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        kundali chart</a>
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
              Lagna Kundali
            </div>
            <div class="card-block"> 
                  <div class="UI-II" style="overflow: hidden;">
              <div id="lagnchart" style="width: 95%; margin: 0 auto;"></div>
            </div>
              </div>
             </div>
       </div>         
        <!--/.Panel-->
        
           <div class="col-md-6">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
              Navmansha Kundali
            </div>
            <div class="card-block"> 
                  <div class="UI-II" style="overflow: hidden;">
              <div id="navamanshachart" style="width: 95%; margin: 0 auto;"></div>
            </div>
              </div>
             </div>
       </div>         
        <div class="col-md-6">
              <!--Panel-->
   <div class="card">
            <div class="card-header danger-color-dark white-text">
              Sun Kundali
            </div>
            <div class="card-block"> 
                  <div class="UI-II" style="overflow: hidden;">
              <div id="sunchart" style="width: 95%; margin: 0 auto;"></div>
            </div>
              </div>
             </div>
       </div>         
        <!--/.Panel-->
                                   <div class="col-md-6">
                    <div class="card">
    <div class="card-header danger-color-dark white-text">
     Moon Kundali
    </div>
        <div class="card-block">
                    <div class="UI-II" style="overflow: hidden;">
              <div id="moonchart" style="width: 95%; margin: 0 auto;"></div>
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
  drawNorthChart(getPlanetArray(<?php echo json_encode($navmansh);?>), getSignArray(<?php echo json_encode($navmansh);?>), options,'#navamanshachart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($sunchart);?>), getSignArray(<?php echo json_encode($sunchart);?>), options,'#sunchart');
</script>
  </div>
  <div class="panel panel-default">
   <div class="card-header white-text">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Vimshottari Dasha</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
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
               <?php foreach ($current_vdasha as $key => $current_vdasha_value){?> 
                <div class="dashaFirstlevelData dashaData">
                  <div class="dashaFirstLevel dashaPlanet pull-left ng-binding"><b><?php echo $current_vdasha_value->planet; ?></b></div>
            <br />
                  <p class="ng-binding"><?php echo $current_vdasha_value->start; ?> -- <?php echo $current_vdasha_value->end; ?></p>
                </div>
                <div style="clear:both;"></div>
                <div></div>
                
                   <?php } ?>
                
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
                    <?php foreach ($major_vdasha as $key => $major_vdasha_value){?> 
                 <tr>
                      <td class="bold"><?php echo $major_vdasha_value->planet; ?></td>
                      <td><?php echo $major_vdasha_value->start; ?></td>
                      <td><?php echo $major_vdasha_value->end; ?></td>
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

  <?php /*?> <div class="panel panel-default">
    <div class="card-header white-text">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          Yogini Dasha</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <!--Panel-->
        <div class="card">
          <div class="card-header danger-color-dark white-text"> Current Yogini Dasha </div>
          <div class="card-block">
            <div class="UI-II">
              <div class="Crnt-Dasha">
                  <?php foreach ($current_yogini_dasha as $key => $current_yogini_dasha_value){?> 
              
                <div class="dashaFirstlevelData dashaData">
                  <div class="dashaFirstLevel dashaPlanet pull-left ng-binding"><b><?php echo $current_yogini_dasha_value->dasha_name; ?></b></div>
               <br />
                  <p class="ng-binding"><?php echo $current_yogini_dasha_value->start_date; ?> -- <?php echo $current_yogini_dasha_value->end_date; ?></p>
                </div>
                <div style="clear:both;"></div>
                <div></div>
        <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
        <!--/.Panel-->
      </div>
      <div class="col-md-6">
        <!--Panel-->
        <div class="card">
          <div class="card-header danger-color-dark white-text"> Major Yogini Dasha </div>
          <div class="card-block">
            <div class="UI-II ng-scope">
              <div class="table-bordered table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Dasha </th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Duration</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($major_yogini_dasha as $key => $major_yogini_dasha_value){?> 
                    <tr>
                      <td class="bold"><?php echo $major_yogini_dasha_value->dasha_name; ?></td>
                      <td><?php echo $major_yogini_dasha_value->start_date; ?></td>
                      <td><?php echo $major_yogini_dasha_value->end_date; ?></td>
                      <td><?php echo $major_yogini_dasha_value->duration; ?>year</td>
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
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          Char Dasha</a>
        <a class="float-xs-right" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        <i class="fa fa-chevron-circle-down resultdown" aria-hidden="true"></i></a>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <!--Panel-->
        <div class="card">
          <div class="card-header danger-color-dark white-text"> Current Char Dasha </div>
          <div class="card-block">
            <div class="UI-II">
              <div class="Crnt-Dasha">
               <?php foreach ($current_chardasha as $key => $current_chardasha_value){ if($current_chardasha_value->sign_name){?> 
                <div class="dashaFirstlevelData dashaData">
                  <div class="dashaFirstLevel dashaPlanet pull-left ng-binding"><b><?php echo $current_chardasha_value->sign_name; ?></b></div>
                  <br /><p class="ng-binding"><?php echo $current_chardasha_value->start_date; ?> -- <?php echo $current_chardasha_value->end_date; ?></p>
                </div>
                <div style="clear:both;"></div>
                <div></div>
                 <?php }} ?> 
                
              </div>
            </div>
          </div>
        </div>
        <!--/.Panel-->
      </div>
      <div class="col-md-6">
        <!--Panel-->
        <div class="card">
          <div class="card-header danger-color-dark white-text"> Major Char Dasha </div>
          <div class="card-block">
            <div class="UI-II ng-scope">
              <div class="table-bordered table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sign </th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Duration</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($major_chardasha as $key => $major_chardasha_value){?> 
                    <tr>
                     <td class="bold"><?php echo $major_chardasha_value->sign_name; ?></td>
                      <td><?php echo $major_chardasha_value->start_date; ?></td>
                      <td><?php echo $major_chardasha_value->end_date; ?></td>
                      <td><?php echo $major_chardasha_value->duration; ?>years</td>
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
  <?php */?>
  
  
  
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