<div class="grid__row">
    <div class="grid__container">
    	<div class="grid__offset-0-2"></div>
    	<div class="grid__col-1-8">
			<div class="last-post-home">
			    <?php the_category(); ?>
			    <h3 class="last-post-home__titulo"><?php the_title(); ?></h3>
			    <h4 class="last-post-home__subtitulo"><?php the_field('subtitle'); ?></h4>
			    <p class="last-post-home__fecha" ><?php echo get_the_date('dm'); ?></p>
			    <span class="last-post-home__creditos"><?php the_field('credits'); ?></span>
			    <?php get_template_part('views/single-post/share'); ?>
			    <div class="last-post-home__contenido">
			    	<?php  the_content(); ?>
			    </div>
				<a class="leer-mas" href="<?php the_permalink(); ?>">leer más</a>
			</div>
    	</div>
	</div>
</div>