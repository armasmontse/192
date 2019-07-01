<?php 

global $query_args;
$query = new WP_Query($query_args);
$query_args['offset'] += $query_args['posts_per_page'];

if($query->have_posts()): ?>
	
<!-- E d i c i o n e s   a n t e r i o r e s -->
	
	<div class="grid__row">
		<div class="grid__container">	
		    <div class="ediciones-anteriores">
				<?php 
				while($query->have_posts()): $query->the_post();
			        get_template_part('views/layouts/post-in-archive');
			    endwhile;
			    ?>
		    </div>
		</div>
	</div>
	
<?php endif;

wp_reset_postdata();