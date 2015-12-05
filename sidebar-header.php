<?php if (is_active_sidebar('header')) : ?>
  <?php dynamic_sidebar('header'); ?>
<?php else : ?>
  <form><input /><a href="javascript:;" class="blockbutton">Donate</a></form>
<?php endif; ?>
