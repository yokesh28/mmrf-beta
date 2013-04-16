// JavaScript Document


// function for mouse hover

function m_over (){
	
	$("#menu_t").stop().delay(800).animate({opacity:1},800);
	$("#call").stop().delay(700).animate({opacity:1},800);
	
	$("#abt").stop().delay(100).animate({left: '25px'},500);
	$("#amen").stop().delay(200).animate({left: '23px'},500);
	$("#loc").stop().delay(300).animate({left: '30px'},500);
	$("#spe").stop().delay(400).animate({left: '24px'},500);
	$("#gal").stop().delay(500).animate({left: '20px'},500);
	$("#down").stop().delay(600).animate({left: '24px'},500);
	$("#cnt").stop().delay(700).animate({left: '28px'},500);

	
	};
	

//function for mouse leave

function m_out(){
	
	$("#menu_t").stop().animate({opacity:0},100);
	$("#call").stop().animate({opacity:0});
		
	$("#abt").stop().delay(100).animate({left: '135px'},500);
	$("#amen").stop().delay(200).animate({left: '133px'},500);
	$("#loc").stop().delay(300).animate({left: '140px'},500);
	$("#spe").stop().delay(400).animate({left: '134px'},500);
	$("#gal").stop().delay(500).animate({left: '130px'},500);
	$("#down").stop().delay(600).animate({left: '134px'},500);
	$("#cnt").stop().delay(700).animate({left: '138px'},500);

	};
	

// window loads

$(window).load(function() {
	
	$("#yout, .overlay").fadeOut(10);
	$('#yout').vh_center();
	
	$("#logo_h2").delay(1500).animate({opacity:0});
	$("#side_bar").delay(1500).animate({"right":"0px"},700);
	$("#logo_h").delay(1500).animate({"left":"90px","top":"40px"});
	$("#call").delay(1500).animate({opacity:0});
	
	$("#menu_t").delay(1500).animate({opacity:0},700);
	
	$("#abt").delay(1900).animate({left: '135px'},500);
	$("#amen").delay(2000).animate({left: '133px'},500);
	$("#loc").delay(2100).animate({left: '140px'},500);
	$("#spe").delay(2200).animate({left: '134px'},500);
	$("#gal").delay(2300).animate({left: '130px'},500);
	$("#down").delay(2400).animate({left: '134px'},500);
	$("#cnt").delay(2500).animate({left: '138px'},500);


	$("#side_bar_d").delay(2600).fadeOut(100);

//Mouse Over	
	
	
$("#side_bar").mouseenter(function(){
	$(this).css({"width":"50%"})
	$("#side_bar").stop().animate({"right":"0px"},700);
	$("#logo_h2").stop().animate({opacity:1});
	$("#logo_h").stop().animate({"left":"33px","top":"40px"});
	m_over().stop();
	})
			
			
$("#side_bar").mouseleave(function() {
    $(this).css({"width":"249px"});
	$("#logo_h2").stop().animate({opacity:0})
	$("#side_bar").stop().animate({"right":"0px"},700);
	$("#logo_h").stop().animate({"left":"90px","top":"40px"});
	$("#side_bar_d").fadeIn(50).delay(1000).fadeOut(500);
	m_out().stop();
	
	});
	
	
//youtube

//$("#wt").click(function(){
	
	//$("#yout, .overlay").fadeIn(700);
	
	//})
	
//$(".overlay").click(function(){
	
	//$("#yout, .overlay").fadeOut(300);
	
	//})

	
	
		
// menu text hover		
		
/*	$(".txt_menu").hover(function(){
		$(this).stop().animate({opacity:1});
		},
		function(){
		$(this).stop().animate({opacity:.6});

			}
		)
*/		
		

// BG Change on mouse click

$("#abt_t,").click(function(){
	$("#bg_img1").delay(1000).fadeIn(1000);
	$("#bg_img2").delay(1000).fadeOut(1000);
	$("#bg_img3").delay(1000).fadeOut(1000);
	$("#bg_img4").delay(1000).fadeOut(1000);
	$("#bg_img5").delay(1000).fadeOut(1000);

	$("#pattern").delay(1000).fadeOut(1000);


	})
	
$("#down_t").click(function(){
	$("#bg_img5").delay(1000).fadeIn(1000);
	$("#bg_img2").delay(1000).fadeOut(1000);
	$("#bg_img3").delay(1000).fadeOut(1000);
	$("#bg_img4").delay(1000).fadeOut(1000);
	$("#bg_img1").delay(1000).fadeOut(1000);
	$("#pattern").delay(1000).fadeOut(1000);


	})
	
	
	
$("#loc_t").click(function(){
	$("#bg_img3").delay(1000).fadeIn(1000);
	$("#bg_img1").delay(1000).fadeOut(1000);
	$("#bg_img2").delay(1000).fadeOut(1000);
	$("#bg_img4").delay(1000).fadeOut(1000);
	$("#bg_img5").delay(1000).fadeOut(1000);

	//$("#pattern").delay(1000).fadeOut(1000);


	
	$("#goo_map").animate({"right":"0px"},700,"easeOutCubic")
	
	$("#sub_bar").animate({"right":"-500px"},1000,"easeInExpo")
	})

	
$("#amen_t,#cnt_t").click(function(){
	$("#bg_img2").delay(1000).fadeIn(1000);
	//$("#pattern").delay(1000).fadeIn(1000);

	$("#bg_img1").delay(1000).fadeOut(1000);
	$("#bg_img3").delay(1000).fadeOut(1000);
	$("#bg_img4").delay(1000).fadeOut(1000);
	$("#bg_img5").delay(1000).fadeOut(1000);



	})
	
$("#spe_t").click(function(){
	$("#bg_img4").delay(1000).fadeIn(1000);
	//$("#pattern").delay(1000).fadeIn(1000);

	$("#bg_img1").delay(1000).fadeOut(1000);
	$("#bg_img2").delay(1000).fadeOut(1000);
	$("#bg_img3").delay(1000).fadeOut(1000);
	$("#bg_img5").delay(1000).fadeOut(1000);

	})
	
	
$("#abt_t,#amen_t,#down_t,#spe_t,#cnt_t,#gal_t").click(function(){
	$("#sub_bar").delay(300).animate({"right":"0px"},1000,"easeOutCubic");
	$("#goo_map").animate({"right":"-200px"},700,"easeInCubic")
	})

$("#cls,#cnt_cls").click(function(){
	$("#sub_bar").animate({"right":"-500px"},1000,"easeInExpo")
	})


//MENU

$("#abt_t").click(function(){
	$("#down_txt,#loc_txt,#amen_txt,#cnt_txt,#spe_txt").css({"z-index":90});
	$("#adv_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#cnt_txt,#spe_txt,#amen_txt,#loc_txt,#down_txt").animate({opacity:0},300);
	})

$("#cnt_t").click(function(){
	$("#down_txt,#loc_txt,#amen_txt,#adv_txt,#spe_txt").css({"z-index":90});
	$("#cnt_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#adv_txt,#spe_txt,#amen_txt,#loc_txt,#down_txt").animate({opacity:0},300);
	})

$("#spe_t").click(function(){
	$("#down_txt,#cnt_txt,#loc_txt,#amen_txt,#adv_txt").css({"z-index":90});
	$("#spe_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#adv_txt,#cnt_txt,#amen_txt,#loc_txt,#down_txt").animate({opacity:0},300);
	})
	
$("#amen_t").click(function(){
	$("#down_txt,#loc_txt,#adv_txt,#cnt_txt,#spe_txt").css({"z-index":90});
	$("#amen_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#adv_txt,#cnt_txt,#spe_txt,#loc_txt,#down_txt").animate({opacity:0},300);
	})

$("#gal_t").click(function(){
	$("#spe_txt, #down_txt,#cnt_txt,#adv_txt,#amen_txt").css({"z-index":90});
	$("#loc_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#adv_txt,#cnt_txt,#spe_txt,#amen_txt,#down_txt").animate({opacity:0},300);
	})


$("#down_t").click(function(){
	$("#spe_txt,#loc_txt,#cnt_txt,#adv_txt,#amen_txt").css({"z-index":90});
	$("#down_txt").delay(300).animate({opacity:1},1000).css({"z-index":100});
	$("#adv_txt,#cnt_txt,#spe_txt,#amen_txt,#loc_txt").animate({opacity:0},300);
	})


// Menu Bg Animation

$('.txt_menu').mouseover(function(){
		$(this).stop().animate({backgroundPosition:"(-50 0px)"},{duration:700})
		}).mouseout(function(){
$(this).stop().animate({backgroundPosition:"(-200 0px)"},{duration:700})
        .delay(100).animate({backgroundPosition:"(200 0px)"},{duration:1})
		})


// Payment schedule

$("#pay_strip").click(function(){
	$("#sub_bar_pay").animate({"right":"0px"},1500,"easeOutCubic")
	});

$("#cls2").click(function(){
	$("#sub_bar_pay").animate({"right":"-690px"},1200,"easeInCubic")
	});

$(".txt_menu").click(function(){
	$("#sub_bar_pay").animate({opacity:0},200).delay(200).animate({"right":"-690px"},100)
	})
	
$("#cls").click(function(){
		$("#sub_bar_pay").delay(1000).animate({opacity:1},1000)
	})


// DOWNLOAD page


$("#contactForm2").hide();

$("#fp_btn").click(function(){
$("#blocks,#apl_btn").delay(300).fadeIn(900);
$("#contactForm2").fadeOut(300);

	})

$("#bro").click(function(){
$("#contactForm2").delay(300).fadeIn(900);
$("#blocks,#apl_btn").fadeOut(300)
	
	})
	
$("#bro_cls").click(function(){
$("#contactForm2").fadeOut(300);
$("#apl_btn").delay(300).fadeIn(900);

	})
	
	
//refer us

$("#refer_us").toggle(function(){
	
	$("#refer_box").animate({right:"0px"},700)
	},
	function(){
	$("#refer_box").animate({right:"-290px"},700)
		
		}
	)


//galler

$("#cons_updt").hide(10);

$("#amen_g").click(function(){
	$(this).removeClass("gal_btn").addClass("gal_acti");
	$("#cup").removeClass("gal_acti").addClass("gal_btn");
	$("#gal_list").delay(100).fadeIn(500);
	$("#cons_updt").fadeOut(300);
	
	})

$("#cup").click(function(){
	$(this).removeClass("gal_btn").addClass("gal_acti");
	$("#amen_g").removeClass("gal_acti").addClass("gal_btn");
	$("#gal_list").fadeOut(300);
	$("#cons_updt").delay(100).fadeIn(500);

	})


//end of window.document
})

