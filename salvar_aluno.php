<div class="container">
	<div class="alert alert-success" role="alert" method="REQUEST" name="alerta">
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="col-md-4"></div>
			Cadastro realizado com sucesso!
	</div>
	<a href="?page=cadastrar_aluno"</a><button type="submit" class="btn btn-primary">Novo Cadastro</button>
</div>

<?php

$sql = "INSERT INTO aluno(
				nome_aluno,
				cpf_aluno,
				rgm_aluno,
				email_aluno,
				fone_aluno,
				data_nasc_aluno,
				data_cad_aluno)
			VALUES(
				'".@$_REQUEST["nome_aluno"]."',
				'".@$_REQUEST["cpf_aluno"]."',
				'".@$_REQUEST["rgm_aluno"]."',
				'".@$_REQUEST["email_aluno"]."',
				'".@$_REQUEST["fone_aluno"]."',
				'".@$_REQUEST["data_nasc_aluno"]."',
				'".@$_REQUEST["data_cad_aluno"]."'

			)";
		
	$res = mysql_query($sql, $con) or die(mysql_error()); 
	
	if($res == true){
	
			echo @$_REQUEST["alerta"];
	
		
	}else{
		echo "Deu erro!";
	}
?>