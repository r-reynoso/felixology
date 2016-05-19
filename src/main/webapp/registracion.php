<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

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
		
			<form class="form-horizontal" action="php/dbregistracion.php" method="post">
			
							 						
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
					  <input id="nombre" name="nombre" type="text" class="form-control input-md" required="">
						
					  </div>
					</div>                                    

	  				<!-- Text input-->               
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidopaterno">Apellido Paterno</label>
					  <div class="col-md-4">
					  <input id="apellidopaterno" name="apellidopaterno" type="text" class="form-control input-md" required="">
						
					  </div>
					</div> 

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidomaterno">Apellido Materno</label>  
					  <div class="col-md-4">
					  <input id="apellidomaterno" name="apellidomaterno" type="text" class="form-control input-md" required="">
						
					  </div>
					</div>

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
					  <input id="fechanacimiento" name="fechanacimiento" type="text" class="form-control input-md" required="">
						
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estatura">Estatura</label>  
					  <div class="col-md-4">
					  <span class="help-block">Pies:</span>
					  <input id="pies" name="pies" type="text" class="form-control input-md" required="">
					  <span class="help-block">Pulgadas:</span>
					  <input id="pulgadas" name="pulgadas" type="text" class="form-control input-md" required="">					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="peso">Peso</label>  
					  <div class="col-md-4">
					  <span class="help-block">Libras:</span>
					  <input id="peso" name="peso" type="text" class="form-control input-md" required="">
					  </div>
					</div>
					
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
					    <input id="password" name="password" type="password" class="form-control input-md" required="">
					  </div>
					</div>
						
				</div>
				
    			<div class="six columns add-bottom">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
					  <div class="col-md-4">
					  <input id="telefono" name="telefono" type="tel" placeholder="" class="form-control input-md" required="">
					    
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
					      <option value="Adjuntas">Adjuntas</option>
					      <option value="Aguada">Aguada</option>
					      <option value="Aguadilla">Aguadilla</option>
					      <option value="Aguas Buenas">Aguas Buenas</option>
					      <option value="Aibonito">Aibonito</option>
					      <option value="Añasco">Añasco</option>
					      <option value="Arecibo">Arecibo</option>
					      <option value="Arroyo">Arroyo</option>
					      <option value="Barceloneta">Barceloneta</option>
					      <option value="Barranquitas">Barranquitas</option>
					      <option value="Bayamón">Bayamón</option>
					      <option value="Cabo Rojo">Cabo Rojo</option>
					      <option value="Caguas">Caguas</option>
					      <option value="Camuy">Camuy</option>
					      <option value="Canóvanas">Canóvanas</option>
					      <option value="Carolina">Carolina</option>
					      <option value="Cataño">Cataño</option>
					      <option value="Cayey">Cayey</option>
					      <option value="Ceiba">Ceiba</option>
					      <option value="Ciales">Ciales</option>
					      <option value="Cidra">Cidra</option>
					      <option value="Coamo">Coamo</option>
					      <option value="Comerío">Comerío</option>
					      <option value="Corozal">Corozal</option>
					      <option value="Culebra">Culebra</option>
					      <option value="Dorado">Dorado</option>
					      <option value="Fajardo">Fajardo</option>
					      <option value="Florida">Florida</option>
					      <option value="Guánica">Guánica</option>
					      <option value="Guayama">Guayama</option>
					      <option value="Guayanilla">Guayanilla</option>
					      <option value="Guaynabo">Guaynabo</option>
					      <option value="Gurabo">Gurabo</option>
					      <option value="Hatillo">Hatillo</option>
					      <option value="Hormigueros">Hormigueros</option>
					      <option value="Humacao">Humacao</option>
					      <option value="Isabela">Isabela</option>
					      <option value="Jayuya">Jayuya</option>
					      <option value="Juana Díaz">Juana Díaz</option>
					      <option value="Juncos">Juncos</option>
					      <option value="Lajas">Lajas</option>
					      <option value="Lares">Lares</option>
					      <option value="Las Marías">Las Marías</option>
					      <option value="Las Piedras">Las Piedras</option>
					      <option value="Loíza">Loíza</option>
					      <option value="Luquillo">Luquillo</option>
					      <option value="Manatí">Manatí</option>
					      <option value="Maricao">Maricao</option>
					      <option value="Maunabo">Maunabo</option>
					      <option value="Mayagüez">Mayagüez</option>
					      <option value="Moca">Moca</option>
					      <option value="Morovis">Morovis</option>
					      <option value="Naguabo">Naguabo</option>
					      <option value="Naranjito">Naranjito</option>
					      <option value="Orocovis">Orocovis</option>
					      <option value="Patillas">Patillas</option>
					      <option value="Peñuelas">Peñuelas</option>
					      <option value="Ponce">Ponce</option>
					      <option value="Quebradillas">Quebradillas</option>
					      <option value="Rincón">Rincón</option>
					      <option value="Río Grande">Río Grande</option>
					      <option value="Sabana Grande">Sabana Grande</option>
					      <option value="Salinas">Salinas</option>
					      <option value="San Germán">San Germán</option>
					      <option value="San Juan">San Juan</option>
					      <option value="San Lorenzo">San Lorenzo</option>
					      <option value="San Sebastián">San Sebastián</option>
					      <option value="Santa Isabel">Santa Isabel</option>
					      <option value="Toa Alta">Toa Alta</option>
					      <option value="Toa Baja">Toa Baja</option>
					      <option value="Trujillo Alto">Trujillo Alto</option>
					      <option value="Utuado">Utuado</option>
					      <option value="Vega Alta">Vega Alta</option>
					      <option value="Vega Baja">Vega Baja</option>
					      <option value="Vieques">Vieques</option>
					      <option value="Villalba">Villalba</option>
					      <option value="Yabucoa">Yabucoa</option>
					      <option value="Yauco">Yauco</option>
					    </select>
					  </div>
					</div>
					
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-4">
					    <select id="estado" name="estado" class="form-control">
					      <option value="Puerto Rico">Puerto Rico</option>
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
					    <input type="file" name="imagen" onchange="loadFile(event)" accept="image/*" required="">
					    <img id="imagen"/>
						    <script>
								var loadFile = function(event)
								  {
								    var output = document.getElementById('imagen');
								    output.src = URL.createObjectURL(event.target.files[0]);
								  };
							</script>
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
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="Submit">Registrar</button>
					    <input type="reset" value="Borrar datos">
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