<?php
$script_handle = 'header-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/header.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: header
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$custom_logo_id = get_theme_mod('custom_logo');
?>
<section class="header-partial-b3c1ef">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-3 col-md-2">
                <a href="<?= home_url(); ?>" class="custom-logo-link">
                    <?= wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                        'class' => 'header-logo',
                        'fetchpriority' => 'high',
                        'loading' => 'eager',
                        'decoding' => 'async',
                    )); ?>
                </a>
            </div>
            <div class="col-2 bar-menu-content">
                <button class="bar-menu">
                    <span class="bar-line top"></span>
                    <span class="bar-line center"></span>
                    <span class="bar-line bottom"></span>
                </button>
            </div>
            <div class="col-10">
                <div class="nav-menu-contain">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'container' => 'nav',
                            'container_class' => 'main-nav',
                            'menu_class' => 'main-menu',
                            'fallback_cb' => false,
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
                    