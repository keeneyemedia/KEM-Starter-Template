<div id="sidebar">
	<ul id="sidebar-main">
			<?php
			if ( function_exists( 'dynamic_sidebar' ) ) {
				if ( is_active_sidebar( 'primary' ) ) {
					dynamic_sidebar( 'primary' );
				}
			}
			?>
	</ul>
</div>