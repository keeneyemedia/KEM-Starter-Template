<?php 

//Register Main Menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menu( 'primary', __( 'Primary Navigation' ) );
	register_nav_menu( 'footer-main', __( 'Footer Main' ) );
	register_nav_menu( 'footer-legal', __( 'Footer Legal' ) );
}


//Add 'dropdown' class to LI's with children
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
function add_menu_parent_class( $items ) {
	
	$parents = array();
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}
	
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'dropdown'; 
		}
	}
	
	return $items;    
}


/*  -Add 'dropdown-menu' class to 'sub-menu' menus (need to manually include 'sub-menu' too)
	-Add 'class="dropdown-toggle"' and 'data-toggle="dropdown"' to sub-menu parent <a> tags
	
	To run on a menu, add to wp_nav_menu using: 'walker' => new Dropdown_Walker_Nav_Menu()
*/
class Dropdown_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl(&$output, $depth) {
      $indent = str_repeat("\t", $depth);
      //$output .= "\n$indent<ul class=\"sub-menu\">\n";

      // Change sub-menu to dropdown menu
      $output .= "\n$indent<ul class=\"dropdown-menu sub-menu\">\n";
  }
  
  
  function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
	// check, whether there are children for the given ID and append it to the element with a (new) ID
	$element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);
	
	return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	//now you can access $item->hasChildren below
  }
  
  
  function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    // Most of this code is copied from original Walker_Nav_Menu
    global $wp_query, $wpdb;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    // Check if menu item is in main menu
    if ( $depth == 0 && $item->hasChildren ) {
        // These lines adds your custom class and attribute
        $attributes .= ' class="dropdown-toggle"';
        $attributes .= ' data-toggle="dropdown"';
    }

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

    // Add the caret if menu level is 0
    /*if ( $depth == 0 && $has_children > 0  ) {
        $item_output .= ' <b class="caret"></b>';
    }*/

    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

}


?>