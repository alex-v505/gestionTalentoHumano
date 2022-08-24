<?php  include '../template/header.php'?>
<?php include '../../controller/sede/view.php' ?>
<section class="content">

<div class="row">
        <div class="col-12 text-center ">
            <p class="lead"><H3>Información de la  Sede</H3></p>

            <table class="table table-dark">
                <?php
            $row = $result->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $row['codigo_sed']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php  echo $row['nombre_sed']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Provincia</th>
                        <td><?php  echo $row['provincia_sed']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ciudad</th>
                        <td><?php  echo $row['ciudad_sed']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    
        <form action="../../controller/sede/delete.php" method="post">
            <input type="hidden" name="codigo_sed" value=" <?php echo $row['codigo_sed'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
</section>
<?php  include '../template/footer.php'?>