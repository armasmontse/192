<?php

global $wp_query;
global $query_args;

$query_args = [
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'cat'               => $wp_query->get_queried_object()->term_id,
    'offset'            => 0,
    'posts_per_page'    => 6,
];

get_header();

?>

<div>

    <?php 
    
    get_template_part('views/category/last-post');
    
    echo '<div class="add-ajax-posts">';

    get_template_part('views/category/title-post-ajax');
    
    get_template_part('views/category/posts');
    
    echo "</div>";

    get_template_part('views/general/load-posts');

    get_template_part('views/general/envianos');

    get_template_part('views/general/glocalshare');

    ?>

</div>

<script>
    var section = <?php echo json_encode('category'); ?>;
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php

get_footer();
