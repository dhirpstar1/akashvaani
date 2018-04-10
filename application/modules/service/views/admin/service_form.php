<h2>Custom Services</h2>
<?php echo form_open_multipart('admin/services/service_form/'.$id); ?>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Name</label>
            <?php echo form_input(['name'=>'name', 'value'=>assign_value('name', $name), 'class'=>'form-control', 'required' => 'required']); ?>
        </div>
        <div class="form-group">
            <label for="description">Price</label>
            <?php echo form_input(['name'=>'price', 'class'=>'form-control', 'required' => 'required', 'value'=>assign_value('price', $price)]); ?>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
<script type="text/javascript">
$('form').submit(function() {
    $('.btn .btn-primary').attr('disabled', true).addClass('disabled');
});
</script>