<?php pageHeader('Constant Form')?>

<?php echo form_open('admin/locations/constant/'.$id); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="constant_key">Key</label>
               <?php echo form_input(['name'=>'constant_key', 'value'=>assign_value('constant_key', $constant_key), 'class'=>'form-control']);?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="constant_value">Value</label>
                <?php echo form_input(['name'=>'constant_value', 'value'=>assign_value('constant_value', $constant_value), 'class'=>'form-control']);?>
            </div>
        </div>

    </div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="constant_lng">Optional Value</label>
                <?php echo form_input(['name'=>'constant_optional_value', 'value'=>assign_value('constant_optional_value', $constant_optional_value), 'class'=>'form-control']);?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="constant_location">Location</label>
                <?php echo form_input(['name'=>'constant_location', 'value'=>assign_value('constant_location', $constant_location), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>

</form>

<script type="text/javascript">
$('form').submit(function() {
    $('.btn .btn-primary').attr('disabled', true).addClass('disabled');
});
</script>