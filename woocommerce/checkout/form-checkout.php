<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout section-grid" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		
	<div class="checkout-form-row section-grid">
		<section class="" id="customer_details">
			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

			<?php do_action( 'woocommerce_checkout_billing' ); ?>
		
			<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		<div id="video-reviews" class="section-grid">
			<h3 class="lined-heading">Reader's Views</h3>
			<div class="videos">
				<video id="js-player" playsinline data-poster="<?php bloginfo('template_directory');?>/assets/videos/alicia.jpg">
					<source src="<?php bloginfo('template_directory');?>/assets/videos/alicia.mp4" type="video/mp4" />
				</video>

				<video id="js-player" playsinline data-poster="<?php bloginfo('template_directory');?>/assets/videos/rachel.jpg">
					<source src="<?php bloginfo('template_directory');?>/assets/videos/rachel.mp4" type="video/mp4" />
				</video>

				<video id="js-player" playsinline data-poster="<?php bloginfo('template_directory');?>/assets/videos/andre.jpg">
					<source src="<?php bloginfo('template_directory');?>/assets/videos/andre.mp4" type="video/mp4" />
				</video>

				<video id="js-player" playsinline data-poster="<?php bloginfo('template_directory');?>/assets/videos/cathy.jpg">
					<source src="<?php bloginfo('template_directory');?>/assets/videos/cathy.mp4" type="video/mp4" />
				</video>

				<link rel="stylesheet" type="text/css" href="https://unpkg.com/plyr@3/dist/plyr.css">
				<script src="https://unpkg.com/plyr@3"></script>
				<script>
					// Change the second argument to your options:
					// https://github.com/sampotts/plyr/#options
					// const cathyVideo = new Plyr('#cathy');
					// const andreVideo = new Plyr('#andre');

					const players = Plyr.setup('#js-player', {
						controls: [
							'play-large', // The large play button in the center
							'play', // Play/pause playback
							'progress', // The progress bar and scrubber for playback and buffering
							'current-time', // The current time of playback
							'volume', // Volume control
							'fullscreen', // Toggle fullscreen
						]
					});



				</script>

				
			</div>
		</div>

		</section>


		<?php endif; ?>
		
		
		<section class="section-grid">
			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
			<h3 class="lined-heading" id="order_review_heading"><?php esc_html_e( 'Your Order', 'woocommerce' ); ?></h3>
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
		</section>
	</div>


</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
