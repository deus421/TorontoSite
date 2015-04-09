<?php 


	$title = "Toronto : About";
	include 'assets/inc/header.php';

?>	
	<div class="fitMain">
	<h1>Quick Facts</h1>
		<ul>
		<li>Toronto started out as the city of York.  It was renamed to Toronto in 1834!</li>
		<li>Toronto is the capital of the province of Ontario, Canada.</li>
		<li>Toronto is the most populus city in Canada!</li>
		<li>The Toronto Zoo is the largest Zoo in Canada!</li>
		<li>Toronto is an extremely diverse city, over 30% of its residents speak a language other than English/French.</li>
		<li>The Toronto Maple Leafs haven't won a Stanley Cup since 1967.</li>
		</ul>
	<h1>Toronto Layout</h1>
		<p>Toronto's layout is unique.  The southern side of the city borders Lake Ontario with a 29 mile shoreline.  The actual city itself is laid out in a rather easy to figure out grid system.</p>
		<div id="map-canvas"></div>
		<!--
		<figure>
			<img id="torontoMap" src="assets/images/torontoMap.png" alt="Toronto Map">
			<figcaption>Source : http://www.seetorontonow.com</figcaption>
		</figure>
		-->
		<br/>
		<br/>
	</div>
	<script src="assets/js/javascript.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
		function initialize() {
		  var myLatlng = new google.maps.LatLng(43.7,-79.4);
		  var mapOptions = {
		    zoom: 11,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		  var hockeyHallOfFame = new google.maps.LatLng(43.6470,-79.3773);
		  var cnTower = new google.maps.LatLng(43.6426,-79.3871);
		  var zoo = new google.maps.LatLng(43.8203,-79.1828);
		  var marker = new google.maps.Marker({
		      position: hockeyHallOfFame,
		      map: map,
		      title: 'Hockey Hall Of Fame'
		  });
		  var marker = new google.maps.Marker({
		      position: cnTower,
		      map: map,
		      title: 'CN Tower'
		  });
		  var marker = new google.maps.Marker({
		      position: zoo,
		      map: map,
		      title: 'Toronto Zoo'
		  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>