<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('panel'); ?>>
    <header>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <!-- Social stuff here -->
      <span>Social Stuff</span>
    </footer>    

    <?php
 
    if(get_field('transcript'))
    {
      echo '<hr /><div id="transcript" class="collapse" style="height: 50px;"><p>'
       . get_field('transcript') . 
          '</p>
          </div>
        <a href="#transcript" data-toggle="collapse" data-target="#transcript">
          Full Transcript
        </a>';
    }
     
    ?>

  </article>
    <?php comments_template('/templates/comments.php'); ?>
  
<?php endwhile; ?>
