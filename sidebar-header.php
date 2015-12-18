<?php if (is_active_sidebar('header')) : ?>
  <ul><?php dynamic_sidebar('header'); ?></ul>
<?php else : ?>
  <form><input /><a href="javascript:;" class="blockbutton">Donate</a></form>
<?php endif; ?>
