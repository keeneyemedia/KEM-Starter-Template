<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
	
	<?php if ( have_posts() ): ?>
	<div class="posts">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-image">
						<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					</div>
				<?php } ?>
				
				<div class="post-content">
					<h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
					<?php the_content(); 
					//echo wp_trim_words( get_the_content(), 120 ); ?>
				</div>
			</div> <!-- /post -->
		<?php endwhile; ?>
		
		<?php kem_pagination(); ?>
		
	</div> <!-- /posts -->
	
	<?php else: ?>
		<div class="posts">
			<div class="post">
				<div class="post-content">
					<h2 class="post-title">No posts to display</h2>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
<?php get_footer(); ?>