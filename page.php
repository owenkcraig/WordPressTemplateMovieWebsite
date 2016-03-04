<?php get_header();  ?>

<div class="main">
  <div class="wrapper">

    <div class="sidebarLeft">
      <div class="sidebarLeftWrapper">
        <ul class="sidebar">
          <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
      </div>
    </div>
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <div class="sidebarRight">
      <div class="sidebarRightWrapper">
        <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?>
      </div>
    </div>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>