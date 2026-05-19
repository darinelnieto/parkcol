<?php
/**
 * 
 * Header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?> | <?= get_field('metatitle', 'option'); ?></title>
  <meta name="description" content="<?= get_field('metadescription', 'option'); ?>">
  <?php 
    $custom_metadatos = get_field('metadatos', 'option');
    if(!empty($custom_metadatos)): foreach($custom_metadatos as $metadato):
  ?>
    <?= $metadato['item']; ?>
  <?php endforeach; endif; ?>
  <meta name="author" content="Parkcol">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <?php if ( have_rows('json_ld_scripts', 'option') ) : ?>
    <?php while ( have_rows('json_ld_scripts', 'option') ) : the_row(); ?>
      <?php
        $json_ld_item = get_sub_field('item', false);
        if ( empty($json_ld_item) ) {
          continue;
        }
        $json_ld_item = preg_replace('/^\s*<p>\s*(<script\b[\s\S]*?<\/script>)\s*<\/p>\s*$/i', '$1', $json_ld_item);
      ?>
      <?= $json_ld_item; ?>
    <?php endwhile; ?>
  <?php endif; ?>

</head>

<body <?php body_class(); ?>>
<div id="page"> <!-- +Page container -->

  <header id="header-wrapper">
    <?php get_template_part('/partials/globals/header'); ?>
  </header>