<?php

get_header(); 

    do_action( 'actions_before_content_wrapper' );
	
	    do_action( 'actions_before_single' );
		
            do_action( 'actions_single_post_elements' );
			
		    do_action( 'aactions_single_post_comments' );
			
        do_action( 'actions_after_single' );
		
    do_action( 'actions_after_content_wrapper' );	

get_footer();