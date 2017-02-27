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
		
		//Passing email value onto perfil.php for the query data selection.
		$_SESSION['value1'] = $value1;
			
		//Querry email, and password validation else error connection.
		$sql = "SELECT email, zipcode, password FROM informacionpersonal WHERE email = '$value1' AND zipcode = '$value2' ";
		$result = $conn->query($sql);
		
		if ($result -> num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				
				/*$pw = $row["password"];
				
				$to = "$value1";
				$subject = "Recuperacion Password";
				$message = 
				"
						
						
				";
				$headers = "From: Rayaera" . "\r\n" .	"CC: somebodyelse@example.com";
				
				mail($to,$subject,$message,$headers); */
				
				$to = "$value1";
				$subject = "Beautiful HTML Email using PHP by CodexWorld";
				
				$htmlContent = '
								    <html>
								    <head>
								        <title>Welcome to CodexWorld</title>
								    </head>
								    <body>
								        <h1>Thanks you for joining with us!</h1>
								        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
								            <tr>
								                <th>Name:</th><td>CodexWorld</td>
								            </tr>
								            <tr style="background-color: #e0e0e0;">
								                <th>Email:</th><td>contact@codexworld.com</td>
								            </tr>
								            <tr>
								                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td>
								            </tr>
								        </table>
								    </body>
								    </html>
								';
				
				// Set content-type header for sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				// Additional headers
				$headers .= 'From: CodexWorld<sender@example.com>' . "\r\n";
				$headers .= 'Cc: welcome@example.com' . "\r\n";
				$headers .= 'Bcc: welcome2@example.com' . "\r\n";
				
				// Send email
				if(mail($to,$subject,$htmlContent,$headers)):
				$successMsg = 'Email has sent successfully.';
				else:
				$errorMsg = 'Email sending fail.';
				endif;
				
			}
		}
		 
		else
		{
			header('Location: /recuperacionpwerror.php');
		}
		
		$conn->close();
						
?>