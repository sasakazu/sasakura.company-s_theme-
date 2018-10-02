<?php
/**
 * YARPP Template: Cover Bullet List
 *
 * Description: Related posts template built for the Cover theme. Displays related posts as a bullet point list.
 *
 * @package Cover
 */

?>

<h2 class="yarpp-header">Related</h2>

<div class="yarpp-container">
	<?php if ( have_posts() ) :
		$posts_array = array();
		while ( have_posts() ) : the_post();
			$posts_array[] = '<li><a href="' . get_permalink() . '" rel="bookmark">' . get_the_title() . '</a></li>';
		endwhile;

	echo '<ul>';
	echo implode( "\n", $posts_array ); // Print out a list of the related items.
	echo '</ul>';

	else : ?>

	<p>No related posts.</p>
	<?php endif; ?>
</div>
