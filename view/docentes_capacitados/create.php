<?php include '../template/header.php' ?>
<?php include '../../controller/docentes_capacitados/create.php'?>
<section class="content">

    <div class="container p-3">
        <h2>Nuevo Docente Capacitado</h2>

        <form class="row g-3 needs-validation" action ="../../controller/docentes_capacitados/create.php" method = "POST" novalidate>
            <div class="col-md-6">
                <label for="act_input" class="form-label">Docente</label>
                <select class="form-select form-control" id="codigo_doc" name="codigo_doc" required>
                    <option selected disabled value="">Elija un docente</option>
                    <?php
                    if ($result_doc->num_rows > 0){
                        while($row_doc = $result_doc->fetch_assoc()) {
                            echo '<option name="codigo_doc" value="'.$row_doc["codigo_doc"].'">'.$row_doc["nombre_doc"].'</option>';
                        }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione un docente.
                </div>
            </div>
            
            
            <div class="col-12">
            <br><button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk p-1"></i>Grabar</button>
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
<?php include '../template/footer.php' ?>