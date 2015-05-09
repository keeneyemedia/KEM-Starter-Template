<?php
$previous_post = get_next_post();
$next_post = get_previous_post();

if(!empty( $next_post ) || !empty( $previous_post )) { ?>
	<div class="pagination">
		<ul class="pager">
			<?php if (!empty( $next_post )) { ?>
				<li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-post"><?php echo $next_post->post_title; ?> <i class="fa fa-angle-double-right"></i></a></li>
			<?php } ?>
			
			<?php if (!empty( $previous_post )) { ?>
				<li class="previous"><a href="<?php echo get_permalink( $previous_post->ID ); ?>" class="previous-post"><i class="fa fa-angle-double-left"></i> <?php echo $previous_post->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div> <!-- /pagination -->
	<div class="clear"></div>
<?php } ?>