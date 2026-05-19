<?php
function sajo_register_partial_script($file) {
    $partial = basename($file, '.php');
    $js_file = get_template_directory() . "/js/partials-min/{$partial}.min.js";
    $js_url  = get_template_directory_uri() . "/js/partials-min/{$partial}.min.js";

    if (file_exists($js_file)) {
        // Cargar siempre en el footer
        add_action('wp_footer', function() use ($partial, $js_url) {
            wp_enqueue_script("partial-{$partial}", $js_url, [], null, true);
        });
    }
}

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

/**
 * Register Theme Styles
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sajo_styles() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.bundle.css' );
  wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('owl-carousel.css', get_template_directory_uri() . '/css/owl.carousel.min.css');
  $fontello_css_path = get_template_directory() . '/css/fontello.css';
  if (file_exists($fontello_css_path)) {
    wp_enqueue_style(
      'fontello.css',
      get_template_directory_uri() . '/css/fontello.css',
      array(),
      filemtime($fontello_css_path)
    );
  }
  // wp_enqueue_style('font-awesome.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'sajo_styles');

/**
 * Register Theme Scripts
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sajo_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.bundle.js', array( 'jquery' ), '', true );
  // wp_enqueue_script('font-awesome.js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js', array(), null, true);
  wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script('owl-carousel.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);

  $inline_js = 'const _sajoURI_ = "' . esc_js(get_template_directory_uri()) . '", _sajoURL_ = "' . esc_js(get_site_url()) . '";';
  wp_add_inline_script('main-scripts', $inline_js, 'before');
}
add_action('wp_enqueue_scripts', 'sajo_scripts');

/**
 * Register Navigation Menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function sajo_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'sajo_navigation_menus' );

/**
 * Theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'custom-logo' );

/**
 * Force generated image sizes to WebP for JPG/PNG uploads.
 */
function sajo_force_webp_output_format($formats) {
  $formats['image/jpeg'] = 'image/webp';
  $formats['image/png'] = 'image/webp';
  return $formats;
}
add_filter('image_editor_output_format', 'sajo_force_webp_output_format');

/**
 * Install latest jQuery version 3.5.1
 */
function sajo_register_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
  }
}
add_action('wp_enqueue_scripts', 'sajo_register_jquery', 1);

// Options page
add_action('init', function(){
  if (function_exists('acf_add_options_page')){
    acf_add_options_page(array(
      'page_title'    => 'Theme Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-settings',
      'capability'    => 'edit_posts',
      'redirect'      =>  true
    ));
    acf_add_options_sub_page(array(
      'page_title'     => 'Footer',
      'menu_title'     => 'Footer',
      'parent_slug'   => 'theme-settings',
    ));
    acf_add_options_sub_page(array(
      'page_title'     => 'SEO',
      'menu_title'     => 'SEO',
      'parent_slug'   => 'theme-settings',
    ));
  }
});