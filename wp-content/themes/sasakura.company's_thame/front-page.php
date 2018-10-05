

<?php get_header(); ?>


<?php get_template_part( 'top3'); ?>


<div class="post-wrapper">

  <h2 class="post-title"><i class="far fa-newspaper"></i>新着一覧</h2>

  <div class="container">

    <div class="post-colum">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <ul class="new-post">
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
      </a>
      <p><?php the_time('Y/m/d'); ?></p>
      <h3><?php the_title(); ?></h3>
      <p><?php the_excerpt(); ?></p>

      <a href="<?php the_permalink(); ?>">READ MORE</a>

    </li>

  </ul>

  <?php endwhile; endif; ?>

    </div>

  </div>


</div>





<?php get_footer(); ?>
