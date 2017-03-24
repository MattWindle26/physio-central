<?php

 add_theme_support( 'post-thumbnails' );


 function register_my_menus() {
   register_nav_menus(
     array(
       'main-nav' => __( 'main-nav' ),
       'footer' => __( 'footer' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



 ?>
