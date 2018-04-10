<div class="page-header">
    <h1><?php echo lang('customer_form');?></h1>
</div>


<div class="col-md-6">
<?php echo form_open('admin/customers/form/'.$id); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('firstname');?></label>
                <?php echo form_input(['name'=>'firstname', 'value'=>assign_value('firstname', $firstname), 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('lastname');?></label>
                <?php echo form_input(['name'=>'lastname', 'value'=>assign_value('lastname', $lastname), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('email');?></label>
                <?php echo form_input(['name'=>'email', 'value'=>assign_value('email', $email), 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('phone');?></label>
                <?php echo form_input(['name'=>'phone', 'value'=>assign_value('phone', $phone), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

 <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>About Me</label>
                <?php echo form_textarea(['name'=>'about_me', 'value'=>assign_value('about_me', $about_me), 'class'=>'form-control', 'rows' => 5]); ?>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Date Of Birth</label>
                <?php echo form_input(['name'=>'dob', 'value'=>assign_value('dob', $dob), 'class'=>'form-control', 'placeholder' =>'dd/mm/yyyy']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Date Of Time</label>
                <?php echo form_input(['name'=>'dot', 'value'=>assign_value('dot', $dot), 'class'=>'form-control', 'placeholder' =>'Hour:Minute']); ?>
            </div>
        </div>
    </div>

 <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Address</label>
                <?php echo form_input(['name'=>'address', 'value'=>assign_value('address', $address), 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Place of Birth</label>
                <?php echo form_input(['name'=>'birth_place', 'value'=>assign_value('birth_place', $birth_place), 'class'=>'form-control']); ?>
                 <?php echo form_input(['name'=>'birth_place_latitude', 'type' => 'hidden', 'value'=>assign_value('birth_place_latitude', $birth_place_latitude), 'class'=>'form-control']); ?>
                  <?php echo form_input(['name'=>'birth_place_longitude', 'type' => 'hidden', 'value'=>assign_value('birth_place_longitude', $birth_place_longitude), 'class'=>'form-control']); ?>
                   <?php echo form_input(['name'=>'birth_timezone', 'type' => 'hidden', 'value'=>assign_value('birth_timezone', $birth_timezone), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>


 <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('password');?></label>
                <?php echo form_password(['name'=>'password', 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('confirm');?></label>
                <?php echo form_password(['name'=>'confirm', 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="checkbox">
                <label>
                <?php echo form_checkbox(['name'=>'email_subscribe', 'value'=>1, 'checked'=>(bool)$email_subscribe]).' '.lang('email_subscribed'); ?>
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="checkbox">
                <label>
                    <?php echo form_checkbox(['name'=>'active', 'value'=>1, 'checked'=>$active]).' '.lang('active'); ?>
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo lang('group');?></label>
                <?php echo form_dropdown('group_id', $group_list, assign_value('group_id',$group_id), 'class="form-control"'); ?>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-6">
            <div class="form-group">
                <label>Answer</label>
               <?php echo form_input(['name'=>'answer', 'class'=>'form-control','value'=>assign_value('answer', $answer)]); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Answer Link</label>
               <?php echo form_input(['name'=>'answerlink', 'class'=>'form-control','value'=>assign_value('answerlink', $answerlink)]); ?>
            </div>
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
</form>
</div>
<div class="col-md-6">
<strong>Questions</strong>
<div class="row">
  <div class="panel-group" id="accordion">
     <?php foreach($customer_questions as $question): ?>
     
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title" style="padding:10px;">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$question->id;?>">
            <?=$question->question;?>
          </a>
          <span class="pull-right btn btn-primary">
         <?php if($question->payment_status == 0)
                {
                    echo 'Pending';
                }
                else
                {
                    echo 'Success';
                }
                ?>
          
          </span>
        </h4>
       
      </div>
      <div id="collapse<?=$question->id;?>" class="panel-collapse collapse">
        <div class="panel-body">
        <?php echo form_open('admin/customers/questions_form/'.$question->id); ?>
        	<input type="hidden" name="question" value="<?=$question->question;?>" />
           <div class="form-group">
                <label>Answer:</label>
                <?php echo form_textarea(['name'=>'answer', 'value'=>$question->answer, 'class'=>'form-control', 'rows' => 5]); ?>
            </div>
            <div class="form-group">
                <label>Video Link:</label>
                <?php echo form_input(['name'=>'answer_link', 'value'=>$question->answer_link, 'class'=>'form-control']); ?>
            </div>
             <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Save"/>
             <a class="btn btn-danger pull-right"  onclick="return confirm('Are you sure you want to delete?');" href="<?=base_url('/admin/customers/questions_delete/'.$question->id);?>"> <i class="icon-trash icon-white"></i> Delete</a>
              </div>
         </form>   
        </div>
      </div>
    </div>
  <?php endforeach; ?>
    </div>
</div>

</div>

</div>


<script>
$('.closeall').click(function(){
  $('.panel-collapse.in')
    .collapse('hide');
});
$('.openall').click(function(){
  $('.panel-collapse:not(".in")')
    .collapse('show');
});
</script>
<div class="clear"></div>