<?php 
	
	/* 	ELABORADO POR:
		GARCÍA DE SANTIAGO SUSANA PAULINA
		PEÑA SEGUNDO NELLI YUNUEN			*/
	
	
	//Se indica que el usuario está saliendo y se direcciona al index
	
	session_start();

	unset($_SESSION['usuario']);
	unset($_SESSION['administrador']);

	header("location:../index.php");

 ?>