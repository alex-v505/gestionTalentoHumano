<?php  include '../template/header.php'?>
<?php include '../../controller/docentes/view.php' ?>
<section class="content">
    <div>
        <H3>Eliminar </H3>
        <br><br>
        <div class="row">
        <div class="col-12 text-center">
            <p class="lead"><H3>Información del Docente</H3></p>
        
            <table class="table table-dark">
                <?php
            $row = $result->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $row['codigo_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">ID Docente</th>
                        <td><?php  echo $row['id_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Cédula</th>
                        <td><?php  echo $row['cedula_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['nombre_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Apellido</th>
                        <td><?php  echo $row['apellido_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Título</th>
                        <td><?php  echo $row['titulo_doc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Carrera</th>
                        <td><?php  echo $row['nombre_car']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Capacitación</th>
                        <td><?php  echo $row['nombre_capa']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <form action="../../controller/docentes/delete.php" method="post">
            <input type="hidden" name="codigo_doc value=" <?php echo $row['codigo_doc'];?>>
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
</section>
<?php  include '../template/footer.php'?>