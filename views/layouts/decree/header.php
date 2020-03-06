<?setlocale(LC_ALL, 'ru_RU.UTF-8');?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title><?php echo $title?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="<?php echo $description?>" />
    <meta name="keywords" content="Ключевые слова" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <link rel='stylesheet' id='decree-style-css'  href='views/layouts/decree/style.min.css' type='text/css' media='all' />

    <!--[if lt IE 9]>
    <script type='text/javascript' src='/views/layouts/decree/js/html5.min.js'></script>
    <![endif]-->
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <style type="text/css" media="screen" rel="ct-custom-css">
        .site-title a, .site-description { color: #1a1a1a; }
    </style>
</head>

<body class="home blog layout-one-column no-sidebar full-width excerpt mobile-menu-one news-ticker-above-content active-header-right">
<div id="page" class="hfeed site">
    <header id="masthead" role="banner" style="display: none;">
        <div class="wrapper">
            <div id="site-branding">
                <div id="site-header">
                    <h1 class="site-title"><a href="<?=HOST?>/">sitename</a></h1>
                    <div class="date ctdate"><?=strftime('%A, %d %B %Y', time());?></div>
                </div><!-- #site-header --></div><!-- #site-branding-->
        </div><!-- .wrapper -->
    </header><!-- #masthead -->
    <!-- Disable Header Image -->
    <div id="primary-menu" class="menu-primary">
        <div class="wrapper">
            <button id="menu-toggle-primary" class="menu-toggle">Меню</button>

            <div id="site-header-menu">
                <nav id="site-navigation" class="main-navigation nav-primary search-enabled" role="navigation" aria-label="Primary Menu">
                    <h3 class="screen-reader-text">Главное меню</h3>
                    <ul id="menu-top" class="menu decree-nav-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page home_item_menu"><a href="<?=HOST?>/">Главная</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page home_item_menu"><a href="<?=HOST?>/page.php">Домашнее задание 1</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page home_item_menu"><a href="<?=HOST?>/homework2.php">Домашнее задание 2</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page home_item_menu"><a href="<?=HOST?>/news.php">Новости</a></li>
                    </ul>
                </nav><!-- .nav-primary -->
            </div><!-- #site-header-menu -->
        </div><!-- .wrapper -->
    </div><!-- #primary-menu-wrapper -->
    <div id="content" class="site-content">
        <div class="wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">