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
                <label for="nombreCargo" class="form-label">Nombre Del Puesto</label>
                <input type="text" class="form-control" name="nombreCargo" id="nombreCargo" placeholder="cargo">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>



</div>

<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>