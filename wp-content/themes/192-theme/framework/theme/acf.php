<?php 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones de ediciones',

		/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
		'menu_title' => 'Opciones',
		
		/* (string) The slug of another WP admin page. if set, this will become a child page. */
		'parent_slug' => 'edit.php?post_type=cltvo_edition',

		/* (string) The slug name to refer to this menu by (should be unique for this menu). 
		Defaults to a url friendly version of menu_slug */
		'menu_slug' => 'editions-options',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'editions-options',
		
	));

	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones de entradas',

		/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
		'menu_title' => 'Opciones',

		/* (string) The slug name to refer to this menu by (should be unique for this menu). 
		Defaults to a url friendly version of menu_slug */
		'menu_slug' => 'posts-options',
		
		/* (string) The slug of another WP admin page. if set, this will become a child page. */
		'parent_slug' => 'edit.php',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'posts-options',
		
	));

	acf_add_options_page(array(
	
		/* (string) The title displayed on the options page. Required. */
		'page_title' => 'Opciones generales',
		
		/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
		Defaults to 'options'. Added in v5.2.7 */
		'post_id' => 'general-options',
		
	));
	
}