<?php

 add_theme_support( 'post-thumbnails' );


 function register_my_menus() {
   register_nav_menus(
     array(
       'header' => __( 'header' ),
       'footer' => __( 'footer' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



 ?>
