<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div id="wrapper">
    <header>
      <a href="<?php bloginfo('url'); ?>"><img src="http://placehold.it/250x60" alt="Alliance of People with DisAbilities"></a>
      <div id="donate_and_search"><form><input /></form><button>Donate</button></div>
    </header>
    <nav>
<?php

wp_nav_menu( array('menu_id' => 'main_menu') );
?>
        <!-- wp_list_pages('sort_column=menu_order&depth=1&title_li='); -->
    </nav>
