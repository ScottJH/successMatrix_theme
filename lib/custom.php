<?php
/**
 * Custom functions
 */

/** Custom Post ==========================*/

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'review',
		array(
			'labels' => array(
			'name' => __( 'Reviews' ),
			'singular_name' => __( 'Review' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');