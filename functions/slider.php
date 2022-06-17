<?php
/*
   Plugin Name: BootStrap5 Slider Gallery
   Plugin URI: 
   description: >-
    A plugin made to display the latest posts dynamically
   Version: 1.0
   Author: AndGo
   Author URI: 
   License: GPL2
*/
 

/** Dont delete this bevause of register_post_type which brings back the posts in gallery */



 function andgo_home_carousel_slider(){

	add_theme_support('post-thumbnails');

	register_post_type( 'andgocarouselpost', array(
		'labels' => array(
		'name' => 'Andgo Slider'),
		'public' => true,
		'menu_icon' => 'dashicons-format-gallery',
      ''=>'',


	));

 }

 add_action('after_setup_theme','andgo_home_carousel_slider');