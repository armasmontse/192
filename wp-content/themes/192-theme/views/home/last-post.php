<?php 

global $query_args;

$args = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> 1,
    'category_name' => 'friends-family'
];

if(array_key_exists('post__not_in', $query_args)) {
    $args['post__not_in'] = $query_args['post__not_in'];
}

$query = new WP_Query( $args );

if ($query->have_posts()):

    while($query->have_posts()): $query->the_post();

        add_to_global_query();

        get_template_part('views/layouts/post-with-content');

    endwhile;

endif;

wp_reset_postdata();