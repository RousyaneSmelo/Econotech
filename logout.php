<?php

	session_start();
	
	$_SESSION['logou'] = 0;
	
	session_destroy();
	
	header('Location: index.html');

?>