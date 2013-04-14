<?php
/*
Template Name: Sports - Create
*/
?>

<?php
	if(isset($_POST['form_loc'])){

		wp_get_current_user();

		$post = array(
			'post_title'	=> $current_user->user_login.' - '.$_POST['form_sport'],
			'post_author'   => $current_user->ID,
			'post_type'     => 'sport'
		);

		$postId = wp_insert_post( $post, $wp_error );

		add_post_meta( $postId, 'wpcf-sport', $_POST['form_sport'] );
		add_post_meta( $postId, 'wpcf-frequency', $_POST['form_freq'] );
		add_post_meta( $postId, 'wpcf-location', $_POST['form_loc'] );

		wp_publish_post( $postId );

		wp_redirect( home_url().'/sports' );
		exit;
	}

				
?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<form action="" method="post" name="myForm">
			Sport: 
			<input type="radio" name="form_sport" value="running" checked />Running
			<input type="radio" name="form_sport" value="gym" />Gym
			<br />
			<br />
			Times per week:
			<input type="radio" name="form_freq" value="1" checked />1
			<input type="radio" name="form_freq" value="2" />2
			<input type="radio" name="form_freq" value="3" />3
			<input type="radio" name="form_freq" value="4" />4
			<input type="radio" name="form_freq" value="5" />5
			<input type="radio" name="form_freq" value="6" />6
			<input type="radio" name="form_freq" value="7" />7
			<br />
			<br />
			Location:<input type="text" name="form_loc" />
			<br />
			<br />
			<input type="submit" value="Submit" /></form>

			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>