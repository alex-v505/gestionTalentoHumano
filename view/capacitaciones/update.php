<?php  include '../template/header.php'?>
<?php  include '../../controller/capacitacion/update.php'?>
<!-- Main content -->
<section class="content">
<?php $row = $result->fetch_assoc() ?>
    <div class="row">
        <div class="container p-3">
            <b>Registrar capacitación</b>
            <form class="row g-3 needs-validation" action='../../controller/capacitacion/update.php' method="POST"
                novalidate>
                <div class="col-md-6">
                    <label for="id_capa" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_capa" name="id_capa" aria-describedby="emailHelp"
                        value = "<?php echo $row['id_capa']?>"required>
                    <div class="invalid-feedback">
                    Escriba un ID.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="nombre_capa" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre_capa" name="nombre_capa" value = "<?php echo $row['nombre_capa']?>" required>
                    <div class="invalid-feedback">
                    Escriba un nombre
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tipo_capa" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="tipo_capa" name="tipo_capa" value = "<?php echo $row['tipo_capa']?>" required>
                    <div class="invalid-feedback">
                    Escriba un tipo.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tiempo_capa" class="form-label">Tiempo</label>
                    <input type="number" class="form-control" id="tiempo_capa" name="tiempo_capa" value = "<?php echo $row['tiempo_capa']?>" required>
                    <div class="invalid-feedback">
                    Escriba un tiempo.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fecha_inicio_capa" class="form-label">Fecha de inicio</label>
                    <input type="date" class="form-control" id="fecha_inicio_capa" name="fecha_inicio_capa" value = "<?php echo $row['fecha_inicio_capa']?>" required>
                    <div class="invalid-feedback">
                    Seleccione una fecha de inicio.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fecha_fin_capa" class="form-label">Fecha de cierre</label>
                    <input type="date" class="form-control" id="fecha_fin_capa" name="fecha_fin_capa" value = "<?php echo $row['fecha_fin_capa']?>" required>
                    <div class="invalid-feedback">
                    Seleccione una fecha de cierre.
                    </div>
                </div>

                <div class="col-12">
                <input type="hidden" id="codigo_capa" name="codigo_capa" value="<?php echo $row['codigo_capa'];?>">
                    <br><button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
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