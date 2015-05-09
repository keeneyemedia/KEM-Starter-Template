<div id="main-content">
	<div class="container">
	
			<?php
			$page_layout = get_field('page_layout');
				
			if($page_layout == 'full_width' || is_singular( 'gallery' ) ) {
				echo '<div class="row full-width">';
			} else {
				echo '<div class="row">';
			} ?>
			
				<div class="content">
					<h1 class="page-title"><?php get_template_part( 'parts/pages/page-title' ); ?></h1>
					
					<?php if( is_single() && !is_singular( 'gallery' ) ) { ?>
						<h5 class="date"><?php echo get_the_date(); ?></h5>
					<?php } ?>
					
					<div class="post-box clearfix">