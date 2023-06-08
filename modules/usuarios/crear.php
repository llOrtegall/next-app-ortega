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
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="" id="" placeholder="*********">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="" id="" placeholder="correo@correo.com">
      </div>
      <button type="submit" class="btn btn-success">Agregar</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>
  </div>
</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>