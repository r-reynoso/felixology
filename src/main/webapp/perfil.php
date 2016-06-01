<?php
// Create connection variables
$servername = "10.30.84.161";
$username = "rayaera";
$password = "Maricela1765";
$database = "registracion";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
	header('Location: /errorconn.html');
	exit;
}
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->


<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Perfil</title>
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
   =================================================== 
   
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
   
      
   <!-- Style Guide Section
   ================================================== -->
   <section id="styles" style="padding: 90px 0 72px; background: #fff;">

      <div class="row section-head">

         <h1>Índice de Masa Corporal</h1>

         <p>El Índice de Masa Corporal (IMC) provee una medida corpulencia 
         basada en la altura y el peso tanto para los hombres como para las mujeres. El IMC es la 
         relación entre el peso y el cuadrado de la altura, y se calcula dividiendo el peso en libras 
         por la altura en pulgadas al cuadrado (IMC = peso/altura2). </p>                 

      </div> <!-- Row End-->

      <div class="row add-bottom">

      	<hr> 

        <div class="six columns add-bottom">            <!--lado izquerdo de la pantalla PHP Lesson 36 - Displaying MySQL Records in a HTML Table -->
         
         	<?php 
	         	mysql_select_db("registracion",$conn);
	         	$sql = "SELECT nombre FROM informacionpersonal";
	         	$myData = mysql_query($sql, $conn); 
	         	while($record = mysql_fetch_array($myData)){
	         		echo $record['nombre'];
	         		echo "<br />";
	         	}
	         	
	         	mysql_close($conn);
         	?>
                                                   
        </div>
        
        <div class="six columns right">                  <!-- Lado dereco de la pantalla -->
        
        	<?php 
        	
        	
        	
        	
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
