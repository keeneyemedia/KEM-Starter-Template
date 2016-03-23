<?php

/* ========================================================================================================================
Required external files
======================================================================================================================== */	
	//UTILITIES
	require_once( 'functions/starkers-utilities.php' );
	
	//Advanced Custom Fields
	require_once( 'functions/acf.php' );
	
	//MENUS
	require_once( 'functions/menus.php' );
	
	//SIDEBARS
	require_once( 'functions/sidebars.php' );
	
	//SHORTCODES
	require_once( 'functions/shortcodes.php' );
	
	//MISC
	require_once( 'functions/misc.php' );
	
	//HELP
	require_once( 'functions/help.php' );
		
	
	
/* ========================================================================================================================
Actions and Filters
======================================================================================================================== */
	//BODY CLASSES
	add_filter( 'body_class', 'add_slug_to_body_class' );
	
	add_filter('body_class','kem_class_names');
	function kem_class_names($classes) {
		$classes[] = 'custom';
		return $classes;
	}

/* ========================================================================================================================
Custom Post Types/ Custom Taxonomies
e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
======================================================================================================================== */


/* ========================================================================================================================	
Scripts
======================================================================================================================== */
	//HEAD SCRIPTS
	function kem_enqueue_scripts() {		
		
		//MAIN STYLES
		wp_register_style( 'style-css', get_template_directory_uri().'/style.css', '', '121813' );
		wp_enqueue_style( 'style-css' );
		
		//compiled custom.LESS (includes bootstrap.css)
		wp_register_style( 'custom-style', get_template_directory_uri().'/css/custom.css', '', '121813' );
		wp_enqueue_style( 'custom-style' );
		
		
		//EXTERNAL SCRIPTS
		wp_register_style( 'fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', '', '121813' );
		wp_enqueue_style( 'fontawesome' );
		
		wp_register_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic|Droid+Sans:400,700|Arvo:400,700', '', '121813' );
		wp_enqueue_style( 'googlefonts' );
		
        
        //COMPILED SCRIPTS - FitVids, SyncHeight, Modernizr, Placeholder, Superfish, Flexslider, PrettyPhoto
		wp_register_script( 'kem-scripts', get_template_directory_uri().'/js/site.min.js', array( 'jquery' ), '042214' );
		wp_enqueue_script( 'kem-scripts' );
		
		
		//COMPILED CSS - Flexslider, PrettyPhoto, Superfish
	    wp_register_style('kem-styles', get_template_directory_uri() . '/css/site.css', '', '042214');
	    wp_enqueue_style( 'kem-styles' );
	    

		//BOOTSTRAP
		wp_register_script('bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', '', 'bs-3.1.1');
		wp_enqueue_script( 'bootstrap-js' );

	}
	add_action( 'wp_enqueue_scripts', 'kem_enqueue_scripts' );
	
	
	//CUSTOM HEAD
	function custom_head() { ?>
	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<![endif]-->
		
		
		<script type="text/javascript">
			jQuery(function ($) {
				$('#main-nav ul').superfish();
				
				//open search window in header
				$('.search-icon').click(function() {
					$( "#searchform" ).slideToggle( "slow", function() {
						// Animation complete.
					});
				});
				
				//FitVids on all videos in site
				$(".container").fitVids();
			});
			
			$(window).load(function() {
				$('.flexslider').flexslider({
					prevText: " ",
					nextText: " "
				});
			});
		</script>
	<?php }
	add_action('wp_head','custom_head');