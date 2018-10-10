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

  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

  <div class="nav-menu">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo"><?php bloginfo( $name ); ?></a>

    <!-- <ul> -->
      <li><a href="#"><?php wp_nav_menu(); ?></a></li>
      <!-- <li><a href="#">menu2</a></li>
      <li><a href="#">menu3</a></li> -->
    <!-- </ul> -->



  </div>
