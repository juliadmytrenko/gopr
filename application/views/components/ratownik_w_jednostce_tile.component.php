<?php
function createRatownikWJednostceTile($ratownik) {

	$usunURL = '\''. site_url('jednostka/usun/'.$ratownik['id']) .'\'';

	echo '		
		<div class="card">
		  <img class="card-img-top" src="https://static.wirtualnemedia.pl/media/top/blowek655.png" alt="Zdjęcie ratownika">
		  <div class="card-body">
			<h5 class="card-title">'.$ratownik['imie'].' '.$ratownik['nazwisko'].'</h5>
			<p class="card-text">jakies info</p>
			<a href="'.site_url('jednostka/edytuj/'.$ratownik['id']).'" class="btn btn-primary">Edytuj</a>
			<button onclick="usunRatownikaZJednostki('.$usunURL.')" class="btn btn-danger float-right">Usuń</button>
		  </div>
		</div>
	';
}
?>


