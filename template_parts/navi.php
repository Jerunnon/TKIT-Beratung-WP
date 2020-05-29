
  <a href="<?php echo home_url(); ?>">
    <?php the_custom_logo(); ?>
  </a>
  <ul>
      <?php
      $args = array(
        'title_li' => ''
      );
      wp_list_pages($args); ?>
  </ul>
