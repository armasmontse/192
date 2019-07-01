<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(); ?></title>

	<?php include_once('inc/favicon.php'); ?>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<?php wp_head(); ?>

	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body <?php body_class(); ?>>

	<?php

	global $general_options;

	$general_options = array(
		'social' => array(
			'facebook' => array(
				'icon' => 'fab fa-facebook-f',
				'url' => get_field('facebook', 'general-options')
			),
			'twitter' => array(
				'icon' => 'fab fa-twitter',
				'url' => get_field('twitter', 'general-options')
			),
			'instagram' => array(
				'icon' => 'fab fa-instagram',
				'url' => get_field('instagram', 'general-options')
			),
			// 'pinterest' => array(
			// 	'icon' => 'fab fa-pinterest',
			// 	'url' => get_field('pinterest', 'general-options')
			// ),
		),
		'email' => get_field('email', 'general-options')
	);

	global $featured_edition;

	$featured_edition = get_field('featured_edition', 'editions-options');

	?>

	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('WP_DEBUG') || ( WP_DEBUG != true) ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
	<!--<![endif]-->

	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">
	
	<!--Menu -->
	<div>

		<header class="header <?php if (is_front_page()): ?>is-home with-leaderboard<?php endif ?><?php if ( ! is_front_page()): ?>is-page<?php endif ?> " id="header">
			<div class="header__contenedor">
				<div class="grid__row header__top">
					<!-- S o c i a l -->
					<div class="social">
						<?php get_template_part('views/footer/social'); ?>
					</div>
					<!-- S e a r c h -->
					<div class="search">
						<div id="header__searchbar__JS" class="search__contenedor">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>

				

				<div class="menu-placeholder" id="placeholder"></div>
					
				<!-- M e n ú -->
				<div class="menu" id="menu">

					<?php get_template_part('views/header/menu'); ?>

				</div>
				<button class="menu__responsive header__menu_JS">
					<img src="<?php echo THEMEURL ?>images/menu-collapse.svg" alt="">
				</button>
				<button class="menu__responsive--cerrar header__menu_JS" id="menu__close_JS">
					<img src="<?php echo THEMEURL ?>images/menu-close.svg" alt="">
				</button>
			</div>
		</header>

	</div>
