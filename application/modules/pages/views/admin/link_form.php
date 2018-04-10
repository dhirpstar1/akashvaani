<?php pageHeader('Marketing Page') ?>
<?php echo form_open_multipart('admin/pages/form/'.$id); ?>
<?php echo form_input(['name'=>'type', 'type' => 'hidden', 'value'=>1]);?>
<?php echo form_input(['name'=>'parent_id', 'type' => 'hidden', 'value'=>0]);?>
<?php echo form_input(['name'=>'remove_header_image_text', 'id' => 'remove_header_image_text', 'type' => 'hidden', 'value'=>'']);?>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="title"><?php echo lang('title');?></label>
            <?php echo form_input(['name'=>'title', 'value'=>assign_value('title', $title), 'class'=>'form-control', 'required' => 'required']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="menu_title"><?php echo lang('menu_title');?></label>
            <?php echo form_input(['name'=>'menu_title', 'value'=>assign_value('menu_title', $menu_title), 'class'=>'form-control', 'required' => 'required']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="seo_title"><?php echo lang('seo_title');?></label>
            <?php echo form_input(['name'=>'seo_title', 'value'=>assign_value('seo_title', $seo_title), 'class'=>'form-control', 'required' => 'required']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="slug"><?php echo lang('slug');?></label>
            <?php echo form_input(['name'=>'slug', 'value'=>assign_value('slug', $slug), 'class'=>'form-control', 'required' => 'required']);?>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-group">
        <label for="content">Heading</label>
        <?php echo form_input(['name'=>'heading', 'value'=>assign_value('heading', $heading), 'class'=>'form-control', 'required' => 'required']);?>
    </div>
</div>
<div class="form-group">
    <div class="form-group">
        <label for="content">Sub Heading</label>
        <?php echo form_input(['name'=>'sub_heading', 'value'=>assign_value('sub_heading', $sub_heading), 'class'=>'form-control', 'required' => 'required']);?>
    </div>
</div>

<div class="row">
     <div class="form-group">
                         <div class="col-md-12">  
                         <label for="content">Header Image</label>
                         <div class="row" style="padding:10px;" id="header_image_div">
                <?php if($header_image): ?><a href="javascript:void(0);" id="remove_header_image" class="btn btn-danger pull-right">Remove</a><img src="<?=base_url('/files/pages/'.$header_image);?>" class="img-responsive img-thumbnail rounded"/><?php endif; ?>  
                
                </div>
          
          <script type="text/javascript">
          
          $('#remove_header_image').click(function(){
		  if(confirm('Are you sure?')){
		  $('#remove_header_image_text').val('removed');
		  $('#header_image_div').html('');
		  }
		  });
          
          </script>
          
                        
                </div>
                <div class="col-md-12"> 
                 <label class="btn btn-primary" for="header_image_selector">
                    <?php echo form_input(['name'=>'header_image', 'class'=>'form-control', 'type' => 'file', 'id' => 'header_image_selector', 'style' => 'display:none;']);?>
                    Choose Header Image
                </label>
            </div>
            </div>
</div>

<br />

<div class="row">
<div class="form-group">
<div class="col-md-6">
    <div class="form-group">
        <label for="content"><?php echo lang('content');?> 1</label>
        <?php echo form_textarea(['name'=>'content_1', 'value'=>assign_value('content_1', $content_1), 'class'=>'form-control redactor']);?>
    </div>
    </div>
    <div class="col-md-6">
		 <div class="form-group">
         <div class="col-md-12">
         <label class="btn btn-primary" for="image1-file-selector">
    <?php echo form_input(['name'=>'image1', 'class'=>'form-control', 'type' => 'file', 'id' => 'image1-file-selector', 'style' => 'display:none;']);?>
    Choose 1st File
</label>
</div>
<div class="row" style="padding:10px;">
<?php if($image1): ?><img src="<?=base_url('/files/pages/'.$image1);?>" class="img-responsive img-thumbnail rounded " />  <?php endif; ?>  
</div>
    	</div>
    </div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<div class="col-md-6">
    <div class="form-group">
        <label for="content">Content 2</label>
        <?php echo form_textarea(['name'=>'content_2', 'value'=>assign_value('content_2', $content_2), 'class'=>'form-control redactor']);?>
    </div>
</div>    
    <div class="col-md-6">
		 <div class="form-group">
         <label class="btn btn-primary" for="image2-file-selector">
    <?php echo form_input(['name'=>'image2', 'class'=>'form-control', 'type' => 'file', 'id' => 'image2-file-selector', 'style' => 'display:none;']);?>
    Choose 2nd File
</label>
<div class="row" style="padding:10px;">
<?php if($image2): ?><img src="<?=base_url('/files/pages/'.$image2);?>" class="img-responsive img-thumbnail rounded " />  <?php endif; ?>  
</div>
	
    	</div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="parent_id">Location</label>
            <?php echo form_input(['name'=>'location', 'value'=>assign_value('location', $location), 'class'=>'form-control']); ?>
        </div>

        <div class="form-group">
            <label for="sequence"><?php echo lang('sequence');?></label>
            <?php echo form_input(['name'=>'sequence', 'value'=>assign_value('sequence', $sequence), 'class'=>'form-control']); ?>
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label><?php echo lang('meta');?></label>
            <?php echo form_textarea(['rows'=>'3', 'name'=>'meta', 'value'=>assign_value('meta', html_entity_decode($meta)), 'class'=>'form-control']); ?>
            <span id="helpBlock" class="help-block"><?php echo lang('meta_data_description');?></span>
        </div>
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>
</div>  

</form>