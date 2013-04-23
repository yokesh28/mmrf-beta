



<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="">
			<div class="container">

				<div class="row-fluid">
					<a class="span2 logo" href="index.php"><img src="images/logo.png"
						height="84px"> </a>
					<div class="nav-collapse collapse span10 ">


						<ul class="nav row-fluid menu" id="menu">

							<li class="span2" onclick="location.href='index.php'"><a
								href="index.php">Home</a> <img src="img/1.jpg"
								style="display: none" class="back">
							</li>
							<li class="span2" onclick="location.href='projdetail.php'"><a
								href="projdetail.php">Projects</a> <img src="img/proj.jpg"
								style="display: none" class="back">
							</li>
							<li class="span2" onclick="location.href='about.php'"><a
								href="about.php">About Us</a> <img src="img/3.jpg"
								style="display: none" class="back">
							</li>

							<li class="span2" onclick="location.href='gallery.php'"><a
								href="gallery.php">Gallery</a> <img src="img/gall.jpg"
								style="display: none" class="back">
							</li>
							<li class="span2" onclick="location.href='media.php'"><a
								href="media.php">Media Center</a> <img src="img/5.jpg"
								style="display: none" class="back">
							</li>
							<li class="span2" onclick="location.href='contact.php'"><a
								href="contact.php">Contact Us</a> <img src="img/6.jpg"
								style="display: none" class="back">
							</li>

						</ul>
						<div class="dropmenu"></div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<script>
	$(document).ready(function(){
		$('#menu').mobileMenu({switchWidth :979,prependTo:'.dropmenu',topOptionText :'-MAIN MENU'});





			
});

	

	$("#menu li").hover( function () {
		  $(this).find("a").css('display','none');
		  $(this).find("img").css('display','block');
		  $(this).animate({"height":"258px",opacity:1});
	  }, function () {
		  $(this).clearQueue();
		  $(this).animate({"height":"84px",opacity:1});
		  $(this).find("a").css('display','block');
		  $(this).find("img").css('display','none');
		  return true;
	  });



	
	
	
	</script>
</header>


