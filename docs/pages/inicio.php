
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<?php
	//Función que ayudará a que se muestre la página solamente cuando se haya iniciado sesión
	session_start();

	if(isset($_SESSION['usuario'])){
 ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<!-- Documento css con estilos generales -->
		<link rel="stylesheet" href="../assets/design.css">
		<title>Inicio</title>
		<!-- Etiqueta style para los estilos en css -->
		<style>

			/* Regla que posiciona los elementos de la barra de navegación a 550px respecto al lado izquierdo */
			nav ul{
				margin-left: 550px;
			}
			/* Da estilo al encabezado de nivel uno */
			h1{
				color: white;
				text-shadow: yellow 0 0 45px; /* Estilo luminoso */
			}
			/* Da estilo al encabezado de nivel 2 */
			h2{
				font-size: 40px;
				margin-top: 50px;
				filter: blur(1px); /* El texto tiene un blur de 1px */
				text-shadow: red 0 0 45px;
				color: white;
			}
			/* Alinea el texto de la clase section1-1 */
			.section1-1{
				text-align: center;
			}
			/* Da estilo a las imágenes que están dentro de la clase section1-1 */
			.section1-1 img{
				margin-top: 50px;
				width: 70%;
			}

		</style>
	</head>
	<!-- Cuerpo de la página web - Se agrega un fondo de tipo gif -->
	<body background="../img/fondo.gif">
	<!-- Barra de navegación (Con elementos porpios de esta página ) -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/desarrollando">Learn Coding</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarScroll">
					<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/desarrollando">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cursos.php">Cursos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ilustrate.php">Ilústrate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="beneficios.php">Beneficios</a>
						</li>
						<li class="nav-item cont">
							<a class="nav-link" href="contactos.php">Contáctanos</a>
						</li>
						<!-- Elemento para cerrar sesión el cual se dirigirá al documento salir.php que a su vex indicará que se cerrará sesión y ya no se podrá acceder a esta página -->
						<li class="nav-item inis">
							<a class="nav-link" href="../php/salir.php">Cerrar Sesión</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section>
			<!-- Sección de la página -->
			<div class="section1-1">
				<div class="section1-1-1">
					<h1>BIENVENIDO A TU CUENTA DE LEARN CODING</h1>
					<h2>¡Con nosotros aprenderás a crear páginas web inimaginables!</h2>
				</div> 
				<img src="../img/website.gif">
			</div>
		</section>
		<!-- Pie de página -->
		<footer id="contacto">
			<!-- Se extraerá código html correspondiente al pie de página desde el archivo de footer.php -->
			<?php require '../php/footer.php'?>
			</div>
			<!-- Derechos de autor -->
			<div class="copyright">&copy: 2021 LearnCoding, todos los derechos reservados.</div>
		</footer>
	</body>
</html>

<!-- Instrucción de php que indica que en caso de acceder a la página sin haber iniciado sesión se redigirá al archivo login.php -->
<?php
} else {
	header("location:login.php");
	}
 ?>
