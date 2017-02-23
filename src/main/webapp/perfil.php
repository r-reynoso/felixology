<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->


<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Tu perfil</title>
   <meta name="description" content="">  
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/alertify.default.css">
   <link rel="stylesheet" href="css/alertify.core.css">
   <link rel="stylesheet" href="css/alertify.bootstrap.css">
   
   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/fcalc.js"></script>
	<script src="js/alertify.js"></script>
	<script src="js/alertify.min.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon1.png" ></link>
	
   <!-- Style
   =================================================== -->
   
</head>

<body>
 
   <div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Header
   ================================================== -->
   <header>

      <div class="logo">
         <a class="smoothscroll" href="#hero"><img alt="" src="images/logo3.png"></a>
      </div>

      <nav id="nav-wrap">         
         
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
	     <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>         

         <ul id="nav" class="nav">
            <li><a href="php/salir.php">Salir</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
         <li><a href="https://www.facebook.com/pages/Rayaera-Personal-Training-Network/489611624406124?ref=br_tf"><i class="fa fa-facebook"></i></a></li>
         <li><a href="http://instagram.com/rayaerarunner/"><i class="fa fa-instagram"></i></a></li>
         <li><a href="https://twitter.com/Rayaerapr"><i class="fa fa-twitter"></i></a></li>
         <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
      </ul>

   </header> <!-- Header End -->
   
      
   <!-- Style Guide Section
   ================================================== -->
  
   <section id="styles" style="padding: 90px 0 72px; background: #fff;">
   	  <?php
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
		   	 
	        	
	        //Starting all of the variables connections in and out of this php page.
	        session_start();
	          
	        //Getting other value from other php file.
	        $value1 = $_SESSION['value1']; //value coming from dbiniciarseccion.php
	        $value9 = $_SESSION['value9']; //value coming from dbregistracion.php
	        $_SESSION["email"] = $value1;
	        setcookie('perfil', '');
	        
	  ?>  

      <div class="row section-head"> <!---->

         <h1>
         	<?php
         	     // query         		
	         	 $sql = "SELECT nombre, apellidopaterno, apellidomaterno, email FROM informacionpersonal WHERE email = '$value1' OR email = '$value9' ";
	         	 $result = $conn->query($sql);
         		 	
		         if ($result->num_rows > 0) {
		         	// output data of each row
		         	while($row = $result->fetch_assoc()) {
		         		echo $row["nombre"]. "  " . $row["apellidopaterno"]. "  " . $row["apellidomaterno"] ;
		         	}
		         } else {
		         	echo "No hay datos";
		         }
         	?>
         	
         </h1>

      </div> <!-- Row End-->

      <div class="row add-bottom">

      	<hr> 
 
        <div class="six columns add-bottom"> <!--lado izquerdo de la pantalla-->
       		<?php 
	       		// query
	       		
	       		$sql = "SELECT imagen, email FROM informacionpersonal WHERE email = '$value1' OR email = '$value9' ";
	       		$result = $conn->query($sql);
	       		 
	       		if ($result->num_rows > 0) {
	       			// output data of each row
	       			while($row = $result->fetch_assoc()) {
	       				echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagen'] ).'" width="200" height="200"/>';
	       			}
	       			 
	       			 
	       		} else {
	       			echo "No hay datos";
	       		}
       		
			?>
			
        </div>
        
        <div class="six columns right"> <!-- Lado dereco de la pantalla -->
	        <?php		        
		        // query
		        
		        $sql = "SELECT pies, pulgadas, peso, email FROM informacionpersonal WHERE email = '$value1' OR email = '$value9' ";
		        $result = $conn->query($sql);
		         
		        if ($result->num_rows > 0) {
		        	// output data of each row
		        	while($row = $result->fetch_assoc()) {
		        				        		
		        		$pies = $row["pies"];                    //Cojer data de la base de datos y enviarlo a una variable
		        		$pulgadas = $row["pulgadas"];
		        		$peso = $row["peso"];
		        		
		        		$altura = $pies * 12 + $pulgadas;		 //Calcular indice de masa corporal.
		        		$imc = ($peso / pow($altura,2)) * 703;
		        		$imcf = number_format((float)$imc,1);
		        		
		        		echo  " Medida = " . $row["pies"]. "' " . $row["pulgadas"]. "''  ". "<br>" . "Peso = ".  $row["peso"] . "<br>" . "Indice de masa corporal = " . $imcf . "<br> <br>" ;
		        		
		        	}
		        } else {
		        	echo "No hay datos";
		        }	        
		        session_destroy();
			    $conn->close();
			    
	        ?>	        
	          	
        </div> 
 
        <hr>
         
     </div> <!-- Row End-->

      
   </section> <!-- Style Guide Section End-->
   
   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">         

         <div class="six columns info">
         
			<img src="images/logo1.png"/>
			<p class="copyright">&copy; Rayaera.net. Todos los derechos reservados 2015.
			Diseño por <a title="Styleshout" href="http://www.styleshout.com/">Styleshout.</a>
			Fundada en el año 2009 por Félix López Santiago.
			</p>
		 			 	              
         </div>

         <div class="six columns right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Visítanos</h3>
                  <p>
                  Ave Ramirez de<br> 
                  Arellano Centro <br> 
                  Deportivo Torrimar<br>
                  Guaynabo Puerto Rico,<br>
                  00966.
                  </p>
               </div>

               <div class="columns">
                  <h3 class="social">Socializar</h3>
                  <ul>
                     <li><a href="https://www.facebook.com/pages/Rayaera-Personal-Training-Network/489611624406124?ref=br_tf">Facebook</a></li>
                     <li><a href="https://twitter.com/Rayaerapr">Twitter</a></li>
                     <li><a href="http://instagram.com/rayaerarunner/">Instagram</a></li>
                  </ul>
               </div>

               <div class="columns last">
                  <h3 class="contact">Contáctenos</h3>
                  <ul>
                    <li><a href="tel:787-349-7945">787-349-7945</a></li>
                    <li><a href="mailto:felixlopez@rayaera.net">felixlopez@rayaera.net</a></li>
                  </ul>
               </div>

            </div> <!-- Nested Row End -->

         </div>

         
		 	
         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#styles"><i class="icon-up-open"></i></a>
         </div>

      </div> <!-- Row End -->

   </footer> <!-- Footer End-->
   
   
   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/imagelightbox.js"></script>
   <script src="js/jquery.prettyPhoto.js"></script>   
   <script src="js/main.js"></script>

</body>

</html>
