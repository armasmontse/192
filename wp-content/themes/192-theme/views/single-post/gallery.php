<?php

$images = get_sub_field('images');

?>

<?php if($images): ?>

<!-- G a l e r í a   s l i d e r -->
    <div class="grid__row">
        <div class="grid__container">
            <div class="galeria">
				<div class="galeria__slider">
					<?php foreach( $images as $image ): ?>

						<div class="galeria__box">
							<img class="galeria__box-imagen" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">	
							<p class="galeria__pie-foto"><?php echo $image['caption']; ?></p>
						</div>
			
					<?php endforeach; ?>

				</div>
				<div class="galeria-prev"></div>
				<div class="galeria-next"></div>
			</div>
		</div>
	</div>

<?php endif; ?>
