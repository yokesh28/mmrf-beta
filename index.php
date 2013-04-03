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

<script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>


   <div class="alert alert-block">
  <button type="button" class="close closebutton" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</div>
   
   


	<div class="slide1">
	
		<img src="images/3.jpg" width="100%" height="100%">
		<?php include 'header.php';?>
		<div id="slidemenu" class="hidden-phone">

			<img src="images/slide_menu.png">
			
			
   
			
			
			
			
			
		</div>
		
	</div>

	<div class="slide2">

		<img src="images/4.jpg" width="100%" height="100%">
		
	</div>

	
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
	
</body>
</html>

