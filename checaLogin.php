<?php

	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	var_dump($login);
	var_dump($senha);
	
	$servidor = mysqli_connect("localhost","root","","econotech");
	
	$resultado = mysqli_query($servidor, "select * from usuarios where login = '$login' and senha = '$senha'");
	
	
	$numLinhas = mysqli_num_rows($resultado);
	var_dump($resultado);
	
	if($numLinhas != 0) {
		$_SESSION['logou'] = 1;
		header('Location: areacliente.html');
	}
	else {
		$_SESSION['logou'] = 0;
		header('Location: login.html');
	}

?>




