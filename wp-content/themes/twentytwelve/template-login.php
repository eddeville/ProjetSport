<?php

/*
Template Name: Login Athlete
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<h1>athlete</h1>

			<?php
				if($_POST['submit']){

				}
			?>

			<form method="post">
				Email: <input type="email" name="email" /><br />
				Password: <input type="text" name="passw" />
				<input type="submit" value="Ok" name="submit" />
			</form>
			<?php wp_login_form(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>