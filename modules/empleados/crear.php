<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<section class="container p-4 m-4">

	<form class="row" method="post" enctype="multipart/form-data">
		<div class="col">
			<div class="mb-3">
				<label for="primernombre" class="form-label">Primer Nombre</label>
				<input type="text" class="form-control" name="primernombre" id="primernombre">
			</div>
			<div class="mb-3">
				<label for="segundonombre" class="form-label">Segundo Nombre</label>
				<input type="text" class="form-control" name="segundonombre" id="segundonombre">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Foto</label>
				<input type="file" class="form-control" name="" id="">
			</div>
			<div class="mb-3">
				<label for="fechaingreso" class="form-label">Fecha De Ingreso</label>
				<input type="date" class="form-control" name="fechaingreso" id="fechaingreso">
			</div>
		</div>
		<div class="col">
			<div class="mb-3">
				<label for="primerapellido" class="form-label">Primer Apellido</label>
				<input type="text" class="form-control" name="primerapellido" id="primerapellido">
			</div>
			<div class="mb-3">
				<label for="segundoapellido" class="form-label">Segundo Apellido</label>
				<input type="text" class="form-control" name="segundoapellido" id="segundoapellido">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">CV(PDF)</label>
				<input type="file" class="form-control" name="" id="">
			</div>
			<div class="mb-3">
				<label for="idpuesto" class="form-label">Puesto:</label>
				<select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
					<option selected>Select one</option>
					<option value="">New Delhi</option>
					<option value="">Istanbul</option>
					<option value="">Jakarta</option>
				</select>
			</div>
		</div>


		<div class="row d-flex justify-content-evenly">
			<a name="" id="" class="col-4 btn btn-primary" href="index.php" role="button">Cancelar</a>
			<button type="submit" class="col-4 btn btn-success">Agregar Registro</button>
		</div>
	</form>
</section>


<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>