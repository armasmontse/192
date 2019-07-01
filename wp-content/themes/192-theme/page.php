<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<!-- P a g e -->
	<div class="page-template">
		<div class="grid__row">
			<div class="grid__container">
				<div class="grid__offset-0-2"></div>
				<div class="grid__col-1-8">

    				<a href="<?php echo BLOGURL ?>">
    					<img class="logo" src="<?php echo THEMEURL ?>images/logo/logo-negro.png" alt="">
    				</a>
					
					<?php if( ! is_page('puntos-de-venta')): ?>

						<!-- P a g e  c o n t e n i d o -->

						<img src="<?php echo get_thumbnail_image_url() ?> " alt="">
							
						<div class="titulo"><?php the_title(); ?></div>

						<div class="contenido"><?php the_content(); ?></div>
					
					<?php endif; ?>

					<?php if(is_page('puntos-de-venta')): ?>

						<!-- P u n t o s   d e   v e n t a -->

						<div class="puntos-venta">
							<?php 

								get_template_part('views/page/edition');
				    			
				    			get_template_part('views/page/points-of-sale');
								
							?>
						</div>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; endif;

get_footer();