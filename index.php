<?php
  get_header();
?>
    <main>
      <section class="header">
        <h2>Index</h2>
      </section>

      <?php while ( have_posts() ) : the_post(); ?>
      <div id="breadcrumbs">
        <?php if ( function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
  }
    ?></div>

      <section class="content">
        <h2><?php the_title(); ?></h2>
        <h3><?php the_time('F jS, Y') ?></h3>
        <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </main>
<?php
  get_footer();
?>
