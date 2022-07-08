<?php
wp_head();
?>


<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>


<?php
include('inc/navbar-primary.php');
?>