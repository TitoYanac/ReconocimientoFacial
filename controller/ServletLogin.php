<?php
	$username = $_POST['id'];
	$password = $_POST['pass'];
	if($username == 'tito' && $password == '123'){
		$usuario="10200176";

		header("Location: ../views/Administrador_Home.php?usuario=$usuario"); 
               
    }
    else if($username == 'ramiro' && $password == '123'){
		header('Location: ../views/Psicologia_Home.php?usuario=10200177'); 
    }else if($username == 'police' && $password == '123'){
		header('Location: ../views/Security_Home.php?usuario=10200178'); 
    }else{
    	header('Location: ../index.php?usuario=000'); 
    }

?>