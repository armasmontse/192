<?php 

global $query_args;
$query = new WP_Query( $query_args );
$query_args['offset'] += $query_args['posts_per_page'];

if (!empty($query->posts)): ?>

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
