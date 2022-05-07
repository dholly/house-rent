<?php

function basic_scripts()
{
    $assets_version = '1.0.2';
    wp_enqueue_style('basic-style', get_stylesheet_uri(), array(), $assets_version);

    wp_enqueue_style('main-style', get_template_directory_uri() . '/inc/css/style.css', array(), $assets_version);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/inc/js/script.js', array('jquery'), $assets_version, true);
    wp_enqueue_script('lazy-load', get_template_directory_uri() . '/inc/js/jquery.lazy.min.js', array('jquery'), $assets_version, true);

    wp_enqueue_script('wow-script', get_template_directory_uri() . '/inc/js/wow.min.js', array('jquery'), $assets_version, true);

    //wp_enqueue_style('slick-style', get_template_directory_uri() . '/inc/css/slick.css');
    //wp_enqueue_script('slick-script', get_template_directory_uri() . '/inc/js/slick.min.js', array('jquery'), $assets_version, true);

   /* wp_enqueue_style('pswp-style', get_template_directory_uri() . '/inc/css/photoswipe.css');
    wp_enqueue_style('pswp-ui-style', get_template_directory_uri() . '/inc/css/default-skin/default-skin.css');
    wp_enqueue_script('pswp-script', get_template_directory_uri() . '/inc/js/photoswipe.min.js', array('jquery'), $assets_version, true);
    wp_enqueue_script('pswp-ui-script', get_template_directory_uri() . '/inc/js/photoswipe-ui-default.min.js', array('jquery'), $assets_version, true);
*/
    /*
     ADD JS VARIABLES
     $params = [
       'home'=>get_site_url()
   ];
   wp_localize_script('main-script','wp_params',$params);
    */

    //OPTIMIZATION
    //wp_dequeue_style( 'wp-block-library' );
    //wp_dequeue_style( 'wc-block-style' );
}

add_action('wp_enqueue_scripts', 'basic_scripts');

