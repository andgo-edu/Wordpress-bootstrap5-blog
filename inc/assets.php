<?php



// Register Theme Scripts
function andgo_theme_scripts(){
    wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri(). '/assets/js/bootstrap.bundle.js');

  /*-enqueue laravelmix js script start -*/
  wp_register_script('app.js', get_template_directory_uri() . '/dist/app.js', [], 1, true);
  wp_enqueue_script('app.js');
  /*-enqueue laravelmix js script  end -*/

//assets\vendor\gsap.min.js

wp_register_script('gsap.min.js', get_template_directory_uri() . '/assets/vendor/gsap/js/gsap.min.js', array(), false, true );
wp_enqueue_script('gsap.min.js');
}

add_action('wp_enqueue_scripts','andgo_theme_scripts');

//Register Theme Styles
function andgo_theme_styles(){
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/bootstrap.css');
    
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');

   /*Enqueue laravel scss styles start */
   //Dynamic page showing style on save dir
    wp_enqueue_style('app.css', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all');
    /*Enqueue laravel scss styles end */

} 

add_action('wp_enqueue_scripts', 'andgo_theme_styles');
