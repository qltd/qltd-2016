<?php
/**
* Basic page template
*
* @package _q
*/

get_header();

get_template_part('template-parts/content-page');

if (get_the_title() == 'Design' || get_the_title() == 'Branding' || get_the_title() == 'Development'){
       get_template_part('template-parts/client-project-list');
}

get_footer();