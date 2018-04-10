<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  
 <?php /*?> <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1" class=""></li>
    <li data-target="#carousel-example-2" data-slide-to="2" class=""></li>
  </ol><?php */?>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view"> <img src="<?php echo base_url('/uploads/images/full/'.$catdata->image); ?>" class="img-fluid" alt="">
        <div class="full-bg-img"> </div>
      </div>
      <!--Caption-->
      <div class="carousel-caption sider-caption">
        <div class="animated fadeInDown">
         <?php /*?> <div class="col-md-12">
            <h3 class="white-text"><span class="name ch">Book Astrologer In<br>
              Delhi &amp; NCR</span><br>
            </h3>
            <h5 style="color:#484848"><span class="cp">For Marriage,Health &amp; Career</span></h5>
            <div class="col-md-12"> <a class="btn btn-outline-white btn-rounded waves-effect waves-light explore" href="https://www.akashvaani.com/astrologer">Explore</a> </div>
          </div><?php */?>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!--/First slide-->
    
    
    <?php /*?><!--Second slide-->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view"> <img src="<?php echo base_url('/assets/astrology/img/ruby banner 2.jpg'); ?>" class="img-fluid" alt="">
        <div class="full-bg-img"> </div>
      </div>
      <!--Caption-->
      <div class="carousel-caption sider-caption">
        <div class="animated fadeInDown">
          <div class="col-md-12">
            <h3 class="white-text"><span class="name ch">For Marriager Astrology</span><br>
            </h3>
            <h5 style="color:#484848"><span class="cp">Marriage Prediction - Kundali Milan</span></h5>
            <div class="col-md-12"> <a class="btn btn-outline-white btn-rounded waves-effect waves-light explore" href="https://www.akashvaani.com/marriage-astrologer/">Explore</a> </div>
          </div>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!--/Second slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view"> <img src="<?php echo base_url('/assets/astrology/img/ruby banner 3.jpg'); ?>" class="img-fluid" alt="">
        <div class="full-bg-img"> </div>
      </div>
      <!--Caption-->
      <div class="carousel-caption sider-caption">
        <div class="animated fadeInDown">
          <div class="col-md-12">
            <h3 class="white-text"><span class="name ch">For Marriager Astrology</span><br>
            </h3>
            <h5 style="color:#484848"><span class="cp">Marriage Prediction - Kundali Milan</span></h5>
            <div class="col-md-12"> <a class="btn btn-outline-white btn-rounded waves-effect waves-light explore" href="https://www.akashvaani.com/marriage-astrologer/">Explore</a> </div>
          </div>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!--/Second slide--><?php */?>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev"> <span class="icon-prev" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next"> <span class="icon-next" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  <!--/.Controls-->
</div>
<div class="ruby-container">
  <link href="<?php echo base_url('/assets/widget/'); ?>/css/nouislider.css" rel="stylesheet">
  <style type="text/css">
#loadscreen{
	justify-content: space-around;
	opacity: 0.8;
	background-color: black;
	position: fixed;
	width: 100%;
	height: 100%;
	z-index: 100000;
	top: 0;
}

#loading{
	color: white;
	font-size: 40px;
	font-weight: 800;
	margin: 300px auto;
}

    .sidenavv {
    height: 0px; /* 100% Full-height */
    width: 100%; /* 0 width - change this with JavaScript */
    z-index: 1000; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #fff; /* Black*/
    overflow: hidden; /* Disable horizontal scroll 
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s ease; /* 0.5 second transition effect to slide in the sidenav */
    position: relative;
    padding: 0px;
    justify-content: space-around;
}

/* The navigation menu links */

#mySidenavv{
    z-index: 1000;
}
#mySidenav1{
    z-index: 2000;
}
#mySidenav2{
    z-index: 3000;
}
#mySidenav3{
    z-index: 3000;
}
#mySidenav4{
    z-index: 3000;
}
#mySidenav5{
    z-index: 3000;
}
#mySidenav6{
    z-index: 3000;
}

.sidenavv a {
    padding: 0px 8px 0px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #333;
    display: block;
    transition: 0.5s ease;
}

/* When you mouse over the navigation links, change their color */
.sidenavv a:hover, .offcanvas a:focus{
    color: #333;
}

/* Position and style the close button (top right corner) */
.sidenavv .closebtn {
    position: relative;
    top: 0;
    font-size: 36px;
    z-index: 1000;
    float: right;
    right: 10px;
}

.sidenavv .closebtnn {
    position: relative;
    top: 0;
    z-index: 1000;
    float: right;
    right: 10px;
}

.sidenavv .closebtnin {
    position: relative;
    top: 0;
    font-size: 36px;
    z-index: 1000;
}



/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenavv {}
    .sidenavv a {font-size: 18px;}
}

.btnn:hover, .btn-large:hover {
    background-color: #fff;
}


.btnn{    
	background-color: white;
    border-radius: 8px;
    margin: 10px;
    text-align: left; 
    font-weight: 600;
    font-size: 1rem;
    text-transform: capitalize;
    flex: 1;
    height: 46px;
    padding:0.3rem ;
    z-index: 1000;
    color: #333 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;
    border:none;
    max-width: 700px;
}
.btnn:focus, .btn-large:focus, .btn-floating:focus {
    background-color: white;
}
.bottom{
    justify-content: space-around;
    top:0%;
    width: 100%;
    background-color: #fff;
    display: flex;
    height: 66px;
    transition: 0.5s ease;
}
.fa{
    margin-right: 5%;
    margin-left: 2%;
}
.bot{
    display: flex;
    justify-content: space-around;
}
div.scrollmenu {
    background-color: #fff;
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    width: 100%;
}

div.scrollmenu a {
    display: inline-block;
    color: #333;
    text-align: center;
    padding: 7px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #ccc;
}


.scrollmenu::-webkit-scrollbar{    
    width: 0px;
}

.tabs .tab a {
    color: #333;
    font-weight: 600;
    font-size: 1rem;
}
.tabs{
    background-color: #eee;
    padding-bottom: 5px;
}
.tabs .tab a:hover, .tabs .tab a.active {
    background-color: transparent;
    color: #333;
}
[type="radio"]:not(:checked) + label, [type="radio"]:checked + label {
    padding: 0;
    height: auto;
}

[type="radio"]:checked + label {
    background-color: #eee;
}

[type="radio"]:not(:checked) + label:before, [type="radio"]:not(:checked) + label:after, [type="radio"]:checked + label:before, [type="radio"]:checked + label:after, [type="radio"].with-gap:checked + label:before, [type="radio"].with-gap:checked + label:after {
    border-radius: 50%;
    display: none;
}
.btn-primary:hover{
	background-color: #fff !important;
}

#mySidenav3 img{
    width: 200px !important;
    height: 100px !important;
}

.noUi-handle:focus {
	box-shadow: 0 0 5px orange;
}

.feature-products-box {
	margin: 8%;
    min-height: 190px !important;
    height: 190px !important;
    border: 1px solid rgba(0,0,0,.125);
    padding: 0px !important;	
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;
    border-radius: 5px;
    box-sizing: border-box;
}
.resCarousel {
    padding: 1% 5% 1% 1% !important;
    height: 220px;
}
.mobile-swipe {
    padding: 1% 5% 0% 1% !important;
}
nav.navbar{
    z-index: 2000;
}
input[type="radio"] {
    display: none;
}
@media(max-width: 800px){
.row.content-zindex.wow.fadeInUp {
    margin-left: -10%;
    margin-right: -10%;
}

.item{
	width: 140px !important;
    height: 190px !important;
}
.item_new{
	//width: 140px !important;
    //height: 190px !important;
}
}
.ruby-category .home-feature-products .feature-products-box {
    width: 100%;
    text-align: center;
    margin: 0px auto;
    background: #ffffff;
    min-height: 50px !important;
    padding: 20px;
}

.item{
	width: 200px;
}

.item_new{
	width: 200px;
}
pre {
  border:1px solid #000;
  overflow-x:auto;
  background: #222;
  color: #fff;
  text-shadow: none;
}

.wrapper {
    max-width: 100%;
    padding: 0 20px 40px 20px;
    margin: auto;
}
</style>
  <div class="bottom" id="top" style="width: 80%;margin-left: 10%;">
    <button id="outer" type="button" class="btnn btn-lg" onClick="openNav1()" style="border-radius: 23px;width: 100%"> <i class="fa fa-search" aria-hidden="true"></i>Carat &#8729; Shape &#8729; Origin<i class="fa fa-caret-right" aria-hidden="true" onclick="Submit()" style="float: right;"></i> </button>
  </div>
  <div id="mySidenav1" class="sidenavv" style="position: fixed;top: 0px;">
    <!--
<div class="bot">
   <button id="tap" type="button" class="btnn btn-lg" onClick="openNav5()">
        <i class="fa fa-star-o" aria-hidden="true"></i><span id="Carats">Carat</span><i class="fa fa-angle-right" style="float: right;font-size: 28px" aria-hidden="true"></i>
    </button></div>
<div class="bot">
   <button type="button" class="btnn btn-lg" onClick="openNav3()">
        <i class="fa fa-scissors" aria-hidden="true"></i><span id="Shapes">Shape</span><i class="fa fa-angle-right" style="float: right;font-size: 28px" aria-hidden="true"></i>
    </button></div>
<div class="bot">
   <button type="button" class="btnn btn-lg" onClick="openNav4()">
        <i class="fa fa-globe" aria-hidden="true"></i><span id="Origins">Origin</span><i class="fa fa-angle-right" style="float: right;font-size: 28px" aria-hidden="true"></i>
    </button></div>

<a href="javascript:void(0)" class="btnn closebtnn" onClick="Submit()" style="line-height: 1; width: 10%;height: 35px ;right: 45%;margin: 5px 0 0 0px;padding: 0px;line-height: 35px;text-align: center;">Find</a>
<a href="javascript:void(0)" class="closebtnin" onClick="closeNav1()" style="line-height: 1; width: 10%"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<a href="javascript:void(0)" class="closebtn" onClick="openNavv()" style="line-height: 1;float: right;margin-top: -30px;font-size: 25px;margin-right: -20px"><i class="fa fa-plus" aria-hidden="true"></i></a>-->
<a href="javascript:void(0)" class="closebtn" onClick="closeNav1()" ><i class="fa fa-close" aria-hidden="true"></i></a>
<div id="variables">
    
    <h4 style="color: #333;font-weight: 700;margin: 1%;" align="center">Carat</h4>
    <div id="test-slider1"></div>
    <div style="display: inline;position: absolute;padding: 10% 5% 5% 5%;">
      <div id="lower-value1" style="margin: 0 5px 0 5px; display: inline; color:#FFFFFF;"></div>
      <div id="upper-value1" style="margin: 0 5px 0 5px ;display: inline; color:#FFFFFF;"></div>
      Carat</div>
    
    <div class="scrollmenu" align="center">
    <h4 style="color: #333;font-weight: 700;margin: 1%;" align="center">Shapes</h4>
      <input type="radio" id="s1" name="shape" value="Cushion" onClick="myFunction2(this)">
      <label for="s1">
      <a>
      <div class="card"  align="center" style="width: auto;z-index: 1000; margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/cushion.png');?>" alt="Empty">
          <h5 style="color: black !important">Cushion</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s2" name="shape" value="Round" onClick="myFunction2()">
      <label for="s2">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/round.png');?>" alt="Empty">
          <h5 style="color: black !important">Round</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s4" name="shape" value="Oval" onClick="myFunction2()">
      <label for="s4">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/oval.png');?>" alt="Empty">
          <h5 style="color: black !important">Oval</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s5" name="shape" value="Heart" onClick="myFunction2()">
      <label for="s5">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/heart.png');?>" alt="Empty">
          <h5 style="color: black !important">Heart</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s6" name="shape" value="Asscher" onClick="myFunction2()">
      <label for="s6">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/asscher.png');?>" alt="Empty">
          <h5 style="color: black !important">Asscher</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s7" name="shape" value="Pear" onClick="myFunction2()">
      <label for="s7">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/pear.png');?>" alt="Empty">
          <h5 style="color: black !important">Pear</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s8" name="shape" value="Princess" onClick="myFunction2()">
      <label for="s8">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/princess.png');?>" alt="Empty">
          <h5 style="color: black !important">Princess</h5>
        </div>
      </div>
      </a>
      </label>
      <input type="radio" id="s9" name="shape" value="Radiant" onClick="myFunction2()">
      <label for="s9">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px x 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 1%;"> <img style="width: 100px;height: 100px;margin: 10px;padding: 0" src="<?=base_url('/assets/astrology/img/cushion.png');?>" alt="Empty">
          <h5 style="color: black !important">Radiant</h5>
        </div>
      </div>
      </a>
      </label>
    </div>
    <h4 style="color: #333;font-weight: 700;margin: 1%;" align="center">Origin</h4>
    <div class="scrollmenu">
      <input type="radio" id="o1" name="origin" value="Afganistan" onClick="myFunction3()">
      <label for="o1">
      <a>
      <div class="card"  align="center" style="width: auto;z-index: 1000; margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0px;padding: 0;" src="<?=base_url('/assets/astrology/img/Afganistan.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o2" name="origin" value="Australia" onClick="myFunction3()">
      <label for="o2">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0px;padding: 0;" src="<?=base_url('/assets/astrology/img/Australia.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o3" name="origin" value="Brazil" onClick="myFunction3()">
      <label for="o3">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="<?=base_url('/assets/astrology/img/Brazil.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o4" name="origin" value="cambodia" onClick="myFunction3()">
      <label for="o4">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0px;padding: 0;" src="<?=base_url('/assets/astrology/img/cambodia.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o5" name="origin" value="Colombia" onClick="myFunction3()">
      <label for="o5">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0px;padding: 0;" src="<?=base_url('/assets/astrology/img/Colombia.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o6" name="origin" value="India" onClick="myFunction3()">
      <label for="o6">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0px;padding: 0;" src="<?=base_url('/assets/astrology/img/India.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o7" name="origin" value="Japan" onClick="myFunction3()">
      <label for="o7">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0;padding: 0;" src="<?=base_url('/assets/astrology/img/Japan.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o8" name="origin" value="Macedonia" onClick="myFunction3()">
      <label for="o8">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 100px;height: 100px;margin: 0;padding: 0;" src="<?=base_url('/assets/astrology/img/Macedonia.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
      <input type="radio" id="o9" name="origin" value="Madagascar" onClick="myFunction3()">
      <label for="o9">
      <a>
      <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px x 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
        <div class="card-block" style="padding: 10px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="<?=base_url('/assets/astrology/img/Madagascar.png');?>" alt="Empty"> </div>
      </div>
      </a>
      </label>
    </div>
     <div class="col-md-12">&nbsp;</div>
     <div class="col-md-2"></div>
   <div class="col-md-8">
    <button id="tap" type="button" class="btn-lg btn btn-secondary wow fadeInRight waves-effect waves-light" onClick="myFunction10()" style="padding: 10px; display: inline-flex;bottom: 0px; float:left;">Advance Search </button>
   
   <button id="tap" type="button" class="btn-lg btn btn-secondary wow fadeInRight waves-effect waves-light" onClick="myFunction10()" style="padding: 10px; display: inline-flex;bottom: 0px; float:right;">next </button>
        </div>
        <div class="col-md-2"></div>
         <div class="col-md-12">&nbsp;</div>
</div>
<div id="contact_form" class="" style="display:none;">
		<div class="col-md-4"></div>
        <div class="col-md-4">
       
                     
<div class="col-md-12 rightsidebar desktopsidebar">
 <form action="<?=base_url('/service/product_enquiry');?>" class="form-horizontal" id="productenquiry" method="post" accept-charset="utf-8">
 <input name="carat" value="" id="form_carat" type="hidden">
 <input name="shape" value="" id="form_shape" type="hidden">
 <input name="origin" id="form_origin" value="" type="hidden">
 <input name="product_id" id="product_id" value="" type="hidden">
  <input name="product_name" id="product_name" value="" type="hidden">
   <input name="refrence_page" id="refrence_page" value="<?=$catdata->name;?>_category_page" type="hidden">
  
  <div class="modal-body">       
      <div class="card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> 
 
        <div class="card-block">
         <div class="row" style="padding: 0 0 20px;">
          <div class="col-md-12">
        <div class="card-header sidecard white-text"> Send Enquiry</div>
        </div>
        <br /><br />
        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-user prefix"></i>
                <input id="name" name="name" class="form-control" required="" type="text">
                <label for="name" class="">Your Name</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-phone prefix"></i>
                <input id="phone" name="phone" class="form-control" required="" type="text">
                <label for="phone">Phone No.</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-email prefix"></i>
                <input id="email" name="email" class="form-control" required="" type="text">
                <label for="phone">Email</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="qsn" class="md-textarea" name="message"></textarea>
                <label for="qsn">Your message.</label>
              </div>
            </div>
          </div>
         
                    
        </div>

    </div>	    <div class="modal-footer">
                <button id="prevmessage" type="button" class="btn btn-secondary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Back</button>

                 <button type="submit" id="ask_enquiry" class="btn btn-secondary wow fadeInRight waves-effect waves-light" style="visibility: visible; animation-name: fadeInRight;border-radius: 35px;background: #ff3366;">Submit<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span></button>
                 
                 <div id="enquiry_result"></div>
                 
                 
            </div>
            </form>
            </div>


        
			
  </div>
</div>
</div>
 <script>
    $('form#productenquiry').submit(function(e) {
    var form = $(this);

		$('#enquiry_result').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
		//$('#ask_enquiry').css('visibility', 'hidden');
    $.ajax({
        type: "POST",
        url: "<?=base_url('/service/product_enquiry'); ?>",
        data: form.serialize(),
        success: function(data){ //
			$('#enquiry_result').html('<div align="center">'+data+'</div>');  
        },
         error: function(resp) {  }
   });
      e.preventDefault(); 
});
$('#prevmessage').click(function(){
				$('#contact_form').hide();		
				$('#variables').show();	
});
		function myFunction10(){
				
				var low = document.getElementById('lower-value1').innerHTML; // 0
				var high = document.getElementById('upper-value1').innerHTML;  // 1
				$('#form_carat').val(low+'-'+high);
				$('#variables').hide();		
				$('#contact_form').show();			
		}
</script>
   
  
  
</div>
<div id="mySidenavv" class="sidenavv" style="position: fixed;top: 200px;">
  <div class="bot">
    <button type="button" class="btnn btn-lg" onClick="openNav2()"> <i class="fa fa-diamond" aria-hidden="true"></i><span id="Gems">Gem</span><i class="fa fa-angle-right" style="float: right;font-size: 28px" aria-hidden="true"></i> </button>
  </div>
  <div class="bot">
    <button type="button" class="btnn btn-lg" onClick="openNav6()"> <i class="fa fa-check-square-o" aria-hidden="true"></i><span id="Quality">Quality</span><i class="fa fa-angle-right" style="float: right;font-size: 28px" aria-hidden="true"></i> </button>
  </div>
  <a href="javascript:void(0)" class=" btnn closebtnn" onClick="Submit()" style="line-height: 1; width: 10%;height: 40px ;right: 45%;margin: 4px 0 0 0px;padding: 0px;line-height: 40px;text-align: center;">Find</a> <a href="javascript:void(0)" class="closebtnin" onClick="closeNavv()" style="line-height: 1;"><i class="fa fa-angle-up" aria-hidden="true"></i></a> </div>
<div id="mySidenav2" class="sidenavv Full-height" style="position: fixed;top: 0px;"> <a href="javascript:void(0)" class="closebtn" onClick="closeNav2()" ><i class="fa fa-close" aria-hidden="true"></i></a>
  <h4 style="color: #333;font-weight: 700;margin: 5%;" align="center">Gems</h4>
  <div class="scrollmenu">
    <input type="radio" id="r1" name="rate" value="Cat's Eye" onClick="myFunction()" >
    <label for="r1">
    <a>
    <div class="card"  align="center" style="width: auto;z-index: 1000; margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (1).png" alt="Empty">
        <h5 style="color: black !important">Cat's Eye</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r2" name="rate" value="Diamond" onClick="myFunction()">
    <label for="r2">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (2).png" alt="Empty">
        <h5 style="color: black !important">Diamond</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r3" name="rate" value="Emerald" onClick="myFunction()">
    <label for="r3">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (3).png" alt="Empty">
        <h5 style="color: black !important">Emerald</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r4" name="rate" value="Hessonite" onClick="myFunction()">
    <label for="r4">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (4).png" alt="Empty">
        <h5 style="color: black !important">Hessonite</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r5" name="rate" value="Blue Sapphire" onClick="myFunction()">
    <label for="r5">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (5).png" alt="Empty">
        <h5 style="color: black !important">Blue Sapphire</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r6" name="rate" value="Red Coral" onClick="myFunction()">
    <label for="r6">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (6).png" alt="Empty">
        <h5 style="color: black !important">Red Coral</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r7" name="rate" value="Pearl" onClick="myFunction()">
    <label for="r7">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (7).png" alt="Empty">
        <h5 style="color: black !important">Pearl</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r8" name="rate" value="Yellow Sapphire" onClick="myFunction()">
    <label for="r8">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (8).png" alt="Empty">
        <h5 style="color: black !important">Yellow Sapphire</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r9" name="rate" value="Ruby" onClick="myFunction()">
    <label for="r9">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (9).png" alt="Empty">
        <h5 style="color: black !important">Ruby</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="r10" name="rate" value="Rudraksha" onClick="myFunction()">
    <label for="r10">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;
    box-shadow: rgba(0,0,0,.1) 0 8px 50px 0;">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/1 (10).png" alt="Empty">
        <h5 style="color: black !important">Rudraksha</h5>
      </div>
    </div>
    </a>
    </label>
  </div>
</div>
<div id="mySidenav3" class="sidenavv Full-height" style="position: fixed;top: 0px;"> <a href="javascript:void(0)" class="closebtn" onClick="closeNav3()" ><i class="fa fa-close" aria-hidden="true"></i></a>
  <h4 style="color: #333;font-weight: 700;margin: 5%;" align="center">Shapes</h4>
  <div class="scrollmenu">
    <input type="radio" id="s1" name="shape" value="Cushion" onClick="myFunction2()">
    <label for="s1">
    <a>
    <div class="card"  align="center" style="width: auto;z-index: 1000; margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (1).jpg" alt="Empty">
        <h5 style="color: black !important">Cushion</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s2" name="shape" value="Round" onClick="myFunction2()">
    <label for="s2">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (2).jpg" alt="Empty">
        <h5 style="color: black !important">Round</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s3" name="shape" value="Emerald" onClick="myFunction2()">
    <label for="s3">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (3).jpg" alt="Empty">
        <h5 style="color: black !important">Emerald</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s4" name="shape" value="Oval" onClick="myFunction2()">
    <label for="s4">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (4).jpg" alt="Empty">
        <h5 style="color: black !important">Oval</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s5" name="shape" value="Heart" onClick="myFunction2()">
    <label for="s5">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (5).jpg" alt="Empty">
        <h5 style="color: black !important">Heart</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s6" name="shape" value="Marquise" onClick="myFunction2()">
    <label for="s6">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (6).jpg" alt="Empty">
        <h5 style="color: black !important">Marquise</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s7" name="shape" value="Pear" onClick="myFunction2()">
    <label for="s7">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (7).jpg" alt="Empty">
        <h5 style="color: black !important">Pear</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s8" name="shape" value="Princess" onClick="myFunction2()">
    <label for="s8">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (8).jpg" alt="Empty">
        <h5 style="color: black !important">Princess</h5>
      </div>
    </div>
    </a>
    </label>
    <input type="radio" id="s9" name="shape" value="Radiant" onClick="myFunction2()">
    <label for="s9">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px x 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 1%;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0" src="img/size (9).jpg" alt="Empty">
        <h5 style="color: black !important">Radiant</h5>
      </div>
    </div>
    </a>
    </label>
  </div>
</div>
<div id="mySidenav4" class="sidenavv Full-height" style="position: fixed;top: 0px;"> <a href="javascript:void(0)" class="closebtn" onClick="closeNav4()" ><i class="fa fa-close" aria-hidden="true"></i></a>
  <h4 style="color: #333;font-weight: 700;margin: 5%;" align="center">Origin</h4>
  <div class="scrollmenu">
    <input type="radio" id="o1" name="origin" value="London" onClick="myFunction3()">
    <label for="o1">
    <a>
    <div class="card"  align="center" style="width: auto;z-index: 1000; margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (1).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o2" name="origin" value="Cape town" onClick="myFunction3()">
    <label for="o2">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (2).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o3" name="origin" value="Wellington" onClick="myFunction3()">
    <label for="o3">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (3).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o4" name="origin" value="Stockholm" onClick="myFunction3()">
    <label for="o4">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (4).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o5" name="origin" value="Tokyo" onClick="myFunction3()">
    <label for="o5">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (5).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o6" name="origin" value="Amsterdam" onClick="myFunction3()">
    <label for="o6">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (6).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o7" name="origin" value="San Francissco" onClick="myFunction3()">
    <label for="o7">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (7).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o8" name="origin" value="Berlin" onClick="myFunction3()">
    <label for="o8">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (8).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
    <input type="radio" id="o9" name="origin" value="Dubin" onClick="myFunction3()">
    <label for="o9">
    <a>
    <div class="card"  align="center" style="width: auto;margin: 0 !important;padding: 0 !important;box-shadow: 0 8px x 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);">
      <div class="card-block" style="padding: 0px;"> <img style="width: 120px;height: 100px;margin: 0;padding: 0;" src="img/city (9).jpg" alt="Empty"> </div>
    </div>
    </a>
    </label>
  </div>
</div>
<div id="mySidenav5" class="sidenavv Full-height" style="position: fixed;top: 0px;"> <a href="javascript:void(0)" class="closebtn" onClick="closeNav5()" ><i class="fa fa-close" aria-hidden="true"></i></a>
  <h4 style="color: #333;font-weight: 700;margin: 5%" align="center">Carat</h4>
  <div id="test-slider1"></div>
  <div style="display: inline;position: absolute;padding: 10% 5% 5% 5%;">
    <div id="lower-value2" style="margin: 0 5px 0 5px; display: inline;"></div>
    -
    <div id="upper-value2" style="margin: 0 5px 0 5px ;display: inline;"></div>
    Carat</div>
  <button id="tap" type="button" class="btnn btn-lg" onClick="myFunction4()" style="padding: 10px; display: inline-flex;position: absolute;bottom: 0px;left: 40%;right: 40%">Done </button>
</div>
<div id="mySidenav6" class="sidenavv Full-height" style="position: fixed;top: 0px;"> <a href="javascript:void(0)" class="closebtn" onClick="closeNav6()" ><i class="fa fa-close" aria-hidden="true"></i></a>
  <h4 style="color: #333;font-weight: 700;margin: 5%" align="center">Quality</h4>
  <div id="test-slider2"></div>
  <div style="display: inline;position: absolute;padding: 10% 5% 5% 5%;">
    <div id="value" style="margin: 0 5px 0 5px; display: inline;"></div>
  </div>
  Quality
  <button id="tap" type="button" class="btnn btn-lg" onClick="myFunction5()" style="padding: 10px; display: inline-flex;position: absolute;bottom: 0px;left: 40%;right: 40%">Quality </button>
</div>
<script type="text/javascript" src="<?=base_url('/assets/js/jcarousel/dist/jquery.jcarousel.js');?>"></script>
<script type="text/javascript" src="<?=base_url('/assets/js/jcarousel/examples/responsive/jcarousel.responsive.js');?>"></script>
<link href="<?=base_url('/assets/js/jcarousel/examples/responsive/jcarousel.responsive.css');?>" rel="stylesheet">
<br><br><br>
<div class="container">    
     <div class="wrapper">
         
            <div class="">
    <div class="jcarousel">
        <ul><?php foreach($categories as $key => $category): ?>
            <li> <div class="item_new" align="center" ><a href="<?=base_url('/productsbycat/'.$catdata->slug.'/'.$category->slug);?>" tabindex="-1">
                     <div class="feature-products-box" tabindex="<?=$key;?>"> 
                      
                         <img width="150" height="150" src="<?php echo base_url(($category->image) ? 'uploads/images/full/'.$category->image : '/assets/astrology/img/gemcat.jpg'); ?>" alt="<?=$item->name;?>" style="width: 120px;height: 180px">
                      <div class="products-box-title">
                        <h2><?=$category->name;?></h2> 
                      </div> 
                     </div>
                         </a>
                   
                    </div> </li>
                        <li> <div class="item_new" align="center" ><a href="<?=base_url('/productsbycat/'.$catdata->slug.'/'.$category->slug);?>" tabindex="-1">
                     <div class="feature-products-box" tabindex="<?=$key;?>"> 
                      
                         <img width="150" height="150" src="<?php echo base_url(($category->image) ? 'uploads/images/full/'.$category->image : '/assets/astrology/img/gemcat.jpg'); ?>" alt="<?=$item->name;?>" style="width: 120px;height: 180px">
                      <div class="products-box-title">
                        <h2><?=$category->name;?></h2> 
                      </div> 
                     </div>
                         </a>
                   
                    </div> </li>
         <?php endforeach; ?>
        </ul>
         <div class="slider-left-arrow-container"></div>
              <div class="slider-right-arrow-container"></div>
              <a href="javascript:void(0);" class="jcarousel-control-prev"><div class="slider-left-arrow-container leftLst"><i style="padding-top:15px;" class="fa fa-angle-left" aria-hidden="true"></i></div></a>
        <a href="javascript:void(0);" class="jcarousel-control-next"><div class="slider-right-arrow-container rightLst"><i style="padding-top:15px;" class="fa fa-angle-right" aria-hidden="true"></i></div></a> 
    </div>
    </div>
     </div>
</div>
<script>
   
</script>   
        
  
  <div class="ruby-product"  style="display:none;">
    <div class="home-feature-products">
      <div class="container">
        <div class="row content-zindex  wow fadeInUp">
          <h1>Buy
            <?=$catdata->name;?>
            Product</h1>
          <div class="mobile-swipe">
            <div class="resCarousel" data-items="1,3,5,5" data-slide="5" id="ResSlid2">
              <div class="resCarousel-inner" style="transform: translateX(0px); width: 2360px;">
                <?php foreach($products as $item): ?>
                <div class="item" style="width: 200px;">
                  <div class="feature-products-box" tabindex="0"> <a href="<?=base_url('/product/'.$item->slug);?>" tabindex="-1">
                    <div class="feature-products-img"> <img src="<?php echo base_url(($item->primary_image) ? 'uploads/images/full/'.$item->primary_image : '/assets/astrology/img/gemcat.jpg'); ?>" alt="<?=$item->name;?>"> </div>
                    <div class="feature-products-box-txt">
                      <div class="feature-products-box-title">
                        <h2>
                          <?=$item->name;?>
                        </h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <h3>
                          <?=$item->name;?>
                        </h3>
                        <p>
                          <?=substr($item->description, 0, 50);?>
                        </p>
                        <span class="btn btn-overlay">Explore <i class="fa fa-angle-double-right" aria-hidden="true"></i></span> </div>
                    </div>
                    </a> </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="slider-left-arrow-container"></div>
              <div class="slider-right-arrow-container"></div>
              <button class="leftLst" tabindex="0"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
              <button class="rightLst" tabindex="0"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider-new"  style="display:none;"> <a id="show-products_next" class="btn btn-rounded waves-effect waves-light">Show more</a> </div>
  <section class="container ft-cards-2" style="display:none;">
  <header class="sec-heading">
    <h2>Our Top Trending Products</h2>
    <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span> </header>
  <div class="row">
    <?php foreach($products as $key => $item): ?>
    <?php if($key == 2): ?>
    <div class="more-products col-md-12">
      <?php endif; ?>
      <div class="col-md-6">
        <!--First column-->
        <div class="col-md-5 mb-r">
          <!--Featured image-->
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url(($item->primary_image) ? 'uploads/images/full/'.$item->primary_image : '/assets/astrology/img/gemcat.jpg'); ?>" alt="<?=$item->name;?>" width="200"> <a>
            <div class="mask"></div>
            </a> </div>
        </div>
        <!--/First column-->
        <!--Second column-->
        <div class="col-md-7 mb-r">
          <!--Excerpt-->
          <h4>
            <?=$item->name;?>
          </h4>
          <p>
            <?=substr($item->description, 0, 50);?>
          </p>
          <a class="btn btn-primary btn-rounded waves-effect waves-light" href="<?=base_url('product/'.$item->slug); ?>">See more</a> </div>
        <!--/Second column-->
      </div>
      <?php endforeach; ?>
      <?php if(count($categories) > 2): ?>
    </div>
    <?php endif; ?>
    <div style="clear:both;"></div>
    <div style="text-align:center;"> <a id="show-products" class="btn btn-primary btn-rounded waves-effect waves-light">Show more</a> <a id="hide-products" class="btn btn-primary btn-rounded waves-effect waves-light">Show less</a> </div>
    </section>

    <div class="ruby-content">
      <?php foreach($add_info as $key => $item): ?>
      <div class="row">
        <header class="sec-heading">
          <h2>
            <?=$item->title;?>
          </h2>
        </header>
        <!--First column-->
        <div class="col-md-4 mb-r">
          <!--Featured image-->
          <div class="view overlay hm-white-slight"> <img src="<?php echo base_url('uploads/images/full/'.$item->image); ?>" class="img-fluid" alt="">
            </p>
            <a>
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
        </div>
        <!--/First column-->
        <div class="col-md-1 col-xs-12 mb-r"></div>
        <!--Second column-->
        <div class="col-md-7 mb-r">
          <!--Excerpt-->
          <?=substr($item->text, 0, 500);?>
          <a data-toggle="modal" data-target="#readmore<?=$key;?>" style="color: blue;">Read more(+)</a> </div>
        <!--/Second column-->
      </div>
      <!-- Modal -->
      <div class="modal fade" id="readmore<?=$key;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <h4 class="modal-title w-100" id="myModalLabel">
                <?=$item->title;?>
              </h4>
            </div>
            <!--Body-->
            <div class="modal-body">
              <p>
                <?=$item->text;?>
              </p>
            </div>
            <!--Footer-->
            <div class="modal-footer"> <a type="button" class="btn btn-secondary" data-dismiss="modal">Show Products</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> Close </button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!-- Modal -->
      <?php endforeach; ?>
    </div>
  </div>

  <div class="apointment">
    <div class="container">
      <!--First row-->
      <div class="row mb-3 fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
        <!--First column-->
        <div class="col-lg-12 text-xs-center smooth-scroll">
          <!--Icon-->
          <i class="fa fa-check fa-4x light-blue-text pt-1 pb-2"></i>
          <!--Title-->
          <h2 class="mb-2">Gems you should wear. Ask an Expert.</h2>
          <!--Description-->
          <p class="text-muted">At "Akashvaani" Our experienced and renowned Astrologers will study your charts in depth . They will suggest you which gems you should wear.</p>
          <!--Button-->
          <a class="btn btn-lg btn-outline-white waves-effect waves-light" data-toggle="modal" data-target="#myModal" style="margin-top: 25px;margin-bottom: 25px; border-radius:35px"><i style="margin-right:6px" class="fa fa-phone" aria-hidden="true"></i>Ask and Buy</a> </div>
        <!--/First column-->
      </div>
      <!--/First row-->
    </div>
  </div>
  
  
  
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Provide your contact details </h4>
            </div>
            <!--Body-->
            <div class="modal-body">
              
<!-- Nav tabs -->


<!-- Tab panels -->
	<form action="<?=base_url('/service/booking');?>" class="form-horizontal" id="sendenquiry1000" method="post" accept-charset="utf-8">
 
		<input type="hidden" name="category_id" value="1"  />
        <input type="hidden" name="reference_page" value="<?=$catdata->name;?> Gems Page"  />
 
<div class="tab-content" style="padding:1rem">
      <!--Panel 5-->
    <div class="tab-pane fade in active" id="pane25" role="tabpanel">
  <p><strong>Provide your contact details</strong></p>

       <div class="row">
       <div class="col-md-12">

        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-user prefix"></i>
          <input type="text" id="form1" class="form-control" name="first_name" required>
          <label for="form1">Your Name</label>
        </div>

      </div>
      <div class="col-md-12">

        <div class="md-form wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <i class="fa fa-phone prefix"></i>
          <input type="text" id="form2" class="form-control" name="phone" required>
          <label for="form2">Your Phone</label>
        </div>

      </div>
       <div class="col-md-12">

        <div class="md-form">
    <i class="fa fa-envelope prefix"></i>
    <input type="email" id="form9" class="form-control validate" name="email" required>
    <label for="form9" data-error="wrong" data-success="right">Your email</label>
</div>

      </div>
  
  </div>
<div class="modal-footer">
<div id="enquiry_result2">...</div>
                <button type="submit" id="finishdone" class="btn btn-secondary">Send</button>
            </div>
    </div>
    <!--/.Panel 5-->
    
</div>
</form> <script>
    $('form#sendenquiry1000').submit(function(e) {
    var form = $(this);
    e.preventDefault();
	$('#enquiry_result2').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>');  
    $.ajax({
        type: "POST",
        url: "<?=base_url('/service/booking');?>",
        data: form.serialize(),
        success: function(data){ 
		$('#enquiry_result2').html('Thank you for providing your details.'); 
		$('#myModal').modal('hide'); 
        },
         error: function(resp) { 
		 //alert(JSON.stringify(resp)); 
		 }
   });
});
</script> 


            </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div>	
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <hr>
  <div class="container" style="display:none;">
    <div class="page-section p-130-cont bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div>
              <h2 class="section-title2 mb-45 text-center p-0">What People Say</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach($reviews as $review): ?>
          <!--item-->
          <div class="col-sm-6">
            <div class="mb-30">
              <div class="ts4-text-cont">
                <?=$review->review;?>
              </div>
              <div class="ts4-author-cont clearfix">
                <div class="ts4-author-img"> <img src="<?php echo base_url('uploads/images/full/'.$review->customer_image); ?>" class="img-circle" alt=""> </div>
                <div class="ts4-author-info">
                  <div class="ts-name">
                    <?=$review->customer_name;?>
                  </div>
                  <div class="ts-type">
                    <?=$review->customer_company;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--itme-->
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <section class="top-posts">
      <h1 class="text-center font-up font-bold mt-1 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;margin-bottom:100px;">Top Posts</h1>
      <div class="row">
        <?php foreach($posts as $post): //print_r($post);?>
        <!--First column-->
        <div class="col-lg-3 col-md-12 mb-r">
          <!--Featured image-->
          <div class="view overlay hm-white-slight mb-2"> <img src="<?=resizedUrl(base_url('uploads/images/medium/'.$post->primaryimage['filename']), 265, 150); ?>"> <a>
            <div class="mask waves-effect waves-light"></div>
            </a> </div>
          <!--Excerpt-->
          <a href="" class="indigo-text">
          <h5><i class="fa fa-star-half-o"></i>Lifestyle</h5>
          </a>
          <div class="col-md-12" style="height:80px;"> <a href="<?=base_url('/blog/'.$post->slug);?>">
            <h4>
              <?=substr($post->name, 0, 100);?>
            </h4>
            </a> </div>
          <p>by <a><strong>Aksahvaani</strong></a>,
            <?=date('d/m/Y', strtotime($post->date));?>
          </p>
          <p>
            <?=$post->excerpt;?>
          </p>
          <a class="btn btn-primary btn-rounded waves-effect waves-light">Read more</a> </div>
        <!--/First column-->
        <?php endforeach; ?>
      </div>
    </section>
  </div>
</div>
<script type="text/javascript">
function openNavv() {
    document.getElementById("mySidenavv").style.height = "220px";
    document.getElementById("mySidenav1").style.height = "200px";
}

function closeNavv() {
    document.getElementById("mySidenavv").style.height = "0";
    document.getElementById("mySidenavv").style.marginTop = "0px";
    document.getElementById("mySidenav1").style.height = "0";
    document.getElementById("top").style.height = "66px";
}

function openNav1() {
$('#variables').show();		
				$('#contact_form').hide();
    document.getElementById("mySidenav1").style.height = "100%";
    document.getElementById("top").style.height = "0px";
    document.getElementById("outer").style.visibility = "hidden";
    document.getElementsByClassName("navbar").style.visibility = "hidden";
}

function closeNav1() {
					
    $('#productenquiry')[0].reset();
    $('#enquiry_result').html('');				
    document.getElementById("mySidenav1").style.height = "0";
    document.getElementById("top").style.height = "66px";
    document.getElementById("outer").style.visibility = "visible";
    document.getElementsByClassName("navbar").style.visibility = "visible";

				
}

function openNav2() {
    closeNavv();
    document.getElementById("mySidenav2").style.height = "100%";
    document.getElementById("top").style.height = "0px";
}

function closeNav2() {
    document.getElementById("mySidenav2").style.height = "0";
    openNav1();
    openNavv();
}

function openNav3() {
    closeNavv();
    document.getElementById("mySidenav3").style.height = "100%";
    document.getElementById("top").style.height = "0px";
}

function closeNav3() {
    document.getElementById("mySidenav3").style.height = "0";
    document.getElementById("top").style.height = "66px";
    openNav1();
}
function openNav4() {
    closeNavv();
    document.getElementById("mySidenav4").style.height = "100%";
    document.getElementById("top").style.height = "0px";
}

function closeNav4() {
    document.getElementById("mySidenav4").style.height = "0";
    document.getElementById("top").style.height = "66px";
    openNav1();
}
function openNav5() {
    closeNavv();
    document.getElementById("mySidenav5").style.height = "100%";
    document.getElementById("top").style.height = "0px";
}

function closeNav5() {
    document.getElementById("mySidenav5").style.height = "0";
    document.getElementById("top").style.height = "66px";
    openNav1();
}
function openNav6() {
    closeNavv();
    document.getElementById("mySidenav6").style.height = "100%";
    document.getElementById("top").style.height = "0px";
}

function closeNav6() {
    document.getElementById("mySidenav6").style.height = "0";
    document.getElementById("top").style.height = "66px";
    openNav1();
    openNavv();
}

</script>
<script src="<?php echo base_url('/assets/widget/'); ?>/js/nouislider.js"></script>
<script >
        $(document).ready(function(){
    //$('ul.tabs').tabs();
  });
        
 var slider1 = document.getElementById('test-slider1');
    
slider1.style.height = '20px';
slider1.style.width = '80%';
slider1.style.margin = '80px auto 30px';

   noUiSlider.create(slider1, {
    start: [ 2, 4], // 4 handles, starting at...    
    connect: true, // Display a colored bar between the handles
    orientation: 'horizontal', // Orient the slider vertically
    behaviour: 'tap-drag', // Move handle on tap, bar is draggable
    step: 1,
    tooltips: true,
    range: {
        'min': 0,
        'max': 10
    },
    pips: { // Show a scale with the slider
        mode: 'steps',
        stepped: true,
        density: 4
    }
});
  

var nodes = [
	document.getElementById('lower-value1'), // 0
	document.getElementById('upper-value1')  // 1
];

// Display the slider value and how far the handle moved
// from the left edge of the slider.+ ', ' + positions[handle].toFixed(2) + '%'
slider1.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
	nodes[handle].innerHTML = parseInt(values[handle]) ;
});      

var slider = document.getElementById('test-slider2');
    
slider.style.height = '20px';
slider.style.width = '80%';
slider.style.margin = '80px auto 30px';

   noUiSlider.create(slider, {
    start: [2], // 4 handles, starting at...
    orientation: 'horizontal', // Orient the slider vertically
    behaviour: 'tap-drag', // Move handle on tap, bar is draggable
    step: 1,
    tooltips: true,
    range: {
        'min': 0,
        'max': 5,
    },
    pips: { // Show a scale with the slider
        mode: 'steps',
        stepped: true,
        density: 4
    }
});
  

var nodes1 = [
	document.getElementById('value'), // 0
];

// Display the slider value and how far the handle moved
// from the left edge of the slider.+ ', ' + positions[handle].toFixed(2) + '%'
slider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
	nodes1[handle].innerHTML = parseInt(values[handle]) ;
});      


function myFunction() {
        var rates = document.getElementsByName('rate');
        var rate_value;
        for(var i = 0; i < rates.length; i++){
           if(rates[i].checked){
           rate_value = rates[i].value;
            }
        }
document.getElementById('Gems').innerHTML = rate_value;
closeNav2();
    }


    function myFunction2() {
        var rates = document.getElementsByName('shape');
	
        var rate_value;
        for(var i = 0; i < rates.length; i++){
           if(rates[i].checked){
           rate_value = rates[i].value;
            }
        }
		document.getElementById('form_shape').value = rate_value;
		//$('#form_shape').val(rate_value);
		closeNav3();
    }
    function myFunction3() {
        var rates = document.getElementsByName('origin');
        var rate_value;
        for(var i = 0; i < rates.length; i++){
           if(rates[i].checked){
           rate_value = rates[i].value;
            }
        }
		document.getElementById('form_origin').value = rate_value;
		closeNav4();
    }

    function myFunction4() {
	var low = document.getElementById('lower-value1').innerHTML; // 0
	var high = document.getElementById('upper-value1').innerHTML;  // 1
		//alert($('#lower-value1').text());
		document.getElementById('Carats').innerHTML = low + ' - ' + high;
		closeNav5();
    }

function myFunction5() {
	var low = document.getElementById('value').innerHTML;
		
		document.getElementById('Quality').innerHTML = low ;
		closeNav6();
    }


function Submit() {
    alert("Submitted !!!!!!!!!");
    }
</script>
