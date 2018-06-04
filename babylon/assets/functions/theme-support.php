<?php

/*
* ADD THEME SUPPORT
*
*/
if ( ! function_exists( 'ab_wp_theme_support' ) ){
	function ab_wp_theme_support() {

		// Add menu support
		add_theme_support( 'menus' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );

		// RSS thingy
		add_theme_support( 'automatic-feed-links' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Add post formats support: http://codex.wordpress.org/Post_Formats
		add_theme_support( 'post-formats',
			array(
				'aside',             // title less blurb
				'gallery',           // gallery of images
				'link',              // quick link to other site
				'image',             // an image
				'quote',             // a quick quote
				'status',            // a Facebook like status update
				'video',             // video
				'audio',             // audio
				'chat'               // chat transcript
			)
		);

		register_nav_menus( array(
			'header_menu' => esc_html__( 'Primary', 'ab-wp-theme' ),
			'footer_menu' => esc_html__( 'Footer', 'ab-wp-theme' )
		) );

	};
	add_action( 'after_setup_theme', 'ab_wp_theme_support' );
}



/*
* ADD IMAGE SIZE
*
*/
if ( ! function_exists( 'ab_wp_custom_image_sizes' ) ){
    function ab_wp_custom_image_sizes() {
        // add_image_size( 'wud-img', 720, 460, array( 'center', 'center' ) ); // name, width, height, crop
        // add_image_size( 'cont-img-image', 1000, 9999, false );
        // add_image_size( 'mark-img', 9999, 90, false );
        // add_image_size( 'tablet-image', 1024, 1600, true );

    }
    add_action( 'after_setup_theme', 'ab_wp_custom_image_sizes' );
}



/*
* EMPTY IMAGE STUB
*
*/
if ( ! function_exists( 'ab_wp_stub_img' ) ) {
	function ab_wp_stub_img(){
		echo '<img src="' . get_template_directory_uri() . '/assets/images/wp-logo.png" alt="logo"></img>';
	}	
}



/*
* ACF Pro Options Page
*
*/
if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false,
	));

}



/*
* ACF Google map
*/
if ( ! function_exists( ab_wp_acf_google ) ) {
	function ab_wp_acf_google() {
		$key = ''; 
	    acf_update_setting( 'google_api_key', $key );
	}
	add_action('acf/init', 'ab_wp_acf_google');
}



/*
* ADD SVG TIPE
*
*/
function ab_wp_svg( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'ab_wp_svg', 1, 1 );



/*
* CUSTOM EXCERPT
* Use this function with 'get_the_' like this: echo ab_wp_custom_excerpt(35, get_the_title()) 
*/
function ab_wp_custom_excerpt( $limit, $excerpt ){
   if( strlen($excerpt) > $limit) {
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        //$excerpt = $excerpt.'...';
    }
    return $excerpt;
}