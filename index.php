<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Actions
 */

get_header();
 
    do_action( 'actions_before_content_wrapper' );
	
	do_action( 'actions_before_index' );
	
        if ( have_posts() ) :
		
		    do_action( 'actions_before_index_elements' );
			
			    do_action( 'actions_index_elements' );
				
			do_action( 'actions_after_index_elements' );
        
		// If no content, include the "No posts found" action.
		else :
			do_action( 'actions_before_content_none' );
			
			    do_action( 'actions_index_content_none' );
				
			do_action( 'actions_after_content_none' );
			
		endif;
		
    do_action( 'actions_after_content_wrapper' );
	
	do_action( 'actions_sidebar' );
	
get_footer();