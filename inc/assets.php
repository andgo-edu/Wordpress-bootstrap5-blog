<?php



// Register Theme Scripts
function andgo_theme_scripts()
{
  //wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');

  /*-enqueue laravelmix js script start -*/
  wp_register_script('app.js', get_template_directory_uri() . '/sass/dist/app.js', [], 1, true);
  wp_enqueue_script('app.js');
  /*-enqueue laravelmix js script  end -*/

  //
  //from  https://greensock.com/ 

  wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), false, true);
  wp_enqueue_script('gsap');


  wp_register_script('bootstrap5js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), false, true);
  wp_enqueue_script('bootstrap5js');

  /***Gsap Aniamtion PLugins */
  //TweenMax
  wp_register_script('TweenMax.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array(), false, true);
  wp_enqueue_script('TweenMax.min.js');

  //scroll Magic
  wp_register_script('ScrollMagic.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), false, true);
  wp_enqueue_script('ScrollMagic.min.js');

  //animation Plugin

  wp_register_script('animation.gsap.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array(), false, true);
  wp_enqueue_script('animation.gsap.min.js');


  wp_register_script('debug.addIndicators.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array(), false, true);
  wp_enqueue_script('debug.addIndicators.min.js');

  //ScrollTrigger is the updated version of ScrollMagic
  /**
   *   wp_register_script('ScrollTrigger.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), false, true);
  wp_enqueue_script('ScrollTrigger.min.js');
   */
}

add_action('wp_enqueue_scripts', 'andgo_theme_scripts');

//Register Theme Styles
function andgo_theme_styles()
{
  //wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css');

  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

  /*Enqueue laravel scss styles start */
  //Dynamic page showing style on save dir
  wp_enqueue_style('app.css', get_template_directory_uri() . '/sass/dist/app.css', [], 1, 'all');
  /*Enqueue laravel scss styles end */
}

add_action('wp_enqueue_scripts', 'andgo_theme_styles');
