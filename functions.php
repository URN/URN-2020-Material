

<?php
/**
 * Register Custom Navigation Walker
 */
function urn_material_scripts() {
    // Load our main stylesheet.
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('listen-now', get_template_directory_uri() . '/js/listen-now.js', array('jquery'), false, true);
    wp_enqueue_script('listen-now', get_template_directory_uri() . '/js/listen-now.js', array('jquery'), false, true);

   // if ( is_home() || is_page ('schedule')) {
      wp_enqueue_script('the-schedule', get_template_directory_uri() . '/js/schedule.js', array('jquery'), false, true);

  //}
}
add_action( 'wp_enqueue_scripts', 'urn_material_scripts' );
      
function ourWidgetsInit(){
  register_sidebar( array (
    'name' => 'Sidebar',
    'id' => 'sidebar1',

  ));
}
add_action('widgets_init', 'ourWidgetsInit');

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



/**
 * Shows our stylings inside of the Wordpress Post Editor (when writing a new post)
 *
 * Styles defined in editor-style.css
*/

add_theme_support('editor-styles');
add_editor_style( 'style-editor.css' );

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

  

?>