<!DOCTYPE html >
<html lang="en">
<head>
<title>mmrf</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<meta charset="utf-8">
<title>Parc Amazonien de Guyane</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel='shortcut icon' href='/img/favicon.png'>

<!-- This site is optimized with the Yoast WordPress SEO plugin v1.3.4.4 - http://yoast.com/wordpress/seo/ -->
<link rel="canonical" href="http://www.parc-amazonien-guyane.fr/" />
<meta property='og:locale' content='fr_FR' />
<meta property='og:title' content='Parc Amazonien de Guyane' />
<meta property='og:url' content='http://www.parc-amazonien-guyane.fr/' />
<meta property='og:site_name' content='Parc Amazonien de Guyane' />
<meta property='og:type' content='article' />
<!-- / Yoast WordPress SEO plugin. -->


<script type="text/javascript">
		var _gaq = _gaq || [];
	 	_gaq.push(['_setAccount', 'UA-33459997-1']);
	 	_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 	})();
	</script>








<!-- Bootstrap -->
<link href="css/res.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="css/easy-fancybox.css">

<link rel="alternate" type="application/rss+xml"
	title="Parc Amazonien de Guyane Feed"
	href="http://www.parc-amazonien-guyane.fr/feed/">



<script
	src="http://www.parc-amazonien-guyane.fr/js/libs/jquery-1.8.2.min.js"></script>


</head>

<body class="homepage">
	<!--  <div class="alert alert-block ">
		<button type="button" class="close closebutton" data-dismiss="alert">&times;</button>
		<h4>MMRF!</h4>
		Check it
	</div>-->





	<div>

		<img src="images/2.jpg" width="100%" height="100%"
			style="position: fixed; height: 100%">
		<?php include 'header.php';?>
		<div id="slidemenu" class="visible-desktop">

			<img src="images/slide_menu.png">



		</div>


	</div>

	<div class="container" id="welcomemmrf">

		dfgdgfdgfdgfdg

	</div>





	<?php include 'footer.php';?>



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


</body>
</html>

