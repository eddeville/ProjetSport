<?php
/*
Template Name: Profile
*/
?>


<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
				wp_get_current_user();
				
				$loop = new WP_Query( array( 'post_type' => 'athlete', 'posts_per_page' => 10 ) );
				while ( $loop->have_posts() ) : $loop->the_post();
					if(the_author() == $current_user->user_login){

				  		the_title();
						echo '<div>';
						the_content();
						echo '</div>';
						
					}
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

