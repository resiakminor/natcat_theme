<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        
<!--=== META TAGS ===-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="author" content="resiakminor">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="Nathan Catlin">
        <meta name="twitter:description" content="Mad Decent">
        <meta name="twitter:creator" content="">

<!-- Twitter Summary card images must be at least 120x120px -->
        <meta name="twitter:image" content="">

<!-- Open Graph data -->
        <meta property="og:title" content="Nathan Catlin">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://nathancatlin.com">
        <meta property="og:image" content="">
        <meta property="og:description" content="Mad Decent"> 
        <meta property="og:site_name" content="Nathan Catlin">

<!--=== LINK TAGS ===-->
        <link rel="icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" type="image/x-icon">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--=== TITLE ===-->  
        <title><?php bloginfo( 'name' ); ?> | <?php wp_title(); ?></title>

<!--=== WP_HEAD() ===-->
        <?php wp_head(); ?>
        
    </head>

    <body data-spy="scroll" data-target="#spy-scroll-id">
    <!-- analytics tracking 
    <?php //include_once("analyticstracking.php") ?> -->
        <nav class="navbar navbar-custom navbar-fixed-top">
            <div class="container">
                <div id="brand" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home">Nathan Catlin</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse masthead-nav">
                    <ul class="nav navbar-nav">
                        <li class="trans"><a href="#prints">Prints</a></li>
                        <li class="trans"><a href="#paintings">Paintings</a></li>
                        <li class="trans"><a href="#murals">Murals</a></li>
                        <li class="trans"><a href="#cv">CV</a></li>
                        <li class="trans"><a href="#">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
