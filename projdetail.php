
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd" >
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="PFold: Paper-Like Unfolding Effect" />
<meta name="keywords"
	content="css3, experiment, 3d, unfolding, fold, paper, component, element, web design, jquery, plugin, perspective" />
<meta name="author" content="Codrops" />

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/pfold.css" />
<link rel="stylesheet" type="text/css" href="css/custom2.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>


<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/res.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


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

</head>
<body>
	<div class="slide1 row-fluid">

		<img src="images/2.jpg" width="100%" height="100%"
			style="position: fixed; height: 100%">
		<?php include 'header.php';?>

		<div class="im">
			<div class="hidden-desktop tab-menu">
				<span class="active on">On Going</span> <span class="up">Up Coming</span>
			</div>
			<div class="middle1 span12" style="right: -100%;" id="ongoing">

				<div class="position1 ">
					<div class="building pull-left visible-desktop ">
						<img src="img/sai.jpg" class="img-polaroid">
					</div>

					<div class="textright enclave pull-left" style="cursor: pointer;">
						<p>Sai Enclave</p>
					</div>


				</div>
				<div class="position2 ">
					<div class="textleft padur pull-left " style="cursor: pointer;">
						<p>Padur Residence</p>
					</div>
					<div class="building pull-left visible-desktop"
						style="margin: 0px; margin-left: 53px; margin-top: -30px;">
						<img src="img/pad.jpg" class="img-polaroid">
					</div>
				</div>
			</div>

			<div class="middle1 span12" id="upcoming" style="right: -100%;">

				<div class="position1 span12">
					<div class="building pull-left visible-desktop">
						<img src="img/padur.jpg" class="img-polaroid">
					</div>

					<div class="textright ottiyam pull-left " style="cursor: pointer;">
						<p>Ottiyambakkam, Chennai</p>
					</div>

				</div>
			</div>


			<div class="middle" style="right: -100%" id="enclave">
				<section class="main demo-2 row-fluid">

				<div id="grid" class="grid clearfix span12">


					<div class="uc-container box1 span4 overview">
						<div class="uc-initial-content">

							<span class="icon-eye">Overview</span>

						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant">
								<h2>Overview</h2>
								<p>Introducing Sai Enclave by MMRF, 44 spectacular abodes built 
amidst the sprawling locale of Arasankazhani near Sithalapakkam, 
off the OMR in Chennai. Sai Enclave features 1, 2 & 3 BHK homes 
featuring world-class construction standards, the choicest
amenities and are surrounded by India’s finest BPO and IT/ITES 
companies. The abodes at Sai Enclave are built to continually 
impart peace and happiness making them an ideal investment.</p>
								<br>
								
							</div>

						</div>
					</div>
					<!-- / uc-container -->






					<div class="uc-container box2 span4 location">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant">





								<iframe width="600" height="300"
									src="http://regiohelden.de/google-maps/map_en.php?width=600&amp;height=300&amp;hl=en&amp;q=New%20no.%2021%2C%20Old%20no.8%2C%201st%20Avenue%2C%20%20Indra%20Nagar%2C%20Adyar%2C%20Chennai%20-%20600020.+(MMRF%20Realty%20and%20Infrastructure%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed"
									frameborder="0" scrolling="no" marginheight="0" marginwidth="0">







								</iframe>







							</div>
						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container box3 span4 elevation">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant aimages">
								<ul>

									<li><a class="fancybox" href="img/land.jpg">
						<img src="img/landbig.jpg" width="155px"  class="img-polaroid"></a></li>

									<li><a class="fancybox" href="img/child.jpg">
						<img src="img/childbig.jpg" width="155px"  class="img-polaroid"></a></li>
									
									<li><a class="fancybox" href="img/fit.jpg">
						<img src="img/fitbig.jpg" width="155px"  class="img-polaroid"></a></li>
						
						<li><a class="fancybox" href="img/security.jpg">
						<img src="img/securitybig.jpg" width="155px"  class="img-polaroid"></a></li>
						
						<li><a class="fancybox" href="img/fire.jpg">
						<img src="img/firebig.jpg" width="155px"  class="img-polaroid"></a></li>
						
						<li><a class="fancybox" href="img/power.jpg">
						<img src="img/powerbig.jpg" width="155px"  class="img-polaroid"></a></li>
						

								</ul>


							</div>
						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container box4 span4 amenities">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant aimages">

							
							
							<ul>
									<li><a class="fancybox" href="img/land.jpg">
						<img src="img/landbig.jpg" width="155px"  class="img-polaroid"><span>Landscaped
											Garden</span></a></li>



									<li><a class="fancybox" href="img/child.jpg">
						<img src="img/childbig.jpg" width="155px"  class="img-polaroid"><span>Children's
											Indoor & Outdoor Play court</span></a></li>
									
									<li><a class="fancybox" href="img/fit.jpg">
						<img src="img/fitbig.jpg" width="155px"  class="img-polaroid"><span>Fitness
											Arena</span></a></li>
						
						<li><a class="fancybox" href="img/security.jpg">
						<img src="img/securitybig.jpg" width="155px"  class="img-polaroid"><span>24*7
											Security &Surveillance camera</span></a></li>
						
						<li><a class="fancybox" href="img/fire.jpg">
						<img src="img/firebig.jpg" width="155px"  class="img-polaroid"><span>Fire
											Protection System</span></a></li>
						
						<li><a class="fancybox" href="img/power.jpg">
						<img src="img/powerbig.jpg" width="155px"  class="img-polaroid"><span>Power
											Backup(For Common Area)and 500 Watts back up for each flat</span></a></li>

								</ul>
								

								<table class="table">


								</table>





							</div>
						</div>
					</div>


					<div class="uc-container box5 span4 specification">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant">
								<p>
									<b>Structure:</b>Isolated frame structure with Solid Block Wall
								</p>
								<br>
								<p>
									<b>Flooring :</b>2'X2'Branded Vitrified Tiles
								</p>
								<br>
								<p>


									<b>Doors:</b>MainDoor:Flush doors with Wooden Frame<br> <b>InternalDoor:</b>Flush
									doors with Wooden Frame<br> <b>ToiletDoor:</b>Water Proof Flush
									Door <b>Doors:</b>MainDoor:Flush doors with Wooden Frame<br> <br>
									<b>InternalDoor:</b>Flush doors with Wooden Frame<br> <br> <b>ToiletDoor:</b>Water
									Proof Flush Door <b>Doors:</b>MainDoor:Flush doors with Wooden
									Frame<br> <b>InternalDoor:</b>Flush doors with Wooden Frame<br>
									<b>ToiletDoor:</b>Water Proof Flush Door ======= <b>Doors:</b>MainDoor:Flush
									doors with Wooden Frame<br> <br> <b>InternalDoor:</b>Flush
									doors with Wooden Frame<br> <br> <b>ToiletDoor:</b>Water Proof
									Flush Door

								</p>
								<br>
								<p>
									<b>Windows:</b>Heavy UPVC frames with Glass Shutters &MS Grill
									for all windows
								</p>
								<br>
								<p>
									<b>Ventilators:</b>Heavy UPVC frames with glass or louvered & a
									provision for Exhaust Fan
								</p>
								<br>
								<p>
									<b>Electrical:</b>Three Phase service with Modular
									Switches,Electrical outlets for A/c in all Bedrooms,Geyzer
									Points in all Toilet,Washing Machine,Fridge,Mixie,Grinder and
									Oven Points,Necessary Light,Fan Plug Points will be
									Provided,along with 500W power for each Flat from Common
									Genset.Outlet for TV & Telephone in Living Hall and Master
									Bedroom
								</p>
								<br>
								<p>
									<b>Kitchen:</b>Counter top in high quality polished Black
									Granite with nozing.Stainless Steel Single Bowl with Drain
									Top.Water outlet provision for Water Purifer.Tiles up to 2 feet
									height above the kitchen Cooking platform
								</p>
								<br>

								<p>
									<b>Utility:</b>Water Outlet/inlet Provision for Washing Machine
								</p>
								</br>
								<p>
									<b>Toilet:</b>Standard EWC/Washbasin(Parryware/Hindware)White
									Closet with Health Faucet using Standard CP fittings,Wall Mixer
									in all Toilets.Dadoing with Glazed Braded Tiles upto 7 feet
									height Anti skid Ceramic tile Flooring will be provided.
								</p>
								<br>
								<p>
									<b>Intra-Communication System & Internet:</b>Intra-Communication
									systems for security to each Apartment with Internet
									Connections.
								</p>
								<br>
								<p>
									<b>Painting:</b>Painting with Acrylic emulsion,smoothly
									finished with wall putty &main door polished & other Doors
									polished with Arcrylic Enamel Paint with full putty.
								</p>
								<br>




							</div>
						</div>
					</div>







					<div class="uc-container box6 span4 floorplan">

						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant"></div>
							<div class="floorplan">

								<a href="images/floorplan.jpg" target="_blank"><img
									src="images/floorplan.jpg"> </a>
							</div>

						</div>


						<!-- / uc-container -->

					</div>
				</div>
				<div>
					<a href="media.pdf" class="bowcher" target="_blank"><img src="img/brochure1.png"></a>
				</div>
				<!-- / grid --> </section>

			</div>







			<!-- padur -->

			<div class="middle" style="right: -100%" id="padur">
				<section class="main demo-2 row-fluid">

				<div id="gridpadur" class="grid clearfix span12">


					<div class="uc-container box1 span4 overview">
						<div class="uc-initial-content">

							<span class="icon-eye">Overview</span>

						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant">
								<h2>Overview</h2>
								<p>When you live in an environment of peace and quietude.away
									from the clamor.the uproar and the grime and dust of city life.
									it sure can soothe your soul and transport you to a world your
									own-exclusive,private and spacious. But when you have it right
									with in city limits.its joy compounded. Padur has got it all
									and more. sheer elegance matched by functional aesthetics that
									not only makes you feel good but look good.</p>
								<br>

								<h5>SO WHEN YOU MOVE INTO PADUR,REMEMBER YOU ARE MOVING UP IN
									LIFE.<br> IT SAYS THAT YOU HAVE ARRIVED.</h5>

								<br>
							</div>

						</div>
					</div>
					<!-- / uc-container -->






					<div class="uc-container box2 span4 location">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant"></div>
						</div>
					</div>
					<!-- / uc-container -->
					
					

					<div class="uc-container box3 span4 elevation">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant aimages">
								<ul>
									<li><a class="fancybox" href="img/landbig.jpg"><img
											class="img-polaroid" src="img/land.jpg" style="width: 155px">
									</a>
									</li>

									<li><a class="fancybox" href="img/childbig.jpg"><img
											class="img-polaroid" src="img/child.jpg" style="width: 155px">
									</a>
									</li>
									<li><a class="fancybox" href="img/fitbig.jpg"><img
											class="img-polaroid" src="img/fit.jpg" style="width: 155px">
									</a>
									</li>
									<li><a class="fancybox" href="img/securitybig.jpg"><img
											class="img-polaroid" src="img/security.jpg"
											style="width: 155px"> </a>
									</li>
									<li><a class="fancybox" href="img/firebig.jpg"><img
											class="img-polaroid" src="img/fire.jpg" style="width: 155px">
									</a>
									</li>

									<li><a class="fancybox" href="img/powerbig.jpg"><img
											class="img-polaroid" src="img/power.jpg" style="width: 155px">
									</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					
					
					<div class="uc-container box4 span4 amenities">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>

							<div class="contant amen">

								<div class="heading">
									<h2>INDOOR AMENTIES:</h2>
								</div>
								<div class="paragraph">
									<p>Healthclub/Gymnasium.</p>

									<p>Table Tennis.</p>

									<p>Tv Room/Minitheatre/Multipurpose hall.</p>

									<p>Chess/Carom and other indoor Games .</p>
								</div>

								<div class="heading">
									<h2>OUTDOOR AMENTIES:</h2>
								</div>
								<div class="paragraph">
									<p>Swimming Pool.</p>

									<p>Land scapes.</p>

									<p>Servant Toilet.</p>

									<p>Out door party area .</p>


									<p>Children's Play Area .</p>


									<p>Payed garden walk .</p>
								</div>


								<div class="heading">
									<h2>OTHER AMENTIES:</h2>
								</div>
								<div class="paragraph">

									<p>Intercom facility.</p>

									<p>Backup generator for common areas.</p>

									<p>Security personnel.</p>

									<p>CCTV camera.</p>


									<p>Water Treatment plant(RO water for kitchen) .</p>


									<p>Rain water Harvesting .</p>

									<p>Sewage water Harvesting .</p>

									<p>UPS provision for Vilas.</p>

								</div>




							</div>
						</div>
					</div>


					
					<div class="uc-container box5 span4 specification">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant">

								<div class="heading1">
									<h2>STRUCTURE:</h2>
								</div>
								<div class="paragraph1">
									<p>RCC framed structure with 9" thick bricks for outer walls
										and 4.5" thick bricks for internal partition walls.</p>
								</div>
								<div class="heading1">


									<h2>WALL FINISHES:</h2>
								</div>
								<div class="paragraph1">
									<p>
										All external walls cement plastered and painted with exterior
										wall care point with a texture finish.<br> ceiling will be
										cement plastered.finished with puty one coat of emulsion.<br>internal
										walls finished with putty and emulsion paint.
									</p>
								</div>




								<div class="heading1">
									<h2>FLOORING:</h2>
								</div>
								<div class="paragraph1">
									<p>
										imported full body vitrified tiles 900*600 in living anddining<br>(Marble
										series VCitrified Tiles)Kitchen to have anti-skid virtified
										tiles 6oo*600.<br>Bedroom to have laminated wooden flooring.<br>internal
										steps in natural stone-Green marble/Granite with a basic cost
										of Rs 100 perSqft.<br>Sit outs and balconies-basant betton or
										equivalent blocks.
									</p>
								</div>

								<div class="heading1">
									<h2>KITCHEN:</h2>
								</div>
								<div class="paragraph1">
									<p>
										Polished black granite working platform not exceeding 15ft in
										length<br> Glazed tile dado for 24" height from granite
										platform.Single bowl stainless steel sink with drain board in
										kitchen and a single bowl stainless steel sink without drain
										in utlity.
									</p>
								</div>





								<div class="heading1">
									<h2>TOILETS:</h2>
								</div>
								<div class="paragraph1">
									<p>
										Glazed tile dado up to ceiling height-size300*600.<br>Roca or
										Kholer make Good quality Cp fittings.Grohe/Kholer or
										equivalent pressurized water.
									</p>
								</div>

								<div class="heading1">
									<h2>ELECTRICAL:</h2>
								</div>

								<div class="paragraph1">
									<p>ConcelaedInsulated copper multi-strand wiring with modular
										type switches-Anchor/MK Distribution board with MCB's in each
										apartment.4lights,2fans and 2plug points (5amps)in the
										living/dining area. 2lights,1fan and 1plug point(5amps) in
										each bedroom. 2lights 1fan point.and 3plug points(2nos 5Amps +
										1 No 5/15 amp)in the kitchen.2lights pints.1fan point and
										1NO.15Amps power points for in all bathrooms.Power
										Backup-Generator for common area lighting and pumps.UPS
										provision for all individual villas.</p>
								</div>

								<div class="heading1">
									<h2>SECURITY SYSTEMS(options):</h2>
								</div>

								<div class="paragraph1">
									<p>1.CC TV at the entrance gate. 2.LAN telephone lines
										connecting all houses which can be used as an intercorn with
										the securityt at the gate. 3.video calling doorbell.</p>
								</div>







							</div>
						</div>
					</div>



					<!-- / uc-container -->




					<div class="uc-container box6 span4 floorplan">

						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<span class="icon-cancel"></span>
							<div class="contant"></div>
							<div class="floorplan">

								<a href="images/floorplan.jpg" target="_blank"><img
									src="img/floor.jpg"> </a>
							</div>

						</div>



						<!-- / uc-container -->

					</div>

				
				<div>
					<a href="Vista Oceana Brochure.pdf" class="bowcher" target="_blank"><img src="img/brochure1.png"></a>
				</div>
</div>
				</section>

			</div>
			<div class="middle" style="right: -100%" id="ottiyam">
				<section class="main demo-2 row-fluid">

				<div id="gridottiyam" class="grid clearfix span12">


					<div class="uc-container box1 span4 overview">
						<div class="uc-initial-content">

							<span class="icon-eye">Overview</span>

						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant">

								<h2>Overview</h2>
								<p>The next project of MMRF is to launch 448 apartments in
									Ottiyambakkam, OMR containing 1/2/3 BHK ranging from Sq ft 575
									to 1350. The total area of development is 6.8 acres and the
									total construction area is 5,40,000 sq feet This project is
									conceptually designed to depict the Mediterranean architecture
									which will be one of its kinds in Chennai.</p>
								<br>

								<h5>Further, MMRF is considering a township in the same
									locality.</h5>

								<br>
							</div>

						</div>
					</div>
					<!-- / uc-container -->






					<div class="uc-container box2 span4 location">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>
							<div class="contant"></div>
						</div>
					</div>
					<!-- / uc-container -->

					<div class="uc-container box3 span4 amenities">
						<div class="uc-initial-content">

							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content ">
							<span class="icon-cancel"></span>

							<div class="contant amen">

								<h2>INDOOR AMENTIES:</h2>
								<br>

								<p>Healthclub/Gymnasium.</p>
								<br>
								<p>Table Tennis.</p>
								<br>
								<p>Tv Room/Minitheatre/Multipurpose hall.</p>
								<br>
								<p>Chess/Carom and other indoor Games .</p>
								<br>

								<h2>OUTDOOR AMENTIES:</h2>
								<br>

								<p>Swimming Pool.</p>
								<br>
								<p>Land scapes.</p>
								<br>
								<p>Servant Toilet.</p>
								<br>
								<p>Out door party area .</p>
								<br>

								<p>Children's Play Area .</p>
								<br>

								<p>Payed garden walk .</p>
								<br>

								<h2>OTHER AMENTIES:</h2>
								<br>

								<p>Intercom facility.</p>
								<br>
								<p>Backup generator for common areas.</p>
								<br>
								<p>Security personnel.</p>
								<br>
								<p>CCTV camera.</p>
								<br>

								<p>Water Treatment plant(RO water for kitchen) .</p>
								<br>

								<p>Rain water Harvesting .</p>
								<br>
								<p>Sewage water Harvesting .</p>
								<br>
								<p>UPS provision for Vilas.</p>
								<br>





							</div>
						</div>
					</div>
					<!-- / uc-container -->
				</div>
				<div>
					<a href="#" class="bowcher" target="_blank"><img src="img/brochure1.png"></a>
				</div>
				</section>

			</div>
		</div>
	</div>


	<div class="position visible-desktop">
		<img src="images/l-slide.png">

		<div class="ongoing">
			<p>Ongoing</p>
		</div>
		<div class="upcoming">
			<p>Upcoming</p>
		</div>
	</div>




	<?php include 'footer.php';?>





	<script type="text/javascript" src="js/jquery.pfold.js"></script>
	<script type="text/javascript">
			$(function() {
				

               
				$('#ongoing').animate({"right":"12%",opacity:1},500);

				  $(".ongoing").click(function() {
					  $('.middle1').animate({"right":"-100%",opacity:0},500);
					  $('#enclave').animate({"right":"-100%",opacity:0},500);
					  $('#padur').animate({"right":"-100%",opacity:0},500);
					  $('#upcoming').animate({"right":"-100%",opacity:0},500);
					  $('#ottiyam').animate({"right":"-100%",opacity:0},500);
					  $('#ongoing').animate({"right":"12%",opacity:1},500);
					});
				  $(".upcoming").click(function() {
					  $('.middle1').animate({"right":"-100%",opacity:0},500);
					  $('#enclave').animate({"right":"-100%",opacity:0},500);
					  $('#ongoing').animate({"right":"-100%",opacity:0},500);
					  $('#padur').animate({"right":"-100%",opacity:0},500);
					  $('#ottiyam').animate({"right":"-100%",opacity:0},500);
					  $('#upcoming').animate({"right":"12%",opacity:1},500);
					});
					

				  $(".enclave").click(function() {
					 $('.middle1').animate({"right":"-100%",opacity:0},500);
					  $('#upcoming').animate({"right":"-100%",opacity:0},500);
					  $('#ongoing').animate({"right":"-100%",opacity:0},500);
					  $('#padur').animate({"right":"-100%",opacity:0},500);
					  $('#ottiyam').animate({"right":"-100%",opacity:0},500);
					  $('#enclave').animate({"right":"12%",opacity:1},500);
					});
				  $(".padur").click(function() {
					  $('.middle1').animate({"right":"-100%",opacity:0},500);
					  $('#enclave').animate({"right":"-100%",opacity:0},500);
					  $('#upcoming').animate({"right":"-100%",opacity:0},500);
					  $('#ongoing').animate({"right":"-100%",opacity:0},500);
					  $('#ottiyam').animate({"right":"-100%",opacity:0},500);
					  $('#padur').animate({"right":"12%",opacity:1},500);
					});
				   
				  $(".ottiyam").click(function() {
					  $('.middle1').animate({"right":"-100%",opacity:0},500);
					  $('#enclave').animate({"right":"-100%",opacity:0},500);
					  $('#upcoming').animate({"right":"-100%",opacity:0},500);
					  $('#ongoing').animate({"right":"-100%",opacity:0},500);
					  $('#padur').animate({"right":"-100%",opacity:0},500);
					  $('#ottiyam').animate({"right":"12%",opacity:1},500);
					});
				


				

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['left','bottom']; break;
						case 3 : direction = ['right','top']; break;
						case 4 : direction = ['left' ,'top'];break;
						case 5 : direction = ['left' ,'top'];break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						i:i,
						
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


				

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#gridpadur > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['left','bottom']; break;
						case 3 : direction = ['right','top']; break;
						case 4 : direction = ['left' ,'top'];break;
						case 5 : direction = ['left' ,'top'];break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						i:i,
						
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



				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#gridottiyam > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['left','bottom']; break;
				
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						i:i,
						
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


			

			$('.tab-menu span').click(function(){
				var current=this;
				$('.tab-menu').find('span').each(function(){
					$(this).removeClass('active');
				});
				$(current).addClass('active');
			});


			$('.up').click(function(){
				 $('#ongoing').animate({"z-index": "114",opacity:0},500);
				 $('#upcoming').animate({"z-index": "115",opacity:1},500);
				 
			
			});
			$('.on').click(function(){
				 $('#upcoming').animate({"z-index": "114",opacity:0},500);
				 $('#ongoing').animate({"z-index": "115",opacity:1},500);
			});
		</script>






<style type="text/css">
.fancybox-custom .fancybox-skin {
	box-shadow: 0 0 50px #222;
}
</style>

	<script type="text/javascript">
		$(document).ready(function() {
		

			$('.fancybox').fancybox();
		});
		</script>

	<script src="js/bootstrap.min.js"></script>


	<script src="js/jquery.mobilemenu.js"></script>

</body>
</html>
