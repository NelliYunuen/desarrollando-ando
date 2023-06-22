<?php

	/* 	ELABORADO POR:
		GARCÍA DE SANTIAGO SUSANA PAULINA
		PEÑA SEGUNDO NELLI YUNUEN			*/
	
	//instrucciones php para la solicitud de informes
	
	// Comprobación de los campos y asignación a las variables 
	if(isset($_POST['email'])) $vEmail = $_POST['email']; else $vEmail = 0;
	if(isset($_POST['cursos'])) $vCurso = $_POST['cursos']; else $vCurso = 0;
	// Conexión a la base de datos
	$cxn = new mysqli("localhost", "root", "", "learncoding");
	
	if ($cxn->connect_errno) {
		//Si no se puede conectar a la base de datos se manda error
		echo "Error al conectar a la Base de Datos: (" . $cxn->connect_errno . ") " . $cxn->connect_error;
	}
	else {
		// Si se conecta correctamente a la base de datos se envian los datos ingresados
		$vQry = 'INSERT INTO usercurso (email, idCurso) VALUES ("'.$vEmail.'", '.$vCurso.')';
		//Se envia una alerta de datos enviados correctamente
		echo "<script>alert('Datos enviados correctamente');window.location='../pages/cursos.php'</script>";
		
		// Si no se pueden enviar los datos se enciará alerta
		if(!$cxn->query($vQry)) {
			echo 'Error al enviar datos ('.$cxn->errno.') '.$cxn->error;
		}
	}
?>