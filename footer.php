
<footer class="footer span12 visible-desktop" style="bottom: -240px;">


	<nav class="footnav ">


		<div class="row header">
			<div class=" span6 offset1 ">Reach Us</div>
			<div class="span6 offset1">Loan Tools</div>




		</div>

	</nav>

	<div class="row-fluid marketing">
		<div class="footer-content ">
			<div id="fcontentbloc" class="fcontent span7">


				<h4>Contact Info</h4>
				<address>
					<h5>MMRF Realty and Infrastructure Pvt. Ltd.</h5>
					<div class="span3">
						New no. 21, Old no.8, 1st Avenue, <br> Indra Nagar, Adyar,<br>
						Chennai - 600020.
					</div>
					<div class="span4 ph">
						<ul>
							<li><label>Phone :</label> + 91 44 43551600<br> + 91 44 24400523</li>

							<li><label>Mail :</label> info@mmrf.in</li>
							<li><label>Website:</label>  www.mmrf.in</li>
						</ul>

					</div>
				</address>




			</div>

			<div id="fcontentbloc1" class="fcontent span5">
				<p>
					<a href="#myModal" data-toggle="modal"><h4>
							<img src="images/cal.png">&nbsp; Loan Eligiblity Calculator
						</h4> </a>
				</p>
				<p>
					<a href="#emi" data-toggle="modal"><h4>
							<img src="images/cal.png">&nbsp; EMI Calculator
						</h4> </a>
				</p>

			</div>


			<!-- LOAN ELIGIBLITY -->


			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">X</button>
					<h3 id="myModalLabel">Loan Eligiblity Calculator</h3>
				</div>
				<form class="form-horizontal ">


					<div class="control-group ">
						<label class="control-label" for="inputtext">Gross Monthly
							Income(Rs)</label>
						<div class="controls">
							<input type="text" class="con_label">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="Text input">Rate of Interest (%)</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Terms Of the Loan(in
							years)</label>
						<div class="controls">
							<input type="text" class="con3_label">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Other Loan
							Commitments :</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Loan Eligible for
							(Rs)</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-primary">Calculate</button>
						<button type="button" class="btn" data-complete-text="finished!">Clear</button>

					</div>
				</form>
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
						<label class="control-label" for="inputtext">Interest Rate :</label>
						<div class="controls">
							<input type="text" class="con_label">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="Text input">Amount of loan
							required :</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Tenure (in years) :)</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Reducing balance
							based on :</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="Text input">Result EMI for month
							:</label>
						<div class="controls">
							<input type="text">
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-primary">Calculate</button>

						<button type="button" class="btn" data-complete-text="finished!">Clear</button>

					</div>
				</form>
			</div>













		</div>
	</div>



</footer>

<script>
  $('.btn').button('complete')
</script>


<script type="text/javascript">

			$(function() {
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
			</script>
