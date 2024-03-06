<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header" role="banner">
    <div class="header-inner">
        <div class="site-branding">
             <a href="<?php echo esc_url(home_url('/'));?>" rel="home">  
                <img src="<?php echo content_url('/uploads/2024/02/Logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>
        
        <div class="header-search">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" style="background-image: url('<?php echo content_url('uploads/2024/02/Search.png'); ?>');">
        </label>
    </form>
</div>


        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', 
                    'menu_id'        => 'primary-menu',
                ));
            ?>
        </nav>

        <div class="header-icons">
            <a href="/wishlist" class="wishlist-link">
                <img src="<?php echo content_url('uploads/2024/02/Love.png'); ?>" alt="Wishlist" />
            </a>
            <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
                <img src="<?php echo content_url('uploads/2024/02/Cart.png'); ?>" alt="Cart" />
                <span class="cart-items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </a>
            <a href="/my-account" class="account-link">
                <img src="<?php echo content_url('uploads/2024/02/User.png'); ?>" alt="Account" />
            </a>
        </div>
    </div>
</header>

<nav class="sub-navigation">
    <?php
        $menu_items = wp_get_nav_menu_items('Sub Navigation');

        foreach ($menu_items as $item) {
            $thumbnail_id = get_woocommerce_term_meta($item->object_id, 'thumbnail_id', true);
            $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';

            echo '<div class="sub-navigation-item">';
            if ($image_url) {
                echo '<a href="' . $item->url . '" class="category-image">';
                echo '<img src="' . $image_url . '" alt="' . esc_attr($item->title) . '" />';
                echo '</a>';
            }
            echo '<a href="' . $item->url . '" class="category-name">';
            echo esc_html($item->title);
            echo '</a>';
            echo '</div>'; 
        }
    ?>
</nav>