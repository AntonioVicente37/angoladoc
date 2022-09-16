<?php 
session_start();
if(isset($_SESSION['mensagem'])):?>
	<!--<div class="alert alert-primary" role="alert">
  	 	<?php echo $_SESSION['mensagem']; ?>
	</div>-->
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>Angola Docs!</strong> <?php echo $_SESSION['mensagem']; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
</div>
<?php
endif;  
session_unset();
include_once 'php_action/db_connect.php';

include_once 'includes/header.php'; 

?>
	<div class="container">
		<h1>Sistema de validação de Documentação de Angola</h1><br>
		<hr>		
		<h2 class="">Lista de documentos Cadastrados</h2>					
		<a class="btn btn-primary" href="cad.php" role="button">Cadastro de Documentos</a>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nome</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Idade</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">Telefone</th>     
		      <th scope="col">Celular</th>
		      <th scope="col">CEP</th>
		      <th scope="col">B.I</th>
		      <th scope="col">NIF</th>                         
		      <th scope="col">Salario</th>
		      <th scope="col">N de Carta</th>
		      <th scope="col">N do Passaporte</th>
		      <th scope="col">Matricula do Carro</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$sql = "SELECT * FROM people";
		  		$resultado = mysqli_query($connect, $sql);

		  		if(mysqli_num_rows($resultado) > 0):

		  		while($dados = mysqli_fetch_array($resultado)):
		  	?>
		    <tr>
		      <th scope="row"><?php echo $dados['id']; ?></th>
		      <td><?php echo $dados['nome']; ?></td>
		      <td><?php echo $dados['email']; ?></td>
		      <td><?php echo $dados['idade']; ?></td>
		      <td><?php echo $dados['cidade']; ?></td>
		      <td><?php echo $dados['telefone']; ?></td>
		      <td><?php echo $dados['celular']; ?></td> 
		      <td><?php echo $dados['cep']; ?></td>
		      <td><?php echo $dados['bi']; ?></td>
		      <td><?php echo $dados['nif']; ?></td>
		      <td><?php echo $dados['salario']; ?></td>
		      <td><?php echo $dados['carta']; ?></td>
		      <td><?php echo $dados['passaporte']; ?></td>		      
		      <td><?php echo $dados['carro']; ?></td>
		      <td><a href="ed.php" class=""><i class="bi bi-pencil-fill"></i></a></td>
			 <td><a href="#" class=""><i class="bi bi-trash-fill"></i></a></td>
		    </tr>
		    <?php 
		    endwhile;
		    else:?>
		    <tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				</tr>
				<?php
				endif;
				?>		  
		  </tbody>
		</table>
	</div>
<?php include_once 'includes/footer.php';  ?>