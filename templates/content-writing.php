<?php
	
	$args = array( 
	'posts_per_page' => 1, 
	'post_type' => 'book'
	);
$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		
	<article <?php post_class('panel'); ?>>
		<h2><?php the_title(); ?></h2>
		<span><?php echo $cat; ?></span>
		<div class="row">	
			<div class="col-md-4 book-cover-image">
				<?php 
				 
				$image = get_field('cover_image');
				 
				if( !empty($image) ): ?>
				 
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<h3><?php the_field('book_tagline'); ?></h3>
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<h3>Take a Look Inside</h3>

				<a href="<!--PDF Link-->">Download a PDF sample</a>

				<h3>Buy Your Copy</h3>

				<a href="<!-- Amazon Link --> "><img src="amazon-image" alt=""></a>
			</div>
		</div>
		</article>
		
		<div class="row">
		
		<h2>What Others Are Saying</h2>

		<?php $cat = get_the_category(); ?>

		<?php
				
			$args = array( 
			'posts_per_page' => 3, 
			'post_type' => 'review',
			'category' => $cat[0]->cat_ID
			);
		$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
			<article class="col-md-4">
				<blockquote>
					<p><?php the_content(); ?></p>
					<footer><?php the_field('quote_attribute'); ?></footer>
				</blockquote>	
			</article>		

		<?php endforeach; 
		wp_reset_postdata();?>
	
		</div>	

<?php endforeach; 
wp_reset_postdata();?>

<?php
	
	$args = array( 
	'post_type' => 'other-writing'
	);
$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		
	<article <?php post_class(); ?>>
		<h2><?php the_title(); ?></h2>
		<span><?php echo $cat; ?></span>
		<div class="row">	
			<div class="col-md-4 book-cover-image">
				<?php 
				 
				$image = get_field('cover_image');
				 
				if( !empty($image) ): ?>
				 
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<h3><?php the_field('book_tagline'); ?></h3>
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<h3>Take a Look Inside</h3>

				<a href="<!--PDF Link-->">Download a PDF sample</a>

				<h3>Buy Your Copy</h3>

				<a href="<!-- Amazon Link --> "><img src="amazon-image" alt=""></a>
			</div>
		</div>
		</article>
		
		<div class="row">

<?php endforeach; 
wp_reset_postdata();?>


