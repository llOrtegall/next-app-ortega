<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">
            Agregar Cargos</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Cargo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Programador Junior</td>
                        <td>
                            <input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar"> |
                            <input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Borrar">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>




<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>