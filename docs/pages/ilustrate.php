
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<!-- Documento css con estilos generales -->
		<link rel="stylesheet" href="../assets/design.css">
		<title>Ilústrate</title>
		<!-- Etiqueta style para los estilos en css -->
		<style>
			/*Regla para el título principal de la página*/
			h1{
				text-align: center;
				font-size: 50px;
				margin-bottom: 50px;
				color: black;
			}
			/*Regla para los titulos del los cuadros de la pagina*/
			.titu{
				text-align: center;
				font-weight: bold;
				font-size: 30px;
			}
			/*Regla que aplica al texto con la clase sub*/
			.sub{
				text-align: center;
				font-size: 25px;
				font-family: Berlin Sans FB;
				color: #0B0B56;
				text-weight: bold;
			}
			/*Regla que aplica al texto de front-end*/
			.tx{
				text-align: justify;
				font-family: Dosis Light;
				font-size: 25px;
				border: 3px solid #1C1664;
				padding: 30px;
				background-color: #B1BDD7;¿
			}
			/*Regla que aplica a los h2 de la página*/
			h2{
				text-align: center;
				font-size: 40px;
				margin-bottom: 40px;
				margin-top: 30px;
				color: black;
			}
			
			
			
			/*Regla que aplica al url compartida*/
			.pag{
				text-align: center;
				font-size: 30px;
				border: 15px groove #4674D6;
				margin-left: 200px;
				margin-right: 200px;
				padding: 10px;
			}
			/*Regla que aplica al color del url compartida*/
			a{
				color: #1C1664;
			}
			/*Regla que da margen abajo del carousel*/
			.carousel{
				margin-top: 50px;
				margin-bottom: 50px;
			}
			/*Regla que aplica al fondo de la sección back-end*/
			.fondo{
				background-color: white;
				margin-bottom: 70px;								
			}
			/*Regla que aplica para alinear la sección de back-end*/
			.col{
				text-align:center;
			}
			/*Regla que aplica para el texto de la sección back-end*/
			.tex{
				text-align: center;
				font-family: Dosis Light;
				font-size: 23px;
				padding: 15px;
				color: black;
			}
			/*Regla que aplica para alinear la imagen de back-end*/
			.cen{
				text-align:center;
				padding-bottom: 20px;
			}
			/*Regla que aplica a la imagen incrustada*/
			.image{
				height: 350px;
			}

			/*SECCIÓN DEL TEXTO LUMINOSO*/
			
			/* Regla para dar estilo a la caja */
			.muestra{
				display: flex; /* Ayuda a que la caja tenga un comportamiento predecible y adaptable */
				justify-content: center;
				background: -webkit-radial-gradient(#0000FF, #0a0011); /* Da estilo al fondo en degradado de forma radial */
				margin-top: 50px;
				margin-bottom: 60px
			}
			/* Estilo a los span que estén dentro de la clase conten */
			.conten span {
				font-size: 120px;
				font-weight: bold;
				font-family: Berlin Sans FB;
				transition: all 500ms ease-in-out; /* Permite definir la transición entre los estados de un elemento. (hover) */
			}
			/* Da efecto gráfico con desnfoque (blur) antes de cada span (letra) */
			.conten span::before {
			  content: var(--l);
			  position: absolute;
			  filter: blur(15px);
			}
			/* Da estilo a la letra del span, y da efecto gráfico con desnfoque (blur) después de cada span (letra) */
			.conten span::after {
			  position: absolute;
			  height: 200%;
			  width: 300px;
			  top: 80%;
			  left: 0;
			  filter: blur(30px);
			  transform: rotateX(50deg);
			}
			
			/*Se da color a cada letra del span*/

			.conten span:nth-child(1) {
			  color: #00bef8;
			}
			.conten span:nth-child(2) {
			  color: #FF0040;
			}
			.conten span:nth-child(3) {
			  color: #ff4d00;
			}
			.conten span:nth-child(4) {
			  color: #ffe600;
			}
			.conten span:nth-child(5) {
			  color: #bb00ff;
			}
			.conten span:nth-child(6) {
			  color: #FA58D0;
			}
			.conten span:nth-child(7) {
			  color: #9A2EFE;
			}
			.conten span:nth-child(8) {
			  color: #40FF00;
			}
			.conten span:nth-child(9) {
			  color: #81F7F3
			}
			.conten span:nth-child(10) {
			  color: #ff0697;
			}

			
		</style>
	</head>
	<body>
		<?php require '../php/nav.php'?>
		
		<section> <!--Apertura de la etiqueta section, aplica para el body-->
			<div class="section1-1">
				<div class="section1-1-1">
					<h1>Ilústrate</h1> <!--Uso del encabezado de nivel 1-->
					
					<p class="titu">FRONT-END</p>
					
					<div class="container"> <!--Apertura de div que contiene los cuadros-->
						<div class="row row-cols-2">
							<div class="col">
								<span class="sub">HTML</span> <!-- Se usa la etiqueta span para dar un fomato diferente a los números -->
								<p class="tx">Es el lenguaje con el que se define el contenido de las páginas web. Se trata de un conjunto <!--Uso de la etiqueta párrafo-->
								de etiquetas que sirven para definir el texto y otros elementos que compondrán una página web, 
								como imágenes, listas, vídeos, etc.</p>
								<br>
							</div>
							<div class="col">
								<span class="sub">CSS</span> <!-- Se usa la etiqueta span para dar un fomato diferente a los números -->
								<p class="tx">Es lo que se denomina lenguaje de hojas de estilo en cascada y se usa para estilizar elementos 
								escritos en un lenguaje de marcado como HTML. CSS separa el contenido de la representación 
								visual del sitio.</p>
								<br>
							</div>
							<div class="col">
								<span class="sub">JavaScript</span> <!-- Se usa la etiqueta span para dar un fomato diferente a los números -->
								<p class="tx">Es el lenguaje de programación encargado de dotar de mayor interactividad y dinamismo a las 
								páginas web. No necesita de un compilador. El navegador lee directamente el código, sin necesidad 
								de terceros.</p>
								<br>
							</div>
							<div class="col">
								<span class="sub">Bootstrap </span> <!--Se usa la etiqueta span para dar un fomato diferente a los números -->
								<p class="tx">Es un framework de HTML, CSS y JS, que incluye funcionalidades responsivas para sitios 
								móviles. Permite crear sitios sencillos con una alta velocidad gracias a sus componentes 
								pre-diseñados.</p>
								<br>
							</div>
						</div>
					</div> <!--Cierre de la etiqueta div que contiene los cuadros-->
					
					
					
					
					<h2>Hecha un vistazo a lo que puedes lograr</h2> <!--Uso del encabezado de nivel 2-->
					
					<div>
						<a href="http://holisncv.atwebpages.com" target="_blank" title="Pagina"> <!--Incrustación de un link--> 
							<p class="pag">Página de uno de nuestros clientes</p> <!--Se asigna el nombre que recibirá el link-->
						</a>
					</div>
					<!-- Sección del texto luminoso -->
					<div class="muestra">
						<div class="conten">
						 <!-- Cada espan contiene una letra diferente -->
						  <span style="--l: 'H';">¡H</span>
						  <span style="--l: 'e';">e</span>
						  <span style="--l: 'l';">l</span>
						  <span style="--l: 'l';">l</span>
						  <span style="--l: 'o';">o </span>
						  <span style="--l: 'w';"> W</span>
						  <span style="--l: 'o';">o</span>
						  <span style="--l: 'r';">r</span>
						  <span style="--l: 'l';">l</span>
						  <span style="--l: 'd';">d!</span>
						</div>
					</div>
					
					<h2>Ejemplos de códigos sencillos</h2>
					
					<!-- Permite incurtar dos imágenes con un borde blanco -->
					<div class="container overflow-hidden">
						<div class="row gx-5">
							<div class="col">
								<div class="p-3 border bg-light">
									<img src="../img/ilustra/js.gif" alt="Funny image" class="d-block w-100" alt="Siguiente">
								</div>
							</div>
							<div class="col">
								<div class="p-3 border bg-light">
									<img src="../img/ilustra/java.jpg" class="d-block w-100" alt="Siguiente"
								</div>
							</div>
						</div>
					</div>
					
					<!--Uso de un formato para carousel-->
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/ilustra/result.jpg" class="d-block w-100" alt="Siguiente">
							</div>
							<div class="carousel-item">
								<img src="../img/ilustra/codigo.png" class="d-block w-100" alt="Siguiente">
							</div>
							<div class="carousel-item">
								<img src="../img/ilustra/ehtml.png" class="d-block w-100" alt="Siguiente">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					
					<div class="fondo"> <!--Apertura de div para dar formato a la sección de back-end-->
						<p class="tex">En está sección te compartimos información sobre el back-end pues es una parte importante del desarrollo web.</p>
						<p class="titu">BACK-END</p>
						<div class="container">
							<div class="row row-cols-2">
								<div class="col">
									<span class="sub">PHP</span> <!-- Se usa la etiqueta span para dar un fomato diferente a los números -->
									<p class="tx">Es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear 
									páginas web, favoreciendo la conexión entre los servidores y la interfaz de usuario.</p>
									<br>
								</div>
								<div class="col">
									<span class="sub">MySql</span> <!-- Se usa la etiqueta span para dar un fomato diferente a los números -->
									<p class="tx">Es un sistema de gestión de bases de datos que cuenta con una doble licencia.  Permite 
									crear y administrar bases de datos relacionales para trabajar con PHP. </p>
									<br>
								</div>
							</div>
						</div>
						<div class="cen">
							<img src="../img/ilustra/back.gif" alt= "Funny image" class="image">
						</div>
					</div>
				</div>
			</div>
		</section> <!--Cierre de la etiqueta section que aplca para el body-->
		
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