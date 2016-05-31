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
        <a href="<?php echo get_permalink($p->ID); ?>" class="box">
            <img src="<?php echo get_field('featured_image', $p->ID)['sizes']['square_thumb']; ?>">
            <div class="details">
                <div>
                    <h2><?php echo $p->post_title; ?></h2>
                    <h3>
                    <?php $services = get_field('services', $p->ID);
                        echo formatServices($services);
                    ?>
                    </h3>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>

<?php get_footer();