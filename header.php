<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

<?php
        function theme_scripts() {
            wp_enqueue_style( 'Theme stylesheet', get_stylesheet_uri() );
            wp_enqueue_style( 'Main stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0', false );

            wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '1.0', false );
            wp_enqueue_script( 'Plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
            wp_enqueue_script( 'Main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
        }

        add_action( 'wp_enqueue_scripts', 'theme_scripts' );
?>

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