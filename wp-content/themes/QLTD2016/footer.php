<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package _q
*/

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
                Footer
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/visible.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    <?php wp_footer(); ?>

    </body>
</html>