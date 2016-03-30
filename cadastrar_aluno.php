<div class="container">
	<h1>Cadastrar Aluno</h1>
	<div class="form-group">
		<form action="?page=salvar_aluno" method="POST">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Nome do Aluno</label>
						<input type="text" name="nome_aluno" class="form-control" required placeholder="Digite o nome do aluno"/>
					</div>
				</div>	
			</div>	
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>CPF do aluno</label>
						<input type="text" name="cpf_aluno" class="form-control" required placeholder="Digite aqui o email do aluno"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email do aluno</label>
						<input type="text" name="email_aluno" class="form-control" required placeholder="Digite aqui o CPF do aluno"/>
					</div>
				</div>
			</div>	
			<div class="row form-group">
				<div class="col-md-3">
					<label>RGM do aluno</label>
					<input type="number" name="rgm_aluno" class="form-control" required placeholder="Digite o RGM"/>
				</div>
				<div class="col-md-3">
					<label>Telefone do aluno</label>
					<input type="text" name="fone_aluno" class="form-control" required placeholder="Digite o telefone do aluno"/>
				</div>
				<div class="col-md-3">
					<label>Data de nascimento</label>
					<input type="date" name="data_nasc_aluno" class="form-control" required/>
				</div>
				<div class="col-md-3">
					<label>Data do cadastro</label>
					<input type="date" name="data_cad_aluno" class="form-control" required/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Enviar</button>
					<button type="reset" class="btn btn-default">Limpar</button>
				</div>
			</div>	
			
		</form>
	</div>
</div>
