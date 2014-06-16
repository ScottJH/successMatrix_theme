<?php
/*
Template Name: Home
*/
?>

<?php get_template_part('templates/page'); ?>
<div class="row">

<div class="col-md-4">
	<article class="podcast-latest panel">
		<h2>Podcast</h2>
		<?php


		$args = array( 'posts_per_page' => 1,  'category' => 3 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<h3><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
			<?php the_content(); ?>
		<?php endforeach; 
		wp_reset_postdata();?>
	
		<p>
			<a href="#">More episodes</a>
		</p>
	</article>
	<article class="feature-post">
		<h2>Featured Update</h2>
		<?php

		$args = array( 
			'posts_per_page' => 1,
			'post__in'  => get_option( 'sticky_posts' ),
			 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
		<?php endforeach; 
		wp_reset_postdata();?>
	
	</article>

</div>
<div class="col-md-4">
	<article>
		<img src="<?php bloginfo('template_url'); ?>/assets/img/sm-cover.png" class="img-responsive" alt="The Success Matrix cover">
		<h2>Vision, Process, Output</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora accusamus illum, doloremque sint, unde autem voluptates beatae numquam ipsam quae voluptatum sequi cumque neque, dicta, maxime eveniet iste iusto nostrum.</p>
		<p><a href="/about">Read More</a></p>
	</article>
	<article class="panel">
		<h2>Reviews</h2>
		<h3>What Others are Saying</h3>
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas autem possimus blanditiis mollitia veniam, vitae iure, exercitationem eaque dolore ducimus architecto aperiam quos esse quasi? Quod consequuntur vitae sint! Enim!</p>
			<footer>Someone Famous</footer>
		</blockquote>
	</article>
</div>
<div class="col-md-4">
	<article class="panel">
		<h2>Gerry Langeler</h2>
		<h3>Author, Entrepeneur</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/img/gerry.jpg" class="img-responsive" alt="Gerry Langeler">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint debitis officia ipsum reprehenderit voluptas aspernatur cupiditate iste ut veniam commodi ducimus et omnis, nihil quod, fuga perferendis ad nam.</p>
	</article>
	<article>
		<h2>Other Writing</h2>
		<ul class="nav nav-justified">
			<li>
				<a href="">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/take-the-money.jpg" alt="Take the Money and Run cover">
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/the-vision-trap.jpg" alt="The Vision Trap cover">
				</a>
			</li>
		</ul>

	</article>
	<article>
		<span>Twitter</span>
	</article>

</div>
</div>