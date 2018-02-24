<?php 

// Add scripts and stylesheets
function load_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'bootstrapXl', get_template_directory_uri() . '/css/bootstrapXl.css' );
	wp_enqueue_style( 'colors', get_template_directory_uri() . '/css/colors.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css' );
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
	wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );
	wp_enqueue_style( 'mailForm', get_template_directory_uri() . '/css/mailForm.css' );
	wp_enqueue_style( 'section', get_template_directory_uri() . '/css/section.css' );
	wp_enqueue_style( 'section1', get_template_directory_uri() . '/css/section1.css' );
	wp_enqueue_style( 'sectio2n', get_template_directory_uri() . '/css/section2.css' );
	wp_enqueue_style( 'secti3on', get_template_directory_uri() . '/css/section3.css' );
	wp_enqueue_style( 'sect4ion', get_template_directory_uri() . '/css/section4.css' );
	wp_enqueue_style( 'mediaQueries', get_template_directory_uri() . '/css/mediaQueries.css' );

	wp_enqueue_script( 
		'bootstrap', 
		get_template_directory_uri() . '/js/bootstrap.min.js', 
		array('jquery'), 
		'3.3.6', 
		true 
	);
	wp_enqueue_script( 
		'newjquery', 
		get_template_directory_uri() . '/js/jquery.min.js', 
		array('jquery'), 
		'3.3.6', 
		true 
	);
	wp_enqueue_script( 
		'script', 
		get_template_directory_uri() . '/js/script.js', 
		array( 'newjquery' )
	);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
