
<footer class="page-footer center-on-small-only mdb-color darken-4">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">First column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <h4>Material Design for Bootstrap</h4>
        <ul>
            <li>
                <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-danger waves-effect waves-light">Sign up!</a></li>
                <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default waves-effect waves-light">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               © 2016 Copyright: <a href="http://www.akashvaani.com"> Akashvaani.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/mdb.min.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "240px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}
$("body").click(function(e){
    debugger;
    if(e.target.className == "fa fa-bars")
    {
       openNav();
    }
  });
$("body").click(function(e){
    debugger;
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
 $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv').hide();
  }
});

</script>
<div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
</body>
</html>