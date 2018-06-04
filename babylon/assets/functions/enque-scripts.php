<?php
/*
* style and scripts for the front end.
*
*/
if ( ! function_exists( 'ab_wp_front_scripts' ) ) :
	function ab_wp_front_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'prod-stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all' );

		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css/main-css.css', array(), '', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, null, true );
		wp_enqueue_script('jquery');

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		//wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// Enqueue the main scripts
		wp_enqueue_script( 'highcharts', 'https://code.highcharts.com/highcharts.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'exporting', 'https://code.highcharts.com/modules/exporting.js', array( 'highcharts' ), '', true );

		wp_enqueue_script( 'bild', get_template_directory_uri() . '/assets/js/bild.js', array( 'jquery' ), '', true );

		// <script src="https://code.highcharts.com/highcharts.js"></script>
	    // <script src="https://code.highcharts.com/modules/exporting.js"></script>
		wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/main-js.js', array( 'bild' ), '', true );


		// Enqueue FontAwesome from CDN. Uncomment the line below if you need FontAwesome.
		//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );

		$ajax_param = array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('myajax-nonce')
		);

		wp_localize_script( 'main-scripts', 'myajax', $ajax_param );
		
	}
	add_action( 'wp_enqueue_scripts', 'ab_wp_front_scripts' );
endif;


/*
* style and scripts for the admin.
*
*/
if ( ! function_exists( 'ab_wp_admin_scripts' ) ) :
	function ab_wp_admin_scripts() {
		// wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/assets/css/admin-css.css', array(), '', 'all' );
	}  
	add_action( 'admin_enqueue_scripts', 'ab_wp_admin_scripts' );
endif;