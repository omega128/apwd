<?php
  get_header();
?>
    <main>
      <section class="header">
        <h1><?php wp_title(''); ?></h1>
      </section>
      <?php while ( have_posts() ) : the_post(); ?>
      <section class="content">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <h3><?php the_time('F jS, Y') ?></h3>
        <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </main>
<?php
  get_footer();
?>
