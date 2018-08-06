<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?>
      <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bulma.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar is-transparent" style="border-bottom: 7px solid black">
      <div class="navbar-brand">
        <div class="navbar-item">
          <div class="noblack">
            <a class="navbar-item" style="position: relative; top: -2px" href="/"> <img src="<?php bloginfo('template_url');?>/img/effimera.png" alt="Fish and Fly Orobie" ></a>
          </div>
          </div>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
    <span></span>
    <span></span>
    <span></span>
  </div>
          </div>

      <div class="navbar-menu">
        <div class="navbar-start">
          <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
            <a class="navbar-item" href="/chi-siamo">
              il club
            </a>
          </div>
          <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
            <a class="navbar-item" href="/articoli">
              news
            </a>
        </div>
        <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
          <a class="navbar-item" href="/gallery">
            gallery
          </a>
          </div>
            <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
              <a class="navbar-item" href="/contattaci">
                contatti
              </a>
              </div>
              <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
                <a class="navbar-item" href="/meteo">
                  meteo
                </a>
                </div>
                        </div>
        <div class="navbar-end">
          <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
            <a class="navbar-item" href="/">home</a>
          </div>
          <div class="navbar-item has-text-weight-bold is-uppercase is-size-5">
            <a class="navbar-item" href="wp-login.php">login</a>
          </div>
        </div>
                </div>

    </nav>
