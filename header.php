<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php get_stylesheet_uri(); ?>
        <link rel='stylesheet' id='Main stylesheet-css'  href='<?php echo get_template_directory_uri(); ?>/css/style.css?v=1.0' type='text/css' />

        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.3.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/main.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/plugins.js'></script>

        <!--[if lt IE 9]>
        <script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <?php wp_head(); ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">

            <header>
                <div class="logo">
                    <a href="/" class="logo">
                        <img src="<?php echo $GLOBALS['pathImg']; ?>logo.png" alt="">
                    </a>
                </div>

                <nav class="cfx">
                    <?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'sort_column' => 'menu_order', 'container_class' => 'page-nav' ) ); ?>
                </nav>

     
            </header>