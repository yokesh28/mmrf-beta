<!DOCTYPE html >
<html lang="en">
<head>
<title>mmrf</title>
<meta name="description" content="Real Estate Site">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel='shortcut icon' href='img/favicon.png'>




<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<!-- Bootstrap -->
<link href="css/res.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="css/easy-fancybox.css">




<script src="js/jquery.queryloader2.js"></script>


<script src="js/jsscript.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="homepage">
	<!--  <div class="alert alert-block ">
		<button type="button" class="close closebutton" data-dismiss="alert">&times;</button>
		<h4>MMRF!</h4>
		Check it
	</div>-->




	<div class="row-fluid">
		<div>

			<img src="images/2.jpg" width="100%" height="100%"
				style="position: fixed;" class="back">


			<?php include 'header.php';?>


			<div id="slidemenu" class="visible-desktop">

				<img src="images/slide_menu.png">



			</div>


		</div>


		<div id="welcomemmrf" class=" span6">

			<h2>Welcome to MMRF</h2>
			<p>A real estate conglomerate created by the coming together of 4 of
				Coimbatore's most renowned construction giants.<br>
				MayflowerEnterprises, Mount Housing & Infrastructure, Ramani Realtors &
				Fairyland Foundations. MMRF is a seamless blend of several decades
				of profound expertise and valuable experience in the construction
				and real estate domain. MMRF aims to create world-class spaces that
				continually set new benchmarks and exceed expectations in every way.
				What will elevate the goodwill of MMRF is its strong value system,
				unparalleled quality standards and the keen attention to finer
				details that will ensure every project stands out and adds greater
				value to life in so many ways.</p>
		</div>





		<?php include 'footer.php';?>
	</div>


	<div class="scrolldown">

		<div id="scrollTeaser-down1" class="scrollTeaser-fleche"
			style="display: none;"></div>

		<div id="scrollTeaser-down2" class="scrollTeaser-fleche"
			style="display: none;"></div>
		<div id="scrollTeaser-down3" class="scrollTeaser-fleche"
			style="display: none;"></div>
	</div>

	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>

	<script type="text/javascript">
	var pos=$('#slidemenu').css('left');
	pos=pos.replace('px','');
	
	$(document).scroll(function(e){

	


		$(".menu").delay(100).animate(
		        {"width":"100%"},
		        { complete:function(){
		        	$('.menu li a').css('visibility','visible');
		        	$('.menu').css('height','auto');
		        	$('.scrolldown').css('display','none');
		        }}
		);
	
		  

		
		
		

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

	$('.scrolldown').click(function(){

		$(".menu").delay(100).animate(
		        {"width":"100%"},
		        { complete:function(){
		        	$('.menu li a').css('visibility','visible');
		        	$('.menu').css('height','auto');
		        	$('.scrolldown').css('display','none');
		        }}
		);
	});

	runPulseScrollTeaser();
	
	 function runPulseScrollTeaser() {
		  
		    var pulseSpeed = 500;
		    $('#scrollTeaser-down1').fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed);
		    $('#scrollTeaser-down2').delay(300).fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed);
		    $('#scrollTeaser-down3').delay(500).fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed,runPulseScrollTeaser);
		  }
	  
</script>





</body>
</html>

