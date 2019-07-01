<?php 

add_action( 'admin_init', 'hide_home_editor');

function hide_home_editor() {
    
    if( !array_key_exists('post', $_GET) ) return;
    
    if($_GET['post'] == specialPage('home')) { 
        remove_post_type_support('page', 'editor');
    }
}