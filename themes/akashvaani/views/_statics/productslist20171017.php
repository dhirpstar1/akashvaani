<!--Section: Products v.2-->
<section class="section" style="padding-top:0px;padding-bottom:0px">

  
    <!--First row-->
      <section class="product-list_old">
<?php foreach($products as $product): ?>

 <!--First column-->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                <div class="view hm-white-slight">
           <img src="<?=resizedUrl(base_url(($product->image) ? 'uploads/images/full/'.$product->image : '/assets/astrology/img/gemcat.jpg'), 300, 300); ?>" class="img-fluid" alt=""></div>
                    <a>
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Category & Title-->
                   	<!-- <a href="" class="text-muted"><h5>Shoes</h5></a>-->
                    <h5 class="card-title"><strong> <a href="<?=base_url('/p/'.$product->slug);?>"><?=$product->name;?></a></strong></h5>

                    <!--Description-->
                    <p class="card-text"><?=substr($product->excerpt, 0, 80);?></p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <a class="btn btn-rounded waves-effect waves-light" href="<?=base_url('/p/'.$product->slug);?>">Buy Now</a>
                    </div>

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->

        </div>
        <!--/First column-->

   <?php endforeach; ?>    

    <!--/First row-->

</section>
<!--/Section: Products v.2-->
<div class="results-showMoreContainer"><div class="results-showmore">
<div id="pagination">
    <?php echo $pagination;?> <div class="col-md-6" style="text-align:left;">(<!-- /react-text --><!-- react-text: 1860 --><?=$total;?><!-- /react-text --><!-- react-text: 1861 -->)</div>
    <div style="clear:both;"></div>
</div>
</div>


<script type="text/javascript">

$('.paginationlink a').click(function(){
load_products($(this).attr('href'));
return false;
});


</script>
