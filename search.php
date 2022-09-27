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
  <h1>Search</h1>

  <h2>
        <?php wp_list_categories(); ?>
      </h2>

  <div class="input-group">
    <input type="search" id="form1" class="form-control rounded" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'h3') ?>" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" />
    <input type="submit" class="btn btn-outline-warning" value="<?php echo esc_attr_x('🔎', 'submit button') ?>" />
  </div>
</form>





<hr class="py-5" style="background-color: transparent;" />

<div class="row">
  <div class="col-lg-12">
    <div class="container-fluid text-center">
      <h1 class="text-white">
      </h1>


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

    </div>
  </div>
</div>