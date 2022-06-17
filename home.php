<?php
get_header();
?>





<div class="container-fluid text-center">

    <h1>Home</h1>
    <?php 
    include('inc/slider.php');
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Your loop code
    ?>
            <div class="col-md-6 gx-5">
                <a href="<?php the_permalink() ?>">

                    <img class="img-fluid rounded-1 shadow-5-strong" style="max-height:150px; max-width:150px" src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
                    <p style="float:right;"><?php echo the_title(); ?></br>
                        <?php the_time('l, F jS, Y'); ?></p>
                </a>
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