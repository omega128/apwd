<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div id="wrapper">
    <header>
      <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apwd_logo.png" alt="Alliance of People with DisAbilities"><span>Alliance of People with DisAbilities</span></a>
      <div id="donate_and_search"><?php get_sidebar ('header'); ?></div>
    </header>
    <nav>
      <label for="show-menu" class="show-menu">Show Menu</label>
      <input type="checkbox" id="show-menu" role="button">
      <?php wp_nav_menu( array('menu_id' => 'main_menu') ); ?>
    </nav>
