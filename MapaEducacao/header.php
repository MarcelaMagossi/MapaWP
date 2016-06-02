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

  </header>