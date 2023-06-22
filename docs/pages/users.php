
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<?php 
	//Función que ayudará a que se muestre la página solamente cuando se haya iniciado sesión
	session_start();

	if(isset($_SESSION['administrador'])){
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
		<title>Base de datos</title>
		<!-- Etiqueta style para los estilos en css -->
		<style>
			/* Da estilo al fondo de la página */
			body{
				background-color: #9BB7F4;
			}
			/* Regla que posiciona los elementos de la barra de navegación a 500px respecto al lado izquierdo */
			.nav-item{
				float: right;
				margin-left: 500px;
			}
			/* Modifica el tamaño de celda encabezado de la clase thi */
			.thi{
				width: 5%;
			}
			/* Alinea el texto de la clase tab al centro */
			.tab{
				text-align: center;
			}
			/* Da estilo a los encabezados */
			h1,h2{
				text-align:center;
				margin-bottom: 50px;
			}
		</style>
	</head>
	</body>
		<!-- Barra de navegación (Con elementos porpios de esta página ) -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/desarrollando">Learn Coding</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarScroll">
					<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						<!-- Elemento para cerrar sesión el cual se dirigirá al documento salir.php que a su vex indicará que se cerrará sesión y ya no se podrá acceder a esta página -->
						<li class="nav-item">
							<?php echo '<a href="../php/salir.php" class="btn btn-info">Salir del sistema</a>';?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<section>
			<div class="section1-1">
				<div class="section1-1-1">
					<h1>BIENVENIDO ADMINISTRADOR</h1>
					<br><br>
					<h2>Usuarios registrados hasta el momento</h2>
					<!-- Se escapará al código php para crear tablas que arrojen los datos de los usuarios registrados y usuarios que han pedido informes -->
					<?php
							// creamos la conexión a la base de datos
										
							// parámetros: servidor, usuario, contraseña, base de datos
							$cxn = new mysqli("localhost", "root", "", "learncoding");
							
							//Se recuperan los datos de la tabla usuarios ordenados ascendentemente por el idUser
							$query = 'SELECT * FROM usuarios ORDER BY idUser asc';
							$vRec = $cxn->query($query);
							if(!$cxn->query($query)) {
								echo 'Error al recuperar los datos ('.$cxn->errno.') '.$cxn->error;
							}
							else {
								//Creación de tabla de los usuarios registrados
								$tot = $vRec->num_rows - 1;
								
								echo '<table style="border: 3px groove red" border="2px" width="90%" align="center">';
								echo '<tr class="tab"><th class="thi">ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Contraseña</th></tr>';
								for ($i=0; $i <= $tot; $i++) { // creo dinámicamente las filas de la tabla
									$vRec->data_seek($i);
									$reg = $vRec->fetch_assoc();
									echo '<tr align="left" valign="center" height="5px">';
									echo '<td class="tab">'.$reg['idUser'].'</td>';
									echo '<td>'.$reg['nombre'].'</td>';
									echo '<td>'.$reg['apellido'].'</td>';
									echo '<td>'.$reg['email'].'</td>';
									echo '<td>'.$reg['password'].'</td>';
									echo '</tr>';
								}
								
								echo '</table>';
								echo '<br>';
								
							}
						
					?> 
					<br><br>
					<h2>Usuarios solicitando información de cursos</h2>
					<?php
						
							//Se recuperan los datos de la tabla usercurso ordenados ascendentemente por el idUser, además de recuperar los datos del campo curso de la tabla catcurso
							$vQry = 'SELECT * FROM usercurso,catcursos WHERE usercurso.idCurso=catcursos.idCurso ORDER BY idUser asc';
							$vRec = $cxn->query($vQry);
							if(!$cxn->query($vQry)) {
								echo 'Error al recuperar los datos ('.$cxn->errno.') '.$cxn->error;
							}
							else {
								//Creación de tabla de los usuarios que han pedido informes
								$tot = $vRec->num_rows - 1;
								
								echo '<table style="border: 3px groove orange" border="1px" width="70%" align="center">';
								echo '<tr class="tab"><th>ID</th><th>Email</th><th>Curso</th></tr>';
								for ($i=0; $i <= $tot; $i++) { // creo dinámicamente las filas de la tabla
									$vRec->data_seek($i);
									$reg = $vRec->fetch_assoc();
									echo '<tr align="center" valign="center" height="5px">';
									echo '<td>'.$reg['idUser'].'</td>';
									echo '<td>'.$reg['email'].'</td>';
									echo '<td>'.$reg['curso'].'</td>';
									echo '</tr>';
								}
								
								echo '</table>';
								echo '<br>';
								
							}
						} else {
							// Instrucción de php que indica que en caso de acceder a la página sin haber iniciado sesión se redigirá al archivo login.php
						header("location:contactos.php#contacto");
						}
					?>	
					<br><br>
				</div>
			</div>
		</section>
	</body>
	<!-- Pie de página -->
	<footer>
		</div>	
		<!-- Derechos de autor -->
		<div class="copyright">&copy: 2021 LearnCoding, todos los derechos reservados.</div>
	</footer>
</html>