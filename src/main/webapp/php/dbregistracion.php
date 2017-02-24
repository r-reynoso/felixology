<?php
		//Starting all of the variables connections in and out of this php page.
		session_start();
		
		// Database conection configuration
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";
		$database = "registracion";
		
		// database connection error handeler
		$conn = mysqli_connect($servername, $username, $password, $database);
			if (!$conn)
			{
				header('Location: /errorconn.html');
				exit;
			}
						
		//Incert data into database					
		$value1 = $_POST['nombre'];
		$value2 = $_POST['apellidopaterno'];
		$value3 = $_POST['apellidomaterno'];
		$value4 = $_POST['genero'];
		$value5 = $_POST['fechanacimiento'];
		$value6 = $_POST['pies'];
		$value7 = $_POST['pulgadas'];
		$value8 = $_POST['peso'];
		$value9 = $_POST['email'];
		$value10 = md5($_POST['password']);
		$value11 = $_POST['telefono'];
		$value12 = $_POST['direccion'];
		$value13 = $_POST['pueblo'];
		$value14 = $_POST['estado'];
		$value15 = $_POST['zipcode'];
		$value16 = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		
		//Passing email value onto perfil.php for the query data selection.		
		$_SESSION["value9"] = $value9;		
		
		//Querry incert data into database								
		$sql = "INSERT INTO informacionpersonal (nombre, apellidopaterno, apellidomaterno, genero, fechanacimiento, pies, pulgadas, peso,
		email, password, telefono, direccion, pueblo, estado, zipcode, imagen, fechacomienzo)
		VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11',
		'$value12', '$value13', '$value14', '$value15', '$value16', NOW() )";
		
		//Notification of record created successfully or not and if there is an existin record.
		
		if ($conn->query($sql) === TRUE)
			{
				header('Location: /perfil.php');
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