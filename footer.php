<?php
/**
 * 
 * Footer template.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer id="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<p class="copyright"><?= get_field('copyright', 'option'); ?></p>
			</div>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>