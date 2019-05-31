<?php
	$nombre = $_POST['nombre'];
	$usuario = $_GET['usuario'];
	if($nombre == 'tito' ){
		header("Location:  ../views/Alumno_Busqueda.php?usuario=$usuario&nombre=$nombre"); 
               
    }else{
    	header("Location:  ../views/Alumno_Busqueda.php?usuario=$usuario&nombre=000"); 
    }

?>