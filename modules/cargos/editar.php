<?php
include "../../db.php";
if (isset($_GET['txtID'])) {
	$textID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

	$sentencia = $conexcion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
	$sentencia->bindParam(":id", $textID);
	$sentencia->execute();

	$registro = $sentencia->fetch(PDO::FETCH_LAZY);
	$nombrecargo = $registro['nombrecargo'];
}

if ($_POST) {

	$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";

	$nombrecargo = (isset($_POST["nombrecargo"]) ? $_POST["nombrecargo"] : "");
	$sentencia = $conexcion->prepare("UPDATE tbl_puestos SET nombrecargo=:nombrecargo WHERE id= :id");
	$sentencia->bindParam(":nombrecargo", $nombrecargo);
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
		Cargos
	</div>
	<div class="card-body">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="txtID" class="form-label">ID</label>
				<input type="text" value="<?php echo $textID; ?>" class="form-control" readonly name="txtID" id="txtID" placeholder="ID">
			</div>
			<div class="mb-3">
				<label for="nombrecargo" class="form-label">Nombre Del Cargo</label>
				<input type="text" value="<?php echo $nombrecargo; ?>" class="form-control" name="nombrecargo" id="nombrecargo" placeholder="cargo">
			</div>
			<button type="submit" class="btn btn-success">Actualizar</button>
			<a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
		</form>
	</div>

</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>