<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category-wordpress.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category-wpbeginner.css" type="text/css" />

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Kosugi|Kosugi+Maru|M+PLUS+1p|M+PLUS+Rounded+1c|Noto+Sans+JP|Noto+Serif+JP|Sawarabi+Gothic|Sawarabi+Mincho" rel="stylesheet">

  <title><?php bloginfo( $name ); ?></title>






	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115807640-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115807640-1');
</script>




<!-- 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5047644305890156",
    enable_page_level_ads: true
  });
</script> -->



<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
<!-- test -->
<!-- <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5047644305890156"
     data-ad-slot="7580022333"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> -->


<!-- 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-7n+eu-11-1n+75"
     data-ad-client="ca-pub-5047644305890156"
     data-ad-slot="4407914144"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->


<!-- 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-5047644305890156"
     data-ad-slot="3744186277"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->



  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

  <div class="nav-menu">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo"><?php bloginfo( $name ); ?></a>

    <!-- <ul> -->
      <!-- <li> -->
        <a href="#"><?php wp_nav_menu(); ?></a>
      <!-- </li> -->
      <!-- <li><a href="#">menu2</a></li>
      <li><a href="#">menu3</a></li> -->
    <!-- </ul> -->



  </div>
