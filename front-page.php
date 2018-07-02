<?php

add_action( 'genesis_meta', 'my_homepage_setup' );
/**
 * Add widget support for homepage.
 *
 */
function my_homepage_setup() {

	if ( is_active_sidebar( 'front-page-top' ) )  {

		 //* Add front page top widget
		add_action( 'genesis_after_header', 'display_front_page_top_widget' );

	}
}

// Add markup to display front page widgets.
function display_front_page_top_widget() {

	genesis_widget_area( 'front-page-top', array(
		'before' => '<div class="featured-widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

genesis();