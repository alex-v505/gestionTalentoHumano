<?php  include '../template/header.php'?>
<?php include '../../controller/docentes_capacitados/view.php' ?>
<section class="content">
    <div>
        <H3>Eliminar </H3>
        <br><br>
        <div class="container">
            <?php
                $row = $result->fetch_assoc();
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $row['codigo_dc'];?></td>
                    </tr>
                
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php echo $row['nombre_doc'];?></td>
                    </tr>


                </tbody>
            </table>
        </div>
        
        <form action="../../controller/docentes_capacitados/delete.php" method="post">
            <input type="hidden" name="codigo_dc" value="<?php echo $row['codigo_dc'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
</section>
<?php  include '../template/footer.php'?>