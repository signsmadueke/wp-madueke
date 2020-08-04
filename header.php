<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<?php wp_head(); ?>
</head>

<body <?php body_class('container' . $extraBodyClasses);?>>
<section id="navigation">
    <div id="logo">
        <a href="https://madueke.com">
            <div class="logo-icon">
                <img src="<?php bloginfo('template_directory');?>/assets/images/madueke/icon.png'; ?>" alt="Prayer M. Madueke">
            </div>
            <div class="logo-text">
                <h3 class="logo-name">Prayer M. Madueke</h3>
                <p class="logo-tagline">Bookstore</p>
            </div>
        </a>
    </div>

    <div class="nav-space"></div>

    <nav>
        <?php
            // wp_nav_menu(
            //     array(
            //         'theme_location' => 'top-menu',
            //         'menu' => 'main-menu',
            //         'container' => 'ul',
            //         'menu_class' => '',
            //     )
            // );
        ?>

        <ul>
            <li>
                <a href="/">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/menu/home.svg'; ?>">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="https://store.madueke.com/contact">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/menu/contact.svg'; ?>">
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="https://store.madueke.com/account">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/menu/account.svg'; ?>">
                    <span>Account</span>
                </a>
            </li>
            <li>
                <?php global $woocommerce; ?>
                <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="bordered">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/menu/cart.svg'; ?>">
                    <span class="cart-total"> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
                    $woocommerce->cart->cart_contents_count);?> — <?php echo $woocommerce->cart->get_cart_total(); ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <a class="mobile-nav-item" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
        <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/cart.svg'; ?>">
        <span class="text">Cart</span>
    </a>

    <button class="menu mobile-nav-item" type="button">
        <div>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <span class="text">Menu</span>
    </button>
</section>

<section id="sidebar">
    <section id="navigation">
        <div id="logo">
            <a href="https://madueke.com">
                <div class="logo-icon">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/madueke/icon.png'; ?>" alt="Prayer M. Madueke">
                </div>
                <div class="logo-text">
                    <h3 class="logo-name">Prayer M. Madueke</h3>
                    <p class="logo-tagline">Bookstore</p>
                </div>
            </a>
        </div>

        <div class="nav-space"></div>

        <a class="mobile-nav-item" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
            <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/cart.svg'; ?>">
            <span class="text">Cart</span>
        </a>

        <button class="menu mobile-nav-item" type="button" style="margin-top: 13px;grid-gap: 15px;">
            <div>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <span class="text">Menu</span>
        </button>
    </section>

    <div id="sidebar-space"></div>

    <nav>
        <?php
            // wp_nav_menu(
            //     array(
            //         'theme_location' => 'mobile-menu',
            //         'menu' => 'main-menu',
            //         'container' => 'ul',
            //         'menu_class' => '',
            //     )
            // );
        ?>

        <ul>
            <li class="<?php if ($title == "Home"){echo "active";} ?>">
                <a href="/">Home</a>
            </li>
            <li class="<?php if ($title == "Contact"){echo "active";} ?>">
                <a href="https://store.madueke.com/contact">Contact</a>
            </li>
            <li class="<?php if ($title == "Account"){echo "active";} ?>">
                <a href="https://store.madueke.com/account">Account</a>
            </li>
            <li class="<?php if ($title == "Account"){echo "active";} ?>">
                <?php global $woocommerce; ?>
                <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>">Cart</a>
            </li>
        </ul>
    </nav>
    
    <div id="social">
        <ul>
            <li>
                <a href="https://facebook.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/facebook.svg'; ?>" height="15px" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://instagram.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/instagram.svg'; ?>" height="15px" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/twitter.svg'; ?>" height="15px" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="https://amazon.com/author/prayermadueke">
                    <img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/social/amazon.svg'; ?>" height="15px" alt="Amazon">
                </a>
            </li>
        </ul>
    </div>

    <div id="sidebar-space"></div>

    <p class="copyright">© 2020 Prayer M. Madueke. All rights reserved.</p>

</section>