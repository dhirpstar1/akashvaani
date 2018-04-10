<div style="height:150px;"></div>

<div class="container">
  <div class="row">
  <ol class="breadcrumb" style="background-color:#fff">
                      <li class="breadcrumb-item"><a href="<?=base_url('/');?>">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?=base_url('/products');?>">Products</a></li>
                      <li class="breadcrumb-item"><?=$catdata->name; ?></li>
                  </ol>
    <div class="col-md-3">
          <form name="filter_result" action="" id="filter_result"  method="post">
      <div class="sidebar">

                        <!-- Panel -->
                        <h5><strong>Category</strong></h5>
                        <div class="divider"></div>

                        <ul>
                        <?php foreach($categories as $catid => $category): ?>
                            <li class="filter_class_li">
                                <input type="checkbox" value="<?=$category->id;?>" id="checkbox<?=$category->id;?>" name="filter_category[]" class="filter_class">
                                <label for="checkbox<?=$category->id;?>"><?=$category->name;?></label>
                            </li>
						<?php endforeach; ?>
  
                        </ul>
						<?php foreach($filters as $filter): if($filter->parent_id == 0): ?>
 						<h5 class="pt-2"><strong><?=$filter->title;?></strong></h5>
                        <div class="divider"></div>
							<ul>
                            <?php foreach($filters as $filterinner): if($filterinner->parent_id == $filter->id): ?>
                            <li class="filter_class_li">
                                <input type="checkbox" name="filter[]" value="<?=$filterinner->id;?>" id="checkbox<?=$filter->id.$filterinner->id;?>">
                                <label for="checkbox<?=$filter->id.$filterinner->id;?>"><?=$filterinner->title;?></label>
                            </li>
							<?php endif; endforeach; ?>
						</ul>
						<?php endif; endforeach; ?>

                        <!-- Filter by color-->
                       
                    </div>
                     </form> 
    </div>
    <div class="col-md-9">
      
	<div class="col-md-12" id="loadproducts" align="center"><div align="center" class="results-showMoreContainer"><span class="fa fa-spin fa-circle-o-notch"></span></div></div>

		
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">

function load_products(url='<?=base_url('products/search');?>', type=''){
//$('#loadproductslist').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');
var loadtype = type;

    $.ajax({
        url: url,
        data:$('#filter_result').serialize(),
        type: "POST",
        dataType: "html",
        success: function (data) {
		console.log(data);
		if(loadtype == 'load'){
		$('#loadproducts').html(data);
		}else{
		$('.results-showMoreContainer').remove();
            $(data).appendTo('#loadproducts');
		}	
			//$('#loadproductslist').html('');
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });
}
$( document ).ready(function() {
    //console.log( "ready!" );
	load_products('<?=base_url('products/search');?>');
});

$('.filter_class_li').click(function(){
load_products('<?=base_url('products/search');?>', 'load');
});


</script>

