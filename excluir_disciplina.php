
<h1>DELETAR</h1>

<?php

	$id = @$_REQUEST['id_disciplina']; // Recebendo o valor enviado pelo link

	mysql_query("DELETE * FROM disciplina WHERE id_disciplina=.'$id'."); // A instrução delete irá apagar todos os dados da id recebida

echo 'Registro excluído com sucesso!';
?>