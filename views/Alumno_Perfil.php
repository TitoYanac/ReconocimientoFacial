<?php include 'Page_Header.php';?>
<section class="jumbotron text-dark">
	<div class="row ">
		<div class="col-md-6 perfil-container">
			<h3>Datos Personales</h3>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Código</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Apellido</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">10200176</th>
			      <td>Tito</td>
			      <td>Yánac</td>
			    </tr>
			  </tbody>
			</table>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Escuela</th>
			      <th scope="col">E-mail</th>
			      <th scope="col">Ciclo</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Software</td>
			      <td>titoyanac@gmail.com</td>
			      <td>ciclo8</td>
			    </tr>
			  </tbody>
			</table>
			<p class="col-md-12">Seleccione Rango:</p>


			<div class="row">
				<div class="col-4 select-outline">
					<select class="mdb-select md-form md-outline colorful-select dropdown-primary">
						<option value="" disabled selected>Ciclo</option>
						<?php For( $a = 1; $a <= 11; $a++ ) { ?>
						<option value="1">Ciclo <?php echo $a; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-4 select-outline">
					<select class="mdb-select md-form md-outline colorful-select dropdown-primary">
						<option value="" disabled selected>Semana</option>
						<?php For( $a = 1; $a <= 4; $a++ ) { ?>
						<option value="1">Semana <?php echo $a; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-4 select-outline">
					<select class="mdb-select md-form md-outline colorful-select dropdown-primary">
						<option value="" disabled selected>Dia </option>
						<?php For( $a = 0; $a <= 6; $a++ ) { ?>
							<option value="1">
								<?php 
									$dia = array("Lunes", "Martes", "Miercoles", "Jueves", "viernes", "Sábado", "Domingo");
									echo $dia[$a]; 
								?>
							</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-md-12">
				<a class="btn btn-dark btn-md" href="#" role="button">Mostrar Estadísticas</a>
			</div>
		</div>
		<div class="col-md-6"></div>
	</div>
</section>
<?php include 'Page_Footer.php';?>