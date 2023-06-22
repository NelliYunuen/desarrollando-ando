<?php

	/* 	ELABORADO POR:
		GARCÍA DE SANTIAGO SUSANA PAULINA
		PEÑA SEGUNDO NELLI YUNUEN			*/
	
	//instrucciones php para el registro de usuarios
	
	// Comprobación de los campos y asignación a las variables 
	if(isset($_POST['nombre'])) $vNom = $_POST['nombre']; else $vNom = 0;	
	if(isset($_POST['apellido'])) $vApe = $_POST['apellido']; else $vApe = 0;
	if(isset($_POST['email'])) $vEmail = $_POST['email']; else $vEmail = 0;
	if(isset($_POST['pass'])) $vPass = $_POST['pass']; else $vPass = 0;
	// Conexión a la base de datos
	$cxn = new mysqli("localhost", "root", "", "learncoding");
	
	if ($cxn->connect_errno) {
		//Si no se puede conectar a la base de datos se manda error
		echo "Error al conectar a la Base de Datos: (" . $cxn->connect_errno . ") " . $cxn->connect_error;
	}	//Comprobación para saber si los campos tienen contenido o están vacios
	else if (null==($_POST['email']) && null==($_POST['pass'])){
			//Si están vacios se enviará una alerta y se dirigirá a la página signup
			echo "<script>alert('Debe ingresar sus datos');window.location='../pages/signup.php'</script>";
	}else{
		// Se comprueba si no hay una cuenta registrada con el mismo email...
		$resultado=$cxn->query("SELECT EXISTS (SELECT * FROM usuarios WHERE email='$vEmail');");
		$row=mysqli_fetch_row($resultado);

		if ($row[0]=="1") {                 
			// ... En caso de ser verdadero, se envía una alerta y se envía a la página sign up de nuevo
			echo "<script type=text/javascript>alert('Ya existe una cuenta registrada con $vEmail');window.location='../pages/signup.php'</script>";
		}else{
			//Se encriptará la contraseña...
			$pass_fuerte = password_hash($vPass, PASSWORD_DEFAULT);
			// Se envian los datos ingresados a la base de datos
			$vQry = 'INSERT INTO usuarios (nombre, apellido, email, password) VALUES ("'.$vNom.'", "'.$vApe.'", "'.$vEmail.'", "'.$pass_fuerte.'")';
			}
			
			if(mysqli_query($cxn,$vQry)) {
				//Se envia una alerta de que el usuario ha sido registrado correctamente
				echo "<script>alert('Usuario $vNom correctamente registrado');window.location='../pages/inicio.php'</script>";
			}
			else {
				//Se envia una alerta de que el usuario no ha sido registrado correctamente
				echo 'Error al registrar al usuario ('.$cxn->errno.') '.$cxn->error;
				
			}
		}   		
?>


