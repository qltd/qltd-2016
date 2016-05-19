<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package _q
    */

    ?><!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <script src="https://use.typekit.net/ilp1uhx.js"></script>
            <script>try{Typekit.load({ async: true });}catch(e){}</script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>
            <div id="perspective" class="perspective effect-airbnb">
            <div class="container">
                <div class="wrapper">

                    <header class="site-header">
                        <button class="nav-toggle"><span class="bar"></span><span class="bar"></span><span class="bar"></span></button>

                        <a href="/" title="home" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/qltd-logo.svg" alt="Q TLD" /></a>
                    </header><!-- #masthead -->

                    <div id="content" class="site-content">
