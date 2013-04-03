//                __             __  _                               __ 
//    ____  ___  / /_____ ______/ /_(_)___  ____  _____  ____  ___  / /_
//   / __ \/ _ \/ __/ __ `/ ___/ __/ / __ \/ __ \/ ___/ / __ \/ _ \/ __/
//  / / / /  __/ /_/ /_/ / /__/ /_/ / /_/ / / / (__  ) / / / /  __/ /_  
// /_/ /_/\___/\__/\__,_/\___/\__/_/\____/_/ /_/____(_)_/ /_/\___/\__/  
//                                                                    
//                                                  
//  01101110 01100101 01110100 01100001 01100011 01110100 01101001 01101111 01101110 01110011 00101110 01101110 01100101 01110100 

 /*----------------------------------------------------------
 *  Preloading des diapos de la Home
 *---------------------------------------------------------- */

$.fn.preloader = function(options){
	
	var defaults = {
		delay:200,
		check_timer:300,
		ondone:function(){ },
		oneachload:function(image){  },
		fadein:500 
	};
	
	var options = $.extend(defaults, options),
	root = $(this) , 
	images = root.find(".slide-home img") ,  
	diapos = root.find(".slide-home").css({"visibility":"hidden",opacity:0}), 
	timer ,  counter = 0, i=0 , checkFlag = [] , delaySum = options.delay ,

	 
	init = function(){
	
		timer = setInterval(function(){
			
			if(counter>=checkFlag.length)
			{
				clearInterval(timer);
				options.ondone();
				return;
			}
			
			for(i=0;i<images.length;i++)
			{
				if( (images[i].complete==true) || (images[i].naturalWidth + images[i].naturalHeight > 0) )
				{
					if(checkFlag[i]==false)
					{
						checkFlag[i] = true;
						options.oneachload(images[i]);
						counter++;
						
						delaySum = delaySum + options.delay;
					}
					
					$(images[i]).parent().css("visibility","visible").delay(delaySum).animate({opacity:1},options.fadein,
					function(){ $(this).parent().parent().removeClass("preloader");   });

				}
			}
		},options.check_timer) 		 
	} ;
	
	diapos.each(function(){	
		$(this).wrap("<div class='preloader' />");
		checkFlag[i++] = false;	
	}); 
	diapos = $.makeArray(diapos); 


	// ---------------------------------------------
	// Précharge l'icone du loader
	// ---------------------------------------------

	var icon = jQuery("<img />",{
		id : 'loadingicon' ,
		src : 'img/preloader_home.gif'	
	}).hide().appendTo("body");


	timer = setInterval(function(){
		if(icon[0].complete==true) 		{
			clearInterval(timer);
			init();
			icon.remove();
			return;
		}
	},100);
	
}