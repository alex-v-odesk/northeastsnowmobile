<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $bk_element = $vid_mp4 = $vid_webm ='';
extract(shortcode_atts(array(
    'el_class'        => '',
    'anchor_id'       => '',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'row_height'   => '',
    'bk_type' =>'',
    'align' =>'',
    'bk_element' => '',
    'vid_mp4' =>'',
    'vid_webm' =>'',
    'css_animation'
), $atts));
if ($bk_type=="full_width")
    $prk_css_classes=" prk_full_width prk_section";
else
    $prk_css_classes="";
if ($align=="Left")
{
    $prk_css_classes.=" fount_align_left";
}
if ($align=="Center")
{
    $prk_css_classes.=" fount_align_center";
}
if ($align=="Right")
{
    $prk_css_classes.=" fount_align_right";
}
if ($row_height!="")
{
    $prk_css_classes.=" ".$row_height;
}
if (isset($atts['anchor_id']) && $atts['anchor_id']!="")
{
    $row_id='id="'.$atts['anchor_id'].'" ';
    $id_css_classes=" fount_row_with_id fount_row";
}
else
{
    $row_id='';
    $id_css_classes=' fount_row';
}
$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_row '.get_row_css_class().$el_class, $this->settings['base']);
if ($this->settings['base']=="vc_row_inner")
{
    $prk_css_classes=" fount_inner_row";
}
if (isset($atts['css_animation']) && $atts['css_animation']!="")
    $prk_css_classes.=" wpb_animate_when_almost_visible wpb_".$atts['css_animation'];
if (isset($atts['bg_image_repeat']) && $atts['bg_image_repeat']=='parallax')
{
    $parallax_code=' data-bottom-top="background-position: 50% 0%;" data-top-bottom="background-position: 50% 100%;"';
    $prk_css_classes.=" fount_with_parallax";
}
else
{
    $parallax_code='';
}
if (isset($atts['bg_image_repeat']) && $atts['bg_image_repeat']=='fixed_cover')
{
    $prk_css_classes.=" fount_fixed_bg";
}

//VIDEO SUPPORT
$video_code='';
if (isset($atts['bk_element']) && $atts['bk_element']=='video')
{
    $vid_mp4=$vid_webm=$custom_poster=$vid_parallax_code=$vid_class="";
    if (isset($atts['vid_image']) && $atts['vid_image']!="")
    {
        $image_attributes = wp_get_attachment_image_src( $atts['vid_image'],'full' );
        $custom_poster=' poster="'.$image_attributes[0].'"';
    }
    if (isset($atts['vid_parallax']) && $atts['vid_parallax']=="yes")
    {
        $vid_class=" parallax_video";
        $vid_parallax_code=' data-bottom-top="bottom: 0px;" data-top-bottom="bottom: 50px;"';//50px will be changed using jQuery
    }
    if (isset($atts['vid_mp4']) && $atts['vid_mp4']!="")
    {
        $vid_mp4=$atts['vid_mp4'];
    }
    if (isset($atts['vid_webm']) && $atts['vid_webm']!="")
    {
        $vid_webm=$atts['vid_webm'];
    }
    $video_code='<video class="fount_video-bg'.$vid_class.'" autoplay="autoplay" preload="auto" muted="" loop=""'.$custom_poster.$vid_parallax_code.'>';
    $video_code.='<source src="'.$vid_mp4.'" type="video/mp4">';
    $video_code.='<source src="'.$vid_webm.'" type="video/webm">';
    $video_code.='</video>';
    $prk_css_classes.=" fount_with_video";
}

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
if ($bk_type=="full_width") {
    $output .= '<div '.$row_id.'class="'.$css_class.$prk_css_classes.$id_css_classes.'" '.$style.$parallax_code.'>';
        $output .=$video_code;
        $output .= '<div class="small-12 columns">';
            $output .= '<div class="extra_pad prk_inner_block columns small-centered clearfix">';
                $output .= wpb_js_remove_wpautop($content);
            $output .= '</div>';
        $output .= '</div>';
    $output .= '</div>'.$this->endBlockComment('row');
}
else if ($bk_type=="pirenko_super_width") {
    $output .= '<div '.$row_id.'class="small-12 fount_super_width '.$css_class.$prk_css_classes.$id_css_classes.'" '.$style.$parallax_code.'>';
        $output .=$video_code;
        $output .= '<div class="extra_pad columns small-12 clearfix">';
            $output .= '<div class="row">';
                $output .= wpb_js_remove_wpautop($content);
            $output .= '</div>';
        $output .= '</div>';
    $output .= '</div>'.$this->endBlockComment('row');
}
else {
    $output .= '<div '.$row_id.'class="fount_regular_row'.$id_css_classes.'">';
        $output .=$video_code;
        $output .= '<div class="'.$css_class.$prk_css_classes.'"'.$style.$parallax_code.'>';
            $output .= '<div class="small-12 columns">';
                $output .= '<div class="prk_inner_block columns small-centered clearfix">';
                    $output .= wpb_js_remove_wpautop($content);
                $output .= '</div>';
            $output .= '</div>';
        $output .= '</div>';
    $output .= '</div>'.$this->endBlockComment('row');
}
$output.='<div class="clearfix"></div>';
echo $output;

//PIRENKOEDIT
