<?php $season_selection = get_field('what_season_is_it', 'options'); ?>

<section class="hero hero-slide">
    <div class="row_pattern_overlay" style="background-image:url(http://northeast.local/wp-content/themes/fount/images/overlays/dots.png);"></div>
    <div class="video-hero-embed">
    <div class="wpb_wrapper">
			<div class="clearfix" style="height:250px;"></div><div class="prk_shortcode-title fount_centered_text wpb_animate_when_almost_visible wpb_appear h1_sized double_lined wpb_start_animation"><div class="header_font zero_color prk_vc_title" style="color:#ffffff;border-bottom-color:rgba(255, 255, 255,0.9);text-shadow:0px 0px 1px rgba(255, 255, 255,0.2);"><h1><?php if($season_selection === 'summer') { the_field('summer_title', 'options'); } else { the_field('winter_title', 'options'); } ?></h1></div><div class="clearfix"></div></div><div class="prk_shortcode-title fount_centered_text wpb_animate_when_almost_visible wpb_appear h2_sized wpb_start_animation"><div class="header_font zero_color prk_vc_title" style="color:#ffffff;border-bottom-color:rgba(255, 255, 255,0.9);text-shadow:0px 0px 1px rgba(255, 255, 255,0.2);"><h2><?php if($season_selection === 'summer') { the_field('summer_headline', 'options'); } else { the_field('winter_headline', 'options'); } ?><br></h2></div><div class="clearfix"></div></div><div class="clearfix" style="height:25px;"></div><div class="theme_button large wpb_animate_when_almost_visible wpb_appear btn-large wpb_start_animation"><a href="/atv-utv-rentals/" target="_self" class="fade_anchor with_icon"><div class="text_shifter">Get Started!</div><div class="icon_cell"><i class="fount_fa-play"></i></div></a></div><div class="clearfix" style="height:250px;"></div>
		</div>
    	<iframe width="1280" height="720" src="<?php if($season_selection === 'summer') { the_field('summer_hero_youtube_url', 'options'); } else { the_field('winter_hero_youtube_url', 'options'); } ?>?autoplay=1&amp;loop=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;mute=1"
    	frameborder="0" allowfullscreen></iframe>
    	<div class="small-12"><div class="extra_pad prk_inner_block columns small-centered clearfix"><div class="row">
	<div class="vc_span12 wpb_column column_container">
	</div>
</div></div></div>
    </div>
</section>