<?php
// $script_handle = 'why-choose-us-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/why-choose-us.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: why-choose-us
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$why_choose_us = get_field('why_choose_us_content');
$contributions = $why_choose_us['contributions'];
?>
<section class="why-choose-us-partial-2e60e0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <?php if(!empty($why_choose_us['label'])): ?>
                    <p class="label-ask"><?= $why_choose_us['label']; ?></p>
                <?php endif; if(!empty($why_choose_us['title'])): ?>
                    <h2 class="title"><?= $why_choose_us['title']; ?></h2>
                <?php endif; if(!empty($why_choose_us['description'])): ?>
                    <div class="description">
                        <?= $why_choose_us['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($contributions)): foreach($contributions as $item): ?>
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="contribution-item">
                        <?php if(!empty($item['icon'])): ?>
                            <div class="icon">
                                <?= wp_get_attachment_image($item['icon'], 'medium', false, array(
                                    'class' => 'contribution-icon',
                                    'loading' => 'lazy',
                                    'decoding' => 'async',
                                )); ?>
                            </div>
                        <?php endif; ?>
                        <div class="texts">
                            <?php if(!empty($item['title'])): ?>
                                <h3 class="contribution-title"><?= $item['title']; ?></h3>
                            <?php endif; if(!empty($item['info'])): ?>
                                <p class="contribution-description">
                                    <?= $item['info']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
                    