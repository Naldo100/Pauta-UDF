<div class="container" method="REQUEST">
	<h1>Cadastrar Disciplina</h1>
	<form action="?page=salvar_disciplina" method="POST">

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label>Título da Disciplina</label>
					<input type="text" name="titulo_disciplina" class="form-control" required placeholder="Digite o nome da disciplina"/>
				</div>
			</div>	
		</div>		
		<div class="row form-group">
			<div class="col-md-4">
				<label>Periodo</label>
				<select name="periodo_disciplina" class="form-control">
					 <option></option>
					 <option>Matutino</option>
					 <option>Noturno</option>
				</select>
			</div>
			<div class="col-md-4">
				<label>Carga Horaria</label>
				<input type="text" name="ch_disciplina" class="form-control" required placeholder="Digite a carga horária"/>
			</div>
			<div class="col-md-4">
				<label>Sala</label>
				<input type="text" name="sala_disciplina" class="form-control" required placeholder="Digite a Sala"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Nome do Professor</label>
					<input type="text" name="professor_disciplina" class="form-control" required placeholder="Digite aqui o nome do professor"/>
				</div>
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
