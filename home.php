<?php
get_header();
?>

<div class="container-fluid text-center">
    <h1 class="header__homepage">Home</h1>
    <?php 
    include('inc/slider.php');
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Your loop code
    ?>

    <div class="gsap__easeinOut">
        <div class="col-md-6 gx-5">
            <a href="<?php the_permalink() ?>">
                <img class="img-fluid rounded-1 shadow-5-strong" style="max-height:150px; max-width:150px"
                    src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
                <span href="<?php the_permalink() ?>" style="float:right;">
                    <?php echo the_title(); ?></br>
                    <?php the_time('l, F jS, Y'); ?>
                </span>
            </a>
        </div>
    </div>

    <?php endwhile;;
        ?>
    <?php endif;
    ?>
</div>



<?php

get_sidebar("andgoprimary");
get_footer();
?>

<script>
//Debug setup
// 

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {

    console.log("DOM loaded");

    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e) {

        // custom GSAP code goes here
        console.log("window loaded");

    }, false);

});







// "to" tween (animate to provided values)
gsap.to("gsap__easeinOut.div", { // selector text, Array, or object
    x: 100, // any properties (not limited to CSS)
    backgroundColor: "red", // camelCase
    duration: 1, // seconds
    delay: 0.5,
    ease: "power2.inOut",
    stagger: 0.1, // stagger start times
    paused: true, // default is false
    overwrite: "auto", // default is false
    repeat: 2, // number of repeats (-1 for infinite)
    repeatDelay: 1, // seconds between repeats
    repeatRefresh: true, // invalidates on each repeat
    yoyo: true, // if true > A-B-B-A, if false > A-B-A-B
    yoyoEase: true, // or ease like "power2"
    immediateRender: false,
    onComplete: myFunc,
    // other callbacks: 
    // onStart, onUpdate, onRepeat, onReverseComplete
    // Each callback has a params property as well
    // i.e. onUpdateParams (Array)
});
</script>