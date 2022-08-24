<?php  include '../template/header.php'?>
<?php include '../../controller/sede/update.php' ?>
<section class="content">
    <?php $row = $result->fetch_assoc() ?>
    <div class="row">
        <div class="container p-3">
            <H3>Actualizar Sede</H3>
            <form class="row g-3 needs-validation" action="../../controller/sede/update.php" method='POST' novalidate>
                <div class="col-md-12">
                    <label for="nombre_sed" class="form-label">Nombre</label>
                    <input type="text" class="form-control" value="<?php echo $row["nombre_sed"]?>" id="nombre_sed"
                        name="nombre_sed" required>
                        <div class="invalid-feedback">
                        Escriba un nombre de la sede.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="provincia_sed" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="provincia_sed" name="provincia_sed"
                        value="<?php  echo $row['provincia_sed']?>" required>
                        <div class="invalid-feedback">
                        Escriba una provincia.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ciudad_sed" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad_sed" name="ciudad_sed"
                        value="<?php  echo $row['ciudad_sed']?>" required>
                        <div class="invalid-feedback">
                        Escriba una ciudad.
                    </div>
                </div>
                <div class="col-12">
                    <input type="hidden" id="codigo_sed" name="codigo_sed" value="<?php echo $row['codigo_sed'];?>">
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