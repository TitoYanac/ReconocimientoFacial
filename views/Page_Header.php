<? 
$usuario=$_GET["usuario"]; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio de Sesiòn</title>
  <!-- Agregando Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Agregando Estilos propios -->
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img id="logo" src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php?cdG=000">Desconectar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Psicologia_Perfil.php?cdG=10200176">mi Perfil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Perfil de alumnos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Alumno_Registro.php?cdG=10200176">Registrar Alumno</a>
            <a class="dropdown-item" href="#">Revisar Estados de Ánimo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Imprimir Reportes</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CÁMARA</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="POST" action="../controller/ServletBusqueda.php?usuario=$usuario">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" name="nombre">
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar Alumno">
      </form>
    </div>
  </nav>

