<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
		//Database conection
		include('dbconnection.php');

		//Getting other value from other php file.		
		$value9 = $_SESSION["value9"]; //value coming from cambiarnombre.php	
						
		//Incert data into database	
		//Getting values form cambiarnombre.php
		$value1 = $_POST['nombre'];
		$value2 = $_POST['apellidopaterno'];
		$value3 = $_POST['apellidomaterno'];
				
		//Passing email value onto perfil.php for the query data selection.		
		$_SESSION["value9"] = $value9;		
		
		//Querry update data into database								
		$sql = "UPDATE informacionpersonal SET nombre = '$value1', apellidopaterno = '$value2', apellidomaterno = '$value3' WHERE email = '$value9'";
		
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