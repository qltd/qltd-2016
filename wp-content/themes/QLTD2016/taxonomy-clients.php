<?php
/**
* Clients Taxonomy page template
*
* @package _q
*/
$termID = $wp_query->get_queried_object_id();
get_header(); ?>

<h1 class="page-title"><?php single_cat_title(); ?></h1>

<div class="body-content">
    <?php the_field('content', 'clients_' . $termID); ?>

    <div class="services-provided">
        <h6>Services Provided</h6>
        <?php
            $services = get_field('provided_services', 'clients_' . $termID);
            echo formatServices($services);
        ?>
    </div>
</div>


<div class="full-width-list">
    <ul>
        <?php
            $args = array(
                'post_type'=> 'projects',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'clients',
                        'field'    => 'slug',
                        'terms'    => get_query_var( 'clients' ),
                    ),
                ),
                'order'    => 'ASC'
            );
            $projects = get_posts( $args );
        ?>
        <?php foreach ($projects as $project): ?>
            <li>
                <a href="<?php echo get_permalink($project->ID); ?>">
                    <?php $featured_image = get_field('featured_image', $project->ID); ?>
                    <div class="img-container" style="background: url(<?php echo $featured_image['url']; ?>) no-repeat center center; background-size: cover;"></div>
                    <h3><?php echo $project->post_title; ?> ></h3>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php get_footer();