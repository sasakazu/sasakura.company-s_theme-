

<?php get_header(); ?>


<?php get_template_part( 'top3'); ?>


<div class="post-wrapper">

  <h2>NEW POST</h2>

  <div class="container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="new-post">
    <h3><?php the_title(); ?></h3>

    <ul>
      <li>date</li>
      <li><a href="">category</a></li>
    </ul>

    <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">

    <p><?php the_excerpt(); ?></p>

    <a href="<?php the_permalink(); ?>">READ MORE</a>

  </div>


  <!-- <?php get_sidebar(); ?> -->

  <?php endwhile; endif; ?>

  </div>


</div>





<?php get_footer(); ?>
