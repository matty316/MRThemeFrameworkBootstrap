<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <nav>
      <div class="container">

        <a href="<?php bloginfo( 'url' ); ?>"><img class="logo" src="<?php header_image(); ?>" alt="Matt Reed Logo" /></a>



        <?php

        $args = array(
          'menu' => 'header-menu',
          'container' => 'false',
          'menu_class' => 'list-inline pull-right'
        );

        wp_nav_menu( $args );

        ?>
      </div>
    </nav>
