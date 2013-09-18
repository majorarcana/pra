<?php
/**
 * Header template
 *
 * Displays all of the <head> section and everything up till <div id="container">
 *
 * @package PRA
 * @since 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>Prison Radio Association <?php wp_title( '|', true, 'left' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body id="homepage">
        <nav id="skip-links">
            <ul>
                <li><a href="">Skip to navigation</a></li>
                <li><a href="">Skip to main content</a></li>
            </ul>
        </nav>
        <header id="page-header" role="banner">
            <div id="banner-elements">
                <!-- if homepage -->
                <h1>Prison Radio Association</h1>
                <!-- else <div id="pra-logo"></div>-->
                <div id="soundcloud-player">
                    <iframe width="228" height="167"  src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F12074641"></iframe>
                </div> 
            </div>
            <nav role="navigation" id="main-nav" class="down">
                <ul>
                    <li><a  title="The latest news from the Prison Radio Association" class="light-blue" href="">News</a></li>
                    <li><a title="The story of the Prison Radio association" class="green" href="">About</a></li>
                    <li><a title="The world's first national radio station fro prisoners" class="yellow" href="">National Prison Radio</a></li>
                    <li><a title="Powerful targeted audio with a social impact" class="dark-blue" href="">PRA Productions</a></li>
                    <li><a title="The global impact of prison radio" class="dark-red" href="">Prison Radio International</a></li>
                    <li><a title="Online support for prison radio practitioners" class="brown" href="">Work in Prison Radio?</a></li>
                    <li><a title="Become a friend of the PRA" class="pink" href="">Support us</a></li>
                    <li><a title="Everything you need to know about the Prison Radio Association" class="bright-red" href="">FAQ</a></li>
                    <li><a title="Get in touch with the Prison Radio Association" class="purple" href="">Contact</a></li>
                </ul>
            </nav>
        </header>