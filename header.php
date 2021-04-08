<!DOCTYPE html>

<html lang="en-US" class="no-js">

<head>
    <title><?php wp_title('-', true, 'right'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?php echo THEME_URL ?>/favicon.png">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/bg-2.png'  ?>" as="image" media="(min-width: 600px)">
    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/mobile-home-01.png'  ?>" as="image" media="(min-width: 600px)">
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.css'  ?>" as="style"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/wow.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/owl.carousel.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.js'  ?>" as="script"> -->

    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N32MKLM');</script>
    <!-- End Google Tag Manager -->

    <script>
        let THEME_URL = "<?php echo THEME_URL ?>";
    </script>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N32MKLM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->