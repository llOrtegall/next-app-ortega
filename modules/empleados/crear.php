<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">
    <div class="card-header">
        Datos Del Empleados
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" name="primernombre" id="primernombre">
            </div>

            <div class="mb-3">
                <label for="segundonombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" name="segundonombre" id="segundonombre">
            </div>

            <div class="mb-3">
                <label for="primerapellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" name="primerapellido" id="primerapellido">
            </div>

            <div class="mb-3">
                <label for="segundoapellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" name="segundoapellido" id="segundoapellido">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control" name="" id="">
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

            <div class="mb-3">
                <label for="fechaingreso" class="form-label">Fecha De Ingreso</label>
                <input type="date" class="form-control" name="fechaingreso" id="fechaingreso">
            </div>

            <button type="submit" class="btn btn-success">Agregar Registro</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>