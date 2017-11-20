<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore_starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore_starter' ); ?></a>

<header id="grve-header" class="grve-fullwidth grve-overlapping grve-responsive-overlapping grve-fixed" data-sticky="shrink" data-sticky-height="60" data-devices-sticky="yes">
  <div class="grve-wrapper clearfix">

    <!-- Header -->
    <div id="grve-main-header" class="grve-header-default grve-dark">
        <div class="grve-wrapper clearfix">
            <div class="grve-container">

                <!-- Logo -->
                <div class="grve-logo grve-position-left">
                    <div class="grve-wrapper">
                        <a href="http://greatives.eu/themes/blade-v2/">
                        <img class="grve-default" src="//greatives.eu/themes/blade-v2/wp-content/uploads/2016/02/logo-default.png" alt="Blade High Quality WP Theme" data-no-retina="" width="136" height="30">
                        <img class="grve-light" src="//greatives.eu/themes/blade-v2/wp-content/uploads/2016/02/logo-light.png" alt="Blade High Quality WP Theme" data-no-retina="" width="136" height="30">
                        <img class="grve-dark" src="//greatives.eu/themes/blade-v2/wp-content/uploads/2016/02/logo-default.png" alt="Blade High Quality WP Theme" data-no-retina="" width="136" height="30">
                        <img class="grve-sticky" src="//greatives.eu/themes/blade-v2/wp-content/uploads/2016/02/logo-light.png" alt="Blade High Quality WP Theme" data-no-retina="" width="136" height="30">
                        </a>
                    </div>
                </div>
                <!-- End Logo -->

                <div class="grve-header-elements-wrapper grve-position-right">

                    <!-- Header Elements -->
                    <div class="grve-header-elements grve-position-left">
                        <div class="grve-wrapper">
                            <ul>
                                <li class="grve-header-element"><a href="#grve-search-modal" class="grve-toggle-modal"><span class="grve-item"><i class="grve-icon-search"></i></span></a></li>
                                <li class="grve-header-element"><a href="#grve-socials-modal" class="grve-toggle-modal"><span class="grve-item"><i class="grve-icon-socials"></i></span></a></li>
                                <li class="grve-header-element">
                                    <a href="#grve-cart-area" class="grve-toggle-hiddenarea">
                                    <span class="grve-item">
                                    <i class="grve-icon-cart"></i>
                                    </span>
                                    </a>
                                    <span class="grve-purchased-items">0</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- End Header Elements -->
                    <div class="grve-header-elements grve-position-left">
                        <div class="grve-wrapper">
                            <ul>
                                <li class="grve-header-element">
                                    <a href="#grve-sidearea" class="grve-sidearea-btn grve-toggle-hiddenarea">
                                    <span class="grve-item"><i class="grve-icon-bullets-v"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Main Menu -->
                <nav id="grve-main-menu" class="grve-horizontal-menu grve-position-right grve-arrow grve-menu-type-classic">
                    <div class="grve-wrapper">
                    </div>
                </nav>
                <!-- End Main Menu -->
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Responsive Header -->
    <div id="grve-responsive-header" class="grve-fixed">
        <div class="grve-wrapper clearfix">
            <div class="grve-container">

                <!-- Logo -->
                <div class="grve-logo grve-position-left">
                    <div class="grve-wrapper">
                        <a href="http://greatives.eu/themes/blade-v2/">
                        <img class="grve-logo-responsive" src="//greatives.eu/themes/blade-v2/wp-content/uploads/2016/02/logo-light.png" alt="Blade High Quality WP Theme" data-no-retina="" width="136" height="30">
                        </a>
                    </div>
                </div>
                <!-- End Logo -->

                <div class="grve-header-elements-wrapper grve-position-right">
                    <!-- Hidden Menu & Side Area Button -->
                    <div class="grve-hidden-menu-btn grve-position-right">
                        <div class="grve-header-element">
                            <a href="#grve-hidden-menu" class="grve-toggle-hiddenarea">
                            <span class="grve-item">
                            <i class="grve-icon-menu"></i>
                            </span>
                            </a>
                        </div>
                    </div>
                    <div class="grve-header-elements grve-position-right">
                        <div class="grve-wrapper">
                            <ul>
                                <li class="grve-header-element">
                                    <a href="http://greatives.eu/themes/blade-v2/cart/">
                                    <span class="grve-item">
                                    <i class="grve-icon-cart"></i>
                                    </span>
                                    </a>
                                    <span class="grve-purchased-items">0</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grve-header-elements grve-position-left">
                        <div class="grve-wrapper">
                            <ul>
                                <li class="grve-header-element">
                                    <a href="#grve-sidearea" class="grve-sidearea-btn grve-toggle-hiddenarea">
                                    <span class="grve-item"><i class="grve-icon-bullets-v"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Hidden Menu & Side Area Button -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Responsive Header -->
  </div>
</header>

	<div id="content" class="site-content">
