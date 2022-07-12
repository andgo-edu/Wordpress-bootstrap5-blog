<?php
/*
Template Name: About
*/



get_header();

?>
<div class="container-fluid col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img class="d-block mx-lg-auto img-fluid rounded-5" alt="img-aligned-to-left" width="100%" height="100%"
                loading="lazy" style="max-width:1000px; max-height: 700px; object-fit:cover; ;"
                src="https://images.pexels.com/photos/247676/pexels-photo-247676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php wp_title(); ?></h1>
            <p class="lead"><?php the_excerpt() ?> </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="/wordpress/contact">
                    Contact Us
                </a>

                <a type="button" class="btn btn-light btn-lg px-4 me-md-2" href="/wordpress">
                    Home
                </a>
            </div>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>

<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Features</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Coding Excerises</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />

            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <img src="https://www.svgrepo.com/show/59647/keyboard.svg" class="bi text-muted flex-shrink-0 me-3"
                width="150px" height="150px" loading="lazy" />
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
    </div>
</div>




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

<?php

get_footer();

?>