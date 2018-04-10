function addQsn(cls) {
	// body...
	var a = $("#"+cls.className).html();
	$("."+cls.className).css('opacity', '0.6');
	$("."+cls.className).css('pointer-events', 'none');
	$('.selected_list').append('<li id=q'+cls.className+' class="list-group-item justify-content-between">'+a+'<span class="tag red float-xs-right"><a class="q'+cls.className+'" onClick=qsnRemove(this); style="color:#fff">Remove(✖)</a></span></li>');
    var count = $('ul.selected_list li').length;
    if(count>1){
    	alert('You Can Select Max Four Questions');
    	$("#q"+cls.className).remove();
	$("."+cls.className).css('opacity', '');
	$("."+cls.className).css('pointer-events', '');
    }
    else{
    $("#total").html(count);
}
$(".empty").css('display', 'none');
}
function qsnRemove(link){
	var b = link.className.substring(1, 3);
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
    $('.selected_list').append('<li id=b'+qsn+' class="list-group-item justify-content-between">Q'+qsn+'.'+c+'<span class="tag red float-xs-right"><a class=b'+qsn+' onClick=removeOwn(this); style="color:#fff">Remove(✖)</a></span></li>');
 if(qsn>4){
    	alert('You Can Select Max Four Questions');
    	$("#b"+qsn).remove();
    }
    else{
    $("#total").html(qsn);
}
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



