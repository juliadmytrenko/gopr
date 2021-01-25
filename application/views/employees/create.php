<div id="content" name="content">
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<h1 class="my-4 text-center"><?= $title; ?></h1>

			<?php echo form_open(); ?>
			<input type="text" id="imie" class="fadeIn second" name="imie" placeholder="Imię" required autofocus>
			<input type="text" id="nazwisko" class="fadeIn third" name="nazwisko" placeholder="Nazwisko" required autofocus>
			<input type="number" id="nr_telefonu" class="fadeIn fourth" name="nr_telefonu" placeholder="Nr telefonu" required autofocus>
			<input type="text" id="stanowisko" class="fadeIn fifth" name="stanowisko" placeholder="Stanowisko" required autofocus>
			<input type="number" id="id_jednostki" class="fadeIn sixth" name="id_jednostki" placeholder="ID jednostki" autofocus>
			<input type="email" id="email" class="fadeIn seventh" name="email" placeholder="Email" required autofocus>
			<input type="submit" class="fadeIn eighth" value="Zaloguj">
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
