<?php
/*
Template Name: About Us
*/

get_header();

?>


<style>
  body {
  margin: 10px;
}


  </style>



<div class="box green">box green</div>
<div class="box orange">box orange</div>
<div class="box grey">box grey</div>







<script>


CSSPlugin.defaultTransformPerspective = 400; 

gsap.to(".green", {duration: 3, rotationX: 360});
gsap.to(".orange", {duration: 3, rotationY: 360});
gsap.to(".grey", {duration: 3, x: 100, y: 100, scale: 2, skewX: 45, rotation: 180});



  </script>









<?php
echo "the about us is now working";






get_footer();

?>








<?php

/**
 * UseFull Links 
 * 
 * https://greensock.com/get-started/
 * 
 * 
 * https://greensock.com/scrollmagic
 * 
 * https://scrollmagic.io/docs/index.html
 * 
 * https://greensock.com/scrollmagic
 * 
 * https://greensock.com/forums/topic/30549-how-to-add-gsap-animations-to-wordpress/
 */
?>
