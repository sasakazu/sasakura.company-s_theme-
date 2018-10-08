

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


  <?php
      $big = 9999999999;
      $arg = array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'current' => max( 1, get_query_var('paged') ),
          'total'   => $wp_query->max_num_pages
      );
      echo paginate_links($arg);
  ?>

</div>





<?php get_footer(); ?>
