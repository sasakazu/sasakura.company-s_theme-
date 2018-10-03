

<?php get_header(); ?>



<div class="more-wrapper">

  <div class="container">

    <ul class="more-colum">

      <li class="more-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
        <h2><a href="" id="more-title">Wordpressオリジナルテーマの作り方</a></h2>
        <a href="" class="more-btn">Read More</a>
      </li>

      <li class="more-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
        <h2><a href="" id="more-title">iOSアプリの作り方</a></h2>
        <a href="" class="more-btn">Read More</a>
      </li>

      <li class="more-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
        <h2><a href="" id="more-title">SEOを極める</a></h2>
        <a href="" class="more-btn">Read More</a>
      </li>

      <li class="more-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
        <h2><a href="" id="more-title">ポートフォリオ</a></h2>
        <a href="" class="more-btn">Read More</a>

      </li>

    </ul>


  </div>

</div>


<div class="post-wrapper">

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

    <a href="">READ MORE</a>

  </div>

  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

  </div>


</div>





<?php get_footer(); ?>
