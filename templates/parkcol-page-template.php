   
<?php
/**
 * 
 * Template Name: parkcol-page
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="parkcol-page-template-64926b">
    <?php get_template_part('partials/home/hero'); ?>
    <?php get_template_part('partials/home/about-us'); ?>
    <?php get_template_part('partials/home/services'); ?>
    <?php get_template_part('partials/home/customer-slide'); ?>
    <?php get_template_part('partials/home/technology'); ?>
    <?php get_template_part('partials/home/experience'); ?>
    <?php get_template_part('partials/home/join-our-team'); ?>
</main>
<?php get_footer(); ?>