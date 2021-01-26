<html lang="pl">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles.css">

	<title>GOPR</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar">
        <div class="container">
            <h1 class="navbar-brand mr-5 logo">GOPR</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">Strona Główna</a></li>
                    <li class="nav-item"><a href="<?php echo site_url(); ?>#zag-lawinowe" class="nav-link text-uppercase">Zagrożenia Lawinowe</a></li>
                    <li class="nav-item"><a href="<?php echo site_url(); ?>#opis" class="nav-link text-uppercase">Opis Organizacji</a></li>
                    <li class="nav-item"><a href="<?php echo site_url(); ?>#rekrutacja" class="nav-link text-uppercase">Rekrutacja</a></li>
                    <li class="nav-item"><a href="<?php echo site_url(); ?>#kontakt" class="nav-link text-uppercase">Kontakt</a></li>
                </ul>
				<div class="panelPracownika">

					<?php if(!$this->session->userdata('logged_in')){ ?>
						<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase btn btn-danger" aria-hidden="true">
							Zaloguj do Panelu Pracownika</a>
					<?php }; ?>

					<?php if($this->session->userdata('logged_in')){ ?>
						<div>
							<p class="text-white">
								Zalogowano jako <?php echo $this->session->userdata('stanowisko') ?>
								<br>
								<span class="text-center h4"><?php echo $this->session->userdata('imie').' '.$this->session->userdata('nazwisko') ?></span>
							</p>
						</div>
							<a href="<?php echo site_url(); ?>users/logout" class="text-white text-uppercase btn btn-danger ml-1" aria-hidden="true">
								Wyloguj</a>
					<?php }; ?>
				</div>
            </div>
        </div>
    </nav>
	<?php if($this->session->userdata('logged_in')){ ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar">
			<div class="container">
				<div class="navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2">
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>jednostka" class="text-white btn btn-secondary " aria-hidden="true">
									Zarządzaj jednostką
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>ratownicy" class="text-white btn btn-secondary " aria-hidden="true">
									Ratownicy
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white btn btn-secondary" aria-hidden="true">
									Zagrożenia
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white btn btn-secondary" aria-hidden="true">
									Raporty
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white btn btn-secondary" aria-hidden="true">
									Grafik
								</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<?php }; ?>
</header>
<main>
<!--Flash message -->
	<?php if($this->session->tempdata('employee_created')){ ?>
		<?php echo '<p class="alert alert-success">'.$this->session->tempdata('employee_created').'</p>'; ?>
	<?php } if($this->session->tempdata('user_loggedin')){ ?>
		<?php echo '<p class="alert alert-success">'.$this->session->tempdata('user_loggedin').'</p>'; ?>
	<?php } if($this->session->tempdata('login_failed')){ ?>
		<?php echo '<p class="alert alert-danger">'.$this->session->tempdata('login_failed').'</p>'; ?>
	<?php } if($this->session->tempdata('user_logout')){ ?>
		<?php echo '<p class="alert alert-success">'.$this->session->tempdata('user_logout').'</p>'; ?>
	<?php }; ?>
