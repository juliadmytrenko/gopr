<html lang="pl">
<head>
	<meta charset="UTF-8">

	<style type="text/css">

		.my-jumbotron {
			background-image:url(https://cdn.pixabay.com/photo/2016/12/11/12/02/bled-1899264_960_720.jpg);
			max-width: 100%;
			background-size: cover;
			background-position: center;
			height: 70vh;
			overflow-x:hidden;
		}

		.my-jumbotron-slogan {
			background:  rgba(0, 0, 0, 0.5);

		}

		.my.jumbotron-text {
			letter-spacing: 0.35rem;
		}

		.separator{
			position: relative;
			overflow: hidden;
			padding-bottom: 50px;
			width: 100%;
		}

		.separator::before, .separator::after {
			content: '';
			position: absolute;
		}

		.separator::before{
			bottom: 100%;
			left: 0;
			width: 100%;
			height: 100%;
			background: #6f42c1;
			transform-origin: 100% 100%;
			transform: rotate(-1deg);
		}


	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
				<button class="btn btn-danger">
					<a href="<?php echo site_url(); ?>login" class="text-white text-uppercase " aria-hidden="true">

						Zaloguj do Panelu Pracownika</a>
				</button>
            </div>
        </div>
    </nav>
</header>
<main>
