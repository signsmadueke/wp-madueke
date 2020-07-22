<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<?php wp_head(); ?>

        
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131093422-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-131093422-2');
    </script>
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
                <p class="logo-tagline">CHRISTIAN AUTHOR</p>
            </div>
        </a>
    </div>

    <div class="nav-space"></div>

    <nav>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => '',
                )
            );
        ?>
    </nav>

    <button class="menu" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
                    <p class="logo-tagline">CHRISTIAN AUTHOR</p>
                </div>
            </a>
        </div>

        <div class="nav-space"></div>

        <button class="menu" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </section>

    <div id="sidebar-space"></div>

    <nav>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mobile-menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => '',
                )
            );
        ?>
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