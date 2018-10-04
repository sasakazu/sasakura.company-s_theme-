

<?php get_header(); ?>


<?php get_template_part( 'top3'); ?>


<div class="post-wrapper">

  <h2 class="post-title"><i class="far fa-newspaper"></i>NEW</h2>

  <div class="container">

    <div class="post-colum">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <ul class="new-post">
    <li>

      <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
      <h3><?php the_title(); ?></h3>

      <ul>
        <li>date</li>
        <li><a href="">category</a></li>
      </ul>


      <p><?php the_excerpt(); ?></p>

      <a href="<?php the_permalink(); ?>">READ MORE</a>

    </li>

  </ul>

  <?php endwhile; endif; ?>

    </div>

  </div>


</div>





<?php get_footer(); ?>
