<?php
// Remove all default WP template redirects/lookups
remove_action( 'template_redirect', 'redirect_canonical' );
// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
	add_rewrite_rule( '^/(.+)/?', 'index.php', 'top' );
}

function custom_logo_setup(){
	$defaults = array(
        'height'      => 70,
        //'width'       => 400,
        //'flex-height' => true,
        'flex-width'  => true,
        //'header-text' => array( 'site-title', 'site-description' ),
    );	
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'custom_logo_setup' );
add_action( 'init', 'remove_redirects' );

function load_js($dev = false){
	$dir = '/dist/js/';
	//Check if in development mode.
	if($dev){
		$dir = '/dist/';
	}
	$path    = get_stylesheet_directory().$dir;
	$files = glob( $path.'*.{js}', GLOB_BRACE );
	$files = array_diff(scandir($path), array('.', '..'));
	foreach($files as $file){
		wp_enqueue_script(
			$file, //unique id
			get_stylesheet_directory_uri() . $dir.$file,
			array(),
			filemtime( get_stylesheet_directory() . $dir.$file ),
			true
		);
	}
}

function load_css(){
	$path  = get_stylesheet_directory().'/dist/css';
	$files = scandir($path);
	$files = array_diff(scandir($path), array('.', '..'));
	foreach($files as $file){
		wp_enqueue_style(
			$file, //unique id
			get_stylesheet_directory_uri() . '/dist/css/'.$file,
			array(),
			null
		);
	}
}

if( !has_nav_menu('main-menu') ){
	register_nav_menus( 
		array( 'main-menu' => 'Primary'	) 
	);
}

// Load scripts
function load_vue_scripts() {
	load_js(true);
	load_css();
	remove_redirects();
}

add_action( 'wp_enqueue_scripts', 'load_vue_scripts', 100 );

require_once('routes.php');
require_once('routes_callbacks.php');


