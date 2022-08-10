<?php

get_header();
?>

<h1 class="text-white text-center">All Courses</h1>

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

if (is_category('Courses')) : ?>


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
        'loading' => 'lazy',
        'current_category' => 'courses',
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


<?php endif;
?>



<h2 class="text-white text-center">HTML5 Courses posts</h2>

<h3 class="text-white text-center">CSS3 Courses posts</h3>

<?php
get_footer();
?>