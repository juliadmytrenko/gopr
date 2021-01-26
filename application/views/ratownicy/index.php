<div class="container">
	<div class="my-5 d-flex flex-wrap">
		<?php
		include "./application/views/components/ratownik_tile.component.php";
		//			echo json_encode($posts);

		foreach ($ratownicy as $ratownik) : ?>
			<div class="col mb-3" style="flex: 0 1 25%; min-width: 15rem;">
				<?php createRatownikTile($ratownik); ?>
			</div>
		<?php
		endforeach;
		?>
	</div>
</div>


