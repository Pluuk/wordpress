<?php

ini_set( 'display_errors', 0 );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ======================
// Hide errors by default
// ======================
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG', false );

// =========================
// Disable automatic updates
// =========================
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// =======================
// Load WordPress Settings
// =======================
$table_prefix  = 'wp_';

// ===================================================
// Load database info and local development parameters
// ===================================================
include( dirname( __FILE__ ) . '/../wp-config.php' );


if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

require_once( ABSPATH . 'wp-settings.php' );