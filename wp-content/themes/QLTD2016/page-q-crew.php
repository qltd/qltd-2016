<?php
/**
* Our Work Page template
*
* @package _q
*/

get_header();

get_template_part('template-parts/content-page'); ?>

<div class="project-grid">
    <?php while (have_rows('crew')): the_row();?>
        <div class="box <?php echo strtolower(get_sub_field('hover_theme')); ?>">
            <a href="#<?php echo str_replace(' ', '_', strtolower(get_sub_field('name'))); ?>">
            <?php $img = get_sub_field('images')[0]['image']['sizes']['square_thumb']; ?>
            <img src="<?php echo $img; ?>">
            <div class="details">
                <div>
                    <h2><?php the_sub_field('name'); ?></h2>
                    <h3><?php the_sub_field('title'); ?></h3>
                </div>
            </div>
            </a>
        </div>
    <?php endwhile; ?>
</div>


<div class="crew-section">
    <?php while (have_rows('crew')): the_row();?>
        <div id="<?php echo str_replace(' ', '_', strtolower(get_sub_field('name'))); ?>" class="crew-member">
            <div class="body-content">
                <h2><?php the_sub_field('name'); ?> | <span class="<?php echo strtolower(get_sub_field('hover_theme')); ?>"><?php the_sub_field('title'); ?></span></h2>
                <p><?php the_sub_field('description'); ?></p>
            </div>
            <div class="gallery-grid">
                <?php while(have_rows('images')): the_row(); ?>
                    <div class="box">
                        <?php $img = get_sub_field('image')['sizes']['square_thumb']; ?>
                        <img src="<?php echo $img; ?>" />
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer();