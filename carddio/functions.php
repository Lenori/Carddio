<?php

add_theme_support( 'post-thumbnails' );

// SAVE THEME PATH IN VARIABLE

wp_register_script('wp-theme-js', get_bloginfo( "template_directory" ) . '/js/main.js');
wp_enqueue_script( 'wp-theme-js' );
$urlJS = get_bloginfo( "template_directory" );

wp_localize_script( 'wp-theme-js', 'urlWordpressJS', $urlJS );

//You can now use 'urlWordpressJS' to call the theme path inside JS files