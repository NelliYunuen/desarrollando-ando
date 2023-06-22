
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- Documento de javascript con funciones para la galeria ocupada en la página -->
	<script src="../assets/jscript.js" type="text/javascript"></script>
	<!-- Documento css con estilos generales -->
	<link rel="stylesheet" href="../assets/design.css">
    <title>Cursos</title>
	<!-- Etiqueta style para los estilos en css -->
	<style>
		/*Regla que centra el carrousel*/
		.carrousel{
			text-align: center;
			margin-bottom: 70px;
		}
	
		/*Regla que da la posición a los recuadros con la class linea del tiempo*/
		.linea-tiempo{
			text-align: center;
			width: 800px;
			margin:auto;
			margin-bottom: 70px;
		}
		
		
		
		/*Regla que da formato a los titulos de cada recuadro*/
		.momento h2{
			margin: 10px;
			font-size: 30px;		
		}
		/*Regla que crea los cuadros de fondo*/
		.momento .descripcion{
			background-color: #eee;
			border-radius: 10px;
			padding: 5px;
			line-height: 250%;
		}
		/*Regla que aplica a los encabezados de nivel 3 de la página*/
		h3{
			text-align: center;
		}
		/*Regla que acomoda las imagenes dentro de la clase experts*/
		.experts{
			display: flex;
		}
		/*Regla que acomoda el texto*/
		.cont{
			text-align: center;
		}
		/*Regla que plica a las imagenes dentro de la clase cont*/
		.cont img{
			width: 80%;
			display: block;
			margin: 0 auto;
		}
		/* Regla que da estilo al contenedor div de la clase formulario-cursos */
		.formulario-cursos{
			margin: auto; /*Centrará al elemento section de acuerdo con el tamaño de la página*/
			width: 50%; /*Ancho del elemento section respecto al tamaño de la página*/
			padding: 20px;
			background-color: #FAFAFA;
			margin-top: 150px;
		}
		/* Regla que da formato al botón */
		.btn{
			margin-top: 20px;
			font-size: 19px;
			color: white;
			margin-top: 50px;
		}
	</style>
  </head>
  <body>
	
	<?php require '../php/nav.php' ?>
	
	<section>
		<div class="section1-1">
			<div class="section1-1-1">
				<h1>Cursos</h1> <!--Uso del encabezado de nivel 1-->
				
				<div class="carrousel"> <!--Apertura de div para contener el carrousel-->
					<div>
						<form>
							<input type="button" value="<<" onclick="atras()"> <!--Botón atras-->
							<img src="../img/cursos/foto1.png" id="foto" title="1"> <!--Referencia para las imagenes del carrousel-->
							<input type="button" value=">>" onclick="adelante()"> <!--Botón adelante-->
						</form>
					</div>
				</div> <!--Cierre de div que contiene el carrousel-->
				
				<div class="linea-tiempo"> <!--Apertura de div con clase linea de tiempo-->
					<div class="momento"> <!--Apertura de div con clase momento-->
						<h2>HTML</h2> <!--Uso del encabezado de nivel 2-->
						<div class="descripcion">
							<p class="forma">Aspectos a abordar: <!--Uso de la etiqueta emparejada texto-->
							<br>Editores
							<br>Estructura del documento
							<br>Etiquetas
							<br>Listas y tablas
							<br>Rutas y enlaces
							<br>Manejo de formularios
							<br>Contenido incrustrado
							<br>Secciones semánticas
							<br>Formularios</p>
						</div>
					</div>
					<div class="momento">
						<h2>CSS</h2>
						<div class="descripcion">
							<p class="forma">Aspectos a abordar:
							<br>Hojas de estilo
							<br>Estructura de las hojas de estilo
							<br>Propiedades CSS
							<br>Aplicación de CSS
							<br>Mecanismo en Cascada
							<br>CSS Avanzado
							<br>Selectores avanzados
							<br>Pseudo clases
							<br>Modelo de caja</p></p>
						</div>
					</div>
					<div class="momento">
						<h2>JavaScript</h2>
						<div class="descripcion">
							<p class="forma">Aspectos de abordar:
							<br>Introducción a JavaScript
							<br>Estándar de JavaScript
							<br>Modelo de Eventos
							<br>Interfaz gráfica
							<br>Carga de recursos
							<br>Foco de elemento
							<br>Elementos multimedia
							<br>Modelo de objetos de documento
							<br>Modelo de objetos</p></p>
						</div>
					</div>
					<div class="momento">
						<h2>Bootstrap</h2>
						<div class="descripcion">
							<p class="forma">Aspectos a abordar:
							<br>Introducción a Bootstrap
							<br>Referenciar bootstrap
							<br>Descarga, uso y modificación de sus archivos
							<br>Identificación del código correcto
							<br>Utilización de sus elementos</p></p>	
						</div>
					</div>
				</div> <!--Cierre de div que contiene la clase linea del tiempo-->
				
				<section class="contenedor" id="expertos"> <!--Apertura de section que contiene imágenes-->
					<h3>Expertos en:</h3><!--Uso del encabezado de nivel 3-->
					<section class="experts"> 
						<div class="cont"> <!--Apertura de div para contener la imagen-->
							<img src="../img/cursos/designer.png" alt="">
							<h4 class="nom">Diseño</h4> <!--Uso del encabezado de nivel 4-->
						</div> <!--Cierre de div-->
						<div class="cont">
							<img src="../img/cursos/presen.png" alt="">
							<h4 class="nom">Desarrollo</h4>
						</div>
						<div class="cont">
							<img src="../img/cursos/team.png" alt="">
							<h4 class="nom">Orientación</h4>
						</div>
					</section> 
				</section> <!--Cierre de section que contiene la imágens-->
				
				<div class="formulario-cursos">	
					<p>Envíanos tu correo y el curso que deseas aprender y te enviaremos informes</p>
					<form action="../php/catcurso.php" method="POST">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
							<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu correo electrónico con alguien más.</div>
						</div>
						<label class="form-label">¿Qué curso te gustría tomar?</label>
						<select name="cursos" class="form-select" aria-label="Default select example">
								
								<!-- script PHP para llenar dinámicamente el select de cursos -->
								
							<?php		// escapamos a código php
							
										// creamos la conexión a la base de datos
										
									// parámetros: servidor, usuario, contraseña, base de datos
								$cxn = new mysqli("localhost", "root", "", "learncoding");
								
								$qry = 'SELECT * FROM catcursos ORDER BY idCurso';	// cadena que representa al query 
								$Rec = $cxn->query($qry);			// ejecuta el query y devuelve una matriz con los registros coincidentes
								
								$tot = $Rec->num_rows - 1; 		// devuelve la cantidad de registros resultantes
								
								for ($i=0; $i <= $tot; $i++) {	// ciclo para recorrer los registros
									$Rec->data_seek($i);				// avanzo de registro
									$reg = $Rec->fetch_assoc();	// se obtiene el vector de datos del registro actual
									
										// Se crean dinámicamente los <option> del <select>
									echo '<option value="'.$reg['idCurso'].'">'.$reg['curso'].'</option>';
								} // Se cierra el for
							
							?>  <!-- Se cierra el script PHP -->
						</select>
						<button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
					</form>
				</div>	
			</div>
		</div>
	</section>
	
	<!-- Pie de página -->
	<footer>
		<!-- Se extraerá código html correspondiente al pie de página desde el archivo de footer.php -->
		<?php require '../php/footer.php'?>
		<!-- Derechos de autor -->
		<div class="copyright">&copy: 2021 LearnCoding, todos los derechos reservados.</div>
	</footer>
	<!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>