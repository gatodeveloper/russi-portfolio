<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png" />
    <title><?php wp_title(''); ?></title>
    <style type="text/css">
      @import url(<?php bloginfo("stylesheet_url");?>);
    </style>
    <link href="<?php echo get_template_directory_uri();?>/content/bower_components/bxslider-4/dist/jquery.bxslider.min.css" rel="stylesheet" />
    <script src="<?php echo get_template_directory_uri();?>/content/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/content/bower_components/bxslider-4/dist/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    <?php add_theme_support("automatic-feed-links"); ?>
    <?php wp_head();?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85609322-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>
  <header class="main-header">
    <div class="gs">
      <div class="layout-30">
        <a href="<?php echo bloginfo('home')?>" class="logo"></a>
      </div>
      <div class="layout-70">
        <nav>
          <?php
            $nav = array(
              'theme_location'  => 'header-menu',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'main-menu',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s',
              'depth'           => 0,
              'walker'          => ''
            );
            wp_nav_menu($nav);
          ?>
        </nav>
      </div>
    </div>
  </header>
