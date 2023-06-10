<?php
include("../../db.php");
if ($_POST) {
  print_r($_POST);

  //*Recolectamos los nombres
  $usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
  $password = (isset($_POST["password"]) ? $_POST["password"] : "");
  $correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");

  //* prepara para insertar registros
  $sentencia = $conexcion->prepare("INSERT INTO tbl_usuarios(id, usuario, password, email) VALUES(null, :usuario, :password, :correo)");

  //* Asigna que tienen use de :variable
  $sentencia->bindParam(":usuario", $usuario);
  $sentencia->bindParam(":password", $password);
  $sentencia->bindParam(":correo", $correo);
  $sentencia->execute();
}

?>

<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">
  <div class="card-header">
    Datos Del Usuarios
  </div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="usuario" class="form-label">Nombre Del Usuario</label>
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="*********">
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="correo" id="correo" placeholder="correo@correo.com">
      </div>
      <button type="submit" class="btn btn-success">Agregar</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>
  </div>
</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>