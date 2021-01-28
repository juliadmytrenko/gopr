
<div class="container">
	<div class="my-5">
		<div id="mapid" style="width: 100%; height: 500px;"></div>
	</div>
</div>

<script>
	var mymap = L.map('mapid').setView([49.44064267420581, 20.32698007207693], 8.5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery ÂŠ <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	var zagrozenia = <?php echo json_encode($zagrozenia); ?>;
	console.log(zagrozenia);
	// var = $zagrozenia;
	for (i = 0; i < zagrozenia.length; i++) {
		L.marker([zagrozenia[i].wsp_x, zagrozenia[i].wsp_y]).addTo(mymap).bindPopup("<b>" + zagrozenia[i].miejsce + "</b><br>Poziom zagrożenia: " + zagrozenia[i].stopien_zagrozenia + ".");
	}

</script>

