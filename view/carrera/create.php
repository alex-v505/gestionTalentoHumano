<?php include '../template/header.php' ?>
<?php include '../../controller/carrera/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Registrar Carrera</b>
            </div>
        </div>
        <form action='../../controller/carrera/create.php' method="POST" novalidate>

            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" id="id_car" name="id_car" required>
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_car" name="nombre_car" required>
                <div class="mb-3 mt-3">
                    <label class="form-label">Seleccione la sede</label>
                    <select name="id_dep" id="id_dep">
                        <?php
                        while($row = $result->fecth_assoc())
                        {
                            echo '<option value="'.$row['id_dep'].'">'.$row['nombre_sed'].'</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Seleccione el departamento</label>
                    <select name="id_dep" id="id_dep">
                        <?php
                        while($row = $result->fecth_assoc())
                        {
                            echo '<option value="'.$row['id_dep'].'">'.$row['nombre_dep'].'</option>';
                        }
                    ?>
                    </select>
                </div>
        </form>
    </div>
</div>
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
<?php  include '../template/footer.php'?>