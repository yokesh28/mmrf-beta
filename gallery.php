<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta charset="UTF-8" />

<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>




<link href="css/res.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="css/layout.css" />

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>


<script src="js/jquery.mobilemenu.js"></script>

<script
	src="http://gayadesign.com/scripts/queryLoader2/js/lib/jquery.queryloader2.js"></script>


<script type="text/javascript">
$(document).ready(function () {
    $("body").queryLoader2();
});</script>	

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
</head>

<body >
	<img src="images/2.jpg" width="100%" height="100%"
			class="backimage">
	<?php include 'header.php';?>
	<div class="container" style="position: relative;">
		<div class="row-fluid ">
			<div class="gallery">


				<div class=" span12">
					<ul>
						<li class="span3"><a class="fancybox" href="images/ga1.jpg">
						<img src="images/ga1.jpg" width="300" height="300" class="img-polaroid"></a></li>
						<li class="span3"><a class="fancybox" href="images/ga2.jpg">
						<img src="images/ga2.jpg" width="300" height="300" class="img-polaroid"></a></li>
						<li></li>

					</ul>
				</div>


			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
<script src="js/bootstrap-tab.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
		});
		</script>
</html>
