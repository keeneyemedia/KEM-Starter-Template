					</div> <!-- /post-box -->
				</div> <!-- /content -->
			
			<?php
			$page_layout = get_field('page_layout');
			
			if( $page_layout != 'full_width' && !is_singular( 'gallery' ) ) {
				get_sidebar();
			} ?><!-- /sidebar -->
			

		</div> <!-- /row -->
	</div> <!-- /container -->
</div> <!-- /main-content -->