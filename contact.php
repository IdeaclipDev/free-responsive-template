<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ideaclip - Contact : Free Responsive HTML 5 Template</title>
	<meta name="description" content="A free responsive HTML 5 template with Skeleton.">
	<?php include('inc/doc.inc.php'); ?>

</head>
<body><div class="animsition">



	<!-- Header
	================================================== -->
	<?php include('inc/header.inc.php'); ?>
	
	<!-- Content
	================================================== -->
	<div id="map" style="background: #15111c;">
	</div><!-- Carte -->
	
	<div class="container">
	
		<div class="sixteen columns">
			<h2 class="hay colorgrey marginone-bot pull-left">Contact</h2>
			<hr />	
		</div>
		
		<div class="one-third column">
			<h3 class="blueh geo paddingone-bot marginone-bot">Une question ?</h3>
			<p class="colorgrey">Pour toute demande, n'hésitez pas à me contacter, je serais ravi de discuter avec vous.</p>
			
			<h3 class="blueh geo paddingone-bot marginone-bot">Mes coordonnées</h3>
			<p class="colorgrey">
				<!-- <span class="phone"><a href="tel:+33">33</a></span><br /> -->
				<span class="mail"><a href="mailto:ideaclip.fb@gmail.com">votre.adresse.email@domaine.com</a></span><br />
				<span class="adresse">Adresse</span>
			</p>
		</div><!-- coordonnées -->
		
		<section class="two-thirds column">
			<form id="contact_form" class="contact_form" action="envoyer.php" method="post" name="contact_form">	
				<ul>
					<li class="marginone-bot">
						<label for="name" class="geo colorgrey marginone-bot">Prénom Nom*</label>
						<input type="text" name="name" id="name" required class="required" >
					</li>
					<li class="marginone-bot">
						<label for="email" class="geo colorgrey marginone-bot">Email*</label>
						<input type="email" name="email" id="email" required class="required email">
					</li>
					<li class="marginone-bot">
						<label for="tel" class="geo colorgrey marginone-bot">Téléphone</label>
						<input type="text" name="tel" id="tel" class="number">
					</li>
					<li class="marginone-bot">
						<label for="message" class="geo colorgrey marginone-bot">Message*</label>
						<textarea name="message" id="message" cols="100" rows="8" required  class="required" ></textarea>
					</li>
					<li class="centered">
						<button type="submit" id="submit" name="submit" class="sendcontact">Envoyer</button>
					</li>	
				</ul>			
			</form>
		</section><!-- form -->

		<div class="bothr"></div>

	</div><!-- container -->
	
	<!-- Footer
	================================================== -->
	<?php include('inc/footer.inc.php'); ?>
</div>
<!-- End Document
================================================== -->
	<?php include('inc/script.inc.php'); ?>

<!-- Google Map
	 You need to include this script on any page that has a Google Map.
	 When using Google Maps on your own site you MUST signup for your own API key at:
	 https://developers.google.com/maps/documentation/javascript/tutorial#api_key
	 After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

<script type="text/javascript">
	function initialize() {
		// Basic options for a simple Google Map
		var myLatlng = new google.maps.LatLng(48.856614, 2.3522219000000177); // Paris
		
		var image = {
			url: 'images/logoMap.svg',
			size: new google.maps.Size(14, 16),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(7, 8),
			scaledSize: new google.maps.Size(14, 16)
		};
		
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 12,

			// The latitude and longitude to center the map (always required)
			center: myLatlng,

			// How you would like to style the map. 
			disableDefaultUI: true,
			
			// Disable Scroll Wheel zoom
			scrollwheel: false,
			
			// Disable Google Map dragging
			draggable: false,
			
			// This is where you would paste any style found on Snazzy Maps.
			styles: [
			{"stylers":[{"visibility":"simplified"}]},
			{"stylers":[{"color":"#15111c"}]},
			{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#1b1d27"},{"lightness":10}]},
			{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},
			{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#1b1d27"},{"lightness":5}]},
			{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},
			{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#1b1d27"},{"lightness":5}]},
			{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"off"}]},
			{"featureType":"water","stylers":[{"color":"#1b1d27"},{"lightness":15}]},
			{"featureType":"administrative","stylers":[{"visibility":"off"}]},
			{"featureType":"poi","stylers":[{"visibility":"off"}]},
			{"elementType":"labels.text.fill","stylers":[{"visibility":"off"},{"lightness":25}]}]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using out element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);
		
		// To add the marker to the map, use the 'map' property
		var marker = new google.maps.Marker({
			// The latitude and longitude to center the map (always required)
			position: myLatlng,
			
			// map (optional) specifies the Map on which to place the marker
			map: map,
			
			// Customize a marker image
			icon: image,
			
			title:"Adresse",
			
			// Animate a marker
			// animation: google.maps.Animation.DROP
		});
	}
	
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>
</html>