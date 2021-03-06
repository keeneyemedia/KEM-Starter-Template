<?php
/**
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>

	<?php get_template_part('parts/pages/page', 'top'); ?>
	
		<?php if ( have_posts() ) while ( have_posts() ) :
			the_post();
			the_content();
			comments_template( '', true );
		endwhile; ?>
	
	<?php get_template_part('parts/pages/page', 'bottom'); ?>

<?php get_footer(); ?>