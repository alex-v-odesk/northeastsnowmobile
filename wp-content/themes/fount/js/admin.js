/* jshint ignore:start */
jQuery(document).ready(function() {
	/*
	Live Modal
	*/
	jQuery(document).ajaxComplete(function(event, xhr, settings) {
		if (jQuery('.seven_icon_selector').length) {
			jQuery('.wpb_edit_form_elements').addClass('prkadmin-theme-icon');
		}
	});
});
/* jshint ignore:end */
