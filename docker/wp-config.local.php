<?php
/**
 * Local Docker-only wp-config.
 * This file is mounted into the container as /var/www/html/wp-config.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	// noop
}

define( 'WP_CACHE', false );

define( 'DB_NAME', getenv( 'WORDPRESS_DB_NAME' ) ?: 'cocoro_local' );
define( 'DB_USER', getenv( 'WORDPRESS_DB_USER' ) ?: 'cocoro' );
define( 'DB_PASSWORD', getenv( 'WORDPRESS_DB_PASSWORD' ) ?: 'cocoro_pass' );
define( 'DB_HOST', getenv( 'WORDPRESS_DB_HOST' ) ?: 'db:3306' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', 'local-auth-key-change-me' );
define( 'SECURE_AUTH_KEY', 'local-secure-auth-key-change-me' );
define( 'LOGGED_IN_KEY', 'local-logged-in-key-change-me' );
define( 'NONCE_KEY', 'local-nonce-key-change-me' );
define( 'AUTH_SALT', 'local-auth-salt-change-me' );
define( 'SECURE_AUTH_SALT', 'local-secure-auth-salt-change-me' );
define( 'LOGGED_IN_SALT', 'local-logged-in-salt-change-me' );
define( 'NONCE_SALT', 'local-nonce-salt-change-me' );
define( 'WP_CACHE_KEY_SALT', 'local-cache-key-salt-change-me' );

$table_prefix = getenv( 'WP_TABLE_PREFIX' ) ?: 'wp_';

if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', getenv( 'WP_HOME' ) ?: 'http://localhost:8080' );
}
if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) ?: 'http://localhost:8080' );
}

if ( ! defined( 'WP_ENVIRONMENT_TYPE' ) ) {
	define( 'WP_ENVIRONMENT_TYPE', getenv( 'WP_ENVIRONMENT_TYPE' ) ?: 'local' );
}

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', (bool) ( getenv( 'WP_DEBUG' ) ?: true ) );
}
if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', true );
}
if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', false );
}

define( 'FS_METHOD', 'direct' );
define( 'AUTOMATIC_UPDATER_DISABLED', true );

if ( ! defined( 'COCORO_SLACK_WEBHOOK_URL' ) ) {
	define( 'COCORO_SLACK_WEBHOOK_URL', getenv( 'COCORO_SLACK_WEBHOOK_URL' ) ?: '' );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
