<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!--<?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "css/bootstrap.min.css") ?>-->
  <?php //versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/main.css") ?>

  <!-- Wordpress Templates require a style.css in theme root directory -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "style.css") ?>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php //versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/bootstrap/css/custom.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/Hero-Clean-Reverse-images.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/Hero-Features-icons.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <nav id="mainNav" class="navbar navbar-light navbar-expand-lg bg-tertiary text-uppercase">
    <div class="container">
      <a class="navbar-brand" href="#page-top">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'navbar-nav mr-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
          ) ); ?>
      </div>
    </div>
  </nav>