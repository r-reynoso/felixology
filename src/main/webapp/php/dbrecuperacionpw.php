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
		
		//Getting data from iniciacion.php
		$value1 = $_POST['email'];
		$value2 = $_POST['zipcode'];
		
		//Setting a random number for user email validation
		$randnumber = rand(10000,99999);
				
		//Passing randnumber value onto validacionpw.php for the email validation.
		$_SESSION["randnumber"] = $randnumber;
		$_SESSION["email"] = $value1;
			
		//Querry email, and password validation else error connection.
		$sql = "SELECT email, zipcode, password FROM informacionpersonal WHERE email = '$value1' AND zipcode = '$value2' ";
		$result = $conn->query($sql);
		
		if ($result -> num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				
				$to = "$value1";
				$subject = "Recuperacion Password";
				$message = "Numero de validacion es $randnumber.";	
				$headers = "From: Rayaera" . "\r\n" .	"CC: somebodyelse@example.com";
				
				mail($to,$subject,$message,$headers);

				header('Location: /validacionpw.php');
				
			}
		}
		 
		else
		{
			header('Location: /recuperacionpwerror.php');
		}
		
		$conn->close();
						
?>