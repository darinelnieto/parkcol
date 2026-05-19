<?php
$script_handle = 'about-us-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/about-us.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: about-us
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$about = get_field('about');
$grid = $about['cards_grid'];
$quote = $about['quote'];
$about_des = $about['about_description'];
$slide = $about['strength'];
?>
<section class="about-us-partial-476df8" id="sobre-nosotros" aria-labelledby="about-title">
    <div class="container">
        <!-- About us -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9 text-center mb-5">
                <!-- About -->
                <div class="about-us">
                    <h2 class="title" id="about-title"><?= $about_des['title'] ?? ''; ?></h2>
                    <div class="description">
                        <?= $about_des['description'] ?? ''; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grid -->
        <?php if(!empty($grid)): ?>
            <div class="row justify-content-center">
                <?php foreach($grid as $item): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card-item">
                            <p class="label"><?= $item['label'] ?? '' ?></p>
                            <?= wp_get_attachment_image($item['card_image'] ?? '', 'medium', false, array(
                                'class' => 'card-image',
                                'loading' => 'lazy',
                                'decoding' => 'async',
                            )) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <!-- Quote -->
        <div class="row">
            <div class="col-12 text-center">
                <div class="quote mb-5">
                    <p class="quote-text">
                        <?= wp_get_attachment_image($quote['icon'] ?? '', 'medium', false, array(
                            'class' => 'quote-icon',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        )); ?>
                        <?= $quote['description'] ?? ''; ?>
                    </p>
                    <?php if(!empty($quote['call_to_action'])): $cta = $quote['call_to_action']; ?>
                        <a href="<?= $cta['url']; ?>" target="<?= $cta['target'] ?? '_self'; ?>" class="contact-btn">
                            <?= $cta['title'] ?? 'Contáctanos'; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- strength -->
        <?php if(!empty($slide['items'])): ?>
            <div class="row">
                <div class="col-12 text-center mb-0 mb-4">
                    <h3 class="sub-title"><?= $slide['subtitle'] ?? ''; ?></h3>
                </div>
            </div>
            <div class="row justify-content-md-center grid-slide">
                <?php foreach($slide['items'] as $item): ?>
                    <div class="item col-12 col-md-4 col-lg-4 text-ccenter">
                        <h4 class="card-title"><?= $item['label'] ?? ''; ?></h4>
                        <?= wp_get_attachment_image($item['image'] ?? '', 'medium', false, array(
                            'class' => 'card-image',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        )) ?>
                        <p class="description"><?= $item['description'] ?? ''; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
                    