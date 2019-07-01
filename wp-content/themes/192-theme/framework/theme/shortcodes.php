<?php 

// Add Shortcode
function custom_shortcode( $atts , $content = null ) {
    return '<div class="cols-2">' . do_shortcode(remove_empty_p($content)) . '</div>';
}

function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s| )+</p>\s?~', '', $content );
	return $content;
}

add_shortcode('cols-2', 'custom_shortcode');