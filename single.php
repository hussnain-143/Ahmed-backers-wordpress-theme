<?php
/**
 * The template for displaying a single post in page.
 *
 */
?>
<?php get_header(); 
?>
<main class="single-post-page" >
    <div class="single-post-content">
     <?php 
     if(have_posts(  )){
        while(have_posts(  )){
            the_post(  );
            ?>
            <h2 class="posts-title">
                <a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
            </h2>
            <p >
            <a class="posts-content" href="<?php the_permalink( ); ?>"><?php the_content(  ); ?></a>
            </P>
            <div class="post-desc">
                <p class="posts-category">
                <strong> Category :</strong> <?php the_category();?>
                </p>
                <p class="posts-tags">
                
                    <?php 
                    if (has_tag()){
                    ?>
                    <?php the_tags();
            }?>
            
            </p>
            <p class="posts-time">
                <strong> Posted on:</strong> <?php the_date( ) ?> <strong> At :</strong> <?php the_time( ) ?>
            </p>
</div>
            <?php
        }
     }
     
     ?>
    </div>
</main>
<?php get_footer(  );?>