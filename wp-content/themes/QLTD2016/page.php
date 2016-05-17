<?php
/**
* Basic page template
*
* @package _q
*/

get_header(); ?>

<h1 class="page-title"><?php the_title(); ?></h1>

<div class="body-content">
    <h2>The ark.org</h2>
    <p>Lorem ipsum dolor sit met, consectetur adipiscing elit. Present id imperiet odio. Prior comido lectus a comido ultricies. Quinqué euismod velit sit met leo feugiat, nec posuere mi cursus. Nunc trisomique ut torero vitae tempus. Fusie accumaan ac relit non tempor. Mecenas felis tellus, sollicitudin sit met minibus non, volutpat et rises. Nam est lestés, dictum eu est sed, mollis varius dui. In volutpat erat massa. Suis vel aliquam justo. Vivamus sit met rutrum nibh. Aeneas lagret lectus sed spaden egestas, sed rutrum nibh gravida. Mauris posuere sit smet matris vel pretium. Phasellus in fringilla veilt, vel accumaan turpis. Cras ut ante euismod, fermentum justo vel, congé magna. Morbi convalli non felis sit met efficitur.</p>
</div>


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


<div class="full-width-list img-list">
    <ul>
        <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/space-wide.jpg" />
        </li>
       <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/space-wide.jpg" />
        </li>
    </ul>
</div>


<?php get_footer();