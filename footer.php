
<footer class="footer span12 visible-desktop" style="bottom: -240px;">


	<nav class="footnav ">


		<div class="row header">
			<div class="span4">Reach Us</div>
			<div class="span4">Projects</div>
			<div class="span4">Loan Tools</div>




		</div>

	</nav>

	<div class="row-fluid marketing">
		<div class="footer-content ">
			<div id="fcontentbloc" class="fcontent span6">


				<h4>Contact Info</h4>
				<address>
					<div class="fcontentborder">
						<h5>MMRF Realty and Infrastructure Pvt. Ltd.</h5>
						<div class="span3 addborder">
							New no. 21, Old no.8, 1st Avenue,<br>Indra Nagar, Adyar,<br>
							Chennai - 600020,<br>India.
						</div>
						<div class="span3 ph">
							<ul>
								<li><label>Phone :</label> + 91 44 43551600<br> + 91 44 24400523</li>

								<li><label>Mail :</label><label> info@mmrf.in</label></li>

							</ul>

						</div>
					</div>
				</address>




			</div>

			<div id="fcontentbloc3" class="fcontent span4">
				<div class="fcontentborder1">
					<div class="mprojects">
						<a href="saienclave/" data-toggle="modal" target="_blank"><h5>
								<img src="images/sailogo.png">&nbsp; MMRF- SAIENCLAVE
							</h5> </a> <a href="vistaoceana/" data-toggle="modal"
							target="_blank"><h5>
								<img src="images/vistalogo.png">&nbsp; MMRF- VISTAOCEANA
							</h5> </a>
					</div>
				</div>
			</div>
			<div id="fcontentbloc1" class="fcontent span2">

				<div class="emical">
					<a href="#emi" data-toggle="modal"><h5>
							<img src="images/cal.png">&nbsp; EMI Calculator
						</h5>
																					
						 </a>
				</div>
				<div class="">
				<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.facebook.com/mmrfindia"
         scrolling="no" frameborder="0"
        style="border:none; width:450px; height:62px; margin: 4px 0px 0px 100px; "></iframe>
        
				</div>
				<div class="twitter">
				<a href=" https://twitter.com/mmrfindia" target="_blank">
							<img src="images/twitter.png" style="background: none;">
						
																					
						 </a>
				</div>
				
				<div class="emiloan">
					<h5>Designed by:</h5>
					<a href="http://s-creative.me" target="_blank" class="desined">
						<div class="screative">S-Creative</div>
					</a>

				</div>
			</div>







			<!--  EMI CALCULATOR   -->

			<div id="emi" class="modal hide fade" tabindex="-1" role="dialog"
				aria-labelledby="emiLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">X</button>
					<h3 id="myModalLabel">EMI Calculator</h3>
				</div>
				<form class="form-horizontal">


					<div class="control-group">
						<label class="control-label" for="inputtext">Loan Amount:</label>
						<div class="controls">
							<input type="text" class="con_label" id="loan_amount">
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="Text input">Tenure (in years) :)</label>
						<div class="controls">
							<input type="text" id="tenure">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Rate of interest(%):</label>
						<div class="controls">
							<input type="text" id="rateofinterest">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Result EMI for month
							:</label>
						<div class="controls">
							<input type="text" id="result" class="uneditable-input">
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-primary" onclick="return emical();">Calculate</button>

						<button type="button" class="btn" data-complete-text="finished!">Clear</button>

					</div>
				</form>
			</div>













		</div>
	</div>

	<span class="copyright">Copyright &#64; 2013. MMRF. All Rights
		Reserved</span>

</footer>




<script type="text/javascript">

			$(function() {
				 $('.btn').button('complete');

				 
				 var bottom = 0;
             $(".footnav ").click(function(){
                
                 if(bottom == 0){
                 
               $('.footer').stop(true).animate({"bottom":"0",opacity:1},{queue: false, duration: 500});
                 bottom = 1;
               }
                 else {
                $('.footer').stop(true).animate({"bottom":"-240",opacity:1},{queue: false, duration: 500});
                bottom = 0;
                }
                 return false;
             });
			});


			function emical()
			{
			

				var $amount=document.getElementById('loan_amount').value;
				var $years=document.getElementById('tenure').value;
				var $rate=document.getElementById('rateofinterest').value;
				if($amount=='')
				{
					alert("Enter the Amount")
					document.getElementById('loan_amount').focus();
					return false;
					
				}
				if($years=='')
				{
					alert("Enter the Years")
					document.getElementById('tenure').focus();
				
					return false;
				}
				if($rate=='')
				{
					alert("Enter the Rate of Interest")
					document.getElementById('rateofinterest').focus();
					return false;
					}
				var $year=$years*12;	
				var $rat=$rate/12/100;
				var $emi=0;
				var $i=0;
				var $cal = 1;
				for($i=0;$i<$year;$i++){
					$cal = $cal*(1+$rat); 
				}
				$emi = ($amount*$rat)*($cal/($cal-1));
				/*(L*I)*{(1+I)^N / [(1+I)^N]-1}*/
				
				var $total=document.getElementById('result');
				$total.value=Math.ceil($emi);
				
				
				return false;
			}
			</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39668573-2', 'mmrf.in');
  ga('send', 'pageview');

</script>
