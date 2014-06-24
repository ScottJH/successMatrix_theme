<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <article>
          <h2>The Success Matrix Podcast</h2>
          <h3>A PODCAST FOR THOSE LOOKING TO TEXT COPY HERE</h3>
          <p>Ryan Holiday is a media strategist and author
          of the new book Trust Me, I'm Lying:
          Confessions of a Media Manipulator. Brooke
          speaks to Ryan about what it is like to bribe the
          media on behalf of bestselling authors and
          billion dollar brands.</p>
        </article>
        <article>
          <h2>Subscribe</h2>
          <p><span><a href="<?php bloginfo('url'); ?>/?cat=3&feed=rss2">Subscribe test</a></span></p>
          <p>LISTEN ON THE GO,
          SUBSCRIBE TO THE
          SUCCESS MATRIX
          PODCAST ON ITUNES</p>
        </article>
        <article>
          <h2>Episode List</h2>
          <ul class="pod-list">
        <?php

          $args = array( 
            'category' => 3
             );

          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <li><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endforeach; 
          wp_reset_postdata();?>
          </ul>
        </article>
        <article>
          <h2>Thanks to Our Guests</h2>
          <ul class="guest-list">
          <?php

            $args = array( 
              'category' => 3
               );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <li>
              <?php 
               
              $image = get_field('cover_image');
               
              if( !empty($image) ): ?>
               
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="pull-left" />
              <?php else: ?>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/default-guest-img.jpg" alt="Default guest image" class="pull-left" />
              <?php endif; ?>
              <?php
 
              if(get_field('guest'))
              {
                echo '<p><span class="pod-guest">' . get_field('guest') . '</span><br />';
              }
               
              ?>

              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></li>
            <?php endforeach; 
            wp_reset_postdata();?>
            
          </ul>
        </article>
        <!--<?php include roots_sidebar_path(); ?>-->
        
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
