<?php

global $featured_edition;
global $query_args;

$query_args = [
	'post_type' => 'cltvo_edition',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'offset' => 0,
];

get_header();

?>

<div>

	<?php get_template_part('views/general/edition'); ?>

	<?php get_template_part('views/editions/posts'); ?>

</div>

<script>
    var section = <?php echo json_encode('editions'); ?>;
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php get_footer(); ?>
