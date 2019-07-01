<?php 

global $query_args;
$query = new WP_Query( $query_args );
$query_args['offset'] += $query_args['posts_per_page'];

if ($query->have_posts()):

?>

    <div class="grid__row">
        <div class="grid__container">
            <div class="post-recientes">
        		<?php $columna = 0; $i = 0; while($query->have_posts()): $query->the_post(); ?>
                    <?php

                    $orientation = 0;

                    if($columna % 3 == 1) $orientation = 1;

                    if($i % 3 == 0 ) {echo '<div class="row">';}

                    ?>

        			<div class="post-recientes__box <?php echo $orientation ? 'horizontal' : 'vertical'; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-recientes__box-aspect <?php echo $orientation ? 'horizontal' : 'vertical'; ?>">
                                <?php if (!$orientation): ?>
                                    <!-- Vertical -->
                                    <img class="post-recientes__box-imagen" src="<?php echo get_field('thumbnail_vertical')['url'] ?>" alt="">
                                <?php else: ?>
                                    <!-- Horizontal -->
                                    <img class="post-recientes__box-imagen" src="<?php the_post_thumbnail_url() ?>" alt="">
                                <?php endif ?>
                            </div>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="post-recientes__titulo-post"><?php the_title(); ?></h4>
                        </a>
                        <div class="post-recientes__categoria-post">
                            <?php the_category(); ?>
                        </div>
                        <div class="post-recientes__creditos-post">
                            <?php the_field('home_excerpt'); ?>
                        </div>
                        <div class="lista-share-post">
                            <?php get_template_part('views/single-post/share'); ?>
                        </div>
                    </div>

                    <?php if($i % 3 == 2 ) {echo '</div>';} ?>

        		<?php $columna++; $i++;  endwhile; ?>
        	</div>
        </div>
    </div>

<?php 

endif;

wp_reset_postdata();