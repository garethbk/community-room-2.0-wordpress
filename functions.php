<?php

//register & enqueue javascript
function cr_add_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '2.1.3');
	wp_enqueue_script('jquery');
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrap' );
	wp_register_script( 'photo-gallery', get_template_directory_uri() . '/js/photo-gallery.js', array( 'jquery' ) );
	wp_enqueue_script( 'photo-gallery' );
	wp_register_script( 'custom', get_template_directory_uri() . '/js/javerscripts.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'cr_add_scripts' );

//register primary nav menu
function cr_nav_menu() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'mobile-menu' => __('Mobile Menu')
		)
	);
}
add_action( 'init', 'cr_nav_menu' );

//register bootstrap navwalker class
require_once('wp_bootstrap_navwalker.php');

//add custom header functionality
function cr_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/cr-logo-nav.png',
        'default-text-color' => '000',
        'width'              => 332,
        'height'             => 70,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
    //Tacked on thumbnail support here for convenience
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'cr_custom_header_setup' );

//add front page current show image to customizer
function cr_showimage_customizer( $wp_customize ) {
	$wp_customize -> add_section( 'show_image_section', 
		array(
			'title' => __('Show Image', 'crslug' ),
			'priority' => 30,
			'description' => 'Upload an image for the front page for current show; recommend size is 1140 x 658',
			)
		);
	$wp_customize -> add_setting( 'show_image' );
	$wp_customize -> add_control( new WP_Customize_Image_Control(
		$wp_customize, 'show_image', array(
			'label' => __('Show Image', 'crslug' ),
			'section' => 'show_image_section',
			'settings' => 'show_image',
			)
		));

}
add_action( 'customize_register', 'cr_showimage_customizer' );

//fix for responsive images so they are not automatically rescaled out of proportion
//from here: https://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );


?>