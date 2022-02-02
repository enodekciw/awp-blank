<?php

function awp_blank_style() {
    wp_enqueue_style( 'awp-blank', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'awp_blank_style' );