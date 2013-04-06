var cnt=0;
var scrollPos=0;
$(document).ready(function(){

	$("#show_feedback").live("click",function(){
		$("#feedback_form").fadeToggle(600);	
	})

	
	if($(".work_info").length>0){
		if(!$("body").hasClass("narrow")){
			var startAt=$(".work_info").offset().top;
			$(window).scroll(function(){
				if(!$("body").hasClass("narrow")){
					var top = $(window).scrollTop();
					if(top>startAt-20){
						$(".work_info").css({"position": "fixed", "top": 20,"left": "50%", "margin-left": 280});
					}else {
						$(".work_info").css({"position": "static", "top": "inherit", "margin-left": 0});
					}
				}
			})
		}
	}
	
	

	
	
	window.onresize = function(event) {
		resizeBody();	
	}
	resizeBody();
	
	$(".works .item").each(function(i){
		makerect(123,95,$(this),"#fff");
	})
	
	if($(".map").length==0){ 
		$(window).scroll(function(){
			if(!$("body").hasClass("narrow")){
				var top = $(window).scrollTop();
				var hgt = $(window).height();
				if(top>hgt){
					if(scrollPos==0){
						$("#totop").stop().animate({"left": 0},300);	
						scrollPos=1;
					}
				}else {
					if(scrollPos==1){
						$("#totop").stop().animate({"left": "-30px"},300);	
						scrollPos=0;
					}
				}
			}
		})
	}
});

function resizeBody(){
	var wdt = $(window).width();
	if(wdt<980){
		$("body").addClass("narrow");
		if($("#map_wrapper").length>0 && $(".aftermap").length==0){
				$(".map").after("<div class='aftermap wrap rgt_info'><div class='feedback_pan  block_2 visible'>"+$(".feedback_pan").html()+"</div></div>");
				$("#feedback_form").remove();
		}
	}
	else {
		$("body").removeClass("narrow");
		if($(".aftermap").length>0){
			$(".contacts_pan").after("<div class='feedback_pan block_2 rgt' id='feedback_form'>"+$(".feedback_pan").html()+"</div>"); 
			$(".aftermap").remove();	
		}
	}
}

function changeOpacity(){
		var i=Math.round(Math.random()*cnt);
		$("#elem_"+i).animate({"opacity": Math.random()*(0.8-0.1)+0.1},Math.random()*400+300);
	}
	
function makeline(n,xPos,yPos,targ){
		var x = 0;
		var y = 0; 
		for (var i=0; i<n; i++ ){
			x= i*100;
			for (j=0; j<n-i; j++){
				cnt++;
				y=j*100;
				opacity = (100-i*20-j*20)/100;
				var bl = "<div class='m_w_bl' id='elem_"+cnt+"' style='"+xPos+":"+x+"px; "+yPos+":"+y+"px; opacity:"+opacity+";'></div>";
				$("."+targ).prepend(bl);
				
			}
			
		} 
		setInterval("changeOpacity("+n+")",500);
	} ;
	
function makesquares(size,target,color){
	var x = 0;
	var y = 0;
	var hgt = target.height();
	var wdt = target.width();
	target.css({"position": "relative"});
	
	for (var i=0; i<Math.round(wdt/size)+1; i++){
		x = i*size;
		for (j=0; j<Math.round(hgt/size)+1; j++ ){
			y = j*size;
			opacity = Math.random()*(0.8-0.3)+0.3;
			var bl = "<div class='square_block_1' style='left:"+x+"px; top:"+y+"px; opacity:"+opacity+"; width:"+size+"px; height:"+size+"px; background: "+color+"'></div>";
			target.prepend(bl);
		}
	}
	setInterval(function(){
		var random = Math.round(Math.random()*100);
		$("h1 .square_block_1").eq(random).animate({"opacity": Math.random()*(0.8-0.3)+0.3}, 300);
	},200);
};

function makerect(size_x,size_y,target,color){
	var x = 0;
	var y = 0;
	var hgt = target.height();
	var wdt = target.width();
	target.css({"position": "relative"});
	
	for (var i=0; i<Math.round(wdt/size_x)+1; i++){
		x = i*size_x;
		for (j=0; j<Math.round(hgt/size_y)+1; j++ ){
			y = j*size_y;
			opacity = Math.random()*(0.8-0.3)+0.3;
			var bl = "<div class='square_block_1' style='left:"+x+"px; top:"+y+"px; opacity:"+opacity+"; width:"+size_x+"px; height:"+size_y+"px; background: "+color+"'></div>";
			target.prepend(bl);
		}
	}
};