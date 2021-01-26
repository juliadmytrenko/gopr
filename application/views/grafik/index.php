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
			foreach ($grafiki as $grafik) {
				echo "<tr>";
				echo "<td>" . '' . "</td>";
				echo "<td>" . $grafik['id'] . "</td>";
				echo "<td>" . $grafik['data'] . "</td>";
				echo "<td>" . $grafik['miejsce'] . "</td>";
				echo "<td>" . $grafik['imie'] . "</td>";
				echo "<td>" . $grafik['nazwisko'] . "</td>";
				echo "<td>" . $grafik['nr_telefonu'] . "</td>";
//				echo "<td>";
//				echo "<a href='read.php?id=". $grafik['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
//				echo "<a href='update.php?id=". $grafik['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
//				echo "<a href='delete.php?id=". $grafik['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
//				echo "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		} else{
			echo "<p class='lead'><em>No records were found.</em></p>";
		}
	?>
</div>
