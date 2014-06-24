<?php
	
	$args = array( 
	'posts_per_page' => 1, 
	'category' => 3
	);
$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	
	<article <?php post_class(); ?>>
		<h2>Featured Edpisode</h2>
		<h3><?php the_title(); ?></h3>
		<div class="row">
		<div class="col-md-6">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<div class="col-md-6">
			<?php 
				$audio = get_children( 
				array(
				'post_parent' => $post->ID, 
				'post_status' => 'inherit', 
				'post_type' => 'attachment', 
				'post_mime_type' => 'audio' ) 
				); ?>
				<?php if ( empty( $audio ) ) : ?>
			<?php else : ?>
		    <div>
		            <?php 
				$attr = array(
					'src'      => wp_get_attachment_url( $attachment_id, 'full' ),
					'loop'     => '',
					'autoplay' => '',
					'preload' => 'none'
				);								
				echo wp_audio_shortcode( $attr ); ?>
		    </div>
		<?php endif; ?>
			<?php the_excerpt(); ?>
	        
		</div>
		</div>
		<hr>
	</article>	
<?php endforeach; 
wp_reset_postdata();?>

<div class="row">

<?php
	$args = array( 
	'category' => 3,
	'offset' => 1
	);
$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<div class="col-md-6 ">	
	<article class="panel">
		<h3><?php the_title(); ?></h3>
			<?php 
				$audio = get_children( 
				array(
				'post_parent' => $post->ID, 
				'post_status' => 'inherit', 
				'post_type' => 'attachment', 
				'post_mime_type' => 'audio' ) 
				); ?>
				<?php if ( empty( $audio ) ) : ?>
			<?php else : ?>
		            <?php 
				$attr = array(
					'src'      => wp_get_attachment_url( $attachment_id, 'full' ),
					'loop'     => '',
					'autoplay' => '',
					'preload' => 'none'
				);								
				echo wp_audio_shortcode( $attr ); ?>
		<?php endif; ?>
   	<?php get_template_part('templates/entry-meta'); ?>
	<?php the_excerpt(); ?>
	<hr>
	<!-- Social Stuff -->
	</article>
</div>	        	
<?php endforeach; 
wp_reset_postdata();?>

</div>