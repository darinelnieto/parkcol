<?php
/**
 * 
 * Partial Name: join-our-team
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$contact = get_field('contact_group');
if(!empty($contact['form_shortcode'])):

$script_handle = 'join-our-team-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/join-our-team.min.js',
    array('jquery'),
    null,
    true
);
?>
<section class="join-our-team-partial-97c157" id="contact" aria-labelledby="contact-title">
    <?php if(!empty($contact['title'])): ?>
        <div class="title-contain mb-5">
            <h2 class="title" id="contact-title"><?= $contact['title']; ?></h2>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5 mb-5 mb-md-0">
                <?php if(!empty($contact['subtitle'])): ?>
                    <h3 class="subtitle"><?= $contact['subtitle']; ?></h3>
                <?php endif; if(!empty($contact['desription'])): ?>
                    <div class="form_intro"><?= $contact['desription']; ?></div>
                <?php endif ?>
            </div>
            <div class="col-12 col-md-6 col-lg-7">
                <div class="form-container">
                    <?= do_shortcode($contact['form_shortcode']); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>