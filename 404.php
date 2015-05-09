<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_template_part( 'parts/pages/page-top' ); ?>

	<?php the_field('404_page_content','option'); ?>

<?php get_template_part( 'parts/pages/page-bottom' ); ?>