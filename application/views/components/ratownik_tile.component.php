<?php
function createRatownikTile($ratownik) {
	$EE =& get_instance(); // rozwiązuje problem $this
	// ta funkcja nie jest metodą dlatego nie ma $this. Z obiektu EE można korzystać tylko wewnątrz klasy


	$button = '<a href="'.site_url('jednostka/dodaj/'.$ratownik['id']).'" class="btn btn-primary btn-block">Dodaj do jednostki</a>';
	// Sprawdź czy id_jednostki do której należy ratownik jest taki sam jak id jednotki kierownika
	if($ratownik['id_jednostki'] === $EE->session->userdata('id_jednostki')) {
		$button = '<a href="'.site_url('jednostka/usun/'.$ratownik['id']).'" class="btn btn-danger btn-block">Usuń z jednostki</a>';
	};


	echo '		
		<div class="card" ">
		  <img class="card-img-top" src="https://static.wirtualnemedia.pl/media/top/blowek655.png" alt="Zdjęcie ratownika">
		  <div class="card-body">
			<h5 class="card-title">'.$ratownik['imie'].' '.$ratownik['nazwisko'].'</h5>
			<p class="card-text">jakies info</p>
			'.$button.'
		  </div>
		</div>
	';
}
?>
