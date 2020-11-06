
<!-- TODO - add style sheet function in here -->

<?php 
// theme options

add_theme_support('menus');



   // Add the main nav header menu
   if ( function_exists( 'register_nav_menus' ) ) {
  
    function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
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

?>
