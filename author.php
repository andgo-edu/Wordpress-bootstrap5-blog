<?php
get_header();
?>






<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="container-fluid">
    <div class="card bg-dark text-center text-white">
        <h2>About: <?php echo $curauth->nickname; ?></h2>
        <div class="card-img-top">
            <?php echo get_avatar($curauth->user_email, '90'); ?>
        </div>
        <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
            <strong>Bio:</strong> <?php echo $curauth->user_description; ?>
        </p>
    </div>
</div>

<h5 class="card-title text-center">Posts by <?php echo $curauth->nickname; ?>:</h5>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-lg-12 text-center" style="justify-content: center;">
            <div class="container-fluid ">
                <div class="card">
                    <div class="card-body">

                        <p class="card-text"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                                <?php the_title(); ?></a></p>
                        <p>Posted on: <?php the_time('d M Y'); ?></p>

                    </div>
                </div>
            </div>



        <?php endwhile;

    // Previous/next page navigation.
    the_posts_pagination();


else : ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

    <?php
    //get_sidebar(); 
    ?>
    <?php get_footer(); ?>