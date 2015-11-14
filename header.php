<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div id="wrapper">
    <header>
      <a href="<?php bloginfo('url'); ?>"><img src="http://placehold.it/250x60" alt="Alliance of People with DisAbilities"></a>
      <div id="donate_and_search"><form><input /><img src="http://placehold.it/32x32" alt="Donate!"/></form></div>
    </header>
    <nav>
      <label for="show-menu" class="show-menu">Show Menu</label>
      <input type="checkbox" id="show-menu" role="button">
      <?php wp_nav_menu( array('menu_id' => 'main_menu') ); ?>
    </nav>
