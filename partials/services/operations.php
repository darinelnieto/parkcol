<?php
// $script_handle = 'operations-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/operations.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: operations
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$operations = get_field('operations_content');
$technical = $operations['operations_list'];
?>
<section class="operations-partial-f35d19">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <?php if(!empty($operations['label'])): ?>
                    <p class="label-ask"><?= $operations['label']; ?></p>
                <?php endif; if(!empty($operations['title'])): ?>
                    <h2 class="title"><?= $operations['title']; ?></h2>
                <?php endif; if(!empty($operations['description'])): ?>
                    <div class="description">
                        <?= $operations['description']; ?>
                    </div>
                <?php endif; if(!empty($operations['call_to_action'])): $cta = $operations['call_to_action']; ?>
                    <a href="<?= $cta['url']; ?>" target="<?= $cta['target'] ?? '_self'; ?>" class="call-to-action">
                        <?= $cta['title'] ?? 'Conocer más'; ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php if(!empty($technical)): foreach($technical as $item): ?>
                <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
                    <div class="technology-item">
                        <?= wp_get_attachment_image($item['icon'] ?? '', 'medium', false, array(
                            'class' => 'technology-icon',
                            'loading' => 'lazy',
                            'decoding' => 'async'
                        )) ?>
                        <div class="texts">
                            <?php if(!empty($item['title'])): ?>
                                <h3 class="technology-title"><?= $item['title']; ?></h3>
                            <?php endif; if(!empty($item['info'])): ?>
                                <div class="technology-description">
                                    <?= $item['info']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
                    