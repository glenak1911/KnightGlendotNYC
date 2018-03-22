<?php
function startwordpress_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
    wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'smoothScroll', get_template_directory_uri() . '/scripts/smoothScroll.js', array(), '0.0.1', true );

}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );




 ?>
