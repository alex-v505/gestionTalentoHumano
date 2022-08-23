<?php  include '../template/header.php'?>
<?php  include '../../controller/capacitacion/view.php'?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12 text-center">
            <p class="lead "><H3>Información de la Capacitación </H3></p>
            <?php
                        $row = $result->fetch_assoc();
                ?>
            <table class="table table-dark">
                <tbody>
                    <tr>
                        <th scope="row">Código</th>
                        <td><?php  echo $row['codigo_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Id</th>
                        <td><?php  echo $row['id_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['nombre_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo</th>
                        <td><?php  echo $row['tipo_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Tiempo</th>
                        <td><?php  echo $row['tiempo_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fecha de inicio</th>
                        <td><?php  echo $row['fecha_inicio_capa']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fecha de cierre</th>
                        <td><?php  echo $row['fecha_fin_capa']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
</section>
<!-- /.content -->
<?php  include '../template/footer.php'?>