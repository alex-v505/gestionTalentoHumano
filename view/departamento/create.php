<?php  include '../template/header.php'?>
<?php  include '../../controller/departamento/create.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Departamento</b>
                </div>
            </div>
            <form action='../../controller/departamento/create.php' method="POST">
            <div class="mb-3 mt-3">
                <label for="id_dep" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_dep" name="id_dep" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="nombre_dep" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_dep" name="nombre_dep" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>