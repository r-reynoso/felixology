<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
		//Database conection
		include('dbconnection.php');

		//Getting other value from other php file.		
		$value9 = $_SESSION["value9"]; //value coming from cambiardatosfisico.php	
						
		//Incert data into database	
		//Getting values form cambiardatosfisico.php
		$value4 = $_POST['genero'];
		$value5 = $_POST['fechanacimiento'];
		$value6 = $_POST['pies'];
		$value7 = $_POST['pulgadas'];
		$value8 = $_POST['peso'];
				
		//Passing email value onto perfil.php for the query data selection.		
		$_SESSION["value9"] = $value9;		
		
		//Querry update data into database								
		$sql = "UPDATE informacionpersonal SET genero = '$value4', fechanacimiento = '$value5', pies = '$value6', pulgadas = '$value7', peso = '$value8' WHERE email = '$value9'";
		
		//Notification of record created successfully or not and if there is an existin record.
		
		if ($conn->query($sql) === TRUE)
			{
				header('Location: /perfilinfo.php');
			} 
				
		elseif($conn->errno == 1062) 
			{
				header('Location: /errordupli.html');				
			}
		else	
			{
				header('Location: /errorconn.html');				
			}
		
		$conn->close();
						
?>