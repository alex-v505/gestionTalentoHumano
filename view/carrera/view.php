<?php  include '../template/header.php'?>
<?php include '../../controller/carrera/view.php' ?>
<section class="content">
    <div class="row">
        <div class="col-12 text-center ">
            <p class="lead"><H3>Información de la Carrera</H3></p>

            <table class="table table-dark">
                <?php
                $row = $result->fetch_assoc();
                ?>
                <tbody>
                    <tr>
                        <th scope="row">Código</th>
                        <td><?php echo $row['codigo_car']?></td>
                    </tr>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php  echo $row['id_car']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre Carrera</th>
                        <td><?php  echo $row['nombre_car']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre de la sede</th>
                        <td><?php  echo $row['nombre_sed']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre del departamento</th>
                        <td><?php  echo $row['nombre_dep']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <form action="../../controller/carrera/view.php" method="post">
            <input type="hidden" name="codigo_car" value="<?php echo $row['codigo_car'];?>">
        </form>
    </div>
</section>
<?php  include '../template/footer.php'?>