<?php
// $script_handle = 'how-it-works-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/how-it-works.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: how-it-works
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$content = get_field('how_it_works_content');
$steps = $content['steps'];
$key = 0;
?>
<section class="how-it-works-partial-a30f76">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <?php if(!empty($content['label'])): ?>
                    <p class="label-ask"><?= $content['label']; ?></p>
                <?php endif; if(!empty($content['title'])): ?>
                    <h2 class="title"><?= $content['title']; ?></h2>
                <?php endif; if(!empty($content['description'])): ?>
                    <div class="description">
                        <?= $content['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($steps)): foreach($steps as $item): $key++; ?>
                <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                    <div class="step-item">
                        <span class="step-number"><?= sprintf('%02d', $key); ?></span>
                        <div class="texts">
                            <?php if(!empty($item['title'])): ?>
                                <h3 class="step-title"><?= $item['title']; ?></h3>
                            <?php endif; if(!empty($item['info'])): ?>
                                <p class="step-description">
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
                    