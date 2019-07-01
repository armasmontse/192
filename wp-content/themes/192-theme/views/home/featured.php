<!-- F e a t u r e d   -   s u s c r í b e t e -->
<div class="grid__row featured-home-contenedor">
    <div class="grid__container margintop30-20">

        <?php 

        // Post destacado.
        $featured = get_field('featured');

        if($featured):

            // Override $post
            $post = $featured;
            setup_postdata( $post );

            // Revisamos si el query args ya tiene posts eliminados.
            add_to_global_query();
            
        ?>
        
            <div class="grid__col-1-9">
                <div class="featured">
                    <div class="featured__box">
                        
                        <a href="<?php the_permalink(); ?>">
                            <div class="featured__thumbnail--aspect">
                                <?php $iframe = get_field('url'); ?>
                                <?php if(empty($iframe)): ?>
                                    <img class="featured__thumbnail--imagen" src="<?php the_post_thumbnail_url() ?>" alt="">
                                <?php else:

                                    // use preg_match to find iframe src
                                    preg_match('/src="(.+?)"/', $iframe, $matches);

                                    $src = $matches[1];

                                    // add extra params to iframe src
                                    $params = ['autoplay' => 1, 'muted' => 1];

                                    $new_src = add_query_arg($params, $src);

                                    $iframe = str_replace($src, $new_src, $iframe);

                                    echo $iframe;

                                endif; ?>
                            </div>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="featured__titulo"><?php the_title(); ?></h4>
                        </a>
                        <p class="featured__categoria"><?php the_category(); ?></p>

                        <div class="featured__extracto"><?php the_field('home_excerpt'); ?></div>

                        <div class="lista-share-post">
                            
                            <?php get_template_part('views/single-post/share'); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        
            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php

        // Variable set on header.php
        global $featured_edition;

        if (!empty($featured_edition)): 

            $post = $featured_edition;
            setup_postdata($post);

        ?>

            <div class="grid__col-1-4">
                <div class="suscripcion">
                    <div class="suscripcion__portada--aspect">
                        <img class="suscripcion__portada--imagen" src="<?php the_post_thumbnail_url() ?>" alt="">
                    </div>
                    <p class="suscripcion__titulo">Print</p>
                    <a class="suscripcion__cta" href="<?php echo get_permalink(specialPage('puntos-de-venta')); ?>"><?php echo __('suscríbete'); ?></a>
                </div>
            </div>

            <?php wp_reset_postdata(); ?>
	
        <?php endif; ?>

    </div>
</div>

