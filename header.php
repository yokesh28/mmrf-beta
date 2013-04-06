



<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="">
			<div class="container">

				<div class="row-fluid">
					<a class="span2 logo" href="#"><img src="images/logo.png"
						height="84px"> </a>
					<div class="nav-collapse collapse span10 ">


						<ul class="nav row-fluid menu" id="menu">

							<li class="span2" onclick="location.href='index.php'"><a href="index.php">Home</a> 
							<img
								src="img/home.jpg"  style="display: none" width=150px>
							</li>
							<li class="span2" onclick="location.href='projdetail.php'"><a href="project.html">Projects</a>
							<img
								src="images/1-1.png"  style="display: none">
							</li>
							<li class="span2"><a href="about.php">About Us</a>
							<img
								src="images/2-2.png"  style="display: none">
							</li>
							<li class="span2"><a href="gallery.html">Gallery</a>
							<img
								src="images/3-3.png"  style="display: none">
							</li>
							<li class="span2"><a href="media.html">Media Center</a>
							<img
								src="images/4-4.png"  style="display: none">
							</li>
							<li class="span2"><a href="contact.html">Contact Us</a>
							<img
								src="images/5-5.png"  style="display: none">
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


