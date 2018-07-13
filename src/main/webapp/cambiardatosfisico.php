<?php 
    //Starting all of the variables connections in and out of this php page.
    session_start()
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--> <!--<![endif]-->

<html class="no-js" lang="en">

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
			 	<li><a href="perfilinfo.php">Perfil</a></li>
			 	<li><a href="ajustes.php">Ajustes</a></li>			 	
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
		    //Database conection
		        include('php/dbconnection.php');		  		
				
			//Getting other value from other php file.
				$value1 = $_SESSION["value1"]; //value coming from dbiniciarseccion.php
				$value9 = $_SESSION["value9"]; //value coming from dbregistracion.php
				$value3 = $_SESSION["value3"]; //value coming from dbiniciarseccion.php (admin profile)
				
				if ($value1 == null && $value9 == null) {         //select the value coming from dbiniciarseccion.php or dbregistracion.php
					$value = $value3;
				}elseif ($value9 == null && $value3 == null){
					$value = $value1;
				}else{
					$value = $value9;
				}				 
				
			//Passing email value onto other .php file to keep open the session.
				$_SESSION["value1"] = $value;
				$_SESSION["value9"] = $value;
		  ?>  

			  <div class="row section-head"> <!-- Nombre del usuario -->

				<h1>
				
					<?php
						 // query         		
						 $sql = "SELECT nombre, apellidopaterno, apellidomaterno, email FROM informacionpersonal WHERE email = '$value'";
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
						  
				<div id="Perfil" class="tabcontent"> 
			 
					<div class="six columns add-bottom"> <!--lado izquerdo de la pantalla-->
					<label>Cambiar Datos Personales</label>
						<?php 
							// query
							$sql = "SELECT genero, fechanacimiento, pies, pulgadas, peso, email FROM informacionpersonal WHERE email = '$value'";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0)
							{
								// output data of each row
								while($row = $result->fetch_assoc()) {
									
									$pies = $row["pies"];                    //Cojer data de la base de datos y enviarlo a una variable
									$pulgadas = $row["pulgadas"];
									$peso = $row["peso"];
										
									$altura = $pies * 12 + $pulgadas;		 //Calcular indice de masa corporal.
									$imc = ($peso / pow($altura,2)) * 703;
									$imcf = number_format((float)$imc,1);
										
									echo "Genero = ".  $row["genero"] . "<br>" . "Fecha de nacimiento = ".  $row["fechanacimiento"] . "<br>" .  " Medida = " . $row["pies"]. "' " . $row["pulgadas"]. "''  ". "<br>" . "Peso = ".  $row["peso"] . "<br>" . "Indice de masa corporal = " . $imcf . "<br> <br>" ;
								}
							}
							else
							{
								echo "No hay datos";
							}							
						?>		
							  
												
					</div>
					
							<?php  								
								//session_destroy();
								$conn->close();							
							?>	
					
					<div class="six columns right"> <!-- Lado derecho de la pantalla -->
					
						<form class="form-horizontal" action="php/dbdatospersonales.php" method="post" enctype="multipart/form-data">
						
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="genero">Genero</label>
							  <div class="col-md-4">
								<select id="genero" name="genero" class="form-control">
								  <option value="Masculino">Masculino</option>
								  <option value="Femenino">Femenino</option>
								</select>
							  </div>
							</div>
		
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="fechanacimiento">Fecha Nacimiento</label>  
							  <div class="col-md-4">
							  <input id="fechanacimiento" name="fechanacimiento" type="date" class="form-control input-md" required="">						
							  </div>
							</div>
						
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="estatura">Estatura</label>  
							  <div class="col-md-4">
							  <span class="help-block">Pies:</span>
							  <input id="pies" name="pies" type="number" min="3" max="7" class="form-control input-md" required="">
							  <span class="help-block">Pulgadas:</span>
							  <input id="pulgadas" name="pulgadas" type="number" min="0" max="11" class="form-control input-md" required="">					    
							  </div>
							</div>
		
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="peso">Peso</label>  
							  <div class="col-md-4">
							  <span class="help-block">Libras:</span>
							  <input id="peso" name="peso" type="number" min="20" max="500" class="form-control input-md" required="">
							  </div>
							</div>
							
							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="singlebutton"></label>
							  <div class="col-md-4">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="Submit">Cambiar</button>
							    <input type="reset" value="Borrar datos">
							  </div>
							</div>
							
						</form>
																									
					</div>
					
				</div>								   
					  		 
			  
	   </section> <!-- Style Guide Section End-->	  
	    
	   <!-- Footer va aqui
	   ================================================== -->	   
	   
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