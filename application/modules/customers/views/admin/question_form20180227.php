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
            
        </div>


<div class="col-md-12">
			<div class="col-md-6">
            	<div class="col-md-4"><strong>Male Name</strong></div>
                <div class="col-md-8"><?=$questiondata->mname;?> </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Date Of birth</strong></div>
                <div class="col-md-8"><?=$questiondata->mday;?>/<?=$questiondata->mmonth;?>/<?=$questiondata->myear;?> </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Time Of Birth</strong></div>
                <div class="col-md-8"> <?=$questiondata->mhour;?>:<?=$questiondata->mminute;?></div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Place Of Birth</strong> </div>
                <div class="col-md-8"><?=$questiondata->mbirth_place;?> </div>
            </div>
            
           			<div class="col-md-6">
            	<div class="col-md-4"><strong>Female Name</strong></div>
                <div class="col-md-8"><?=$questiondata->fname;?> </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Date Of birth</strong></div>
                <div class="col-md-8"><?=$questiondata->fday;?>/<?=$questiondata->fmonth;?>/<?=$questiondata->fyear;?> </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Time Of Birth</strong></div>
                <div class="col-md-8"> <?=$questiondata->fhour;?>:<?=$questiondata->fminute;?></div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-4"><strong>Place Of Birth</strong> </div>
                <div class="col-md-8"><?=$questiondata->fbirth_place;?> </div>
            </div>
</div>

<div class="col-md-12">&nbsp;</div>


 </div> 
    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
</form>
