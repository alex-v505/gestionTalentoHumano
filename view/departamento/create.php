<?php  include '../template/header.php'?>
<?php  include '../../controller/departamento/create.php'?>
<!-- Main content -->
<section class="content">
    <div class="container p-3">

        <b><H3>Registrar Departamento</H3></b>

        <form class="row g-3 needs-validation" action='../../controller/departamento/create.php' method="POST"
            novalidate>
            <div class="col-md-6">
                <label for="id_dep" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_dep" name="id_dep" aria-describedby="emailHelp" required>
                <div class="invalid-feedback">
                    Escriba un ID.
                    </div>
            </div>
            <div class="col-md-6">
                <label for="nombre_dep" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_dep" name="nombre_dep" required>
                <div class="invalid-feedback">
                    Escriba un nombre.
                    </div>
            </div>
            <div class="col-12">
                <br><button type="submit" class="btn btn-success">Grabar</button>
            </div>
        </form>
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