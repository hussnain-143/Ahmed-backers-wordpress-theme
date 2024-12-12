<?php
/*
Template Name: Home page
*/
get_header( );
$arg = new WP_Query(
    array(
        'post_type' => 'deal',
        'order' => 'ASC',
    )
)
?>
<main class="home-page" >
    <div class="home-content">
        <h2 class="menu-page-title home-page-title"><?php echo get_theme_mod( 'ahmed_backers_heading' , 'Featured Deals for Ahmed Backers')?></h2>
        <div class="home-container">
        <?php 
        if($arg->have_posts()){
        while ( $arg->have_posts() ) { $arg->the_post(); ?>
        <div class="deal-card">
        <a class="menu-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom-size-2'); ?></a>
            
            <h2 class="menu-post-title">
                <a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
            </h2>
            <p class = "menu-post-content">
            <a href="<?php the_permalink( );  ?> "><?php the_excerpt(  ); ?></a>
            </P>
        </div>
        <?php
}
}
?>
    </div>
    

<div class="main-sidebar">
    <?php get_sidebar()?>
</div>
</div>
</main>
<?php
get_footer( );
?>