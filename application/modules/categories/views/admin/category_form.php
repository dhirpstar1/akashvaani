<?php pageHeader(lang('category_form')); ?>

<?php echo form_open_multipart('admin/categories/form/'.$id); ?>

<div class="row">
    <div class="col-md-8">

        <div class="form-group">
            <label for="name"><?php echo lang('name');?></label>
            <?php echo form_input(['name'=>'name', 'value'=>assign_value('name', $name), 'class'=>'form-control']); ?>
        </div>

        <div class="form-group">
            <label for="description"><?php echo lang('description');?></label>
            <?php echo form_textarea(['name'=>'description', 'class'=>'redactor', 'value'=>assign_value('description', $description)]); ?>
        </div>


        <div class="form-group">
            <label for="excerpt"><?php echo lang('excerpt');?> </label>
            <?php echo form_textarea(['name'=>'excerpt', 'value'=>assign_value('excerpt', $excerpt), 'class'=>'form-control', 'rows'=>3]); ?>
        </div>

        <div class="form-group">
            <label for="image"><?php echo lang('image');?> </label>
            <div class="input-append">
                <?php echo form_upload(array('name'=>'image', 'class'=>'form-control'));?>
            </div>
                
            <?php if($id && $image != ''):?>
            
            <div style="text-align:center; padding:5px; border:1px solid #ddd;"><img src="<?php echo base_url('uploads/images/small/'.$image);?>" alt="current"/><br/><?php echo lang('current_file');?></div>
            
            <?php endif;?>
        </div>
        
        <?php if($id):?>
         <div class="well">
        <a href="<?=base_url('/admin/products/category_addinfo/'.$id);?>" class="btn btn-info addinfo">Additional informations</a>
        <hr />
        <div class="bs-example">
		<div class="panel-group" id="accordion">
    <?php foreach($add_info as $item): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$item->id;?>"><?=$item->title;?></a>
                    
                </h4>
            </div>
            <div id="collapse<?=$item->id;?>" class="panel-collapse collapse ">
                <div class="panel-body"><?php if($item->image): ?>
               	 <p><img src="<?php echo base_url('uploads/images/full/'.$item->image); ?>" class="img-fluid" alt=""></p>
                 <?php endif; ?>
                    <p>
                    <?=$item->text;?>
                    </p>
      <a href="<?=base_url('/admin/products/category_addinfo/'.$id.'/'.$item->id);?>" class="btn btn-info pull-left addinfo">Edit</a>
      <a href="<?=base_url('/admin/products/product_addinfo_delete/'.$id.'/'.$item->id);?>" class="btn btn-info pull-right" onclick="return confirm('Are you sure?');">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
        
        
        
    </div>
        <?php endif; ?>
        
    </div>
    <div class="col-md-4">
        <?php foreach($groups as $group):?>
            <fieldset>
                <legend><?php echo $group->name;?></legend>
                <div class="form-group">
                    <?php echo form_dropdown('enabled_'.$group->id, [1 => lang('enabled'), 0 => lang('disabled')], assign_value('enabled_'.$group->id,${'enabled_'.$group->id}), 'class="form-control"'); ?>
                </div>
            </fieldset>
        <?php endforeach;?>

        <div class="form-group">
            <label for="parent_id"><?php echo lang('parent');?> </label>
            <?php echo form_dropdown('parent_id', $categories, $parent_id, 'class="form-control"'); ?>
        </div>
        <div class="form-group">
            <label for="slug"><?php echo lang('slug');?> </label>
            <?php echo form_input(['name'=>'slug', 'value'=>assign_value('slug', $slug), 'class'=>'form-control']); ?>
        </div>
        
        <div class="form-group">
            <label for="sequence"><?php echo lang('sequence');?> </label>
            <?php echo form_input(['name'=>'sequence', 'value'=>assign_value('sequence', $sequence), 'class'=>'form-control']); ?>
        </div>

        <div class="form-group">
            <label for="seo_title"><?php echo lang('seo_title');?> </label>
            <?php echo form_input(['name'=>'seo_title', 'value'=>assign_value('seo_title', $seo_title), 'class'=>'form-control']); ?>
        </div>
        
        <div class="form-group">
            <label><?php echo lang('meta');?></label> 
            <?php echo form_textarea(['rows'=>3, 'name'=>'meta', 'value'=>assign_value('meta', html_entity_decode($meta)), 'class'=>'form-control']); ?>
            <span class="help-block"><?php echo lang('meta_data_description');?></span>
        </div>
        

    </div>
</div>


<button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>

</form>
<div id="addform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Additional Info</h4>
      </div>
      
      
      <div class="modal-body" id="loadform">
        <p>Loading...</p>
      </div>
      
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">

$(document).ready(function() {


$('.addinfo').click(function(){ 
$('#loadform').load($(this).attr('href'));
$('#addform').modal('show');
return false;
});
});
$('form').submit(function() {
    $('.btn .btn-primary').attr('disabled', true).addClass('disabled');
});
</script>