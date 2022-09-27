<?php
/*
Template Name: Categories 
*/
get_header();




if (is_category('Front End')) : ?>


    <div class="row">

        <div class="col-lg-12">
            <div class="container-fluid text-center">
                <h1 class="text-white text-center">Front End</h1>

                <h2>
                    <?php wp_list_categories(); ?>
                </h2>

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        // Your loop code
                ?>

                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
                            <strong class="text-white">
                                <?php the_title(); ?>
                            </strong>

                        </a>



                    <?php endwhile;;
                    ?>
                <?php endif;
                ?>
            </div>
        </div>

    </div>
    <?php
    get_footer();
    ?>
    </div>
<?php elseif (is_category('Security')) : ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid text-center">
                <h1 class="text-white text-center">Security</h1>

                <h2>
                    <?php wp_list_categories(); ?>
                </h2>
                <?php

                get_header();
                ?>

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        // Your loop code
                ?>

                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
                            <strong class="text-white">
                                <?php the_title(); ?>
                            </strong>

                        </a>

                    <?php endwhile;;
                    wp_reset_postdata();

                    ?>
                <?php endif;
                ?>


            </div>
        </div>

    </div>
    <?php
    get_footer();
    ?>
<?php elseif (is_category('Back End')) : ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid text-center">
                <h1 class="text-white text-center">Back End</h1>
                <h2>
                    <?php wp_list_categories(); ?>
                </h2>
                <?php

                get_header();
                ?>

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        // Your loop code
                ?>

                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
                            <strong class="text-white">
                                <?php the_title(); ?>
                            </strong>
                        </a>

                    <?php endwhile;;
                    wp_reset_postdata();

                    ?>
                <?php endif;
                ?>


            </div>
        </div>

    </div>

    <?php
    get_footer();
    ?>

<?php else : ?>
    <?php
    get_header();
    ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid text-center">
                <h1 class="text-white">
                    Uncategorized
                </h1>

                <h2>
                    <?php wp_list_categories(); ?>
                </h2>

            </div>
        </div>
    </div>
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            // Your loop code
    ?>
            <div class="col-md-6 gx-5">
                <h3 style="float:right;" class="text-white"><?php the_title(); ?></h3>
                <a href="<?php the_permalink() ?>">

                    <img class="img-fluid rounded-1 shadow-5-strong" style="max-height:150px; max-width:150px" src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
                    <strong class="text-white">
                        <?php the_title(); ?>
                    </strong>

                    <small>
                        <em>
                            <?php the_time('l, F jS, Y'); ?>

                        </em>
                    </small>
                </a>
            </div>

        <?php endwhile;;
        wp_reset_postdata();

        ?>
    <?php endif;
    ?>
    <?php
    get_footer();
    ?>
<?php endif;
?>
</div>