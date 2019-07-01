<div class="grid__col-1-3">
	<div class="ediciones-anteriores__box">
		<a href="<?php the_permalink(); ?>" class="ediciones-anteriores__back-gris">
			<span class="ediciones-anteriores__numero-vertical">192</span>
		    <div class="ediciones-anteriores__box-aspect">
		    	<img class="ediciones-anteriores__box-imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
		    </div>
		</a>
		<?php if (get_the_title()): ?>
			<a href="<?php the_permalink(); ?>">
		    	<h3 class="ediciones-anteriores__titulo-post"><?php the_title(); ?></h3>
			</a>
		<?php else: ?>
			<div class="ediciones-anteriores__titulo-post--transparent"></div>
		<?php endif ?>
	    <div class="ediciones-anteriores__categoria-post"><?php the_category(); ?></div>
	    <div class="ediciones-anteriores__extracto-post"><?php the_excerpt(); ?></div>
	    <div class="ediciones-anteriores__numero-horizontal"><?php echo get_the_date('dm'); ?></div>
	</div>
</div>