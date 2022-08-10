<?php
get_header();
?>

<style>
/* #placeholder1 {
  height: 100vh;
  background-color: grey;
} */

.wrapper {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.section {
    height: 100%;
    max-height: 100vh;
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


<?php
include('inc/slider.php');

?>

<div class="wrapper" id="js-wrapper">
    <div class="sections" id="js-slideContainer">



        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                // Your loop code
        ?>
        <section class="section">
            <span class="sectionTitle" id="title2"></span>
            <div class="col-md-6 gx-5">
                <a href="<?php the_permalink() ?>">
                    <img class="img-fluid rounded-4 shadow-5-strong"
                        style="max-height:1000px; max-width:1920px; width:100%; height:100%; min-width:250px; min-height:250px; object-fit:contain;"
                        src="<?php echo the_post_thumbnail_url(); ?>" />
                    <strong>
                        <?php the_title(); ?>

                    </strong>
                    <hr class="py-1" style="background-color: transparent;" />

                    <em>
                        <?php the_time('l, F jS, Y'); ?>
                    </em>


                </a>
            </div>

        </section>
        <?php endwhile;;
            ?>
        <?php endif;
        ?>
    </div>
</div>


</div>




<?php

get_sidebar("andgoprimary");
get_footer();
?>

<script>
//Debug setup
// 

// wait until DOM is ready
/**Debug 
 * 
 * document.addEventListener("DOMContentLoaded", function(event) {

    console.log("DOM loaded");

    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e) {

        // custom GSAP code goes here
        console.log("window loaded");

    }, false);

});

 * 
 * 
*/
TweenLite.defaultEase = Linear.easeNone;
var titles = document.querySelectorAll(".sectionTitle");
var controller = new ScrollMagic.Controller();
var tl = new TimelineMax();

// create timeline
// this could also be created in a loop
tl.to("#js-slideContainer", 1, {
    xPercent: -20
}, "label1");
tl.from(titles[1], 0.5, {
    opacity: 0
}, "label1+=0.5");
tl.to("#js-slideContainer", 1, {
    xPercent: -40
}, "label2");
tl.from(titles[2], 0.5, {
    opacity: 0
}, "label2+=0.5");
tl.to("#js-slideContainer", 1, {
    xPercent: -60
}, "label3");
tl.from(titles[3], 0.5, {
    opacity: 0
}, "label3+=0.5");
tl.to("#js-slideContainer", 1, {
    xPercent: -80
}, "label4");
tl.from(titles[4], 0.5, {
    opacity: 0
}, "label4+=0.5");


new ScrollMagic.Scene({
        //triggers the div element  
        triggerElement: "#js-wrapper",
        //hook for the animation scroll
        triggerHook: "onLeave",
        duration: "400%"
    })
    .setPin("#js-wrapper")
    .setTween(tl)
    .addIndicators({
        colorTrigger: "transparent",
        colorStart: "transparent",
        colorEnd: "transparent",
    })
    .addTo(controller);
</script>