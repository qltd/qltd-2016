<?php
/**
* Our Work Page template
*
* @package _q
*/

get_header();

get_template_part('template-parts/content-page'); ?>

<?php
    $args = array(
        'post_type'=> 'projects',
        'order'    => 'ASC'
    );
    $projects = get_posts( $args );
?>
<div class="project-grid">
    <?php foreach ($projects as $p):?>
        <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
         <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
         <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
         <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
         <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
         <div class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details"><?php echo $p->post_title; ?></div>
        </div>
    <?php endforeach; ?>
</div>

<?php get_footer();