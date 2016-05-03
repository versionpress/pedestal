<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'dbpassword');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


$table_prefix = 'wp_';


/**
 * Set up our global environment constant and load its config first
 * Default: development
 */
define('WP_ENV', 'development');

/**
 * URLs
 */
define('WP_HOME', 'http://localhost/vp-composer/web');
define('WP_SITEURL', WP_HOME . '/wp');

/**
 * Custom Content Directory
 */
define('WP_CONTENT_DIR', __DIR__ . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/wp/');
}


/* That's all, stop editing! Happy blogging. */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
