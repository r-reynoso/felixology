<?php

	session_start();
	unset($_SESSION["email"]);	
	session_destroy($_SESSION["email"]);
	setcookie('perfil', '', time()-300);
	header('Location: /iniciarseccion.php');
	
?>