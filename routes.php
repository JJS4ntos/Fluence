<?php
/**
 * This class register a route that will be catch by routes_callbacks
 */
add_action( 'rest_api_init', function () {
	register_rest_route( 'fluence', '/menu', 
		array(
			'methods' => 'GET',
			'callback' => 'get_menu',
		) 
	);
} );