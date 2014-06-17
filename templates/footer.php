<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
  		<div class="col-md-4">
  			<h2>Contact</h2>
  		</div>
  		<div class="col-md-4">
  			<h2>Learn More</h2>
  		</div>
  		<div class="col-md-4">
  			<h2>Connect</h2>
  		</div>
  	</div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
