<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head()?>
<style>
    body {
        background-color: <?php echo get_theme_mod('ahmed_backers_color' , '#EFEFEF' )?>;
    }
</style>
</head>
<body >
    <header class="header-container">
            <div class="logo">
                <?php the_custom_logo();?>
            </div>
            <div class="hamburger-menu" id="hamburger-menu">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <nav class="nav-container">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class' =>'menu-items'
                ) );
            ?>
            </nav>
    </header>