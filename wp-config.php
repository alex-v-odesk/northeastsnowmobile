<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * SET UP ENVIRONMENTS
 */
if ($_SERVER["HTTP_HOST"] === 'northeast.dev') {

    define('WP_ENV', 'development');

} else {

    define('WP_ENV', 'production');

}

/**
 * ENVIRONMENT CONFIGURATIONS
 */

if (WP_ENV === 'development') {

    // Site URLs
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME']);
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

    // Database
    define('DB_NAME', 'northeast');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'mysql');
    define('DB_HOST', 'localhost');

    // Debugging
    define('WP_DEBUG', true);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors', 0);
    // define('SAVEQUERIES', true);
    // define('SCRIPT_DEBUG', true);

} else {

    // Site URLs
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME']);
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

    // Database
    define('DB_NAME', 'db200894_ne_snowmobile');
    define('DB_USER', '1clk_wp_DOgHzjK');
    define('DB_PASSWORD', 'G7gfYBwi');
    define('DB_HOST', $_ENV{DATABASE_SERVER});

    // Disable Debugging
    define('WP_DEBUG', false);

    // Prevent PHP errors from displaying
    error_reporting(0);
    @ini_set('display_errors', 0);

}

/**
 * CHARSET, ETC.
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Generate these in production
 * https://api.wordpress.org/secret-key/1.1/salt
 */
define('AUTH_KEY',         'gjkOJ3dk xgZ7GiQO VIdC3r4v jxnOwMb3 1OqR8tYD');
define('SECURE_AUTH_KEY',  'jiulW3HU ZgGQDpFz Rtqbn4Zg DIPqxRfD r8BCkH1I');
define('LOGGED_IN_KEY',    'be4PMMsA F7iLIYhd Xe4OG3jc LxpTxqqg yQkfPkHd');
define('NONCE_KEY',        'rvBIyP6b 2jvKqdgG JnPei76e bHfdGAh2 IXVScxkT');
define('AUTH_SALT',        'zCEW8Hi1 Urom3PIJ lRwT56Gr RUHzwmY3 xSajkLx2');
define('SECURE_AUTH_SALT', 'S18oi7fj 81CPLrSl tPg5JjcP mWeGgb8D vLJMeTDE');
define('LOGGED_IN_SALT',   '13woAAO4 kQnKoG5Z nHh2T51u zuFeuKsJ u7b3ouVG');
define('NONCE_SALT',       'Zdb2OAuL xNaglmVI goTkXUDN NzZzGz56 QHzRI74l');

/**
 * DATABASE TABLE PREFIX
 *
 * Before installation, change to a random string
 * https://passwd.me/api/1.0/get_password.txt
 */
$table_prefix  = 'nesm_';

/**
 * SECURITY AND PERFORMANCE
 */

// Disable backend file editor
define('DISALLOW_FILE_EDIT', true);

// Automatically empty trashes
define('EMPTY_TRASH_DAYS', 30);

// Restrict number of revisions kept
define('WP_POST_REVISIONS', 3);

/**
 * That's all, stop editing!
 */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__));
	require_once(ABSPATH . 'wp-settings.php');