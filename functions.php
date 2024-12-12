<?php
function ahmed_backers_load_script() {
    wp_enqueue_style('ahmed-backers-stylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ahmed_backers_load_script');

function ahmed_backers_theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_image_size('custom-size', 600, 500, true); // Width: 800px, Height: 600px, Cropped

    add_image_size('custom-size-2', 300, 300, true); // Width: 800px, Height: 600px, Cropped
    register_nav_menu('primary', __('Primary Menu', 'ahmed_backers'));


    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'ahmed_backers' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 1', 'ahmed_backers' ),
        'id'            => 'footer-sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'  => '</h2>',

    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 2', 'ahmed_backers' ),
        'id'            => 'footer-sidebar-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'  => '</h2>',

    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 3', 'ahmed_backers' ),
        'id'            => 'footer-sidebar-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'  => '</h2>',

    ) );
    
}


add_action('after_setup_theme','ahmed_backers_theme_setup');



//  get the deal post 
require get_template_directory(  ). '/inc/deals.php';
//  get the ustomizer Api 
require get_template_directory(  ). '/inc/customizer.php';
?>
