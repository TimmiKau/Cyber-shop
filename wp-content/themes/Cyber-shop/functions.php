<?php
require_once("vite.php");

require_once(get_template_directory() . "/init.php");

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');



// Andra funktioner du redan har...

function cyber_shop_customize_register($wp_customize) {
    // Lägg till en ny sektion i Customizer
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'cyber-shop'),
        'priority' => 30,
    ));

    // Lägg till inställningen för Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default'   => '', // Ange en standardbild om du vill
        'transport' => 'refresh',
    ));

    // Lägg till kontrollen för att välja Hero Image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'    => __('Hero Image', 'cyber-shop'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )));
}

add_action('customize_register', 'cyber_shop_customize_register');


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' );
}

add_filter( 'woocommerce_cart_item_name', 'product_image_review_order_checkout', 9999, 3 );
  
function product_image_review_order_checkout( $name, $cart_item, $cart_item_key ) {
    if ( ! is_checkout() ) return $name;
    $product = $cart_item['data'];
    $thumbnail = $product->get_image( array( '50', '50' ), array( 'class' => 'alignleft' ) );
    return $thumbnail . $name;
}