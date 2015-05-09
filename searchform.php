<form role="search" method="get" id="searchform" class="searchform" action="/">
	<div class="input-group">
		<label class="sr-only" for="s"><?php _x( 'Search the site:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit">Search</button>
		</span>
	</div>
</form>