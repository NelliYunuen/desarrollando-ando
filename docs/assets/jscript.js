
/* 
	ELABORADO POR:
	GARCÍA DE SANTIAGO SUSANA PAULINA
	PEÑA SEGUNDO NELLI YUNUEN
*/


/* INSTRUCCIONES PARA EL APARTADO DE GALERÍA EN LA PÁGINA cursos*/

function adelante(){
	
	var foto=document.getElementById("foto"); 
	var num = foto.title; //Declaración de la variable y le asignación de un valor
	if(num==4){ // Comparación de la variable
		num=1;
	}else 
		num++; // Incrementa el contador de la variable
	foto.title=num;
	foto.src="../img/cursos/foto"+num+".png"; //Da la dirección para encontrar el elemento
	}

function atras(){
	
	var foto=document.getElementById("foto");
	var num = foto.title; //Declaración de la variable y le asignación de un valor
	if(num==1){ // Comparación de la variable
		num=4;
	}else 
		num--; // Decrementa el contador de la variable
	foto.title=num;
	foto.src="../img/cursos/foto"+num+".png"; //Da la dirección para encontrar el elemnto
	}

