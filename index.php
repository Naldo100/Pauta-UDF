<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    
    <meta charset="utf-8">
    <title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
		  		<div class="col-md-1">
		  		</div>
				 <!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?page=home">Home</a>
				</div>
				  <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lista<span class="caret"></span></a>
					    <ul class="dropdown-menu">
					        <li><a href="?page=listar_disciplina">Listar Disciplina</a></li>
					        <li><a href="?page=listar_aluno">Listar Aluno</a></li>
						</ul>
					    </li>
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
					    <ul class="dropdown-menu">
					        <li><a href="?page=cadastrar_disciplina">Cadastrar Disciplina</a></li>
					        <li><a href="?page=cadastrar_aluno">Cadastrar Aluno</a></li>
						</ul>
					    </li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
					    <div class="form-group">
					        <input type="text" class="form-control" placeholder="">
					    </div>
					    <button type="submit" class="btn btn-default">Pesquisar</button>
					</form>
					<div class="col-md-2"></div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
					
		<div class="row">
			<div class="col-md-12">
				<?php
					include("conect.php");
						
					switch(@$_REQUEST["page"]){
						
						case "home":
							include("home.php");
						break;
						
						case "lista":
							include("lista.php");
						break;
							
						case "salvar_disciplina":
							include("salvar_disciplina.php");
						break;

						case "salvar_aluno":
							include("salvar_aluno.php");
						break;

						case 'cadastrar_disciplina':
							include("cadastrar_disciplina.php");
						break;

						case 'cadastrar_aluno':
							include("cadastrar_aluno.php");
						break;

						case 'listar_disciplina':
							include("listar_disciplina.php");
						break;

						case 'listar_aluno':
							include("listar_aluno.php");
						break;

						case 'excluir_disciplina':
							include("excluir_disciplina.php");
						break;

						case 'excluir_aluno':
							include("excluir_aluno.php");
						break;
							
						default:
							include("home.php");
						
						
					} 
					
				?>
			</div>
		</div>
  </body>
</html>