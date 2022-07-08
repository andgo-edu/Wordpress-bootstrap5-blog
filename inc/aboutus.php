<?php
/*
Template Name: About Us
*/

get_header();

?>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
}

body,
html {
  height: 100%;
  padding: 0;
  margin: 0;
}

.wrapper {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.section {
  height: 100%;
  width: calc(100% / 5);
  float: left;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.section:nth-child(1) {
  background: #262626;
}
.section:nth-child(2) {
  background: #22a7f0;
}
.section:nth-child(3) {
  background: #f9690e;
}
.section:nth-child(4) {
  background: #9b59b6;
}
.section:nth-child(5) {
  background: #03c9a9;
}
.sections {
  width: 500%;
  height: 100%;
}
.sectionTitle {
  font-size: 30px;
  color: #fff;
}
</style>











<div class="wrapper" id="js-wrapper">
  <div class="sections" id="js-slideContainer">
    <section class="section">
      <span class="sectionTitle" id="title1">Section One</span>
    </section>
    <section class="section">
      <span class="sectionTitle" id="title2">Section Two</span>
    </section>
    <section class="section">
      <span class="sectionTitle" id="title3">Section Three</span>
    </section>
    <section class="section">
      <span class="sectionTitle" id="title4">Section Four</span>
    </section>
    <section class="section">
      <span class="sectionTitle" id="title5">Section Five</span>
    </section>
  </div>
</div>



<script>
    TweenLite.defaultEase = Linear.easeNone;
var titles = document.querySelectorAll(".sectionTitle");
var controller = new ScrollMagic.Controller();
var tl = new TimelineMax();

// create timeline
// this could also be created in a loop
tl.to("#js-slideContainer", 1, {xPercent: -20}, "label1");
tl.from(titles[1], 0.5, {opacity:0}, "label1+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -40}, "label2");
tl.from(titles[2], 0.5, {opacity:0}, "label2+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -60}, "label3");
tl.from(titles[3], 0.5, {opacity:0}, "label3+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -80}, "label4");
tl.from(titles[4], 0.5, {opacity:0}, "label4+=0.5");


new ScrollMagic.Scene({
  triggerElement: "#js-wrapper",
  triggerHook: "onLeave",
  duration: "400%"
})
  .setPin("#js-wrapper")
  .setTween(tl)
  .addIndicators({
    colorTrigger: "white",
    colorStart: "white",
    colorEnd: "white",
  })
  .addTo(controller);

    </script>


<?php

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