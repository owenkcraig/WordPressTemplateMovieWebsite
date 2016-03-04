<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

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
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

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