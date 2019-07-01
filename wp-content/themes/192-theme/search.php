<?php 

get_header();

global $query_args;
global $wp_query;

$query_args = [
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'offset'            => 0,
    'posts_per_page'    => 12,
];

$query_args = array_merge($query_args, $wp_query->query);

?>

<div class="resultados">
    <div class="grid__container">
        <div class="grid__offset-0-2"></div>
        <div class="grid__col-1-8">
            <a href="<?php echo BLOGURL ?>">
                <img class="logo" src="<?php echo THEMEURL ?>images/logo/logo-negro.png" alt="">
            </a>
        </div>
    </div>

    <div class="grid__container">
        <h3 class="resultados__titulo">
            <?php printf( esc_html__( 'Resultados de: %s', TRANSDOMAIN ), '<span>' . get_search_query() . '</span>' ); ?>
        </h3>
    </div>

    <section class="resultados__contenedor">
        <?php if (have_posts()) : ?>
            <div class="grid__container add-ajax-posts">
                <?php get_template_part('views/search/posts'); ?>    
            </div>
            <?php get_template_part('views/general/load-posts'); ?>
        <?php else: ?>
            <?php echo __('No hay resultados que coincidad con tu búsqueda.', TRANSDOMAIN); ?>
        <?php endif; ?>
    </section>
</div>

<script>
    var section = <?php echo json_encode('search'); ?>;
    var query_args = <?php echo json_encode($query_args) ?>;
</script>

<?php 

get_footer();