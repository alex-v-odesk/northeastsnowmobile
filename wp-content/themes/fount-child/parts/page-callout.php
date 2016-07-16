
<?php 

$season_select 		  = get_field('what_season_is_it', 'options');
$summer_callout_image = get_field('summer_callout_card_image', 'options');
$winter_callout_image = get_field('summer_callout_card_image', 'options'); ?>

<div style="background: url('<?php if ( $season_select == 'summer') { echo $summer_callout_image; } else { echo $winter_callout_image; } ?>') bottom center no-repeat; background-size: cover; width: 100%;">

	<div class="bottom-callout-card wpb_row vc_row-fluid prk_full_width prk_section fount_centered_text fount_row">
	    <div class="small-12">
	        <div class="extra_pad prk_inner_block columns small-centered clearfix">
	            <div class="row">
	                <div class="vc_span6 wpb_column column_container">
	                    <div class="wpb_wrapper">
	                        <div class="clearfix" style="height:25px;"></div>
	                        <div class="wpb_text_column wpb_content_element ">
	                            <div class="wpb_wrapper">
	                                <p><strong>North East Snowmobile &amp; ATV Rentals</strong></p>
	                                <p>Self-Guided
	                                    <br> Daily – 9AM to 5PM,
	                                    <br> Half Day – 9AM to 1PM; 1PM to 5PM
	                                    <br> Doors open at 8:30AM, for registration</p>
	                                <p><strong>Requirements</strong></p>
	                                <p>We ask that our guests please arrive half an hour early for orientation and registration. Renter must have valid driver’s license and a credit card or take optional insurance. Legal guardian must accompany Drivers under 18.
	                                    <br> All Snowmobiles include reverse and hand warmers.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="vc_span6 wpb_column column_container">
	                    <div class="wpb_wrapper">
	                        <div class="wpb_text_column wpb_content_element ">
	                            <div class="wpb_wrapper">
	                                <h3 style="text-align: center;">Still Have Questions?</h3>
	                                <p style="text-align: center;">We’re happy to help.</p>
	                            </div>
	                        </div>
	                        <div class="clearfix" style="height:10px;"></div>
	                        <div class="theme_button large">
	                            <a href="/contact-us/" target="_self" class="fade_anchor with_icon">
	                                <div class="text_shifter">Contact Us</div>
	                                <div class="icon_cell"><i class="fount_fa-question-circle"></i></div>
	                            </a>
	                        </div>
	                        <div class="wpb_text_column wpb_content_element ">
	                            <div class="wpb_wrapper">
	                                <h3 style="text-align: center;">Ready to Reserve?</h3>
	                                <p style="text-align: center;">Reserve your adventure online today!</p>
	                            </div>
	                        </div>
	                        <div class="clearfix" style="height:10px;"></div>
	                        <div class="theme_button btn-large">
	                            <a href="/reservations/" target="_self" class="fade_anchor with_icon" style="border-color: rgb(0, 180, 0); color: rgb(0, 180, 0); background-color: transparent;">
	                                <div class="text_shifter">Reserve Now</div>
	                                <div class="icon_cell"><i class="fount_fa-ticket"></i></div>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>