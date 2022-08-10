<?php

get_header();




if (is_category('Courses')) : ?>

<h1 class="text-white text-center">All Courses posts</h1>

<?php
    //1. defined the array inside
    $args = array(
        'post_type' => 'courses_post',
        'posts_per_page' => 10,
        'taxonomy'           => 'category',
    );

    //2. define a new variable for you custom post type 
    $courses = new WP_Query($args, array(
        // this the one in register post type in courses-catalog.php in functions
        'post_type' => 'courses_post',
        'style' => '',
        'loading' => 'lazy'
    ));
    //3. while loop over the courses with have posts 
    while ($courses->have_posts()) : $courses->the_post();

        //Note after this line between the endwhile anything here will be inside the loop and repeated .
    ?>


<a href="<?php the_permalink() ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
</a>

<?php
    //4. End the while loop and reset the post data 
    // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();

    ?>

<?php wp_list_categories($args); ?>


<?php
    get_footer();
    ?>
</div>
<?php elseif (is_category('HTML5')) : ?>
<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">

            <h2>
                <?php wp_list_categories(); ?>
            </h2>
            <?php

                get_header();
                ?>

            <?php
                $args = array(
                    'post_type' => 'courses_post',
                    'posts_per_page' => 10,
                    'category' => 'CSS3 Course',


                );
                $courses = new WP_Query($args, array(
                    // this the one in register post type in slider.php in functions
                    'post_type' => 'courses_post',
                    'style' => '',
                    'loading' => 'lazy',

                ));
                while ($courses->have_posts()) : $courses->the_post();
                ?>

            <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
            </a>


            <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();

                ?>

            <?php
                get_footer();
                ?>
        </div>
    </div>

</div>
<?php elseif (is_category('CSS3')) : ?>
<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">
            <h1 class="text-white">
            </h1>

            <h2>
                <?php wp_list_categories(); ?>
            </h2>
            <?php

                get_header();
                ?>

            <?php
                $args = array(
                    'post_type' => 'courses_post',
                    'posts_per_page' => 10,
                    'category' => 'CSS3 Course',


                );
                $courses = new WP_Query($args, array(
                    // this the one in register post type in slider.php in functions
                    'post_type' => 'courses_post',
                    'style' => '',
                    'loading' => 'lazy',

                ));
                while ($courses->have_posts()) : $courses->the_post();
                ?>

            <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
            </a>


            <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();

                ?>

            <?php
                get_footer();
                ?>
        </div>
    </div>

</div>
<?php elseif (is_category('JavaScript')) : ?>
<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">

            <h2>
                <?php wp_list_categories(); ?>
            </h2>
            <?php

                get_header();
                ?>

            <?php
                $args = array(
                    'post_type' => 'courses_post',
                    'posts_per_page' => 10,
                    'category' => 'CSS3 Course',


                );
                $courses = new WP_Query($args, array(
                    // this the one in register post type in slider.php in functions
                    'post_type' => 'courses_post',
                    'style' => '',
                    'loading' => 'lazy',

                ));
                while ($courses->have_posts()) : $courses->the_post();
                ?>

            <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
            </a>


            <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();

                ?>

            <?php
                get_footer();
                ?>
        </div>
    </div>

</div>
<?php elseif (is_category('TypeScript')) : ?>
<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">
            <h1 class="text-white">
            </h1>

            <h2>
                <?php wp_list_categories(); ?>
            </h2>
            <?php

                get_header();
                ?>

            <?php
                $args = array(
                    'post_type' => 'courses_post',
                    'posts_per_page' => 10,
                    'category' => 'CSS3 Course',


                );
                $courses = new WP_Query($args, array(
                    // this the one in register post type in slider.php in functions
                    'post_type' => 'courses_post',
                    'style' => '',
                    'loading' => 'lazy',

                ));
                while ($courses->have_posts()) : $courses->the_post();
                ?>

            <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" width="250" height="250" alt="courses-custom-post-img" />
            </a>


            <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();

                ?>

            <?php
                get_footer();
                ?>
        </div>
    </div>

</div>


<?php else : ?>
<?php
    get_header();
    ?>

<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">
            <h1 class="text-white">

            </h1>

            <h2>
                <?php wp_list_categories(); ?>
            </h2>

        </div>
    </div>
    <?php if (have_posts()) :
            while (have_posts()) : the_post();
                // Your loop code
        ?>
    <div class="col-md-6 gx-5">
        <h3 style="float:right;" class="text-white"><?php the_title(); ?></h3>
        <a href="<?php the_permalink() ?>">

            <img class="img-fluid rounded-1 shadow-5-strong" style="max-height:150px; max-width:150px"
                src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
            <small>
                <em>
                    <?php the_time('l, F jS, Y'); ?>

                </em>
            </small>
        </a>
    </div>
    <?php endwhile;;
            ?>
    <?php
            get_footer();
            ?>
    <?php endif;
        ?>
</div>
<?php endif; ?>