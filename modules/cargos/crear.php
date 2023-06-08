<!-- //* Consulta Base De Datos -->
<?php
include("../../db.php");

if ($_POST) {
	print_r($_POST);
	//* Recolectamos los datos del metodos POST
	$nombrecargo = (isset($_POST["nombrecargo"]) ? $_POST["nombrecargo"] : "");
	//* Preparar la insercción de los datos
	$sentencia = $conexcion->prepare("INSERT INTO tbl_puestos(id, nombrecargo) VALUES (null, :nombrecargo)");
	//* Asignando los valores que vienen del metodo POST (form)
	$sentencia->bindParam(":nombrecargo", $nombrecargo);
	$sentencia->execute();
	header("Location: index.php");
}
?>

<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">
	<div class="card-header">
		Cargos
	</div>
	<div class="card-body">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="nombrecargo" class="form-label">Nombre Del Puesto</label>
				<input type="text" class="form-control" name="nombrecargo" id="nombrecargo" placeholder="cargo">
			</div>
			<button type="submit" class="btn btn-success">Agregar</button>
			<a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
		</form>
	</div>

</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>