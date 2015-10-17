<?php
	get_header();
?>
<main>
	<?php
		while ( have_posts() ) : the_post();
			<?php the_content(); ?>
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
	?>
</main>
<?php
	get_footer();
?>
