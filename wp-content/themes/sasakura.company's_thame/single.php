<?php get_header(); ?>


  <div class="single-wrapper">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <ul>
      <li class="single-date">公開日:<?php the_time('Y/m/d'); ?></li>
      <li class="update-date">更新日:<?php the_modified_date('Y/m/d'); ?></li>
      <li class="singlepage-category"><?php the_category(); ?></li>
    </ul>

      <h2 class="single-title"><?php the_title(); ?></h2>


  <?php if (has_post_thumbnail()) : ?>

    <div class="single-head-img">
      <?php the_post_thumbnail('single_thumbnail'); ?>

      <?php else: ?>

      <a href="<?php the_permalink(); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" /></a>

      <?php endif; ?>
    </div>

    <div class="single-content">
      <?php the_content(); ?>

    </div>


    <?php endwhile; endif; ?>

  </div>


<?php get_footer(); ?>
