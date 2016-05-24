<?php
/**
* Single Project page template
*
* @package _q
*/

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $client = get_the_terms( $post->ID, 'clients' ); ?>
    <h1 class="page-title"><?php echo $client[0]->name; ?></h1>

    <div class="body-content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
    </div>


    <?php if (have_rows('images', $post->ID)): ?>
    <div class="full-width-list img-list">
        <ul>
            <?php while(have_rows('images', $post->ID)): the_row(); ?>
            <li>
                <img src="<?php echo get_sub_field('image')['url']; ?>" />
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

<?php endwhile; endif; ?>

<?php get_footer();