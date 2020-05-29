<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale= 1.0" >
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>

    <nav id="header-nav">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php get_template_part('template_parts/navi'); ?>
          </div>
        </div>
      </div>

    </nav>

    <?php if(get_header_image() ) : ?>
      <div class="row">
        <div class="col-lg-12">
          <div id="site-header">
            <img src="<?php header_image(); ?>">
          </div>
        </div>
      </div>
  <?php endif; ?>

  <nav id="header-nav-unten"></nav>


  </header>
