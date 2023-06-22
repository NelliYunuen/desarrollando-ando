
<!-- 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
-->

<!-- 
	Para acceder:
	usuario: admin	contraseña: admin
	usuario: Susi	contraseña: 12345
	usuario: Nelli	contraseña: abcde
-->

<?php
	//instrucciones php para el inicio de sesión de administradores (pie de página)
	
	//Indica el inicio de sesión
	session_start();
	//Conexión con la base de datos 
	$cxn = new mysqli("localhost", "root", "", "learncoding");
	//Comprobación de los campos y asignación a las variables
	if(isset($_POST['usuario'])) $vUser = $_POST['usuario']; else $vUser = 0;	
	if(isset($_POST['password'])) $vPass = $_POST['password']; else $vPass = 0;
	
	//Comprobación para cuando se de clic en el botón 
	if(isset($_POST['btnlogin'])){
		
		//Comprobación para saber si los campos tienen contenido o están vacios
		if (null==($_POST['usuario']) && null==($_POST['password'])) {
			//Si están vacios se enviará una alerta y se dirigirá a la página contáctanos
			echo "<script>alert('Debe ingresar sus datos');window.location='contactos.php'</script>";
		}else{
			//Si contiene datos se buscará el usuario ingresado, y su contraseña...
			$qryuser = mysqli_query($cxn, 'SELECT * FROM admins WHERE usuario = "'.$vUser.'"');
			$nr = mysqli_num_rows($qryuser);
			$searchpass = mysqli_fetch_array($qryuser);
			//.. para desencriptarla y comprobar que los datos sean igual y pueda acceder el administrador
			if(($nr == 1)&&(password_verify($vPass,$searchpass['password']))){
				//Se indica el usuario ha iniciado sesión y se enviará una alera de inicio de sesión correcto y se enviará a la página users a la que solo pueden acceder quienes hayan iniciado sesión
				$_SESSION['administrador']=$vUser;
				echo "<script>alert('Has iniciado sesión correctamente: $vUser');window.location='users.php'</script>";
			}
			else{
				//En caso de que los datos no coincidan se enviará una alerta de datos incorrectos y se dirigirá de nuevo a la página contáctanos
				echo "<script>alert('Usuario o contraseña incorrecto');window.location='contactos.php'</script>";
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
		<title>Contáctacnos</title>
		<!-- Etiqueta style para los estilos en css -->
		<style>
			/*Da color al fondo de la página*/
			body{
				background-color: #9BB7F4;
			}
			/*Regla que da formato a la clase con*/
			.con{
				font-size:25px;
				border: #794169 15px groove; 
				padding: 40px;
				margin: auto;
				margin-bottom: 80px;
				text-align: center;
				background-color: #F4E7F1;
			}
			/*Regla que aplica a los encabezados de nivel uno de la página*/
			h1{
				text-align: center;
				font-size: 35px;
				padding-bottom: 30px;
			}
			/*Regla que da la posición a los recuadros con la class linea del tiempo*/
			.linea-tiempo{
				width: 700px;
				margin:auto;
			}
			/*Regla que da formato a los recuadros con la class momento*/
			.momento{
				position: relative;
				width: 45%;
			}
			/*Regla que da formato al texto dentro del recuadro*/
			.forma{
				font-size: 20px;
				font-family: Book Antiqua;
			}
			/*Regla que ordena los cuadros del lado izquierdo*/
			.momento:nth-child(even) {
				left: 55%;
			}
			
			/*Regla que agrega los puntos que aparecen en el medio me los recuadros*/
			.momento::after{
				content: '';
				position: absolute;
				top: calc(50% + 10px);
				right: calc(-11.11% - 11.5px);
				height: 18px;
				width: 18px;
				background-color: #000;
				border-radius: 50%;
			}
			/*Regla que ordena los puntos para que queden al centro*/
			.momento:nth-child(even)::after{
				left: calc(-11.11% - 8.5px);
			}
			/*Regla que da formato a los titulos de cada recuadro*/
			.momento h2{
				margin: 10px 0px;
				font-size: 25px;
				text-align: center;
			}
			/*Regla que crea los cuadros de fondo*/
			.momento .descripcion{
				background-color: #eee;
				border-radius: 10px;
				padding: 5px;
				line-height: 300%;
			}
			/* Regla que da formato a los margenes y tamaño de letra del div de la clase formc */
			.formc{
				margin-top: 20px;
				margin-bottom: 20px;
				font-size: 18px;
			}
			/* Regla que da formato a la clase in */
			.in{
				background-color: #313E5F;
				width: 260px;
			}
			.in, .inp{
				border: 3px inset #191A6D;
				color: #fff;
			}
			/* Regla que da formato a la clase inp */
			.inp{
				background-color: #3D40D4;
			}
			
		</style>
	</head>
	<body>
		<!-- Se extraerá código html correspondiente a la barra de navegación desde el archivo de nav.php -->
		<?php require '../php/nav.php' ?>
  
	<section>
		<div class="section1-1">
			<div class="section1-1-1">
				<div class="con">
					<h1>¿Por qué debes ponerte en contacto con nostros?</h1>
					<p>Para conocer los precios
					<br>Para saber sobre los planes de estudio
					<br>Para conocer mas detalles sobre los cursos que ofrecemos
					<br>Para las dudas sobre la provacidad de tus datos</p>
					<img src="../img/contac/contac.png"> <!-- Incrustación de imagen -->
				</div>
			</div>
			<h1>Puedes ponerte en contacto con nosotros a través</h1>
			<!-- Contactos -->
			<div class="linea-tiempo">
				<div class="momento">
					<h2>Correos electrónicos</h2>
					<div class="descripcion">
						<p class="forma"><img src="../img/contac/gm.png" width="30"> estudionelli01@gmail.com 
						<br><img src="../img/contac/gm.png" width="30"> susipaugar@gmail.com</p>
					</div>
				</div>
				<div class="momento">
					<h2>Número de teléfono</h2>
					<div class="descripcion">
						<p class="forma"><img src="../img/contac/tf.png" width="30">722 237 2174</p>
					</div>
				</div>
				<div class="momento">
					<h2>Whatsapp</h2>
					<div class="descripcion">
						<p class="forma"><img src="../img/contac/wt.png" width="30">729 167 3828 
						<br><img src="../img/contac/wt.png" width="30">722 158 5342</p>
					</div>
				</div>
				<div class="momento">
					<h2>Redes Sociales</h2>
					<div class="descripcion">
						<p class="forma"><a href="#"><img src="../img/contac/fb.png" width="30"></a> Learn Coding
						<br><a href="#"><img src="../img/contac/tw.png" width="30"></a> @LearnCoding
						<br><a href="#"><img src="../img/contac/yt.png" width="30"></a> Learn Coding
						<br><a href="#"><img src="../img/contac/ig.png" width="30"></a> Learn Coding</p>	
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- Pie de página -->
	<footer>
		<!-- Se extraerá código html correspondiente al pie de página desde el archivo de footer.php -->
		<?php require '../php/footer.php'?>
		<!-- Apartado para formulario -->
		<div  class="formc">	
			<p>Ingreso de administradores</p>
			<!-- Formulario para inicio de sesión de los administradores -->
			<form action="contactos.php" method="POST">
			  <input name="usuario" type="text" class="in" placeholder="Ingrese nombre de usuario">
			  <input name="password" type="password" class="in" placeholder="Ingrese contraseña">
			  <input name="btnlogin" type="submit" class="inp" value="Acceder">
			</form>
		</div>	
		<!-- Derechos de autor -->
		<div class="copyright">&copy: 2021 LearnCoding, todos los derechos reservados.</div>
	</footer>
	<!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>