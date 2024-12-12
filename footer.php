<?php
/**
 * The template for displaying footer
 *
 */
?>
<footer class="footer-container">
    <div class="footer-content">
        <div class="widget-1">
        <?php
            dynamic_sidebar( 'footer-sidebar-1' );
        ?>
        </div>
        <div class="widget-2">
        <?php
            dynamic_sidebar( 'footer-sidebar-2' );
        ?>
        </div>
        <div class="widget-3">
        <?php
            dynamic_sidebar( 'footer-sidebar-3' );
        ?>
        </div>
    </div>
    <div class="footer-copyright"> <p>&copy; <?php echo date("Y"); ?> 
    <a href="<?php echo home_url(); ?>"><strong>Ahmed Backers</strong></a>. All rights reserved.
    </p> </div>
</footer>

<?php wp_footer( )?>
</body>
</html>