<?php
$script_handle = 'customer-slide-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/customer-slide.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: customer-slide
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$slide = get_field('customer_slide');
$main_img = get_field('image_after_slide');
?>
<section class="customer-slide-partial-dca853">
    <?php if(!empty($slide)): ?>
    <div class="container">
        <div class="row">
            <div class="col-12 customer-slide owl-carousel">
                <?php foreach($slide as $img): ?>
                    <div class="item">
                        <?= wp_get_attachment_image($img, 'medium', false, array(
                            'class' => 'customer-slide-image',
                            'loading' => 'lazy',
                            'decoding' => 'async'
                        )) ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php endif; ?>   
    <?= wp_get_attachment_image($main_img ?? '', 'large', false, array(
        'class' => 'customer-slide-main-image',
        'loading' => 'lazy',
        'decoding' => 'async'
    )); ?>
</section>   