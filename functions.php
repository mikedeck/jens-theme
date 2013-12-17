<?php

require_once('library/wp_bootstrap_navwalker.php');

if ( ! isset( $content_width ) ) {
    $content_width = 1140;
}

add_action('init',                    'jtheme_head_cleanup' );
add_action('init',                    'jtheme_register_menus');
add_action('wp_enqueue_scripts',      'jtheme_styles');
add_action('wp_enqueue_scripts',      'jtheme_scripts');

function jtheme_head_cleanup() {
	// EditURI link
	remove_action('wp_head', 'rsd_link');
	// windows live writer
	remove_action('wp_head', 'wlwmanifest_link');
}

function jtheme_register_menus() {
	register_nav_menu( 'header-menu', 'Header Nav' );
}

function jtheme_styles() {
	wp_register_style('bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css');
	wp_register_style('jtheme_style', get_template_directory_uri() . "/stylesheets/main.css", array('bootstrap'));
	wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_register_style('arch_daughter', '//fonts.googleapis.com/css?family=Architects+Daughter');
	wp_register_style('delius_uni', '//fonts.googleapis.com/css?family=Delius+Unicase:400,700');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('jtheme_style');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('arch_daughter');
	wp_enqueue_style('delius_uni');
}

function register_footer_script($handle, $src, $deps = array(), $ver = false) {
	wp_register_script($handle, $src, $deps, $ver, true);
}

function jtheme_scripts() {
	register_footer_script('jtheme_jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), '2.0.3');
    register_footer_script('bootstrap_js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array('jtheme_jquery'), '3.0.3');
    wp_enqueue_script('jtheme_jquery');
    wp_enqueue_script('bootstrap_js');
}

// Tag helpers

function get_header_nav() {
	wp_nav_menu(array(
		'theme_location' => 'header-menu',
		'container' => false,
		'menu_class' => 'nav navbar-nav',
		'walker' => new wp_bootstrap_navwalker()
	));
}

?>