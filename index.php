<?php
/**
 * The template for displaying  default posts page.
 *
 */
get_header(  );
?>

<main class="menu-page" >
   
    <h2 class="menu-page-title">Menus</h2>
    <div class="menu-content">
     <?php 
     if(have_posts(  )){
        while(have_posts(  )){
            the_post(  );
            ?>
            <div class="menus-container">
            <a class="menu-img" href="<?php the_permalink( ); ?>"><?php the_post_thumbnail('medium'); ?></a>
            
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
