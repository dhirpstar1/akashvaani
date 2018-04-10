<h2><?=$page_title; ?></h2>
<?php echo form_open('admin/products/filters_form/'.$id ); ?>
<div class="row">
  <div class="col-md-6">
    <div class="tab-content">
      <div class="tab-pane active" id="product_info">
        <div class="form-group">
          <label>Parent</label>
          <?php echo form_dropdown('parent_id', $parents, $filter->parent_id, array('name'=>'parent_id', 'class'=>'form-control')); ?> </div>
        <div class="form-group">
          <label>Title</label>
          <?php echo form_input(['placeholder'=>lang('name'), 'name'=>'title', 'value'=>assign_value('title', $filter->title), 'class'=>'form-control']); ?> </div>
        <div class="form-group">
          <label>Description</label>
          <?php echo form_textarea(['name'=>'description', 'class'=>'redactor', 'value'=>assign_value('description', $filter->description)]); ?> </div>
      </div>
      <div class="form-group">
      <a href="<?=base_url('admin/products/filters');?>" title="Back" class="btn btn-primary">Back</a>
      <button type="submit" class="btn btn-primary pull-right"><?php echo lang('save');?></button>
      </div>
    </div>
  </div>
  <div class="col-md-6">...</div>
</div>
<?php echo form_close();?> 