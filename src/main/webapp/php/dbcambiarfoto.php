<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
		//Database conection
		include('dbconnection.php');

		//Getting other value from other php file.		
		$value9 = $_SESSION["value9"]; //value coming from cambiarfoto.php	
						
		//Incert data into database	
		//Getting values form cambiarfoto.php		
		$value16 = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
				
		//Passing email value onto perfil.php for the query data selection.		
		$_SESSION["value9"] = $value9;		
		
		//Querry update data into database								
		$sql = "UPDATE informacionpersonal SET imagen = '$value16' WHERE email = '$value9'";
		
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