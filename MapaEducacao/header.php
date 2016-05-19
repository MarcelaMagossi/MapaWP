<!DOCTYPE html> 
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <link rel="icon" href="http://mapaeducacao.com/newproject/wp-content/uploads/2016/05/mapaicon.ico" sizes="16x16" type="image/png">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700|Oswald' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script("jquery"); ?>
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