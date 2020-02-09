<?php

function blueangel_script_enque() {
	wp_enqueue_style('blueangel', get_template_directory_uri() . '/css/blueangel.css', array(), '1.0.0', 'all');
	wp_enqueue_script('blueangel', get_template_directory_uri() . '/js/blueangel.js', array(), '1.0.0', true);
}

function blueangel_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('header', 'Main header navigation');
	register_nav_menu('footer', 'Secondary footer navigation');
}

add_action('wp_enqueue_scripts', 'blueangel_script_enque');
add_action('init', 'blueangel_theme_setup');
