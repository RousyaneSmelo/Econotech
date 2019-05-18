<?php

	session_start();
	
	if($_SESSION['logou'] == 1) {
		
		include "menu.php";
		
		$servidor = mysqli_connect("localhost","root","","econotech");
		
		
		$email = $_POST['email'];
		$senha= $_POST['senha'];
		$empresa = $_POST['empresa'];
		$cnpj = $_POST['cnpj'];
		$dono = $_POST['dono'];
		$telefone = $_POST['telefone'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		
		$cadastrou = mysqli_query($servidor, "insert into cadastro ( empresa, cnpj, dono, telefone, endereco, cidade, estado,cep) 
		values ( '$email', '$senha', '$empresa', '$cnpj', '$dono', '$telefone', '$endereco', '$cidade', '$estado', '$cep')");
		$cadastrou = mysqli_query($servidor, "insert into usuarios ( login, senha) values ( '$email', '$senha')");
		
		if($cadastrou) {
			echo "<script>alert('Cadastro realizado com sucesso!')</script>";	
		}
		else {
			echo "<script>alert('Não foi possivel realizar seu cadastro!')</script>";
		}
	}
	else {
		header('Location: index.html');
	}

?>