<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="content">
	<div class="container">
	
	<?php $page_layout = get_field('page_layout'); ?>
		
		<?php if($page_layout == 'full_width') {
			echo '<div class="row full-width">';
		} else {
			echo '<div class="row">';
		} ?>
		
			<div class="page-title">
				<h1><?php get_template_part( 'parts/pages/page-title' ); ?></h1>
			</div>
			
			<?php
			if(is_page_template( 'page-find-us.php' )) {
				get_template_part( 'parts/sidebar-find-us' );
			} ?>
			
			<div class="main">