<?php 

global $query_args;
$query = new WP_Query($query_args);
$query_args['offset'] += $query_args['posts_per_page'];

if($query->have_posts()):

    while ($query->have_posts()) : $query->the_post();
    
        get_template_part('views/layouts/post-in-archive');

    endwhile;

endif;

wp_reset_postdata();