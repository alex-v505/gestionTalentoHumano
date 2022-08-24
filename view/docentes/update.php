<?php include '../template/header.php' ?>
<?php include '../../controller/docentes/update.php'?>
<section class="content">
<?php $row = $result_doc->fetch_assoc() ?>
    <div class="container p-3">
        <h2>Nuevo Docente</h2>

        <form class="row g-3 needs-validation" action ="../../controller/docentes/update.php" method = "POST" novalidate>
            <div class="col-md-6">
                <label for="act_input" class="form-label">Carrera</label>
                <select class="form-select form-control" id="codigo_car" name="codigo_car" required>
                    <option selected disabled value="">Elija una carrera</option>
                    <?php
                    if ($result_car->num_rows > 0){
                        while($row_car = $result_car->fetch_assoc()) {
                            if($row["codigo_car"]==$row_car["codigo_car"]){
                            echo '<option selected name="codigo_car" value="'.$row_car["codigo_car"].'">'.$row_car["nombre_car"].'</option>';
                        }else{
                            echo '<option name="codigo_car" value="'.$row_car["codigo_car"].'">'.$row_car["nombre_car"].'</option>';
                        }
                    }
                }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione una carrera.
                </div>
            </div>
            <div class="col-md-6">
                <label for="pel_input" class="form-label">Capacitación</label>
                <select class="form-select form-control" id="codigo_capa" name="codigo_capa" required>
                    <option selected disabled value="">Elija una capacitación</option>
                    <?php
                    if ($result_capa->num_rows > 0){
                        while($row_capa = $result_capa->fetch_assoc()) {
                            if($row["codigo_capa"]==$row_capa["codigo_capa"]){
                            echo '<option selected name="codigo_capa" value="'.$row_capa["codigo_capa"].'">'.$row_capa["nombre_capa"].'</option>';
                        }else{
                            echo '<option name="codigo_capa" value="'.$row_capa["codigo_capa"].'">'.$row_capa["nombre_capa"].'</option>';
                        }
                    }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione una capacitación.
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="papel_input" class="form-label">Nombre</label>
                <input type="text" class="form-control " id="nombre_doc" name="nombre_doc" placeholder="Ingrese el nombre del docente" value ="<?php echo $row['nombre_doc']?>"required>
                <div  class="invalid-feedback">
                    Ingrese un nombre.
                </div>
            </div>
            <div class="col-md-6">
                <label for="papel_input" class="form-label">Apellido</label>
                <input type="text" class="form-control " id="apellido_doc" name="apellido_doc" placeholder="Ingrese el apellido del docente" value ="<?php echo $row['apellido_doc']?>" required>
                <div  class="invalid-feedback">
                    Ingrese un apellido.
                </div>
            </div>
            <div class="col-md-6">
                <label for="papel_input" class="form-label">ID</label>
                <input type="text" class="form-control " id="id_doc" name="id_doc" placeholder="Ingrese un ID" value ="<?php echo $row['id_doc']?>" required>
                <div  class="invalid-feedback">
                    Ingrese un ID.
                </div>
            </div>
            <div class="col-md-6">
                <label for="papel_input" class="form-label">Cedula</label>
                <input type="number" class="form-control " id="cedula_doc" name="cedula_doc" placeholder="Ingrese un número de cédula" value ="<?php echo $row['cedula_doc']?>" required>
                <div  class="invalid-feedback">
                    Ingrese una cédula de identidad.
                </div>
            </div>
            <div class="col-md-12">
                <label for="papel_input" class="form-label">Título</label>
                <input type="text" class="form-control " id="titulo_doc" name="titulo_doc" placeholder="Ingrese un título académico" value ="<?php echo $row['titulo_doc']?>" required>
                <div  class="invalid-feedback">
                    Ingrese un título académico.
                </div>
            </div>
            <div class="col-12">
            <input type="hidden" name="codigo_doc" value="<?php echo $row['codigo_doc'];?>">
                <br><button class="btn btn-primary" type="submit">Actualizar</button>
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