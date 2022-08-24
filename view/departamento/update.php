<?php  include '../template/header.php'?>
<?php include '../../controller/departamento/update.php' ?>
<section class="content">
    <?php $row = $result->fetch_assoc() ?>
    <div class="row">
        <div class="container p-3">
            <H3>Actualizar Departamento</H3>
            <form class="row g-3 needs-validation" action="../../controller/departamento/update.php" method='POST' novalidate>
            <div class="col-md-6">
                <label for="id_dep" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_dep" name="id_dep" aria-describedby="emailHelp" value = "<?php echo $row['id_dep']?>"required>
                <div class="invalid-feedback">
                    Escriba un ID.
                    </div>
            </div>
            <div class="col-md-6">
                <label for="nombre_dep" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_dep" name="nombre_dep" value = "<?php echo $row['nombre_dep']?>" required>
                <div class="invalid-feedback">
                    Escriba un nombre.
                    </div>
            </div>
                <div class="col-12">
                    <input type="hidden" id="codigo_dep" name="codigo_dep" value="<?php echo $row['codigo_dep'];?>">
                    <br><button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</section>
    <script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })() <
    </script>
    <?php  include '../template/footer.php'?>