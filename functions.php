<?php

// functions.php template file

//header.php functions come first

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES and SCRIPTS

function enqueue_scripts_and_styles() {
    wp_enqueue_style( 'bootstrap.min', THEME_DIR . '/css/bootstrap.min.css');
    wp_enqueue_style( 'style', THEME_DIR . '/style.css');
    wp_enqueue_style( 'demo', THEME_DIR . '/css/demo.css');
    wp_enqueue_style( 'style-img', THEME_DIR . '/css/style_img.css');
    wp_enqueue_style( 'elastislide', THEME_DIR . '/css/elastislide.css');

    wp_enqueue_script( 'jquery-tmpl.min', THEME_DIR . '/js/jquery.tmpl.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-min', THEME_DIR . '/js/bootstrap.min.js', array(), '1.0', true );
    wp_enqueue_script( 'menu', THEME_DIR . '/js/menu.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery-easing.1.3', THEME_DIR . '/js/jquery.easing.1.3.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery-elastislide', THEME_DIR . '/js/jquery.elastislide.js', array(), '1.0', true );
    wp_enqueue_script( 'gallery', THEME_DIR . '/js/gallery.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );


//end header.php stuff

// add google analytics to footer
// function add_google_analytics() {
    // echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
    // echo '<script type="text/javascript">';
    // echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
    // echo 'pageTracker._trackPageview();';
    // echo '</script>';
// }
// add_action('wp_footer', 'add_google_analytics');

// add a favicon to your 
function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails

// Add custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

?>
