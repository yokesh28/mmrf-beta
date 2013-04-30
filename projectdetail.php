
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd" >
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="fav/mmrf.ico">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta name="keywords" content="" />


<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/pfold.css" />
<link rel="stylesheet" type="text/css" href="css/custom2.css" />
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>


<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"> 

<link href="css/style1.css" rel="stylesheet">
<link href="css/project.css" rel="stylesheet">
<link href="css/res.css" rel="stylesheet">
<script src="js/jquery.queryloader2.js"></script>

<script src="js/jsscript.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.4"></script>
<link rel="stylesheet" type="text/css"
	href="source/jquery.fancybox.css?v=2.1.4" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css"
	href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript"
	src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css"
	href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript"
	src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript"
	src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<div class="slide1 row-fluid">

		<img src="images/2.jpg" width="100%" height="100%"
			class="backimage back">
		<?php include 'header.php';?>

<div class="hidden-desktop tab-menu">
			<span class="active on">On Going</span> <span class="up">Up Coming</span>
		</div>
		<div class="projectdetail">
		<div class="row visible-desktop">
			<div class="ong">
				<p>Ongoing</p>
			</div>
			<div class="upc">
				<p>Upcoming</p>
			</div>

		</div>


		<div class="center">
			<div class="visible-desktop building">
				<img src="images/images/build.gif" class="img-polaroid">
			</div>

			<div class="textright1 enclave pull-left" style="cursor: pointer;">
				<img src="images/sai1.jpg" class="img-polaroid">

			</div>




			<div class="textleft1 padur pull-left" style="cursor: pointer;">
				<img src="images/pud1.jpg" class="img-polaroid">

			</div>
			<div class="visible-desktop">
				<img src="img/pad.jpg" class="img-polaroid">
			</div>

		</div>


		<div class="center1">
			<div class="building pull-left visible-desktop">
				<img src="img/padur.jpg" class="img-polaroid">
			</div>

			<div class="textright1 ottiyam pull-left " style="cursor: pointer;">
				<img src="images/otti.jpg" class="img-polaroid">

			</div>

		</div>





</div>
		

							






	<?php include 'footer.php';?>





	
			
<script>
			$('.tab-menu span').click(function(){
				var current=this;
				$('.tab-menu').find('span').each(function(){
					$(this).removeClass('active');
				});
				$(current).addClass('active');
			});


			$('.up').click(function(){
			
				$('.center').fadeOut();
				 $('.center1').fadeIn();
			
			});
			$('.on').click(function(){
				
				 $('.center').fadeIn();
				 $('.center1').fadeOut();
			});
			$(window).resize(function() {
			
				console.log($(window).width());
			});
		</script>






	

	<script>
	$('.ong').click(function() {
		 $('.center').fadeIn();
		 $('.center1').fadeOut();
	});
	
			
			$('.upc').click(function() {
			 $('.center1').fadeIn();
			 $('.center').fadeOut();
			 
		      
		});
			$(".enclave").click(function() {

				  window.open("saienclave", "_blank");
				  return false;
			});
			$(".padur").click(function() {


				  window.open("vistaoceana", "_blank");
				  return false;
			});

			
			
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
		

			$('.fancybox').fancybox();
		});
		</script>

	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>

</body>
</html>
