<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<?php if(is_blog()) { 
  $ID = get_option( 'page_for_posts' );
   $postThing = (object) [
    'ID' => $ID
  ];
  ?>
  
<body style="background-image: url(<?php echo hackeryou_get_thumbnail_url($postThing) ?> );" <?php body_class(); ?>>

      <header>
        <div class="headerWrapper">
          <h2>
            Blog
          </h2>


        </div> <!-- /.container -->
      </header><!--/.header-->

<?php
  } 
else {
  ?>
<body style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?> );" <?php body_class(); ?>>

  <header>
    <div class="headerWrapper">
      <h2>
        <?php the_title(); ?>
      </h2>


    </div> <!-- /.container -->
  </header><!--/.header-->

<?php } ?>




