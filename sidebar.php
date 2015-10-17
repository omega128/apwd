<div id="sidebar">
	<?php
	wp_nav_menu( array(
		'menu_class'     => 'nav-menu',
		'theme_location' => 'primary',
	) );
	?>

	<div id="widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div>
