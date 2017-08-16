<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name');?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/blog_style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheet.css">

    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 

    <?php wp_head();?>

    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_directory').'/img/yoga.jpg');?>) no-repeat center center;
      }
    </style>
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
          <ul class="nav navbar-nav navbar-right">
             <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>