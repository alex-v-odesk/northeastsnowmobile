var timer = require('grunt-timer');

module.exports = function(grunt) {
    'use strict';

    timer.init(grunt, {deferLogs: true, friendlyTime: true});

    // Gruntfile variables - update your project theme name
    var globalConfig = {
        themeRoot: 'wp-content/themes/fount-child',
        scripts: 'wp-content/themes/fount-child/assets/scripts',
        css: 'wp-content/themes/fount-child/assets/css',
        videos: 'wp-content/themes/fount-child/assets/videos',
        images: 'wp-content/themes/fount-child/assets/images',
        scss: 'wp-content/themes/fount-child/assets/scss'
    };

    grunt.initConfig({
        globalConfig: globalConfig,
        //loads grunt tasks from package.json
        pkg: grunt.file.readJSON('package.json'),
        // Reloads/updates/syncs all open browser windows
        browserSync: {
            debug: {
                bsFiles: {
                    src: [
                        '<%= globalConfig.scripts %>/site/*.js',
                        '<%= globalConfig.scripts %>/libraries/modernizr-custom.js',
                        '<%= globalConfig.themeRoot %>/**/*.php',
                        '<%= globalConfig.images %>/**/*.{jpg,jpeg,gif,png,svg}',
                        '<%= globalConfig.videos %>/**/*.{mp4,ogv,webm}'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: 'northeast.dev', // This should match your development url in wp-config.php
                    port: 1337 // Change port if this isn't working
                }
            }
        },
        // Removes source files and Sass maps after tasks are completed
        clean: {
            production: {
                options: {
                    force: true
                },
                src: ['<%= globalConfig.css %>/*.css.map']
            }
        },
        // Concatenates .js files into one
        concat: {
            debug: {
                src: '<%= globalConfig.scripts %>/source/*.js',
                dest: '<%= globalConfig.scripts %>/site/main.js'
            }
        },
        // Optimizes images
        imagemin: {
            debug: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: '<%= globalConfig.images %>/source/',
                    src: '**/*.{jpg,png,gif,svg}',
                    dest: '<%= globalConfig.images %>/'
                }]
            }
        },
        // Stops compiling when you write bad JavaScript
        jshint: {
            // options: {
            //  jshintrc: true
            // },
            all: ['<%= globalConfig.scripts %>/source/*.js']
        },

        // Build custom Modernizr library
        modernizr: {
            dist: {
                // Avoid unnecessary builds (should only be used for very large projects)
                'cache' : false,
                // [REQUIRED] Path to the build you're using for development.
                'devFile' : '<%= globalConfig.scripts %>/libraries/modernizr.js',

                // Path to save out the built file.
                'dest' : '<%= globalConfig.scripts %>/libraries/modernizr-custom.js',

                // Based on default settings on http://modernizr.com/download/
                'options' : [
                    'addtest',
                    'classes',
                    'html5printshiv',
                    'html5shiv',
                    'load',
                    'mq',
                    'setClasses'
                ],
                // By default, source is uglified before saving
                'uglify' : false,

                // Define any tests you want to implicitly include.
                'tests' : ['rgba'],

                // By default, this task will crawl your project for references to Modernizr tests.
                // Set to false to disable.
                'crawl' : true,

                // When parseFiles = true, this task will crawl all *.js, *.css, *.scss and *.sass files,
                // except files that are in node_modules/.
                // You can override this by defining a "files" array below.
                'files' : {
                    'src': [
                        '<%= globalConfig.scss %>/**/*.scss',
                        '<%= globalConfig.scripts %>/site/main.js'

                    ]
                },

                // Have custom Modernizr tests? Add paths to their location here.
                'customTests' : []
            }

        },
        postcss: {
            options: {
                processors: [
                    // Auto-prefixes CSS
                    require('autoprefixer')({expand: true, flatten: true, browsers: ['ie >= 9', 'last 2 versions']}),
                    require('css-mqpacker')({sort: true})
                ]
            },
            development: {
                options: {
                    map: {
                        inline: true
                    }
                },
                src: ['<%= globalConfig.css %>/*.css']
            },
            production: {
                options: {
                    map: false
                },
                src: ['<%= globalConfig.css %>/*.css']
            }
        },
        // Sass compiler
        sass: {
            options: {
                precision: 3,
                require: 'susy',
                style: 'expanded',
                sourcemap: 'none'
            },
            development: {
                options: {
                    sourcemap: 'inline'
                },
                files: {
                    '<%= globalConfig.css %>/main.css': '<%= globalConfig.scss %>/main.scss'
                }
            },
            production: {
                files: {
                '<%= globalConfig.css %>/main.css': '<%= globalConfig.scss %>/main.scss'
                }
            }
        },
        // Checks for specified changes and refreshes browser if plugin is installed
        watch: {
            options: {
                spawn: false
            },
            scripts: {
                files: '<%= globalConfig.scripts %>/source/*.js',
                tasks: ['js']
            },
            css: {
                files: ['<%= globalConfig.scss %>/**/*.scss', '!<%= globalConfig.scss %>/fonts.scss', '!<%= globalConfig.scss %>/editor.scss', '<%= globalConfig.css %>/*.css'],
                tasks: ['sass:development']
            },
            editorCSS: {
                files: ['<%= globalConfig.scss %>/editor.scss'],
                tasks: ['sass:editor']
            },
            img: {
                files: '<%= globalConfig.images %>/source/**/*.{jpg,gif,png,svg}',
                tasks: ['img']
            },
            php: {
                files: '*.php',
                tasks: []
            }
        }
    });
    require('load-grunt-tasks')(grunt);
    grunt.registerTask('js', ['jshint', 'concat']);
    grunt.registerTask('css', ['sass:development', 'postcss:development']);
    grunt.registerTask('img', ['newer:imagemin:debug']);
    grunt.registerTask('deploy', ['jshint', 'concat', 'modernizr', 'sass:production', 'postcss:production', 'clean:production']);
    grunt.registerTask('default', ['browserSync', 'watch']);
};
