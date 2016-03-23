<?php
/* ========================================================================================================================
Site-wide Help Tab
======================================================================================================================== */
function add_dashboard_help_tab() {
  if ($screen = get_current_screen()) {
    $help_tabs = $screen->get_help_tabs();
    $screen->remove_help_tabs();
	
		$tab_content = __('
		<p><a href="http://premium.wpmudev.org/projects/category/videos/" target="_blank">Generic Tutorials<br>
		General videos explaining standard functions of the Wordpress system.</p>
		
		<p><a href="/nifty-link/" target="_blank">Overview</a> <span class="dashicons dashicons-format-video"></span><br>
		Intro to site, explanation of <em>Dashboard</em>, <em>Media</em>, <em>Forms</em>, and <em>Comments</em>.</p>
		
		<p><a href="http://google.com" target="_blank">Pages</a> <span class="dashicons dashicons-format-video"></span><br>
		Explanation of <em>Pages</em>.</p>
		
		<p><a href="http://amazon.com" target="_blank">Projects</a> <span class="dashicons dashicons-format-video"></span><br>
		Explanation of <em>Projects</em>.<br>
		UPDATE: When creating projects, make sure to check the "Access" box, as <a href="' . plugins_url( 'help/my-image.png', __FILE__ ) . '">seen here</a>.<br>
		<strong style="color: red;">UPDATE: Please disregard this video for now. It is outdated.</strong></p>
		
		', 'kem_styles');
		
		$screen->add_help_tab( array(
			'id'       => 'kem_help',
			'title'    => __( 'Video Documentation', 'kem_styles' ),
			'content'  => $tab_content
		) );
		
	  if (count($help_tabs))
      foreach ($help_tabs as $help_tab)
        $screen->add_help_tab($help_tab);
		
  }
}
//Add to all dashboard screens
add_action( 'in_admin_header', 'add_dashboard_help_tab');


?>