<?php  include '../template/header.php'?>
<?php  include '../../controller/docentes_capacitados/index.php' ?>
<div class="row">
    
    <div class="col-12 px-5 mt-5 ">
    <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-4"><h2>Docentes capacitados Registrados</h2></div>
                        <div class="col-6"></div>
                        <div class="col-2"><a href="create.php"><button type="button" class="btn btn-success">Agregar</button></a></div>
                    </div>
                </div>
                <br>
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Docente</th>
                        <th scope="col" colspan="3">Opciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["codigo_dc"].'</th>';
                                echo '<th scope="row">'.$row["nombre_doc"].'</th>';
                                echo '<th scope="row">
                                <a class="text-success" href="update.php?codigo_dc='.$row["codigo_dc"].'"><i class="fa-solid fa-pen"></i></a>
                                <a href="view.php?codigo_dc='.$row["codigo_dc"].'"><i class="fa-solid fa-search"></i></a>
                                <a class="text-danger" href="delete.php?codigo_dc='.$row["codigo_dc"].'"><i class="fa-solid fa-trash-can"></i></a>
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