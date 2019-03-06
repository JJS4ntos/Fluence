<?php
// Remove all default WP template redirects/lookups
remove_action( 'template_redirect', 'redirect_canonical' );
// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
	add_rewrite_rule( '^/(.+)/?', 'index.php', 'top' );
}
add_action( 'init', 'remove_redirects' );

function load_js(){
	$path    = get_stylesheet_directory().'/dist/js/';
	$files = glob( $path.'*.{js}', GLOB_BRACE );
	$files = array_diff(scandir($path), array('.', '..'));
	foreach($files as $file){
		wp_enqueue_script(
			$file, //unique id
			get_stylesheet_directory_uri() . '/dist/js/'.$file,
			array(),
			filemtime( get_stylesheet_directory() . '/dist/js/'.$file ),
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

// Load scripts
function load_vue_scripts() {
	load_js();
	load_css();
}
add_action( 'wp_enqueue_scripts', 'load_vue_scripts', 100 );

function get_menu() {
    # Change 'menu' to your own navigation slug.
    return wp_get_nav_menu_items('menu');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );
