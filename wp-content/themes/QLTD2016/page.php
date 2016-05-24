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


<?php if (get_the_title() == 'Design' || get_the_title() == 'Branding' || get_the_title() == 'Development'): ?>
    <div class="full-width-list">
        <ul>
            <?php $clients = getClients(get_the_title()); ?>
            <?php foreach ($clients as $client): ?>
                <li>
                    <a href="<?php echo get_term_link($client); ?>">
                        <div class="img-container" style="background: url(<?php echo get_field('featured_image', $client->taxonomy . '_' . $client->term_id)['url']; ?>) no-repeat center center; background-size: cover;"></div>
                        <h3><?php echo $client->name; ?> ></h3>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php get_footer();