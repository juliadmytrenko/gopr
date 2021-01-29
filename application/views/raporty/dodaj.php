
<div class="container mt-5 d-flex justify-content-center">

	<div class="my-4" style="width: 400px">
		<?php echo form_open(); ?>
			<input class="form-control w-100 mb-2" type="text" id="tytul" name="tytul" placeholder="Tytuł" autofocus>
			<input class="form-control w-100 mb-2" type="date" id="data_raportu" name="data_raportu" placeholder="Data" autofocus>
			<textarea style="width: 100%; height: 400px" class="form-control" id="tresc" name="tresc" placeholder="Treść" autofocus></textarea>
			<input type="submit" class="btn btn-primary d-block my-3 mx-auto" value="Dodaj">
		<?php echo form_close(); ?>
	</div>

</div>


