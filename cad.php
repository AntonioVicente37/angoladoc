<?php include_once 'includes/header.php'; ?>
	<div class="container">
		<h1>Sistema de validação de Documentação de Angola</h1><br>
		<hr>
		<h2>Cadastro de documentação Angolana</h2>				
		<a class="btn btn-primary" href="index.php" role="button">Lista de Documentos Cadastrados</a><br>		
		<form action="php_action/create.php" name="formCadastro" id="formCadastro" method="POST">
			<div class="row">
				<div class="col">
					<label>Nome</label>  
					<input type="text" name="nome" id="nome" class="form-control" required />
				</div>
				<div class="col">  
					<label>E-mail</label>
					<input type="email" name="email" id="email" class="form-control"/>
				</div>
			</div>	 
			<div class="row">
				<div class="col">
					<label>Idade</label>
					<input type="number" name="idade" id="idade" class="form-control"/>
				</div>
				<div class="col">
					<label>Cidade</label>
					<select name="cidade" id="cidade" class="form-control">
						<option value="">----------</option>
						<option value="Luanda">Luanda</option>
						<option value="Cazenga">Cazenga</option>
						<option value="Viana">Viana</option>
						<option value="Benfica">Benfica</option>
						<option value="Ingombotas">Ingombotas</option>
						<option value="Talatona">Talatona</option>						
						<option value="Kilamba Kiaxi">Kilamba Kiaxi</option>
					</select>
				</div>
			</div>		
			<div class="row">
				<div class="col">
					<label>Telefone</label>
					<input type="text" name="telefone" id="telefone" class="form-control"/>
				</div>
				<div class="col">
					<label>Celular</label>
					<input type="text" name="celular" id="celular" class="form-control"/>
				</div>
				<div class="col">
					<label>CEP</label>
					<input type="text" name="cep" id="cep" class="form-control"/>
				</div>
			</div>	
			<div class="row">
				<div class="col">
					<label>B.I</label>
					<input type="text" name="bi" id="bi" class="form-control"/>
				</div>
				<div class="col">
					<label>NIF</label>
					<input type="text" name="nif" id="nif" class="form-control"/>
				</div>
				<div class="col">
					<label>Salario</label>
					<input type="text" name="salario" id="salario" class="form-control"/>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label>N de Carta</label>
					<input type="text" name="carta" id="carta" class="form-control"/>
				</div>
				<div class="col">
					<label>N Passaporte</label>
					<input type="text" name="passaporte" id="passaporte" class="form-control"/>
				</div>
				<div class="col">
					<label>Matricula do carro</label>
					<input type="text" name="carro" id="carro" class="form-control"/>
				</div>
			</div><br>	
			<div class="row">
				<input type="submit" name="btn-enviar" id="btn-enviar" class="btn btn-primary form-control"/>
			</div>
		</form>
	</div>

<?php include_once 'includes/footer.php'; ?>