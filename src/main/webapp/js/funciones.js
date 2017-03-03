function imc()
 		{
 			var piesForm = document.getElementById('pies').value; 						// busca valor del textbox
 			var pulgadasForm = document.getElementById('pulgadas').value;
 			var librasForm = document.getElementById('libras').value;
 																						// validar si hay campos y si son numericos
 				if (piesForm == null || piesForm == "" || pulgadasForm == null || pulgadasForm == "" || librasForm == null || librasForm == "")
	 				{
	 					alert1();                                                       // llamar funcion de alerta para llenar los camps
	 				}
 				else if (isNaN(piesForm) || isNaN(pulgadasForm) || isNaN(librasForm))
 					{
						alert2();                                                       // llamar funcion de alerta que los campos son numericos
 					}
	 			else
	 				{
			 			var pies = parseInt(piesForm);									// convertir valor in int
			 			var pulgadas = parseInt(pulgadasForm); 
			 			var libras = parseInt(librasForm);	
			 			
			 			var altura = pies * 12 + pulgadas;								// calcular altura en pulgadas
			 			var imcForm = libras * 703 / Math.pow(altura, 2);				// calcular imc
			 			var imc = imcForm.toFixed(1);
			 			
			  			alertify.alert("Tu indice de masa corporal es: " + imc);
			 			
	 				}
 				
 		}

function alert1()
		{
			alertify.alert("Tienes que llenar todo los campos!");
		}

function alert2()
		{
			alertify.alert("Todos los datos tiene que ser numericos!");
		}

/*function igchombre()
		{
			var librasForm = document.getElementById('libras').value;					// busca valor del textbox
			var cinturaFrom = document.getElementById('cintura').vaule;
																						// validar si hay campos y si son numericos
				if (librasForm == null || librasForm == "" || cinturaForm == null || cinturaForm == "")
					{
						alertify.alert("Tienes que llenar todo los campos!");
					}
				else if (isNaN(librasForm) || isNaN(cinturaForm))
					{
					alertify.alert("Todos los datos tiene que ser numericos!")
					}
				else
					{
		 			var libras = parseInt(librasForm);										// convertir valor in int
		 			var cintura = parseInt(cinturaForm); 
		 			
		 			var resultado1 = libras * 1.082 + 94.42;								// calcular igc para el hombre
		 			var resultado2 = cintura * 4.15;
					}						
						
		} */



