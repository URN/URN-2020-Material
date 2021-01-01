
<!-- TODO - add style sheet function in here -->

<?php 
// theme options

add_theme_support('menus');



   // Add the main nav header menu
   if ( function_exists( 'register_nav_menus' ) ) {
  
    function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
    register_nav_menu('footer-menu', __( 'Footer Menu' ));

}
add_action( 'init', 'register_my_menu' );
}





/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>
