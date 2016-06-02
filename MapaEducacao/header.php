<!DOCTYPE html> 

<html <?php language_attributes()?> >

<head>

  <meta charset="<?php bloginfo('charset') ?>" />

  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

  <title><?php bloginfo('name'); ?></title>

  <link rel="icon" href="http://mapaeducacao.com/newproject/wp-content/uploads/2016/05/mapaicon.ico" sizes="16x16" type="image/png">

  <!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <?php wp_head(); ?>

</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse" role="button">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"></a>
          </div>
          <?php
              wp_nav_menu( array(

                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );

          ?>
        </div>
      </nav>
  </header>