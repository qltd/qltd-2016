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
        'numberposts' => -1,
        'post_status' => 'publish',
        'order'    => 'ASC'
    );
    $projects = get_posts( $args );
    echo '<pre>'; print_r(count($projects)); echo '</pre>';
?>
<div class="project-grid">
    <?php foreach ($projects as $p):?>
        <a href="<?php echo get_permalink($p->ID); ?>" class="box">
            <?php $img = get_field('featured_image', $p->ID); ?>
            <img src="<?php echo $img['sizes']['square_thumb']; ?>">
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