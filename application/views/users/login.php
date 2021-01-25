<div id="content" name="content">
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<h1 class="my-4"><?php echo $title; ?></h1>

			<?php echo form_open(); ?>
			<input type="text" id="login" class="fadeIn second" name="login" placeholder="Nazwa użytkownika" required autofocus>
			<input type="text" id="haslo" class="fadeIn third" name="haslo" placeholder="Hasło" required autofocus>
			<input type="submit" class="fadeIn fourth" value="Zaloguj">
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


