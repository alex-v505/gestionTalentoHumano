<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes/index.php' ?>
<div class="row">
    
    <div class="col-12 px-5 mt-5 ">
        
            <div class="card-header">
                <b>Docentes</b>
                <a href="create.php"><button type="button" class="btn btn-success"
                        style="margin-left:815px;">Agregar</button></a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">ID</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Capacitacion</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_doc"].'</th>';
                                echo'<td>'.$row["id_doc"].'</td>';
                                echo'<td>'.$row["cedula_doc"].'</td>';
                                echo'<td>'.$row["nombre_doc"].'</td>';
                                echo'<td>'.$row["apellido_doc"].'</td>';
                                echo'<td>'.$row["titulo_doc"].'</td>';
                                echo'<td>'.$row["nombre_car"].'</td>';
                                echo'<td>'.$row["nombre_capa"].'</td>';
                                echo '<th scope="row">
                                <a class="text-success" href="update.php?codigo_doc='.$row["codigo_doc"].'"><i class="fa-solid fa-pen"></i></a>
                                <a href="view.php?codigo_doc='.$row["codigo_doc"].'"><i class="fa-solid fa-search"></i></a>
                                <a class="text-danger" href="delete.php?codigo_doc='.$row["codigo_doc"].'"><i class="fa-solid fa-trash-can"></i></a>
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