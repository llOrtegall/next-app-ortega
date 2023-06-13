<?php
include("../../db.php");

//* Borrar Usuarios
if (isset($_GET['txtID'])) {
	$txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

	/*
	$sentencia = $conexcion->prepare("DELETE FROM tbl_empleados WHERE id=:id");
	$sentencia->bindParam(":id", $txtID);
	$sentencia->execute();
	header("Location: index.php");*/
}

$sentencia = $conexcion->prepare("SELECT *,
(SELECT nombrecargo FROM `tbl_puestos` WHERE tbl_puestos.id=tbl_empleados.idcargo limit 1) as puesto
FROM `tbl_empleados`");
$sentencia->execute();
$lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">

	<div class="card-header">
		<a name="" id="" class="btn btn-primary" href="crear.php" role="button">
			Agregar Registro</a>
	</div>

	<div class="card-body">
		<div class="table-responsive-sm">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nombre</th>
						<th scope="col">Foto</th>
						<th scope="col">CV</th>
						<th scope="col">Cargo</th>
						<th scope="col">Fecha De Ingreso</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($lista_tbl_empleados as $registro) { ?>
						<tr class="">
							<td><?php echo $registro['id'] ?></td>
							<td scope="row">
								<?php echo $registro['primernombre'] ?>
								<?php echo $registro['segundonombre'] ?>
								<?php echo $registro['primerapellido'] ?>
								<?php echo $registro['segundoapellido'] ?>
							</td>
							<td>
								<img class="img-fluid rounded" width="50" src="<?php echo $registro['foto'] ?>" alt="">
							</td>
							<td><?php echo $registro['cv'] ?></td>
							<td><?php echo $registro['puesto'] ?></td>
							<td><?php echo $registro['fechaingreso'] ?></td>
							<td>
								<a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
								|
								<a class="btn btn-success" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button">Editar</a>
								|
								<a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id']; ?>" role="button">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	</div>
</div>


<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>