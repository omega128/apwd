<?php
  get_header();
?>
    <main>
      <?php while ( have_posts() ) : the_post(); ?>
        <section class="header">
          <h1><?php the_title(); ?></h1>
        </section>

      <div id="breadcrumbs">
        <?php if ( function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
  }
    ?></div>

      <section class="content">
        <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </main>
<?php
  get_footer();
?>
