<?php

/* sidebars */
	register_sidebar( array(
	'name' => __( 'sidebar' ),
	'id' => 'sidebar-1',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'address' ),
	'id' => 'sidebar-2',
	'before_widget' => '<div class="address">',
	'after_widget' => '</div>',
) );
	register_sidebar( array(
	'name' => __( 'testimonials' ),
	'id' => 'sidebar-3',
	'before_widget' => '<div class="testimonial">',
	'after_widget' => '</div>',
) );
	register_sidebar( array(
	'name' => __( 'affiliations' ),
	'id' => 'sidebar-4',
	'before_widget' => '<div class="affiliationlogo">',
	'after_widget' => '</div>',
) );

/* menus */
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Register custom navigation walker for bootstrap dropdown menu
   require_once('wp_bootstrap_navwalker.php');

/* call google jquery */
function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
}    
add_action('wp_enqueue_scripts', 'my_scripts_method');

/* admin login logo */
function login_logo() {
echo '<style type="text/css">
h1 a {background:url("http://www.root.lamtha2.co.uk/logos/lamtha2_logo.gif") !important; background-repeat:no-repeat !important; margin-left:50px !important; width:230px !important;}
</style>';}
add_action('login_head', 'login_logo');

// allow editor to access appearance menu - themes, widgets and menus
// get the the role object
$role_object = get_role( 'editor' );
// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

// hide wp version from page source
remove_action('wp_head', 'wp_generator');

//remove query string from resources (e.g. plugings links to jquery cdn) to enable browser cacheing
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
        return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


?>