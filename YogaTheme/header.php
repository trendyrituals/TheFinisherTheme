<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name');?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/blog_style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheet.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">


    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 
    

    <?php wp_head();?>
  </head>
  <body>
   
     <nav class="navbar navbar-static-top navbar-inverse">
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php bloginfo('name');?>
          </a>
        </div>
          <ul class="nav navbar-nav navbar-left">
             <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>