<!-- main -->
<!-- main -->
<div style="height:150px;"></div>

<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo base_url('/assets/uploader/css/style.css'); ?>">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url('/assets/uploader/css/jquery.fileupload.css'); ?>">
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->

<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url('/assets/uploader'); ?>/js/jquery.fileupload-validate.js"></script>
<div class="container">
  <section class="section">
  <div class="col-md-4">
    <div class="card contact-card card-cascade narrower mb-r">
      <div class="admin-panel info-admin-panel">
        <div class="view primary-color">
          <h5>Edit Photo</h5>
        </div>
        <div class="card-block text-center"> <img src="<?php echo base_url('/assets/profies/thumbnail/'.(($customer['image']) ? $customer['image']:'avatar.png')); ?>" alt="User Photo" id="user_photo" class="rounded-circle contact-avatar my-2 mx-auto">
          <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
          
           <span class="btn fileinput-button btn-primary waves-effect waves-light">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Upload New Photo</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
     <br><br />
    <!-- The global progress bar -->
    <div id="progressdiv"></div>
          <button class="btn btn-danger waves-effect waves-light" id="del_profile_pic">Delete</button>
        </div>
      </div>
    </div>
        <!-- The fileinput-button span is used to style the file input field as button -->
     <br>
     <!-- The container for the uploaded files -->
   
<script type="text/javascript">
$('#del_profile_pic').click(function(){

if (confirm("Are you sure?")) {
       
$.post('<?=base_url('my-account/del_upload');?>', { id: <?=$customer['id'];?> })
  .done(function( data ) {
    $('#user_photo').attr('src', '<?=base_url('/assets/profies/thumbnail/avatar.png'); ?>');
  });
    } 

});

    $(function () {
        'use strict';
        var url = "<?=base_url()?>my-account/do_upload";
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
			beforeSend: function(e) {
                $('#progressdiv').html(' <div id="progress" class="progress"><div class="progress-bar progress-bar-success"></div></div>');     
            },
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
				$('#user_photo').attr('src', '<?=base_url('/assets/profies/thumbnail/');?>/' + file.name);
				$.post( "<?=base_url()?>my-account/update_customer", { image: file.name })
				  .done(function( data ) {
					$('#progressdiv').html('');
				  });
				});
            },
            progressall: function (e, data) { 
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>
 </div>
  <div class="col-md-8">
    <div class="card card-cascade narrower mb-r">
      <div class="admin-panel info-admin-panel">
        <!--Card image-->
        <div class="view primary-color">
          <h5>Edit Account</h5>
        </div>
        <!--/Card image-->
        <!--Card content-->
        <div class="card-block">
          <!-- Edit Form -->
       <?php echo form_open('/my-account/edit', 'id="my-account_edit"'); ?>
          <!--First row-->
          <div class="row">
            <!--First column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="form81" name="firstname" value="<?php echo $customer['firstname']; ?>" class="form-control validate" required>
                <label for="form81" data-error="wrong" data-success="right">First name</label>
              </div>
            </div>
            <!--Second column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="form82" name="lastname" class="form-control validate" value="<?php echo $customer['lastname']; ?>">
                <label for="form82" data-error="wrong" data-success="right">Last name</label>
              </div>
            </div>
          </div>
          <!--/.First row-->
          <!--First row-->
          <div class="row">
            <!--First column-->
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Enter Your Birthdate</p>
              <!--Blue select-->
              <div class="row">
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv" type="text" class="form-control" value="<?php echo ($customer['day'] > 0) ? $customer['day'] : ''; ?>" name="day" style="cursor:pointer" onclick="showDiv0()" onfocus="blur()" required="">
                    <label id="datelabel" for="mydiv" style="cursor:pointer">Day </label>
                  </div>
                </div>
                <div id="dateDiv" class="col-md-4 col-xs-4 datedrop">
                  <div class="card datebox"> <a id="1" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">1</a> <a id="2" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">2</a> <a id="3" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">3</a> <a id="4" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">4</a> <a id="5" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">5</a> <a id="6" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">6</a> <a id="7" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">7</a> <a id="8" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">8</a> <a id="9" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">9</a> <a id="10" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onclick="dateselect(this.id)">31</a> </div>
                </div>
                <!--/Blue select-->
                <!--Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv1" type="text" class="form-control" name="month" value="<?php echo ($customer['month'] > 0) ? $customer['month'] : ''; ?>" style="cursor:pointer" onclick="showDiv1()" onfocus="blur()" required="">
                    <label id="monthlabel" for="mydiv1" style="cursor:pointer">Month </label>
                  </div>
                </div>
                <div id="monthDiv" class="col-md-4 col-xs-4 monthdrop">
                  <div class="card monthbox"> <a id="01" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Jan</a> <a id="02" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Feb</a> <a id="03" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Mar</a> <a id="04" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Apr</a> <a id="05" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">May</a> <a id="06" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Jun</a> <a id="07" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Jul</a> <a id="08" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Aug</a> <a id="09" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Sep</a> <a id="10" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Oct</a> <a id="11" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Nov</a> <a id="12" class="dropdown-item waves-effect waves-light" onclick="monthselect(this.id)">Dec</a> </div>
                </div>
                <!--/Blue select-->
                <div class="col-md-4 col-xs-4">
                  <div class="md-form">
                    <input id="mydiv2" type="text" class="form-control" name="year" value="<?php echo ($customer['year'] > 0) ? $customer['year'] : ''; ?>" style="cursor:pointer" onclick="showDiv2()" onfocus="blur()" required="">
                    <label id="yearlabel" for="mydiv2" style="cursor:pointer">Year </label>
                  </div>
                </div>
                <div id="yearDiv" class="col-md-4 col-xs-4 yeardrop">
                  <div class="card yearbox"> <a id="2017" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2017</a> <a id="2016" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2016</a> <a id="2015" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2015</a> <a id="2014" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2014</a> <a id="2013" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2013</a> <a id="2012" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2012</a> <a id="2011" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2011</a> <a id="2010" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2010</a> <a id="2009" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2009</a> <a id="2008" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2008</a> <a id="2007" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2007</a> <a id="2006" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2006</a> <a id="2005" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2005</a> <a id="2004" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2004</a> <a id="2003" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2003</a> <a id="2002" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2002</a> <a id="2001" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2001</a> <a id="2000" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">2000</a> <a id="1999" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1999</a> <a id="1998" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1998</a> <a id="1997" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1997</a> <a id="1996" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1996</a> <a id="1995" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1995</a> <a id="1994" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1994</a> <a id="1993" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1993</a> <a id="1992" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1992</a> <a id="1991" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1991</a> <a id="1990" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1990</a> <a id="1989" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1989</a> <a id="1988" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1988</a> <a id="1987" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1987</a> <a id="1986" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1986</a> <a id="1985" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1985</a> <a id="1984" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1984</a> <a id="1983" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1983</a> <a id="1982" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1982</a> <a id="1981" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1981</a> <a id="1980" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1980</a> <a id="1979" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1979</a> <a id="1978" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1978</a> <a id="1977" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1977</a> <a id="1976" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1976</a> <a id="1975" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1975</a> <a id="1974" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1974</a> <a id="1973" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1973</a> <a id="1972" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1972</a> <a id="1971" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1971</a> <a id="1970" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1970</a> <a id="1969" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1969</a> <a id="1968" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1968</a> <a id="1967" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1967</a> <a id="1966" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1966</a> <a id="1965" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1965</a> <a id="1964" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1964</a> <a id="1963" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1963</a> <a id="1962" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1962</a> <a id="1961" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1961</a> <a id="1960" class="dropdown-item waves-effect waves-light" onclick="yearselect(this.id)">1960</a> </div>
                </div>
              </div>
            </div>
            <!--Second column-->
            <div class="col-md-6">
              <p style="font-weight:400;color:#0275d8;font-size:14px">Enter Your Time of Birth</p>
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv3" type="text" class="form-control" name="hour" value="<?php echo ($customer['hour']>0) ? $customer['hour']: ''; ?>" style="cursor:pointer" onclick="showDiv3()" onfocus="blur()" required="">
                    <label id="hourlabel" for="mydiv3" style="cursor:pointer">Hour </label>
                  </div>
                  <div id="hourDiv" class="col-md-12 col-xs-6 hourdrop">
                    <div class="card hourbox"> <a id="01" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onclick="hourselect(this.id)">24</a> </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="md-form">
                    <input id="mydiv4" type="text" class="form-control" name="minute" value="<?php echo ($customer['minute']>0)?$customer['minute']:''; ?>" style="cursor:pointer" onclick="showDiv4()" onfocus="blur()" required="">
                    <label id="minutelabel" for="mydiv4" style="cursor:pointer">Minute </label>
                  </div>
                  <div id="minuteDiv" class="col-md-12 col-xs-6 minutedrop">
                    <div class="card minutebox"> <a id="01" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">01</a> <a id="02" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">02</a> <a id="03" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">03</a> <a id="04" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">04</a> <a id="05" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">05</a> <a id="06" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">06</a> <a id="07" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">07</a> <a id="08" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">08</a> <a id="09" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">09</a> <a id="10" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">10</a> <a id="11" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">11</a> <a id="12" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">12</a> <a id="13" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">13</a> <a id="14" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">14</a> <a id="15" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">15</a> <a id="16" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">16</a> <a id="17" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">17</a> <a id="18" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">18</a> <a id="19" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">19</a> <a id="20" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">20</a> <a id="21" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">21</a> <a id="22" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">22</a> <a id="23" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">23</a> <a id="24" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">24</a> <a id="25" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">25</a> <a id="26" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">26</a> <a id="27" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">27</a> <a id="28" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">28</a> <a id="29" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">29</a> <a id="30" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">30</a> <a id="31" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">31</a> <a id="32" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">32</a> <a id="33" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">33</a> <a id="34" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">34</a> <a id="35" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">35</a> <a id="36" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">36</a> <a id="37" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">37</a> <a id="38" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">38</a> <a id="39" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">39</a> <a id="40" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">40</a> <a id="41" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">41</a> <a id="42" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">42</a> <a id="43" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">43</a> <a id="44" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">44</a> <a id="45" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">45</a> <a id="46" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">46</a> <a id="47" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">47</a> <a id="48" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">48</a> <a id="49" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">49</a> <a id="50" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">50</a> <a id="51" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">51</a> <a id="52" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">52</a> <a id="53" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">53</a> <a id="54" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">54</a> <a id="55" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">55</a> <a id="56" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">56</a> <a id="57" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">57</a> <a id="58" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">58</a> <a id="59" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">59</a> <a id="60" class="dropdown-item waves-effect waves-light" onclick="minuteselect(this.id)">60</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
           <!--Second row-->
                                            <div class="row">
                                                <!--First column-->
                                                          <div class="col-md-6">
                     
                   <?php echo form_input(array('id' => 'place', 'class' => 'form-control typeahead', 'type' => 'text', 'placeholder' => 'Birth Place', 'name' => 'birth_place', 'value' => $customer['birth_place'])); ?>
                <input type="hidden" id="latitude" name="latitude" placeholder="latitude" readonly value="<?php echo $customer['birth_place_latitude']; ?>">
                <input type="hidden" id="longitude" name="longitude" placeholder="longitude" readonly value="<?php echo $customer['birth_place_longitude']; ?>">
                <input type="hidden" id="timezone" name="timezone" placeholder="timezone" readonly value="<?php echo $customer['birth_timezone']; ?>">
            </div>
                                            
                                                <!--Second column-->
                                      
                                            </div>

				<div class="row">
            <div class="col-md-6">
                                                    <div class="md-form">
                                      <input type="email" id="form76" name="email" value="<?php echo $customer['email']; ?>" id="form76" class="form-control validate">
                                                        <label for="form76">Email address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
   				  <select class="form-control" id="sel1" name="gender">
                  <option value="-">Select Gender</option>
                  <option value="Male" <?php if($customer['gender'] == 'Male'): echo 'selected'; endif;?> >Male</option>
                  <option value="Female" <?php if($customer['gender'] == 'Female'): echo 'selected'; endif;?>>Female</option>
                </select>
      </div>
       </div>
       </div>
             <?php if($logged_customer->group->id == 2){ ?>      
                                                  <div class="col-md-6">
              
   				 <p style="font-weight:400;color:#0275d8;font-size:14px;margin-bottom:10px">Choose Role</p>
			<div class="col-md-6">
            <fieldset class="form-group">
            <input type="checkbox" name="role[]" value="Pandit" <?php if(in_array('Pandit', explode('|', $customer['role']))){ echo 'checked';} ?> id="checkbox11">
            <label for="checkbox11">Pandit</label>
            </fieldset></div><div class="col-md-6">
            <fieldset class="form-group">
            <input type="checkbox" name="role[]" value="Astrologer" <?php if(in_array('Astrologer', explode('|', $customer['role']))){ echo 'checked';} ?> class="filled-in" id="checkbox22">
            <label for="checkbox22">Astrologer</label>
            </fieldset>
            
      </div>

                                                </div>
                                           <?php }?>       
                                            <!--/.Second row-->
                                          
                                            <!--Third row-->
                                            <div class="row">
                                                <!--First column-->
                                                <div class="col-md-12">
                                                    <div class="md-form">
                                                     <textarea type="text" name="about_me" id="form78" class="md-textarea"><?php echo $customer['about_me']; ?></textarea>                                                        <label for="form78">Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--First column-->
                                                 <div class="col-md-4">
                                                    <div class="md-form">
                                                        <input type="text" id="city" name="address_city" value="<?php echo $customer['address_city']; ?>"  class="form-control validate">
                                                        <label for="city">City</label>
                                                    </div>
                                                </div>
                                                                   <div class="col-md-4">
                                                    <div class="md-form">
                                                        <input type="text" id="state" name="address_state" value="<?php echo $customer['address_state']; ?>"  class="form-control validate">
                                                        <label for="state">State</label>
                                                    </div>
                                                </div>
                                                          <div class="col-md-4">
                                                    <div class="md-form">
                                                        <input type="text" id="country" name="address_country" value="<?php echo $customer['address_country']; ?>"  class="form-control validate">
                                                        <label for="country">Country</label>
                                                    </div>
                                                </div>
                                                <!--Second column-->
                                      
                                            </div>
                                            <!--/.Third row-->
                                              <div class="row">
                                                <!--First column-->
                                                <div class="col-md-12">
                                                    <div class="md-form">
                                                     <textarea type="text" name="about_me" id="form78" class="md-textarea"><?php echo $customer['about_me']; ?></textarea>
                                                        <label for="form78">About me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
      <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary waves-effect waves-light">Update Account</button>
        </div>
      </div>
      <!-- /.Fourth row -->
      <?php echo form_close()?>
      <!-- Edit Form -->
    </div>
    <!--/.Card content-->
  </div>
</div>
</div>
</section>
<!--Section: Testimonials v.1-->
</div>

<!--  -->
<script>


 function linkselect(linkid){
    document.getElementById("mydiv").value=linkid;
    // $('#datelabel').addClass( 'active' );
 }
 function openNav() {
    document.getElementById("mySidenav").style.width = "240px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$("body").click(function(e){
    if(e.target.className == "fa fa-bars")
    {
       openNav();
   }
});
$("body").click(function(e){
    if(e.offsetX > 240)
    {
       closeNav();
   }
});
</script>

<script type="text/javascript" src="<?php echo base_url('/assets/landing/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/typeahead.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/api/js/geonames.js'); ?>"></script>
