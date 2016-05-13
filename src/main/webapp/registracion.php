<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<!-- Database connection script -->>
<?php
	 
		$servername = "10.30.84.161";
		$username = "rayaera";
		$password = "Maricela1765";		
		
		$conn = mysqli_connect($servername, $username, $password);              // Create connection
			
		if (!$conn)																// Check connection
		{
			echo "Did Not Connect successfully";
			die(" Connection failed: " . mysqli_connect_error());
		}
		
?>

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Registración</title>
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
		
			<form class="form-horizontal" action="upload.php" method="post">
			
							 						
				<fieldset>
				
				<!-- Form Name -->
					<div class="row section-head">
						<h2>Información Personal</h2>
					</div>
					
					<hr>
				
				
				<!-- Text input-->
				<div class="six columns add-bottom"> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
					  <div class="col-md-4">
					  <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
						
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidopaterno">Apellido Paterno</label>  
					  <div class="col-md-4">
					  <input id="apellidopaterno" name="apellidopaterno" type="text" placeholder="" class="form-control input-md" required="">
						
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidomaterno">Apellido Materno</label>  
					  <div class="col-md-4">
					  <input id="apellidomaterno" name="apellidomaterno" type="text" placeholder="" class="form-control input-md" required="">
						
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="genero">Genero</label>
					  <div class="col-md-4">
						<select id="genero" name="genero" class="form-control">
						  <option value="1">Masculino</option>
						  <option value="2">Femenino</option>
						</select>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fechanacimiento">Fecha Nacimiento</label>  
					  <div class="col-md-4">
					  <input id="fechanacimiento" name="fechanacimiento" type="text" placeholder="" class="form-control input-md" required="">
						
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estatura">Estatura</label>  
					  <div class="col-md-4">
					  <span class="help-block">Pies:</span>
					  <input id="pies" name="pies" type="text" placeholder="" class="form-control input-md" required="">
					  <span class="help-block">Pulgada:</span>
					  <input id="pulgada" name="pulgada" type="text" placeholder="" class="form-control input-md" required="">					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="peso">Peso</label>  
					  <div class="col-md-4">
					  <span class="help-block">Libras:</span>
					  <input id="peso" name="peso" type="text" placeholder="" class="form-control input-md" required="">
					  </div>
					</div>
					
					<!-- Textarea -->
					<div class="form-group">
  					  <label class="col-md-4 control-label" for="metas">¿Cuál es tu meta de mejoramiento físico?</label>
  					  <div class="col-md-4">                     
   					  <textarea class="form-control" id="metas" name="metas"></textarea>
  					  </div>
					</div>
										
				</div>
				
				<div class="six columns add-bottom">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">E-mail</label>  
					  <div class="col-md-4">
					  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Password</label>
					  <div class="col-md-4">
					    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
					  <div class="col-md-4">
					  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="direccion">Dirección Física</label>  
					  <div class="col-md-4">
					  <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="pueblo">Pueblo</label>
					  <div class="col-md-4">
					    <select id="pueblo" name="pueblo" class="form-control">
					      <option value="1">Adjuntas</option>
					      <option value="2">Aguada</option>
					      <option value="3">Aguadilla</option>
					      <option value="4">Aguas Buenas</option>
					      <option value="5">Aibonito</option>
					      <option value="6">Añasco</option>
					      <option value="7">Arecibo</option>
					      <option value="8">Arroyo</option>
					      <option value="9">Barceloneta</option>
					      <option value="10">Barranquitas</option>
					      <option value="11">Bayamón</option>
					      <option value="12">Cabo Rojo</option>
					      <option value="13">Caguas</option>
					      <option value="14">Camuy</option>
					      <option value="15">Canóvanas</option>
					      <option value="16">Carolina</option>
					      <option value="17">Cataño</option>
					      <option value="18">Cayey</option>
					      <option value="19">Ceiba</option>
					      <option value="20">Ciales</option>
					      <option value="21">Cidra</option>
					      <option value="22">Coamo</option>
					      <option value="23">Comerío</option>
					      <option value="24">Corozal</option>
					      <option value="25">Culebra</option>
					      <option value="26">Dorado</option>
					      <option value="27">Fajardo</option>
					      <option value="28">Florida</option>
					      <option value="29">Guánica</option>
					      <option value="30">Guayama</option>
					      <option value="31">Guayanilla</option>
					      <option value="32">Guaynabo</option>
					      <option value="33">Gurabo</option>
					      <option value="34">Hatillo</option>
					      <option value="35">Hormigueros</option>
					      <option value="36">Humacao</option>
					      <option value="37">Isabela</option>
					      <option value="38">Jayuya</option>
					      <option value="39">Juana Díaz</option>
					      <option value="40">Juncos</option>
					      <option value="41">Lajas</option>
					      <option value="42">Lares</option>
					      <option value="43">Las Marías</option>
					      <option value="44">Las Piedras</option>
					      <option value="45">Loíza</option>
					      <option value="46">Luquillo</option>
					      <option value="47">Manatí</option>
					      <option value="48">Maricao</option>
					      <option value="49">Maunabo</option>
					      <option value="50">Mayagüez</option>
					      <option value="51">Moca</option>
					      <option value="52">Morovis</option>
					      <option value="53">Naguabo</option>
					      <option value="54">Naranjito</option>
					      <option value="55">Orocovis</option>
					      <option value="56">Patillas</option>
					      <option value="57">Peñuelas</option>
					      <option value="58">Ponce</option>
					      <option value="59">Quebradillas</option>
					      <option value="60">Rincón</option>
					      <option value="61">Río Grande</option>
					      <option value="62">Sabana Grande</option>
					      <option value="63">Salinas</option>
					      <option value="64">San Germán</option>
					      <option value="65">San Juan</option>
					      <option value="66">San Lorenzo</option>
					      <option value="67">San Sebastián</option>
					      <option value="68">Santa Isabel</option>
					      <option value="69">Toa Alta</option>
					      <option value="70">Toa Baja</option>
					      <option value="71">Trujillo Alto</option>
					      <option value="72">Utuado</option>
					      <option value="73">Vega Alta</option>
					      <option value="74">Vega Baja</option>
					      <option value="75">Vieques</option>
					      <option value="76">Villalba</option>
					      <option value="77">Yabucoa</option>
					      <option value="78">Yauco</option>
					    </select>
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-4">
					    <select id="estado" name="estado" class="form-control">
					      <option value="1">Puerto Rico</option>
					    </select>
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="zipcode">Zip Code</label>  
					  <div class="col-md-4">
					  <input id="zipcode" name="zipcode" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>
									
					<!-- File Button --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="filebutton">Seleccionar Foto</label>
					  <div class="col-md-4">
					    <input type="file" id="" name="" accept="image/gif, image/jpeg, image/png, image/jpg, image/tif">
					  </div>
					</div>
					
					<br>
					<br>
					<br>
					<br>
														
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="singlebutton"></label>
					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" onClick="">Registrar</button>
					  </div>
					</div>
														
					<p>Al registrarse, usted está de acuerdo con los Términos de Servicio y Política de Privacidad,
					incluyendo Cookies Uso. Otros serán capaces de encontrar usted por correo electrónico o número
					de teléfono cuando proporcionado .</p>
					
				</div>
			
				
			</fieldset>
			
		    </form>
				
         </div>

	 

   </section> <!-- Homepage Hero end -->

   
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
            <a class="smoothscroll" title="Back to Top" href="#features"><i class="icon-up-open"></i></a>
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