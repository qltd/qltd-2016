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
                <div class="q-info">
                    <address>109 Catherine Street<br />
                    Ann Arbor, Michigan 48104</address>
                </div>

                <div class="social-info">
                    <?php get_template_part('template-parts/social-media-links'); ?>

                    <p>&copy; <?php echo date('Y'); ?> Q LTD. All rights reserved.</p>
                </div>
            </footer><!-- #colophon -->
        </div> <!-- #wrapper -->
    </div> <!-- #container -->
    <div class="outer-content left vertical">
        <div class="nav-overlay">
                <nav>
                    <?php get_template_part('template-parts/primary-nav'); ?>

                    <ul class="secondary-nav">
                        <li><a href="#">Sub Nav Link</a></li>
                        <li><a href="#">Sub Nav Link</a></li>
                        <li><a href="#">Sub Nav Link</a></li>
                        <li><a href="#">Sub Nav Link</a></li>
                    </ul>

                    <a href="#" class="blog-nav">Blog</a>
                </nav>

                <?php get_template_part('template-parts/social-media-links'); ?>

            </div>
    </div>
</div><!-- #perspective -->

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/visible.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/perspective.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    <?php wp_footer(); ?>

    </body>
</html>