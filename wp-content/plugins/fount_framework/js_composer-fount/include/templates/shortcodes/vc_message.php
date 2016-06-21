<?php
$output = $color = $el_class = $css_animation = '';
extract(shortcode_atts(array(
    'color' => 'alert-info',
    'el_class' => '',
    'style' => '',
    'css_animation' => ''
), $atts));
$el_class = $this->getExtraClass($el_class);
echo $el_class;
$class = "";
//$style = "square_outlined";
$class .= ($style!='') ? ' vc_alert_'.$style : '';
$class .= ( $color != '' && $color != "alert-block") ? ' wpb_'.$color : '';

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_alert wpb_content_element' . $class . $el_class, $this->settings['base'], $atts );

$css_class .= $this->getCSSAnimation($css_animation);
if ($class=="")
	$current_icon='<i class="fount_fa-info-circle"></i>';
if (strpos($class,"wpb_alert-info"))
	$current_icon='<i class="fount_fa-exclamation-triangle"></i>';
if (strpos($class,"wpb_alert-success"))
	$current_icon='<i class="fount_fa-check-circle"></i>';
if (strpos($class,"wpb_alert-error"))
	$current_icon='<i class="fount_fa-times-circle"></i>';
echo '<div class="'.$css_class.'">';
	echo $current_icon;
	echo '<div class="messagebox_text">';
	echo wpb_js_remove_wpautop($content, true);
	echo '</div>';
echo '</div>';
echo $this->endBlockComment('alert box')."\n";