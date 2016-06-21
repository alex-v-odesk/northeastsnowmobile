<?php

if (!function_exists('array_column')) {

    /**
     * Returns the values from a single column of the input array, identified by
     * the $columnKey.
     *
     * Optionally, you may provide an $indexKey to index the values in the returned
     * array by the values from the $indexKey column in the input array.
     *
     * @param array $input A multi-dimensional array (record set) from which to pull
     *                     a column of values.
     * @param mixed $columnKey The column of values to return. This value may be the
     *                         integer key of the column you wish to retrieve, or it
     *                         may be the string key name for an associative array.
     * @param mixed $indexKey (Optional.) The column to use as the index/keys for
     *                        the returned array. This value may be the integer key
     *                        of the column, or it may be the string key name.
     * @return array
     */
    function array_column($input = null, $columnKey = null, $indexKey = null)
    {
        // Using func_get_args() in order to check for proper number of
        // parameters and trigger errors exactly as the built-in array_column()
        // does in PHP 5.5.
        $argc = func_num_args();
        $params = func_get_args();

        if ($argc < 2) {
            trigger_error("array_column() expects at least 2 parameters, {$argc} given", E_USER_WARNING);
            return null;
        }

        if (!is_array($params[0])) {
            trigger_error('array_column() expects parameter 1 to be array, ' . gettype($params[0]) . ' given', E_USER_WARNING);
            return null;
        }

        if (!is_int($params[1])
            && !is_float($params[1])
            && !is_string($params[1])
            && $params[1] !== null
            && !(is_object($params[1]) && method_exists($params[1], '__toString'))
        ) {
            trigger_error('array_column(): The column key should be either a string or an integer', E_USER_WARNING);
            return false;
        }

        if (isset($params[2])
            && !is_int($params[2])
            && !is_float($params[2])
            && !is_string($params[2])
            && !(is_object($params[2]) && method_exists($params[2], '__toString'))
        ) {
            trigger_error('array_column(): The index key should be either a string or an integer', E_USER_WARNING);
            return false;
        }

        $paramsInput = $params[0];
        $paramsColumnKey = ($params[1] !== null) ? (string) $params[1] : null;

        $paramsIndexKey = null;
        if (isset($params[2])) {
            if (is_float($params[2]) || is_int($params[2])) {
                $paramsIndexKey = (int) $params[2];
            } else {
                $paramsIndexKey = (string) $params[2];
            }
        }

        $resultArray = array();

        foreach ($paramsInput as $row) {

            $key = $value = null;
            $keySet = $valueSet = false;

            if ($paramsIndexKey !== null && array_key_exists($paramsIndexKey, $row)) {
                $keySet = true;
                $key = (string) $row[$paramsIndexKey];
            }

            if ($paramsColumnKey === null) {
                $valueSet = true;
                $value = $row;
            } elseif (is_array($row) && array_key_exists($paramsColumnKey, $row)) {
                $valueSet = true;
                $value = $row[$paramsColumnKey];
            }

            if ($valueSet) {
                if ($keySet) {
                    $resultArray[$key] = $value;
                } else {
                    $resultArray[] = $value;
                }
            }

        }

        return $resultArray;
    }

}


if (!class_exists('fount_options_config')) {

    class fount_options_config {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (1) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }
        }

        public function initSettings() {
            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            // If Redux is running as a plugin, this will remove the demo notice and links
            //add_action( 'redux/loaded', array( $this, 'remove_demo' ) );
            
            // Function to test the compiler hook and demo CSS output.
            // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
            //add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 2);
            
            // Change the arguments after they've been declared, but before the panel is created
            //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );
            
            // Change the default value of a field after it's been set, but before it's been useds
            //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );
            
            // Dynamically add a section. Can be also used to modify sections/fields
            //add_filter('redux/options/' . $this->args['opt_name'] . '/sections', array($this, 'dynamic_section'));

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        /**

          This is a test function that will let you see when the compiler hook occurs.
          It only runs if a field   set with compiler=>true is changed. NOT BEING USED FOR NOW.

         * */
        function compiler_action($options, $css) {
            //echo '<h1>The compiler hook has run!</h1>';
            
              // Demo of how to use the dynamic CSS and write your own static CSS file
              $filename = dirname(__FILE__) . '/../../../../css/theme_options.css';
              global $wp_filesystem;
              if( empty( $wp_filesystem ) ) {
                require_once( ABSPATH .'/wp-admin/includes/file.php' );
              WP_Filesystem();
              }

              if( $wp_filesystem ) {
                $wp_filesystem->put_contents(
                    $filename,
                    $css,
                    FS_CHMOD_FILE // predefined mode settings for WP files
                );
              }
        }

        /**

          Custom function for filtering the sections array. Good for child themes to override or add to the sections.
          Simply include this function in the child themes functions.php file.

          NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
          so you must use get_template_directory_uri() if you want to use any of the built in icons

         * */
        function dynamic_section($sections) {
            //$sections = array();
            $sections[] = array(
                'title' => __('Section via hook', 'redux-framework-demo'),
                'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
                'icon' => 'el-icon-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }

        /**

          Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

         * */
        function change_arguments($args) {
            //$args['dev_mode'] = true;

            return $args;
        }

        /**

          Filter hook for filtering the default value of any given field. Very useful in development mode.

         * */
        function change_defaults($defaults) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }

        // Remove the demo link and the notice of integrated demo from the redux-framework plugin
        function remove_demo() {

            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if (class_exists('ReduxFrameworkPlugin')) {
                remove_filter('plugin_row_meta', array(ReduxFrameworkPlugin::instance(), 'plugin_metalinks'), null, 2);

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
            }
        }

        public function setSections() {
            //Background Patterns Reader
            $sample_patterns_path = ReduxFramework::$_dir  . '../../../images/patterns/';
            $sample_patterns_url  = ReduxFramework::$_url  . '../../../images/patterns/';
            $sample_patterns      = array();
            if ( is_dir( $sample_patterns_path ) ) :
              if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                $sample_patterns = array();
                $sample_patterns[] = array( 'alt'=>'none','img' => $sample_patterns_url .'empty/prk_no_pattern.jpg' );

                while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                  if( (stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false) &&  stristr( $sample_patterns_file, '_@2X')===false) {
                    $name = explode(".", $sample_patterns_file);
                    $name = str_replace('.'.end($name), '', $sample_patterns_file);
                    $sample_patterns[] = array( 'alt'=>$name,'img' => $sample_patterns_url . $sample_patterns_file );
                  }
                }
              endif;
            endif;


            global $prk_select_font_options;
            $a = array_column($prk_select_font_options, 'value');
            $b = array_column($prk_select_font_options, 'label');
            $fonts_array=array_combine($a, $b);
            $prk_font_options = get_option('prk_font_plugin_option');
            if (is_array($prk_font_options)) {
                foreach ($prk_font_options as $font) 
                {
                    if ($font['erased']=="false" && !array_key_exists($font['value'],$fonts_array)) 
                    {
                        $fonts_array[$font['value']] = $font['label'];
                    }
                }
            }
            $social_options=array(
                'delicious' => 'Delicious',
                'deviantart' => 'Deviantart',
                'dribbble' => 'Dribbble',
                'facebook' => 'Facebook',
                'flickr' => 'Flickr',
                'gplus' => 'Google Plus',
                'instagram-filled' => 'Instagram',
                'linkedin' => 'Linkedin',
                'pinterest' => 'Pinterest',
                'skype' => 'Skype',
                'soundcloud' => 'Soundcloud',
                'twitter' => 'Twitter',
                'vimeo' => 'Vimeo',
                'youtube' => 'Youtube',
                'rss-1' => 'RSS'
            );

            ob_start();

            $ct             = wp_get_theme();
            $this->theme    = $ct;
            $item_name      = $this->theme->get('Name');
            $tags           = $this->theme->Tags;
            $screenshot     = $this->theme->get_screenshot();
            $class          = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'redux-framework-demo'), $this->theme->display('Name'));
            
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
                <?php endif; ?>

                <h4><?php echo $this->theme->display('Name'); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(__('By %s', 'redux-framework-demo'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(__('Version %s', 'redux-framework-demo'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . __('Tags', 'redux-framework-demo') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo $this->theme->display('Description'); ?></p>
            <?php
            if ($this->theme->parent()) {
                printf(' <p class="howto">' . __('This <a href="%1$s">child theme</a> requires its parent theme, %2$s.') . '</p>', __('http://codex.wordpress.org/Child_Themes', 'redux-framework-demo'), $this->theme->parent()->display('Name'));
            }
            ?>

                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

            $sampleHTML = '';
            if (file_exists(dirname(__FILE__) . '/info-html.html')) {
                /** @global WP_Filesystem_Direct $wp_filesystem  */
                global $wp_filesystem;
                if (empty($wp_filesystem)) {
                    require_once(ABSPATH . '/wp-admin/includes/file.php');
                    WP_Filesystem();
                }
                $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
            }

            // ACTUAL DECLARATION OF SECTIONS
            $this->sections[] = array(
                'title'     => __('General', 'redux-framework-demo'),
                'desc'      => __('', 'redux-framework-demo'),
                'icon'      => 'el-icon-cogs',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields'    => array(
                    array(
                'id'=>'prk_responsive',
                'type' => 'switch', 
                'title' => __('Make the theme layout responsive?', 'fount_lang'),
                'subtitle'=> __('Make theme adjust to smaller screens.', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
            ),
            array(
                'id'=>'prk_detect_retina',
                'type' => 'switch', 
                'title' => __('Detect and serve better images on retina screens?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
            ),
            /* array(
                'id'=>'layout',
                'type' => 'select',
                'title' => __('Layout type?', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => array('wide_fount' => 'Wide','boxed_fount' => 'Boxed'),
                'default' => array('wide_fount' => 'Wide'),
                'compiler' => 'true'
            ), */
            array(
                'id'=>'custom_width',
                'type' => 'text',
                'title' => __('Maximum content width', 'fount_lang'),
                'subtitle' => __('Numeric values only.', 'fount_lang'),
                'desc' => __('How much the center content will stretch. Not applicable on some pages.', 'fount_lang'),
                'validate' => 'numeric',
                'default' => '1140',
                'class' => 'small-text',
                'compiler' => 'true'
            ),
            /* array(
                'id'=>'ajax_calls',
                'type' => 'switch', 
                'title' => __('Use Ajax calls to load content?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                'desc' => __('If on the theme will attempt to load all content using Ajax calls. This will speed up the website page loading process and allow some elements to have smoother transitions.', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
                ), */
            array(
                'id'=>'backend_fonts',
                'type' => 'info',
                'desc' => __('Text', 'fount_lang')
            ),
            array(
                'id'=>'header_font',
                'type' => 'select',
                'class' => 'prk_hide_default',
                'title' => __('Headings font', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => $fonts_array,//Must provide key => value pairs for select options
                'default' => "Raleway:300,400,500,600,700",
                'compiler' => 'true'
            ),
            array(
                'id'=>'body_font',
                'type' => 'select',
                'title' => __('Body font', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => $fonts_array,//Must provide key => value pairs for select options
                'default' => "Open+Sans:400italic,600italic,700italic,400,600,700",
                'compiler' => 'true'
            ),
            array(
                'id'=>'custom_font',
                'type' => 'select',
                'title' => __('Extra font', 'fount_lang'), 
                'subtitle' => __('Optional', 'fount_lang'),
                'desc' => __('To apply this font to certain elements simply add the CSS class <strong>custom_font</strong>', 'fount_lang'),
                'options' => $fonts_array,//Must provide key => value pairs for select options
                'default' => "",
                'compiler' => 'true'
            ),
            array(
                'id'=>'headings_align',
                'type' => 'select',
                'title' => __('Pages and single posts heading alignment?', 'fount_lang'), 
                'subtitle' => __('Default value is Three.', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => array('head_left_text' => __('Left', 'fount_lang'),'head_center_text' => __('Centred', 'fount_lang'),'head_right_text' => __('Right', 'fount_lang')),
                'default' => 'head_center_text',
                'compiler' => 'true'
            ), 
            array(
                'id'=>'backend_gn_colors',
                'type' => 'info',
                'desc' => __('Colors: General', 'fount_lang')
            ),
            array(
                'id'=>'use_custom_colors',
                'type' => 'switch', 
                'title' => __('Use special colors for single posts, portfolio entries and team members?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
                ),
            /*array(
                'id'=>'boxed_image',
                'type' => 'media', 
                'title' => __('Background image', 'fount_lang'),
                'compiler' => 'true',
                'default'=> array(
                    'url'=>'', 
                    'id'=>'', 
                    'width'=>'', 
                    'height'=>'',
                ),  
                'desc'=> __('Optional', 'fount_lang'),
                'subtitle' => __('Only for boxed layouts.', 'fount_lang'),
                'required' => array('layout','equals','boxed_fount'),
                'compiler' => 'true'
                ),*/
            array(
                'id'=>'pattern',
                'type' => 'image_select', 
                'tiles' => true,
                'title' => __('Background pattern', 'fount_lang'),
                'subtitle'=> __('Optional', 'fount_lang'),
                'desc'=> __('To add more place them inside wp-content/themes/fount/images/patterns/', 'fount_lang'),
                'default'       => '',
                'options' => $sample_patterns,
                'compiler' => 'true'
            ),
            array( 'id'=>'site_background_color', 
                'type' => 'color', 
                'title' => __('Site Background Color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'), 
                'default' => '#ffffff', 
                'validate' => 'color', 
                'transparent' => false, 
                'compiler' => 'true'
            ),
            array(
                'id'=>'active_color',
                'type' => 'color',
                'title' => __('Text active color', 'fount_lang'), 
                'subtitle' => __('Will be applied on mostly on hover effects.', 'fount_lang'),
                'default' => '#e67e22',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'bd_headings_color',
                'type' => 'color',
                'title' => __('Text headings color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#313539',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'bd_smallers_color',
                'type' => 'color',
                'title' => __('Text small headings color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#acacac',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'inactive_color',
                'type' => 'color',
                'title' => __('Body text color', 'fount_lang'), 
                'subtitle' => __('Pick a color for the regular text.', 'fount_lang'),
                'default' => '#6b6b6b',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
            ),
            array( 'id'=>'thumbs_text_color', 
                'type' => 'color', 
                'title' => __('Thumbnails text color', 'fount_lang'), 
                'subtitle' => __('Blog and portfolio', 'fount_lang'), 
                'default' => '#ffffff', 
                'validate' => 'color', 
                'transparent' => false,
                'compiler' => 'true'
            ),
            array( 'id'=>'background_color_btns_blog', 
                'type' => 'color', 
                'title' => __('Thumbnails rollover color - Blog (default value)', 'fount_lang'), 
                'subtitle' => __('Posts with a featured color will override this option', 'fount_lang'), 
                'default' => '#313539', 
                'validate' => 'color', 
                'transparent' => false,
                'compiler' => 'true'
            ),
            array(
                'id'=>'custom_opacity',
                'type' => 'slider', 
                'title' => __('Custom Background Opacity - Blog rollover effects', 'fount_lang'),
                'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                "default"       => "60",
                "min"       => "0",
                "step"      => "5",
                "max"       => "100",
                'compiler' => 'true'
            ),
            array( 'id'=>'background_color_btns', 
                'type' => 'color', 
                'title' => __('Thumbnails rollover color - Portfolio (default value)', 'fount_lang'), 
                'subtitle' => __('Posts with a featured color will override this option', 'fount_lang'), 
                'default' => '#e67e22', 
                'validate' => 'color', 
                'transparent' => false, 
                'compiler' => 'true'
            ),
            array(
                'id'=>'custom_opacity_folio',
                'type' => 'slider', 
                'title' => __('Custom Background Opacity - Portfolio rollover effects', 'fount_lang'),
                'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                "default"       => "90",
                "min"       => "0",
                "step"      => "5",
                "max"       => "100",
                'compiler' => 'true'
            ),
            array(
                'id'=>'backend_lb_colors',
                'type' => 'info',
                'desc' => __('Colors: Textfields, lines and borders', 'fount_lang')
            ),
            array( 
                'id'=>'lines_color', 'type' => 'color', 
                'title' => __('Lines color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'), 
                'default' => '#dedede', 
                'validate' => 'color', 
                'transparent' => false,
                'compiler' => 'true'
            ),
            array( 
                'id'=>'shadow_color', 'type' => 'color', 
                'title' => __('Shadow color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'), 
                'default' => '#313539', 
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
            ),
            array(
                'id'=>'custom_shadow',
                'type' => 'slider', 
                'title' => __('Shadow opacity', 'fount_lang'),
                'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                "default"       => "30",
                "min"       => "0",
                "step"      => "5",
                "max"       => "100",
                'compiler' => 'true'
            ),
            array(
                'id'=>'background_color',
                'type' => 'color',
                'title' => __('Textfields background color', 'fount_lang'), 
                'subtitle' => __('Will also be used on other elements (Ex: pricing tables)', 'fount_lang'),
                'default' => '#ffffff',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
            ),
            array(
                'id'=>'inputs_bordercolor',
                'type' => 'color',
                'title' => __('Textfields border color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#e8e8e8',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
            ),
            array(
                'id'=>'backend_btn_colors',
                'type' => 'info',
                'desc' => __('Colors and styling: Buttons', 'fount_lang')
            ),
            array(
                'id'=>'buttons_style',
                'type' => 'select',
                'title' => __('General style?', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => array('solid_buttons' => 'Always solid colors','bordered_buttons' => 'Bordered if mouse is not over'),
                'default' => 'bordered_buttons',
                'compiler' => 'true'
            ),
            array(
                'id'=>'buttons_font',
                'type' => 'select',
                'title' => __('Buttons font', 'fount_lang'), 
                'subtitle' => __('Select the font face to be used for the theme buttons.', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => array('headings_f' => __('Headings font', 'fount_lang'),'body_f' => __('Body font', 'fount_lang'),'custom_f' => __('Extra font', 'fount_lang')),
                'default' => 'headings_f',
                'compiler' => 'true'
            ),
            array(
                'id'=>'uppercase_buttons',
                'type' => 'switch', 
                'title' => __('Uppercase text on buttons?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
            ),
            array( 'id'=>'buttons_radius', 
                'type' => 'slider', 
                'title' => __('Border radius', 'fount_lang'), 
                'subtitle' => __('Use 0 for squared buttons', 'fount_lang'), 
                'desc'=> __('Min: 0, max: 40', 'fount_lang'),
                "default"       => "3",
                "min"       => "0",
                "step"      => "1",
                "max"       => "100",
                'compiler' => 'true'
            ),
            array(
                'id'=>'buttons_inner_shadow',
                'type' => 'switch', 
                'title' => __('Apply inner shadow on buttons?', 'fount_lang'),
                'subtitle'=> __('Will be placed on the lower part of the button.', 'fount_lang'),
                "default"       => 0,
                'required' => array('buttons_style','equals','solid_buttons'), 
                'compiler' => 'true'
            ),
            array( 'id'=>'theme_buttons_color', 
                'type' => 'color', 
                'title' => __('Buttons background or border color', 'fount_lang'), 
                'subtitle' => __('The alternative background color will be the theme current active color', 'fount_lang'), 
                'default' => '#222222', 
                'validate' => 'color', 
                'transparent' => false, 
                'compiler' => 'true'
            ),
            array( 'id'=>'buttons_color', 
                'type' => 'color', 
                'title' => __('Slider and navigation buttons background color', 'fount_lang'), 
                'subtitle' => __('The arrows color will be the current active color', 'fount_lang'), 
                'default' => '#111111', '
                validate' => 'color', 
                'transparent' => false, 
                'compiler' => 'true'
            ),
            array(
                'id'=>'backend_gn_colors_oth',
                'type' => 'info',
                'desc' => __('Colors: Other', 'fount_lang')
            ),
            array(
                'id'=>'preloader_color',
                'type' => 'color',
                'title' => __('Preloader color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#e67e22',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'background_color_dots',
                'type' => 'color',
                'title' => __('Navigation dots up color', 'fount_lang'), 
                'subtitle' => __('Will be used only if dotted navigation is active for a page', 'fount_lang'),
                'default' => '#000000',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'tips_text_color',
                'type' => 'color',
                'title' => __('Tooltips text color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#ffffff',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'tips_background_color',
                'type' => 'color',
                'title' => __('Tooltips background color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#000000',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'tips_background_opacity',
                'type' => 'slider', 
                'title' => __('Tooltips background opacity', 'fount_lang'),
                'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                "default"       => "100",
                "min"       => "0",
                "step"      => "5",
                "max"       => "100",
                'compiler' => 'true'
                ),
            array(
                'id'=>'members_social_colors',
                'type' => 'color',
                'title' => __('Team members social networks color', 'fount_lang'), 
                'subtitle' => __('Will be used only on icons displayed inside member thumbnails', 'fount_lang'),
                'default' => '#AA9047',
                'validate' => 'color',
                'transparent' => false,
                'compiler' => 'true'
                ),
            array(
                'id'=>'backend_sdb_sidebars',
                'type' => 'info',
                'desc' => __('Sidebars and Other', 'fount_lang')
            ), 
            array(
                'id'=>'right_sidebar',
                'type' => 'switch', 
                'title' => __('Display right sidebar by default?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 1,
                'compiler' => 'true'
            ),
            array(
                'id'=>'right_bar',
                'type' => 'switch', 
                'title' => __('Display right hidden sidebar?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 0,
                'compiler' => 'true'
            ),
            array(
                'id'=>'right_bar_width',
                'type' => 'text',
                'title' => __('Right hidden bar width', 'fount_lang'), 
                'subtitle' => __('In pixels.', 'fount_lang'),
                'desc' => __('Default value is 380.', 'fount_lang'),
                'validate' => 'numeric',
                'default' => '380',
                'class' => 'small-text',
                'required' => array('right_bar','equals','1'),
                'compiler' => 'true'
                ),
            array(
                'id'=>'right_bar_align',
                'type' => 'select',
                'title' => __('Right hidden bar text alignment?', 'fount_lang'), 
                'subtitle' => __('Default value is centred.', 'fount_lang'),
                'desc' => __('', 'fount_lang'),
                'options' => array('head_left_text' => __('Left', 'fount_lang'),'head_center_text' => __('Centred', 'fount_lang'),'head_right_text' => __('Right', 'fount_lang')),
                'required' => array('right_bar','equals','1'),
                'default' => 'head_center_text',
                'compiler' => 'true'
            ), 
            array(
                'id'=>'background_image_right_bar',
                'type' => 'media', 
                'title' => __('Right hidden bar background image', 'fount_lang'),
                'compiler' => 'true',
                'default'=> array(
                    'url'=>'', 
                    'id'=>'', 
                    'width'=>'', 
                    'height'=>'',
                ),  
                'desc'=> __('Optional', 'fount_lang'),
                'required' => array('right_bar','equals','1'),
                'subtitle' => __('', 'fount_lang'),
            ),
            array(
                'id'=>'background_color_right_bar',
                'type' => 'color',
                'title' => __('Right hidden bar background color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#111111',
                'validate' => 'color',
                'transparent' => false,
                'required' => array('right_bar','equals','1'),
                'compiler' => 'true'
            ),
            array(
                'id'=>'active_color_right_bar',
                'type' => 'color',
                'title' => __('Right hidden bar active text color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#ffffff',
                'validate' => 'color',
                'transparent' => false,
                'required' => array('right_bar','equals','1'),
                'compiler' => 'true'
                ),
            array(
                'id'=>'body_color_right_bar',
                'type' => 'color',
                'title' => __('Right hidden bar text color', 'fount_lang'), 
                'subtitle' => __('', 'fount_lang'),
                'default' => '#969696',
                'validate' => 'color',
                'transparent' => false,
                'required' => array('right_bar','equals','1'),
                'compiler' => 'true' 
                ),
            array(
                'id'=>'right_bar_footer_id',
                'type' => 'select',
                'data' => 'sidebars',
                'title' => __('Extra sidebar ID', 'fount_lang'),
                'subtitle' => __('Sidebars can be created under Appearance>Manage Sidebars', 'fount_lang'),
                'desc' => __('Leave blank if no extra sidebar is needed.', 'fount_lang'),
                'required' => array('right_bar','equals','1'),
                ),
            array(
                'id'=>'backend_sdb_mobile',
                'type' => 'info',
                'desc' => __('Mobile devices features', 'fount_lang')
            ),
            array(
                'id'=>'touch_enable',
                'type' => 'switch', 
                'title' => __('Enable drag feature for sliders on mobile devices?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 0,
                'compiler' => 'true'
            ),
            array(
                'id'=>'css_enable',
                'type' => 'switch', 
                'title' => __('Enable CSS animations for page elements on mobile devices?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 0,
                'compiler' => 'true'
            ),
            array(
                'id'=>'autoplay_enable',
                'type' => 'switch', 
                'title' => __('Enable sliders autoplay on mobile devices?', 'fount_lang'),
                'subtitle'=> __('', 'fount_lang'),
                "default"       => 0,
                'compiler' => 'true'
            ),
            ));
            $this->sections[] = array(
            'icon' => 'el-icon-star',
            'title' => __('Branding', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'logo',
                    'type' => 'media', 
                    'title' => __('Logo', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>get_template_directory_uri().'/images/logo.png', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('', 'fount_lang'),
                    'subtitle' => __('Leave blank if logo is not needed.', 'fount_lang'),
                    ),
                array(
                    'id'=>'logo_retina',
                    'type' => 'media', 
                    'title' => __('Logo retina screens', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>get_template_directory_uri().'/images/logo-retina.png', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('', 'fount_lang'),
                    'subtitle' => __('Optional - If used should be the double size of the original logo image.', 'fount_lang'),
                ),
                array(
                    'id'=>'logo_collasped',
                    'type' => 'media', 
                    'title' => __('Logo - After scroll', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>get_template_directory_uri().'/images/logo.png', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('', 'fount_lang'),
                    'subtitle' => __('Optional - Will be shown after scrolling the page. Must have the same dimensions as the logo before scroll.', 'fount_lang'),
                    ),
                array(
                    'id'=>'logo_retina_collasped',
                    'type' => 'media', 
                    'title' => __('Logo retina screens - After scroll', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>get_template_directory_uri().'/images/logo-retina.png', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('', 'fount_lang'),
                    'subtitle' => __('Optional - Will be shown after scrolling the page. Must have the same dimensions as the logo before scroll.', 'fount_lang'),
                ),
                array(
                    'id'=>'favicon',
                    'type' => 'media', 
                    'title' => __('Favicon image', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>get_template_directory_uri().'/images/favicon.ico', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('Should have .ico as file extension.', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                ),
            )
        );
        $this->sections[] = array(
            'icon' => 'el-icon-list',
            'title' => __('Menu Bar', 'fount_lang'),
            'fields' => array(
                array( 'id'=>'menu_vertical', 
                    'type' => 'text', 
                    'title' => __('Menu height', 'fount_lang'), 
                    'subtitle' => __('In pixels.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '96', 
                    'class' => 'small-text' 
                ),
                array(
                    'id'=>'background_color_header',
                    'type' => 'color',
                    'title' => __('Menu bar background color', 'fount_lang'), 
                    'subtitle' => __('Pick a background color for the logo bar.', 'fount_lang'),
                    'default' => '#ffffff',
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array(
                'id'=>'header_default_opacity',
                'type' => 'slider', 
                'title' => __('Menu background opacity', 'fount_lang'),
                'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                "default"       => "0",
                "min"       => "0",
                "step"      => "5",
                "max"       => "100",
                ),
                 array( 'id'=>'menu_active_color', 
                    'type' => 'color', 
                    'title' => __('Menu active text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#e67e22', 
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array( 'id'=>'menu_up_color', 
                    'type' => 'color', 
                    'title' => __('Menu text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#ffffff', 
                    'validate' => 'color', 
                    'transparent' => false, 
                ),
                array(
                    'id'=>'menu_collapse_flag',
                    'type' => 'switch', 
                    'title' => __('Menu changes style after scrolling?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array( 'id'=>'menu_collapse_pixels', 
                    'type' => 'text', 
                    'title' => __('How many pixels before changing style?', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '200', 
                    'class' => 'small-text',
                    'required' => array('menu_collapse_flag','equals','1')
                ),
                array( 'id'=>'collapsed_menu_vertical', 
                    'type' => 'text', 
                    'title' => __('Menu height - after scroll', 'fount_lang'), 
                    'subtitle' => __('In pixels.', 'fount_lang'), 
                    'desc' => __('Use the same value as the menu height (option above) to disable the menu collapse effect.', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '66', 
                    'class' => 'small-text',
                    'required' => array('menu_collapse_flag','equals','1')
                ),
                array(
                    'id'=>'header_opacity',
                    'type' => 'slider', 
                    'title' => __('Menu background opacity - after scroll', 'fount_lang'),
                    'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                    "default"       => "95",
                    "min"       => "0",
                    "step"      => "5",
                    "max"       => "100",
                    'required' => array('menu_collapse_flag','equals','1')
                ),
                 array( 'id'=>'menu_active_color_after', 
                    'type' => 'color', 
                    'title' => __('Menu active text color - after scroll', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#e67e22', 
                    'validate' => 'color',
                    'transparent' => false,
                    'required' => array('menu_collapse_flag','equals','1')
                ),
                array( 'id'=>'menu_up_color_after', 
                    'type' => 'color', 
                    'title' => __('Menu text color - after scroll', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#8e8e8e', 
                    'validate' => 'color', 
                    'transparent' => false, 
                    'required' => array('menu_collapse_flag','equals','1')
                ),
                array(
                    'id'=>'menu_hide_flag',
                    'type' => 'switch', 
                    'title' => __('Menu hides after scrolling?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 0,
                ),
                array( 'id'=>'menu_hide_pixels', 
                    'type' => 'text', 
                    'title' => __('How many pixels before hiding menu?', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '370', 
                    'class' => 'small-text',
                    'required' => array('menu_hide_flag','equals','1')
                ),
                array( 'id'=>'submenu_active_color', 
                    'type' => 'color', 
                    'title' => __('Submenu active text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#e67e22', 
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array( 'id'=>'submenu_text_color', 
                    'type' => 'color', 
                    'title' => __('Submenu text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#8e8e8e', 
                    'validate' => 'color', 
                    'transparent' => false, 
                ),
                array( 'id'=>'submenu_active_background_color', 
                    'type' => 'color', 
                    'title' => __('Submenu active text background color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'default' => '#efefef', 
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array(
                    'id'=>'submenu_background_color',
                    'type' => 'color',
                    'title' => __('Submenu background color', 'fount_lang'), 
                    'subtitle' => __('Pick a background color for the sub-menus.', 'fount_lang'),
                    'default' => '#fafafa',
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array(
                    'id'=>'submenu_lines_color',
                    'type' => 'color',
                    'title' => __('Sub-menu divider lines color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#efefef',
                    'validate' => 'color',
                    'transparent' => false,
                ),
                array(
                    'id'=>'top_search',
                    'type' => 'switch', 
                    'title' => __('Display search icon after the menu?', 'fount_lang'),
                    'subtitle'=> __('Will be shown on the right side of the main menu', 'fount_lang'),
                    "default"       => 0,
                ),
            )
        );
        $this->sections[] = array(
            'icon' => 'el-icon-fork',
            'icon_class' => 'icon-large',
            'title' => __('Footer', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'use_footer',
                    'type' => 'switch', 
                    'title' => __('Display footer?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'footer_reveal',
                    'type' => 'switch', 
                    'title' => __('Make footer position fixed?', 'fount_lang'),
                    'subtitle'=> __('If yes it will create a reveal effect on the footer.', 'fount_lang'),
                    "default"       => 0,
                ),
                array(
                    'id'=>'bottom_sidebar',
                    'type' => 'switch', 
                    'title' => __('Display footer sidebar?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                    'compiler' => 'true'
                ),
                array(
                    'id'=>'widgets_nr',
                    'type' => 'select',
                    'title' => __('Number of widgets per row?', 'fount_lang'), 
                    'subtitle' => __('Default value is Three.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'options' => array('small-12' => __('One', 'fount_lang'),'small-6' => __('Two', 'fount_lang'),'small-4' => __('Three', 'fount_lang'),'small-3' => __('Four', 'fount_lang'),'small-2' => __('Six', 'fount_lang')),
                    'default' => 'small-3',
                    'required' => array('bottom_sidebar','equals','1'), 
                    'compiler' => 'true'
                ),
                array(
                    'id'=>'titles_color_footer',
                    'type' => 'color',
                    'title' => __('Footer titles and links text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#ffffff',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'body_color_footer',
                    'type' => 'color',
                    'title' => __('Footer text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#727272',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'background_color_footer',
                    'type' => 'color',
                    'title' => __('Footer background color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#1c1c1c',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'pattern_footer',
                    'type' => 'image_select', 
                    'tiles' => true,
                    'title' => __('Background pattern', 'fount_lang'),
                    'subtitle'=> __('Optional', 'fount_lang'),
                    'desc'=> __('To add more place them inside wp-content/themes/fount/images/patterns/', 'fount_lang'),
                    'default'       => '',
                    'options' => $sample_patterns,
                ),
                array(
                    'id'=>'footer_extra',
                    'type' => 'switch', 
                    'title' => __('Show extra section above footer?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 0,
                    ),
                array(
                    'id'=>'body_color_tiny_footer',
                    'type' => 'color',
                    'title' => __('Extra section text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#5f5f5f',
                    'validate' => 'color',
                    'transparent' => false,
                    'required' => array('footer_extra','equals','1'), 
                    ),
                array(
                    'id'=>'background_color_tiny_footer',
                    'type' => 'color',
                    'title' => __('Extra section background color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#161616',
                    'validate' => 'color',
                    'transparent' => false,
                    'required' => array('footer_extra','equals','1'), 
                    ),
                array(
                    'id'=>'footer_extra_image',
                    'type' => 'media', 
                    'title' => __('Extra section featured image', 'fount_lang'),
                    'compiler' => 'true',
                    'default'=> array(
                        'url'=>'', 
                        'id'=>'', 
                        'width'=>'', 
                        'height'=>'',
                    ),  
                    'desc'=> __('Optional', 'fount_lang'),
                    'required' => array('footer_extra','equals','1'), 
                    'subtitle' => __('', 'fount_lang'),
                ),
                array(
                    'id'=>'footer_extra_content',
                    'type' => 'editor',
                    'title' => __('Extra section text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => __('This is just some sample content.', 'fount_lang'),
                    'required' => array('footer_extra','equals','1'), 
                    'editor_options'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 3,
                        'media_buttons'    => false,
                        'tinymce'          => false
                    )
                ),
                array(
                    'id'=>'footer_text',
                    'type' => 'editor',
                    'title' => __('Under footer text (center or left aligned)', 'fount_lang'), 
                    'subtitle' => __('Space is limited so use very few text.', 'fount_lang'),
                    'default' => __('2014 - All rights reserved.', 'fount_lang'),
                    'editor_options'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 1,
                        'media_buttons'    => false,
                        'tinymce'          => false
                    )
                ),
                array(
                    'id'=>'footer_text_extra',
                    'type' => 'editor',
                    'title' => __('Extra under footer text (right aligned)', 'fount_lang'), 
                    'subtitle' => __('Space is limited so use very few text.', 'fount_lang'),
                    'default' => __('Proudly developed with Wordpress', 'fount_lang'),
                    'editor_options'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 1,
                        'media_buttons'    => false,
                        'tinymce'          => false
                    )
                ),
                
            )
        );

        $this->sections[] = array(
            'icon' => 'el-icon-calendar',
            'icon_class' => 'icon-large',
            'title' => __('Blog', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'custom_width_blog',
                    'type' => 'text',
                    'title' => __('Maximum blog content width', 'fount_lang'),
                    'subtitle' => __('In pixels.', 'fount_lang'),
                    'desc' => __("Will be applied only to blog pages/posts that don't have a right sidebar.", 'fount_lang'),
                    'validate' => 'numeric',
                    'default' => '800',
                    'class' => 'small-text'
                    ),
                array(
                    'id'=>'archives_type',
                    'type' => 'select',
                    'title' => __('Blog archives page template?', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'options' => array('masonry' => __('Masonry', 'fount_lang'),'centered' => __('Centered', 'fount_lang')),//Must provide key => value pairs for select options
                    'default' => 'masonry'
                ), 
                array(
                    'id'=>'autoplay_blog',
                    'type' => 'switch', 
                    'title' => __('Play slideshow on single posts?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ), 
                array( 'id'=>'delay_blog', 
                    'type' => 'text', 
                    'title' => __('Slideshow delay in miliseconds', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '6500', 
                    'class' => 'small-text' 
                ),
                array(
                    'id'=>'show_date_blog',
                    'type' => 'switch', 
                    'title' => __('Show dates on blog?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'postedby_blog',
                    'type' => 'switch', 
                    'title' => __('Show "Posted by" text on blog?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'categoriesby_blog',
                    'type' => 'switch', 
                    'title' => __('Show post categories text on blog?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'related_blog',
                    'type' => 'switch', 
                    'title' => __('Show previous and next posts link?', 'fount_lang'),
                    'subtitle'=> __('Will be shown under the post content.', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'related_author',
                    'type' => 'switch', 
                    'title' => __('Show author info under post?', 'fount_lang'),
                    'subtitle'=> __('Will be shown under the post content.', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'backend_bl_sharing',
                    'type' => 'info',
                    'desc' => __('Social Sharing', 'fount_lang')
                ),
                array(
                    'id'=>'share_blog',
                    'type' => 'switch', 
                    'title' => __('Show sharing buttons?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'share_blog_fb',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('Facebook', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_blog_goo',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('Google +', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_blog_lnk',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('LinkedIn', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_blog_pin',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('Pinterest', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_blog_stu',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('StumbleUpon', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_blog_twt',
                    'type' => 'checkbox',
                    'required' => array('share_blog','equals','1'), 
                    'title' => __('Twitter', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
            )
        );

        $this->sections[] = array(
            'icon' => 'el-icon-camera',
            'icon_class' => 'icon-large',
            'title' => __('Portfolio', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'archives_ptype',
                    'type' => 'select',
                    'title' => __('Portfolio archives page template?', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'options' => array(
                        'grid' => __('Grid with horizontal rectangular images', 'fount_lang'),
                        'grid_vertical' => __('Grid with vertical rectangular images', 'fount_lang'),
                        'squares' => __('Grid with squared images', 'fount_lang'),
                        'masonry' => __('Grid without image crop - Masonry', 'fount_lang')
                    ),
                    'default' => 'grid'
                ), 
                array(
                    'id'=>'portfolio_layout',
                    'type' => 'select',
                    'title' => __('Default single posts layout', 'fount_lang'), 
                    'subtitle' => __('Can be overriden individually for each post', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'options' => array('half' => __('Half', 'fount_lang') ,'wide' => __('Wide', 'fount_lang')),
                    'default' => array('half' => 'Half')
                    ),
                array(
                    'id'=>'autoplay_portfolio',
                    'type' => 'switch', 
                    'title' => __('Play slideshow on single posts?', 'fount_lang'),
                    'subtitle'=> __('Applicable only for posts with wide and half layout', 'fount_lang'),
                    "default"       => 1,
                ), 
                array( 'id'=>'delay_portfolio', 
                    'type' => 'text', 
                    'title' => __('Slideshow delay in miliseconds', 'fount_lang'), 
                    'subtitle' => __('Applicable only for posts with wide and half layout layout', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'validate' => 'numeric', 
                    'default' => '6500', 
                    'class' => 'small-text' 
                ),
                array(
                    'id'=>'dateby_port',
                    'type' => 'switch', 
                    'title' => __('Show date on single post entries?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'categoriesby_port',
                    'type' => 'switch', 
                    'title' => __('Show skills on single post entries?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                 array(
                    'id'=>'related_port',
                    'type' => 'switch', 
                    'title' => __('Show related posts in single post pages?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'backend_lb_overlayer',
                    'type' => 'info',
                    'desc' => __('Overlayer: will be shown above the content when a portfolio thumb is clicked', 'fount_lang')
                ),
                array(
                    'id'=>'active_color_overlayer',
                    'type' => 'color',
                    'title' => __('Overlayer headings text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#494f55',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                    array(
                    'id'=>'smallers_color_overlayer',
                    'type' => 'color',
                    'title' => __('Overlayer small headings text color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#acacac',
                    'validate' => 'color',
                    'transparent' => false,
                    'compiler' => 'true'
                ),
                array(
                    'id'=>'body_color_overlayer',
                    'type' => 'color',
                    'title' => __('Overlayer body color', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'default' => '#545b62',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'background_color_overlayer',
                    'type' => 'color',
                    'title' => __('Overlayer background color', 'fount_lang'), 
                    'default' => '#FFFFFF',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'lines_color_overlayer',
                    'type' => 'color',
                    'title' => __('Overlayer divider lines color', 'fount_lang'), 
                    'default' => '#dedede',
                    'validate' => 'color',
                    'transparent' => false,
                    ),
                array(
                    'id'=>'overlayer_opacity',
                    'type' => 'slider', 
                    'title' => __('Overlayer background opacity', 'fount_lang'),
                    'desc'=> __('Min: 0, max: 100', 'fount_lang'),
                    "default"       => "100",
                    "min"       => "0",
                    "step"      => "5",
                    "max"       => "100",
                ),
                array(
                    'id'=>'backend_lb_share_folio',
                    'type' => 'info',
                    'desc' => __('Social Sharing', 'fount_lang')
                ),
                array(
                    'id'=>'share_portfolio',
                    'type' => 'switch', 
                    'title' => __('Show sharing buttons?', 'fount_lang'),
                    'subtitle'=> __('', 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'share_portfolio_fb',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('Facebook', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_portfolio_goo',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('Google +', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_portfolio_lnk',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('LinkedIn', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_portfolio_pin',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('Pinterest', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_portfolio_stu',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('StumbleUpon', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
                array(
                    'id'=>'share_portfolio_twt',
                    'type' => 'checkbox',
                    'required' => array('share_portfolio','equals','1'), 
                    'title' => __('Twitter', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => '1'
                ),
            )
        );

        $this->sections[] = array(
            'icon' => 'el-icon-comment',
            'icon_class' => 'icon-large',
            'title' => __('Translations', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'theme_translation',
                    'type' => 'switch', 
                    'title' => __('Translate using .mo files?', 'fount_lang'),
                    'subtitle'=> __('If yes is selected the values below will be ignored. If WPML plugin is active the values below will be overriden too.', 'fount_lang'),
                    "default"       => 0,
                ),
                array(
                    'id'=>'backend_tr_general',
                    'type' => 'info',
                    'desc' => __('General', 'fount_lang')
                ),
                array( 
                    'id'=>'search_tip_text', 
                    'type' => 'text', 
                    'title' => __('Search field tip text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Search this website...', 'fount_lang'), 
                ),
                array( 
                    'id'=>'submit_search_res_title', 
                    'type' => 'text', 
                    'title' => __('Search results page title text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Search Results for', 'fount_lang'),
                ),
                array( 
                    'id'=>'submit_search_no_results', 
                    'type' => 'text', 
                    'title' => __('Search results - no results found text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('No Results Found for', 'fount_lang'),
                ),
                array(
                    'id'=>'previous_text',
                    'type' => 'text',
                    'title' => __('Previous entries text', 'fount_lang'),
                    'subtitle' => __('Will be used on search page navigation', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Previous', 'fount_lang'),
                ),
                array(
                    'id'=>'next_text',
                    'type' => 'text',
                    'title' => __('Next entries text', 'fount_lang'),
                    'subtitle' => __('Will be used on search page navigation', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Next', 'fount_lang'),
                ),
                array( 
                    'id'=>'required_text', 
                    'type' => 'text', 
                    'title' => __('Required text', 'fount_lang'), 
                    'subtitle' => __('Used on mandatory fields.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __(' (required)', 'fount_lang'),
                ),
                array(
                    'id'=>'profile_text',
                    'type' => 'text',
                    'title' => __('Members view profile link text', 'fount_lang'),
                    'subtitle' => __('Shown under each member image and description', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('VIEW PROFILE', 'fount_lang'),
                ),
                array( 
                    'id'=>'in_touch_text', 
                    'type' => 'text', 
                    'title' => __('Get in touch text', 'fount_lang'), 
                    'subtitle' => __('Used near team member social network buttons.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Get In touch', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_error_page',
                    'type' => 'info',
                    'desc' => __('404 Error Page', 'fount_lang')
                ),
                array( 
                    'id'=>'404_title_text', 
                    'type' => 'text', 
                    'title' => __('Page title text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Page not found', 'fount_lang'),
                ),
                array(
                    'id'=>'404_body_text',
                    'type' => 'textarea',
                    'title' => __('Page body text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'),
                    'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                    'default' => __('We do not know how you ended up here, but please could you try again by selecting an option on the menu?', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_blog',
                    'type' => 'info',
                    'desc' => __('Blog', 'fount_lang')
                ),
                array( 
                    'id'=>'to_blog', 
                    'type' => 'text', 
                    'title' => __('Back to Blog button text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('To Blog', 'fount_lang'),
                ),
                array( 
                    'id'=>'read_more', 
                    'type' => 'text', 
                    'title' => __('Read more button text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Read More', 'fount_lang'),
                ),
                array( 
                    'id'=>'sticky_text', 
                    'type' => 'text', 
                    'title' => __('Sticky post text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Sticky Post', 'fount_lang'),
                ),
                array( 
                    'id'=>'posted_by_text', 
                    'type' => 'text', 
                    'title' => __('Posted by text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Posted by', 'fount_lang'),
                ),
                array(
                    'id'=>'on_text',
                    'type' => 'text',
                    'title' => __('On text', 'fount_lang'),
                    'subtitle' => __('Will be used on some blog sentences.', 'fount_lang'),
                    'desc' => __('Posted on Jan 13th.', 'fount_lang'),
                    'default' => __('on', 'fount_lang'),
                ),
                array( 
                    'id'=>'about_author_text', 
                    'type' => 'text', 
                    'title' => __('About text', 'fount_lang'), 
                    'subtitle' => __('Displayed before post author name.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('About', 'fount_lang'),
                ),
                array( 
                    'id'=>'older', 
                    'type' => 'text', 
                    'title' => __('Older posts text', 'fount_lang'), 
                    'subtitle' => __('Used for navigation on blog pages.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Older posts', 'fount_lang'),
                ),
                array( 
                    'id'=>'newer', 
                    'type' => 'text', 
                    'title' => __('Newer posts text', 'fount_lang'), 
                    'subtitle' => __('Used for navigation on blog pages.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Newer posts', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_portfolio',
                    'type' => 'info',
                    'desc' => __('Portfolio', 'fount_lang')
                ),
                array(
                    'id'=>'prj_desc_text',
                    'type' => 'text',
                    'title' => __('Project description text', 'astro_lang'),
                    'subtitle' => __('Will be displayed just above the project text.', 'astro_lang'),
                    'desc' => __('', 'astro_lang'),
                    'default' => __('About this project', 'fount_lang'),
                ),
                array(
                    'id'=>'date_text',
                    'type' => 'text',
                    'title' => __('Date text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Date', 'fount_lang'),
                ),
                array(
                    'id'=>'client_text',
                    'type' => 'text',
                    'title' => __('Client description text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Client', 'fount_lang'),
                ),
                array(
                    'id'=>'skills_text',
                    'type' => 'text',
                    'title' => __('Category description text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Skills', 'fount_lang'),
                ),
                array(
                    'id'=>'tags_text',
                    'type' => 'text',
                    'title' => __('Tag description text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Tags', 'fount_lang'),
                ),
                array(
                    'id'=>'project_text',
                    'type' => 'text',
                    'title' => __('Project link header text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Project URL', 'fount_lang'),
                ),
                array(
                    'id'=>'launch_text',
                    'type' => 'text',
                    'title' => __('Project link button text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Launch Project', 'fount_lang'),
                ),
                array(
                    'id'=>'to_portfolio',
                    'type' => 'text',
                    'title' => __('Back to Portfolio button text', 'fount_lang'),
                    'subtitle' => __('Will be used on tooltips', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('To Portfolio', 'fount_lang'),
                ),
                array(
                    'id'=>'prj_info_text',
                    'type' => 'text',
                    'title' => __('Open project text', 'fount_lang'),
                    'subtitle' => __('', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Open Project', 'fount_lang'),
                ),
                array( 
                    'id'=>'all_text', 
                    'type' => 'text', 
                    'title' => __('All text', 'fount_lang'), 
                    'subtitle' => __('Used on filters. Will show all posts on current page.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('All', 'fount_lang'),
                ),
                array( 
                    'id'=>'load_more', 
                    'type' => 'text', 
                    'title' => __('Load more posts text', 'fount_lang'), 
                    'subtitle' => __('Will be shown under the posts grid.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('LOAD MORE POSTS', 'fount_lang'),
                ),
                array( 
                    'id'=>'related_prj_text', 
                    'type' => 'text', 
                    'title' => __('Related projects text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Related Projects', 'fount_lang'),
                ),
                array( 
                    'id'=>'related_prj_teaser_text', 
                    'type' => 'text', 
                    'title' => __('Related projects sub-heading text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Simply delivering amazing stuff. Period.', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_comments',
                    'type' => 'info',
                    'desc' => __('Comments Section', 'fount_lang')
                ),
                array( 
                    'id'=>'comments_label', 'type' => 'text', 
                    'title' => __('Comments title text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Comments', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_no_response', 
                    'type' => 'text', 
                    'title' => __('Zero comments text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('No comments', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_one_response', 
                    'type' => 'text', 
                    'title' => __('One comment text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('1 Comment', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_oneplus_response', 
                    'type' => 'text', 
                    'title' => __('Multiple comments text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Comments', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_respond',
                    'type' => 'info',
                    'desc' => __('Respond Section', 'fount_lang')
                ),
                array( 
                    'id'=>'reply_text', 
                    'type' => 'text', 
                    'title' => __('Reply text', 'fount_lang'), 
                    'subtitle' => __('Used on buttons.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Reply', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_leave_reply', 
                    'type' => 'text', 
                    'title' => __('Text to ask the user to leave a reply', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Leave a Comment', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_under_reply', 
                    'type' => 'text', 
                    'title' => __('Compementary text shown under the leave a reply text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Your feedback is valuable for us. Your email will not be published.', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_author_text', 
                    'type' => 'text', 
                    'title' => __('Name input field text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside the author input textfield.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Name', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_email_text', 
                    'type' => 'text', 
                    'title' => __('Email input field text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside the email input textfield.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Email', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_url_text', 
                    'type' => 'text', 
                    'title' => __('URL input field text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside the URL input textfield.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Website', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_comment_text', 
                    'type' => 'text', 
                    'title' => __('Comment input textarea text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside the comment input textarea.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Your comment', 'fount_lang'),
                ),
                array( 
                    'id'=>'comments_submit', 
                    'type' => 'text', 
                    'title' => __('Submit comment button text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Submit Comment', 'fount_lang'),
                ),
                array( 
                    'id'=>'empty_text_error', 
                    'type' => 'text', 
                    'title' => __('Empty text error message', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Error! This field is required.', 'fount_lang'),
                ),
                array( 
                    'id'=>'invalid_email_error', 
                    'type' => 'text', 
                    'title' => __('Invalid email error message', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Error! Invalid email.', 'fount_lang'),
                ),
                array( 'id'=>'comment_ok_message', 
                    'type' => 'text', 
                    'title' => __('Comment submitted text', 'fount_lang'), 
                    'subtitle' => __('This text is displayed after the comment is submitted.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Thank you for your feedback!', 'fount_lang'),
                ),
                array(
                    'id'=>'backend_tr_respond',
                    'type' => 'info',
                    'desc' => __('Contact Page', 'fount_lang')
                ),
                array( 
                    'id'=>'contact_subject_text', 
                    'type' => 'text', 
                    'title' => __('Subject help text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside of the subject input textfield. The name and email fields are the same as defined before for the comments section.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Subject', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_message_text', 
                    'type' => 'text', 'title' => __('Message help text', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed inside of the message input textfield.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Your message', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_submit', 
                    'type' => 'text', 'title' => __('Submit button text', 'fount_lang'), 
                    'subtitle' => __('', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Send Message', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_error_text', 
                    'type' => 'text', 
                    'title' => __('Error message for empty field', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed when a mandatory input field is empty.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Error! This field is required.', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_error_email_text', 
                    'type' => 'text', 
                    'title' => __('Error message for invalid email', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed when the entered email is invalid.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Error! This email is not valid.', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_wait_text', 
                    'type' => 'text', 
                    'title' => __('Form submission: Wait message', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed right after the send message button is clicked and only until the email is sent.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'), 
                    'default' => __('Please wait...', 'fount_lang'),
                ),
                array( 
                    'id'=>'contact_ok_text', 
                    'type' => 'text', 
                    'title' => __('Form submission: Ok message', 'fount_lang'), 
                    'subtitle' => __('This text will be displayed after sending the email.', 'fount_lang'), 
                    'desc' => __('', 'fount_lang'),
                    'default' => __('Thank you for contacting us. We will reply soon!', 'fount_lang'),
                ),
            )
        );
        if (PRK_WOO=="true") 
        {
            $this->sections[] = array(
            'icon' => 'el-icon-shopping-cart',
            'icon_class' => 'icon-large',
            'title' => __('Woocommerce', 'fount_lang'),
            'fields' => array(
                array( 
                    'id'=>'woo_subheading', 
                    'type' => 'text', 
                    'title' => __('Shop pages subheadings', 'fount_lang'), 
                    'subtitle' => __('Leave blank if this is not needed', 'fount_lang'), 
                    'desc' => __('Will be displayed under the page title', 'fount_lang'),
                    'default' => __('A stunning place to get your stuff the easy way.', 'fount_lang'),
                ),
                array(
                    'id'=>'woo_sidebar_display',
                    'type' => 'switch', 
                    'title' => __('Display right sidebar by default?', 'fount_lang'),
                    'subtitle'=> __("This option will apply only to WooCommerce Core Pages that aren't set up using shortcodes. If you want to display/hide a sidebar on a specific page add ?sidebar=y or ?sidebar=n to your link URL", 'fount_lang'),
                    "default"       => 1,
                ),
                array(
                    'id'=>'woo_cart_display',
                    'type' => 'select',
                    'data' => 'pages',
                    'title' => __('Add Shopping Cart info to the main menu?', 'fount_lang'),
                    'subtitle' => __('Select the menu page to append info.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    ),
                array(
                    'id'=>'woo_cart_info',
                    'type' => 'select', 
                    'title' => __('Cart information?', 'fount_lang'),
                    'subtitle'=> __("Will be appended to the shop or cart button", 'fount_lang'),
                    'options' => array('items' => __('Items only', 'fount_lang'),'price' => __('Price Only', 'fount_lang'),'both' => __('Items and Price', 'fount_lang')),
                    'default' => array('both' => 'Items and Price')
                ),
                array(
                    'id'=>'woo_cart_always_display',
                    'type' => 'switch', 
                    'title' => __('Show Shopping Cart info even when it is empty?', 'fount_lang'),
                    'subtitle'=> __("", 'fount_lang'),
                    "default"       => 0,
                ),
            )
        );
        }
        $this->sections[] = array(
            'icon' => 'el-icon-wrench',
            'icon_class' => 'icon-large',
            'title' => __('Custom Scripts', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'ganalytics_text',
                    'type' => 'textarea',
                    'title' => __('Tracking Code', 'fount_lang'), 
                    'subtitle' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'fount_lang'),
                    'validate_callback' => 'analytics_validate_callback_function',
                    'desc' => '',
                ),
                array(
                    'id'=>'css_text',
                    'type' => 'textarea',
                    'title' => __('Custom CSS', 'fount_lang'), 
                    'subtitle' => __('Quickly add some CSS to your theme by adding it to this block.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'default'       => '',
                    'validate' => 'css',
                ),
                array(
                    'id'=>'js_text',
                    'type' => 'textarea',
                    'title' => __('Custom Javascript', 'fount_lang'), 
                    'subtitle' => __('Add some js scripting here', 'fount_lang'),
                    'desc' => "For object targeting use 'jQuery' prefix instead of the default '$' notation.",
                ),
            )
        );
        $this->sections[] = array(
            'icon' => 'el-icon-key',
            'icon_class' => 'icon-large',
            'title' => __('Advanced settings', 'fount_lang'),
            'fields' => array(
                array(
                    'id'=>'info_warning_slugs',
                    'type'=>'info',
                    'style'=>'warning',
                    'header'=> __( 'This is a header.', 'fount_lang' ),
                    'desc' => __( "If changes don't apply immediately it is related to Wordpress permalinks. After making your changes here you need to go to Settings>Reading and change permalinks structure to default. Save changes and then revert it to previous state.", 'fount_lang')
                ),
                array(
                    'id'=>'portfolio_slug',
                    'type' => 'text',
                    'title' => __('Portfolios slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'portfolios'
                    ),
                array(
                    'id'=>'skills_slug',
                    'type' => 'text',
                    'title' => __('Skills slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('Portfolio hierarchical category', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'skills'
                    ),
                array(
                    'id'=>'folio_tags_slug',
                    'type' => 'text',
                    'title' => __('Portfolio tag slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('Portfolio non-hierarchical category', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'tagged'
                    ),
                array(
                    'id'=>'slides_slug',
                    'type' => 'text',
                    'title' => __('Slides slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'slides'
                    ),
                array(
                    'id'=>'groups_slug',
                    'type' => 'text',
                    'title' => __('Slides groups slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('Slides hierarchical category', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'group'
                    ),
                array(
                    'id'=>'members_slug',
                    'type' => 'text',
                    'title' => __('Members slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'member'
                    ),
                array(
                    'id'=>'team_slug',
                    'type' => 'text',
                    'title' => __('Team slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('Members hierarchical category', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'team'
                    ),
                array(
                    'id'=>'testimonials_slug',
                    'type' => 'text',
                    'title' => __('Testimonials slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'testimonials'
                    ),
                array(
                    'id'=>'testimonials_groups_slug',
                    'type' => 'text',
                    'title' => __('Testimonials groups slug', 'fount_lang'),
                    'subtitle' => __('No special characters and must be unique.', 'fount_lang'),
                    'desc' => __('Testimonials hierarchical category', 'fount_lang'),
                    'validate' => 'no_special_chars',
                    'default' => 'testimonials_group'
                    ),
            )
        );

            $this->sections[] = array(
                'title'     => __('Import / Export', 'redux-framework-demo'),
                'desc'      => __('Import and Export your Redux Framework settings from file, text or URL.', 'redux-framework-demo'),
                'icon'      => 'el-icon-refresh',
                'fields'    => array(
                    array(
                        'id'            => 'opt-import-export',
                        'type'          => 'import_export',
                        'title'         => __('Import Export','redux-framework-demo'),
                        'subtitle'      => __('Save and restore your Redux options','redux-framework-demo'),
                        'full_width'    => false,
                    ),
                ),
            );                     
                    
            $this->sections[] = array(
                'type' => 'divide',
            );

            $this->sections[] = array(
                'icon'      => 'el-icon-info-sign',
                'title'     => __('Theme Information', 'redux-framework-demo'),
                'desc'      => __('<p class="description">Fount - Hybrid Wordpress Theme</p>', 'redux-framework-demo'),
                'fields'    => array(
                    array(
                        'id'        => 'opt-raw-info',
                        'type'      => 'raw',
                        'content'   => $item_info,
                    )
                ),
            );

            if (file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
                $tabs['docs'] = array(
                    'icon'      => 'el-icon-book',
                    'title'     => __('Documentation', 'redux-framework-demo'),
                    'content'   => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
                );
            }
        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-1',
                'title'     => __('Theme Information 1', 'redux-framework-demo'),
                'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => __('Theme Information 2', 'redux-framework-demo'),
                'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
        }

        /**

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

         * */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'prk_fount_options',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name').__(" Control Panel","fount_lang"),
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => __('Fount Options', 'redux-framework-demo'),
                'page_title'        => __('Fount Options', 'redux-framework-demo'),
                
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => '', // Must be defined to add google fonts to the typography module
                
                'async_typography'  => false,                    // Use a asynchronous font on the front end or font string
                'admin_bar'         => true,                    // Show the panel pages on the admin bar
                'global_variable'   => '',                      // Set a different name for your global variable other than the opt_name
                'dev_mode'          => false,                    // Show the time the page took to load, etc
                'customizer'        => true,                    // Enable basic customizer support
                
                // OPTIONAL -> Give you extra features
                'page_priority'     => null,                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent'       => 'themes.php',            // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions'  => 'manage_options',        // Permissions needed to access the options panel.
                'menu_icon'         => '',                      // Specify a custom URL to an icon
                'last_tab'          => '',                      // Force your panel to always open to a specific tab (by id)
                'page_icon'         => 'icon-themes',           // Icon displayed in the admin panel next to your menu_title
                'page_slug'         => '_options',              // Page slug used to denote the panel
                'save_defaults'     => true,                    // On load save the defaults to DB before user clicks save or not
                'default_show'      => false,                   // If true, shows the default value next to each field that is not the default value.
                'default_mark'      => '',                      // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true,                   // Shows the Import/Export panel when not used as a field.
                
                // CAREFUL -> These options are for advanced use only
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => false,                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag'        => true,                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database'              => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info'           => false, // REMOVE

                // HINTS
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                )
            );

            // Add content after the form.
            $this->args['footer_text'] = __('','fount_lang');
        }

    }
    
    global $reduxConfig;
    $reduxConfig = new fount_options_config();
}

/**
  Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')):
    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
endif;

/**
  Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')):
    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';

        /*
          do your validation

          if(something) {
            $value = $value;
          } elseif(something else) {
            $error = true;
            $value = $existing_value;
            $field['msg'] = 'your custom error message';
          }
         */

        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }
endif;
