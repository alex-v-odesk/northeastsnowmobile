<?php

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    if ( ! class_exists( 'ReduxFramework_select' ) ) {
        class ReduxFramework_select {

            /**
             * Field Constructor.
             * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
             *
             * @since ReduxFramework 1.0.0
             */
            function __construct( $field = array(), $value = '', $parent ) {
                $this->parent = $parent;
                $this->field  = $field;
                $this->value  = $value;
            }

            /**
             * Field Render Function.
             * Takes the vars and outputs the HTML for the field in the settings
             *
             * @since ReduxFramework 1.0.0
             */
            function render() {
                $sortable = ( isset( $this->field['sortable'] ) && $this->field['sortable'] ) ? ' select2-sortable"' : "";

                if ( ! empty( $sortable ) ) { // Dummy proofing  :P
                    $this->field['multi'] = true;
                }

                if ( ! empty( $this->field['data'] ) && empty( $this->field['options'] ) ) {
                    if ( empty( $this->field['args'] ) ) {
                        $this->field['args'] = array();
                    }

                    if ( $this->field['data'] == "elusive-icons" || $this->field['data'] == "elusive-icon" || $this->field['data'] == "elusive" ) {
                        $icons_file = ReduxFramework::$_dir . 'inc/fields/select/elusive-icons.php';
                        /**
                         * filter 'redux-font-icons-file}'
                         *
                         * @param  array $icon_file File for the icons
                         */
                        $icons_file = apply_filters( 'redux-font-icons-file', $icons_file );
                        /**
                         * filter 'redux/{opt_name}/field/font/icons/file'
                         *
                         * @param  array $icon_file File for the icons
                         */
                        $icons_file = apply_filters( "redux/{$this->parent->args['opt_name']}/field/font/icons/file", $icons_file );
                        if ( file_exists( $icons_file ) ) {
                            require_once( $icons_file );
                        }
                    }

                    $this->field['options'] = $this->parent->get_wordpress_data( $this->field['data'], $this->field['args'] );
                }

                if ( ! empty( $this->field['data'] ) && ( $this->field['data'] == "elusive-icons" || $this->field['data'] == "elusive-icon" || $this->field['data'] == "elusive" ) ) {
                    $this->field['class'] = " font-icons";
                }
                //if

                    //PIRENKOEDIT
        if( !empty( $this->field['data'] ) && empty( $this->field['options'] ) ) {

             $pattern = '/\.(gusto_fa-(?:\w+(?:-)?)+):before\s+{\s*content:\s*"(.+)";\s+}/';
            $subject = '.gusto_fa-glass:before {
              content: "\f000";
            }
            .gusto_fa-music:before {
              content: "\f001";
            }
            .gusto_fa-search:before {
              content: "\f002";
            }
            .gusto_fa-envelope-o:before {
              content: "\f003";
            }
            .gusto_fa-heart:before {
              content: "\f004";
            }
            .gusto_fa-star:before {
              content: "\f005";
            }
            .gusto_fa-star-o:before {
              content: "\f006";
            }
            .gusto_fa-user:before {
              content: "\f007";
            }
            .gusto_fa-film:before {
              content: "\f008";
            }
            .gusto_fa-th-large:before {
              content: "\f009";
            }
            .gusto_fa-th:before {
              content: "\f00a";
            }
            .gusto_fa-th-list:before {
              content: "\f00b";
            }
            .gusto_fa-check:before {
              content: "\f00c";
            }
            .gusto_fa-times:before {
              content: "\f00d";
            }
            .gusto_fa-search-plus:before {
              content: "\f00e";
            }
            .gusto_fa-search-minus:before {
              content: "\f010";
            }
            .gusto_fa-power-off:before {
              content: "\f011";
            }
            .gusto_fa-signal:before {
              content: "\f012";
            }
            .gusto_fa-gear:before,
            .gusto_fa-cog:before {
              content: "\f013";
            }
            .gusto_fa-trash-o:before {
              content: "\f014";
            }
            .gusto_fa-home:before {
              content: "\f015";
            }
            .gusto_fa-file-o:before {
              content: "\f016";
            }
            .gusto_fa-clock-o:before {
              content: "\f017";
            }
            .gusto_fa-road:before {
              content: "\f018";
            }
            .gusto_fa-download:before {
              content: "\f019";
            }
            .gusto_fa-arrow-circle-o-down:before {
              content: "\f01a";
            }
            .gusto_fa-arrow-circle-o-up:before {
              content: "\f01b";
            }
            .gusto_fa-inbox:before {
              content: "\f01c";
            }
            .gusto_fa-play-circle-o:before {
              content: "\f01d";
            }
            .gusto_fa-rotate-right:before,
            .gusto_fa-repeat:before {
              content: "\f01e";
            }
            .gusto_fa-refresh:before {
              content: "\f021";
            }
            .gusto_fa-list-alt:before {
              content: "\f022";
            }
            .gusto_fa-lock:before {
              content: "\f023";
            }
            .gusto_fa-flag:before {
              content: "\f024";
            }
            .gusto_fa-headphones:before {
              content: "\f025";
            }
            .gusto_fa-volume-off:before {
              content: "\f026";
            }
            .gusto_fa-volume-down:before {
              content: "\f027";
            }
            .gusto_fa-volume-up:before {
              content: "\f028";
            }
            .gusto_fa-qrcode:before {
              content: "\f029";
            }
            .gusto_fa-barcode:before {
              content: "\f02a";
            }
            .gusto_fa-tag:before {
              content: "\f02b";
            }
            .gusto_fa-tags:before {
              content: "\f02c";
            }
            .gusto_fa-book:before {
              content: "\f02d";
            }
            .gusto_fa-bookmark:before {
              content: "\f02e";
            }
            .gusto_fa-print:before {
              content: "\f02f";
            }
            .gusto_fa-camera:before {
              content: "\f030";
            }
            .gusto_fa-font:before {
              content: "\f031";
            }
            .gusto_fa-bold:before {
              content: "\f032";
            }
            .gusto_fa-italic:before {
              content: "\f033";
            }
            .gusto_fa-text-height:before {
              content: "\f034";
            }
            .gusto_fa-text-width:before {
              content: "\f035";
            }
            .gusto_fa-align-left:before {
              content: "\f036";
            }
            .gusto_fa-align-center:before {
              content: "\f037";
            }
            .gusto_fa-align-right:before {
              content: "\f038";
            }
            .gusto_fa-align-justify:before {
              content: "\f039";
            }
            .gusto_fa-list:before {
              content: "\f03a";
            }
            .gusto_fa-dedent:before,
            .gusto_fa-outdent:before {
              content: "\f03b";
            }
            .gusto_fa-indent:before {
              content: "\f03c";
            }
            .gusto_fa-video-camera:before {
              content: "\f03d";
            }
            .gusto_fa-picture-o:before {
              content: "\f03e";
            }
            .gusto_fa-pencil:before {
              content: "\f040";
            }
            .gusto_fa-map-marker:before {
              content: "\f041";
            }
            .gusto_fa-adjust:before {
              content: "\f042";
            }
            .gusto_fa-tint:before {
              content: "\f043";
            }
            .gusto_fa-edit:before,
            .gusto_fa-pencil-square-o:before {
              content: "\f044";
            }
            .gusto_fa-share-square-o:before {
              content: "\f045";
            }
            .gusto_fa-check-square-o:before {
              content: "\f046";
            }
            .gusto_fa-arrows:before {
              content: "\f047";
            }
            .gusto_fa-step-backward:before {
              content: "\f048";
            }
            .gusto_fa-fast-backward:before {
              content: "\f049";
            }
            .gusto_fa-backward:before {
              content: "\f04a";
            }
            .gusto_fa-play:before {
              content: "\f04b";
            }
            .gusto_fa-pause:before {
              content: "\f04c";
            }
            .gusto_fa-stop:before {
              content: "\f04d";
            }
            .gusto_fa-forward:before {
              content: "\f04e";
            }
            .gusto_fa-fast-forward:before {
              content: "\f050";
            }
            .gusto_fa-step-forward:before {
              content: "\f051";
            }
            .gusto_fa-eject:before {
              content: "\f052";
            }
            .gusto_fa-chevron-left:before {
              content: "\f053";
            }
            .gusto_fa-chevron-right:before {
              content: "\f054";
            }
            .gusto_fa-plus-circle:before {
              content: "\f055";
            }
            .gusto_fa-minus-circle:before {
              content: "\f056";
            }
            .gusto_fa-times-circle:before {
              content: "\f057";
            }
            .gusto_fa-check-circle:before {
              content: "\f058";
            }
            .gusto_fa-question-circle:before {
              content: "\f059";
            }
            .gusto_fa-info-circle:before {
              content: "\f05a";
            }
            .gusto_fa-crosshairs:before {
              content: "\f05b";
            }
            .gusto_fa-times-circle-o:before {
              content: "\f05c";
            }
            .gusto_fa-check-circle-o:before {
              content: "\f05d";
            }
            .gusto_fa-ban:before {
              content: "\f05e";
            }
            .gusto_fa-arrow-left:before {
              content: "\f060";
            }
            .gusto_fa-arrow-right:before {
              content: "\f061";
            }
            .gusto_fa-arrow-up:before {
              content: "\f062";
            }
            .gusto_fa-arrow-down:before {
              content: "\f063";
            }
            .gusto_fa-mail-forward:before,
            .gusto_fa-share:before {
              content: "\f064";
            }
            .gusto_fa-expand:before {
              content: "\f065";
            }
            .gusto_fa-compress:before {
              content: "\f066";
            }
            .gusto_fa-plus:before {
              content: "\f067";
            }
            .gusto_fa-minus:before {
              content: "\f068";
            }
            .gusto_fa-asterisk:before {
              content: "\f069";
            }
            .gusto_fa-exclamation-circle:before {
              content: "\f06a";
            }
            .gusto_fa-gift:before {
              content: "\f06b";
            }
            .gusto_fa-leaf:before {
              content: "\f06c";
            }
            .gusto_fa-fire:before {
              content: "\f06d";
            }
            .gusto_fa-eye:before {
              content: "\f06e";
            }
            .gusto_fa-eye-slash:before {
              content: "\f070";
            }
            .gusto_fa-warning:before,
            .gusto_fa-exclamation-triangle:before {
              content: "\f071";
            }
            .gusto_fa-plane:before {
              content: "\f072";
            }
            .gusto_fa-calendar:before {
              content: "\f073";
            }
            .gusto_fa-random:before {
              content: "\f074";
            }
            .gusto_fa-comment:before {
              content: "\f075";
            }
            .gusto_fa-magnet:before {
              content: "\f076";
            }
            .gusto_fa-chevron-up:before {
              content: "\f077";
            }
            .gusto_fa-chevron-down:before {
              content: "\f078";
            }
            .gusto_fa-retweet:before {
              content: "\f079";
            }
            .gusto_fa-shopping-cart:before {
              content: "\f07a";
            }
            .gusto_fa-folder:before {
              content: "\f07b";
            }
            .gusto_fa-folder-open:before {
              content: "\f07c";
            }
            .gusto_fa-arrows-v:before {
              content: "\f07d";
            }
            .gusto_fa-arrows-h:before {
              content: "\f07e";
            }
            .gusto_fa-bar-chart-o:before {
              content: "\f080";
            }
            .gusto_fa-twitter-square:before {
              content: "\f081";
            }
            .gusto_fa-facebook-square:before {
              content: "\f082";
            }
            .gusto_fa-camera-retro:before {
              content: "\f083";
            }
            .gusto_fa-key:before {
              content: "\f084";
            }
            .gusto_fa-gears:before,
            .gusto_fa-cogs:before {
              content: "\f085";
            }
            .gusto_fa-comments:before {
              content: "\f086";
            }
            .gusto_fa-thumbs-o-up:before {
              content: "\f087";
            }
            .gusto_fa-thumbs-o-down:before {
              content: "\f088";
            }
            .gusto_fa-star-half:before {
              content: "\f089";
            }
            .gusto_fa-heart-o:before {
              content: "\f08a";
            }
            .gusto_fa-sign-out:before {
              content: "\f08b";
            }
            .gusto_fa-linkedin-square:before {
              content: "\f08c";
            }
            .gusto_fa-thumb-tack:before {
              content: "\f08d";
            }
            .gusto_fa-external-link:before {
              content: "\f08e";
            }
            .gusto_fa-sign-in:before {
              content: "\f090";
            }
            .gusto_fa-trophy:before {
              content: "\f091";
            }
            .gusto_fa-github-square:before {
              content: "\f092";
            }
            .gusto_fa-upload:before {
              content: "\f093";
            }
            .gusto_fa-lemon-o:before {
              content: "\f094";
            }
            .gusto_fa-phone:before {
              content: "\f095";
            }
            .gusto_fa-square-o:before {
              content: "\f096";
            }
            .gusto_fa-bookmark-o:before {
              content: "\f097";
            }
            .gusto_fa-phone-square:before {
              content: "\f098";
            }
            .gusto_fa-twitter:before {
              content: "\f099";
            }
            .gusto_fa-facebook:before {
              content: "\f09a";
            }
            .gusto_fa-github:before {
              content: "\f09b";
            }
            .gusto_fa-unlock:before {
              content: "\f09c";
            }
            .gusto_fa-credit-card:before {
              content: "\f09d";
            }
            .gusto_fa-rss:before {
              content: "\f09e";
            }
            .gusto_fa-hdd-o:before {
              content: "\f0a0";
            }
            .gusto_fa-bullhorn:before {
              content: "\f0a1";
            }
            .gusto_fa-bell:before {
              content: "\f0f3";
            }
            .gusto_fa-certificate:before {
              content: "\f0a3";
            }
            .gusto_fa-hand-o-right:before {
              content: "\f0a4";
            }
            .gusto_fa-hand-o-left:before {
              content: "\f0a5";
            }
            .gusto_fa-hand-o-up:before {
              content: "\f0a6";
            }
            .gusto_fa-hand-o-down:before {
              content: "\f0a7";
            }
            .gusto_fa-arrow-circle-left:before {
              content: "\f0a8";
            }
            .gusto_fa-arrow-circle-right:before {
              content: "\f0a9";
            }
            .gusto_fa-arrow-circle-up:before {
              content: "\f0aa";
            }
            .gusto_fa-arrow-circle-down:before {
              content: "\f0ab";
            }
            .gusto_fa-globe:before {
              content: "\f0ac";
            }
            .gusto_fa-wrench:before {
              content: "\f0ad";
            }
            .gusto_fa-tasks:before {
              content: "\f0ae";
            }
            .gusto_fa-filter:before {
              content: "\f0b0";
            }
            .gusto_fa-briefcase:before {
              content: "\f0b1";
            }
            .gusto_fa-arrows-alt:before {
              content: "\f0b2";
            }
            .gusto_fa-group:before,
            .gusto_fa-users:before {
              content: "\f0c0";
            }
            .gusto_fa-chain:before,
            .gusto_fa-link:before {
              content: "\f0c1";
            }
            .gusto_fa-cloud:before {
              content: "\f0c2";
            }
            .gusto_fa-flask:before {
              content: "\f0c3";
            }
            .gusto_fa-cut:before,
            .gusto_fa-scissors:before {
              content: "\f0c4";
            }
            .gusto_fa-copy:before,
            .gusto_fa-files-o:before {
              content: "\f0c5";
            }
            .gusto_fa-paperclip:before {
              content: "\f0c6";
            }
            .gusto_fa-save:before,
            .gusto_fa-floppy-o:before {
              content: "\f0c7";
            }
            .gusto_fa-square:before {
              content: "\f0c8";
            }
            .gusto_fa-bars:before {
              content: "\f0c9";
            }
            .gusto_fa-list-ul:before {
              content: "\f0ca";
            }
            .gusto_fa-list-ol:before {
              content: "\f0cb";
            }
            .gusto_fa-strikethrough:before {
              content: "\f0cc";
            }
            .gusto_fa-underline:before {
              content: "\f0cd";
            }
            .gusto_fa-table:before {
              content: "\f0ce";
            }
            .gusto_fa-magic:before {
              content: "\f0d0";
            }
            .gusto_fa-truck:before {
              content: "\f0d1";
            }
            .gusto_fa-pinterest:before {
              content: "\f0d2";
            }
            .gusto_fa-pinterest-square:before {
              content: "\f0d3";
            }
            .gusto_fa-google-plus-square:before {
              content: "\f0d4";
            }
            .gusto_fa-google-plus:before {
              content: "\f0d5";
            }
            .gusto_fa-money:before {
              content: "\f0d6";
            }
            .gusto_fa-caret-down:before {
              content: "\f0d7";
            }
            .gusto_fa-caret-up:before {
              content: "\f0d8";
            }
            .gusto_fa-caret-left:before {
              content: "\f0d9";
            }
            .gusto_fa-caret-right:before {
              content: "\f0da";
            }
            .gusto_fa-columns:before {
              content: "\f0db";
            }
            .gusto_fa-unsorted:before,
            .gusto_fa-sort:before {
              content: "\f0dc";
            }
            .gusto_fa-sort-down:before,
            .gusto_fa-sort-asc:before {
              content: "\f0dd";
            }
            .gusto_fa-sort-up:before,
            .gusto_fa-sort-desc:before {
              content: "\f0de";
            }
            .gusto_fa-envelope:before {
              content: "\f0e0";
            }
            .gusto_fa-linkedin:before {
              content: "\f0e1";
            }
            .gusto_fa-rotate-left:before,
            .gusto_fa-undo:before {
              content: "\f0e2";
            }
            .gusto_fa-legal:before,
            .gusto_fa-gavel:before {
              content: "\f0e3";
            }
            .gusto_fa-dashboard:before,
            .gusto_fa-tachometer:before {
              content: "\f0e4";
            }
            .gusto_fa-comment-o:before {
              content: "\f0e5";
            }
            .gusto_fa-comments-o:before {
              content: "\f0e6";
            }
            .gusto_fa-flash:before,
            .gusto_fa-bolt:before {
              content: "\f0e7";
            }
            .gusto_fa-sitemap:before {
              content: "\f0e8";
            }
            .gusto_fa-umbrella:before {
              content: "\f0e9";
            }
            .gusto_fa-paste:before,
            .gusto_fa-clipboard:before {
              content: "\f0ea";
            }
            .gusto_fa-lightbulb-o:before {
              content: "\f0eb";
            }
            .gusto_fa-exchange:before {
              content: "\f0ec";
            }
            .gusto_fa-cloud-download:before {
              content: "\f0ed";
            }
            .gusto_fa-cloud-upload:before {
              content: "\f0ee";
            }
            .gusto_fa-user-md:before {
              content: "\f0f0";
            }
            .gusto_fa-stethoscope:before {
              content: "\f0f1";
            }
            .gusto_fa-suitcase:before {
              content: "\f0f2";
            }
            .gusto_fa-bell-o:before {
              content: "\f0a2";
            }
            .gusto_fa-coffee:before {
              content: "\f0f4";
            }
            .gusto_fa-cutlery:before {
              content: "\f0f5";
            }
            .gusto_fa-file-text-o:before {
              content: "\f0f6";
            }
            .gusto_fa-building-o:before {
              content: "\f0f7";
            }
            .gusto_fa-hospital-o:before {
              content: "\f0f8";
            }
            .gusto_fa-ambulance:before {
              content: "\f0f9";
            }
            .gusto_fa-medkit:before {
              content: "\f0fa";
            }
            .gusto_fa-fighter-jet:before {
              content: "\f0fb";
            }
            .gusto_fa-beer:before {
              content: "\f0fc";
            }
            .gusto_fa-h-square:before {
              content: "\f0fd";
            }
            .gusto_fa-plus-square:before {
              content: "\f0fe";
            }
            .gusto_fa-angle-double-left:before {
              content: "\f100";
            }
            .gusto_fa-angle-double-right:before {
              content: "\f101";
            }
            .gusto_fa-angle-double-up:before {
              content: "\f102";
            }
            .gusto_fa-angle-double-down:before {
              content: "\f103";
            }
            .gusto_fa-angle-left:before {
              content: "\f104";
            }
            .gusto_fa-angle-right:before {
              content: "\f105";
            }
            .gusto_fa-angle-up:before {
              content: "\f106";
            }
            .gusto_fa-angle-down:before {
              content: "\f107";
            }
            .gusto_fa-desktop:before {
              content: "\f108";
            }
            .gusto_fa-laptop:before {
              content: "\f109";
            }
            .gusto_fa-tablet:before {
              content: "\f10a";
            }
            .gusto_fa-mobile-phone:before,
            .gusto_fa-mobile:before {
              content: "\f10b";
            }
            .gusto_fa-circle-o:before {
              content: "\f10c";
            }
            .gusto_fa-quote-left:before {
              content: "\f10d";
            }
            .gusto_fa-quote-right:before {
              content: "\f10e";
            }
            .gusto_fa-spinner:before {
              content: "\f110";
            }
            .gusto_fa-circle:before {
              content: "\f111";
            }
            .gusto_fa-mail-reply:before,
            .gusto_fa-reply:before {
              content: "\f112";
            }
            .gusto_fa-github-alt:before {
              content: "\f113";
            }
            .gusto_fa-folder-o:before {
              content: "\f114";
            }
            .gusto_fa-folder-open-o:before {
              content: "\f115";
            }
            .gusto_fa-smile-o:before {
              content: "\f118";
            }
            .gusto_fa-frown-o:before {
              content: "\f119";
            }
            .gusto_fa-meh-o:before {
              content: "\f11a";
            }
            .gusto_fa-gamepad:before {
              content: "\f11b";
            }
            .gusto_fa-keyboard-o:before {
              content: "\f11c";
            }
            .gusto_fa-flag-o:before {
              content: "\f11d";
            }
            .gusto_fa-flag-checkered:before {
              content: "\f11e";
            }
            .gusto_fa-terminal:before {
              content: "\f120";
            }
            .gusto_fa-code:before {
              content: "\f121";
            }
            .gusto_fa-reply-all:before {
              content: "\f122";
            }
            .gusto_fa-mail-reply-all:before {
              content: "\f122";
            }
            .gusto_fa-star-half-empty:before,
            .gusto_fa-star-half-full:before,
            .gusto_fa-star-half-o:before {
              content: "\f123";
            }
            .gusto_fa-location-arrow:before {
              content: "\f124";
            }
            .gusto_fa-crop:before {
              content: "\f125";
            }
            .gusto_fa-code-fork:before {
              content: "\f126";
            }
            .gusto_fa-unlink:before,
            .gusto_fa-chain-broken:before {
              content: "\f127";
            }
            .gusto_fa-question:before {
              content: "\f128";
            }
            .gusto_fa-info:before {
              content: "\f129";
            }
            .gusto_fa-exclamation:before {
              content: "\f12a";
            }
            .gusto_fa-superscript:before {
              content: "\f12b";
            }
            .gusto_fa-subscript:before {
              content: "\f12c";
            }
            .gusto_fa-eraser:before {
              content: "\f12d";
            }
            .gusto_fa-puzzle-piece:before {
              content: "\f12e";
            }
            .gusto_fa-microphone:before {
              content: "\f130";
            }
            .gusto_fa-microphone-slash:before {
              content: "\f131";
            }
            .gusto_fa-shield:before {
              content: "\f132";
            }
            .gusto_fa-calendar-o:before {
              content: "\f133";
            }
            .gusto_fa-fire-extinguisher:before {
              content: "\f134";
            }
            .gusto_fa-rocket:before {
              content: "\f135";
            }
            .gusto_fa-maxcdn:before {
              content: "\f136";
            }
            .gusto_fa-chevron-circle-left:before {
              content: "\f137";
            }
            .gusto_fa-chevron-circle-right:before {
              content: "\f138";
            }
            .gusto_fa-chevron-circle-up:before {
              content: "\f139";
            }
            .gusto_fa-chevron-circle-down:before {
              content: "\f13a";
            }
            .gusto_fa-html5:before {
              content: "\f13b";
            }
            .gusto_fa-css3:before {
              content: "\f13c";
            }
            .gusto_fa-anchor:before {
              content: "\f13d";
            }
            .gusto_fa-unlock-alt:before {
              content: "\f13e";
            }
            .gusto_fa-bullseye:before {
              content: "\f140";
            }
            .gusto_fa-ellipsis-h:before {
              content: "\f141";
            }
            .gusto_fa-ellipsis-v:before {
              content: "\f142";
            }
            .gusto_fa-rss-square:before {
              content: "\f143";
            }
            .gusto_fa-play-circle:before {
              content: "\f144";
            }
            .gusto_fa-ticket:before {
              content: "\f145";
            }
            .gusto_fa-minus-square:before {
              content: "\f146";
            }
            .gusto_fa-minus-square-o:before {
              content: "\f147";
            }
            .gusto_fa-level-up:before {
              content: "\f148";
            }
            .gusto_fa-level-down:before {
              content: "\f149";
            }
            .gusto_fa-check-square:before {
              content: "\f14a";
            }
            .gusto_fa-pencil-square:before {
              content: "\f14b";
            }
            .gusto_fa-external-link-square:before {
              content: "\f14c";
            }
            .gusto_fa-share-square:before {
              content: "\f14d";
            }
            .gusto_fa-compass:before {
              content: "\f14e";
            }
            .gusto_fa-toggle-down:before,
            .gusto_fa-caret-square-o-down:before {
              content: "\f150";
            }
            .gusto_fa-toggle-up:before,
            .gusto_fa-caret-square-o-up:before {
              content: "\f151";
            }
            .gusto_fa-toggle-right:before,
            .gusto_fa-caret-square-o-right:before {
              content: "\f152";
            }
            .gusto_fa-euro:before,
            .gusto_fa-eur:before {
              content: "\f153";
            }
            .gusto_fa-gbp:before {
              content: "\f154";
            }
            .gusto_fa-dollar:before,
            .gusto_fa-usd:before {
              content: "\f155";
            }
            .gusto_fa-rupee:before,
            .gusto_fa-inr:before {
              content: "\f156";
            }
            .gusto_fa-cny:before,
            .gusto_fa-rmb:before,
            .gusto_fa-yen:before,
            .gusto_fa-jpy:before {
              content: "\f157";
            }
            .gusto_fa-ruble:before,
            .gusto_fa-rouble:before,
            .gusto_fa-rub:before {
              content: "\f158";
            }
            .gusto_fa-won:before,
            .gusto_fa-krw:before {
              content: "\f159";
            }
            .gusto_fa-bitcoin:before,
            .gusto_fa-btc:before {
              content: "\f15a";
            }
            .gusto_fa-file:before {
              content: "\f15b";
            }
            .gusto_fa-file-text:before {
              content: "\f15c";
            }
            .gusto_fa-sort-alpha-asc:before {
              content: "\f15d";
            }
            .gusto_fa-sort-alpha-desc:before {
              content: "\f15e";
            }
            .gusto_fa-sort-amount-asc:before {
              content: "\f160";
            }
            .gusto_fa-sort-amount-desc:before {
              content: "\f161";
            }
            .gusto_fa-sort-numeric-asc:before {
              content: "\f162";
            }
            .gusto_fa-sort-numeric-desc:before {
              content: "\f163";
            }
            .gusto_fa-thumbs-up:before {
              content: "\f164";
            }
            .gusto_fa-thumbs-down:before {
              content: "\f165";
            }
            .gusto_fa-youtube-square:before {
              content: "\f166";
            }
            .gusto_fa-youtube:before {
              content: "\f167";
            }
            .gusto_fa-xing:before {
              content: "\f168";
            }
            .gusto_fa-xing-square:before {
              content: "\f169";
            }
            .gusto_fa-youtube-play:before {
              content: "\f16a";
            }
            .gusto_fa-dropbox:before {
              content: "\f16b";
            }
            .gusto_fa-stack-overflow:before {
              content: "\f16c";
            }
            .gusto_fa-instagram:before {
              content: "\f16d";
            }
            .gusto_fa-flickr:before {
              content: "\f16e";
            }
            .gusto_fa-adn:before {
              content: "\f170";
            }
            .gusto_fa-bitbucket:before {
              content: "\f171";
            }
            .gusto_fa-bitbucket-square:before {
              content: "\f172";
            }
            .gusto_fa-tumblr:before {
              content: "\f173";
            }
            .gusto_fa-tumblr-square:before {
              content: "\f174";
            }
            .gusto_fa-long-arrow-down:before {
              content: "\f175";
            }
            .gusto_fa-long-arrow-up:before {
              content: "\f176";
            }
            .gusto_fa-long-arrow-left:before {
              content: "\f177";
            }
            .gusto_fa-long-arrow-right:before {
              content: "\f178";
            }
            .gusto_fa-apple:before {
              content: "\f179";
            }
            .gusto_fa-windows:before {
              content: "\f17a";
            }
            .gusto_fa-android:before {
              content: "\f17b";
            }
            .gusto_fa-linux:before {
              content: "\f17c";
            }
            .gusto_fa-dribbble:before {
              content: "\f17d";
            }
            .gusto_fa-skype:before {
              content: "\f17e";
            }
            .gusto_fa-foursquare:before {
              content: "\f180";
            }
            .gusto_fa-trello:before {
              content: "\f181";
            }
            .gusto_fa-female:before {
              content: "\f182";
            }
            .gusto_fa-male:before {
              content: "\f183";
            }
            .gusto_fa-gittip:before {
              content: "\f184";
            }
            .gusto_fa-sun-o:before {
              content: "\f185";
            }
            .gusto_fa-moon-o:before {
              content: "\f186";
            }
            .gusto_fa-archive:before {
              content: "\f187";
            }
            .gusto_fa-bug:before {
              content: "\f188";
            }
            .gusto_fa-vk:before {
              content: "\f189";
            }
            .gusto_fa-weibo:before {
              content: "\f18a";
            }
            .gusto_fa-renren:before {
              content: "\f18b";
            }
            .gusto_fa-pagelines:before {
              content: "\f18c";
            }
            .gusto_fa-stack-exchange:before {
              content: "\f18d";
            }
            .gusto_fa-arrow-circle-o-right:before {
              content: "\f18e";
            }
            .gusto_fa-arrow-circle-o-left:before {
              content: "\f190";
            }
            .gusto_fa-toggle-left:before,
            .gusto_fa-caret-square-o-left:before {
              content: "\f191";
            }
            .gusto_fa-dot-circle-o:before {
              content: "\f192";
            }
            .gusto_fa-wheelchair:before {
              content: "\f193";
            }
            .gusto_fa-vimeo-square:before {
              content: "\f194";
            }
            .gusto_fa-turkish-lira:before,
            .gusto_fa-try:before {
              content: "\f195";
            }
            .gusto_fa-plus-square-o:before {
              content: "\f196";
            }
            ';

            preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);

            $icons = array();
            $count_icons=0;
            foreach($matches as $match){
                $icons[$match[1]] =$match[1];
            }
            $this->field['options']=$icons;
        }       
        if ( !empty($this->field['data']) && ( $this->field['data'] == "awesome-icons"  ) ) {
            $this->field['class'] = " font-icons";
        }//if PIRENKOEDIT

                if ( ! empty( $this->field['options'] ) ) {
                    $multi = ( isset( $this->field['multi'] ) && $this->field['multi'] ) ? ' multiple="multiple"' : "";

                    if ( ! empty( $this->field['width'] ) ) {
                        $width = ' style="' . $this->field['width'] . '"';
                    } else {
                        $width = ' style="width: 40%;"';
                    }

                    $nameBrackets = "";
                    if ( ! empty( $multi ) ) {
                        $nameBrackets = "[]";
                    }

                    $placeholder = ( isset( $this->field['placeholder'] ) ) ? esc_attr( $this->field['placeholder'] ) : __( 'Select an item', 'redux-framework' );

                    if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                        $select2_params = json_encode( $this->field['select2'] );
                        $select2_params = htmlspecialchars( $select2_params, ENT_QUOTES );

                        echo '<input type="hidden" class="select2_params" value="' . $select2_params . '">';
                    }

                    if ( isset( $this->field['multi'] ) && $this->field['multi'] && isset( $this->field['sortable'] ) && $this->field['sortable'] && ! empty( $this->value ) && is_array( $this->value ) ) {
                        $origOption             = $this->field['options'];
                        $this->field['options'] = array();

                        foreach ( $this->value as $value ) {
                            $this->field['options'][ $value ] = $origOption[ $value ];
                        }

                        if ( count( $this->field['options'] ) < count( $origOption ) ) {
                            foreach ( $origOption as $key => $value ) {
                                if ( ! in_array( $key, $this->field['options'] ) ) {
                                    $this->field['options'][ $key ] = $value;
                                }
                            }
                        }
                    }

                    $sortable = ( isset( $this->field['sortable'] ) && $this->field['sortable'] ) ? ' select2-sortable"' : "";

                    echo '<select ' . $multi . ' id="' . $this->field['id'] . '-select" data-placeholder="' . $placeholder . '" name="' . $this->field['name'] . '' . $nameBrackets . $this->field['name_suffix'] . '" class="redux-select-item ' . $this->field['class'] . $sortable . '"' . $width . ' rows="6">';
                    echo '<option></option>';

                    foreach ( $this->field['options'] as $k => $v ) {
                        if ( is_array( $this->value ) ) {
                            $selected = ( is_array( $this->value ) && in_array( $k, $this->value ) ) ? ' selected="selected"' : '';
                        } else {
                            $selected = selected( $this->value, $k, false );
                        }

                        echo '<option value="' . $k . '"' . $selected . '>' . $v . '</option>';
                    }
                    //foreach

                    echo '</select>';
                } else {
                    echo '<strong>' . __( 'No items of this type were found.', 'redux-framework' ) . '</strong>';
                }
            } //function

            /**
             * Enqueue Function.
             * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
             *
             * @since ReduxFramework 1.0.0
             */
            function enqueue() {

                wp_enqueue_script(
                    'field-select-js',
                    ReduxFramework::$_url . 'inc/fields/select/field_select' . Redux_Functions::isMin() . '.js',
                    array( 'jquery', 'select2-js', 'redux-js' ),
                    time(),
                    true
                );

                wp_enqueue_style(
                    'redux-field-select-css',
                    ReduxFramework::$_url . 'inc/fields/select/field_select.css',
                    time(),
                    true
                );
            } //function
        } //class
    }