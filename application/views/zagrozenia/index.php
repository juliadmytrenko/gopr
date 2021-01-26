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

	var places_n = ['Przełęcz Knurowska', 'Lubań - Marszałek - Krościenko', 'Niedzica - Sromowce Wyżne - Macelak',
		'Ochotnicy Dolna - Polana Muszyna - Lubań', 'Przełęcz Knurowska', 'Przełęcz Snozka - Macelak - Trzy Korony',
		'Trzy Korony - Sokolica - Szczawnica', 'Maniowy- Huba - pod Kotelnicą', 'Ochotnica Dolna - Polana Morgi - Lubań',
		'Ochotnica Dolna - Polana Morgi - Lubań', 'Lubań - Grywałd', 'Lubań - Makowica - Tylmanowa Rzeka',
		'Tylmanowa Rzeka - Jaworzynka', 'Sromowce - Przeł. pod Ostrym Wierchem', 'Maniowy - polana Kudów']
	var places_l = [[49.50482126830119, 20.18807483359855], [49.491568189486706, 20.34427957601695],
		[49.40450174477857, 20.356826298516626], [49.3686961006346, 20.846984780218424],
		[49.45711238468698, 20.31781648379223], [49.42023518926511, 20.372694048195065],
		[49.418650280651676, 20.44006339287406], [49.46136145576576, 20.26508975075517],
		[49.492569170088665, 20.302434385155006], [49.45323434142154, 20.367218836251205], [49.497614862682205, 20.713639909696287],
		[49.54170298567663, 18.869956197319773], [49.44107497783701, 21.1220093634371], [49.490458083939394, 20.293013940578994]]
	var places_p = [1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4]
	for (i = 0; i < places_l.length; i++) {
		L.marker(places_l[i]).addTo(mymap).bindPopup("<b>" + places_n[i] + "</b><br>Poziom zagrożenia: " + places_p[i] + ".");
	}

</script>

