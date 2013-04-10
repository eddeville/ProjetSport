<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<h1>athlete</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php /*print_r($post);*/ echo get_post_meta($post->ID, 'wpcf-athlete_password', true); ?>

				<?php
				$meta_key_used= get_post_custom_keys($post->ID); 
				foreach ($meta_key_used as $meta_key) {
				    echo $meta_key.' : '.get_post_meta($post->ID, $meta_key, true).'<br />';
				}
				?>

				<a href=""></a>




			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>