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

	

	<script src="http://code.jquery.com/jquery.js"></script>
	
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.mobilemenu.min.js"></script>
	<script>
	$(document).ready(function(){
		$('.menu').mobileMenu({combine:[true], nested:[true],prependTo:['header'],groupPageText:['Main'],switchWidth:[700px]});
});
	</script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
