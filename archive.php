<?php
/*
 Template Name: Archives
*/
get_header();
?>


<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid text-center">
            <h1 class="text-white">
                <?php
                wp_get_archives('type=daily');
                ?>
            </h1>

            <h2>
                Categories
                <?php wp_list_categories(); ?>
            </h2>

        </div>
    </div>

</div>


<?php get_sidebar('andgoprimary'); ?>
<?php get_footer(); ?>