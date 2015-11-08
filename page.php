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
        if (get_pages('child_of=' . $post->ID)) {
          // if this page has subpages, display a sidebar with a list of them
          echo '<aside id="left_sidebar"><ul>';
          wp_list_pages('title_li=&child_of='.$post->ID);
          echo '</ul></aside>';
          echo '<section class="right_content">';
        }
        else {
          // this page does not have subpages, use a single section with no sidebar
          echo '<section class="content">';
        }
      ?>
      <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </main>
<?php
  get_footer();
?>
