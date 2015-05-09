			</div> <!-- /main -->
			
			<?php
			if($page_layout == 'full_width' || is_page_template( 'page-find-us.php' )) {}
			
			else {
				get_sidebar();
			} ?><!-- /sidebar -->
						
		</div> <!-- /row -->
	</div> <!-- /container -->
</div> <!-- /content -->

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>