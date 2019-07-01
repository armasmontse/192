<?php if( have_rows('zones') ): ?>

    <div class="zonas">
        
        <h2 class="zonas__titulo">Puntos de venta</h2>

        <p class="zonas__subtitulo">Encuentra 192 en:</p>
        
        <!-- Z o n a s   v e n t a -->
        <ul>

       <?php while ( have_rows('zones') ) : the_row(); ?>

            <li>
            
                <h4 class="zonas__region"><?php the_sub_field('name'); ?></h4>

                <?php if( have_rows('points_of_sale') ): ?>

                    <ul class="lista">

                    <?php while ( have_rows('points_of_sale') ) : the_row(); ?>

                        <li class="lista__item">
                            <span class="zonas__sucursal"><?php the_sub_field('title'); ?></span> 
                            <span class="zonas__domicilio"><?php the_sub_field('address'); ?></span> 
                            <span class="zonas__domicilio">/</span> 
                            <a class="zonas__web" href="<?php the_sub_field('website'); ?>">
                                <span><?php echo preg_replace('/https?\:\/\//', '', get_sub_field('website')); ?></span>
                            </a>
                        </li>

                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

            </li>

        <?php endwhile; ?>

        </ul>
    </div>

<?php endif;