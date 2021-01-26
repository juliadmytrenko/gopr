<div class="container">
	<div class="my-5 d-flex flex-wrap">
		<?php
		include "./application/views/components/ratownik_w_jednostce_tile.component.php";
		//			echo json_encode($posts);

		foreach ($ratownicy_w_jednostce as $ratownik) : ?>
			<div class="col mb-3" style="flex: 0 1 25%; min-width: 15rem;">
				<?php createRatownikWJednostceTile($ratownik); ?>
			</div>
		<?php
		endforeach;
		?>
	</div>
</div>
