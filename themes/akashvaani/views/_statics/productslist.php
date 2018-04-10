<!--Section: Products v.2-->
<?php foreach($products as $product): ?>

<div class="col-lg-4 col-md-12 col-xs-6 mb-r product-list">

              <!--Card-->
              <div class="card-cascade wider">

                <!--Card image-->
                <div class="view hm-white-slight">
                      <img src="<?=resizedUrl(base_url(($product->image) ? 'uploads/images/full/'.$product->image : '/assets/astrology/img/gemcat.jpg'), 300, 300); ?>" class="img-fluid" alt="">
                 <a href="<?=base_url('/p/'.$product->slug);?>">
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                  <!--Category & Title-->
                  <h5 class="card-title"><strong><a href="<?=base_url('/p/'.$product->slug);?>"><?=substr(strip_tags($product->name), 0, 20);?></a></strong></h5>
                   
                    <div class="col-md-12"><s><?=format_currency($product->price_1); ?> </s>&nbsp;
                      <strong class="pdp-price"><?=format_currency($product->saleprice_1); ?></strong>
                    </div>
                   <div class="col-md-12"><p class="card-text">
                      <?=substr(strip_tags($product->excerpt), 0, 25);?></p>
                   </div>
                    
                            
                  
                </div>
            </div>
            <!--Card-->
          </div>
   <?php endforeach; ?>    

    <!--/First row-->

<!--/Section: Products v.2-->
<?php if($pagination){ ?>
            <div class="results-showMoreContainer">
            	<div class="results-showmore">
                 <div id="pagination">
                    <?php echo $pagination;?>
                    <div style="clear:both;"></div>
                 </div>
				</div>
<script type="text/javascript">
$('.paginationlink a').click(function(){
$(this).parents('div.results-showMoreContainer').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');
load_products($(this).attr('href'));
return false;
});
</script>
            </div>
 <?php } ?>           