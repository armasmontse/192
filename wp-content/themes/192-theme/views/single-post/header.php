<div class="ultima-nota">
	<a href=" <?php echo BLOGURL ?> ">
    	<img class="ultima-nota__logo" src="<?php echo THEMEURL ?>images/logo/logo-blanco.png" alt="">
	</a>
    <div class="ultima-nota__banner" data-parallax="scroll" data-image-src="<?php echo get_thumbnail_image_url(); ?>">
    	<h3 class="ultima-nota__titulo"><?php the_title(); ?></h3>
    </div>
    <div class="grid__row">
        <div class="grid__container flex-column">


		    <div class="ultima-nota__categoria"><?php the_category(); ?></div>

		    <?php if (get_field('subtitle')): ?>
		    	<h4 class="ultima-nota__subtitulo"><?php the_field('subtitle'); ?></h4>
		    <?php endif ?>
		    
		    <div class="ultima-nota__fecha"><?php echo get_the_date('dm'); ?></div>
		    
		    <?php if (get_field('credits')): ?>
		    	<span class="ultima-nota__creditos"><?php the_field('credits'); ?></span>
		    <?php endif ?>
		    
		    <?php get_template_part('views/single-post/share'); ?>

			<?php get_template_part('views/ads/single-leaderboard'); ?>
			
        </div>
	</div>	
</div>