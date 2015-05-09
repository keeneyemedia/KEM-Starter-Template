<?php
/**
 * Search results page
 */
?>
<?php get_template_part( 'parts/pages/page-top' ); ?>
	
	<?php if ( have_posts() ): ?>
	<div class="posts search">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-image">
						<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					</div>
				<?php } ?>
				
				<div class="post-content">
					<h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
					<?php //the_content(); 
						$content = wp_trim_words( get_the_content(), 120 );
						$excerpt = strip_shortcodes( $content );
						echo '<p>' . $excerpt . '</p>';
					?>
					
					<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" class="btn">See More</a>
				</div>
			</div> <!-- /post -->
		<?php endwhile; ?>
		
		<?php kem_pagination(); ?>
		
	</div> <!-- /posts -->
	
	<?php else: ?>
		<div class="posts">
			<div class="post">
				<div class="post-content">
					<h2 class="post-title">No results found for '<?php echo get_search_query(); ?>'</h2>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
<?php get_template_part( 'parts/pages/page-bottom' ); ?>