<?php
/**
 * Actions Framework.
 *
 * WARNING: This file is part of the core Actions Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Actions\Search
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    
 */

add_filter( 'get_search_form', 'actions_search_form' );
/**
 * Replace the default search form with a Actions-specific form.
 *
 * The exact output depends on whether the child theme supports HTML5 or not.
 *
 * Applies the `actions_search_text`, `actions_search_button_text`, `actions_search_form_label` and
 * `actions_search_form` filters.
 *
 * @since 0.2.0
 *
 * @uses actions_html5() Check for HTML5 support.
 *
 * @return string HTML markup.
 */
function actions_search_form() {
	$search_text = get_search_query() ? apply_filters( 'the_search_query', get_search_query() ) : apply_filters( 'actions_search_text', __( 'Search this website', 'actions' ) . ' &#x02026;' );

	$button_text = apply_filters( 'actions_search_button_text', esc_attr__( 'Search', 'actions' ) );

	$onfocus = "if ('" . esc_js( $search_text ) . "' === this.value) {this.value = '';}";
	$onblur  = "if ('' === this.value) {this.value = '" . esc_js( $search_text ) . "';}";

	//* Empty label, by default. Filterable.
	$label = apply_filters( 'actions_search_form_label', '' );

	$value_or_placeholder = ( get_search_query() == '' ) ? 'placeholder' : 'value';

	if ( actions_html5() ) {

		$form  = sprintf( '<form %s>', actions_attr( 'search-form' ) );

		$form = sprintf(
			'<form method="get" class="searchform search-form" action="%s" role="search" >%s<input type="text" value="%s" name="s" class="s search-input" onfocus="%s" onblur="%s" /><input type="submit" class="searchsubmit search-submit" value="%s" /></form>',
			home_url( '/' ),
			esc_html( $label ),
			esc_attr( $search_text ),
			esc_attr( $onfocus ),
			esc_attr( $onblur ),
			esc_attr( $button_text )
		);

	}

	return apply_filters( 'actions_search_form', $form, $search_text, $button_text, $label );

}