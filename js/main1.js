var pos = 0;
var startpos = 0;
var curscroll = 0;
var diffscroll = 0;
var endscroll = 0;
var isMobile = false;
var toSlide = false;	
var isFocus = false;
var isIOS = false;
var curmenu = 0;

/*FOR GRAPH*/
var paper;
var dots = Array();
	
var dates = Array();
var texts = Array();
	
dates[1] = "June, 2006";
dates[2] = "June, 2007";
dates[3] = "June, 2008";
dates[4] = "June, 2009";
dates[5] = "June, 2010";
dates[6] = "June, 2011";
dates[7] = "June, 2012";
	
texts[1] = "1,043 million";
texts[2] = "1,173 million";
texts[3] = "1,463 million";
texts[4] = "1,669 million";
texts[5] = "1,966 million";
texts[6] = "2,110 million";
texts[7] = "2,405 million";

var whgt;
var wwdt;
var stat_hgt;
var stat_wdt;
var stat_start;
var coords = Array();
var startAt;
var delim = 1;
/*END OF GRAPH*/

var numTech = 0;




$(document).ready(function(e) {
	
	if($.cookie("username")!=null){ 
		var username = $.cookie("username");
		$("#username").val(username);
		changeName(username);
	};
	$("#username").live("keyup",function(){
		var username = $(this).val();
		changeName(username);
	})	
	
	/*PRE-SETTING INFO FOR TECH BLOCKS*/
	if(!$("body").hasClass("narrow")){
	$(".main_technologies .one_tech_block").each(function(){
		if($(this).parent().hasClass("rgt")){
			var pos = "right";
			var degFrom = 20;
		}
		else {
			var pos = "left";
			var degFrom = -20;
		}
		$(this).rotate(degFrom).css(pos,(-1)*$(window).width()/1.5).css("margin-top",80);
	})
	}
	
	if($("#ios").length>0){
		isIOS = true;	
	}
	
		
	/*SETTING INVIEW PARAMETER FOR FRAMES*/
	$('.frame').bind('inview', function (event, visible) {
	    if (visible == true) {
	        $(this).addClass("inview");
	    }else{
	      $(this).removeClass("inview");
	    }
	})
	
	$(".main_technologies .one_tech_block").each(function(){
		var tp = $(this).offset().top;
		if($(this).closest(".row").hasClass("green"))tp=tp-300;
		$(this).data({"top":tp});	
	})
	
	
	$(window).scroll(function(){
		positionElements();
	})

	
	if(!isIOS){	
		$(window).resize(function(){
			resizeElements();
			positionElements();
		})
	}
	
	setInterval("showTechPics()",2000);
	setInterval("showWorkDesc()",5000);
	
	$(".main_fixed_menu a, .gotoFrame").live("click touchstart",function(e){
		var frame = $(this).data("frame");
		/*PAGE SCROLL FOR DESKTOP BROWSERS*/
		e.preventDefault();
		if(!isIOS){
			$.scrollTo($("#frame"+frame),1000, {easing:'easeOutExpo'});
		}else {
			/*SCROLL FOR MOBILE DEVICES*/
				var tp = $("#frame"+frame).offset().top;
				mobileScrollTo(tp,toSlide);
			/*END OF SCROLL FOR MOBILE DEVICES*/		
		}
		return false;	
	})
	resizeElements();
	if(!isIOS){
		positionElements();
	}
	paper = Raphael("graph", "100%", "100%");
});


function resizeElements(){
	whgt = $(window).height();
	wwdt = $(window).width();
	
	/*CHANGES FOR TECH*/
	if(wwdt<1300){		//ONLY FOR SMALL SCREENS
		var cwdt = Math.floor(wwdt/3);
		var swdt = cwdt/2;
	}else {
		var cwdt = 450;
		var swdt = 225;	
	}
	$(".main_technologies .center_inf").css({"width": cwdt});
	if(!$("body").hasClass("narrow"))
	$(".main_technologies .blocks_cont .o-lay_block").css({"width": swdt});
	/*END OF CHANGES FOR TECH*/
	
	/*DATA FOR GRAPH*/
	
		/*DRAWING STATS*/
	if(!$("body").hasClass("narrow")){
		$(".main_stats").css({"height":'0'});
	}
	
	stat_hgt = $(".main_stats").height()-200;
	if(whgt<890 || wwdt<1300){
		var k = 33;
		var fntSz = (wwdt * (stat_hgt*(1-1.75/4)-25)) / (k*(stat_hgt*(1-1.75/4)-25) + wwdt);
		$(".main_stats .title").css({"font-size": fntSz,	"bottom": "25px"});
	}else {
		$(".main_stats .title").css({"font-size": "50px",	"bottom": "60px"});
	}
	
	stat_wdt = $(".main_stats").width();
	stat_start = Math.round(stat_wdt/2 - 490);

	coords[1] = [stat_start+17,stat_hgt*3/4];
	coords[2] = [stat_start+180,stat_hgt*2.7/4];
	coords[3] = [stat_start+343,stat_hgt*2.5/4];
	coords[4] = [stat_start+506,stat_hgt*2.4/4];
	coords[5] = [stat_start+669,stat_hgt*2.1/4];
	coords[6] = [stat_start+832,stat_hgt*2/4];
	coords[7] = [stat_start+963,stat_hgt*1.75/4];
	
	/*END OF DATA FOR GRAPH*/
}

function positionElements(){
		var top = $(window).scrollTop();
		var hgt = $(".frame").height();
		menu = 0
		if(top>$(".main_technologies").offset().top)menu=2;
		if(top>=$(".main_stats").offset().top)menu=3;
		if(top>=$(".main_news").offset().top)menu=4;
		if($(".team").length>0 && top>=$(".team").offset().top)menu=5;
		if(top>=$(".map").offset().top)menu=6;
		if(menu!=curmenu){
			curmenu = menu;
			$(".main_fixed_menu a").not("#menu_item"+menu).removeClass("active");
			$("#menu_item"+menu).addClass('active');
		}
		
		if(top>$(".main_technologies").offset().top){
			$(".main_fixed_menu").fadeIn('fast');	
		}else {
			$(".main_fixed_menu").fadeOut('fast');	
		}
	
		if(!isIOS){
			
			var mobile = false;
			
			
			/*CHANGING SELECTED MENU ELEMENT*/
			
				
			
			/*END OF CHANGING FIXED MENU ELEMENT*/
	
	
			if(!$("body").hasClass("narrow")){
			/*MOVING TECHNOLOGIES*/
			if($(".main_technologies").hasClass("inview") || isIOS){
				var offsetMulti = 20*whgt/1050;
				$(".main_technologies .one_tech_block").each(function(){
					var startAt = $(this).data("top");
					var offset = $(this).data("offset");
					var top1 = startAt-whgt/1.5+offset*offsetMulti;
					var top2 = startAt-whgt/2+offset*offsetMulti;
						if($(this).parent().hasClass("rgt")){
							var pos = "right";
							var degFrom = 20;
						}
						else {
							var pos = "left";
							var degFrom = -20;
						}
						
						var deg = getPos(degFrom,0,top1, top2,top);
						if(deg==0)deg="0deg";
						else deg = deg+"deg";
						$(this).rotate(deg).css(pos,getPos((-1)*$(window).width()/1.5,0,top1, top2, top)).css("margin-top",getPos(80,0,top1, top2,top));
				})
			}
			/*END OF MOVING TECHNOLOGIES*/
			
			
			/*MOVING GRAPH*/
			if($(".main_stats").hasClass("inview")){
				var startAt = $(".main_stats").offset().top-whgt/4;
				var statMulti = getPos(0,1,startAt,startAt+whgt/4-10,top)*delim;
				paper.clear();
				var route = "M0 "+(200+stat_hgt)+" L0 "+statMulti*(200+stat_hgt)+" ";
				for(i=1; i<coords.length; i++){
					route+=" L"+coords[i][0]+" "+(statMulti*(200+Math.round(coords[i][1])));	
				}
				pos = route+" L"+stat_wdt+" "+statMulti*(200+stat_hgt/4/delim)+" L"+stat_wdt+" "+(200+stat_hgt)+"  z";
	
				graph = paper.path(pos);
				graph.attr({"fill":"#00A1CB","stroke-opacity":"0"});
				
				for(i=1; i<coords.length; i++){
					var statMulti = getPos(0,1,startAt+(7-i)*whgt/28-10,startAt+whgt/4-10,top)*delim;
					if(statMulti>0)opacity=1;
					else opacity=0;
					var tp=statMulti*(coords[i][1]+200);
					var dot = paper.ellipse(coords[i][0], tp, 16, 16);
					dot.attr({"stroke": "#fff", "stroke-width": 4, "fill": "#00A1CB","opacity": opacity});
					var dot2 = paper.ellipse(coords[i][0], tp, 10, 10);
					dot2.attr({"stroke-opacity":"0", "fill": "#fff","opacity": opacity});
					var txt1 = paper.text(coords[i][0],tp+35,dates[i]).attr({"fill": "#fff","font-size": "12","opacity": opacity});
					var txt2 = paper.text(coords[i][0],tp+50,texts[i]).attr({"fill": "#fff","font-size": "16","font-weight": "bold","opacity": opacity});
					var st = paper.set();
					st.push(dot,dot2,txt1,txt2);
					dots[i]=st;	
				}
			}
			/*END OF MOVING GRAPH*/
			}
			
			if($(".main_news").hasClass("inview")){
				
				$(".main_news .post").each(function(){
					if($(this).hasClass("rgt")){
						var pos = "right";
					}
					else {
						var pos = "left";
					}
					var startAt = $(this).offset().top;
					
					$(this).css(pos,getPos((-1)*$(window).width()/2,0,startAt-whgt/1.5, startAt-whgt/2, top));
					$(this).find(".point").css("opacity",getPos(0,1,startAt-whgt/2, startAt-whgt/2+20, top));
					$(this).find(".cont").css(pos,getPos(-300,0,startAt-whgt/1.5+100, startAt-whgt/2+100, top));
				})
			}
			
			if(!$("body").hasClass("narrow")){
			/*MOVING TEAM BLOCKS*/
			if($(".team").hasClass("inview")){
				$(".team .overlay").each(function(){
					var startAt = $(this).offset().top;
					$(this).css("top",getPos(100,0,startAt-whgt/1.2, startAt-whgt/1.9, top)+"%");
				})
			}
			}
			/*END OF MOVING TEAM BLOCKS*/
		}
}
	
	function getPos(valFrom,valTo,start, end, cur, inert){
		if(typeof(inert)==="undefined")inert=1;
		if(cur>start){
			if(cur>end)return valTo;
			else {
				var diff = end-start;
				var pos = valFrom + inert*(valTo-valFrom)*(cur-start)/diff;
				return pos;	
			}
		}else return valFrom;
	}

	/*SCROLLING PAGE FOR MOBILE DEVICES*/
	function mobileScrollTo(tp, toSlide, cnt, sign){
	
		if(typeof(cnt)==="undefined")cnt=0;
		
		if(!toSlide){
			var toSlide = (-1)*tp + curscroll;
			sign = (toSlide - curscroll)/Math.abs(toSlide - curscroll);
		}
		
		var curdiff = toSlide - curscroll;
		var cursign = curdiff/Math.abs(curdiff);

		//console.log("tp = "+tp+"--toSlide = "+toSlide+"--curscroll = "+curscroll+" --- curdiff= " +curdiff);
		if(Math.abs(curdiff)>1  && cnt<80){
			cnt++;
			curscroll += curdiff/3;
			$("#pagescroller").stop().animate({"margin-top": curscroll});
			positionElements(curscroll);
			mobileScrollTo(tp, toSlide, cnt,sign);
		}else {
			toSlide = false;	
		}
		
	}
	/*END OF SCROLLING PAGE FOR MOBILE DEVICES*/
	
	
	function showWorkDesc(){
		if($(".main_works").hasClass("inview")){
			var random = Math.round(Math.random()*3);
			var el = $(".project").eq(random).find("span");
			el.stop().animate({"top": 0},600,function(){
				$(this).delay(1200).animate({"top": -220},function(){
					$(this).css({"top": ""});
				})
			})
		}	
	}
	
	/*SHOW RANDOM PIC OVER TECH BLOCK*/
	function showTechPics(){
		
		if(!$("body").hasClass("narrow")){
		if($(".main_technologies").hasClass("inview")){
			var random = Math.round(Math.random()*$(".one_tech_block").length);
			var el = $(".one_tech_block").eq(random);
			var img = new Image;
			var picNum=Math.round(Math.random()*5);
			img.src=pic_url+"i/tech/tech_pic"+picNum+".jpg";
			img.className = "hover-pic";
			img.onload=function(){
				el.append(img);
				el.find(".hover-pic").animate({"top": -45},"fast",function(){
					$(this).delay(2000).animate({"top": -220},function(){
						$(this).remove();
					})	
				})
			}
		}
		}
	}
	
	function changeName(username){
		if(username.length>14)username = username.substring(0,14);
		if(username.length==0)username="visitor";else {
			$("#username").val(username);
		}	
		
		$.cookie("username",username);
		$(".username").text(username);	
		
		$("#nm").val(username); 
	}
	