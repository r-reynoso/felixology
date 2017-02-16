<?php

	session_start();
	unset($_SESSION);
	session_write_close();
	session_destroy();
	header('Location: /iniciarseccion.php');
	die;

?>