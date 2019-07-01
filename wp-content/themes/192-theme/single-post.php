<?php

global $query_args;

$query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9, // Number of related posts that will be shown.
    'offset'         => 0,
);

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $tags = get_the_tags();

    if($tags) {

        $tag_ids = array_map(function($tag) {
            return $tag->term_id;
        }, $tags);

        $query_args = array_merge($query_args, ['tag__in' => $tag_ids]);

    }

    add_to_global_query();

    echo '<div class="single-page">';
        
    get_template_part('views/single-post/header');

    get_template_part('views/single-post/flexible-content');

    get_template_part('views/single-post/footer');

    echo "<section class='add-ajax-posts'>";

    get_template_part('views/category/title-post-ajax');

    get_template_part('views/single-post/posts');

    echo "</section>";

    get_template_part('views/general/load-posts');

    echo '</div>';

    ?>

    <script>
        var section = 'single-post';
        var query_args = <?php echo json_encode($query_args) ?>;
    </script>

<?php 

endwhile; endif;

get_footer();
