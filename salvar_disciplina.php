<div class="container">
	<div class="alert alert-success" role="alert" method="REQUEST" name="alerta">
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="col-md-4"></div>
			Cadastro realizado com sucesso!
	</div>
	<a href="?page=cadastrar_disciplina"</a><button type="submit" class="btn btn-primary">Novo Cadastro</button>
</div>

<?php

	$sql = "INSERT INTO disciplina(
				titulo_disciplina,
				periodo_disciplina,
				ch_disciplina,
				sala_disciplina,
				professor_disciplina) 
	
			VALUES(
				'".@$_REQUEST["titulo_disciplina"]."',
				'".@$_REQUEST["periodo_disciplina"]."',
				'".@$_REQUEST["ch_disciplina"]."',
				'".@$_REQUEST["sala_disciplina"]."',
				'".@$_REQUEST["professor_disciplina"]."'
			
			)";
		
	$res = mysql_query($sql, $con) or die(mysql_error()); 
	
	if($res == true){
	
			echo @$_REQUEST["alerta"];
	
		
	}else{
		echo "Deu erro!";
	}
?>