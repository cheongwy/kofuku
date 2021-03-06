<?php
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <link rel="stylesheet" media="(max-width: 960px)" href="<?php echo get_stylesheet_directory_uri(); ?>/tablet.css" />
  <link rel="stylesheet" media="screen and (max-device-width : 568px)" href="<?php echo get_stylesheet_directory_uri(); ?>/mobile.css" />
  <meta property="og:title" content="Kofuku Corner" />
  <meta property="og:type" content="blog" /> 
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/kitchen_new_a3.jpg" /> 
  <meta property="og:url" content="http://kofuku.sg" />     
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site <?php echo is_front_page()?'home-page':'other-page'; ?>">
    <header id="masthead" class="site-header" role="banner">
      <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </a>

      <div class="aux-menu">
        <a href="testimonials">Testimonials</a><a href="faq">FAQ</a><a href="orders">To Order</a>
      </div>

      <div id="navbar" class="navbar">
        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
          <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
          <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
          <?php get_search_form(); ?>
        </nav><!-- #site-navigation -->
      </div><!-- #navbar -->

    </header><!-- #masthead -->

    <div id="main" class="site-main">
