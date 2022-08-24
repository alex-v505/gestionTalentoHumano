<?php  include '../template/header.php'?>
<?php  include '../../controller/sede/create.php'?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="container p-3">
            <H3>Registrar Sede</H3>
            <form class="row g-3 needs-validation" action='../../controller/sede/create.php' method="POST" novalidate>
                <div class="col-md-12">
                    <label for="nombre_sed" class="form-label">Nombre de sede</label>
                    <input type="text" class="form-control" id="nombre_sed" name="nombre_sed" required>
                    <div class="invalid-feedback">
                        Escriba un nombre de la sede.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="provincia_sed" class="form-label">Provincia de sede</label>
                    <input type="text" class="form-control" id="provincia_sed" name="provincia_sed" required>
                    <div class="invalid-feedback">
                        Escriba una provincia.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ciudad_sed" class="form-label">Ciudad de la sede</label>
                    <input type="text" class="form-control" id="ciudad_sed" name="ciudad_sed" required>
                    <div class="invalid-feedback">
                        Escriba una ciudad.
                    </div>
                </div>

                <div class="col-12">
                    <br><button type="submit" class="btn btn-success">Grabar</button>
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
})()
</script>
<!-- /.content -->
<?php  include '../template/footer.php'?>