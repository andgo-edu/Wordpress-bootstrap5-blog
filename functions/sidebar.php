<?php

function register_andgo_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebars(
        2,
        array(
            'id'            => 'andgoprimary', //important id
            'name'          => __('Andgo Sidebar %d'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action('widgets_init', 'register_andgo_sidebars');