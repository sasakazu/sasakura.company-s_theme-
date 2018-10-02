<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Cover
 */

/**
 * Add theme support for Jetpack functionality.
 */
function cover_jetpack_setup() {

    /**
     * See Jetpack support for more info
     *
     * @link http://jetpack.me/support/infinite-scroll/
     */
    add_theme_support( 'infinite-scroll', array(
      'container' => 'main',
      'render'    => 'cover_infinite_scroll_render',
		  'footer' => false,
	  ) );

    /**
     * See Jetpack support for more info
     *
     * @link http://jetpack.me/support/site-logo/
     */
    add_theme_support( 'site-logo', array() );

    /**
     * See Jetpack support for more info
     *
     * @link http://jetpack.me/support/responsive-videos/
     */
    add_theme_support( 'jetpack-responsive-videos' );

    /**
     * See Jetpack support for more info
     *
     * @link http://jetpack.me/support/featured-content/
     */
    add_theme_support( 'featured-content', array(
		  'filter'		=> 'cover_get_featured_posts',
      'max_posts' => 5,
	  ) );
}
add_action( 'after_setup_theme', 'cover_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function cover_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'summary' );
	}
}

/**
 * Handle `footer_widgets` argument
 *
 * @param bool $has_widgets Indicates if there are widgets.
 * @uses has_nav_menu
 * @filter infinite_scroll_has_footer_widgets
 * @return bool
 */
function cover_infinite_scroll_has_footer_widgets( $has_widgets ) {
    $has_widgets = false;
    if ( has_nav_menu( 'social_footer' ) || is_active_sidebar( 'cover-footer' ) ) {
        $has_widgets = true;
    }

    return $has_widgets;
}
add_filter( 'infinite_scroll_has_footer_widgets', 'cover_infinite_scroll_has_footer_widgets', 10, 1 );

/**
 * Getter function for Featured Content Plugin.
 *
 * @return array An array of WP_Post objects.
 */
function cover_get_featured_posts() {
	return apply_filters( 'cover_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @param integer $minimum Specifies the minimum posts.
 * @return bool Whether there are featured posts.
 */
function cover_has_featured_posts( $minimum = 1 ) {
	if ( is_paged() ) {
    return false;
  }

  $minimum = absint( $minimum );
  $featured_posts = apply_filters( 'cover_get_featured_posts', array() );

  if ( ! is_array( $featured_posts ) ) {
    return false;
  }

  if ( $minimum > count( $featured_posts ) ) {
    return false;
  }

  return true;
}
