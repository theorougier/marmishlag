<?php
if( !function_exists('tf_restrict_access_without_login') ):
 
 add_action( 'template_redirect', 'tf_restrict_access_without_login' );

 function tf_restrict_access_without_login(){
      
     /* get current page or post ID */
     $page_id = get_queried_object_id();

     /* add lists of page or post IDs for restriction */
     $behind_login_pages = [ 2 ];

     if( ( !empty($behind_login_pages) && in_array($page_id, $behind_login_pages) ) && !is_user_logged_in() ):

         wp_die('You are not allowed to access this page');
         return;
         exit;

     endif;
 }

endif;

add_action( 'template_redirect', 'redirect_if_user_not_logged_in' );

function redirect_if_user_not_logged_in() {

	if ( is_page('slug || ID') && ! is_user_logged_in() ) { //example can be is_page(23) where 23 is page ID

		wp_redirect( '/'); 
 
     exit;// never forget this exit since its very important for the wp_redirect() to have the exit / die
   
   }
   
}

function wpum_custom_redirect_to_homepage( $url ) {
    return home_url();
}
add_filter( 'wpum_get_login_redirect', 'wpum_custom_redirect_to_homepage' );


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('wphetic-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('wphetic-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], false, true);
});

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/img');
define('JS', THEMEROOT.'/js');

wp_enqueue_style( 'style', THEMEROOT . '/style.css' );

function enable_comments_custom_post_type() {
 add_post_type_support( 'Recettes', 'comments' );
}
add_action( 'init', 'enable_comments_custom_post_type', 11 );