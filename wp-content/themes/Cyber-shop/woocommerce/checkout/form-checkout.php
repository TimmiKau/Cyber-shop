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
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Removed the coupon bar
//do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>


<div class="checkout_holder">

<div class="progress_bar">

<div class="address step1" id="progress_div">

<img class="logo" src="http://Cyber-shop.test/wp-content/uploads/2024/03/Location.png" alt="">

<div class="text"><p class="step">Step 1</p>
<p class="name">Adress</p></div>
</div>

<div class="line"></div>

<div class="shipping_div step2 deactivated" id="progress_div">

<img class="logo" src="http://Cyber-shop.test/wp-content/uploads/2024/03/Shipping.png" alt="">

<div class="text"><p class="step">Step 2</p>
<p class="name">Shipping</p></div>
</div>

<div class="line"></div>

<div class="payment step3 deactivated" id="progress_div">

<img class="logo" src="http://Cyber-shop.test/wp-content/uploads/2024/03/Payment.png" alt="">

<div class="text"><p class="step">Step 3</p>
<p class="name">Payment</p></div>
</div>

</div>

<div class="content">
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set step1" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 class="step2 deactivated" id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div class="step2 shipping deactivated" id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

</div>

<div class="nav_buttons">

<button class="back" id="btn_back">Back</button>
<button class="next" id="btn_next">Next</button>


</div>
</div>