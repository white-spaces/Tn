<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="Birkir Árnason @ White-Spaces">
  <title><? bloginfo('name'); ?></title>
  <script type="text/javascript">
  var appInsights=window.appInsights||function(config){
    function i(config){t[config]=function(){var i=arguments;t.queue.push(function(){t[config].apply(t,i)})}}var t={config:config},u=document,e=window,o="script",s="AuthenticatedUserContext",h="start",c="stop",l="Track",a=l+"Event",v=l+"Page",y=u.createElement(o),r,f;y.src=config.url||"https://az416426.vo.msecnd.net/scripts/a/ai.0.js";u.getElementsByTagName(o)[0].parentNode.appendChild(y);try{t.cookie=u.cookie}catch(p){}for(t.queue=[],t.version="1.0",r=["Event","Exception","Metric","PageView","Trace","Dependency"];r.length;)i("track"+r.pop());return i("set"+s),i("clear"+s),i(h+a),i(c+a),i(h+v),i(c+v),i("flush"),config.disableExceptionTracking||(r="onerror",i("_"+r),f=e[r],e[r]=function(config,i,u,e,o){var s=f&&f(config,i,u,e,o);return s!==!0&&t["_"+r](config,i,u,e,o),s}),t
    }({
        instrumentationKey:"433737b9-83d0-4450-a7f3-e1fc67eda158"
    });

    window.appInsights=appInsights;
    appInsights.trackPageView();
</script>
<script type="text/javascript">
  

</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Roboto" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    .about-us-card-img-1 {
      background: url(<?php echo get_theme_mod('card-1-profile', get_bloginfo('template_url').'/img/about/first.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-img-2 {
      background: url(<?php echo get_theme_mod('card-2-profile', get_bloginfo('template_url').'/img/about/second.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-img-3 {
      background: url(<?php echo get_theme_mod('card-3-profile', get_bloginfo('template_url').'/img/about/third.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-img-4 {
      background: url(<?php echo get_theme_mod('card-4-profile', get_bloginfo('template_url').'/img/about/fourth.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }

    .about-us-card-img-5 {
      background: url(<?php echo get_theme_mod('card-4-profile', get_bloginfo('template_url').'/img/about/fifth.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }

    .about-us-card-img-6 {
      background: url(<?php echo get_theme_mod('card-4-profile', get_bloginfo('template_url').'/img/about/sixth.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }

    .about-us-card-top-1 {
      background: url(<?php echo get_theme_mod('card-1-back', get_bloginfo('template_url').'/img/about/first-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-top-2 {
      background: url(<?php echo get_theme_mod('card-2-back', get_bloginfo('template_url').'/img/about/second-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-top-3 {
      background: url(<?php echo get_theme_mod('card-3-back', get_bloginfo('template_url').'/img/about/third-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-top-4 {
      background: url(<?php echo get_theme_mod('card-4-back', get_bloginfo('template_url').'/img/about/fourth-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-top-5 {
      background: url(<?php echo get_theme_mod('card-4-back', get_bloginfo('template_url').'/img/about/fifth-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }
    .about-us-card-top-6 {
      background: url(<?php echo get_theme_mod('card-4-back', get_bloginfo('template_url').'/img/about/sixth-back.jpg'); ?>) no-repeat center center;
      background-size: cover;
    }


  </style>
</head>
<body class="bg-light">
  <div class="container-fluid no-margin no-padding">

  <nav class="navbar navbar-toggleable-md navbar-light bg-faded mobile-nav" id="top">

    <a class="navbar-brand" href="#">
      <img class="logo-img" src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mobile-drop">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu')); ?>
    </ul>
  </div>



</nav>

<nav class="navbar navbar-light bg-faded primary-nav" id="top">
  <a class="navbar-brand" href="#">
    <img class="logo-img" src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="">
  </a>
  <ul class="nav navbar primary-navbar-navlinks">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>
  
  </ul>
</nav>
