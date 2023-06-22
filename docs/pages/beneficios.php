
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
		<!-- Documento css con estilos generales -->
		<link rel="stylesheet" href="../assets/design.css">
		<title>Beneficios</title>
		<!-- Etiqueta style para los estilos en css -->
		<style>
			/*CUADRO 1*/
			/*Regla que se ocupa para dar estilo a un cuadro*/
			.container{
				border: 10px dotted #0B245D;;
				background-color: #DDF3FE;
			}
			/*Regla que aplica para el texto dentro del cuadro*/
			.texto-cuadro1{
				text-align: center;
				font-size: 25px;
				line-height: 200%;
				padding-top: 30px;
				padding-bottom: 30px;
			}
			/*Regla que aplica para la imagen dentro del cuadro*/
			.curs{
				height: 200px;
			}

			/*Regla que alinea la imagen*/
			.promocion{
				text-align: center;
				margin-top: 50px;
				height: 30%;
				margin-bottom: 50px;
			}
			/*Regla que aplica al texto del acoordion*/
			.accordion-button{
				font-size: 25px;
			}
		</style>
	</head>
	<body>
		<!-- Se extraerá código html correspondiente a la barra de navegación desde el archivo de nav.php -->
		<?php require '../php/nav.php'?>
		
		<section> <!--Apertura de la etiqueta section-->
			<div class="section1-1">
				<div class="section1-1-1">
					<h1>¿Qué beneficos obtienes al tomar nuestros cursos?</h1> <!--Uso del encabezado de nivel 1-->
					
					<div class="container"> <!--Apeertura de div con clase container-->
						<div class="col"> <!--Apertura de div para crear cuadro-->
							<p class="texto-cuadro1">Mentorías dadas por profesionales en grupo y en vivo <!--Uso de la etiqueta párrafo-->
							<br>Clases en Full HD para toda conexión
							<br>Repasos mediante desafíos verificados
							<br>Envío de diploma de certificación físico
							<br>Diploma de certificación digital
							<br>Apoyo en la realización de ejercicios
							<br>Flexibilidad de horarios
							<br>Elegir el formato de educación que deseas
							<br><img src="../img/beneficios/cur.gif" alt="Funny image" class="curs"> <!--Incrustación de gif-->
						</div>
					</div>
					
					<div class="promocion"> 
						<img src="../img/beneficios/promo.png"> <!--Incrustación de imagen-->
					</div>
					
					<h2>Preguntas frecuentes sobre los planes</h2> <!--Uso del encabezado de nivel 2-->
					
					<!--Uso de un formato para acordeon-->
					<div class="accordion" id="accordionExample"> 
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <!-- -->
									¿Ofrece prueba gratuita?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<strong>Puedes ver el primer tema de cada curso, tomando en cuenta que no puedes ver los ejercicios.</strong> 
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <!--Creación de botón-->
									¿Cuánto duran los cursos?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<strong>Tu eliges el ritmo al que quieres trabajar.</strong> <!--Uso de la etiqueta strong para resaltar el texto-->
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									¿Cúales son los métodos de pago?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<strong>Depósito bancario <br> Transferencia bancaria</strong> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section> <!--Cierre de la etiqueta section -->
		
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