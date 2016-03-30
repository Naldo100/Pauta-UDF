<div class="container">
	<h1>Alunos</h1>
	
	<?php

		$result = mysql_query('SELECT * FROM aluno');
	   		echo "<table class='table table-condensed'>
			  <tr>
			  <th class='active'>ID</th>
			  <th class='active'>Nome do Aluno</th>
			  <th class='active'>RGM</th>
			  <th class='active'>Email</th>
			  <th class='active'>CPF</th>
			  <th class='active'>Telefone</th>
			  <th class='active'>Data de Nascimento</th>
			  <th class='active'>Data do cadastro</th>
			  </tr>";
		 	while($row = mysql_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row['id_aluno'] . "</td>";
			    echo "<td>" . $row['nome_aluno'] . "</td>";
			    echo "<td>" . $row['rgm_aluno'] . "</td>";
			    echo "<td>" . $row['email_aluno'] . "</td>";
			    echo "<td>" . $row['cpf_aluno'] . "</td>";
			    echo "<td>" . $row['fone_aluno'] . "</td>";
			    echo "<td>" . $row['data_nasc_aluno'] . "</td>";
			    echo "<td>" . $row['data_cad_aluno'] . "</td>";
			    echo "</tr>";
	 		}
	 	 	echo "</table>";
	  mysql_close($con);



	?>

</div>