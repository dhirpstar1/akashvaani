  window.onload = function() {
setTimeout(function() {  $("#bottom").fadeIn()}, 4000);
};
  $("#prompt").click(function(e){
   $("#bottom").css("display", "none");
 });
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
   $('#full_consult').on('click', function(){ 
 $('#step1').removeClass('active');
 $('#step3').removeClass('active');
 $('#step4').removeClass('active');
    $('#pane21').removeClass('active in');
     $('#pane23').removeClass('active in');
     $('#pane24').removeClass('active in');
    $('#step2').addClass('active');
    $('#pane22').addClass('active in');
    $('#stepper2').removeClass('active');
    $('#stepper2').addClass('completed');
    $('#stepper3').removeClass('completed');
    $('#stepper3').addClass('active');
    $('#stepper4').removeClass('completed');
    $('#stepper4').addClass('active');
});
$('#next1').on('click', function(){ 
	if($('.selected_list').html() == ''){					 
	bootbox.alert('Please select questions.');							 
	}else{
	window.scrollTo(0, 0);
    $('#step1').removeClass('active');
    $('#pane21').removeClass('active in');
    $('#step2').addClass('active');
    $('#pane22').addClass('active in');
    $('#stepper2').removeClass('active');
    $('#stepper2').addClass('completed');
	$('#questions').val($('.selected_list').html());
	}
});
$('#next2').on('click', function(){
var validate = true;


if($('#name').val() == ''){
	bootbox.alert('Please enter your name.');	
	}
else if($('#email').val() == '' || $('#email').val() == ' ' || !isValidEmailAddress( $('#email').val())){
	bootbox.alert('Please enter valid email.');																			 
	}else if($('#form2').val() == ''){
	bootbox.alert('Please enter your phone number.');
	}
else	
{								 
  window.scrollTo(0, 0);
    $('#pane23').addClass('active in');
    $('#pane22').removeClass('active in');
    $('#step2').removeClass('active');
    $('#step3').addClass('active');
    $('#stepper3').removeClass('active');
    $('#stepper3').addClass('completed');
}
});
$('#prev1').on('click', function(){
  window.scrollTo(0, 0);
    $('#pane21').addClass('active in');
    $('#pane22').removeClass('active in');
     $('#stepper2').removeClass('completed');
    $('#stepper2').addClass('active');
});
$('#next3').on('click', function(){
//$('#askquestion').submit();
});
$('#prev2').on('click', function(){
  window.scrollTo(0, 0);
    $('#pane22').addClass('active in');
    $('#pane23').removeClass('active in');
       $('#stepper3').removeClass('completed');
    $('#stepper3').addClass('active');
})
$('#next4').on('click', function(){
  window.scrollTo(0, 0);
    $('#pane25').addClass('active in');
    $('#pane24').removeClass('active in');
    $('#step4').removeClass('active');
    $('#step5').addClass('active');
});
$('#prev3').on('click', function(){
  window.scrollTo(0, 0);
    $('#pane23').addClass('active in');
    $('#pane24').removeClass('active in');
           $('#stepper4').removeClass('completed');
    $('#stepper4').addClass('active');
})
$('#next5').on('click', function(){
  window.scrollTo(0, 0);
    $('#pane26').addClass('active in');
    $('#pane25').removeClass('active in');
    $('#step5').removeClass('active');
    $('#step6').addClass('active');
});
$('#prev4').on('click', function(){
  window.scrollTo(0, 0);
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

function showDiv100() {
   document.getElementById('dateDiv').style.display = "block";
}

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
           $(function(){ /* to make sure the script runs after page load */

            $('a.read_more6').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q7').find('.more_text6').show();
                $(this).parents('.q7').find('.read_more6').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less6').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q7').find('.more_text6').hide();
                $(this).parents('.q7').find('.read_more6').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
                  $(function(){ /* to make sure the script runs after page load */

            $('a.read_more7').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q8').find('.more_text7').show();
                $(this).parents('.q8').find('.read_more7').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less7').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q8').find('.more_text7').hide();
                $(this).parents('.q8').find('.read_more7').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
        $(function(){ /* to make sure the script runs after page load */

            $('a.read_more8').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q9').find('.more_text8').show();
                $(this).parents('.q9').find('.read_more8').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less8').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q9').find('.more_text8').hide();
                $(this).parents('.q9').find('.read_more8').show(); /* show the .more_text span */
                /* show the .more_text span */

            });

        });
         $(function(){ /* to make sure the script runs after page load */

            $('a.read_more9').click(function(event){ /* find all a.read_more elements and bind the following code to them */
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q10').find('.more_text9').show();
                $(this).parents('.q10').find('.read_more9').hide(); /* show the .more_text span */
                /* show the .more_text span */

            });
            $('a.read_less9').click(function(event){ /* find all a.read_more elements and bind the following code to them */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).parents('.q10').find('.more_text9').hide();
                $(this).parents('.q10').find('.read_more9').show(); /* show the .more_text span */
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

 /*question*/
 function addQsn(cls) {
  // body...
  var a = $("#"+cls.className).html();
  $("."+cls.className).css('opacity', '0.6');
  $("."+cls.className).css('pointer-events', 'none');
  $('.selected_list').append('<li id=q'+cls.className+' class="list-group-item justify-content-between">'+a+'<span class="tag red float-xs-right"><a class="q'+cls.className+'" onClick=qsnRemove(this); style="color:#fff">Remove(✖)</a></span></li>');
    var count = $('ul.selected_list li').length;
    /*if(count>1){
      bootbox.alert('You Can Select Max One Free Questions');
      $("#q"+cls.className).remove();
  $("."+cls.className).css('opacity', '');
  $("."+cls.className).css('pointer-events', '');
    }
    else{ */
    $("#total").html(count);
//}
$(".empty").css('display', 'none');
}
function qsnRemove(link){
  var b = link.className.substring(1, link.className.length);
  $("#"+link.className).remove();
  $("."+b).css('opacity', '');
  $("."+b).css('pointer-events', '');
   var count = $('ul.selected_list li').length;
    $("#total").html(count);
    if(count==0){
$(".empty").css('display', 'block');
    }
}
function addOwn(){
   var count = $('ul.selected_list li').length;
   var qsn = count+1
    var c = $("#own").val();
	if(c){
    $('.selected_list').append('<li id=b'+qsn+' class="list-group-item justify-content-between">Q'+qsn+'.<question>'+c+'</question><span class="tag red float-xs-right"><a class=b'+qsn+' onClick=removeOwn(this); style="color:#fff">Remove(✖)</a></span></li>');
	$("#own").val('');
	}else{
		 bootbox.alert('Please enter your quetion.');
		}
/* if(qsn>1){
      bootbox.alert('You Can Select Max One Free Questions');
      $("#b"+qsn).remove();
    }
    else{ */
    $("#total").html(qsn);
//}
$(".empty").css('display', 'none');
}
function removeOwn(link){
  $("#"+link.className).remove();
   var count = $('ul.selected_list li').length;
    $("#total").html(count);
    if(count==0){
$(".empty").css('display', 'block');
    }
}

function showDivkundali() {
   document.getElementById('dateDivkundali').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydivkundali"){  // if click is not in 'mydiv'
    $('#dateDivkundali').hide();
  }
});
function dateselectkundali(dateid){
    document.getElementById("mydivkundali").value=dateid;
     $('#datelabelkundali').addClass( 'active' );
   }
   function showDiv1kundali() {
   document.getElementById('monthDivkundali').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv1kundali"){  // if click is not in 'mydiv'
    $('#monthDivkundali').hide();
  }
});
   function monthselectkundali(monthid){
    document.getElementById("mydiv1kundali").value=monthid;
     $('#monthlabelkundali').addClass( 'active' );
   }
    function showDiv2kundali() {
   document.getElementById('yearDivkundali').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv2kundali"){  // if click is not in 'mydiv'
    $('#yearDivkundali').hide();
  }
});
    function yearselectkundali(yearid){
    document.getElementById("mydiv2kundali").value=yearid;
     $('#yearlabelkundali').addClass( 'active' );
   }
    function showDiv3kundali() {
   document.getElementById('hourDivkundali').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv3kundali"){  // if click is not in 'mydiv'
    $('#hourDivkundali').hide();
  }
});
    function hourselectkundali(hourid){
    document.getElementById("mydiv3kundali").value=hourid;
     $('#hourlabelkundali').addClass( 'active' );
   }
     function showDiv4kundali() {
   document.getElementById('minuteDivkundali').style.display = "block";
}
 $(document).click(function(e) {
  if(e.target.id!="mydiv4kundali"){  // if click is not in 'mydiv'
    $('#minuteDivkundali').hide();
  }
});
  function minuteselectkundali(minuteid){
    document.getElementById("mydiv4kundali").value=minuteid;
     $('#minutelabelkundali').addClass( 'active' );
   }
   function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
 /**/