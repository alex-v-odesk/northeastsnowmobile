<?php
$output = $title = $values = $units = $bgcolor = $custombgcolor = $custombgcolor_back = $options = $el_class = '';
extract( shortcode_atts( array(
    'title' => '',
    'values' => '',
    'units' => '',
    'bgcolor' => 'bar_grey',
    'custombgcolor' => '',
    'custombgcolor_back' => '',
    'options' => '',
    'el_class' => ''
), $atts ) );
wp_enqueue_script( 'waypoints' );

$el_class = $this->getExtraClass($el_class);

//PIRENKOEDIT
$my_color="";


$bar_options = '';
$options = explode(",", $options);
if (in_array("animated", $options)) $bar_options .= " animated";
if (in_array("striped", $options)) $bar_options .= " striped";

if ($bgcolor=="custom" && $custombgcolor!='') { $my_color=$custombgcolor; $custombgcolor = ' style="background-color: '.$custombgcolor.';"'; $bgcolor=""; }
if ($bgcolor!="") $bgcolor = " ".$bgcolor;

$inline="";
if ($custombgcolor_back!="")
{
    $inline=' style="background-color: '.$custombgcolor_back.';"';
}

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_progress_bar wpb_content_element'.$el_class, $this->settings['base']);
$output = '<div class="'.$css_class.'">';
$output .= wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_progress_bar_heading'));

$graph_lines = explode(",", $values);
$max_value = 0.0;
$graph_lines_data = array();
foreach ($graph_lines as $line) {
    $new_line = array();
    $color_index = 2;
    $data = explode("|", $line);
    $new_line['value'] = isset($data[0]) ? $data[0] : 0;
    $new_line['percentage_value'] = isset($data[1]) && preg_match('/^\d{1,2}\%$/', $data[1]) ? (float)str_replace('%', '', $data[1]) : false;
    if($new_line['percentage_value']!=false) {
        $color_index+=1;
        $new_line['label'] = isset($data[2]) ? $data[2] : '';
    } else {
        $new_line['label'] = isset($data[1]) ? $data[1] : '';
    }
    $new_line['bgcolor'] = (isset($data[$color_index])) ? ' style="background-color: '.$data[$color_index].';"' : $custombgcolor;

    if($new_line['percentage_value']===false && $max_value < (float)$new_line['value']) {
        $max_value = $new_line['value'];
    }

    $graph_lines_data[] = $new_line;
}

foreach($graph_lines_data as $line) {
    if ($my_color!="") {
        $unit = ($units!='') ? ' <div class="small_squared not_zero_color regular_font" style="color: '.$my_color.';">' .  $line['value'] . $units . '</div> ' : '';
    }
    else
    {
        $unit = ($units!='') ? ' <div class="small_squared regular_font">' .  $line['value'] . $units . '</div> ' : '';
    }
    if ($unit!='')
    {
        $output .= '<div class="vc_single_bar'.$bgcolor.'"'.$inline.'>';
    }
    else
    {
        $output .= '<div class="vc_single_bar fount_no_info'.$bgcolor.'"'.$inline.'>';
    }
    $output .= '<small class="vc_label">'. $unit . $line['label'] .'</small>';
    if($line['percentage_value']!==false) {
        $percentage_value = $line['percentage_value'];
    } elseif($max_value > 100.00) {
        $percentage_value = (float)$line['value'] > 0 && $max_value > 100.00 ? round((float)$line['value']/$max_value*100, 4) : 0;
    } else {
        $percentage_value = $line['value'];
    }
    $output .= '<span class="vc_bar'.$bar_options.'" data-percentage-value="'.($percentage_value).'" data-value="'.$line['value'].'"'.$line['bgcolor'].'></span>';
    $output .= '</div>';
}

$output .= '</div>';

echo $output . $this->endBlockComment('progress_bar') . "\n";