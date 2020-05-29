<?php get_header(); ?>

<!-- ### WELCOME BEREICH ### -->

<section id="welcome-intro">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <?php get_template_part('template_parts/content'); ?>
        <?php endwhile; else : ?>

          <?php get_template_part('template_parts/content', 'error'); ?>

        <?php endif; ?>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
