<?php
/**
 * This class register a route that will be catch by routes_callbacks
 */
add_action( 'rest_api_init', function () {
	//Generate menu json
	register_rest_route( 'fluence', '/menu', 
		array(
			'methods' => 'GET',
			'callback' => 'fluence_get_menu',
		) 
	);

	//Getter for title
	register_rest_route( 'fluence', '/title', 
		array(
			'methods' => 'GET',
			'callback' => 'fluence_get_wp_title',
		) 
	);

	register_rest_route(
		'fluence', '/pages/(?P<id>\d+)',
		array(
		  	'methods' => 'GET',
		  	'callback' => 'fluence_get_wp_page',
		)
  	);

} );