<table class="table table-hover">
<thead class="thead-inverse">
<tr>
<th>Sr. no.</th>
<th>Name</th>
<th>D.O.B</th>
<th>T.O.B</th>
<th>Place</th>
<th>Kundali</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php if($kundalies): $count = 1; foreach($kundalies as $kundaly): ?>
<tr>
<th scope="row"><?=$count;?></th>
<td><?=$kundaly->mname.' '.$kundaly->fname;?></td>
<td><?=$kundaly->mday."/".$kundaly->mmonth.'/'.$kundaly->myear?></td>
<td><?=$kundaly->mhour.":".$kundaly->mminute?></td>
<td><?=$kundaly->mbirth_place;?></td>
<td><?=($kundaly->type == 1) ? 'individual' : 'couple'; ?></td>
<td><h5><a data-toggle="modal" data-target="#modal-fullscreen-chart" id="<?=$kundaly->id;?>" class="show_kundali_chart"><span class="badge red chip">Show Chart</span></a></h5></td>
</tr>
<?php $count++; endforeach; else:  ?>
<tr>
<td colspan="7"><div align="center">You haven't saved any kundali yet.</div></td>

</tr>
<?php endif;?>
</tbody>
</table>
<div class="pull-right">
<?php echo CI::pagination()->create_links();?>
</div>
<script type="text/javascript">
$('.pagination li a').click(function(){
var url = $(this).attr('href'); 
$('#booking_div').html('<div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>');  
$.get(url, function(data, status){
		$('#booking_div').html(data);
});
return false;
});
</script>
 <script type="text/javascript">

$('.show_kundali_chart').click(function(){ 
$('#show_kundali_chart_div').html('<div class="container kundaliform" align="center"><div class="formcard"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>'); 

$.get('<?=base_url('professional_show_kundali_chart');?>/' + $(this).attr('id'), function( data ) {
  $( "#show_kundali_chart_div").html( data );
 // alert( "Load was performed." );
});

});

</script>