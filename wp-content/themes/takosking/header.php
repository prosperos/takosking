<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package takosking
 */
$header_other_links   = cs_get_option('header_other_links');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v3.3&appId=249268422689198&autoLogAppEvents=1"></script>
</head>
<body <?php body_class(); ?>>
<!--<canvas id="myCanvas" style="width:100%; height:100%!important; position: absolute"></canvas>-->
<div id="page-loader" class="preloader">
    <div class="loader"></div>
</div>
<div id="page" class="site main">

    <header id="masthead" class="site-header">

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <input id="burger" type="checkbox" />
                    <label for="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    <nav id="site-navigation" class="main-navigation ">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php takosking_logo(); ?></a>
                        <?php takosking_custom_menu(); ?>
                    </nav><!-- #site-navigation -->
                    <div class="header-switcher">
                        <!--<ul><?php /*pll_the_languages(array('show_flags'=>1,'show_names'=>0,'dropdown'=>1)); */?></ul>-->
                        <?php echo example_lang_switcher(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <div class="wrapper" id="fullpage">