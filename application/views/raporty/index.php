
<div class="container mt-5">
	<a href="<?php echo site_url(); ?>raporty/dodaj" class="btn btn-primary text-white">Dodaj raport</a>
	<div class="my-4">
		<ul class="list-group">
			<?php
				include "./application/views/components/raport.component.php";
				foreach ($raporty as $raport) :
					createRaport($raport);
				endforeach;
			?>
		</ul>
	</div>


</div>


