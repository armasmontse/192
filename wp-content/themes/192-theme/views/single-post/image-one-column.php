<?php

$image = get_sub_field('image');

?>

<?php if($image): ?>

<!-- I m a g e n   u n a   c o l u m n a -->
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__offset-0-2"></div>
			<div class="grid__col-1-8">
			    <div class="img-one-column">
			    	<div class="img-one-column__box-aspect">
			        	<img class="img-one-column__box-imagen" src="<?php echo $image['sizes']['large'] ?>" alt="">
			    	</div>
			        <p class="img-one-column__pie-foto"><?php echo $image['caption']; ?></p>
			    </div>
			</div>
		</div>
	</div>

<?php endif; ?>
