<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package VPBakeryVisualComposer
 *
 */

$vc_is_wp_version_3_6_more = version_compare( preg_replace( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo( 'version' ) ), '3.6' ) >= 0;

// Used in "Button", "Call __( 'Blue', 'js_composer' )to Action", "Pie chart" blocks
$colors_arr = array(
	__( 'Grey', 'js_composer' ) => 'wpb_button',
	__( 'Blue', 'js_composer' ) => 'btn-primary',
	__( 'Turquoise', 'js_composer' ) => 'btn-info',
	__( 'Green', 'js_composer' ) => 'btn-success',
	__( 'Orange', 'js_composer' ) => 'btn-warning',
	__( 'Red', 'js_composer' ) => 'btn-danger',
	__( 'Black', 'js_composer' ) => "btn-inverse"
);

// Used in "Button" and "Call to Action" blocks
$size_arr = array(
	__( 'Regular size', 'js_composer' ) => 'wpb_regularsize',
	__( 'Large', 'js_composer' ) => 'btn-large',
	__( 'Small', 'js_composer' ) => 'btn-small',
	__( 'Mini', 'js_composer' ) => "btn-mini"
);
// Used in Icons
$fount_icons_arr = array(
  __( '<div class="fount_icon_selector"><i class="fount_fa-adjust"></i></div>', 'js_composer' ) => 'fount_fa-adjust',
__( '<div class="fount_icon_selector"><i class="fount_fa-anchor"></i></div>', 'js_composer' ) => 'fount_fa-anchor',
__( '<div class="fount_icon_selector"><i class="fount_fa-archive"></i></div>', 'js_composer' ) => 'fount_fa-archive',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows"></i></div>', 'js_composer' ) => 'fount_fa-arrows',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-h"></i></div>', 'js_composer' ) => 'fount_fa-arrows-h',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-v"></i></div>', 'js_composer' ) => 'fount_fa-arrows-v',
__( '<div class="fount_icon_selector"><i class="fount_fa-asterisk"></i></div>', 'js_composer' ) => 'fount_fa-asterisk',
__( '<div class="fount_icon_selector"><i class="fount_fa-automobile"></i></div>', 'js_composer' ) => 'fount_fa-automobile',
__( '<div class="fount_icon_selector"><i class="fount_fa-ban"></i></div>', 'js_composer' ) => 'fount_fa-ban',
__( '<div class="fount_icon_selector"><i class="fount_fa-bank"></i></div>', 'js_composer' ) => 'fount_fa-bank',
__( '<div class="fount_icon_selector"><i class="fount_fa-bar-chart-o"></i></div>', 'js_composer' ) => 'fount_fa-bar-chart-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-barcode"></i></div>', 'js_composer' ) => 'fount_fa-barcode',
__( '<div class="fount_icon_selector"><i class="fount_fa-bars"></i></div>', 'js_composer' ) => 'fount_fa-bars',
__( '<div class="fount_icon_selector"><i class="fount_fa-beer"></i></div>', 'js_composer' ) => 'fount_fa-beer',
__( '<div class="fount_icon_selector"><i class="fount_fa-bell"></i></div>', 'js_composer' ) => 'fount_fa-bell',
__( '<div class="fount_icon_selector"><i class="fount_fa-bell-o"></i></div>', 'js_composer' ) => 'fount_fa-bell-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-bolt"></i></div>', 'js_composer' ) => 'fount_fa-bolt',
__( '<div class="fount_icon_selector"><i class="fount_fa-bomb"></i></div>', 'js_composer' ) => 'fount_fa-bomb',
__( '<div class="fount_icon_selector"><i class="fount_fa-book"></i></div>', 'js_composer' ) => 'fount_fa-book',
__( '<div class="fount_icon_selector"><i class="fount_fa-bookmark"></i></div>', 'js_composer' ) => 'fount_fa-bookmark',
__( '<div class="fount_icon_selector"><i class="fount_fa-bookmark-o"></i></div>', 'js_composer' ) => 'fount_fa-bookmark-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-briefcase"></i></div>', 'js_composer' ) => 'fount_fa-briefcase',
__( '<div class="fount_icon_selector"><i class="fount_fa-bug"></i></div>', 'js_composer' ) => 'fount_fa-bug',
__( '<div class="fount_icon_selector"><i class="fount_fa-building"></i></div>', 'js_composer' ) => 'fount_fa-building',
__( '<div class="fount_icon_selector"><i class="fount_fa-building-o"></i></div>', 'js_composer' ) => 'fount_fa-building-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-bullhorn"></i></div>', 'js_composer' ) => 'fount_fa-bullhorn',
__( '<div class="fount_icon_selector"><i class="fount_fa-bullseye"></i></div>', 'js_composer' ) => 'fount_fa-bullseye',
__( '<div class="fount_icon_selector"><i class="fount_fa-cab"></i></div>', 'js_composer' ) => 'fount_fa-cab',
__( '<div class="fount_icon_selector"><i class="fount_fa-calendar"></i></div>', 'js_composer' ) => 'fount_fa-calendar',
__( '<div class="fount_icon_selector"><i class="fount_fa-calendar-o"></i></div>', 'js_composer' ) => 'fount_fa-calendar-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-camera"></i></div>', 'js_composer' ) => 'fount_fa-camera',
__( '<div class="fount_icon_selector"><i class="fount_fa-camera-retro"></i></div>', 'js_composer' ) => 'fount_fa-camera-retro',
__( '<div class="fount_icon_selector"><i class="fount_fa-car"></i></div>', 'js_composer' ) => 'fount_fa-car',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-down"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-left"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-right"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-up"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-certificate"></i></div>', 'js_composer' ) => 'fount_fa-certificate',
__( '<div class="fount_icon_selector"><i class="fount_fa-check"></i></div>', 'js_composer' ) => 'fount_fa-check',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-circle"></i></div>', 'js_composer' ) => 'fount_fa-check-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-check-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-square"></i></div>', 'js_composer' ) => 'fount_fa-check-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-square-o"></i></div>', 'js_composer' ) => 'fount_fa-check-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-child"></i></div>', 'js_composer' ) => 'fount_fa-child',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle"></i></div>', 'js_composer' ) => 'fount_fa-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle-o-notch"></i></div>', 'js_composer' ) => 'fount_fa-circle-o-notch',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle-thin"></i></div>', 'js_composer' ) => 'fount_fa-circle-thin',
__( '<div class="fount_icon_selector"><i class="fount_fa-clock-o"></i></div>', 'js_composer' ) => 'fount_fa-clock-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-cloud"></i></div>', 'js_composer' ) => 'fount_fa-cloud',
__( '<div class="fount_icon_selector"><i class="fount_fa-cloud-download"></i></div>', 'js_composer' ) => 'fount_fa-cloud-download',
__( '<div class="fount_icon_selector"><i class="fount_fa-cloud-upload"></i></div>', 'js_composer' ) => 'fount_fa-cloud-upload',
__( '<div class="fount_icon_selector"><i class="fount_fa-code"></i></div>', 'js_composer' ) => 'fount_fa-code',
__( '<div class="fount_icon_selector"><i class="fount_fa-code-fork"></i></div>', 'js_composer' ) => 'fount_fa-code-fork',
__( '<div class="fount_icon_selector"><i class="fount_fa-coffee"></i></div>', 'js_composer' ) => 'fount_fa-coffee',
__( '<div class="fount_icon_selector"><i class="fount_fa-cog"></i></div>', 'js_composer' ) => 'fount_fa-cog',
__( '<div class="fount_icon_selector"><i class="fount_fa-cogs"></i></div>', 'js_composer' ) => 'fount_fa-cogs',
__( '<div class="fount_icon_selector"><i class="fount_fa-comment"></i></div>', 'js_composer' ) => 'fount_fa-comment',
__( '<div class="fount_icon_selector"><i class="fount_fa-comment-o"></i></div>', 'js_composer' ) => 'fount_fa-comment-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-comments"></i></div>', 'js_composer' ) => 'fount_fa-comments',
__( '<div class="fount_icon_selector"><i class="fount_fa-comments-o"></i></div>', 'js_composer' ) => 'fount_fa-comments-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-compass"></i></div>', 'js_composer' ) => 'fount_fa-compass',
__( '<div class="fount_icon_selector"><i class="fount_fa-credit-card"></i></div>', 'js_composer' ) => 'fount_fa-credit-card',
__( '<div class="fount_icon_selector"><i class="fount_fa-crop"></i></div>', 'js_composer' ) => 'fount_fa-crop',
__( '<div class="fount_icon_selector"><i class="fount_fa-crosshairs"></i></div>', 'js_composer' ) => 'fount_fa-crosshairs',
__( '<div class="fount_icon_selector"><i class="fount_fa-cube"></i></div>', 'js_composer' ) => 'fount_fa-cube',
__( '<div class="fount_icon_selector"><i class="fount_fa-cubes"></i></div>', 'js_composer' ) => 'fount_fa-cubes',
__( '<div class="fount_icon_selector"><i class="fount_fa-cutlery"></i></div>', 'js_composer' ) => 'fount_fa-cutlery',
__( '<div class="fount_icon_selector"><i class="fount_fa-dashboard"></i></div>', 'js_composer' ) => 'fount_fa-dashboard',
__( '<div class="fount_icon_selector"><i class="fount_fa-database"></i></div>', 'js_composer' ) => 'fount_fa-database',
__( '<div class="fount_icon_selector"><i class="fount_fa-desktop"></i></div>', 'js_composer' ) => 'fount_fa-desktop',
__( '<div class="fount_icon_selector"><i class="fount_fa-dot-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-dot-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-download"></i></div>', 'js_composer' ) => 'fount_fa-download',
__( '<div class="fount_icon_selector"><i class="fount_fa-edit"></i></div>', 'js_composer' ) => 'fount_fa-edit',
__( '<div class="fount_icon_selector"><i class="fount_fa-ellipsis-h"></i></div>', 'js_composer' ) => 'fount_fa-ellipsis-h',
__( '<div class="fount_icon_selector"><i class="fount_fa-ellipsis-v"></i></div>', 'js_composer' ) => 'fount_fa-ellipsis-v',
__( '<div class="fount_icon_selector"><i class="fount_fa-envelope"></i></div>', 'js_composer' ) => 'fount_fa-envelope',
__( '<div class="fount_icon_selector"><i class="fount_fa-envelope-o"></i></div>', 'js_composer' ) => 'fount_fa-envelope-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-envelope-square"></i></div>', 'js_composer' ) => 'fount_fa-envelope-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-eraser"></i></div>', 'js_composer' ) => 'fount_fa-eraser',
__( '<div class="fount_icon_selector"><i class="fount_fa-exchange"></i></div>', 'js_composer' ) => 'fount_fa-exchange',
__( '<div class="fount_icon_selector"><i class="fount_fa-exclamation"></i></div>', 'js_composer' ) => 'fount_fa-exclamation',
__( '<div class="fount_icon_selector"><i class="fount_fa-exclamation-circle"></i></div>', 'js_composer' ) => 'fount_fa-exclamation-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-exclamation-triangle"></i></div>', 'js_composer' ) => 'fount_fa-exclamation-triangle',
__( '<div class="fount_icon_selector"><i class="fount_fa-external-link"></i></div>', 'js_composer' ) => 'fount_fa-external-link',
__( '<div class="fount_icon_selector"><i class="fount_fa-external-link-square"></i></div>', 'js_composer' ) => 'fount_fa-external-link-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-eye"></i></div>', 'js_composer' ) => 'fount_fa-eye',
__( '<div class="fount_icon_selector"><i class="fount_fa-eye-slash"></i></div>', 'js_composer' ) => 'fount_fa-eye-slash',
__( '<div class="fount_icon_selector"><i class="fount_fa-fax"></i></div>', 'js_composer' ) => 'fount_fa-fax',
__( '<div class="fount_icon_selector"><i class="fount_fa-female"></i></div>', 'js_composer' ) => 'fount_fa-female',
__( '<div class="fount_icon_selector"><i class="fount_fa-fighter-jet"></i></div>', 'js_composer' ) => 'fount_fa-fighter-jet',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-archive-o"></i></div>', 'js_composer' ) => 'fount_fa-file-archive-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-audio-o"></i></div>', 'js_composer' ) => 'fount_fa-file-audio-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-code-o"></i></div>', 'js_composer' ) => 'fount_fa-file-code-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-excel-o"></i></div>', 'js_composer' ) => 'fount_fa-file-excel-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-image-o"></i></div>', 'js_composer' ) => 'fount_fa-file-image-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-movie-o"></i></div>', 'js_composer' ) => 'fount_fa-file-movie-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-pdf-o"></i></div>', 'js_composer' ) => 'fount_fa-file-pdf-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-photo-o"></i></div>', 'js_composer' ) => 'fount_fa-file-photo-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-picture-o"></i></div>', 'js_composer' ) => 'fount_fa-file-picture-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-powerpoint-o"></i></div>', 'js_composer' ) => 'fount_fa-file-powerpoint-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-sound-o"></i></div>', 'js_composer' ) => 'fount_fa-file-sound-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-video-o"></i></div>', 'js_composer' ) => 'fount_fa-file-video-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-word-o"></i></div>', 'js_composer' ) => 'fount_fa-file-word-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-zip-o"></i></div>', 'js_composer' ) => 'fount_fa-file-zip-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-film"></i></div>', 'js_composer' ) => 'fount_fa-film',
__( '<div class="fount_icon_selector"><i class="fount_fa-filter"></i></div>', 'js_composer' ) => 'fount_fa-filter',
__( '<div class="fount_icon_selector"><i class="fount_fa-fire"></i></div>', 'js_composer' ) => 'fount_fa-fire',
__( '<div class="fount_icon_selector"><i class="fount_fa-fire-extinguisher"></i></div>', 'js_composer' ) => 'fount_fa-fire-extinguisher',
__( '<div class="fount_icon_selector"><i class="fount_fa-flag"></i></div>', 'js_composer' ) => 'fount_fa-flag',
__( '<div class="fount_icon_selector"><i class="fount_fa-flag-checkered"></i></div>', 'js_composer' ) => 'fount_fa-flag-checkered',
__( '<div class="fount_icon_selector"><i class="fount_fa-flag-o"></i></div>', 'js_composer' ) => 'fount_fa-flag-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-flash"></i></div>', 'js_composer' ) => 'fount_fa-flash',
__( '<div class="fount_icon_selector"><i class="fount_fa-flask"></i></div>', 'js_composer' ) => 'fount_fa-flask',
__( '<div class="fount_icon_selector"><i class="fount_fa-folder"></i></div>', 'js_composer' ) => 'fount_fa-folder',
__( '<div class="fount_icon_selector"><i class="fount_fa-folder-o"></i></div>', 'js_composer' ) => 'fount_fa-folder-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-folder-open"></i></div>', 'js_composer' ) => 'fount_fa-folder-open',
__( '<div class="fount_icon_selector"><i class="fount_fa-folder-open-o"></i></div>', 'js_composer' ) => 'fount_fa-folder-open-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-frown-o"></i></div>', 'js_composer' ) => 'fount_fa-frown-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-gamepad"></i></div>', 'js_composer' ) => 'fount_fa-gamepad',
__( '<div class="fount_icon_selector"><i class="fount_fa-gavel"></i></div>', 'js_composer' ) => 'fount_fa-gavel',
__( '<div class="fount_icon_selector"><i class="fount_fa-gear"></i></div>', 'js_composer' ) => 'fount_fa-gear',
__( '<div class="fount_icon_selector"><i class="fount_fa-gears"></i></div>', 'js_composer' ) => 'fount_fa-gears',
__( '<div class="fount_icon_selector"><i class="fount_fa-gift"></i></div>', 'js_composer' ) => 'fount_fa-gift',
__( '<div class="fount_icon_selector"><i class="fount_fa-glass"></i></div>', 'js_composer' ) => 'fount_fa-glass',
__( '<div class="fount_icon_selector"><i class="fount_fa-globe"></i></div>', 'js_composer' ) => 'fount_fa-globe',
__( '<div class="fount_icon_selector"><i class="fount_fa-graduation-cap"></i></div>', 'js_composer' ) => 'fount_fa-graduation-cap',
__( '<div class="fount_icon_selector"><i class="fount_fa-group"></i></div>', 'js_composer' ) => 'fount_fa-group',
__( '<div class="fount_icon_selector"><i class="fount_fa-hdd-o"></i></div>', 'js_composer' ) => 'fount_fa-hdd-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-headphones"></i></div>', 'js_composer' ) => 'fount_fa-headphones',
__( '<div class="fount_icon_selector"><i class="fount_fa-heart"></i></div>', 'js_composer' ) => 'fount_fa-heart',
__( '<div class="fount_icon_selector"><i class="fount_fa-heart-o"></i></div>', 'js_composer' ) => 'fount_fa-heart-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-history"></i></div>', 'js_composer' ) => 'fount_fa-history',
__( '<div class="fount_icon_selector"><i class="fount_fa-home"></i></div>', 'js_composer' ) => 'fount_fa-home',
__( '<div class="fount_icon_selector"><i class="fount_fa-image"></i></div>', 'js_composer' ) => 'fount_fa-image',
__( '<div class="fount_icon_selector"><i class="fount_fa-inbox"></i></div>', 'js_composer' ) => 'fount_fa-inbox',
__( '<div class="fount_icon_selector"><i class="fount_fa-info"></i></div>', 'js_composer' ) => 'fount_fa-info',
__( '<div class="fount_icon_selector"><i class="fount_fa-info-circle"></i></div>', 'js_composer' ) => 'fount_fa-info-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-institution"></i></div>', 'js_composer' ) => 'fount_fa-institution',
__( '<div class="fount_icon_selector"><i class="fount_fa-key"></i></div>', 'js_composer' ) => 'fount_fa-key',
__( '<div class="fount_icon_selector"><i class="fount_fa-keyboard-o"></i></div>', 'js_composer' ) => 'fount_fa-keyboard-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-language"></i></div>', 'js_composer' ) => 'fount_fa-language',
__( '<div class="fount_icon_selector"><i class="fount_fa-laptop"></i></div>', 'js_composer' ) => 'fount_fa-laptop',
__( '<div class="fount_icon_selector"><i class="fount_fa-leaf"></i></div>', 'js_composer' ) => 'fount_fa-leaf',
__( '<div class="fount_icon_selector"><i class="fount_fa-legal"></i></div>', 'js_composer' ) => 'fount_fa-legal',
__( '<div class="fount_icon_selector"><i class="fount_fa-lemon-o"></i></div>', 'js_composer' ) => 'fount_fa-lemon-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-level-down"></i></div>', 'js_composer' ) => 'fount_fa-level-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-level-up"></i></div>', 'js_composer' ) => 'fount_fa-level-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-life-bouy"></i></div>', 'js_composer' ) => 'fount_fa-life-bouy',
__( '<div class="fount_icon_selector"><i class="fount_fa-life-ring"></i></div>', 'js_composer' ) => 'fount_fa-life-ring',
__( '<div class="fount_icon_selector"><i class="fount_fa-life-saver"></i></div>', 'js_composer' ) => 'fount_fa-life-saver',
__( '<div class="fount_icon_selector"><i class="fount_fa-lightbulb-o"></i></div>', 'js_composer' ) => 'fount_fa-lightbulb-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-location-arrow"></i></div>', 'js_composer' ) => 'fount_fa-location-arrow',
__( '<div class="fount_icon_selector"><i class="fount_fa-lock"></i></div>', 'js_composer' ) => 'fount_fa-lock',
__( '<div class="fount_icon_selector"><i class="fount_fa-magic"></i></div>', 'js_composer' ) => 'fount_fa-magic',
__( '<div class="fount_icon_selector"><i class="fount_fa-magnet"></i></div>', 'js_composer' ) => 'fount_fa-magnet',
__( '<div class="fount_icon_selector"><i class="fount_fa-mail-forward"></i></div>', 'js_composer' ) => 'fount_fa-mail-forward',
__( '<div class="fount_icon_selector"><i class="fount_fa-mail-reply"></i></div>', 'js_composer' ) => 'fount_fa-mail-reply',
__( '<div class="fount_icon_selector"><i class="fount_fa-mail-reply-all"></i></div>', 'js_composer' ) => 'fount_fa-mail-reply-all',
__( '<div class="fount_icon_selector"><i class="fount_fa-male"></i></div>', 'js_composer' ) => 'fount_fa-male',
__( '<div class="fount_icon_selector"><i class="fount_fa-map-marker"></i></div>', 'js_composer' ) => 'fount_fa-map-marker',
__( '<div class="fount_icon_selector"><i class="fount_fa-meh-o"></i></div>', 'js_composer' ) => 'fount_fa-meh-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-microphone"></i></div>', 'js_composer' ) => 'fount_fa-microphone',
__( '<div class="fount_icon_selector"><i class="fount_fa-microphone-slash"></i></div>', 'js_composer' ) => 'fount_fa-microphone-slash',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus"></i></div>', 'js_composer' ) => 'fount_fa-minus',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus-circle"></i></div>', 'js_composer' ) => 'fount_fa-minus-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus-square"></i></div>', 'js_composer' ) => 'fount_fa-minus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus-square-o"></i></div>', 'js_composer' ) => 'fount_fa-minus-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-mobile"></i></div>', 'js_composer' ) => 'fount_fa-mobile',
__( '<div class="fount_icon_selector"><i class="fount_fa-mobile-phone"></i></div>', 'js_composer' ) => 'fount_fa-mobile-phone',
__( '<div class="fount_icon_selector"><i class="fount_fa-money"></i></div>', 'js_composer' ) => 'fount_fa-money',
__( '<div class="fount_icon_selector"><i class="fount_fa-moon-o"></i></div>', 'js_composer' ) => 'fount_fa-moon-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-mortar-board"></i></div>', 'js_composer' ) => 'fount_fa-mortar-board',
__( '<div class="fount_icon_selector"><i class="fount_fa-music"></i></div>', 'js_composer' ) => 'fount_fa-music',
__( '<div class="fount_icon_selector"><i class="fount_fa-navicon"></i></div>', 'js_composer' ) => 'fount_fa-navicon',
__( '<div class="fount_icon_selector"><i class="fount_fa-paper-plane"></i></div>', 'js_composer' ) => 'fount_fa-paper-plane',
__( '<div class="fount_icon_selector"><i class="fount_fa-paper-plane-o"></i></div>', 'js_composer' ) => 'fount_fa-paper-plane-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-paw"></i></div>', 'js_composer' ) => 'fount_fa-paw',
__( '<div class="fount_icon_selector"><i class="fount_fa-pencil"></i></div>', 'js_composer' ) => 'fount_fa-pencil',
__( '<div class="fount_icon_selector"><i class="fount_fa-pencil-square"></i></div>', 'js_composer' ) => 'fount_fa-pencil-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-pencil-square-o"></i></div>', 'js_composer' ) => 'fount_fa-pencil-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-phone"></i></div>', 'js_composer' ) => 'fount_fa-phone',
__( '<div class="fount_icon_selector"><i class="fount_fa-phone-square"></i></div>', 'js_composer' ) => 'fount_fa-phone-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-photo"></i></div>', 'js_composer' ) => 'fount_fa-photo',
__( '<div class="fount_icon_selector"><i class="fount_fa-picture-o"></i></div>', 'js_composer' ) => 'fount_fa-picture-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-plane"></i></div>', 'js_composer' ) => 'fount_fa-plane',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus"></i></div>', 'js_composer' ) => 'fount_fa-plus',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-circle"></i></div>', 'js_composer' ) => 'fount_fa-plus-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-square"></i></div>', 'js_composer' ) => 'fount_fa-plus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-square-o"></i></div>', 'js_composer' ) => 'fount_fa-plus-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-power-off"></i></div>', 'js_composer' ) => 'fount_fa-power-off',
__( '<div class="fount_icon_selector"><i class="fount_fa-print"></i></div>', 'js_composer' ) => 'fount_fa-print',
__( '<div class="fount_icon_selector"><i class="fount_fa-puzzle-piece"></i></div>', 'js_composer' ) => 'fount_fa-puzzle-piece',
__( '<div class="fount_icon_selector"><i class="fount_fa-qrcode"></i></div>', 'js_composer' ) => 'fount_fa-qrcode',
__( '<div class="fount_icon_selector"><i class="fount_fa-question"></i></div>', 'js_composer' ) => 'fount_fa-question',
__( '<div class="fount_icon_selector"><i class="fount_fa-question-circle"></i></div>', 'js_composer' ) => 'fount_fa-question-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-quote-left"></i></div>', 'js_composer' ) => 'fount_fa-quote-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-quote-right"></i></div>', 'js_composer' ) => 'fount_fa-quote-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-random"></i></div>', 'js_composer' ) => 'fount_fa-random',
__( '<div class="fount_icon_selector"><i class="fount_fa-recycle"></i></div>', 'js_composer' ) => 'fount_fa-recycle',
__( '<div class="fount_icon_selector"><i class="fount_fa-refresh"></i></div>', 'js_composer' ) => 'fount_fa-refresh',
__( '<div class="fount_icon_selector"><i class="fount_fa-reorder"></i></div>', 'js_composer' ) => 'fount_fa-reorder',
__( '<div class="fount_icon_selector"><i class="fount_fa-reply"></i></div>', 'js_composer' ) => 'fount_fa-reply',
__( '<div class="fount_icon_selector"><i class="fount_fa-reply-all"></i></div>', 'js_composer' ) => 'fount_fa-reply-all',
__( '<div class="fount_icon_selector"><i class="fount_fa-retweet"></i></div>', 'js_composer' ) => 'fount_fa-retweet',
__( '<div class="fount_icon_selector"><i class="fount_fa-road"></i></div>', 'js_composer' ) => 'fount_fa-road',
__( '<div class="fount_icon_selector"><i class="fount_fa-rocket"></i></div>', 'js_composer' ) => 'fount_fa-rocket',
__( '<div class="fount_icon_selector"><i class="fount_fa-rss"></i></div>', 'js_composer' ) => 'fount_fa-rss',
__( '<div class="fount_icon_selector"><i class="fount_fa-rss-square"></i></div>', 'js_composer' ) => 'fount_fa-rss-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-search"></i></div>', 'js_composer' ) => 'fount_fa-search',
__( '<div class="fount_icon_selector"><i class="fount_fa-search-minus"></i></div>', 'js_composer' ) => 'fount_fa-search-minus',
__( '<div class="fount_icon_selector"><i class="fount_fa-search-plus"></i></div>', 'js_composer' ) => 'fount_fa-search-plus',
__( '<div class="fount_icon_selector"><i class="fount_fa-send"></i></div>', 'js_composer' ) => 'fount_fa-send',
__( '<div class="fount_icon_selector"><i class="fount_fa-send-o"></i></div>', 'js_composer' ) => 'fount_fa-send-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-share"></i></div>', 'js_composer' ) => 'fount_fa-share',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-alt"></i></div>', 'js_composer' ) => 'fount_fa-share-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-alt-square"></i></div>', 'js_composer' ) => 'fount_fa-share-alt-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-square"></i></div>', 'js_composer' ) => 'fount_fa-share-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-square-o"></i></div>', 'js_composer' ) => 'fount_fa-share-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-shield"></i></div>', 'js_composer' ) => 'fount_fa-shield',
__( '<div class="fount_icon_selector"><i class="fount_fa-shopping-cart"></i></div>', 'js_composer' ) => 'fount_fa-shopping-cart',
__( '<div class="fount_icon_selector"><i class="fount_fa-sign-in"></i></div>', 'js_composer' ) => 'fount_fa-sign-in',
__( '<div class="fount_icon_selector"><i class="fount_fa-sign-out"></i></div>', 'js_composer' ) => 'fount_fa-sign-out',
__( '<div class="fount_icon_selector"><i class="fount_fa-signal"></i></div>', 'js_composer' ) => 'fount_fa-signal',
__( '<div class="fount_icon_selector"><i class="fount_fa-sitemap"></i></div>', 'js_composer' ) => 'fount_fa-sitemap',
__( '<div class="fount_icon_selector"><i class="fount_fa-sliders"></i></div>', 'js_composer' ) => 'fount_fa-sliders',
__( '<div class="fount_icon_selector"><i class="fount_fa-smile-o"></i></div>', 'js_composer' ) => 'fount_fa-smile-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort"></i></div>', 'js_composer' ) => 'fount_fa-sort',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-alpha-asc"></i></div>', 'js_composer' ) => 'fount_fa-sort-alpha-asc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-alpha-desc"></i></div>', 'js_composer' ) => 'fount_fa-sort-alpha-desc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-amount-asc"></i></div>', 'js_composer' ) => 'fount_fa-sort-amount-asc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-amount-desc"></i></div>', 'js_composer' ) => 'fount_fa-sort-amount-desc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-asc"></i></div>', 'js_composer' ) => 'fount_fa-sort-asc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-desc"></i></div>', 'js_composer' ) => 'fount_fa-sort-desc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-down"></i></div>', 'js_composer' ) => 'fount_fa-sort-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-numeric-asc"></i></div>', 'js_composer' ) => 'fount_fa-sort-numeric-asc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-numeric-desc"></i></div>', 'js_composer' ) => 'fount_fa-sort-numeric-desc',
__( '<div class="fount_icon_selector"><i class="fount_fa-sort-up"></i></div>', 'js_composer' ) => 'fount_fa-sort-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-space-shuttle"></i></div>', 'js_composer' ) => 'fount_fa-space-shuttle',
__( '<div class="fount_icon_selector"><i class="fount_fa-spinner"></i></div>', 'js_composer' ) => 'fount_fa-spinner',
__( '<div class="fount_icon_selector"><i class="fount_fa-spoon"></i></div>', 'js_composer' ) => 'fount_fa-spoon',
__( '<div class="fount_icon_selector"><i class="fount_fa-square"></i></div>', 'js_composer' ) => 'fount_fa-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-square-o"></i></div>', 'js_composer' ) => 'fount_fa-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-star"></i></div>', 'js_composer' ) => 'fount_fa-star',
__( '<div class="fount_icon_selector"><i class="fount_fa-star-half"></i></div>', 'js_composer' ) => 'fount_fa-star-half',
__( '<div class="fount_icon_selector"><i class="fount_fa-star-half-empty"></i></div>', 'js_composer' ) => 'fount_fa-star-half-empty',
__( '<div class="fount_icon_selector"><i class="fount_fa-star-half-full"></i></div>', 'js_composer' ) => 'fount_fa-star-half-full',
__( '<div class="fount_icon_selector"><i class="fount_fa-star-half-o"></i></div>', 'js_composer' ) => 'fount_fa-star-half-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-star-o"></i></div>', 'js_composer' ) => 'fount_fa-star-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-suitcase"></i></div>', 'js_composer' ) => 'fount_fa-suitcase',
__( '<div class="fount_icon_selector"><i class="fount_fa-sun-o"></i></div>', 'js_composer' ) => 'fount_fa-sun-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-support"></i></div>', 'js_composer' ) => 'fount_fa-support',
__( '<div class="fount_icon_selector"><i class="fount_fa-tablet"></i></div>', 'js_composer' ) => 'fount_fa-tablet',
__( '<div class="fount_icon_selector"><i class="fount_fa-tachometer"></i></div>', 'js_composer' ) => 'fount_fa-tachometer',
__( '<div class="fount_icon_selector"><i class="fount_fa-tag"></i></div>', 'js_composer' ) => 'fount_fa-tag',
__( '<div class="fount_icon_selector"><i class="fount_fa-tags"></i></div>', 'js_composer' ) => 'fount_fa-tags',
__( '<div class="fount_icon_selector"><i class="fount_fa-tasks"></i></div>', 'js_composer' ) => 'fount_fa-tasks',
__( '<div class="fount_icon_selector"><i class="fount_fa-taxi"></i></div>', 'js_composer' ) => 'fount_fa-taxi',
__( '<div class="fount_icon_selector"><i class="fount_fa-terminal"></i></div>', 'js_composer' ) => 'fount_fa-terminal',
__( '<div class="fount_icon_selector"><i class="fount_fa-thumb-tack"></i></div>', 'js_composer' ) => 'fount_fa-thumb-tack',
__( '<div class="fount_icon_selector"><i class="fount_fa-thumbs-down"></i></div>', 'js_composer' ) => 'fount_fa-thumbs-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-thumbs-o-down"></i></div>', 'js_composer' ) => 'fount_fa-thumbs-o-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-thumbs-o-up"></i></div>', 'js_composer' ) => 'fount_fa-thumbs-o-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-thumbs-up"></i></div>', 'js_composer' ) => 'fount_fa-thumbs-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-ticket"></i></div>', 'js_composer' ) => 'fount_fa-ticket',
__( '<div class="fount_icon_selector"><i class="fount_fa-times"></i></div>', 'js_composer' ) => 'fount_fa-times',
__( '<div class="fount_icon_selector"><i class="fount_fa-times-circle"></i></div>', 'js_composer' ) => 'fount_fa-times-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-times-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-times-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-tint"></i></div>', 'js_composer' ) => 'fount_fa-tint',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-down"></i></div>', 'js_composer' ) => 'fount_fa-toggle-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-left"></i></div>', 'js_composer' ) => 'fount_fa-toggle-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-right"></i></div>', 'js_composer' ) => 'fount_fa-toggle-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-up"></i></div>', 'js_composer' ) => 'fount_fa-toggle-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-trash-o"></i></div>', 'js_composer' ) => 'fount_fa-trash-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-tree"></i></div>', 'js_composer' ) => 'fount_fa-tree',
__( '<div class="fount_icon_selector"><i class="fount_fa-trophy"></i></div>', 'js_composer' ) => 'fount_fa-trophy',
__( '<div class="fount_icon_selector"><i class="fount_fa-truck"></i></div>', 'js_composer' ) => 'fount_fa-truck',
__( '<div class="fount_icon_selector"><i class="fount_fa-umbrella"></i></div>', 'js_composer' ) => 'fount_fa-umbrella',
__( '<div class="fount_icon_selector"><i class="fount_fa-university"></i></div>', 'js_composer' ) => 'fount_fa-university',
__( '<div class="fount_icon_selector"><i class="fount_fa-unlock"></i></div>', 'js_composer' ) => 'fount_fa-unlock',
__( '<div class="fount_icon_selector"><i class="fount_fa-unlock-alt"></i></div>', 'js_composer' ) => 'fount_fa-unlock-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-unsorted"></i></div>', 'js_composer' ) => 'fount_fa-unsorted',
__( '<div class="fount_icon_selector"><i class="fount_fa-upload"></i></div>', 'js_composer' ) => 'fount_fa-upload',
__( '<div class="fount_icon_selector"><i class="fount_fa-user"></i></div>', 'js_composer' ) => 'fount_fa-user',
__( '<div class="fount_icon_selector"><i class="fount_fa-users"></i></div>', 'js_composer' ) => 'fount_fa-users',
__( '<div class="fount_icon_selector"><i class="fount_fa-video-camera"></i></div>', 'js_composer' ) => 'fount_fa-video-camera',
__( '<div class="fount_icon_selector"><i class="fount_fa-volume-down"></i></div>', 'js_composer' ) => 'fount_fa-volume-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-volume-off"></i></div>', 'js_composer' ) => 'fount_fa-volume-off',
__( '<div class="fount_icon_selector"><i class="fount_fa-volume-up"></i></div>', 'js_composer' ) => 'fount_fa-volume-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-warning"></i></div>', 'js_composer' ) => 'fount_fa-warning',
__( '<div class="fount_icon_selector"><i class="fount_fa-wheelchair"></i></div>', 'js_composer' ) => 'fount_fa-wheelchair',
__( '<div class="fount_icon_selector"><i class="fount_fa-wrench"></i></div>', 'js_composer' ) => 'fount_fa-wrench',
__( '<div class="fount_icon_selector"><i class="fount_fa-file"></i></div>', 'js_composer' ) => 'fount_fa-file',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-archive-o"></i></div>', 'js_composer' ) => 'fount_fa-file-archive-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-audio-o"></i></div>', 'js_composer' ) => 'fount_fa-file-audio-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-code-o"></i></div>', 'js_composer' ) => 'fount_fa-file-code-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-excel-o"></i></div>', 'js_composer' ) => 'fount_fa-file-excel-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-image-o"></i></div>', 'js_composer' ) => 'fount_fa-file-image-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-movie-o"></i></div>', 'js_composer' ) => 'fount_fa-file-movie-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-o"></i></div>', 'js_composer' ) => 'fount_fa-file-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-pdf-o"></i></div>', 'js_composer' ) => 'fount_fa-file-pdf-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-photo-o"></i></div>', 'js_composer' ) => 'fount_fa-file-photo-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-picture-o"></i></div>', 'js_composer' ) => 'fount_fa-file-picture-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-powerpoint-o"></i></div>', 'js_composer' ) => 'fount_fa-file-powerpoint-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-sound-o"></i></div>', 'js_composer' ) => 'fount_fa-file-sound-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-text"></i></div>', 'js_composer' ) => 'fount_fa-file-text',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-text-o"></i></div>', 'js_composer' ) => 'fount_fa-file-text-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-video-o"></i></div>', 'js_composer' ) => 'fount_fa-file-video-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-word-o"></i></div>', 'js_composer' ) => 'fount_fa-file-word-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-zip-o"></i></div>', 'js_composer' ) => 'fount_fa-file-zip-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle-o-notch"></i></div>', 'js_composer' ) => 'fount_fa-circle-o-notch',
__( '<div class="fount_icon_selector"><i class="fount_fa-cog"></i></div>', 'js_composer' ) => 'fount_fa-cog',
__( '<div class="fount_icon_selector"><i class="fount_fa-gear"></i></div>', 'js_composer' ) => 'fount_fa-gear',
__( '<div class="fount_icon_selector"><i class="fount_fa-refresh"></i></div>', 'js_composer' ) => 'fount_fa-refresh',
__( '<div class="fount_icon_selector"><i class="fount_fa-spinner"></i></div>', 'js_composer' ) => 'fount_fa-spinner',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-square"></i></div>', 'js_composer' ) => 'fount_fa-check-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-check-square-o"></i></div>', 'js_composer' ) => 'fount_fa-check-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle"></i></div>', 'js_composer' ) => 'fount_fa-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-dot-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-dot-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus-square"></i></div>', 'js_composer' ) => 'fount_fa-minus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-minus-square-o"></i></div>', 'js_composer' ) => 'fount_fa-minus-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-square"></i></div>', 'js_composer' ) => 'fount_fa-plus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-square-o"></i></div>', 'js_composer' ) => 'fount_fa-plus-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-square"></i></div>', 'js_composer' ) => 'fount_fa-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-square-o"></i></div>', 'js_composer' ) => 'fount_fa-square-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-bitcoin"></i></div>', 'js_composer' ) => 'fount_fa-bitcoin',
__( '<div class="fount_icon_selector"><i class="fount_fa-btc"></i></div>', 'js_composer' ) => 'fount_fa-btc',
__( '<div class="fount_icon_selector"><i class="fount_fa-cny"></i></div>', 'js_composer' ) => 'fount_fa-cny',
__( '<div class="fount_icon_selector"><i class="fount_fa-dollar"></i></div>', 'js_composer' ) => 'fount_fa-dollar',
__( '<div class="fount_icon_selector"><i class="fount_fa-eur"></i></div>', 'js_composer' ) => 'fount_fa-eur',
__( '<div class="fount_icon_selector"><i class="fount_fa-euro"></i></div>', 'js_composer' ) => 'fount_fa-euro',
__( '<div class="fount_icon_selector"><i class="fount_fa-gbp"></i></div>', 'js_composer' ) => 'fount_fa-gbp',
__( '<div class="fount_icon_selector"><i class="fount_fa-inr"></i></div>', 'js_composer' ) => 'fount_fa-inr',
__( '<div class="fount_icon_selector"><i class="fount_fa-jpy"></i></div>', 'js_composer' ) => 'fount_fa-jpy',
__( '<div class="fount_icon_selector"><i class="fount_fa-krw"></i></div>', 'js_composer' ) => 'fount_fa-krw',
__( '<div class="fount_icon_selector"><i class="fount_fa-money"></i></div>', 'js_composer' ) => 'fount_fa-money',
__( '<div class="fount_icon_selector"><i class="fount_fa-rmb"></i></div>', 'js_composer' ) => 'fount_fa-rmb',
__( '<div class="fount_icon_selector"><i class="fount_fa-rouble"></i></div>', 'js_composer' ) => 'fount_fa-rouble',
__( '<div class="fount_icon_selector"><i class="fount_fa-rub"></i></div>', 'js_composer' ) => 'fount_fa-rub',
__( '<div class="fount_icon_selector"><i class="fount_fa-ruble"></i></div>', 'js_composer' ) => 'fount_fa-ruble',
__( '<div class="fount_icon_selector"><i class="fount_fa-rupee"></i></div>', 'js_composer' ) => 'fount_fa-rupee',
__( '<div class="fount_icon_selector"><i class="fount_fa-try"></i></div>', 'js_composer' ) => 'fount_fa-try',
__( '<div class="fount_icon_selector"><i class="fount_fa-turkish-lira"></i></div>', 'js_composer' ) => 'fount_fa-turkish-lira',
__( '<div class="fount_icon_selector"><i class="fount_fa-usd"></i></div>', 'js_composer' ) => 'fount_fa-usd',
__( '<div class="fount_icon_selector"><i class="fount_fa-won"></i></div>', 'js_composer' ) => 'fount_fa-won',
__( '<div class="fount_icon_selector"><i class="fount_fa-yen"></i></div>', 'js_composer' ) => 'fount_fa-yen',
__( '<div class="fount_icon_selector"><i class="fount_fa-align-center"></i></div>', 'js_composer' ) => 'fount_fa-align-center',
__( '<div class="fount_icon_selector"><i class="fount_fa-align-justify"></i></div>', 'js_composer' ) => 'fount_fa-align-justify',
__( '<div class="fount_icon_selector"><i class="fount_fa-align-left"></i></div>', 'js_composer' ) => 'fount_fa-align-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-align-right"></i></div>', 'js_composer' ) => 'fount_fa-align-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-bold"></i></div>', 'js_composer' ) => 'fount_fa-bold',
__( '<div class="fount_icon_selector"><i class="fount_fa-chain"></i></div>', 'js_composer' ) => 'fount_fa-chain',
__( '<div class="fount_icon_selector"><i class="fount_fa-chain-broken"></i></div>', 'js_composer' ) => 'fount_fa-chain-broken',
__( '<div class="fount_icon_selector"><i class="fount_fa-clipboard"></i></div>', 'js_composer' ) => 'fount_fa-clipboard',
__( '<div class="fount_icon_selector"><i class="fount_fa-columns"></i></div>', 'js_composer' ) => 'fount_fa-columns',
__( '<div class="fount_icon_selector"><i class="fount_fa-copy"></i></div>', 'js_composer' ) => 'fount_fa-copy',
__( '<div class="fount_icon_selector"><i class="fount_fa-cut"></i></div>', 'js_composer' ) => 'fount_fa-cut',
__( '<div class="fount_icon_selector"><i class="fount_fa-dedent"></i></div>', 'js_composer' ) => 'fount_fa-dedent',
__( '<div class="fount_icon_selector"><i class="fount_fa-eraser"></i></div>', 'js_composer' ) => 'fount_fa-eraser',
__( '<div class="fount_icon_selector"><i class="fount_fa-file"></i></div>', 'js_composer' ) => 'fount_fa-file',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-o"></i></div>', 'js_composer' ) => 'fount_fa-file-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-text"></i></div>', 'js_composer' ) => 'fount_fa-file-text',
__( '<div class="fount_icon_selector"><i class="fount_fa-file-text-o"></i></div>', 'js_composer' ) => 'fount_fa-file-text-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-files-o"></i></div>', 'js_composer' ) => 'fount_fa-files-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-floppy-o"></i></div>', 'js_composer' ) => 'fount_fa-floppy-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-font"></i></div>', 'js_composer' ) => 'fount_fa-font',
__( '<div class="fount_icon_selector"><i class="fount_fa-header"></i></div>', 'js_composer' ) => 'fount_fa-header',
__( '<div class="fount_icon_selector"><i class="fount_fa-indent"></i></div>', 'js_composer' ) => 'fount_fa-indent',
__( '<div class="fount_icon_selector"><i class="fount_fa-italic"></i></div>', 'js_composer' ) => 'fount_fa-italic',
__( '<div class="fount_icon_selector"><i class="fount_fa-link"></i></div>', 'js_composer' ) => 'fount_fa-link',
__( '<div class="fount_icon_selector"><i class="fount_fa-list"></i></div>', 'js_composer' ) => 'fount_fa-list',
__( '<div class="fount_icon_selector"><i class="fount_fa-list-alt"></i></div>', 'js_composer' ) => 'fount_fa-list-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-list-ol"></i></div>', 'js_composer' ) => 'fount_fa-list-ol',
__( '<div class="fount_icon_selector"><i class="fount_fa-list-ul"></i></div>', 'js_composer' ) => 'fount_fa-list-ul',
__( '<div class="fount_icon_selector"><i class="fount_fa-outdent"></i></div>', 'js_composer' ) => 'fount_fa-outdent',
__( '<div class="fount_icon_selector"><i class="fount_fa-paperclip"></i></div>', 'js_composer' ) => 'fount_fa-paperclip',
__( '<div class="fount_icon_selector"><i class="fount_fa-paragraph"></i></div>', 'js_composer' ) => 'fount_fa-paragraph',
__( '<div class="fount_icon_selector"><i class="fount_fa-paste"></i></div>', 'js_composer' ) => 'fount_fa-paste',
__( '<div class="fount_icon_selector"><i class="fount_fa-repeat"></i></div>', 'js_composer' ) => 'fount_fa-repeat',
__( '<div class="fount_icon_selector"><i class="fount_fa-rotate-left"></i></div>', 'js_composer' ) => 'fount_fa-rotate-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-rotate-right"></i></div>', 'js_composer' ) => 'fount_fa-rotate-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-save"></i></div>', 'js_composer' ) => 'fount_fa-save',
__( '<div class="fount_icon_selector"><i class="fount_fa-scissors"></i></div>', 'js_composer' ) => 'fount_fa-scissors',
__( '<div class="fount_icon_selector"><i class="fount_fa-strikethrough"></i></div>', 'js_composer' ) => 'fount_fa-strikethrough',
__( '<div class="fount_icon_selector"><i class="fount_fa-subscript"></i></div>', 'js_composer' ) => 'fount_fa-subscript',
__( '<div class="fount_icon_selector"><i class="fount_fa-superscript"></i></div>', 'js_composer' ) => 'fount_fa-superscript',
__( '<div class="fount_icon_selector"><i class="fount_fa-table"></i></div>', 'js_composer' ) => 'fount_fa-table',
__( '<div class="fount_icon_selector"><i class="fount_fa-text-height"></i></div>', 'js_composer' ) => 'fount_fa-text-height',
__( '<div class="fount_icon_selector"><i class="fount_fa-text-width"></i></div>', 'js_composer' ) => 'fount_fa-text-width',
__( '<div class="fount_icon_selector"><i class="fount_fa-th"></i></div>', 'js_composer' ) => 'fount_fa-th',
__( '<div class="fount_icon_selector"><i class="fount_fa-th-large"></i></div>', 'js_composer' ) => 'fount_fa-th-large',
__( '<div class="fount_icon_selector"><i class="fount_fa-th-list"></i></div>', 'js_composer' ) => 'fount_fa-th-list',
__( '<div class="fount_icon_selector"><i class="fount_fa-underline"></i></div>', 'js_composer' ) => 'fount_fa-underline',
__( '<div class="fount_icon_selector"><i class="fount_fa-undo"></i></div>', 'js_composer' ) => 'fount_fa-undo',
__( '<div class="fount_icon_selector"><i class="fount_fa-unlink"></i></div>', 'js_composer' ) => 'fount_fa-unlink',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-double-down"></i></div>', 'js_composer' ) => 'fount_fa-angle-double-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-double-left"></i></div>', 'js_composer' ) => 'fount_fa-angle-double-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-double-right"></i></div>', 'js_composer' ) => 'fount_fa-angle-double-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-double-up"></i></div>', 'js_composer' ) => 'fount_fa-angle-double-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-down"></i></div>', 'js_composer' ) => 'fount_fa-angle-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-left"></i></div>', 'js_composer' ) => 'fount_fa-angle-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-right"></i></div>', 'js_composer' ) => 'fount_fa-angle-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-angle-up"></i></div>', 'js_composer' ) => 'fount_fa-angle-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-down"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-left"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-o-down"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-o-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-o-left"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-o-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-o-right"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-o-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-o-up"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-o-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-right"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-circle-up"></i></div>', 'js_composer' ) => 'fount_fa-arrow-circle-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-down"></i></div>', 'js_composer' ) => 'fount_fa-arrow-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-left"></i></div>', 'js_composer' ) => 'fount_fa-arrow-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-right"></i></div>', 'js_composer' ) => 'fount_fa-arrow-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrow-up"></i></div>', 'js_composer' ) => 'fount_fa-arrow-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows"></i></div>', 'js_composer' ) => 'fount_fa-arrows',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-alt"></i></div>', 'js_composer' ) => 'fount_fa-arrows-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-h"></i></div>', 'js_composer' ) => 'fount_fa-arrows-h',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-v"></i></div>', 'js_composer' ) => 'fount_fa-arrows-v',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-down"></i></div>', 'js_composer' ) => 'fount_fa-caret-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-left"></i></div>', 'js_composer' ) => 'fount_fa-caret-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-right"></i></div>', 'js_composer' ) => 'fount_fa-caret-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-down"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-left"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-right"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-square-o-up"></i></div>', 'js_composer' ) => 'fount_fa-caret-square-o-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-caret-up"></i></div>', 'js_composer' ) => 'fount_fa-caret-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-circle-down"></i></div>', 'js_composer' ) => 'fount_fa-chevron-circle-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-circle-left"></i></div>', 'js_composer' ) => 'fount_fa-chevron-circle-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-circle-right"></i></div>', 'js_composer' ) => 'fount_fa-chevron-circle-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-circle-up"></i></div>', 'js_composer' ) => 'fount_fa-chevron-circle-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-down"></i></div>', 'js_composer' ) => 'fount_fa-chevron-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-left"></i></div>', 'js_composer' ) => 'fount_fa-chevron-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-right"></i></div>', 'js_composer' ) => 'fount_fa-chevron-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-chevron-up"></i></div>', 'js_composer' ) => 'fount_fa-chevron-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-hand-o-down"></i></div>', 'js_composer' ) => 'fount_fa-hand-o-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-hand-o-left"></i></div>', 'js_composer' ) => 'fount_fa-hand-o-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-hand-o-right"></i></div>', 'js_composer' ) => 'fount_fa-hand-o-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-hand-o-up"></i></div>', 'js_composer' ) => 'fount_fa-hand-o-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-long-arrow-down"></i></div>', 'js_composer' ) => 'fount_fa-long-arrow-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-long-arrow-left"></i></div>', 'js_composer' ) => 'fount_fa-long-arrow-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-long-arrow-right"></i></div>', 'js_composer' ) => 'fount_fa-long-arrow-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-long-arrow-up"></i></div>', 'js_composer' ) => 'fount_fa-long-arrow-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-down"></i></div>', 'js_composer' ) => 'fount_fa-toggle-down',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-left"></i></div>', 'js_composer' ) => 'fount_fa-toggle-left',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-right"></i></div>', 'js_composer' ) => 'fount_fa-toggle-right',
__( '<div class="fount_icon_selector"><i class="fount_fa-toggle-up"></i></div>', 'js_composer' ) => 'fount_fa-toggle-up',
__( '<div class="fount_icon_selector"><i class="fount_fa-arrows-alt"></i></div>', 'js_composer' ) => 'fount_fa-arrows-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-backward"></i></div>', 'js_composer' ) => 'fount_fa-backward',
__( '<div class="fount_icon_selector"><i class="fount_fa-compress"></i></div>', 'js_composer' ) => 'fount_fa-compress',
__( '<div class="fount_icon_selector"><i class="fount_fa-eject"></i></div>', 'js_composer' ) => 'fount_fa-eject',
__( '<div class="fount_icon_selector"><i class="fount_fa-expand"></i></div>', 'js_composer' ) => 'fount_fa-expand',
__( '<div class="fount_icon_selector"><i class="fount_fa-fast-backward"></i></div>', 'js_composer' ) => 'fount_fa-fast-backward',
__( '<div class="fount_icon_selector"><i class="fount_fa-fast-forward"></i></div>', 'js_composer' ) => 'fount_fa-fast-forward',
__( '<div class="fount_icon_selector"><i class="fount_fa-forward"></i></div>', 'js_composer' ) => 'fount_fa-forward',
__( '<div class="fount_icon_selector"><i class="fount_fa-pause"></i></div>', 'js_composer' ) => 'fount_fa-pause',
__( '<div class="fount_icon_selector"><i class="fount_fa-play"></i></div>', 'js_composer' ) => 'fount_fa-play',
__( '<div class="fount_icon_selector"><i class="fount_fa-play-circle"></i></div>', 'js_composer' ) => 'fount_fa-play-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-play-circle-o"></i></div>', 'js_composer' ) => 'fount_fa-play-circle-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-step-backward"></i></div>', 'js_composer' ) => 'fount_fa-step-backward',
__( '<div class="fount_icon_selector"><i class="fount_fa-step-forward"></i></div>', 'js_composer' ) => 'fount_fa-step-forward',
__( '<div class="fount_icon_selector"><i class="fount_fa-stop"></i></div>', 'js_composer' ) => 'fount_fa-stop',
__( '<div class="fount_icon_selector"><i class="fount_fa-youtube-play"></i></div>', 'js_composer' ) => 'fount_fa-youtube-play',
__( '<div class="fount_icon_selector"><i class="fount_fa-adn"></i></div>', 'js_composer' ) => 'fount_fa-adn',
__( '<div class="fount_icon_selector"><i class="fount_fa-android"></i></div>', 'js_composer' ) => 'fount_fa-android',
__( '<div class="fount_icon_selector"><i class="fount_fa-apple"></i></div>', 'js_composer' ) => 'fount_fa-apple',
__( '<div class="fount_icon_selector"><i class="fount_fa-behance"></i></div>', 'js_composer' ) => 'fount_fa-behance',
__( '<div class="fount_icon_selector"><i class="fount_fa-behance-square"></i></div>', 'js_composer' ) => 'fount_fa-behance-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-bitbucket"></i></div>', 'js_composer' ) => 'fount_fa-bitbucket',
__( '<div class="fount_icon_selector"><i class="fount_fa-bitbucket-square"></i></div>', 'js_composer' ) => 'fount_fa-bitbucket-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-bitcoin"></i></div>', 'js_composer' ) => 'fount_fa-bitcoin',
__( '<div class="fount_icon_selector"><i class="fount_fa-btc"></i></div>', 'js_composer' ) => 'fount_fa-btc',
__( '<div class="fount_icon_selector"><i class="fount_fa-codepen"></i></div>', 'js_composer' ) => 'fount_fa-codepen',
__( '<div class="fount_icon_selector"><i class="fount_fa-css3"></i></div>', 'js_composer' ) => 'fount_fa-css3',
__( '<div class="fount_icon_selector"><i class="fount_fa-delicious"></i></div>', 'js_composer' ) => 'fount_fa-delicious',
__( '<div class="fount_icon_selector"><i class="fount_fa-deviantart"></i></div>', 'js_composer' ) => 'fount_fa-deviantart',
__( '<div class="fount_icon_selector"><i class="fount_fa-digg"></i></div>', 'js_composer' ) => 'fount_fa-digg',
__( '<div class="fount_icon_selector"><i class="fount_fa-dribbble"></i></div>', 'js_composer' ) => 'fount_fa-dribbble',
__( '<div class="fount_icon_selector"><i class="fount_fa-dropbox"></i></div>', 'js_composer' ) => 'fount_fa-dropbox',
__( '<div class="fount_icon_selector"><i class="fount_fa-drupal"></i></div>', 'js_composer' ) => 'fount_fa-drupal',
__( '<div class="fount_icon_selector"><i class="fount_fa-empire"></i></div>', 'js_composer' ) => 'fount_fa-empire',
__( '<div class="fount_icon_selector"><i class="fount_fa-facebook"></i></div>', 'js_composer' ) => 'fount_fa-facebook',
__( '<div class="fount_icon_selector"><i class="fount_fa-facebook-square"></i></div>', 'js_composer' ) => 'fount_fa-facebook-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-flickr"></i></div>', 'js_composer' ) => 'fount_fa-flickr',
__( '<div class="fount_icon_selector"><i class="fount_fa-foursquare"></i></div>', 'js_composer' ) => 'fount_fa-foursquare',
__( '<div class="fount_icon_selector"><i class="fount_fa-ge"></i></div>', 'js_composer' ) => 'fount_fa-ge',
__( '<div class="fount_icon_selector"><i class="fount_fa-git"></i></div>', 'js_composer' ) => 'fount_fa-git',
__( '<div class="fount_icon_selector"><i class="fount_fa-git-square"></i></div>', 'js_composer' ) => 'fount_fa-git-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-github"></i></div>', 'js_composer' ) => 'fount_fa-github',
__( '<div class="fount_icon_selector"><i class="fount_fa-github-alt"></i></div>', 'js_composer' ) => 'fount_fa-github-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-github-square"></i></div>', 'js_composer' ) => 'fount_fa-github-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-gittip"></i></div>', 'js_composer' ) => 'fount_fa-gittip',
__( '<div class="fount_icon_selector"><i class="fount_fa-google"></i></div>', 'js_composer' ) => 'fount_fa-google',
__( '<div class="fount_icon_selector"><i class="fount_fa-google-plus"></i></div>', 'js_composer' ) => 'fount_fa-google-plus',
__( '<div class="fount_icon_selector"><i class="fount_fa-google-plus-square"></i></div>', 'js_composer' ) => 'fount_fa-google-plus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-hacker-news"></i></div>', 'js_composer' ) => 'fount_fa-hacker-news',
__( '<div class="fount_icon_selector"><i class="fount_fa-html5"></i></div>', 'js_composer' ) => 'fount_fa-html5',
__( '<div class="fount_icon_selector"><i class="fount_fa-instagram"></i></div>', 'js_composer' ) => 'fount_fa-instagram',
__( '<div class="fount_icon_selector"><i class="fount_fa-joomla"></i></div>', 'js_composer' ) => 'fount_fa-joomla',
__( '<div class="fount_icon_selector"><i class="fount_fa-jsfiddle"></i></div>', 'js_composer' ) => 'fount_fa-jsfiddle',
__( '<div class="fount_icon_selector"><i class="fount_fa-linkedin"></i></div>', 'js_composer' ) => 'fount_fa-linkedin',
__( '<div class="fount_icon_selector"><i class="fount_fa-linkedin-square"></i></div>', 'js_composer' ) => 'fount_fa-linkedin-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-linux"></i></div>', 'js_composer' ) => 'fount_fa-linux',
__( '<div class="fount_icon_selector"><i class="fount_fa-maxcdn"></i></div>', 'js_composer' ) => 'fount_fa-maxcdn',
__( '<div class="fount_icon_selector"><i class="fount_fa-openid"></i></div>', 'js_composer' ) => 'fount_fa-openid',
__( '<div class="fount_icon_selector"><i class="fount_fa-pagelines"></i></div>', 'js_composer' ) => 'fount_fa-pagelines',
__( '<div class="fount_icon_selector"><i class="fount_fa-pied-piper"></i></div>', 'js_composer' ) => 'fount_fa-pied-piper',
__( '<div class="fount_icon_selector"><i class="fount_fa-pied-piper-alt"></i></div>', 'js_composer' ) => 'fount_fa-pied-piper-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-pied-piper-square"></i></div>', 'js_composer' ) => 'fount_fa-pied-piper-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-pinterest"></i></div>', 'js_composer' ) => 'fount_fa-pinterest',
__( '<div class="fount_icon_selector"><i class="fount_fa-pinterest-square"></i></div>', 'js_composer' ) => 'fount_fa-pinterest-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-qq"></i></div>', 'js_composer' ) => 'fount_fa-qq',
__( '<div class="fount_icon_selector"><i class="fount_fa-ra"></i></div>', 'js_composer' ) => 'fount_fa-ra',
__( '<div class="fount_icon_selector"><i class="fount_fa-rebel"></i></div>', 'js_composer' ) => 'fount_fa-rebel',
__( '<div class="fount_icon_selector"><i class="fount_fa-reddit"></i></div>', 'js_composer' ) => 'fount_fa-reddit',
__( '<div class="fount_icon_selector"><i class="fount_fa-reddit-square"></i></div>', 'js_composer' ) => 'fount_fa-reddit-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-renren"></i></div>', 'js_composer' ) => 'fount_fa-renren',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-alt"></i></div>', 'js_composer' ) => 'fount_fa-share-alt',
__( '<div class="fount_icon_selector"><i class="fount_fa-share-alt-square"></i></div>', 'js_composer' ) => 'fount_fa-share-alt-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-skype"></i></div>', 'js_composer' ) => 'fount_fa-skype',
__( '<div class="fount_icon_selector"><i class="fount_fa-slack"></i></div>', 'js_composer' ) => 'fount_fa-slack',
__( '<div class="fount_icon_selector"><i class="fount_fa-soundcloud"></i></div>', 'js_composer' ) => 'fount_fa-soundcloud',
__( '<div class="fount_icon_selector"><i class="fount_fa-spotify"></i></div>', 'js_composer' ) => 'fount_fa-spotify',
__( '<div class="fount_icon_selector"><i class="fount_fa-stack-exchange"></i></div>', 'js_composer' ) => 'fount_fa-stack-exchange',
__( '<div class="fount_icon_selector"><i class="fount_fa-stack-overflow"></i></div>', 'js_composer' ) => 'fount_fa-stack-overflow',
__( '<div class="fount_icon_selector"><i class="fount_fa-steam"></i></div>', 'js_composer' ) => 'fount_fa-steam',
__( '<div class="fount_icon_selector"><i class="fount_fa-steam-square"></i></div>', 'js_composer' ) => 'fount_fa-steam-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-stumbleupon"></i></div>', 'js_composer' ) => 'fount_fa-stumbleupon',
__( '<div class="fount_icon_selector"><i class="fount_fa-stumbleupon-circle"></i></div>', 'js_composer' ) => 'fount_fa-stumbleupon-circle',
__( '<div class="fount_icon_selector"><i class="fount_fa-tencent-weibo"></i></div>', 'js_composer' ) => 'fount_fa-tencent-weibo',
__( '<div class="fount_icon_selector"><i class="fount_fa-trello"></i></div>', 'js_composer' ) => 'fount_fa-trello',
__( '<div class="fount_icon_selector"><i class="fount_fa-tumblr"></i></div>', 'js_composer' ) => 'fount_fa-tumblr',
__( '<div class="fount_icon_selector"><i class="fount_fa-tumblr-square"></i></div>', 'js_composer' ) => 'fount_fa-tumblr-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-twitter"></i></div>', 'js_composer' ) => 'fount_fa-twitter',
__( '<div class="fount_icon_selector"><i class="fount_fa-twitter-square"></i></div>', 'js_composer' ) => 'fount_fa-twitter-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-vimeo-square"></i></div>', 'js_composer' ) => 'fount_fa-vimeo-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-vine"></i></div>', 'js_composer' ) => 'fount_fa-vine',
__( '<div class="fount_icon_selector"><i class="fount_fa-vk"></i></div>', 'js_composer' ) => 'fount_fa-vk',
__( '<div class="fount_icon_selector"><i class="fount_fa-wechat"></i></div>', 'js_composer' ) => 'fount_fa-wechat',
__( '<div class="fount_icon_selector"><i class="fount_fa-weibo"></i></div>', 'js_composer' ) => 'fount_fa-weibo',
__( '<div class="fount_icon_selector"><i class="fount_fa-weixin"></i></div>', 'js_composer' ) => 'fount_fa-weixin',
__( '<div class="fount_icon_selector"><i class="fount_fa-windows"></i></div>', 'js_composer' ) => 'fount_fa-windows',
__( '<div class="fount_icon_selector"><i class="fount_fa-wordpress"></i></div>', 'js_composer' ) => 'fount_fa-wordpress',
__( '<div class="fount_icon_selector"><i class="fount_fa-xing"></i></div>', 'js_composer' ) => 'fount_fa-xing',
__( '<div class="fount_icon_selector"><i class="fount_fa-xing-square"></i></div>', 'js_composer' ) => 'fount_fa-xing-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-yahoo"></i></div>', 'js_composer' ) => 'fount_fa-yahoo',
__( '<div class="fount_icon_selector"><i class="fount_fa-youtube"></i></div>', 'js_composer' ) => 'fount_fa-youtube',
__( '<div class="fount_icon_selector"><i class="fount_fa-youtube-play"></i></div>', 'js_composer' ) => 'fount_fa-youtube-play',
__( '<div class="fount_icon_selector"><i class="fount_fa-youtube-square"></i></div>', 'js_composer' ) => 'fount_fa-youtube-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-ambulance"></i></div>', 'js_composer' ) => 'fount_fa-ambulance',
__( '<div class="fount_icon_selector"><i class="fount_fa-h-square"></i></div>', 'js_composer' ) => 'fount_fa-h-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-hospital-o"></i></div>', 'js_composer' ) => 'fount_fa-hospital-o',
__( '<div class="fount_icon_selector"><i class="fount_fa-medkit"></i></div>', 'js_composer' ) => 'fount_fa-medkit',
__( '<div class="fount_icon_selector"><i class="fount_fa-plus-square"></i></div>', 'js_composer' ) => 'fount_fa-plus-square',
__( '<div class="fount_icon_selector"><i class="fount_fa-stethoscope"></i></div>', 'js_composer' ) => 'fount_fa-stethoscope',
__( '<div class="fount_icon_selector"><i class="fount_fa-user-md"></i></div>', 'js_composer' ) => 'fount_fa-user-md',
__( '<div class="fount_icon_selector"><i class="fount_fa-wheelchair"></i></div>', 'js_composer' ) => 'fount_fa-wheelchair',
);

$target_arr = array(
	__( 'Same window', 'js_composer' ) => '_self',
	__( 'New window', 'js_composer' ) => "_blank"
);

$add_css_animation = array(
	'type' => 'dropdown',
	'heading' => __( 'CSS Animation', 'js_composer' ),
	'param_name' => 'css_animation',
	'admin_label' => true,
	'value' => array(
		__( 'No', 'js_composer' ) => '',
		__("Simple fade", "js_composer") => 'fount_fade_waypoint',
		__( 'Top to bottom', 'js_composer' ) => 'top-to-bottom',
		__( 'Bottom to top', 'js_composer' ) => 'bottom-to-top',
		__( 'Left to right', 'js_composer' ) => 'left-to-right',
		__( 'Right to left', 'js_composer' ) => 'right-to-left',
		__( 'Appear from center', 'js_composer' ) => "appear",
		__( 'Flip In X', 'js_composer' ) => "flipin_x",
		__( 'Flip In Y', 'js_composer' ) => "flipin_y",
	),
	'description' => __( 'Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'js_composer' )
);

//PIRENKO
$pirenko_colors_arr = array(__("Theme Button", "js_composer") => "theme_button",__("Theme Button - Inverted Colors", "js_composer") => "theme_button_inverted",__("Grey", "js_composer") => "wpb_button", __("Blue", "js_composer") => "btn-primary", __("Turquoise", "js_composer") => "btn-info", __("Green", "js_composer") => "btn-success", __("Orange", "js_composer") => "btn-warning", __("Red", "js_composer") => "btn-danger", __("Black", "js_composer") => "btn-inverse");

$yes_no_arr = array(__('Yes', "js_composer") => "yes",__('No', "js_composer") => "no");
$no_yes_arr = array(__('No', "js_composer") => "no",__('Yes', "js_composer") => "yes");
vc_map( array(
  "name" => __("Row", "js_composer"),
  "base" => "vc_row",
  "is_container" => true,
  "icon" => "icon-wpb-row",
  "show_settings_on_create" => false,
  "category" => __('Content', 'js_composer'),
  "description" => __('Place content elements inside the row', 'js_composer'),
  "params" => array(
    array(
        "type" => "dropdown",
        "heading" => __("Row type", "js_composer"),
        "param_name" => "bk_type",
        "value" => array(__("Optimized for colored sections (extra vertical padding)", "js_composer") => "full_width", __("Regular size (no extra vertical padding)", "js_composer") => "boxed_look", __("Full width (content is displayed with no horizontal size restrictions)", "js_composer") => "pirenko_super_width"),
        "description" => __("This option determines the general size of the whole row section.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __('Row anchor id', 'wpb'),
      "param_name" => "anchor_id",
      "description" => __("Optional - Useful for mini site pages.", "wpb")
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Row Height", "js_composer"),
        "param_name" => "row_height",
        "value" => array(
            __("Regular", 'wpb') => '',
            __("Force 100%", 'wpb') => 'forced_row',
            __('Force 100% and center content vertically', 'wpb') => 'forced_row vertical_forced_row',
        ),
        "description" => __("", "js_composer"),
    ),
    array(
      "type" => "textfield",
      "heading" => __('Bottom margin', 'wpb'),
      "param_name" => "margin_bottom",
      "description" => __("You can use px, em, %, etc. or enter just number and pixels will be used. ", "wpb")
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Background type", "js_composer"),
        "param_name" => "bk_element",
        "value" => array(
            __("Transparent", 'wpb') => '',
            __("Solid Color", 'wpb') => 'colored',
            __('Image', 'wpb') => 'image',
            __('Video', 'wpb') => 'video',
        ),
        "description" => __("", "js_composer"),
    ),
    array(
      "type" => "colorpicker",
      "heading" => __("Custom Background Color", "wpb"),
      "param_name" => "bg_color",
      "description" => __("Select backgound color for your row", "wpb"),
      "dependency" => Array('element' => "bk_element", 'value' => 'colored')
    ),
    array(
      "type" => "attach_image",
      "heading" => __('Background Image', 'wpb'),
      "param_name" => "bg_image",
      "description" => __("Select background image for your row", "wpb"),
      "dependency" => Array('element' => "bk_element", 'value' => 'image')
    ),
    array(
      "type" => "dropdown",
      "heading" => __('Background Repeat', 'wpb'),
      "param_name" => "bg_image_repeat",
      "value" => array(
                        __("Default", 'wpb') => '',
                        __("Cover", 'wpb') => 'cover',
                        __("Cover with fixed postion", 'wpb') => 'fixed_cover',
                        __('Cover with parallax effect', 'wpb') => 'parallax',
                        __('Contain', 'wpb') => 'contain',
                        __('No Repeat', 'wpb') => 'no-repeat'
                      ),
      "description" => __("Select how a background image will be repeated", "wpb"),
      "dependency" => Array('element' => "bk_element", 'value' => 'image')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Video MP4 file path", "js_composer"),
      "param_name" => "vid_mp4",
      "description" => __("", "js_composer"),
      "dependency" => Array('element' => "bk_element", 'value' => 'video')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Video webm file path", "js_composer"),
      "param_name" => "vid_webm",
      "description" => __("", "js_composer"),
      "dependency" => Array('element' => "bk_element", 'value' => 'video')
    ),
    array(
      "type" => "attach_image",
      "heading" => __('Video image fallback', 'wpb'),
      "param_name" => "vid_image",
      "description" => __("Will be shown if the browser does not support video (optional)", "wpb"),
      "dependency" => Array('element' => "bk_element", 'value' => 'video')
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Video parallax effect?", "js_composer"),
        "param_name" => "vid_parallax",
        "value" => $no_yes_arr,
        "description" => "",
        "dependency" => Array('element' => "bk_element", 'value' => 'video')
    ),
    array(
        "type" => "dropdown",
        "heading" => __("Text alignment", "js_composer"),
        "param_name" => "align",
        "value" => array("Left","Center","Right"),
        "description" => __("Can be overriden by individual elements settings", "js_composer")
    ),
    array(
       "type" => "colorpicker",
       "holder" => "div",
       "class" => "",
       "heading" => __("Text color"),
       "param_name" => "font_color",
       "value" => __(""),
       "description" => __("Optional")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
    )
  ),
  "js_view" => 'VcRowView'
) );

vc_map( array(
	'name' => __( 'Row', 'js_composer' ), //Inner Row
	'base' => 'vc_row_inner',
	'content_element' => false,
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'weight' => 1000,
	'show_settings_on_create' => false,
	'params' => array(
		array(
	      "type" => "textfield",
	      "heading" => __('Row anchor id', 'wpb'),
	      "param_name" => "anchor_id",
	      "description" => __("Optional - Useful for mini site pages.", "wpb")
	    ),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		),
	),
	'js_view' => 'VcRowView'
) );
vc_map( array(
	'name' => __( 'Column', 'js_composer' ),
	'base' => 'vc_column',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
    $add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		),
	),
	'js_view' => 'VcColumnView'
) );

vc_map( array(
	"name" => __( "Column", "js_composer" ),
	"base" => "vc_column_inner",
	"class" => "",
	"icon" => "",
	"wrapper_class" => "",
	"controls" => "full",
	"allowed_container_element" => false,
	"content_element" => false,
	"is_container" => true,
	"params" => array(
    $add_css_animation,
		array(
			"type" => "textfield",
			"heading" => __( "Extra class name", "js_composer" ),
			"param_name" => "el_class",
			"value" => "",
			"description" => __( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer" )
		),
	),
	"js_view" => 'VcColumnView'
) );

  //SPACER
  function prkwp_spacer_func( $atts ) {
     extract( shortcode_atts( array(
        'size' => '',
        'el_class' => ''
     ), $atts ) );
   
     return do_shortcode('[pirenko_spacer size="'.$size.'" el_class="'.$el_class.'"][/pirenko_spacer]');
  }
  add_shortcode( 'prkwp_spacer', 'prkwp_spacer_func' );

  vc_map( array(
     "name" => __("Vertical Spacer","fount_lang"),
     "base" => "prkwp_spacer",
     "class" => "fount_scodes_editor",
     "description" => __('Control vertical space between elements', 'js_composer'),
     "icon" => "icon-wpb-toggle-small-expand",
     "category" => __('Content',"fount_lang"),
     "params" => array(
      array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Vertical size in pixels (use negative values to pull elements up)","fount_lang"),
           "param_name" => "size",
           "value" => "10",
           "description" => "This element creates a vertical space between adjacent elements."
        ),
      array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer")
      ),
      array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

//STYLED TITLE
  function prkwp_styled_title_func( $atts ) {
     extract( shortcode_atts( array(
        'prk_in' => '',
        'align' => '',
        'text_color' => '',
        'title_size' => '',
        'use_italic' => '',
        'show_lines' => '',
        'fount_show_line' => '',
        'underlined' => '',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
   
     return do_shortcode('[prk_styled_title align="'.strtolower($align).'" text_color="'.strtolower($text_color).'" underlined="'.strtolower($underlined).'" title_size="'.strtolower($title_size).'" fount_show_line="'.strtolower($fount_show_line).'" use_italic="'.strtolower($use_italic).'" css_animation="'.$css_animation.'" el_class="'.$el_class.'"]'.$prk_in.'[/prk_styled_title]');
  }
  add_shortcode( 'prkwp_styled_title', 'prkwp_styled_title_func' );

  vc_map( array(
     "name" => __("Styled title","fount_lang"),
     "base" => "prkwp_styled_title",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-ui-separator-label",
     "description" => __('Display theme like titles', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
      array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Text","fount_lang"),
           "param_name" => "prk_in",
           "value" => "",
           "description" => ""
        ),
      array(
            "type" => "dropdown",
            "heading" => __("Alignment", "js_composer"),
            "param_name" => "align",
            "value" => array("Left","Center","Right"),
            "description" => ""
        ),
      array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Color","fount_lang"),
           "param_name" => "text_color",
           "value" => "",
           "description" => __("Optional - If blank the theme default headings color will be used","fount_lang")
        ),
      array(
            "type" => "dropdown",
            "heading" => __("Title size", "js_composer"),
            "param_name" => "title_size",
            "value" => array(__('Extra Large', "js_composer") => "h1",__('Large', "js_composer") => "h2",__('Medium', "js_composer") => "h3",__('Small', "js_composer") => "h4"),
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Italic font style?", "js_composer"),
            "param_name" => "use_italic",
            "value" => array("No","Yes"),
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Append lines to title?", "js_composer"),
            "param_name" => "fount_show_line",
            "value" => array(__('No', "js_composer") => "no",__('Yes, a thin line under', "js_composer") => "thin",__('Yes, a thick line under', "js_composer") => "thick",__('Yes, a thicker line under', "js_composer") => "thicker",__('Yes, two lines on the sides', "js_composer") => "double_lined"),
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Underline title?", "js_composer"),
            "param_name" => "underlined",
            "value" => array(__('No', "js_composer") => "",__('Yes, thin line', "js_composer") => "small_underline",__('Yes, thick line', "js_composer") => "large_underline"),
            "description" => __("", "js_composer")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )     
     )
  ));

/* Text Block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Text Block", "js_composer"),
  "base" => "vc_column_text",
  "icon" => "icon-wpb-layer-shape-text",
  "wrapper_class" => "clearfix",
  "category" => __('Content', 'js_composer'),
  "description" => __('A block of text with WYSIWYG editor', 'js_composer'),
  "params" => array(
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "heading" => __("Text", "js_composer"),
      "param_name" => "content",
      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

/* Latest tweets
---------------------------------------------------------- */
/*vc_map( array(
  "name" => __("Twitter Widget", "js_composer"),
  "base" => "vc_twitter",
  "icon" => 'icon-wpb-balloon-twitter-left',
  "category" => __('Social', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Twitter username", "js_composer"),
      "param_name" => "twitter_name",
      "admin_label" => true,
      "description" => __("Type in twitter profile name from which load tweets.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Tweets count", "js_composer"),
      "param_name" => "tweets_count",
      "admin_label" => true,
      "value" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
      "description" => __("How many recent tweets to load.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );*/

/* Separator (Divider)
---------------------------------------------------------- */
vc_map( array(
  "name"    => __("Separator", "js_composer"),
  "base"    => "prk_line",
  'icon'    => 'icon-wpb-ui-separator',
  "show_settings_on_create" => false,
  "category"  => __('Content', 'js_composer'),
  "description" => __('Horizontal separator line', 'js_composer'),
  "params" => array(
    	array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Divider color","fount_lang"),
           "param_name" => "color",
           "value" => "",
           "description" => __("Optional - If blank the theme default headings color will be used","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Divider icon","fount_lang"),
           "param_name" => "icon",
           "value" => "",
           "description" => __("Optional - Example: fount_fa-cab. For a complete list visit <a href='http://www.pirenko.com/assets/fount/icons.html' target='_blank'>http://www.pirenko.com/assets/fount/icons.html</a> or check the theme documentation.","fount_lang","fount_lang")
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon color","fount_lang"),
           "param_name" => "icon_color",
           "value" => "",
           "description" => __("","fount_lang"),
           "dependency" => Array('element' => "icon", 'not_empty' => true)
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon background color","fount_lang"),
           "param_name" => "icon_bk_color",
           "value" => "#FFFFFF",
           "description" => __("","fount_lang"),
           "dependency" => Array('element' => "icon", 'not_empty' => true)
        ),
        array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer"),
      	),
      	$add_css_animation,
	    array(
	      "type" => "textfield",
	      "heading" => __("Extra class name", "js_composer"),
	      "param_name" => "el_class",
	      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
	    )
    )
) );

/* Separator (Divider)
---------------------------------------------------------- */
vc_map( array(
  "name"    => __("Separator", "js_composer"),
  "base"    => "vc_separator",
  'icon'    => 'icon-wpb-ui-separator',
  "show_settings_on_create" => false,
  "category"  => __('Content', 'js_composer'),
  "controls"  => 'popup_delete',
  "description" => __('Horizontal separator line', 'js_composer'),
) );

/* Textual block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Separator with Text", "js_composer"),
  "base" => "vc_text_separator",
  "icon" => "icon-wpb-ui-separator-label",
  "category" => __('Content', 'js_composer'),
  "description" => __('Horizontal separator line with heading', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "js_composer"),
      "param_name" => "title",
      "holder" => "div",
      "value" => __("Title", "js_composer"),
      "description" => __("Separator title.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Title position", "js_composer"),
      "param_name" => "title_align",
      "value" => array(__('Align center', "js_composer") => "separator_align_center", __('Align left', "js_composer") => "separator_align_left", __('Align right', "js_composer") => "separator_align_right"),
      "description" => __("Select title location.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "js_view" => 'VcTextSeparatorView'
) );

//BLOCKQUOTE
  function bquote_func( $atts ) {
     extract( shortcode_atts( array(
        'prk_in' => '',
        'author' => '',
        'after_author' => '',
        'type' => '',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
   
     return do_shortcode("<div class='wpb_content_element'>[pirenko_blockquote author='{$author}' after_author='{$after_author}' type='{$type}' css_animation='{$css_animation}' el_class='{$el_class}']{$prk_in}[/pirenko_blockquote]</div>");
  }
  add_shortcode( 'bquote', 'bquote_func' );

  vc_map( array(
     "name" => __("Blockquote","fount_lang"),
     "base" => "bquote",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-quote-prk",
     "description" => __('Stylish quotes that stand out', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
      array(
            "type" => "dropdown",
            "heading" => __("Blockquote type", "js_composer"),
            "param_name" => "type",
             "value" => array(
              __('Tooltip', "js_composer") => "plain", 
              __('Cropped corners', "js_composer") => "cropped_corners",
              __('Colored background', "js_composer") => "colored_background"
            ),
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Author","fount_lang"),
           "param_name" => "author",
           "value" => __("","fount_lang"),
           "description" => __("","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("After author text","fount_lang"),
           "param_name" => "after_author",
           "value" => __("","fount_lang"),
           "description" => __("Optional","fount_lang")
        ),
        array(
           "type" => "textarea",
           "holder" => "div",
           "class" => "",
           "heading" => __("Content","fount_lang"),
           "param_name" => "prk_in",
           "value" => __("","fount_lang"),
           "description" => __("","fount_lang")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

/* Message box
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Message Box", "js_composer"),
  "base" => "vc_message",
  "icon" => "icon-wpb-information-white",
  "wrapper_class" => "alert",
  "category" => __('Content', 'js_composer'),
  "description" => __('Notification box', 'js_composer'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Message box type", "js_composer"),
      "param_name" => "color",
      "value" => array(__('Informational', "js_composer") => "alert-info", __('Warning', "js_composer") => "alert-block", __('Success', "js_composer") => "alert-success", __('Error', "js_composer") => "alert-error"),
      "description" => __("Select message type.", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("<p>I am message box. Click edit button to change this text.</p>", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "js_view" => 'VcMessageView'
) );



/* Toggle (FAQ)
---------------------------------------------------------- */
vc_map( array(
  "name" => __("FAQ", "js_composer"),
  "base" => "vc_toggle",
  "icon" => "icon-wpb-toggle-small-expand",
  "category" => __('Content', 'js_composer'),
  "description" => __('Toggle element for Q&A block', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "holder" => "h4",
      "class" => "toggle_title",
      "heading" => __("Toggle title", "js_composer"),
      "param_name" => "title",
      "value" => __("Toggle title", "js_composer"),
      "description" => __("Toggle block title.", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "toggle_content",
      "heading" => __("Toggle content", "js_composer"),
      "param_name" => "content",
      "value" => __("<p>Toggle content goes here, click edit button to change this text.</p>", "js_composer"),
      "description" => __("Toggle block content.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Default state", "js_composer"),
      "param_name" => "open",
      "value" => array(__("Closed", "js_composer") => "false", __("Open", "js_composer") => "true"),
      "description" => __('Select "Open" if you want toggle to be open by default.', "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "js_view" => 'VcToggleView'
) );

/* Image Carousel
---------------------------------------------------------- */
vc_map( array(
    "name" => __("Image Carousel", "js_composer"),
    "base" => "vc_images_carousel",
    "icon" => "icon-wpb-images-carousel",
    "category" => __('Content', 'js_composer'),
    "description" => __('Animated carousel with images', 'js_composer'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "js_composer"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
        ),
        array(
            "type" => "attach_images",
            "heading" => __("Images", "js_composer"),
            "param_name" => "images",
            "value" => "",
            "description" => __("Select images from media library.", "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Image size", "js_composer"),
            "param_name" => "img_size",
            "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("On click", "js_composer"),
            "param_name" => "onclick",
            "value" => array(__("Open prettyPhoto", "js_composer") => "link_image", __("Do nothing", "js_composer") => "link_no", __("Open custom link", "js_composer") => "custom_link"),
            "description" => __("What to do when slide is clicked?", "js_composer")
        ),
        array(
            "type" => "exploded_textarea",
            "heading" => __("Custom links", "js_composer"),
            "param_name" => "custom_links",
            "description" => __('Enter links for each slide here. Divide links with linebreaks (Enter).', 'js_composer'),
            "dependency" => Array('element' => "onclick", 'value' => array('custom_link'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Custom link target", "js_composer"),
            "param_name" => "custom_links_target",
            "description" => __('Select where to open  custom links.', 'js_composer'),
            "dependency" => Array('element' => "onclick", 'value' => array('custom_link')),
            'value' => $target_arr
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Slider mode", "js_composer"),
            "param_name" => "mode",
            "value" => array(__("Horizontal", "js_composer") => 'horizontal', __("Vertical", "js_composer") => 'vertical'),
            "description" => __("Slides will be positioned horizontally (for horizontal swipes) or vertically (for vertical swipes)", "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Slider speed", "js_composer"),
            "param_name" => "speed",
            "value" => "5000",
            "description" => __("Duration of animation between slides (in ms)", "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Slides per view", "js_composer"),
            "param_name" => "slides_per_view",
            "value" => "1",
            "description" => __("Set numbers of slides you want to display at the same time on slider's container for carousel mode. Also supports for 'auto' value, in this case it will fit slides depending on container's width. 'auto' mode doesn't compatible with loop mode.", "js_composer")
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Slider autoplay", "js_composer"),
            "param_name" => "autoplay",
            "description" => __("Enables autoplay mode.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Hide pagination control", "js_composer"),
            "param_name" => "hide_pagination_control",
            "description" => __("If YES pagination control will be removed .", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Hide prev/next buttons", "js_composer"),
            "param_name" => "hide_prev_next_buttons",
            "description" => __("If \"YES\" prev/next control will be removed", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Partial view", "js_composer"),
            "param_name" => "partial_view",
            "description" => __("If \"YES\" part of the next slide will be visible on the right side.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Slider loop", "js_composer"),
            "param_name" => "wrap",
            "description" => __("Enables loop mode.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
    )
) );

/* Tabs
---------------------------------------------------------- */
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
vc_map( array(
  "name"  => __("Tabs", "js_composer"),
  "base" => "vc_tabs",
  "show_settings_on_create" => false,
  "is_container" => true,
  "icon" => "icon-wpb-ui-tab-content",
  "category" => __('Content', 'js_composer'),
  "description" => __('Tabbed content', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate tabs", "js_composer"),
      "param_name" => "interval",
      "value" => array(__("Disable", "js_composer") => 0, 3, 5, 10, 15),
      "description" => __("Auto rotate tabs each X seconds.", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "custom_markup" => '
  <div class="wpb_tabs_holder wpb_holder vc_container_for_children">
  <ul class="tabs_controls">
  </ul>
  %content%
  </div>'
  ,
  'default_content' => '
  [vc_tab title="'.__('Tab 1','js_composer').'" tab_id="'.$tab_id_1.'"][/vc_tab]
  [vc_tab title="'.__('Tab 2','js_composer').'" tab_id="'.$tab_id_2.'"][/vc_tab]
  ',
  "js_view" => ($vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35')
) );

/* Tour section
---------------------------------------------------------- */
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
WPBMap::map( 'vc_tour', array(
  "name" => __("Tour Section", "js_composer"),
  "base" => "vc_tour",
  "show_settings_on_create" => false,
  "is_container" => true,
  "container_not_allowed" => true,
  "icon" => "icon-wpb-ui-tab-content-vertical",
  "category" => __('Content', 'js_composer'),
  "wrapper_class" => "clearfix",
  "description" => __('Tabbed tour section', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "js_composer"),
      "param_name" => "interval",
      "value" => array(__("Disable", "js_composer") => 0, 3, 5, 10, 15),
      "description" => __("Auto rotate slides each X seconds.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "custom_markup" => '  
  <div class="wpb_tabs_holder wpb_holder clearfix vc_container_for_children">
  <ul class="tabs_controls">
  </ul>
  %content%
  </div>'
  ,
  'default_content' => '
  [vc_tab title="'.__('Slide 1','js_composer').'" tab_id="'.$tab_id_1.'"][/vc_tab]
  [vc_tab title="'.__('Slide 2','js_composer').'" tab_id="'.$tab_id_2.'"][/vc_tab]
  ',
  "js_view" => ($vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35')
) );

vc_map( array(
  "name" => __("Tab", "js_composer"),
  "base" => "vc_tab",
  "allowed_container_element" => 'vc_row',
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "js_composer"),
      "param_name" => "title",
      "description" => __("Tab title.", "js_composer")
    ),
    array(
      "type" => "tab_id",
      "heading" => __("Tab ID", "js_composer"),
      "param_name" => "tab_id"
    )
  ),
  'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
) );

/* Accordion block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Accordion", "js_composer"),
  "base" => "vc_accordion",
  "show_settings_on_create" => false,
  "is_container" => true,
  "icon" => "icon-wpb-ui-accordion",
  "category" => __('Content', 'js_composer'),
  "description" => __('jQuery UI accordion', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Active tab", "js_composer"),
      "param_name" => "active_tab",
      "description" => __("Enter tab number to be active on load or enter false to collapse all tabs.", "js_composer")
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Allow collapsible all", "js_composer"),
      "param_name" => "collapsible",
      "description" => __("Select checkbox to allow for all sections to be be collapsible.", "js_composer"),
      "value" => Array(__("Allow", "js_composer") => 'yes')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "custom_markup" => '
  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
  %content%
  </div>
  <div class="tab_controls">
  <button class="add_tab" title="'.__("Add accordion section", "js_composer").'">'.__("Add accordion section", "js_composer").'</button>
  </div>
  ',
  'default_content' => '
  [vc_accordion_tab title="'.__('Section 1', "js_composer").'"][/vc_accordion_tab]
  [vc_accordion_tab title="'.__('Section 2', "js_composer").'"][/vc_accordion_tab]
  ',
  'js_view' => 'VcAccordionView'
) );
vc_map( array(
  "name" => __("Accordion Section", "js_composer"),
  "base" => "vc_accordion_tab",
  "allowed_container_element" => 'vc_row',
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "js_composer"),
      "param_name" => "title",
      "description" => __("Accordion section title.", "js_composer")
    ),
  ),
  'js_view' => 'VcAccordionTabView'
) );

/* Teaser grid
 * @deprecated please use vc_posts_grid
 ---------------------------------------------------------- */
vc_map( array(
  "name" => __("Teaser (posts) Grid", "js_composer"),
  "base" => "vc_teaser_grid",
  "content_element" => false,
  "icon" => "icon-wpb-application-icon-large",
  "category" => __('Content', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Columns count", "js_composer"),
      "param_name" => "grid_columns_count",
      "value" => array(4, 3, 2, 1),
      "admin_label" => true,
      "description" => __("Select columns count.", "js_composer")
    ),
    array(
      "type" => "posttypes",
      "heading" => __("Post types", "js_composer"),
      "param_name" => "grid_posttypes",
      "description" => __("Select post types to populate posts from.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Teasers count", "js_composer"),
      "param_name" => "grid_teasers_count",
      "description" => __('How many teasers to show? Enter number or word "All".', "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Content", "js_composer"),
      "param_name" => "grid_content",
      "value" => array(__("Teaser (Excerpt)", "js_composer") => "teaser", __("Full Content", "js_composer") => "content"),
      "description" => __("Teaser layout template.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Layout", "js_composer"),
      "param_name" => "grid_layout",
      "value" => array(__("Title + Thumbnail + Text", "js_composer") => "title_thumbnail_text", __("Thumbnail + Title + Text", "js_composer") => "thumbnail_title_text", __("Thumbnail + Text", "js_composer") => "thumbnail_text", __("Thumbnail + Title", "js_composer") => "thumbnail_title", __("Thumbnail only", "js_composer") => "thumbnail", __("Title + Text", "js_composer") => "title_text"),
      "description" => __("Teaser layout.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link", "js_composer"),
      "param_name" => "grid_link",
      "value" => array(__("Link to post", "js_composer") => "link_post", __("Link to bigger image", "js_composer") => "link_image", __("Thumbnail to bigger image, title to post", "js_composer") => "link_image_post", __("No link", "js_composer") => "link_no"),
      "description" => __("Link type.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link target", "js_composer"),
      "param_name" => "grid_link_target",
      "value" => $target_arr,
      "dependency" => Array('element' => "grid_link", 'value' => array('link_post', 'link_image_post'))
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Teaser grid layout", "js_composer"),
      "param_name" => "grid_template",
      "value" => array(__("Grid", "js_composer") => "grid", __("Grid with filter", "js_composer") => "filtered_grid", __("Carousel", "js_composer") => "carousel"),
      "description" => __("Teaser layout template.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Layout mode", "js_composer"),
      "param_name" => "grid_layout_mode",
      "value" => array(__("Fit rows", "js_composer") => "fitRows", __('Masonry', "js_composer") => 'masonry'),
      "dependency" => Array('element' => 'grid_template', 'value' => array('filtered_grid', 'grid')),
      "description" => __("Teaser layout template.", "js_composer")
    ),
    array(
      "type" => "taxonomies",
      "heading" => __("Taxonomies", "js_composer"),
      "param_name" => "grid_taxomonies",
      "dependency" => Array('element' => 'grid_template' /*, 'not_empty' => true*/, 'value' => array('filtered_grid'), 'callback' => 'wpb_grid_post_types_for_taxonomies_handler'),
      "description" => __("Select taxonomies from.", "js_composer") //TODO: Change description
    ),
    array(
      "type" => "textfield",
      "heading" => __("Thumbnail size", "js_composer"),
      "param_name" => "grid_thumb_size",
      "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "js_composer")
    ),  
    array(
      "type" => "textfield",
      "heading" => __("Post/Page IDs", "js_composer"),
      "param_name" => "posts_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,) to retrieve only them. Use this in conjunction with "Post types" field.', "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Exclude Post/Page IDs", "js_composer"),
      "param_name" => "posts_not_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,) to exclude them from query.', "js_composer")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Categories", "js_composer"),
      "param_name" => "grid_categories",
      "description" => __("If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter).", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "js_composer"),
      "param_name" => "orderby",
      "value" => array( "", __("Date", "js_composer") => "date", __("ID", "js_composer") => "ID", __("Author", "js_composer") => "author", __("Title", "js_composer") => "title", __("Modified", "js_composer") => "modified", __("Random", "js_composer") => "rand", __("Comment count", "js_composer") => "comment_count", __("Menu order", "js_composer") => "menu_order" ),
      "description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order way", "js_composer"),
      "param_name" => "order",
      "value" => array( __("Descending", "js_composer") => "DESC", __("Ascending", "js_composer") => "ASC" ),
      "description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

/* Posts Grid
---------------------------------------------------------- */
$vc_layout_sub_controls = array(
    array('link_post', __("Link to post", "js_composer")),
    array("no_link", __("No link", "js_composer")),
    array("link_image", __("Link to bigger image", "js_composer"))
);
vc_map( array(
    "name" => __("Posts Grid", "js_composer"),
    "base" => "vc_posts_grid",
    "is_container" => true,
    "icon" => "icon-wpb-application-icon-large",
    "description" => __('Posts in grid view', 'js_composer'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "js_composer"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
        ),
        array(
            "type" => "loop",
            "heading" => __("Grids content", "js_composer"),
            "param_name" => "loop",
            'settings' => array(
                'size' => array('hidden' => false, 'value' => 10),
                'order_by' => array('value' => 'date'),
            ),
            "description" => __("Create WordPress loop, to populate content from your site.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Columns count", "js_composer"),
            "param_name" => "grid_columns_count",
            "value" => array(6, 4, 3, 2, 1),
            "admin_label" => true,
            "description" => __("Select columns count.", "js_composer")
        ),
        array(
            "type" => "sorted_list",
            "heading" => __("Teaser layout", "js_composer"),
            "param_name" => "grid_layout",
            "description" => __("Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.", "js_composer"),
            "value" => "title,image,text",
            "options" => array(
                array('image', __('Thumbnail', "js_composer"), $vc_layout_sub_controls),
                array( 'title', __('Title', "js_composer"), $vc_layout_sub_controls),
                array('text', __('Text', "js_composer"), array(
                    array('excerpt', __('Teaser/Excerpt', "js_composer")),
                    array('text', __('Full content', "js_composer"))
                )),
                array('link', __('Read more link', "js_composer"))
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Link target", "js_composer"),
            "param_name" => "grid_link_target",
            "value" => $target_arr,
            // "dependency" => Array('element' => "grid_link", 'value' => array('link_post', 'link_image_post'))
        ),
        array(
            "type" => "checkbox",
            "heading" => __("Show filter", "js_composer"),
            "param_name" => "filter",
            "value" => array(__("Yes, please", "js_composer") => "yes"),
            "description" => __("Select this to place animated category filter to your posts grid.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Layout mode", "js_composer"),
            "param_name" => "grid_layout_mode",
            "value" => array(__("Fit rows", "js_composer") => "fitRows", __('Masonry', "js_composer") => 'masonry'),
            "description" => __("Teaser layout template.", "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Thumbnail size", "js_composer"),
            "param_name" => "grid_thumb_size",
            "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
)
// 'html_template' => dirname(__DIR__).'/composer/shortcodes_templates/vc_posts_grid.php'
) );

/* Carousel
---------------------------------------------------------- */
vc_map( array(
    "name" => __("Carousel", 'vc_extend'),
    "base" => "vc_carousel",
    "class" => "",
    "icon" => "icon-wpb-vc_carousel",
    "category" => __('Content', 'js_composer'),
    "description" => __('Animated carousel with posts', 'js_composer'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "js_composer"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
        ),
        array(
            "type" => "loop",
            "heading" => __("Carousel content", "js_composer"),
            "param_name" => "posts_query",
            'settings' => array(
                'size' => array('hidden' => false, 'value' => 10),
                'order_by' => array('value' => 'date')
            ),
            "description" => __("Create WordPress loop, to populate content from your site.", "js_composer")
        ),
        array(
            "type" => "sorted_list",
            "heading" => __("Teaser layout", "js_composer"),
            "param_name" => "layout",
            "description" => __("Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.", "js_composer"),
            "value" => "title,image,text",
            "options" => array(
                array('image', __('Thumbnail', "js_composer"), $vc_layout_sub_controls),
                array( 'title', __('Title', "js_composer"), $vc_layout_sub_controls),
                array('text', __('Text', "js_composer"), array(
                        array('excerpt', __('Teaser/Excerpt', "js_composer")),
                        array('text', __('Full content', "js_composer"))
                    )),
                array('link', __('Read more link', "js_composer"))
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Link target", "js_composer"),
            "param_name" => "link_target",
            "value" => $target_arr,
            // "dependency" => Array('element' => "link", 'value' => array('link_post', 'link_image_post', 'link_image'))
        ),
        array(
            "type" => "textfield",
            "heading" => __("Thumbnail size", "js_composer"),
            "param_name" => "thumb_size",
            "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Slider speed", "js_composer"),
            "param_name" => "speed",
            "value" => "5000",
            "description" => __("Duration of animation between slides (in ms)", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Slider mode", "js_composer"),
            "param_name" => "mode",
            "value" => array(__("Horizontal", "js_composer") => 'horizontal', __("Vertical", "js_composer") => 'vertical'),
            "description" => __("Slides will be positioned horizontally (for horizontal swipes) or vertically (for vertical swipes)", "js_composer")
        ),
        array(
            "type" => "textfield",
            "heading" => __("Slides per view", "js_composer"),
            "param_name" => "slides_per_view",
            "value" => "4",
            "description" => __("Set numbers of slides you want to display at the same time on slider's container for carousel mode. Also supports for 'auto' value, in this case it will fit slides depending on container's width. 'auto' mode doesn't compatible with loop mode.", "js_composer")
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Slider autoplay", "js_composer"),
            "param_name" => "autoplay",
            "description" => __("Enables autoplay mode.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Hide pagination control", "js_composer"),
            "param_name" => "hide_pagination_control",
            "description" => __("If YES pagination control will be removed .", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Hide prev/next buttons", "js_composer"),
            "param_name" => "hide_prev_next_buttons",
            "description" => __("If \"YES\" prev/next control will be removed", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Partial view", "js_composer"),
            "param_name" => "partial_view",
            "description" => __("If \"YES\" part of the next slide will be visible on the right side.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => 'checkbox',
            "heading" => __("Slider loop", "js_composer"),
            "param_name" => "wrap",
            "description" => __("Enables loop mode.", "js_composer"),
            "value" => Array(__("Yes, please", "js_composer") => 'yes')
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
    )
));


/* Posts slider
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Posts Slider", "js_composer"),
  "base" => "vc_posts_slider",
  "icon" => "icon-wpb-slideshow",
  "category" => __('Content', 'js_composer'),
  "description" => __('Slider with WP Posts', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Slider type", "js_composer"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Flex slider fade", "js_composer") => "flexslider_fade", __("Flex slider slide", "js_composer") => "flexslider_slide", __("Nivo slider", "js_composer") => "nivo"),
      "description" => __("Select slider type.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Slides count", "js_composer"),
      "param_name" => "count",
      "description" => __('How many slides to show? Enter number or word "All".', "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "js_composer"),
      "param_name" => "interval",
      "value" => array(3, 5, 10, 15, __("Disable", "js_composer") => 0),
      "description" => __("Auto rotate slides each X seconds.", "js_composer")
    ),
    array(
      "type" => "posttypes",
      "heading" => __("Post types", "js_composer"),
      "param_name" => "posttypes",
      "description" => __("Select post types to populate posts from.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Description", "js_composer"),
      "param_name" => "slides_content",
      "value" => array(__("No description", "js_composer") => "", __("Teaser (Excerpt)", "js_composer") => "teaser" ),
      "description" => __("Some sliders support description text, what content use for it?", "js_composer"),
      "dependency" => Array('element' => "type", 'value' => array('flexslider_fade', 'flexslider_slide')),
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Output post title?", "js_composer"),
      "param_name" => "slides_title",
      "description" => __("If selected, title will be printed before the teaser text.", "js_composer"),
      "value" => Array(__("Yes, please", "js_composer") => true),
      "dependency" => Array('element' => "slides_content", 'value' => array('teaser')),
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link", "js_composer"),
      "param_name" => "link",
      "value" => array(__("Link to post", "js_composer") => "link_post", __("Link to bigger image", "js_composer") => "link_image", __("Open custom link", "js_composer") => "custom_link", __("No link", "js_composer") => "link_no"),
      "description" => __("Link type.", "js_composer")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Custom links", "js_composer"),
      "param_name" => "custom_links",
      "dependency" => Array('element' => "link", 'value' => 'custom_link'),
      "description" => __('Enter links for each slide here. Divide links with linebreaks (Enter).', 'js_composer')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Thumbnail size", "js_composer"),
      "param_name" => "thumb_size",
      "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Post/Page IDs", "js_composer"),
      "param_name" => "posts_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,), to retrieve only them. Use this in conjunction with "Post types" field.', "js_composer")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Categories", "js_composer"),
      "param_name" => "categories",
      "description" => __("If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter).", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "js_composer"),
      "param_name" => "orderby",
      "value" => array( "", __("Date", "js_composer") => "date", __("ID", "js_composer") => "ID", __("Author", "js_composer") => "author", __("Title", "js_composer") => "title", __("Modified", "js_composer") => "modified", __("Random", "js_composer") => "rand", __("Comment count", "js_composer") => "comment_count", __("Menu order", "js_composer") => "menu_order" ),
      "description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "js_composer"),
      "param_name" => "order",
      "value" => array( __("Descending", "js_composer") => "DESC", __("Ascending", "js_composer") => "ASC" ),
      "description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

  //TOGGLE

  vc_map( array(
     "name" => __("Toggle","fount_lang"),
     "base" => "prk_accordion",
     "class" => "fount_scodes_editor",
     "description" => __('Jquery UI toggle', 'js_composer'),
     "icon" => "icon-wpb-ui-accordion",
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title","fount_lang"),
           "param_name" => "title",
           "value" => "",
           "description" => ""
        ),
        array(
           "type" => "textarea_html",
            "holder" => "div",
            "class" => "messagebox_text",
            "heading" => __("Toggle text", "js_composer"),
            "param_name" => "content",
            "value" => __("<p>Toggle content goes here, click edit button to change this text.</p>", "js_composer"),
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

    //COUNTER
  function prkwp_counter_func( $atts ) {
     extract( shortcode_atts( array(
        'counter_number' => '',
        'prk_in' => '',
        'align' => '',
        'image' => '',
        'serv_image' => '',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
      if ($align=="center_smaller")
      {
        $align="prk_counter_center fount_smaller_counter";
      }
      else
      {
        $align="prk_counter_center";
      }
    $image_attributes = wp_get_attachment_image_src( $serv_image,'full' );
     return do_shortcode('[prk_counter counter_number="'.$counter_number.'" align="'.$align.'" image="'.$image.'" serv_image="'.$image_attributes[0].'" css_animation="'.$css_animation.'" el_class="'.$el_class.'"]'.$prk_in.'[/prk_counter]');
  }
  add_shortcode( 'prkwp_counter', 'prkwp_counter_func' );
  vc_map( array(
     "name" => __("Counter","fount_lang"),
     "base" => "prkwp_counter",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-call-to-action",
     "description" => __('Easy animated counter', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Counter final number","fount_lang"),
           "param_name" => "counter_number",
           "value" => "3",
           "description" => "The value that will be displayed after the animation ends"
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Size", "js_composer"),
            "param_name" => "align",
            "value" => array(
              __('Regular', "js_composer") => "center",
              __('Smaller', "js_composer") => "center_smaller"
            ),
            "description" => ""
        ),
        array(
          "type" => "attach_image",
          "heading" => __("Counter image", "js_composer"),
          "param_name" => "serv_image",
          "value" => "",
          "description" => __("Select image from media library. Has priority over icon class value below.", "js_composer")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Counter icon","fount_lang"),
           "param_name" => "image",
           "value" => "",
           "description" => __("Example: fount_fa-cab. For a complete list visit <a href='http://www.pirenko.com/assets/fount/icons.html' target='_blank'>http://www.pirenko.com/assets/fount/icons.html</a> or check the theme documentation.","fount_lang")
        ),
        array(
           "type" => "textarea",
           "holder" => "div",
           "class" => "",
           "heading" => __("Content","fount_lang"),
           "param_name" => "prk_in",
           "value" => "",
           "description" => "Will be displayed under the animated counter"
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ) );

  //SERVICES
  function prkwp_service_func( $atts ) {
     extract( shortcode_atts( array(
        'prk_in' => '',
        'name' => '',
        'align' => '',
        'image' => '',
        'bk_color' => '',
        'link' => '',
        'serv_image' => '',
        'link_text' => '',
        'text_color' => '',
        'icon_color' => '',
        'icon_up_color' => '',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
      if ($align=="center")
      {
        $align="prk_service_center";
      }
      else if ($align=="center_smaller")
      {
        $align="prk_service_center fount_smaller_service";
      }
      else if ($align=="right_bigger")
      {
        $align="prk_service_right fount_bigger_service";
      }
      else if ($align=="right")
      {
        $align="prk_service_right";
      }
      else if ($align=="left_bigger")
      {
        $align="prk_service_left fount_bigger_service";
      }
      else
      {
        $align="prk_service_left";
      }
    $image_attributes = wp_get_attachment_image_src( $serv_image,'full' );
     return do_shortcode('[prk_service name="'.$name.'" align="'.$align.'" text_color="'.$text_color.'" icon_up_color="'.$icon_up_color.'" icon_color="'.$icon_color.'" image="'.$image.'" serv_image="'.$image_attributes[0].'" link="'.$link.'" bk_color="'.$bk_color.'" link_text="'.$link_text.'" css_animation="'.$css_animation.'" el_class="'.$el_class.'"]'.$prk_in.'[/prk_service]');
  }
  add_shortcode( 'prkwp_service', 'prkwp_service_func' );
  vc_map( array(
     "name" => __("Service","fount_lang"),
     "base" => "prkwp_service",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-call-to-action",
     "description" => __('Easy information blocks with images', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title","fount_lang"),
           "param_name" => "name",
           "value" => "",
           "description" => ""
        ),
        array(
          "type" => "attach_image",
          "heading" => __("Service image", "js_composer"),
          "param_name" => "serv_image",
          "value" => "",
          "description" => __("Select image from media library. Has priority over icon class value below.", "js_composer")
    ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon class","fount_lang"),
           "param_name" => "image",
           "value" => "",
           "description" => __("Example: fount_fa-cab. For a complete list visit <a href='http://www.pirenko.com/assets/fount/icons.html' target='_blank'>http://www.pirenko.com/assets/fount/icons.html</a> or check the theme documentation.","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Alignment", "js_composer"),
            "param_name" => "align",
            "value" => array(
              __('Left', "js_composer") => "left_bigger",
              __('Left with smaller icon/image', "js_composer") => "left",
              __('Centered', "js_composer") => "center",
              __('Centered with smaller icon/image', "js_composer") => "center_smaller",
              __('Right', "js_composer") => "right_bigger",
              __('Right with smaller icon/image', "js_composer") => "right",
            ),
            "description" => ""
        ),
        array(
           "type" => "textarea",
           "holder" => "div",
           "class" => "",
           "heading" => __("Content","fount_lang"),
           "param_name" => "prk_in",
           "value" => "",
           "description" => ""
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Text color","fount_lang"),
           "param_name" => "text_color",
           "value" => "",
           "description" => __("Optional - Will force all service content to have this color","fount_lang")
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon up color","fount_lang"),
           "param_name" => "icon_up_color",
           "value" => "",
           "description" => __("Optional","fount_lang"),
           "dependency" => Array('element' => "href", 'not_empty' => false)
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon rollover color","fount_lang"),
           "param_name" => "icon_color",
           "value" => "",
           "description" => __("Optional","fount_lang"),
           "dependency" => Array('element' => "href", 'not_empty' => false)
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Background color","fount_lang"),
           "param_name" => "bk_color",
           "value" => "",
           "description" => __("Optional","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("URL link","fount_lang"),
           "param_name" => "link",
           "value" => "",
           "description" => __("Optional","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("URL link text","fount_lang"),
           "param_name" => "link_text",
           "value" => "",
           "description" => __("Leave blank for theme default Read More text.","fount_lang")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ) );
//SPACER
function prk_wp_icon_func( $atts ) {
extract( shortcode_atts( array(
    'icon_size' => '',
    'text_color' => '',
    'align' => '',
    'css_animation' => '',
    'el_class' => '',
    'icon' => ''
 ), $atts ) );

 return do_shortcode('[pirenko_theme_icon icon_size="'.$icon_size.'" align="'.$align.'" icon="'.$icon.'" text_color="'.$text_color.'" css_animation="'.$css_animation.'" el_class="'.$el_class.'"][/pirenko_theme_icon]');
}
add_shortcode( 'prk_wp_icon', 'prk_wp_icon_func' );
vc_map( array(
  "name" => __("Theme icon", "js_composer"),
  "base" => "prk_wp_icon",
  "icon" => "icon-wpb-prk-icon",
  "category" => __('Content', 'js_composer'),
  "description" => __('Awesome icons in any size.', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Icon size", "js_composer"),
      "param_name" => "icon_size",
      "description" => __("Enter icon size. Default is 14px. Examples: 32px or 2em", "js_composer")
    ),
    array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Icon color","fount_lang"),
           "param_name" => "text_color",
           "value" => "",
           "description" => __("Optional - If blank the theme default color will be used","fount_lang")
        ),
    array(
        "type" => "dropdown",
        "heading" => __("Icon alignment", "js_composer"),
        "param_name" => "align",
        "value" => array("Left","Center","Right"),
        "description" => __("", "js_composer")
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Icon selector", "js_composer"),
      "param_name" => "icon",
      "value" => $fount_icons_arr,
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
    )
  ),
) );

/* Button
---------------------------------------------------------- */
$icons_arr = array(
    __("None", "js_composer") => "none",
    __("Address book icon", "js_composer") => "wpb_address_book",
    __("Alarm clock icon", "js_composer") => "wpb_alarm_clock",
    __("Anchor icon", "js_composer") => "wpb_anchor",
    __("Application Image icon", "js_composer") => "wpb_application_image",
    __("Arrow icon", "js_composer") => "wpb_arrow",
    __("Asterisk icon", "js_composer") => "wpb_asterisk",
    __("Hammer icon", "js_composer") => "wpb_hammer",
    __("Balloon icon", "js_composer") => "wpb_balloon",
    __("Balloon Buzz icon", "js_composer") => "wpb_balloon_buzz",
    __("Balloon Facebook icon", "js_composer") => "wpb_balloon_facebook",
    __("Balloon Twitter icon", "js_composer") => "wpb_balloon_twitter",
    __("Battery icon", "js_composer") => "wpb_battery",
    __("Binocular icon", "js_composer") => "wpb_binocular",
    __("Document Excel icon", "js_composer") => "wpb_document_excel",
    __("Document Image icon", "js_composer") => "wpb_document_image",
    __("Document Music icon", "js_composer") => "wpb_document_music",
    __("Document Office icon", "js_composer") => "wpb_document_office",
    __("Document PDF icon", "js_composer") => "wpb_document_pdf",
    __("Document Powerpoint icon", "js_composer") => "wpb_document_powerpoint",
    __("Document Word icon", "js_composer") => "wpb_document_word",
    __("Bookmark icon", "js_composer") => "wpb_bookmark",
    __("Camcorder icon", "js_composer") => "wpb_camcorder",
    __("Camera icon", "js_composer") => "wpb_camera",
    __("Chart icon", "js_composer") => "wpb_chart",
    __("Chart pie icon", "js_composer") => "wpb_chart_pie",
    __("Clock icon", "js_composer") => "wpb_clock",
    __("Fire icon", "js_composer") => "wpb_fire",
    __("Heart icon", "js_composer") => "wpb_heart",
    __("Mail icon", "js_composer") => "wpb_mail",
    __("Play icon", "js_composer") => "wpb_play",
    __("Shield icon", "js_composer") => "wpb_shield",
    __("Video icon", "js_composer") => "wpb_video"
);

vc_map( array(
  "name" => __("Button", "js_composer"),
  "base" => "vc_button",
  "icon" => "icon-wpb-ui-button",
  "category" => __('Content', 'js_composer'),
  "description" => __('Eye catching button', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Text on the button", "js_composer"),
      "holder" => "button",
      "class" => "wpb_button",
      "param_name" => "title",
      "value" => __("Text on the button", "js_composer"),
      "description" => __("Text on the button.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("URL (Link)", "js_composer"),
      "param_name" => "href",
      "description" => __("Button link.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Target", "js_composer"),
      "param_name" => "target",
      "value" => $target_arr,
      "dependency" => Array('element' => "href", 'not_empty' => true)
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Color", "js_composer"),
      "param_name" => "color",
      "value" => $colors_arr,
      "description" => __("Button color.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Icon", "js_composer"),
      "param_name" => "icon",
      "value" => $icons_arr,
      "description" => __("Button icon.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Size", "js_composer"),
      "param_name" => "size",
      "value" => $size_arr,
      "description" => __("Button size.", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "js_view" => 'VcButtonView'
) );

//THEME BUTTON
  function theme_button_func( $atts ) {
    extract( shortcode_atts( array(
        'prk_in' => '',
        'type' => '',
        'window' => '',
        'link' => '',
        'el_class' => '',
        'css_animation' => '',
        'button_icon' => '',
        'button_bk_color' =>''
      ), $atts ) );
      if ($window=="No")
        $window="_self";
      else
        $window="_blank";
   
     return do_shortcode('[theme_button type="'.$type.'" button_icon="'.$button_icon.'" link="'.$link.'" window="'.$window.'" css_animation="'.$css_animation.'" el_class="'.$el_class.'" button_bk_color="'.$button_bk_color.'"]'.$prk_in.'[/theme_button]');
  }
  add_shortcode( 'prk_wp_theme_button', 'theme_button_func' );

  vc_map( array(
     "name" => __("Theme Button","fount_lang"),
     "base" => "prk_wp_theme_button",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-ui-button",
     "description" => __('Buttons with the theme default styling', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     //'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
     //'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
     "params" => array(
      array(
            "type" => "dropdown",
            "heading" => __("Button type", "js_composer"),
            "param_name" => "type",
             "value" => array(
              __('Large Theme Button', "js_composer") => "theme_button large", 
              __('Medium Theme Button', "js_composer") => "theme_button medium",
              __('Small Theme Button', "js_composer") => "theme_button small", 
              __('Tiny Theme Button', "js_composer") => "theme_button tiny",
              __('Large Theme Button - Inverted Colors', "js_composer") => "theme_button_inverted large", 
              __('Medium Theme Button - Inverted Colors', "js_composer") => "theme_button_inverted medium",
              __('Small Theme Button - Inverted Colors', "js_composer") => "theme_button_inverted small", 
              __('Tiny Theme Button - Inverted Colors', "js_composer") => "theme_button_inverted tiny",
            ),
            "description" => ""
        ),
      array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Button up color","fount_lang"),
           "param_name" => "button_bk_color",
           "value" => "",
           "description" => __("Optional - will override the button up color","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Button text","fount_lang"),
           "param_name" => "prk_in",
           "value" => __("","fount_lang"),
           "description" => __("","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Button icon","fount_lang"),
           "param_name" => "button_icon",
           "value" => "",
           "description" => __("Optional - Example: fount_fa-cab. For a complete list visit <a href='http://www.pirenko.com/assets/fount/icons.html' target='_blank'>http://www.pirenko.com/assets/fount/icons.html</a> or check the theme documentation.","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Link","fount_lang"),
           "param_name" => "link",
           "value" => __("","fount_lang"),
           "description" => __("","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Open link in a new window?", "js_composer"),
            "param_name" => "window",
            "value" => array("No","Yes"),
            "description" => __("", "js_composer","fount_lang")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

/* Call to Action Button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Call to Action Button", "js_composer"),
  "base" => "vc_cta_button",
  "icon" => "icon-wpb-call-to-action",
  "category" => __('Content', 'js_composer'),
  "description" => __('Call to action element', 'js_composer'),
  "params" => array(
    array(
      "type" => "textarea",
      'admin_label' => true,
      "heading" => __("Title", "js_composer"),
      "param_name" => "call_text",
      "value" => __("Click edit button to change this text.", "js_composer"),
      "description" => __("Enter your content.", "js_composer")
    ),
    array(
      "type" => "textarea",
      'admin_label' => true,
      "heading" => __("Text", "js_composer"),
      "param_name" => "call_desc",
      "value" => __("This is the call to action description. Click edit button to change this text.", "js_composer"),
      "description" => __("Optional", "js_composer")
    ),
    array(
       "type" => "colorpicker",
       "holder" => "div",
       "class" => "",
       "heading" => __("Background color"),
       "param_name" => "bk_color",
       "value" => __(""),
       "description" => __("Optional")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Text alignment", "js_composer"),
      "param_name" => "text_align",
      "value" => array(__("Right", "js_composer") => "text_right", __("Left", "js_composer") => "text_left", __("Center", "js_composer") => "text_center"),
      "description" => __("Select button alignment.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Text on the button", "js_composer"),
      "param_name" => "title",
      "value" => __("Text on the button", "js_composer"),
      "description" => __("Text on the button.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("URL (Link)", "js_composer"),
      "param_name" => "href",
      "description" => __("Button link.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Target", "js_composer"),
      "param_name" => "target",
      "value" => $target_arr,
      "dependency" => Array('element' => "href", 'not_empty' => true)
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Color", "js_composer"),
      "param_name" => "color",
      "value" => $pirenko_colors_arr,
      "description" => __("Button color.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Icon", "js_composer"),
      "param_name" => "icon",
      "value" => $icons_arr,
      "description" => __("Button icon (not available for theme buttons).", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Size", "js_composer"),
      "param_name" => "size",
      "value" => $size_arr,
      "description" => __("Button size.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Button position", "js_composer"),
      "param_name" => "position",
      "value" => array(__("Right", "js_composer") => "cta_align_right", __("Left", "js_composer") => "cta_align_left", __("Bottom", "js_composer") => "cta_align_bottom"),
      "description" => __("Select button alignment.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Button horizontal alignment", "js_composer"),
      "param_name" => "button_align",
      "value" => array(__("Right", "js_composer") => "button_right", __("Left", "js_composer") => "button_left", __("Center", "js_composer") => "button_center"),
      "description" => __("Select button alignment.", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  ),
  "js_view" => 'VcCallToActionView'
) );

/* Video element
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Video Player", "js_composer"),
  "base" => "vc_video",
  "icon" => "icon-wpb-film-youtube",
  "category" => __('Content', 'js_composer'),
  "description" => __('Embed YouTube/Vimeo player', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Video link", "js_composer"),
      "param_name" => "link",
      "admin_label" => true,
      "description" => sprintf(__('Link to the video. More about supported formats at %s.', "js_composer"), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );


/* Single image */
vc_map( array(
  "name" => __("Single Image", "js_composer"),
  "base" => "vc_single_image",
  "icon" => "icon-wpb-single-image",
  "category" => __('Content', 'js_composer'),
  "description" => __('Simple image with CSS animation', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "attach_image",
      "heading" => __("Image", "js_composer"),
      "param_name" => "image",
      "value" => "",
      "description" => __("Select image from media library.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Image size", "js_composer"),
      "param_name" => "img_size",
      "value" => "full",
      "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Image alignment", "js_composer"),
      "param_name" => "alignment",
      "value" => array(__("Align left", "js_composer") => "", __("Align right", "js_composer") => "right", __("Align center", "js_composer") => "center"),
      "description" => __("Select image alignment.", "js_composer")
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Link to large image?", "js_composer"),
      "param_name" => "img_link_large",
      "description" => __("If selected, image will be linked to the bigger image.", "js_composer"),
      "value" => Array(__("Yes, please", "js_composer") => 'yes')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Image link", "js_composer"),
      "param_name" => "img_link",
      "description" => __("Enter url if you want this image to have link.", "js_composer"),
      "dependency" => Array('element' => "img_link_large", 'is_empty' => true)
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link Target", "js_composer"),
      "param_name" => "img_link_target",
      "value" => $target_arr,
      "dependency" => Array('element' => "img_link_large", 'is_empty' => true)
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
));
  /* Gallery/Slideshow
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Image Gallery", "js_composer"),
  "description" => __('Multiple images from Media Library', 'js_composer'),
  "base" => "pirenko_gallery",
  "icon" => "icon-wpb-images-stack",
  "category" => __('Content', 'js_composer'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Gallery type", "js_composer"),
      "param_name" => "type",
      "value" => array(__("Masonry", "js_composer") => "masonry", __("Grid (rectangles)", "js_composer") => "grid", __("Grid (squares)", "js_composer") => "squares"),
      "description" => __("Select grid type.", "js_composer")
    ),
    array(
       "type" => "textfield",
       "holder" => "div",
       "class" => "",
       "heading" => __("Columns number","fount_lang"),
       "param_name" => "cols_number",
       "value" => "0",
       "description" => "Use 0 for variable number"
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Show image title on rollover?", "js_composer"),
      "param_name" => "show_titles",
      "value" => $yes_no_arr,
      "description" => __("Will be shown when mouse is over.", "js_composer")
    ),
    array(
       "type" => "textfield",
       "holder" => "div",
       "class" => "",
       "heading" => __("Thumbnails margin","astro_lang"),
       "param_name" => "thumbs_mg",
       "value" => "",
       "description" => __("Default value is 10","astro_lang")
    ),
    array(
      "type" => "attach_images",
      "heading" => __("Images", "js_composer"),
      "param_name" => "images",
      "value" => "",
      "description" => __("Select images from media library.", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );


  //CAROUSEL
  function prkwp_carousel_func( $atts ) {
     extract( shortcode_atts( array(
        'images' => '',
        'title' => '',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
    $images_output="";
    $arr=explode(",",$images);
    if (count($arr)>0) {
      foreach ($arr as $single) {
        $image_attributes = wp_get_attachment_image_src( $single,'full' );
        $images_output.='[prk_carousel_single path="'.$image_attributes[0].'"][/prk_carousel_single]';
      }
    }
    if ($css_animation=="")
    {
      return do_shortcode('<div class="fount_carousel_wrapper">[prk_carousel title="'.$title.'"]'.$images_output.'[/prk_carousel]</div>');
    }
    else
    {
      return do_shortcode('<div class="'.$el_class.' fount_carousel_wrapper wpb_animate_when_almost_visible wpb_'.$css_animation.'">[prk_carousel title="'.$title.'"]'.$images_output.'[/prk_carousel]</div>');
    }
  }
  add_shortcode( 'prkwp_carousel', 'prkwp_carousel_func' );
  /*vc_map( array(
     "name" => __("Images Carousel","fount_lang"),
     "base" => "prkwp_carousel",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-images-carousel",
     "description" => __('Animated carousel with images', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title","fount_lang"),
           "param_name" => "title",
           "value" => __("","fount_lang"),
           "description" => __("","fount_lang")
        ),
        array(
          "type" => "attach_images",
          "heading" => __("Images", "js_composer"),
          "param_name" => "images",
          "value" => "",
          "description" => __("Select images from media library.", "js_composer"),
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));*/

  /* Gallery/Slideshow
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Quick Slider", "js_composer"),
  "base" => "vc_gallery",
  "icon" => "icon-wpb-images-stack",
  "category" => __('Content', 'js_composer'),
  "description" => __('Display images selected directly from library', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "js_composer"),
      "param_name" => "interval",
      "value" => array(3000,4000,5000,6000,7000,8000,9000,10000,15000, __("Disable", "js_composer") => 0),
      "description" => __("Auto rotate slides each X miliseconds.", "js_composer"),
    ),
    array(
      "type" => "attach_images",
      "heading" => __("Images", "js_composer"),
      "param_name" => "images",
      "value" => "",
      "description" => __("Select images from media library.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Image size", "js_composer"),
      "param_name" => "img_size",
      "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("On click", "js_composer"),
      "param_name" => "onclick",
      "value" => array(__("Open lightbox", "js_composer") => "link_image", __("Do nothing", "js_composer") => "link_no"),
      "description" => __("What to do when slide is clicked?", "js_composer")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Custom links", "js_composer"),
      "param_name" => "custom_links",
      "description" => __('Enter links for each slide here. Divide links with linebreaks (Enter).', 'js_composer'),
      "dependency" => Array('element' => "onclick", 'value' => array('custom_link'))
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Custom link target", "js_composer"),
      "param_name" => "custom_links_target",
      "description" => __('Select where to open  custom links.', 'js_composer'),
      "dependency" => Array('element' => "onclick", 'value' => array('custom_link')),
      'value' => $target_arr
    ),
    array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

  //THEME SLIDER
  vc_map( array(
     "name" => __("Theme slider","fount_lang"),
     "base" => "prk_slider",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-images-stack",
     "category" => __('Content',"fount_lang"),
     "description" => __('Display theme slides using Flexslider', 'js_composer'),
     "params" => array(
      array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Groups filter using slug(s) - comma separated ","fount_lang"),
           "param_name" => "category",
           "value" => "",
           "description" => __("Optional - leave blank for all","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Autoplay slider?", "js_composer"),
            "param_name" => "autoplay",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Slider delay","fount_lang"),
           "param_name" => "delay",
           "value" => "",
           "description" => __("In miliseconds - If blank the theme default value will be used","fount_lang")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ) );


  //PRICING TALBES
  function prkwp_price_table_func( $atts ) {
     extract( shortcode_atts( array(
        'prk_in' => '',
        'featured' => '',
        'header' => '',
        'color' => '',
        'price' => '',
        'under_price' => '',
        'button_label' => '',
        'button_link' => '',
        'featured_text' =>'',
        'css_animation' => '',
        'el_class' => ''
     ), $atts ) );
    $lines_output="<ul>";
    $prk_edited = str_replace(", ", "prkwrdoff", $prk_in);
    $arr=explode(",",$prk_edited);
    if (count($arr)>0) 
    {
      foreach ($arr as $single) {
        $lines_output.='<li>'.str_replace("prkwrdoff", ", ",$single).'</li>';
      }
    }
    $lines_output.="</ul>";
     return do_shortcode('[prk_price_table header="'.$featured.'" featured="'.$header.'" el_class="'.$el_class.'" css_animation="'.$css_animation.'" featured_text="'.$featured_text.'" color="'.$color.'" price="'.$price.'" under_price="'.$under_price.'" button_label="'.$button_label.'" button_link="'.$button_link.'"]'.$lines_output.'[/prk_price_table]');
  }
  add_shortcode( 'prkwp_price_table', 'prkwp_price_table_func' );
  
  vc_map( array(
     "name" => __("Pricing table","fount_lang"),
     "base" => "prkwp_price_table",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-table",
     "description" => __('Informational tables with multiple content fields', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title","fount_lang"),
           "param_name" => "featured",
           "value" => "",
           "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Header description text","fount_lang"),
           "param_name" => "header",
           "value" => "",
           "description" => __("Optional - Will be displayed under the title","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Featured text","fount_lang"),
           "param_name" => "featured_text",
           "value" => "",
           "description" => __("Optional - Will be displayed on a ribbon on the right side","fount_lang")
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Color","fount_lang"),
           "param_name" => "color",
           "value" => "",
           "description" => __("Optional - If blank the theme active color will be used","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Price text","fount_lang"),
           "param_name" => "price",
           "value" => "",
           "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Under price text","fount_lang"),
           "param_name" => "under_price",
           "value" => "",
           "description" => __("Example: per month","fount_lang")
        ),
        array(
           "type" => "exploded_textarea",
           "holder" => "div",
           "class" => "",
           "heading" => __("Description text","fount_lang"),
           "param_name" => "prk_in",
           "value" => "",
           "description" => __("Enter descriptions for this table here. Divide them with linebreaks (Enter).","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Button text","fount_lang"),
           "param_name" => "button_label",
           "value" => "",
           "description" => __("Leave blank if no button is needed","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Button URL","fount_lang"),
           "param_name" => "button_link",
           "value" => "",
           "description" => __("Leave blank if no button is needed","fount_lang")
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ) );
  
  /* Graph
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Progress Bar", "js_composer"),
  "base" => "vc_progress_bar",
  "icon" => "icon-wpb-graph",
  "category" => __('Content', 'js_composer'),
  "description" => __('Animated progress bar', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Graphic values", "js_composer"),
      "param_name" => "values",
      "description" => __('Input graph values here. Divide values with linebreaks (Enter). Example: 90|Development', 'js_composer'),
      "value" => "90|Development,80|Design,70|Marketing"
    ),
    array(
      "type" => "textfield",
      "heading" => __("Units", "js_composer"),
      "param_name" => "units",
      "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Bar color", "js_composer"),
      "param_name" => "bgcolor",
      "value" => array(__("Grey", "js_composer") => "bar_grey", __("Blue", "js_composer") => "bar_blue", __("Turquoise", "js_composer") => "bar_turquoise", __("Green", "js_composer") => "bar_green", __("Orange", "js_composer") => "bar_orange", __("Red", "js_composer") => "bar_red", __("Black", "js_composer") => "bar_black", __("Custom Color", "js_composer") => "custom"),
      "description" => __("Select bar color.", "js_composer"),
      "admin_label" => true
    ),
    array(
      "type" => "colorpicker",
      "heading" => __("Bar custom color", "js_composer"),
      "param_name" => "custombgcolor",
      "description" => __("Select custom color for bars.", "js_composer"),
      "dependency" => Array('element' => "bgcolor", 'value' => array('custom'))
    ),
    array(
      "type" => "colorpicker",
      "heading" => __("Bars custom background color", "js_composer"),
      "param_name" => "custombgcolor_back",
      "description" => __("Select custom background color for bars - leave blank for theme default value", "js_composer"),
    ),
    array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

/**
 * Pie chart
 */
vc_map( array(
    "name" => __("Pie chart", 'vc_extend'),
    "base" => "vc_pie",
    "class" => "",
    "icon" => "icon-wpb-vc_pie",
    "category" => __('Content', 'js_composer'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "js_composer"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie value", "js_composer"),
            "param_name" => "value",
            "description" => __('Input graph value here. Witihn a range 0-100.', 'js_composer'),
            "value" => "50",
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie label value", "js_composer"),
            "param_name" => "label_value",
            "description" => __('Input integer value for label. If empty "Pie value" will be used.', 'js_composer'),
            "value" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => __("Units", "js_composer"),
            "param_name" => "units",
            "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Bar color", "js_composer"),
            "param_name" => "color",
            "value" => $colors_arr,//$pie_colors,
            "description" => __("Select pie chart color.", "js_composer"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        ),

    )
) );
	//LATEST POSTS
	vc_map( array(
	 "name" => __("Latest Posts","fount_lang"),
	 "base" => "pirenko_last_posts",
	 "class" => "fount_scodes_editor",
	 "icon" => "icon-wpb-vc_carousel",
	 "description" => __('Show blog entries', 'js_composer'),
	 "category" => __('Feeds',"fount_lang"),
	 "params" => array(
	 	array(
            "type" => "dropdown",
            "heading" => __("Appearance", "js_composer"),
            "param_name" => "general_style",
            "value" => array(
            	__("Classic style - fixed size thumbs and content with transparent background", "js_composer") => "classic", 
            	__("Classic style with slider - show all posts in a single row with navigation arrows", "js_composer") => "slider", 
            	__("Masonry style - variable size thumbs with a border around each post", "js_composer") => "masonry",
            	__("Masonry style with slider - show all posts in a single row with navigation arrows", "js_composer") => "slider_ms"), 
            "description" => ""
          ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Category filter using slug(s) - comma separated ","fount_lang"),
	       "param_name" => "cat_filter",
	       "value" => "",
	       "description" => __("Optional - leave blank for all","fount_lang")
	    ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Items number","fount_lang"),
	       "param_name" => "items_number",
	       "value" => "",
	       "description" => __("Optional - Default is three","fount_lang")
	    ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Rows number","fount_lang"),
	       "param_name" => "rows_number",
	       "value" => "1",
	       "description" => "",
	       "dependency" => Array('element' => "general_style", 'value' => 'classic')
	    ),
	    array(
	      "type" => "colorpicker",
	      "heading" => __("Background color", "js_composer"),
	      "param_name" => "bg_color",
	      "description" => __("Optional Select custom background color for each post", "js_composer"),
	      "dependency" => Array('element' => "general_style", 'value' => array('masonry','slider_ms'))
	    ),
	     array(
	      "type" => "textarea_html",
	      "holder" => "div",
	      "class" => "messagebox_text prkadmin_hide_now",
	      "heading" => __("Message text", "js_composer"),
	      "param_name" => "content",
	      "value" => __("tricker", "js_composer")
	    ),
	    $add_css_animation,
	    array(
	      "type" => "textfield",
	      "heading" => __("Extra class name", "js_composer"),
	      "param_name" => "el_class",
	      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
	    )
	 )
	));

  //LATEST PORTFOLIO
  vc_map( array(
     "name" => __("Latest Portfolio","fount_lang"),
     "base" => "pirenko_last_portfolios",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-layerslider",
     "description" => __('Show portfolio entries', 'js_composer'),
     "category" => __('Feeds',"fount_lang"),
     "params" => array(
      array(
            "type" => "dropdown",
            "heading" => __("Layout type?", "js_composer"),
            "param_name" => "layout_type_folio",
            "value" => array(
            	__("Grid with horizontal rectangular images", "js_composer") => "grid",
            	__("Grid with vertical rectangular images", "js_composer") => "grid_vertical",
            	__("Grid with squared images", "js_composer") => "squares", 
            	__("Grid without image crop - Masonry", "js_composer") => "masonry"),
            "description" => ""
          ),
      array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Columns number","fount_lang"),
           "param_name" => "cols_number",
           "value" => "3",
           "description" => "Use 0 for variable number"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Items number","fount_lang"),
           "param_name" => "items_number",
           "value" => "",
           "description" => __("Optional - default value is 9","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Skills filter using slug(s) - comma separated ","fount_lang"),
           "param_name" => "cat_filter",
           "value" => "",
           "description" => __("Optional - leave blank for all","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show filter above thumbnails?", "js_composer"),
            "param_name" => "show_filter",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Thumbnails click behavior?", "js_composer"),
            "param_name" => "thumbs_type_folio",
            "value" => array(__("Show project with an overlay and hide page content", "js_composer") => "overlayed",__("Show project above the thumbnails", "js_composer") => "aboved", __("Open lightbox", "js_composer") => "lightboxed", __("Open project on a different page", "js_composer") => "classiqued"),
            "description" => ""
        ),
        /*array(
            "type" => "dropdown",
            "heading" => __("Make thumbnails black and white?", "js_composer"),
            "param_name" => "grayscale",
            "value" => $no_yes_arr, 
            "description" => "On mouse over the original image will be shown."
        ),*/
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Thumbnails margin","fount_lang"),
           "param_name" => "thumbs_mg",
           "value" => "",
           "description" => __("Default value is 10","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Multi-colored thumbs on rollover?", "js_composer"),
            "param_name" => "multicolored_thumbs",
            "value" => $yes_no_arr,
            "description" => "If yes the portfolio default color will be applied to each thumb."
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Always show project info?", "js_composer"),
            "param_name" => "titled_portfolio",
            "value" => $no_yes_arr, 
            "description" => "Will be shown under the thumbnail."
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show project information on rollover?", "js_composer"),
            "param_name" => "fount_show_skills",
            "value" => array(__("Title and skills", "js_composer") => "folio_title_and_skills", __("Title only", "js_composer") => "folio_title_only"),
            "description" => "",
            "dependency" => Array('element' => "titled_portfolio", 'value' => array('no'))
        ),
      	array(
            "type" => "dropdown",
            "heading" => __("Show icons inside thumbnail?", "js_composer"),
            "param_name" => "icons_display",
            "value" => array(__("Yes, show lightbox and link", "js_composer") => "both_icon", __("No", "js_composer") => "no"),
            "description" => "",
            "dependency" => Array('element' => "titled_portfolio", 'value' => array('no'))
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("View portfolio button text","fount_lang"),
           "param_name" => "button_label",
           "value" => "",
           "description" => __("Leave blank if no button is needed","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("View portfolio button URL","fount_lang"),
           "param_name" => "button_url",
           "value" => "",
           "description" => __("Leave blank if no button is needed","fount_lang")
        ),
         array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ) );

  //TEAM MEMBERS
  vc_map( array(
     "name" => __("Team members","fount_lang"),
     "base" => "prk_members",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-user",
     "description" => __('Display team members info', 'js_composer'),
     "category" => __('Feeds',"fount_lang"),
     "params" => array(
     	array(
            "type" => "dropdown",
            "heading" => __("Appearance", "js_composer"),
            "param_name" => "general_style",
            "value" => array(
            	__("Classic style - show members across multiple rows and columns", "js_composer") => "classic", 
            	__("Slider style - show all members in a single row with navigation arrows", "js_composer") => "slider"), 
            "description" => ""
          ),
	    array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Team filter using slug(s) - comma separated ","fount_lang"),
           "param_name" => "category",
           "value" => "",
           "description" => __("Optional - leave blank for all","fount_lang")
        ),
	    array(
	       "type" => "textfield",
	       "holder" => "div",
	       "class" => "",
	       "heading" => __("Number of members to be displayed","fount_lang"),
	       "param_name" => "items_number",
	       "value" => "",
	       "description" => __("Optional - If empty all members will be shown","fount_lang")
	    ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Number of members per row","fount_lang"),
           "param_name" => "columns",
           "value" => "3",
           "description" => "",
           "dependency" => Array('element' => "general_style", 'value' => 'classic')
        ),
        array(
	      "type" => "dropdown",
	      "heading" => __("Text alignment", "js_composer"),
	      "param_name" => "text_align",
	      "value" => array(__("Center", "js_composer") => "text_center", __("Left", "js_composer") => "text_left",__("Right", "js_composer") => "text_right"),
	      "description" => __("", "js_composer")
	    ),
	    array(
            "type" => "dropdown",
            "heading" => __("Member information display", "js_composer"),
            "param_name" => "content_amount",
            "value" => array(
            	__("Show excerpt only", "js_composer") => "compressed", 
            	__("Show all content", "js_composer") => "everything"), 
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social icons position", "js_composer"),
            "param_name" => "icons_position",
            "value" => array(
            	__("Under content", "js_composer") => "under", 
            	__("Inside member image", "js_composer") => "inside"), 
            "description" => ""
        ),
         array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

  //TESTIMONIALS
  vc_map( array(
     "name" => __("Testimonials","fount_lang"),
     "base" => "prk_testimonials",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-testimonials",
     "description" => __('Display Testimonials', 'js_composer'),
     "category" => __('Feeds',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Testimonials group filter using slug(s) - comma separated ","fount_lang"),
           "param_name" => "category",
           "value" => "",
           "description" => __("Optional - leave blank for all","fount_lang")
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Maximum number of testimonials","fount_lang"),
           "param_name" => "items_number",
           "value" => "",
           "description" => "Optional - leave blank for all"
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Text color","fount_lang"),
           "param_name" => "color",
           "value" => "",
           "description" => __("Optional - If blank the theme active color will be used","fount_lang")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Text and buttons alignment", "js_composer"),
            "param_name" => "align",
            "value" => array("Left","Center"),
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show navigation arrows?", "js_composer"),
            "param_name" => "show_controls",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Autoplay slider?", "js_composer"),
            "param_name" => "autoplay",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Slider delay","fount_lang"),
           "param_name" => "delay",
           "value" => "",
           "description" => __("In miliseconds - If blank the theme default value will be used","fount_lang")
        ),
         array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

  //COMMENTS
  vc_map( array(
     "name" => __("Comments","fount_lang"),
     "base" => "pirenko_comments",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-comments",
     "description" => __('Display comments from users', 'js_composer'),
     "category" => __('Feeds',"fount_lang"),
     "params" => array(
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title","fount_lang"),
           "param_name" => "title",
           "value" => "",
           "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Number of comments","fount_lang"),
           "param_name" => "items_number",
           "value" => "",
           "description" => ""
        ),
         array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

/* Theme VCard Element
---------------------------------------------------------- */
  vc_map( array(
     "name" => __("Contact Information","fount_lang"),
     "base" => "pirenko_contact_info",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-vcard",
     "description" => __('Display general contact info', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
        array(
        "type" => "attach_image",
        "heading" => __("Logo Image", "js_composer"),
        "param_name" => "image_path",
        "value" => "",
        "description" => __("Optional", "js_composer")
      ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text",
          "heading" => __("Description (will be displayed above the address (optional)", "js_composer"),
          "param_name" => "content",
          "value" => __("", "js_composer"),
          "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Company Name","fount_lang"),
           "param_name" => "company_name",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Street Address","fount_lang"),
           "param_name" => "street_address",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("City","fount_lang"),
           "param_name" => "locality",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Zipcode","fount_lang"),
           "param_name" => "postal_code",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Telephone","fount_lang"),
           "param_name" => "tel",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Fax","fount_lang"),
           "param_name" => "fax",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Opening hours","fount_lang"),
           "param_name" => "hours",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Email","fount_lang"),
           "param_name" => "email",
           "value" => "",
           "description" => "Optional"
        ),
        array(
           "type" => "colorpicker",
           "holder" => "div",
           "class" => "",
           "heading" => __("Forced text color","fount_lang"),
           "param_name" => "text_color",
           "value" => "",
           "description" => __("Optional - If blank the theme default color scheme will be used","fount_lang")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

$nets_array = array (
	'None' => 'none',
	'Behance' => 'behance',
	'Delicious' => 'delicious',
	'Deviantart' => 'deviantart',
	'Dribbble' => 'dribbble',
	'Facebook' => 'facebook',
	'Flickr' => 'flickr',
	'Google Plus' => 'gplus',
	'Instagram' => 'instagram-filled',
	'Linkedin' => 'linkedin',
	'Pinterest' => 'pinterest',
	'Soundcloud' => 'soundcloud',
	'Skype' => 'skype',
	'Twitter' => 'twitter',
	'Vimeo' => 'vimeo',
	'Yahoo' => 'yahoo',
	 'Youtube' => 'youtube',
	 'RSS' => 'rss-1',
	 'vCard' => 'book',
);

/* Theme Social Networks Element
---------------------------------------------------------- */
  vc_map( array(
     "name" => __("Social Networks Links","fount_lang"),
     "base" => "pirenko_social_nets",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-vcard",
     "description" => __('Display links to Social Networks', 'js_composer'),
     "category" => __('Content',"fount_lang"),
     "params" => array(
     	array(
            "type" => "dropdown",
            "heading" => __("Social Network 1", "js_composer"),
            "param_name" => "net_1",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 1 link", "js_composer"),
          "param_name" => "link_1",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_1", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 2", "js_composer"),
            "param_name" => "net_2",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 2 link", "js_composer"),
          "param_name" => "link_2",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_2", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 3", "js_composer"),
            "param_name" => "net_3",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 3 link", "js_composer"),
          "param_name" => "link_3",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_3", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 4", "js_composer"),
            "param_name" => "net_4",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 4 link", "js_composer"),
          "param_name" => "link_4",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_4", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 5", "js_composer"),
            "param_name" => "net_5",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 5 link", "js_composer"),
          "param_name" => "link_5",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_5", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 6", "js_composer"),
            "param_name" => "net_6",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 6 link", "js_composer"),
          "param_name" => "link_6",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_6", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 7", "js_composer"),
            "param_name" => "net_7",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 7 link", "js_composer"),
          "param_name" => "link_7",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_7", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Social Network 8", "js_composer"),
            "param_name" => "net_8",
            "value" => $nets_array,
            "description" => ""
        ),
        array(
          "type" => "textfield",
          "heading" => __("Social Network 8 link", "js_composer"),
          "param_name" => "link_8",
          "description" => __("", "js_composer"),
          "dependency" => Array('element' => "net_8", 'value' => array('behance','soundcloud','delicious','deviantart','dribbble','facebook','flickr','gplus','instagram-filled','linkedin','pinterest','skype','twitter','vimeo','yahoo','youtube','rss-1','book'))
        ),
        array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        $add_css_animation,
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));
      
/* Theme Contact Form Element
---------------------------------------------------------- */
vc_map( array(
  "name"    => __("Theme Contact Form", "js_composer"),
  "base"    => "prk_contact_form",
  'icon'    => 'icon-wpb-vc_gravityform',
  "category"  => __('Content', 'js_composer'),
  "description" => __('Regular contact form', 'js_composer'),
  "params" => array(
    array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "admin_label" => true,
           "heading" => __("Receiving email address","fount_lang"),
           "param_name" => "email_adr",
           "value" => "youremail@somthing.com",
           "description" => "The email that will receive messages through this form."
        ),
    array(
            "type" => "textarea_html",
            "holder" => "div",
            "class" => "messagebox_text prkadmin_hide_now",
            "heading" => __("Message text", "js_composer"),
            "param_name" => "content",
            "value" => __("tricker", "js_composer")
          ),
    )
) );

// Contact form 7 plugin
include_once(ABSPATH . 'wp-admin/includes/plugin.php'); // Require plugin.php to use is_plugin_active() below
if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
  global $wpdb;
  $cf7 = $wpdb->get_results( 
    "
    SELECT ID, post_title 
    FROM $wpdb->posts
    WHERE post_type = 'wpcf7_contact_form' 
    "
  );
  $contact_forms = array();
  if ($cf7) {
    foreach ( $cf7 as $cform ) {
      $contact_forms[$cform->post_title] = $cform->ID;
    }
  } else {
    $contact_forms["No contact forms found"] = 0;
  }
  vc_map( array(
    "base" => "contact-form-7",
    "name" => __("Contact Form 7", "js_composer"),
    "icon" => "icon-wpb-contactform7",
    "category" => __('Content', 'js_composer'),
    "description" => __('Place Contact Form7', 'js_composer'),
    "params" => array(
      array(
        "type" => "textfield",
        "heading" => __("Form title", "js_composer"),
        "param_name" => "title",
        "admin_label" => true,
        "description" => __("What text use as form title. Leave blank if no title is needed.", "js_composer")
      ),
      array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Select contact form", "js_composer"),
        "param_name" => "id",
        "value" => $contact_forms,
        "description" => __("Choose previously created contact form from the drop down list.", "js_composer")
      )
    )
  ) );
} // if contact form7 plugin active

  /* Google maps element
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Google Maps", "js_composer"),
  "base" => "vc_gmaps",
  "icon" => "icon-wpb-map-pin",
  "category" => __('Content', 'js_composer'),
  "description" => __('Map block', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Google map latitude", "js_composer"),
      "param_name" => "map_latitude",
      "admin_label" => true,
      "description" => __("", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Google map longitude", "js_composer"),
      "param_name" => "map_longitude",
      "admin_label" => true,
      "description" => __("", "js_composer")
    ),
	array(
		"type" => "dropdown",
		"heading" => __("Map Type", "js_composer"),
		"param_name" => "map_type",
		"value" => array(
		__("Roadmap", "js_composer") => "roadmap", 
		__("Hybrid", "js_composer") => "hybrid", 
		__("Terrain", "js_composer") => "terrain",
		__("Satellite", "js_composer") => "satellite"),
		"description" => __("", "js_composer")
    ),
	array(
      "type" => "dropdown",
      "heading" => __("Map Style", "js_composer"),
      "param_name" => "map_style",
      "value" => array(
        __("Default", "js_composer") => "default", 
        __("Almost Gray", "js_composer") => "almost_gray", 
        __("Subtle Grayscale", "js_composer") => "subtle_grayscale",
        __("Cobalt", "js_composer") => "cobalt", 
        __("Midnight Commander", "js_composer") => "midnight", 
        __("Old Timey", "js_composer") => "old_timey", 
        __("Greenish", "js_composer") => "green"),
      "description" => __("", "js_composer"),
      "dependency" => Array('element' => "map_type", 'value' => array('roadmap','hybrid','terrain'))
    ),
    array(
      "type" => "textfield",
      "heading" => __("Map height", "js_composer"),
      "param_name" => "size",
      "description" => __('Enter map height in pixels. Example: 200.', "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Map Zoom", "js_composer"),
      "param_name" => "zoom",
      "value" => array(__("14 - Default", "js_composer") => 14, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 15, 16, 17, 18, 19, 20)
    ),
    array(
      "type" => "attach_image",
      "heading" => __("Marker Image", "js_composer"),
      "param_name" => "marker_image",
      "value" => "",
      "description" => __("Optional", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Marker image latitude", "js_composer"),
      "param_name" => "marker_image_lat",
      "description" => __("Optional", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Marker image longitude", "js_composer"),
      "param_name" => "marker_image_long",
      "description" => __("Optional", "js_composer")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text prkadmin_hide_now",
      "heading" => __("Message text", "js_composer"),
      "param_name" => "content",
      "value" => __("tricker", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

  //SITEMAP
  vc_map( array(
     "name" => __("Sitemap","fount_lang"),
     "base" => "prk_sitemap",
     "class" => "fount_scodes_editor",
     "icon" => "icon-wpb-prk-sitemap",
     "description" => __('Complete sitemap with all post types', 'js_composer'),
     "category" => __('Feeds',"fount_lang"),
     "params" => array(
      array(
            "type" => "dropdown",
            "heading" => __("Show Pages?", "js_composer"),
            "param_name" => "show_pages",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title for Pages","fount_lang"),
           "param_name" => "txt_pages",
           "value" => "",
           "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show blog categories?", "js_composer"),
            "param_name" => "show_blog_cats",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title for blog categories","fount_lang"),
           "param_name" => "txt_blog_cats",
           "value" => "",
           "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show blog posts?", "js_composer"),
            "param_name" => "show_posts",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title for blog posts","fount_lang"),
           "param_name" => "txt_posts",
           "value" => "",
           "description" => ""
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Show portfolio posts?", "js_composer"),
            "param_name" => "show_port_posts",
            "value" => $yes_no_arr,
            "description" => ""
        ),
        array(
           "type" => "textfield",
           "holder" => "div",
           "class" => "",
           "heading" => __("Title for portfolio posts","fount_lang"),
           "param_name" => "txt_port_posts",
           "value" => "",
           "description" => ""
        ),
         array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "messagebox_text prkadmin_hide_now",
          "heading" => __("Message text", "js_composer"),
          "param_name" => "content",
          "value" => __("tricker", "js_composer")
        ),
        array(
          "type" => "textfield",
          "heading" => __("Extra class name", "js_composer"),
          "param_name" => "el_class",
          "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        )
     )
  ));

/* Raw HTML
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Raw HTML", "js_composer"),
  "base" => "vc_raw_html",
  "icon" => "icon-wpb-raw-html",
  "category" => __('Structure', 'js_composer'),
  "wrapper_class" => "clearfix",
  "description" => __('Output raw html code on your page', 'js_composer'),
  "params" => array(
    array(
      "type" => "textarea_raw_html",
      "holder" => "div",
      "heading" => __("Raw HTML", "js_composer"),
      "param_name" => "content",
      "value" => base64_encode("<p>I am raw html block.<br/>Click edit button to change this html</p>"),
      "description" => __("Enter your HTML content.", "js_composer")
    ),
  )
) );

/* Raw JS
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Raw JS", "js_composer"),
  "base" => "vc_raw_js",
  "icon" => "icon-wpb-raw-javascript",
  "category" => __('Structure', 'js_composer'),
  "wrapper_class" => "clearfix",
  "description" => __('Output raw javascript code on your page', 'js_composer'),
  "params" => array(
    array(
      "type" => "textarea_raw_html",
      "holder" => "div",
      "heading" => __("Raw js", "js_composer"),
      "param_name" => "content",
      "value" => __(base64_encode("<script type='text/javascript'> alert('Enter your js here!'); </script>"), "js_composer"),
      "description" => __("Enter your JS code.", "js_composer")
    ),
  )
) );

/* Widgetised sidebar
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Widgetised Sidebar", "js_composer"),
  "base" => "vc_widget_sidebar",
  "class" => "wpb_widget_sidebar_widget",
  "icon" => "icon-wpb-layout_sidebar",
  "category" => __('Structure', 'js_composer'),
  "description" => __('Place widgetised sidebar', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "widgetised_sidebars",
      "heading" => __("Sidebar", "js_composer"),
      "param_name" => "sidebar_id",
      "description" => __("Select which widget area output.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

/* Flickr
---------------------------------------------------------- */
vc_map( array(
  "base" => "vc_flickr",
  "name" => __("Flickr Widget", "js_composer"),
  "icon" => "icon-wpb-flickr",
  "category" => __('Social', 'js_composer'),
  "description" => __('Image feed from your flickr account', 'js_composer'),
  "params"  => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Flickr ID", "js_composer"),
      "param_name" => "flickr_id",
      'admin_label' => true,
      "description" => sprintf(__('To find your flickID visit %s.', "js_composer"), '<a href="http://idgettr.com/" target="_blank">idGettr</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Number of photos", "js_composer"),
      "param_name" => "count",
      "value" => array(9, 8, 7, 6, 5, 4, 3, 2, 1),
      "description" => __("Number of photos.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Type", "js_composer"),
      "param_name" => "type",
      "value" => array(__("User", "js_composer") => "user", __("Group", "js_composer") => "group"),
      "description" => __("Photo stream type.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Display", "js_composer"),
      "param_name" => "display",
      "value" => array(__("Latest", "js_composer") => "latest", __("Random", "js_composer") => "random"),
      "description" => __("Photo order.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

/**
 * Pie chart
 */
vc_map( array(
    "name" => __("Pie chart", 'vc_extend'),
    "base" => "vc_pie",
    "class" => "",
    "icon" => "icon-wpb-vc_pie",
    "category" => __('Content', 'js_composer'),
    "description" => __('Animated pie chart', 'js_composer'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "js_composer"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie value", "js_composer"),
            "param_name" => "value",
            "description" => __('Input graph value here. Witihn a range 0-100.', 'js_composer'),
            "value" => "50",
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie label value", "js_composer"),
            "param_name" => "label_value",
            "description" => __('Input integer value for label. If empty "Pie value" will be used.', 'js_composer'),
            "value" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => __("Units", "js_composer"),
            "param_name" => "units",
            "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Bar color", "js_composer"),
            "param_name" => "color",
            "value" => $colors_arr,//$pie_colors,
            "description" => __("Select pie chart color.", "js_composer"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "js_composer"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
        ),

    )
) );

/* Facebook like button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Facebook Like", "js_composer"),
  "base" => "vc_facebook",
  "icon" => "icon-wpb-balloon-facebook-left",
  "category" => __('Social', 'js_composer'),
  "description" => __('Facebook like button', 'js_composer'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button type", "js_composer"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Standard", "js_composer") => "standard", __("Button count", "js_composer") => "button_count", __("Box count", "js_composer") => "box_count"),
      "description" => __("Select button type.", "js_composer")
    )
  )
) );

/* Tweetmeme button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Tweetmeme Button", "js_composer"),
  "base" => "vc_tweetmeme",
  "icon" => "icon-wpb-tweetme",
  "category" => __('Social', 'js_composer'),
  "description" => __('Share on twitter button', 'js_composer'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button type", "js_composer"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Horizontal", "js_composer") => "horizontal", __("Vertical", "js_composer") => "vertical", __("None", "js_composer") => "none"),
      "description" => __("Select button type.", "js_composer")
    )
  )
) );

/* Google+ button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Google+ Button", "js_composer"),
  "base" => "vc_googleplus",
  "icon" => "icon-wpb-application-plus",
  "category" => __('Social', 'js_composer'),
  "description" => __('Recommend on Google', 'js_composer'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button size", "js_composer"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Standard", "js_composer") => "", __("Small", "js_composer") => "small", __("Medium", "js_composer") => "medium", __("Tall", "js_composer") => "tall"),
      "description" => __("Select button size.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Annotation", "js_composer"),
      "param_name" => "annotation",
      "admin_label" => true,
      "value" => array(__("Inline", "js_composer") => "inline", __("Bubble", "js_composer") => "", __("None", "js_composer") => "none"),
      "description" => __("Select annotation type.", "js_composer")
    )
  )
) );

/* Pinterest button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Pinterest", "js_composer"),
  "base" => "vc_pinterest",
  "icon" => "icon-wpb-pinterest",
  "category" => __('Social', 'js_composer'),
  "description" => __('Pinterest button', 'js_composer'),
  "params"  => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button layout", "js_composer"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Horizontal", "js_composer") => "", __("Vertical", "js_composer") => "vertical", __("No count", "js_composer") => "none"),
      "description" => __("Select button layout.", "js_composer")
    )
  )
) );


/* Support for 3rd Party plugins
---------------------------------------------------------- */


if (is_plugin_active('LayerSlider/layerslider.php')) {
  global $wpdb;
  $ls = $wpdb->get_results( 
    "
    SELECT id, name, date_c
    FROM ".$wpdb->prefix."layerslider
    WHERE flag_hidden = '0' AND flag_deleted = '0'
    ORDER BY date_c ASC LIMIT 999
    "
  );
  $layer_sliders = array();
  if ($ls) {
    foreach ( $ls as $slider ) {
      $layer_sliders[$slider->name] = $slider->id;
    }
  } else {
    $layer_sliders["No sliders found"] = 0;
  }
  vc_map( array(
    "base" => "layerslider_vc",
    "name" => __("Layer Slider", "js_composer"),
    "icon" => "icon-wpb-layerslider",
    "category" => __('Content', 'js_composer'),
    "description" => __('Place LayerSlider', 'js_composer'),
    "params" => array(
      array(
        "type" => "textfield",
        "heading" => __("Widget title", "js_composer"),
        "param_name" => "title",
        "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("LayerSlider ID", "js_composer"),
        "param_name" => "id",
        "admin_label" => true,
        "value" => $layer_sliders,
        "description" => __("Select your LayerSlider.", "js_composer")
      ),
      array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
      )
    )
  ) );
} // if layer slider plugin active

if (is_plugin_active('revslider/revslider.php')) {
  global $wpdb;
  $rs = $wpdb->get_results( 
    "
    SELECT id, title, alias
    FROM ".$wpdb->prefix."revslider_sliders
    ORDER BY id ASC LIMIT 999
    "
  );
  $revsliders = array();
  if ($rs) {
    foreach ( $rs as $slider ) {
      $revsliders[$slider->title] = $slider->alias;
    }
  } else {
    $revsliders["No sliders found"] = 0;
  }
  vc_map( array(
    "base" => "rev_slider_vc",
    "name" => __("Revolution Slider", "js_composer"),
    "icon" => "icon-wpb-revslider",
    "category" => __('Content', 'js_composer'),
    "description" => __('Place Revolution slider', 'js_composer'),
    "params"=> array(
      array(
        "type" => "textfield",
        "heading" => __("Widget title", "js_composer"),
        "param_name" => "title",
        "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Revolution Slider", "js_composer"),
        "param_name" => "alias",
        "admin_label" => true,
        "value" => $revsliders,
        "description" => __("Select your Revolution Slider.", "js_composer")
      ),
      array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
      )
    )
  ) );
} // if revslider plugin active

if (is_plugin_active('gravityforms/gravityforms.php')) {
  $gravity_forms_array[__("No Gravity forms found.", "js_composer")] = '';
  if ( class_exists('RGFormsModel') ) {
    $gravity_forms = RGFormsModel::get_forms(1, "title");
    if ($gravity_forms) {
      $gravity_forms_array = array(__("Select a form to display.", "js_composer") => '');
      foreach ( $gravity_forms as $gravity_form ) {
        $gravity_forms_array[$gravity_form->title] = $gravity_form->id;
      }
    }
  }
  vc_map( array(
    "name" => __("Gravity Form", "js_composer"),
    "base" => "gravityform",
    "icon" => "icon-wpb-vc_gravityform",
    "category" => __("Content", "js_composer"),
    "description" => __('Place Gravity form', 'js_composer'),
    "params" => array(
      array(
        "type" => "dropdown",
        "heading" => __("Form", "js_composer"),
        "param_name" => "id",
        "value" => $gravity_forms_array,
        "description" => __("Select a form to add it to your post or page.", "js_composer"),
        "admin_label" => true
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Display Form Title", "js_composer"),
        "param_name" => "title",
        "value" => array( __("No", "js_composer") => 'false', __("Yes", "js_composer") => 'true' ),
        "description" => __("Would you like to display the forms title?", "js_composer"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Display Form Description", "js_composer"),
        "param_name" => "description",
        "value" => array( __("No", "js_composer") => 'false', __("Yes", "js_composer") => 'true' ),
        "description" => __("Would you like to display the forms description?", "js_composer"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Enable AJAX?", "js_composer"),
        "param_name" => "ajax",
        "value" => array( __("No", "js_composer") => 'false', __("Yes", "js_composer") => 'true' ),
        "description" => __("Enable AJAX submission?", "js_composer"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "messagebox_text prkadmin_hide_now",
        "heading" => __("Message text", "js_composer"),
        "param_name" => "content",
        "value" => __("tricker", "js_composer")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Tab Index", "js_composer"),
        "param_name" => "tabindex",
        "description" => __("(Optional) Specify the starting tab index for the fields of this form. Leave blank if you're not sure what this is.", "js_composer"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      )
    )
  ) );
} // if gravityforms active

/* WordPress default Widgets (Appearance->Widgets)
---------------------------------------------------------- */
vc_map( array(
  "name" => 'WP ' . __("Search"),
  "base" => "vc_wp_search",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('A search form for your site', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Meta"),
  "base" => "vc_wp_meta",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('Log in/out, admin, feed and WordPress links', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Recent Comments"),
  "base" => "vc_wp_recentcomments",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('The most recent comments', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Number of comments to show", "js_composer"),
      "param_name" => "number",
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Calendar"),
  "base" => "vc_wp_calendar",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('A calendar of your sites posts', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Pages"),
  "base" => "vc_wp_pages",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('Your sites WordPress Pages', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Sort by", "js_composer"),
      "param_name" => "sortby",
      "value" => array(__("Page title", "js_composer") => "post_title", __("Page order", "js_composer") => "menu_order", __("Page ID", "js_composer") => "ID"),
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Exclude", "js_composer"),
      "param_name" => "exclude",
      "description" => __("Page IDs, separated by commas.", "js_composer"),
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

$tag_taxonomies = array();
foreach ( get_taxonomies() as $taxonomy ) :
  $tax = get_taxonomy($taxonomy);
  if ( !$tax->show_tagcloud || empty($tax->labels->name) )
    continue;
  $tag_taxonomies[$tax->labels->name] = esc_attr($taxonomy);
endforeach;
vc_map( array(
  "name" => 'WP ' . __("Tag Cloud"),
  "base" => "vc_wp_tagcloud",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('Your most used tags in cloud format', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Taxonomy", "js_composer"),
      "param_name" => "taxonomy",
      "value" => $tag_taxonomies,
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

$custom_menus = array();
$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
if ( is_array($menus) ) {
  foreach ( $menus as $single_menu ) {
    $custom_menus[$single_menu->name] = $single_menu->term_id;
  }
}
vc_map( array(
"name" => 'WP ' . __("Custom Menu"),
"base" => "vc_wp_custommenu",
"icon" => "icon-wpb-wp",
"category" => __("WordPress Widgets", "js_composer"),
"class" => "wpb_vc_wp_widget",
"weight" => -50,
"description" => __('Use this widget to add one of your custom menus as a widget', 'js_composer'),
"params" => array(
  array(
    "type" => "textfield",
    "heading" => __("Widget title", "js_composer"),
    "param_name" => "title",
    "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
  ),
  array(
    "type" => "dropdown",
    "heading" => __("Menu", "js_composer"),
    "param_name" => "nav_menu",
    "value" => $custom_menus,
    "description" => __(empty($custom_menus) ? "Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu." : "Select menu", "js_composer"),
    "admin_label" => true
  ),
  array(
    "type" => "textfield",
    "heading" => __("Extra class name", "js_composer"),
    "param_name" => "el_class",
    "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
  )
)
) );

vc_map( array(
  "name" => 'WP ' . __("Text"),
  "base" => "vc_wp_text",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('Arbitrary text or HTML', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textarea",
      "heading" => __("Text", "js_composer"),
      "param_name" => "text",
      "admin_label" => true
    ),
    /*array(
      "type" => "checkbox",
      "heading" => __("Automatically add paragraphs", "js_composer"),
      "param_name" => "filter"
    ),*/
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );


vc_map( array(
  "name" => 'WP ' . __("Recent Posts"),
  "base" => "vc_wp_posts",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('The most recent posts on your site', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Number of posts to show", "js_composer"),
      "param_name" => "number",
      "admin_label" => true
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Display post date?", "js_composer"),
      "param_name" => "show_date",
      "value" => array(__("Display post date?") => true )
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );


$link_category = array(__("All Links", "js_composer") => "");
$link_cats = get_terms( 'link_category' );
if ( is_array($link_cats) ) {
  foreach ( $link_cats as $link_cat ) {
    $link_category[$link_cat->name] = $link_cat->term_id;
  }
}
  vc_map( array(
    "name" => 'WP ' . __("Links"),
    "base" => "vc_wp_links",
    "icon" => "icon-wpb-wp",
    "category" => __("WordPress Widgets", "js_composer"),
    "class" => "wpb_vc_wp_widget",
    "weight" => -50,
    "description" => __('Your blogroll', 'js_composer'),
    "params" => array(
      array(
        "type" => "dropdown",
        "heading" => __("Link Category", "js_composer"),
        "param_name" => "category",
        "value" => $link_category,
        "admin_label" => true
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Sort by", "js_composer"),
        "param_name" => "orderby",
        "value" => array(__("Link title", "js_composer") => "name", __("Link rating", "js_composer") => "rating", __("Link ID", "js_composer") => "id", __("Random", "js_composer") => "rand")
      ),
      array(
        "type" => "checkbox",
        "heading" => __("Options", "js_composer"),
        "param_name" => "options",
        "value" => array(__("Show Link Image", "js_composer") => "images", __("Show Link Name", "js_composer") => "name", __("Show Link Description", "js_composer") => "description", __("Show Link Rating", "js_composer") => "rating")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Number of links to show", "js_composer"),
        "param_name" => "limit"
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
      )
    )
  ) );

vc_map( array(
  "name" => 'WP ' . __("Categories"),
  "base" => "vc_wp_categories",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('A list or dropdown of categories', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "js_composer"),
      "param_name" => "options",
      "value" => array(__("Display as dropdown", "js_composer") => "dropdown", __("Show post counts", "js_composer") => "count", __("Show hierarchy", "js_composer") => "hierarchical")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );


vc_map( array(
  "name" => 'WP ' . __("Archives"),
  "base" => "vc_wp_archives",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('A monthly archive of your sites posts', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "js_composer"),
      "param_name" => "options",
      "value" => array(__("Display as dropdown", "js_composer") => "dropdown", __("Show post counts", "js_composer") => "count")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("RSS"),
  "base" => "vc_wp_rss",
  "icon" => "icon-wpb-wp",
  "category" => __("WordPress Widgets", "js_composer"),
  "class" => "wpb_vc_wp_widget",
  "weight" => -50,
  "description" => __('Entries from any RSS or Atom feed', 'js_composer'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "js_composer"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
    ),
    array(
      "type" => "textfield",
      "heading" => __("RSS feed URL", "js_composer"),
      "param_name" => "url",
      "description" => __("Enter the RSS feed URL.", "js_composer"),
      "admin_label" => true
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Items", "js_composer"),
      "param_name" => "items",
      "value" => array(__("10 - Default", "js_composer") => '', 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
      "description" => __("How many items would you like to display?", "js_composer"),
      "admin_label" => true
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "js_composer"),
      "param_name" => "options",
      "value" => array(__("Display item content?", "js_composer") => "show_summary", __("Display item author if available?", "js_composer") => "show_author", __("Display item date?", "js_composer") => "show_date")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "js_composer"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
    )
  )
) );

//PIRENKO
wpb_remove("vc_images_carousel");
wpb_remove("vc_separator");
wpb_remove("vc_text_separator");
wpb_remove("vc_toggle");
wpb_remove("vc_teaser_grid");
wpb_remove("vc_posts_grid");
wpb_remove("vc_twitter");
//wpb_remove("vc_progress_bar");
wpb_remove("vc_posts_slider");
wpb_remove("vc_pie");
wpb_remove("vc_carousel");

//PIRENKO


