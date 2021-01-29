<div id="content" name="content">

	<section class="my-section-jumbotron" id="strona-glowna">
		<div class="jumbotron jumbotron-fluid my-jumbotron d-flex align-items-center">
			<div class="container text-center my-jumbotron-slogan">
				<h1 class="display-4 text-white text-uppercase my-jumbotron-text my-4">GÓRSKIE OCHOTNICZE POGOTOWIE RATUNKOWE <span class="text-primary font-weight-bold"> W CZORSZTYNIE</span> </h1>

			</div>
		</div>
	</section>

	<section class="zagrozenie-lawinowe" id="zag-lawinowe">
		<div class="container my-5">
			<div class="text-center">
				<h2 class="text-uppercase">Zagrożenia <span class="text-danger">Lawinowe</span></h2>
			</div>

			<blochquote class="blochquote text-center">

				<h2> wieje strasznie</h2>
				<!-- Tu trzeba będzie z bazy pobrać -->
				<?php $this->load->view('zagrozenia/index.php', $zagrozenia);?>
<!--				$this->load->view('pages/'.$page, $data);-->
				<br><br>
			</blochquote>
		</div>
		<div class="separator"></div>
	</section>

	<section class="Opis organizacji" id="opis">
		<div class="container my-5">
			<div class="text-center">
				<h2 class="text-uppercase"> <span class="text-primary">Opis Naszego Pogotowia</span></h2>
			</div>

			<blochquote class="blochquote text-center">

				<p> Czorsztyńskie Górskie Ochotnicze Pogotowie Ratunkowe powstało w listopadzie 2020 roku. Jego zadaniem jest prowadzenie akcji ratunkowych, szkolenie oraz zapobieganie wypadkom na terenach górskich głównie okolic Czorsztyna. Działalność realizowana jest obecnie w Pieninach oraz w Beskidzie Zachodnim. Siedziba główna mieści się w Czorsztynie na ulicy Zamkowej 49.</p>


			</blochquote>
		</div>
		<div class="separator"></div>
	</section>


	<section class="rekrutacja" id="rekrutacja">
		<div class="container my-5">
			<div class="text-center">
				<h2 class="text-uppercase"> <span class="text-primary">Jak  zostać ratownikiem naszego pogotowia</span></h2>

			</div>
			<br>
			<blochquote class="blochquote text-center">
				<br>
				<p>
					Chcąc zostać ratownikiem w naszym pogotowiu trzeba mieć 18-35 lat, przejść staż kandydacki, szkolenie oraz zdać testy
					i egzaminy kwalifikacyjne. Podczas testów kandydat na ratownika musi wykazać umiejętności teoretyczne posiadać wiedzę medyczną oraz znać topografię terenu. Przyszły ratownik musi mieć dobrą kondycję fizyczną, umiejętności jazdy na nartach oraz najważniejsze musi zdać egzamin na ratownika.
					<br>
					<b>Aby dowiedzieć się więcej zadzwoń pod numer: 515 929 822</b>
				</p>


			</blochquote>
		</div>
		<div class="separator"></div>
	</section>

	<section class="kontakt" id="kontakt">
		<div class="container my-5">
			<div class="text-center">
				<h2 class="text-uppercase"> <span class="text-primary">Kontakt</span></h2>
			</div>

			<blochquote class="blochquote text-center">
				<b>
					<ul class="list-unstyled">
						<li>
							<i class="fas fa-envelope mr-3">czorsztyngopr@home.pl</i>
						</li>
						<li>
							<i class="fas fa-map-marker mr-3">ul. Zakowa 49 Czorsztyn</i>
						</li>
						<li>
							<i class="fas fa-phone mr-3">883752999</i>
						</li>
					</ul>
				</b>
			</blochquote>
		</div>

	</section>
</div>


