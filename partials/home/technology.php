<?php
// $script_handle = 'technology-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/technology.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: technology
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$technology = get_field('technology_group');
$items = $technology['items'];
?>
<section class="technology-partial-8d1638">
    <div class="container">
        <div class="row">
            <?php if(!empty($technology['title'])): ?>
                <div class="col-12 mb-md-5">
                    <h2 class="title"><?= $technology['title'] ?? ''; ?></h2>
                </div>
            <?php endif; ?>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <?php if(!empty($technology['subitle'])): ?>
                    <h3 class="subtitle"><?= $technology['subitle']; ?></h3>
                <?php endif; if(!empty($technology['description'])): ?>
                    <p class="description"><?= $technology['description']; ?></p>
                <?php endif; if(!empty($technology['call_to_action'])): $cta = $technology['call_to_action']; ?>
                    <a href="<?= $cta['url']; ?>" class="call-to-action" target="<?= $cta['target'] ?? '_self'; ?>">
                        <?= $cta['title'] ?? 'Contáctanos'; ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php if(!empty($items)): ?>
                <div class="col-12 col-lg-8">
                    <div class="row justify-content-md-center">
                        <?php foreach($items as $item): ?>
                            <div class="col-12 col-sm-6 col-lg-5 mb-4 mb-lg-0">
                                <div class="technology-card">
                                    <?= wp_get_attachment_image($item['icon'] ?? '', 'medium', false, array(
                                        'class' => 'technology-icon',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    )); ?>
                                    <div class="texts">
                                        <?php if(!empty($item['label'])): ?>
                                            <h4 class="label"><?= $item['label']; ?></h4>
                                        <?php endif; if(!empty($item['list'])): ?>
                                            <ul class="list">
                                                <?php foreach($item['list'] as $list_item): ?>
                                                    <li>
                                                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check_All_Big"> <path id="Vector" d="M7 12L11.9497 16.9497L22.5572 6.34326M2.0498 12.0503L6.99955 17M17.606 6.39355L12.3027 11.6969" stroke="#d3e5ee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                                        <?= $list_item['description']; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?= wp_get_attachment_image($technology['main_image'] ?? '', 'medium', false, array(
        'class' => 'main-image',
        'loading' => 'lazy',
        'decoding' => 'async',
    )); ?>
</section>
                    