<?php
	//Starting all of the variables connections in and out of this php page.
	session_start();
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
	   <title>Rayaera Admin</title>
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
			
		  ?>  

			  <div class="row section-head"> <!-- Nombre del usuario -->

				<h1>
				
					<?php
						echo "Rayaera Admin";		
					?>
					
				</h1>

			  </div> <!-- Row End-->
				
			  <div class="row add-bottom">
			  
			  	<hr>				
						  
				<div id="Perfil" class="tabcontent"> 
			 
					<div class="six columns add-bottom"> <!--lado izquerdo de la pantalla-->
						<?php 
						echo "Title 1";
						?>						
					</div>
					
					<div class="six columns right"> <!-- Lado dereco de la pantalla -->
						<?php	        
						echo "Input 1";
						?>						
					</div>
					
				</div>
				
				<div id="Perfil" class="tabcontent"> 
			 
					<div class="six columns add-bottom"> <!--lado izquerdo de la pantalla-->
						<?php 
						echo "Title 2";
						?>						
					</div>
					
					<div class="six columns right"> <!-- Lado dereco de la pantalla -->
						<?php	        
														
							echo "Input 2";
							
							session_destroy();
							$conn->close();							
						?>						
					</div>
					
				</div>
								   
				<hr>		  		 
			  
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

