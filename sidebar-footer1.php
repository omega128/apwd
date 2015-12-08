<?php if (is_active_sidebar('footer1')) : ?>
  <?php dynamic_sidebar('footer1'); ?>
<?php else : ?>
<ul>
  <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png" alt="Staff" width="40"/> <?php wp_loginout(); ?> </li>
  <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitemap.png" alt="Sitemap" width="40"/> SiteMap</a></li>
  <li><a href="http://ec2-52-26-188-113.us-west-2.compute.amazonaws.com/apwd/contact/"><img src="
<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png" alt="Contact" width="40"/> Contact</a></li>
</ul>
<?php endif; ?>

