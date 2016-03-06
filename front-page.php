<?php get_header();  ?>

<div class="wrapper homeWrapper">
	
	<div class="sidebarRight">
		<div class="sidebarRightWrapper">
			<?php wp_nav_menu( array(
			      'container' => false,
			      'theme_location' => 'primary'
			    )); ?>
		</div>
	</div>

	<div class="middleScreenHome">
		<div class="middleScreenHomeWrapper">
			<div class="frontHeading">
				<h1>
					<?php wp_title(); ?>
				</h1>
			</div>
			<div class="frontTagline">
				<h2>
					<?php the_content(); ?>
				</h2>
			</div>
		</div>
	</div>

	<div class="sidebarLeft">
		<div class="sidebarLeftWrapper">
			<div class="sidebar">
				<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
			</div>
		</div>
	</div>

</div>


<?php get_footer(); ?>