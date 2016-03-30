<div class="container">
	<h1>Disciplina</h1>
	
	<?php

		$result = mysql_query('SELECT * FROM disciplina');
	   		echo "<table class='table table-condensed'>
			  <tr>
			  <th class='active'>ID</th>
			  <th class='active'>Titulo disciplina</th>
			  <th class='active'>Período</th>
			  <th class='active'>Carga Horária</th>
			  <th class='active'>Sala</th>
			  <th class='active'>Professor</th>
			  </tr>";
		 	while($row = mysql_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row['id_disciplina'] . "</td>";
			    echo "<td>" . $row['titulo_disciplina'] . "</td>";
			    echo "<td>" . $row['periodo_disciplina'] . "</td>";
			    echo "<td>" . $row['ch_disciplina'] . "</td>";
			    echo "<td>" . $row['sala_disciplina'] . "</td>";
			    echo "<td>" . $row['professor_disciplina'] . "</td>";
			    echo "<td><form name='excluir_disciplina' action='excluir_disciplina.php'><input type='submit' class='btn btn-danger btn-xs' value='Excluir'></form></td>";
			    echo "</tr>";
	 		

			}

			echo "</table>";

	  mysql_close($con);

	?>
	<a href='?page=exlcuir_disciplina?id=<?php echo $linha['id_disciplina'] ?>'>
		<?php
		echo @$linha['id_disciplina']; // Mostra o valor do registro dentro do loop
		?>
		</a>
		<?php
		echo '<br/>'; 
		?>

</div>