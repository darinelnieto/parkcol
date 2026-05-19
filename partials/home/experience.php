<?php
$script_handle = 'experience-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/experience.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: experience
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$experience = get_field('experience_group');
$labels = $experience['grid_items'];
$reviews = get_field('reviews_slide');
?>
<section class="experience-partial-16be58">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php if(!empty($experience['title'])): ?>
                    <h2 class="title"><?= $experience['title']; ?></h2>
                <?php endif; if(!empty($experience['description'])): ?>
                    <div class="description">
                        <?= $experience['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($labels)): foreach($labels as $item): ?>
                <div class="col-12 col-sm-6 col-md-3 text-center experience-item mb-4">
                    <?= wp_get_attachment_image($item['icon'] ?? '', 'medium', false, array(
                        'class' => 'icon',
                        'loading' => 'lazy',
                        'decoding' => 'async'
                    )); ?>
                    <div class="text">
                        <?php if(!empty($item['label'])): ?>
                            <h4 class="experience-name"><?= $item['label']; ?></h4>
                        <?php endif; if(!empty($item['description'])): ?>
                            <p class="exp_info"><?= $item['description']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; endif; ?>
            <!-- Reviews -->
            <?php if(!empty($reviews['items'])): ?>
                <div class="col-12 mt-5">
                    <?php if(!empty($reviews['title'])): ?>
                        <h2 class="title mb-5"><?= $reviews['title']; ?></h2>
                    <?php endif; ?>
                    <div class="reviews-slide owl-carousel">
                        <?php foreach($reviews['items'] as $item): ?>
                            <div class="item">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#a50000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179zm-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.457 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621-.537.278-1.24.375-1.929.311C4.591 12.322 3.17 10.841 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.099.49 2.748 1.179z"></path> </g> </g></svg>
                                <p class="text-review"><?= $item['review'] ?? ''; ?></p>
                                <div class="author">
                                    <?= wp_get_attachment_image($item['photo'] ?? '', 'medium', false, array(
                                        'class' => 'author-photo',
                                        'loading' => 'lazy',
                                        'decoding' => 'async'
                                    )); ?>
                                    <div class="name-and-rol">
                                        <span class="name"><?= $item['authors_name'] ?? ''; ?></span>
                                        <span class="rol"><?= $item['rol'] ?? ''; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
                    