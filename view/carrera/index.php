<?php  include '../template/header.php'?>
<?php  include '../../controller/carrera/index.php' ?>
<div class="row">
    
    <div class="col-12 px-5 mt-5 ">
        
            
                <b>Carreras</b>
                <a href="create.php"><button type="button" class="btn btn-success"
                        style="margin-left:815px;">Agregar</button></a>
            
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sede</th>
                        <th scope="col">Departamento</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_car"].'</th>';
                                echo'<td>'.$row["id_car"].'</td>';
                                echo'<td>'.$row["nombre_car"].'</td>';
                                echo'<td>'.$row["nombre_sed"].'</td>';
                                echo'<td>'.$row["nombre_dep"].'</td>';
                                echo '<th scope="row">
                                <a class="text-success" href="update.php?codigo_car='.$row["codigo_car"].'"><i class="fa-solid fa-pen"></i></a>
                                <a href="view.php?codigo_car='.$row["codigo_car"].'"><i class="fa-solid fa-search"></i></a>
                                <a class="text-danger" href="delete.php?codigo_car='.$row["codigo_car"].'"><i class="fa-solid fa-trash-can"></i></a>
                                </th>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    
</div>
<script src="https://kit.fontawesome.com/94ae563b14.js" crossorigin="anonymous"></script>
<?php  include '../template/footer.php'?>