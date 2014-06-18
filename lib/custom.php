<?php
/**
 * Custom functions
 */

/** Custom Post ==========================*/

// Reviews

add_action( 'init', 'create_post_type' );
function create_post_type() {
	// Reveiws
	register_post_type( 'review',
		array(
			'labels' => array(
			'name' => __( 'Reviews' ),
			'singular_name' => __( 'Review' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('category')
		)
	);
	// Writings
	register_post_type( 'other-writing',
		array(
			'labels' => array(
			'name' => __( 'Other Writings' ),
			'singular_name' => __( 'Other Writing' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('category')
		)
	);
	register_post_type( 'book',
		array(
			'labels' => array(
			'name' => __( 'Books' ),
			'singular_name' => __( 'Book' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('category')
		)
	);

}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');