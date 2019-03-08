<?php
/**
 * Child theme functions
 */
function gsadmissions_remove_sidebars() {
	// Unregister sidebars not in use in admissions theme	
	unregister_sidebar( 'home-bottom-left' );
	unregister_sidebar( 'home-bottom-middle' );
	unregister_sidebar( 'home-bottom-right' );
}

add_action( 'widgets_init' , 'gsadmissions_remove_sidebars' , 11);

// Add Custom Header support
function custom_header_support() {
$args = array(
	'width'         => 1170,
	'height'        => 325,
	'default-image' => get_stylesheet_directory_uri() . '/banner-photo.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'custom_header_support' );

// Register GS Admissions theme sidebar/widget areas
add_action( 'widgets_init' , 'gsadmissions_custom_sidebars' );

function gsadmissions_custom_sidebars() {
	/*register_sidebar(array(
	  'name' => __( 'Home Banner Photo' ),
	  'id' => 'home-banner-image',
	  'description' => __( 'Large banner image on home page only.' ),
	  'before_widget' => '',
	  'after_widget'  => '',
	  'before_title' => '',
	  'after_title' => ''
	));*/

	register_sidebar(array(
	  'name' => __( 'Home Row One' ),
	  'id' => 'home-row-one',
	  'description' => __( 'Home page row 1.  Use a Content Block to add content.' ),
	  'before_widget' => '',
	  'after_widget'  => '',
	  'before_title' => '',
	  'after_title' => ''
	));
	register_sidebar(array(
	  'name' => __( 'Home Row Two' ),
	  'id' => 'home-row-two',
	  'description' => __( 'Home page row 2.  Use a Content Block to add content.' ),
	  'before_widget' => '',
	  'after_widget'  => '',
	  'before_title' => '',
	  'after_title' => ''
	));
	register_sidebar(array(
	  'name' => __( 'Home Row Three' ),
	  'id' => 'home-row-three',
	  'description' => __( 'Home page row 3.  Use a Content Block to add content.' ),
	  'before_widget' => '',
	  'after_widget'  => '',
	  'before_title' => '',
	  'after_title' => ''
	));
	register_sidebar(array(
	  'name' => __( 'Home Row Four' ),
	  'id' => 'home-row-four',
	  'description' => __( 'Home page row 4.  Use a Content Block to add content.' ),
	  'before_widget' => '',
	  'after_widget'  => '',
	  'before_title' => '',
	  'after_title' => ''
	));
}

?>
