<?php 

define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' );
define( 'BLOGURL', get_home_url('/') );
define( 'THEMEURL', get_bloginfo('template_url').'/' );
define( 'TRANSDOMAIN', wp_get_theme()->template );

/** ==============================================================================================================
 *                                       Inluye los archivos generarles
 *  ==============================================================================================================
 */

include_once __DIR__ . '/general/functions.php';


/** ==============================================================================================================
 *                                       Inluye los archivos de admin
 *  ==============================================================================================================
 */

include_once __DIR__ . '/admin/functions.php';

/** ==============================================================================================================
 *                                         Inluye los archivos del tema
 *  ==============================================================================================================
 */

include_once __DIR__ . '/theme/functions.php';