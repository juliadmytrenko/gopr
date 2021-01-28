<div class="container my-5">
	<?php
		if($grafiki){
			echo "<table class='table table-bordered table-striped'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>#</th>";
			echo "<th>Nr dyżuru</th>";
			echo "<th>Data dyżuru</th>";
			echo "<th>Miejsce dyżuru</th>";
			echo "<th>Imię</th>";
			echo "<th>Nazwisko</th>";
			echo "<th>Numer telefonu</th>";


			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			$index = 1;
			foreach ($grafiki as $grafik) {
				echo "<tr>";
				echo "<td>" . $index . "</td>";
				echo "<td>" . $grafik['id'] . "</td>";
				echo "<td>" . date("F j, Y, g:i a", strtotime($grafik['data'])). "</td>";
				echo "<td>" . $grafik['miejsce'] . "</td>";
				echo "<td>" . $grafik['imie'] . "</td>";
				echo "<td>" . $grafik['nazwisko'] . "</td>";
				echo "<td>" . $grafik['nr_telefonu'] . "</td>";
				echo "</tr>";
				$index++;
			}
			echo "</tbody>";
			echo "</table>";
		} else{
			echo "<p class='lead'><em>No records were found.</em></p>";
		}
	?>
</div>
