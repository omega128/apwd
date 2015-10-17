<html>
<head>
<?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div id="wrapper">
<header id="header">
  <h1><?php bloginfo( 'name' ); ?></h1>
  <?php get_bloginfo( 'description', 'display' );?>
</header>
<aside>
  <?php get_sidebar(); ?>
</aside>
<main>

