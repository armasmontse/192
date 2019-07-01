<?php

global $query_args;

$query_args = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> !isMobile() ? 9 : 4,
	'offset' 	    => 0,
];

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="home">

    <?php 

    get_template_part('views/home/banner');

    get_template_part('views/ads/home-leaderboard');

    get_template_part('views/home/featured');

    get_template_part('views/home/masonry');

    get_template_part('views/home/last-post');

    get_template_part('views/general/edition');

    echo "<section class='add-ajax-posts'>";

    get_template_part('views/home/title-post-ajax');

    get_template_part('views/home/posts');

    echo "</section>";

    get_template_part('views/general/load-posts');

    //get_template_part('views/general/newsletter');

    ?>

</div>

<script>
    var section = 'home';
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php endwhile; endif; ?>

<?php 

get_footer();
