<?php

$image_left = get_sub_field('image_left');
$image_right = get_sub_field('image_right');

?>

<!-- I m a g e n   d o s   c o l u m n a s -->
<div class="grid__row">
    <div class="grid__container">
        <div class="img-two-columns flex">
            <div class="grid__offset-0-2"></div>
            <div class="grid__col-1-8 flex">
                
                <?php if($image_left): ?>
                    <div class="grid__col-1-2">
                        <div class="">
                            <img class="" src="<?php echo $image_left['sizes']['large'] ?>" alt="">
                        </div>
                        <p class="img-two-columns__pie-foto"><?php echo $image_left['caption']; ?></p>
                    </div>
                <?php endif; ?>
                <?php if($image_right): ?>
                    <div class="grid__col-1-2">
                        <div class="">
                            <img class="" src="<?php echo $image_right['sizes']['large'] ?>" alt="">
                        </div>
                        <p class="img-two-columns__pie-foto"><?php echo $image_right['caption']; ?></p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
