   function showserviceDiv() {
   document.getElementById('serviceDiv').style.display = "block";
 }
   function showserviceDiv1() {
   document.getElementById('serviceDiv1').style.display = "block";
 }
   $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv').hide();
}
});
   $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv1').hide();
}
});

   function linkselect(linkid){
    document.getElementById("mydiv").value=linkid;
     //$('#datelabel').addClass( 'active' );
   }
$('#next1').on('click', function(){
    $('#step1').removeClass('active');
    $('#pane21').removeClass('active in');
    $('#step2').addClass('active');
    $('#pane22').addClass('active in');
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
    $('#pane22').addClass('active in');
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
    $('#pane25').addClass('active in');
    $('#pane26').removeClass('active in');
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
 function showgirlDiv() {
   document.getElementById('girldateDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv5"){  // if click is not in 'mydiv'
    $('#girldateDiv').hide();
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
 function showgirlDiv1() {
   document.getElementById('girlmonthDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv6"){  // if click is not in 'mydiv'
    $('#girlmonthDiv').hide();
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
  function showgirlDiv2() {
   document.getElementById('girlyearDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv7"){  // if click is not in 'mydiv'
    $('#girlyearDiv').hide();
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
  function showgirlDiv3() {
   document.getElementById('girlhourDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv8"){  // if click is not in 'mydiv'
    $('#girlhourDiv').hide();
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
   function showgirlDiv4() {
   document.getElementById('girlminuteDiv').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv9"){  // if click is not in 'mydiv'
    $('#girlminuteDiv').hide();
  }
});
 
   $(function(){ /* to make sure the script runs after page load */

            $('a.read_more').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q1').find('.more_text').show();
                $(this).parents('.q1').find('.read_more').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q1').find('.more_text').hide();
                $(this).parents('.q1').find('.read_more').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
   $(function(){ /* to make sure the script runs after page load */

            $('a.read_more1').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q2').find('.more_text1').show();
                $(this).parents('.q2').find('.read_more1').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less1').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q2').find('.more_text1').hide();
                $(this).parents('.q2').find('.read_more1').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
    $(function(){ /* to make sure the script runs after page load */

            $('a.read_more2').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q3').find('.more_text2').show();
                $(this).parents('.q3').find('.read_more2').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less2').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q3').find('.more_text2').hide();
                $(this).parents('.q3').find('.read_more2').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
    $(function(){ /* to make sure the script runs after page load */

            $('a.read_more3').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q4').find('.more_text3').show();
                $(this).parents('.q4').find('.read_more3').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less3').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q4').find('.more_text3').hide();
                $(this).parents('.q4').find('.read_more3').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
     $(function(){ /* to make sure the script runs after page load */

            $('a.read_more4').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q5').find('.more_text4').show();
                $(this).parents('.q5').find('.read_more4').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less4').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q5').find('.more_text4').hide();
                $(this).parents('.q5').find('.read_more4').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
        $(function(){ /* to make sure the script runs after page load */

            $('a.read_more5').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q6').find('.more_text5').show();
                $(this).parents('.q6').find('.read_more5').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less5').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q6').find('.more_text5').hide();
                $(this).parents('.q6').find('.read_more5').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
  function dateselect(dateid){
    document.getElementById("mydiv").value=dateid;
     $('#datelabel').addClass( 'active' );
   }
    function girldateselect(dateid){
    document.getElementById("mydiv5").value=dateid;
     $('#girldatelabel').addClass( 'active' );
   }
   function monthselect(monthid){
    document.getElementById("mydiv1").value=monthid;
     $('#monthlabel').addClass( 'active' );
   }
    function girlmonthselect(monthid){
    document.getElementById("mydiv6").value=monthid;
     $('#girlmonthlabel').addClass( 'active' );
   }
    function yearselect(yearid){
    document.getElementById("mydiv2").value=yearid;
     $('#yearlabel').addClass( 'active' );
   }
    function girlyearselect(yearid){
    document.getElementById("mydiv7").value=yearid;
     $('#girlyearlabel').addClass( 'active' );
   }
    function hourselect(hourid){
    document.getElementById("mydiv3").value=hourid;
     $('#hourlabel').addClass( 'active' );
   }
    function girlhourselect(hourid){
    document.getElementById("mydiv8").value=hourid;
     $('#girlhourlabel').addClass( 'active' );
   }
   function minuteselect(minuteid){
    document.getElementById("mydiv4").value=minuteid;
     $('#minutelabel').addClass( 'active' );
   }
    function girlminuteselect(minuteid){
    document.getElementById("mydiv9").value=minuteid;
     $('#girlminutelabel').addClass( 'active' );
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
  
 $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })