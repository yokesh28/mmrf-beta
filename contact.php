<!DOCTYPE html>
<html>
<head>
<title>mmrf</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<meta charset="utf-8">
<title>Parc Amazonien de Guyane</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel='shortcut icon' href='/img/favicon.png'>











<!-- Bootstrap -->
<link href="css/res.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="css/easy-fancybox.css">





<script
	src="http://www.parc-amazonien-guyane.fr/js/libs/jquery-1.8.2.min.js"></script>
<script
	src="http://gayadesign.com/scripts/queryLoader2/js/lib/jquery.queryloader2.js"></script>


<script type="text/javascript">
$(document).ready(function () {
    $("body").queryLoader2();
});</script>


</head>

<body>





	<img src="images/2.jpg" width="100%" height="100%" class="backimage">


	<div>


		<?php include 'header.php';?>

	</div>
	<div id="contactus_page" class="container">

		<div class="map back">
			<h1 class="title-header">Contact Us</h1>

			<div class="">
				<div class="google-map">

					<iframe width="1100" height="300"
						src="http://regiohelden.de/google-maps/map_en.php?width=1100&amp;height=300&amp;hl=en&amp;q=New%20no.%2021%2C%20Old%20no.8%2C%201st%20Avenue%2C%20%20Indra%20Nagar%2C%20Adyar%2C%20Chennai%20-%20600020.+(MMRF%20Realty%20and%20Infrastructure%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed"
						frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> </iframe>


				</div>
			</div>
		</div>
		<div class="contact back">
			<div class=" adress">
				<h2>Contact Info</h2>
				<address>
					<h5>MMRF Realty and Infrastructure Pvt. Ltd.</h5>
					New no. 21, Old no.8, 1st Avenue, <br> Indra Nagar, Adyar,<br>
					Chennai - 600020.<br> <br> <br> Phone : + 91 44 43551600<br> + 91
					44 24400523 <br> <br> Mail : info@mmrf.in<br> Website : www.mmrf.in
				</address>
			</div>
			<div class=" enquiry">
				<h2>Contact Form</h2>
				<form name="contactus" id="contactus_form"
					onSubmit="return submitContact();">
					<ul>
						<li><label>Name<span>*</span>
						</label><input type="text" name="name" style="width: 180px;"></li>

						<li style="margin-top: -10px;">
							<ul class="add-sub">
								<li><label>Address<span>*</span>
								</label> <textArea name="address"
										style="width: 180px; height: 72px;"></textArea>
								</li>
								<li><label class="city">City</label><input type="text"
									name="city" style="width: 140px"> <br> <br> <label>Pincode</label><input
									type="text" name="pincode" style="width: 139px;"></li>

							</ul>
						</li>

						<li style="display: inline-block; margin-top: 16px;"><label>Email
								<span>*</span>
						</label><input type="email" name="email" style="width: 180px;"></li>
						<li style="margin-top: 0px"><label>Mobie No<span>*</span>
						</label><input type="text" name="mobile" style="width: 180px;"><label
							style="width: 83px;">Phone No </label><input type="text"
							name="pho_ex" style="width: 42px"> <input type="text"
							name="phone" style="width: 66px">
						</li>

						<li><label>Location<span>*</span>
						</label><input type="text" name="location" style="width: 180px;">
						</li>
						<li><label>BuildUp Area<span>*</span>
						</label>
							<div class="select" style="width: 200px;">
								<select style="width: 200px;" name="build_area"><option value="">--Select--</option>



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





							</div> <label style="width: 76px">Budget<span>*</span>
						</label>
							<div class="select" style="width: 153px">
								<select style="width: 154px" name="budget"><option value="">--Select--</option>


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
							</div></li>
						<li><label style="width: auto">Post Your Enquiry</label><br
							clear="all"> <textarea class="enquiry_text" name="enquiry"></textarea>
						</li>
						<li class="button"><input type="submit" name="submit"
							value="Sent Enquiry"><input type="button" name="reset"
							value="Reset"></li>
					</ul>
				</form>

			</div>
		</div>
	</div>


	<?php include 'footer.php';?>


	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>




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

