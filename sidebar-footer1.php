<?php if (is_active_sidebar('footer1')) : ?>
  <?php dynamic_sidebar('footer1'); ?>
<?php else : ?>
<ul>
  <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png" alt="Staff" width="40"/> <?php wp_loginout(); ?> </li>
  <li><a href="<?php echo get_bloginfo('url');?>/sitemap.xml"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitemap.png" alt="Sitemap" width="40"/> SiteMap</a></li>
  <li><a href="<?php echo get_bloginfo('url');?>/contact/"><img src="
<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png" alt="Contact" width="40"/> Contact</a></li>
</ul>
<?php endif; ?>

