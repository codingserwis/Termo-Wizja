<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPSSSQ8');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="pomiary elektryczne, instalacja, termowizja, alarmy, montaż, oświetlenie, ogrzewanie, budowa, oszczędność, satel, kamera, napięcie, odgromowa, uziom, montaż, różnicówka, zima, ciepło, docieplanie, budynek,  wspólnota mieszkaniowa, zarządcy.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPSSSQ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php echo '<header id="nav-header" class="' . (is_page_template( 'home.php' ) ? 'main-header' : 'white-bcg-header') . '">'; ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <?php 
                            wp_nav_menu( array(
                                'menu' => 'header_menu',
                                'theme_location' => 'header_menu',
                                'menu_id' => 'main-menu',
                                'container' => 'nav',
                                'container_class' => 'main-navbar',
                                'menu_class' => 'menu'
                            ));
                        ?>
                </div>
            </div>
        </div>
    </header><!-- end of header -->