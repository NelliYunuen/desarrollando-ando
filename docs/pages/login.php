
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<?php
	//instrucciones php para el inicio de sesión del usuario
	
	//Indica el inicio de sesión
	session_start();
	//Conexión con la base de datos 
	$cxn = new mysqli("localhost", "root", "", "learncoding");
	//Comprobación de los campos y asignación a las variables
	if(isset($_POST['email'])) $vEmail = $_POST['email']; else $vEmail = 0;	
	if(isset($_POST['password'])) $vPass = $_POST['password']; else $vPass = 0;
	
	//Comprobación para cuando se de clic en el botón 
	if(isset($_POST['btnlogin'])){
		
		//Comprobación para saber si los campos tienen contenido o están vacios
		if (null==($_POST['email']) && null==($_POST['password'])) {
			//Si están vacios se enviará una alerta y se dirigirá a la página login
			echo "<script>alert('Debe ingresar sus datos');window.location='login.php'</script>";
		}else{
			//Si contiene datos se buscará el usuario ingresado, y su contraseña...
			$qryuser = mysqli_query($cxn, 'SELECT * FROM usuarios WHERE email = "'.$vEmail.'"');
			$nr = mysqli_num_rows($qryuser);
			$searchpass = mysqli_fetch_array($qryuser);
			//.. para desencriptarla y comprobar que los datos sean igual y pueda acceder el usuario
			if(($nr == 1)&&(password_verify($vPass,$searchpass['password']))){
				//Se indica el usuario ha iniciado sesión y se enviará una alera de inicio de sesión correcto y se enviará a la página inicio a la que solo pueden acceder quienes hayan iniciado sesión
				$_SESSION['usuario']=$vEmail;
				echo "<script>alert('Has iniciado sesión correctamente');window.location='inicio.php'</script>";
			}
			else{
				//En caso de que los datos no coincidan se enviará una alerta de datos incorrectos y se dirigirá de nuevo a la página login
				echo "<script>alert('Usuario o contraseña incorrecto');window.location='login.php'</script>";
			}
		}
	}
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
    <title>Iniciar sesión</title>
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
				<h1>Iniciar sesión</h1>
				<!-- Formulario de inicio de sesión -->
				<form action="login.php" method="post">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Contraseña</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<button name="btnlogin" type="submit" class="btn btn-primary">Inicia sesión</button>
				</form>
				<!-- En caso de no tener cuenta el usuario puede registrarse dando click en registrate -->
				<p>¿Todavía no tienes cuenta? <a href="signup.php">Registrate</a></p>
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