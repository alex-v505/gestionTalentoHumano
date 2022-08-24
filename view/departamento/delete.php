<?php  include '../template/header.php'?>
<?php include '../../controller/departamento/view.php' ?>
<section class="content">
<div class="row">
        <div class="col-12 text-center">
            <p class="lead"><H3>Información del Departamento</H3></p>

            <table class="table table-dark">
                <?php
            $row = $result->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <th scope="row">Código</th>
                        <td><?php echo $row['codigo_dep']?></td>
                    </tr>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php  echo $row['id_dep']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['nombre_dep']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



        <form action="../../controller/departamento/delete.php" method="post">
            <input type="hidden" name="codigo_dep" value=" <?php echo $row['codigo_dep'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
</section>
<?php  include '../template/footer.php'?>