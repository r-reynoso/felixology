<?php

	session_start();
	unset($_SESSION['email']);	
	session_destroy($_SESSION['email']);
	header('Location: /iniciarseccion.php');
	
?>