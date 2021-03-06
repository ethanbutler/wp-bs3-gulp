<?php get_template_part('partials/header'); ?>
<?php get_template_part('partials/banner'); ?>
<?php get_template_part('partials/hero', 'home'); ?>
<main class="container">
  <div class="row">
    <?php $i = 0; ?>
    <?php while(have_posts()): the_post(); ?>
      <?php if($i > 0 && $i % 3 == 0){ ?>
        </div>
        <div class="row">
      <?php } ?>
      <div class="col-xs-12 col-md-4">
        <div class="item item--home">
          <?php get_template_part('partials/item'); ?>
        </div>
      </div>
    <?php $i++; ?>
    <?php endwhile; ?>
  </div>
</main>
<?php get_template_part('partials/footer', 'home'); ?>
