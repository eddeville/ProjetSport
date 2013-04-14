<?php
/*
Template Name: Sports - Delete
*/
?>


<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
				wp_delete_post( $_POST['postid'], true );

				wp_safe_redirect( '?page_id=34' );
				exit;
			?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>