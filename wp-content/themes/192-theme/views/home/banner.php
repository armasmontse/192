<?php

// Imágen de cabecera
$banner = get_field('banner');

?>
<div class="banner" style="<?php if($banner): ?> background-image: url('<?php echo $banner['sizes']['large']; ?>');<?php endif; ?>">
    <a href=" <?php echo BLOGURL ?> ">
    	<img class="banner__logo" src="<?php echo THEMEURL ?>images/logo/logo-blanco.png" alt="logo de revista 192">
	</a>
</div>