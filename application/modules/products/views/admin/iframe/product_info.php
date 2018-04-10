<?php include('header.php');?>
<?php echo form_open_multipart('admin/products/product_addinfo/'.$product_id);?>
 <?php echo form_input(array('name'=>'id', 'type'=>'hidden', 'value' => $product_info->id));?>
    <div class="input-group col-md-12" style="width:100%;">
      <div class="input-group col-md-12">
      <label>Title:</label>
       <?php echo form_input(array('name'=>'title', 'class'=>'form-control', 'value' => $product_info->title, 'required' => 'required'));?>
      </div>
      <div class="input-group col-md-12">
      <label>Text:</label>
       <?php echo form_textarea(array('name'=>'text',  'class'=>'form-control redactor', 'value' => $product_info->text, 'required' => 'required'));?>
      </div>
     
      <div class="input-group col-md-12">
      
      <label class="btn btn-file  pull-right">
         <?php echo form_upload(array('name'=>'userfile', 'class'=>'btn btn-primary'));?>
       </label>
    </div>
       
        <div class="input-group col-md-12">

            <button class="btn btn-primary" name="submit" type="submit">Save</button>

    </div>
    </div>
<?php echo form_close(); ?>
<?php include('footer.php');