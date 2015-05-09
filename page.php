<?php
/**
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) :
		the_post();
		the_content();
		comments_template( '', true );
	endwhile; ?>

<?php get_footer(); ?>