<?php
/* ========================================================================================================================
Pagination
======================================================================================================================== */
// Numbered Pagination
if ( !function_exists( 'kem_pagination' ) ) {
	function kem_pagination() {
		
		$prev_arrow = is_rtl() ? '<i class="fa fa-caret-right"></i>' : '<i class="fa fa-caret-left"></i>';
		$next_arrow = is_rtl() ? '<i class="fa fa-caret-left"></i>' : '<i class="fa fa-caret-right"></i>';
		
		$prev_arrow = is_rtl() ? 'Previous <i class="fa fa-arrow-right"></i>' : '<i class="fa fa-arrow-left"></i> Previous';
		$next_arrow = is_rtl() ? '<i class="fa fa-arrow-left"></i> Next' : 'Next <i class="fa fa-arrow-right"></i>';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  :
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			$pages = paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'array',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
			 

			echo '<div class="pagination-wrap"><ul class="pagination">';
			foreach ( $pages as $page ) {
				echo "<li>$page</li>";
			}
			echo '</ul></div>';
		endif;
		
	}
}



/* ========================================================================================================================
Comments
======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 * @return void
	 * @author Keir Whitaker
	**/
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li class="media" id="comment-<?php comment_ID() ?>">

			<div class="pull-left"><?php echo get_avatar( $comment, 64 ); ?></div>
			<div class="media-body">
				<h4 class="media-heading"><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time> - <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				
				<?php comment_text() ?>
			</div>

		<?php endif; ?>
		</li>
		<?php 
	}


/* ========================================================================================================================
Security
======================================================================================================================== */	
	//DON'T GIVE AWAY IF ITS WRONG USERNAME OR PASSWORD
	function failed_login() {
	     return 'The login information you have entered is incorrect.';
	}
	add_filter('login_errors', 'failed_login');
	
	
	//TURN OFF FILE EDITING FROM DASHBOARD
	define('DISALLOW_FILE_EDIT', true);
	
	
	//REMOVE Unnecessary Head Code
	remove_action('wp_head', 'wp_generator');
	remove_action ('wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	

/* ========================================================================================================================
User Access
======================================================================================================================== */
	//SHOW ADMIN MENU NAMES, FOR HIDING BELOW
	function wpse_136058_debug_admin_menu() {
	    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
	}
	//add_action( 'admin_init', 'wpse_136058_debug_admin_menu' );
	

	//HIDE SOME MENU ITEMS - requires creating 'edit_custom_fields' capability
	/*function hide_admin_menu() {
		if(current_user_can('install_themes')) {
			echo '<style type="text/css">#toplevel_page_edit-post_type-cfs,#toplevel_page_edit-post_type-acf, #adminmenu .menu-icon-settings{display:block !important;}</style>';
		} else {
			echo '<style type="text/css">#toplevel_page_edit-post_type-cfs,#toplevel_page_edit-post_type-acf, #adminmenu .menu-icon-settings{display:none;}</style>';
		}
	}
	add_action('admin_head', 'hide_admin_menu');*/


	//Hide menu items for "editors" (user capability: 'install_themes') - CSS version above if necessary
	function remove_menus_for_editors() {
	    /*
	    //provide a list of usernames who can edit custom field definitions here
	    //use in conjunction with following if statement:   if( !in_array( $current_user->user_login, $admins ) ) { //not in list }
	    $admins = array( //comma separated
	        'keeneyemedia'//,
	    );
	    */

	    // get the current user
	    $current_user = wp_get_current_user();

	    // match and remove if needed
	    if ( !current_user_can( 'install_themes' ) ) {
			remove_menu_page('options-general.php');
			remove_menu_page('tools.php');
	    }

	}
	add_action( 'admin_menu', 'remove_menus_for_editors', 999 );
	
	
	//Redirect restricted pages to Dashboard for Editors
	function redirect_admin_for_editors() {
		global $pagenow;
		$current_user = wp_get_current_user();
		
		if(is_admin()) {
		    if ( !current_user_can( 'install_themes' ) ) {
		    
			    if(
			    $pagenow == 'themes.php' && isset($_GET['page']) && $_GET['page'] == 'ot-theme-options'  //this matches "/wp-admin/themes.php?page=ot-theme-options"
			    //||
			    /*
			    $pagenow == 'upload.php' ||
			    $pagenow == 'edit-comments.php' ||
			    $pagenow == 'theme-editor.php' ||
			    $pagenow == 'customize.php' ||
			    $pagenow == 'plugins.php' ||
			    $pagenow == 'plugins-install.php' ||
			    $pagenow == 'plugins-editor.php' ||
			    $pagenow == 'tools.php' ||
			    $pagenow == 'options-general.php' ||
			    $pagenow == 'options-writing.php' ||
			    $pagenow == 'options-reading.php' ||
			    $pagenow == 'options-discussion.php' ||
			    $pagenow == 'options-media.php' ||
			    $pagenow == 'options-permalink.php' ||
			    $pagenow == 'plugins-reading.php' ||
			    $pagenow == 'plugins-reading.php' ||
			    $pagenow == 'plugins-reading.php'*/
			    ) {
			        wp_redirect(admin_url());
			        exit;
		    	}
		    }
		}
	}
	add_action( 'admin_init', 'redirect_admin_for_editors', 999 );


?>