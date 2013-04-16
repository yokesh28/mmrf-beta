/***

@exampleJS:
jQuery('#jquery-center-example p:first-child').center();
jQuery('#jquery-center-example p:last-child').center(true);


TOTAL Center: vh_center
Vertical Center: v_center
Horizontal Center: h_center
***/

jQuery.fn.vh_center = function (absolute) {
	return this.each(function () {
		var t = jQuery(this);

		t.css({
			position:	absolute ? 'absolute' : 'fixed', 
			left:		'50%', 
			top:		'50%', 
		}).css({
			marginLeft:	'-' + (t.outerWidth() / 2) + 'px', 
			marginTop:	'-' + (t.outerHeight() / 2) + 'px'
		});

		if (absolute) {
			t.css({
				marginTop:	parseInt(t.css('marginTop'), 10) + jQuery(window).scrollTop(), 
				marginLeft:	parseInt(t.css('marginLeft'), 10) + jQuery(window).scrollLeft()
			});
		}
	});
};


jQuery.fn.h_center = function (absolute) {
	return this.each(function () {
		var t = jQuery(this);

		t.css({
			position:	absolute ? 'absolute' : 'fixed', 
			left:		'50%', 
		}).css({
			marginLeft:	'-' + (t.outerWidth() / 2) + 'px', 
		});

		if (absolute) {
			t.css({
				marginLeft:	parseInt(t.css('marginLeft'), 10) + jQuery(window).scrollLeft()
			});
		}
	});
};


jQuery.fn.v_center = function (absolute) {
	return this.each(function () {
		var t = jQuery(this);

		t.css({
			position:	absolute ? 'absolute' : 'fixed', 
			top:		'50%', 
		}).css({
			marginTop:	'-' + (t.outerHeight() / 2) + 'px'
		});

		if (absolute) {
			t.css({
				marginTop:	parseInt(t.css('marginTop'), 10) + jQuery(window).scrollTop(), 
			});
		}
	});
};


$(document).ready(function(e) {
    $("#popupContact_download").vh_center();
});