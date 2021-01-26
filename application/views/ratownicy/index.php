<h2>Ratownicy</h2>

<div class="my-4">
	<?php
	include "./application/views/components/ratownik_tile.component.php";
	//			echo json_encode($posts);
	foreach ($ratownicy as $ratownik) :
		createRatownikTile($ratownik);
	endforeach;
	?>
</div>

