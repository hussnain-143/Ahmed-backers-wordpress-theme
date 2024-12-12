<?php  
/*  
Template Name: Custom About Us Page  
*/  
get_header();  
?>  

<main class="about-page">  
    <?php if (have_posts()) { ?>  
        <?php while (have_posts()) {the_post(); ?>  
            <section class="about-section">  
                <h2 class="about-title">  
                    <?php the_title(); ?>  
                </h2>  
                <div class="about-content">  
                    <?php the_content(); ?>  
                </div>  
            </section>  
        <?php 
        }
        } ?>  
</main>  

<?php  
get_footer();  
?>  
