<?php

add_action( 'widgets_init', 'kem_register_sidebars' );

function kem_register_sidebars() {

	if ( function_exists('register_sidebar') ) {
	
		register_sidebar(array(
		  'name' => __( 'Primary Sidebar' ),
		  'id' => 'primary',
		  'description' => __( 'Widgets in this area will be shown in the right column under any page.' ),
		  'before_title' => '<h3 class="widgettitle">',
		  'after_title' => '</h3>',
		  'before_widget' => '<div id="%1$s" class="widget %2$s">',
		  'after_widget'  => '</div>'
		));
		
		
		register_sidebar(array(
		  'name' => __( 'Home Left' ),
		  'id' => 'home-left',
		  'description' => __( 'Widgets in this area will be shown in the left position of the 3 homepage boxes.' ),
		  'before_title' => '<h3 class="widgettitle">',
		  'after_title' => '</h3>',
		  'before_widget' => '<div id="%1$s" class="box box-1 widget %2$s">',
		  'after_widget'  => '</div>'
		));
		
		register_sidebar(array(
		  'name' => __( 'Home Middle' ),
		  'id' => 'home-middle',
		  'description' => __( 'Widgets in this area will be shown in the middle position of the 3 homepage boxes.' ),
		  'before_title' => '<h3 class="widgettitle">',
		  'after_title' => '</h3>',
		  'before_widget' => '<div id="%1$s" class="box box-2 widget %2$s">',
		  'after_widget'  => '</div>'
		));
		
		register_sidebar(array(
		  'name' => __( 'Home Right' ),
		  'id' => 'home-right',
		  'description' => __( 'Widgets in this area will be shown in the right position of the 3 homepage boxes.' ),
		  'before_title' => '<h3 class="widgettitle">',
		  'after_title' => '</h3>',
		  'before_widget' => '<div id="%1$s" class="box box-3 widget %2$s">',
		  'after_widget'  => '</div>'
		));
	}
}

?>