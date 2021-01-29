<?php
function createRatownikWJednostceTile($ratownik) {

	$img = "https://static.wirtualnemedia.pl/media/top/blowek655.png";
	if($ratownik['avatar_url']) {
		$img = $ratownik['avatar_url'];
	}

	echo '		
		<div class="card">
		  <img class="card-img-top" src='.$img.' alt="Zdjęcie ratownika">
		  <div class="card-body">
			<h5 class="card-title">'.$ratownik['imie'].' '.$ratownik['nazwisko'].'</h5>
			<p class="card-text">jakies info</p>
			<a href="'.site_url('jednostka/usun/'.$ratownik['id']).'" class="btn btn-danger btn-block">Usuń z jednostki</a>
		  </div>
		</div>
	';
}
?>


