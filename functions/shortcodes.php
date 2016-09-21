<?php
/*EXPAND/CLOSE SHORTCODE*/
function expand_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => '',
		'id' => '',
	), $atts ) );
 
	return '<div class="expand-section"><h3 class="read-more" id="' . esc_attr($id) . '"><span class="arrow"></span>' . esc_attr($title) . '</h3><div class="expanded"><p>' . $content . '</p></div></div>';
}
add_shortcode( 'expand', 'expand_shortcode' );


/*DIVIDER*/
function divider_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'color' => '',
		'width' => '',
	), $atts ) );
      
	return '<div class="divider ' . esc_attr($color) . ' ' . esc_attr($width) . '"></div>';
}
add_shortcode( 'divider', 'divider_shortcode' );


/** KEM ELEMENT
-customizable html generator shortcode
**/
function kem_element_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => '',
		'class' => '',
		'name' => '',
		'type' => '',
	), $atts ) );
	
	$id = esc_attr($id);
	$class = esc_attr($class);
	$name = esc_attr($name);
	$type = esc_attr($type);
	if (!$type) {
		$type = 'div';
	}
	
	$output = '';
	$output .= '<' . $type;
	if ($id) {
		$output .= ' id="' . $id . '"';
	}
	if ($class) {
		$output .= ' class="' . $class . '"';
	}
	if ($name) {
		$output .= ' name="' . $name . '"';
	}
	$output .= '>';
	$output .= do_shortcode($content);
	$output .= '</' . $type . '>';
	
	return $output;
}
add_shortcode('kem-element','kem_element_shortcode');


/*STRIP EXTRA 'P' TAGS FROM SHORTCODES*/
function wpex_fix_shortcodes($content){   
	$array = array (
		'<p>[' => '[', 
		']</p>' => ']', 
		']<br />' => ']'
	);

    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'wpex_fix_shortcodes');