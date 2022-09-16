<?php 
session_start();
//Conexao
require_once 'db_connect.php';
//Clear// responsavel por limpar codigos sql e xss
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;// toda a funcao que recebe dados tem que ter um retorno para mostrar o resultado
}  

if(isset($_POST['btn-enviar'])):
	$nome = clear($_POST['nome']);
	$email = clear($_POST['email']); 
	$idade = clear($_POST['idade']);
	$cidade = clear($_POST['cidade']);
	$telefone = clear($_POST['telefone']);
	$celular = clear($_POST['celular']);
	$cep = clear($_POST['cep']);
	$bi = clear($_POST['bi']);
	$nif = clear($_POST['nif']);
	$salario = clear($_POST['salario']);
	$carta = clear($_POST['carta']);
	$passaporte = clear($_POST['passaporte']);
	$carro = clear($_POST['carro']);
	

	$sql = "INSERT INTO people (nome, email, idade, cidade, telefone, celular, cep, bi, nif, salario, carta, passaporte, carro) VALUES ('$nome', '$email', '$idade', '$cidade', '$telefone', 
		'$celular', '$cep', '$bi', '$nif', '$salario', '$carta', '$passaporte', '$carro')";
	
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";		
		header('Location: ../index.php');
		//echo "Cadastrado com sucesso";
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
		///echo "Erro ao cadastrar";
		//var_dump($connect);
	endif;
	$_SESSION['mensagem'] = "Cadastrado com sucesso";		
		header('Location: ../index.php');
endif;