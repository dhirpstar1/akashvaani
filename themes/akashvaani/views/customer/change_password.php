<div style="height:150px;"></div>
<div class="container">
<?php echo form_open('my-account/change_password', 'id="changeForm"'); ?>
  <h1 class="text-center" style="font-weight:600;margin-bottom:50px">Change Password</h1>
  <div class="col-md-6 col-xs-12 center">
    <div class="change_pasword">
      <div class="card password_card" style="padding:20px;">
        <div class="md-form"> <i class="fa fa-lock prefix"></i>
          <input type="password" id="old" class="form-control validate" name="old_password" required>
          <label for="old" data-error="wrong" data-success="right">Old Password</label>
        </div>
        <div class="md-form"> <i class="fa fa-lock prefix"></i>
          <input type="password" id="new" class="form-control validate" name="password" required>
          <label for="new" data-error="wrong" data-success="right">New Password</label>
        </div>
        <div class="md-form"> <i class="fa fa-lock prefix"></i>
          <input type="password" id="confirm" class="form-control validate" name="confirm_password" required>
          <label for="confirm" data-error="wrong" data-success="right">Confirm Password</label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Change Password</button>
        </div>
      </div>
    </div>
    <?php if($message):?>
        <div class="alert green">
            <?php echo $message;?>
        </div>
    <?php endif;?>
    
    <?php if(validation_errors() || $error):?>
        <div class="alert red">
            <?php echo validation_errors().$error;?>
        </div>
    <?php endif;?>
  </div>
  <?php echo form_close()?>
  
</div>
