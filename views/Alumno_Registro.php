<?php include 'Page_Header.php';?>

<section class="container">
  <div class="row">
    <form class="regAlumno" method="POST" action="controller/ServletLogin.php">
      <div class="input-group form-group">
        <div class="input-group-prepend">
          <span class="input-group-text">DNI</span>
        </div>
        <input type="text" class="form-control" placeholder="Ingrese DNI" name="dni" value="70446446">

      </div>
      <div class="input-group form-group">
        <div class="input-group-prepend">
        <span class="input-group-text">Subname</span>
        </div>
        <input type="text" class="form-control" placeholder="password" name="pass" value="123">
      </div>

      <div class="form-group">
        <input type="submit" value="Nuevo" class="btn float-right login_btn">
      </div>
    </form>
  </div>
</section>

<section class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</section>
<?php include 'Page_Footer.php';?>