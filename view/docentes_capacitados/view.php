<?php  include '../template/header.php'?>
<?php include '../../controller/docentes_capacitados/view.php' ?>
<section class="content">
    <div class="row">
        <div class="col-12 text-center">
            <p class="lead"><H3>Información del Docente Capacitado</H3></p>
        
            <table class="table table-dark">
                <?php
            $row = $result->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <th scope="row">Código</th>
                        <td><?php echo $row['codigo_dc']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['nombre_doc']?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php  include '../template/footer.php'?>