<?php

add_action('init', 'cltvo_special_categories');

if (!function_exists('cltvo_special_categories')) {
	
	function cltvo_special_categories() {

		$special_categories = [
			'Fashion',
			'Beauty',
			'Prive',
			'Interview',
			'Art',
			'Archive',
			'Print',
			'Friends & Family',
			'Film'
		];

	    foreach ($special_categories as $name) {
			if( ! term_exists($name, 'category') ){
				wp_insert_term($name, 'category');
			}
		}

	}
}