<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM docentes";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['codigo_doc'])){

        include '../../model/conectar.php';

    $id = $_GET['codigo_doc'];
    $sql = "SELECT d.codigo_doc, d.id_doc, d.cedula_doc, d.nombre_doc, d.apellido_doc, d.titulo_doc, cap.nombre_capa, car.nombre_car FROM docentes d, capacitacion cap, carrera car
            WHERE cap.codigo_capa = d.codigo_capa
            AND car.codigo_car = d.codigo_car
            WHERE d.codigo_doc = ".$id;
            $result = $conn->query($sql);
            include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['codigo_doc'])){
        $id = $_POST['codigo_doc'];
        $sql = "DELETE FROM docentes  WHERE codigo_doc =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/docentes/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>
