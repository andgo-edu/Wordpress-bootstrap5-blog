<?php
wp_head();
?>


<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline'
    http://localhost/wordpress/  https://cdn.jsdelivr.net  https://cdnjs.cloudflare.com ;  
    img-src  'self' 'unsafe-inline' http://localhost/ https://www.w3.org/  http://0.gravatar.com/ https://res.cloudinary.com https://images.pexels.com/ https://www.svgrepo.com; 
    media-src 'self' 'unsafe-inline' http://localhost/ https://www.w3.org https://res.cloudinary.com https://images.pexels.com/ https://www.svgrepo.com; 
    script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net  https://cdnjs.cloudflare.com https://www.w3.org; 
    style-src 'self' 'unsafe-inline' http://localhost/  https://cdn.jsdelivr.net ; 
    style-src-elem 'self' 'unsafe-inline' https://cdn.jsdelivr.net ; 
    child-src 'none'; 
    font-src  'self' data:;">
    <meta>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<?php
include('inc/navbar-primary.php');
?>