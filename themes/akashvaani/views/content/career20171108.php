
<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-3 red" role="tablist">
    <li class="nav-item">
        <a class="nav-link result active" data-toggle="tab" href="#panel1" role="tab">Kundali Charts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link result" data-toggle="tab" href="#panel2" role="tab">Planet Details</a>
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
      Lagna Chart 
    </div>
    <div class="card-block">
<div class="UI-II" style="overflow: hidden;">
<div id="lagnchart" style="width: 95%; margin: 0 auto;"></div>
</div>
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
      <div class="UI-II" style="overflow: hidden;">
<div id="navamanshachart" style="width: 95%; margin: 0 auto;"></div>
</div>
    </div>
</div>
<!--/.Panel-->

     <!--Panel-->
<div class="card">
    <div class="card-header danger-color-dark white-text">
      Sun Chart 
    </div>
    <div class="card-block">
<div class="UI-II" style="overflow: hidden;">
<div id="sunchart" style="width: 95%; margin: 0 auto;"></div>
</div>
    </div>
</div>
<!--/.Panel-->
          </div>
          <div class="col-md-6">
              <!--Panel-->
<div class="card">
    <div class="card-header danger-color-dark white-text">
      Moon Chart 
    </div>
    <div class="card-block">
      <div class="UI-II" style="overflow: hidden;">
<div id="moonchart" style="width: 95%; margin: 0 auto;"></div>
</div>
    </div>
</div>
</div>
<!--/.Panel-->
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

    drawNorthChart(getPlanetArray(<?php echo json_encode($moonchart);?>), getSignArray(<?php echo json_encode($moonchart);?>), options,'#moonchart');
	drawNorthChart(getPlanetArray(<?php echo json_encode($navamanshachart);?>), getSignArray(<?php echo json_encode($navamanshachart);?>), options,'#navamanshachart');
 	drawNorthChart(getPlanetArray(<?php echo json_encode($sunchart);?>), getSignArray(<?php echo json_encode($sunchart);?>), options,'#sunchart');
	drawNorthChart(getPlanetArray(<?php echo json_encode($lagnchart);?>), getSignArray(<?php echo json_encode($lagnchart);?>), options,'#lagnchart');
	
</script>
  
    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>

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

    <!--/.Panel 2-->
<hr>
    <button type="button" class="btn btn-danger closeresult">close</button>
  

</div>
<script>
$(".closeresult").click(function() {
    $('#collapseResult').removeClass('collapse in');
    $('#collapseResult').addClass('collapse');
});
</script>