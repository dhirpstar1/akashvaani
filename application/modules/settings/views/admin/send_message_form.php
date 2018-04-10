<h2>Send Message</h2>
<?php echo form_open('admin/settings/send_message_form/'.$id); ?>
<div class="col-md-12">
    <p><label><input type="checkbox" id="checkAll"/> Check all</label></p>
	<ul style=" max-height:400px; overflow:auto;" class="list-group" >
			<?php foreach($customers as $customer): ?>
            <li class="list-group-item" style="height:40px;"> <div class="col-md-1"><input type="checkbox" class="cb-element" name="selected[]" value="<?php echo $customer['firstname'].'_'.$customer['lastname'].'_'.$customer['email']; ?>"  /></div><div class="col-md-11"><?php echo $customer['email']; ?></div></li>
            <?php endforeach; ?>
	</ul>
</div>

    <div class="form-group">
        <label for="name"><?php echo lang('label_canned_name');?></label>
        <?php
        $name_array = array('name' =>'name', 'class'=>'form-control', 'value'=>assign_value('name', $name));

        if(!$deletable) {
            $name_array['class']    = "form-control disabled";
            $name_array['readonly'] = "readonly";
        }
        echo form_input($name_array);?>
    </div>

    <div class="form-group">
        <label for="subject"><?php echo lang('label_canned_subject');?> </label>
        <?php echo form_input(['name'=>'subject', 'class'=>'form-control', 'value'=>assign_value('subject', $subject)]);?>
    </div>
    <div class="form-group">
        <label for="description"><?php echo lang('label_canned_description');?></label>
        <?php echo form_textarea(['name'=>'content', 'class'=>'redactor', 'value'=>assign_value('content', $content)]); ?>
    </div>
    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
</form>
<script type="text/javascript">
    $('form').submit(function() {
        $('input[type="submit"]').attr('disabled', true).addClass('disabled');
    });
	
	$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
	
</script>
