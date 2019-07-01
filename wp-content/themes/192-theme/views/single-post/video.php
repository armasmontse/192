<!-- V i d e o -->
<div class="grid__row">
	<div class="grid__container">
		<div class="video flex">
			<div class="grid__offset-0-2"></div>
			<div class="grid__col-1-8">
				<div class="video__box-aspect">
			    	<?php the_sub_field('embed'); ?>
				</div>
			    <p class="video__creditos"><?php the_sub_field('caption'); ?></p>
			</div>

			<?php

			// Variable set on header.php
			global $featured_edition;

			if (!empty($featured_edition)): 

				$post = $featured_edition;
				setup_postdata($post);

			?>

				<div class="suscripcion">
					<div class="suscripcion__contenedor">
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
</div>