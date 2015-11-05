<?php
  get_header();
?>
    <main>
      <?php while ( have_posts() ) : the_post(); ?>
        <section class="header">
          <h1><?php the_title(); ?></h1>
        </section>

      <section class="content">
        <?php the_content(); ?>
      </section>

      <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </main>
<?php
  get_footer();
?>
