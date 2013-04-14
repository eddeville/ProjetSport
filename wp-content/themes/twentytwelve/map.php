<?php
/*
Template Name: Business - Map
*/
?>


<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
				function getLatLong($address){
				    if (!is_string($address))die("All Addresses must be passed as a string");
				    $_url = sprintf('http://maps.google.com/maps?output=js&q=%s',rawurlencode($address));
				    $_result = false;
				    if($_result = file_get_contents($_url)) {
				        if(strpos($_result,'errortips') > 1 || strpos($_result,'Did you mean:') !== false) return false;
				        preg_match('!center:\s*{lat:\s*(-?\d+\.\d+),lng:\s*(-?\d+\.\d+)}!U', $_result, $_match);
				        $_coords['lat'] = $_match[1];
				        $_coords['long'] = $_match[2];
				    }
				    return $_coords;
				}

				// Getting addresses
				$myrows = $wpdb->get_results("
					SELECT p.post_author as userid,
						m.meta_value as location
					FROM wp_posts p
						left join wp_postmeta m on (m.post_id=p.ID)
					WHERE p.post_type = 'sport'
						and p.post_status = 'publish'
						and m.meta_key = 'wpcf-location'
				");
				//print_r($myrows);
			?>


			<?php
				foreach ($myrows as $row) {
					echo $row->location.' : '.getLatLong($row->location)['lat'].'<br />';
				}
			?>

		    <script type="text/javascript"
		      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXuVUk_73zef9yPeG2FUf05lyY5mvmRD8&sensor=false">
		    </script>
		    <script type="text/javascript">
		      function initialize() {
		        var mapOptions = {
		          center: new google.maps.LatLng(45.495278, -73.589172),
		          zoom: 11,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        };
		        var map = new google.maps.Map(document.getElementById("map-canvas"),
		            mapOptions);

				var marker = new google.maps.Marker({
				    position: new google.maps.LatLng(45.485278, -73.589172),
				    title:"Hello World!"
				});
				marker.setMap(map);
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
		    </script>
		    <div id="map-canvas" style="height: 400px; width:960px;" />

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>