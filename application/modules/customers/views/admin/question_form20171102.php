<div class="page-header">
    <h1>Question form</h1>
</div>

<?php echo form_open('admin/customers/questions_form/'.$id); ?>

     <div class="row">
<div class="col-md-6">

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Question</label>
                <?php echo form_input(['name'=>'question', 'value'=>assign_value('question', $question), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
                <label>Answer</label>
                <?php echo form_input(['name'=>'answer', 'value'=>assign_value('answer ', $answer), 'class'=>'form-control']); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Video Link</label>
                <?php echo form_input(['name'=>'answer_link', 'value'=>assign_value('answer_link', $answer_link), 'class'=>'form-control']); ?>
            </div>
        </div>
        
    </div>
    
 </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Name: </label>
                <?=$questiondata->mname;?> 
            </div>
             <div class="form-group">
                <label>Email: </label>
                <?=$questiondata->email;?>
            </div>
             <div class="form-group">
                <label>Phone: </label>
                <?=$questiondata->phone;?>
            </div>
            
             <div class="form-group">
                <label>Gender: </label>
                <?=$questiondata->gender;?>
            </div>
            
             <div class="form-group">
                <label>Date Of Birth: </label>
                <?=$questiondata->mday;?>/<?=$questiondata->mmonth;?>/<?=$questiondata->myear;?>
            </div>
            <div class="form-group">
                <label>Time Of Birth: </label>
                <?=$questiondata->mhour;?>:<?=$questiondata->mminute;?>
            </div>
            <div class="form-group">
                <label>Place Of Birth: </label>
                <?=$questiondata->mbirth_place;?>
            </div>
        </div>

 </div> 
    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
</form>
