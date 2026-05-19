<?php
// $script_handle = 'hero-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/hero.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: hero
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$hero = get_field('hero_content');
$tabs = $hero['tabs'];
$main_cta = $hero['main_cta'];
$sec_cta = $hero['secondary_cta'];
?>
<section class="hero-partial-b54141">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="hero-contain">
                    <?= wp_get_attachment_image($hero['main_image'] ?? '', 'large', false, array(
                        'class' => 'hero-main-image',
                        'fetchpriority' => 'high',
                        'loading' => 'eager',
                        'decoding' => 'async',
                    )); ?>
                    <div class="texts">
                        <h1 class="hero-title"><?= $hero['title'] ?? the_title(); ?></h1>
                        <!-- Description -->
                        <p class="hero-subtitle"><?= $hero['description'] ?? ''; ?></p>
                        <!-- Tabs -->
                        <?php if(!empty($tabs)): ?>
                            <ul class="hero-bullets" aria-label="Resultados que entregamos">
                                <?php foreach($tabs as $li): ?>
                                    <li class="item">
                                        <?= wp_get_attachment_image($li['icon'] ?? '', 'medium', false, array(
                                            'class' => 'tab-icon',
                                            'fetchpriority' => 'high',
                                            'loading' => 'eager',
                                            'decoding' => 'async',
                                        )); ?>
                                        <?= $li['text'] ?? ''; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="hero-ctas">
                            <?php if(!empty($main_cta)): ?>
                                <a href="<?= $main_cta['url']; ?>" target="<?= $main_cta['target'] ?? '_self' ?>" class="btn-primary">
                                    <?= $main_cta['title']; ?>
                                </a>
                            <?php endif; if(!empty($sec_cta)): ?>
                                <a href="<?= $sec_cta['url']; ?>" target="<?= $sec_cta['target'] ?? '_self' ?>" class="btn-secondary">
                                    <?= $sec_cta['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    