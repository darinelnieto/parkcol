<?php
$script_handle = 'they-trust-us-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/they-trust-us.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: they-trust-us
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$info = get_field('they_trust_us_content');
$statistics = $info['statistics'];
?>
<section class="they-trust-us-partial-dddad3">
    <?php if(!empty($info['company'])): ?>
        <div class="they-trust-us-slide-content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <?php if(!empty($info['label'])): ?>
                        <div class="col-12 col-md-3 col-xl-2">
                            <h2 class="they-trust-us-label"><?= $info['label']; ?></h2>
                        </div>
                    <?php endif; ?>
                    <div class="col-12 <?php if(!empty($info['label'])): ?>col-md-9 col-xl-10<?php endif; ?>">
                        <div class="company-slide owl-carousel">
                            <?php foreach($info['company'] as $company): ?>
                                <div class="company-slide-item">
                                    <p class="company-name"><?= $company['name']; ?></p>
                                </div>
                                <div class="company-slide-item">
                                    <p class="company-name">|</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; if(!empty($statistics)): ?>
        <div class="container py-5">
            <div class="row justify-content-center">
                <?php foreach($statistics as $statistic): ?>
                    <div class="col-6 col-md-3 text-center">
                        <div class="statistic-item">
                            <h3 class="statistic-value"><?= $statistic['value']; ?></h3>
                            <p class="statistic-label"><?= $statistic['label']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
                    