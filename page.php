<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package actions
 */

get_header();
    
	do_action( 'actions_before_content_wrapper' );
	
	do_action( 'actions_before_page' );
	
        while ( have_posts() ) : the_post();
		    do_action( 'actions_page_elements' ); // Give your elements priorities so that they hook in the right place.
		endwhile;
		
    do_action( 'actions_after_page' );
	
	do_action( 'actions_after_content_wrapper' );

get_footer(); ?>
