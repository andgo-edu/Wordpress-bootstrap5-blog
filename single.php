<?php
get_header();


global $wpdb; // wp database access abstaction class interacts with database without using sql as a class to instantiate the global $wpdb global variable 

$post_id = 1; // your post id

$post_author_id = (int) $wpdb->get_var($wpdb->prepare("SELECT post_author FROM {$wpdb->posts} WHERE ID = %d ", $post_id));
// getting the post_author_id

$authorid =  new WP_User($post_author_id); // newWP_User query with the post author id 

$display_name = $authorid->display_name;

$author_avatar = get_avatar($post_author_id, 30); // get_avatar( userid, size )

$author_url = get_author_posts_url($post_author_id); //getting the post_author_id url 

?>


<main class="container-fluid text-center">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <img class="rounded-5" src="<?php the_post_thumbnail_url(); ?>"
                style="width:100%; max-width:900px; max-height:400px; object-fit:cover;" />
            <h1 class="display-4 fst-italic"><?php echo the_title(); ?></h1>
            <p class="lead my-3"><?php the_excerpt(); ?></p>

        </div>
    </div>



    <div class="row g-5">
        <div class="col-md-8">
            <div class="pb-4 mb-4 fst-italic border-bottom">
                <h2 class="blog-post-title"></h2>
                <p class="blog-post-meta"> <?php echo the_title(); ?> </p>
                <p class="text-muted">Posted on: <?php the_time('d M Y'); ?></p>
                <!-- the time format from wordpress codex -->
                <a href="<?php echo $author_url ?>">
                    <?php echo "By" . "\n" . $display_name; ?>
                    <?php echo $author_avatar; ?>
                </a>
            </div>


            <!--- Blog Post Start -->
            <article class="blog-post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php the_title(); ?></a>
                </h3>


                <?php endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination();

                    ?>
                <?php else : ?>
                <p><?php _e('No posts by this author.'); ?></p>

                <?php endif; ?>
                <div>
                    <?php the_content(); ?>
                    <?php the_excerpt(); ?>

                </div>

                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum."</p>

            </article>




        </div>
        <?php $excerptzulu = the_excerpt_rss(); ?>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0"> <?php
                                        if (isset($excerptzulu)) {
                                            echo $excerptzulu;
                                        } else {
                                            echo "<h6>There is no about for this post :D</h6>";
                                        }
                                        ?>
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <h5 class="fst-italic">Monthly Posts</h5>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php get_archives('monthly'); ?></a>
                        </li>
                        <h5 class="fst-italic">Daily Posts</h5>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php get_archives('daily'); ?></a>
                        </li>

                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Categories</h4>
                    <ol class="list-unstyled">
                        <li><a href="<?php the_permalink(); ?>"><?php wp_list_categories('courses_post'); ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php

    //Get only the approved comments
    $args = array(
        'status' => 'approve'
    );

    // The comment Query
    $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query($args);

    // Comment Loop
    if ($comments) {
        foreach ($comments as $comment) {
            echo '<p>' . $comment->comment_content . '</p>';
        }
    } else {
        echo 'No comments found.';
    }

    ?>
</main>


<?php
include('search.php');
include('comment.php');
get_footer();
?>