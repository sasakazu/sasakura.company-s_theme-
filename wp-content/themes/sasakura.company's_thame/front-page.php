

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
        <?php the_post_thumbnail(); ?>
      </a>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_category(); ?></p>
    </li>

  </ul>

  <?php endwhile; endif; ?>

    </div>

  </div>


</div>





<?php get_footer(); ?>
