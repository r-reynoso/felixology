<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();		
		
		//Database conection
		include('dbconnection.php');
		
		//Getting data from validacion.php
		$validacion = $_POST['validacion'];		
		
		//Getting random number from dbrecuperacionpw.php
		$randnumber = $_SESSION["randnumber"];				
		
		//Querry email, and password validation else error connection.		
		
		if ($validacion == $randnumber)
		{
			header('Location: /cambiopw.php');
		}
		 
		else
		{
			header('Location: /recuperacionpwerror.php');
		}
		
		$conn->close();
						
?>