<!DOCTYPE html>
<html>
<head>
<title>mmrf</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php';?>

	<div class="slide1">
		<img src="images/1.jpg" width="100%" height="100%">
		<div id="slidemenu">

			<img src="images/slide_menu.png">
		</div>
	</div>
	<div class="slide2">
	
	<img src="images/2.jpg" width="100%" height="100%">
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.mobilemenu.min.js"></script>
	<script>
	$(document).ready(function(){
		$('.menu').mobileMenu();
});
	</script>
	<script type="text/javascript">

	$(document).scroll(function(e){

		var per=($(window).scrollTop()/1100)*100;
		var sc=((per/100)*338);
		var pos=$('#slidemenu').css('left');
		pos=pos.replace('px','');
		
		pos=(parseInt(pos)+parseInt(sc));
		console.log(pos);
		$('#slidemenu').css('left',pos);
	    console.log($(window).scrollTop());
	});
</script>

</body>
</html>
