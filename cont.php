
<!DOCTYPE html >
<html lang="en">
<head>
<title>mmrf</title>
<link rel="shortcut icon" type="image/x-icon" href="fav/mmrf.ico">
<meta name="description" content="Real Estate Site">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel='shortcut icon' href='img/favicon.png'>




<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<link href="css/res.css" rel="stylesheet">
<link href="css/contact.css" rel="stylesheet">
<link rel="stylesheet" href="css/easy-fancybox.css">
<link href="css/res.css" rel="stylesheet">



<!-- <script src="js/jquery.queryloader2.js"></script> -->


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


		<img src="images/2.jpg" width="100%" height="100%"
			style="position: fixed;" class="back">


		<?php include 'header.php';?>



	</div>

	<div class="container1">
		<div class="contact row">

			<h2>Contact Us</h2>

			<div class="google-map">




				<iframe width="425" height="350" frameborder="0" scrolling="no"
					marginheight="0" marginwidth="0"
					src=" http://regiohelden.de/google-maps/map_en.php?width=1100&amp;height=300&amp;hl=en&amp;q=New%20no.%2021%2C%20Old%20no.8%2C%201st%20Avenue%2C%20%20Indra%20Nagar%2C%20Adyar%2C%20Chennai%20-%20600020.+(MMRF%20Realty%20and%20Infrastructure%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed"></iframe>
				<br /> <small><a
					href="http://regiohelden.de/google-maps/map_en.php?width=1100&amp;height=300&amp;hl=en&amp;q=New%20no.%2021%2C%20Old%20no.8%2C%201st%20Avenue%2C%20%20Indra%20Nagar%2C%20Adyar%2C%20Chennai%20-%20600020.+(MMRF%20Realty%20and%20Infrastructure%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed"
					style="color: #0000FF; text-align: left">View Larger Map</a> </small>





			</div>
		</div>


		<div class="form row">
			<div class="span4 address">

				<h2>Contact Info</h2>
				<address>
					<h5>MMRF Realty and Infrastructure Pvt. Ltd.</h5>
					New no. 21, Old no.8, 1st Avenue, <br> Indra Nagar, Adyar,<br>
					Chennai - 600020,<br> India.<br> <br> Phone : +91 98400 09118, 20 <br>
					<br> Mail : info@mmrf.in<br> Website : www.mmrf.in
				</address>

			</div>
			<div class="span7 enquiry">

				<h2>Contact Form</h2>
				<form name="contactus" id="contactus_form"
					onSubmit="return validateForm();">
					<ul>
						<li class="span6"><label>Name<span>*</span>
						</label><input type="text" name="name" style="width: 140px;"></li>

						<li class="span6">
							<ul class="add-sub">
								<li><label>Address<span>*</span>
								</label> <textArea name="address"
										style="width: 180px; height: 72px;"></textArea>
								</li>
							</ul>

						</li>




						<li class="span6"><label>City</label><input type="text"
							name="city" style="width: 140px"></li>
						<li class="span6"><label>Pincode</label><input type="text"
							name="pincode" style="width: 140px"></li>




						<li class="span6"><label>Email <span>*</span>
						</label> <input type="email" name="email" style="width: 140px;">
						</li>

						<li class="span6"><label>Mobie No<span>*</span>
						</label><input type="text" name="mobile" style="width: 140px;">
						</li>

						<li class="span6"><label class="break">Phone No </label><input
							type="text" name="pho_ex" style="width: 42px"> <input type="text"
							name="phone" style="width: 66px">
						</li>

						<li class="span6"><label>Location<span>*</span>
						</label><input type="text" name="location" style="width: 140px;">
						</li>
						<li class="span6"><label>BuildUp Area<span>*</span>
						</label>

							<div class="select" style="width: 140px;">
								<select style="width: 140px;" name="build_area" id="bulid">
									<option value="">--Select--</option>



									<option value="Less than 1,000">Less than 1,000</option>
									<option value="1,000 to 1,200">1,000 to 1,200</option>
									<option value="1,201 to 1,500">1,201 to 1,500</option>
									<option value="1,501 to 2,000">1,501 to 2,000</option>
									<option value="2,001 to 2,500">2,001 to 2,500</option>
									<option value="2,501 to 3,500">2,501 to 3,500</option>
									<option value="3,501 to 4,500">3,501 to 4,500</option>
									<option value="4,501 to 6,000">4,501 to 6,000</option>
									<option value="6,001 to 10,000">6,001 to 10,000</option>
									<option value="Above 10,000">Above 10,000</option>


								</select>
							</div>
						</li>
						<li class="span6"><label>Budget<span>*</span>
						</label>


							<div class="select" style="width: 140px">
								<select style="width: 140px" name="budget" id="bud">
									<option value="">--Select--</option>


									<option value="Less than 60,00,000">Less than 60,00,000</option>
									<option value="60,00,000 to 1,00,00,000">60,00,000 to
										1,00,00,000</option>
									<option value="1,00,00,000 to 1,50,00,000">1,00,00,000 to
										1,50,00,000</option>
									<option value="1,50,00,000 to 2,00,00,000">1,50,00,000 to
										2,00,00,000</option>
									<option value="2,00,00,000 to 2,50,00,000">2,00,00,000 to
										2,50,00,000</option>
									<option value="Above 2,50,00,000">Above 2,50,00,000</option>






								</select>
							</div>
						</li>
						<li class="span6"><label style="width: auto">Post Your Enquiry</label>
							<textarea class="enquiry_text" name="enquiry"></textarea>
						</li>
						<li class="button"><input type="submit" name="submit"
							value="Send Enquiry"><input type="button" name="reset"
							value="Reset"> <span id="response" style="color: black"></span>
						</li>
					</ul>
				</form>

			</div>
		</div>

	</div>























	<div class="scrolldown">

		<div id="scrollTeaser-down1" class="scrollTeaser-fleche"></div>

		<div id="scrollTeaser-down2" class="scrollTeaser-fleche"></div>
		<div id="scrollTeaser-down3" class="scrollTeaser-fleche"></div>
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
		        	$('.scrolldown').css();
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
		        	$('.scrolldown').css();
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

	<!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) -->
	<div id="livezilla_tracking" style="display: none"></div>
	<script type="text/javascript">
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://www.mmrf.in/chat/server.php?acid=3952b&request=track&output=jcrpt&ovlp=MjI_&ovlc=I2ZmZmZmZg__&ovlct=I2M1MTgxNA__&ovlt=TGl2ZSBIZWxwIChTdGFydCBDaGF0KQ__&ovlto=TGl2ZSBIZWxwIChMZWF2ZSBNZXNzYWdlKQ__&ovls=MQ__&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script>
	<noscript>
		<img
			src="http://www.mmrf.in/chat/server.php?acid=3952b&amp;request=track&amp;output=nojcrpt&amp;ovlp=MjI_&amp;ovlc=I2ZmZmZmZg__&amp;ovlct=I2M1MTgxNA__&amp;ovlt=TGl2ZSBIZWxwIChTdGFydCBDaGF0KQ__&amp;ovlto=TGl2ZSBIZWxwIChMZWF2ZSBNZXNzYWdlKQ__&amp;ovls=MQ__"
			width="0" height="0" style="visibility: hidden;" alt="">
	</noscript>
	<!-- http://www.LiveZilla.net Tracking Code -->

</body>
</html>

