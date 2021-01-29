<?php
function createRaport($raport) {

	echo '		
		<li class="list-group-item p-4 d-flex align-items-center">
				<span>'.$raport['data'].'</span><h5 class="d-inline ml-5"><a href='.site_url().'raporty/'.$raport['id'].'>'.$raport['tytul'].'</a></h5>
				<div class="ml-auto">
					
				</div>
		</li>
	';
}
?>


