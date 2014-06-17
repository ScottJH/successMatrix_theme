
<?php while (have_posts()) : the_post(); ?>
<div class="row">
<article class="col-md-8 panel">

   <h1 class="entry-title"><?php the_title(); ?></h1>

	  <?php the_content(); ?>
	  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
</article>
	<aside class="col-md-4 bio">
		<h2>Gerry Langeler</h2>
		<h3>Author, Entrepeneur</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/img/gerry.jpg" class="img-responsive" alt="Gerry Langeler">
			Follow Gerry on Twitter: <br>	
			@GerryLangeler <br>
			More on him at his Linked-in page.	
		</aside>
</div>
<div class="row">
	<article class="col-md-8 col-offset-4">
		<h2>Notable</h2>
		
			<!-- Custom field stuff here-->

	</article>
</div>
	<?php endwhile; ?>


  
