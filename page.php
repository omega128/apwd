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

      <?php
        $subpage_count = count(get_pages('child_of=' . $post->ID));
        echo "<p>Page count: $subpage_count</p>";
      ?>
      <aside id="left_sidebar">
        <ul>
          <?php wp_list_pages('title_li=&child_of='.$post->ID); ?>
        </ul>
      </aside>
      <section class="content">
        <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </main>
<?php
  get_footer();
?>
