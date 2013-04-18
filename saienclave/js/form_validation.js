$(document)
		.ready(
				function() {
					// function for contact form dropdown
					/*
					 * function contact() { if
					 * ($("#contactForm").is(":hidden")){
					 * $("#contactForm").slideDown("slow");
					 * $("#backgroundPopup").css({"opacity": "0.7"});
					 * $("#backgroundPopup").fadeIn("slow"); } else{
					 * $("#contactForm").slideUp("slow");
					 * $("#backgroundPopup").fadeOut("slow"); } }
					 * 
					 * //run contact form when any contact link is clicked
					 * $(".contact").click(function(){contact()});
					 * 
					 * //animation for same page links #
					 * $('a[href*=#]').each(function() { if
					 * (location.pathname.replace(/^\//,'') ==
					 * this.pathname.replace(/^\//,'') && location.hostname ==
					 * this.hostname && this.hash.replace(/#/,'') ) { var
					 * $targetId = $(this.hash), $targetAnchor = $('[name=' +
					 * this.hash.slice(1) +']'); var $target = $targetId.length ?
					 * $targetId : $targetAnchor.length ? $targetAnchor : false;
					 * if ($(this.hash).length) { $(this).click(function(event) {
					 * var targetOffset = $(this.hash).offset().top; var target =
					 * this.hash; event.preventDefault(); $('html,
					 * body').animate({scrollTop: targetOffset}, 500); return
					 * false; }); } } });
					 * 
					 */

					// submission scripts
					$('.contactForm')
							.submit(
									function() {
										// statements to validate the form
										var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
										var filter2 = /^([0-9])+$/;

										var email = document
												.getElementById('e-mail');
										var phone = document
												.getElementById('phone');

										if (!filter.test(email.value)) {
											$('.email-missing').fadeIn(400);
										} else {
											$('.email-missing').hide();
										}

										if (document.cform.name.value == ""
												|| document.cform.name.value == "Name") {
											$('.name-missing').fadeIn(400);
										} else {
											$('.name-missing').hide();
										}

										if (!filter2.test(phone.value)) {
												
												$('.phone-missing').fadeIn(400);
											

										} else {
											$('.phone-missing').hide();
										}
										
										if (phone.value.length < 9) {
											
											$('.phone-missing').fadeIn(400);
										}else {
											$('.phone-missing').hide();
										}

										if (document.cform.message.value == ""
												|| document.cform.message.value == "Message") {
											$('.message-missing').fadeIn(400);
										} else {
											$('.message-missing').hide();
										}

										if ((document.cform.name.value == "" || document.cform.name.value == "name")
												|| (!filter.test(email.value))
												|| (!filter2.test(phone.value))
												|| (document.cform.message.value == "" || document.cform.message.value == "message")) {
											return false;
										}

										if ((document.cform.name.value != "")
												&& (filter.test(email.value))
												&& (filter2.test(phone.value))
												&& (document.cform.message.value != "")) {
											// hide the form
											$('.contactForm').hide();

											// show the loading bar
											$('.loader1').append($('#bar1'));
											$('#bar1').css({
												display : 'block'
											});

											// send the ajax request
											$.post('mail.php', {
												name : $('#name').val(),
												email : $('#e-mail').val(),
												phone : $('#phone').val(),
												message : $('#message').val()
											},

											// return the data
											function(data) {
												// hide the graphic
												$('#bar1').css({
													display : 'none'
												});
												$('.loader1').append(data);
											});

											// waits 2000, then closes the form
											// and fades out
											// setTimeout('$("#backgroundPopup").fadeOut("slow");
											// $("#contactForm").slideUp("slow")',
											// 2000);

											// stay on the page
											return false;
										}
									});
					// only need force for IE6
					$("#backgroundPopup").css({
						"height" : document.documentElement.clientHeight
					});

					// SECOND CONTACT FORM

					// submission scripts
					$('.contactForm2')
							.submit(
									function() {
										// statements to validate the form
										var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
										var filter2 = /^([0-9])+$/;

										var email2 = document
												.getElementById('e-mail2');
										var phone2 = document
												.getElementById('phone2');

										if (!filter.test(email2.value)) {
											$('.email-missing2').fadeIn(700);
										} else {
											$('.email-missing2').hide();
										}

										if (document.cform2.name2.value == ""
												|| document.cform2.name2.value == "Name") {
											$('.name-missing2').fadeIn(700);
										} else {
											$('.name-missing2').hide();
										}

										if (!filter2.test(phone2.value)) {
											$('.phone-missing2').fadeIn(700);
										} else {
											$('.phone-missing2').hide();
										}

										if ((document.cform2.name2.value == "" || document.cform2.name2.value == "name")
												|| (!filter.test(email2.value))
												|| (!filter2.test(phone2.value))) {
											return false;
										}

										if ((document.cform2.name2.value != "")
												&& (filter.test(email2.value))
												&& (filter2.test(phone2.value))) {
											// hide the form
											$('.contactForm2').hide();

											// show the loading bar
											$('.loader2').append($('#bar2'));
											$('#bar2').css({
												display : 'block'
											});

											// send the ajax request
											$.post('mail2.php', {
												name : $('#name2').val(),
												email : $('#e-mail2').val(),
												phone : $('#phone2').val(),
											},

											// return the data
											function(data) {
												// hide the graphic
												$('#bar2').css({
													display : 'none'
												});
												$('.loader2').append(data);
											});

											// waits 2000, then closes the form
											// and fades out
											// setTimeout('$("#backgroundPopup").fadeOut("slow");
											// $("#contactForm").slideUp("slow")',
											// 2000);

											// stay on the page
											return false;
										}
									});
					// only need force for IE6
					$("#backgroundPopup").css({
						"height" : document.documentElement.clientHeight
					});
				});