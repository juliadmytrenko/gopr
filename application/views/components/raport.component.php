<?php
function createRaport($raport) {

	echo '		
		<li class="list-group-item p-4 d-flex align-items-center">
			<span>'.$raport['data'].'</span><h5 class="d-inline ml-5">nazwa raportu</h5>
			<div class="ml-auto">
				<a class="btn btn-secondary text-white">Edytuj</a>
				<a class="btn btn-secondary text-white">Usuń</a>
			</div>
		</li>
		
	';
}
?>


