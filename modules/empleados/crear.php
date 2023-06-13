<?php
include("../../db.php");
if ($_POST) {

	$primernombre = (isset($_POST["primernombre"]) ? $_POST["primernombre"] : "");
	$segundonombre = (isset($_POST["segundonombre"]) ? $_POST["segundonombre"] : "");
	$primerapellido = (isset($_POST["primernombre"]) ? $_POST["primernombre"] : "");
	$segundoapellido = (isset($_POST["segundoapellido"]) ? $_POST["segundoapellido"] : "");

	$fechaingreso = (isset($_POST["fechaingreso"]) ? $_POST["fechaingreso"] : "");
	$idpuesto = (isset($_POST["idpuesto"]) ? $_POST["idpuesto"] : "");

	$foto = (isset($_FILES["foto"]["name"]) ? $_FILES["foto"]["name"] : "");
	$cv = (isset($_FILES["cv"]["name"]) ? $_FILES["cv"]["name"] : "");

	$sentencia = $conexcion->prepare("INSERT INTO `tbl_empleados` 
	(`id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `foto`, `cv`, `idcargo`, `fechaingreso`) 
	VALUES (NULL, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :foto, :cv, :idpuesto, :fechaingreso);");

	$sentencia->bindParam(":primernombre", $primernombre);
	$sentencia->bindParam(":segundonombre", $segundonombre);
	$sentencia->bindParam(":primerapellido", $primerapellido);
	$sentencia->bindParam(":segundoapellido", $segundoapellido);
	$sentencia->bindParam(":fechaingreso", $fechaingreso);
	$sentencia->bindParam(":idpuesto", $idpuesto);

	//* codigo para adjuntar foto
	$fecha_ = new DateTime();

	$nombre_archivo_foto = ($foto != '') ? $fecha_->getTimestamp() . "_" . $_FILES["foto"]["name"] : "";
	$tmp_foto = $_FILES["foto"]["tmp_name"];

	if ($tmp_foto != '') {
		move_uploaded_file($tmp_foto, "./" . $nombre_archivo_foto);
	}
	$sentencia->bindParam(":foto", $nombre_archivo_foto);

	//* codigo para adjutnar cv
	$nombre_archivo_cv = ($cv != '') ? $fecha_->getTimestamp() . "_" . $_FILES["cv"]["name"] : "";
	$tmp_cv = $_FILES["cv"]["tmp_name"];

	if ($tmp_cv != '') {
		move_uploaded_file($tmp_cv, "./" . $nombre_archivo_cv);
	}
	$sentencia->bindParam(":cv", $nombre_archivo_cv);

	$sentencia->execute();
	header("Location: index.php");
}

//* consulta de puestos
$sentencia = $conexcion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();
$lista_tbl_cargos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<section class="container p-4 m-4">

	<form method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="primerapellido" class="form-label">Primer Apellido</label>
			<input type="text" class="form-control" name="primerapellido" id="primerapellido">
		</div>
		<div class="mb-3">
			<label for="segundoapellido" class="form-label">Segundo Apellido</label>
			<input type="text" class="form-control" name="segundoapellido" id="segundoapellido">
		</div>
		<div class="mb-3">
			<label for="primernombre" class="form-label">Primer Nombre</label>
			<input type="text" class="form-control" name="primernombre" id="primernombre">
		</div>
		<div class="mb-3">
			<label for="segundonombre" class="form-label">Segundo Nombre</label>
			<input type="text" class="form-control" name="segundonombre" id="segundonombre">
		</div>
		<div class="mb-3">
			<label for="foto" class="form-label">Foto</label>
			<input type="file" class="form-control" name="foto" id="foto">
		</div>
		<div class="mb-3">
			<label for="cv" class="form-label">CV(PDF)</label>
			<input type="file" class="form-control" name="cv" id="cv">
		</div>
		<div class="mb-3">
			<label for="fechaingreso" class="form-label">Fecha De Ingreso</label>
			<input type="date" class="form-control" name="fechaingreso" id="fechaingreso">
		</div>
		<div class="mb-3">
			<label for="idpuesto" class="form-label">Puesto:</label>
			<select class="form-select form-select-sm" name="idpuesto" id="idpuesto">

				<?php foreach ($lista_tbl_cargos as $registro) { ?>
					<option value="<?php echo $registro['id'] ?>"><?php echo $registro['nombrecargo'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="row d-flex justify-content-evenly">
			<a name="" id="" class="col-4 btn btn-primary" href="index.php" role="button">Cancelar</a>
			<button type="submit" class="col-4 btn btn-success">Agregar Registro</button>
		</div>
	</form>
</section>


<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>