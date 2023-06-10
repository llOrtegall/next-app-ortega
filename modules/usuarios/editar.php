<?php
include "../../db.php";
if (isset($_GET['txtID'])) {
	$txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

	$sentencia = $conexcion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
	$sentencia->bindParam(":id", $txtID);
	$sentencia->execute();

	$registro = $sentencia->fetch(PDO::FETCH_LAZY);

	$usuario = $registro['usuario'];
	$password = $registro['password'];
	$correo = $registro['email'];
}

if ($_POST) {
	// print_r($_POST);
	//* Recolectamos la información
	$txtID = (isset($_POST['txtID']) ? $_POST['txtID'] : "");
	$usuario = (isset($_POST['usuario']) ? $_POST['usuario'] : "");
	$password = (isset($_POST['password']) ? $_POST['password'] : "");
	$correo = (isset($_POST['correo']) ? $_POST['correo'] : "");

	//*preparamos la insercción de datos
	$sentencia = $conexcion->prepare("UPDATE tbl_usuarios SET
		usuario=:usuario,
		password=:password,
		email=:correo
		WHERE id = :id
	");

	//* Asigna valores que tiene uso de variable
	$sentencia->bindParam(":usuario", $usuario);
	$sentencia->bindParam(":password", $password);
	$sentencia->bindParam(":correo", $correo);
	$sentencia->bindParam(":id", $txtID);
	$sentencia->execute();

	header("Location: index.php");
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
				<label for="txtID" class="form-label">ID</label>
				<input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID" placeholder="ID">
			</div>

			<div class="mb-3">
				<label for="usuario" class="form-label">Nombre Del Usuario</label>
				<input type="text" value="<?php echo $usuario; ?>" class="form-control" name="usuario" id="usuario" placeholder="usuario">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" value="<?php echo $password; ?>" class="form-control" name="password" id="password" placeholder="*********">
			</div>
			<div class="mb-3">
				<label for="correo" class="form-label">Correo:</label>
				<input type="email" value="<?php echo $correo; ?>" class="form-control" name="correo" id="correo" placeholder="correo@correo.com">
			</div>
			<button type="submit" class="btn btn-success">Actualizar</button>
			<a class="btn btn-primary" href="index.php" role="button">Cancelar</a>
		</form>
	</div>
</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>