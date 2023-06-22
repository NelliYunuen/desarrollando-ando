
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
    <title>Inscribete</title>
	<!-- Etiqueta style para los estilos en css -->
	<style>
		/* Regla que da estilo al encabezado */
		h1{
			margin-top: 40px;
			font-size: 35px;
			text-align: center;
			margin-bottom: 50px;

		}
		/* Regla que da estilo a los párrafos */
		p{
			font-size: 20px;
		}
		/* Regla que da estilo al botón */
		.btn{
			margin-top: 20px;
			font-size: 19px;
			color: white;
			margin-bottom: 50px;
		}
		/* Regla que da estilo a la caja donde contiene el formulario */
		.section1-1-1{
			margin: auto; /*Centrará al elemento section de acuerdo con el tamaño de la página*/
			width: 50%; /*Ancho del elemento section respecto al tamaño de la página*/
			padding: 20px;;
			background-color: #FAFAFA;
			margin-top: 150px;
		}
		
	</style>
  </head>
  <body background="../img/1.jpg">
	
	<!-- Se extraerá código html correspondiente a la barra de navegación desde el archivo de nav.php -->
	<?php require '../php/nav.php' ?>

	<section>
		<div class="section1-1">
			<div class="section1-1-1">
				<h1>Inscribete y comienza a aprender</h1>
				<!-- Formulario para registrarse -->
				<form action="../php/regusers.php" method="post">
					<div class="row">
						<div class="col">
							<input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="First name">
						</div>
						<div class="col">
							<input name="apellido" type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu correo electrónico con alguien más.</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Contraseña</label>
						<input name="pass" type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
				</form>
				<p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
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