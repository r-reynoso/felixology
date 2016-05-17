<!-- Database connection script -->>
<?php
		// Create connection
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";		
		$database = "registracion";
		
		// Check connection
		$conn = mysqli_connect($servername, $username, $password, $database);   
			
		if (!$conn)																
		{
			echo "Did Not Connect successfully";
			die(" Connection failed: " . mysqli_connect_error());
		}
		else
		{
			echo "Did Connect successfully!!!";
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
		$value10 = $_POST['password'];
		$value11 = $_POST['telefono'];
		$value12 = $_POST['direccion'];
		$value13 = $_POST['pueblo'];
		$value14 = $_POST['estado'];
		$value15 = $_POST['zipcode'];
		$value16 = $_POST['imagen'];
		
		$sql = "INSERT INTO informacionpersonal (nombre, apellidopaterno, apellidomaterno, genero, fechanacimiento, pies, pulgadas, peso,
		email, password, telefono, direccion, pueblo, estado, zipcode, imagen)
		VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11',
		'$value12', '$value13', '$value14', '$value15', '$value16')";
		
		//Notification of record created successfully or not
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
						
?>