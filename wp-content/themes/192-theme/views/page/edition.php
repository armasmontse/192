<?php 

// Variable set on header.php
global $featured_edition;

$buy_edition = get_field('buy', 'editions-options');

$supported_zones = [
    'mexico_city' => 'Ciudad de México',
    'interior_of_the_republic' => 'Interior de la República MX'
];

if($featured_edition): 

    $post = $featured_edition;
	setup_postdata($post);

?>

<!-- E d i c i ó n   s u s c r i p c i ó n -->

    <h4 class="puntos-venta__titulo-page">Suscríbete</h4>

    <p class="puntos-venta__subtitulo-page">Suscríbete a nuestra edición impresa:</p>
    
    <div class="puntos-venta--flex">
        
        <div class="grid--60">
            <div class="puntos-venta__box-aspect">
                <img class="puntos-venta__box-imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
            </div>
        </div>
        
        
        <div class="grid--40">
            
            <?php foreach($supported_zones as $key => $name): ?>

                <?php if(array_key_exists($key, $buy_edition)): ?>

                    <div class="puntos-venta__contenido">
                    
                        <strong class="puntos-venta__zona"><?php echo $name ?></strong>

                        <br>

                        <!-- Sergio: falta el total de ediciones -->
                        <strong class="puntos-venta__zona">2 ediciones</strong>
                        
                        <?php if(array_key_exists('price', $buy_edition[$key])): ?>

                            <span class="puntos-venta__precio">por $<?php echo number_format($buy_edition[$key]['price'], 2); ?> pesos</span>

                        <?php endif; ?>

                        <?php if(array_key_exists('paypal_url', $buy_edition[$key])): ?>

                            <a class="puntos-venta__link" href="<?php echo $buy_edition[$key]['paypal_url']; ?>" target="_blank">comprar</a>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

            <div class="puntos-venta__contenido">
                <strong class="puntos-venta__zona shop">INTERNATIONAL SUBSCRIPTIONS</strong>
                <a class="puntos-venta__link" href="https://www.bruil.info/product/192-magazine-subscription/" target="_blank">shop</a>
            </div>

        </div>
    </div>

<?php 

    wp_reset_postdata();

endif;