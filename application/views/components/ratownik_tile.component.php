<?php
function createRatownikTile($post) {

	echo '		
		<div class="card" ">
		  <img class="card-img-top" src="https://static.wirtualnemedia.pl/media/top/blowek655.png" alt="Zdjęcie ratownika">
		  <div class="card-body">
			<h5 class="card-title">'.$post['imie'].' '.$post['nazwisko'].'</h5>
			<p class="card-text">jakies info</p>
			<a href="#" class="btn btn-primary btn-block">Dodaj do jednostki</a>
		  </div>
		</div>
	';
}
?>
