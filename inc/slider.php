<?php
/*
Template Name: Posts Slider
*/

get_header();
?>
<div id="carouselExampleDark" class="carousel container-fluid transform carousel-fade text-center"
    data-bs-ride="carousel" style="justify-content:center;">
    <div class="carousel-inner">
        <?php
        // Define our WP Query Parameters
        $andgocarousel = new WP_Query('posts_per_page=5', array(
            // this the one in register post type in slider.php in functions
            'post_type' => 'andgocarouselpost',

        ));

        $incval = 0;
        while ($andgocarousel->have_posts()) : $andgocarousel->the_post();
            $incval++
        ?> <?php if ($incval == 1) : ?>
        <div class="carousel-item active" data-bs-interval="1000">
            <?php else : ?>
            <div class="carousel-item">
                <?php endif; ?>
                <a href="<?php the_permalink() ?>">
                    <?php echo the_post_thumbnail('medium', array(
                            'class' => 'img-fluid shadow-5-strong rounded-5 mb-1  w-100 h-100',
                            'loading' => 'lazy',
                            'alt' => 'post-thumbnail',
                            'style' => 'max-width:1080px;max-height:1920px; object-fit:cover;'
                        )); ?>

                    <a class="h5__sliderLink" href="<?php the_permalink() ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h5__slider"><?php the_title(); ?></h5>
                    </a>

            </div>
        </div>
        <?php
        endwhile;
            ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<hr class="py-5" />