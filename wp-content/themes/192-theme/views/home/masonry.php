<?php

global $query_args;

$data = [];

// Grid "masonry"
$data[] = [
    'orientation' => 'vertical',
    'post' => get_field('left'),
];

$data[] = [
    'orientation' => 'horizontal',
    'post' => get_field('center'),
];

$data[] = [
    'orientation' => 'vertical',
    'post' => get_field('right'),
];

if(!empty($data[0]['post']) && !empty($data[1]['post']) && !empty($data[2]['post'])): 

    ?>
    
    <!-- M a s o n r y -->

    <div class="grid__row">
        <div class="grid__container">

            <div class="masonry" >
                <?php $columna = 0; foreach($data as $item): 
                    
                    $post = $item['post'];
                    setup_postdata( $post );

                    // Revisamos si el query args ya tiene posts eliminados.
                    add_to_global_query();

                    $orientation = 0;

                    if($columna % 3 == 1) $orientation = 1;

                    ?> 

                    <div class="masonry__box <?php echo $orientation ? 'masonry__box--horizontal' : 'masonry__box--vertical'; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="masonry__box-aspect <?php echo $orientation ? 'masonry__box-aspect--horizontal' : 'masonry__box-aspect--vertical'; ?>">
                                <?php if (!$orientation): ?>
                                    <!-- Vertical -->
                                    <img class="masonry__box--imagen" src="<?php echo get_field('thumbnail_vertical')['url'] ?>" alt="">
                                <?php else: ?>
                                    <!-- Horizontal -->
                                    <?php $iframe = get_field('url'); ?>
                                    <?php if(empty($iframe)): ?>
                                        <img class="masonry__box--imagen" src="<?php the_post_thumbnail_url() ?>" alt="">
                                    <?php else: ?>
                                        <?php echo $iframe; ?>
                                    <?php endif; ?>
                                <?php endif ?>
                            </div>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="masonry__titulo"><?php the_title(); ?></h4>
                        </a>
                        <div class="masonry__categoria"><?php the_category(); ?></div>
                        <div class="masonry__creditos"><?php the_field('home_excerpt'); ?></div>
                        <!-- <div class="masonry__subtitulo"><? //php the_field('subtitle'); ?></div> -->
                        <div class="lista-share-post">
                            <?php get_template_part('views/single-post/share'); ?>
                        </div>
                    </div>

                <?php wp_reset_postdata(); $columna++; endforeach; ?>
            </div>

        </div>
    </div>
    
    <hr class="linea-division">

<?php endif;