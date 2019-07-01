<?php

// Dependencies
require_once ('lib/config.general.php' );
require_once ('lib/default.php');
require_once ('lib/themewrangler.class.php');
include_once ('lib/roots-rewrites-master/roots-rewrites.php' );

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-nav-walker');
add_filter('show_admin_bar', '__return_false');

// Remove Stupid Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Theme Wrangler

include_once locate_template('/lib/tw_config.php' );