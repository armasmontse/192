<div class="archivo-categoria">
    <?php get_template_part('views/single-post/header'); ?>
    <div class="grid__row">
        <div class="grid__container">
            <div class="grid__offset-0-2"></div>

            <div class="grid__col-1-8">
            	<div class="ultima-nota__contenido">
        			<?php the_content(); ?>
            	</div>
        		<a class="leer-mas" href="<?php the_permalink(); ?>">leer más</a>
            </div>
    	</div>
    	<hr class="linea-division">
    </div>
</div>