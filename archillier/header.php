<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php the_title(' '); ?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/themes/archillier/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('url'); ?>/wp-content/themes/archillier/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />        
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/archillier/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <? body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav id="mobile-nav">
            <?php wp_list_pages('sort_column=menu_order&exclude=210&title_li='); ?>
            <li><a href="#">中文</a></li>
        </nav>
        <div class="content-wrapper <?php if ( in_category( 'projects' ) ) : ?>projects<?php elseif ( in_category( 'news' ) ) : ?>news<?php endif; ?>">
            
            <header id="header">
                <a href="<?php bloginfo('url'); ?>">
                    <div id="logo"></div>
                </a>
                <nav id="main">
                    <ul>
                        <?php wp_list_pages('sort_column=menu_order&exclude=210&title_li='); ?>
                        <li><a href="#">中文</a></li>
                    </ul>
                    <button id="mobile-nav-trigger"></button>
                </nav>
                <div class="clear"></div>
            </header>