<?php 

global $query_args;
$query = new WP_Query($query_args);

?>

<?php if(!empty($query->posts)): ?>

    <?php foreach($query->posts as $post): setup_postdata( $post ); ?>
    
        <?php get_template_part('views/editions/single-list'); ?>
    
    <?php wp_reset_postdata(); endforeach; ?>

<?php endif; ?>