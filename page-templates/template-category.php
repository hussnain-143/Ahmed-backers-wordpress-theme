<?php  
/*  
Template Name: Category Page  
*/  
get_header();
?>  
<main class="menu-page">
    <div class="cate-page">
        <?php
        $cat = get_categories();

        if (!empty($cat) ) {
            if (get_post_type() !== 'deal' ){

            foreach ($cat as $category) {
                ?>
                <div class="category-section">
                    <h2 class="cat-title"><?php echo esc_html($category->name); ?></h2>
                </div>
                <?php
                // Query posts for the current category
                $args = array(
                    'cat' => $category->term_id, // Use category ID for more accuracy
                    'post_type' => 'post', 
                    
                );

                $query = new WP_Query($args);
                ?>
                <div class="menu-content">
                    <?php
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
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
                    } else {
                        ?>
                        <p>No posts available in this category.</p>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
            } 
        }// End foreach
        } else {
            ?>
            <p>No categories found.</p>
            <?php
        }
        ?>
    </div>
</main>
<?php
get_footer();
?>
