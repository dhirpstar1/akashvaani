<?php include('header.php');?>
<?php echo form_open_multipart('admin/products/product_review/'.$product_id);?>
 <?php echo form_input(array('name'=>'id', 'type'=>'hidden', 'value' => $review->id));?>
    <div class="input-group col-md-12" style="width:100%;">
       <div class="input-group col-md-12">
      <label>Customer name:</label>
       <?php echo form_input(array('name'=>'customer_name', 'class'=>'form-control', 'value' => $review->customer_name, 'required' => 'required'));?>
      </div>
      <div class="input-group col-md-12">
      <label>Company name:</label>
       <?php echo form_input(array('name'=>'customer_company', 'class'=>'form-control', 'value' => $review->customer_company, 'required' => 'required'));?>
      </div>
      <div class="input-group col-md-12">
      <label>Comments:</label>
       <?php echo form_textarea(array('name'=>'review', 'class'=>'form-control redactor', 'value' => $review->review, 'required' => 'required'));?>
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