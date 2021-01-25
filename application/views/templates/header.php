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
            <span class="navbar-brand h1">GOPR</span>
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
						<button class="btn btn-danger">
							<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
								Zaloguj do Panelu Pracownika</a>
						</button>
					<?php }; ?>

					<?php if($this->session->userdata('logged_in')){ ?>
						<button class="btn btn-danger ml-1">
							<a href="<?php echo site_url(); ?>users/logout" class="text-white text-uppercase " aria-hidden="true">
								Wyloguj</a>
						</button>
					<?php }; ?>
				</div>
            </div>
        </div>
    </nav>
	<?php if($this->session->userdata('logged_in')){ ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar">
			<div class="container">
				<div class="navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
									<button class="btn btn-primary">
										Zarządzaj jednostką
									</button>
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
									<button class="btn btn-primary">
										Ratownicy
									</button>
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
									<button class="btn btn-primary">
										Zagrożenia
									</button>
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
									<button class="btn btn-primary">
										Raporty
									</button>
								</a>
						</li>
						<li class="nav-item mr-2"><a href="<?php echo site_url(); ?>#strona-glowna" class="nav-link text-uppercase">
								<a href="<?php echo site_url(); ?>users/login" class="text-white text-uppercase " aria-hidden="true">
									<button class="btn btn-primary">
										Grafik
									</button>
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
