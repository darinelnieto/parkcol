<?php
// $script_handle = 'services-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/services.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: services
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$services = get_field('services_content');
if($services['services_list']):
?>
<section class="services-partial-29da8a" id="servicios" aria-labelledby="servicios-title">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="title" id="servicios-title"><?= $services['title'] ?? ''; ?></h2>
            </div>
        </div>
        <?php foreach($services['services_list'] as $item): ?>
            <article class="row service-item mb-5 align-items-center" aria-labelledby="<?= $item['aria_labelledby'] ?? 'valet-title'; ?>">
                <div class="col-12 col-md-6 col-lg-7 texts mb-5 mb-md-0">
                    <h3 class="service-name"><?= $item['subtitle'] ?? ''; ?></h3>
                    <div class="desciption">
                        <?= $item['decription'] ?? ''; ?>
                    </div>
                    <?php if($item['call_to_action']): $cta = $item['call_to_action']; ?>
                        <a href="<?= $cta['url']; ?>" class="call-to-action" target="<?= $cta['target'] ?? '_self'; ?>">
                            <?= $cta['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="service-images">
                        <?= wp_get_attachment_image( $item['main_image'] ?? '', 'large', false, array(
                            'class' => 'service-main-image',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        )); ?>
                        <?= wp_get_attachment_image( $item['parkcol_image'] ?? '', 'large', false, array(
                            'class' => 'secondary-image',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        )); ?>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>  