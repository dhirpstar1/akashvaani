
<!--footer-->
<footer class="page-footer center-on-small-only mdb-color darken-4">
  <!--Footer Links-->
  <div class="container-fluid">
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
          <li><a href="<?php echo base_url('/contact-us'); ?>">Contact Us</a></li>
          <li><a href="<?php echo base_url('/bank-details'); ?>">Bank Details</a></li>
        </ul>
      </div>
      <!--/.Second column-->

      <hr class="hidden-md-up">

      <!--Third column-->
      <div class="col-md-2">
        <h5 class="title">Get In Touch</h5>
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
 
<script>
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
</script>

<div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
</body>

</html>