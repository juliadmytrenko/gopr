<div class="container d-flex justify-content-center">
	<div class="my-5" style="width: 30rem">
		<h2 class="my-3"><?= $title; ?></h2>
		<?php echo validation_errors(); ?>

		<?php echo form_open('users/register'); ?>
			<div class="form-group">
				<label>Login</label>
				<input type="text" class="form-control" name="login" placeholder="Login">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Hasło</label>
				<input type="password" class="form-control" name="haslo" placeholder="Hasło">
			</div>
			<div class="form-group">
				<label>Powtórz hasło</label>
				<input type="password" class="form-control" name="potwierdzenie_hasla" placeholder="Powtórz hasło">
			</div>
		<button type="submit" class="btn btn-primary">Zatwierdź</button>
		<?php echo form_close(); ?>
	</div>
</div>
