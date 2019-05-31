<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio de Sesión</title>
  <!-- Agregando Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Agregando Estilos propios -->
  <link rel="stylesheet" type="text/css" href="views/css/estilos.css">
<body>
	<section class="loginrf">
		<div class="container ">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Login</h3>
						<div class="d-flex justify-content-end social_icon text-danger">
							
							<span><i class="fab fa-facebook-square "></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="controller/ServletLogin.php">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="username" name="id" value="tito">
								
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" placeholder="password" name="pass" value="123">
							</div>
							<div class="row align-items-center remember">
								<input type="checkbox">Recordar Usuario
							</div>
							<div class="form-group">
								<input type="submit" value="Login" class="btn float-right login_btn">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							No tienes una Cuenta?<a href="#">Registrate!</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Olvidó su Contraseña?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'Page_Footer.php';?>