<div class="full-width-list">
    <ul>
        <?php $clients = getClients(get_the_title()); ?>
        <?php foreach ($clients as $client): ?>
            <li>
                <a href="<?php echo get_term_link($client); ?>">
                    <?php $img = get_field('featured_image', $client->taxonomy . '_' . $client->term_id); ?>
                    <div class="img-container" style="background: url(<?php echo $img['url']; ?>) no-repeat center center; background-size: cover;"></div>
                    <h3><?php echo $client->name; ?> ></h3>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
