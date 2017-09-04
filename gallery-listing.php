<?php
/*
Template Name: Galeria lista
*/
<ul>

<?php

    // list of gallery subpages

 $args = array(
	'authors'      => '',
	'child_of'     => 10,
	'date_format'  => get_option('date_format'),
	'depth'        => 0,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
	'title_li'     => __('Pages'), 
	'walker'       => ''
); 

wp_list_pages('title_li='); 

?>
</ul>