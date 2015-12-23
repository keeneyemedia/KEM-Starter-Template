<?php
/* ========================================================================================================================
Pagination
======================================================================================================================== */
// Numbered Pagination
if ( !function_exists( 'kem_pagination' ) ) {
	
	function kem_pagination() {
		
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
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
	//HIDE SOME MENU ITEMS - requires creating 'edit_custom_fields' capability
	/*function hide_admin_menu() {
		if(current_user_can('edit_custom_fields')) {
			echo '<style type="text/css">#toplevel_page_edit-post_type-cfs,#toplevel_page_edit-post_type-acf, #adminmenu .menu-icon-settings{display:block !important;}</style>';
		} else {
			echo '<style type="text/css">#toplevel_page_edit-post_type-cfs,#toplevel_page_edit-post_type-acf, #adminmenu .menu-icon-settings{display:none;}</style>';
		}
	}
	add_action('admin_head', 'hide_admin_menu');*/
	
	
	//ALLOW EDITORS ACCESS TO GRAVITY FORMS
	function add_grav_forms(){
		$role = get_role('editor');
		$role->add_cap('gform_full_access');
	}
	add_action('admin_init','add_grav_forms');
	
	
	//Hide ACF menu item from the admin menu - CSS version included above to prevent 'editor's as well
	function remove_acf_menu()
	{
	    // provide a list of usernames who can edit custom field definitions here
	    $admins = array( //comma separated
	        'keeneyemedia'//,
	    );
	 
	    // get the current user
	    $current_user = wp_get_current_user();
	 
	    // match and remove if needed
	    if( !in_array( $current_user->user_login, $admins ) )
	    {
	        remove_menu_page('edit.php?post_type=acf');
	    }
	 
	}
	add_action( 'admin_menu', 'remove_acf_menu', 999 );


?>