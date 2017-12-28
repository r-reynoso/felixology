<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Iniciar sección</title>
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
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/prettyPhoto.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon1.png" ></link>

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
             <li><a href="index.html">Página Principal</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
         <li><a href="https://www.facebook.com/pages/Rayaera-Personal-Training-Network/489611624406124?ref=br_tf"><i class="fa fa-facebook"></i></a></li>
         <li><a href="http://instagram.com/rayaerarunner/"><i class="fa fa-instagram"></i></a></li>
         <li><a href="https://twitter.com/Rayaerapr"><i class="fa fa-twitter"></i></a></li>
         <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
      </ul>

   </header> <!-- Header End -->

   
    <!-- Informacion Personal
   ================================================== -->
   <section id="features">
      
      
         <div class="row add-bottom">
		 
			<form class="form-horizontal" action="php/dbiniciarseccion.php" method="post" enctype="multipart/form-data">
				
				<!-- Form Name -->
					<div class="row section-head">
						<h2>E-mail o Password invalido</h2>
					</div>
					
					<hr>
				
			
				<!-- Text input-->
				<div class="six columns add-bottom"> 
				
					<form class="form-horizontal">
						<fieldset>
						
						<!-- Text input-->
						<div class="form-group">
					  	  <label class="col-md-4 control-label" for="email">E-mail</label>  
					  	  <div class="col-md-4">
					      <input id="email" name="email" type="email" class="form-control input-md" required="">
					      </div>
					    </div>
						
						<!-- Password input-->
						<div class="form-group">
					      <label class="col-md-4 control-label" for="password">Password</label>
					      <div class="col-md-4">
					      <input id="password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos una letra mayúscula y minúscula, un número, un caracter especial y no menos de 8 caracteres." class="form-control input-md" required="">					    
					      </div>
					    </div>
						
						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="iniciar"></label>
						  <div class="col-md-4">
						    <button id="iniciar" name="iniciar" class="btn btn-primary">Iniciar</button>
						    <input type="reset" value="Borrar datos">
						  </div>
						</div>
						
						</fieldset>
										
					</form>
					
					<h3>¿Se te olvido la contraseña?<a href="recuperacionpw.php"> Haga un click aquí.</a></h3>                    
					<h3>¿No eres un usuario?<a href="registracion.php"> Favor de registrarse aquí.</a></h3>
														
 				</div>
 				
				<hr>
								
			</form>		
			
         </div>
         

   </section> <!-- Homepage Hero end -->

   
   <!-- Footer
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