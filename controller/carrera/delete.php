<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM carrera";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['codigo_car'])){

        include '../../model/conectar.php';

    $id = $_GET['codigo_car'];
    $sql = "SELECT * FROM carrera
            WHERE carrera.codigo_car = ".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['codigo_car'])){
        $id = $_POST['codigo_car'];
        $sql = "DELETE FROM carrera  WHERE codigo_car =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/carrera/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>