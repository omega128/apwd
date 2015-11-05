<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div id="wrapper">
    <header>
      <h1><?php bloginfo('name'); ?></h1>
      <div id="donate_and_search">
        <form><input /></form>
        <button>Donate</button>
      </div>
    </header>
    <nav>
      <ul>
        <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
      </ul>
    </nav>
