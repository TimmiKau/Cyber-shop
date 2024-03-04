<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	</head>
	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<table width="100%" id="outer_wrapper">
			<tr>
				<td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
				<td width="1000">
					<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
						<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
							<tr>
								<td align="center" valign="top">
									<div id="template_header_image">
										<?php
										$img = get_option( 'woocommerce_email_header_image' );

										if ( $img ) {
											echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" /></p>';
										}
										?>
									</div>
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container">
										<tr>
											<td align="center" valign="top">
												<!-- Header -->
												<header style="background-color: #000; padding: 10px 0;">
        <div style="text-align: center;">
            <a href="http://cyber-shop.test">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Logo.png" style="height: 4rem;padding:2rem;"; alt="Logo">
            </a>
        </div>
         
        <nav style="text-align: center;">
            <!-- navigation item -->
            <a href="http://cyber-shop.test/product-category/phones/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Phones.png" style="height: 12px;" alt="Phones Icon" style="vertical-align: middle;"> Phones
            </a>
            <span class="separator"></span>
            <a href="http://cyber-shop.test/product-category/computers/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Computers.png" style="height: 12px;" alt="Computers" style="vertical-align: middle;"> Computers
            </a>
            <span class="separator"></span>
            <a href="http://cyber-shop.test/product-category/smart-watches/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Gaming.png" style="height: 12px;" alt="Smart Watches Icon" style="vertical-align: middle;"> Smart Watches
            </a>
            <span class="separator"></span>
            <a href="http://cyber-shop.test/product-category/cameras/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Camera.png" style="height: 12px;" alt="Cameras Icon" style="vertical-align: middle;"> Cameras
            </a>
            <span class="separator"></span>
            <a href="http://cyber-shop.test/product-category/headphones/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Headphones.png" style="height: 12px;" alt="Headphones Icon" style="vertical-align: middle;"> Headphones
            </a>
            <span class="separator"></span>
            <a href="http://cyber-shop.test/product-category/gaming/" style="color: #fff; text-decoration: none;">
                <img src="http://Cyber-shop.test/wp-content/uploads/2024/03/Gaming.png" style="height: 12px;" alt="Gaming Icon" style="vertical-align: middle;"> Gaming
            </a>
        </nav>
    </header>
												<!-- End Header -->
											</td>
										</tr>
										<tr>
											<td align="center" valign="top">
												<!-- Body -->
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body">
													<tr>
														<td valign="top" id="body_content">
															<!-- Content -->
															<table border="0" cellpadding="20" cellspacing="0" width="100%">
																<tr>
																	<td valign="top">
																		<div id="body_content_inner">
