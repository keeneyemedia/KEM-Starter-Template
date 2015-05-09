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