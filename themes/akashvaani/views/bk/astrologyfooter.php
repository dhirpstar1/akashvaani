
<?php /* ?><div id="bottom" style="display:none;">
      <div class="col-md-12" style="text-align:right">
      <span id="prompt" class="tag red" style="cursor:pointer"><i class="fa fa-times" aria-hidden="true"></i></span>
        
      </div>
      <div class="cc_banner cc_container cc_container--open">
      <a href="<?php echo base_url('/questions?type=3'); ?>" data-cc-event="click:dismiss" class="cc_btn cc_btn_accept_all">Ask Now</a>
      <p class="cc_message">Special Offer- Ask Three Questions for Just Rs 499</p>
      </div>
            </div>
<?php */ ?>
            <!--footer-->
<footer class="page-footer center-on-small-only mdb-color darken-4">
  <!--Footer Links-->
  <div class="container-fluid" style="font-size: 13px;">
    <div class="row">

      <!--First column-->
      <div class="col-md-3 offset-md-1">
      <div class="footerlogo"></div>
        <p>We are the fastest growing company when it comes to Vedic services and spiritual solutions.</p>
        <p>Our Domain expertise is in all kinds of Pujas & rituals, astrological consultancy and Vastu services, and giving all kinds of Vedic solutions and services under one umbrella.</p>
      </div>
      <!--/.First column-->

      <hr class="hidden-md-up">

      <!--Second column-->
      <div class="col-md-2 offset-md-1">
        <h5 class="title">Company</h5>
        <ul>
          <li><a href="<?php echo base_url('/about-us'); ?>">About</a></li>
          <li><a href="<?php echo base_url('/terms-condition'); ?>">Terms & Condition</a></li>
          <li><a href="<?php echo base_url('/privacy-policy'); ?>">Privacy</a></li>
          <li><a href="<?php echo base_url('/bank-details'); ?>">Bank Details</a></li>
          <li><a href="<?php echo base_url('/contact-us'); ?>">Contact Us</a></li>
        </ul>

     <ul class="footer-nav pb20">
                            <li class="footer-phone"><span class="fa fa-phone"></span> <?=CONTACT_NUMBER;?></li>
                 <li class="footer-address osLight">
                               <p>C56, Greenwood City, <br>Near HSBC building.<br>Sector 45, Gurgaon 122003.</p>
                            </li>
                        </ul>
                        <div class="col-md-12" style="padding:20px;"> 
        <a href="https://www.facebook.com/iamakashvaani/" target="_blank"><span class="fa  fa-facebook-square" style="font-size:40px;"></span> </a>
        <a href="https://twitter.com/iamakashvaani" target="_blank" class="twitter" ><span class="fa fa-twitter-square" style="font-size:40px;"></span></a>
        <a href="https://plus.google.com/+Akashvaani" target="_blank"><span class=" fa fa-google-plus-square" target="_blank" style="font-size:40px;"></span> </a>
        <a href="https://in.linkedin.com/company/akashvaani" target="_blank"><span class=" fa fa-linkedin-square" target="_blank" style="font-size:40px;"></span> </a>
    </div>


      </div>
      <!--/.Second column-->

      <hr class="hidden-md-up">

      <!--Third column-->
      <div class="col-md-2">
        <h5 class="title">Important link</h5>
        <ul class="footer-nav pb20">
                            <li><a href="<?=base_url('/questions');?>" title="Ask a question">Ask a question</a></li>
                             <li><a href="<?=base_url('/questions?report=1&ctype=1');?>">Report with commentary</a></li>
                              <li><a href="<?=base_url('/questions?type=3');?>">Offer- Ask Three Question @499</a></li>
                               <li><a href="<?=base_url('/questions?type=5');?>">Offer- Ask Five Question @799</a></li>
                                <li><a href="<?=base_url('/register');?>">Go for full consultation</a></li>
        </ul>                    
      </div>
      <!--/.Third column-->
<div class="col-md-2">
        <h5 class="title">Payment Option</h5>
        <div class="payment"></div>

</div>
      <hr class="hidden-md-up">

   

    </div>
  </div>
  <!--/.Footer Links-->

  <hr>



    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid">
         2015 Copyright: <a href="http://www.akahvaani.com"> Akashvaani.com </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>

  <!-- SCRIPTS -->
 <!-- JQuery -->

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/tether.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/bootstrap.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/mdb.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/astrology/'); ?>/js/common.js"></script>
  

<script type="text/javascript">
 $('.cc_btn_accept_all').click(function(){ 
  window.frames.iframewindow.test();
  $('#bottom').hide();
 
 });

  function call_from_child(count){
    var amounttext = '';
     for (i = 0; i < count; i++) {
         if(i < 3){
              if(i == 0){
                    amounttext += 'INR 299/- ';
              }else{
                 amounttext += ' + INR 150/- ';
              }
        }
    } 

      $("#bottom").fadeIn();
      $('#quecount').html('<b>' + count +'</b>');
      $('#amountcalc').html('<b>' + amounttext +'</b>');
      
  }


  // Find all iframes
var $iframes = $( "iframe" );
 
// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
    // Remove the hardcoded width &#x26; height attributes
    .removeAttr( "width" )
    .removeAttr( "height" );
});
 
// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
    // Get the parent container&#x27;s width
    var width = $( this ).parent().width();
    $( this ).width( width )
      .height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();
</script>
  <script>
   $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv').hide();
}
});

   function linkselect(linkid){
    document.getElementById("mydiv").value=linkid;
     //$('#datelabel').addClass( 'active' );
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
  $(".carousel-caption").click(function(e){
    closeNav();
  });
  function showDiv() {
   document.getElementById('serviceDiv').style.display = "block";
 }


</script>
<script type="text/javascript">
  
$('#next1').on('click', function(){
    $('#step1').removeClass('active');
    $('#pane21').removeClass('active in');
    $('#step2').addClass('active');
    $('#pane23').addClass('active in');
});
$('#next2').on('click', function(){
    $('#pane23').addClass('active in');
    $('#pane22').removeClass('active in');
    $('#step2').removeClass('active');
    $('#step3').addClass('active');
});
$('#prev1').on('click', function(){
    $('#pane21').addClass('active in');
    $('#pane22').removeClass('active in');
});
$('#next3').on('click', function(){
    $('#pane24').addClass('active in');
    $('#pane23').removeClass('active in');
    $('#step3').removeClass('active');
    $('#step4').addClass('active');
});
$('#prev2').on('click', function(){
    $('#pane21').addClass('active in');
    $('#pane23').removeClass('active in');
})
$('#next4').on('click', function(){
    $('#pane25').addClass('active in');
    $('#pane24').removeClass('active in');
    $('#step4').removeClass('active');
    $('#step5').addClass('active');
});
$('#prev3').on('click', function(){
    $('#pane23').addClass('active in');
    $('#pane24').removeClass('active in');
})
$('#next5').on('click', function(){
    $('#pane26').addClass('active in');
    $('#pane25').removeClass('active in');
    $('#step5').removeClass('active');
    $('#step6').addClass('active');
});
$('#prev4').on('click', function(){
    $('#pane24').addClass('active in');
    $('#pane25').removeClass('active in');
})

function openNav() {
    document.getElementById("mySidenav").style.width = "240px";
     $("#mySidenav").addClass("active");
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
     $("#mySidenav").removeClass("active");
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
function showDiv() {
   document.getElementById('dateDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#dateDiv').hide();
  }
});
function showDiv1() {
   document.getElementById('monthDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv1"){  // if click is not in 'mydiv'
    $('#monthDiv').hide();
  }
});
 function showDiv2() {
   document.getElementById('yearDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv2"){  // if click is not in 'mydiv'
    $('#yearDiv').hide();
  }
});
 function showDiv3() {
   document.getElementById('hourDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv3"){  // if click is not in 'mydiv'
    $('#hourDiv').hide();
  }
});
  function showDiv4() {
   document.getElementById('minuteDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv4"){  // if click is not in 'mydiv'
    $('#minuteDiv').hide();
  }
});
   $(function(){ /* to make sure the script runs after page load */

            $('a.read_more').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.bq-primary').find('.more_text').show();
                $(this).parents('.bq-primary').find('.read_more').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.bq-primary').find('.more_text').hide();
                $(this).parents('.bq-primary').find('.read_more').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
   function dateselect(dateid){
    document.getElementById("mydiv").value=dateid;
     $('#datelabel').addClass( 'active' );
   }
   function monthselect(monthid){
    document.getElementById("mydiv1").value=monthid;
     $('#monthlabel').addClass( 'active' );
   }
    function yearselect(yearid){
    document.getElementById("mydiv2").value=yearid;
     $('#yearlabel').addClass( 'active' );
   }
    function hourselect(hourid){
    document.getElementById("mydiv3").value=hourid;
     $('#hourlabel').addClass( 'active' );
   }
   function minuteselect(minuteid){
    document.getElementById("mydiv4").value=minuteid;
     $('#minutelabel').addClass( 'active' );
   }

     $("#pane131").click(function() {
     $('#earlytab').addClass( 'active' );
     $('#latetab').removeClass( 'active' );
     $('#denialtab').removeClass( 'active' );
     });
      $("#pane132").click(function() {
     $('#earlytab').removeClass( 'active' );
     $('#latetab').addClass( 'active' );
     $('#denialtab').removeClass( 'active' );
     });
        $("#pane133").click(function() {
     $('#earlytab').removeClass( 'active' );
     $('#latetab').removeClass( 'active' );
     $('#denialtab').addClass( 'active' );
     });
$(".closeresult").click(function() {
    $('#collapseResult').removeClass('collapse in');
    $('#collapseResult').addClass('collapse');
});
</script>
    <!-- Bootstrap Date-Picker Plugin -->

<div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
</body>

</html>