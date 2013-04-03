<!DOCTYPE html>
<html>
<head>
<title>mmrf</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/res.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<link href="css/easy-fancybox.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>


   <div class="alert alert-block">
  <button type="button" class="close closebutton" data-dismiss="alert">&times;</button>
  <h4>MMRF!</h4>
  Check it
</div>
   
   


	<div class="slide1">
	
		<img src="images/3.jpg" width="100%" height="100%">
		<?php include 'header.php';?>
		<div id="slidemenu" class="visible-desktop">

			<img src="images/slide_menu.png">
			
			
   
			
			
			
			
			
		</div>
		
	</div>

	<div class="slide2">


		<img src="images/4.jpg" width="100%" height="100%">
		
	</div>


	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.mobilemenu.js"></script>

	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>

	<script type="text/javascript">
	var pos=$('#slidemenu').css('left');
	pos=pos.replace('px','');
	
	$(document).scroll(function(e){

		var per=($(window).scrollTop()/1100)*100;
		var sc=((per/100)*338);
		
		
		pos=(-338);
		pos=(parseInt(pos)+parseInt(sc));
		console.log(pos);
		if(pos<0)
		{
		$('#slidemenu').css('left',pos);
		}
	});
</script>


	<script type="text/javascript">
/* <![CDATA[ */
jQuery(document).ready(function($){
var fb_timeout = null;
var fb_opts = { 'overlayShow' : true, 'centerOnScroll' : true, 'showCloseButton' : true, 'showNavArrows' : true, 'onCleanup' : function() { if(fb_timeout) { window.clearTimeout(fb_timeout); fb_timeout = null; } } };
/* IMG */
var fb_IMG_select = 'a[href$=".jpg"]:not(.nofancybox),a[href$=".JPG"]:not(.nofancybox),a[href$=".gif"]:not(.nofancybox),a[href$=".GIF"]:not(.nofancybox),a[href$=".png"]:not(.nofancybox),a[href$=".PNG"]:not(.nofancybox)';
$(fb_IMG_select).addClass('fancybox').attr('rel', 'gallery');
$('a.fancybox, area.fancybox').fancybox( $.extend({}, fb_opts, { 'transitionIn' : 'elastic', 'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic', 'easingOut' : 'easeInBack', 'opacity' : false, 'titleShow' : true, 'titlePosition' : 'over', 'titleFromAlt' : true }) );
/* Auto-click */ 
$('#fancybox-auto').trigger('click');
});
/* ]]> */
</script>
	<script type='text/javascript' src='js/prefixfree.min.js'></script>
	<script type='text/javascript' src='js/jquery.fancybox-1.3.4.pack.js'></script>
	<script type="text/javascript" src="js/cryptx.js"></script>


	<script language="javascript" type="text/javascript">var kpg_cell="N";var kpg_nrci_image="/plugins/no-right-click-images-plugin/not.gif";var kpg_nrci_extra="N";var kpg_nrci_drag="Y";</script>
	<script language="javascript" type="text/javascript"
		src="js/no-right-click-images.js"></script>
	<script>
			var getElementsByClassName=function(a,b,c){if(document.getElementsByClassName){getElementsByClassName=function(a,b,c){c=c||document;var d=c.getElementsByClassName(a),e=b?new RegExp("\\b"+b+"\\b","i"):null,f=[],g;for(var h=0,i=d.length;h<i;h+=1){g=d[h];if(!e||e.test(g.nodeName)){f.push(g)}}return f}}else if(document.evaluate){getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e="",f="http://www.w3.org/1999/xhtml",g=document.documentElement.namespaceURI===f?f:null,h=[],i,j;for(var k=0,l=d.length;k<l;k+=1){e+="[contains(concat(' ', @class, ' '), ' "+d[k]+" ')]"}try{i=document.evaluate(".//"+b+e,c,g,0,null)}catch(m){i=document.evaluate(".//"+b+e,c,null,0,null)}while(j=i.iterateNext()){h.push(j)}return h}}else{getElementsByClassName=function(a,b,c){b=b||"*";c=c||document;var d=a.split(" "),e=[],f=b==="*"&&c.all?c.all:c.getElementsByTagName(b),g,h=[],i;for(var j=0,k=d.length;j<k;j+=1){e.push(new RegExp("(^|\\s)"+d[j]+"(\\s|$)"))}for(var l=0,m=f.length;l<m;l+=1){g=f[l];i=false;for(var n=0,o=e.length;n<o;n+=1){i=e[n].test(g.className);if(!i){break}}if(i){h.push(g)}}return h}}return getElementsByClassName(a,b,c)},
				dropdowns = document.getElementsByTagName( 'select' );
			for ( i=0; i<dropdowns.length; i++ )
				if ( dropdowns[i].className.match( 'dropdown-menu' ) ) dropdowns[i].onchange = function(){ if ( this.value != '' ) window.location.href = this.value; }
		</script>

	<script type='text/javascript' src='js/jquery.tooltip.js'></script>
	<script type='text/javascript' src='js/skrollr.js'></script>
	<script type='text/javascript' src='js/mediaelement-and-player.min.js'></script>
	<script type='text/javascript' src='js/jquery.jscrollpane.min.js'></script>
	<script type='text/javascript' src='js/jquery.fancyNews-1.3.js'></script>
	<script type='text/javascript' src='js/jquery.preloader.js'></script>
	<script type='text/javascript' src='js/home.js'></script>
	<script type='text/javascript' src='js/main.js'></script>
	<script type='text/javascript' src='js/jquery.easing-1.3.pack.js'></script>
	<script type='text/javascript' src='js/jquery.mousewheel-3.0.4.pack.js'></script>
	<script type='text/javascript' src='js/jquery.metadata.js'></script>

</body>
</html>

