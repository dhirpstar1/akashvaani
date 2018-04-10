<?php $this->load->view('_blocks/pagesheader')?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/datetimepicker/css/bootstrap-datetimepicker.css" media="all"  type="text/css"/>

        <!-- Content -->
<style type="text/css">

.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>
        <div class="home-content">
            <div class="home-wrapper" align="center">
            
           <h1>Akashvaani Diwali Offer<h1>
           
                <div class="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-6">
                <div align="center">
                             
                 
                 <hr />
                 </div>
                     <div class="clearfix"></div>
                    
                                <div class="post-content" style="min-height:300px;">
                       
                       <div class="col-md-12">
                       <h1>Palmistry</h1>    
                       <h5>Upload photo of your Palm.</h5>
                       
                         <div class='col-sm-12 col-md-12' align="center">
                         
               <?php echo form_open_multipart('profile/offerdata', array('class' => 'form-horizontal', 'id' => 'palmistry', 'name' => 'palmistry', 'enctype' => 'multipart')); ?> 
               	
               <?php echo form_input(array('type' => 'hidden', 'name' => 'offertype', 'value' => 'palmistry')); ?> 					
        <div class="buttonsWrapper">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding:0px;">
              <div class='col-xs-12 col-sm-12 col-md-12'>
               <div class="clearfix"></div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> <?php echo form_input(array('id' => 'name', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Name', 'name' => 'name', 'value' => '', 'required' => 'required')); ?> </div>
                <div class='col-sm-12 col-md-12'>&nbsp;</div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> <?php echo form_input(array('id' => 'phone', 'class' => 'form-control', 'type' => 'tel', 'placeholder' => 'Phone', 'name' => 'phone', 'value' => '', 'required' => 'required', 'pattern' => '^\d{10}$')); ?> </div>
                 <div class='col-sm-12 col-md-12'>&nbsp;</div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> <?php echo form_input(array('id' => 'email', 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'value' => '', 'required' => 'required')); ?> </div>
                <div class='col-sm-12 col-md-12'>&nbsp;</div>

				 <div class="col-xs-12 col-md-12 col-sm-12" style="padding:0px;">  
				<div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    
                    
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" name="palmimage" accept="image/png, image/jpeg, image/gif" required/> <!-- rename it -->
                    </div>
                    
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
				</div>
                 <div class='input-group col-xs-12 col-sm-12 col-md-12' style="padding:15px;"> 
			 <?php echo form_submit(array('class' => 'btn btn-green', 'name' => 'submit', 'value' => 'Send'));?> 
             </div>
             </div>
              </div>

              
              
              <script type="text/javascript">
              $(function() {
	$('#palmistry').submit(function(e) {
		e.preventDefault();
		var formAction = $(this).attr('action');
		var formData = new FormData(this);
		$.ajax({
               type:"POST",
               url:formAction,
               data:formData,
               mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
				beforeSend : function(data){
				
				 $('#message').html("<span class='fa fa-spin fa-circle-o-notch'></span>");
				},
               success:function(data)
              {
                      $('#message').html("<p>Thank you for uploading your palm.</p>");
 					  $('#palmistry')[0].reset();
               }
       });
		return false;
	});
});
              
              </script>
              
              
               
</div>

            </div>
            <div class="clearfix"></div>
            <div id="message"></div>
          </div>
        </div>
        <?php echo form_close(); ?>
                </div>
                       <div class="clearfix"></div>
                       <hr />
                         <h1>Astrology Consultation</h1>    
                      

 	     <?php echo form_open('profile/offerdata', array('class' => 'form-horizontal', 'id' => 'Consultation', 'name' => 'Consultation')); ?>
          <?php echo form_input(array('type' => 'hidden', 'name' => 'offertype', 'value' => 'consultation')); ?>  						
        <div class="buttonsWrapper">
          <div class="row"><div class="clearfix"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding:0px;">
              <div class='col-xs-12 col-sm-12 col-md-12'>
               <div class='input-group col-xs-12 col-sm-12 col-md-12'> 
				<?php echo form_input(array('id' => 'name', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Name', 'name' => 'name', 'value' => '', 'required' => 'required')); ?> </div>
                <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
                 <div class='input-group col-xs-12 col-sm-12 col-md-12'> 
				<?php echo form_input(array('id' => 'phone', 'class' => 'form-control', 'type' => 'phone', 'placeholder' => 'Phone', 'name' => 'phone', 'value' => '', 'required' => 'required')); ?> </div>
 <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
                 <div class='input-group col-xs-12 col-sm-12 col-md-12'> 
				<?php echo form_input(array('id' => 'email', 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'value' => '', 'required' => 'required')); ?> </div>
              <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> 
                <div class='input-group date' id='dateselect'>
                  <?php echo form_input(array('id' => 'dob', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Date of Birth', 'name' => 'dob', 'value' => '', 'required' => 'required')); ?>                     
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              <script type="text/javascript">	
            $(function () {
                $('#dateselect').datetimepicker({
				 format: 'DD/MM/YYYY'
				});
            });
        </script>
               
				</div>
                <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> 
                
           

                <div class='input-group date' id='timeselect'>
                	<?php echo form_input(array('id' => 'tob', 'class' => 'form-control', 'type' => 'phone', 'placeholder' => 'Time of Birth', 'name' => 'tob', 'value' => '', 'required' => 'required')); ?>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>

        <script type="text/javascript">
    		
			$(function() {
    $('#timeselect').datetimepicker({
  format: 'LT'
    });
  });
  </script>
  
                
                
                
                
                
			 </div>
                <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
                <div class='input-group col-xs-12 col-sm-12 col-md-12'> 

    <script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
         // document.getElementById(component).value = '';
         // document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSYmkWeKacXeVhcqUJ5ChIhH-JCN5gSgE&libraries=places&callback=initAutocomplete"
        async defer></script>

				<?php echo form_input(array('id' => 'autocomplete', 'class' => 'form-control', 'type' => 'text', 'onFocus' => 'geolocate()', 'placeholder' => 'Birth Place', 'name' => 'place', 'value' => '', 'required' => 'required')); ?> </div>
                <div class='col-sm-12 col-md-12 palmheight'>&nbsp;</div>
              </div>
                <div class='col-sm-12 col-md-12' align="center">
                <?php echo form_submit(array('class' => 'btn btn-green', 'name' => 'submit', 'value' => 'Send'));?> 
                </div>
      
              <div class="clearfix"></div>
            </div>
            
            <div class='col-sm-12 col-md-2'>&nbsp;</div>
            <div class="col-md-10"><?php echo $message; ?></div>
            <div class="clearfix"></div>
          </div>
        </div>
        <?php echo form_close(); ?>
        
         <script type="text/javascript">
              $(function() {
	$('#Consultation').submit(function(e) {
		e.preventDefault();
		var formAction = $(this).attr('action');
		var formData = new FormData(this);
		$.ajax({
               type:"POST",
               url:formAction,
               data:formData,
               mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
				beforeSend : function(data){
				
				 $('#messageConsultation').html("<span class='fa fa-spin fa-circle-o-notch'></span>");
				},
               success:function(data)
              {
                      $('#messageConsultation').html("<p>Thank you for your message.</p>");
 					  $('#Consultation')[0].reset();
               }
       });
		return false;
	});
});
              
              </script>
                        
                                <div class="clearfix"></div>
        <div id="messageConsultation" style="font-size:14px;"></div>      
                        </div>
     
                        </div>
                       

                    </div>
                   
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

</script>
      <?php $this->load->view('_blocks/articlefooter')?>