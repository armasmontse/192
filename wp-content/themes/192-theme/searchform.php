<form role="search" method="get" class="search__formulario" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <input type="search"  class="search__input" placeholder="<?php echo __('Buscar', TRANSDOMAIN); ?>" value="<?php echo get_search_query(); ?>" name="s">
    <!-- <button type="submit" id="header__searchbar-submit" class="header__searchbar-submit header__icon-submit"></button> -->
</form>
<div class="shop">
	<a href="<?php echo BLOGURL ?>/puntos-de-venta">Shop</a>
</div>