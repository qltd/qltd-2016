<?php
/**
* Basic page template
*
* @package _q
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>

    <div class="body-content">
            <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>


<div class="full-width-list">
    <ul>
        <li>
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/img/space-wide.jpg" />
                <h3>Project or Client Page ></h3>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="img-container"></div>
                <h3>Project or Client Page ></h3>
            </a>
        </li>
    </ul>
</div>


<!-- <div class="full-width-list img-list">
    <ul>
        <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/space-wide.jpg" />
        </li>
       <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/space-wide.jpg" />
        </li>
    </ul>
</div> -->


<?php get_footer();