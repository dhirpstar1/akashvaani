      <div class="row">
          <div class="col-md-6">
                          <!--Panel-->
            <div class="card">
                <div class="card-header danger-color-dark white-text">
                  Lagna Chart
                </div>
                 <div class="card-block">
                           <div id="lagnchart"></div>
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
                           <div id="moonchart" style="width: 95%; margin: 0 auto;"></div>
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
                              <div id="sunchart" style="width: 95%; margin: 0 auto;"></div>
                            </div>
                </div>
        <!--/.Panel-->
          </div>
          <div class="col-md-6">
              <!--Panel-->
            <div class="card">
                        <div class="card-header danger-color-dark white-text">
                           Navamansha Chart
                        </div>
                        <div class="card-block">
                          <div id="navamanshachart" style="width: 95%; margin: 0 auto;"></div>
                        </div>
            </div>
			<!--/.Panel-->
          </div>
      </div>
      </div>
        
            <script src="<?php echo base_url('/api/js/custom.js'); ?>"></script>
            <script src="<?php echo base_url('/api/js/d3.min.js'); ?>"></script>
            <script src="<?php echo base_url('/api/js/Chart.js'); ?>"></script>
            <script src="<?php echo base_url('/api/js/SouthChart.js'); ?>"></script>
            <script type="text/javascript">
$( document ).ready(function() {
    var options = {
        lineColor : '#e40046',
        planetColor : '#000',
        signColor : '#000',
        width : 250
    };

  drawNorthChart(getPlanetArray(<?php echo json_encode($lagnchart);?>), getSignArray(<?php echo json_encode($lagnchart);?>), options,'#lagnchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($sunchart);?>), getSignArray(<?php echo json_encode($sunchart);?>), options,'#sunchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($moonchart);?>), getSignArray(<?php echo json_encode($moonchart);?>), options,'#moonchart');
  drawNorthChart(getPlanetArray(<?php echo json_encode($navmansh);?>), getSignArray(<?php echo json_encode($navmansh);?>), options,'#navamanshachart');
 }); 
</script>