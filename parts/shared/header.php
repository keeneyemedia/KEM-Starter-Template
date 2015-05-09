
<header>
	<h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<?php bloginfo( 'description' ); ?>
	<?php get_search_form(); ?>
</header>

<nav>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'primary-menu-container' ) ); ?>
</nav>