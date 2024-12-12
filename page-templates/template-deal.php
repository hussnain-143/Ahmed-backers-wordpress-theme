<?php  
/*  
Template Name:  Deals Page 
*/  
get_header();

$arg = new WP_Query(
    array(
        'post_type' => 'deal',
        'order' => 'ASC',
    )
)
?> 
<main class ="menu-page">
    <h2 class="menu-page-title">Featured Deals for Ahmed Backers</h2>
    <div class="deal-container">
        <?php 
        if($arg->have_posts()){
        while ( $arg->have_posts() ) { $arg->the_post(); ?>
        <div class="deal-card">
        <a class="menu-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom-size'); ?></a>
            
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
</main>
<?php
get_footer( );

?>