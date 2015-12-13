<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

<!-- Smartmenu -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.smartmenus.js" type="text/javascript"></script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/sm-core-css.css" rel='stylesheet' type='text/css' />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/sm-simple.css" rel='stylesheet' type='text/css' />

<!-- Accessibility options -->
<script type="text/javascript">
function enlarge_font (selector) {
        curSize= parseInt($(selector).css('font-size')) + 2;
        $(selector).css('font-size', curSize);
}

function shrink_font (selector) {
        curSize= parseInt($(selector).css('font-size')) - 2;
        $(selector).css('font-size', curSize);
}

$(document).ready(function() {

    /* Set up the Smartmenu */
    $("#main-menu").smartmenus();

    /* Connect accessibility panel */
    $('#inc_font').click(function(){
        enlarge_font ('p');
        enlarge_font ('h1');
        enlarge_font ('h2');
        enlarge_font ('h3');
    });
    $('#dec_font').click(function(){   
        shrink_font ('p');
        shrink_font ('h1');
        shrink_font ('h2');
        shrink_font ('h3');
    });
    $('#light_theme').click(function(){
        $('body').css({'background': 'white',
                       'color': 'black'});
        $('footer').css({'background': '#ebebeb',
                       'color': 'black'});
        $('footer a').css({'color': 'black'});
    });
    $('#dark_theme').click(function(){
        $('body').css({'background': 'black',
                       'color': 'white'});
        $('footer').css({'background': 'black',
                       'color': 'white'});
        $('footer a').css({'color': 'white'});
    });
    $('#sans_font').click(function(){
        $('body').css({'font-family': 'Roboto'});
    });
    $('#serif_font').click(function(){
        $('body').css({'font-family': 'serif'});
    });
});
</script>
</head>
<body>
  <div id="wrapper">
    <header>
      <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apwd_logo.png" alt="Alliance of People with DisAbilities"><span>Alliance of People with DisAbilities</span></a>
      <div id="donate_and_search"><?php get_sidebar ('header'); ?></div>
    </header>
    <nav>
      <?php wp_nav_menu( array('menu_id' => 'main-menu',
                               'menu_class' => 'sm sm-simple') ); ?>
    </nav>
