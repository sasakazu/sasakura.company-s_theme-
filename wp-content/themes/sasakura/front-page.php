<?php get_header(); ?>

<div class="google-ad">


		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adse -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-5047644305890156"
     data-ad-slot="9804120178"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


</div>

<?php get_template_part( 'top3'); ?>


<div class="post-wrapper">

  <h2 class="post-title"><i class="far fa-newspaper"></i>新着</h2>

  <div class="container">

    <div class="post-colum">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <ul class="new-post">
    <li>
    <?php if (has_post_thumbnail()) : ?>

      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('newpost'); ?></a>

    <?php else: ?>

    <a href="<?php the_permalink(); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" /></a>

    <?php endif; ?>


      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_category(); ?></p>
    </li>

  </ul>

  <?php endwhile; endif; ?>

    </div>

  </div>

<div class="page-nate-wrapper">

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


</div>





<?php get_footer(); ?>
