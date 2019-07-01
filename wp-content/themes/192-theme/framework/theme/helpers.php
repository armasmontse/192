<?php

function getGlocalSharePosts() {

    if(!function_exists('getRecentByTagName')){
        return [];
    }

    return getRecentByTagName('glocalshare');
}

function remove_extension($name) {
    return substr( $name, 0, strrpos( $name, '.' ) );
}

function add_to_global_query($post = 0) {

    global $query_args;

    $post = get_post( $post );

    if(array_key_exists('post__not_in', $query_args)) {
        $query_args['post__not_in'] = array_merge($query_args['post__not_in'], [$post->ID]);
    }else {
        $query_args['post__not_in'] = [$post->ID];
    }
}

function get_thumbnail_image_url($thumbnailId = 0, $size = 'large') {

    if($thumbnailId == 0){
        $thumbnailId = get_post_thumbnail_id();
    }

    return wp_get_attachment_image_src($thumbnailId, $size)[0];

}