<?php
/*
Template Name: Sports - Liste
*/
?>


<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<h1>My Sports</h1>

			<a href="../create-sport"><input type="submit" value="Add New Sport" /></a>
			<br>
			<br>

			<?php 

				wp_get_current_user();
				
				$loop = new WP_Query( array( 'post_type' => 'sport', 'posts_per_page' => 10 ) );
				while ( $loop->have_posts() ) : $loop->the_post();
					$postAuthor = get_the_author();
					if($postAuthor == $current_user->user_login || $current_user->user_login == 'admin'){
						echo '<div>';
						echo 'Sport type: '.get_post_meta($post->ID, 'wpcf-sport', true);
						echo '<br>';
						echo get_post_meta($post->ID, 'wpcf-frequency', true).' training(s) per week';
						echo '<br>';
						echo 'Location: '.get_post_meta($post->ID, 'wpcf-location', true);
						echo '<br>';
						echo '<input type="submit" id="searchsubmit" value="Edit">';
						echo '<input type="submit" id="searchsubmit" value="Delete">';
						echo '</div>';
						echo '<br>';						
						echo '<br>';
					}
				endwhile;
			?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

