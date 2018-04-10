<style>
.fc-more-popover .fc-header .fc-title, .fc-more-popover .fc-body .fc-title{
	color:#333; 
}
</style>
<div class="row  mLR-pe-0 mB-pe-0">
			<h4 class="text-center main-heading mB-pe-26">SCHEDULE YOUR ORDERS</h4>
   <p class="txt_para_calender">
   <span class="text-left dis-inblock">Schedule your orders <strong>up to 4 business days</strong> in advance by clicking the plus sign on an available date.</span>
   </p>

<div class="text-center">
    <div class="day-holder">	    	<div class="color-info1">
            <div class="todayStl"></div>
            <div class="calBgTxt">Today</div>
        </div>
   
    
    	<div class="color-info2">
            <div class="selDayStl"></div>
            <div class="calBgTxt">Selected Day</div>
        </div>
    
    	<div class="color-info3">
            <div class="availStl"></div>
            <div class="calBgTxt">Available</div>
        </div>
   
    	<div class="color-info4">
            <div class="nearingCapStl"></div>
            <div class="calBgTxt">Nearing Capacity</div>
        </div>
   
    	<div class="color-info5">	
            <div class="unavailableStl"></div>
            <div class="calBgTxt">Unavailable</div>
        </div>
   </div>	
</div>
<div class="back_btn"><input type="button" value="Back" class="continue" onClick="history.back(-1)" />	</div>

<div id='calendar'></div>


<script>

 //$(document).ready(function() { 
  $(window).load(function() {
 var ua = navigator.userAgent,
evt = (ua.match(/iPad/i)) ? "touchstart" : "click";


 
  load_Calendar(); 
var urls = {
    1: "Jan",
    2: "Feb",
    3: "March",
	4: "April",
	5: "May",
	6: "June",
	7: "July",
	8: "August",
	9: "Sept",
	10: "Oct",
	11: "Nov",
	12: "Dec"
};
$('.fc-day-number').each(function() {
    // Get current day
    var day = parseInt($(this).html());
    // Check if there's a url defined for the day
    if(urls[day] != undefined) {
    }
});  
 });
 
 
 var setBootboxWidth = 0;	
 function load_Calendar()
 {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();

  var calendar = $('#calendar').fullCalendar({
  
   height: 650,
   editable: false,
  header: {
				left: 'today, prev,next, title',
				center: '',
				right: ''
			},
displayEventTime: false,
  eventOrder: 'start',
  eventClick:  function(event, jsEvent, view) {    
	
	var customer_event_id = event.customer_event_id;
	var event_id = event.event_id;
	var start = event.start;
	var end = event.start;
    var event_type = event.event_type;
	var check = start._d.toJSON().slice(0,10); 
	var today = new Date().toJSON().slice(0,10);
	
	var toDyY = new Date();
	var tdayYear = toDyY.getFullYear();
	var toDyM = new Date();
	var tdayMon = toDyM.getMonth()+1;
	var toDyD = new Date();
	var tdayDay = toDyD.getDate();
	if(tdayMon < 10) {
    tdayMon = '0' + tdayMon;
	}
	if(tdayDay < 10) {
    tdayDay = '0' + tdayDay;
	}
	
	var systemDate = tdayYear+"-"+tdayMon+"-"+tdayDay;

				if (event.status == "Inactive")
				{
					 return false;
				}
				
				/** Tommorrow **/
				var date_for_tommorrow = new Date();
				date_for_tommorrow.setDate(date_for_tommorrow.getDate() + 1);
				var tommorrow = date_for_tommorrow.toJSON().slice(0,10);
				//alert(tommorrow);
				/** End Tommorrow **/
				/** checkDay **/
				var checkDaySatOrSun = new Date(check); 				
				var checkDay = checkDaySatOrSun.getUTCDay();
				
				//alert(checkDay);
				/** End **/ 
				/**  yesterday **/
				var date_for_yesterday = new Date();
				date_for_yesterday.setDate(date_for_yesterday.getDate() + 1);
				var yesterday = date_for_yesterday.toJSON().slice(0,10);
				//alert(yesterday);
				var checkyesterday = new Date(yesterday); 
				var yesterdayToCheck = checkyesterday.getUTCDay();
				if(yesterdayToCheck == 6)
				{
					date_for_yesterday.setDate(checkyesterday.getDate() + 2);
					yesterday = date_for_yesterday.toJSON().slice(0,10);
				}
				if(yesterdayToCheck == 0)
				{
					date_for_yesterday.setDate(checkyesterday.getDate() + 1);
					yesterday = date_for_yesterday.toJSON().slice(0,10);
				}
				//alert(yesterday);
				/** End yesterday **/
				/**  day before yesterday **/
				var date_for_before_yesterday = new Date();
				date_for_before_yesterday.setDate(date_for_before_yesterday.getDate() + 2);
				var before_yesterday = date_for_before_yesterday.toJSON().slice(0,10);
				//alert(before_yesterday);
				var checkbefore_yesterday = new Date(before_yesterday); 
				var before_yesterdayToCheck = checkbefore_yesterday.getUTCDay();
				if(before_yesterdayToCheck == 6)
				{
					date_for_before_yesterday.setDate(checkbefore_yesterday.getDate() + 2);
					before_yesterday = date_for_before_yesterday.toJSON().slice(0,10);
				}
				if(before_yesterdayToCheck == 0)
				{
					date_for_before_yesterday.setDate(checkbefore_yesterday.getDate() + 2);
					before_yesterday = date_for_before_yesterday.toJSON().slice(0,10);
				}
				if(before_yesterdayToCheck == 1)
				{
					date_for_before_yesterday.setDate(checkbefore_yesterday.getDate() + 1);
					before_yesterday = date_for_before_yesterday.toJSON().slice(0,10);
				}
				
				//alert(before_yesterday);
				
				/** End day before yesterday **/
				/**  three day before **/
				var date_for_threeday_before = new Date();
				date_for_threeday_before.setDate(date_for_threeday_before.getDate() + 3);
				var threeday_before = date_for_threeday_before.toJSON().slice(0,10);
				//alert(threeday_before);
				var checkthreeday_before = new Date(threeday_before); 
				var threeday_beforeToCheck = checkthreeday_before.getUTCDay();
				if(threeday_beforeToCheck == 6)
				{
					date_for_threeday_before.setDate(checkthreeday_before.getDate() + 2);
					threeday_before = date_for_threeday_before.toJSON().slice(0,10);
				}
				if(threeday_beforeToCheck == 0)
				{
					date_for_threeday_before.setDate(checkthreeday_before.getDate() + 2);
					threeday_before = date_for_threeday_before.toJSON().slice(0,10);
				}
                if(threeday_beforeToCheck == 1)
				{
					date_for_threeday_before.setDate(checkthreeday_before.getDate() + 2);
					threeday_before = date_for_threeday_before.toJSON().slice(0,10);
				}
				if(threeday_beforeToCheck == 2)
				{
					date_for_threeday_before.setDate(checkthreeday_before.getDate() + 1);
					threeday_before = date_for_threeday_before.toJSON().slice(0,10);
				}
				
				//alert(threeday_beforeToCheck );
				/** End three day before **/
				
				
				var date_for_futureOneDay = new Date();
				date_for_futureOneDay.setDate(date_for_futureOneDay.getDate() + 1);
				var futureOneDay = date_for_futureOneDay.toJSON().slice(0,10);
				//alert(futureOneDay);
				var checkfutureOneDay = new Date(futureOneDay); 
				var futureOneDayToCheck = checkfutureOneDay.getUTCDay();
				
				var date_for_futureTwoDay = new Date();
				date_for_futureTwoDay.setDate(date_for_futureTwoDay.getDate() + 2);
				var futureTwoDay = date_for_futureTwoDay.toJSON().slice(0,10);
				//alert(futureTwoDay);
				var checkfutureTwoDay = new Date(futureTwoDay); 
				var futureTwoDayToCheck = checkfutureTwoDay.getUTCDay();
				
				var date_for_futureThreeDay = new Date();
				date_for_futureThreeDay.setDate(date_for_futureThreeDay.getDate() + 3);
				var futureThreeDay = date_for_futureThreeDay.toJSON().slice(0,10);
				//alert(futureThreeDay);
				var checkfutureThreeDay = new Date(futureThreeDay); 
				var futureThreeDayToCheck = checkfutureThreeDay.getUTCDay();
				
				var date_for_futureFourDay = new Date();
				date_for_futureFourDay.setDate(date_for_futureFourDay.getDate() + 4);
				var futureFourDay = date_for_futureFourDay.toJSON().slice(0,10);
				//alert(futureFourDay);
				var checkfutureFourDay = new Date(futureFourDay); 
				var futureFourDayToCheck = checkfutureFourDay.getUTCDay();
				
				var date_for_futureFiveDay = new Date();
				date_for_futureFiveDay.setDate(date_for_futureFiveDay.getDate() + 5);
				var futureFiveDay = date_for_futureFiveDay.toJSON().slice(0,10);
				//alert(futureFiveDay);
				var checkfutureFiveDay = new Date(futureFiveDay); 
				var futureFiveDayToCheck = checkfutureFiveDay.getUTCDay();
				
				
				var new_date = new Date(); 
				var check_<?php echo $no_booking_period;?>Days = new_date.setDate(new_date.getDate() + <?php echo $no_booking_period;?>); // another date
				
				var check_<?php echo $no_booking_period;?>Days = new_date.toJSON().slice(0,10);
				
				
				
				var holidays = [];
				holidays.push(<?php echo $holidays_str;?>);
				
				var event_dates = [];
				event_dates.push(<?php echo $event_dates_str;?>);
				if($.inArray(check, event_dates) != -1)
				{
					
				}
				else
				{
					if(check <= today)
					{
						
					}
				}
				if(check < today)
				{
							
				}
		
			 
			 var current_day = <?php echo $current_day;?>;
				var next_day = <?php echo $next_day;?>;
				var cancel_daysBlock = [<?php echo $cancel_daysBlock;?>];
			 
				//var form = $("<form name='form-inline' action='' novalidate class='form-inline'></form>");
							
							// Event Date 
							var form = $('<div class="row mLR-pe-0"><div class="input-field input-field-pe"><div id="event_msg" class="mTRBL-pe-10" ></div><input type="hidden" id="title" name="title" value="title"><input type="text" id="eventDate" readonly class="my-input" required name="eventDate" value="'+start.format("dddd, Do MMMM YYYY")+'"><label class="my-label" style="display:none;"></label></div>');
							
							// Order Name
							form.append('<div class="input-field input-field-pe"><input type="text" required readonly class="my-input pR-pe-17" value="Order Name: '+event.order_name+'"><input type="hidden" required id="order_name" name="order_name" class="my-input pR-pe-17" value="'+event.order_name+'"><label class="my-label" style="display:none;">Order Name: '+event.order_name+'</label><div id="error"></div></div>');
							
							// Est. Number of images
							form.append('<div class="input-field input-field-pe"><input type="text" readonly value="Est. No. of images: '+event.no_of_images+'" class="my-input pR-pe-17"><input type="hidden" id="content_event" name="content_event" value="'+event.content_event+'" class="my-input"><input type="hidden" id="no_of_images" name="no_of_images" value="'+event.no_of_images+'" class="my-input"><label class="my-label" style="display:none;">Est. No. of images: '+event.no_of_images+'</label><div id="error"></div></div>');
							
							if((check == current_day) || (check == next_day))
							{								
								form.append('<div class="input-field input-field-pe"><div id="setadddevent" class="text-center btn-pos"><button type="button" class="btn btn-sm btn-success continue dis-none" data-dismiss="modal" >Cancel</button><input type="button" id="placeOrder" onclick=placeorder()  class="btn btn-sm btn-success continue" value="Place Order" ></div></div>');
							}else
							{				
								if(cancel_daysBlock.includes(check)) {
									//alert(check);
									// Submit
                                    form.append('<div class="form-group my-group" style="display:none;margin:0 0 15px 0;"><div id="showaddevent" class="dis-none"><button type="submit" class="btn btn-sm btn-success continue"><i class="icon-ok"></i> RESERVE DATE </button></div><div style="text-align:center;" id="existdata"></div></div>');
                                   
                                }else{
									 // Submit
                                    form.append('<div class="input-field input-field-pe"><div id="showaddevent" class="dis-none"><button type="submit" class="btn btn-sm btn-success continue"> RESERVE DATE</button></div><div class="text-center" id="existdata"><div id="setadddevent" class="btn-pos"><button type="button" class="btn btn-sm btn-success continue dis-none" data-dismiss="modal">Cancel</button><input type="button" id="deleteevnt" onclick="delete_event();" class="btn btn-sm btn-success continue" value="CANCEL RESERVATION"></div></div></div>');
                                    
                                }
										
							}
							
							
							// Start and End of the event
							form.append('<input type="hidden" id="allDay" name="allDay" value="true"><input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customer_id;?>"><input type="hidden" id="start" name="start" value="'+start.format('YYYY-MM-DD')+'"><input type="hidden" id="end" name="end" value="'+end.format('YYYY-MM-DD')+'"><input type="hidden" id="customer_event_id" name="customer_event_id" value="'+customer_event_id+'"><input type="hidden" id="event_id" name="event_id" value="'+event_id+'"><input type="hidden" id="event_type" name="event_type" value="'+event_type+'"><input type="hidden" id="customer_type" name="customer_type" value="<?php echo $preferred_customer;?>"><input type="hidden" required class="my-input" id="where_event" readonly name="where_event" value="'+event.where_event+'"></div>');
			  
						 
							
							if(check < current_day)
							{
								//alert(check +"=="+ systemDate);
								if(check == systemDate){
									
								}else{									
									var form = $('<div class="row"></div>');
									// No Booking Message 
									form.append('<div class="input-field input-field-pe mT-pe-0 text-center">This reservation has expired</div>');
								}
								setBootboxWidth = 1;
								var div = bootbox.dialog({								
								closeButton: true,
								message: form,
								onEscape: function() {
								},					
							});	
						   }else{
							   setBootboxWidth = 1;
							  var div = bootbox.dialog({	
								title: "COLOR CORRECTION",
								closeButton: true,
								message: form,
								onEscape: function() {
								},					
							});	 
							   
						   }
			
							form.on('submit', function(e) {      
								e.preventDefault(); // on stop le submit
								var title = $('#title').val();
								var start = $('#start').val();					
								var end = $('#end').val();
								var allDay = $('#allDay').val();
								var where_event = $('#where_event').val();
								var order_name = $('#order_name').val();
								var content_event = $('#content_event').val();
								var customer_id = $('#customer_id').val();
								
								// because we want immediate reaction of FullCalendar, we render the created event on the FullCalendar, even if it's only temporarily
								
								if (title) {					
									// Now we push it to event table also :
									if(add_event_cal(title,start,end,allDay,where_event,order_name,content_event,customer_id, div))
									{
									  $('#calendar').fullCalendar('renderEvent',
										{					
											title: content_event,
											start: start,
											end: end,
											allDay: allDay
										},
										true // make the event "stick"
										);
									}
								}
								
								// Whether we had the form fulfilled or not, we clean FullCalendar and close the popup   
								$('#calendar').fullCalendar('unselect');
									
							});
							
							
							
							
							
							$('#calendar').fullCalendar('unselect');
							
			
				
				
				
				
		
    },
	
  viewRender : function (view, element) {
		
                        },
   events: "pages/calendar_events",
	dayRender: function (date, cell) { 
	
	
	 // The cell has a data-date tag with the date we can use vs date.format('YYYY-MM-DD')
        
		var theDate = $(cell).attr("data-date");
		//alert(theDate);
		
		//var theDate = date._d.toJSON().slice(0,10); 
		
		
		
		
	/** checkServiceCapacity **/
		
	
	var capacityCheck = checkServiceCapacity(theDate, cell);
	
	
	/** End checkServiceCapacity **/
	
	
	/** get day number **/
	var myDate = new Date(theDate); 
	var dayToCheck = myDate.getUTCDay();
	
	/** toDay **/
	var date_for_toDay = new Date();
	date_for_toDay.setDate(date_for_toDay.getDate());
	var today = date_for_toDay.toJSON().slice(0,10);
	var today_Date = new Date(today); 
	var today_dayToCheck = today_Date.getUTCDay();
	//alert(today);
	/** End toDay **/
	/** pastOneDay **/
	var date_for_pastOneDay = new Date();
	date_for_pastOneDay.setDate(date_for_pastOneDay.getDate() + 1);
	var pastOneDay = date_for_pastOneDay.toJSON().slice(0,10);
	//alert(pastOneDay);
	var checkpastOneDay = new Date(pastOneDay); 
	var pastOneDayToCheck = checkpastOneDay.getUTCDay();
	if(pastOneDayToCheck == 6)
	{
		date_for_pastOneDay.setDate(checkpastOneDay.getDate() + 2);
	 	pastOneDay = date_for_pastOneDay.toJSON().slice(0,10);
	}
	if(pastOneDayToCheck == 0)
	{
		date_for_pastOneDay.setDate(checkpastOneDay.getDate() + 1);
	 	pastOneDay = date_for_pastOneDay.toJSON().slice(0,10);
	}
	/** End pastOneDay **/
	
	/** pastTwoDay **/
	var date_for_pastTwoDay = new Date();
	date_for_pastTwoDay.setDate(date_for_pastTwoDay.getDate() + 2);
	var pastTwoDay = date_for_pastTwoDay.toJSON().slice(0,10);
	//alert(pastTwoDay);
	var checkpastTwoDay = new Date(pastTwoDay); 
	var pastTwoDayToCheck = checkpastTwoDay.getUTCDay();
//alert(pastTwoDayToCheck );
	if(pastTwoDayToCheck == 6)
	{
		date_for_pastTwoDay.setDate(checkpastTwoDay.getDate() + 2);
	 	pastTwoDay = date_for_pastTwoDay.toJSON().slice(0,10);
	}
	if(pastTwoDayToCheck == 0)
	{
		date_for_pastTwoDay.setDate(checkpastTwoDay.getDate() + 2);
	 	pastTwoDay = date_for_pastTwoDay.toJSON().slice(0,10);
	}
	if(pastTwoDayToCheck == 1)
	{
		date_for_pastTwoDay.setDate(checkpastTwoDay.getDate() + 1);
	 	pastTwoDay = date_for_pastTwoDay.toJSON().slice(0,10);
	}
	/** End pastTwoDay **/
	
	/** pastThreeDay **/
	var date_for_pastThreeDay = new Date();
	date_for_pastThreeDay.setDate(date_for_pastThreeDay.getDate() + 3);
	var pastThreeDay = date_for_pastThreeDay.toJSON().slice(0,10);
	//alert(pastThreeDay);
	var checkpastThreeDay = new Date(pastThreeDay); 
	
	var pastThreeDayToCheck = checkpastThreeDay.getUTCDay();
	
	if(pastThreeDayToCheck == 6)
	{
		date_for_pastThreeDay.setDate(checkpastThreeDay.getDate() + 2);
	 	pastThreeDay = date_for_pastThreeDay.toJSON().slice(0,10);
	}
	if(pastThreeDayToCheck == "0")
	{
		//alert(pastThreeDayToCheck);
		date_for_pastThreeDay.setDate(checkpastThreeDay.getDate() + 2);
	 	pastThreeDay = date_for_pastThreeDay.toJSON().slice(0,10);
	}
	if(pastThreeDayToCheck == "1")
	{
		//alert(pastThreeDayToCheck);
		date_for_pastThreeDay.setDate(checkpastThreeDay.getDate() + 2);
	 	pastThreeDay = date_for_pastThreeDay.toJSON().slice(0,10);
	}
	if(pastThreeDayToCheck == "2")
	{
		//alert(pastThreeDayToCheck);
		date_for_pastThreeDay.setDate(checkpastThreeDay.getDate() + 1);
	 	pastThreeDay = date_for_pastThreeDay.toJSON().slice(0,10);
	}
	/** End pastThreeDay **/	
	
	
	
		  // Find the day number td for the date
        var fcDaySkel = $("#calendar div.fc-content-skeleton td[data-date='"+theDate+"'].fc-day-number");
		
		
		
		/** check toDay **/
		if(theDate == today)
		{			
			 if(dayToCheck == 0 || dayToCheck == 6)
			 {
			 	
					fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessageSatAndSun();' class='addEvent add-event-plus'>+</div>");
					
			}
			else
			{
			
			fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
			}
			cell.css("background-color", "gray");
		}
		/** check pastOneDay **/
		else if(theDate == pastOneDay)
		{
			 if(dayToCheck == 0 || dayToCheck == 6)
			 {
			 	
					fcDaySkel.append("<div id='editar_control_"+theDate+"_id' onclick='showNoReservationMessageSatAndSun();' class='addEvent add-event-plus'>+</div>");
					
			}
			else
			{
			
			fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
			
			}
			cell.css("background-color", "gray");
		}
		/** check pastTwoDay **/
		else if(theDate == pastTwoDay)
		{
 			 if(dayToCheck == 0 || dayToCheck == 6)
			 {
			 	
					fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessageSatAndSun();' class='addEvent add-event-plus'>+</div>");
					
			}
			else
			{
			
			fcDaySkel.append("<div id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
			
			}
			cell.css("background-color", "gray");
		}		
		/** check pastThreeDay **/
		else if(theDate == pastThreeDay)
		{
 			 if(dayToCheck == 0 || dayToCheck == 6)
			 {
			 	
					fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessageSatAndSun();' class='addEvent add-event-plus'>+</div>");
					
			}
			else
			{
			
			fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
			
			}
			cell.css("background-color", "gray");
		}
		else if(theDate < today)
		{
 			 if(dayToCheck == 0 || dayToCheck == 6)
			 {
			 	
					fcDaySkel.append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd;' id='editar_control_"+theDate+"_id' onclick='javascript:void(0);' class='addEvent add-event-plus'>+</div>");
					
			}
			else
			{
			
			fcDaySkel.append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd;' id='editar_control_"+theDate+"_id' onclick='javascript:void(0);' class='addEvent add-event-plus'>+</div>");
			
			}
			
		}
		else
		{
			 
			var date_for_futureNextDay = new Date();
	date_for_futureNextDay.setDate(date_for_futureNextDay.getDate() + 1);
	var futureNextDay = date_for_futureNextDay.toJSON().slice(0,10);
	//alert(futureNextDay);
	
	var checkfutureNextDay = new Date(futureNextDay); 
	var futureNextDayToCheck = checkfutureNextDay.getUTCDay();
	//alert(futureNextDayToCheck); 
			 
			 var date_for_futureOneDay = new Date();
	date_for_futureOneDay.setDate(date_for_futureOneDay.getDate() + 2);
	var futureOneDay = date_for_futureOneDay.toJSON().slice(0,10);
	//alert(futureOneDay);
	
	var checkfutureOneDay = new Date(futureOneDay); 
	var futureOneDayToCheck = checkfutureOneDay.getUTCDay();
	//alert(futureOneDayToCheck);
			 
			 
			 var date_for_futureTwoDay = new Date();
	date_for_futureTwoDay.setDate(date_for_futureTwoDay.getDate() + 3);
	var futureTwoDay = date_for_futureTwoDay.toJSON().slice(0,10);
	//alert(futureTwoDay);
	
	var checkfutureTwoDay = new Date(futureTwoDay); 
	var futureTwoDayToCheck = checkfutureTwoDay.getUTCDay();
	//alert(futureTwoDayToCheck);
			 
			 var date_for_futureThreeDay = new Date();
	date_for_futureThreeDay.setDate(date_for_futureThreeDay.getDate() + 4);
	var futureThreeDay = date_for_futureThreeDay.toJSON().slice(0,10);
	//alert(futureThreeDay);
	var checkfutureThreeDay = new Date(futureThreeDay); 
	var futureThreeDayToCheck = checkfutureThreeDay.getUTCDay();
console.log(futureThreeDayToCheck);
	//alert(futureThreeDayToCheck);
	var date_for_futureFourDay = new Date();
	date_for_futureFourDay.setDate(date_for_futureFourDay.getDate() + 5);
	var futureFourDay = date_for_futureFourDay.toJSON().slice(0,10);
	//alert(theDate+futureFourDay);
	var checkfutureFourDay = new Date(futureFourDay); 
	var futureFourDayToCheck = checkfutureFourDay.getUTCDay();
//alert(futureFourDayToCheck);
	

	
			 if((theDate == futureNextDay && futureNextDayToCheck == 6) ||
			 (theDate == futureNextDay && futureNextDayToCheck == 0) ||			 
			 (theDate == futureOneDay && futureOneDayToCheck == 6) ||
			 (theDate == futureOneDay && futureOneDayToCheck == 0) ||
			 (theDate == futureTwoDay && futureTwoDayToCheck == 6) ||
			 (theDate == futureTwoDay && futureTwoDayToCheck == 0) ||
			 (theDate == futureTwoDay && futureTwoDayToCheck == 6) || 
			 (theDate == futureTwoDay && futureTwoDayToCheck == 0) || 
			 (theDate == futureThreeDay && (futureThreeDayToCheck == 6 || futureThreeDayToCheck == 0 || futureThreeDayToCheck == 1 || futureThreeDayToCheck == 2)) ||			 
			 (theDate == futureFourDay && (futureFourDayToCheck == 6 || futureFourDayToCheck == 0 || futureFourDayToCheck == 1 || futureFourDayToCheck == 2 || futureFourDayToCheck == 3) && today_dayToCheck == 2) 

			 			 
			  
			 )
			 {
			 	
					fcDaySkel.append("<div id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
				cell.css("background-color", "gray");	
			}
			else if(futureThreeDayToCheck == 6 && theDate == futureThreeDay){
				
						fcDaySkel.append("<div  id='editar_control_"+theDate+"_id' onclick='showNoReservationMessage();' class='addEvent add-event-plus'>+</div>");
					cell.css("background-color", "gray");	
			}
			else
			{
			fcDaySkel.append("<div id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus-nocolor'>+</div>");		
			}
			
			
		}
			     
        
	
	$(".fc-day-number").css("text-align", "left");
	
	
	
	var today = new Date().toJSON().slice(0,10);
    $('.fc-day[data-date="'+ today +'"]').css("background-color", "#A2B5CD");
	
	
		 
		
		var checkDay = date._d.toJSON().slice(0,10);
		var checkDayNo = checkDay.substring(8,10);
		var checkMonthNo = checkDay.substring(5,7);
		var checkCurrentMonthNo = today.substring(5,7);
		//alert(checkDayNo);
		//alert(checkCurrentMonthNo);
		
		if(checkDayNo == '01')
		{
			if(checkMonthNo == "01")
			{
				
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Jan"+" "+1);
				
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					
				}
			}
			if(checkMonthNo == "02")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Feb"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					
				}
			}
			if(checkMonthNo == "03")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Mar"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					
				}
			}
			if(checkMonthNo == "04")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Apr"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					
				}
			}
			if(checkMonthNo == "05")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("May"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
			}
			if(checkMonthNo == "06")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("June"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
			}
			if(checkMonthNo == "07")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("July"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
			}
			if(checkMonthNo == "08")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Aug"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
				}
			}
			if(checkMonthNo == "09")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Sep"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
			}
			if(checkMonthNo == "10")
			{
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Oct"+" "+1);
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
			}
			if(checkMonthNo == "11")
			{
				//alert(futureFourDayToCheck);
				
				
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Nov"+" "+1);
				
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}	
					
				}
				
			}
			if(checkMonthNo == "12")
			{
				//alert(futureFourDayToCheck);
				
				
				$('.fc-day-number[data-date="'+ checkDay +'"]').html("Dec"+" "+1);
				
				if(parseInt(checkCurrentMonthNo)+1 != parseInt(checkMonthNo))
				{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div  id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"')  class='addEvent add-event-plus'>+</div>");
					
				}
				else
				{
					if(theDate < today)
					{
					$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;color:#ddd' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					else
					{
						$('.fc-day-number[data-date="'+ checkDay +'"]').append("<div style='float:right;cursor:pointer;font-size:20px;font-weight:bold;' id='editar_control_"+theDate+"_id' onclick=addEvent('"+theDate+"') class='addEvent'>+</div>");
					}
					
				}
				
			}
		}
		
	var server_today = "<?php echo date("Y-m-d");?>";	
	if(theDate == server_today){	
		console.log("theDate:- "+theDate);
		console.log("server today:- <?php echo date("Y-m-d");?>");	
		cell.css("background-color", "#a2b5cd");
	}
    	 
    },
   
   // Convert the allDay from string to boolean
   eventRender: function(event, element, view) { 
   
    if (event.allDay === 'true') {
     event.allDay = true;
    } else {
     event.allDay = false;
    }
	//alert(event.status);
	if(event.status == "Inactive")
	{
		var icon  = ' <span class="glyphicon glyphicon-ok inactive-ok-icon" ></span>';
    	$(element).find('.fc-title').append(icon);
element.on('click', function (e) {
//alert(event.status);
        e.preventDefault();
    });
	}
	
	   
   },
   
	
  // hiddenDays: [ 0, 6 ], // Hide Saturday and Sunday
	eventColor: 'transparent',
	eventBorderColor: 'transparent',
	eventTextColor: '#000',  
	eventLimit: true, 
	views: {
        month: {
            eventLimit: 4 // adjust to 4 only for month
        }
    },
   selectable: true,
   selectHelper: true,
   select: function(start, end, allDay) {
	//alert(start);
	var capacityCheck = checkServiceCapacityOnSelect(start);
	
	
	
   }, 
   dayClick: function(date, allDay, jsEvent, view) {
    if($(jsEvent.target).hasClass("disabled")){
	//alert('dfsfs');
        return false;
    }
}


  });
  
}


				
function clearMsg()
{
	$('#event_msg').html('');
	$('#order_name').val('');
	$('#errorEstNo').html('');
	//$( "#content_event" ).val('');
}
   
function ShowWait(ID){
	$( "#content_event" ).prop( "disabled", true );
	$( "#content_event" ).prop( "readonly", true );
	$('.form-inline .btn').prop('disabled', 'disabled');
	$(ID).show();	
}

function HideWait(ID){
	$( "#content_event" ).prop( "disabled", false );
	$( "#content_event" ).prop( "readonly", false );
	$('.form-inline .btn').prop('disabled', false);
	$(ID).hide();	
}

function getEventTypeImages(where_event, start, customer_id)
{
	// I will create the eventInsert script in a new page, and I name it here :
	//alert(where_event+start+customer_id);

   $.ajax({
   url: '{{$settings.site.root}}index.php?fuseaction=customer.get_event',
   data: 'start='+ start+'&customer_id='+customer_id+'&where_event='+where_event ,
   type: "POST",
   ajaxStart : ShowWait('#loading_noOfImages'),
   success: function(msg) {   
		//alert(msg);
		//$('#event_msg').html(msg);

		HideWait('#loading_noOfImages');
	
	   if(msg != "")
	   {
			var obj = $.parseJSON(msg);
            $('#showaddevent').hide();
			$('#existdata').show();
			if(obj[0].no_of_images !="")
			{	
				if(obj[0].no_of_images == "0")
				{
					$('#existdata').hide();
					$('#showaddevent').show();
					$('#content_event').val('');
					$( "#content_event" ).prop( "disabled", false );
					$( "#content_event" ).prop( "readonly", false );
					$('.form-inline .btn').prop('disabled', false);
					$('#event_msg').html("");
				}
				else
				{
					if($('#content_event').val(obj[0].no_of_images))
					{
						$( "#order_name" ).val(obj[0].order_name);
						$( "#content_event" ).prop( "disabled", false );
						$( "#content_event" ).prop( "readonly", false );
						$('.form-inline .btn').prop('disabled', false);
						$('#event_msg').html("");
						
					}
				}		
			}
	   }
	   else
	   {
			$('#existdata').hide();
            $('#showaddevent').show();
			$('#content_event').val('');
			$( "#content_event" ).prop( "disabled", false );
			$( "#content_event" ).prop( "readonly", false );
			$('.form-inline .btn').prop('disabled', false);
			$('#event_msg').html("");			
	   }
   }
   
   });

}
 
function isNumberKey(evt)
{
 var charCode = (evt.which) ? evt.which : event.keyCode;
 if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

 return true;
}


/****** NOW WE ASK THE EVENT TO BE PUSHED TO GOOGLE **************/
function add_event_cal(title,start,end,allDay,where_event,order_name,content_event, customer_id, modalBox) 
{ 

  $( "#addEventformSubmit" ).prop( "disabled", true ).css('cursor','default');
  
    // I will create the eventInsert script in a new page, and I name it here :   
  var data = 'title='+ title+'&start='+ start +'&end='+ end +'&allDay='+ allDay +'&where_event='+ where_event +'&order_name='+order_name+'&content_event='+ content_event+'&customer_id='+ customer_id;
   
   var formData = {title:title,start:start,end:end,allDay:allDay,where_event:where_event,order_name:order_name,content_event:content_event,customer_id:customer_id};
   
   //alert(data);
   
   $.ajax({
   url: 'pages/calendar_add_event',
   data: formData,
   type: "POST",
   success: function(msg) {
   
	$('#calendar').fullCalendar('next');
	$('#calendar').fullCalendar('prev');	
	$('#calendar').fullCalendar( 'refetchEvents' );
 
   $( "#addEventformSubmit" ).prop( "disabled", false );
	//alert(msg);
 	//$('#event_msg').html(msg);
	 bootbox.hideAll();
	 
   if(msg == "1")
   {
		$( "#content_event" ).prop( "disabled", true );
		$( "#content_event" ).prop( "readonly", true );
		//$('.form-inline .btn').prop('disabled', 'disabled');
		
		modalBox.modal("hide");
		
		 
		
		if(content_event != "0")
		{			
			var msg = "<div class='row'><div class='input-field input-field-pe text-left mTB-pe-15 mLR-pe-0 ' >Please remember to come back to this event or select this event on the Order page when placing your actual order to guarantee your turnaround time.<br /><br />Orders with over 800 images will have a 6 business day turn-around time.<br /><br />Your order has to be completed and images have to be uploaded by 11:59am Eastern on <span class='nowrap-pe'>"+formatDate(start)+"</span>.</div></div>";
			setBootboxWidth = 1;
			if(msg != "")
			{
				
				var div = bootbox.dialog({
						closeButton: true,
						message: msg
					});
						
			}
		}
   }
   if(msg == "2")
   {
		
		modalBox.modal("hide");
		var msg1 = '<div class="row"><div class="input-field input-field-pe text-left mTB-pe-15" >I\'m sorry, your reservation cannot be made. It exceeds our maximum capacity for this date. Please schedule your order on a different date. Thank you!</div></div>';
			setBootboxWidth = 1;
			if(msg1 != "")
			{
				
				var div = bootbox.dialog({
						closeButton: true,
						message: msg1
					});
					
			}
   }
   if(msg == "4")
   {
	  modalBox.modal("hide");
	   var form = $('<div class="row"></div>');
		form.append('<div class="input-field input-field-pe text-left">Orders need to be scheduled a minimum of <strong>4 business days</strong> in advance. Any scheduled orders cannot be canceled within <strong>3 business days</strong> of the reservation date. Thank you!</div>');
		setBootboxWidth = 1;
		 var div = bootbox.dialog({
								title: "COLOR CORRECTION",
								closeButton: true,
								message: form,
								onEscape: function() {
								},					
							});	
							
	}
   if(msg == "3")
   {		
		$( "#content_event" ).prop( "disabled", true );
		$( "#content_event" ).prop( "readonly", true );
		$('.form-inline .btn').prop('disabled', 'disabled');
		
		modalBox.modal("hide");
		
		if(content_event != "0")
		{
			
			var msg = "<div class='row'><div class='input-field input-field-pe text-left'>Please remember to come back to this event or select this event on the Order page when placing your actual order to guarantee your turnaround time.<br /><br />Orders with over 800 images will have a 6 business day turn-around time.<br /><br />Your order has to be completed and images have to be uploaded by <span class='nowrap-pe'>"+formatDate(start)+"</span>.</div></div>";
			setBootboxWidth = 1;
			if(msg != "")
			{
				
				var div = bootbox.dialog({
						closeButton: true,
						message: msg
						
					});
					
					
							
			}
		}
		
   }
	     
	 
 
   
   }
   
   });
}

function delete_event(){
//e.preventDefault(); // on stop le submit
var eventId = $('#eventId').val();
var title = $('#title').val();
var start = $('#start').val();					
var end = $('#end').val();
var allDay = $('#allDay').val();
var where_event = $('#where_event').val();
var content_event = $('#content_event').val();
var no_of_images = $('#no_of_images').val();
var customer_event_id = $('#customer_event_id').val();
var order_name = $('#order_name').val();
var event_id = $('#event_id').val();
var customer_id = $('#customer_id').val();
var div = $(this).parents("div.ui-dialog-content");
del_event_cal(event_id,customer_event_id,title,start,end,allDay,where_event,order_name,content_event,no_of_images,customer_event_id,customer_id,div);  
}

function del_event_cal(event_id,customer_event_id,title,start,end,allDay,where_event,order_name,content_event,no_of_images,customer_event_id,customer_id, modalBox) 
{ 

    // I will create the eventInsert script in a new page, and I name it here :   
   var formData = {event_id:event_id,title:title,start:start,end:end,allDay:allDay,where_event:where_event,order_name:order_name,content_event:content_event,customer_id:customer_id,customer_event_id:customer_event_id,no_of_images:no_of_images};
   
   $.ajax({
    url: 'pages/calendar_delete_event', 
   data: formData,
   type: "POST",
   success: function(msg) {
   
	//alert(msg);
 	
	
	  $('#calendar').fullCalendar('next');	  
	  $('#calendar').fullCalendar('prev');
	  $('#calendar').fullCalendar( 'refetchEvents' );	   
	bootbox.hideAll();
	   
   if(msg == "1")
   {
		modalBox.modal("hide");
		
				
			var msg = "<div class='row'><div class='input-field input-field-pe text-left'>Your order <strong class='underline-pe'>"+order_name+" : "+no_of_images+"</strong> images has been removed from the calendar</div></div>";
			setBootboxWidth = 1;
			if(msg != "")
			{
				var div = bootbox.dialog({
						closeButton: true,
						message: msg
					});
			}
		
   }
   if(msg == "2")
   {
		setBootboxWidth = 1;
		$('#event_msg').html("Sorry for the inconvenience, but your order unable to delete").css( "color", "red" ).css( "font-weight", "bold" );
   }
   
	  
	  
   
   }
   
   });
}

var checkWeekend = 0;
var checkDayCount = 0;
/** checkServiceCapacity **/
function checkServiceCapacity(start, cell) 
{ 

  //alert(start);
  var action = "checkServiceCapacity"; 
    // I will create the eventInsert script in a new page, and I name it here :   
   var formData = {start:start,action:action};
   
  //alert(formData);
   
  var checkStartDay = new Date(start); 
	var startDayToCheck = checkStartDay.getUTCDay();
   
   $.ajax({
   url: 'pages/calendar_check_service_capacity',   
   data: formData,
   type: "POST",
   success: function(msg) {  
		//alert(msg);
		var obj = $.parseJSON(msg);
		var today = new Date().toJSON().slice(0,10);
		//alert(obj.images_left);
		
		if(start >= today)
		{
			checkDayCount++;
			if(startDayToCheck == 0 || startDayToCheck == 6)
			{
				checkWeekend++;	
			}
			//alert(checkWeekend);
		}
		if(checkDayCount > 5)
		{
			//checkDayCount = 0;
		}
		if(checkWeekend > 2)
		{
			checkWeekend = 0;
		}
		//alert(checkWeekend);	
		
		if(obj.capacity_status == "capacityFull")
		{
			  // It's an example, do your own test here
			
		$("#editar_control_"+start+"_id").css("color", "#555555");
		
			cell.addClass('disabled');
			
			if(start == today)
				{
					cell.css("background-color", "red");
				}
			
			if(parseInt(obj.images_left) >= 1001)
			{			
				if(start >= today)
				{
					cell.css("background-color", "gray");
				}
			}
			else
			{				
				if(start >= today)
				{
					cell.css("background-color", "gray");
				}
			}
			//$('#calendar').fullCalendar('unselect');
			 //return false;
			
			$(".fc-widget-content").addClass("disabled");
			
			
		}
		else
		{
				//alert(parseInt(obj.images_left));
				if(parseInt(obj.images_left) <= 1000)
				{					
					//alert(checkWeekend);
					//alert(checkDayCount+checkWeekend);
					if(checkDayCount <= 4+checkWeekend)
					{
						cell.css("background-color", "gray");
						cell.css("opacity", "1");
					}
					else
					{
						cell.css("background-color", "gray");
						cell.css("opacity", "0.3");
					}
					
				}
		}
		//return msg;
	}   
   });
}
function showNoReservationMessage()
{
	var form = $('<div class="row"></div>');
	form.append('<div class="input-field input-field-pe text-left;">Orders need to be scheduled a minimum of <strong>4 business days</strong> in advance. Any scheduled orders cannot be canceled within <strong>3 business days</strong> of the reservation date. Thank you!</div>');
	setBootboxWidth = 1;
	 var div = bootbox.dialog({
							closeButton: true,
							message: form,
							onEscape: function() {
							},					
						});						
   
} 
function showNoReservationMessageSatAndSun()
{
	var form = $('<div class="row"></div>');
	form.append('<div class="input-field input-field-pe text-left;">Maximum capacity has been reached for this date. Please schedule your order on a different date. Thank you!</div>');
	
	 var div = bootbox.dialog({
							closeButton: true,
							message: form,
							onEscape: function() {
							},					
						});							
   
} 
function checkServiceCapacityOnSelect(start) 
{ 

  //alert(start);
  var action = "checkServiceCapacity"; 
    // I will create the eventInsert script in a new page, and I name it here :   
   var formData = {start:start,action:action};
   
   //alert(formData);
   
   $.ajax({
   url: 'pages/calendar_check_service_capacity',   
   data: formData,
   type: "POST",
   success: function(msg) {  
		//alert(msg);
		var obj = $.parseJSON(msg);
		//alert(obj.capacity_status);
		console.log(obj.capacity_status);
		if(obj.capacity_status == "capacityFull")
		{
			  // It's an example, do your own test here
			$(".fc-widget-content").addClass("disabled");
			
			var msg = "<div class='row'><div class='input-field input-field-pe text-left;'>Maximum capacity has been reached for this date. Please schedule your order on a different date. Thank you!</div></div>";
			setBootboxWidth = 1;
			if(msg != "")
			{
				var  div = bootbox.dialog({
						closeButton: true,
						message: msg,						
					});
						
			}
			$('#calendar').fullCalendar('unselect');
			return false;
		}
		else
		{
						var check = start;
						/** get day number **/
						var myDate = new Date(check); 
						var dayToCheck = myDate.getUTCDay();
						//alert(dayToCheck);			
						
						var today = new Date().toJSON().slice(0,10);
						var new_date = new Date(); 
						var check_<?php echo $no_booking_period;?>Days = new_date.setDate(new_date.getDate() + <?php echo $no_booking_period;?>); // another date
						
						var check_<?php echo $no_booking_period;?>Days = new_date.toJSON().slice(0,10);
						
						var holidays = [];
						holidays.push(<?php echo $holidays_str;?>);
						//alert(check);
						
						var event_dates = [];
						event_dates.push(<?php echo $event_dates_str;?>);
						//alert(check + today);
						
						if($.inArray(check, event_dates) != -1)
						{
							
						}
						else
						{
							if(check < today)
							{
								
							}
						}
						if(check < today)
						{
								
						}
						
						/*var form = $("<form name='form-inline' action='' novalidate class='form-inline'></form>");	*/		
						
						
						// Event Date 
						var form = $('<div class="row mLR-pe-0"><div class="input-field input-field-pe"><div id="event_msg" class="mTRBL-pe-5"></div><input type="hidden" id="title" name="title" value="title"><input type="text" id="eventDate" readonly class="my-input" required name="eventDate" value="'+moment(start).format("dddd, Do MMMM YYYY")+'"><label class="my-label"></label></div></div>');
						
						// Order Name
						form.append('<div class="row ordernameRow"><div class="input-field input-field-pe"><input type="text" required id="order_name" name="order_name" class="my-input pR-pe-17" onclick="setActiveLabel();$(\'#event_msg\').html(\'\');" onblur="setActiveLabel();" value=""><label class="my-label">Order Name</label><div id="error"></div></div></div>');
						
						// Est. Number of images
						form.append('<div class="row noOfImagesRow"><div class="input-field input-field-pe"><input type="number" min="1" required id="content_event" value="" name="content_event" onclick="setActiveLabel();$(\'#event_msg\').html(\'\');" onblur="setActiveLabel();" class="my-input"><label class="my-label">Est. No. of images</label><div id="errorEstNo" class="error-estimate"></div></div></div>');
						
										
						// Submit
						form.append('<div class="row"><div class="input-field input-field-pe"><div id="showaddevent" class="text-center"><button type="button" class="btn btn-sm btn-success continue" id="addEventformSubmit" onclick=addEventformSubmit();>RESERVE DATE </button></div></div></div>');				
						
						
						
					
						// Start and End of the event
						form.append('<input type="hidden" id="allDay" name="allDay" value="true"><input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customer_id;?>"><input type="hidden" id="start" name="start" value="'+moment().format(start)+'"><input type="hidden" id="end" name="end" value="'+moment().format(start)+'"><input type="hidden" id="where_event" name="where_event" value="6">');
					
					   
					   if(check <= today)
						{
							var form = $('<div class="row"></div>');
							
							form.append('<div class="input-field input-field-pe text-left">Orders need to be scheduled a minimum of <strong><?php echo $no_booking_period;?> business days</strong> in advance. Any scheduled orders cannot be canceled within <strong>3 business days</strong> of the reservation date. Thank you!</div>');
					   }
						if(check <= check_<?php echo $no_booking_period;?>Days && check != today)
						{
							var form = $('<div class="row"></div>');
							
							
							form.append('<div class="input-field input-field-pe">Orders need to be scheduled a minimum of <strong><?php echo $no_booking_period;?> business days</strong> in advance. Any scheduled orders cannot be canceled within <strong>3 business days</strong> of the reservation date. Thank you!</div>');
					   }
					  
						if(check < today)
						{							
							$('#calendar').fullCalendar('unselect');
							return false;
					   }
					setBootboxWidth = 0;
					 var div = bootbox.dialog({
					 		title: "COLOR CORRECTION",
							closeButton: true,
							message: form,							
							onEscape: function() {
								
							},					
						});	
								
						
						
								
		
		}
		//return msg;
	}   
   });
}

/** End checkServiceCapacity **/

$('#content_event').blur(function () {
	var content_event = $('#content_event').val();
	if(content_event === ''){
		$('#content_event').val('');
	}
});						
								
								function addEventformSubmit(){		
										
										var title = $('#title').val();
										var start = $('#start').val();					
										var end = $('#end').val();
										var allDay = $('#allDay').val();
										var where_event = $('#where_event').val();
										var order_name = $('#order_name').val();
										var content_event = $('#content_event').val();
										var customer_id = $('#customer_id').val();
										
										var letters = /<|>/g;					
										
										var $activeDialogs = $(".ui-dialog:visible").find('.ui-dialog-content');
										
										var div = $(this).parents("div.ui-dialog-content");
										
										if (order_name != '' && !$('#order_name').val().match(letters) && content_event != '' &&  parseInt(content_event) > 0) 
										{					
											// Now we push it to event table also :
											if(add_event_cal(title,start,end,allDay,where_event,order_name,content_event,customer_id, div))
											{
											  $('#calendar').fullCalendar('renderEvent',
												{					
													title: content_event,
													start: start,
													end: end,
													allDay: allDay
												},
												true // make the event "stick"
												);
											}
										}
										else
										{
											if((order_name == '') || $('#order_name').val().match(letters))
											{
												$('.ordernameRow .my-label').addClass('errorTxt');
											}
											if(content_event == '' || parseInt(content_event) <= 0)
											{							
												$('#content_event').val('');
												$('.noOfImagesRow .my-label').addClass('errorTxt');							
											}
										}
										
										// Whether we had the form fulfilled or not, we clean FullCalendar and close the popup   
										$('#calendar').fullCalendar('unselect');
								}
								
								
									//});
function formatDate(inputDate) {
	var date = inputDate.split("-");
	var months = [];
	months[1] = 'Jan';
	months[2] = 'Feb';
	months[3] = 'Mar';
	months[4] = 'Apr';
	months[5] = 'May';
	months[6] = 'Jun';
	months[7] = 'Jul';
	months[8] = 'Aug';
	months[9] = 'Sep';
	months[10] = 'Oct';
	months[11] = 'Nov';
	months[12] = 'Dec';

	
	if(date[1]<10)
	{
		date[1] = date[1].substring(1,2);		
	}
	
	for(var j=1;j<months.length;j++)
	{
		if(date[1] == j)
		{
			date[1] = months[j];	
		}		
	}

	var formattedDate = date[2]+" "+date[1]+" "+date[0];
	return formattedDate;
}

function addEvent(start)
{
	
	checkServiceCapacityOnSelect(start);


}

								function placeorder(){
								if($('#content_event').val() == '')
								{	
									$('#error').text('Please enter images').css( "padding-top", "15px" ).css( "color", "red" ).css( "font-weight", "bold" );	
								}
								else
								{
									var noOfImages = $('#no_of_images').val();
									var eventType = $('#where_event').val();
									var order_name = $('#order_name').val();
									var event_type = $('#event_type').val();
									var booking_date = $('#start').val();
									var customer_type = $('#customer_type').val();
									var customer_event_id = $('#customer_event_id').val();
									
									/** Preffered Customer **/
									if(customer_type == 1)
									{
										if(event_type == 6)
										{
											
											var redirectUrl = 'order_cull_and_color';
										}else if (event_type == 14)
										{
											var redirectUrl = 'order_retouching';
										}
									}
									/** Freedom Individual Customer and Freedom Partnership Customer **/
									if(customer_type == 2 || customer_type == 3)
									{
										if(event_type == 6)
										{
											
										}else if (event_type == 14)
										{
											
										}
									}
									
									
									var form1 = $('<form novalidate action="' + redirectUrl + '" method="post">' +
									'<input type="hidden" name="noOfImages" value="'+noOfImages+'" />' +
									'<input type="hidden" name="eventType" value="'+eventType+'" />' +
									'<input type="hidden" name="order_name" value="'+order_name+'" />' +
									'<input type="hidden" name="event_id" value="'+customer_event_id+'" />' +
									'<input type="hidden" name="booking_date" value="'+booking_date+'" />' +
									'<input type="hidden" name="order_type" value="Premium" />' +
									'</form>');
									$('body').append(form1);
									console.log(form1);									
									$(form1).submit();
								}
}
							
							
							
</script>