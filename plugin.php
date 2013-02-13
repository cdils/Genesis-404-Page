<?php

	// Search Shortcode
	add_shortcode( 'genesis-404-search', array( $this, 'search_shortcode' ) );

	
	/**
	 * Search Shortcode
	 *
	 * @since 1.1
	 * @author Bill Erickson
	 */
	function search_shortcode() {
		return '<div class="genesis-404-search">' . get_search_form( false ) . '</div>';
	}
