
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
    <title>Comentarios</title>
	<!-- Etiqueta style para los estilos en css -->
	<style>
		/* Estilo de fondo*/
		body{
			background: linear-gradient(to right, #00F2608f, #0575e6a6), url("../img/comentarios/fondoo.jpg");
		}
		/* FORMATO BODY*/
		
		h1{
			margin-top: 70px;
			font-size: 35px;
			color: #fff;
			font-weight: bold;
		}
		img{
			width: 580px;
			margin-bottom: 40px;
		}
		section{
			text-align: center;
		}
		
	</style>
  </head>
  <body>
	<!-- Se extraerá código html correspondiente a la barra de navegación desde el archivo de nav.php -->
	<?php require '../php/nav.php'?>
	
	<section>
		<div class="section1-1">
			<h1>¿Que dicen nuestros clientes?</h1> <!--Uso del encabezado de nivel 1-->
			<!--Incrustación de imágenes-->
			<img src="../img/comentarios/tbrat.jpg">
			<img src="../img/comentarios/tsus.jpg">
			<img src="../img/comentarios/tbryan.jpg">
			<img src="../img/comentarios/tnelli.jpg">
			<img src="../img/comentarios/tkev.jpg">
			<img src="../img/comentarios/fs.jpg">
		</div>
	</section>
	
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