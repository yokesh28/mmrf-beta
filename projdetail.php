
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="PFold: Paper-Like Unfolding Effect" />
<meta name="keywords"
	content="css3, experiment, 3d, unfolding, fold, paper, component, element, web design, jquery, plugin, perspective" />
<meta name="author" content="Codrops" />

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/pfold.css" />
<link rel="stylesheet" type="text/css" href="css/custom2.css" />

<link href="css/res.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
</head>
<body>
	<div class="slide1">


		<?php include 'header.php';?>

		<div class="im">

			<div class="middle">


				<!-- Codrops top bar -->




				<section class="main demo-2">

				<div id="grid" class="grid clearfix">


					<div class="uc-container">
						<div class="uc-initial-content">
							<p>Overview</p>
							<span class="icon-eye">Overview</span>

						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant">
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>

							<p>Overview</p>
							<p>Overview</p>
							</div>

						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/1.jpg" alt="image01" /> <span
								class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/1.jpg" alt="image01-large" />
							<div class="title">
								<h4>The Professor</h4>
								by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a>
							</div>
							<span class="icon-cancel"></span>
						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/2.jpg" alt="image02" /> <span
								class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/2.jpg" alt="image02-large" />
							<div class="title">
								<h4>Planet</h4>
								by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a>
							</div>
							<span class="icon-cancel"></span>
						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/4.jpg" alt="image04" /> <span
								class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/4.jpg" alt="image04-large" />
							<div class="title">
								<h4>Ero Senin</h4>
								by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a>
							</div>
							<span class="icon-cancel"></span>
						</div>
					</div>
					<!-- / uc-container -->

				</div>
				<!-- / grid --> </section>

			</div>


			<div class="position">
				<img src="images/l-slide.png">

				<div class="ongoing">
					<p>Ongoing</p>
				</div>
				<div class="upcoming">
					<p>Upcoming</p>
				</div>
			</div>


			<script type="text/javascript" src="js/jquery.pfold.js"></script>
			<script type="text/javascript">
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['right','top']; break;
						case 3 : direction = ['left','top']; break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						centered : true
					} );

					$item.find( 'span.icon-eye' ).on( 'click', function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( 'span.icon-cancel' ).on( 'click', function() {

						pfold.fold();

					} );

				} );
				
			});
		</script>
		

	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>

</body>
</html>
