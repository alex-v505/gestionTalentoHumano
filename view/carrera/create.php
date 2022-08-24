<?php include '../template/header.php' ?>
<?php include '../../controller/carrera/create.php'?>
<section class="content">

    <div class="container p-3">
        <h2>Nueva Carrera</h2>

        <form class="row g-3 needs-validation" action ="../../controller/carrera/create.php" method = "POST" novalidate>
            <div class="col-md-6">
                <label for="act_input" class="form-label">Sede</label>
                <select class="form-select form-control" id="codigo_sed" name="codigo_sed" required>
                    <option selected disabled value="">Elija una sede</option>
                    <?php
                    if ($result_sed->num_rows > 0){
                        while($row_sed = $result_sed->fetch_assoc()) {
                            echo '<option name="codigo_sed" value="'.$row_sed["codigo_sed"].'">'.$row_sed["nombre_sed"].'</option>';
                        }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione una sede.
                </div>
            </div>
            <div class="col-md-6">
                <label for="pel_input" class="form-label">Departamento</label>
                <select class="form-select form-control" id="codigo_dep" name="codigo_dep" required>
                    <option selected disabled value="">Elija un departamento</option>
                    <?php
                    if ($result_dep->num_rows > 0){
                        while($row_dep = $result_dep->fetch_assoc()) {
                            echo '<option name="codigo_dep" value="'.$row_dep["codigo_dep"].'">'.$row_dep["nombre_dep"].'</option>';
                        }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione un departamento.
                </div>
            </div>
            <div class="col-md-6">
                <label for="papel_input" class="form-label">ID</label>
                <input type="text" class="form-control " id="id_car" name="id_car" placeholder="Ingrese un ID" required>
                <div  class="invalid-feedback">
                    Ingrese un ID.
                </div>
            </div>
            <div class="col-md-6">
                <label for="papel_input" class="form-label">Nombre</label>
                <input type="text" class="form-control " id="nombre_car" name="nombre_car" placeholder="Ingrese el nombre del departamento" required>
                <div  class="invalid-feedback">
                    Ingrese un nombre.
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