<?php include('header.php');?>
<script type="text/javascript">
<?php if( CI::input()->post('submit') ):?>
$(window).ready(function(){
    $('#iframe_uploader', window.parent.document).height($('body').height());
});
<?php endif;?>
</script>

<?php if (!empty($error)): ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $error; ?>
    </div>
<?php endif; ?>
<?php echo form_open('admin/products/product_filter_update');?>
    <div class="input-group col-md-12" style="width:100%;">
       <ul class="list-group col-md-12">
       
       <?php foreach ($filters as $filter): ?>
          <li class="list-group-item" <?php if($filter->parent_id != 0) {?> style="padding-left:50px;" <?php } ;?>><input type="checkbox" name="filters[]" value=" <?php echo $filter->id;?>" />&nbsp;<?php echo $filter->title;?></li>
    <?php endforeach; ?>
       </ul>
       
    </div>
<?php echo form_close(); ?>

<?php include('footer.php');