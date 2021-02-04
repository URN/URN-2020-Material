

<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



//register_my_menu

// Add the main nav header menu
  
function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
    register_nav_menu('footer-menu', __( 'Footer Menu' ));

}
add_action( 'init', 'register_my_menu' );

add_image_size('thumb_image', 500, 250, true);

add_theme_support( 'post-thumbnails', array( 'post', 'product' ) );


?>