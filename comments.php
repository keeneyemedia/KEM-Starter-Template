<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to starkers_comment() which is
 * located in the functions.php file.
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

	<h4><?php comments_number(); ?></h4>

	<ul class="media-list">
		<?php wp_list_comments( array( 'callback' => 'starkers_comment' ) ); ?>
	</ul>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<?php //<p>Comments are closed</p> ?>
	
	<?php endif; ?>
	
	
	<?php
	$comment_fields =  array(
	  'author' =>
	    '<div class="form-group comment-form-author col-xs-6"><label class="sr-only" for="author">' . __( 'Name', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
	    '<input id="author" name="author" type="text" class="form-control" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div>',
	
	  'email' =>
	    '<div class="form-group comment-form-email col-xs-6"><label class="sr-only" for="email">' . __( 'Email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
	    '<input id="email" name="email" type="text" class="form-control" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div><div class="clear"></div>',
	);
	
	$comments_args = array(
	
			//comments before (opens "row")
			'comment_notes_before' => '<div class="row"><p class="comment-notes col-xs-12">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
			
			//logged in as before (alternately opens "row")
			'logged_in_as' => '<div class="row"><p class="logged-in-as col-xs-12">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
			
			//comments after (closes "row")
			'comment_notes_after' => '<p class="form-allowed-tags col-xs-12">' . sprintf( __( 'You may use these <abbr title="<a> <abbr> <acronym> <b> <blockquote> <cite> <code> <del> <em> <i> <q> <stroke> <strong>">HTML</abbr> tags and attributes.' )) . '</p></div>',
			
	        //submit button label
	        'label_submit'=>'Send Comment',
	        
	        // change the title of the reply section
	        'title_reply'=>'Reply or Comment',
	        
	        // redefine your own textarea (the comment body)
	        'comment_field' => '<div class="form-group comment-form-comment col-xs-12"><label class="sr-only" for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" class="form-control" name="comment" aria-required="true" placeholder="Comment"></textarea></div><div class="clear"></div>',
	        
	        //actual form fields (defined above)
	        'fields' => $comment_fields
	);
	
	comment_form($comments_args); ?>

</div><!-- #comments -->