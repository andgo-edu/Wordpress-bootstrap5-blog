<?php
/*
Template Name: Search Page
*/
?>

<?php
get_header();
?>
  <hr class="py-1" style="background-color: green;" />


  <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

    <div class="input-group">
      <input type="search" id="form1" class="form-control rounded" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'h3') ?>" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" />
      
      <input type="submit" class="btn btn-outline-warning" value="<?php echo esc_attr_x('🔎', 'submit button') ?>" />

    </div>
  </form>
  <h1>Search</h1>




<hr class="py-5" style="background-color: transparent;"/> 

    <?php 
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Your loop code
    ?>
            <div class="col-lg-8 gx-5">
                <a href="<?php the_permalink() ?>">
                    <p style="float:right;"><?php echo the_title(); ?></br>
                        <?php the_time('l, F jS, Y'); ?></p>
                </a>
            </div>
            <hr class="py-5" style="background-color: transparent;"/> 

        <?php endwhile;;
        ?>
    <?php endif;
    ?>
</div>


