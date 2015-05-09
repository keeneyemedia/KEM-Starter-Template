<?php
//global $post;

if ( is_day() ) {
	echo get_the_date( 'D M Y' );
}
else if ( is_month() ) {
	echo get_the_date( 'M Y' );
}	
else if ( is_year() ) {
	echo get_the_date( 'Y' );
}
else if ( is_category() ) {
	echo single_cat_title( '', false );
}
else if ( is_tag() ) {
	echo single_tag_title( '', false );
}
else if ( is_author() ) {
	echo get_the_author();
}

else if( class_exists( 'WooCommerce' ) ) {
	if(is_product_category()) {
		single_cat_title();
	}
	else if (is_shop()) {
		echo get_the_title(woocommerce_get_page_id( 'shop' ));
	}
	
	else if (is_product()) {
		$args = array( 'taxonomy' => 'product_cat',);
		$terms = wp_get_post_terms($post->ID,'product_cat', $args);
	
		$count = count($terms); 
		if ($count > 0) {
			if($terms[0]->name == 'Gluten Free' || $terms[0]->name == 'Vegan') {
				echo $terms[1]->name;
			} else {
				echo $terms[0]->name;
			}	
		}
	}
}

else if ( is_home() ) {
	$postspage_id = get_option('page_for_posts');
	echo get_the_title($postspage_id);
}

else if ( is_singular('event') ) {
	$main_events_page = get_field('main_events_page', 'options');
	echo get_the_title($main_events_page);
}

else if(is_single()) {
	$cat_args = array( 'taxonomy' => 'category',);
	$cat_terms = wp_get_post_terms($post->ID,'category', $cat_args);

	$count = count($cat_terms); 
	if ($count > 0) {
		echo $cat_terms[0]->name;
	}
}

else if(is_search()) {
	echo "Results for '" . get_search_query() . "'";
}

else {
	the_title();
}